<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:53:"/www/wwwroot/sp/application/index/view/vip/index.html";i:1559661124;s:50:"/www/wwwroot/sp/application/index/view/layout.html";i:1561713348;}*/ ?>
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
          
          
         
          
          	 
<!-- Responsive Table -->
<div class="row">
    <div class="col-md-12">

        <div class="panel panel-default">


  <!--标题-->
         
       <div class="panel-heading">
              
               <div class="caption font-green bold">
                        <span class="am-icon-code"></span> 普通用户管理 （数量:<?php echo $count; ?>）
       		  </div>

      </div>
       
   
    <!--标题-->
            <div class="panel-heading">

                <div class="panel-options">


                    <a href="#" data-toggle="panel">
                        <span class="collapse-icon">&ndash;</span>
                        <span class="expand-icon">+</span>
                    </a>

                    <a href="#" data-toggle="reload">
                        <i class="fa-rotate-right"></i>
                    </a>

                    <a href="#" data-toggle="remove">
                        &times;
                    </a>
                </div>
            </div>
            <div class="panel-body">
                <div class="table-responsive" data-pattern="priority-columns" data-focus-btn-icon="fa-asterisk"
                     data-sticky-table-header="true" data-add-display-all-btn="true" data-add-focus-btn="true">
                    <div style="text-align: center">
						<form  method="get" action="<?php echo url('vip/index'); ?>">
                        到期时间: <input class="form-control" type="date" name="start" >&nbsp;-&nbsp;<input class="form-control" type="date" name="end" >&nbsp;&nbsp;&nbsp;&nbsp;
                        <hr>
                       
						<textarea class="form-control" placeholder="&nbsp;账户,昵称关键词" type="text" name="key" style="height: 38px"></textarea>
                        <button type="submit" class="btn btn-turquoise" style="height: 38px;margin-top: 7px;">搜索</button>
                            <input type="hidden" name="parentid" value="<?php echo $parentid; ?>">
                    </form>
                    </div>
                    <?php if(session('power')=='0'){?><div class="btn-toolbar">  
                        <div class="btn-group focus-btn-group">
                      <!--  
                            <a href="<?php echo url('vip/add'); ?>">
                                <button class="btn btn-default"><i class="el-pencil"></i> 添加</button>
                            </a>
                        </div>
                        <div class="btn-group focus-btn-group">
                        
                            <a onclick="ptime()">
                                <button class="btn btn-default"><i class="el-pencil"></i> 批量添加</button>
                            </a>
                        </div>--><?php } ?>
                        <div class="btn-group dropdown-btn-group pull-right">
                            <?php if(session('power')=='0'){?>
                            <a href="javascript:;" onclick="del('')" class=btn-single">
                                <button class="btn btn-danger" ><i class="el-cancel-circled2"></i>批量删除
                                </button>
                            </a>

                            <a href="javascript:;" onclick="status('1','')" class=btn-single">
                                <button class="btn btn-blue" ><i class="el-star"></i> 批量解封
                                </button>
                            </a>
                            <a href="javascript:;" onclick="status('0','')" class=btn-single">
                                <button class="btn btn-blue" ><i class="el-star-empty"></i>批量封号
                                </button>
                            </a>
                            <?php }?>
                            <!--<a href="javascript:;" onclick="btime('')" class=btn-single">-->
                                <!--<button class="btn btn-warning" ><i class="el-clock"></i> 批量充值时间-->
                                <!--</button>-->
                            <!--</a>-->
                            <?php if(session('power')=='0'){?>
                            <a href="javascript:;" onclick="ctime()" class=btn-single">
                                <button class="btn btn-warning" ><i class="el-clock-circled"></i> 时间补偿
                                </button>
                            </a>
                            <?php }if(session('power')=='0'){?>
                            <a href="javascript:;" onclick="money('0','')" class=btn-single">
                                <button class="btn btn-red" ><i class="el-basket-circled"></i> 批量充值
                                </button>
                            </a>
                            <?php }?>
                            <!--<a href="javascript:;" onclick="money('1','')" class=btn-single">-->
                                <!--<button class="btn btn-red" ><i class="el-basket"></i> 全部充值-->
                                <!--</button>-->
                            <!--</a>-->
                        </div>
                    </div>
  <div class="table-responsive" data-pattern="priority-columns" data-focus-btn-icon="fa-asterisk"
                     data-sticky-table-header="true" data-add-display-all-btn="true" data-add-focus-btn="true">
                    <table cellspacing="0" class="table table-small-font table-bordered table-striped">
                        <thead>
                        <tr>
                            <?php if(session('power')=='0'){?>
                            <th style="width: 50px"><input id="checkall" name="checkall" value="全选" type="checkbox" ></th>
                            <th style="width: 50px">ID</th>
                            <?php }?>
                            <th>账户</th>
                            <?php if(session('power')=='0'){?>
                            <th>封号</th>
                            <?php }?>
                            <th>创建时间</th>
                            <th>最后登陆时间</th>
                            <th>会员到期时间</th>
                            <th>归属人</th>
                            <th>登陆次数</th>
                           <th>分享积分</th>
                            <th style="width: 150px">操作</th>

                        </tr>
                        </thead>
                        <tbody>
                        <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <tr>
                            <?php if(session('power')=='0'){?>
                            <th style="width: 50px">
                               <input name="checkname" value="<?php echo $vo['id']; ?>" type="checkbox" >
                            </th>
                            <th style="width: 50px"><?php echo $vo['id']; ?></th>
                            <?php }?>
                            <td><?php echo $vo['username']; ?></td>
                            <?php if(session('power')=='0'){?>
                            <td><button class="btn btn-gray" onclick="status('<?php echo !empty($vo['status']) && $vo['status']=='1'?'0':'1'; ?>','<?php echo $vo['id']; ?>')"><?php echo !empty($vo['status']) && $vo['status']==='1'?'<span style="color: green"> 封&nbsp;&nbsp;&nbsp;&nbsp;号</span>':'<span style="color: red"> 解封</span>'; ?></button></td>
                       <?php }?>
                            <td><?php echo date("Y-m-d H:i:s",$vo['ctime']); ?></td>
                            <td>

                                <?php
                                    if($vo['logintime']=='0')
                                    {
                                        echo '未登陆';
                                    }else{
                                        echo date('Y-m-d H:i:s',$vo['logintime']);
                                    }
                                ?>


                            </td>
                            <td><button onclick="btime('<?php echo $vo['id']; ?>')" class="btn btn-gray">
                                <?php
                                if($vo['type']=='1')
                                {
                                echo "永久";
                                }else{
                                if($vo['lasttime']=='0')
                                    {
                                        echo '未充值';
                                    }elseif($vo['lasttime']<time()){
                                        echo '<span style="color:red">'.date('Y-m-d H:i:s',$vo['lasttime']).'</span>';
                                }else{
                                echo date('Y-m-d H:i:s',$vo['lasttime']);
                                }
                                }

                                ?></button></td>
                        &nbsp;

                            <td><?php echo $vo['parentid']=='0'?'暂无归属':gui($vo['parentid']) ?></td>
                            <td><?php echo $vo['count']; ?></td>
