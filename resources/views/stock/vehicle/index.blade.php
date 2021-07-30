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
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">vehicle</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            {{--  --}}
          <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
          <li class="breadcrumb-item active">vehicle</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
    <!-- /.content-header -->

    <section class="content">
        <div class="container-fluid">
            <p>
                {{-- role=controller | create=function   {{ route('category.create')}}  --}}
                <a href="{{ route('vehicle.create')}} " class="btn btn-primary">Add New vehicle</a>
            </p>
            <table class="table table-bordered table-striped">
                <tr>
                    <th>ID</th>
                    <th>Code</th>
                    <th>vehicle</th>
                    <th>Discription</th>
                    <th>Action</th>
                </tr>

                @if(count($vehicles))
                @foreach($vehicles as $c)
                    <tr>
                        <td>{{ $c->id }}</td>
                        <td>{{ $c->code }}</td>
                        <td>{{ $c->name }}</td>
                        <td>{{ $c->description }}</td>
                        <td>
{{-- edit --}}
                  <a href="{{route('vehicle.edit', $c->id)}}" class="btn btn-info">Edit</a> 

{{-- auto refresh the page --}}
                  <a href="javascript:void(0)" onclick="$(this).parent().find('form').submit()" class="btn btn-danger">Delete</a>
                

                  <form action="{{route('vehicle.destroy', $c->id)}}" method="post">
                    @method('DELETE')   {{--  laravel documentation --}}
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  </form>
                </td>
                    </tr>
                @endforeach
                @else 
                <tr><td colspan="3">No vehicle Found</td></tr>
                @endif 
            </table>
        </div>
      </section>	
      
      
      @endsection