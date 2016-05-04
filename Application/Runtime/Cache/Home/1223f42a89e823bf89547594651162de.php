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
    <header class="header navbar">
        <div class="brand orange">
            <a href="/index.php/home/index" class="navbar-brand">
                <span class="heading-font">
                    maimai<b>PiNK</b>
                </span>
            </a>
        </div>
    </header>
    <!-- /top header -->

    <section class="layout">
        <!-- main content -->
        <section class="main-content">
            <!-- content wrapper -->
            <div class="content-wrap">
                <div class="row">
                    <div class="col-md-12" style="margin-top: 60px">

                    </div>
                </div>
               <div class="col-md-9 container-center container-background add-padding">
                   <div class="col-md-9 container-center">
                       <div class="row mg-b">
                           <div class="col-xs-12">
                               <a class="btn btn-success" href="/index.php/home/index?h=<?php echo ($data["id"]); ?>">&nbsp;<&nbsp;返回列表</a>
                               <h2 class="" style="font-family: SimHei;"><?php echo ($data["track_name"]); ?></h2>
                               <p id="track_id"><?php echo ($data["track_roma"]); ?></p>
                               <hr/>
                           </div>
                       </div>
                       <div class="row">
                           <div class="col-md-7 col-xs-12">
                               <section class="panel">
                                   <div class="panel-body no-padding" id="touhou-list">
                                       <table class="table table-bordered table-striped no-margin">
                                           <tbody>
                                           <tr>
                                               <td align="center"><img src="/Public/imglist/<?php echo ($data["id"]); ?>.png" /></td>
                                               <td align="center">
                                                   <br/>
                                                   <strong><?php echo ($data["track_name"]); ?></strong>
                                                   <br/>
                                                   <p><?php echo ($data["track_artist"]); ?></p>
                                               </td>
                                           </tr>
                                           <tr>
                                               <td><strong>类别</strong></td>
                                               <td><?php echo ($data["track_type"]); ?></td>
                                           </tr>
                                           <tr>
                                               <td><strong>版本</strong></td>
                                               <td><?php echo ($data["track_version"]); ?></td>
                                           </tr>
                                           <tr>
                                               <td><strong>追加日</strong></td>
                                               <td><?php echo ($data["track_appenddata"]); ?></td>
                                           </tr>
                                           <tr>
                                               <td><strong>谱面制作（Expert）</strong></td>
                                               <td><?php echo ($data["level_exwriter"]); ?></td>
                                           </tr>
                                           <tr>
                                               <td ><strong>谱面制作（Master）</strong></td>
                                               <td><?php echo ($data["level_mawriter"]); ?></td>
                                           </tr>

                                           </tbody>
                                       </table>
                                   </div>
                               </section>
                           </div>
                       </div>
                       <div class="row">
                           <div class="col-md-11">
                               <section class="panel">
                                   <div class="panel-body no-padding table-responsive">
                                       <table class="table table-bordered table-striped no-margin">
                                           <tbody><tr>
                                               <td style="width: 200px; text-align: center; background-color: rgb(255, 255, 255);">
                                               </td><td style="width: 200px; text-align: center; background-color: rgb(211, 239, 254);">蓝
                                           </td><td style="width: 200px; text-align: center; background-color: rgb(170, 232, 186);">绿
                                           </td><td style="width: 200px; text-align: center; background-color: rgb(249, 230, 170);">黄
                                           </td><td style="width: 200px; text-align: center; background-color: rgb(240, 187, 202);">红
                                           </td><td style="width: 200px; text-align: center; background-color: rgb(201, 169, 203);">紫
                                           </td><td style="width: 200px; text-align: center; background-color: rgb(220, 206, 221);">RE
                                           </td></tr>
                                           <tr>
                                               <td style="width: 200px; text-align: center; background-color: rgb(229, 229, 229);">难易度
                                               </td><td style="width: 200px; text-align: center;"><?php echo ($data["level_easy"]); ?>
                                           </td><td style="width: 200px; text-align: center;"><?php echo ($data["level_basic"]); ?>
                                           </td><td style="width: 200px; text-align: center;"><?php echo ($data["level_advance"]); ?>
                                           </td><td style="width: 200px; text-align: center;"><?php echo ($data["level_expert"]); ?>
                                           </td><td style="width: 200px; text-align: center;"><?php echo ($data["level_master"]); ?>
                                           </td><td style="width: 200px; text-align: center;"><?php echo ($data["level_re"]); ?>
                                           </td></tr>
                                           <tr>
                                               <td style="text-align: center; width: 200px; background-color: rgb(229, 229, 229);">TAP
                                               </td><td style="text-align: center;"><?php echo ($data["level_easytap"]); ?>
                                           </td><td style="text-align: center;"><?php echo ($data["level_basictap"]); ?>
                                           </td><td style="text-align: center;"><?php echo ($data["level_advancetap"]); ?>
                                           </td><td style="text-align: center;"><?php echo ($data["level_experttap"]); ?>
                                           </td><td style="text-align: center;"><?php echo ($data["level_mastertap"]); ?>
                                           </td><td style="text-align: center;"><?php echo ($data["level_retap"]); ?>
                                           </td></tr>
                                           <tr>
                                               <td style="text-align: center; width: 200px; background-color: rgb(229, 229, 229);">HOLD
                                               </td><td style="text-align: center;"><?php echo ($data["level_easyhold"]); ?>
                                           </td><td style="text-align: center;"><?php echo ($data["level_basichold"]); ?>
                                           </td><td style="text-align: center;"><?php echo ($data["level_advancehold"]); ?>
                                           </td><td style="text-align: center;"><?php echo ($data["level_experthold"]); ?>
                                           </td><td style="text-align: center;"><?php echo ($data["level_masterhold"]); ?>
                                           </td><td style="text-align: center;"><?php echo ($data["level_rehold"]); ?>
                                           </td></tr>
                                           <tr>
                                               <td style="text-align: center; width: 200px; background-color: rgb(229, 229, 229);">SLIDE
                                               </td><td style="text-align: center;"><?php echo ($data["level_easyslide"]); ?>
                                           </td><td style="text-align: center;"><?php echo ($data["level_basicslide"]); ?>
                                           </td><td style="text-align: center;"><?php echo ($data["level_advanceslide"]); ?>
                                           </td><td style="text-align: center;"><?php echo ($data["level_expertslide"]); ?>
                                           </td><td style="text-align: center;"><?php echo ($data["level_masterslide"]); ?>
                                           </td><td style="text-align: center;"><?php echo ($data["level_reslide"]); ?>
                                           </td></tr>
                                           <tr>
                                               <td style="text-align: center; width: 200px; background-color: rgb(229, 229, 229);">BREAK
                                               </td><td style="text-align: center;"><?php echo ($data["level_easybreak"]); ?>
                                           </td><td style="text-align: center;"><?php echo ($data["level_basicbreak"]); ?>
                                           </td><td style="text-align: center;"><?php echo ($data["level_advancebreak"]); ?>
                                           </td><td style="text-align: center;"><?php echo ($data["level_expertbreak"]); ?>
                                           </td><td style="text-align: center;"><?php echo ($data["level_masterbreak"]); ?>
                                           </td><td style="text-align: center;"><?php echo ($data["level_rebreak"]); ?>
                                           </td><tr>
                                               <td style="text-align: center; width: 200px; background-color: rgb(229, 229, 229);">COMBO
                                               </td><td style="text-align: center;"><?php echo ($data["level_easycombo"]); ?>
                                           </td><td style="text-align: center;"><?php echo ($data["level_basiccombo"]); ?>
                                           </td><td style="text-align: center;"><?php echo ($data["level_advancecombo"]); ?>
                                           </td><td style="text-align: center;"><?php echo ($data["level_expertcombo"]); ?>
                                           </td><td style="text-align: center;"><?php echo ($data["level_mastercombo"]); ?>
                                           </td><td style="text-align: center;"><?php echo ($data["level_recombo"]); ?>
                                               <td/><tr>
                                               <td style="text-align: center; width: 200px; background-color: rgb(229, 229, 229);">理论值(%)
                                               </td><td style="text-align: center;"><?php echo ($data["level_easyachievement"]); ?>
                                           </td><td style="text-align: center;"><?php echo ($data["level_basicachievement"]); ?>
                                           </td><td style="text-align: center;"><?php echo ($data["level_advanceachievement"]); ?>
                                           </td><td style="text-align: center;"><?php echo ($data["level_expertachievement"]); ?>
                                           </td><td style="text-align: center;"><?php echo ($data["level_masterachievement"]); ?>
                                           </td><td style="text-align: center;"><?php echo ($data["level_reachievement"]); ?>
                                           </td></tr></tbody></table>
                                   </div>
                               </section>
                           </div>
                           <div class="col-md-11">
                           </div>
                       </div>
                       <div class="row">
                           <div class="col-md-11 " id="res">
                               <h4>谱面视频施工中_(:з」∠)_</h4>
                               <p>比较多要慢慢上传_(:з」∠)_</p>
                           </div>
                       </div>
                   </div>
               </div>
            </div>
            <!-- /content wrapper -->
        </section>
        <!-- /main content -->

    </section>

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
    function get_res(){
        $.ajax({
            type:"POST",
            url:"/index.php/home/index/get_res",
            dataType:"json",
            data:{
                track_id:$("#track_id").html()
            },
            success:function(data){
                var htmls = ['<h4 style="font-family: SimHei;">谱面视频（Master）</h4>'];
                if (data.msg == -1){
                    htmls.push('<p>暂时没有添加铺面视频_(:з」∠)_</p>');
                }
                else{
                    htmls.push('<video src="/index.php/home/index/get_video/maidata_id/'+data[0].maidata_id+'"  controls="controls">');
                    htmls.push('Your browser does not support the video tag.');
                    htmls.push('</video>');
                    htmls.push('<a href="/index.php/home/index/download_video/maidata_id/'+data[0].maidata_id+'" class="btn btn-success btn-block add-margin-xs">下载该视频</a>')
                }
                var div = '#res';
                $(div).html(htmls.join(''));
            },
            error:function(jqXHR){
                alert('好像获取资源失败了'+jqXHR.status);
            }
        })

    }

    $(document).ready(function(){
        //get_res();
    })
</script>