<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class todoDataController extends Controller
{
    public function sendTodoNotification()
    {
        $user = User::first();

        $tododata = [
            'body' => 'you recieved new task ',
            'todoText' => 'you have to edit the task after completing',
            'url' => url('/'),
            'taskAssigned' => 'you have days to complete the tasks'
        ];

        $user->notify(new todoData($todoData));
    }
}
