<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body class="bg-dark">
    <h2 class="text-light p-3">Create New Todo:</h2>
    <div class="container">
        
       
        {!! Form::open(['action' => 'TodoController@store', 'method' => 'POST']) !!}
        <div class="form-group">

            {{Form::label('morning', 'What will you do in the morning?', ['class'=> 'text-light pt-2'])}};
            {{Form::text('morning', null, ["class"=> 'form-control'])}};

            {{Form::label('afternoon', 'What will you do in the afternoon?', ['class'=> 'text-light pt-2'])}};
            {{Form::text('afternoon', null, ["class"=> 'form-control'])}};

            {{Form::label('evening', 'What will you do in the evening?', ['class'=> 'text-light pt-2'])}};
            {{Form::text('evening', null, ["class"=> 'form-control'])}};

            {{Form::label('tomorrow', 'What will you do tomorrow?', ['class'=> 'text-light pt-2'])}};
            {{Form::text('tomorrow', null, ["class"=> 'form-control'])}};

            {{Form::submit('Submit', ['class'=>'btn btn-outline-primary mt-3'])}}
        
            <a class="btn btn-outline-secondary mt-3 ml-3" href="/todos.index" role="button">Cancel</a>
        </div>
        {!! Form::close() !!}

        
</div>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>