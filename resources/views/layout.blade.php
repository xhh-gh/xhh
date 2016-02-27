<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <title>xhh学习网</title>
    <meta charset="utf-8"/>
    <meta name="keywords" content="为了兴趣而学习的网站--power by laravcel"/>
    <meta name="description" content="学习前端、php、linux等技术的网站--power by laravcel" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/layout.css">
    <link href="images/xhh.png" rel="shortcut icon"/>
    <link rel="stylesheet" href="css/tool.css">
    <script src="js/jquery-2.1.4.min.js" style="text/javascript"></script>
    <script src="js/bootstrap.js" style="text/javascript"></script>
    @yield('head')
</head>
<body id="body">
@yield('header')
<nav class="navbar navbar-default" role="navigation">
    <div class="container">
            <div class="row">
                <nav class=" navbar navbar-default navbar-fixed-top">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                                data-target="#example-navbar-collapse">
                            <span class="sr-only">切换导航</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="{{url('/')}}"><img src="images/logo.png" width="200" height="50" class="mt-15"></a>
                    </div>
                    <div class="collapse navbar-collapse " id="example-navbar-collapse">
                        <ul class="nav navbar-nav" id="NAV">
                            <li role="presentation"><a href="{{url('PHP')}}" title="PHP学习" target="_blank">PHP</a></li>
                            <li role="presentation"><a href="{{url('GIT')}}" title="Git使用方法" target="_blank">Git</a></li>
                            <li role="presentation"><a href="{{url('SQL')}}" title="数据库学习" target="_blank">Redis</a></li>
                            <li role="presentation"><a href="{{url('PYTON')}}"  title="Python学习" target="_blank">Python</a></li>
                            <li role="presentation"><a href="{{url('LINUX')}}" title="Linux学习" target="_blank">Linux</a></li>
                        </ul>
                        {{--<div class="nav-right">
                            <input type="text" name="search-for-result" class="form-control search-input"/>
                        </div>--}}
                    </div>
                </nav>
            </div>
    </div>
</nav>
<div class="container">
    @yield('content')
</div>
@yield('footer')
</body>
</html>