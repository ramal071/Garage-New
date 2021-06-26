@extends('layouts.admin')
@section('content')

<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">manufacturer</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            {{--  --}}
          <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
          <li class="breadcrumb-item active">manufacturer</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
    <!-- /.content-header -->

    <section class="content">
        <div class="container-fluid">
            <p>
                {{-- =controller | create=function  --}}
                <a href="{{ route('manufacturer.create')}}" class="btn btn-primary">Add New manufacturer Year</a>
            </p>
            <table class="table table-bordered table-striped">
                <tr>
                    <th>ID</th>
                    <th>manufacturer</th>
                    <th>Action</th>
                </tr>

                @if(count($manufacturers))
                @foreach($manufacturers as $m)
                    <tr>
                        <td>{{ $m->id }}</td>
                        <td>{{ $m->year }}</td>
                        <td>

                  <a href="{{route('manufacturer.edit', $m->id)}}" class="btn btn-info">Edit</a> 

{{-- auto refresh the page --}}
                  <a href="javascript:void(0)" onclick="$(this).parent().find('form').submit()" class="btn btn-danger">Delete</a>
                

                  <form action="{{route('manufacturer.destroy', $m->id)}}" method="post">
                    @method('DELETE')   {{--  laravel documentation --}}
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  </form>
                </td>
                    </tr>
                @endforeach
                @else 
                <tr><td colspan="3">No Manufacturer Found</td></tr>
                @endif 
            </table>
        </div>
      </section>	
      
      
      @endsection