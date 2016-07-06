<?php

/**
 * 创建响应数据信息
 * @param string  $type     响应类型
 * @param boolean $result   响应状态
 * @param string  $msg      响应提示
 * @param array   $data     响应数据内容
 * @param string  $status   相应的状态码
 * @return string
 */
function create_response($type,$result,$msg='',$data=[],$status='200'){
    $response = array(
        'result' => boolval($result),
        'msg' => $msg,
        'data' => $data,
        'status' => $status,
        'type' => $type
    );
    return json_encode((Object)$response);
}