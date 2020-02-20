<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <title>{{config('app.name', 'MyApp')}}</title>
</head>
<body class="bg-dark py-3">


    <h1 class="text-light p-3">This is my to do list app:</h1>

    <div class="container">
        
    <a class="btn btn-outline-secondary text-light ml-3 my-3" data-toggle="modal" data-target="#HomeModal">Go to Homepage</a>
    @if (Session::has('message'))
    <div class="alert alert-success ml-3">
        {{ Session::get('message') }}
    </div>
        
    @endif
    <table class="table table-striped table-dark m-3">
        <thead>
            <tr>
                
                <th scope="col">Morning</th>
                <th scope="col">Afternoon</th>
                <th scope="col">Evening</th>
                <th scope="col">Tomorrow</th>
            </tr>
        </thead>
        <tbody>
            @foreach($todos as $todo)
                <tr>
                <td>{{$todo->morning}}</td>
                <td>{{$todo->afternoon}}</td>
                <td>{{$todo->evening}}</td>
                <td>{{$todo->tomorrow}}</td>
                <td>
                <div class="d-flex">
                    <a class="btn btn-outline-info mr-2" href="/edit/{{$todo->id}}" role="button">Edit</a>
                
                
                {!!Form::open(['action' => ['TodoController@destroy', $todo->id], 'method' => 'POST'])!!}
                    {{Form::hidden('_method', 'DELETE')}}
                    {{Form::submit('Delete', ['class' => 'btn btn-outline-danger deletebtn'])}}
                
                {!!Form::close()!!}
            </div>
                </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a class="btn btn-outline-success ml-3 mt-3" href="/create" role="button">Add new todo</a>
    

    
<!--
    <script> 

        const deletebtn = document.getElementsByClassName('deletebtn');

        deletebtn.addEventListener('click', function(e){
            e.preventDefault();
            swal({
                title: "Are you sure?",
                text: "Once deleted, you will not be able to recover this list!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
                })
                .then((willDelete) => {
                if (willDelete) {
                    swal("Poof! Your list has been deleted!", {
                    icon: "success",
                    });
                } else {
                    swal("Your list is safe!");
                }
                });
        });

    </script>
-->
    

  
  <!-- HomeModal -->
  <div class="modal fade" id="HomeModal" tabindex="-1" role="dialog" aria-labelledby="HomeModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="HomeModalLabel">Are you sure you want to quit now?</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          But it's so nice here.
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cancel</button>
          <a href="/" role="button" class="btn btn-outline-success">Yes, Continue</a>
        </div>
      </div>
    </div>
  </div>


  <!-- EditModal -->
          




    
    
</body>
</html>