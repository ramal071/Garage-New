@extends('layouts.admin')
@section('content')

<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">...</div>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
</div>

<div class="form-group">  
  <a href="{{route('stock.index')}}" class="btn btn-primary">Stock</a>
  <a href="{{route('brand.index')}}" class="btn btn-primary">Brand</a>
  <a href="{{route('vehicle.index')}}" class="btn btn-primary">Vehicle</a>
</div>
{{-- <div class="container mt-2">
  <ul class="nav nav-tabs">
    <li class="nav-item"><a href="{{route('stock.index')}}" class="btn btn-primary">Stock</a></li><br>
    <li class="nav-item"><a href="{{route('brand.index')}}" class="btn btn-primary">Brand</a></li>
    <li class="nav-item"><a href="{{route('vehicle.index')}}" class="btn btn-primary">Vehicle</a></li>
  </ul>
</div> --}}
<br>

<div class="content-header">
  <div class="container-fluid" >
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

    <section class="content" >
        <div class="container-fluid text-right">
            <p>
                <a href="{{ route('stock.create')}} "  data-toggle="modal" data-target="#add" class="btn btn-primary">Add Stock Details</a>
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


        <!--     Modal    -->

<div class="modal fade" id="add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Stock</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        {{-- add stock  --}}
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
                            {{-- @foreach($brand as $b)
                              <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                            @endforeach  --}}
                          </select>
        
                        </div>
                        <div class="clearfix"></div>
                      </div>
                    </div> 
        
                    <div class="form-group">
                      <div class="row">
                        <label class="col-md-3">Vehicle/Model </label>
                        <div class="col-md-6">
                          <select name="vehicle_id" class="form-control" >
                            <option value="">Choose a vehicle</option>
                            {{-- @foreach($vehicle as $c)
                              <option value="{{ $c->id }}">{{ $c->name }}</option>
                            @endforeach  --}}
                          </select>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                    </div> 
        
                    {{-- <div class="form-group">
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
                    </div>  --}}
        
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

      </div>
      {{-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> --}}
    </div>
  </div>
</div>

{{--end add stock  --}}


      </section>	

      @endsection