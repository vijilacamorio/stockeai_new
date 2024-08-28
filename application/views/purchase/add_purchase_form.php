<?php
$modaldata['bootstrap_model'] = array('vendor', 'tax_info', 'payment_model','payment_terms', 'bank_info','payment_type');
$this->load->view('include/bootstrap_model', $modaldata);
?>
<div class="content-wrapper" >
 <section class="content">
      <!-- Alert Message -->
      <?php
         $message = $this->session->userdata('message');
         if (isset($message)) {
         ?>
      <div class="alert alert-info alert-dismissable">
         <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
         <?php echo $message ?>                    
      </div>
      <?php 
         $this->session->unset_userdata('message');
         }
         $error_message = $this->session->userdata('error_message');
         if (isset($error_message)) {
         ?>
      <?php 
         $this->session->unset_userdata('error_message');
         }
         ?>
      <div class="row">
         <div class="col-sm-12">
            <div class="panel panel-bd lobidrag">
               <div class="panel-heading" style="height:60px;">
                  <label for="ISF" class="col-sm-2 col-form-label"><?php echo display('Select Option');?>
                  <i class="text-danger">*</i>
                  </label>
                  <div class="col-sm-2">
                     <select name="module_selection" class="form-control getvaluedata"  id="module_selection" tabindex="3" >
                        <option value="" selected disabled><?php  echo display('Select Option');?></option>
                        <option value="Not Available"> <?php echo display('add_purchase'); ?></option>
                        <option value="serviceProvider"><?php echo display('Service Provider');?> </option>
                     </select>
                  </div>
                  <div class="col-sm-2">
                     <select name="expense_drop" class="form-control"  id="expense_drop" tabindex="3" >
                        <option value="" selected disabled><?php  echo display('Select Option');?></option>
                        <option value="not_found"><?php  echo 'Not Available';?></option>
                        <?php  foreach($po as $p){   ?>
                        <option value="<?php  echo $p['chalan_no'] ; ?>"><?php  echo $p['chalan_no'] ; ?></option>
                        <?php   }  ?>
                     </select>
                  </div>
                 <div class="col-sm-4" style="display: none; text-align: right;" id="addexpenses">
                     <form id="ocr" method="post" enctype="multipart/form-data">
                       <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                        <label for="form_image" class="file-upload">
                           <span><i class="fa fa-upload" aria-hidden="true"></i>&nbsp;Invoice Scan</span>
                           <input type="file" id="form_image" name="form_image" accept="image/*" required>
                        </label>
                     </form>
                  </div>

                  <div class="col-sm-4" style="display: none; text-align: right;" id="addserviceprovider">
                     <form id="ocrserviceprovider" method="post" enctype="multipart/form-data">
                       <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                        <label for="form_image" class="file-upload">
                           <span><i class="fa fa-upload" aria-hidden="true"></i>&nbsp;Invoice Scan</span>
                           <input type="file" id="form_imageservice" name="form_imageservice" class="form_imageservice" accept="image/*" required>
                        </label>
                     </form>
                  </div>
                  <div class="col-sm-2">
                     <a   href="<?php echo base_url('Cpurchase/manage_purchase') ?>" class="btnclr btn  m-b-5 m-r-2"><i class="ti-align-justify"> </i> <?php echo display('manage_expense'); ?> </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="row" id="main">

         <div class="col-sm-12">
            <div class="panel panel-bd lobidrag">
          
               <div class="panel-heading">
                  <div class="panel-body">
                     <div class="with_po">
                    
                        <form id="insert_purchase"  method="post">
                        </form>
                 
                     </div>
                     <div class="without_po">
                        <div id="errormessage_expense"></div>
                        <form id="insert_expense"  method="post">
                           <div class="row">
                           <div class="col-sm-6">  
                          <input type="hidden" id="admin_company_id" name="admin_company_id">
                          <input type="hidden" id="makepaymentId" name="makepaymentId">
                                 <div class="form-group row">
                                    <label for="supplier_sss" class="col-sm-4 col-form-label"><?php echo display('Vendor');?>
                                    <i class="text-danger">*</i>
                                    </label>
                                    <div class="col-sm-7">
                                       <select name="supplier_id" id="supplier_id" class="form-control vendorNAME"  style="border:2px solid #d7d4d6;width:100%;"     required=""  tabindex="1">
                                          <option value=" "><?php echo display('select_one') ?></option>
                                          {supplier_list}
                                          <option value="{supplier_id}">{supplier_name}</option>
                                          {/supplier_list}
                                       </select>
                                    </div>
                                    <?php //if($this->permission1->method('add_supplier','create')->access()){ ?>
                                    <div class="col-sm-1 mobile_vendor">
                                       <a  class="btnclr client-add-btn btn  " aria-hidden="true"    data-toggle="modal"data-target="#add_vendor"><i class="fa fa-user"></i></a>
                                    </div>
                                    <?php// }?> 
                                 </div>
                                 <div class="form-group row">
                                    <label for="" class="col-sm-4 col-form-label" ><?php echo display('Vendor Type');?></label>
                                    <div class="col-sm-8">
                                       <input type="vendor_type" tabindex="3" class="form-control" name="vendor_type"  style="WIDTH: 100%;border:2px solid #d7d4d6;" readonly placeholder="" id="vendor_type_details" />
                                    </div>
                                 </div>
                              </div>
                              <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                              
                              <div class="col-sm-6">
                                 <br/>
                                 <div class="form-group row">
                                    <label for="" class="col-sm-4 col-form-label"> <?php echo display('Vendor Address');?>
                                    <i class="text-danger"></i>
                                    </label>
                                    <div class="col-sm-8">
                                       <textarea class="form-control vendorAddress" tabindex="4" id="vendor_add" rows="4" cols="50"  style="border:2px solid #d7d4d6;" name="vendor_add" placeholder="" rows="1" required></textarea>
                                       <div id="loadingText" class="loading-text"></div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-sm-6" id="">
                                 <div class="form-group row">
                                    <label for="date" class="col-sm-4 col-form-label"><?php echo display('invoice_no');  ?><i class="text-danger">*</i></label>
                                    <div class="col-sm-8">
                                       <input  class=" form-control" type="" size="50"     style="border:2px solid #d7d4d6;"   name="invoice_no" id="invoice_no" required value="" tabindex="4" />
                                       <div id="loadingText" class="loading-text"></div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-sm-6" id="">
                                 <div class="form-group row">
                                    <label for="text" class="col-sm-4 col-form-label"><?php echo display('Expenses / Bill date');?>
                                    <i class="text-danger">*</i>
                                    </label>
                                    <div class="col-sm-5">
                                       <?php $date = date('m-d-Y');?>
                                       <input type="date"  style="width:165%;border:2px solid #d7d4d6;" class="form-control" name="bill_date"   value="<?php echo html_escape($date); ?>" id="date"  />
                                       <div id="loadingText" class="loading-text"></div>
                                    </div>
                                 </div>
                              </div>
                           </div>




                           <div class="row">
                              <div class="col-sm-6">


                                 <div class="form-group row">
                                    <label for="port_of_discharge" class="col-sm-4 col-form-label"> <?php echo display('Port Of Discharge');?></label>
                                    <div class="col-sm-8">
                                       <input class="form-control" type="" size="50"  style="border:2px solid #d7d4d6;" name="Port_of_discharge" id="date1"   tabindex="4" />
                                    </div>
                                 </div>



                               
                             
                                   <div class="form-group row">
                                    <label for="billing_address" class="col-sm-4     col-form-label"><?php echo display('Payment Terms');?>
                                    <i class="text-danger">*</i></label>
                                    <div class="col-sm-7">
                                       <select   name="payment_terms" id="payment_terms" style="width:100%;border:2px solid #d7d4d6;" class=" form-control" required placeholder='Payment Terms' id="payment_terms">
                                      	<option value=""><?php echo display('Select Payment Terms') ?></option>
											<?php
											foreach(PAYMENT_TYPE as $payment_typ){
												echo '<option value="'.$payment_typ.'">'.$payment_typ.'</option>';
											}
											?>
                                          <?php foreach($payment_terms as $inv){ ?>
                                          <option value="<?php echo $inv['payment_terms'] ; ?>"><?php echo $inv['payment_terms'] ; ?></option>
                                          <?php    }?>
                                       </select>
                                    </div>
                                    <div class="col-sm-1 mobile_vendor">
                                       <a href="#" class="btnclr client-add-btn btn " aria-hidden="true"    data-toggle="modal" data-target="#payment_type_new" ><i class="fa fa-plus"></i></a>
                                    </div>
                                 </div>  
