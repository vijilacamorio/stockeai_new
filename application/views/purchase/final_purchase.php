
 <div class="panel-body">
<div class="with_po">  
   <div id="errormessage_expense"></div><br>
      <form id="insert_purchase" class="insert_purchase" method="post">
               <div class="row">
                 
                  <div class="col-sm-6">
                     <div class="form-group row">
                        <label for="supplier_sss" class="col-sm-4 col-form-label"><?php  echo  display('Vendor'); ?>
                        <i class="text-danger">*</i>
                        </label>
                        <div class="col-sm-8">
                           <select name="supplier_id" id="supplier_id" class="form-control "  style="width:100%;" required=""  tabindex="1">
                              <option value="<?php echo $supplier_list[0]['supplier_id']; ?>"><?php echo $supplier_list[0]['supplier_name']; ?></option>
                              <?php foreach ($supplier_list as $key => $supplier) { ?>
                              <option value="<?php echo $supplier['supplier_id']; ?>"><?php echo $supplier['supplier_name']; ?></option>
                              <?php } ?>
                           </select>
                        </div>
                     </div>
                     <div class="form-group row">
                        <label for="" class="col-sm-4 col-form-label" ><?php  echo  display('Vendor Type');?></label>
                        <div class="col-sm-8">
                           <input type="vendor_type" tabindex="3" class="form-control" name="vendor_type"  style="WIDTH: 100%;" placeholder="" id="vendor_type_details" />
                        </div>
                     </div>
                  </div>
                  <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                  <input type="hidden"  class="payment_id1 payment_id"  name="payment_id"/>
                  <div class="col-sm-6">
                     <div class="form-group row">
                        <label for="" class="col-sm-4 col-form-label"><?php  echo  display('Vendor Address');?>
                        <i class="text-danger"></i>
                        </label>
                        <div class="col-sm-8">
                           <textarea class="form-control" tabindex="4" id="vendor_add" rows="4" cols="50" name="vendor_add" placeholder=""   required ></textarea>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-6" id="">
                     <div class="form-group row">
                        <label for="date" class="col-sm-4 col-form-label"><?php echo display('invoice_no');  ?><i class="text-danger">*</i></label>
                        <div class="col-sm-8">
                           <input  class=" form-control" type="" size="50" name="invoice_no" id="" required  value="<?php echo $chalan_no; ?>"  tabindex="4" />
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-6" id="">
                     <div class="form-group row">
                        <label for="text" class="col-sm-4 col-form-label"><?php echo display('Expenses / Bill date');?>
                        <i class="text-danger">*</i>
                        </label>
                        <div class="col-sm-5">
                           <input type="date"  style="width:165%;" required tabindex="2" class="form-control datepicker" name="bill_date"  placeholder="Expenses/Billdate"  value="{purchase_date}" id="date"  />
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-sm-6">
                     <div class="form-group row">
                        <label for="port_of_discharge" class="col-sm-4 col-form-label"> <?php echo display('Port Of Discharge');?> </label>
                        <div class="col-sm-8">
                           <input class="form-control" type="" size="50" name="Port_of_discharge" id="date1"  value="<?php echo $port_of_discharge; ?>"  tabindex="4" />
                        </div>
                     </div>
                     <div class="form-group row">
                        <label for="date" class="col-sm-4 col-form-label"><?php echo display('Payment Due Date');?>  <i class="text-danger">*</i></label>
                        <div class="col-sm-8">
                           <input class=" form-control" type="date" size="50" name="payment_due_date" id="payment_due_date" required value="<?php echo $payment_due_date; ?>" tabindex="4" />
                        </div>
                     </div>
                     <input type="hidden" id="hidden_weight" name="hidden_weight"/>
                     <div class="form-group row">
                        <label for="billing_address" class="col-sm-4     col-form-label"><?php echo display('Payment Terms');?><i class="text-danger">*</i></label>
                        <div class="col-sm-8">
                           <select  required  name="payment_terms" id="payment_terms" style="width:100%;" class=" form-control" placeholder='Payment Terms' id="payment_terms">
                              <option value="<?php echo $payment_terms; ?>"><?php echo $payment_terms; ?></option>
                              <option value="CAD">CAD</option>
                              <option value="COD">COD</option>
                              <option value="ADVANCE"><?php echo display('ADVANCE');?></option>
                              <option value="7DAYS">7<?php echo display('DAYS');?></option>
                              <option value="15DAYS">15<?php echo display('DAYS');?></option>
                              <option value="30DAYS">30<?php echo display('DAYS');?></option>
                              <option value="45DAYS">45<?php echo display('DAYS');?></option>
                              <option value="60DAYS">60<?php echo display('DAYS');?></option>
                              <option value="75DAYS">75<?php echo display('DAYS');?></option>
                              <option value="90DAYS">90<?php echo display('DAYS');?></option>
                              <option value="180DAYS">180<?php echo display('DAYS');?></option>
                           </select>
                        </div>
                     </div>
                     <?php ?>
                     <div class="form-group row">
                        <label for="payment_type" class="col-sm-4 col-form-label"><?php
                           echo display('payment_type');
                           ?> <i class="text-danger">*</i></label>
                        <div class="col-sm-8">
                           <select name="paytype_drop" id="paytype_drop" class="form-control" required=""  tabindex="3" style="width:100;">
                              <option value="<?php echo $payment_type; ?>"> <?php echo  $payment_type; ?></option>
                              <option value="CHEQUE"><?php echo display('cheque'); ?></option>
                              <option value="CASH"><?php echo display('cash'); ?></option>
                              <option value="CREDIT/DEBIT CARD"><?php echo display('CREDIT/DEBIT CARD');?></option>
                              <option value="BANK TRANSFER"><?php echo display('BANK TRANSFER');?></option>
                              <?php foreach($payment_type as $ptype){?>
                              <option value="<?php echo $ptype['payment_type'];?>"><?php echo $ptype['payment_type'] ;?></option>
                              <?php }?>
                           </select>
                        </div>
                     </div>
                     <div class="form-group row">
                        <label for="invoice_no" class="col-sm-4 col-form-label"> <?php echo display('ISF FIELD');?>
                        <i class="text-danger">*</i></label>
                        <div class="col-sm-8">
                           <select name="isf_field" class="form-control"  id="isf_dropdown1" tabindex="3" style="width400%;">
                              <option value=""selected><?php echo display('Select ISF NO');?></option>
                              <option value="1"><?php echo display('NO') ?></option>
                              <option value="2"><?php echo display('YES') ?></option>
                           </select>
                        </div>
                     </div>
                     <div class="form-group row" id="isf_no1">
                        <label for="ISF" class="col-sm-4 col-form-label" ><?php echo display('ISF NO');?>
                        <i class="text-danger">*</i>
                        </label>
                        <div class="col-sm-8">
                           <input name="isf_no"  class="form-control bankpayment"   style="width:100%;" value="<?php echo $isf_filling; ?>"  >
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="form-group row">
                        <label for="container_number" class="col-sm-4 col-form-label"><?php echo display('Container Number');?> <i class="text-danger">*</i></label>
                        <div class="col-sm-8">
                           <input type="text" name="container_no" value="<?php  echo $container_no; ?>" class="form-control"  placeholder="Container Number">
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="form-group row">
                        <label for="date" class="col-sm-4 col-form-label"><?php echo display('B/L No');?><i class="text-danger">*</i></label>
                        <div class="col-sm-8">
                           <input type="text" name="bl_number" class="form-control"  value="<?php echo $bl_number; ?>"  placeholder="Bl Number">
                        </div>
                     </div>
                     <div class="form-group row">
                        <label for="invoice_no" class="col-sm-4 col-form-label"><?php echo display('Estimated Time Of Arrival');?>
                     
                        </label>
                        <div class="col-sm-8">
                           <input type="date"  tabindex="2" class="form-control datepicker" name="eta" value="<?php echo $eta; ?>" id="date1"  />
                        </div>
                     </div>
                     <div class="form-group row">
                        <label for="supplier_sss" class="col-sm-4 col-form-label"><?php echo display('Estimated Time Of Depature');?>
                     
                        </label>
                        <div class="col-sm-8">
                           <input type="date"  tabindex="2" class="form-control datepicker" name="etd" value="<?php echo $etd; ?>" id="date"  />
                        </div>
                     </div>
                     <div class="form-group row">
                        <label for="ETA" class="col-sm-4 col-form-label"><?php echo display('Attachments');?></label>
                        <div class="col-sm-8">
                           <input type="file" name="file" class="form-control">
                        </div>
                     </div>
                  </div>
               </div>
               <br>
               <?php  $d= $total_tax; 
                  $t='';
                  if($d !=='' && !empty($d)){
                     preg_match('#\((.*?)\)#', $d, $match);
                  
                     $t=$match[1];$t=trim($t);
                     
                   }else{
                  
                     $t=$t=trim($t);
                     
                   }
                  ?>                                         
               <div class="table-responsive">
                  <div id="content">
                     <?php
                        $count='';
                        $list_count=array();
                        foreach($purchase_info as $inv){
                            $count = substr($inv['tableid'], 0, 1);
                         $items[] =$count   ;                            
                                                      
                        
                        
                        
                        
                        }
                        
                        
                        
                        ?>
                     <?php 
                        for($m=1;$m<count($purchase_info);$m++){ ?>
                     <table class="table table-bordered normalinvoice table-hover" id="normalinvoice_<?php  echo $m; ?>" >
                        <thead>
                           <tr>
                              <th rowspan="2" class="text-center" style="width:180px;" ><?php echo display('product_name'); ?><i class="text-danger">*</i>  &nbsp;&nbsp; </th>
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
                              <th rowspan="2"  style="width:90px;" class="text-center"><?php echo display('Cost per Sq.Ft');?>($)</th>
                              <th rowspan="2"  style="width:90px;" class="text-center"><?php echo display('Cost per Slab');?>($)</th>
                              <th rowspan="2"  style="width:90px;" class="text-center"><?php echo display('sales'); ?><br/><?php echo display('Price per Sq.Ft');?>($)</th>
                              <th rowspan="2"  style="width:90px;" class="text-center"><?php echo display('Sales Slab Price');?>($)</th>
                              <th rowspan="2" class="text-center"><?php echo display('Weight');?></th>
                              <th rowspan="2" class="text-center"><?php echo display('Origin');?></th>
                              <th rowspan="2" style="width: 130px" class="text-center"><?php  echo  display('total'); ?>($)</th>
                              <th rowspan="2" class="text-center"><?php  echo  display('action'); ?></th>
                           </tr>
                           <tr>
                              <th class="text-center"><?php echo display('Width');?></th>
                              <th class="text-center"><?php echo display('Height');?></th>
                              <th class="text-center"  ><?php echo display('Width');?></th>
                              <th class="text-center" ><?php echo display('Height');?></th>
                           </tr>
                        </thead>
                        <style>
                        .button_hide{
                              display:none;
                        }
                           input{
                           border:none;
                           }
                           textarea:focus, input:focus{
                           outline: none;
                           }
                           .text-right {
                           text-align: left; 
                           }
                           th,
                           td {
                           word-wrap: break-word
                           border: 1px solid black;
                           width: 80px;
                           }
                           .select2 {
                           display:none;
                           }
                           .Row {
                           display: table;
                           width: 100%; /*Optional*/
                           table-layout: fixed; /*Optional*/
                           border-spacing: 10px; /*Optional*/
                           }
                           .Column {
                           display: table-cell;
                           }
                           .input-symbol-euro {
                           position: absolute;
                           font-size: 14px;
                           }
                           .input-symbol-euro input {
                           padding-left: 18px;
                           }
                           .input-symbol-euro:after {
                           position: absolute;
                           top: 7px;
                           content: '<?php echo $currency; ?>';
                           left: 5px;
                           }
                           #download_select:focus option:first-of-type , #print_select:focus option:first-of-type{
                           display: none;
                           }
                        </style>
                        <tbody id="addPurchaseItem_<?php echo $m;  ?>">
                           <?php  $n=0; ?>
                           <?php foreach($purchase_info as $inv){
                              $a = substr($inv['tableid'], 0, 1);
                              if($a==$m){
                                                                  
                                                                      ?>
                           <tr>
                              <td>
                                 <input type="hidden" name="tableid[]" id="tableid_1" value="<?php  echo $inv['tableid'];   ?>"/>
                                 <input list="magicHouses" name="prodt[]" id="prodt_<?php  echo $m.$n; ?>" class="form-control product_name" value="<?php  echo $inv['product_name'];  ?>" style="width:160px;" />
                                 <datalist id="magicHouses">
                                    <?php                                
                                       foreach($products as $tx){?>
                                    <option value="<?php echo $tx['product_name'].'-'.$tx['product_model'];?>">  <?php echo $tx['product_name'].'-'.$tx['product_model'];  ?></option>
                                    <?php } ?>
                                 </datalist>
                                 <input type='hidden' class='common_product autocomplete_hidden_value  product_id_1' value="<?php  echo $inv['product_id'];  ?>" name='product_id[]' id='SchoolHiddenId_<?php  echo $m.$n; ?>' />
                              </td>
                              <td>
                                 <input type="text" id="bundle_no_<?php  echo $m.$n; ?>" name="bundle_no[]" required="" value="<?php  echo $inv['bundle_no'];  ?>" class="form-control" />
                              </td>
                              <td>
                                 <input type="text" id="description_<?php  echo $m.$n; ?>" name="description[]" value="<?php  echo $inv['description'];  ?>" class="form-control" />
                              </td>
                              <td >
                                 <input type="text" name="thickness[]" id="thickness_<?php  echo $m.$n; ?>" required="" value="<?php  echo $inv['thickness'];  ?>" class="form-control"/>
                              </td>
                              <td>
                                 <input type="text" id="supplier_b_no_<?php  echo $m.$n; ?>" name="supplier_block_no[]" required="" value="<?php  echo $inv['supplier_block_no'];  ?>" class="form-control" />
                              </td>
                              <td >
                                 <input type="text"  id="supplier_s_no_<?php  echo $m.$n; ?>" name="supplier_slab_no[]" required="" value="<?php  echo $inv['supplier_slab_no'];  ?>" class="form-control"/>
                              </td>
                              <td>
                                 <input type="text" id="gross_width_<?php  echo $m.$n; ?>" name="gross_width[]" required="" value="<?php  echo $inv['g_width'];  ?>" class="gross_width  form-control" />
                              </td>
                              <td>
                                 <input type="text" id="gross_height_<?php  echo $m.$n; ?>" name="gross_height[]"  required=""  value="<?php  echo $inv['g_height'];  ?>" class="gross_height form-control" />
                              </td>
                              <td >
                                 <input type="text"   style="width:60px;" readonly id="gross_sq_ft_<?php  echo $m.$n; ?>" name="gross_sq_ft[]" value="<?php  echo $inv['gross_sqft'];  ?>" class="gross_sq_ft form-control"/>
                              </td>
                              <td >
                                 <input type="text"  id="slab_no_<?php  echo $m.$n; ?>" name="slab_no[]" value="<?php  echo $n+1;  ?>" readonly  required="" value="<?php  echo $c;  ?>" class="form-control"/>
                              </td>
                              <td>
                                 <input type="text" id="net_width_<?php  echo $m.$n; ?>" name="net_width[]" required="" value="<?php  echo $inv['n_width'];  ?>" class="net_width form-control" />
                              </td>
                              <td>
                                 <input type="text" id="net_height_<?php  echo $m.$n; ?>" name="net_height[]"    required="" value="<?php  echo $inv['n_height'];  ?>" class="net_height form-control" />
                              </td>
                              <td >
                                 <input type="text"   style="width:60px;" readonly id="net_sq_ft_<?php  echo $m.$n; ?>" name="net_sq_ft[]" value="<?php  echo $inv['net_sqft'];  ?>" class="net_sq_ft form-control"/>
                              </td>
                              <td>
                                 <input type="text" id="cost_sq_ft_<?php  echo $m.$n; ?>"  name="cost_sq_ft[]" readonly  style="width:60px;" value="<?php  echo $inv['cost_per_sqft'];  ?>"  class="cost_sq_ft form-control" >
                              <td >
                                <input type="text"  id="cost_sq_slab_<?php  echo $m.$n; ?>" name="cost_sq_slab[]" readonly   style="width:60px;" value="<?php  echo $inv['cost_per_slab'];  ?>"  class="form-control"/>
                              </td>
                              <td>
                                 <input type="text" id="sales_amt_sq_ft_<?php  echo $m.$n; ?>"  name="sales_amt_sq_ft[]"  style="width:60px;"  value="<?php  echo $inv['sales_price_sqft'];  ?>" class="sales_amt_sq_ft form-control" />
                              </td>
                              <td >
                                 <input type="text"  id="sales_slab_amt_<?php  echo $m.$n; ?>" name="sales_slab_amt[]"  style="width:60px;" value="<?php  echo $inv['sales_slab_price'];  ?>"  class="sales_slab_amt form-control"/>
                              </td>
                              </span>
                              </td>
                              <td>
                                 <input type="text" id="weight_<?php  echo $m.$n; ?>" name="weight[]"  value="<?php  echo $inv['weight'];  ?>" class="weight form-control" />
                              </td>
                              <td >
                                 <input type="text"  id="origin_<?php  echo $m.$n; ?>" name="origin[]" value="<?php  echo $inv['origin'];  ?>" class="form-control"/>
                              </td>
                              <td >
                                 <input  type="text" class="total_price form-control" style="width:80px;"   value="<?php  echo $inv['total'];  ?>"  id="total_<?php  echo $m.$n; ?>" name="total_amt[]"/>
                              </td>
                              <td style="text-align:center;">
                                 <button  class='delete1 btn btn-danger' type='button' value='Delete' ><i class='fa fa-trash'></i></button>
                              </td>
                           </tr>
                           <?php $n++;   } }  ?>
                        </tbody>
                        <tfoot>
                           <tr>
                              <td style="text-align:right;" colspan="8"><b><?php  echo display('Gross Sq.Ft');?>  :</b></td>
                              <td >
                                 <input type="text" id="overall_gross_<?php echo $m; ?>" name="overall_gross[]"    class="overall_gross form-control" style="width: 60px"   readonly="readonly"  /> 
                              </td>
                              <td style="text-align:right;" colspan="3"><b><?php  echo display('Net Sq.Ft');?> :</b></td>
                              <td >
                                 <input type="text" id="overall_net_<?php echo $m; ?>" name="overall_net[]"  class="overall_net form-control"  style="width: 60px"   readonly="readonly"  /> 
                              </td>
                              <td style="text-align:right;" colspan="4"><b><?php  echo display('Weight');?> :</b></td>
                              <td >
                                 <input type="text" id="overall_weight_<?php echo $m; ?>" name="overall_weight[]"  class="overall_weight form-control"  style="width: 70px"  readonly="readonly"  /> 
                              </td>
                              <td style="text-align:right;" colspan="1"><b><?php  echo display('total'); ?> :</b></td>
                              <td >
                                <input type="text" id="Total_<?php echo $m; ?>" name="total[]"   class="b_total form-control"   style="padding-top: 6px;width: 80px" readonly="readonly"  />
                              </td>
                              <td colspan="2" style="text-align: center;">
                             <i id="buddle_<?php echo $m; ?>"  class="btn-danger removebundle fa fa-minus" aria-hidden="true"></i>
                              
                              </td>
                           </tr>
                        </tfoot>
                     </table>
                     <?php   } ?>
                  
                  <i id="buddle_1" class="addbundle fa fa-plus btnclr" style=" padding: 10px 12px 10px 12px;margin-right: 18px;float:right;"   onclick="addbundle(); "aria-hidden="true"></i>
                
                    </div>
               </div>
               <table class="taxtab table table-bordered table-hover">
                  <tr>
                     <td class="hiden" style="width:25%;border:none;text-align:end;font-weight:bold;">
                        <?php  echo display("Live Rate");?> : 
                     </td>
                     <td class="hiden btnclr" style="width:12%;text-align-last: center;padding:5px;border:none;font-weight:bold;color:white;">1 <?php  echo $curn_info_default;  ?>
                        = <input style="width: 80px;text-align:center;color:black;padding:5px;" type="text" class="custocurrency_rate"/>&nbsp;<label for="custocurrency" style="color:white;"></label>
                     </td>
                     <td style="border:none;text-align:right;font-weight:bold;"><?php  echo display('Tax');?> : 
                     </td>
                     <td style="width:12%">
                        <select name="tx"  id="product_tax" class="form-control" >
                           <option value="<?php  echo $t; ?>" selected="selected"><?php  echo $t; ?></option>
                           <?php foreach($all_tax as $tx){?>
                           <option value="<?php echo $tx['tax_id'].'-'.$tx['tax'].'%';?>">  <?php echo $tx['tax_id'].'-'.$tx['tax'].'%';  ?></option>
                           <?php } ?>
                        </select>
                     </td>
                     <td  style="width:25%;"></td>
                  </tr>
               </table>
               <input type="hidden" id="paid_convert" name="paid_convert"/>   <input type="hidden" id="bal_convert" name="bal_convert"/>
               <table border="0" style="table-layout: auto;" class="overall table table-bordered table-hover">
                  <tr>
                     <td   style="vertical-align:top;text-align:right;border:none;"></td>
                     <td  style="text-align:right;border:none;"></td>
                     <td  style="text-align:right;border:none;"></td>
                     <td  style="text-align:right;border:none;"> </td>
                  </tr>
                  <tr>
                     <td  colspan="2" style="vertical-align:top;text-align:right;border:none;"><b><?php  echo display('Overall TOTAL');?> :</b></td>
                     <td colspan="1" style="border:none;padding-bottom: 40px;"><span class="input-symbol-euro"><input type="text" id="Over_all_Total" name="Over_all_Total"  style="width:180px;" class="form-control" value="<?php echo $purchase_info[0]['total'];  ?>"  readonly="readonly"  /> </span></td>
                     <td colspan="4" style="text-align:right;border:none;"><b><?php  echo display('TAX DETAILS');?> :</b></td>
                     <td colspan="1" style="border:none;">  <span class="input-symbol-euro">     <input type="text" class="form-control" style="width:180px;"  id="tax_details" value="<?php echo $purchase_info[0]['tax_details'];  ?>" name="tax_details"  readonly="readonly" /></span></td>
 
                  </tr>
                  <tr>
                     <td  colspan="2" style="vertical-align:top;text-align:right;border:none;"><b><?php  echo display('Overall Gross Sq.Ft');?> :</b></td>
                     <td colspan="1" style="border:none;"><input type="text" id="total_gross" name="total_gross" value="<?php echo  $purchase_info[0]['total_gross'];  ?>"  style="width:180px;" class="form-control"   readonly="readonly"  /> </td>
                     <td colspan="4" style="text-align:right;border:none;"><b><?php  echo display('GRAND TOTAL');?> :</b></td>
                     <td colspan="1" style="border:none;">  <span class="input-symbol-euro">    <span class="input-symbol-euro">   <input type="text" id="gtotal"   class="form-control" style="width:180px;" name="gtotal" value="<?php  echo $purchase_info[0]['grand_total_amount'];   ?>"  readonly="readonly" /></td>
                  </tr>
                  <tr>
                     <td  colspan="2" style="vertical-align:top;text-align:right;border:none;"><b><?php  echo display('Overall Net Sq.Ft');?> :</b></td>
                     <td colspan="1" style="border:none;"><input type="text" id="total_net" name="total_net" value="<?php echo  $purchase_info[0]['total_net'];  ?>" class="form-control"  style="width:180px;"  readonly="readonly"  /> </td>
                     <td colspan="4" style="text-align:right;border:none;"><b><?php  echo display('GRAND TOTAL');?> :</b><br/><b><?php  echo display('Preferred Currency');?></b></td>
                     <td colspan="1" style="border:none;">
                        <table>
                           <tr>
                              <td class="cus" name="cus" style="width: 40px;"></td><td>&nbsp</td>
                              <td><input  type="text"  style="width:180px;" readonly class="vendor_gtotal" id="vendor_gtotal"  value="<?php echo  $purchase_info[0]['gtotal_preferred_currency'];  ?>"   name="vendor_gtotal"  required   /></td>
                           </tr>
                        </table>
                     </td>
                  </tr>
                  <tr>
                     <td colspan="2"  style="vertical-align:top;text-align:right;border:none;"><b><?php  echo display('Overall Weight');?> :</b></td>
                     <td colspan="1" style="border:none;"><input type="text" id="total_weight" value="<?php echo  $purchase_info[0]['total_weight'];  ?>" name="total_weight"  style="width:180px;"  class="form-control"   readonly="readonly"  /></td>
                     <td colspan="4" class="amt" style="text-align:right;border:none;"><b><?php  echo display('Amount Paid');?> :</b></td>
                     <td style="border:none;">
                        <table border="0">
                           <tr class="amt">
                              <td class="cus" name="cus" style="width: 40px;"></td><td>&nbsp</td>
                              <td> <input  type="text"  readonly id="amount_paid" class="" style="width:-webkit-fill-available;"  name="amount_paid"  value="<?php echo  $purchase_info[0]['paid_amount'];  ?>"  required   /></td>
                           </tr>
                        </table>
                     </td>
                  </tr>
                  <tr>
                     <td colspan="2"  style="vertical-align:top;text-align:right;border:none;"></td>
                     <td colspan="1" style="border:none;"></td>
                     <td class="amt" colspan="4"  style="vertical-align:top;text-align:right;border:none;"><b><?php echo display('balance_ammount');  ?> :</b></td>
                     <td class="amt" style="border:none;" colspan="1">
                        <table border="0">
                           <tr class="amt">
                              <td class="cus" name="cus" style="border:none;width: 40px;"></td><td>&nbsp</td>
                              <td style="border:none;">
                                 <input  type="text"   readonly id="balance"  value="<?php echo $purchase_info[0]['due_amount'];  ?>" name="balance"  required   />                     
                              </td>
                           </tr>
                        </table>
                     </td>
                  </tr>
                  <td colspan="21" style="text-align: end;">
                     <a class="client-add-btn btn btnclr" aria-hidden="true" id="paypls" data-toggle="modal" data-target="#payment_modal">
                        Make Payment
                     </a>
                  </td>
                  <tr>
               </table>
       <input type="hidden" id="invoice_hdn"/> <input type="hidden" id="invoice_hdn1"/>
      <div class="row">
      <div class="col-sm-12">
      <div class="form-group row">
      <label for="adress" class="col-sm-2 col-form-label"><?php echo  display('Remarks / Details');?>
      </label>
      <div class="col-sm-10">
            <textarea class="form-control" rows="4" cols="50" id="remark" name="remark" placeholder="Remarks" rows="1"><?php echo $remarks; ?></textarea>
   
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
             <textarea class="form-control" rows="4" cols="50" id="adress" name="message_invoice" placeholder="Message on Invoice" rows="1"><?php echo $message_invoice; ?></textarea>
             
             

      </div>
      </div> 
      </div>
      </div>
         <div class="row">
      <div class="col-sm-12">
      <div class="form-group row">
        <table>
      <tr>
      <td>
      <input type="submit" id="add_purchase" class="btn btn-large btnclr" name="add-packing-list" value="<?php echo display('save'); ?>" />
      </td>
      <td class="button_hide"> 
     <input type="submit" id="final_submit" class="btn btn-primary pull-left final_submit btnclr"  value="Submit"/>
      </td>
      <td class="button_hide">         
      <select name="download_select" id="download_select" class="form-control" style="width: auto;">
      <option value="Download" selected><?php echo display('download'); ?></option>
      <option value="Invoice" ><?php echo  display('New Invoice');?></option>
      <option value="Packing" ><?php echo  display('Packing List');?></option>
      </select>
      </td>       
      <td class="button_hide">
      <select name="print_select" id="print_select" class="form-control btnclr" style="width: auto;" >
      <option value="Print" selected><?php echo display('print'); ?></option>
      <option value="Invoice" ><?php echo  display('New Invoice');?></option>
      <option value="Packing" ><?php echo  display('Packing List');?></option>
      </select>
      </td>                   
      </tr>
      </table>
      </div> 
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
    $(document).ready(function(){
 $(".normalinvoice").each(function(i,v){
   if($(this).find("tbody").html().trim().length === 0){
       $(this).hide()
   }
})
        $('.normalinvoice').each(function(){
var tid=$(this).attr('id');
 const indexLast = tid.lastIndexOf('_');
var idt = tid.slice(indexLast + 1);



  var sum=0;

 $('#normalinvoice_'+idt  +  '> tbody > tr').find('.total_price').each(function() {
var v=$(this).val();
  sum += parseFloat(v);

});

 $(this).closest('table').find('#Total_'+idt).val(sum.toFixed(3));

  var sum_net=0;

 $('#normalinvoice_'+idt  +  '> tbody > tr').find('.net_sq_ft').each(function() {
var v=$(this).val();
  sum_net += parseFloat(v);

});

 $(this).closest('table').find('#overall_net_'+idt).val(sum_net.toFixed(3));
  var sum_gross=0;

 $('#normalinvoice_'+idt  +  '> tbody > tr').find('.gross_sq_ft ').each(function() {
var v=$(this).val();
  sum_gross += parseFloat(v);

});

 var gross = $(this).closest('table').find('#overall_gross_'+idt).val(sum_gross.toFixed(3));
   var sum_weight=0;

 $('#normalinvoice_'+idt  +  '> tbody > tr').find('.weight').each(function() {
var v=$(this).val();
  sum_weight += parseFloat(v);

});

 $(this).closest('table').find('#overall_weight_'+idt).val(sum_weight.toFixed(3));
    

    });
});

