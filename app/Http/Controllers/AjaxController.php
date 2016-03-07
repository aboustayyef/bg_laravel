<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AjaxController extends Controller
{
	public function main($aj_page){
		switch ($aj_page) {
			case 'office-furniture-modal':
				return view('ajax.office_thumbs');
				break;
			
			case 'living-room-modal':
				return view('ajax.living_thumbs');
				break;

			case 'accessories-modal';
				return view('ajax.accessories_thumbs');
				break;

			default:
				return view('ajax.living_thumbs');
				break;
		}
	}

}
