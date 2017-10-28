<aside class="main-sidebar">

  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">

    <!-- Sidebar user panel (optional) -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="#" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>{{ Auth::user()->name}}</p>
        <!-- Status -->
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>

    <!-- search form (Optional) -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
      </div>
    </form>
    <!-- /.search form -->

    <!-- Sidebar Menu -->
    <ul class="sidebar-menu">
      <li class="header">MENU</li>
      <!-- Optionally, you can add icons to the links -->
      <li class="{{ Request::is('admin/index') ? "active" : "" }}"><a href="/admin/index"><i class="fa fa-home"></i> <span>Home</span></a></li>
      <li class="active treeview">
        <a href="#">
          <i class="fa fa-rss"></i> <span>Berita / Acara</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="{{ Request::is('admin/posts') ? "active" : "" }}"><a href="/admin/posts/"><i class="fa fa-newspaper-o"></i> Berita</a></li>
          <li class="{{ Request::is('admin/posts') ? "active" : "" }}"><a href="/admin/posts/"><i class="fa fa-book"></i> Draft</a></li>
          <li class="{{ Request::is('admin/tags') ? "active" : "" }}"><a href="/admin/tags/"><i class="fa  fa-tags"></i> <span>Tags</span></a></li>
          <li class="{{ Request::is('admin/categories') ? "active" : "" }}"><a href="/admin/categories/"><i class="fa fa-newspaper-o"></i> Category</a></li>
        </ul>
      </li>
      @if (Auth::user()->role == 'admin' || Auth::user()->role == 'superadmin' )
        <li class="{{ Request::is('admin/user') ? "active" : "" }}"><a href="/admin/user/"><i class="fa fa-user"></i> <span>User</span></a></li>
        @else

      @endif
    </ul>
    <!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>
