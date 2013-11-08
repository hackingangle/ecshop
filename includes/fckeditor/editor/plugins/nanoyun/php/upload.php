<?php
require('paths.php');
require('tools.php');
require('config.php');
require('nanoyun.class.php');


define('ROOT_PATH', preg_replace('/includes(.*)/i', '', str_replace('\\', '/', __FILE__)));

//上传到nano云存储
// $nanoyun = new Nanoyun(APPKEY, APPSECRET);
// $filehandle = fopen('../data/foru.jpg', 'rb');
// $filename = '/data/foru.jpg';//指定在云存储中的写入位置
// $rsp = $nanoyun->write_file(SPACENAME, $filename, $filehandle);
// var_dump(json_decode($rsp));
// fclose($filehandle);




//上传到临时目录

//限制条件
$allowed_types = array('jpg', 'jpeg', 'gif', 'png', 'bmp', 'wbmp');
$max_size = 50 * 1024 * 1024;//50M

$file_type = strtolower(substr(strrchr($_FILES["newimage"]["name"], '.'), 1));
$file_size = $_FILES["newimage"]["size"];
$ser_name = time();
$tmp_path = ROOT_PATH."/images/upload/Image/" . $ser_name. '_nanoyun_tmp.'. $file_type;
if(in_array($file_type, $allowed_types) && $file_size <= $max_size){
	@move_uploaded_file($_FILES["newimage"]["tmp_name"],
      $tmp_path);
}

//上传到nano云存储
$nanoyun = new Nanoyun(APPKEY, APPSECRET);
$filestream = fopen($tmp_path, 'rb');
$dirname = '/ecshop/'.date('Y-m-d'). '/';
$rsp = $nanoyun->write_file(SPACENAME, $dirname. $ser_name.'.'.$file_type, $filestream);
$result = json_decode($rsp);
fclose($filestream);


@unlink($tmp_path);

$img_path = 'http://'. SPACEDOMAIN. $dirname. $ser_name.'.'.$file_type;

SendUploadResults($img_path) ;