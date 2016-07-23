<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html class="no-js" lang="">

<head>
    <!-- meta -->
    <meta charset="utf-8">
    <meta name="description" content="Flat, Clean, Responsive, admin template built with bootstrap 3">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">
    <!-- /meta -->

    <title>maimai wiki</title>

    <!-- page level plugin styles -->
    <link rel="stylesheet" href="/Public/asset/vendor/offline/theme.css">
    <link rel="stylesheet" href="/Public/asset/vendor/pace/theme.css">
    <link rel="stylesheet" href="/Public/asset/vendor/jvectormap/jquery-jvectormap-1.2.2.css">
    <link rel="stylesheet" href="/Public/asset/vendor/bxslider/jquery.bxslider.css">
    <!-- /page level plugin styles -->

    <!-- core styles -->
    <link rel="stylesheet" href="/Public/asset/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/Public/asset/css/font-awesome.min.css">
    <link rel="stylesheet" href="/Public/asset/css/animate.min.css">
    <!-- /core styles -->

    <!-- template styles -->
    <link rel="stylesheet" href="/Public/asset/css/skins/palette.1.css" id="skin">
    <link rel="stylesheet" href="/Public/asset/css/fonts/style.1.css" id="font">
    <link rel="stylesheet" href="/Public/asset/css/main.css">
    <link rel="stylesheet" href="/Public/asset/css/custom.css" id="custom">
    <!-- template styles -->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="/Public/asset/vendor/video-js/video-js.css">
</head>

<!-- body -->
<body>


