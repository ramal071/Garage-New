@extends('layouts.admin')
@section('content')


<ul class="nav nav-tabs">
  <li><a data-toggle="employee" href="#employee">employee</a></li>
  <li class="active"><a data-toggle="role" href="#role">role</a></li>
</ul>

<div class="tab-content">
  <div id="role" class="tab-pane fade in active">
    <h3>role</h3>
    <p>

      <section class="content">
        <div class="container-fluid">
       
            <p>
              <a href="{{ route('role.create')}} "  data-toggle="modal" data-target="#addrole" class="btn btn-primary">Add New Roles</a>
          </p>
            <table class="table table-bordered table-striped">
                <tr>
                    <th>ID</th>
                    <th>Role</th>
                    <th>Action</th>
                </tr>
               @foreach($roles as $r)
                    <tr>
                        <td>{{ $r->id }}</td>
                        <td>{{ $r->name }}</td>
                        <td>
                           
                  <a href="{{route('role.edit', $r->id)}}" class="btn btn-info">Edit</a> 
  
                  <a href="javascript:void(0)" onclick="$(this).parent().find('form').submit()" class="btn btn-danger">Delete</a>
                
  
                  <form action="{{route('role.destroy', $r->id)}}" method="post">
                    @method('DELETE')  
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  </form>
                </td>
                    </tr>
                @endforeach 
            </table>
        </div>
  
                <!--     Modal    -->
  
  <div class="modal fade" id="addrole" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Stock</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     
        <section class="content">
          <div class="container-fluid">
             
            <form method="post" action=" {{ route('role.store')}} ">
             
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
        
              <div class="form-group">
                <div class="row">
                  <label class="col-md-3">Role Name</label>
                  <div class="col-md-6"><input type="text" name="name" class="form-control"></div>
                  <div class="clearfix"></div>
                </div>
              </div>
  
        
              <div class="form-group">
                <input type="submit" class="btn btn-info" value="Save">
                <a href="{{route('role.index')}}" class="btn btn-primary">Back</a>
              </div>
            </form>
          </div>
        </section>  
  
      </div>
    </div>
  </div>
  </div>
      </section>	

    </p>
  </div>
</div>

  @endsection