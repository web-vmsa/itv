<?php

/**
 * Controller das requisições ajax
 */
class ajaxController extends controller {
	
	/*
	* Valida formulário da newsletter
	*/
	public function index(){

		# code...
		$dados = array();

		if (!empty($_POST['email'])) {
			
			$email = htmlspecialchars($_POST['email']);

			if ($email == 'bete-livia@hotmail.com') {
				$msg = "* Este e-mail já está cadastrado!";
				$dados['resultado'] = $msg;
			} else {
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