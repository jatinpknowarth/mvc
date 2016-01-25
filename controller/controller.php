<?php

class controller{
	
	public $model;
	public function __construct($model){
		$this -> model=$model;
	}
	
	public function control(){
		
		if(isset($_SESSION['login_user']))
		{
			include 'view/header.php';
			if(isset($_REQUEST['logout']))
			{
				$chk = $this->model->logout();
			}
			elseif(isset($_REQUEST['updateid']))
			{
					
				$chk = $this->model->getdetail();
				include'view/updatedetail.php';
					
			}
			elseif(isset($_REQUEST['update']))
			{
				$chk = $this->model->updatedetail();
					
			}
			elseif (isset($_REQUEST['deleteid']))
			{
				$chk = $this->model->deletedetail();
			}
			else
			{
				$chk=$this->model->getdetail();
				include'view/details.php';
			}
		}
		

		
		else
		{
			if(isset($_REQUEST['login']))
			{
				$chk = $this->model->chcklogin();
			}
			elseif (isset($_REQUEST['registration']))
			{
				include 'view/registration.php';
			}
			elseif (isset($_REQUEST['register']))
			{
				$chk = $this->model->reg();
			}
			else
			{
				include'view/login.php';
			}
		}
		
		
		
	}
}

?>