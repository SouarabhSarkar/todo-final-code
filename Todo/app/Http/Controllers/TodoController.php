<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;
use Illuminate\Notifications\Notifiable;
use App\Notifications\Email;
use Illuminate\Support\Facades\Notification;

class TodoController extends Controller
{
    //
    function save(Request $req)
    {
       $todo = new Todo;
       $todo->id = $req->id;
       $todo->title = $req->title;
       $todo->description = $req->description;
       $todo->email = $req->email;
       $todo->date = $req->date;
       $todo->save();
       return 'saved';
    }

    function list()
    {
        $data = Todo::all();
        return view('userview',['data'=>$data]);
    }

    function delete($id)
    {
        $data = Todo::find($id);
        $data->delete();
        return redirect('list');
    }

    function edit($id)
    {
        $value = Todo::find($id);
        // return $value;
        return view('edit',['value'=>$value]);
    }

    function update(Request $req)
    {
        $data=Todo::find($req->id);
        $data->id = $req->id;
        $data->title = $req->title;
        $data->description = $req->description;
        $data->email = $req->email;
        $data->date = $req->date;
        $data->save();
        return redirect('list');
    }

    function send_email(Request $req)
    {
        $todo_email = Todo::where('id', 1)->first();
        // dd($todo_email->email);

        Notification::send($todo_email->email, new Email());
    }

}