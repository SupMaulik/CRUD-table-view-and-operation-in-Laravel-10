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
    <h1 class="text-center text-info">{{$title}}</h1>
    <form action="{{$url}}" method="post">
        @csrf
    <div class="container  align-items-center">
        <div class="row">
            <div class="col-sm-4">
            <label class="form-label" for="inputEmail">Name</label>
            <input type="text" name="uname" class="form-control" id="inputName" placeholder="Name" required @if(isset($customer))
            value="{{$customer->customer_name}}"
            @endif>  
       </div>

       <div class="col-sm-4">
            <label class="form-label" for="inputEmail">Email</label>
            <input type="email" name="uemail" class="form-control" id="inputEmail" placeholder="Email" required @if(isset($customer))
            value="{{$customer->customer_email}}"
            @endif \>  
       </div>
</div>



<div class="row mt-3">
    <div class="col-sm-4">
            <label class="form-label" for="inputEmail">Gender</label>
            <div class="form-check form-check-inline">
                <input type="radio" class="form-check-input" name="gender" id="radioMale" value="M" 
               @if(isset($customer))
                {{$customer->customer_gender == 'M' ? 'checked' : '' }}
               @endif >
                <label class="form-check-label" for="radioMale">Male</label>
            </div>
            <div class="form-check form-check-inline ms-3">
                <input type="radio" class="form-check-input" name="gender" id="radioFemale" value="F" @if(isset($customer))
                {{$customer->customer_gender == 'F' ? 'checked' : '' }}
                @endif>
                <label class="form-check-label" for="radioFemale">Female</label>
            </div>
            <div class="form-check form-check-inline ms-3">
                <input type="radio" class="form-check-input" name="gender" id="radioFemale" value="O" @if(isset($customer))
                {{$customer->customer_gender == 'O' ? 'checked' : '' }}
                @endif>
                <label class="form-check-label" for="radioFemale">Other</label>
            </div>
    </div>

       <div class="col-sm-4">
            <label class="form-label" for="inputEmail">Address</label>
            <input type="text" name="uaddress" class="form-control" id="inputAddress" placeholder="Address" required @if(isset($customer))
            value="{{$customer->customer_address}}"
            @endif>  
       </div>
</div>

<div class="row mt-3">
            <div class="col-sm-4">
            <label class="form-label" for="inputEmail">State</label>
            <input type="text" name="ustate" class="form-control" id="inputState" placeholder="State" required @if(isset($customer))
            value="{{$customer->Customer_State}}"
            @endif>  
       </div>

       <div class="col-sm-4">
            <label class="form-label" for="inputEmail">Country</label>
            <input type="text" name="ucountry" class="form-control" id="inputCountry" placeholder="Country" required @if(isset($customer))
            value="{{$customer->Customer_Country}}"
            @endif >  
       </div>
</div>
<div class="row mt-3">
            <div class="col-sm-4">
            <label class="form-label" for="inputEmail">DOB</label>
            <input type="date" name="DOB" class="form-control" id="inputDOB" placeholder="Please Enter Date of Birth" required @if(isset($customer))
             value="{{$customer->customer_dob}}"
             @endif>  
       </div>

       <div class="col-sm-4">
            <label class="form-label" for="inputEmail">Password</label>
            <input type="password" name="cpassword" class="form-control" id="inputPassword" placeholder="Customer Password" required @if(isset($customer))
            value="{{$customer->customer_password}}"
            @endif  >  
       </div>
</div>



        @if(isset($status))
        <a href="/customer/view"  class="btn btn-group btn-primary">Back</a>
        @else
            <button  type="submit" class="btn btn-group btn-primary">Submit</button> 
        @endif  
</div>    
    </form>
</div>
</body>
</html>