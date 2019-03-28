<?php
return [

    /*
    |--------------------------------------------------------------------------
    | Default Log Channel
    |--------------------------------------------------------------------------
    |
    | This option defines the default log channel that gets used when writing
    | messages to the logs. The name specified in this option should match
    | one of the channels defined in the "channels" configuration array.
    |
    */

    'default' => env('LOG_CHANNEL', 'stack'),

    /*
    |--------------------------------------------------------------------------
    | Log Channels
    |--------------------------------------------------------------------------
    |
    | Here you may configure the log channels for your application. Out of
    | the box, Laravel uses the Monolog PHP logging library. This gives
    | you a variety of powerful log handlers / formatters to utilize.
    |
    | Available Drivers: "single", "daily", "slack", "syslog",
    |                    "errorlog", "monolog",
    |                    "custom", "stack"
    |
    */

    'channels' => [
        'stack' => [
            'driver' => 'stack',
            'channels' => ['single'],
        ],
        'single' => [
            'driver' => 'single',
            'path' => storage_path('logs/lumen.log'),
            'level' => 'debug',
        ],
        'error'=>[
            'driver'=>'daily',
            'path' => storage_path('logs/error/error.log'),
            'level' => 'debug',
            'days'=>30
        ],
        'warm'=>[
            'driver'=>'daily',
            'path' => storage_path('logs/error/warm.log'),
            'level' => 'debug',
            'days'=>30
        ],
        'builds'=>[
            'driver'=>'daily',
            'path' => storage_path('logs/error/BuildsError.log'),
            'level' => 'debug',
            'days'=>30
        ],
        'NPC'=>[
            'driver'=>'daily',
            'path' => storage_path('logs/error/NpcError.log'),
            'level' => 'debug',
            'days'=>30
        ],
        'TaskUpdate'=>[
            'driver'=>'daily',
            'path' => storage_path('logs/error/TaskError.log'),
            'level' => 'debug',
            'days'=>30
        ],
        'LogToolError'=>[
            'driver'=>'daily',
            'path' => storage_path('logs/error/LogToolError.log'),
            'level' => 'debug',
            'days'=>30
        ]
    ],

];
