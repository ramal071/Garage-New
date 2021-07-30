@extends('layouts.admin')
@section('content')

<div class="form-group">  
  <a href="{{route('stock.index')}}" class="btn btn-primary">Stock</a>
  <a href="{{route('brand.index')}}" class="btn btn-primary">Brand</a>
  <a href="{{route('vehicle.index')}}" class="btn btn-primary">Vehicle</a>
</div>

{{-- <div class="container mt-2">
  <ul class="nav nav-tabs">
    <li class="nav-item"><a href="{{route('stock.index')}}" class="nav-link">Stock</a></li>
    <li class="nav-item"><a href="{{route('brand.index')}}" class="nav-link">Brand</a></li>
    <li class="nav-item"><a href="{{route('vehicle.index')}}" class="nav-link">Vehicle</a></li>
  </ul>
</div> --}}

<div class="content-header">
  <div class="container-fluid" > 
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">brand</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            {{--  --}}
          <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
          <li class="breadcrumb-item active">brand</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
    <!-- /.content-header -->

    <section class="content" >
        <div class="container-fluid">
            <p>
                <a href="{{ route('brand.create')}} "  data-toggle="modal" data-target="#Brandadd" class="btn btn-primary">Add Brand Details</a>
           
                {{--  <a href="{{ route('brand.create')}} " class="btn btn-primary">Add New brand</a>  --}}
               
            </p>
            <table class="table table-bordered table-striped">
                <tr>
                    <th>ID</th>
                    <th>Code</th>
                    <th>brand</th>
                    <th>Discription</th>
                    <th>Action</th>
                </tr>

                @if(count($brands))
                @foreach($brands as $b)
                    <tr>
                        <td>{{ $b->id }}</td>
                        <td>{{ $b->code }}</td>
                        <td>{{ $b->name }}</td>
                        <td>{{ $b->description }}</td>
                        <td>
{{-- edit --}}
                  <a href="{{route('brand.edit', $b->id)}}" class="btn btn-info">Edit</a> 

{{-- auto refresh the page --}}
                  <a href="javascript:void(0)" onclick="$(this).parent().find('form').submit()" class="btn btn-danger">Delete</a>
                

                  <form action="{{route('brand.destroy', $b->id)}}" method="post">
                    @method('DELETE')   {{--  laravel documentation --}}
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  </form>
                </td>
                    </tr>
                @endforeach
                @else 
                <tr><td colspan="3">No Brand Found</td></tr>
                @endif 
            </table>
        </div>


                <!--     Modal    -->

<div class="modal fade" id="Brandadd" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Stock</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        {{-- add stock  --}}
        <section class="content">
          <div class="container-fluid">
              {{-- {{ route('category.store')}} --}}
            <form method="post" action=" {{ route('brand.store')}} ">
              {{-- csrf token is a security purpose. if not support save button --}}
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
        
              <div class="form-group">
                <div class="row">
                  <label class="col-md-3">Brand Code</label>
                  <div class="col-md-6"><input type="text" name="code" class="form-control" required></div>
                  <div class="clearfix"></div>
                </div>
              </div>
        
              <div class="form-group">
                <div class="row">
                  <label class="col-md-3">Brand Name</label>
                  <div class="col-md-6"><input type="text" name="name" class="form-control" required></div>
                  <div class="clearfix"></div>
                </div>
              </div>
        
              <div class="form-group">
                <div class="row">
                  <label class="col-md-3">Description</label>
                  <div class="col-md-6">
                      <textarea name="description" class="form-control"></textarea>
                    </div>
                  <div class="clearfix"></div>
                </div>
              </div>
        
              <div class="form-group">
                <input type="submit" class="btn btn-info" value="Save">
                <a href="{{route('brand.index')}}" class="btn btn-primary">Back</a>
              </div>
            </form>
          </div>
        </section> 
      </div></div></div></div>
      </section>	
      
      
      @endsection