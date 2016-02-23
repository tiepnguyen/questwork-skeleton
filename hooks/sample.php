<?php
use Questwork\App;

function sampleAction($controller)
{
	$controller->view->body .= '<br>Sample Action';
}

function altAction($controller) {
	$controller->view->body .= '<br>Alt Action';
}

App::addAction('page_main', 'sampleAction');
App::addAction('page_main', 'altAction', 1);