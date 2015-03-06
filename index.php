<?php
header("Content-Type: text/html; charset=UTF-8");
require(dirname(__FILE__)."/base/Init.php");
require(dirname(__FILE__)."/base/Application.php");   /*require,缺少不让运行；include,缺少不影响网站运行；加once,系统会主动判断只加载一次
														__FILE__,取当前文件的绝对路径。D:\www\test.php
														dirname(__FILE__),取当前文件的绝对目录。D:\www\	*/

$ctr = "comm";
$act = "";

if(isset($_GET['ctr']))
{
	$ctr = $_GET['ctr'];
}
if(isset($_GET['act']))
{
	$act = $_GET['act'];
}


$retmain = array();
$retmain["status"] = "ok";
$retmain["message"] = "ok";

$actfile = dirname(__FILE__)."/controllers/".ucwords($ctr)."Controller.php";

if(file_exists($actfile))
{
	require($actfile);
}
else
{
	$retmain["status"] = "notfound";
	$retmain["message"] = "error_invalid_url";
}

switch ($ctr)
{
	
	case "user":

		$controller = new UserController();
		echo $act;
		switch ($act)
		{
			case "index":
				echo $controller->actionIndex();
				break;
			case "mongo":
				echo $controller->actionMongo();
				break;
		}
		break;
	default:
		break;
}
?>