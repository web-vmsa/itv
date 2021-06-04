<?php 
/**
 * Controller que carrega as páginas pela URL
 */
class controller {
	
	public function loadView($viewName, $viewData = array()) {

		extract($viewData);
		require 'views/'.$viewName.'.php';

	}

}