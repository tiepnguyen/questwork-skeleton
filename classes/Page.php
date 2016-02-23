<?php

use Questwork\App;
use App\View;

class Page extends \App\Controller
{
	public function main($args)
	{
		$this->view->body = new View('home');
		$this->view->title .= ' - Main';
		// App::runAction('page_main', $this);
		// ChromePhp::log('end of main action');
	}
}