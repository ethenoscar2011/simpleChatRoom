<?php

require_once __DIR__ . '/../../Workerman/Autoloader.php';
require_once __DIR__.'/../../GlobalData/Server.php';
require_once 'Config/constants.php';

use Workerman\Worker;
use GlobalData\Server;

$worker = new Server(GLOBALDATA_SERVER,GLOBALDATA_PORT);

if(!defined('GLOBAL_START')){
    Worker::runAll();
}