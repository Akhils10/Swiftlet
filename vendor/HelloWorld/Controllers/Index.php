<?php

namespace HelloWorld\Controllers;

use \HelloWorld\Models\Example as ExampleModel;

/**
 * Index controller
 */
class Index extends \Swiftlet\Abstracts\Controller
{
	/**
	 * Page title
	 * @var string
	 */
	protected $title = 'Home';

	/**
	 * Default action
	 */
	public function index(array $args = array())
	{
		// Some example code to get you started

		// Create a model instance, see /Swiftlet/Models/Example.php
		$example = new ExampleModel;

		// Get some data from the model and pass it to the view to display it
		$this->view->helloWorld = $example->getHelloWorld();
	}
}