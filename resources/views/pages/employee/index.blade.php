
@extends('layouts.admin')
@section('content')

<ul class="nav nav-tabs">
  <li class="active"><a data-toggle="employee" href="#employee">employee</a></li>
  <li><a data-toggle="role" href="#role">role</a></li>
</ul>

{{-- <ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
  <li><a data-toggle="tab" href="#menu1">Menu 1</a></li>
  <li><a data-toggle="tab" href="#menu2">Menu 2</a></li>
</ul> --}}

<div class="tab-content">
  <div id="employee" class="tab-pane fade in active">
    <h3>employee</h3>
    <p>
      
      
<section class="content">
  <div class="container-fluid">
      <p>
          {{-- {{ route('admin.news.create') }} --}}
          <a href="{{route('employee.create')}}" class="btn btn-primary">Add New Employee</a>
      </p>
      <table class="table table-bordered table-striped">
          <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Nick Name</th>
              <th>Role</th>
              <th>Phone</th>
              <th>Address</th>
              <th>Emp Image</th>
              <th>Front Id</th>
              <th>Back Id</th>
              <th>Specilist</th>
              <th>Action</th>
          </tr>
          @if(count($employee))
          @foreach($employee as $e)
              <tr>
                  <td>{{ $e->id }}</td>
                  <td>{{ $e->name }}</td>
                  <td>{{ $e->nick_name }}</td>
                  
                  <td>{{ $e->role->role_name}}</td>
                  <td>{{ $e->phone }}</td>
                  <td>{{ $e->address}}</td>
                  <td> <img src="{{ asset('storage/employee/' .  $e->emp_image) }}" width="100px;" height="100px;" alt="Image"></td>
                  <td> <img src="{{ asset('storage/employee/' .  $e->id_front) }}" width="100px;" height="100px;" alt="Image"></td>
                  <td> <img src="{{ asset('storage/employee/' .  $e->id_back) }}" width="100px;" height="100px;" alt="Image"></td>
                  <td>{{ $e->specilist }}</td>
                  <td>
                      
            <a href="{{ route('employee.edit',$e->id) }}" class="btn btn-info">Edit</a> 

            <a href="javascript:void(0)" onclick="$(this).parent().find('form').submit()" class="btn btn-danger">Delete</a>

            <form action="{{ route('employee.destroy',$e->id) }} " method="post">
              @method('DELETE')
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </form>
          </td>
              </tr>
          @endforeach
          @else 
          <tr><td colspan="3">No Employee Found</td></tr>
          @endif 
      </table>
  </div>
</section>	

</p>
</div>
</div>

@endsection




