<?php
class UserController extends Controller{
	function __construct () {
		parent::__construct("user"); //继承其父类的构造函数
		$dir = dirname(__FILE__);
		require_once($dir . '/../models/UserModel.php');
	}
	public function actionIndex(){
		
		$model = new UserModel();
		$model->username = "ls";
		$model->password = 'soso';
		

 		return $this->render('index', array(
 							   'model'=>$model));
		
	}
	
	public function actionMongo(){
	
		$model = new UserModel();
		$model->username = "ls";
		$model->password = 'soso';
	

		$mongo = new MongodbUtil("127.0.0.1:27017");
		$mongo->selectDb("hrdb");
		if($mongo->insert("user_info", array("id"=>1, "name"=>"lisheng")))
		{
			echo "<script>alert('ok');</script>";
		}
	
		return $this->render('boot', array(
				'model'=>$model));
	
	}
}
?>