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

				// Envia o e-mail de confirmação para o usuário
				$email = htmlspecialchars($_POST['email']);
				$msg = "Para confirmar a sua assinatura na newsletter, clique neste <a href='".BASE_URL."home/newsletter/".$email."/".$chave."'>Link</a>";
				$data = date("Y/m/d");

				$to = $email;
				$subject = "Confirme seu e-mail (ITVidas)";
				$body = "Nome: Suporte ITVidas - E-mail: ".$email." - Mensagem: ".$msg;
				$header = "From: suporte@itvmanaus.org"."\r\n"."Reply-to: suporte@itvmanaus.org"."\r\n"."X-Mailer: PHP/".phpversion()."\r\n"."Content-type: text/html; charset=iso-8859-1";

				mail($to, $subject, $body, $header);

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