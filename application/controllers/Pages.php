<?php
	class Pages extends CI_Controller{
		public function view($page = 'home'){
			#check if the page exists in views
			if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
				show_404(); #CI function to load 404 error
			}
			$data['title'] = ucfirst($page); #array to represent variables to pass in the view
			$this->load->view('templates/header'); #load header
			$this->load->view('pages/'.$page, $data); #load page
			$this->load->view('templates/footer'); #load footer
		}
	}