<div class="form-group row">
                                    <label for="account_category" class="col-sm-4 col-form-label">Account Category</label>
                                    <div class="col-sm-8">
                                       <select id="ddl"  name="account_category" class="form-control" style="border:2px solid #d7d4d6;"  onchange="configureDropDownLists(this,document.getElementById('ddl2'))">
                                          <option value="">Select the Account Category</option>
                                          <option value="ASSETS"><?php echo  display('ASSETS');?></option>
                                          <option value="RECEIVABLES"><?php echo  display('RECEIVABLES');?></option>
                                          <option value="INVENTORIES"><?php echo  display('INVENTORIES');?></option>
                                          <option value="PREPAID EXPENSES & OTHER CURRENT ASSETS"><?php echo  display('PREPAID EXPENSES & OTHER CURRENT ASSETS');?></option>
                                          <option value="PROPERTY PLANT & EQUIPMENT"><?php echo  display('PROPERTY PLANT & EQUIPMENT');?></option>
                                          <option value="ACCUMULATED DEPRECIATION & AMORTIZATION"><?php echo  display('ACCUMULATED DEPRECIATION & AMORTIZATION');?></option>
                                          <option value="NON – CURRENT RECEIVABLES"><?php echo  display('NON – CURRENT RECEIVABLES');?></option>
                                          <option value="INTERCOMPANY RECEIVABLES & OTHER NON-CURRENT ASSETS"><?php echo  display('INTERCOMPANY RECEIVABLES & OTHER NON-CURRENT ASSETS');?></option>
                                          <option value="LIABILITIES & PAYABLES"><?php echo  display('LIABILITIES & PAYABLES');?></option>
                                          <option value="ACCRUED COMPENSATION & RELATED ITEMS"><?php echo  display('ACCRUED COMPENSATION & RELATED ITEMS');?></option>
                                          <option value="OTHER ACCRUED EXPENSES"><?php echo  display('OTHER ACCRUED EXPENSES');?></option>
                                          <option value="ACCRUED TAXES"><?php echo  display('ACCRUED TAXES');?></option>
                                          <option value="DEFERRED TAXES"><?php echo  display('DEFERRED TAXES');?></option>
                                          <option value="LONG-TERM DEBT"><?php echo  display('LONG-TERM DEBT');?></option>
                                          <option value="INTERCOMPANY PAYABLES & OTHER NON CURRENT LIABILITIES & OWNERS EQUITIES"><?php echo  display('INTERCOMPANY PAYABLES & OTHER NON CURRENT LIABILITIES & OWNERS EQUITIES');?></option>
                                          <option value="REVENUE"><?php echo  display('REVENUE');?></option>
                                          <option value="COST OF GOODS SOLD"><?php echo  display('COST OF GOODS SOLD');?></option>
                                          <option value="OPERATING EXPENSES"><?php echo  display('OPERATING EXPENSES');?></option>
                                       </select>
                                    </div>
                                 </div>






                           


                                 <div class="form-group row">
                                    <label  class="col-sm-4 col-form-label">Account Subcategory</label>
                                    <div class="col-sm-8">
                                       <input class="form-control" name ="account_subcat" id="account_subcat" type="text"  style="border:2px solid #d7d4d6;"  placeholder=" Account Sub Category"  tabindex="1" >
                                    </div>
                                 </div>
                                 <div class="form-group row">
                                    <label for="invoice_no" class="col-sm-4 col-form-label"><?php echo display('Estimated Time Of Arrival');?>
                                    </label>
                                    <div class="col-sm-8">
                                       <input type="date"  tabindex="2" class="form-control datepicker productETA" style="border:2px solid #d7d4d6;" name="eta" value="<?php echo $date1; ?>" id="date1"  />
                                       <div id="loadingText" class="loading-text"></div>
                                    </div>
                                 </div>
                       

                                 <div class="form-group row">
                                    <label for="date" class="col-sm-4 col-form-label"><?php echo display('B/L No');?> </label>
                                    <div class="col-sm-8">
                                       <input type="text" name="bl_number" class="form-control" style="border:2px solid #d7d4d6;"   placeholder="Bl Number">
                                    </div>
                                 </div>

 





                           
    
                                 <div class="form-group row">
                                    <label for="supplier_sss" class="col-sm-4 col-form-label">Attachments
                                    </label>
                                   
                                    <div class="col-sm-6">
                                       <p>
                                          <label for="attachment">
                                          <a class="btn btnclr text-light" role="button" aria-disabled="false"><i class="fa fa-upload"></i>&nbsp; Choose Files</a>
                                          </label>
                                          <input type="file" name="files[]" class="upload" id="attachment" style="visibility: hidden; position: absolute;" multiple/>
                                       </p>
                                       <p id="files-area">
                                          <span id="filesList">
                                          <span id="files-names"></span>
                                          </span>
                                       </p>
                                    </div>
                                 </div>

                  
                        
                              </div>
                              <div class="col-sm-6">
                           


                                 <div class="form-group row">
                                    <label for="date" class="col-sm-4 col-form-label"><?php echo display('Payment Due Date');?> <i class="text-danger">*</i></label>
                                    <div class="col-sm-8">
                                       <input class=" form-control" type="date" size="50" name="payment_due_date"   style="border:2px solid #d7d4d6;"  id="payment_due_date" required value="" tabindex="4" />
                                    </div>
                                 </div>




                              </div>
                              <div class="col-sm-6">


                          


 <div class="form-group row">
                                    <label for="payment_type" class="col-sm-4 col-form-label"><?php
                                       echo display('payment_type');
                                       ?> <i class="text-danger">*</i></label>
                                    <div class="col-sm-7">
                                       <select name="paytype_drop" id="paytype_drop" class="form-control" required=""  tabindex="3" style="width:100;border:2px solid #d7d4d6;">
                                          <option value=""><?php echo display('Select Payment Type');?></option>
                                          <option value="CHEQUE"><?php echo display('cheque'); ?></option>
                                          <option value="CASH"><?php echo display('cash'); ?></option>
                                          <option value="CREDIT/DEBIT CARD"><?php echo display('CREDIT/DEBIT CARD');?></option>
                                          <option value="BANK TRANSFER"><?php echo display('BANK TRANSFER');?></option>
                                          <?php foreach($payment_type as $ptype){?>
                                          <option value="<?php echo $ptype['payment_type'];?>"><?php echo $ptype['payment_type'] ;?></option>
                                          <?php }?>
                                       </select>
                                    </div>
                                    <div  class=" col-sm-1">
                                       <a href="#" class="btnclr client-add-btn btn  mobile_vendor"   aria-hidden="true" data-toggle="modal" data-target="#payment_type" ><i class="fa fa-plus"></i></a>
                                    </div>
                                 </div>




                            


                                 <div class="form-group row">
                                    <label for="port_of_discharge" class="col-sm-4 col-form-label">Account Subcategory</label>
                                    <div class="col-sm-8">
                                       <select class="form-control" name="sub_category"   style="border:2px solid #d7d4d6;"  id="ddl2">
                                          <option value="Select Sub Category">Select Sub Category</option>
                                       </select>
                                    </div>
                                 </div>







                                 <div class="form-group row">
                                    <label for="container_number" class="col-sm-4 col-form-label"><?php echo display('Container Number');?> </label>
                                    <div class="col-sm-8">
                                       <input type="text" name="container_no" class="form-control container_no" style="border:2px solid #d7d4d6;"   placeholder="Container Number">
                                    </div>
                                 </div>



                                 <div class="form-group row">
                                    <label for="supplier_sss" class="col-sm-4 col-form-label"><?php echo 'Estimated Time Of Departure';?>
                                    </label>
                                    <div class="col-sm-8">
                                       <input type="date"  tabindex="2" class="form-control datepicker productETD"  style="border:2px solid #d7d4d6;"  name="etd" value="<?php echo $date; ?>" id="date"  />
                                       <div id="loadingText" class="loading-text"></div>
                                    </div>
                                 </div>



                                 <div class="form-group row">
                                    <label for="invoice_no" class="col-sm-4 col-form-label"> <?php echo display('ISF FIELD');?>
                                    </label>
                                    <div class="col-sm-8">
                                       <select name="isf_field" class="form-control"  id="isf_dropdown" tabindex="3"  required=""  style="width400%;border:2px solid #d7d4d6;">
                                          <option value=""selected><?php echo display('Select ISF NO');?></option>
                                          <option value="1"><?php echo display('NO') ?></option>
                                          <option value="2"><?php echo display('YES') ?></option>
                                       </select>
                                    </div>
                                 </div>

                                 <div class="form-group row" >
                                    <label for="ISF" class="isf_no1 col-sm-4 col-form-label" ><?php echo display('ISF NO');?>
                                    <i class="text-danger">*</i>
                                    </label>
                                    <div class="col-sm-8">
                                       <input name="isf_no"  class="isf_no1 form-control bankpayment"     style="width:100%;border:2px solid #d7d4d6;" value=""  >
                                    </div>
                                 </div>

                          

                


                              </div>
                           </div>
                            <div class="table-responsive">
                              <div id="content">
                                 <table class="table normalinvoice table-bordered table-hover" id="normalinvoice_1"   style="border:2px solid #d7d4d6;" >
                                    <thead>
                                       <tr class="btnclr">
                                          <th rowspan="2" class="text-center" style="width:180px;" ><?php echo display('product_name'); ?><i class="text-danger">*</i>  &nbsp;&nbsp; <a href="#" class="btn btnclr"   aria-hidden="true" data-toggle="modal" data-target="#product_info"><i class="ti-plus m-r-2" style="border:2px;"></i></a></th>
                                          <th rowspan="2" class="text-center" style="width:60px;"><?php echo display('Bundle No');?><i class="text-danger">*</i></th>
                                          <th rowspan="2"  class="text-center"><?php echo  display('description'); ?></th>
                                          <th rowspan="2" class="text-center" style="width:60px;"><?php echo display('Thick ness');?><i class="text-danger">*</i></th>
                                          <th rowspan="2" class="text-center"><?php echo display('Supplier Block No');?><i class="text-danger">*</i></th>
                                          <th rowspan="2" class="text-center" ><?php echo display('Supplier Slab No');?><i class="text-danger">*</i> </th>
                                          <th colspan="2"   style="width:150px;" class="text-center"><?php echo display('Gross Measurement');?><i class="text-danger">*</i> </th>
                                          <th rowspan="2" class="text-center"><?php echo display('Gross Sq.Ft');?></th>
                                          <th rowspan="2" style="width:40px;" class="text-center"><?php echo display('Slab No');?><i class="text-danger">*</i></th>
                                          <th colspan="2"  style="width:150px;" class="text-center"><?php echo display('Net Measure');?><i class="text-danger">*</i></th>
                                          <th rowspan="2" class="text-center"><?php echo display('Net Sq.Ft');?></th>
                                          <th rowspan="2"  style="width:90px;" class="text-center"><?php echo display('Cost per Sq.Ft');?></th>
                                          <th rowspan="2"  style="width:90px;" class="text-center"><?php echo display('Cost per Slab');?></th>
                                          <th rowspan="2"  style="width:90px;" class="text-center"><?php echo display('sales'); ?><br/><?php echo display('Price per Sq.Ft');?></th>
                                          <th rowspan="2"  style="width:90px;" class="text-center"><?php echo display('Sales Slab Price');?></th>
                                          <th rowspan="2" class="text-center"><?php echo display('Weight');?></th>
                                          <th rowspan="2" class="text-center"><?php echo display('Origin');?></th>
                                          <th rowspan="2" style="width: 110px" class="text-center"><?php  echo  display('total'); ?></th>
                                          <th rowspan="2" class="text-center"><?php  echo  display('action'); ?></th>
                                       </tr>
                                       <tr>
                                          <th class="text-center btnclr"><?php echo display('Width');?></th>
                                          <th class="text-center btnclr"><?php echo display('Height');?></th>
                                          <th class="text-center btnclr"  ><?php echo display('Width');?></th>
                                          <th class="text-center btnclr" ><?php echo display('Height');?></th>
                                       </tr>
                                    </thead>
                                    <tbody id="addPurchaseItem_1">
                                       <tr>
                                          <td>
                                             <input type="hidden" name="tableid[]" id="tableid_1"/>
                                             <input list="magicHouses" name="prodt[]" id="prodt_1" required=""  class="form-control product_name"  style="width:160px;" placeholder="Search Product" />
                                             <datalist id="magicHouses">
                                                <?php 
                                                   foreach($product_list as $tx){?>
                                                <option value="<?php echo $tx['product_name'].'-'.$tx['product_model'];?>">  <?php echo $tx['product_name'].'-'.$tx['product_model'];  ?></option>
                                                <?php } ?>
                                             </datalist>
                                             <input type='hidden' class='common_product autocomplete_hidden_value  product_id_1' name='product_id[]' id='product_id_1' />
                                          </td>
                                          <td>
                                             <input type="text" id="bundle_no_1" name="bundle_no[]" required="" class="bundle_no form-control" />
                                          </td>
                                          <td>
                                             <input type="text" id="description_1" name="description[]" class="form-control productDescription" />
                                          </td>
                                          <td >
                                             <input type="text" name="thickness[]" id="thickness_1" required="" class="form-control productThickness"/>
                                          </td>
                                          <td>
                                             <input type="text" id="supplier_b_no_1" name="supplier_block_no[]" required="" class="form-control" />
                                          </td>
                                          <td >
                                             <input type="text"  id="supplier_s_no_1" name="supplier_slab_no[]" required="" class="form-control"/>
                                          </td>
                                          <td>
                                             <input type="text" id="gross_width_1" name="gross_width[]" required="" class="gross_width  form-control" />
                                          </td>
                                          <td>
                                             <input type="text" id="gross_height_1" name="gross_height[]"  required="" class="gross_height form-control" />
                                          </td>
                                          <td >
                                             <input type="text"   style="width:60px;" readonly id="gross_sq_ft_1" name="gross_sq_ft[]" class="gross_sq_ft form-control"/>
                                          </td>
                                          <td style="text-align:center;" >
                                             <input type="text"   style="width:20px;" value="1" class="slab_no" id="slab_no_1" name="slab_no[]"  readonly  required=""/> 
                                          </td>
                                          <td>
                                             <input type="text" id="net_width_1" name="net_width[]"  required="" class="net_width form-control" />
                                          </td>
                                          <td>
                                             <input type="text" id="net_height_1" name="net_height[]"   required="" class="net_height form-control" />
                                          </td>
                                          <td >
                                             <input type="text"   style="width:60px;" readonly id="net_sq_ft_1" name="net_sq_ft[]" class="net_sq_ft form-control"/>
                                          </td>
                                          <td>
                                             <span class="input-symbol-euro"><input type="text" id="cost_sq_ft_1"  name="cost_sq_ft[]"     style="width:60px;" value="0.00"  class="cost_sq_ft form-control costPerSQFT"></span>
                                          <td >
                                             <span class="input-symbol-euro"> <input type="text"  id="cost_sq_slab_1" name="cost_sq_slab[]"      style="width:60px;" value="0.00"  class="cost_sq_slab form-control"/></span>
                                          </td>
                                          <td>
                                             <span class="input-symbol-euro">  <input type="text" id="sales_amt_sq_ft_1"  name="sales_amt_sq_ft[]"  style="width:70px;"  placeholder="0.00" class="sales_amt_sq_ft form-control" /></span>
                                          </td>
                                          <td >
                                             <span class="input-symbol-euro">   <input type="text"  id="sales_slab_amt_1" name="sales_slab_amt[]"  style="width:70px;" placeholder="0.00"  class="sales_slab_amt form-control"/>
                                          </td>
                                          </span>
                                          </td>
                                          <td>
                                             <input type="text" id="weight_1" name="weight[]"  class="weight form-control" />
                                          </td>
                                          <td style="width: 135px;">
                                             <select id="origin_1" name="origin[]" class="origin form-control">
                                                <?php foreach ($country_code as $key => $value) { ?>
                                                <option value="<?php echo $value['iso']; ?>"><?php echo $value['iso']; ?></option>
                                                <?php } ?> 
                                             </select>
                                          </td>
                                          <td >
                                             <span class="input-symbol-euro"><input  type="text" class="total_price form-control" style="width:80px;" readonly  value="0.00"  id="total_amt_1"     name="total_amt[]"/></span>
                                          </td>
                                          <td style="text-align:center;">
                                             <button  class='btn btn-danger delete' id="delete_1" type='button' value='Delete' ><i class="fa fa-trash"></i></button>
                                          </td>
                                       </tr>
                                    </tbody>
                                    <tfoot>
                                       <tr>
                                          <td style="text-align:right;" colspan="8"><b><?php  echo display('Gross Sq.Ft');?> :</b></td>
                                          <td >
                                             <input type="text" id="overall_gross_1" name="overall_gross[]"   class="overall_gross form-control" style="width: 60px"  readonly="readonly"  /> 
                                          </td>
                                          <td style="text-align:right;" colspan="3"><b><?php  echo display('Net Sq.Ft');?> :</b></td>
                                          <td >
                                             <input type="text" id="overall_net_1" name="overall_net[]"  class="overall_net form-control"  style="width: 60px"  readonly="readonly"  /> 
                                          </td>
                                          <td >
                                             <input type="text" id="costpersqft_1" name="costpersqft[]"  class="costpersqft form-control"  style="width: 60px"  readonly="readonly"  /> 
                                          </td>
                                          <td >
                                             <input type="text" id="costperslab_1" name="costperslab[]"  class="costperslab form-control"  style="width: 60px"  readonly="readonly"  /> 
                                          </td>
                                          <td >
                                             <input type="text" id="salespricepersqft_1" name="salespricepersqft[]"  class="salespricepersqft form-control"  style="width: 60px"  readonly="readonly"  /> 
                                          </td>
                                          <td >
                                             <input type="text" id="salesslabprice_1" name="salesslabprice[]"  class="salesslabprice form-control"  style="width: 60px"  readonly="readonly"  /> 
                                          </td>
                                          <td >
                                             <input type="text" id="overall_weight_1" name="overall_weight[]"  class="overall_weight form-control"  style="width: 60px"  readonly="readonly"  /> 
                                          </td>
                                          <td style="text-align:right;" colspan="1"><b><?php  echo display('total'); ?> :</b></td>
                                          <td >
                                             <span class="input-symbol-euro">    <input type="text" id="Total_1" name="total[]"   class="b_total form-control"  style="width: 80px" value="0.00"  readonly="readonly"  /> </span>
                                          </td>
                                       </tr>
                                    </tfoot>
                                 </table>
                                 <i id="buddle_1" class="btnclr addbundle fa fa-plus" style=" padding: 10px 12px 10px 12px;margin-right: 18px;float:right;"   onclick="addbundle(); "aria-hidden="true"></i>
                              </div>
                            <table class="taxtab table table-bordered table-hover" style="border:2px solid #d7d4d6;" >
                        <tr>
                           <td class="hiden" style="width:20%;border:none;text-align:end;font-weight:bold;">
                              <?php echo display('Live Rate') ?> :
                           </td>
                           <td class="hiden btnclr" style="width:13%;text-align-last: center;padding:5px; border:none;font-weight:bold;color:white;">1 <?php echo $curn_info_default; ?>
                              = <input style="width: 80px;text-align:center;color:black;padding:5px;" type="text" class="custocurrency_rate"/>&nbsp;<label for="custocurrency"  ></label>
                           </td>
                           <td style="border:none;text-align:right;font-weight:bold;"><?php echo display('Tax') ?> :
                           </td>
                           <td style="width:12%">
                           <input list="magic_tax" name="tx"  id="product_tax" class="form-control"   onchange="this.blur();" />
                              <datalist id="magic_tax">
                                 <?php
