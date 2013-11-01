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
?>
<style>
<!--
td {
font-size:10pt;
}
-->
</style>
<script type="text/javascript" src="fckeditor.js"></script>
<script language="javascript">
  var dialog = window.parent;
  var oEditor = dialog.InnerDialogLoaded();
  var FCKLang = oEditor.FCKLang;
  var xEditor = oEditor.FCK;
  dialog.SetOkButton(false);
  function Ok(){
	  return true;
	}  
</script> 
<body bgcolor="#E3E3C7" leftmargin="0" rightmargin="0">
<span id="t"></span>
<SCRIPT LANGUAGE="JavaScript">
<!--
document.getElementById("t").innerHTML="正在分析中...";
function getfiles()
{
	//var a=window.opener.FCK.EditorDocument.body.innerHTML;
	var a=xEditor.GetXHTML();
	var re=/http:\/\/(\w+\.)+(net|com|cn|org|cc|tv)(\S*\/)(\S)+\.(gif|jpg|png|bmp|jpeg|GIF|JPG|PNG|BMP|JPEG)/gi;
	var url=a.match(re);
	if(url == null)
	{
		url="";
	}
	var ljflag=0;
	var s="";
	s=s+"<FORM METHOD=POST ACTION=\"save.php\" name='allfiles' id='allfiles'>";
	s=s+"<table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\">";
	s=s+"<tr height=\"20\"><td colspan=\"2\">请选择要保存的图片:<BR></td></tr>";
	for(var i=0;i<url.length;i++)
	{
		for(var ljtemp=0;ljtemp<i;ljtemp++)
		{
			if(url[i]==url[ljtemp])
			{
				ljflag=1;
				break;
			}
			else
			{
				ljflag=0;
			}
		}
		if(!ljflag)
		{
					s=s+"<tr bgcolor=\"#F1F1E3\" height=\"20\"><td><input type=\"checkbox\" checked name=\"files[]\" value=\""+url[i]+"\"></td><td><a href=\""+url[i]+"\" target=\"_blank\">"+url[i]+"</a></td></tr>";
		}
	}
	s=s+"<tr height=\"20\"><td colspan=\"2\"><BR><input type=\"submit\" style=\"color: #000000; border: 1px solid #737357; background-color: #C7C78F\" name=\"button1\" value=\"保存到本地\"><br/>保存文件可能需要较长时间，请单击保存后耐心等待......</td></tr>";
	s=s+"</table>";	
	s=s+"</FORM>";
	document.getElementById("t").innerHTML=s;
}
setTimeout("getfiles()",3000);

//-->
</SCRIPT>
</body>
