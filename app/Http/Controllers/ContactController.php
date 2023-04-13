<?php

namespace App\Http\Controllers;

use App\Models\ContactModel;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller{

    //
    public function contacter(){

        return view('contact');
    }
    public function create(Request $request){
        $rules = [
			'firstname' => 'required|string|min:3|max:255',
			'sujet' => 'required|string|min:3|max:255',
			'Email' => 'required|string|email|max:255',
            'comment' => 'required|string|max:255'

		];
		$validator = Validator::make($request->all(),$rules);
		if ($validator->fails()) {
            dd($validator);
			return redirect('tes')
			->withInput()
			->withErrors($validator);
		}
		else{
            $data = $request->input();
			try{
				$student = new ContactModel();
                $student->name = $data['firstname'];
				$student->Subject = $data['sujet'];
				$student->Email = $data['Email'];
                $student->comment = $data['comment'];

				$student->save();
				return redirect('tes')->with('status',"Insert successfully");
			}
			catch(Exception $e){
                dd($e);
				return redirect('tes')->with('failed',"operation failed");
			}
		}
    }
}
