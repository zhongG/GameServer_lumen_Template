<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/10/12 0012
 * Time: 09:17
 */

namespace App\Console\Commands;

use App\ThirdParty\DbManager\DbUtilsMongo;
use App\ThirdParty\DbManager\DbUtilsRedis;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redis;



class TaskUpdateMongo extends Command
{
    protected $signature = 'TaskUpdateMongo';

    protected $description = 'Task';

    public function handle()
    {

        $this->updateRedisToMongoFromRedisTask();
    }

    /**
     * 将redis中人物更新到服务器中去
     */
    private function updateRedisToMongoFromRedisTask()
    {

//
//        $nameOfTaskList = DbUtilsRedis::$TaskUpdateMongoHash;
//        $nameTokeOfTask = time();
//        $nameOfTaskTokenName = 'task:UpdateMongoInTask';
//        $hadWorked = Redis::exists($nameOfTaskTokenName);
//        $DebugTimes = 0;
//        $DebugTimesKey = 'DEBUG_TASKTIMES';
//        if (!Redis::exists($DebugTimesKey)) {
//            $DebugTimes = 0;
//        } else {
//            $DebugTimes = Redis::get($DebugTimesKey);
//        }
//        Redis::set($DebugTimesKey, $DebugTimes + 1);
//
//        if ($hadWorked) {
//            Redis::set($DebugTimesKey . 'LastCut', $DebugTimes + 1);
//            var_dump('截断');
//            return;
//        }
//        /**
//         * 更换Hash 这一段 后期可以修改注释
//         */
//        Redis::set($nameOfTaskTokenName, $nameTokeOfTask);
//
//        try {
//            $allUids = Redis::smembers(DbUtilsRedis::$TaskUpdateMongoUIDS);
//            Redis::del(DbUtilsRedis::$TaskUpdateMongoUIDS);
//            $allItems = Redis::hgetall(DbUtilsRedis::$TaskUpdateMongoHash);
//            Redis::del(DbUtilsRedis::$TaskUpdateMongoHash);
//            foreach ($allItems as $uid => $updateItemValue) {
//                $formartArray = json_decode($updateItemValue, true);
//                if ($formartArray && is_array($formartArray) && isset($formartArray['tasks'])) {
//                    $allTask = $formartArray['tasks'];
//                    $taskUpdateHad = false;
//                    $taskUpdateGroups = [];
//                    foreach ($allTask as $updateKeyValueGroup) {
//                        if (isset($updateKeyValueGroup['key']) && isset($updateKeyValueGroup['value'])) {
//                            $taskUpdateHad = true;
//                            $taskUpdateGroups[(string)$updateKeyValueGroup['key']] = $updateKeyValueGroup['value'];
//                        }
//                    }
//                    if ($taskUpdateHad) {
//                        DbUtilsMongo::updateMongoUserMessages($uid, $taskUpdateGroups);
//                    }
//                }
//            }
//        } catch (\Exception $e) {
//            Log::channel('TaskUpdate')->error(json_encode($e->getMessage()));
//        }
//        Redis::del($nameOfTaskTokenName);
    }


}