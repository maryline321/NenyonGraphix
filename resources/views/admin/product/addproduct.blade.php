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

           <form action="{{ url('insert-product')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">

            <div class="col-md-12">
            <select class="form-select" name="category_id" style="display:block; width:100%; background-color:#fff;">
                    <option selected>Select a Category</option>

                    @foreach ($cate_gory as $item)
                    <option value="{{ $item->id}}">{{$item->name}}</option>
                    @endforeach
                    </select>
            </div>
            <br>
        
                <div class="col-md-6 mb-3">
                    <label for="">Name</label>
                    <input type="text" class="form-control" name="name">

                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Small Description</label>
                    <input type="text" class="form-control" name="small_descrription">

                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Description</label>
                    <textarea class="form-control" name="description" rows="3"></textarea>

                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Original Price</label>
                    <input type="number" class="form-control" name="original_price">

                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Selling Price</label>
                    <input type="number" class="form-control" name="selling_price">

                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Tax</label>
                    <input type="number" class="form-control" name="tax">

                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Quantity</label>
                    <input type="number" class="form-control" name="quantity">

                </div>

                <div class="col-md-6 mb-3">
                    <label for="">Status</label>
                    <input type="checkbox" class="form-control" name="status">

                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Trending</label>
                    <input type="checkbox" class="form-control" name="trending">

                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Meta Title</label>
                    <input type="text" class="form-control" name="meta_title">

                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Meta Keywords</label>
                    <textarea class="form-control" name="meta_keywords" rows="3"></textarea>

                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Meta Description</label>
                    <input type="text" class="form-control" name="meta_description">

                </div>
               

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