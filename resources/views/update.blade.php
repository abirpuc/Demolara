
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
    <form method="post" action="{{ asset('updatestore/'.$std->id) }}" >
      {{ @csrf_field() }}
          <div class="form-group">
          <input type="text" name="name" value="{{ $std->name }}" class="form-control">
      </div>
       <div class="form-group">
          <input type="email" name="email"  value="{{ $std->email }}"  class="form-control">
      </div>
       <div class="form-group">
          <input type="mobile" name="mobile"  value="{{ $std->mobile }}"  class="form-control">
      </div>
      
       <div class="form-group">
          <input type="address" name="address"  value="{{ $std->address }}" class="form-control">
      </div>
      <div class="form-gropu">
        <button class="btn btn-primary">submit</button>
      </div>
      
    </form>
  </div>
</div>
  ​
</body>
</html>
​