<td><?php echo $vo['sign']; ?></td>
                            <td>
                                <?php if($vo['parentid']==session('user') || session('power')=='0'){?>  &nbsp;
                             <?php if(session('power')=='0'){?>
   <a href="<?php echo url('vip/update',['id'=>$vo['id']]); ?>" title="修改"> <i class="el-edit"></i></a><?php } }if(session('power')=='0'){?>  &nbsp;
                                <a href="javascript:;" onclick="del('<?php echo $vo['id']; ?>')" title="删除" class=btn-single"><i class="el-trash-circled"></i></a>
                                &nbsp;      &nbsp;
                                <a href="<?php echo url('user/log',['id'=>$vo['id']]); ?>" title="充值日志" class=btn-single">  <i class="el-list"></i></i></a>
                                &nbsp;      &nbsp;
                                <a onclick="omoney('','<?php echo $vo['id']; ?>')" title="扣款"  class=btn-single"> <i class="el-skype"></i></a>
                                <a href="<?php echo url('user/pass_log',['id'=>$vo['id']]); ?>" title="密码修改日志" > <i class="el-edit"></i></a>
<?php }?>


                            </td>

                        </tr>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                        </tbody>
                    </table>
</div>
                    <?php echo $list->render(); ?>

                </div>

            </div>


        </div>

    </div>


</div>

