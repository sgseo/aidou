<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:53:"/www/wwwroot/sp/application/app/view/index/index.html";i:1561713968;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>爱看影视 APP下载</title>
<meta name="description" content="爱看影视_APP" />
<meta name="keywords" content="爱看影视_APP,爱看影视_APP下载" />
<link rel="stylesheet" type="text/css" href="/public/static/pcdown/css/g.css">
<link rel="stylesheet" type="text/css" href="/public/static/pcdown/css/download.css">
<script src="/public/static/share/js/myscript.js"></script>
<script type="text/javascript">
	if (isMobile) {
		window.location.href = "http://sp.52webrtc.top/akys.apk";
	}
</script>
</head>
<body class="pc-contanier">
<div class="pc-wrap"></div>
<div class="pc-bg pc-bg1 current"></div>
<div class="pc-bg pc-bg2"></div>
<div class="page-bg-btm"></div>
<div id="particles-js">
<canvas style="width: 100%; height: 100%;"></canvas>
</div>
<div class="pc-body">
<div class="clearfix">
<div class="pc-body-item">
<div class="pc-pics-box img-box">
<img src="/public/static/pcdown/images/pic1.png" width="520" height="580" class="item current" />
<img src="/public/static/pcdown/images/pic2.png" width="520" height="580" class="item" />
</div>
</div>
<div class="pc-body-item">
<div class="pc-main">
<div class="pc-logo ico">


</div>
<div class="pc-btns">
<a href="http://sp.52webrtc.top/akys.apk"  class="btn">
<span class="ico ico-ios"></span>
<span class="txt">iPhone版</span>
</a>
<a href="http://sp.52webrtc.top/akys.apk" class="btn">                       <!--安卓版安装下载地址-->
<span class="ico ico-android"></span>
<span class="txt">安卓版</span>
</a>
</div>
<div class="pc-erwei">

<div class="img-box">

</div>
</div>
</div>
</div>
</div>
</div>
<div class="pc-bg-flag slider-flags">
<span class="item current"></span>
<span class="item"></span>
</div>
<div class="pc-copyright">Copyright © 2008-2018 爱看影视 版权所有 All Rights Reserved.</div>
<a href="javascript:void(0);" class="slider-prev"></a>
<a href="javascript:void(0);" class="slider-next"></a>
<script type="text/javascript" src="/public/static/pcdown/js/jquery-1.8.0.min.js"></script>
<script type="text/javascript">
    $(function(){
        var mainContent = $(".pc-body"),
            pcBgs = $(".pc-bg"),
            mainImgs = $(".pc-pics-box").find(".item"),
            controlItems = $(".pc-bg-flag").find(".item"),
            btnPrev = $(".slider-prev"),
            btnNext = $(".slider-next"),
            actionIndex = 0,
            interval = 3000,
            timer = 0;

        var fadeAction = function(index){
            controlItems.eq(index).addClass("current").siblings().removeClass("current");
            mainImgs.eq(index).fadeIn("slow").siblings(".item").fadeOut("slow");
            pcBgs.eq(index).fadeIn("slow").siblings(".pc-bg").fadeOut("slow");
        };    

        var autoPlay = function(){
            if (actionIndex < pcBgs.length) {
                actionIndex = (actionIndex+1) % pcBgs.length; 
                fadeAction(actionIndex);
            }                  
        };    
        timer = setInterval(autoPlay, interval);

        controlItems.click(function(){
            actionIndex = $(this).index();
            fadeAction(actionIndex);
        });

        btnPrev.click(function(){
            if (actionIndex >= 0 ) {
                if (actionIndex == 0) actionIndex = pcBgs.length;
                actionIndex = (actionIndex-1) % pcBgs.length;
                fadeAction(actionIndex);
            }
        }).hover(function(evt){
            clearInterval(timer);   
        },function(evt){
            timer = setInterval(autoPlay,interval);
        });

        btnNext.click(function(){
            autoPlay();
        }).hover(function(evt){
            clearInterval(timer);   
        },function(evt){
            timer = setInterval(autoPlay,interval);
        });

        mainContent.hover(function(evt){
            clearInterval(timer);   
        },function(evt){
            timer = setInterval(autoPlay,interval);
        }); 
    });
</script>
<script async="" src="/public/static/pcdown/js/analytics.js"></script>
<script src="/public/static/pcdown/js/part1.js"></script>
<script src="/public/static/pcdown/js/part2.js"></script>
<script type="text/javascript"  src="/public/static/pcdown/js/su.js"></script>
</body>
</html>