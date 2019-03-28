<?php


/**
 * 接口暴露文件
 */

$router->group(['prefix' => 'gameGlobalRouter/v1/'], function ($router) {
    $router->get("jscode2session", "GameApiController@jscode2session");
    $router->post("HeartShake", "GameHeartShake@heartShake");
});


