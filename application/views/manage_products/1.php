
<link href="<?php echo base_url(); ?>bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
<link href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all"/>
<link href="<?php echo base_url(); ?>bootstrap/css/bootstrap-theme.css" rel="stylesheet" type="text/css" media="all"/>
<link href="<?php echo base_url(); ?>bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css" media="all"/>
<script type="text/javascript" src="<?php echo base_url(); ?>bootstrap/js/bootstrap.js"></script> 
<script type="text/javascript" src="<?php echo base_url(); ?>bootstrap/js/bootstrap.min.js"></script> 
<script type="text/javascript" src="<?php echo base_url(); ?>bootstrap/js/npm.js"></script> 


<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
		
		
		<?php 
		$attribute = array('method'=>'post','class'=>'form-horizontal','id'=>'myform','enctype'=>'multipart/form-data');
		
		echo form_open('home/add_products',  $attribute); 
		
		?>
		
		
<fieldset>

<!-- Form Name -->
<legend>Form Name</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_name">name</label>  
  <div class="col-md-4">
  <?php echo form_input(array('id'=>'product_name', 'name'=>'product_name', 'required'=>'required', 'class'=>'form-control input-md')); ?>

  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_name">interest</label>  
  <div class="col-md-4">
  <?php echo form_input(array('id'=>'product_interest', 'name'=>'product_interest', 'class'=>'form-control input-md')); ?>

  </div>
</div>



<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_desc">Descrition</label>
  <div class="col-md-4">   
    <?php echo form_textarea(array('id'=>'product_desc', 'name'=>'product_desc', 'class'=>'form-control')); ?>  
    
  </div>
</div>

<!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="image"></label>
  <div class="col-md-4">
  <?php echo form_upload(array('id'=>'image', 'name'=>'image', 'required'=>'required', 'class'=>'input-file')); ?>
  </div>
</div>

<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="confirm">confirm</label>
  <div class="col-md-8">
    <?php echo form_submit(array('id'=>'image', 'name'=>'image', 'class'=>'btn btn-success', 'value'=>'submit')); ?>
    <button id="back" name="back" class="btn btn-danger">back</button>
  </div>
</div>

</fieldset>


<?= form_close(); ?>

		
		
		
		
		
		</div>
	</div>
</div>