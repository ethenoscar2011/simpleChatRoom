<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <meta name="description" content="小龟龟畅聊室，基于GatewayWorker进行设计的一个简单聊天系统">
    <meta name="author" content="Ethenoscar">
    <link rel="icon" href="./images/favicon.ico">

    <title>欢迎登录小龟龟畅聊室</title>

    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./css/signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="./js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="./js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="./js/html5shiv.min.js"></script>
    <script src="./js/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<div class="container">

    <form class="form-signin" id="login-form">
        <h2 class="form-signin-heading">龟友登录</h2>
        <div class="div-input">
            <label for="inputEmail" class="sr-only">邮箱地址</label>
            <input type="email" id="inputEmail" class="form-control" placeholder="请输入您的邮箱" required autofocus>
        </div>
        <div class="div-input">
            <label for="inputPassword" class="sr-only">密码</label>
            <input type="password" id="inputPassword" class="form-control" placeholder="请输入您的密码" required>
        </div>
        <div class="alert alert-danger " style="display:none" id="notice" role="alert"></div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">登录</button>
    </form>

</div> <!-- /container -->


<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="./js/ie10-viewport-bug-workaround.js"></script>
<script src="./js/jquery.min.js"></script>
<script src="./js/jquery.form.js"></script>
<script src="./js/config.js"></script>
<script src="./js/swfobject.js"></script>
<script src="./js/web_socket.js"></script>
<script src="./js/login.js"></script>
</body>
</html>
