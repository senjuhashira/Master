<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Illuminate\Support\Collection;
class AccountController extends Controller
{
    //
    public function index(){
        $accounts=DB::table('account')->select('*')->paginate(5);
       
        return view('accountView',['accounts' => $accounts]);
    }
    public function show($id){
        $accounts=DB::table('account')
                ->select('*')
                ->where('id','=',$id)
                ->get();
        return view('showView',['accounts' => $accounts]);
    }
    
}
