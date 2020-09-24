<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                {{get_data_user('web','name')}}
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
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
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li class="{{ \Request::route()->getName() == 'get.user.dashboard' ? 'active' : '' }}">
                <a href="{{ route('get.user.dashboard') }}">
                    <i class="fa fa-dashboard" aria-hidden="true"></i> <span>Home</span>
                </a>
            </li>
            <li class="{{ \Request::route()->getName() == 'get.user.update_info' ? 'active' : '' }}">
                <a href="{{ route('get.user.update_info') }}">
                    <i class="fa fa-dashboard" aria-hidden="true"></i> <span>Cập nhật thông tin</span>
                </a>
            </li><li class="{{ \Request::route()->getName() == 'get.user.transactions' ? 'active' : '' }}">
                <a href="{{ route('get.user.transactions') }}">
                    <i class="fa fa-dashboard" aria-hidden="true"></i> <span>Quản lý đơn hàng</span>
                </a>
            </li><li class="{{ \Request::route()->getName() == 'get.user.dashboard' ? 'active' : '' }}">
                <a href="{{ route('get.user.dashboard') }}">
                    <i class="fa fa-dashboard" aria-hidden="true"></i> <span>Sản phẩm yêu thích</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
