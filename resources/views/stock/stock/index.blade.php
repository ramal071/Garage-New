@extends('layouts.admin')
@section('content')

<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Stock Details</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            {{--  --}}
          <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
          <li class="breadcrumb-item active">Stock Details</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
    <!-- /.content-header -->

    <section class="content">
        <div class="container-fluid">
            <p>
                <a href="{{ route('stock.create')}} " class="btn btn-primary">Add Stock Details</a>
            </p>
            <table class="table table-bordered table-striped">
                <tr>
                    <th>ID</th>
                    <th>Brand</th>
                    <th>Category/Model</th>
                    <th>Capacity</th>
                    <th>Year</th>
                    <th>Quantity</th>
                    <th>Color</th>
                    <th>Description</th>
                    
                    <th>Action</th>
                </tr>

                @if(count($stocks))
                @foreach($stocks as $s)
                    <tr>
                        <td>{{ $s->id }}</td>
                        {{-- <td>{{ $s->brand->code }}</td> --}}
                        <td>@if($s->brand){{ $s->brand->name }}@endif</td>
                        <td>@if($s->category){{ $s->category->name }}@endif</td>
                        <td>@if($s->capacity){{ $s->capacity->capacity_name }}@endif</td>
                        <td>@if($s->manufacturer){{ $s->manufacturer->year }}@endif</td>
                        <td>{{ $s->qty }}</td>
                        <td>{{ $s->color }}</td>
                        <td>{{ $s->description }}</td>
                        <td>
{{-- edit --}}
                  <a href="{{route('stock.edit', $s->id)}}" class="btn btn-info">Edit</a> 

{{-- auto refresh the page --}}
                  <a href="javascript:void(0)" onclick="$(this).parent().find('form').submit()" class="btn btn-danger">Delete</a>
                

                  <form action="{{route('stock.destroy', $s->id)}}" method="post">
                    @method('DELETE')   {{--  laravel documentation --}}
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  </form>
                </td>
                    </tr>
                @endforeach
                @else 
                <tr><td colspan="3">No Stock Details Found</td></tr>
                @endif 
            </table>
        </div>
      </section>	
      
      
      @endsection