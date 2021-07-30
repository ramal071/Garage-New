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
          <li class="breadcrumb-item active">edit brand</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
    <!-- /.content-header -->
<section class="content">
  <div class="container-fluid">

        <form method="post" enctype="multipart/form-data">
          @method('PUT')
      {{-- csrf token is a security purpose. if not support save button --}}
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      
      <div class="form-group">
        <div class="row">
          <label class="col-md-3">models Code</label>
          <div class="col-md-6"><input type="text" name="code" class="form-control" value="{{ $models->code }}"></div>
          <div class="clearfix"></div>
        </div>
      </div>

      <div class="form-group">
        <div class="row">
          <label class="col-md-3">models Name</label>
          <div class="col-md-6"><input type="text" name="name" class="form-control" value="{{ $models->name }}"></div>
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
              <textarea name="description" class="form-control">{{ $models->description }}</textarea>
            </div>
          <div class="clearfix"></div>
        </div>
      </div>

      <div class="form-group">
        <input type="submit" class="btn btn-info" value="Update">
        <a href="{{route('models.index')}}" class="btn btn-primary">Back</a>
      </div>
    </form>
  </div>
</section>  


@endsection




  {{-- <div class="form-group">
        <div class="row">
          <label class="col-md-3">Description</label>
          <div class="col-md-6">
              <textarea name="description" class="form-control" value="{{ $brand->description }}"></textarea>
            </div>
          <div class="clearfix"></div>
        </div>
      </div> --}}