<?php
$buildConfig=[];

$buildConfig['configLand']=[
  1=>['sale'=>0,'toolToUnlock'=>[]],
  2=>['sale'=>0,'toolToUnlock'=>[100=>1,1=>2]],
  3=>['sale'=>0,'toolToUnlock'=>[]],
  4=>['sale'=>40,'toolToUnlock'=>[]],
  5=>['sale'=>0,'toolToUnlock'=>[]],
  6=>['sale'=>0,'toolToUnlock'=>[]],
  7=>['sale'=>0,'toolToUnlock'=>[]],
  8=>['sale'=>0,'toolToUnlock'=>[]],
  9=>['sale'=>0,'toolToUnlock'=>[]],
  10=>['sale'=>0,'toolToUnlock'=>[]],
  11=>['sale'=>0,'toolToUnlock'=>[]],
  12=>['sale'=>0,'toolToUnlock'=>[]],
  13=>['sale'=>0,'toolToUnlock'=>[]],
  14=>['sale'=>0,'toolToUnlock'=>[]],
  15=>['sale'=>0,'toolToUnlock'=>[]],
];

$buildConfig['B1Builds']=[
    /**
     * buildid ID
     * maxdepth 最大深度
     * sale 需要金币
     * tool 需要消耗道具
     * time 挖掘产出时间
     * maxget 最大库存道具数
     * probability 单位时间内 挖到概率
     */
    1=>['buildid'=>1,'maxdepth'=>100,'sale'=>10,'tools'=>[],'time'=>300,'maxget'=>30,'probability'=>40,"name"=>'初级矿机','text'=>'一款老式挖矿建筑，凑合着用吧'],
    2=>['buildid'=>2,'maxdepth'=>200,'sale'=>10,'tools'=>[],'time'=>300,'maxget'=>30,'probability'=>40,"name"=>'简单矿机','text'=>'稍微好点的工具，凑合着用吧']

];


$buildConfig['B1DepthYelids']=[
  50=>[1,1,2],
  100=>[100]

];





return $buildConfig;