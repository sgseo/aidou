<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:56:"/www/wwwroot/sp/application/index/view/classs/index.html";i:1559661124;s:50:"/www/wwwroot/sp/application/index/view/layout.html";i:1561713348;s:57:"/www/wwwroot/sp/application/index/view/public/header.html";i:1559661124;s:57:"/www/wwwroot/sp/application/index/view/public/footer.html";i:1559661124;}*/ ?>
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
          
          
         
          
          	 <?php if(session('power')=='0'){?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Xenon Boostrap Admin Panel" />
    <meta name="author" content="" />

    <title>APP管理系统</title>

    <!--<link rel="stylesheet" href="http://fonts.useso.com/css?family=Arimo:400,700,400italic">-->
    <link rel="stylesheet" href="/public/static/assets/css/fonts/linecons/css/linecons.css">

    <link rel="stylesheet" href="/public/static/assets/css/fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/public/static/assets/css/bootstrap.css">
    <link rel="stylesheet" href="/public/static/assets/css/xenon-core.css">
    <link rel="stylesheet" href="/public/static/assets/css/xenon-forms.css">
    <link rel="stylesheet" href="/public/static/assets/css/xenon-components.css">
    <link rel="stylesheet" href="/public/static/assets/css/xenon-skins.css">
    <link rel="stylesheet" href="/public/static/assets/css/custom.css">

    <script src="/public/static/assets/js/jquery-1.11.1.min.js"></script>



    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="/public/static/assets/js/html5shiv.min.js"></script>
    <script src="/public/static/assets/js/respond.min.js"></script>
    <![endif]-->

    <link rel="stylesheet" href="/public/static/assets/css/fonts/elusive/css/elusive.css">
    <style>
        .pagination{
            float: right;
        }
    </style>

</head>

<div class="page-title">



    <div class="title-env">

        <h1 class="title">分销设置</h1>

    </div>







</div>

<div class="panel panel-default">









        <form role="form" id="form1" method="post" action="<?php echo url('save'); ?>" class="validate" onsubmit="return checkpwd();">



		  



   

    

            <div class="form-group">

             <label class="control-labell" for="field-5" >开通代理需要的金额（元）</label>

             <br>

             <input  class="form-control" style="margin: 0px -33.5px 0px 0px; width: 650px; height: 30px;" value="<?php echo $data['money']; ?>" name="money" id="money" >

             </div>

         <div class="form-group">

             <label class="control-labell" for="field-5" >一级返利（元）</label>

             <br>

             <input  class="form-control" style="margin: 0px -33.5px 0px 0px; width: 650px; height: 30px;" value="<?php echo $data['rebate']; ?>" name="rebate"  id="rebate">

         </div>

         <div class="form-group">

             <label class="control-labell" for="field-5" >二级返利（元）</label>

             <br>

             <input  class="form-control" style="margin: 0px -33.5px 0px 0px; width: 650px; height: 30px;" value="<?php echo $data['rebate2']; ?>" name="rebate2"  id="rebate2">

         </div>

         <div class="form-group">

             <label class="control-labell" for="field-5" >三级返利（元）</label>

             <br>

             <input  class="form-control" style="margin: 0px -33.5px 0px 0px; width: 650px; height: 30px;" value="<?php echo $data['rebate3']; ?>" name="rebate3"  id="rebate3">

         </div>

        <div class="form-group">

             <label class="control-labell" for="field-5" >四级返利（元）</label>

             <br>

             <input  class="form-control" style="margin: 0px -33.5px 0px 0px; width: 650px; height: 30px;" value="<?php echo $data['rebate4']; ?>" name="rebate4"  id="rebate4">

         </div>

         <div class="form-group">

             <label class="control-labell" for="field-5" >五级返利（元）</label>

             <br>

             <input  class="form-control" style="margin: 0px -33.5px 0px 0px; width: 650px; height: 30px;" value="<?php echo $data['rebate5']; ?>" name="rebate5"  id="rebate5">

         </div>



            

           <div class="form-group">

                <button type="submit" class="btn btn-success">提交</button>

     

            </div>

        </form>



    </div>





<?php echo !empty($code) && $code=='1'?'<div class="col-md-6" id="alert" style="position:fixed;right:0px;bottom:0px;  width: 350px">

    <div class="alert alert-success">

        <button type="button" class="close" data-dismiss="alert">

            <span aria-hidden="true">×</span>

            <span class="sr-only">Close</span>

        </button>



        <strong>恭喜 !</strong> 修改成功.

    </div>

</div>



':''; ?>

<script>

    function checkpwd(){

       

    }

    setTimeout("$('#alert').fadeOut(1000)",2000)

</script>



<script>

var number=9; //定义条目数



function LMYC() {

var lbmc;

    for (i=1;i<=number;i++) {

        lbmc = eval('LM' + i);

        lbmc.style.display = 'none';

    }

}

 

function ShowFLT(i) {

    lbmc = eval('LM' + i);

    if (lbmc.style.display == 'none') {

        LMYC();

        lbmc.style.display = '';

    }

    else {

        lbmc.style.display = 'none';

    }

}

</script>



<script type="text/javascript">

var __aObj=document.getElementsByTagName("a");

var __length=__aObj.length;

for(var i=0;i<__length;i++){

	__aObj[i].onfocus=function(){this.blur();}

}

</script>

<link rel="stylesheet" href="/public/static/assets/css/fonts/meteocons/css/meteocons.css">

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


<script src="/public/static/assets/js/xenon-widgets.js"></script>
<script src="/public/static/assets/js/devexpress-web-14.1/js/globalize.min.js"></script>
<script src="/public/static/assets/js/devexpress-web-14.1/js/dx.chartjs.js"></script>

<script src="/public/static/assets/js/jquery-validate/jquery.validate.js"></script>
<!-- JavaScripts initializations and stuff -->
<script src="/public/static/assets/js/xenon-custom.js"></script>
<script src="/public/static/layer/layer.js"></script>
<?php }?>           <!-- 调用index/下的文件 -->

          

			


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