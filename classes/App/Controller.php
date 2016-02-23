<?php
namespace App;

class Controller extends \Questwork\Controller
{
	public $view;

	public $title = 'Questwork';

	public function __construct($request, $response, $args)
	{
		parent::__construct($request, $response, $args);

		$this->view = new View('main', ['title' => $this->title]);
		$this->response->body($this->view);

		if (isset($args['action']) && method_exists($this, $args['action'])) {
			$this->{$args['action']}($args);
		} else {
			trigger_error('Request does not valid');
		}
	}
}