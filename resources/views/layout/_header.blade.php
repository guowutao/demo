<header class="main-header">
    <a href="#" class="logo">
        <span class="logo-mini"><b>T</b></span>
        <span class="logo-lg"><b>Tejet</b></span>
    </a>
    <nav class="navbar navbar-static-top" role="navigation">
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <li class="dropdown notifications-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-bell-o"></i>
                        <span class="label label-warning">1</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">1个新通知</li>
                        <li>
                            <ul class="menu">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-user text-aqua"></i> {$Think.session.name},欢迎登录
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="footer"><a href="#">查看全部</a></li>
                    </ul>
                </li>
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <!-- <img src="{$_SESSION['avatar']}" class="user-image" alt="User Image"> -->
                        <i class="fa fa-user"></i>
                        <span class="hidden-xs">{$Think.session.name}</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="user-header">
                            <!-- <img src="{$_SESSION['avatar']}" class="img-circle" alt="User Image"> -->
                            <p>{$Think.session.name}
                                <small>
                                    <span style="margin-right:5px;">
                                        {$Think.session.department}
                                    </span>{$Think.session.position}
                                </small>
                            </p>
                        </li>
                        <li class="user-body">
                            <div class="row">
                                <div class="col-xs-6 text-center">
                                    <a>关注同事</a>
                                </div>
                                <div class="col-xs-6 text-center">
                                    <a>关注项目</a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-6 text-center">
                                    <a id="follower_count" href="#">0</a>
                                </div>
                                <div class="col-xs-6 text-center">
                                    <a href="#">0</a>
                                </div>
                            </div>
                        </li>
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="__MODULE__/User/profile" class="btn btn-default btn-flat">个人中心</a>
                            </div>
                            <div class="pull-right">
                                <a href="__MODULE__/Login/logout" class="btn btn-default btn-flat">退出</a>
                            </div>
                        </li>
                    </ul>
                </li>
                <li>
                    <a data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                </li>
            </ul>
        </div>
    </nav>
</header>