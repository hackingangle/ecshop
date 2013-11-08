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
	<div id="divInfo">
		<table cellspacing="1" cellpadding="1" border="0" width="100%" height="100%">
			<tr>
				<td>
					<table cellspacing="0" cellpadding="0" width="100%" border="0">
						<tr>
							<td width="100%">
								<span fcklang="DlgImgURL">URL</span>
							</td>
							<td id="tdBrowse" style="display: none" nowrap="nowrap" rowspan="2">
								&nbsp;
								<input id="btnBrowse" onclick="BrowseServer();" type="button" value="Browse Server"
									fcklang="DlgBtnBrowseServer" />
							</td>
						</tr>
						<tr>
							<td valign="top">
								<input id="txtUrl" style="width: 100%" type="text" onblur="UpdatePreview();" />
							</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td>
					<span fcklang="DlgImgAlt">Short Description</span><br />
					<input id="txtAlt" style="width: 100%" type="text" /><br />
				</td>
			</tr>
			<tr height="100%">
				<td valign="top">
					<table cellspacing="0" cellpadding="0" width="100%" border="0" height="100%">
						<tr>
							<td valign="top">
								<br />
								<table cellspacing="0" cellpadding="0" border="0">
									<tr>
										<td nowrap="nowrap">
											<span fcklang="DlgImgWidth">Width</span>&nbsp;</td>
										<td>
											<input type="text" size="3" id="txtWidth" onkeyup="OnSizeChanged('Width',this.value);" /></td>
										<td rowspan="2">
											<div id="btnLockSizes" class="BtnLocked" onmouseover="this.className = (bLockRatio ? 'BtnLocked' : 'BtnUnlocked' ) + ' BtnOver';"
												onmouseout="this.className = (bLockRatio ? 'BtnLocked' : 'BtnUnlocked' );" title="Lock Sizes"
												onclick="SwitchLock(this);">
											</div>
										</td>
										<td rowspan="2">
											<div id="btnResetSize" class="BtnReset" onmouseover="this.className='BtnReset BtnOver';"
												onmouseout="this.className='BtnReset';" title="Reset Size" onclick="ResetSizes();">
											</div>
										</td>
									</tr>
									<tr>
										<td nowrap="nowrap">
											<span fcklang="DlgImgHeight">Height</span>&nbsp;</td>
										<td>
											<input type="text" size="3" id="txtHeight" onkeyup="OnSizeChanged('Height',this.value);" /></td>
									</tr>
								</table>
								<br />
								<table cellspacing="0" cellpadding="0" border="0">
									<tr>
										<td nowrap="nowrap">
											<span fcklang="DlgImgBorder">Border</span>&nbsp;</td>
										<td>
											<input type="text" size="2" value="" id="txtBorder" onkeyup="UpdatePreview();" /></td>
									</tr>
									<tr>
										<td nowrap="nowrap">
											<span fcklang="DlgImgHSpace">HSpace</span>&nbsp;</td>
										<td>
											<input type="text" size="2" id="txtHSpace" onkeyup="UpdatePreview();" /></td>
									</tr>
									<tr>
										<td nowrap="nowrap">
											<span fcklang="DlgImgVSpace">VSpace</span>&nbsp;</td>
										<td>
											<input type="text" size="2" id="txtVSpace" onkeyup="UpdatePreview();" /></td>
									</tr>
									<tr>
										<td nowrap="nowrap">
											<span fcklang="DlgImgAlign">Align</span>&nbsp;</td>
										<td>
											<select id="cmbAlign" onchange="UpdatePreview();">
												<option value="" selected="selected"></option>
												<option fcklang="DlgImgAlignLeft" value="left">Left</option>
												<option fcklang="DlgImgAlignAbsBottom" value="absBottom">Abs Bottom</option>
												<option fcklang="DlgImgAlignAbsMiddle" value="absMiddle">Abs Middle</option>
												<option fcklang="DlgImgAlignBaseline" value="baseline">Baseline</option>
												<option fcklang="DlgImgAlignBottom" value="bottom">Bottom</option>
												<option fcklang="DlgImgAlignMiddle" value="middle">Middle</option>
												<option fcklang="DlgImgAlignRight" value="right">Right</option>
												<option fcklang="DlgImgAlignTextTop" value="textTop">Text Top</option>
												<option fcklang="DlgImgAlignTop" value="top">Top</option>
											</select>
										</td>
									</tr>
								</table>
							</td>
							<td>
								&nbsp;&nbsp;&nbsp;</td>
							<td width="100%" valign="top">
								<table cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed">
									<tr>
										<td>
											<span fcklang="DlgImgPreview">Preview</span></td>
									</tr>
									<tr>
										<td valign="top">
											<iframe class="ImagePreviewArea" src="fck_image_preview.html" frameborder="0"
												marginheight="0" marginwidth="0"></iframe>
										</td>
									</tr>
								</table>
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
	</div>
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
