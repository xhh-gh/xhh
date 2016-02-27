@extends('layout')
@section('content')
    <div class="row">
        <div class="col-md-9">
            <header style="background:url('images/title.jpg') repeat scroll 0 0;padding: 30px 0;text-align: center;color:#fff;">
                <h1>为了WEB艺术家创造的免费资料网站</h1>
            </header>
        </div>
        <div class="col-md-3 visible-md visible-lg">
            <aside class="widget widget_search panel panel-default">
                <div class="panel-heading">
                    <h3 class="widget-title panel-title">全站搜索</h3>
                </div>
                <div class="panel-body">
                    <form action="#" class="search-form" method="get" role="search">
                        <div class="form-group">
                            <div class="input-group input-group-lg">
                                <input type="search" name="s" value="" class="search-field form-control">
                                <span class="input-group-btn"><button class="btn btn-default" type="submit"><span class="ipt-icon-search">搜索</span></button></span>
                            </div>
                        </div>
                    </form>
                </div>
            </aside>
            <aside class="widget widget_text panel panel-default">
                <div class="panel-heading">
                    <h3 class="widget-title panel-title">本站的宗旨</h3>
                </div>
                <div class="panel-body">
                    <p class="head">为了免费提供自己的学习资源，和督促自身学习的目的</p>
                    <address>
                        <strong>本人邮箱</strong><br>
                        <a href="mailto:#">qisonggao@163.com</a>
                    </address>
                </div>
            </aside>
            <aside class="widget widget_text panel panel-default">
                <div class="panel-heading">
                    <h3 class="widget-title panel-title">值得学习的网站</h3>
                </div>
                <div class="panel-body">
                    <p class="head">在做这次开发时，我本身不是设计，借鉴了不错的网站的页面等内容</p>
                    <address>
                        <strong>再次感谢以下网站</strong><br>
                        <a href="https://phphub.org/">phphub</a><br/>
                        <a href="http://www.golaravel.com/">laravel官网</a><br/>
                        <a href="http://laravelacademy.org/">laravel学院</a><br/>
                        <a href="http://www.bootcss.com/">bootstrap官网</a><br/>
                    </address>
                </div>
            </aside>
        </div>
    </div>
@stop