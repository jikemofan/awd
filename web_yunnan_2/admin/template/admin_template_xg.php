<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>模板页修改</title>
<link rel="stylesheet" type="text/css" href="template/admin.css"/>
<script type="text/javascript" src="template/images/jquery.js"></script>
</head>

<body>
<div class="admin_head">
	<div class="admin_logo"><img src="template/images/admin_logo.gif" border="0"/></div>
	<div class="admin_head_rigt">
		<div class="admin_info">
		管理员<label><?php echo $rel_admin[0]['admin_name'];?></label>欢迎回来</span><span>上次登陆时间:<label style="font-weight:normal"><?php echo empty($rel_admin[0]['admin_time'])?'':date('Y-m-d H:m:s',$rel_admin[0]['admin_time']);?></label></span><span>上次登陆IP:<label style="font-weight:normal"><?php echo $rel_admin[0]['admin_ip']; unset($rel_admin);?></label></span><span>本次登陆IP:<label style="font-weight:normal"><?php echo get_ip();?></label><label style="font-weight:bold; padding-left:8px;"><a href="http://www.test.com/alone/alone.php?id=7" target="_blank" style="padding-right:5px; color:#fff">网站建设</a><a href="http://www.test.com/article/article.php?id=23" target="_blank" style="padding-right:5px; color:#fff">模板下载</a><a href="http://www.test.com/alone/alone.php?id=7" target="_blank" style="padding-right:5px; color:#fff">授权服务</a><a href="http://www.169host.com" target="_blank" style="padding-right:5px; color:#fff">域名空间</a></label>
		</div><!--登录的一些信息-->
		<div class="admin_head_nav">
			
			<ul class="out_nav">
				<li><a href="admin_cache.php?action=del_cache_file">清除缓存</a></li>
				<li><a href="../index.php" target="_blank">网站主页</a></li>
				<li><a href="http://www.test.com" target="_blank">官网首页</a></li>
				<li><a href="http://www.test.com/help" target="_blank">帮助手册</a></li>
				<li><a href="login.php?action=out">退出登录</a></li>
			</ul>
			<div class="clear"></div>
		</div><!--主导航-->
	</div>
	<div class="clear"></div>	
</div>

<div class="bees_admin_main">
	
	<div class="bees_admin_left_nav">
		<div class="admin_contain_left">
		
		<div class="admin_small_nav">
			
			<?php include('admin_nav.php')?>
			
			
		</div>
	</div><!--左边-->
	</div><!--nav-->
	
	<div class="bees_main_right">
		<div class="bees_main_content">
		
		<div class="admin_position">
		<span>模板页修改</span>
			<div class="admin_fh"><a href="?lang=<?php echo $lang;?>&nav=<?php echo $admin_nav;?>&admin_p_nav=<?php echo $admin_p_nav;?>">返回</a></div>		
		</div><!--位置-->
		
	<!--内容区-->	


<div class="order_contain">		
<form name="maininfo" method="post" enctype="multipart/form-data" action="?nav=<?php echo $admin_nav;?>&admin_p_nav=<?php echo $admin_p_nav;?>" class="form">
 <div class="order_main">
 <table cellpadding="0" cellspacing="0" width="100%">
 	<thead>
		<tr><th style="width:10%; text-align:center">参数说明</th><th class="w2">参数值</th></tr>
	</thead>
	<tbody>
		<tr>
		  <td style="width:10%; text-align:center">模板地址:</td><td class="w2"><?php echo $file;?></td>
		</tr>
		<tr>
		  <td style="width:10%; text-align:center">修改:</td><td class="w2"><textarea style="width:100%; height:500px; font-size:12px;" name="template"><?php echo $str;?></textarea></td>
		</tr>
		
	</tbody>
 </table>
 </div>
<div class="order_btn">
<input type="hidden" name="action" value="save_template"/><input type="hidden" name="file" value="<?php echo $file;?>" />
  <input type="submit" value="确定" class="go" name="submit"/>
 </div>
</form>
</div>
<!--内容区-->

		</div>	
	</div><!--main-->
	<div class="clear"></div>
</div>
<div class="bees_admin_foot">
	<p>版权所有 © 2009-2013 test.com，并保留所有权利。</p>
</div>	


</body>
</html>
