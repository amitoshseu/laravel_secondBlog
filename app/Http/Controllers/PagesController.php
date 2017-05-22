<?php 

namespace App\Http\Controllers; 

class PagesController extends Controller{
	public function getIndex(){
		# process variable data or params
		# talk to the model 
		# receive from model
		# compile or process data from the model if needed
		# pass that data to the correct view. 

		return view('pages.welcome');
	}

	public function getAbout(){
		$first = 'Amitosh';
		$last = 'Gain';
		$full = $first . " " . $last;
		$email = 'amitosh.seu@gmail.com';
		return view('pages.about')->withFullname($full)->withEmailadd($email);
	}

	public function getContact(){
		return view('pages.contact');
	}



} 