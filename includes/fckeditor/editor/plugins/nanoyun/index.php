<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Nano云存储</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="robots" content="noindex, nofollow" />
	<script src="scripts/fck_dialog_common.js" type="text/javascript"></script>
	<script src="scripts/fck_nanoyun.js" type="text/javascript"></script>
	<link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/themes/base/jquery-ui.css" type="text/css" />
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>

	<!-- Load plupload and all it's runtimes and finally the UI widget -->
	<link rel="stylesheet" href="scripts/plupload/jquery.ui.plupload/css/jquery.ui.plupload.css" type="text/css" />

	<script type="text/javascript" src="scripts/plupload/plupload.js"></script>
	<script type="text/javascript" src="scripts/plupload/plupload.gears.js"></script>
	<script type="text/javascript" src="scripts/plupload/plupload.silverlight.js"></script>
	<script type="text/javascript" src="scripts/plupload/plupload.flash.js"></script>
	<script type="text/javascript" src="scripts/plupload/plupload.browserplus.js"></script>
	<script type="text/javascript" src="scripts/plupload/plupload.html4.js"></script>
	<script type="text/javascript" src="scripts/plupload/plupload.html5.js"></script>
	<script type="text/javascript" src="scripts/plupload/jquery.ui.plupload/jquery.ui.plupload.js"></script>
	<!-- translate to chinese-->
	<script type="text/javascript" src="scripts/plupload/i18n/zh-cn.js"></script>
</head>
<body scroll="no" style="overflow: hidden">
	<div id="divUpload" style="display: none">
		<div id="uploader">
		    <p>您的浏览器不支持Flash、Silverlight或HTML5中的任何一种，请更换浏览器为chrome或安装silverlight或更新Flash</p>
		</div>
		<input type="hidden" id="uploadedimgs"/>
		<script type="text/javascript">
		// Convert divs to queue widgets when the DOM is ready
		$(function() {
			$("#uploader").plupload({
				runtimes : 'html5,gears,flash,silverlight,browserplus',
				url : FCKConfig.BasePath + 'plugins/nanoyun/php/upload.php',
				max_file_size : '50mb',
				
				multipart: true,
				multipart_params: {
					'filename': '${filename}' // adding this to keep consistency across the runtimes
				}, 
				// optional, but better be specified directly'jpg', 'jpeg', 'gif', 'png', 'bmp', 'wbmp'
				file_data_name: 'file',

				filters : [
					{title : "Image files", extensions : "jpg,jpeg,gif,png,bmp,wbmp"}
				],

				init : {
					FileUploaded: function(up, file, info) {
						var obj = $.parseJSON(info.response);
						$('#uploadedimgs').val($('#uploadedimgs').val() + obj.url + ',');
		            }
				},

				flash_swf_url : 'scripts/plupload/plupload.flash.swf',

				silverlight_xap_url : 'scripts/plupload/plupload.silverlight.xap'
			});
			//刷新CSS为了正确显示plupload样式
			$('.plupload_header_title').css("color","red");
			$('.plupload_header_title').css("color","black");
		});
		</script>
	</div>
	<!-- 配置 -->
	<?php 
		require('php/config.php');
	?>
	<div id="divConfig" style="display: none">
		<form action="doconfig.php" id="nanoyunConfig" target="nanoyunConfigWindow" method="post">
			<table cellspacing="0" cellpadding="0" width="100%" align="center" border="0">
				<tr>
					<td>
						Nano云存储配置：[<a href="http://wiki.nanoyun.com/php-sdk-doc/2013/10/30/how-to-config-key-secrets/" target="\"_blank\"">APPKEY、APPSECRET获取教程</a>]</td>
				</tr>
				<tr>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td valign="top">
						<span fcklang="AppKey">AppKey</span><br />
						<input id="txtAttClasses" name="key" style="width: 100%" type="text" value="<?php echo APPKEY;?>"/>
					</td>
				</tr>
				<tr>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td valign="top">
						&nbsp;<span fcklang="AppSecret">AppSecret</span><br />
						<input id="txtAttTitle" name="secret" style="width: 100%" type="text" value="<?php echo APPSECRET;?>"/>
					</td>
				</tr>
				<tr>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td valign="top">
						&nbsp;<span fcklang="AppSecret">空间名称</span><br />
						<input id="txtAttTitle" name="spacename" style="width: 100%" type="text" value="<?php echo SPACENAME;?>"/>
					</td>
				</tr>
				<tr>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td valign="top">
						&nbsp;<span fcklang="AppSecret">空间域名</span><br />
						<input id="txtAttTitle" name="spacedomain" style="width: 100%" type="text" value="<?php echo SPACEDOMAIN;?>"/>
					</td>
				</tr>
				<tr>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td >
						<input style="float:right;" type="submit" value="应用当前配置" />
					</td>
				</tr>
			</table>
			<script type="text/javascript">
				document.write( '<iframe name="nanoyunConfigWindow" style="display: none" src="' + FCKTools.GetVoidUrl() + '"><\/iframe>' ) ;
			</script>
		</form>
	</div>
</body>
</html>
