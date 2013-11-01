<?php
/**
 * FCKeditor保存远程图片插件
 * @author slime09(slime09@gmail.com)
 * @license LGPL
 * @version 1.02 2009.4.18
 * @copyright  Copyright (c) 2009,  LinJiong (http://www.cn09.com)
 * 
 */
function getmicrotime(){
    list($usec, $sec) = explode(" ",microtime());
    return ((float)$usec + (float)$sec);
}

function SaveHTTPFile($fFileHTTPPath,$fFileSavePath,$fFileSaveName)
{
	//记录程序开始的时间
	$BeginTime=getmicrotime();

	//取得文件名
	$fFileSaveName=$fFileSavePath."/".$fFileSaveName;

	//取得文件的内容
	ob_start();
	readfile($fFileHTTPPath);
	$img = ob_get_contents();
	ob_end_clean();
	//$size = strlen($img);

	//保存到本地
	$fp2=@fopen($fFileSaveName, "a");
	fwrite($fp2,$img);
	fclose($fp2);

	//记录程序运行结束的时间
	$EndTime=getmicrotime();

	//返回运行时间
	return($EndTime-$BeginTime);
}
?>