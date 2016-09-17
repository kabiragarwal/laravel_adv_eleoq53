<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>



    </head>
    <body>
        <div class="row">
                <h1>{{$document->title}}</h1>
                <p>{{$document->body}}</p>
                <hr>
                <ul>
                    
                    @foreach($document->adjustments as $user)
                        <li>{{ $user->email}} on {{$user->pivot->updated_at->diffForHumans()}}</li>
                    @endforeach
                </ul>
        </div>
    </body>
</html>
