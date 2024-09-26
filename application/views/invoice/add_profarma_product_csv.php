<!-- Add Product Start -->
<div class="content-wrapper">
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('import_product_csv') ?></h1>
            <small><?php echo display('import_product_csv') ?></small>
            <ol class="breadcrumb">
                <li><a href="<?php echo base_url('')?>"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
                <li><a href="#"><?php echo display('invoice') ?></a></li>
                <li class="active"><?php echo display('import_product_csv') ?></li>
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
            <div class="col-sm-12 col-md-12">
                <!-- Multiple panels with drag & drop -->
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4><?php echo display('csv_file_informaion')?></h4>
                        </div>
                    </div>
                    <div class="panel-body">
                       <a href="<?php echo base_url('assets/data/csv/product/proforma.csv') ?>" style="background-color:#38469f;color:white;" class="btn btn-primary text-white pull-right"><i class="fa fa-download"></i> Download Sample File</a>
                            <span class="text-warning">The first line in downloaded csv file should remain as it is. Please do not change the order of columns.</span><br>The correct column order is <span class="text-info">(Invoice Number,Purchase Date,Customer Id,Pre Carriage,Country of origin of goods,Country of final destination,Port of loading,Port Of Discharge,Terms of payment and delivery,Description goods,Grand Total,Amount Paid,Balance Amount,Account Details/Additional Information,Product Id,Quantity,Rate,Total Amount,Thickness,Description,Supplier Block No,Supplier Slab No,Gross Width,Gross Height,Gross Sq.Ft,Bundle No,Net Width,Net Height,Net Sq. Ft,Sales Price per Sq.Ft,Sales Slab Price,Weight)<br></span> &amp; you must follow this.<br>Please make sure the csv file is UTF-8 encoded and not saved with byte order mark (BOM).<p>The images should be uploaded in <strong>uploads</strong> folder.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>CSV File Information</h4>
                        </div>
                    </div>
                     <?php echo form_open_multipart('Cinvoice/uploadProformacsv',array('class' => 'form-vertical', 'id' => 'validate','name' => 'insert_product'))?>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label for="upload_csv_file" class="col-sm-4 col-form-label"><?php echo display('upload_csv_file') ?> <i class="text-danger">*</i></label>
                                    <div class="col-sm-8">
                                        <input class="form-control" name="upload_csv_file" type="file" id="upload_csv_file" placeholder="<?php echo display('upload_csv_file') ?>" required>
                                    </div>
                                </div>
                            </div>
                        </div>
            
                        <div class="form-group row"> <div class="col-sm-6">
                        <input type="submit" id="add-product" class="btn
                        btn-primary btn-large" style="background-color:#38469f;color:white;" name="add-product"
                        value="<?php echo display('submit') ?>" /> </div>
                        </div> 
                        </div> 
                        <?php echo form_close()?>
                        
                    </div>  
                    </div>
                        </div> 
                        <br>

