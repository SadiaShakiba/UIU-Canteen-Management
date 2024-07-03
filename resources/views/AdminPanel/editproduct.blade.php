@extends ('AdminPanel.layouts.admin_nav')
@section('title')
    Edit Product
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Edit Product Details</h3>
                        </div>
                        <div class="card-body">
                           <div class="row">
                            <div class="col-md-6">

                            @if(Session::get('failure'))
                                <div class="alert alert-danger">
                                        {{ Session::get('failure')}}
                                </div>
                            @endif

                            {{-- <form action="/test-update/ {{ $tests->id }}" method="POST">
                                @csrf
                                {{ method_field('PUT') }}
                                    <div class="form-group">
                                    <label>Name</label>
                                    <input style="font-size:13px;" type="text" name="test_name" value="{{$tests->test_name}}" class="form-control" readonly>
                                    </div>
                                    <div class="form-group">
                                    <label>Price</label>
                                    <select name="availabilitytype" class="form-control" id="">
                                        <option style="font-size:13px;" value="available">Available</option>
                                        <option style="font-size:13px;" value="not_available">Not Available</option>
                                    </select>
                                    </div>
                                    <button type="submit" class="btn btn-success">Update</button>
                                    <a href="/types" class="btn btn-danger">Cancel</a>
                                    </form> --}}

                                    @if(Session::get('failure'))
                                    <div class="alert alert-danger">
                                            {{ Session::get('failure')}}
                                    </div>
                                @endif



                                    <form action="/product-update/ {{ $products->product_id }}" method="post">
                                        @csrf
                                        {{-- {{ method_field('PUT') }} --}}
                                            <div class="form-group">
                                            <label>Product</label>
                                            <input style="font-size:13px;" type="text" name="product_name" value="{{$products->product_id}}" class="form-control" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label>Price</label>
                                                <input style="font-size:13px;" type="text" name="prouduct_price" value="{{$products->product_price}}" class="form-control" readonly>
                                                </div>
                                            <div class="form-group">
                                            <label>Status</label>
                                            <select name="status" class="form-control" id="status">
                                                <option style="font-size:13px;" value="available">Available</option>
                                                <option style="font-size:13px;" value="not_available">Not Available</option>
                                            </select>
                                            </div>
                                            <button type="submit" class="btn btn-success">Update</button>
                                            <a href="#" class="btn btn-danger">Cancel</a>
                                      </form>










                            </div>
                           </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
@endsection
