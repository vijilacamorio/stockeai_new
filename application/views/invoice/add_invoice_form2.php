
<!-- Invoice js -->

<script src="<?php echo base_url() ?>my-assets/js/admin_js/invoice.js" type="text/javascript"></script>



<!-- Customer type change by javascript end -->



<!-- Add New Invoice Start -->

<div class="content-wrapper" style="">

    <section class="content-header">

        <div class="header-icon">

            <i class="pe-7s-note2"></i>

        </div>

        <div class="header-title">

            <h1><?php echo display('new_invoice') ?></h1>

            <small><?php echo display('add_new_invoice') ?></small>

            <ol class="breadcrumb">

                <li><a href="#"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>

                <li><a href="#"><?php echo display('invoice') ?></a></li>

                <li class="active"><?php echo display('new_invoice') ?></li>

            </ol>

        </div>

    </section>



    <section class="content" >


        

        <div class="row">

            <div class="col-sm-12">

               

       <?php if($this->permission1->method('manage_invoice','read')->access()){ ?>

                    <a href="<?php echo base_url('Cinvoice/manage_invoice') ?>" class="btn btn-info m-b-5 m-r-2"><i class="ti-align-justify"> </i> <?php echo display('manage_invoice') ?> </a>

                    <?php }?>

      <!--    <?php if($this->permission1->method('pos_invoice','create')->access()){ ?>

                    <a href="<?php echo base_url('Cinvoice/pos_invoice') ?>" class="btn btn-primary m-b-5 m-r-2"><i class="ti-align-justify"> </i>  <?php echo display('pos_invoice') ?> </a>

                <?php }?> -->

            </div>

        </div>





        <!--Add Invoice -->

        <div class="row">

            <div class="col-sm-12">

                <div class="panel panel-bd lobidrag">

                    <div class="panel-heading">

                        <div class="panel-title">

                            <h4><?php echo display('new_invoice') ?></h4>

                           

                        </div>

                    </div>

                 



                    

                    <div class="panel-body">

                        <?php echo form_open_multipart('Cinvoice/Sale_manual_insert',array('class' => 'form-vertical', 'id' => 'insert_sale2','name' => 'insert_sale'))?>

                        <div class="row">



                            <div class="col-sm-6" id="payment_from_1">

                                <div class="form-group row">

                                    <label for="customer_name" class="col-sm-4 col-form-label"><?php

                                        echo display('customer_name');

                                        ?> </label>

                                    <div class="col-sm-6">
   
                                    <select name="customer_name" class="form-control customer_name"  id="customer_name">

<option value="">Select Customer</option>

<?php foreach($customer_details as $customer){?>

    <option value="<?php echo html_escape($customer['customer_name'])?>"><?php echo html_escape($customer['customer_name']);?></option>

<?php }?>

