<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopController extends Controller
{
    public function home(){
        return view(top.index);
    }
    public function category(){
        return view(category.categoryContent);
    }
        
    public function contact(){
        return view(contact.contact);
    }
    public function single(){
        return view(category.single);
    }
    
}
