<?php

namespace Apps\Tms\Packages\Jobs\Trips\Model;

use System\Base\BaseModel;

class AppsTmsJobsTrips extends BaseModel
{
    public $id;

    public $employee_id;

    public $start_date;

    public $end_date;

    public $start_location_id;

    public $load_location_id;

    public $unload_location_id;

    public $end_location_id;

    public $status;

    public $archived;

    public $dev_notes;

    public $documents;

    public $notes;
}