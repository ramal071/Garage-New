@extends('layouts.admin')
@section('content')

<ul class="nav nav-tabs">
  <li class="active"><a data-toggle="employee" href="#employee">employee </a></li>
  <li><a data-toggle="role" href="#role">role</a></li>

  

</ul>

<div class="tab-content">
  
  <div id="employee" class="tab-pane fade in active">
    <h3>employee 1</h3>
    <p>
      @include('pages.employee.index')
    </p>
  </div>

  <div id="role" class="tab-pane fade">
    <h3>role 2</h3>
    <p>
      @include('pages.role.index')
    </p>
  </div>

</div>

@endsection

{{-- 
@extends('layouts.admin')
@section('content')

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Bootstrap 5 Tabs</title>
    <style>
        .dimension {
            width: 500px;
            height: 300px;
        }
        
        .nav-tabs .nav-link.active {
            background-color: #9400d3;
            color: #fff;
            border: 3px solid #9400d3;
        }
        
        .nav-tabs .nav-link {
            background-color: #fff;
            color: #9400d3;
            border: 3px solid #9400d3;
            margin-right: 2rem;
            padding-left: 3rem;
            padding-right: 3rem;
        }
        
        .nav-tabs .nav-link:hover {
            border: 3px solid #9400d3;
        }
        
        .nav-tabs {
            border-bottom: 1px solid #9400d3;
        }
        
        .tab-content {
            border: 1px solid #9400d3;
            padding: 20px;
        }
    </style>
</head>

<body>
    <div class="container mt-2">
        <h3 class="mb-3">Bootstrap 5 Tabs</h3>
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" data-bs-toggle="tab" href="#home">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8 3.293l6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                    <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                  </svg> Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#profile">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-bounding-box" viewBox="0 0 16 16">
                    <path d="M1.5 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-1 0v-3A1.5 1.5 0 0 1 1.5 0h3a.5.5 0 0 1 0 1h-3zM11 .5a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 1 16 1.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 1-.5-.5zM.5 11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 1 0 1h-3A1.5 1.5 0 0 1 0 14.5v-3a.5.5 0 0 1 .5-.5zm15 0a.5.5 0 0 1 .5.5v3a1.5 1.5 0 0 1-1.5 1.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 1 .5-.5z"/>
                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                  </svg> Profile</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#contact">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                  </svg> Contact</a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="home">
                <div class="row border g-0 rounded shadow-sm">
                    <div class="col p-4">
                        <h3>Home</h3>
                        <p>
                            
                            @include('pages.employee.index')
                      
                        </p>
                    </div>

                </div>
            </div>




            <div class="tab-pane" id="profile">
                <div class="row border g-0 rounded shadow-sm">
                    <div class="col p-4">
                        <h3>Profile</h3>
                        <p>
                          @include('pages.role.index')
                        </p>
                    </div>
                    {{-- @include('pages.role.index') --}}
                {{-- </div>
            </div>
     
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>


</body>

</html>
@endsection --}} 