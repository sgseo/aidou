<?php
/* * 
 * 功能：E支付页面跳转同步通知页面
 * 说明：
 * 以下代码只是为了方便商户测试而提供的样例代码，商户可以根据自己网站的需要，按照技术文档编写,并非一定要使用该代码。
 * 该代码仅供学习和研究支付宝接口使用，只是提供一个参考。

 *************************页面功能说明*************************
 * 该页面可在本机电脑测试
 * 可放入HTML等美化页面的代码、商户业务逻辑程序代码
 * 该页面可以使用PHP开发工具调试，也可以使用写文本函数logResult，该函数已被默认关闭，见epay_notify_class.php中的函数verifyReturn
 */

require_once("epay.config.php");
require_once("lib/epay_notify.class.php");
$db=require_once("../application/database.php");
?>



<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title></title>
<meta name="description" content="">
<meta http-equiv="X-UA-Compatible" content="chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0"> 
<meta name="apple-mobile-web-app-status-bar-style" content="black"> 
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="format-detection" content="telephone=no">
<link href="layer.css?2.0" type="text/css" rel="stylesheet">
<script src="layer.js?2.x"></script>
</head>

<body>
<?php
	try {
		$DB = new PDO("mysql:host={$db['hostname']};dbname={$db['database']};port={$db['hostport']}",$db['username'],$db['password']);
	}catch(Exception $e){
		exit('链接数据库失败:'.$e->getMessage());
	}
	$DB->exec("set names utf8");
//计算得出通知验证结果
$alipayNotify = new AlipayNotify($alipay_config);
$verify_result = $alipayNotify->verifyReturn();
if($verify_result) {//验证成功
	/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	//请在这里加上商户的业务逻辑程序代码
	
	//——请根据您的业务逻辑来编写程序（以下代码仅作参考）——
    //获取支付宝的通知返回参数，可参考技术文档中页面跳转同步通知参数列表

	//商户订单号

	$out_trade_no = $_GET['out_trade_no'];

	//支付宝交易号

	$trade_no = $_GET['trade_no'];

	//交易状态
	$trade_status = $_GET['trade_status'];

	//支付方式
	$type = $_GET['type'];
	
	$money = $_GET['money'];
	
	$names = $_GET['name'];

	$array=explode('_',$names);
	$u_id=$array[1];
	$name=$array[0];
	$types=$array[2];
	$row=$DB->query("SELECT * FROM {$db['prefix']}user WHERE id='{$u_id}' limit 1")->fetch();

    if($_GET['trade_status'] == 'TRADE_SUCCESS') {
		//判断该笔订单是否在商户网站中已经做过处理
			//如果没有做过处理，根据订单号（out_trade_no）在商户网站的订单系统中查到该笔订单的详细，并执行商户的业务程序
			//如果有做过处理，不执行商户的业务程序
    }
    else {
      echo "trade_status=".$_GET['trade_status'];
    }

	$ypay=$DB->query("SELECT * FROM {$db['prefix']}ypay WHERE oid='{$trade_no}' limit 1")->fetch();
  if($ypay){
    die('链接失效');
  }else{
			$time=time();
			switch($types)
			{
				case 'agent':
					$sds=$DB->exec("update `{$db['prefix']}user` set `type`='1' where `id`='{$row['id']}' limit 1");//,`power`='1'
					if($sds){
						echo  "<script>layer.open({content:'代理开通成功'});</script>";
					}else{
						echo  "<script>layer.open({content:'代理开通失败，请联系管理员！'});</script>";
					}
					return 'success';
				break;
				case 'vip1':
					$lasttime=($row['lasttime']>$time)?$row['lasttime']+86400*7:$time+86400*7;
					$sds=$DB->exec("update `{$db['prefix']}user` set `lasttime`='{$lasttime}' where `id`='{$row['id']}' limit 1");
                $cs.=1;
				break;
				case 'vip2':
					$lasttime=($row['lasttime']>$time)?$row['lasttime']+86400*30:$time+86400*30;
					$sds=$DB->exec("update `{$db['prefix']}user` set `lasttime`='{$lasttime}' where `id`='{$row['id']}' limit 1");
                $cs.=2;
				break;
				case 'vip3':
					$lasttime=($row['lasttime']>$time)?$row['lasttime']+86400*(30*3):$time+86400*(30*3);
					$sds=$DB->exec("update `{$db['prefix']}user` set `lasttime`='{$lasttime}' where `id`='{$row['id']}' limit 1");
                $cs.=3;
				break;
				case 'vip4':
					$lasttime=($row['lasttime']>$time)?$row['lasttime']+86400*(30*6):$time+86400*(30*6);
					$sds=$DB->exec("update `{$db['prefix']}user` set `lasttime`='{$lasttime}' where `id`='{$row['id']}' limit 1");
                $cs.=4;
				break;
				case 'vip5':
					$lasttime=($row['lasttime']>$time)?$row['lasttime']+86400*(30*12):$time+86400*(30*12);
					$sds=$DB->exec("update `{$db['prefix']}user` set `lasttime`='{$lasttime}' where `id`='{$row['id']}' limit 1");
                $cs.=5;
				break;
				case 'vip6':
					$sds=$DB->exec("update `{$db['prefix']}user` set `type`='1' where `id`='{$row['id']}' limit 1");
                $cs.=6;
				break;
				default:
					$sds=$DB->exec("update `{$db['prefix']}user` set `moneys`=moneys+{$money} where `id`='{$row['id']}' limit 1");
                $cs.=7;
			}
          $a1=$trade_no;
          $a2=$row['id'];
          $a3=$time;
          $a4=json_encode($_GET);
          $sdsb = $DB->exec("INSERT INTO `{$db['prefix']}ypay` (`oid`, `uid`, `time`, `qt`)values('{$a1}','{$a2}','{$a3}','{$a4}')");
  			setcookie("czcg", $trade_no, time()+3600*24);
			if($sds and $sdsb){
				$msg = '支付成功';//.$lasttime.'|'.$row['id'].'|'.$row['lasttime'].'|'.$cs.'|'.$trade_no;//$result['msg'];
			}else{
				$msg = '支付成功，但返回数据错误！请联系管理员！';//.$lasttime.'|'.$row['id'].'|'.$row['lasttime'].'|'.$cs;
			}
			echo "<script>layer.open({content:'".$msg."',btn: '确定',shadeClose: false,yes: function(){ layer.open({content: '重新支付请刷新页面',time: 2,skin:'msg'});}});</script>";
  }
  //closeWd();
}else {
    echo "验证失败";
}
?>

</body>
</html>