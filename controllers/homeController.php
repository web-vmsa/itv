<?php

/**
 * Controller da homepage
 */
class homeController extends controller {
	
	public function index(){

		# code ...
		$dados = array();

		$this->loadView('home', $dados);

	}

	public function newsletter($email, $chave){

		# code ...
		$dados = array(
			'email' => $email,
			'chave' => $chave
		);

		$this->loadView('newsletter', $dados);

	}

}