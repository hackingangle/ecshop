<?php
/**
 *
 * 处理配置文件
 *
 *
 */


$key = $_POST['key'];
$secret = $_POST['secret'];
$spacename = $_POST['spacename'];

// $program = <<<EOF
// EOF;

$defination = <<<EOF
<?php
/*配置文件-Nano云存储*/
define('APPKEY', "$key");
define('APPSECRET', "$secret");
define('SPACENAME', "$spacename");
EOF;

file_put_contents('config.php', $defination);