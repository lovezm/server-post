<!DOCTYPE html>
<html>
<head>
	<title>bilibili提交系统</title>
  <meta name="viewport" content="width=device-width, initial-scale=0.88, maximum-scale=1, user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta charset="UTF-8">
	<meta name="keywords" content="LMHL,哔哩哔哩,挂机,直播,经验,签到,B站,bilibili">
	<meta name="description" content="B站直播挂机小玩意，每天轻松80W经验，顺手再签个小道领个经验...多用户版测试ing，cookie不保证有效期，cookie失效后即无法挂机">
	<!-- Bootstrap -->
	<link rel="shortcut icon" href="//static.hdslb.com/images/favicon.ico">
	<link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css">
	<style>
	    body{font-family: "Microsoft YaHei" ! important;}
	    html{background:url(http://tb.txsb.vip/3.jpg) no-repeat center top;background-size:cover}body{padding-top:20px;font-size:1pc;background:transparent}h1{font-weight:400;font-size:40px}.panel{background-color:hsla(0,0%,100%,.9)}.margin-base-vertical{margin:40px 0}.margin-base-mini{margin:20px 0}.bs-callout{padding:20px;margin:20px 0;border:1px solid #eee;border-left-width:5px;border-radius:3px}.bs-callout h4{margin-top:0;margin-bottom:5px}.bs-callout p:last-child{margin-bottom:0}.bs-callout code{border-radius:3px}.bs-callout+.bs-callout{margin-top:-5px}.bs-callout-danger{border-left-color:#d9534f}.bs-callout-danger h4{color:#d9534f}.bs-callout-warning{border-left-color:#f0ad4e}.bs-callout-warning h4{color:#f0ad4e}.bs-callout-info{border-left-color:#5bc0de}.bs-callout-info h4{color:#5bc0de}.tile-footer{padding:5px 10px;background:rgba(0,0,0,.1);text-align:left}.tile-content-wrapper{position:relative;overflow:hidden;padding:10px 10px 17px}.tile-content{font-size:35px}.tile-content span{font-size:18px;font-weight:700}.tile-content span,.tile-content-wrapper small{opacity:.7;-moz-opacity:.7;filter:alpha(opacity:70)}.tile-content-wrapper small{display:block;text-align:right;font-size:14px}.tile-header{padding:10px;background:#84b8ff;text-transform:uppercase;font-size:18px}.niebu{padding:10px}
input{margin-top: 3px;}
		</style>
</head>
<body>
	<div class="container">
		<div class="row">
          
            <div class="col-md-6 col-md-offset-3 panel panel-default">
			<h2 class="text-center">bilibili提交系统</h2>
			<div class="bs-callout bs-callout-info">
						<h4 class="help-block text-left">本系统提供给购买的用户自助提交B站账号密码和更新账号密码<br>数据直接发送到店主的微信上，不会泄露放心食用<br><a href="https://link.bilibili.com/p/eden/news#/newsdetail?id=458" target="_blank">关于哔哩哔哩直播经验值获取途径改版公告</a></h4>
				</div>
				<form action="" method="post">
<span class="label label-info">淘宝ID: </span><input type="text" name="text" placeholder="下单用户淘宝ID" class="form-control">
<span class="label label-info">账  号: </span><input type="text" name="user" placeholder="B站账号" class="form-control">
<span class="label label-info">密  码:</span><input type="text" name="pass" placeholder="B站密码" class="form-control">


<br>

<input type="submit" value="提交" class="btn btn-sm btn-success">
                  <br>
                  目前可以抢小电视、自动签到、应援团签到、自动兑换硬币、自动赠送即将过期礼物
</form>
	<?php

$text=$_POST["text"];
$desp=$_POST["user"].$_POST["pass"];
file_get_contents("https://sc.ftqq.com/SCU2940Ta84736c9dae441346197e5fee93d01b057f907157a921.send?text={$text}&desp={$desp}");
?>
<span style="color: purple;">
<?php
if($_POST)
{
echo "订单：".$text."更新成功！请勿重复提交";
}
?></span>
			</div>
			<div class="col-md-3"> <!-- 评论代码放置区 -->	
			</div>
		</div><!-- //row -->
	</div> <!-- //container -->

</body>
</html>
