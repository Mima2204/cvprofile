<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\education;
use App\Models\Experience;
use App\Models\hobby;
use App\Models\personne;
use App\Models\skills;
use App\Models\taal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    // public function index()
    // {
    //     return view('home.index');
    // }


    public function index()
    {

        $post =personne::all();
        return view('home.index',compact('post'));
    }

    
    public function upload(Request $Request)
    {
        $data = new Profile();
        
        $data->Description = $Request->descript;

        $data->save();
        return redirect()->back()->with('succses', 'profile added successfully');
    }

    public function load(Request $request)
    {
        $data = new Experience();
        
        $data->naam_functie = $request->naamfunctie;
        $data->naam_Company = $request->naamCompany;
        $data->Description = $request->Descrip;
        $data->started_dt = $request->started_dt;
        $data->finished_dt = $request->finished_dt;

        $data->save();
        return redirect()->back()->with('succses', 'Experience added successfully');
    }


    public function Pastl(Request $request)
    {
        $data = new education();
        
        $data->naam_school = $request->naamschool;
        $data->naam_Opleiding = $request->naamOpleiding;
        $data->Description = $request->description;
        $data->started_dt = $request->startdt;
        $data->finished_dt = $request->finishdt;

        $data->save();
        return redirect()->back()->with('succses', 'Education added successfully');
    }

    public function loadt(Request $request)
    {
        $data = new taal();
        
        $data->naam_taal = $request->nameTaal;
        $data->niveau = $request->niveauTaal;
        

        $data->save();
        return redirect()->back()->with('succses', 'Taal added successfully');

}

public function tload(Request $request)
{
    $data = new skills();
    
    $data->naam_skill = $request->nameSkills;
    $data->niveau_sk = $request->niveauskill;
    

    $data->save();
    return redirect()->back()->with('succses', ' skills successfully');

}

public function tupload(Request $request)
{
    $data = new hobby();
    
    $data->naam_hobby = $request->namehobby;
    $data->niveau_hb = $request->nvHobby;
    

    $data->save();
    return redirect()->back()->with('succses', 'hobby added successfully');

}

public function savel(Request $request)
    {
        $data = new personne();

    
        $data->username = Auth::user()->name;
        $data->first_name = $request->firstname;
        $data->last_name = $request->lastname;
        $data->birth_dt	 = $request->birthdt;
        $data->adress_pers = $request->adress;
        $data->tel_pers = $request->tel;
        $data->email_pers = $request->email;
        $data->nat_per = $request->nationality;
        $data->linkd_per = $request->linkedin;

        $data->save();
        return redirect()->back()->with('succses', 'gegevens added successfully');
    }

    public function view_personne(){
        

        $post = personne::get();
        return view('post_page',compact('post'));

    }
}