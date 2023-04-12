<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap Vertical Form Layout</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="m-4">
    <form action="{{url('/')}}/myform" method="post">
    @csrf
   
   
</pre>
    <div class="mb-3">
            <label class="form-label" for="inputPassword">Name</label>
            <input type="text" name="uname" class="form-control" id="inputName" placeholder="UserName" value="{{old('uname')}}">
            <span class="text-danger">
                @error('uname')
                  {{$message}}
                @enderror
               </span>
        </div>
        <div class="mb-3">
            <label class="form-label" for="inputEmail">Email</label>
            <input type="text" name="uemail" class="form-control" id="inputEmail" placeholder="Email" value="{{old('uemail')}}" >
            <span class="text-danger">
                @error('uemail')
                  {{$message}}
                @enderror
               </span>
        
        </div>
        <div class="mb-3">
            <label class="form-label" for="inputPassword">Password</label>
            <input type="password" name="upassword" class="form-control" id="inputPassword" placeholder="Password"  >
            <span class="text-danger">
                @error('upassword')
                  {{$message}}
                @enderror
               </span>
        </div>


        <div class="mb-3">
            <label class="form-label" for="inputPassword">Confirmed Password</label>
            <input type="password" name="upassword_confirmation" class="form-control" id="inputPassword" placeholder="ConfirmedPassword"  >
            <span class="text-danger">
                @error('upassword_confirmation')
                  {{$message}}
                @enderror
               </span>
        </div>

       
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</body>
</html>