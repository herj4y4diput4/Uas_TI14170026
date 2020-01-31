<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url() ?>templates/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
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
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="<?php echo site_url()?>"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
            <li><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Master</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">6</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url()?>/welcome/jenis"><i class="fa fa-circle-o"></i> Jenis</a></li>
            <li><a href="<?php echo site_url()?>/welcome/kondisi"><i class="fa fa-circle-o"></i>Kondisi</a></li>
            <li><a href="<?php echo site_url()?>/welcome/ruang"><i class="fa fa-circle-o"></i> Ruang</a></li>
            <li><a href="<?php echo site_url()?>/welcome/satuan"><i class="fa fa-circle-o"></i> Satuan</a></li>
            <li><a href="<?php echo site_url()?>/welcome/sumber"><i class="fa fa-circle-o"></i> Sumber</a></li>
            <li><a href="<?php echo site_url()?>/welcome/tahun"><i class="fa fa-circle-o"></i> Tahun</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>