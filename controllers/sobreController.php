<?php

/**
 * Controller das páginas sobre
 */
class sobreController extends controller {
	
	public function index(){

		# code ...
		$dados = array();

		$this->loadView('sobre', $dados);

	}

	public function historia(){

		# code ...
		$dados = array();

		$this->loadView('historia', $dados);

	}

}