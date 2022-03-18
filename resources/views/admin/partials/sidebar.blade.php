<div class="main-sidebar">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="/admin">Admin</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="/admin">Ad</a>
    </div>
    <ul class="sidebar-menu">
        <li class="menu-header"><a href="/admin" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a></li>
        <li class="nav-item dropdown">
          <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Thể loại</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="{{route('admin.categories.index')}}">Danh sách</a></li>
            <li><a class="nav-link" href="{{route('admin.categories.create')}}">Thêm</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fab fa-product-hunt"></i> <span>Sản phẩm</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="{{route('admin.products.index')}}">Danh sách</a></li>
            <li><a class="nav-link" href="{{route('admin.products.create')}}">Thêm</a></li>
            <li><a class="nav-link" href="{{route('admin.products.remove')}}">Sản phẩm đã xóa</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-sliders-h"></i> <span>Slider</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="{{route('admin.sliders.index')}}">Danh sách</a></li>
            <li><a class="nav-link" href="{{route('admin.sliders.create')}}">Thêm</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-sliders-h"></i> <span>Bài viết</span></a>
            <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{route('admin.articles.index')}}">Danh sách</a></li>
                <li><a class="nav-link" href="{{route('admin.articles.create')}}">Thêm</a></li>
            </ul>
        </li>
        <li class="nav-item ">
          <a href="{{route('admin.transactions.index')}}" class="nav-link" ><i class="fas fa-cog"></i> <span>Transaction</span></a>
        </li>
        <li class="nav-item dropdown">
          <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-user"></i> <span>Quản trị viên</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="{{route('admin.users.index')}}">Danh sách</a></li>
            <li><a class="nav-link" href="{{route('admin.users.create')}}">Thêm</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-user"></i> <span>Khách hàng</span></a>
            <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{route('admin.customer.index')}}">Danh sách</a></li>
                <li><a class="nav-link" href="{{route('admin.customer.create')}}">Thêm</a></li>
            </ul>
        </li>
      </ul>

  </aside>
</div>
