@extends('layouts.admin')

@section('content')


    <!-- /.content-header -->
<section class="content">
  <div class="container-fluid">
      {{-- {{ route('category.store')}} --}}
    <form method="post" action=" {{ route('stock.store')}} ">
      {{-- csrf token is a security purpose. if not support save button --}}
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="modal fade text-left" id="add" tabindex="-1" role="dialog" aria-hidden="true">
            {{--  --}}


            <div class="form-group">
              <div class="row">
                <label class="col-md-3">Brand Name</label>
                <div class="col-md-6">
                  <select name="brand_id" class="form-control" >
                    <option value="">Choose a Brand Name</option>
                    {{-- @foreach($brand as $b)
                      <option value="{{ $b->id }}">{{ $b->name }}</option>
                    @endforeach  --}}
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