<script>
    function omoney(status,id){
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


        layer.prompt({title: '请输入扣款金额', formType: 3}, function(pass, index) {
            if(!isNaN(pass))
            {
                $.ajax({
                    'type'  :   'post',
                    'url'   :   '<?php echo url("user/omoney"); ?>',
                    'data'  :   {
                        'id'    :   str,
                        'status':   status,
                        'money' :   pass,
                        'type'  :   1
                    },
                    'dataType'  :   'json',
                    'success'   :   function (msg)
                    {
                        if(msg.code=='1')
                        {

                            window.location.reload();
                        }else{
                            layer.closeAll();
                            $('#del').php('<div class="col-md-6" id="alert">' +
                                '<div class="alert alert-danger"  style="position:fixed;right:0px;bottom:0px;  width: 350px">' +
                                ' <button type="button" class="close" data-dismiss="alert">' +
                                '<span aria-hidden="true">×</span>' +
                                '<span class="sr-only">Close</span>' +
                                '</button>' +
                                '<strong> 糟糕 !</strong> '+msg.msg+
                                '' +
                                '</div>' +
                                '</div>');
                            setTimeout("yalert()", 2000)
                        }

                        layer.closeAll();
                        setTimeout("$('#alert').fadeOut(1000)", 2000)
                    },
                    'error'     :   function (err)
                    {
                        layer.closeAll();
                        $('#del').php('<div class="col-md-6" id="alert">' +
                            '<div class="alert alert-danger"  style="position:fixed;right:0px;bottom:0px;  width: 350px">' +
                            ' <button type="button" class="close" data-dismiss="alert">' +
                            '<span aria-hidden="true">×</span>' +
                            '<span class="sr-only">Close</span>' +
                            '</button>' +
                            '<strong> 糟糕 !</strong> 服务器错误'+
                            '.请刷新后重试' +
                            '</div>' +
                            '</div>');
                        setTimeout("yalert()", 2000)
                    }
                })
                layer.close(index);
            }else{
                $('.layui-layer-content').append('<br><span style="color: red">请填入纯数字</span>')
                return false;
            }


        })


    }

</script>



<script>
    $("input[name='checkall']").click(function(){
//判断当前点击的复选框处于什么状态$(this).is(":checked") 返回的是布尔类型
        if($(this).is(":checked")){
            $("input[name='checkname']").prop("checked",true);
        }else{
            $("input[name='checkname']").prop("checked",false);
        }
    });
</script>
<?php echo !empty($code) && $code==1?'
<div class="col-md-6" id="alert" style="position:fixed;right:0px;bottom:0px;  width: 350px">
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">
            <span aria-hidden="true">×</span>
            <span class="sr-only">Close</span>
        </button>

        <strong>恭喜 !</strong> 添加成功.
    </div>
</div>

':''; ?>


<?php echo !empty($code) && $code==2?'
<div class="col-md-6" id="alert" style="position:fixed;right:0px;bottom:0px;  width: 350px">
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">
            <span aria-hidden="true">×</span>
            <span class="sr-only">Close</span>
        </button>

        <strong>恭喜 !</strong> 修改成功.
    </div>
</div>

':''; ?>
<?php echo !empty($code) && $code==3?'
<div class="col-md-6" id="alert" style="position:fixed;right:0px;bottom:0px;  width: 350px">
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">
            <span aria-hidden="true">×</span>
            <span class="sr-only">Close</span>
        </button>

        <strong>恭喜 !</strong> 删除成功.
    </div>
</div>

':''; if(session('power')=='0'){?>
<script>
    function del(id){
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
        layer.confirm('您是否删除该数据', {
            btn: ['确定','取消'] //按钮
        }, function(){
            $.ajax({
                'type'  :   'post',
                'url'   :   '<?php echo url("user/delete"); ?>',
                'data'  :   {
                    'id'    :   str
                },
                'dataType'  :   'json',
                'success'   :   function (msg)
                {
                    if(msg.code=='1')
                    {
                        window.location.reload();
                    }else{
                        layer.closeAll();
                        $('#del').php('<div class="col-md-6" id="alert">' +
                            '<div class="alert alert-danger"  style="position:fixed;right:0px;bottom:0px;  width: 350px">' +
                            ' <button type="button" class="close" data-dismiss="alert">' +
                            '<span aria-hidden="true">×</span>' +
                            '<span class="sr-only">Close</span>' +
                            '</button>' +
                            '<strong> 糟糕 !</strong> 删除失败'+
                            '.请刷新后重试' +
                            '</div>' +
                            '</div>');
                    }


                    layer.closeAll();
                    setTimeout("$('#alert').fadeOut(1000)", 2000)
                },
                'error'     :   function (err)
                {
                    layer.closeAll();
                    $('#del').php('<div class="col-md-6" id="alert">' +
                        '<div class="alert alert-danger"  style="position:fixed;right:0px;bottom:0px;  width: 350px">' +
                        ' <button type="button" class="close" data-dismiss="alert">' +
                        '<span aria-hidden="true">×</span>' +
                        '<span class="sr-only">Close</span>' +
                        '</button>' +
                        '<strong> 糟糕 !</strong> 服务器错误'+
                        '.请刷新后重试' +
                        '</div>' +
                        '</div>');
                    setTimeout("yalert()", 2000)
                }
            })
        })

    }
    function yalert() {

        $('#alert').fadeOut(1000);
        $('#alert').remove()
    }

