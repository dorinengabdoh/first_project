<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\paieModel;
use Exception;
use Illuminate\Support\Facades\Validator;




class PaieController extends Controller
{
    //
    public function paiement(){

        return view('paie');
    }
    public function statut(Request $request){
        $rules = [
			'choix' => 'required|string|min:3|max:255',
			'Email' => 'required|string|min:3|max:255',
			'password' => 'required|string|max:255',
            'mode_paiement' => 'required|string|max:255',
            'valeur_prod' => 'required|string|max:255',
            'coordonnees' => 'required|string|max:255',
            'MDP' => 'required|string|string|max:255',
            'valeur_transfert' => 'required|string|max:255',
        ];
		$validator = Validator::make($request->all(),$rules);
		if ($validator->fails()) {

            dd("jjhgjhjh");
			return redirect('hello')
			->withInput()
			->withErrors($validator);
		}
		else{
            $data = $request->input();
			try{
				$student = new paieModel();
                $student->choix = $data['choix'];
				$student->Email= $data['Email'];
				$student->password = $data['password'];
                $student->mode_paiement = $data['mode_paiement'];
                $student->valeur_prod = $data['valeur_prod'];
                $student->coordonnee = $data['coordonnees'];
                $student->mdp = $data['MDP'];
                $student->valeur_transfert= $data['valeur_transfert'];


				$student->save();
				return redirect('hello')->with('status',"Insert successfully");
			}
			catch(Exception $e){
                dd($e);
				return redirect('hello')->with('failed',"operation failed");
			}
		}
    }
}
