@extends('layouts.admin')
@section('content')

<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Employee</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            {{--  --}}
          <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
          <li class="breadcrumb-item active">Employee</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
    <!-- /.content-header -->

    <section class="content">
        <div class="container-fluid">
            <p>
                {{-- {{ route('admin.news.create') }} --}}
                <a href="{{route('employee.create')}}" class="btn btn-primary">Add New Employee</a>
            </p>
            <table class="table table-bordered table-striped">
                <tr>
                    <th>ID</th>
                    <th>name</th>
                    <th>nick_name</th>
                    {{-- <th>Role</th> --}}
                    <th>phone</th>
                    <th>address</th>
                    <th>emp_image</th>
                    <th>id_front</th>
                    <th>id_back</th>
                    <th>specilist</th>
                    <th>Action</th>
                </tr>
                @if(count($employee))
                @foreach($employee as $e)
                    <tr>
                        <td>{{ $e->id }}</td>
                        <td>{{ $e->name }}</td>
                        <td>{{ $e->nick_name }}</td>
                        {{-- <td>{{ $e->role->role_name }}</td> --}}
                        <td>{{ $e->phone }}</td>
                        <td>{{ $e->address }}</td>
                        <td>{{ $e->emp_image }}</td>
                        <td>{{ $e->id_front }}</td>
                        <td>{{ $e->id_back }}</td>
                        <td>{{ $e->specilist }}</td>
                        <td>
                            {{-- {{ route('admin.news.edit',$n->id) }} --}}
                  <a href="{{ route('employee.edit',$e->id) }}" class="btn btn-info">Edit</a> 

{{-- auto refresh the page --}}
                  <a href="javascript:void(0)" onclick="$(this).parent().find('form').submit()" class="btn btn-danger">Delete</a>
                

                  <form action="{{ route('employee.destroy',$e->id) }} " method="post">
                    @method('DELETE')   {{--  laravel documentation --}}
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
      
      
      @endsection