</script>


<script>
    function status(status,id){

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


        layer.confirm('您是否审核通过这些数据', {
            btn: ['确定','取消'] //按钮
        }, function(){
            $.ajax({
                'type'  :   'post',
                'url'   :   '<?php echo url("user/status"); ?>',
                'data'  :   {
                    'id'    :   str,
                    'status':   status
                },
                'dataType'  :   'json',
                'success'   :   function (msg)
                {

                    window.location.reload();



                    layer.closeAll();
                    setTimeout("$('#alert').fadeOut(1000)", 2000)
                },
                'error'     :   function (err)
                {
                    layer.closeAll();
                    $('#del').php('<div class="col-md-6" id="alert">' +
                        '<div class="alert alert-danger"  style="position:fixed;right:0px;bottom:0px;  width: 350px">' +
                        ' <button type="button" class="close" data-dismiss="alert">' +
                        '<span aria-hidden="true">×</span>' +
                        '<span class="sr-only">Close</span>' +
                        '</button>' +
                        '<strong> 糟糕 !</strong> 服务器错误'+
                        '.请刷新后重试' +
                        '</div>' +
                        '</div>');
                    setTimeout("yalert()", 2000)
                }
            })
        })

    }
    function yalert() {

        $('#alert').fadeOut(1000);
        $('#alert').remove()
    }

</script>



<?php }if(session('power')=='0'){?>
<script>
    function money(status,id){
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


        layer.prompt({title: '请输入充值点数', formType: 3}, function(pass, index) {
            if(!isNaN(pass))
            {
                $.ajax({
                    'type'  :   'post',
                    'url'   :   '<?php echo url("user/money"); ?>',
                    'data'  :   {
                        'id'    :   str,
                        'status':   status,
                        'money' :   pass,
                        'type'  :   2
                    },
                    'dataType'  :   'json',
                    'success'   :   function (msg)
                    {
                        if(msg.code=='0')
                        {

                            layer.closeAll();
                            $('#del').php('<div class="col-md-6" id="alert">' +
                                '<div class="alert alert-danger"  style="position:fixed;right:0px;bottom:0px;  width: 350px">' +
                                ' <button type="button" class="close" data-dismiss="alert">' +
                                '<span aria-hidden="true">×</span>' +
                                '<span class="sr-only">Close</span>' +
                                '</button>' +
                                '<strong> 糟糕 !</strong> '+ msg.msg+
                                '.请刷新后重试' +
                                '</div>' +
                                '</div>');
                            setTimeout("yalert()", 2000)
                        }else{
                            window.location.reload();

                        }
                        layer.closeAll();
                        setTimeout("$('#alert').fadeOut(1000)", 2000)

                    },
                    'error'     :   function (err)
                    {
                        layer.closeAll();
                        $('#del').php('<div class="col-md-6" id="alert">' +
                            '<div class="alert alert-danger"  style="position:fixed;right:0px;bottom:0px;  width: 350px">' +
                            ' <button type="button" class="close" data-dismiss="alert">' +
                            '<span aria-hidden="true">×</span>' +
                            '<span class="sr-only">Close</span>' +
                            '</button>' +
                            '<strong> 糟糕 !</strong> 服务器错误'+
                            '.请刷新后重试' +
                            '</div>' +
                            '</div>');
                        setTimeout("yalert()", 2000)
                    }
                })
                layer.close(index);
            }else{
                $('.layui-layer-content').append('<br><span style="color: red">请填入纯数字</span>')
                return false;
            }


        })


    }

</script>

<?php }?>

