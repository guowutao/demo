<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>aha</title>
    <link rel="stylesheet" type="text/css" href="/css/app.css">
    <link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/css/adminlte.css">
    <link rel="stylesheet" type="text/css" href="/css/adminlte-skin-blue.min.css">
    <!-- <block name="css"></block> -->
    @yield('style')
</head>
<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        <!-- <include file="Public/header,Public/left" /> -->
        @include('layout._header')
        @include('layout._left')
        <div class="content-wrapper">
            <section class="content-header">
                <!-- <block name="title"></block> -->
                @yield('title')
            </section>
            <section class="content">
                <!-- <block name="content"></block> -->
                @yield('content')
            </section>
        </div>
    </div>
    <script type="text/javascript" src="/js/app.js"></script>
    <!-- <script type="text/javascript" src="__PUBLIC__/Common/js/slimscroll.min.js"></script> -->
    <script type="text/javascript" src="/js/adminlte.min.js"></script>
    <script type="text/javascript">
        $(function () {
            var pathname = window.location.pathname;
            $('ul.treeview-menu>li').find('a[href="' + pathname + '"]').closest('li').addClass('active');  //二级链接高亮
            $('ul.treeview-menu>li').find('a[href="' + pathname + '"]').closest('li.treeview').addClass('active');  //一级栏目[含二级链接]高亮
            $(".sidebar-menu>li").find('a[href="' + pathname + '"]').closest('li').addClass('active'); //一级栏目[不含二级链接]高亮
        }); 
    </script>
    <!-- <block name="js"></block> -->
    @yield('script')
</body>
</html>