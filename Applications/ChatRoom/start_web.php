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
Autoloader::setRootPath(__DIR__);

$web = new  WebServer("http://0.0.0.0:55155");
$web->count = 4;
$web->addRoot('localhost',__DIR__.'/web');

if(!defined('GLOBAL_START')){
    Worker::runAll();
}