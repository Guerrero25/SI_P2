<?php

class Usuario extends Controller{

	public function index(){
		if(isset($_SESSION['Admin'])){
			header("Location:".URL."Admin/index");
		}else {
			$this->view->render($this, "index","");
		}

	}

	public function admin(){
		$this->view->render($this, "admin", "");
	}

	public function login(){
		if (isset($_POST["username"]) && isset($_POST["password"])) {
			$pass = $_POST['password'];

      $response = $this->model->login($_POST['username']);

      if (crypt($pass, $response->password) == $response->password) {
        $this->crearSesion($response->username);
        echo '1';
      }
    }
	}

	function crearSesion($user){
    Sesion::setSesion('Admin', $user);
  }

  function cerrarSesion(){
    Sesion::destroy();

    header("Location:".URL);
  }

}

?>
