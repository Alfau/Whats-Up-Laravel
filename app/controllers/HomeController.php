<?php

class HomeController extends BaseController {
	
	public function getIndex(){
		$slideshow=Slideshow::all();
		$quotes=Quotes::orderbyraw("RAND()")->get();
		
		return View::make("home")->with("slideshow",$slideshow)->with("quotes",$quotes);
	}
}
