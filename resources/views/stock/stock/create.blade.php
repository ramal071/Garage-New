@extends('layouts.admin')

@section('content')


<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Add Stock Details</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href=" {{ route('home') }}">Home</a></li>
          <li class="breadcrumb-item active">Add Stock Details</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
    <!-- /.content-header -->
<section class="content">
  <div class="container-fluid">
      {{-- {{ route('category.store')}} --}}
    <form method="post" action=" {{ route('stock.store')}} ">
      {{-- csrf token is a security purpose. if not support save button --}}
      <input type="hidden" name="_token" value="{{ csrf_token() }}">

            {{--  --}}


            <div class="form-group">
              <div class="row">
                <label class="col-md-3">Brand Name</label>
                <div class="col-md-6">
                  <select name="brand_id" class="form-control" >
                    <option value="">Choose a Brand Name</option>
                    @foreach($brand as $b)
                      <option value="{{ $b->id }}">{{ $b->name }}</option>
                    @endforeach 
                  </select>

                </div>
                <div class="clearfix"></div>
              </div>
            </div> 

            <div class="form-group">
              <div class="row">
                <label class="col-md-3">Category/Model </label>
                <div class="col-md-6">
                  <select name="category_id" class="form-control" >
                    <option value="">Choose a Model</option>
                    @foreach($category as $c)
                      <option value="{{ $c->id }}">{{ $c->name }}</option>
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
                  <select name="capacity_id" class="form-control" >
                    <option value="">Choose Capacity</option>
                   @foreach($capacity as $c)
                      <option value="{{ $c->id }}">{{ $c->capacity_name }}</option>
                    @endforeach 
                  </select>
                </div>
                <div class="clearfix"></div>
              </div>
            </div> 

            <div class="form-group">
              <div class="row">
                <label class="col-md-3">Manufacturer Year</label>
                <div class="col-md-6">
                  <select name="manufacturer_id" class="form-control" >
                    <option value="">Choose Manufacturer Year</option>
                     @foreach($manufacturer as $c)
                      <option value="{{ $c->id }}">{{ $c->year }}</option>
                    @endforeach 
                  </select>
                </div>
                <div class="clearfix"></div>
              </div>
            </div> 

            <div class="form-group">
              <div class="row">
                <label class="col-md-3">Quantity</label>
                <div class="col-md-6"><input type="text" name="qty" class="form-control" required></div>
                <div class="clearfix"></div>
              </div>
            </div>

            <div class="form-group">
              <div class="row">
                <label class="col-md-3">Color</label>
                <div class="col-md-6"><input type="text" name="color" class="form-control" ></div>
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
        <a href="{{route('stock.index')}}" class="btn btn-primary">Back</a>
      </div>
    </form>
  </div>
</section>  


@endsection