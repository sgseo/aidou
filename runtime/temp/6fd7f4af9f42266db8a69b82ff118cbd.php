<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:52:"/www/wwwroot/sp/application/index/view/dao/copy.html";i:1559661124;s:50:"/www/wwwroot/sp/application/index/view/layout.html";i:1561713348;}*/ ?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>代理管理</title>
    <meta name="description" content="完美工作室 QQ：917852803">
    <meta name="keywords" content="index">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="icon" type="image/png" href="/public/static/amz/i/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="/public/static/amz/i/app-icon72x72@2x.png">
    <meta name="apple-mobile-web-app-title" content="Amaze UI" />
    <link rel="stylesheet" href="/public/static/amz/css/amazeui.min.css" />
    <link rel="stylesheet" href="/public/static/amz/css/admin.css">
    <link rel="stylesheet" href="/public/static/amz/css/app.css">
    <script src="/public/static/amz/js/echarts.min.js"></script>
  
<!--old  下-->
  
        <link rel="stylesheet" href="/public/static/assets/css/fonts/linecons/css/linecons.css">

    <link rel="stylesheet" href="/public/static/assets/css/fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/public/static/assets/css/bootstrap.css">
    <link rel="stylesheet" href="/public/static/assets/css/xenon-core.css">
    <link rel="stylesheet" href="/public/static/assets/css/xenon-forms.css">
    <link rel="stylesheet" href="/public/static/assets/css/xenon-components.css">
    <link rel="stylesheet" href="/public/static/assets/css/xenon-skins.css">
    <link rel="stylesheet" href="/public/static/assets/css/custom.css">

    <script src="/public/static/assets/js/jquery-1.11.1.min.js"></script>


<!--old  上-->
  

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="/public/static/assets/js/html5shiv.min.js"></script>
    <script src="/public/static/assets/js/respond.min.js"></script>
    <![endif]-->

    <link rel="stylesheet" href="/public/static/assets/css/fonts/elusive/css/elusive.css">
  
</head>

<body data-type="index">


    <header class="am-topbar am-topbar-inverse admin-header">
        <div class="am-topbar-brand">   
          <?php if(session('power')=='0'){?>
            <a href="javascript:;" class="tpl-logo">
                <img src="/public/static/amz/img/logo.png" alt="">
            </a>
                 <?php } ?>
          
              
          
          
        </div>
        <div class="am-icon-list tpl-header-nav-hover-ico am-fl am-margin-right" >
        
        </div>
      
      
 
       <?php if(session('power')=='1'){?>
           <div class="am-fl am-margin-right" style=" margin-left: 20px; ">
             
    			<div class="am-dropdown-toggle tpl-header-list-link" >
                        <span class="am-icon-bell-o"></span> <?php echo yue(); ?>点 
						 &nbsp;&nbsp;<button class="btn btn-gray" onclick="daili_money('0',<?php echo id(); ?>)">在线充值点数</button>
                    </div>
        </div>
  
 
            <?php } ?>
<!--
      <?php echo share(); ?>
        <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only" data-am-collapse="{target: '#topbar-collapse'}"><span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span></button>
