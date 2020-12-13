<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\users;

//Laraval's localhost server cmd command
//php artisan serve

class DeviceController extends Controller
{

//////// Fetch Data from Mysql Database via I.D ////////
///////  http://127.0.0.1:8000/api/list/1../2../3../4../5../6 ////////

    function listbyid($id)
    {
         return users::find($id);
         $result = $users -> get();

    }

//////// Fetch all Data from Mysql Database ////////
///////  http://127.0.0.1:8000/api/list ////////


    function list()
    {
         return users::all();

         $result = $users -> get();

    }

//////// Send Data to Mysql Database ////////
///////  http://127.0.0.1:8000/api/create/ ////////

    function create(Request $req)
    {

     $users= new users;
     
     $users->email=$req->email;
     $users->password=$req->password;
     $users->name=$req->name;
     $users->School=$req->School;
 
     $result=$users->save();

     if($result)
     {
          
          return ["Result" => "Data has been sent"];       
     }


     else
     {


          return ["Result" => "Data has not been sent"];  
     }

}

//////// Update Data to Mysql Database ////////
///////  http://127.0.0.1:8000/api/update ////////

function update(Request $req)
{
     $users = users::find($req->id);

     $users->email=$req->email;
     $users->password=$req->password;
     $users->name=$req->name;
     $users->School=$req->School;

     $result = $users->save();
     
     if($result)
     {
          return ["Result" => "Data has been updated"];       
     }


     else
     {
          return ["Result" => "Data has not been updated"];  
     }
}

//////// Delete Data from Mysql Database via I.D ////////
///////  http://127.0.0.1:8000/api/delete ////////

function delete($id)
{
     $users = users::find($id);

     $result = $users -> delete();
     
     if($result)
     {
          return ["Result" => "Data has been deleted"];       
     }


     else
     {
          return ["Result" => "Data has not been deleted"];  
     }
}

}
