<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap Responsive Table</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">

<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>


<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>





    
    

<style>
    /* Custom style to make this example easy to understand */
    table * {
        white-space: nowrap;
    }
</style>
</head>
<body>
<div class="m-4">
    <div class="table-responsive"> 
    <table id="example" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>Address</th>
                    <th>State</th>
                    <th>Country</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($customer as $item)
                <tr>
                    <td>{{$item->customer_id}}</td>
                    <td>{{$item->customer_name}}</td>
                    <td>{{$item->customer_email}}</td>
                    <td>{{$item->customer_gender}}</td>
                    <td>{{$item->customer_address}}</td>
                    <td>{{$item->Customer_State}}</td>
                    <td>{{$item->Customer_Country}}</td>
                    <td>

                    <a href="{{url('/getcustomer')}}" class="btn btn-primary btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Add"><i class="fa fa-table"></i></a>
                    
                                                    <a href="{{url('/customer/edit/')}}/{{$item->customer_id}}" class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></a>
                                            
                                                    <a href="{{url('/customer/view/')}}/{{$item->customer_id}}" class="btn btn-info btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="View"><i class="fa fa-eye"></i></a>
                                                    <a href="{{url('/customer/del/')}}/{{$item->customer_id}}" class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></a>
                    
                 </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div> 
  
</div>
<script>
    
    $(document).ready(function () {
    $('#example').DataTable();
});
    
    </script>
</body>
</html>