// Insert Expense Data

// $(".insert_purchase").validate({
//    rules: {
//       supplier_id: "required",
//       invoice_no: "required", 
//       payment_due_date : "required", 
//       bill_date : "required",
//       payment_terms: "required",  
//       paytype_drop : "required",
//       isf_no: {
//          isfNoRequired: true
//       }
//  },
//  messages: {
//      supplier_id: "Supplier Name is required",
//      invoice_no: "Invoice Number is required",
//      payment_terms: "Payment Term is required",
//      paytype_drop: "Payment Type is required",
//      payment_due_date: "Payment Due Date is required",
//      bill_date: "Bill Date is required",
//      isf_no: "ISF No is required when ISF Field is YES.",
//  },
//    errorPlacement: function(error, element) {
//       if (element.hasClass("select2-hidden-accessible")) {
//          error.insertAfter(element.next('span.select2')); 
//       } else {
//          error.insertAfter(element);
//       }
//    },
// submitHandler: function(form) {
//   var formData = new FormData(form);
//   formData.append(csrfName, csrfHash);
//   $.ajax({
//     type: "POST",
//     dataType: "json",
//     url:"<?php echo base_url(); ?>Cpurchase/insert_purchase",
//     data: formData,
//     contentType: false,
//     processData: false,
//     success: function(response) {
//       console.log(response);
//     if (response.status == 'success') {
//     $('.final_submit').show();
//       $('#errormessage_expense').html('<div class="alert alert-success">' + response.msg + '</div>');
//       $('#Final_invoice_number').val(response.invoice_no);
//       $('#Final_invoice_id').val(response.invoice_id);
         
//       }else{
//          $('#errormessage_expense').html(failalert+response.msg+'</div>'); 
//       }                  
//       },
//         error: function(xhr, status, error) {
//         $('#errormessage_expense').html(failalert+error+'</div>'); 
//     }
//   })
// }
// });

// $('.final_submit').on('click', function () {
//    window.location.href = "<?php echo base_url(); ?>Cpurchase/manage_purchase?id=<?php echo $_GET['id']; ?>";
// });
</script>