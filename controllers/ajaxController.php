<?php

/**
 * Controller das requisições ajax
 */
class ajaxController extends controller {
	
	/*
	* Valida formulário da newsletter
	*/
	public function index(){

		$dados = array();

		if (!empty($_POST['email'])) {
			
			$email = htmlspecialchars($_POST['email']);
			$chave = md5($email);
			$status = 0;

			$get = new Newsletter();
			$get->email = $email;
			$getResult = $get->get();

			if ($getResult == true) {
				$msg = "* Este e-mail já está cadastrado!";
				$dados['resultado'] = $msg;
			} else {	

				$set = new Newsletter();
				$set->email = $email;
				$set->chave = $chave;
				$set->status = $status;
				$set->set();

				$msg = "* Por favor, verifique seu e-mail para concluir o cadastro!";
				$dados['resultado'] = $msg;
			}

		} else {
			$msg = "* Por favor, informe um endereço de e-mail!";
			$dados['resultado'] = $msg;
		}

		$this->loadView('ajax', $dados);

	}

}