<!--                     <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>Imported Products</h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="row" style="overflow: scroll;">
                            <div class="col-md-12">
                        <form id="csv_details" method="post">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>Purchase Date</th>
                                    <th>Product Name</th>
                                    <th>Quantity</th>
                                    <th>Amount</th>
                                    <th>Chalan No</th>
                                    <th>Receipt</th>
                                    <th>Pre Carriage</th>
                                    <th>Country Destination</th>
                                    <th>Loading</th>
                                    <th>Discharge</th>
                                    <th>Terms Payment</th>
                                    <th>Description</th>
                                    <th>Account Details/Additional Information</th>
                                    <th>Remarks/Conditions</th>
                               
                            </thead>
                            <tbody>


                              <?php $arr=$this->session->userdata('file_path');

                              if(!empty($arr)){

                              for($i = 0; $i<count($arr); $i++){
                                    
                               echo "<tr>

                               <td>".$i."</td> 

                               <td><input style='width: 130px !important;' type='text' class='form-control' name='purchase_date[]' value='". $arr[$i]['purchase_date']." '></td> 

                               <td><input style='width: 130px !important;' type='text' class='form-control' name='product_name[]' value='". $arr[$i]['product_name']."'></td> 

                               <td><input style='width: 130px !important;' type='text' class='form-control' name='quantity[]' value='". $arr[$i]['quantity']." '></td>

                               <td> <input style='width: 130px !important;' type='text' class='form-control' name='rate[]' value='". $arr[$i]['rate']."'></td>

                               <td><input style='width: 130px !important;' type='text' class='form-control' name='chalan_no[]' value='". $arr[$i]['chalan_no']."'></td>

                               <td> <input style='width: 130px !important;' type='text' class='form-control' name='receipt[]' value='". $arr[$i]['receipt']." '></td>

                               <td><input style='width: 130px !important;' type='text' class='form-control' name='pre_carriage[]' value='". $arr[$i]['pre_carriage']."  '></td>

                               <td><input style='width: 130px !important;' type='text' class='form-control' name='country_destination[]' value='". $arr[$i]['country_destination']."'></td> 

                               <td><input style='width: 130px !important;' type='text' class='form-control' name='loading[]' value='". $arr[$i]['loading']."'></td> 

                               <td><input style='width: 130px !important;' type='text' class='form-control' name='discharge[]' value='". $arr[$i]['discharge']."'></td> 

                               <td><input style='width: 130px !important;' type='text' class='form-control' name='terms_payment[]' value='". $arr[$i]['terms_payment']."'></td> 

                                <td><input style='width: 130px !important;' type='text' class='form-control' name='description_goods[]' value='". $arr[$i]['description_goods']."'></td>

                                <td><input style='width: 130px !important;' type='text' class='form-control' name='ac_details[]' value='". $arr[$i]['ac_details']."'></td>

                                <td><input style='width: 130px !important;' type='text' class='form-control' name='remark[]' value='". $arr[$i]['remark']."'></td>
                                </tr>"; 
                              
                                } } else{echo "<tr>
                                      <td colspan='19' class='text-center'><b>No Products Found</b></td>
                                    </tr>";} ?>
                            </tbody>
                            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                            <input type="hidden" id="invoice_hdn"/> <input type="hidden" id="invoice_hdn1"/>
                        
                    </table>
                     <button class="btn btn-primary">Submit</button>
                    </form>   
                    </div> 
                        </div>
            
                        </div> 
                    </div>  
                    </div>
                        </div>  -->
                        
                    </section> 
                </div>
<!-- Add Product  End -->


<style type="text/css">
    .error{
        color: red;
        margin-top: 10px;
    }

   /* .form-control{
        width: 130px !important;
    }*/
</style>


<!-- <script type="text/javascript">
    var csrfName = '<?php echo $this->security->get_csrf_token_name();?>';
    var csrfHash = '<?php echo $this->security->get_csrf_hash();?>';


    $('#csv_details').submit(function (event) {
   
       
    var dataString = {
        dataString : $("#csv_details").serialize()
    
   };
   dataString[csrfName] = csrfHash;
  
    $.ajax({
        type:"POST",
        dataType:"json",
        url:"<?php echo base_url(); ?>Cinvoice/bulkproformaproduct",
        data:$("#csv_details").serialize(),

        success:function (data) {
        console.log(data);
            var input_hdn2="Saved Successfully";
            $("#bodyModal1").html(input_hdn2);
            $('#myModal1').modal('show');
            window.setTimeout(function(){
        $('.modal').modal('hide');
       },2500);
       }

    });
    event.preventDefault();
});
</script> -->


<div class="modal fade" id="myModal1" role="dialog" >
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content" style="margin-top: 190px;">
        <div class="modal-header" style="">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Product Upload Successfully</h4>
        </div>
        <div class="modal-body" id="bodyModal1" style="text-align:center;font-weight:bold;">
          
      

        </div>
        <div class="modal-footer">
          
        </div>
      </div>
      
    </div>
  </div>



