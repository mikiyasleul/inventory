<style> 
	.form-group.required .control-label:after{
		content: " * ";
		color: red;
	}
</style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Manage
      <small>Products</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url('Dashboard/') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Products</li>
    </ol>
  </section>

  <!-- Main content -->                                                   
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-md-6 col-xs-12 col-md-offset-2">

        <div id="messages"></div>

        <?php if($this->session->flashdata('success')): ?>
          <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <?php echo $this->session->flashdata('success'); ?>
          </div>
        <?php elseif($this->session->flashdata('error')): ?>
          <div class="alert alert-error alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <?php echo $this->session->flashdata('error'); ?>
          </div>
        <?php endif; ?>


        <div class="box" >
          <div class="box-header">
            <h3 class="box-title">Add Product</h3>
          </div>
          <!-- /.box-header -->
          <form role="form" action="<?php base_url('users/create') ?>" method="post" enctype="multipart/form-data" >
              <div class="box-body">

                <?php echo validation_errors(); ?>

                <div class="form-group">

                  <label for="product_image">Image</label>
                  <div class="kv-avatar">
                  <div class="file-loading">
                          <input id="product_image" name="product_image" type="file">
                      </div>
                  </div>
                </div>

                <div class="form-group required">
                  <label for="product_name" class="control-label">Product name</label>
                  <input type="text" class="form-control" id="product_name" name="product_name" placeholder="Enter product name" value ="<?php echo set_value("product_name");?>" autocomplete="off" required/>
                  <div class="error-form" id="name_error"> </div>
                </div>

                <div class="form-group required">
                  <label for="sku" class="control-label">SKU</label>
                  <input type="text" class="form-control" id="sku" name="sku" placeholder="Enter sku"value ="<?php echo set_value("sku");?>" autocomplete="off" required/>
                  <div class="error-form" id="name_error"> </div>
                </div>

                <div class="form-group required">
                  <label for="price" class="control-label">Price</label>
                  <input type="number" class="form-control" id="price" name="price" placeholder="Enter price" value ="<?php echo set_value("price");?>"autocomplete="off" required />
                  <div class="error-form" id="price_error"> </div>
                </div>

                <div class="form-group required">
                  <label for="qty" class="control-label">Quantity</label>
                  <input type="number" class="form-control" id="qty" name="qty" placeholder="Enter Qty" value ="<?php echo set_value("qty");?>"autocomplete="off" required />
                  <div class="error-form" id="qty_error"> </div>
                </div>

                <div class="form-group">
                  <label for="description">Description</label>
                  <textarea type="text" class="form-control" id="description" name="description" value ="<?php echo set_value("description");?>"placeholder="Enter 
                  description" autocomplete="off">
                  </textarea>
                </div>

                <?php if($attributes): ?>
                  <?php foreach ($attributes as $k => $v): ?>
                    <div class="form-group">
                      <label for="groups"><?php echo $v['attribute_data']['name'] ?></label>
                      <select class="form-control select_group" id="attributes_value_id" name="attributes_value_id[]" multiple="multiple">
                        <?php foreach ($v['attribute_value'] as $k2 => $v2): ?>
                          <option value="<?php echo $v2['id'] ?>"><?php echo $v2['value'] ?></option>
                        <?php endforeach ?>
                      </select>
                    </div>    
                  <?php endforeach ?>
                <?php endif; ?>

                <div class="form-group">
                  <label for="brands">Brands</label>
                  <select class="form-control select_group" id="brands" name="brands[]" multiple="multiple">
                    <?php foreach ($brands as $k => $v): ?>
                      <option value="<?php echo $v['id'] ?>"><?php echo $v['name'] ?></option>
                    <?php endforeach ?>
                  </select>
                </div>

                <div class="form-group">
                  <label for="category">Category</label>
                  <select class="form-control select_group" id="category" name="category[]" multiple="multiple" >
                    <?php foreach ($category as $k => $v): ?>
                      <option value="<?php echo $v['id'] ?>"><?php echo $v['name'] ?></option>
                    <?php endforeach ?>
                  </select>
                </div>

                <div class="form-group">
                  <label for="store">Store</label>
                  <select class="form-control select_group" id="store" name="store">
                    <?php foreach ($stores as $k => $v): ?>
                      <option value="<?php echo $v['id'] ?>"><?php echo $v['name'] ?></option>
                    <?php endforeach ?>
                  </select>
                </div>

                <div class="form-group">
                  <label for="store">Availability</label>
                  <select class="form-control" id="availability" name="availability">
                    <option value="1">Yes</option>
                    <option value="2">No</option>
                  </select>
                </div>

              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save Changes</button>
                <a href="<?php echo base_url('products/') ?>" class="btn btn-warning">Back</a>
              </div>
            </form>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- col-md-12 -->
    </div>
    <!-- /.row -->
    

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<script type="text/javascript">
  $(document).ready(function() {
    $(".select_group").select2();
    $("#description").wysihtml5();

    $("#mainProductNav").addClass('active');
    $("#addProductNav").addClass('active');
    
    var btnCust = '<button type="button" class="btn btn-secondary" title="Add picture tags" ' + 
        'onclick="alert(\'Call your custom code here.\')">' +
        '<i class="glyphicon glyphicon-tag"></i>' +
        '</button>'; 
    $("#product_image").fileinput({
        overwriteInitial: true,
        maxFileSize: 1500,
        showClose: false,
        showCaption: false,
        browseLabel: '',
        removeLabel: '',
        browseIcon: '<i class="glyphicon glyphicon-folder-open"></i>',
        removeIcon: '<i class="glyphicon glyphicon-remove"></i>',
        removeTitle: 'Cancel or reset changes',
        elErrorContainer: '#kv-avatar-errors-1',
        msgErrorClass: 'alert alert-block alert-danger',
        // defaultPreviewContent: '<img src="/uploads/default_avatar_male.jpg" alt="Your Avatar">',
        layoutTemplates: {main2: '{preview} ' +  btnCust + ' {remove} {browse}'},
        allowedFileExtensions: ["jpg", "png", "gif"]
    });

  });



  ////////


  $(function(){
    $("#name_error").hide();
    $("#sku_error").hide();
    $("#price_error").hide();
    $("#qty_error").hide();


    var error_name=false;
    var error_sku=false;
    var error_price=false;
    var  error_qty=false; 

    $("#product_name").focusout(function(){
      checkname();  
    });
    $("#sku").fucusout(function(){
      checksku();

    });
    $("#price").focusout(function(){
      checkprice();
    });

    $("#qty").focusout(function(){
      checkqty();
    });

    function checkname(){
      var pattern=/^[a-zA-Z]*$/;
      var name =$("#product_name").val();
      if(pattern.test(name)&&name!== ''){
        $("#name_error").hide();
        
        $("#product_name").css("border-bottom","2px solic #34F45");
        
      }else{
        $("#name_error").html("should only contain charactrers");
        $("#name_error").show();
        error_name=true;
      }
    }


    function checkprice(){
      var pattern=/^[0-9]*$/;
      var name =$("#price").val();
      if(pattern.test(name)&&name!== ''){
        $("#price_error").hide();
       
        
      }else{
        $("#price_error").html("should only contain numbers");
        $("#price_error").show();
        error_name=true;
      }
    }

    function checkqty(){
      var pattern=/^[0-9]*$/;
      var name =$("#qty").val();
      if(pattern.test(name)&&name!== ''){
        $("#qty_error").hide();
       
        
      }else{
        $("#qty_error").html("should only contain numbers");
        $("#qty_error").show();
        error_name=true;
      }
    }
  })
</script>