<script>
    function ctime(){

        layer.prompt({title: '请输入补充天数', formType: 5}, function(pass, index) {
            if(!isNaN(pass))
            {
                $.ajax({
                    'type'  :   'post',
                    'url'   :   '<?php echo url("user/ctime"); ?>',
                    'data'  :   {
                        'day'   :   pass,
                        'type'  :   2
                    },
                    'dataType'  :   'json',
                    'success'   :   function (msg)
                    {
                        window.location.reload();

                        layer.closeAll();
                        setTimeout("$('#alert').fadeOut(1000)", 2000)
                    },
                    'error'     :   function (err)
                    {
                        layer.closeAll();
                        $('#del').php('<div class="col-md-6" id="alert">' +
                            '<div class="alert alert-danger"  style="position:fixed;right:0px;bottom:0px;  width: 350px">' +
                            ' <button type="button" class="close" data-dismiss="alert">' +
                            '<span aria-hidden="true">×</span>' +
                            '<span class="sr-only">Close</span>' +
                            '</button>' +
                            '<strong> 糟糕 !</strong> 服务器错误'+
                            '.请刷新后重试' +
                            '</div>' +
                            '</div>');
                        setTimeout("yalert()", 2000)
                    }
                })
                layer.close(index);
            }else{
                $('.layui-layer-content').append('<br><span style="color: red">请填入纯数字</span>')
                return false;
            }


        })


    }

</script>
<script>
    function btime(id) {
        if(id=='') {
            var str = "";
            $("input:checkbox[name='checkname']:checked").each(function () {
                str += $(this).val() + "-";
            });

            if (str == '') {
                return false
            }
        }else{
            var str     =   id
        }
		var windowWidth = $('body').width();
		console.log(windowWidth);
		if(windowWidth > 1136){
			layer.open({
				type: 1,
				skin: 'layui-layer-rim', //加上边框
				area: ['500px', '300px'], //宽高
				content: '<div class="form-group" style="left:0px">' +
			<?php if(session('power')=='0'){?>	' <label class="control-label">&nbsp;&nbsp;&nbsp;套餐</label>' +
				'<select id="ctime" class="form-control">' +

				' <option value="1"}>七天:0.75元</option>' +
				' <option value="3"}>一个月:2.5元</option>' +
				' <option value="8"}>三个月:7.5元</option>' +
				' <option value="10"}>六个月:15元</option>' +              
				' <option value="18"}>一年:55元</option>' +
				' <option value="30"}>永久:149.5元</option>' +
				' </select>' +
				' </div>' +
				'<button class="btn btn-default" onclick="pay(\'' + str + '\')" style="float: right;margin-right: 20px;background-color: #68b828"> 充值</button>'<?php } ?>
			});
		}else{
			layer.open({
				type: 1,
				skin: 'layui-layer-rim', //加上边框
				area: ['80%', '300px'], //宽高
				content: '<div class="form-group" style="left:0px">' +
			<?php if(session('power')=='0'){?>	' <label class="control-label">&nbsp;&nbsp;&nbsp;套餐</label>' +
				'<select id="ctime" class="form-control">' +

				' <option value="1"}>七天:0.75元</option>' +
				' <option value="3"}>一个月:2.5元</option>' +
				' <option value="8"}>三个月:7.5元</option>' +
				' <option value="10"}>六个月:15元</option>' +              
				' <option value="18"}>一年:55元</option>' +
				' <option value="30"}>永久:149.5元</option>' +
				' </select>' +
				' </div>' +
				'<button class="btn btn-default" onclick="pay(\'' + str + '\')" style="float: right;margin-right: 20px;background-color: #68b828"> 充值</button>'<?php } ?>
			});
		}
        
    }

