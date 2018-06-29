<?php
	header("Content-type:text/html;charset=utf-8");
	set_time_limit(0);
	$con = mysql_connect("127.0.0.1","root","root");
	if (!$con) {  die('Could not connect: ' . mysql_error());  }
	mysql_select_db("hc", $con);
	mysql_set_charset("utf8");
	$sql="insert into ims_recommended_relationship VALUES ('','".$_POST['recommender_id']."','".$_POST['names']."','".$_POST['phone']."','".$_POST['products']."')";
	$result = mysql_query($sql);
	if($result){
		echo "插入成功";
		if($_POST['products']=='360借条'){
			echo "<script>window.location.href='https://mkt.360jie.com.cn/activity/ch/jiedaitong/jdt1'</script>";
		}else if($_POST['products']=='电商钱包'){
			echo "<script>window.location.href='http://www.ds-money.com/register/DBHRCS001'</script>";
		}else if($_POST['products']=='信富期贷'){
			echo "<script>window.location.href='https://promotion.crfchina.com/life/index.html?c=&s=life&salesmanNo=042530&agentNo=042530_20180515SZJD001'</script>";
		}else if($_POST['products']=='蜂泰'){
			echo "<script>window.location.href='https://xy.360fengdai.com/#/index?code=FDBLTE001&channelNo=QD000261'</script>";
		}else if($_POST['products']=='龙分期'){
			echo "<script>window.location.href='https://agent.xiaoshushidai.com/flow-differential_period?from=5oOg6J6N6LSi5ZWG'</script>";
		}else if($_POST['products']=='优款'){
			echo "<script>window.location.href='https://www.ukuan.cn/?channel=hrcs'</script>";
		}else if($_POST['products']=='51即刻有'){
			echo "<script>window.location.href='https://web.u51.com/tregister/index.html?id=328&channel=hrcs'</script>";
		}else if($_POST['products']=='小树时代'){
			echo "<script>window.location.href='http://activity.xiaoshupuhui.com/170607_Register/index.html?key=3039254shoujid'</script>";
		}else if($_POST['products']=='手机贷'){
			echo "<script>window.location.href='https://m.shoujidai.com/?channel=dktg0431-llcs&typeId=2&utm_tag=&autodown=0'</script>";
		}else if($_POST['products']=='你我贷'){
			echo "<script>window.location.href='https://ka.niwodai.com/loans-mobile/event.do?method=tg&a=5820160000022515&nwd_ext_aid=5020161593783083&source_id=HH182'</script>";
		}else if($_POST['products']=='功夫贷'){
			echo "<script>window.location.href='https://channel.91gfd.com/register/29?channelCodePreFix=W5qG9Mj11'</script>";
		}else if($_POST['products']=='玖富万卡'){
			echo "<script>window.location.href=''</script>";
		}else if($_POST['products']=='快贷'){
			echo "<script>window.location.href='https://microservice.wacai.com/loan/stream/C46LN1?af=LW25DSQLCFF3'</script>";
		}else if($_POST['products']=='小赢卡贷'){
			echo "<script>window.location.href='https://cardloan.xiaoying.com/kadai/index?source=100013727'</script>";
		}else if($_POST['products']=='一秒有钱'){
			echo "<script>window.location.href='https://yimiaojie.geziqianbao.com/yimiaojie/inborrow/redirectindex?
cid=268563203#&/yimiaojie/passport/register?cid=268563203'</script>";
		}else if($_POST['products']=='51人品贷'){
			echo "<script>window.location.href='https://web.u51.com/tregister/index.html?id=7&channel=wdpt_hrcf'</script>";
		}else if($_POST['products']=='众安点点'){
			echo "<script>window.location.href='https://fin-app.zhongan.com/sh/event/diandian-mark/index.html#/?registerPlatform=h5&channelCode=sdx01&campaignNo='</script>";
		}else if($_POST['products']=='拍拍贷'){
			echo "<script>window.location.href='https://ac.ppdai.com/activitypage?redirect=https://m.ppdai.com/loan/Users/UserInfo&style=&activityId=152&source=18363&regsourceid=mktjrhuirong'</script>";
		}else if($_POST['products']=='信富优贷'){
			echo "<script>window.location.href='https://lifeloan.crfchina.com/shlife_loan/SZGCTRFV/register'</script>";
		}else if($_POST['products']=='爱又米'){
			echo "<script>window.location.href='https://m.aiyoumi.com/common/pulluser/smslogin.html?alias=pinpai&_spm_=IBYB'</script>";
		}


	}else{
		echo "插入失败";
		echo "<script>window.history.back()</script>";
	}
	mysql_close($con);
 ?>