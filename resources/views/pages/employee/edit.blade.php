@extends('layouts.admin')
@section('content')

<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Edit Employee</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href=" {{ route('home') }}">Home</a></li>
          <li class="breadcrumb-item active">Edit Employee</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
    <!-- /.content-header -->
<section class="content">
  <div class="container-fluid">
      {{-- {{ route('admin.news.update') }} --}}
    <form method="post" action="{{ route('employee.update', $employee->id) }} " enctype="multipart/form-data">

        @method('PUT')
        {{-- csrf token is a security purpose. if not support save button --}}
      <input type="hidden" name="_token" value="{{ csrf_token() }}">

      <div class="form-group">
        <div class="row">
          <label class="col-md-3">Name</label>
          <div class="col-md-6"><input type="text" name="name" class="form-control" value="{{ $employee->name }}"></div>
          <div class="clearfix"></div>
        </div>
      </div>

      <div class="form-group">
        <div class="row">
          <label class="col-md-3">Nick Name</label>
          <div class="col-md-6"><input type="text" name="nick_name" class="form-control" value="{{ $employee->nick_name }}"></div>
          <div class="clearfix"></div>
        </div>
      </div>

      <div class="form-group">
        <div class="row">
          <label class="col-md-3">Address</label>
          <div class="col-md-6"><input type="text" name="address" class="form-control" value="{{ $employee->address }}"></div>
          <div class="clearfix"></div>
        </div>
      </div>

{{-- 8 --}}
{{-- <div class="form-group">
  <div class="row">
    <label class="col-md-3">Role</label>
    <div class="col-md-6">
      <select name="role_id" class="form-control">
        <option value="">Choose a Role</option>
        @foreach($roles as $r)
          <option value="{{ $r->id }}">{{ $r->role_name }}</option>
        @endforeach
      </select>
    </div>
    <div class="clearfix"></div>
  </div>
</div> --}}

      <div class="form-group">
        <div class="row">
          <label class="col-md-3">Phone</label>
          <div class="col-md-6"><input type="text" name="phone" class="form-control" value="{{ $employee->phone }}"></div>
          <div class="clearfix"></div>
        </div>
      </div>

      <div class="form-group">
        <div class="row">
          <label class="col-md-3">Employee Image</label>
          <div class="col-md-9"><input type="file" name="emp_image" multiple></div>
          <div class="clearfix"></div>
          @if($employee->emp_image)
          <div class="col-md-3"></div>
          <div class="col-md-9"> 
            <img src="{{ asset('storage/employee/'.$employee->emp_image) }}" style="width:150px;">
          </div>
          <div class="clearfix"></div>
          @endif
        </div>
      </div>

      <div class="form-group">
        <div class="row">
          <label class="col-md-3">Id Front Image</label>
          <div class="col-md-9"><input type="file" name="id_front" ></div>
          <div class="clearfix"></div>
          @if($employee->id_front)
          <div class="col-md-3"></div>
          <div class="col-md-9"> 
            <img src="{{ asset('storage/employee/'.$employee->id_front) }}" style="width:150px;">
          </div>
          <div class="clearfix"></div>
          @endif
        </div>
      </div>

      <div class="form-group">
        <div class="row">
          <label class="col-md-3">Id Back Image</label>
          <div class="col-md-9"><input type="file" name="id_back"></div>
          <div class="clearfix"></div>
          @if($employee->id_back)
          <div class="col-md-3"></div>
          <div class="col-md-9"> 
            <img src="{{ asset('storage/employee/'.$employee->id_back) }}" style="width:150px;">
          </div>
          <div class="clearfix"></div>
          @endif
        </div>
      </div>

      <div class="form-group">
        <div class="row">
          <label class="col-md-3">Specilist</label>
          <div class="col-md-6">
              <textarea name="specilist" class="form-control">
                {{ $employee->specilist }}
              </textarea>
            </div>
          <div class="clearfix"></div>
        </div>
      </div>

      <div class="form-group">
        <input type="submit" class="btn btn-info" value="Update">
      </div>
    </form>
  </div>
</section>  


@endsection