</select>


                                        <input id="autocomplete_customer_id" class="customer_hidden_value abc" type="hidden" name="customer_id" value="{customer_id}">

                                    </div>

                                     <?php if($this->permission1->method('add_customer','create')->access()){ ?>

                                  

                                         <a href="#" class="client-add-btn btn btn-info" aria-hidden="true" data-toggle="modal" data-target="#cust_info"><i class="ti-plus m-r-2"></i></a>

                                  

                                <?php } ?>

                                </div>

                            </div>



                            <div class="col-sm-6" id="payment_from_2">

                                <div class="form-group row">

                                    <label for="customer_name_others" class="col-sm-3 col-form-label"><?php echo display('customer_name') ?> <i class="text-danger">*</i></label>

                                    <div class="col-sm-6">

                                        <input  autofill="off" type="text"  size="100" name="customer_name_others" placeholder='<?php echo display('customer_name') ?>' id="customer_name_others" class="form-control" />

                                         <input type ="hidden" name="csrf_test_name" id="csrf_test_name" value="<?php echo $this->security->get_csrf_hash();?>">

                                    </div>



                                    <div  class="col-sm-3">

                                        <input  onClick="active_customer('payment_from_2')" type="button" id="myRadioButton_2" class="checkbox_account btn btn-success" name="customer_confirm_others" value="<?php echo display('old_customer') ?>">

                                    </div>

                                </div>

                                  <div class="form-group row">

                                    <label for="customer_name_others_address" class="col-sm-3 col-form-label"><?php echo display('customer_mobile') ?> </label>

                                    <div class="col-sm-6">

                                        <input type="text"  size="100" name="customer_mobile" class=" form-control" placeholder='<?php echo display('customer_mobile') ?>' id="customer_name_others_mobile" />

                                    </div>

                                </div> 

                                <div class="form-group row">

                                    <label for="customer_name_others_address" class="col-sm-3 col-form-label"><?php echo display('address') ?> </label>

                                    <div class="col-sm-6">

                                        <input type="text"  size="100" name="customer_name_others_address" class=" form-control" placeholder='<?php echo display('address') ?>' id="customer_name_others_address" />

                                    </div>

                                </div> 

                            </div>

                               <div class="col-sm-6" id="payment_from">

                                <div class="form-group row">

                                    <label for="payment_type" class="col-sm-3 col-form-label"><?php

                                        echo display('payment_type');

                                        ?> <i class="text-danger">*</i></label>

                                    <div class="col-sm-6">

                                        <select name="paytype" class="form-control" requirde="" onchange="bank_paymet(this.value)" tabindex="3">

                                            <option value="1"><?php echo display('cash_payment') ?></option>

                                            <option value="2"><?php echo display('bank_payment') ?></option> 

                                        </select>

                                    </div>


                                      <div  class=" col-sm-3">

                                         <a href="#" class="client-add-btn btn btn-info" aria-hidden="true" data-toggle="modal" data-target="#payment_type"><i class="ti-plus m-r-2"></i></a>
                                         <a href="#" class="client-add-btn btn btn-info" aria-hidden="true" >Add Payment</a>
                                    </div>

                                 

                                </div>

                            </div>

                        </div>



                        <div class="row">

                            <div class="col-sm-6">

                                <div class="form-group row">

                                    <label for="date" class="col-sm-4 col-form-label">Sales Invoice date <i class="text-danger">*</i></label>

                                    <div class="col-sm-8">

                                        <?php

                               

                                        $date = date('Y-m-d');

                                        ?>

                                        <input class=" form-control" type="date" size="50" name="invoice_date" id="date" requirde value="<?php echo html_escape($date); ?>" tabindex="4" />

                                    </div>

                                </div>


                                      <div class="form-group row">

                                    <label for="billing_address" class="col-sm-4 col-form-label">Billing Address</label>

                                    <div class="col-sm-8">

                                        <textarea rows="4" cols="50" name="billing_address" class=" form-control" placeholder='Billing Address' id="billing_address"> </textarea>

                                    </div>

                                </div> 

                                <div class="form-group row">

                                    <label for="billing_address" class="col-sm-4 col-form-label">Payment Terms</label>

                                    <div class="col-sm-8">

                                        <select   name="payment_terms" id="payment_terms" class=" form-control" placeholder='Payment Terms' id="payment_terms">
                                         <option value=""></option>   
                                        <option value="100%">100%</option> 
                                        <option value="30-70">30-70%</option> 
                                        <option value="70-30">70-30%</option> 
                                        <option value="75-25">75-25%</option> 
                                        <option value="25-75">25-75%</option> 
                                        </select>

                                    </div>

                                </div>

                                  <div class="form-group row">

                                    <label for="billing_address" class="col-sm-4 col-form-label">Number of days</label>

                                    <div class="col-sm-8">

                                        <select type="text" name="" name="number_of_days" id=number_of_days class=" form-control" placeholder='Number of days' id="number_of_days"> 
                                            <option value="">number_of_days</option>
                                            <?php 
                                            for($i=1;$i<100;$i++)
                                            {
                                                ?>
                                                <option value="<?php echo $i; ?>"><?php echo $i; ?>days</option>
                                                <?php
                                            }
                                            ?>
                                            <select>
                                    </div>

                                </div> 
                                <div class="form-group row">

                                    <label for="ETA" class="col-sm-4 col-form-label">ETD</label>

                                    <div class="col-sm-8">

                                        <input type="date" name="etd" class="form-control">
                                    </div>

                                </div> 
                                <div class="form-group row">

                                    <label for="ETA" class="col-sm-4 col-form-label">doc</label>

                                    <div class="col-sm-8">

                                        <input type="file" name="file" class="form-control">
                                    </div>

                                </div> 

                            </div>
                         

                             <div class="col-sm-6">

                                <div class="form-group row">

                                    <label for="date" class="col-sm-4 col-form-label">Commercial Invoice Number<i class="text-danger">*</i></label>

                                    <div class="col-sm-8">
                                        <input class="form-control" placeholder="Commercial Invoice Number" type="text" name="commercial_invoice_number"  value="<?php if(!empty($voucher_no[0]['voucher'])){
                                        $curYear = date('Y'); 
                                        $month = date('m');
                                    $vn = substr($voucher_no[0]['voucher'],9)+1;
                                    echo $voucher_n = 'NS'. $curYear.$month.'-'.$vn;
                                    }else{
                                            $curYear = date('Y'); 
                                        $month = date('m');
                                    echo $voucher_n = 'NS'. $curYear.$month.'-'.'1';
                                    } ?>" readonly />
                                    </div>
                                </div>


                                      <div class="form-group row">

                                    <label for="container_number" class="col-sm-4 col-form-label">Container Number <i class="text-danger">*</i></label>

                                    <div class="col-sm-8">

                                       <input class="form-control" placeholder="Container Number" type="text" size="50" name="container_number" id="date" requirde value="" tabindex="4" />

                                    </div>

                                </div> 

                            </div>



                                <div class="col-sm-6">

                                <div class="form-group row">

                                    <label for="date" class="col-sm-4 col-form-label">B/L No<i class="text-danger">*</i></label>

                                    <div class="col-sm-8">


                                        <input class="form-control" placeholder="BL Number" type="text" size="50" name="bl_no" requirde value=""/>

                                    </div>

                                </div>



                                <div class="form-group row">

                                    <label for="port_of_discharge" class="col-sm-4 col-form-label">Port of discharge</label>

                                    <div class="col-sm-8">

                                        <input name="port_of_discharge" class=" form-control" placeholder='Port of discharge' id="port_of_discharge" />
                                    </div>

                                </div>

                                  <div class="form-group row">

                                    <label for="port_of_discharge" class="col-sm-4 col-form-label">  Payment Due date</label>

                                   <div class="col-sm-8">

                                        <?php

                               

                                        $date1 ='26-08-2022';

                                        ?>

                                        <input class="form-control" type="date" size="50" name="payment_due_date" id="date1" requirde  tabindex="4" />

                                    </div>

                                </div>
                                <div class="form-group row">

                                    <label for="ETA" class="col-sm-4 col-form-label">ETA</label>

                                   <div class="col-sm-8">

                                        <?php

                               

                                        $date1 ='26-08-2022';

                                        ?>

                                        <input class="form-control" type="date" size="50" name="eta" id="date1" requirde  tabindex="4" />

                                    </div>

                                </div>
                              

                            </div>




                        <div class="col-sm-6" id="bank_div">

                            <div class="form-group row">

                                <label for="bank" class="col-sm-3 col-form-label"><?php

                                    echo display('bank');

                                    ?> <i class="text-danger">*</i></label>

                                <div class="col-sm-6">

                                   <select name="bank_id" class="form-control bankpayment"  id="bank_id">

                                        <option value="">Select Location</option>

                                        <?php foreach($bank_list as $bank){?>

                                            <option value="<?php echo html_escape($bank['bank_id'])?>"><?php echo html_escape($bank['bank_name']);?></option>

                                        <?php }?>

                                    </select>

                                 

                                </div>
                                 <?php if($this->permission1->method('add_customer','create')->access()){ ?>

                                    <div  class=" col-sm-3">

                                         <a href="#" class="client-add-btn btn btn-info" aria-hidden="true" data-toggle="modal" data-target="#bank_info"><i class="ti-plus m-r-2"></i></a>

                                    </div>

                                <?php } ?>
                             

                            </div>

                        </div>

                        </div>

                        <br>
                      
                        <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <tr>
                                <td style="width:80%;border:none;text-align:right;font-weight:bold;">Tax : 
                                 </td>
                                <td>
