<?php
namespace App;

class View extends \Questwork\View
{

	public function __construct($name, $vars = [])
	{
		parent::__construct($name, $vars);
		// $this->path = 'views';
		// $this->extension = '.html';

		// Global vars
		$this->vars['base'] = self::$baseUrl;
		$this->vars['public'] = $this->base . '/public';
	}

	/**
	 * Implement this function to log view rendering
	 */
	public function render()
	{
		return parent::render() . "\n<!-- " . $this->name . " -->\n";
	}
}