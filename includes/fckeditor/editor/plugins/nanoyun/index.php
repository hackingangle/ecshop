<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Nano云存储</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="robots" content="noindex, nofollow" />
	<script src="scripts/fck_dialog_common.js" type="text/javascript"></script>
	<script src="scripts/fck_nanoyun.js" type="text/javascript"></script>
		<script type="text/javascript">

document.write( FCKTools.GetStyleHtml( GetCommonDialogCss() ) ) ;

		</script>
</head>
<body scroll="no" style="overflow: hidden">
	<div id="divUpload" style="display: none">
		<form id="nanoyunUpload" method="post" target="UploadWindow" enctype="multipart/form-data"
			action="" onsubmit="return CheckUpload();">
			<span fcklang="DlgLnkUpload">上传到Nano云存储</span><br />
			<input id="txtUploadFile" style="width: 100%" type="file" size="40" name="newimage" /><br />
			<br />
			<input id="btnUpload" type="submit" value="开始上传" fcklang="DlgLnkBtnUpload" />
			<script type="text/javascript">
				document.write( '<iframe name="UploadWindow" style="display: none" src="' + FCKTools.GetVoidUrl() + '"><\/iframe>' ) ;
			</script>
		</form>
		<input type="hidden" id="uploadedimgs"/>
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