-->
      
        <div class="am-collapse am-topbar-collapse" id="topbar-collapse">

            <ul class="am-nav am-nav-pills am-topbar-nav am-topbar-right admin-header-list tpl-header-list">
  
                <li class="am-dropdown" data-am-dropdown data-am-dropdown-toggle>
                    <a class="am-dropdown-toggle tpl-header-list-link" href="javascript:;">
                    <span class="am-badge tpl-badge-danger am-round"><?php echo power(); ?></span>
                    </a>
      

                </li>
 

                <li class="am-dropdown" data-am-dropdown data-am-dropdown-toggle>
                    <a class="am-dropdown-toggle tpl-header-list-link" href="javascript:;">
                        <span class="tpl-header-list-user-nick"><?php echo name(); ?></span><span class="tpl-header-list-user-ico"> <img src="/public/static/amz/img/user.png"></span>
                    </a>
            
                </li>
             <li><a href="<?php echo url('login/login/dologin'); ?>" class="tpl-header-list-link"><span class="am-icon-sign-out tpl-header-list-ico-out-size"></span></a></li> 
            </ul>
        </div>
    </header>







    <div class="tpl-page-container tpl-page-header-fixed">


        <div class="tpl-left-nav tpl-left-nav-hover">
            <div class="tpl-left-nav-title">
                菜单列表
            </div>
            <div class="tpl-left-nav-list">
                <ul class="tpl-left-nav-menu">
                    <li class="tpl-left-nav-item">
                        <a href="<?php echo url('/index/index/index'); ?>" class="nav-link active">
                            <i class="am-icon-home"></i>
                            <span>管理中心</span>
                        </a>
                    </li>
                  
                  
                  <!--
                    <li class="tpl-left-nav-item">
                        <a href="<?php echo url('user/daoqi'); ?>" class="nav-link active">
                            <i class="am-icon-home"></i>
                            <span>即将到期</span>
                        </a>
                    </li>
                  -->
                  
                  
                    <li class="tpl-left-nav-item">
                        <a href="<?php echo url('user/pass'); ?>" class="nav-link active">
                            <i class="am-icon-home"></i>
                            <span>APP设置</span>
                        </a>
                    </li>
                  
                  
                  
                  
                   <?php if(session('power')=='0'){?>
                  
                    <li class="tpl-left-nav-item">
                        <a href="<?php echo url('vip/advert'); ?>" class="nav-link active">
                            <i class="am-icon-home"></i>
                            <span>系统设置</span>
                        </a>
                    </li>
                  
                  
                  
                    <li class="tpl-left-nav-item">
                        <a href="<?php echo url('admin/index'); ?>" class="nav-link active">
                            <i class="am-icon-home"></i>
                            <span>管&nbsp;&nbsp;理&nbsp;&nbsp;员</span>
                        </a>
                    </li>
                  
                  
                       <?php }?>
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                       <li class="tpl-left-nav-item">
                        <a href="javascript:;" class="nav-link tpl-left-nav-link-list">
                            <i class="am-icon-wpforms"></i>
                            <span>激活码管理</span>
                            <i class="am-icon-angle-right tpl-left-nav-more-ico am-fr am-margin-right tpl-left-nav-more-ico-rotate"></i>
                        </a>
                        <ul class="tpl-left-nav-sub-menu" style="display: block;">
                            <li>
                                <a href="<?php echo url('dianka/index'); ?>">
                                    <i class="am-icon-angle-right"></i>
                                    <span>激活码生成</span>
                                    <i class="am-icon-star tpl-left-nav-content-ico am-fr am-margin-right"></i>
                                </a>
                              

                                <a href="<?php echo url('dianka/ylog'); ?>">
                                    <i class="am-icon-angle-right"></i>
                                    <span>有效激活码</span>
                                </a>
                              
                              
                                <a href="<?php echo url('dianka/slog'); ?>">
                                    <i class="am-icon-angle-right"></i>
                                    <span>激活码使用记录</span>
                                </a>
                              
                            </li>
                        </ul>
                    </li>

                  
                  
                      <?php if(session('power')=='0'){?>
                  
             <li class="tpl-left-nav-item">
                        <a href="javascript:;" class="nav-link tpl-left-nav-link-list">
                            <i class="am-icon-table"></i>
                            <span>APP管理</span>
                            <i class="am-icon-angle-right tpl-left-nav-more-ico am-fr am-margin-right"></i>
                        </a>
                        <ul class="tpl-left-nav-sub-menu">
                            <li>
                                <a href="<?php echo url('/index/banner/index/id/1'); ?>">
                                    <i class="am-icon-angle-right"></i>
                                    <span>APP首页轮播图</span>
                                    <i class="am-icon-star tpl-left-nav-content-ico am-fr am-margin-right"></i>
                                </a>

                                <a href="<?php echo url('/index/banner/index/id/2'); ?>">
                                    <i class="am-icon-angle-right"></i>
                                    <span>APP首页观影区</span>
                                    <i class="tpl-left-nav-content tpl-badge-success"> 18  </i>

                                    <a href="<?php echo url('/index/banner/index/id/12'); ?>">
                                        <i class="am-icon-angle-right"></i>
                                        <span>APP首页文字广告</span>
                                        <i class="tpl-left-nav-content tpl-badge-primary">5 </i>


                                        <a href="<?php echo url('/index/banner/index/id/3'); ?>">
                                            <i class="am-icon-angle-right"></i>
                                            <span>APP首页底部大图</span>

                                        </a>
                                      
                                    <a href="<?php echo url('/index/banner/index/id/4'); ?>">
                                        <i class="am-icon-angle-right"></i>
                                        <span>APP首页底部图标</span>
                                        <i class="tpl-left-nav-content tpl-badge-primary">5 </i>


                                        <a href="<?php echo url('/index/banner/index/id/8'); ?>">
                                            <i class="am-icon-angle-right"></i>
                                            <span>APP首页右上角图标</span>

                                        </a>   
                                      
                                      
                      

                                        <a href="<?php echo url('/index/banner/index/id/5'); ?>">
                                            <i class="am-icon-angle-right"></i>
                                            <span>福利页轮播图</span>

                                        </a>   
                                                

                                        <a href="<?php echo url('/index/banner/index/id/6'); ?>">
                                            <i class="am-icon-angle-right"></i>
                                            <span>福利页小图标</span>

                                        </a>   
                                                 

                                        <a href="<?php echo url('/index/banner/index/id/7'); ?>">
                                            <i class="am-icon-angle-right"></i>
                                            <span>福利页底部广告图</span>

                                        </a>   
           
                                                                                                                                                
                                                                      
                            </li>
                        </ul>
                    </li>       
                  
                 
                  
                  
                  
                 <li class="tpl-left-nav-item">
                        <a href="javascript:;" class="nav-link tpl-left-nav-link-list">
                            <i class="am-icon-table"></i>
                            <span>电影/直播管理</span>
                            <i class="am-icon-angle-right tpl-left-nav-more-ico am-fr am-margin-right"></i>
                        </a>
                        <ul class="tpl-left-nav-sub-menu">
                            <li>
                                <a href="<?php echo url('video/index'); ?>">
                                    <i class="am-icon-angle-right"></i>
                                    <span>电影直播源管理</span>
                                    <i class="am-icon-star tpl-left-nav-content-ico am-fr am-margin-right"></i>
                                </a>

                       
                              
                                                  <a href="<?php echo url('mn/index'); ?>">
                                    <i class="am-icon-angle-right"></i>
                                    <span>影院抢板电影管理</span>
                                    <i class="am-icon-star tpl-left-nav-content-ico am-fr am-margin-right"></i>
                                </a>

                              
                                                  <a href="<?php echo url('tv/index'); ?>">
                                    <i class="am-icon-angle-right"></i>
                                    <span>电视直播</span>
                                    <i class="am-icon-star tpl-left-nav-content-ico am-fr am-margin-right"></i>
                                </a>

                              
                                   <!--               <a href="<?php echo url('zhibo/index'); ?>">
                                    <i class="am-icon-angle-right"></i>
                                    <span>游戏直播（推荐）</span>
                                    <i class="am-icon-star tpl-left-nav-content-ico am-fr am-margin-right"></i>
                                </a>
-->
                              
                              
                            </li>
                        </ul>
                    </li>    
                  
                        <?php } ?>
                  
                  
                          
         
                          
                          
                                <li class="tpl-left-nav-item">
                        <a href="javascript:;" class="nav-link tpl-left-nav-link-list">
                            <i class="am-icon-table"></i>
                            <span>用户管理</span>
                            <i class="am-icon-angle-right tpl-left-nav-more-ico am-fr am-margin-right"></i>
                        </a>
                        <ul class="tpl-left-nav-sub-menu">
                            <li>
                              
                              
                       
                                                  <a href="<?php echo url('vip/index'); ?>">
                                    <i class="am-icon-angle-right"></i>
                                    <span>普通用户管理</span>
                                    <i class="am-icon-star tpl-left-nav-content-ico am-fr am-margin-right"></i>
                                </a>
                                     
                                                  <a href=" <?php echo url('user/index'); ?>">
                                    <i class="am-icon-angle-right"></i>
                                    <span>代理管理</span>
                                    <i class="am-icon-star tpl-left-nav-content-ico am-fr am-margin-right"></i>
                                </a>

                              
                              
                                <a href="<?php echo url('user/clog'); ?>">
                                    <i class="am-icon-angle-right"></i>
                                    <span>充值记录</span>
                                    <i class="am-icon-star tpl-left-nav-content-ico am-fr am-margin-right"></i>
                                </a>
                                                  <a href="<?php echo url('user/xlog'); ?>">
                                    <i class="am-icon-angle-right"></i>
                                    <span>开通记录</span>
                                    <i class="am-icon-star tpl-left-nav-content-ico am-fr am-margin-right"></i>
                                </a>

                                <?php if(session('power')=='0'){?>   
                              
                              
                                                  <a href="<?php echo url('user/mlog'); ?>">
                                    <i class="am-icon-angle-right"></i>
                                    <span>代理记录</span>
                                    <i class="am-icon-star tpl-left-nav-content-ico am-fr am-margin-right"></i>
                                </a>

                              
                              
                                                  <a href="<?php echo url('user/daoqi'); ?>">
                                    <i class="am-icon-angle-right"></i>
                                    <span>即将到期</span>
                                    <i class="am-icon-star tpl-left-nav-content-ico am-fr am-margin-right"></i>
                                </a>

                              
                                   <a href="<?php echo url('user/paylog'); ?>">
                                    <i class="am-icon-angle-right"></i>
                                    <span>在线支付交易记录</span>
                                    <i class="am-icon-star tpl-left-nav-content-ico am-fr am-margin-right"></i>
                                </a>
                              
                              
                                   <?php } ?>
                             

                              
                             
                            </li>
                        </ul>
                    </li>         
                          
                           <li class="tpl-left-nav-item">
                        <a href="javascript:;" class="nav-link tpl-left-nav-link-list">
                            <i class="am-icon-table"></i>
                            <span>五级分润</span>
                            <i class="am-icon-angle-right tpl-left-nav-more-ico am-fr am-margin-right"></i>
                        </a>
                        <ul class="tpl-left-nav-sub-menu">
                            <li>
                                                                            <a href="<?php echo url('Moneyorders/lists'); ?>"  >
                                    <i class="am-icon-angle-right"></i>
                                    <span>收入明细查询</span>
                                    <i class="am-icon-star tpl-left-nav-content-ico am-fr am-margin-right"></i>
                                </a>
                                     
                                                  <a href=" <?php echo url('getmoney/lists'); ?>">
                                    <i class="am-icon-angle-right"></i>
                                    <span>现金提现记录</span>
                                    <i class="am-icon-star tpl-left-nav-content-ico am-fr am-margin-right"></i>
                                </a>

                              
                              
                                <a href="<?php echo url('getmoney/tixian'); ?>">
                                    <i class="am-icon-angle-right"></i>
                                    <span>现金提现</span>
                                    <i class="am-icon-star tpl-left-nav-content-ico am-fr am-margin-right"></i>
                                </a>
								   <?php if(session('power')=='0'){?>
								   <a href="<?php echo url('classs/index'); ?>">
                                    <i class="am-icon-angle-right"></i>
                                    <span>分销设置</span>
                                    <i class="am-icon-star tpl-left-nav-content-ico am-fr am-margin-right"></i>
                                </a><?php } ?>
                          
                          
                          
                          
                          
                          
                          
                          
                    <!--      
                          
                          
                
                    <li class="tpl-left-nav-item">
                        <a href="chart.html" class="nav-link tpl-left-nav-link-list">
                            <i class="am-icon-bar-chart"></i>
                            <span>数据表</span>
                            <i class="tpl-left-nav-content tpl-badge-danger">
               12
             </i>
                        </a>
                    </li>

                    <li class="tpl-left-nav-item">
                        <a href="javascript:;" class="nav-link tpl-left-nav-link-list">
                            <i class="am-icon-table"></i>
                            <span>表格</span>
                            <i class="am-icon-angle-right tpl-left-nav-more-ico am-fr am-margin-right"></i>
                        </a>
                        <ul class="tpl-left-nav-sub-menu">
                            <li>
                                <a href="table-font-list.html">
                                    <i class="am-icon-angle-right"></i>
                                    <span>文字表格</span>
                                    <i class="am-icon-star tpl-left-nav-content-ico am-fr am-margin-right"></i>
                                </a>

                                <a href="table-images-list.html">
                                    <i class="am-icon-angle-right"></i>
                                    <span>图片表格</span>
                                    <i class="tpl-left-nav-content tpl-badge-success"> 18  </i>

                                    <a href="form-news.html">
                                        <i class="am-icon-angle-right"></i>
                                        <span>消息列表</span>
                                        <i class="tpl-left-nav-content tpl-badge-primary">5 </i>


                                        <a href="form-news-list.html">
                                            <i class="am-icon-angle-right"></i>
                                            <span>文字列表</span>

                                        </a>
                            </li>
                        </ul>
                    </li>

                    <li class="tpl-left-nav-item">
                        <a href="javascript:;" class="nav-link tpl-left-nav-link-list">
                            <i class="am-icon-wpforms"></i>
                            <span>表单</span>
                            <i class="am-icon-angle-right tpl-left-nav-more-ico am-fr am-margin-right tpl-left-nav-more-ico-rotate"></i>
                        </a>
                        <ul class="tpl-left-nav-sub-menu" style="display: block;">
                            <li>
                                <a href="form-amazeui.html">
                                    <i class="am-icon-angle-right"></i>
                                    <span>Amaze UI 表单</span>
                                    <i class="am-icon-star tpl-left-nav-content-ico am-fr am-margin-right"></i>
                                </a>

                                <a href="form-line.html">
                                    <i class="am-icon-angle-right"></i>
                                    <span>线条表单</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="tpl-left-nav-item">
                        <a href="login.html" class="nav-link tpl-left-nav-link-list">
                            <i class="am-icon-key"></i>
                            <span>登录</span>

                        </a>
                    </li>

