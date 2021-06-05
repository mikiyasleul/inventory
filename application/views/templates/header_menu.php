<header class="main-header" style="position: fixed;">
    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><i class="fa fa-user"></i></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">
          <b>
             <?php 
                $user_id=$this->session->userdata('id'); 
                $group_data=$this->model_groups->getUserGroupByUserId($user_id); 
                echo $group_data['group_name']; 
             ?>
          </b>
      </span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-fixed-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <div style="float:right; font-weight:bold; padding:10px 50px; font-size: 20px; color:white;"> 
           <i class='fa fa-user'></i> 
           <b>
               <?php echo $this->session->userdata('username');?>
           </b> 
      </div> 
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  