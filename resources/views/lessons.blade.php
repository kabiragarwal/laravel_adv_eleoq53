<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>


      
    </head>
    <body>
        <div class="row">
                
                <ul>
                    @foreach($lessons as $lesson)
                    <div>
                        <li><b>id:</b> {{$lesson->id}}</li>
                        <li><b>title:</b> {{$lesson->title}}</li>
                        <li><b>body:</b> {{ $lesson->body}}</li>
                        <li><b>view:</b> {{$lesson->view}}</li>
                        <li><b>length:</b> {{$lesson->length}}</li>
                        <li><b>difficulty:</b> {{ $lesson->difficulty}}</li>
                    </div>
                    <hr>
                    @endforeach
                </ul>
        </div>
    </body>
</html>
