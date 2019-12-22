<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class LanguageController extends Controller
{
    public function setLanguage(){
        $language = request()['language']; 
        if($language == 'Chinese'){
            App::setLocale('ch');
            session()->put('locale', 'ch');
            dd($language);
            return redirect()->back();
        }else if($language == 'English'){
            App::setLocale('en');
            session()->put('locale', 'en');
            dd($language);
            return redirect()->back();
        }else{
            App::setLocale('si');
            session()->put('locale', 'si');
            return redirect()->back();
        }
    }
    
}