foreach ($tax_data as $tx) {?>
                                 <option value="<?php echo $tx['tax_id'] . '-' . $tx['tax'] . '%'; ?>">  <?php echo $tx['tax_id'] . '-' . $tx['tax'] . '%'; ?></option>
                                 <?php }?>
                              </datalist>
                           </td>
                           <td  style="width:20%;"><a href="#" class="client-add-btn btn btnclr" aria-hidden="true" style="color:white;  margin-right: 295px;"  data-toggle="modal" data-target="#tax_info" ><i class="fa fa-plus"></i></a></td>
                        </tr>
                     </table>
                   <table border="0" style="width: 100%; border-collapse: collapse; text-align: left;" class="overall table table-bordered table-hover" style="border:2px solid #d7d4d6;">
    <tbody>
        <tr>
            <!-- Left Side -->
            <td style="width: 50%; padding-right: 20px; border:none; vertical-align: middle;">
                <label style="width:150px;" for="Over_all_Total"><b><?php echo display('Overall TOTAL') ?> :</b></label>
                <input type="text" id="Over_all_Total" name="Over_all_Total" class="form-control" style="width: 150px; margin-left: 10px; display: inline-block;" value="0.00" readonly="readonly" />
            </td>
            <!-- Right Side -->
            <td style="display:none;width: 50%; padding-left: 20px; border:none; vertical-align: middle;">
              
            </td>
        </tr>
        <tr>
            <!-- Left Side -->
            <td style="width: 50%; padding-right: 20px; border:none; vertical-align: middle;">
                <label style="width:150px;" for="total_gross"><b><?php echo display('Overall Gross Sq.Ft') ?> :</b></label>
                <input type="text" id="total_gross" name="total_gross" class="form-control" style="width: 150px; margin-left: 10px; display: inline-block;" readonly="readonly" />
            </td>
            <!-- Right Side -->
            <td style="width: 50%; padding-left: 20px; border:none; vertical-align: middle;">
                <label style="width:150px;" for="tax_details"><b><?php echo display('TAX DETAILS') ?> :</b></label>
                <input type="text" id="tax_details" name="tax_details" class="form-control" style="width: 150px; margin-left: 10px; display: inline-block;" value="0.00" readonly="readonly" />
            </td>
        </tr>
        <tr>
            <!-- Left Side -->
            <td style="width: 50%; padding-right: 20px; border:none; vertical-align: middle;">
                <label style="width:150px;" for="total_net"><b><?php echo display('Overall Net Sq.Ft') ?> :</b></label>
                <input type="text" id="total_net" name="total_net" class="form-control" style="width: 150px; margin-left: 10px; display: inline-block;" readonly="readonly" />
            </td>
            <!-- Right Side -->
            <td style="width: 50%; padding-left: 20px; border:none; vertical-align: middle;">
                <label style="width:150px;" for="gtotal"><b><?php echo display('GRAND TOTAL') ?> :</b></label>
                <input type="text" id="gtotal" name="gtotal" class="form-control" style="width: 150px; margin-left: 10px; display: inline-block;" value="0.00" readonly="readonly" />
            </td>
        </tr>
        <tr>
            <!-- Left Side -->
            <td style="width: 50%; padding-right: 20px; border:none; vertical-align: middle;">
                <label style="width:150px;" for="total_weight"><b><?php echo display('Overall Weight') ?> :</b></label>
                <input type="text" id="total_weight" name="total_weight" class="form-control" style="width: 150px; margin-left: 10px; display: inline-block;" readonly="readonly" />
            </td>
            <!-- Right Side -->
            <td style="width: 50%; padding-left: 20px; border:none; vertical-align: middle;">
                <label style="width:150px;" for="customer_gtotal"><b><?php echo display('Preferred Currency') ?> :</b></label>
                <input type="text" id="customer_gtotal" name="customer_gtotal" class="form-control" style="width: 150px; margin-left: 10px; display: inline-block;" readonly />
            </td>
        </tr>
        <tr>
            <!-- Left Side -->
            <td style="width: 50%; padding-right: 20px; border:none; vertical-align: middle;">
                <label style="width:150px;" for="amount_paid"><b><?php echo display('Amount Paid') ?> :</b></label>
                <input type="text" id="amount_paid" name="amount_paid" class="form-control" style="width: 150px; margin-left: 10px; display: inline-block;" readonly />
            </td>
            <!-- Right Side -->
            <td style="width: 50%; padding-left: 20px; border:none; vertical-align: middle;">
                <label style="width:150px;" for="balance"><b><?php echo display('Balance Amount') ?> :</b></label>
                <input type="text" id="balance" name="balance" class="form-control" style="width: 150px; margin-left: 10px; display: inline-block;" readonly />
            </td>
        </tr>
    </tbody>
    <tfoot>
        <tr style="border-right:none; border-left:none; border-bottom:none; border-top:none;">
            <td colspan="2" style="text-align: right; padding: 20px;">
         
              <a class="client-add-btn btn btnclr" aria-hidden="true" id="paypls" data-toggle="modal" data-target="#payment_modal">
                        Make Payment
             </a>
            </td>
        </tr>
    </tfoot>
