<?php

namespace Apps\Tms\Packages\Jobs\Trips;

use System\Base\BasePackage;

class JobsTrips extends BasePackage
{
    //protected $modelToUse = ::class;

    protected $packageName = 'jobstrips';

    public $jobstrips;

    public function getJobsTripsById($id)
    {
        $jobstrips = $this->getById($id);

        if ($jobstrips) {
            //
            $this->addResponse('Success');

            return;
        }

        $this->addResponse('Error', 1);
    }

    public function addJobsTrips($data)
    {
        //
    }

    public function updateJobsTrips($data)
    {
        $jobstrips = $this->getById($id);

        if ($jobstrips) {
            //
            $this->addResponse('Success');

            return;
        }

        $this->addResponse('Error', 1);
    }

    public function removeJobsTrips($data)
    {
        $jobstrips = $this->getById($id);

        if ($jobstrips) {
            //
            $this->addResponse('Success');

            return;
        }

        $this->addResponse('Error', 1);
    }
}