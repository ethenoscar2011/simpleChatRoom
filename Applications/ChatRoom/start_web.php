<?php
/**
 * This file is part of ChatRoom
 *
 * @author Ethenoscar<463232672@qq.com>
 * @copyright Ethenoscar<463232672@qq.com>
 * @link
 * @license
 */

use \Workerman\Worker;
use \Workerman\WebServer;
use \GatewayWorker\Gateway;
use \GatewayWorker\BusinessWorker;
use \Workerman\Autoloader;

require_once __DIR__.'/../../Workerman/Autoloader.php';
require_once 'Config/constants.php';
Autoloader::setRootPath(__DIR__);

$web = new  WebServer(WEBSERVER_LINK);
$web->count = WEBSERVER_COUNT;
$web->addRoot('localhost',__DIR__.'/web');

if(!defined('GLOBAL_START')){
    Worker::runAll();
}