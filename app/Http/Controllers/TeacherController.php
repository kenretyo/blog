<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<input type="hidden" name="_token" value="{{ csrf_token() }}"/>
class TeacherController extends Controller
{
   
   public function store()
   {
     $teacher = new Teacher;
     $teacher-> = Input::get('title');
     $teacher->description = Input::get('description')
     $teacher->save();

     return redirect('teachers');	

   }
}
