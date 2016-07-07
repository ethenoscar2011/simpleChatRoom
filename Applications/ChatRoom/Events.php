<?php
/**
 * This file is part of workerman.
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the MIT-LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @author walkor<walkor@workerman.net>
 * @copyright walkor<walkor@workerman.net>
 * @link http://www.workerman.net/
 * @license http://www.opensource.org/licenses/mit-license.php MIT License
 */

/**
 * 用于检测业务代码死循环或者长时间阻塞等问题
 * 如果发现业务卡死，可以将下面declare打开（去掉//注释），并执行php start.php reload
 * 然后观察一段时间workerman.log看是否有process_timeout异常
 */
//declare(ticks=1);

use \GatewayWorker\Lib\Gateway;
require_once 'funcs/functions.php';
require_once __DIR__.'/../../GlobalData/Client.php';
require_once 'Config/constants.php';
use GlobalData\Client;
use \GatewayWorker\Lib\Db;



/**
 * 主逻辑
 * 主要是处理 onConnect onMessage onClose 三个方法
 * onConnect 和 onClose 如果不需要可以不用实现并删除
 */
class Events
{
    /**
     * 当客户端连接时触发
     * 如果业务不需此回调可以删除onConnect
     *
     * @param int $client_id 连接id
     */
    public static function onConnect($client_id) {
        //判断是否登录，登录了的才进行推送
//        echo $client_id;
//        // 向当前client_id发送数据
//        Gateway::sendToClient($client_id, "Hello $client_id");
//        // 向所有人发送
//        Gateway::sendToAll("$client_id login");
    }

    /**
     * 当客户端发来消息时触发
     * @param int $client_id 连接id
     * @param mixed $message 具体消息
     */
    public static function onMessage($client_id, $message) {

        //解析客户端数据
        $message_data = json_decode($message,true);
        if(!$message_data){
            return ;
        }

        //根据类型不同执行不同的业务逻辑
        switch ($message_data['type']){
            //客户端回应服务器的心跳
            case 'pong':
                return;
            //客户端进行登录操作
            case 'login':
                $username = $message_data['username'];
                $password = $message_data['password'];
                if($username == '463232672@qq.com' && $password == '123456'){
                    $uid = 1;
                    Gateway::sendToCurrentClient(create_response('login',true,'登录成功'));
                    //绑定客户端和用户的id,方便后期通过用户id发送推送消息
                    Gateway::bindUid($client_id,$uid);
                    //记住登录状态
                    $global = new Client(GLOBALDATA_CLIENT);
                    $user_session = array(
                        'username' => $username,
                        'id' => $uid,
                        'sex' => '男'
                    );
                    $global->$client_id = $user_session;
                    var_export($global->$client_id);
                }else{
                    Gateway::sendToCurrentClient(create_response('login',false,'账户名或者密码错误'));
                }
                return;
            //群发数据
            case 'saytoall':
                return;
            //发数据到群组
            case 'saytogroup':
                return;
            //单对单聊天
            case 'saytoone':
                return;
            //客户端进行退出操作
            case 'logout':
                return;
            //获取聊天记录
            case 'getchathistory':
                return;
        }

    }

    /**
     * 当用户断开连接时触发
     * @param int $client_id 连接id
     */
    public static function onClose($client_id) {
        // 向所有人发送
//        GateWay::sendToAll("$client_id logout");
    }
}
