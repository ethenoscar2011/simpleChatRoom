<!DOCTYPE html>
<html lang="zh-CN"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="./images/favicon.ico">

    <title>小龟龟畅聊室-Hign起来</title>

    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">

    <style>
        .navbar-inverse .navbar-brand {
            color: #D9FFFF;
        }
        .navbar-inverse .navbar-nav>li>a {
            color: #D9FFFF;
        }

    </style>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="./js/html5shiv.min.js"></script>
    <script src="./js/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid navbar-inverse">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="./" style="font-weight: bold;">小龟龟畅聊室</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" id="sysmsg" data-toggle="dropdown">
                        <i class="glyphicon glyphicon-bell"></i> 系统消息(<label class="text-danger">2</label>)
                    </a>
                    <ul class="dropdown-menu " aria-labelledby="sysmsg">
                        <li>
                            <a href="#">
                                13:30:32 新用户`sb`加入系统
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                13:45:34 新用户`nimab0`加入系统
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" id="friendsmsg" data-toggle="dropdown">
                        <i class="glyphicon glyphicon-comment"></i> 好友消息(<label class="text-danger">4</label>)
                    </a>
                    <ul class="dropdown-menu " aria-labelledby="friendsmsg">
                        <li>
                            <a href="#">
                                <img src="./images/favicon.ico" width="25" height="25" style="border-radius: 50%"/> 今晚约吗...
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="./images/favicon.ico" width="25" height="25" style="border-radius: 50%"/> 明天打球...
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" id="setting" data-toggle="dropdown">
                        <img src="./images/favicon.ico" width="25" height="25" style="border-radius: 50%"/>
                        管理员 <i class="glyphicon glyphicon-chevron-down"></i>
                    </a>
                    <ul class="dropdown-menu " aria-labelledby="setting">
                        <li>
                            <a href="#">
                                <i class="glyphicon glyphicon-user"></i> 我的账户
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="glyphicon glyphicon-cog"></i> 账户设置
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="glyphicon glyphicon-share"></i> 退出
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>


<script src="./js/jquery.min.js"></script>
<script src="./js/bootstrap.min.js"></script>
</body>
</html>