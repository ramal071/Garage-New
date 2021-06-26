@extends('layouts.admin')

@section('content')


<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Edit Stock Details</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href=" {{ route('home') }}">Home</a></li>
          <li class="breadcrumb-item active">Edit Stock Details</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
    <!-- /.content-header -->
<section class="content">
  <div class="container-fluid">
      {{-- {{ route('category.update', $category->id) }} --}}
        <form method="post" action="{{ route('stock.update', $stock->id) }}  " enctype="multipart/form-data">
            @method('PUT')
      {{-- csrf token is a security purpose. if not support save button --}}
      <input type="hidden" name="_token" value="{{ csrf_token() }}">

      <div class="form-group">
        <div class="row">
          <label class="col-md-3">Brand</label>
          <div class="col-md-6">
            <select name="brand_id" class="form-control">
              <option value="">Choose a Brand</option>
              @foreach($brand as $b)
                <option value="{{ $b->id }}"
                  @if($b->id == $stock->brand_id)
                  selected
                  @endif
                  >{{ $b->name }}</option>
              @endforeach
            </select>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>

      <div class="form-group">
        <div class="row">
          <label class="col-md-3">Model</label>
          <div class="col-md-6">
            <select name="category_id" class="form-control">
              <option value="">Choose a Model</option>
              @foreach($category as $r)
                <option value="{{ $r->id }}"
                  @if($r->id == $stock->category_id)
                  selected
                  @endif
                  >{{ $r->name }}</option>
              @endforeach
            </select>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>

      <div class="form-group">
        <div class="row">
          <label class="col-md-3">Capacity</label>
          <div class="col-md-6">
            <select name="capacity_id" class="form-control">
              <option value="">Choose capacity </option>
              @foreach($capacity as $r)
                <option value="{{ $r->id }}"
                  @if($r->id == $stock->capacity_id)
                  selected
                  @endif
                  >{{ $r->capacity_name }}</option>
              @endforeach
            </select>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>

      <div class="form-group">
        <div class="row">
          <label class="col-md-3">Year</label>
          <div class="col-md-6">
            <select name="manufacturer_id" class="form-control">
              <option value="">Choose a year</option>
              @foreach($manufacturer as $r)
                <option value="{{ $r->id }}"
                  @if($r->id == $stock->manufacturer_id)
                  selected
                  @endif
                  >{{ $r->year }}</option>
              @endforeach
            </select>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>

      <div class="form-group">
        <div class="row">
          <label class="col-md-3">Quantity</label>
          <div class="col-md-6"><input type="text" name="qty" class="form-control" value="{{ $stock->qty }}"></div>
          <div class="clearfix"></div>
        </div>
      </div>

      <div class="form-group">
        <div class="row">
          <label class="col-md-3">color</label>
          <div class="col-md-6"><input type="text" name="color" class="form-control" value="{{ $stock->color }}"></div>
          <div class="clearfix"></div>
        </div>
      </div>
      
      <div class="form-group">
        <div class="row">
          <label class="col-md-3">description</label>
          <div class="col-md-6">
              <textarea name="description" class="form-control">{{ $stock->description }}</textarea>
            </div>
          <div class="clearfix"></div>
        </div>
      </div>

      <div class="form-group">
        <input type="submit" class="btn btn-info" value="Update">
        <a href="{{route('stock.index')}}" class="btn btn-primary">Back</a>
      </div>
    </form>
  </div>
</section>  


@endsection