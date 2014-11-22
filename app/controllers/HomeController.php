<?php

class HomeController extends BaseController {
	
	public function getIndex(){
		$slideshow=Slideshow::all();
		$quotes=Quotes::find(3)->get();
		$packages=Packages::whereState("Featured")->get();
		
		return View::make("home")->with("slideshow",$slideshow)->with("quotes",$quotes)->with("packages",$packages);
	}
}