<div class="app" data-sidebar="locked">
    <!-- top header -->


    <nav class="header navbar">
        <div class="brand orange" >
            <a href="/index.php/home/index" class="navbar-brand">
            <span class="heading-font">
                maimai<b>PiNK</b>
            </span>
            </a>
        </div>
        <div class="collapse navbar-collapse search-container" id="navbar-collapse">
            <ul id="nav-signin" class="nav navbar-nav navbar-right hide-when-signin show">
            </ul>
            <form class="navbar-form navbar-right navbar-search hidden-xs hidden-sm">
                <div class="form-group">
                <input type="text"  class="form-control words" id="words-md" placeholder="曲名或者罗马音..." >
                </div>
                <a class="btn btn-warning">
                    <span class="glyphicon glyphicon-search"></span>
                    <span class="hidden-xs hidden-sm" id="search" onclick="search('md')">搜索</span>
                </a>
        </form>
        </div>
    </nav>
    <!-- /top header -->

    <section class="layout">
        <!-- main content -->
        <section class="main-content">
            <!-- content wrapper -->
            <div class="content-wrap">
                <!-- nva占位区间 -->
                <div class="row">
                    <div class="col-md-12" style="margin-top: 60px">
                    <div id="show_level" style="display: none;"><?php echo ($show_level); ?></div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-xs-12 xs-topheading">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="input-group hidden-md hidden-lg">
                                    <div class="form-group container-center">
                                        <input type="text"  id= "words-xs" class="form-control words" placeholder="搜索罗马音或者曲名..." style="width:200px;">
                                        <a class="btn btn-warning">
                                            <span class="glyphicon glyphicon-search" onclick="search('xs')"></span>
                                        </a>
                                    </div>
                                </div><!-- /input-group -->
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-12 hidden-lg hidden-md type-selection" >
                                <!-- Single button -->

                                <div class="row">
                                    <div class="col-xs-4">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                选择类别 <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu">

                                                <li class="hidden-list"><a >显示全部</a></li>

                                                <li class="hidden-list"><a  >東方project</a></li>

                                                <li class="hidden-list"><a  >niconico & VOCALOID</a></li>

                                                <li class="hidden-list"> <a  >POPS & ANIME</a></li>

                                                <li class="hidden-list"> <a  >SEGA</a></li>

                                                <li class="hidden-list"> <a >GAME & VARIRTY</a></li>

                                                <li class="hidden-list"> <a  >ORIGINAL & JOYPOLIS</a></li>

                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-xs-6">
                                        <p style="margin-top: 9px; color: #0480be;"><u id="about-xs">有关这个wiki</u></p>
                                    </div>

                                    <div class="col-xs-6">
                                        <div class="btn-group show-on-hover ">
                                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">筛选等级
                                                <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li>
                                                    <a href="/index.php/home/index/index/level/9">9</a>
                                                </li>
                                                <li>
                                                    <a href="/index.php/home/index/index/level/10">10</a>
                                                </li>
                                                <li>
                                                    <a href="/index.php/home/index/index/level/11">11</a>
                                                </li>
                                                <li>
                                                    <a href="/index.php/home/index/index/level/12">12</a>
                                                </li>
                                                <li>
                                                    <a href="/index.php/home/index/index/">全部</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-6 hidden-xs" id="type-area">
                                <section class="panel">
                                    <header class="panel-heading">选择类别：

                                    </header>
                                    <div class="panel-body">
                                        <div class="demo-button list-buttons">
                                            <!-- Standard button 按照顺序list1~list6显示分类 -->
                                            <ul>

                                                <li class="hidden-list"><a  class="btn btn-default btn-rounded" name="head">显示全部</a></li>

                                                <li class="hidden-list"><a  class="btn btn-primary btn-rounded ">東方project</a></li>

                                                <li class="hidden-list"><a  class="btn btn-success btn-rounded">niconico & VOCALOID</a></li>

                                                <li class="hidden-list"> <a  class="btn btn-info btn-rounded" >POPS & ANIME</a></li>

                                                <li class="hidden-list"> <a  class="btn btn-warning btn-rounded" >SEGA</a></li>

                                                <li class="hidden-list"> <a  class="btn btn-danger btn-rounded">GAME & VARIRTY</a></li>

                                                <li class="hidden-list"> <a  class="btn btn-warning btn-rounded" >ORIGINAL & JOYPOLIS</a></li>

                                                <li><div class="btn-group btn-rounded show-on-hover ">
                                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">筛选等级（master）
                                                        <span class="caret"></span>
                                                    </button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li>
                                                            <a href="/index.php/home/index/index/level/9">9</a>
                                                        </li>
                                                        <li>
                                                            <a href="/index.php/home/index/index/level/10">10</a>
                                                        </li>
                                                        <li>
                                                            <a href="/index.php/home/index/index/level/11">11</a>
                                                        </li>
                                                        <li>
                                                            <a href="/index.php/home/index/index/level/12">12</a>
                                                        </li>
                                                        <li>
                                                            <a href="/index.php/home/index/index/">全部</a>
                                                        </li>
                                                    </ul>
                                                </div></li>

                                            </ul>
                                        </div>
                                    </div>
                                </section>
                            </div>
                            <div class="col-md-6 col-xs-12 hidden-xs" id="about">
                                <div class="panel panel-warning">
                                    <div class="panel panel-heading no-margin">About</div>
                                    <div class="panel-body">
                                        <p><i class="fa fa-circle text-primary mg-r-xs"></i>一个maimai的自制wiki,数据摘自fc2上maimai的数据</p>
                                        <p><i class="fa fa-circle text-primary mg-r-xs"></i>内容更新到pink（2016年4月）:)</p>
                                        <p><i class="fa fa-circle text-primary mg-r-xs"></i><a href="http://weibo.com/axer1226" style="color: #0480be" target="_blank">微博火石axer</a>有什么想添加的或者建议可以私信:)</p>
                                        <p><i class="fa fa-circle text-primary mg-r-xs"></i><a href="http://www.marisago.com" style="color: #0480be" target="_blank">顺便看手元的话youtube是最好啦，想上可以试试po主的小梯子，自动出墙也不是什么问题:)</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


                <div class="row" id="list-container">

                    <div class="col-md-8 container-center no-padding" id="fetch-list">

                    </div>

                    <div class="col-md-6 col-xs-12" id="col-list1">
                        <div class="row">
                            <div class="col-md-12 list-area" id="list1">
                                <section class="panel">
                                    <div class="panel-heading">東方project</div>
                                    <div class="panel-body no-padding" id="touhou-list">
                                        <table class="table table-bordered table-striped no-margin">
                                            <thead>
                                            <tr>
                                                <td rowspan="2" align="center">封面</td>
                                                <td rowspan="2" align="center">曲名</td>
                                                <td rowspan="2" align="center" class="hidden-xs" >来源</td>
                                                <td rowspan="2" align="center" class="hidden-xs">罗马音</td>
                                                <td colspan="6" align="center">难度</td>
                                            </tr>
                                            <tr>
                                                <td class="hidden-xs" style=" text-align: center; background-color: #A4C4FF;"><span style="font-weight: bold;">E</span></td>
                                                <td class="hidden-xs" style=" text-align: center; background-color: #BBFFAC;"><span style="font-weight: bold;">B</span></td>
                                                <td class="hidden-xs" style=" text-align: center; background-color: #FFD17D;"><span style="font-weight: bold;">A</span></td>
                                                <td style=" text-align: center; background-color: #FFBBDB;"><span style="font-weight: bold;">Ex</span></td>
                                                <td style=" text-align: center; background-color: #CC99FF;"><span style="font-weight: bold;">M</span></td>
                                                <td class="hidden-xs" style=" text-align: center; background-color: #EECCFF;"><span style="font-weight: bold;">Re</span></td>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php if(is_array($list["東方Project "])): foreach($list["東方Project "] as $key=>$data): ?><tr onclick="godetail('<?php echo ($data["id"]); ?>')" >
                                                    <td align="center"><img src="/Public/imglist/<?php echo ($data["id"]); ?>.png" /></td>
                                                    <td ><a name="<?php echo ($data["id"]); ?>" class="target-fix"></a><?php echo ($data["track_name"]); ?></td>
                                                    <td class="hidden-xs"><?php echo ($data["track_artist"]); ?></td>
                                                    <td class="hidden-xs"><?php echo ($data["track_roma"]); ?></td>
                                                    <td class="hidden-xs"><?php echo ($data["level_easy"]); ?></td>
                                                    <td class="hidden-xs"><?php echo ($data["level_basic"]); ?></td>
                                                    <td class="hidden-xs"><?php echo ($data["level_advance"]); ?></td>
                                                    <td><?php echo ($data["level_expert"]); ?></td>
                                                    <td><?php echo ($data["level_master"]); ?></td>
                                                    <td class="hidden-xs"><?php echo ($data["level_re"]); ?></td>
                                                </tr><?php endforeach; endif; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </section>
                            </div>
                            <div class="col-md-12 list-area" id="list2">
                                <section class="panel">
                                    <div class="panel-heading">niconico & VOCALOID </div>
                                    <div class="panel-body no-padding" id="niconico-list">
                                        <table class="table table-bordered table-striped no-margin">
                                            <thead>
                                            <tr>
                                                <td rowspan="2" align="center">封面</td>
                                                <td rowspan="2" align="center">曲名</td>
                                                <td rowspan="2" align="center" class="hidden-xs" >来源</td>
                                                <td rowspan="2" align="center" class="hidden-xs">罗马音</td>
                                                <td colspan="6" align="center">难度</td>
                                            </tr>
                                            <tr>
                                                <td class="hidden-xs" style=" text-align: center; background-color: #A4C4FF;"><span style="font-weight: bold;">E</span></td>
                                                <td class="hidden-xs" style=" text-align: center; background-color: #BBFFAC;"><span style="font-weight: bold;">B</span></td>
                                                <td class="hidden-xs" style=" text-align: center; background-color: #FFD17D;"><span style="font-weight: bold;">A</span></td>
                                                <td style=" text-align: center; background-color: #FFBBDB;"><span style="font-weight: bold;">Ex</span></td>
                                                <td style=" text-align: center; background-color: #CC99FF;"><span style="font-weight: bold;">M</span></td>
                                                <td class="hidden-xs" style=" text-align: center; background-color: #EECCFF;"><span style="font-weight: bold;">Re</span></td>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php if(is_array($list["niconico & VOCALOID "])): foreach($list["niconico & VOCALOID "] as $key=>$data): ?><tr onclick="godetail('<?php echo ($data["id"]); ?>')" >
                                                    <td align="center"><img src="/Public/imglist/<?php echo ($data["id"]); ?>.png" /></td>
                                                    <td ><a name="<?php echo ($data["id"]); ?>" class="target-fix"></a><?php echo ($data["track_name"]); ?></td>
                                                    <td class="hidden-xs"><?php echo ($data["track_artist"]); ?></td>
                                                    <td class="hidden-xs"><?php echo ($data["track_roma"]); ?></td>
                                                    <td class="hidden-xs"><?php echo ($data["level_easy"]); ?></td>
                                                    <td class="hidden-xs"><?php echo ($data["level_basic"]); ?></td>
                                                    <td class="hidden-xs"><?php echo ($data["level_advance"]); ?></td>
                                                    <td><?php echo ($data["level_expert"]); ?></td>
                                                    <td><?php echo ($data["level_master"]); ?></td>
                                                    <td class="hidden-xs"><?php echo ($data["level_re"]); ?></td>
                                                </tr><?php endforeach; endif; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </section>
                            </div>
                            <div class="col-md-12 list-area " id="list3">
                                <section class="panel">
                                    <div class="panel-heading">POPS & ANIME</div>
                                    <div class="panel-body no-padding" id="anime-list">
                                        <table class="table table-bordered table-striped no-margin">
                                            <thead>
                                            <tr>
                                                <td rowspan="2" align="center">封面</td>
                                                <td rowspan="2" align="center">曲名</td>
                                                <td rowspan="2" align="center" class="hidden-xs">来源</td>
                                                <td rowspan="2" align="center" class="hidden-xs">罗马音</td>
                                                <td colspan="6" align="center">难度</td>
                                            </tr>
                                            <tr>
                                                <td class="hidden-xs" style=" text-align: center; background-color: #A4C4FF;"><span style="font-weight: bold;">E</span></td>
                                                <td class="hidden-xs" style=" text-align: center; background-color: #BBFFAC;"><span style="font-weight: bold;">B</span></td>
                                                <td class="hidden-xs" style=" text-align: center; background-color: #FFD17D;"><span style="font-weight: bold;">A</span></td>
                                                <td style=" text-align: center; background-color: #FFBBDB;"><span style="font-weight: bold;">Ex</span></td>
                                                <td style=" text-align: center; background-color: #CC99FF;"><span style="font-weight: bold;">M</span></td>
                                                <td class="hidden-xs" style=" text-align: center; background-color: #EECCFF;"><span style="font-weight: bold;">Re</span></td>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php if(is_array($list["POPS & ANIME"])): foreach($list["POPS & ANIME"] as $key=>$data): ?><tr onclick="godetail('<?php echo ($data["id"]); ?>')" >
                                                    <td align="center"><img src="/Public/imglist/<?php echo ($data["id"]); ?>.png" /></td>
                                                    <td ><a name="<?php echo ($data["id"]); ?>" class="target-fix"></a><?php echo ($data["track_name"]); ?></td>
                                                    <td class="hidden-xs"><?php echo ($data["track_artist"]); ?></td>
                                                    <td class="hidden-xs"><?php echo ($data["track_roma"]); ?></td>
                                                    <td class="hidden-xs"><?php echo ($data["level_easy"]); ?></td>
                                                    <td class="hidden-xs"><?php echo ($data["level_basic"]); ?></td>
                                                    <td class="hidden-xs"><?php echo ($data["level_advance"]); ?></td>
                                                    <td><?php echo ($data["level_expert"]); ?></td>
                                                    <td><?php echo ($data["level_master"]); ?></td>
                                                    <td class="hidden-xs"><?php echo ($data["level_re"]); ?></td>
                                                </tr><?php endforeach; endif; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </section>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-6 col-xs-12" id="col-list2">
                        <div class="row">
                            <div class="col-md-12 list-area" id="list4">
                                <section class="panel">
                                    <div class="panel-heading">SEGA</div>
                                    <div class="panel-body no-padding" id="collabo-list">
                                        <table class="table table-bordered table-striped no-margin">
                                            <thead>
                                            <tr>
                                                <td rowspan="2" align="center">封面</td>
                                                <td rowspan="2" align="center">曲名</td>
                                                <td rowspan="2" align="center" class="hidden-xs">来源</td>
                                                <td rowspan="2" align="center" class="hidden-xs">罗马音</td>
                                                <td colspan="6" align="center">难度</td>
                                            </tr>
                                            <tr>
                                                <td class="hidden-xs" style=" text-align: center; background-color: #A4C4FF;"><span style="font-weight: bold;">E</span></td>
                                                <td class="hidden-xs" style=" text-align: center; background-color: #BBFFAC;"><span style="font-weight: bold;">B</span></td>
                                                <td class="hidden-xs" style=" text-align: center; background-color: #FFD17D;"><span style="font-weight: bold;">A</span></td>
                                                <td style=" text-align: center; background-color: #FFBBDB;"><span style="font-weight: bold;">Ex</span></td>
                                                <td style=" text-align: center; background-color: #CC99FF;"><span style="font-weight: bold;">M</span></td>
                                                <td class="hidden-xs" style=" text-align: center; background-color: #EECCFF;"><span style="font-weight: bold;">Re</span></td>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php if(is_array($list["SEGA "])): foreach($list["SEGA "] as $key=>$data): ?><tr onclick="godetail('<?php echo ($data["id"]); ?>')" >
                                                    <td align="center"><img src="/Public/imglist/<?php echo ($data["id"]); ?>.png" /></td>
                                                    <td ><a name="<?php echo ($data["id"]); ?>" class="target-fix"></a><?php echo ($data["track_name"]); ?></td>
                                                    <td class="hidden-xs"><?php echo ($data["track_artist"]); ?></td>
                                                    <td class="hidden-xs"><?php echo ($data["track_roma"]); ?></td>
                                                    <td class="hidden-xs"><?php echo ($data["level_easy"]); ?></td>
                                                    <td class="hidden-xs"><?php echo ($data["level_basic"]); ?></td>
                                                    <td class="hidden-xs"><?php echo ($data["level_advance"]); ?></td>
                                                    <td><?php echo ($data["level_expert"]); ?></td>
                                                    <td><?php echo ($data["level_master"]); ?></td>
                                                    <td class="hidden-xs"><?php echo ($data["level_re"]); ?></td>
                                                </tr><?php endforeach; endif; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </section>
                            </div>
                            <div class="col-md-12 list-area" id="list5">
                                <section class="panel">
                                    <div class="panel-heading">GAME & VARIRTY</div>
                                    <div class="panel-body no-padding" id="game-list">
                                        <table class="table table-bordered table-striped no-margin">
                                            <thead>
                                            <tr>
                                                <td rowspan="2" align="center">封面</td>
                                                <td rowspan="2" align="center">曲名</td>
                                                <td rowspan="2" align="center" class="hidden-xs">来源</td>
                                                <td rowspan="2" align="center" class="hidden-xs">罗马音</td>
                                                <td colspan="6" align="center">难度</td>
                                            </tr>
                                            <tr>
                                                <td class="hidden-xs" style=" text-align: center; background-color: #A4C4FF;"><span style="font-weight: bold;">E</span></td>
                                                <td class="hidden-xs" style=" text-align: center; background-color: #BBFFAC;"><span style="font-weight: bold;">B</span></td>
                                                <td class="hidden-xs" style=" text-align: center; background-color: #FFD17D;"><span style="font-weight: bold;">A</span></td>
                                                <td style=" text-align: center; background-color: #FFBBDB;"><span style="font-weight: bold;">Ex</span></td>
                                                <td style=" text-align: center; background-color: #CC99FF;"><span style="font-weight: bold;">M</span></td>
                                                <td class="hidden-xs" style=" text-align: center; background-color: #EECCFF;"><span style="font-weight: bold;">Re</span></td>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php if(is_array($list["GAME & VARIRTY"])): foreach($list["GAME & VARIRTY"] as $key=>$data): ?><tr onclick="godetail('<?php echo ($data["id"]); ?>')" >
                                                    <td align="center"><img src="/Public/imglist/<?php echo ($data["id"]); ?>.png" /></td>
                                                    <td ><a name="<?php echo ($data["id"]); ?>" class="target-fix"></a><?php echo ($data["track_name"]); ?></td>
                                                    <td class="hidden-xs"><?php echo ($data["track_artist"]); ?></td>
                                                    <td class="hidden-xs"><?php echo ($data["track_roma"]); ?></td>
                                                    <td class="hidden-xs"><?php echo ($data["level_easy"]); ?></td>
                                                    <td class="hidden-xs"><?php echo ($data["level_basic"]); ?></td>
                                                    <td class="hidden-xs"><?php echo ($data["level_advance"]); ?></td>
                                                    <td><?php echo ($data["level_expert"]); ?></td>
                                                    <td><?php echo ($data["level_master"]); ?></td>
                                                    <td class="hidden-xs"><?php echo ($data["level_re"]); ?></td>
                                                </tr><?php endforeach; endif; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </section>
                            </div>
                            <div class="col-md-12 list-area" id="list6">
                                <section class="panel">
                                    <div class="panel-heading">ORIGINAL & JOYPOLIS</div>
                                    <div class="panel-body no-padding" id="joypolis-list">
                                        <table class="table table-bordered table-striped no-margin">
                                            <thead>
                                            <tr>
                                                <td rowspan="2" align="center">封面</td>
                                                <td rowspan="2" align="center">曲名</td>
                                                <td rowspan="2" align="center" class="hidden-xs">来源</td>
                                                <td rowspan="2" align="center" class="hidden-xs">罗马音</td>
                                                <td colspan="6" align="center">难度</td>
                                            </tr>
                                            <tr>
                                                <td class="hidden-xs" style=" text-align: center; background-color: #A4C4FF;"><span style="font-weight: bold;">E</span></td>
                                                <td class="hidden-xs" style=" text-align: center; background-color: #BBFFAC;"><span style="font-weight: bold;">B</span></td>
                                                <td class="hidden-xs" style=" text-align: center; background-color: #FFD17D;"><span style="font-weight: bold;">A</span></td>
                                                <td style=" text-align: center; background-color: #FFBBDB;"><span style="font-weight: bold;">Ex</span></td>
                                                <td style=" text-align: center; background-color: #CC99FF;"><span style="font-weight: bold;">M</span></td>
                                                <td class="hidden-xs" style=" text-align: center; background-color: #EECCFF;"><span style="font-weight: bold;">Re</span></td>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php if(is_array($list["ORIGINAL & JOYPOLIS "])): foreach($list["ORIGINAL & JOYPOLIS "] as $key=>$data): ?><tr onclick="godetail('<?php echo ($data["id"]); ?>')" >
                                                    <td align="center"><img src="/Public/imglist/<?php echo ($data["id"]); ?>.png" /></td>
                                                    <td ><a name="<?php echo ($data["id"]); ?>" class="target-fix"></a><?php echo ($data["track_name"]); ?></td>
                                                    <td class="hidden-xs"><?php echo ($data["track_artist"]); ?></td>
                                                    <td class="hidden-xs"><?php echo ($data["track_roma"]); ?></td>
                                                    <td class="hidden-xs"><?php echo ($data["level_easy"]); ?></td>
                                                    <td class="hidden-xs"><?php echo ($data["level_basic"]); ?></td>
                                                    <td class="hidden-xs"><?php echo ($data["level_advance"]); ?></td>
                                                    <td><?php echo ($data["level_expert"]); ?></td>
                                                    <td><?php echo ($data["level_master"]); ?></td>
                                                    <td class="hidden-xs"><?php echo ($data["level_re"]); ?></td>
                                                </tr><?php endforeach; endif; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </section>
                            </div>

                        </div>


                    </div>


                </div>
            </div>

            <!-- /content wrapper -->
        </section>
        <!-- /main content -->
    </section>
    <div class="modal fade" id="search-list" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">是不是要找...</h4>
                </div>
                <div class="modal-body" align="center">
                    <div class="mg-t-lg" align="center">
                        <div class="row">
                            <div class="col-xs-12" id="search-result">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                    </div>
                </div>
            </div>
        </div>



        <!--After Main Content>


            <!-- core scripts -->
    </div>

