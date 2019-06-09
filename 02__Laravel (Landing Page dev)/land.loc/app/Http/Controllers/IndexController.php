<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Page;
use App\Service;
use App\Portfolio;
use App\People;


class IndexController extends Controller
{
    //
    
    public function execute(Request $request) {
    	
    	$pages = Page::all();
    	$portfolios = Portfolio::get(array('name','filter','images'));
    	$services = Service::where('id','<',20)->get();
    	$peoples = People::take(3)->get();
    	
    	$menu = array();
    	foreach($pages as $page) {
			
		}

		
		return view('site.index');
	}
    
}
