<?php
/**
 * FCKeditor保存远程图片插件
 * @author slime09(slime09@gmail.com)
 * @license LGPL
 * @version 1.02 2009.4.18
 * @copyright  Copyright (c) 2009,  LinJiong (http://www.cn09.com)
 * 
 */
//说明：在luojiannx@gmail.com提供的版本基本上进行大量修改,修改代码量超过2/3
require_once './ServerXMLHTTP.php';
require_once './config.php';
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
<!--
body {
font-size:10pt;
}
-->
</style>
<body bgcolor="#E3E3C7" leftmargin="0" rightmargin="0">
<SCRIPT LANGUAGE="JavaScript">
  var dialog = window.parent;
  var oEditor = dialog.InnerDialogLoaded();
  var FCKLang = oEditor.FCKLang;
  var xEditor = oEditor.FCK;
  var a = xEditor.GetXHTML();
  dialog.SetOkButton(true);
  function Ok(){return true;}
<?php
	set_time_limit(0);
	$files=$_POST['files'];
	$fileNum=count($files);
	$realFileNum=0;
	$imgArray=array('.gif','.jpg','.png','.jpeg','.bmp','.GIF','.JPG','.PNG','.JPEG','.BMP');

	$typeArray=array();
	ob_start();
	for($i=0;$i<$fileNum;$i++)
	{
		$type=strrchr(trim($files[$i]),".");
		if($files[$i]!='' && in_array($type,$imgArray))
		{
			$now=time();
			$filename=$now.strrchr(trim($files[$i]),".");
			//$filename=md5_file(trim($files[$i])).strrchr(trim($files[$i]),".");
			$savetime=SaveHTTPFile(trim($files[$i]),$saveFilePath,$filename);
?>
			a=a.replace("<?=trim($files[$i])?>","<?=$displayUrl.'/'.$filename?>");
<?php
		}
	}
	ob_end_flush();
?>
xEditor.SetHTML(a);
</script>
<font clor=red>文件已经保存成功<br/>
作为站长，或许，您遇到过下列问题：<br/>
1、我想给自己的网站增加一些<b>小功能</b>，但总也<b>找不到</b>合适的--因为很少有程序员愿意开发;<br/>
2、我终于找到了一个适合的<b>小插件</b>，却发现它是上世纪九十年代的，始终<b>没有更新过</b>--因为程序员没有更新的动力;<br/>
3、插件的<b>功能总是和我要的有所不同</b>，我需要不同的功能--因为程序员根据自己的需求而不是大众的需求开发插件。<br/>
或许，您可以尽自己的一份心力，改变这让人窘困的现状。只需支付十元二十元的捐款，就可以给作者以持续更新的动力，谢谢了。<br/>
<a href='http://item.taobao.com/auction/item_detail-0db2-dbcac2ccb9810e4ef52ca073becce752.htm' target='_blank'><B>资助本插件</B></a><br/>
<a href='http://shop33325042.taobao.com/' target='_blank'><B>作者的淘宝店</B></a><br/>
<a href='http://www.cn09.com/' target='_blank'><B>作者留言板</B></a>
</font>
</body>