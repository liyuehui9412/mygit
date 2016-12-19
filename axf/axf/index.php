<?php
require_once "jssdk.php";
// appId  和 秘钥
$jssdk = new JSSDK("wx8380517e6162415f", "7b0df232b9898d938b8cb905279e0da7");
$signPackage = $jssdk->GetSignPackage();
?>

<!DOCTYPE html>
<html>
<head>
	<title>爱鲜蜂闪送超市</title>
	<meta charset="utf-8">
	<meta name = "viewport", content="width=device-width,initial-scale = 1.0,minimum-scale = 1.0,maximum-scale =1.0,user-scalable =no">
	<link rel="stylesheet" type="text/css" href="index.css">
	<script type="text/javascript" src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
	<script data-main="index.js" type="text/javascript" src="js/require.js"></script>
</head>
<body>
	<div class="Main">
		<div class="shou"></div>
		<div class="shan"></div>
		<div class="gou"></div>
		<div class="mine"></div>
	</div>
	<footer>
		<a href="#shou">
			<img src="img/bo1.png" alt="首页">
			<p>首页</p>
		</a>
		<a href="#shan">
			<img src="img/bo2.png" class="imgs3" alt="首页">
			<p>闪送超市</p>
		</a>
		<a href="#gou" class="shouYe_gouWuChe">
			<img src="img/3.png" alt="首页">
			<p>购物车</p>
			<span class="gooo"></span>
		</a>
		<a href="#mine">
			<img src="img/4.png" alt="首页">
			<p>我的</p>
		</a>
	</footer>
</body>
<script>
	wx.config({
    debug: true,
    appId: '<?php echo $signPackage["appId"];?>',
    timestamp: <?php echo $signPackage["timestamp"];?>,
    nonceStr: '<?php echo $signPackage["nonceStr"];?>',
    signature: '<?php echo $signPackage["signature"];?>',
     jsApiList: [
     'checkJsApi',
        'onMenuShareWeibo',
        'onMenuShareQZone',
        'hideMenuItems',
        'showMenuItems',
        'hideAllNonBaseMenuItem',
        'showAllNonBaseMenuItem',
        'translateVoice',
        'startRecord',
        'stopRecord',
        'onVoiceRecordEnd',
        'playVoice',
        'onVoicePlayEnd',
        'pauseVoice',
        'stopVoice',
        'uploadVoice',
        'downloadVoice',
        'chooseImage',
        'previewImage',
        'uploadImage',
        'downloadImage',
        'getNetworkType',
        'openLocation',
        'getLocation',
        'hideOptionMenu',
        'showOptionMenu',
        'closeWindow',
        'scanQRCode',
        'chooseWXPay',
        'openProductSpecificView',
        'addCard',
        'chooseCard',
        'openCard'
     ]
  });
</script>
</html>