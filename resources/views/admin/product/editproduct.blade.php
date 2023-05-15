<!DOCTYPE html>
<html lang="en">

<head>
@include("admin.admincss");

</head>

<body class="">
  <div class="wrapper">

    @include("admin.sidebar");

    <div class="main-panel">
      <!-- Navbar -->
      @include("admin.navbar");
      <!-- End Navbar -->
      
      <div class="content">
        <div class="container-fluid">
           
        <div class="card">

        <div class="card-header card-header-primary card-header-icon">
                <div class="card-icon">
                    <i class="material-icons">assignment</i>
                </div>
                <h4 class="card-title">Add Product Page
                </h4>

            </div>

            <div class="card-body">

            <form action="{{ url('update-product/'.$product->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">

            <div class="col-md-12 mb-3">
            <label for="">Category</label>
            <select class="form-control">

                    <option value="">{{$product->category->name}}</option>
            </select>     
            </div>
            <br>
                <div class="col-md-6 mb-3">
                    <label for="">Name</label>
                    <input type="text" class="form-control" name="name" value="{{ $product->name }}">

                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Small Description</label>
                    <input type="text" class="form-control" name="small_descrription" value="{{ $product->small_descrription }}">

                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Description</label>
                    <textarea class="form-control" name="description" rows="3">{{ $product->description }}</textarea>

                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Original Price</label>
                    <input type="number" class="form-control" name="original_price" value="{{ $product->original_price }}">

                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Selling Price</label>
                    <input type="number" class="form-control" name="selling_price" value="{{ $product->selling_price }}">

                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Tax</label>
                    <input type="number" class="form-control" name="tax" value="{{ $product->tax }}">

                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Quantity</label>
                    <input type="number" class="form-control" name="quantity" value="{{ $product->quantity }}">

                </div>

                <div class="col-md-6 mb-3">
                    <label for="">Status</label>
                    <input type="checkbox" class="form-control" name="status" {{ $product->status =="1" ? 'checked': '' }} >

                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Trending</label>
                    <input type="checkbox" class="form-control" name="trending" {{ $product->trending =="1" ? 'checked': '' }} >

                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Meta Title</label>
                    <input type="text" class="form-control" name="meta_title" value="{{ $product->meta_title }}">

                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Meta Keywords</label>
                    <textarea class="form-control" name="meta_keywords" rows="3">{{ $product->meta_keywords }}</textarea>

                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Meta Description</label>
                    <input type="text" class="form-control" name="meta_description" value="{{ $product->meta_description }}">

                </div>
               
                @if($product->image)
                <img src="{{ asset('images/uploads/product/'.$product->image) }}" alt="image">
                @endif

                <div class="col-md-12">
                    <input type="file" class="form-control" name="image">

                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">Submit</button>

                </div>

            </div>
           </form>
</div>

        </div>

        </div>
      </div>
      @include("admin.footer");
    </div>
  </div>

  <!--   Core JS Files   -->
  @include("admin.adminscript");
  
</body>

</html>