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
            <a href="/index.php/Home/Index" class="navbar-brand">
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
                               <a class="btn btn-success" href="/index.php/Home/Index?h=<?php echo ($data["id"]); ?>" id="back_button">&nbsp;<&nbsp;返回列表</a>
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
                                           <tbody class="maidata-table"><tr>
                                               <td style="width: 200px; text-align: center; background-color: rgb(255, 255, 255);">
                                               </td><td style="width: 200px; text-align: center; background-color: rgb(240, 187, 202);">红
                                           </td><td style="width: 200px; text-align: center; background-color: rgb(201, 169, 203);">紫
                                           </td><td style="width: 200px; text-align: center; background-color: rgb(220, 206, 221);">RE
                                           </td><td style="width: 200px; text-align: center; background-color: rgb(211, 239, 254);">蓝
                                           </td><td style="width: 200px; text-align: center; background-color: rgb(170, 232, 186);">绿
                                           </td><td style="width: 200px; text-align: center; background-color: rgb(249, 230, 170);">黄
                                           </td></tr>
                                           <tr>
                                               <td style="width: 200px; text-align: center; background-color: rgb(229, 229, 229);">难易度
                                               </td><td style="width: 200px; text-align: center;"><?php echo ($data["level_expert"]); ?>
                                           </td><td style="width: 200px; text-align: center;"><?php echo ($data["level_master"]); ?>
                                           </td><td style="width: 200px; text-align: center;"><?php echo ($data["level_re"]); ?>
                                           </td><td style="width: 200px; text-align: center;"><?php echo ($data["level_easy"]); ?>
                                           </td><td style="width: 200px; text-align: center;"><?php echo ($data["level_basic"]); ?>
                                           </td><td style="width: 200px; text-align: center;"><?php echo ($data["level_advance"]); ?>
                                           </td></tr>
                                           <tr>
                                               <td style="text-align: center; width: 200px; background-color: rgb(229, 229, 229);">TAP
                                               </td><td style="text-align: center;"><?php echo ($data["level_experttap"]); ?>
                                           </td><td style="text-align: center;"><?php echo ($data["level_mastertap"]); ?>
                                           </td><td style="text-align: center;"><?php echo ($data["level_retap"]); ?>
                                           </td><td style="text-align: center;"><?php echo ($data["level_easytap"]); ?>
                                           </td><td style="text-align: center;"><?php echo ($data["level_basictap"]); ?>
                                           </td><td style="text-align: center;"><?php echo ($data["level_advancetap"]); ?>
                                           </td></tr>
                                           <tr>
                                               <td style="text-align: center; width: 200px; background-color: rgb(229, 229, 229);">HOLD
                                               </td><td style="text-align: center;"><?php echo ($data["level_experthold"]); ?>
                                           </td><td style="text-align: center;"><?php echo ($data["level_masterhold"]); ?>
                                           </td><td style="text-align: center;"><?php echo ($data["level_rehold"]); ?>
                                           </td><td style="text-align: center;"><?php echo ($data["level_easyhold"]); ?>
                                           </td><td style="text-align: center;"><?php echo ($data["level_basichold"]); ?>
                                           </td><td style="text-align: center;"><?php echo ($data["level_advancehold"]); ?>
                                           </td></tr>
                                           <tr>
                                               <td style="text-align: center; width: 200px; background-color: rgb(229, 229, 229);">SLIDE
                                               </td><td style="text-align: center;"><?php echo ($data["level_expertslide"]); ?>
                                           </td><td style="text-align: center;"><?php echo ($data["level_masterslide"]); ?>
                                           </td><td style="text-align: center;"><?php echo ($data["level_reslide"]); ?>
                                           </td><td style="text-align: center;"><?php echo ($data["level_easyslide"]); ?>
                                           </td><td style="text-align: center;"><?php echo ($data["level_basicslide"]); ?>
                                           </td><td style="text-align: center;"><?php echo ($data["level_advanceslide"]); ?>
                                           </td></tr>
                                           <tr>
                                               <td style="text-align: center; width: 200px; background-color: rgb(229, 229, 229);">BREAK
                                               </td><td style="text-align: center;"><?php echo ($data["level_expertbreak"]); ?>
                                           </td><td style="text-align: center;"><?php echo ($data["level_masterbreak"]); ?>
                                           </td><td style="text-align: center;"><?php echo ($data["level_rebreak"]); ?>
                                           </td><td style="text-align: center;"><?php echo ($data["level_easybreak"]); ?>
                                           </td><td style="text-align: center;"><?php echo ($data["level_basicbreak"]); ?>
                                           </td><td style="text-align: center;"><?php echo ($data["level_advancebreak"]); ?>
                                           </td>
                                           <tr>
                                               <td style="text-align: center; width: 200px; background-color: rgb(229, 229, 229);">COMBO
                                               </td>
                                               <td style="text-align: center;"><?php echo ($data["level_expertcombo"]); ?>
                                           </td>
                                               <td style="text-align: center;"><?php echo ($data["level_mastercombo"]); ?>
                                           </td>
                                               <td style="text-align: center;"><?php echo ($data["level_recombo"]); ?>
                                               </td>
                                               <td style="text-align: center;"><?php echo ($data["level_easycombo"]); ?>
                                           </td>
                                               <td style="text-align: center;"><?php echo ($data["level_basiccombo"]); ?>
                                           </td>
                                               <td style="text-align: center;"><?php echo ($data["level_advancecombo"]); ?>
                                           </td>
                                           <tr>
                                               <td style="text-align: center; width: 200px; background-color: rgb(229, 229, 229);">理论值(%)
                                               </td><td style="text-align: center;"><?php echo ($data["level_expertachievement"]); ?>
                                           </td><td style="text-align: center;"><?php echo ($data["level_masterachievement"]); ?>
                                           </td><td style="text-align: center;"><?php echo ($data["level_reachievement"]); ?>
                                           </td><td style="text-align: center;"><?php echo ($data["level_easyachievement"]); ?>
                                           </td><td style="text-align: center;"><?php echo ($data["level_basicachievement"]); ?>
                                           </td><td style="text-align: center;"><?php echo ($data["level_advanceachievement"]); ?>
                                           </td></tr></tbody></table>




                                   </div>
                                   <div class="bg-primary panel-footer" id="info">
                                       <h4>谱面视频来自<a href="http://www.bilibili.com/video/av1866841/"><p>B站的av1866841</p></a></h4>
                                   </div>
                               </section>
                           </div>
                           <div class="col-md-11">
                           </div>
                       </div>
                       <div class="row">



                           <div class="col-md-11 " id="res">
                                努力读取资源...
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
//    function get_res(){
//        $.ajax({
//            type:"POST",
//            url:"/index.php/Home/Index/get_res",
//            dataType:"json",
//            data:{
//                track_id:$("#track_id").html()
//            },
//            success:function(data){
//                var htmls = ['<h4 style="font-family: SimHei;">谱面视频（Master）</h4>'];
//                if (data.msg == -1){
//                    htmls.push('<p>暂时没有添加铺面视频_(:з」∠)_</p>');
//                }
//                else{
//                    htmls.push('<video src="/index.php/Home/Index/get_video/maidata_id/'+data[0].maidata_id+'"  controls="controls">');
//                    htmls.push('Your browser does not support the video tag.');
//                    htmls.push('</video>');
//                    htmls.push('<a href="/index.php/Home/Index/download_video/maidata_id/'+data[0].maidata_id+'" class="btn btn-success btn-block add-margin-xs">下载该视频</a>')
//                }
//                var div = '#res';
//                $(div).html(htmls.join(''));
//            },
//            error:function(jqXHR){
//                alert('好像获取资源失败了'+jqXHR.status);
//            }
//        })
//
//    }



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




    function get_cid(){
        $.ajax({
            type:"GET",
            url:"http://bilibili-service.daoapp.io/view/1866841",
            dataType:"json",
            success:function(data){
                //console.log(data.list[0]);
                for(var i = 0; i < Object.keys(data.list).length; i++){
                    var page_str = '<?php echo ($data["track_name"]); ?>';
                    var json_str = data.list[i].part;
                    page_str = page_str.replace(/[&\|\\\*^%$#@\-［］。！～・\. !’'\\·【】♪☆“”]/g,"");
                    json_str = json_str.replace(/[&\|\\\*^%$#@\-［］。！～・\. !’'\\·【】♪☆“”]/g,"");
                    if (page_str == json_str ){
                        show_bilibili_video(data.list[i].cid);
                        break;
                    }
                    else{
                        var htmls = ['<h4 style="font-family: SimHei;">谱面视频（Master）</h4>'];
                        htmls.push('<p>在av1866841暂时没有发现谱面视频_(:з」∠)_</p>');
                        var div = '#res';
                        $(div).html(htmls.join(''));
                    }
                }

            }
        })
    }


    function show_bilibili_video(cid)
    {

        $.ajax({
            type:"GET",
            url:"http://bilibili-service.daoapp.io/video/"+cid+"?quality=2",
            dataType:"json",
            success:function(data){
                var htmls = ['<h4 style="font-family: SimHei;">谱面视频（Master）</h4>'];
                console.log(data);
                console.log(data.url);
                htmls.push('<video src="'+data.url+'"  controls="controls">');
                htmls.push('Your browser does not support the video tag.');
                htmls.push('</video>');
                htmls.push('<a href="'+data.url+'" class="btn btn-success btn-block add-margin-xs">下载该视频</a>')
                var div = '#res';
                $(div).html(htmls.join(''));
            }
        });

    }

    $(document).ready(function(){

        get_cid();

        var show_level = getArgs().show_level;

        if (show_level){
            $("#back_button").attr('href', '/index.php/Home/Index/index/level/'+show_level+'?h=<?php echo ($data["id"]); ?>');
        }

        $table = $(".maidata-table");

        if (!$.trim($table.find('tr:eq('+7+')').find('td:eq(3)').html())){
            for(var i = 0; i <=7; i++){
                $table.find('tr:eq('+i+')').find('td:eq(3)').hide();
            }
        }
    })
</script>