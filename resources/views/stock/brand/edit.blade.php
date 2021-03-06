@extends('layouts.admin')

@section('content')


<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Eidt brand</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href=" {{ route('home') }}">Home</a></li>
          <li class="breadcrumb-item active">Edit brand</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
    <!-- /.content-header -->
<section class="content">
  <div class="container-fluid">
      {{-- {{ route('category.update', $category->id) }} --}}
        <form method="post" action="{{ route('brand.update', $brand->id) }}  " enctype="multipart/form-data">
            @method('PUT')
      {{-- csrf token is a security purpose. if not support save button --}}
      <input type="hidden" name="_token" value="{{ csrf_token() }}">

      <div class="form-group">
        <div class="row">
          <label class="col-md-3">brand Code</label>
          <div class="col-md-6"><input type="text" name="code" class="form-control" value="{{ $brand->code }}"></div>
          <div class="clearfix"></div>
        </div>
      </div>

      <div class="form-group">
        <div class="row">
          <label class="col-md-3">brand Name</label>
          <div class="col-md-6"><input type="text" name="name" class="form-control" value="{{ $brand->name }}"></div>
          <div class="clearfix"></div>
        </div>
      </div>

      {{-- <div class="form-group">
        <div class="row">
          <label class="col-md-3">Description</label>
          <div class="col-md-6">
              <textarea name="description" class="form-control" value="{{ $brand->description }}"></textarea>
            </div>
          <div class="clearfix"></div>
        </div>
      </div> --}}

      <div class="form-group">
        <div class="row">
          <label class="col-md-3">description</label>
          <div class="col-md-6">
              <textarea name="description" class="form-control">{{ $brand->description }}</textarea>
            </div>
          <div class="clearfix"></div>
        </div>
      </div>

      <div class="form-group">
        <input type="submit" class="btn btn-info" value="Update">
        <a href="{{route('brand.index')}}" class="btn btn-primary">Back</a>
      </div>
    </form>
  </div>
</section>  


@endsection