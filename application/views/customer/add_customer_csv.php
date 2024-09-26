
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- Add Product Start -->
<div class="content-wrapper">
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1><?php echo  ('Import Customer Csv') ?></h1>
            <small><?php //echo display('import_product_csv') ?></small>
            <ol class="breadcrumb">
                <li><a href="<?php echo base_url('')?>"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
                <li><a href="<?php echo base_url('Ccustomer')?>">
                <!-- <?php //echo display('product') ?></a></li> -->
                <li class="active" style="color:orange"><?php echo  ('Import Customer Csv') ?></li>
            </ol>
        </div>
    </section>

    <section class="content">

        <!-- Alert Message -->
        <?php
            $message = $this->session->userdata('message');
            if (isset($message)) {
        ?>
        <div class="alert alert-info alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <?php echo $message ?>                    
        </div>
        <?php 
            $this->session->unset_userdata('message');
            }
            $error_message = $this->session->userdata('error_message');
            if (isset($error_message)) {
        ?>
        <div class="alert alert-danger alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <?php echo $error_message ?>                    
        </div>
        <?php 
            $this->session->unset_userdata('error_message');
            }
        ?>
        <!-- Add Product report -->
        <div class="row">
            <div class="col-sm-12">
                   

                   <?php if($this->permission1->method('create_product','create')->access()){ ?>
                    <a href="<?php echo base_url('Cproduct')?>" class="btn btn-warning m-b-5 m-r-2"><i class="ti-align-plus"></i>  <?php echo display('add_product')?></a>
                   <?php }?>
                    <?php if($this->permission1->method('manage_product','read')->access()){ ?>
                    <a href="<?php echo base_url('Cproduct/manage_product')?>" class="btn btn-primary m-b-5 m-r-2"><i class="ti-align-justify"></i>  <?php echo display('manage_product')?></a>
                      <?php }?>
                    <!-- the overlay element -->
                    <div class="md-overlay"></div>
                
            </div>
        </div>

      
        <div class="row">
            <div class="col-sm-12 col-md-12">
                <!-- Multiple panels with drag & drop -->
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading" style="height: 55px;">
                        <div class="panel-title">
                            <h4><?php //echo display('csv_file_informaion')?></h4>
                            
                              <div id="bloc2" style="float:right;">
                                <a style="background-color:#38469f;color:white;" href="<?php echo base_url('Ccustomer/manage_customer') ?>" class="btn  m-b-5 m-r-2"><i class="ti-align-justify"> </i> <?php echo ('Manage Product') ?> </a>
                            </div>   
                            
                        </div>
                    </div>
                    <div class="panel-body">
                       <a href="<?php echo base_url('asset/data/csv/customer_csv_sample.csv') ?>" class="btn btn-primary pull-right"  style="background-color:#38469f;color:white;"    ><i class="fa fa-download"></i> Download Sample File</a>
 
                       
                       
                       <span class="text-warning">The first line in downloaded csv file should remain as it is. Please do not change the order of columns.</span><br>The correct column order is <span class="text-info">(Customer Name,Customer Address,Address2,Mobile Number,Currency Type,Phone,Fax,Contact,City,State,Zipcode,Country,Primary Email,Secondary Email,Payment Terms,Sales Tax,Tax Percentage,Credit Limit,Open Balance)</span> &amp; you must follow this.<br>Please make sure the csv file is UTF-8 encoded and not saved with byte order mark (BOM).<p>The images should be uploaded in <strong>uploads</strong> folder.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4><?php echo display('import_product_csv') ?></h4>
                        </div>
                    </div>
                     <?php echo form_open_multipart('Ccustomer/uploadCsv_Customer',array('class' => 'form-vertical', 'id' => 'validate','name' => 'insert_customer'))?>

                   
                     <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label for="upload_csv_file" class="col-sm-4 col-form-label" ><?php echo display('upload_csv_file') ?> <i class="text-danger">*</i></label>
                                    <div class="col-sm-8">
                                        <input class="form-control" name="upload_csv_file" type="file" id="upload_csv_file" placeholder="<?php echo display('upload_csv_file') ?>" required>
                                    </div>
                                </div>
                            </div>
                        </div>
            
                        <div class="form-group row">
                            <div class="col-sm-6">
                                <input type="submit" id="add-product" class="btn btn-primary btn-large" name="add-product" style="background-color:#38469f;color:white;"  value="<?php echo display('submit') ?>" />
                                <input type="submit" value="<?php echo display('submit_and_add_another') ?>"  style="background-color:#38469f;color:white;" name="add-product-another" class="btn btn-large btn-success" id="add-product-another">
                            </div>
                        </div>
                    </div>
                    <?php echo form_close()?>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- Add Product  End -->



