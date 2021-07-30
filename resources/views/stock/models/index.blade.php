@extends('layouts.admin')
@section('content')

<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">models</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            {{--  --}}
          <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
          <li class="breadcrumb-item active">models</li>
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
                <a href="{{ route('models.create')}} " class="btn btn-primary">Add New models</a>
            </p>
            <table class="table table-bordered table-striped">
                <tr>
                    <th>ID</th>
                    <th>Code</th>
                    <th>models</th>
                    <th>Discription</th>
                    <th>Action</th>
                </tr>

                @if(count($models))
                @foreach($models as $c)
                    <tr>
                        <td>{{ $c->id }}</td>
                        <td>{{ $c->code }}</td>
                        <td>{{ $c->name }}</td>
                        <td>{{ $c->description }}</td>
                        <td>
{{-- edit --}}
                  <a href="{{route('models.edit', $c->id)}}" class="btn btn-info">Edit</a> 

{{-- auto refresh the page --}}
                  <a href="javascript:void(0)" onclick="$(this).parent().find('form').submit()" class="btn btn-danger">Delete</a>
                

                  <form action="{{route('models.destroy', $c->id)}}" method="post">
                    @method('DELETE')   {{--  laravel documentation --}}
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  </form>
                </td>
                    </tr>
                @endforeach
                @else 
                <tr><td colspan="3">No models Found</td></tr>
                @endif 
            </table>
        </div>
      </section>	
      
      
      @endsection