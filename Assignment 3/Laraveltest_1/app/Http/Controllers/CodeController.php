<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Code;
use Auth;

class CodeController extends Controller {



	/**
	* Saves User's Code in codes table
	* The executes the code and returns the output
	*/
	public function saveAndExec(Request $req) {
		$row = null;
		$row = Code::where('user_id', '=', Auth::user()->id)->first();		
		if ( ! $row) {
			$row = new Code;
			$row->user_id = Auth::user()->id;
		}

		$row->code = $req->code;
		$code = $req->code;
		$row->save();
		$code = str_replace("<?php", "", $code);
		$code = str_replace("?>", "", $code);
		eval($code);
		$user = Auth::user();
	}

	public function exec($code)
	{
		return view('/home');
	}


}
