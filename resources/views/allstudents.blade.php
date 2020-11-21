
Result Size: 1346 x 249
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
​
<div class="jumbotron text-center">
  <h1> Insert Students </h1>
</div>
  
<div class="container">
  <div class="col-md-6 offset-md-3">
          
      <table class="table table-stiped">
        <thead>
          <th>no</th>
          <th>name</th>
          <th>Email</th>
          <th>button</th>
        </thead>
        <tbody>
          @php $i=0 @endphp
          @foreach($std as $s)
          @php $i++ @endphp
          <td>{{ $i }}</td>
          <td>{{ $s->name }}</td>
          <td>{{ $s->email }}</td>
          <td>
            <a href="{{ asset('update/'. $s->id)}}" class="btn btn-success">Edit</a>
            <a href="{{ asset('deletestd/'. $s->id)}}" class="btn btn-danger">delete</a>
          </td>
         
        </tbody>
         @endforeach
      </table>
  </div>
</div>
  ​
</body>
</html>
​
