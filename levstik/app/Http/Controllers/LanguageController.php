<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App;

class LanguageController extends Controller
{
    public function setLanguage()
    {
        $language = request()['language'];
        
        $langLocale = "si";
        if ($language == "English") {
            $langLocale = "en";
        } elseif ($language == "Chinese") {
            $langLocale = "ch";
        }

        App::setlocale($langLocale);
        session()->put('locale', $langLocale);
        return redirect()->back();
    }
}
