<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Todo_list</title>
     <link href="/css/user.css" rel ="stylesheet">
     
 </head>
 <style>
 </style>    
 <body>
        <header class="bg-gray-700 top-0 left-0 right-0 z-50">
            <div class="container-mx-auto">
                <nav class="mx-2">
                    <a href="{{ route('home') }}" class="home-link">Home</a>
                </nav>    
            </div>
        </header>
            <h1>Todo List</h1>
            <div>
                </ul>
                <table style="width:100%"; border ="1">
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Email</th>
                        <th>Date</th>
                        <th>Operations</th>
                    </tr>
                    @foreach($data as $i)
                    <tr>
                        <td>{{$i->id}}</td>
                        <td>{{$i->title}}</td>
                        <td>{{$i->description}}</td>
                        <td>{{$i->email}}</td>
                        <td>{{$i->date}}</td>
                        <td>
                            <a href={{"delete/" .$i['id']}}>Delete</a>
                            <a href={{"edit/" .$i['id']}}>Edit</a>
                            <a href={{"email/" .$i['id']}}>Email</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
             </div>

             
 </body>
 </html>