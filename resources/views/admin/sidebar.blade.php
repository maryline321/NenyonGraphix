<div class="sidebar" data-color="purple" data-background-color="white" data-image="admin/assets/img/sidebar-1.jpg">
      
      <div class="logo"><a href="#" class="simple-text logo-normal">
          Nenyon Media
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item {{ Request::is('#') ? 'active':'' }} ">
            <a class="nav-link" href="#">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item {{ Request::is('categories') ? 'active':'' }} ">
            <a class="nav-link" href="{{ url('categories')}}">
              <i class="material-icons">content_paste</i>
              <p>Categories</p>
            </a>
          </li>
          <li class="nav-item {{ Request::is('add-category') ? 'active':'' }} ">
            <a class="nav-link" href="{{ url('add-category')}}">
              <i class="material-icons">content_paste</i>
              <p>Add Category</p>
            </a>
          </li>
          <li class="nav-item {{ Request::is('products') ? 'active':'' }} ">
            <a class="nav-link" href="{{ url('products')}}">
              <i class="material-icons">content_paste</i>
              <p>Products</p>
            </a>
          </li>
          <li class="nav-item {{ Request::is('add-product') ? 'active':'' }} ">
            <a class="nav-link" href="{{ url('add-product')}}">
              <i class="material-icons">content_paste</i>
              <p>Add Products</p>
            </a>
          </li>
          
        </ul>
      </div>
    </div>