<select name="tx" id="product_tax" class="form-control" onselect="gtotal();">
<option value="Select the Tax" selected>Select the Tax</option>
<?php foreach($tax as $tx){?>
  
    <option value="<?php echo $tx['tax_id'].'-'.$tx['tax'].'%';?>">  <?php echo $tx['tax_id'].'-'.$tx['tax'].'%';  ?></option>
<?php } ?>
</select>
</td>
</tr>
</table>


                            <table class="table table-bordered table-hover" id="normalinvoice">
                                <thead>
                                     <tr>
                                            <th class="text-center" width="20%">Product name<i class="text-danger">*</i></th> 
                                            <th class="text-center">In stock</th>
                                            <th class="text-center">Quantity / Sq ft.<i class="text-danger">*</i></th>
                                            <th class="text-center">Amount<i class="text-danger">*</i></th>
                                           
                                            <th class="text-center"><?php echo display('total') ?></th>
                                            <th class="text-center"><?php echo display('action') ?></th>
                                        </tr>
                                </thead>
                                <tbody id="addPurchaseItem">
                                    <tr>
                                        <td>
                                        <select name="prodt" id="prodt_1" class="form-control product_name" onchange="available_quantity(1);">
                                        <option value="Select the Product" selected>Select the Product</option>
                                            <?php 
                                       
                                            foreach($product as $tx){?>
                                       
                                                <option value="<?php echo $tx['product_name'].'-'.$tx['product_model'];?>">  <?php echo $tx['product_name'].'-'.$tx['product_model'];  ?></option>
                                           <?php } ?>
                                        </select>
                                        <input type='hidden' class='common_product autocomplete_hidden_value  product_id_1' name='product_id[]' id='SchoolHiddenId' />
                                        </td>

                                       <td class="wt">
                                                <input type="text" id="available_quantity[]" name="available_quantity[]" class="form-control text-right available_quantity_1" placeholder="0.00" readonly/>
                                            </td>
                                        
                                            <td class="text-right">
                                                <input type="text" name="product_quantity[]" id="cartoon_1" requirde="" min="0" class="form-control text-right store_cal_1" onkeyup="total_amt(1);" placeholder="0.00" value=""  tabindex="6"/>
                                            </td>
                                            <td class="test">
                                                <input type="text" name="product_rate[]" requirde=""  id="product_rate_1" class="form-control product_rate_1 text-right" placeholder="0.00" value="" min="0" tabindex="7" readonly/>
                                            </td>
                                         

                                            <td class="text-right">
                                                <input class="form-control total_price text-right" type="text" name="total_price[]" id="total_price_1" value="0.00"   readonly="readonly" />
                                            </td>
                                            <td>

                                               
                                         
                                                <button  class="btn btn-danger text-right red" type="button" value="<?php echo display('delete')?>" onclick="deleteRow(this)" tabindex="8"><i class="fa fa-close" ></i></button>
                                            </td>
                                           
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                   
                                        <td class="text-right" colspan="4"><b><?php echo display('total') ?>:</b></td>
                                        <td class="text-right">
                                            <input type="text" id="Total" class="text-right form-control" name="total" value="0.00" readonly="readonly" />
                                        </td>
                                    
                                           
                                    </tr>
           
                                    <tr> <td class="text-right" colspan="4"><b><?php echo "Grand Total" ?>:</b></td>
                                        <td class="text-right">
                                            <input type="text" id="gtotal" class="text-right form-control" name="gtotal" value="0.00" readonly="readonly" />
                                        </td>
                                        <td> <button type="button" id="add_invoice_item" class="btn btn-info" name="add-invoice-item" onclick="addInputField('addPurchaseItem');"  tabindex="9" ><i class="fa fa-plus"></i></button>

                                            <input type="hidden" name="baseUrl" class="baseUrl" value="<?php echo base_url();?>"/></td>
                                    </tr>
                                   
                                </tfoot>
                            </table>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-6">
                                <table>
                                   
                                <tr>
                                    <td>
    
                                        <input type="submit" id="add_purchase" class="btn btn-primary btn-large" name="add-packing-list" value="Save" />
                                    </td>
                                    <?php 
                                if($invoiceid !==''){ ?>
                                    <td>&nbsp;</td>
                                    <td>
    
                                       <a href="" class="btn btn-primary" Style='color:#fff;'>Donwload</a>
                                    </td>
                                    <td>&nbsp;</td>
                                     <td>
    
                                       <a href="" class="btn btn-primary" Style='color:#fff;'>Email invoice</a>
                                    </td>
                                     <td>
                                        <td>&nbsp;</td>
                <td>
                                       <a href="" class="btn btn-primary" Style='color:#fff;'>Submit</a>
                                    </td>

                                     
                                <?php }?>
                                    
                                   
                                  
                                  
                                    
                                </tr>
                          
                            </div>
                        </div>


                           <div class="form-group row">

                                    <label for="billing_address" class="col-sm-4 col-form-label">Account Details/Additional Information</label>

                                    <div class="col-sm-8">

                                        <textarea rows="4" cols="50" id="details" name="ac_details" class=" form-control" placeholder='Account Details/Additional Information' id=""> </textarea>

                                    </div>

                                </div> 
                                <div class="form-group row">

                                    <label for="remark" class="col-sm-4 col-form-label">Remarks/Conditions</label>

                                    <div class="col-sm-8">

                                        <textarea rows="4" cols="50" id="remarks" name="remark" class=" form-control" placeholder='Remarks/Conditions' id=""> </textarea>

                                    </div>

                                </div>
                        <div class="table-responsive">

                            
                        <table class='table'>
                                <tr>
                                    <th colspan='7'>
                                      

                                    </th>
                                </tr>    
                        </table>

                        </div>
