<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href ="/css/edit.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <header>
         <div class="container-mx-auto flex justify-between p-4">
            <nav class="mx-2">
                <a href="{{ route('home') }}" class="head">Home</a>
                <a href="{{ route('list') }}" class="view">View</a>
            </nav>    
         </div>
     </header>
        <h1>Update todo</h1>
        <form action="/edit" method = "POST" class ="form">
            @csrf
                <input type="hidden" name="id" value="{{$value['id']}}"> 
                <div class = "title">
                    <label for = "title">Title</label>
                    <input type="text" name="title" value="{{$value['title']}}"> <br> <br>
                </div>

                <div class = "descriptiom">
                    <label for = "description">Description</label>
                    <input type="text" name="description" value="{{$value['description']}}"> <br> <br>
                </div>

                <div class = "email">
                    <label for = "email">Email</label>
                    <input type="text" name="email" value="{{$value['email']}}"> <br> <br>
                </div>
                
                <div class = "date">
                    <label for = "date">Date</label>
                    <input type="date" name="date" value="{{$value['date']}}"> <br> <br>
                </div>    
                <div class = "title">
                    <button type="submit" class="update">Update</button>
                </div>
        </form>
</body>
</html>