</script>
<script>
    function pay(id)
    {
        var ctime   =   $('#ctime').val();


        $.ajax({
            'type'  :   'post',
            'url'   :   '<?php echo url("user/chong"); ?>',
            'data'  :   {
                'ctime'  :   ctime,
                'id'    :   id
            },
            'dataType'  :   'json',
            'success'   :   function (msg)
            {
                if(msg.code=='0')
                {
                    layer.closeAll();
                    $('#del').php('<div class="col-md-6" id="alert">' +
                        '<div class="alert alert-danger"  style="position:fixed;right:0px;bottom:0px;  width: 350px">' +
                        ' <button type="button" class="close" data-dismiss="alert">' +
                        '<span aria-hidden="true">×</span>' +
                        '<span class="sr-only">Close</span>' +
                        '</button>' +
                        '<strong> 糟糕 !</strong>' + msg.msg+
                        '</div>' +
                        '</div>');
                    setTimeout("yalert()", 2000)

                }else if(msg.code=='1'){

                    window.location.reload();
                }

                layer.closeAll();
                setTimeout("$('#alert').fadeOut(1000)", 2000)
            },
            'error'     :   function (err)
            {
                layer.closeAll();
                $('#del').php('<div class="col-md-6" id="alert">' +
                    '<div class="alert alert-danger"  style="position:fixed;right:0px;bottom:0px;  width: 350px">' +
                    ' <button type="button" class="close" data-dismiss="alert">' +
                    '<span aria-hidden="true">×</span>' +
                    '<span class="sr-only">Close</span>' +
                    '</button>' +
                    '<strong> 糟糕 !</strong> 服务器错误'+
                    '.请刷新后重试' +
                    '</div>' +
                    '</div>');
                setTimeout("yalert()", 2000)
            }
        })



    }

    function ptime() {

        layer.open({
            type: 1,
            skin: 'layui-layer-rim', //加上边框
            area: ['80%', '300px'], //宽高
            content: '<div class="form-group style="left:0px"">' +
            ' <label class="control-label">&nbsp;&nbsp;&nbsp;数量</label>' +
            '<input type="number" id="num" class="form-control" name="num"   placeholder="自动生成数量" />' +
            '<br>' +
          <?php if(session('power')=='0'){?>  ' <label class="control-label">&nbsp;&nbsp;&nbsp;套餐</label>' +
            '<select id="ctime" class="form-control">' +

				' <option value="1"}>七天:0.75元</option>' +
				' <option value="3"}>一个月:2.5元</option>' +
				' <option value="8"}>三个月:7.5元</option>' +
				' <option value="10"}>六个月:15元</option>' +              
				' <option value="18"}>一年:55元</option>' +
				' <option value="30"}>永久:149.5元</option>' +
            ' </select>' +
            ' </div>' +
            '<button class="btn btn-default" onclick="pays()" style="float: right;margin-right: 20px;background-color: #68b828"> 充值</button>'<?php } ?>
        });
    }

</script>
<script>
    function pays(id)
    {
        var ctime   =   $('#ctime').val();
        var num   =   $('#num').val();
        if(num=='')
        {
            return false;
        }
        $.ajax({
            'type'  :   'post',
            'url'   :   '<?php echo url("vip/padd"); ?>',
            'data'  :   {

                'ctime'  :   ctime,
                'num'    :   num
            },
            'dataType'  :   'json',
            'success'   :   function (msg)
            {
                if(msg.code=='0')
                {
                    layer.closeAll();
                    $('#del').php('<div class="col-md-6" id="alert">' +
                        '<div class="alert alert-danger"  style="position:fixed;right:0px;bottom:0px;  width: 350px">' +
                        ' <button type="button" class="close" data-dismiss="alert">' +
                        '<span aria-hidden="true">×</span>' +
                        '<span class="sr-only">Close</span>' +
                        '</button>' +
                        '<strong> 糟糕 !</strong>' + msg.msg+
                        '</div>' +
                        '</div>');
                    setTimeout("yalert()", 2000)


                }else if(msg.code=='1'){
                    layer.closeAll();

                    layer.open({
                        type: 1,
                        skin: 'layui-layer-rim', //加上边框
                        area: ['500px', '300px'], //宽高
                        content: '<div class="form-group">' +
                        '<p style="margin-left: 20px;color: red">恭喜！批量注册成功！</p>' +
                        msg.msg+
                        '<button class="btn btn-default" onclick="kill()" style="float: right;margin-right: 20px;background-color: #68b828"> 确定</button></div>'
                    });

                }


                setTimeout("$('#alert').fadeOut(1000)", 2000)
            },
            'error'     :   function (err)
            {
                layer.closeAll();
                $('#del').php('<div class="col-md-6" id="alert">' +
                    '<div class="alert alert-danger"  style="position:fixed;right:0px;bottom:0px;  width: 350px">' +
                    ' <button type="button" class="close" data-dismiss="alert">' +
                    '<span aria-hidden="true">×</span>' +
                    '<span class="sr-only">Close</span>' +
                    '</button>' +
                    '<strong> 糟糕 !</strong> 服务器错误'+
                    '.请刷新后重试' +
                    '</div>' +
                    '</div>');
                setTimeout("yalert()", 2000)
            }
        })



    }
</script>
<script>

    function kill()
    {
        layer.closeAll();
    }
    setTimeout("$('#alert').fadeOut(1000)", 2000)
</script>
<div id="del">

</div>           <!-- 调用index/下的文件 -->

          

			


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