<div id='customer-data' style='color:red;'></div>
                               <?php echo form_close()?>
                              <input type="hidden" id="hdn"/>
                    </div>

                    <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                 <script>
                    $( document ).ready(function() {
$('#product_tax').on('change', function (e) {
    var total=$('#Total').val();
var tax=$('#product_tax').val();
//console.log(total + "///"+tax);
var field = tax.split('-');

var percent = field[1];
percent=percent.replace("%","");
//alert(percent);
    var grand=parseInt(total) * parseInt(percent);
    var final=grand + parseInt(total);
    final = isNaN(final) ? 0 : final;
    $('#gtotal').val(final);
    console.log("Gtotal  : "+final);

});
});
                function gtotal(){
                  
var total=$('#Total').val();
var tax= $('#product_tax').val();
//console.log(total + "///"+tax);
var field = tax.split('-');

var percent = field[1];
percent=percent.replace("%","");
//alert(percent);
    var grand=parseInt(total) * parseInt(percent);
    var final=grand + parseInt(total);
    final = isNaN(final) ? 0 : final;
    $('#gtotal').val(final);
   console.log("Gtotal  : "+final);




}

                 </script>
<script>
$('#product_tax').on('change', function (e) {
    var optionSelected = $("option:selected", this);
    var valueSelected = this.value;
   $('#hdn').val(valueSelected);
});
    var counter =1 ;


var arr=[];
var csrfName = '<?php echo $this->security->get_csrf_token_name();?>';
var csrfHash = '<?php echo $this->security->get_csrf_hash();?>';
function available_quantity (id) {
    //create data object here so we can dynamically set new csrfName/Hash
    $('.product_name').on('change', function (e) {
        var name = 'available_quantity_'+ id;
   
   var amount = 'product_rate_'+ id;
   var pdt=$('#prodt_'+id).val();
   const myArray = pdt.split("-");
   var product_nam=myArray[0];
   var product_model=myArray[1];
  // alert(pdt);
    var data = {
       amount:'product_rate_'+ id,
       name:'available_quantity_'+ id,
       product_nam:product_nam,
       product_model:product_model
    };
    data[csrfName] = csrfHash;

    $.ajax({
        type:'POST',
        data: data, 
        //dataType tells jQuery to expect JSON response
        dataType:"json",
        url:'<?php echo base_url();?>Cinvoice/availability',
        success: function(result, statut) {
            if(result.csrfName){
               //assign the new csrfName/Hash
               csrfName = result.csrfName;
               csrfHash = result.csrfHash;
            }
           // var parsedData = JSON.parse(result);
          //  alert(result[0].p_quantity);
          $(".available_quantity_"+ id).val(result[0]['p_quantity']);
          $("#product_rate_"+ id).val(result[0]['price']);
          $(".product_id_"+ id).val(result[0]['product_id']);
            console.log(result);
        }
    });
});
}
/*
function available_quantity(id){
 
    $('.product_name').on('change', function (e) {

    var name = 'available_quantity_'+ id;
   
    var amount = 'product_rate_'+ id;
var pdt=$('#prodt_'+id).val();
    console.log(amount);
    $.ajax({
        data: {"prodt": $('#prodt_'+id).val()}, 
        url: "Cinvoice/availability",
        type: "post",
        success: function(data) {
            console.log(data);
            var splitted = data.split("/");
            
            console.log(splitted[0]+"|"+splitted[1]);
            $('.'+name).val(splitted[0]);
            $('#'+amount).val(splitted[1]);
        // alert(data); 
        }
      
    });
});
}
*/


/*
function total_amt(id){
    var sum=0.0;
var total='total_price_'+id;
var quantity='cartoon_'+id;
var amount = 'product_rate_'+ id;
var grand=$('#grand').val();
var quan=$('#'+quantity).val();
var amt=$('#'+amount).val();
var result=parseInt(quan) * parseInt(amt);
result = isNaN(result) ? 0 : result;
    sum = result +sum;
$('#'+total).val(result);

$('#hidn').text(sum);
  $('#hidn').val(sum);
}
*/

function sumArray(array) {
  
  let sum = 0;

  for (let i = 0; i < array.length; i += 1) {
    sum += array[i];
  }
  
  return sum;
}






function total_amt(id){
    var sum=0.0;
   debugger;
var total='total_price_'+id;
var quantity='cartoon_'+id;
var amount = 'product_rate_'+ id;
var grand=$('#grand').val();
var quan=$('#'+quantity).val();
var amt=$('#'+amount).val();
var result=parseInt(quan) * parseInt(amt);
result = isNaN(result) ? 0 : result;
arr.push(result);
$('#'+total).val(result);



sumArray(arr)
console.log(sumArray(arr));
$("#Total").val(sumArray(arr));
gtotal();
}





