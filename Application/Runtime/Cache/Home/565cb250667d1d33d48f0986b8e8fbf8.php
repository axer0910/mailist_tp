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

<link rel="stylesheet" type="text/css" href="/Public/asset/css/uploadify.css">
<div>
    <h3>测试上传</h3>
    <form>
        <div id="queue"></div>
        <input id="file_upload" name="file_upload" type="file" multiple="true" >
    </form>

    <form action="/index.php/Home/Index/manual_upload" enctype="multipart/form-data" method="post" id="">
        <input type="text" name="name" />
        <input type="file" name="video" id="file"/>
        <input type="submit" value="提交" id="testupload">
    </form>

    <div id="failed-list"></div>

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

<script src="/Public/asset/js/jquery.uploadify.min.js" type="text/javascript"></script>
<script>

    $(document).ready(function(){

    });

    $(function() {
        $('#file_upload').uploadify({
            'buttonText': '文件上传',
//            'fileSizeLimit':'2MB',
            'swf'       : '/Public/uploadify.swf',
            'uploader'  : '/index.php/Home/Index/manual_upload',
//            'cancelImg ': '/Public/cancel.png',
            'onUploadSuccess' : function(file, data, response) {
                var htmls = [''];
                if(data!=1)//文件失败提示错误信息并刷新页面
                {
                    alert((data));
                    htmls.push('<p>'+data+'</p>');
                    $("#failed-list").html((htmls.join('')));
                    //alert(data);
                    //window.location='';
                }
            },
            'onQueueComplete'  : function() {
                //window.location='';
            }
        });

    });
</script>