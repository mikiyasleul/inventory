<aside class="main-sidebar" style="position:fixed;">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        
        <li id="dashboardMainMenu">
          <a href="<?php echo base_url('dashboard') ?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>

        <?php if($user_permission): ?>
          <?php if(in_array('createUser', $user_permission) || in_array('updateUser', $user_permission) || in_array('viewUser', $user_permission) || in_array('deleteUser', $user_permission)): ?>
            <li class="treeview" id="mainUserNav">
            <a href="#">
              <i class="fa fa-users"></i>
              <span>Members</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">

            	<?php if(in_array('updateUser', $user_permission) || in_array('viewUser', $user_permission) || in_array('deleteUser', $user_permission)): ?>
                <li id="manageUserNav">
                  <a href="<?php echo base_url('users') ?>">
                     <i class="fa fa-user"></i> Users
                     </a>
                </li>
              <?php endif; ?>

              <?php if(in_array('updateGroup', $user_permission) || in_array('viewGroup', $user_permission) || in_array('deleteGroup', $user_permission)): ?>
                <li id="manageGroupNav"><a href="<?php echo base_url('groups') ?>"><i class="fa fa-circle-o"></i> Groups</a></li>
              <?php endif; ?>

              
            </ul>
          </li>
          <?php endif; ?>


          <?php if(in_array('createProduct', $user_permission) || in_array('updateProduct', $user_permission) || in_array('viewProduct', $user_permission) || in_array('deleteProduct', $user_permission)): ?>
            <li class="treeview" id="mainProductNav">
              <a href="#">
                <i class="fa fa-cube"></i>
                <span>Products</span><span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                
          <?php if(in_array('createBrand', $user_permission) || in_array('updateBrand', $user_permission) || in_array('viewBrand', $user_permission) || in_array('deleteBrand', $user_permission)): ?>
            <li id="brandNav">
              <a href="<?php echo base_url('brands/') ?>">
                <i class="glyphicon glyphicon-tags"></i> 
                <span>Brands</span>
              </a>
            </li>
          <?php endif; ?>


          <?php if(in_array('createCategory', $user_permission) || in_array('updateCategory', $user_permission) || in_array('viewCategory', $user_permission) || in_array('deleteCategory', $user_permission)): ?>
            <li id="categoryNav">
              <a href="<?php echo base_url('category/') ?>">
                <i class="fa fa-files-o"></i> <span>Category</span>
              </a>
            </li>
          <?php endif; ?>
                <?php if(in_array('updateProduct', $user_permission) || in_array('viewProduct', $user_permission) || in_array('deleteProduct', $user_permission)): ?>
                <li id="manageProductNav">
                  <a href="<?php echo base_url('products/') ?>">
                    <i class="fa fa-circle-o"></i> <span>Manage Products</span>
                  </a>
                </li>
                <?php endif; ?>
              </ul>
            </li>
          <?php endif; ?>


  		<?php if(in_array('createStore', $user_permission) || in_array('updateStore', $user_permission) || in_array('viewStore', $user_permission) || in_array('deleteStore', $user_permission)): ?>
            <li id="storeNav">
              <a href="<?php echo base_url('stores/') ?>">
                <i class="fa fa-home"></i> <span>Stores</span>
              </a>
            </li>
          <?php endif; ?>

          <?php if(in_array('createAttribute', $user_permission) || in_array('updateAttribute', $user_permission) || in_array('viewAttribute', $user_permission) || in_array('deleteAttribute', $user_permission)): ?>
          <li id="attributeNav">
            <a href="<?php echo base_url('attributes/') ?>">
              <i class="fa fa-sitemap"></i> <span>Attributes</span>
            </a>
          </li>
          <?php endif; ?>



          <?php if(in_array('createOrder', $user_permission) || in_array('updateOrder', $user_permission) || in_array('viewOrder', $user_permission) || in_array('deleteOrder', $user_permission)): ?>
            <li id="mainOrdersNav">
              <a href="<?php echo base_url('orders') ?>">
                <i class="fa fa-shopping-cart"></i>
                <span> Orders<span>
              </a>
            </li>
          <?php endif; ?>


         

          <?php if(in_array('viewReports', $user_permission)): ?>
            <li id="reportNav">
              <a href="<?php echo base_url('reports/') ?>">
                <i class="glyphicon glyphicon-stats"></i> <span>Reports</span>
              </a>
            </li>
          <?php endif; ?>


          <?php if(in_array('updateCompany', $user_permission)): ?>
            <li id="companyNav">
              <a href="<?php echo base_url('company/') ?>">
                <i class="fa fa-university"></i>
                 <span>Company</span>
              </a>
            </li>
          <?php endif; ?>

        

        <!-- <li class="header">Settings</li> -->

        <?php if(in_array('viewProfile', $user_permission)): ?>
          <li id="profileNav">
              <a href="<?php echo base_url('users/profile/') ?>">
                 <i class="fa fa-user-o"></i>
                 <span>Profile</span>
              </a>
          </li>
        <?php endif; ?>
        

        <?php endif; ?>
        <!-- user permission info -->
        <li>
            <a id="logout" href="<?php echo base_url('auth/logout') ?>">
                <i class="glyphicon glyphicon-log-out"></i>  
                <span>Logout</span>
            </a>
        </li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

<script>
 /*
 $('#logout').click(function()
          {
  /*            
    <div class="modal-dialog" role="document">
    <div class="modal-content">

          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Log-out Order</h4>
          </div>
          
          <div class="modal-body">
              <p><strong>Do you really want to Log-out?</strong></p>
          </div>

          <div class="modal-footer">
              <button type="submit" class="btn btn-danger">Yes</button>
              <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
          </div>
      </div> 
  </div>
  */ 
   alert('you wana to log out');
          }
       );
*/
</script>
