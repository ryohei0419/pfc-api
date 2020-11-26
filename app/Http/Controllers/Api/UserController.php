<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;

ini_set('memory_limit', '512M');

class UserController extends Controller
{
   function index() {
    $users = User::all();
    return response()->json(['users' => $users]);
   } 

   function show($id) {
    return response()->json(['users' =>User::find($id)]);
   }

   function store(Request $request) {
    print_r($request);
    $user = User::create(['uid'=>$request->uid, 'email'=>$request->email, 'password'=>$request->passoword, 'last_loginned_at'=>Carbon::today(), 'name'=>'test']);
    return response() -> json(['message' => 'successfully created']);
  }

   function update(Request $request) {
    $user = User::find($request->$id);
    $user->fill($request->all());
    $user->save();
   }

   function destroy($id) {
    $user = User::find($id);
    $user->delete();
    return response() -> json(['message' => 'successfully deleted']);
   }
   
}
