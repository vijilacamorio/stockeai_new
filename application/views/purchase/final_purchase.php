
 <div class="panel-body">
<div class="with_po">  
   <div id="errormessage_expense"></div><br>
      <form id="insert_purchase" class="insert_purchase" method="post">
               <div class="row">
                           <div class="col-sm-6">  
                          <input type="hidden" id="admin_company_id" name="admin_company_id" value="<?php  echo $_GET['id']; ?>">
                          <input type="hidden" id="makepaymentId" name="makepaymentId">
                          <input type="hidden" name="paid_customer_currency" id="paid_customer_currency"/>
                          <input type="hidden" name="balance_customer_currency" id="balance_customer_currency"/>
                           <div class="form-group row">
                                    <label for="supplier_sss" class="col-sm-4 col-form-label"><?php echo display('Vendor');?>
                                    <i class="text-danger">*</i>
                                    </label>
                                    <div class="col-sm-8">
                                       <select name="supplier_id" id="supplier_id" class="form-control vendorNAME"  style="border:2px solid #d7d4d6;width:100%;"     required=""  tabindex="1">
                                         <option value="<?php echo $supplier_list[0]['supplier_id']; ?>"><?php echo $supplier_list[0]['supplier_name']; ?></option>
                                          {supplier_list}
                                          <option value="{supplier_id}">{supplier_name}</option>
                                          {/supplier_list}
                                       </select>
                                    </div>
                                  
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
                                       <input  class=" form-control" type="" size="50"     style="border:2px solid #d7d4d6;"   name="invoice_no" id="invoice_no" value="<?php echo $supplier_list[0]['chalan_no']; ?>" tabindex="4" />
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
                                       <input type="date"  style="width:165%;border:2px solid #d7d4d6;" class="form-control" name="bill_date"   value="<?php echo $supplier_list[0]['purchase_date']; ?>" id="date"  />
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
                                       <input class="form-control" type="" size="50"  style="border:2px solid #d7d4d6;"  name="Port_of_discharge" id="date1"   tabindex="4" />
                                    </div>
                                 </div>



                               
                             
                                   <div class="form-group row">
                                    <label for="billing_address" class="col-sm-4     col-form-label"><?php echo display('Payment Terms');?>
                                    <i class="text-danger">*</i></label>
                                    <div class="col-sm-7">
                                       <select   name="payment_terms" id="payment_terms" style="width:100%;border:2px solid #d7d4d6;" class=" form-control" required placeholder='Payment Terms' id="payment_terms">
                                     <option value="<?php echo $supplier_list[0]['payment_terms']; ?>"><?php echo $supplier_list[0]['payment_terms']; ?></option>
											<?php
											foreach(PAYMENT_TYPE as $payment_typ){
												echo '<option value="'.$payment_typ.'">'.$payment_typ.'</option>';
											}
											?>
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
                                          <option value="" selected disabled>Select the Account Category</option>
                                                   		<?php
											foreach(ACC_NAME as $acc_name){
												echo '<option value="'.$acc_name.'">'.$acc_name.'</option>';
											}
											?>
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
    <label for="invoice_no" class="col-sm-4 col-form-label">

        <?php echo display('ISF FIELD');?><i class="text-danger">*</i>

    </label>
    <div class="col-sm-8">
        <select name="isf_field" class="form-control" id="isf_dropdown" tabindex="3" required="" style="width:100%;border:2px solid #d7d4d6;">
            <option value="" selected><?php echo display('Select ISF NO');?></option>
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
                                          <th rowspan="2" class="text-center" style="width:180px;" ><?php echo display('product_name'); ?><i class="text-danger">*</i> </th>
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
                                             <input type="hidden" class="table_id" name="tableid[]" id="tableid_1"/>

                                             <input list="magicHouses" name="prodt[]" id="prodt_1"   class="form-control product_name"  style="width:160px;" placeholder="Search Product" />

                                             <datalist id="magicHouses">
                                                <?php 
                                                   foreach($product_list as $tx){?>
                                                <option value="<?php echo $tx['product_name'].'-'.$tx['product_model'];?>">  <?php echo $tx['product_name'].'-'.$tx['product_model'];  ?></option>
                                                <?php } ?>
                                             </datalist>
                                             <input type='hidden' class='common_product autocomplete_hidden_value  product_id_1' name='product_id[]' id='product_id_1' />
                                          </td>
                                          <td>
                                             <input type="text" id="bundle_no_1" name="bundle_no[]"  class="bundle_no form-control" />
                                          </td>
                                          <td>
                                             <input type="text" id="description_1" name="description[]" class="form-control productDescription" />
                                          </td>
                                          <td >
                                             <input type="text" name="thickness[]" id="thickness_1" class="form-control productThickness"/>
                                          </td>
                                          <td>
                                             <input type="text" id="supplier_b_no_1" name="supplier_block_no[]"  class="form-control" />
                                          </td>
                                          <td >
                                             <input type="text"  id="supplier_s_no_1" name="supplier_slab_no[]"  class="form-control"/>
                                          </td>
                                          <td>
                                             <input type="text" id="gross_width_1" name="gross_width[]"  class="gross_width  form-control" />
                                          </td>
                                          <td>
                                             <input type="text" id="gross_height_1" name="gross_height[]"   class="gross_height form-control" />
                                          </td>
                                          <td >
                                             <input type="text"   style="width:60px;" readonly id="gross_sq_ft_1" name="gross_sq_ft[]" class="gross_sq_ft form-control"/>
                                          </td>
                                          <td style="text-align:center;" >
                                             <input type="text"   style="width:20px;" value="1" class="slab_no" id="slab_no_1" name="slab_no[]"  readonly  /> 
                                          </td>
                                          <td>
                                             <input type="text" id="net_width_1" name="net_width[]"  class="net_width form-control" />
                                          </td>
                                          <td>
                                             <input type="text" id="net_height_1" name="net_height[]"   class="net_height form-control" />
                                          </td>
                                          <td >
                                             <input type="text"   style="width:60px;" readonly id="net_sq_ft_1" name="net_sq_ft[]" class="net_sq_ft form-control"/>
                                          </td>
                                          <td>
                                            <input type="text" id="cost_sq_ft_1"  name="cost_sq_ft[]"     style="width:60px;" value="0.00"  class="cost_sq_ft form-control costPerSQFT">
                                          <td >
                                             <input type="text"  id="cost_sq_slab_1" name="cost_sq_slab[]" style="width:60px;" value="0.00"  class="cost_sq_slab form-control"/>
                                          </td>
                                          <td>
                                             <input type="text" id="sales_amt_sq_ft_1"  name="sales_amt_sq_ft[]"  style="width:70px;"  placeholder="0.00" class="sales_amt_sq_ft form-control" />
                                          </td>
                                          <td >
                                             <input type="text"  id="sales_slab_amt_1" name="sales_slab_amt[]"  style="width:70px;" placeholder="0.00"  class="sales_slab_amt form-control"/>
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
                                             <input  type="text" class="total_price form-control" style="width:80px;" readonly  value="0.00"  id="total_amt_1" name="total_amt[]"/>
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
                                             <input type="text" id="Total_1" name="total[]"   class="b_total form-control"  style="width: 80px" value="0.00"  readonly="readonly"  /> 
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
            <td style="width: 50%; padding-left: 20px; border:none; vertical-align: middle;">
                <label style="width:150px;" for="tax_details"><b><?php echo display('TAX DETAILS') ?> :</b></label>
                <input type="text" id="tax_details" name="tax_details" class="form-control" style="width: 150px; margin-left: 10px; display: inline-block;" value="0.00" readonly="readonly" />
          
            </td>
        </tr>
        <tr>
            <!-- Left Side -->
            <td style="width: 50%; padding-right: 20px; border:none; vertical-align: middle;">
                <label style="width:150px;" for="total_gross"><b><?php echo display('Overall Gross Sq.Ft') ?> :</b></label>
                <input type="text" id="total_gross" name="total_gross" value="0.00" class="form-control" style="width: 150px; margin-left: 10px; display: inline-block;" readonly="readonly" />
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
                <label style="width:150px;" for="total_net"><b><?php echo display('Overall Net Sq.Ft') ?> :</b></label>
                <input type="text" id="total_net" name="total_net" class="form-control" value="0.00" style="width: 150px; margin-left: 10px; display: inline-block;" readonly="readonly" />
            </td>
            <!-- Right Side -->
            <td style="width: 50%; padding-left: 20px; border:none; vertical-align: middle;">
                  <label style="width:150px;" for="customer_gtotal"><b><?php echo display('Preferred Currency') ?> :</b></label>
                <input type="text" id="customer_gtotal" name="customer_gtotal" class="form-control" value="0.00" style="width: 150px; margin-left: 10px; display: inline-block;" readonly />
          </td>
        </tr>
        <tr>
            <!-- Left Side -->
            <td style="width: 50%; padding-right: 20px; border:none; vertical-align: middle;">
                <label style="width:150px;" for="total_weight"><b><?php echo display('Overall Weight') ?> :</b></label>
                <input type="text" id="total_weight" name="total_weight" class="form-control" value="0.00" style="width: 150px; margin-left: 10px; display: inline-block;" readonly="readonly" />
            </td>
            <!-- Right Side -->
            <td style="width: 50%; padding-left: 20px; border:none; vertical-align: middle;">
                <label style="width:150px;" for="amount_paid"><b><?php echo display('Amount Paid') ?> :</b></label>
                <input type="text" id="amount_paid" name="amount_paid" class="form-control" value="0.00" style="width: 150px; margin-left: 10px; display: inline-block;" readonly />
         </td>
        </tr>
        <tr>
            <!-- Left Side -->
            <td style="width: 50%; padding-right: 20px; border:none; vertical-align: middle;">
             </td>
            <!-- Right Side -->
            <td style="width: 50%; padding-left: 20px; border:none; vertical-align: middle;">
                <label style="width:150px;" for="balance"><b><?php echo display('Balance Amount') ?> :</b></label>
                <input type="text" id="balance" name="balance" class="form-control" value="0.00" style="width: 150px; margin-left: 10px; display: inline-block;" readonly />
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

                                        <!-- <td>
                                 <input type="submit" id="add_purchase" name="add_purchase"     class="btnclr btn" value="<?php// echo display('save') ?>">
                                 <a     id="final_submit_provider" class='btnclr final_submit_provider btn  '><?php //echo display('submit'); ?></a>
                                 <a id="download_provider"  class='btn  btnclr'><?php  //echo  display('download'); ?></a>
                                 <a id="print_provider"    class='btn  btnclr'><?php  //echo  display('print'); ?></a>                   
                              </td> -->

                                          <td style="width:140px;">
                                             <input type="submit" id="add_purchase"   class="btnclr btn btn-large" name="add-packing-list" value="<?php  echo  display('save'); ?>" />
                                        
                                             <a    id="final_submit"   class='btnclr final_submit btn'><?php echo display('submit'); ?></a>
                                       </td> <td>
                                         
                                             <select name="download_select" id="download_select" class="form-control btnclr" style="background-color:<?php echo $setting_detail[0]['button_color']; ?>;width: auto;color:white;" >
                                                <option value="Download"  selected><?php echo display('download'); ?></option>
                                                <option value="Invoice" ><?php echo  display('New Invoice');?></option>
                                                <option value="Packing" ><?php echo  display('Packing List');?></option>
                                             </select>
                                     </td>
                                        <td>
                                        
                                             <select name="print_select" id="print_select" class="form-control btnclr" style="background-color:<?php echo $setting_detail[0]['button_color']; ?>;width: auto;color:white;" >
                                                <option value="Print"  selected><?php echo display('print');  ?></option>
                                                <option value="Invoice" ><?php echo  display('New Invoice');?></option>
                                                <option value="Packing" ><?php echo  display('Packing List');?></option>
                                             </select>
