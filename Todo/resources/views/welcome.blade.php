<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Todo_list</title>
     <link href="/css/main.css" rel="stylesheet">
 </head>
 <style>
 </style>    
 <body>
    <header>
         <div class="container-mx-auto flex justify-between p-4">
            <nav class="mx-2">
                <a href="{{ route('home') }}" class="head">Home</a>
            </nav>    
         </div>
     </header>
    <div class = "Todo-list">
        <img src="/img/avatar.jpg" class="avatar" alt="">
            <h1>Todo List</h1>
                <form action="submit" method="POST">
                    @csrf
                    <div class="title">
                        <label for = "title">Title</label>
                        <input type = "text" name = "title" id="title" placeholder="Entre title">
                    </div> 
                    <div class="description">
                        <label for = "description">Description</label>
                        <input type = "text" name = "description" id="description" placeholder="Enter Description">
                    </div> 
                    <div class="email">
                        <label for = "email">Email</label>
                        <input type = "text" name = "email" id="email" placeholder="Enter email">
                
                        
                    </div>  
                    <div class="date">
                        <label for = "date">Date</label>
                        <input type = "date" name = "date" id="date&time" placeholder="Enter date">
                        @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div> 
                    <button type="submit" class="my-button">Submit</button>
                    <a href = "{{Route('list')}}" type="button" class="view-button">View</a>  
                </form>
    </div>
 </body>
 </html>