-->
                          
                          
                </ul>
            </div>
        </div>





        <div class="tpl-content-wrapper">
           <!-- <div class="tpl-content-page-title">
                Amaze UI 首页组件
            </div>
            <ol class="am-breadcrumb">
                <li><a href="#" class="am-icon-home">首页</a></li>
                <li><a href="#">分类</a></li>
                <li class="am-active">内容</li>
            </ol> -->
          
          
         
          
          	    

<style type="text/css">

a,a:hover{color:#666;text-decoration:none;}
input,button,textarea{font-family:"Microsoft YaHei";font-size:14px;border:0;outline:0;}
img,video{display:block;}
img{vertical-align:middle;}
p,dd,dl{margin:0;padding:0;}
*{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;}
.flex-box{display:-webkit-box;display:-moz-box;display:-ms-flexbox;display:-webkit-flex;display:flex;}
.flex-col{-webkit-box-direction:normal;-webkit-box-orient:vertical;-moz-flex-direction:column;-webkit-flex-direction:column;flex-direction:column;}
.flex-one{-webkit-box-flex:1.0;-moz-flex-grow:1;-webkit-flex-grow:1;flex-grow:1;flex:1;}
.flex-two{-webkit-box-flex:2.0;-moz-flex-grow:2;-webkit-flex-grow:2;flex-grow:2;flex:2;}
.flex-align{-webkit-box-align:center;-moz-align-items:center;-webkit-align-items:center;align-items:center;}
.flex-pack{-webkit-box-pack:center;-moz-justify-content:center;-webkit-justify-content:center;justify-content:center;}
.flex-wrap{-webkit-flex-wrap:wrap;-moz-flex-wrap:wrap;-ms-flex-wrap:wrap;-o-flex-wrap:wrap;flex-wrap:wrap;}

.bigbox .img img{margin:0 auto;height:100%;}
.oper_box{padding-top:20px;}
.copyBut{width:65%;height:40px;line-height:40px;text-align:center;margin:0 auto 0;}
.copyBut p:first-child{border-radius:30px;background-image: -webkit-gradient(linear,left top,right top,from(#ff6144),to(#ff0072)); background-image: -webkit-linear-gradient(left,#ff6144,#ff0072); background-image: -moz-linear-gradient(left,#ff6144,#ff0072); background-image: linear-gradient(to right,#ff6144,#ff0072); background-color: #ff6144;color:#fff;display:inline-block;padding:0 5px 0 10px;border:3px solid #fff;border-right:0;    line-height:34px;}
.copyBut p span{font-size:14px;}
.copyBut a{background:#fff;color:#f13955;display:inline-block;border-radius:0 30px 30px 0;padding:0 10px;}
.copyBut.stpe2 a{border-radius:30px;}
.cue{text-align:center;padding-top:5px;font-size:14px;color:#fff;width:60%;margin:0 auto;}
@media (max-width:374px){
    .copyBut,.cue{width:100%;font-size:14px;}
    .cue{font-size:14px;}
    .copyBut a{font-size:14px;}
}
.download{text-align:center;}
.download a{display:inline-block;background:#fff;color:#f13955;border-radius:20px;height:35px;line-height:35px;padding:0 30px;margin:10px auto;}
body .page-toolbar{opacity:0;}
.layer{position:fixed;top:50%;left:50%;background:rgba(0,0,0,.5);font-size:14px;;padding:10px 20px;color:#fff;-webkit-transform:translate(-50%,-50%);
   -moz-transform:translate(-50%,-50%);
    -ms-transform:translate(-50%,-50%);
     -o-transform:translate(-50%,-50%);
        transform:translate(-50%,-50%);display:none;text-align:center;}
.footImg{position:fixed;bottom:0;left:0;right:0;width:100%;}
</style>


<script src="https://cdn.bootcss.com/clipboard.js/2.0.1/clipboard.min.js"></script>





<div class="tpl-portlet-components">
  
  
  
  
  
  
  
  
                <div class="portlet-title">
                    <div class="caption font-green bold">
                        <span class="am-icon-code"></span> 激活码一键复制 
                    </div>
                </div>
                <div class="tpl-block">
                  
                  
                  
                  
   <!--               
                  
<script type="text/javascript">
function copyUrl2()
    {
        var Url2=document.getElementById("Copy").innerText;
        var oInput = document.createElement('input');
        oInput.value = Url2;
        document.body.appendChild(oInput);
        oInput.select(); // 选择对象
        document.execCommand("Copy"); // 执行浏览器复制命令
        oInput.className = 'oInput';
        oInput.style.display='none';
        layer.msg('激活码复制成功');
    }
</script>

-->
                  
                  
                  
                           <div class="copyBut flex-box" onClick="copyUrl2()">
                <p class="flex-two"><span class="fq-shareapp-code"  id="Copy"   >- - -</span>
                </p>
                            
            </div>
                      
                  <!--
                  <div class="copyBut flex-box">
                  <p class="flex-two"  onClick="copyUrl2()"> 点击复制激活码 </p>
              </div>
              -->
      
<br>

                  
                  <ul class="tpl-task-list">
                                    <li>
                          
                                        <div class="task-title">
                                                    <span class="task-bell"> <i class="am-icon-bullhorn"></i></span>   <span class="task-title-sp"> 无法复制请截屏保存 </span>
                                  
                                        </div>
                       
                                    </li>

                                </ul>
                  
                </div>

            </div>







    <script type="text/javascript">
      function GetQueryString(name){    
        var reg = new RegExp("(^|&)"+ name +"=([^&]*)(&|$)");     
                                    var r = window.location.search.substr(1).match(reg);//search,查询？后面的参数，并匹配正则     
                                    if(r!=null)return  unescape(r[2]); return null;


				}
      
              //获取口令
        var koulin = GetQueryString("jihuoma");
        $("#itemCopy").attr("data-clipboard-text", koulin);
        $(".fq-shareapp-code").text(koulin);

        //自动选中
      /*
        var word = document.querySelector('.fq-shareapp-code');
        document.addEventListener("selectionchange",
        function(e) {
            window.getSelection().selectAllChildren(word);
        },
        false);
        */
        
    </script>           <!-- 调用index/下的文件 -->

          

			


        </div>

    </div>
  <script>
            $('#yao').click(function(){
               layer.open({
                  type: 2, 
                  area: ['100%', '100%'],
                  content: "<?php echo url('Moneyorders/lists'); ?>" //这里content是一个URL，如果你不想让iframe出现滚动条，你还可以content: ['http://sentsin.com', 'no']
                }); 
            })
  </script>

  <!--  <script src="/public/static/amz/js/jquery.min.js"></script> -->

    <script src="/public/static/amz/js/amazeui.min.js"></script>
    <script src="/public/static/amz/js/iscroll.js"></script>


      <!--原JS 数据调用-->
      
<!-- Bottom Scripts -->
<script src="/public/static/assets/js/bootstrap.min.js"></script>
<script src="/public/static/assets/js/TweenMax.min.js"></script>
<script src="/public/static/assets/js/resizeable.js"></script>
<script src="/public/static/assets/js/joinable.js"></script>
<script src="/public/static/assets/js/xenon-api.js"></script>
<script src="/public/static/assets/js/xenon-toggles.js"></script>


<!-- Imported scripts on this page -->
<script src="/public/static/assets/js/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="/public/static/assets/js/jvectormap/regions/jquery-jvectormap-world-mill-en.js"></script>
<script src="/public/static/assets/js/xenon-widgets.js"></script>
<script src="/public/static/assets/js/devexpress-web-14.1/js/globalize.min.js"></script>
<script src="/public/static/assets/js/devexpress-web-14.1/js/dx.chartjs.js"></script>

<script src="/public/static/assets/js/jquery-validate/jquery.validate.js"></script>
<!-- JavaScripts initializations and stuff -->
<script src="/public/static/assets/js/xenon-custom.js"></script>
<script src="/public/static/layer/layer.js"></script>

        <script src="/public/static/amz/js/app.js"></script>  

<script>
    function daili_money(status,id){
        if(status=='1')
        {
            var str = 'all';
        }else{
            if(id=='') {
                var str = "";
                $("input:checkbox[name='checkname']:checked").each(function () {
                    str += $(this).val() + ",";
                });

                if (str == '') {
                    return false
                }
            }else{
                var str     =   id
            }
        }


        layer.prompt({title: '输入充值点数【1元=1点】', formType: 3}, function(pass, index) {
            if(!isNaN(pass))
            {
              if(pass<1){
                 $('.layui-layer-content').append('<br><span style="color: red">最低起充金额100元</span>')
                return false;
                 }
          window.location.href='http://sp.52webrtc.top/daili_pay/?id='+id+'&name=代理自助充点&fee='+pass;
               
                layer.close(index);
            }else{
                $('.layui-layer-content').append('<br><span style="color: red">请填入纯数字</span>')
                return false;
            }


        })


    }

</script>


    
</body>

</html>