</table>
                            
                           </div>
                           <div class="row">
                              <div class="col-sm-12">
                                 <div class="form-group row">
                                    <label for="adress" class="col-sm-2 col-form-label"><?php echo  display('Remarks / Details');?>
                                    </label>
                                    <div class="col-sm-10">
                                       <textarea class="form-control" rows="4" cols="50" id="remark" name="remark"  style="border:2px solid #d7d4d6;"  placeholder="Remarks" rows="1"></textarea>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-sm-12">
                                 <div class="form-group row">
                                    <label for="adress" class="col-sm-2 col-form-label"><?php echo  display('Message on Invoice');?>
                                    </label>
                                    <div class="col-sm-10">
                                       <textarea class="form-control" rows="4" cols="50" id="adress" name="message_invoice"  style="border:2px solid #d7d4d6;"  placeholder="Message on Invoice" rows="1"></textarea>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-sm-12">
                                 <div class="form-group row" style="   margin-top: 1%;">
                                    <table>
                                       <tr>
                                          <td>
                                             <input type="submit" id="add_purchase"   class="btnclr btn btn-large" name="add-packing-list" value="<?php  echo  display('save'); ?>" />
                                          </td>
                                          <td class="button_hide"> 
                                             <a    id="final_submit"   class='btnclr final_submit btn'><?php echo display('submit'); ?></a>
                                          </td>
                                          <td class="button_hide">
                                             <select name="download_select" id="download_select" class="form-control" style="background-color:<?php echo $setting_detail[0]['button_color']; ?>;width: auto;color:white;" >
                                                <option value="Download"  selected><?php echo display('download'); ?></option>
                                                <option value="Invoice" ><?php echo  display('New Invoice');?></option>
                                                <option value="Packing" ><?php echo  display('Packing List');?></option>
                                             </select>
                                          </td>
                                          <td></td>
                                          <td class="button_hide">
                                             <select name="print_select" id="print_select" class="form-control" style="background-color:<?php echo $setting_detail[0]['button_color']; ?>;width: auto;color:white;" >
                                                <option value="Print"  selected><?php echo display('print');  ?></option>
                                                <option value="Invoice" ><?php echo  display('New Invoice');?></option>
                                                <option value="Packing" ><?php echo  display('Packing List');?></option>
                                             </select>
                                          </td>
                                       </tr>
                                    </table>
                                 </div>
                              </div>
                           </div>
                        </form>
                     </div>
                    

