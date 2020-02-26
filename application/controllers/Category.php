<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Category extends Frontend_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data = [
			'heading' => 'Hello, world!',
			'text'    => 'This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.'];

		$this->set_page_title('Home');
		$this->template->load('index', 'content', 'categories', $data);
	}

}