</script>


                   <!--      <div class="form-group row">

                                    <label for="billing_address" class="col-sm-4 col-form-label">Message on invoice</label>

                                    <div class="col-sm-8">

                                        <textarea rows="4" cols="50" name="billing_address" class=" form-control" placeholder='This will show upon the invoice' id=""> </textarea>

                                    </div>

                                </div>  -->

                   

                </div>

            </div>

             <div class="modal fade" id="printconfirmodal" tabindex="-1" role="dialog" aria-labelledby="printconfirmodal" aria-hidden="true">

      <div class="modal-dialog modal-sm">

        <div class="modal-content">

          <div class="modal-header">

            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

            <h4 class="modal-title" id="myModalLabel"><?php echo display('print') ?></h4>

          </div>

          <div class="modal-body">

            <?php echo form_open('Cinvoice/Sale_manual_insert', array('class' => 'form-vertical', 'id' => '', 'name' => '')) ?>

            <div id="outputs" class="hide alert alert-danger"></div>

            <h3> <?php echo display('successfully_inserted') ?></h3>

            <h4><?php echo display('do_you_want_to_print') ?> ??</h4>

            <input type="hidden" name="invoice_id" id="inv_id">

          </div>

          <div class="modal-footer">

            <button type="button" onclick="cancelprint()" class="btn btn-default" data-dismiss="modal"><?php echo display('no') ?></button>

            <button type="submit" class="btn btn-primary" id="yes"><?php echo display('yes') ?></button>

            <?php echo form_close() ?>

          </div>

        </div>

      </div>

    </div>



  <!------ add new product-->  
  <div class="modal fade modal-success" id="product_info" role="dialog">

                <div class="modal-dialog" role="document">

                    <div class="modal-content">

                        <div class="modal-header">

                            

                            <a href="#" class="close" data-dismiss="modal">&times;</a>

                            <h3 class="modal-title"><?php echo display('new_product') ?></h3>

                        </div>

                        

                        <div class="modal-body">

                            <div id="customeMessage" class="alert hide"></div>

                      <?php echo form_open_multipart('Cproduct/insert_product', array('class' => 'form-vertical', 'id' => 'insert_product', 'name' => 'insert_product')) ?>

                    <div class="panel-body">

 <input type ="hidden" name="csrf_test_name" id="" value="<?php echo $this->security->get_csrf_hash();?>">

                      <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label for="barcode_or_qrcode" class="col-sm-4 col-form-label"><?php echo display('barcode_or_qrcode') ?> <i class="text-danger"></i></label>
                                    <div class="col-sm-8">
                                        <input class="form-control" name="product_id" type="text" id="product_id" placeholder="<?php echo display('barcode_or_qrcode') ?>"  tabindex="1" >
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label for="quantity" class="col-sm-4 col-form-label"><?php echo 'Quantity' ?> <i class="text-danger">*</i></label>
                                    <div class="col-sm-8">
                                        <input class="form-control" name="quantity" type="number" id="quantity" placeholder="Enter Product Quantity only" requirde tabindex="1" >
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label for="product_name" class="col-sm-4 col-form-label"><?php echo display('product_name') ?> <i class="text-danger">*</i></label>
                                    <div class="col-sm-8">
                                        <input class="form-control" name="product_name" type="text" id="product_name" placeholder="<?php echo display('product_name') ?>" requirde tabindex="1" >
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label for="serial_no" class="col-sm-4 col-form-label"><?php echo display('serial_no') ?> </label>
                                    <div class="col-sm-8">
                                        <input type="text" tabindex="" class="form-control " id="serial_no" name="serial_no" placeholder="111,abc,XYz"   />
                                    </div>
                                </div>
                            </div>

                        </div>



                       <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label for="product_model" class="col-sm-4 col-form-label"><?php echo display('model') ?> <i class="text-danger"></i></label>
                                    <div class="col-sm-8">
                                        <input type="text" tabindex="" class="form-control" id="product_model" name="model" placeholder="<?php echo display('model') ?>" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label for="category_id" class="col-sm-4 col-form-label"><?php echo display('category') ?></label>
                                    <div class="col-sm-8">
                                        <select class="form-control" id="category_id" name="category_id" tabindex="3">
                                            <option value=""></option>
                                            <?php if ($category_list) { ?>
                                                {category_list}
                                                <option value="{category_id}">{category_name}</option>
                                                {/category_list}
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>


                        </div>      



                         <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label for="sell_price" class="col-sm-4 col-form-label"><?php echo display('sell_price') ?> <i class="text-danger">*</i> </label>
                                    <div class="col-sm-8">
                                        <input class="form-control text-right" id="sell_price" name="price" type="text" requirde="" placeholder="0.00" tabindex="5" min="0">
                                    </div>
                                </div> 
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label for="unit" class="col-sm-4 col-form-label"><?php echo display('unit') ?></label>
                                    <div class="col-sm-8">
                                        <select class="form-control" id="unit" name="unit" tabindex="-1" aria-hidden="true">
                                            <option value="">Select One</option>
                                            <?php if ($unit_list) { ?>
                                                {unit_list}
                                                <option value="{unit_name}">{unit_name}</option>
                                                {/unit_list}
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>



                       <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label for="image" class="col-sm-4 col-form-label"><?php echo display('image') ?> </label>
                                    <div class="col-sm-8">
                                        <input type="file" name="image" class="form-control" id="image" tabindex="4">
                                    </div>
                                </div> 
                            </div>
                             <?php  $i=0;
                    foreach ($taxfield as $taxss) {?>
                   
                            <div class="col-sm-6">
                         <div class="form-group row">
                            <label for="tax" class="col-sm-4 col-form-label"><?php echo $taxss['tax_name']; ?> <i class="text-danger"></i></label>
                            <div class="col-sm-7">
                              <input type="text" name="tax<?php echo $i;?>" class="form-control" value="<?php echo number_format($taxss['default_value'], 2, '.', ',');?>">
                            </div>
                            <div class="col-sm-1"> <i class="text-success">%</i></div>
                        </div>
                    </div>
               
                       <?php $i++;}?>
                        </div> 
                        <div class="table-responsive product-supplier">
                            <table class="table table-bordered table-hover"  id="product_table">
                                <thead>
                                    <tr>
                                        <th class="text-center"><?php echo display('supplier') ?> <i class="text-danger">*</i></th>
                                        <th class="text-center"><?php echo display('supplier_price') ?> <i class="text-danger">*</i></th>


                                        <!-- <th class="text-center"><?php// echo display('action') ?> <i class="text-danger"></i></th> -->
                                    </tr>
                                </thead>
                                <tbody id="proudt_item">
                                    <tr class="">

                                        <td width="300">
                                            <select name="supplier_id[]" class="form-control"  requirde="">
                                                <option value=""> select Supplier</option>
                                                <?php if ($supplier) { ?>
                                                    {supplier}
                                                    <option value="{supplier_name}">{supplier_name}</option>
                                                    {/supplier}
                                                <?php } ?>
                                            </select>
                                        </td>
                                        <td class="">
                                            <input type="text" tabindex="6" class="form-control text-right" name="supplier_price[]" placeholder="0.00"  requirde  min="0"/>
                                        </td>

                                        <!-- <td width="100"> <a  id="add_purchase_item" class="btn btn-info btn-sm" name="add-invoice-item" onClick="addpruduct('proudt_item');"  tabindex="9"/><i class="fa fa-plus-square" aria-hidden="true"></i></a> <a class="btn btn-danger btn-sm"  value="<?php //echo display('delete') ?>" onclick="deleteRow(this)" tabindex="10"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                        </td> -->
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                   <div class="row">
                            <div class="col-sm-12">
                                <center><label for="description" class="col-form-label"><?php echo display('product_details') ?></label></center>
                                <textarea class="form-control" name="description" id="description" rows="2" placeholder="<?php echo display('product_details') ?>" tabindex="2"></textarea>
                            </div>
                        </div><br>
                        <div class="form-group row">
                            <div class="col-sm-6">

                                <input type="submit" id="add-product" class="btn btn-primary btn-large" name="add-product" value="<?php echo display('save') ?>" tabindex="10"/>

                            
                                <input type="submit" value="<?php echo display('save_and_add_another') ?>" name="add-product-another" class="btn btn-large btn-success" id="add-product-another" tabindex="9">
                            </div>
                        </div>

                    </div>

                    

                        </div>



                        <div class="modal-footer">

                            

                            <a href="#" class="btn btn-danger" data-dismiss="modal">Close</a>

                            
                            <input type="submit" id="add-deposit" class="btn btn-success" name="add-deposit" value="<?php echo display('save') ?>" tabindex="6"/>
                           <!--  <input type="submit" class="btn btn-success" value="Submit"> -->

                        </div>

                        <?php echo form_close() ?>

                    </div><!-- /.modal-content -->

                </div><!-- /.modal-dialog -->

            </div><!-- /.modal -->

  <!------ add new bank -->  
      <div class="modal fade modal-success" id="bank_info" role="dialog">

                <div class="modal-dialog" role="document">

                    <div class="modal-content">

                        <div class="modal-header">

                            

                            <a href="#" class="close" data-dismiss="modal">&times;</a>

                            <h3 class="modal-title"><?php echo display('add_new_bank') ?></h3>

                        </div>

                        

                        <div class="modal-body">

                            <div id="customeMessage" class="alert hide"></div>

                      <?php echo form_open_multipart('Csettings/add_new_bank',array('class' => 'form-vertical','id' => 'validate' ))?>

                    <div class="panel-body">

 <input type ="hidden" name="csrf_test_name" id="" value="<?php echo $this->security->get_csrf_hash();?>">

                        <div class="form-group row">

                            <label for="bank_name" class="col-sm-3 col-form-label"><?php echo display('bank_name') ?> <i class="text-danger">*</i></label>

                            <div class="col-sm-6">

                                <input type="text" class="form-control" name="bank_name" id="bank_name" requirde="" placeholder="<?php echo display('bank_name') ?>" tabindex="1"/>

                            </div>

                        </div>



                        <div class="form-group row">

                            <label for="ac_name" class="col-sm-3 col-form-label"><?php echo display('ac_name') ?> <i class="text-danger">*</i></label>

                            <div class="col-sm-6">

                                <input type="text" class="form-control" name="ac_name" id="ac_name" requirde="" placeholder="<?php echo display('ac_name') ?>" tabindex="2"/>

                            </div>

                        </div>



                        <div class="form-group row">

                            <label for="ac_no" class="col-sm-3 col-form-label"><?php echo display('ac_no') ?> <i class="text-danger">*</i></label>

                            <div class="col-sm-6">

                                <input type="text" class="form-control" name="ac_no" id="ac_no" requirde="" placeholder="<?php echo display('ac_no') ?>" tabindex="3"/>

                            </div>

                        </div>



                        <div class="form-group row">

                            <label for="branch" class="col-sm-3 col-form-label"><?php echo display('branch') ?> <i class="text-danger">*</i></label>

                            <div class="col-sm-6">

                                <input type="text" class="form-control" name="branch" id="branch" requirde="" placeholder="<?php echo display('branch') ?>" tabindex="4"/>

                            </div>

                        </div>



                        <div class="form-group row">

                            <label for="signature_pic" class="col-sm-3 col-form-label"><?php echo display('signature_pic') ?></label>

                            <div class="col-sm-6">

                                <input type="file" class="form-control" name="signature_pic" id="signature_pic" placeholder="<?php echo display('signature_pic') ?>" tabindex="5"/>

                            </div>

                        </div>

                   

                    </div>

                    

                        </div>



                        <div class="modal-footer">

                            

                            <a href="#" class="btn btn-danger" data-dismiss="modal">Close</a>

                            
                            <input type="submit" id="add-deposit" class="btn btn-success" name="add-deposit" value="<?php echo display('save') ?>" tabindex="6"/>
                           <!--  <input type="submit" class="btn btn-success" value="Submit"> -->

                        </div>

                        <?php echo form_close() ?>

                    </div><!-- /.modal-content -->

                </div><!-- /.modal-dialog -->

            </div><!-- /.modal -->
  <!------ add new customer -->  

    <div class="modal fade modal-success" id="cust_info" role="dialog">

                <div class="modal-dialog" role="document">

                    <div class="modal-content">

                        <div class="modal-header">

                            

                            <a href="#" class="close" data-dismiss="modal">&times;</a>

                            <h3 class="modal-title"><?php echo display('add_new_customer') ?></h3>

                        </div>

                        

                        <div class="modal-body">

                            <div id="customeMessage" class="alert hide"></div>

                       <?php echo form_open('Cinvoice/instant_customer', array('class' => 'form-vertical', 'id' => 'newcustomer')) ?>

                    <div class="panel-body">

                        <input type ="hidden" name="csrf_test_name" id="" value="<?php echo $this->security->get_csrf_hash();?>">

                        <div class="form-group row">

                            <label for="customer_name" class="col-sm-3 col-form-label"><?php echo display('customer_name') ?> <i class="text-danger">*</i></label>

                            <div class="col-sm-6">

                                <input class="form-control" name ="customer_name" id="" type="text" placeholder="<?php echo display('customer_name') ?>"  requirde="" tabindex="1">

                            </div>

                        </div>



                        <div class="form-group row">

                             <label for="customer_email" class="col-sm-3 col-form-label">
                                Customer <br>Email
                              <i class="text-danger">*</i></label>

                            <div class="col-sm-6">

                                <input class="form-control" name ="email" id="email" type="email" placeholder="<?php echo display('customer_email') ?>" requirde tabindex="2"> 

                            </div>

                        </div>



                        <div class="form-group row">

                            <label for="mobile" class="col-sm-3 col-form-label"><?php echo display('customer_mobile') ?><i class="text-danger">*</i></label>

                            <div class="col-sm-6">

                                <input class="form-control" name ="mobile" id="mobile" type="number" placeholder="<?php echo display('customer_mobile') ?>" min="0" tabindex="3" requirde>

                            </div>

                        </div>



                        <div class="form-group row">

                            <label for="address " class="col-sm-3 col-form-label"><?php echo display('customer_address') ?><i class="text-danger">*</i></label>

                            <div class="col-sm-6">

                                <textarea class="form-control" requirde name="address" id="address " rows="3" placeholder="<?php echo display('customer_address') ?>" tabindex="4"></textarea>

                            </div>

                        </div>

                      

                    </div>

                    

                        </div>



                        <div class="modal-footer">

                            

                            <a href="#" class="btn btn-danger" data-dismiss="modal">Close</a>

                            

                            <input type="submit" class="btn btn-success" onClick="refreshPage()" value="Submit">

                        </div>

                        <?php echo form_close() ?>

                    </div><!-- /.modal-content -->

                </div><!-- /.modal-dialog -->

            </div><!-- /.modal -->

         




<!------ add new Payment Type -->  
          <div class="modal fade modal-success" id="payment_type" role="dialog">

                <div class="modal-dialog" role="document">

                    <div class="modal-content">

                        <div class="modal-header">

                            

                            <a href="#" class="close" data-dismiss="modal">&times;</a>

                            <h3 class="modal-title">Add New Payment Type</h3>

                        </div>

                        

                        <div class="modal-body">

                            <div id="customeMessage" class="alert hide"></div>

                       <?php echo form_open('Cinvoice/instant_customer', array('class' => 'form-vertical', 'id' => 'newcustomer')) ?>

                    <div class="panel-body">

 <input type ="hidden" name="csrf_test_name" id="" value="<?php echo $this->security->get_csrf_hash();?>">

                        <div class="form-group row">

                            <label for="customer_name" class="col-sm-3 col-form-label">New Payment Type <i class="text-danger">*</i></label>

                            <div class="col-sm-6">

                                <input class="form-control" name ="new_payment_type" id="" type="text" placeholder="New Payment Type"  requirde="" tabindex="1">

                            </div>

                        </div>


                    </div>

                    

                        </div>



                        <div class="modal-footer">

                            

                            <a href="#" class="btn btn-danger" data-dismiss="modal">Close</a>

                            

                            <input type="submit" class="btn btn-success" value="Submit">

                        </div>

                        <?php echo form_close() ?>

                    </div><!-- /.modal-content -->

                </div><!-- /.modal-dialog -->

            </div><!-- /.modal -->


        </div>

    </section>

</div>
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="formModalLabel">Contact Us</h4>
			</div>
			<div class="modal-body">
				<div class="alert alert-success hidden" id="contactSuccess">
					<strong>Success!</strong> Your message has been sent to us.
				</div>

				<div class="alert alert-danger hidden" id="contactError">
					<strong>Error!</strong> There was an error sending your message.
				</div>
             
			
					<div class="row">
						<div class="form-group">
							<div class="col-md-6">
								<label>Your name *</label>
								<input type="text"  data-msg-requirde="Please enter your name." maxlength="100" class="form-control" name="name" id="name_email" requirde>
							</div>
							<div class="col-md-6">
								<label>Your email address *</label>
								<input type="email"  data-msg-requirde="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email_info" requirde>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="form-group">
							<div class="col-md-12">
								<label>Subject</label>
								<input type="text"  data-msg-requirde="Please enter the subject." maxlength="100" class="form-control" name="subject" id="subject_email" requirde>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="form-group">
							<div class="col-md-12">
								<label>Message *</label>
								<textarea maxlength="5000" data-msg-requirde="Please enter your message." rows="10" class="form-control" name="message" id="message_email" requirde></textarea>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<input type="submit" value="Send Message" id="email_send" name="email_send" class="btn btn-primary btn-lg mb-xlg" data-loading-text="Loading...">
						</div>
					</div>
                   

			</div>
		</div>
	</div>
</div>
<!-- Invoice Report End -->

<script type="text/javascript">
    $('#add_purchase').on('click', function() {

    });
     $(function() { 
        $('#send_email').hide();
       var data = {
    
       };

       data[csrfName] = csrfHash;
   
       $.ajax({
           type:'POST',
           data: data, 
          dataType:"json",
           url:'<?php echo base_url();?>Cinvoice/get_email_data',
           success: function(result, statut) {
            console.log(result);
               if(result.csrfName){
                  csrfName = result.csrfName;
                  csrfHash = result.csrfHash;
               }
               $('#name_email').val(result[0]['greeting']);
               $('#subject_email').val(result[0]['subject']);
               $('#message_email').html(result[0]['message']);
           }
       });
   });


      $('.product_name').on('select', function () {
       console.log('You selected: ' + this.value);
    }).change();
    $('#customer_name').change(function(e){
       
    var data = {
      
        value:$(this).val()
    };
    data[csrfName] = csrfHash;

    $.ajax({
        type:'POST',
        data: data, 
       dataType:"json",
        url:'<?php echo base_url();?>Cinvoice/getcustomer_data',
        success: function(result, statut) {
            if(result.csrfName){
               csrfName = result.csrfName;
               csrfHash = result.csrfHash;
            }
            $('#billing_address').html(result[0]['customer_address']+'\n'+result[0]['customer_email']+'\n'+result[0]['phone']);
    $('#email_info').val(result[0]['customer_email']);
        }
    });
});

</script>

<script type="text/javascript">

    $('#add_purchase').on('click', function() {

    $('#download_pdf').show();   

    });



</script>


<script type="text/javascript">
     $('#number_of_days').change(function(){
      
       var data = {
           sales_invoice_date : $('#date').val(),
           days : $(this).val(),   
           pterms : $('#payment_terms').val()
       
       };
       data[csrfName] = csrfHash;
   
       $.ajax({
           type:'POST',
           data: data, 
          dataType:"json",
           url:'<?php echo base_url();?>Cinvoice/getdate',
           success: function(result, statut) {
               if(result.csrfName){
                  csrfName = result.csrfName;
                  csrfHash = result.csrfHash;
               }
              $('#date1').val(result);
          }
       });
   });
 

   function addInputField(t) {
    //debugger;
    var row = $("#normalinvoice tbody tr").length;
    var count = row + 1;
      var  tab1 = 0;
      var  tab2 = 0;
      var  tab3 = 0;
      var  tab4 = 0;
      var  tab5 = 0;
      var  tab6 = 0;
      var  tab7 = 0;
      var  tab8 = 0;
      var  tab9 = 0;
      var  tab10 = 0;
      var  tab11 = 0;
      var  tab12 = 0;
    var limits = 500;
     var taxnumber = $("#txfieldnum").val();
    var tbfild ='';
    for(var i=0;i<taxnumber;i++){
        var taxincrefield = '<input id="total_tax'+i+'_'+count+'" class="total_tax'+i+'_'+count+'" type="hidden"><input id="all_tax'+i+'_'+count+'" class="total_tax'+i+'" type="hidden" name="tax[]">';
         tbfild +=taxincrefield;
    }
    if (count == limits)
        alert("You have reached the limit of adding " + count + " inputs");
    else {
        var a = "product_name_" + count,
                tabindex = count * 6,
                e = document.createElement("tr");
        tab1 = tabindex + 1;
        tab2 = tabindex + 2;
        tab3 = tabindex + 3;
        tab4 = tabindex + 4;
        tab5 = tabindex + 5;
        tab6 = tabindex + 6;
        tab7 = tabindex + 7;
        tab8 = tabindex + 8;
        tab9 = tabindex + 9;
        tab10 = tabindex + 10;
        tab11 = tabindex + 11;
        tab12 = tabindex + 12;
        e.innerHTML = "<td><select name='prodt' id='prodt_" + count + "' class='form-control product_name' onchange='available_quantity("+ count +");'>"+
        "<option value='Select the Product' selected>Select the Product</option><?php  foreach($product as $tx){?>"+
       " <option value='<?php echo $tx['product_name'].'-'.$tx['product_model'];?>'>  <?php echo $tx['product_name'].'-'.$tx['product_model'];  ?></option>"+
        "<?php } ?> </select><input type='hidden' class='common_product autocomplete_hidden_value  product_id_" + count + "' name='product_id[]' id='SchoolHiddenId' /></td><td><input type='text' name='available_quantity[]' id='available_quantity[]' class='form-control text-right common_avail_qnt available_quantity_" + count + "' value='0' readonly='readonly' /></td><td> <input type='text' name='product_quantity[]' id='cartoon_" + count + "'  requirde='requirde' onkeyup='total_amt(" + count + ");'  onchange='total_amt(" + count + ");' id='total_qntt_" + count + "' class='common_qnt total_qntt_" + count + " form-control text-right'  placeholder='0.00' min='0' tabindex='" + tab3 + "'/></td><td><input type='text' name='product_rate[]' id='product_rate_" + count + "' onkeyup='quantity_calculate(" + count + ");' onchange='quantity_calculate(" + count + ");' id='price_item_" + count + "' class='common_rate price_item" + count + " form-control text-right' requirde placeholder='0.00' min='0' tabindex='" + tab4 + "'/></td><td class='text-right'><input class='common_total_price total_price form-control text-right' type='text' name='total_price[]' id='total_price_" + count + "' value='0.00' readonly='readonly'/></td><td>"+tbfild+"<input type='hidden' id='all_discount_" + count + "' class='total_discount dppr' name='discount_amount[]'/><button tabindex='" + tab5 + "' style='text-align: right;' class='btn btn-danger' type='button' value='Delete' onclick='deleteRow(this)'><i class='fa fa-close'></i></button></td>",
                document.getElementById(t).appendChild(e),
                document.getElementById(a).focus(),
                document.getElementById("add_invoice_item").setAttribute("tabindex", tab6);
                document.getElementById("details").setAttribute("tabindex", tab7);
                document.getElementById("invoice_discount").setAttribute("tabindex", tab8);
                document.getElementById("shipping_cost").setAttribute("tabindex", tab9);    
                document.getElementById("paidAmount").setAttribute("tabindex", tab10);
                document.getElementById("full_paid_tab").setAttribute("tabindex", tab11);
                document.getElementById("add_invoice").setAttribute("tabindex", tab12);
                count++
    }
}
$('#email_send').click(function(){
      
      var data = {
        mailid:$('#email_info').val(),
        name_email:$('#name_email').val(),
        subject_email:$('#subject_email').val(),
        message_email:$('#message_email').val()
      };
      data[csrfName] = csrfHash;
  
      $.ajax({
          type:'POST',
          data: data, 
         dataType:"json",
          url:'<?php echo base_url();?>Cinvoice/sendmail',
          success: function(result, statut) {
              if(result.csrfName){
                 csrfName = result.csrfName;
                 csrfHash = result.csrfHash;
              }
              console.log(result);
            // $('#date1').val(result);
         }
      });
  });


</script>

<script>
function refreshPage(){
    window.location.reload();
} 

// function refresh(){
//     window.location.href = "<?php echo base_url('Cinvoice/manage_invoice'); ?>";

// }
</script>


<script type="text/javascript">
$(document).ready(function () {
    $("#add_purchase").click(function () {
        $("#save_another").toggle();
    });
});

$(document).ready(function () {
    $("#add_purchase").click(function () {
        $("#download").toggle();
    });
});

</script>




<script type="text/javascript">
    $(window).load(function() {
  $("html, body").animate({ scrollTop: $(document).height() }, 2000);
});
</script>



