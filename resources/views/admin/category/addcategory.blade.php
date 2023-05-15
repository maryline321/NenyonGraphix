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
            <div class="card-header">
                <h4> Add Category</h4>
            </div>
            <div class="card-body">

           <form action="{{ url('insert-category')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="">Name</label>
                    <input type="text" class="form-control" name="name">

                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Slug</label>
                    <input type="text" class="form-control" name="slug">

                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Description</label>
                    <textarea class="form-control" name="description" rows="3"></textarea>

                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Status</label>
                    <input type="checkbox" class="form-control" name="status">

                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Popular</label>
                    <input type="checkbox" class="form-control" name="popular">

                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Meta Title</label>
                    <input type="text" class="form-control" name="meta_title">

                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Meta Description</label>
                    <input type="text" class="form-control" name="meta_descrip">

                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Meta Keywords</label>
                    <textarea class="form-control" name="meta_keywords" rows="3"></textarea>

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