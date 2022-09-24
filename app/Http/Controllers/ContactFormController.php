<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactFormController extends Controller
{
    public function submitContact(Request $request){
        sleep(1);  
        return response()->json(['success'=>'Thank you. We will contact you soon.']);
    }

    public function submitFooterContact(Request $request){
        sleep(1);  
        return response()->json(['success'=>'Great, You have been subscribed.']);
    }

}