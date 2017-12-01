<?php
/**
 *  ThinkWorker - THINK AND WORK FAST
 *  Copyright (c) 2017 http://thinkworker.cn All Rights Reserved.
 *  Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
 *  Author: Dizy <derzart@gmail.com>
 */

return [

    /**
     *  Workerman Engine Settings
     */
    'worker_engine'=>[
        'listen_ip' => '0.0.0.0',
        'listen_port' => 80,
        'name' => 'ThinkWorker',
        'count' => 4,
        'ssl' => false,
        'ssl_local_cert'  => '/etc/nginx/conf.d/ssl/server.pem',
        'ssl_local_pk'    => '/etc/nginx/conf.d/ssl/server.key',
        'ssl_verify_peer' => false
    ],

    /**
     *  ThinkWorker Basic Settings
     */
    'think' => [
        'debug' => true,
        'default_return_type' => 'html',
        'routing_cache_default' => true,
        'default_filter' => 'stripslashes, htmlspecialchars',

        'app_namespace' => 'app',
        'deny_app_list' => ['common'],
        'default_app' => 'index',
        'default_controller' => 'Index',
        'default_action' => 'index',
        'default_lang' => 'zh-cn',
        'var_lang' => '_lang',
    ],

    /**
     *  Template Engine Settings
     */
    'template' => [
        'engine' => 'smarty',
        'tpl_ext' => 'html',
        'caching' => true,
        'cache_lifetime' => 0,
        'debugging' => true,
        'debugging_ctrl' => 'URL',
    ],

    /**
     *  Session Settings
     */
    'session' => [
        'auto_start' => true,
        'prefix' => 'think_'
    ],

    /**
     *  Cookie Settings
     */
    'cookie' => [
        'prefix' => '',
        'expire' => 0,
        'path' => '/',
        'domain' => '',
        'secure' => false,
        'httponly' => ''
    ]
];