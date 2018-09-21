<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>主页 | 登录</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/adminlte.css">
</head>
<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <b>T</b>ejet
        </div>
        <div class="login-box-body">
            <p class="login-box-msg">- 账号登录 -</p>

            <form action="__MODULE__/Login/checkLogin" method="post">
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" placeholder="工号" name="number">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" placeholder="密码" name="password">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-xs-8">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember"> 记住
                            </label>
                        </div>
                    </div>
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">登录</button>
                    </div>
                </div>
            </form>

            <div class="social-auth-links text-center">
                <p>- 使用以下方式登录 -</p>
                <a href="#" class="btn btn-block btn-social btn-wechat btn-flat"><i class="fa fa-wechat"></i>微信登录</a>
            </div>

            <a href="#">忘记密码？</a><br>
        </div>
    </div>
</body>
</html>
