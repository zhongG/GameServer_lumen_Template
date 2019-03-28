<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use App\Console\Commands\TaskUpdateMongo;
use Laravel\Lumen\Console\Kernel as ConsoleKernel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;
class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
        \app\Console\Commands\TaskUpdateMongo::class
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->call(function () {
            $update['task_record'][]= ['_id' => 1, "status" =>1, 'finished' => 1];
            DB::table('users')->update($update);
        })->everyTenMinutes();
        $schedule->command(TaskUpdateMongo::class)->everyMinute();


    }
}
