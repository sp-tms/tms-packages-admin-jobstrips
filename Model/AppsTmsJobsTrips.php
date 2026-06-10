<?php

namespace Apps\Tms\Packages\Jobs\Trips\Model;

use System\Base\BaseModel;

class AppsTmsJobsTrips extends BaseModel
{
    public $id;

    public $voucher_no;

    public $financial_year;

    public $employee_id;

    public $from_date;

    public $to_date;

    public $route;

    public $start_odo_reading;

    public $load_odo_reading;

    public $load_location_id;

    public $load_location_in_time;

    public $load_location_out_time;

    public $load_quantity;

    public $load_notes;

    public $unload_location_id;

    public $unload_location_in_time;

    public $unload_location_out_time;

    public $unload_odo_reading;

    public $unload_notes;

    public $unload_quantity;

    public $wastage;

    public $end_odo_reading;

    public $dev_notes;

    public $trip_notes;
}