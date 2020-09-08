<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
    	return view('index')->with([
			'title' => 'Index'
		]);
    }

    public function info() {
    	return view('info')->with($this->_get_info_data());
    }

    private function _get_info_data() {
    	$styles = '';
    	$body = '';
        $title = 'Info';



    	return compact( 'styles', 'body', 'title' );
    }
}
