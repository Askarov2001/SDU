<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Employee</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
<section style="padding-top:60px;">

<div class="container">
<div class="row">
<div class="col-md-6 offset-md-3">
<div class="card">
<div class="card-header">
    All Employees <a href="/add-employee" class="btn btn-success">Add New</a>
    <a href="{{route('employee.store')}}" class="btn btn-danger">Back</a>
</div>
<div class="card-body">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Profile Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($employees as $employee)
                <tr>
                    <td>{{$employee->name}}</td>
                    <td><img src="{{asset('images')}}/{{($employee->profileimage)}}" style="max-width:60px;" alt=""></td>
                    <td>
                        <a href="/edit-employee/{{$employee->id}}" class="btn btn-info">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
   
</div>
</div>
</div>
</div>
</div>

</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>


</body>
</html>