</div>


<!-- core scripts -->
<script src="/Public/asset/vendor/jquery-1.11.1.min.js"></script>
<script src="/Public/asset/bootstrap/js/bootstrap.js"></script>

<!-- /core scripts -->

<!-- page level scripts -->
<!--script src="./list.js"></script>
<!-- /page level scripts -->

</body>
<!-- /body -->

</html>


<script>
    function search(mode){
        var inputbox;
        if (mode == 'xs'){
            inputbox = '#words-xs';
        }
        else{
            inputbox = '#words-md';
        }
        if ($(inputbox).val() != 0){
            $.ajax({
                type:"POST",
                url:"/index.php/home/index/search",
                dataType:"json",
                data:{
                    words:$(inputbox).val()
                },
                success:function(data){
                    if(data[0].msg == 1){
                        //window.location.href = '/index.php/home/index/detail/id/'+data[0].id;
                        _pushdata(data,'search-result');
                        $("#search-list").modal('show');
                        //godetail(data[0].id);
                    }
                    else if (data[0].msg == 2){
                        _pushdata(data,'search-result');
                        $("#search-list").modal('show');
                    }
                    else{
                        alert("好像什么也没有_(:з」∠)_");
                    }
                },
                error:function(jqXHR){
                    alert(jqXHR.status);
                }
            })
        }
        else{
            alert("条件请不要输入0");
        }
    }

    function list(track_type,table_div){
        $.ajax({
            type:"POST",
            url:"/index.php/home/index/readlist",
            dataType:"json",
            data:{
                track_type:track_type
            },
            success:function(data){
                _pushdata(data,table_div);
            },
            error:function(jqXHR){
                alert("发生错误："+jqXHR.status);
            }
        })

    }

    function _pushdata(data,table_div){
        var htmls=['<table class="table table-bordered table-striped no-margin">'];
        //table head
        htmls.push('<thead>');
        htmls.push('<tr>');
        htmls.push('<td rowspan="2" align="center">封面</td>');
        htmls.push('<td rowspan="2" align="center">曲名</td>');
        htmls.push('<td rowspan="2" align="center" class="hidden-xs">来源</td>');
        htmls.push('<td rowspan="2" align="center">罗马音</td>');
        htmls.push('<td colspan="6" align="center">难度</td>');
        //for(var k in data[0]) htmls.push('<td>'+k+'</td>');
        htmls.push('</tr>');
        htmls.push('<tr>');

        htmls.push('<td class="hidden-xs" style=" text-align: center; background-color: #A4C4FF;"><span style="font-weight: bold;">E</span></td>');
        htmls.push('<td class="hidden-xs" style=" text-align: center; background-color: #BBFFAC;"><span style="font-weight: bold;">B</span></td>');
        htmls.push('<td class="hidden-xs" style=" text-align: center; background-color: #FFD17D;"><span style="font-weight: bold;">A</span></td>');
        htmls.push('<td style=" text-align: center; background-color: #FFBBDB;"><span style="font-weight: bold;">Ex</span></td>');
        htmls.push('<td style=" text-align: center; background-color: #CC99FF;"><span style="font-weight: bold;">M</span></td>');
        htmls.push('<td class="hidden-xs" style=" text-align: center; background-color: #EECCFF;"><span style="font-weight: bold;">Re</span></td>');

        htmls.push('</tr>');
        htmls.push('<thead>');
        //table head end
        //table body
        htmls.push('<tbody>');
        for(var i=0,L=data.length;i<L;i++){
            htmls.push('<tr onclick=godetail('+data[i].id+') >');
            htmls.push();
            htmls.push('<td align="center"><img src="/Public/imglist/'+data[i].id+'.png" /></td>');
            htmls.push('<td >'+'<a name="'+data[i].id+'"></a>'+data[i].track_name+'</td>');
            htmls.push('<td class="hidden-xs">'+data[i].track_artist+'</td>');
            htmls.push('<td>'+data[i].track_roma+'</td>');
            htmls.push('<td class="hidden-xs">'+data[i].level_easy+'</td>');
            htmls.push('<td class="hidden-xs">'+data[i].level_basic+'</td>');
            htmls.push('<td class="hidden-xs">'+data[i].level_advance+'</td>');
            htmls.push('<td>'+data[i].level_expert+'</td>');
            htmls.push('<td>'+data[i].level_master+'</td>');
            htmls.push('<td class="hidden-xs">'+data[i].level_re+'</td>');
            //for(var k in data[i]) htmls.push('<td>'+data[i][k]+'</td>');
            htmls.push('</tr>');
        }
        htmls.push('</tbody>');
        //table body end
        htmls.push('</table>');
        table_div = '#'+table_div;
        $(table_div).html(htmls.join(''));
    }

    function showlist(){
        list("東方project","touhou-list");
        list("ANIME","anime-list");
        list("COLLABO","collabo-list");
        list("GAME","game-list");
        list("JOYPOLIS","joypolis-list");
        list("niconico","niconico-list");
        list("ORIGINAL","original-list");
        list("POPS","pops-list");
        list("VARIETY","variety-list");
    }

    function godetail(id){

        $show_level = $("#show_level").html();

        if($show_level){
            window.location.href = '/index.php/home/index/detail/id/'+id+'?show_level='+$show_level;
        }
        else{
            window.location.href = '/index.php/home/index/detail/id/'+id;
        }

    }

    //获取url参数

    function getArgs() {
        var args = {};
        var query = location.search.substring(1);
        // Get query string
        var pairs = query.split("&");
        // Break at ampersand
        for(var i = 0; i < pairs.length; i++) {
            var pos = pairs[i].indexOf('=');
            // Look for "name=value"
            if (pos == -1) continue;
            // If not found, skip
            var argname = pairs[i].substring(0,pos);// Extract the name
            var value = pairs[i].substring(pos+1);// Extract the value
            value = decodeURIComponent(value);// Decode it, if needed
            args[argname] = value;
            // Store as a property
        }
        return args;// Return the object
    }





    $(document).ready(function(){

        //showlist();
        $("#about-xs").click(function(){
            $("#about").attr("class","col-md-6 col-xs-12");
        });
        var i;
        $(".hidden-list").click(function(){
            $("#about").hide();
            $("#type-area").attr("class","col-md-8 hidden-xs container-center");
            indexid = $(this).index();
            //restore list
            if (indexid == 0){
                $("#about").show();
                $("#type-area").attr("class","col-md-6 hidden-xs");
                for (i = 1; i< 10 ; i++){
                    $("#list"+i).show();
                    if (i > 3){
                        $("div#col-list2 .row").append($("#list"+i));
                    }
                    else{
                        $("div#col-list1 .row").append($("#list"+i));
                    }
                }
            }
            //show specific selected item
            else{
                for (i = 1; i < 10; i++ ){
                    $("#fetch-list").append($("#list"+i));
                }
                for (i = 1 ;i < 10 ;i++){
                    $("#list"+i).show();
                    if (indexid == i){
                        continue;
                    }
                    $("#list"+i).hide();
                }
            }
        });

        setTimeout(function(){
            if(getArgs().h){
                window.location.href = "#"+getArgs().h;
            }
        },1);


    });


    (function() {
        var $backToTopTxt = "返回顶部", $backToTopEle = $('<div class="backToTop"></div>').appendTo($("body"))
                .text($backToTopTxt).attr("title", $backToTopTxt).click(function() {
                    $("html, body").animate({ scrollTop: 0 }, 120);
                }), $backToTopFun = function() {
            var st = $(document).scrollTop(), winh = $(window).height();
            (st > 0)? $backToTopEle.show(): $backToTopEle.hide();
            //IE6下的定位
            if (!window.XMLHttpRequest) {
                $backToTopEle.css("top", st + winh - 166);
            }
        };
        $(window).bind("scroll", $backToTopFun);
        $(function() { $backToTopFun(); });
    })();

</script>