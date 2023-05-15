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
            <div class="card-body">

            <h1>Nenyon Graphix</h1>
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