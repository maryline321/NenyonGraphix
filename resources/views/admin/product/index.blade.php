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
                <h4 class="card-title">Product Page
                </h4>

            </div>
        
              <div class="card-body">
           
              <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Category</th>
      <th scope="col">Name</th>
      <!-- <th scope="col">Original Price</th> -->
      <th scope="col">Selling Price</th>
      <th scope="col">Image</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($products as $item)
    <tr>
      <td>{{ $item->id}}</td>
      <td>{{ $item->category->name}}</td>
      <td>{{ $item->name}}</td>
      <!-- <td>{{ $item->original_price}}</td> -->
      <td>{{ $item->selling_price}}</td>
      <td> <img src=" {{ asset('images/uploads/product/'.$item->image )}}" alt="image" style="width:70px;height:70px;"></td>

      <td> 
         <a href="{{ url('edit-product/'. $item->id)}}" class="btn btn-primary">Edit</a >
         <a href="{{ url('delete-product/'. $item->id)}}" class="btn btn-danger">Delete</a >
      </td>
    </tr>
    @endforeach
   
  </tbody>
</table>
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