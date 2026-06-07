<?php

namespace Apps\Tms\Packages\Jobs\Trips\Install\Schema;

use Phalcon\Db\Column;
use Phalcon\Db\Index;

class JobsTrips
{
    public function columns()
    {
        return
        [
           'columns' => [
                new Column(
                    'id',
                    [
                        'type'          => Column::TYPE_INTEGER,
                        'notNull'       => true,
                        'autoIncrement' => true,
                        'primary'       => true,
                    ]
                ),
                new Column(
                    'voucher_no',
                    [
                        'type'          => Column::TYPE_INTEGER,
                        'notNull'       => true,
                    ]
                ),
                new Column(
                    'employee_id',
                    [
                        'type'          => Column::TYPE_INTEGER,
                        'notNull'       => false,
                    ]
                ),
                new Column(
                    'from_date',
                    [
                        'type'          => Column::TYPE_VARCHAR,
                        'size'          => 50,
                        'notNull'       => false,
                    ]
                ),
                new Column(
                    'to_date',
                    [
                        'type'          => Column::TYPE_VARCHAR,
                        'size'          => 50,
                        'notNull'       => false,
                    ]
                ),
                new Column(
                    'route',
                    [
                        'type'          => Column::TYPE_JSON,
                        'notNull'       => false,
                    ]
                ),
                new Column(
                    'start_odo_reading',
                    [
                        'type'          => Column::TYPE_FLOAT,
                        'notNull'       => false,
                    ]
                ),
                new Column(
                    'load_odo_reading',
                    [
                        'type'          => Column::TYPE_FLOAT,
                        'notNull'       => false,
                    ]
                ),
                new Column(
                    'load_location_id',
                    [
                        'type'          => Column::TYPE_INTEGER,
                        'notNull'       => false,
                    ]
                ),
                new Column(
                    'load_location_in_time',
                    [
                        'type'          => Column::TYPE_VARCHAR,
                        'size'          => 30,
                        'notNull'       => false,
                    ]
                ),
                new Column(
                    'load_location_out_time',
                    [
                        'type'          => Column::TYPE_VARCHAR,
                        'size'          => 30,
                        'notNull'       => false,
                    ]
                ),
                new Column(
                    'load_quantity',
                    [
                        'type'          => Column::TYPE_FLOAT,
                        'notNull'       => false,
                    ]
                ),
                new Column(
                    'load_notes',
                    [
                        'type'          => Column::TYPE_VARCHAR,
                        'size'          => 2048,
                        'notNull'       => false,
                    ]
                ),
                new Column(
                    'unload_location_id',
                    [
                        'type'          => Column::TYPE_INTEGER,
                        'notNull'       => false,
                    ]
                ),
                new Column(
                    'unload_location_in_time',
                    [
                        'type'          => Column::TYPE_VARCHAR,
                        'size'          => 30,
                        'notNull'       => false,
                    ]
                ),
                new Column(
                    'unload_location_out_time',
                    [
                        'type'          => Column::TYPE_VARCHAR,
                        'size'          => 30,
                        'notNull'       => false,
                    ]
                ),
                new Column(
                    'unload_odo_reading',
                    [
                        'type'          => Column::TYPE_FLOAT,
                        'notNull'       => false,
                    ]
                ),
                new Column(
                    'unload_notes',
                    [
                        'type'          => Column::TYPE_VARCHAR,
                        'size'          => 2048,
                        'notNull'       => false,
                    ]
                ),
                new Column(
                    'unload_quantity',
                    [
                        'type'          => Column::TYPE_FLOAT,
                        'notNull'       => false,
                    ]
                ),
                new Column(
                    'wastage',
                    [
                        'type'          => Column::TYPE_FLOAT,
                        'notNull'       => false,
                    ]
                ),
                new Column(
                    'end_odo_reading',
                    [
                        'type'          => Column::TYPE_FLOAT,
                        'notNull'       => false,
                    ]
                ),
                new Column(
                    'dev_notes',
                    [
                        'type'          => Column::TYPE_VARCHAR,
                        'size'          => 2048,
                        'notNull'       => false,
                    ]
                ),
                new Column(
                    'trip_notes',
                    [
                        'type'          => Column::TYPE_VARCHAR,
                        'size'          => 2048,
                        'notNull'       => false,
                    ]
                ),
            ]
        ];
    }
}