<input type="hidden" id="Final_invoice_number" /> 
<input type="hidden" id="Final_invoice_id" /> 
<script type="text/javascript">
   $(document).ready(function(){
    //$('#main').hide();
    $('#expense_drop').hide();
   });
   $(document).on('change','#module_selection' ,function (e) {
   if($('#module_selection').val() !=="Not Available"){
   $
   $('#service_provider_data').show();
   $('.without_po').hide();
   $('.with_po').hide();
    $('#expense_drop').hide();
    $('#main').show();
   var data = {
   po:$('#module_selection').val()
   };
   }else{
   $('.without_po').hide();
   $('.with_po').hide();
   $('#service_provider_data').hide();
   $('#expense_drop').show();
   $('#main').hide();
     
   }
   });
function getSupplierInfo(supplier_id){
   debugger;
      var data = {
   value: supplier_id
   };
   data[csrfName] = csrfHash;
   $.ajax({
   type:'POST',
   data: data,
   dataType:"json",
   url:'<?php echo base_url();?>Cinvoice/getvendor',
   success: function(result, statut) {
    if(result.csrfName){
   
       csrfName = result.csrfName;
       csrfHash = result.csrfHash;
    }
    var custo_currency = result[0]['currency_type'];
   $(".cus").html(custo_currency);
   $("label[for='custocurrency']").html(custo_currency);
   $.getJSON('https://open.er-api.com/v6/latest/<?php echo $curn_info_default; ?>', function(data) {
                var x = data['rates'][custo_currency];
                var Rate = parseFloat(x).toFixed(2);
                Rate = isNaN(Rate) ? 0 : Rate;
                 $('.hiden').show();
                 $('#vendor_type_details').val(result[0]['vendor_type']);
                 $('#vendor_add').val(result[0]['address']);
                $(".custocurrency_rate").val(Rate);
            });


   }
   });
}
   $('#expense_drop').on('change', function (e) {
   if($('#expense_drop').val() =="not_found"){
   $('#service_provider_data').hide();
   $('.with_po').hide();
   $('.without_po').show();
      $('#main').show();
   var data = {
   expense_drop:$('#expense_drop').val()
   };
   }else{
      $('#main').show();
         $('#service_provider_data').hide();
   $('.with_po').show();
   $('.without_po').hide();
   var data = {
   po:$('#expense_drop').val()
   };
   data[csrfName] = csrfHash;
   $.ajax({ 
   url:'<?php echo base_url();?>Cpurchase/get_po_details',
   method:'POST',
   data: data, 
   dataType : "html" 
   }).done(function(data) { 
   var obj = $(data);
   $("#insert_purchase").html(obj.find("#insert_purchase").html());
   $(".normalinvoice").each(function(i,v){
   if($(this).find("tbody").html().trim().length === 0){
   $(this).hide()
   }
   })
   getSupplierInfo($('#supplier_id').val())
   }).fail(function(jqXHR, textStatus, errorThrown) { 
   });
   }
   });
   $('#supplier_id').on('change', function (e) {getSupplierInfo($(this).val())});
       $('#payment_terms').change(function(){
                      $('#payment_due_date').val('');
                 var sd = $(this).val().replace(/[^0-9]/gi, ''); 
               var number = parseInt(sd, 10);
                      var data = {
                          sales_invoice_date : $('#date').val(),
                          days :number,   
                          pterms : $('#payment_terms').val()
                      };
                      data[csrfName] = csrfHash;
                      $.ajax({
                          type:'POST',
                          data: data, 
                         dataType:"json",
                          url:'<?php echo base_url();?>Cinvoice/getdate',
                          success: function(result, statut) {
                             $('#payment_due_date').val(result);
                         }
                      });
                  });
                   $(document).on('click', '.removebundle', function(){
 var remove_id=$(this).closest('table').attr('id');
 $('#'+remove_id).remove();
updateOverallTotals(true);
 });

 $('#product_tax').on('change', function (e) {
             debugger;
               var total=$('#Over_all_Total').val();
                var tax= $('#product_tax').val();
                var percent='';
                 var hypen='-';
               if(tax.indexOf(hypen) != -1){
                var field = tax.split('-');
               
                var percent = field[1];
               
               }else{
               percent=tax;
               }
               
                percent=percent.replace("%","");
                 var answer = (percent / 100) * parseFloat(total);
                var final_g= $('#final_gtotal').val();
                var amt=parseFloat(answer)+parseFloat(total);
                 var num = isNaN(parseFloat(amt)) ? 0 : parseFloat(amt);
                  var additional_cost =parseFloat($('#additional_cost').val()) || 0;
                   $('#gtotal').val((num+additional_cost).toFixed(2)); 
                    var paid_amount =parseFloat($('#amount_paid').val()) || 0;
                   
                 var custo_amt=$('.custocurrency_rate').val(); 
                 console.log("numhere :"+num +"-"+custo_amt);
                 var value=(num+additional_cost)*custo_amt;
                 var custo_final = isNaN(parseFloat(value)) ? 0 : parseFloat(value);
                   var balance_amount= (num+additional_cost)- paid_amount;
                  $('#tax_details').val(answer.toFixed(2) +" ( "+tax+" )");
                $('#customer_gtotal').val(custo_final.toFixed(2));  
                  $('#balance').val(balance_amount.toFixed(2));
                  $('#paid_customer_currency').val(balance_amount*custo_amt);
          updateOverallTotals();
                });
                $('#paypls').on('click',function(){
$('#amount_to_pay').val($('#balance').val());
});
$("#insert_expense").validate({
   rules: {
    supplier_id: "required",
    invoice_no: "required", 
    payment_due_date : "required", 
    bill_date : "required",
    payment_terms: "required",  
    paytype_drop : "required"
 },
 messages: {
     supplier_id: "Supplier Name is required",
    invoice_no: "Invoice Number is required",
    payment_terms: "Payment Term is required",
    paytype_drop: "Payment Type is required",
      payment_due_date: "Payment Due Date is required",
      bill_date: "Bill Date is required",
 },
    errorPlacement: function(error, element) {
            if (element.hasClass("select2-hidden-accessible")) {
                error.insertAfter(element.next('span.select2')); // Place error message after the Select2 element
            } else {
                error.insertAfter(element);
            }
        },
submitHandler: function(form) {
  var formData = new FormData(form);
  formData.append(csrfName, csrfHash);
  $.ajax({
    type: "POST",
    dataType: "json",
    url:"<?php echo base_url(); ?>Cpurchase/insert_purchase",
    data: formData,
    contentType: false,
    processData: false,
    success: function(response) {
    if (response.status == 'success') {

   $('#errormessage_expense').html('<div class="alert alert-success">' + response.msg + '</div>');
     $('#Final_invoice_number').val(response.invoice_no);
          $('#Final_invoice_id').val(response.invoice_id);
         
                  }else{
          $('#errormessage_expense').html(failalert+response.msg+'</div>'); 
          console.log(response.msg, "Error");
       }                  
    },
        error: function(xhr, status, error) {
        alert('An error occurred: ' + error);
    }
  })
}
});
   </script>