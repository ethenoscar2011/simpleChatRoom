// Let the library know where WebSocketMain.swf is:
WEB_SOCKET_SWF_LOCATION = "/swf/WebSocketMain.swf";
WEB_SOCKET_DEBUG = true;
var ws ;

$(function(){
    $("#login-form").submit(function(e){
        e.preventDefault();
        $("#notice").fadeOut();
        $("#notice").removeClass('alert-success').addClass('alert-danger')
        connect();
        return false;
    });
});


function connect(){
    ws = new WebSocket(window.SOCKET_INFO.URL);
    ws.onopen = onopen;
    ws.onmessage = onmessage;
    ws.onclose = onclose;
    ws.onerror = onerror;
}

function onopen(){
    var username = $("#inputEmail").val();
    var password = $("#inputPassword").val();
    var login_data = {
        type : 'login',
        username : username,
        password : password
    };
    ws.send(JSON.stringify(login_data));
}

function onmessage(e){
    var data = $.parseJSON(e.data);
    if(data.result){
        //登录成功
        $("#notice").html('登录成功,进入聊天室中...');
        $("#notice").removeClass('alert-danger').addClass('alert-success').fadeIn();
    }else{
        //登录失败
        $("#notice").html(data.msg).fadeIn();
    }
}

function onclose(){
    console.log('连接关闭');
}

function onerror(e){
    $("#notice").html(e.data).fadeIn();
}
