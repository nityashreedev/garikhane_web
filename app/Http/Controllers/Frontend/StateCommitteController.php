<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Commite;

class StateCommitteController extends Controller
{
    public function state1()
    {
        $committes = Commite::where(['type'=>'state committe', 'state'=>'प्रदेश नं १'])->get();
        $state = "प्रदेश नं १";
        return view('state-committe.index',compact('committes', 'state'));
    }

    public function state2()
    {
        $committes = Commite::where(['type'=>'state committe', 'state'=>'प्रदेश नं २'])->get();
        $state = "प्रदेश नं २";
        return view('state-committe.index',compact('committes', 'state'));
    }

    public function bagmati()
    {
        $committes = Commite::where(['type'=>'state committe', 'state'=>'बागमती प्रदेश'])->get();
        $state = "बागमती प्रदेश";
        return view('state-committe.index',compact('committes', 'state'));
    }

    public function gandaki()
    {
        $committes = Commite::where(['type'=>'state committe', 'state'=>'गण्डकी प्रदेश'])->get();
        $state = "गण्डकी प्रदेश";
        return view('state-committe.index',compact('committes', 'state'));
    }

    public function lumbini()
    {
        $committes = Commite::where(['type'=>'state committe', 'state'=>'लुम्बिनी प्रदेश'])->get();
        $state = "लुम्बिनी प्रदेश";
        return view('state-committe.index',compact('committes', 'state'));
    }

    public function karnali()
    {
        $committes = Commite::where(['type'=>'state committe', 'state'=>'कर्णाली प्रदेश'])->get();
        $state = "कर्णाली प्रदेश";
        return view('state-committe.index',compact('committes', 'state'));
    }

    public function sudurpaschim()
    {
        $committes = Commite::where(['type'=>'state committe', 'state'=>'सुदुरपश्चिम प्रदेश'])->get();
        $state = "सुदुरपश्चिम प्रदेश";
        return view('state-committe.index',compact('committes', 'state'));
    }
}
