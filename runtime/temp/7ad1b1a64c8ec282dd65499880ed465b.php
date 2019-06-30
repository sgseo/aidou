<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:55:"/www/wwwroot/sp/application/index/view/index/index.html";i:1559661124;s:50:"/www/wwwroot/sp/application/index/view/layout.html";i:1561713348;}*/ ?>
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
          
          
         
          
          	 <script type="text/javascript">
    jQuery(document).ready(function($)
    {
        // Notifications
        setTimeout(function()
        {
            var opts = {
                "closeButton": true,
                "debug": false,
                "positionClass": "toast-top-right toast-default",
                "toastClass": "black",
                "onclick": null,
                "showDuration": "100",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            };

            toastr.info("You have been awarded with 1 year free subscription. Enjoy it!", "Account Subcription Updated", opts);
        }, 3000);

        // Charts
        var xenonPalette = ['#68b828','#7c38bc','#0e62c7','#fcd036','#4fcdfc','#00b19d','#ff6264','#f7aa47'];

        // Pageviews Visitors Chart
        var i = 0,
            line_chart_data_source = [
                { id: ++i, part1: 4, part2: 2 },
                { id: ++i, part1: 5, part2: 3 },
                { id: ++i, part1: 5, part2: 3 },
                { id: ++i, part1: 4, part2: 2 },
                { id: ++i, part1: 3, part2: 1 },
                { id: ++i, part1: 3, part2: 2 },
                { id: ++i, part1: 5, part2: 3 },
                { id: ++i, part1: 7, part2: 4 },
                { id: ++i, part1: 9, part2: 5 },
                { id: ++i, part1: 7, part2: 4 },
                { id: ++i, part1: 7, part2: 3 },
                { id: ++i, part1: 11, part2: 6 },
                { id: ++i, part1: 10, part2: 8 },
                { id: ++i, part1: 9, part2: 7 },
                { id: ++i, part1: 8, part2: 7 },
                { id: ++i, part1: 8, part2: 7 },
                { id: ++i, part1: 8, part2: 7 },
                { id: ++i, part1: 8, part2: 6 },
                { id: ++i, part1: 15, part2: 5 },
                { id: ++i, part1: 10, part2: 5 },
                { id: ++i, part1: 9, part2: 6 },
                { id: ++i, part1: 9, part2: 3 },
                { id: ++i, part1: 8, part2: 5 },
                { id: ++i, part1: 8, part2: 4 },
                { id: ++i, part1: 9, part2: 5 },
                { id: ++i, part1: 8, part2: 6 },
                { id: ++i, part1: 8, part2: 5 },
                { id: ++i, part1: 7, part2: 6 },
                { id: ++i, part1: 7, part2: 5 },
                { id: ++i, part1: 6, part2: 5 },
                { id: ++i, part1: 7, part2: 6 },
                { id: ++i, part1: 7, part2: 5 },
                { id: ++i, part1: 8, part2: 5 },
                { id: ++i, part1: 6, part2: 5 },
                { id: ++i, part1: 5, part2: 4 },
                { id: ++i, part1: 5, part2: 3 },
                { id: ++i, part1: 6, part2: 3 },
            ];

        $("#pageviews-visitors-chart").dxChart({
            dataSource: line_chart_data_source,
            commonSeriesSettings: {
                argumentField: "id",
                point: { visible: true, size: 5, hoverStyle: {size: 7, border: 0, color: 'inherit'} },
                line: {width: 1, hoverStyle: {width: 1}}
            },
            series: [
                { valueField: "part1", name: "Pageviews", color: "#68b828" },
                { valueField: "part2", name: "Visitors", color: "#eeeeee" },
            ],
            legend: {
                position: 'inside',
                paddingLeftRight: 5
            },
            commonAxisSettings: {
                label: {
                    visible: false
                },
                grid: {
                    visible: true,
                    color: '#f9f9f9'
                }
            },
            valueAxis: {
                max: 25
            },
            argumentAxis: {
                valueMarginsEnabled: false
            },
        });




        // Resize charts
        $(window).on('xenon.resize', function()
        {
            $("#pageviews-visitors-chart").data("dxChart").render();

        });

    });