</td>  </td>
                                       </tr>
                                    </table>
                                 </div>
                              </div>
                           </div>
                        </form>
                     </div></div>
                    

</div>

<script>
   $('#payplse').on('click', function (e) {
      alert('hi');
$('#amount_to_pay').val($('#vendor_gtotal').val()-$('#amount_paid').val());
    $('#payment_modal').modal('show');
  e.preventDefault();

});
//     $(document).ready(function(){
//  $(".normalinvoice").each(function(i,v){
//    if($(this).find("tbody").html().trim().length === 0){
//        $(this).hide()
//    }
// })
//         $('.normalinvoice').each(function(){
// var tid=$(this).attr('id');
//  const indexLast = tid.lastIndexOf('_');
// var idt = tid.slice(indexLast + 1);



//   var sum=0;

//  $('#normalinvoice_'+idt  +  '> tbody > tr').find('.total_price').each(function() {
// var v=$(this).val();
//   sum += parseFloat(v);

// });

//  $(this).closest('table').find('#Total_'+idt).val(sum.toFixed(3));

//   var sum_net=0;

//  $('#normalinvoice_'+idt  +  '> tbody > tr').find('.net_sq_ft').each(function() {
// var v=$(this).val();
//   sum_net += parseFloat(v);

// });

//  $(this).closest('table').find('#overall_net_'+idt).val(sum_net.toFixed(3));
//   var sum_gross=0;

//  $('#normalinvoice_'+idt  +  '> tbody > tr').find('.gross_sq_ft ').each(function() {
// var v=$(this).val();
//   sum_gross += parseFloat(v);

// });

//  var gross = $(this).closest('table').find('#overall_gross_'+idt).val(sum_gross.toFixed(3));
//    var sum_weight=0;

//  $('#normalinvoice_'+idt  +  '> tbody > tr').find('.weight').each(function() {
// var v=$(this).val();
//   sum_weight += parseFloat(v);

// });

//  $(this).closest('table').find('#overall_weight_'+idt).val(sum_weight.toFixed(3));
    

//     });
// });

</script>