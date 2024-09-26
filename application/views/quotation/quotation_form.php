
<script src="<?php echo base_url() ?>my-assets/js/admin_js/json/service_quotation.js.php" ></script>
<script src="<?php echo base_url() ?>my-assets/js/admin_js/json/productquotation.js" ></script>
<script src="<?php echo base_url() ?>my-assets/js/admin_js/quotation.js" ></script>
<script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>


<div class="content-wrapper">
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('quotation') ?></h1>
            <small><?php echo display('add_quotation') ?></small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
                <li><a href="#"><?php echo display('quotation') ?></a></li>
                <li class="active"><?php echo display('add_quotation') ?></li>
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
        $user_type = $this->session->userdata('user_type');
        $user_id = $this->session->userdata('user_id');
        ?>


        <!-- New category -->
        <div class="row">
            <div class="col-sm-12">                
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4><?php echo display('add_quotation') ?> </h4>
                        </div>
                    </div>
                    <?php echo form_open('Cquotation/insert_quotation', array('class' => 'form-vertical', 'id' => 'insert_quotation')) ?>
                    <div class="panel-body">
                        <div class="form-group row">


                             <div class="col-sm-6">
                                <label for="quotation_no" class="col-sm-4 col-form-label"><?php echo display('quotation_no') ?> </label>
                                <div class="col-sm-8">
                                    <input type="text" name="quotation_no" id="quotation_no" class="form-control" placeholder="<?php echo display('quotation_no') ?>" value="<?php echo $quotation_no; ?>" readonly>
                                </div>
                            </div>


                            <div class="col-sm-6">
                                <label for="customer" class="col-sm-4 col-form-label">Template Name<i class="text-danger">*</i></label>
                                <div class="col-sm-8">
                    
                                        <input type="text" name="templ_name" placeholder="Template Name" value="" class="form-control">
                                       
                                
                                </div>
                            </div>
                        </div>


                        <div class="form-group row">
                            <div class="col-sm-6">
                                <label for="customer" class="col-sm-4 col-form-label">Client Name <i class="text-danger">*</i></label>
                                <div class="col-sm-8">
                               
                                    <?php if ($user_type == 3) { ?>
                                        <input type="text" name="cname" value="<?php echo $this->session->userdata('user_name') ?>" class="form-control" readonly>
                                        <input type="hidden" name="customer_id" value="<?php echo $this->session->userdata('user_id') ?>" class="form-control">
                                    <?php } else { ?>
                                        <select name="customer_id" class="form-control" onchange="get_customer_info(this.value)"  data-placeholder="<?php echo display('select_one'); ?>">
                                            <option value=""></option>
                                            <?php
                                            foreach ($customers as $customer) {
                                                ?>
                                                <option value="<?php echo $customer['customer_id'] ?>">
                                                    <?php echo $customer['customer_name'] ?>
                                                </option>
                                            <?php } ?>
                                        </select>
                                    <?php } ?>
                                </div>
                            </div>
                           
                            <div class="col-sm-6">
                                <label for="address" class="col-sm-4 col-form-label"><?php echo display('address') ?> <i class="text-danger"></i></label>
                                <div class="col-sm-8">
                                    <input type="text" name="address" class="form-control ckeditor" value="" id="address" readonly>
                                </div>
                            </div>

                            </div>

                            <div class="form-group row">
                            <div class="col-sm-6">
                                <label for="qdate" class="col-sm-4 col-form-label"><?php echo display('quotation_date') ?> </label>
                                <div class="col-sm-8">
                                    <input type="text" name="qdate" class="form-control datepicker" id="qdate" value="<?php echo date('Y-m-d') ?>">
                                </div>
                            </div>
                       
                       
                       
                            <div class="col-sm-6">
                                <label for="mobile" class="col-sm-4 col-form-label"><?php echo display('mobile') ?> <i class="text-danger"></i></label>
                                <div class="col-sm-8">
                                    <input type="text" name="mobile" class="form-control" value="" id="mobile" readonly>
                                </div>
                            </div>

                            </div>


                            <div class="form-group row">
                            <div class="col-sm-6">
                                 <label for="expiry_date" class="col-sm-4 col-form-label">Email Id </label>
                                <div class="col-sm-8">
                                    <input type="text" name="email" class="form-control" id="" value="">
                                </div>
                            </div>


                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <label for="details" class="col-sm-2 col-form-label"><?php echo display('details') ?> <i class="text-danger"></i></label>
                                <div class="col-sm-10">
                                    <textarea  name="details" class="form-control" id="details"></textarea>
                                </div>
                            </div>
                        </div>

                        

                        <div class="form-group row">
                            <div class="col-sm-12">
                                <label for="details" class="col-sm-2 col-form-label">Add Image Of Shape and Size</label>
                                <div class="col-sm-4">
		            		                     <a href="<?php echo base_url('mxgraph/javascript/examples/grapheditor/www/index.html') ?>" target="_blank" class="btn btn-info m-b-5 m-r-2">Click here</a>
                       		            	</div>
                            </div>
                        </div>



                              <br>

                        <div class="table-responsive">

                            <table class="table table-bordered table-hover" id="normalinvoice">

                                <thead>

                                    <tr>

                                        <th class="text-center product_field">Image Name <i class="text-danger">*</i></th>

                                        <th class="text-center">Height</th>

                                        <th class="text-center">Width</th>

                                         <th class="text-center">Sq ft</th>

                                        <th class="text-center"><?php echo display('rate') ?> <i class="text-danger">*</i></th>




                                        <th class="text-center invoice_fields"><?php echo display('total') ?> 

                                        </th>

                                         <th class="text-center"><?php echo display('action') ?></th> 
                                    </tr>

                                </thead>

                                <tbody id="addimageitem">

                                    <tr>

                                        <td class="product_field">
                                            <div class="row">
                                            <div  class=" col-sm-9">
                                            <input type="text" required name="product_name" id="image_name" class="form-control productSelection" placeholder="Image Name"   tabindex="5">

                                          

                                        </td>

                                          <td>

                                            <input type="text" name="height" class="form-control text-right "  tabindex="6"/>

                                        </td>

                                        <td>
                                        <input type="text" name="width" class="form-control text-right "  tabindex="6"/>

                                        </td>

                                            <td>
                                        <input type="text" name="sqft" class="form-control text-right "  tabindex="6" readonly="" />

                                        </td>

                                      

                                        

                                        <td>
                                        <input type="text" name="rate" class="form-control text-right "  tabindex="6"/>

                                        </td>





                                        <td class="invoice_fields">

                                            <input class="total_price form-control text-right" type="text" name="total_price[]" id="total_price_1" value="0.00" readonly="readonly" />

                                        </td>



                                        <td>

                                         

                                            <!-- Tax calculate end-->



                                            <!-- Discount calculate start-->

                                            <input type="hidden" id="total_discount_1" class="" />

                                            <input type="hidden" id="all_discount_1" class="total_discount dppr" name="discount_amount[]" />

                                            <!-- Discount calculate end -->



                                         <button  class='btn btn-danger text-right' type='button' value='Delete' onclick='deleteRow(this)'><i class='fa fa-close'></i></button>

                                        </td>

                                    </tr>

                                </tbody>

                                <tfoot>

                                  
                               
                                <tr>

                                    <td colspan="5"  class="text-right"><b><?php echo display('grand_total') ?>:</b></td>

                                    <td class="text-right">

                                        <input type="text" id="grandTotal" class="form-control text-right" name="grand_total_price" value="0.00" readonly="readonly" />

                                    </td>


                                          <td><a  id="add_invoice_item" class="btn btn-info" name="add-invoice-item"  onClick="addInputImage('addimageitem');"  tabindex="11"><i class="fa fa-plus"></i></a></td>

                                </tr>

                                 <tr>

                                    <td colspan="5"  class="text-right"><b><?php echo display('previous'); ?>:</b></td>

                                    <td class="text-right">

                                        <input type="text" id="previous" class="form-control text-right" name="previous" value="0.00" readonly="readonly" />

                                    </td>

                                </tr>

                                <tr>

                                    <td colspan="5"  class="text-right"><b><?php echo display('net_total'); ?>:</b></td>

                                    <td class="text-right">

                                        <input type="text" id="n_total" class="form-control text-right" name="n_total" value="0" readonly="readonly" placeholder="" />

                                    </td>

                                </tr>

                                <tr>

                                    

                                    <td class="text-right" colspan="5"><b><?php echo display('paid_ammount') ?>:</b></td>

                                    <td class="text-right">

                                         <input type="hidden" name="baseUrl" class="baseUrl" value="<?php echo base_url(); ?>"/>

                                        <input type="text" id="paidAmount" 

                                               onkeyup="invoice_paidamount();" class="form-control text-right" name="paid_amount" placeholder="0.00" tabindex="15" value=""/>

                                    </td>

                                </tr>

                                <tr>

                                   



                                    <td class="text-right" colspan="5"><b><?php echo display('due') ?>:</b></td>

                                    <td class="text-right">

                                        <input type="text" id="dueAmmount" class="form-control text-right" name="due_amount" value="0.00" readonly="readonly"/>

                                    </td>

                                </tr>

                               

                                </tfoot>

                            </table>

                        </div>

                            
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-4 col-form-label"></label>
                            <div class="col-sm-6">
                        
                                    <input type="submit" id="add-quotation" class="btn btn-success btn-large" name="add-quotation" value="<?php echo display('save') ?>" />
                                   
                            </div>
                        </div>
                    </div>               
                    <?php echo form_close() ?>
                </div>
            </div>
        </div>
    </section>
</div>

<script src="<?php echo base_url() ?>my-assets/js/admin_js/json/quotation.js" ></script>



 <script>
                        CKEDITOR.replace( 'editor1' );
                </script>