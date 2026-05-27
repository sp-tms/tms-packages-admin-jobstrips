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
}