</script>

            <div class="row">
                <div class="am-u-lg-3 am-u-md-6 am-u-sm-12">
                    <div class="dashboard-stat blue">
                        <div class="visual">
                            <i class="am-icon-comments-o"></i>
                        </div>
                        <div class="details"  data-count=".num" data-from="1" data-to="<?php echo $ycount; ?>" data-suffix="人" data-duration="3" data-easing="false">
                            <div class="number num"> - - - </div>
                            <div class="desc"> 用户总数 </div>
                        </div>
                        <a class="more"  data-count=".num" data-from="1" data-to="<?php echo $tzcount; ?>" data-suffix="人" data-duration="3" data-easing="false" >今天登录人数：<span class="num">- - -</span>
                    <i class="m-icon-swapright m-icon-white"></i>
                </a>
                    </div>
                </div>
                <div class="am-u-lg-3 am-u-md-6 am-u-sm-12">
                    <div class="dashboard-stat red">
                        <div class="visual">
                            <i class="am-icon-bar-chart-o"></i>
                        </div>
                        <div class="details"  data-count=".num" data-from="1" data-to="<?php echo $fcount; ?>" data-suffix="人" data-duration="3" data-easing="false">
                            <div class="number num"> - - -</div>
                            <div class="desc"> 付费用户 </div>
                        </div>
                        <a class="more" href="#"> 查看更多
                    <i class="m-icon-swapright m-icon-white"></i>
                </a>
                    </div>
                </div>
                <div class="am-u-lg-3 am-u-md-6 am-u-sm-12">
                    <div class="dashboard-stat green">
                        <div class="visual">
                            <i class="am-icon-apple"></i>
                        </div>
                        <div class="details "  data-count=".num" data-from="1" data-to="<?php echo $mcount; ?>" data-suffix="人" data-duration="3" data-easing="false">
                            <div class="number num"> - - - </div>
                            <div class="desc"> 免费用户 </div>
                        </div>
                        <a class="more" href="#"> 查看更多
                    <i class="m-icon-swapright m-icon-white"></i>
                </a>
                    </div>
                </div>
                <div class="am-u-lg-3 am-u-md-6 am-u-sm-12"  data-count=".num" data-from="1" data-to="<?php echo $dcount; ?>" data-suffix="人" data-duration="3" data-easing="false">
                    <div class="dashboard-stat purple">
                        <div class="visual">
                            <i class="am-icon-android"></i>
                        </div>
                        <div class="details">
                            <div class="number num"> - - - </div>
                            <div class="desc"> 代理数 </div>
                        </div>
                        <a class="more" href="#"> 查看更多
                    <i class="m-icon-swapright m-icon-white"></i>
                </a>
                    </div>
                </div>



            </div>





		
			
			 <div class="row">
			
			   <div class="am-u-md-6 am-u-sm-12 row-mb">
                    <div class="tpl-portlet">
                        <div class="tpl-portlet-title">
                            <div class="tpl-caption font-green ">
                                <span>项目进度</span>
                            </div>

                        </div>

                        <div class="am-tabs tpl-index-tabs" data-am-tabs>
           

                            <div class="am-tabs-bd">
                                <div class="am-tab-panel am-fade am-in am-active">
                                    <div id="wrapperA" class="wrapper">
                                        <div id="scroller" class="scroller">
                                            <ul class="tpl-task-list tpl-task-remind">
                                                <li>
                                                    <div class="cosA">
                                                        <span class="cosIco">
                        <i class="am-icon-bell-o"></i>
                      </span>

                                                        <span> 10-9 修复客服获取逻辑；下个版本新增短视频！</span>
                                                    </div>

                                                </li>
                                                <li>
                                                    <div class="cosA">
                                                        <span class="cosIco label-danger">
                        <i class="am-icon-bolt"></i>
                      </span>

                                                        <span> 可付费对接微信/QQ登录；</span>
                                                    </div>

                                                </li>

                                                <li>
                                                    <div class="cosA">
                                                        <span class="cosIco label-danger">
                        <i class="am-icon-bolt"></i>
                      </span>

                                                        <span> 未完待续……</span>
                                                    </div>

                                                </li>

  
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                              

                            </div>
                        </div>

                    </div>
                </div>
			
        
            </div>
			           <!-- 调用index/下的文件 -->

          

			


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