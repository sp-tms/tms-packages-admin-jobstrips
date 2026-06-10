<?php

namespace Apps\Tms\Packages\Jobs\Trips;

use Apps\Tms\Packages\Jobs\Trips\Model\AppsTmsJobsTrips;
use System\Base\BasePackage;

class JobsTrips extends BasePackage
{
    protected $modelToUse = AppsTmsJobsTrips::class;

    protected $packageName = 'trips';

    public $trips;

    public function init()
    {
        parent::init();

        return $this;
    }

    public function getNextVoucherNumber($financialYear)
    {
        if ($this->config->databasetype === 'db') {
            $params =
                [
                    'conditions'    => 'financial_year = :financialYear:',
                    'bind'          =>
                        [
                            'financialYear'         => $financialYear
                        ]
                ];
        } else {
            $params = ['conditions' => ['financial_year', '=', $financialYear]];
        }

        $vouchers = $this->getByParams($params);

        $voucherNumbers = [];

        if ($vouchers && count($vouchers) > 0) {
            foreach ($vouchers as $voucher) {
                if ($voucher['voucher_no'] > 10000) {//Taking into note that while importing we create own voucher numbers using timestamp.
                    continue;
                }
                array_push($voucherNumbers, (int) $voucher['voucher_no']);
            }

            if (count($voucherNumbers) > 0) {
                asort($voucherNumbers);

                $nextVoucherNumber = $this->helper->last($voucherNumbers) + 1;

                $this->addResponse('Generated next voucher #', 0, ['nextVoucherNumber' => $nextVoucherNumber]);

                return $nextVoucherNumber;
            }
        }

        $nextVoucherNumber = 1;

        $this->addResponse('Generated next voucher #', 0, ['nextVoucherNumber' => $nextVoucherNumber]);

        return $nextVoucherNumber;
    }

    public function checkVoucher($data)
    {
        if ($this->config->databasetype === 'db') {
            $params =
                [
                    'conditions'    => 'financial_year = :financialYear: AND voucher_no = :voucherNo:',
                    'bind'          =>
                        [
                            'financialYear'         => $data['financial_year'],
                            'voucherNo'             => $data['voucher_no']
                        ]
                ];
        } else {
            $params = ['conditions' =>
                [
                    ['financial_year', '=', $data['financial_year']],
                    ['voucher_no', '=', (int) $data['voucher_no']]
                ]
            ];
        }

        $vouchers = $this->getByParams($params);

        if ($vouchers && count($vouchers) === 1) {
            $this->addResponse('Voucher # ' . $data['voucher_no'] . ' already exists!', 1);

            return false;
        }

        $nextVoucherNumber = $this->getNextVoucherNumber($data['financial_year']);

        if ($nextVoucherNumber) {
            if ((int) $data['voucher_no'] > $nextVoucherNumber) {
                $this->addResponse('Voucher ' . $data['voucher_no'] . ' is valid', 2, ['nextVoucherNumber' => $nextVoucherNumber]);

                return true;
            }
        }

        $this->addResponse('Voucher # ' . $data['voucher_no'] . ' is valid');
    }
}