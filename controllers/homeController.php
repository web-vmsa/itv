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

}