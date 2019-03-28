<?php
/**
 * Created by PhpStorm.
 * User: zhonggan
 * Date: 2019/2/16
 * Time: 下午3:11
 */

$tools = [
    /**
     * _id 物品Id
     * type 1 消耗品
     * getway 获取渠道 1：挖掘
     * sale 售出价格基础
     * buy 商店购买价格
     * canbuy 是否可以购买
     * text 描述
     * cancompound 是否可以合成
     * compound 合成道具 成分组合 [1，1，1]
     */
    1 => ['_id' => 1, 'name' => '小石块', 'type' => 1, 'getway' => 1, 'sale' => 2, 'buy' => 4, 'canbuy' => true, 'text' => '用于合成物品', 'cancompound' => false, 'compound' => [], 'saleway' => 1],
    2 => ['_id' => 2, 'name' => '石块', 'type' => 1, 'getway' => 1, 'sale' => 2, 'buy' => 4, 'canbuy' => true, 'text' => '用于合成物品', 'cancompound' => false, 'compound' => [], 'saleway' => 1],
    3 => ['_id' => 3, 'name' => '大石块', 'type' => 1, 'getway' => 1, 'sale' => 2, 'buy' => 4, 'canbuy' => true, 'text' => '用于合成物品', 'cancompound' => false, 'compound' => [], 'saleway' => 1],
    4 => ['_id' => 4, 'name' => '煤渣', 'type' => 1, 'getway' => 1, 'sale' => 2, 'buy' => 4, 'canbuy' => true, 'text' => '用于合成物品', 'cancompound' => false, 'compound' => [], 'saleway' => 1],
    5 => ['_id' => 5, 'name' => '煤', 'type' => 1, 'getway' => 1, 'sale' => 2, 'buy' => 4, 'canbuy' => true, 'text' => '用于合成物品', 'cancompound' => false, 'compound' => [], 'saleway' => 1],
    6 => ['_id' => 6, 'name' => '2煤', 'type' => 1, 'getway' => 1, 'sale' => 2, 'buy' => 4, 'canbuy' => true, 'text' => '用于合成物品', 'cancompound' => false, 'compound' => [], 'saleway' => 1],
    7 => ['_id' => 7, 'name' => '高纯度煤', 'type' => 1, 'getway' => 1, 'sale' => 2, 'buy' => 4, 'canbuy' => true, 'text' => '用于合成物品', 'cancompound' => false, 'compound' => [], 'saleway' => 1],
    8 => ['_id' => 8, 'name' => '精炼煤', 'type' => 1, 'getway' => 1, 'sale' => 2, 'buy' => 4, 'canbuy' => true, 'text' => '用于合成物品', 'cancompound' => false, 'compound' => [], 'saleway' => 1],
    9 => ['_id' => 9, 'name' => '高精煤', 'type' => 1, 'getway' => 1, 'sale' => 2, 'buy' => 4, 'canbuy' => true, 'text' => '用于合成物品', 'cancompound' => false, 'compound' => [], 'saleway' => 1],
    10 => ['_id' => 10, 'name' => '小木条', 'type' => 1, 'getway' => 1, 'sale' => 2, 'buy' => 4, 'canbuy' => true, 'text' => '用于合成物品', 'cancompound' => false, 'compound' => [], 'saleway' => 1],

    11 => ['_id' => 11, 'name' => '树枝', 'type' => 1, 'getway' => 1, 'sale' => 2, 'buy' => 4, 'canbuy' => true, 'text' => '用于合成物品', 'cancompound' => false, 'compound' => [], 'saleway' => 1],
    12 => ['_id' => 12, 'name' => '木棍', 'type' => 1, 'getway' => 1, 'sale' => 2, 'buy' => 4, 'canbuy' => true, 'text' => '用于合成物品', 'cancompound' => false, 'compound' => [], 'saleway' => 1],
    13 => ['_id' => 13, 'name' => '圆木', 'type' => 1, 'getway' => 1, 'sale' => 2, 'buy' => 4, 'canbuy' => true, 'text' => '用于合成物品', 'cancompound' => false, 'compound' => [], 'saleway' => 1],
    14 => ['_id' => 14, 'name' => '木板', 'type' => 1, 'getway' => 1, 'sale' => 2, 'buy' => 4, 'canbuy' => true, 'text' => '用于合成物品', 'cancompound' => false, 'compound' => [], 'saleway' => 1],
    15 => ['_id' => 15, 'name' => '木桩', 'type' => 1, 'getway' => 1, 'sale' => 2, 'buy' => 4, 'canbuy' => true, 'text' => '用于合成物品', 'cancompound' => false, 'compound' => [], 'saleway' => 1],
    16 => ['_id' => 16, 'name' => '碎木炭', 'type' => 1, 'getway' => 1, 'sale' => 2, 'buy' => 4, 'canbuy' => true, 'text' => '用于合成物品', 'cancompound' => false, 'compound' => [], 'saleway' => 1],
    17 => ['_id' => 17, 'name' => '木炭', 'type' => 1, 'getway' => 1, 'sale' => 2, 'buy' => 4, 'canbuy' => true, 'text' => '用于合成物品', 'cancompound' => false, 'compound' => [], 'saleway' => 1],
    18 => ['_id' => 18, 'name' => '优质木炭', 'type' => 1, 'getway' => 1, 'sale' => 2, 'buy' => 4, 'canbuy' => true, 'text' => '用于合成物品', 'cancompound' => false, 'compound' => [], 'saleway' => 1],
    19 => ['_id' => 19, 'name' => '精致木炭', 'type' => 1, 'getway' => 1, 'sale' => 2, 'buy' => 4, 'canbuy' => true, 'text' => '用于合成物品', 'cancompound' => false, 'compound' => [], 'saleway' => 1],
    20 => ['_id' => 20, 'name' => '碎铜渣', 'type' => 1, 'getway' => 1, 'sale' => 2, 'buy' => 4, 'canbuy' => true, 'text' => '用于合成物品', 'cancompound' => false, 'compound' => [], 'saleway' => 1],

    21 => ['_id' => 21, 'name' => '小铜块', 'type' => 1, 'getway' => 1, 'sale' => 2, 'buy' => 4, 'canbuy' => true, 'text' => '用于合成物品', 'cancompound' => false, 'compound' => [], 'saleway' => 1],
    22 => ['_id' => 22, 'name' => '铜块', 'type' => 1, 'getway' => 1, 'sale' => 2, 'buy' => 4, 'canbuy' => true, 'text' => '用于合成物品', 'cancompound' => false, 'compound' => [], 'saleway' => 1],
    23 => ['_id' => 23, 'name' => '优质铜块', 'type' => 1, 'getway' => 1, 'sale' => 2, 'buy' => 4, 'canbuy' => true, 'text' => '用于合成物品', 'cancompound' => false, 'compound' => [], 'saleway' => 1],
    24 => ['_id' => 24, 'name' => '铜母', 'type' => 1, 'getway' => 1, 'sale' => 2, 'buy' => 4, 'canbuy' => true, 'text' => '用于合成物品', 'cancompound' => false, 'compound' => [], 'saleway' => 1],
    25 => ['_id' => 25, 'name' => '优质铜块', 'type' => 1, 'getway' => 1, 'sale' => 2, 'buy' => 4, 'canbuy' => true, 'text' => '用于合成物品', 'cancompound' => false, 'compound' => [], 'saleway' => 1],
    26 => ['_id' => 26, 'name' => '铁渣', 'type' => 1, 'getway' => 1, 'sale' => 2, 'buy' => 4, 'canbuy' => true, 'text' => '用于合成物品', 'cancompound' => false, 'compound' => [], 'saleway' => 1],
    27 => ['_id' => 27, 'name' => '劣质铁矿', 'type' => 1, 'getway' => 1, 'sale' => 2, 'buy' => 4, 'canbuy' => true, 'text' => '用于合成物品', 'cancompound' => false, 'compound' => [], 'saleway' => 1],
    28 => ['_id' => 28, 'name' => '普通铁矿', 'type' => 1, 'getway' => 1, 'sale' => 2, 'buy' => 4, 'canbuy' => true, 'text' => '用于合成物品', 'cancompound' => false, 'compound' => [], 'saleway' => 1],
    29 => ['_id' => 29, 'name' => '2级铁矿', 'type' => 1, 'getway' => 1, 'sale' => 2, 'buy' => 4, 'canbuy' => true, 'text' => '用于合成物品', 'cancompound' => false, 'compound' => [], 'saleway' => 1],
    30 => ['_id' => 30, 'name' => '3级铁矿', 'type' => 1, 'getway' => 1, 'sale' => 2, 'buy' => 4, 'canbuy' => true, 'text' => '用于合成物品', 'cancompound' => false, 'compound' => [], 'saleway' => 1],

    31 => ['_id' => 31, 'name' => '精铁矿', 'type' => 1, 'getway' => 1, 'sale' => 2, 'buy' => 4, 'canbuy' => true, 'text' => '用于合成物品', 'cancompound' => false, 'compound' => [], 'saleway' => 1],
    32 => ['_id' => 32, 'name' => '黑铁矿', 'type' => 1, 'getway' => 1, 'sale' => 2, 'buy' => 4, 'canbuy' => true, 'text' => '用于合成物品', 'cancompound' => false, 'compound' => [], 'saleway' => 1],
    33 => ['_id' => 33, 'name' => '高纯铁矿', 'type' => 1, 'getway' => 1, 'sale' => 2, 'buy' => 4, 'canbuy' => true, 'text' => '用于合成物品', 'cancompound' => false, 'compound' => [], 'saleway' => 1],

    100 => ['_id' => 100, 'name' => '石锤', 'type' => 1, 'getway' => 2, 'sale' => 2, 'buy' => 4, 'canbuy' => false, 'text' => '用于开启地图已经修理战车', 'cancompound' => true, 'compound' => [1, 12], 'saleway' => -1],


];


return $tools;