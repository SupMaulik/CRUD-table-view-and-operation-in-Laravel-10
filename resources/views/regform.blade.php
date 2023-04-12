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
        @php
        $demo=1
        @endphp
    @csrf
     <x-input type="text" name="uname" label="Please Enter User Name" placeholder="Please Write User Name" :demo="$demo"/>
     <x-input type="email" name="uemail" label="Please Enter User Email" placeholder="Please Write User Email"/>
     <x-input type="password" name="upassword" label="Please Enter User Password" placeholder="Please Write User Password"/>
     <x-input type="password" name="ucpassword" label="Please Enter User Confirm Password" placeholder="Please Write User Confirm Password"/>
       
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</body>
</html>