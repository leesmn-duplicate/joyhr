<?php
class CommController extends Controller{
	function __construct () {
		parent::__construct("site"); //继承其父类的构造函数
	}
	public function actionIndex(){

		return $this->render('index', array());

	}
	public function actionLogin(){
		if(isset($_POST['name'])){
			$name = $_POST['name'];
			$pwd = $_POST['pwd'];
			
			setcookie("loginname", $name, time()+1200);
			return $this->render('index', array());
		}else{
			return $this->render('login', array());
		}
	}
	public function actionInvalid(){
	     
		return $this->render('invalid', array());
	
	}
	
	
}