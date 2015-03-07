<?php
header("Content-Type: text/html; charset=UTF-8");
require(dirname(__FILE__)."/base/Init.php");
require(dirname(__FILE__)."/base/Application.php");   /*require,缺少不让运行；include,缺少不影响网站运行；加once,系统会主动判断只加载一次
														__FILE__,取当前文件的绝对路径。D:\www\test.php
														dirname(__FILE__),取当前文件的绝对目录。D:\www\	*/

$ctr = "comm";
$act = "invalid";

//if($REQUEST_METHOD == 'GET')
//{
	if(isset($_GET['ctr']))
	{
		$ctr = $_GET['ctr'];
	}
	if(isset($_GET['act']))
	{
		$act = $_GET['act'];
	}
//}
if (!isset($_COOKIE["loginname"])){
	$ctr = "comm";
	$act = "login";
}



$actfile = dirname(__FILE__)."/controllers/".ucwords($ctr)."Controller.php";

if(!file_exists($actfile))
{
	$ctr = "comm";
	$act = "invalid";
	$actfile = dirname(__FILE__)."/controllers/"."CommController.php";
}

require($actfile);


switch ($ctr)
{
	
	case "user":

		$controller = new UserController();
		
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
	case "comm":
		$controller = new CommController();
		echo $act;
		//break;
		switch ($act)
		{
			case "index":
				echo $controller->actionIndex();
				break;
			case "login":
				echo $controller->actionLogin();
				break;
			default:
				echo $controller->actionInvalid();
				break;
		}
		break;
	default:
		break;
}
?>