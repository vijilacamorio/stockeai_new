<?php
$CI = & get_instance();
$CI->load->model('Web_settings');
$Web_settings = $CI->Web_settings->retrieve_setting_editdata();
?>


   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

   
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
       
    </section>
    <!-- Main content -->
    <div class="" id="content">
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
      <!-- <table id="tab"> -->

      <div class="container">
<?php
  $myArray = explode('(',$tax); 
  $tax_amt=$myArray[0];
  if($myArray[1] !==''){
  $tax_des=$myArray[1];
  }
      //////////////Design one/////////////  
            if($template==1)
            {
            ?>
           <div class="brand-section">
        <div class="row" >
     
   
    
    <div class="col-sm-4" style="color:white;font-weight:bold;" id='company_info'>
           
          <b> <?php echo display('Company name') ?> : </b><?php echo $cname; ?><br>
          <b>   <?php echo display('Address') ?> : </b><?php echo $address; ?><br>
          <b>   <?php echo display('Email') ?> : </b><?php echo $email; ?><br>
          <b>   <?php echo display('Contact') ?> : </b><?php echo $phone; ?><br>
       </div>
       <?php if(empty($header)){ ?>
  <div class="col-sm-6 text-center" style="color:white;"><h3><?php echo "TRUCKING"; ?></h3></div>
 <?php } 
else
{  ?>
  <div class="col-sm-6 text-center" style="color:white;"><h3><?php echo $header; ?></h3></div>
<?php } ?>


  
  
  
  
  
       <div class="col-sm-4" style="text-align:center;"><img src="<?php echo  base_url().$logo; ?>" style='width: 50%;'>
        
        </div>
 </div>
        </div>
     
                <div class="body-section">
            <div class="row">

         
  <div class="col-6">
                    <table id="one" >
<tr><td  class="key"> <?php echo display('Invoice No') ?></td><td style="width:10px;">:</td><td calss="value"><?php echo$invoice_no;  ?></td></tr>
<tr><td  class="key"><?php echo display('Customer Name') ?></td><td style="width:10px;">:</td><td calss="value"><?php echo  $customer_name; ?></td></tr>
<tr><td  class="key"><?php echo display('Container / Goods Pick up date') ?></td><td style="width:10px;">:</td><td calss="value">{container_pickup_date}</td></tr>
<tr><td  class="key"><?php echo display('Delivery to') ?></td><td style="width:10px;">:</td><td calss="value"><?php echo  $delivery_to; ?></td></tr>
<tr><td  class="key"><?php echo display('Truck No') ?></td><td style="width:10px;">:</td><td calss="value"><?php echo  $truck_no; ?></td></tr>
</table>

</div>
<div class="col-6">
<table id="two">
<tr><td  class="key"><?php echo display('Invoice Date') ?></td><td style="width:10px;">:</td><td calss="value"><?php echo $invoice_date;  ?></td></tr>
<tr><td  class="key"><?php echo display('Shipment company') ?></td><td style="width:10px;">:</td><td calss="value"><?= $shipment_company; ?></td></tr>
<tr><td  class="key"><?php echo display('Delivery Time') ?></td><td style="width:10px;">:</td><td calss="value"><?php echo "<span style='font-weight:bold'>From :</span>".$delivery_time_from."<span style='font-weight:bold'> To :</span>".$delivery_time_to; ?></td></tr>
<tr><td  class="key"><?php echo display('Delivery Date') ?></td><td style="width:10px;">:</td><td calss="value">{delivery_date}</td></tr>

</table>
               

            </div>

          
              
       
    </div>
        </div>

        <div class="body-section">
            <table class="table-bordered">
                <thead>
                    <tr>

                        <th data-column-id="id" class="ID"   style="width:100px;" ><?php echo display('S.No') ?></th>
                        <th class="text-center"><?php echo display('Date') ?></th>
                        <th class="text-center"><?php echo display('Quantity') ?></th>
                        <th class="text-center"><?php echo display('Description') ?></th>
                        <th class="text-center"><?php echo display('Rate') ?></th>
                        <th class="text-center"><?php echo display('Pro No / Reference') ?></th>
                        <th class="text-center"><?php echo display('Total') ?></th>
                    </tr>
                </thead>




                    <tbody>
                <?php
                                    if ($purchase_all_data) {
                               $count=1;
                                   for($i=0;$i<sizeof($purchase_all_data);$i++){ ?>
              
                    <tr>
                    <td style="font-size: 15px;"><?php echo $count; ?></td>
                        <td style="font-size: 15px;"><?php  echo $purchase_all_data[$i]['trucking_date']; ?></td>
                         <td style="font-size: 15px;"><?php echo $purchase_all_data[$i]['qty']; ?></td>

                         <td style="font-size: 15px;"><?php echo $purchase_all_data[$i]['description']; ?></td>

                       


                         <td style="font-size: 15px;"><?php  echo $currency." " ; ?><?php echo $purchase_all_data[$i]['rate']; ?></td>
                         <td style="font-size: 15px;"><?php echo $purchase_all_data[$i]['pro_no_reference']; ?></td>

                         <td style="font-size: 15px;"><?php  echo $currency." " ; ?><?php  echo $purchase_all_data[$i]['total']; ?></td> 
                    </tr>
                    <?php $count++;}} ?>
                    </tbody>
                                   
                    <tbody>
                <?php ?>
                             
                <tfoot>
                    <tr>
                        <td colspan="6" style="text-align:right;font-weight:bold;"><?php echo display('Total') ?>:</td>
                        <td style="font-size: 16px;"><?php  echo $currency." " ; ?><?php echo $total_amt;  ?></td>
                    </tr>
                    <tr>
                       
                       <td colspan="6" style="text-align:right;font-weight:bold;"><?php echo  "Tax (".$tax_des;  ?></td>
                              <td style="font-size: 16px;"><?php  echo $currency." " ; ?><?php echo $tax_amt;  ?></td>
                          </tr>
                       <tr>
                    <tr>
                        <td colspan="6" style="text-align:right;font-weight:bold;"><?php echo display('Grand Total') ?>:</td>
                        <td style="font-size: 16px;"><?php  echo $currency." " ; ?><?php echo $grandtotal;  ?></td>
                    </tr>
                    <tr>
                        <td colspan="6" style="text-align:right;font-weight:bold;"><?php echo display('Grand Total') ?><?php echo display('Preferred Currency') ?>:</td>
                        <td style="font-size: 16px;"><?php echo $customer_currency." ".$purchase_all_data[0]['customer_gtotal'];  ?></td>
                    </tr>
                    <tr>
                    <td style="text-align:right;"  colspan="6"><b><?php echo display('Amount Paid') ?>:</b></td>
                        <td style="font-size: 16px;"> <?php echo $customer_currency." ".$purchase_all_data[0]['amt_paid'] ;?></td>
                    </tr>
                    <tr>
                    <td style="text-align:right;"  colspan="6"><b><?php echo display('Balance') ?>:</b></td>
                        <td style="font-size: 16px;"> <?php echo $customer_currency." ".$purchase_all_data[0]['balance'] ;?></td>
                    </tr>
                    </tfoot>
            </table>
            <br>

                       <h4><?php echo display('Remarks') ?> : </h4> <?php echo $remarks;  ?> <br/><br/> 
            
        </div>
<?php 
 } 
 elseif($template==2)
{
    ?>   <div class="brand-section">
     <div class="row">
 
   
   <div class="col-sm-2"><img src="<?php echo  base_url().$logo; ?>" style='width: 100%;'> 
      
     </div>



       <?php if(empty($header)){ ?>
  <div class="col-sm-6 text-center" style="color:white;"><h3><?php echo "TRUCKING"; ?></h3></div>
 <?php } 
else
{  ?>
  <div class="col-sm-6 text-center" style="color:white;"><h3><?php echo $header; ?></h3></div>
<?php } ?>





<div class="col-sm-4" id='company_info' style="color:white;">
         
  <b> <?php echo display('Company name') ?> : </b><?php echo $cname; ?><br>
          <b>   <?php echo display('Address') ?> : </b><?php echo $address; ?><br>
          <b>   <?php echo display('Email') ?> : </b><?php echo $email; ?><br>
          <b>   <?php echo display('Contact') ?> : </b><?php echo $phone; ?><br>
     </div>
</div>
     </div>
            
     <div class="body-section">
            <div class="row">

           <div class="col-6">
                    <table id="one" >
                    <tr><td  class="key"> <?php echo display('Invoice No') ?></td><td style="width:10px;">:</td><td calss="value"><?php echo$invoice_no;  ?></td></tr>
<tr><td  class="key"><?php echo display('Customer Name') ?></td><td style="width:10px;">:</td><td calss="value"><?php echo  $customer_name; ?></td></tr>
<tr><td  class="key"><?php echo display('Container / Goods Pick up date') ?></td><td style="width:10px;">:</td><td calss="value">{container_pickup_date}</td></tr>
<tr><td  class="key"><?php echo display('Delivery to') ?></td><td style="width:10px;">:</td><td calss="value"><?php echo  $delivery_to; ?></td></tr>
<tr><td  class="key"><?php echo display('Truck No') ?></td><td style="width:10px;">:</td><td calss="value"><?php echo  $truck_no; ?></td></tr>
</table>

</div>
<div class="col-6">
<table id="two">
<tr><td  class="key"><?php echo display('Invoice Date') ?></td><td style="width:10px;">:</td><td calss="value"><?php echo $invoice_date;  ?></td></tr>
<tr><td  class="key"><?php echo display('Shipment company') ?></td><td style="width:10px;">:</td><td calss="value"><?= $shipment_company; ?></td></tr>
<tr><td  class="key"><?php echo display('Delivery Time') ?></td><td style="width:10px;">:</td><td calss="value"><?php echo "<span style='font-weight:bold'>From :</span>".$delivery_time_from."<span style='font-weight:bold'> To :</span>".$delivery_time_to; ?></td></tr>
<tr><td  class="key"><?php echo display('Delivery Date') ?></td><td style="width:10px;">:</td><td calss="value">{delivery_date}</td></tr>



</table>
               

            </div>
              
       
    </div>
        </div>

        <div class="body-section">
            <table class="table-bordered">
                <thead>
                    <tr>
                    <th data-column-id="id" class="ID"   style="width:100px;" ><?php echo display('S.No') ?></th>
                        <th class="text-center"><?php echo display('Date') ?></th>
                        <th class="text-center"><?php echo display('Quantity') ?></th>
                        <th class="text-center"><?php echo display('Description') ?></th>
                        <th class="text-center"><?php echo display('Rate') ?></th>
                        <th class="text-center"><?php echo display('Pro No / Reference') ?></th>
                        <th class="text-center"><?php echo display('Total') ?></th>
                    </tr>
                </thead>




                    <tbody>
                <?php
                                    if ($purchase_all_data) {
                               $count=1;
                                   for($i=0;$i<sizeof($purchase_all_data);$i++){ ?>
                    <tr>
                        
                         <td style="font-size: 15px;"><?php echo $count; ?></td>

                         <td style="font-size: 15px;"><?php  echo $purchase_all_data[$i]['trucking_date']; ?></td>
                         <td style="font-size: 15px;"><?php echo $purchase_all_data[$i]['qty']; ?></td>
                         <td style="font-size: 15px;"><?php echo $purchase_all_data[$i]['description']; ?></td>
                         <td style="font-size: 15px;"><?php  echo $currency." " ; ?><?php echo $purchase_all_data[$i]['rate']; ?></td>
                         <td style="font-size: 15px;"><?php echo $purchase_all_data[$i]['pro_no_reference']; ?></td>
                         <td style="font-size: 15px;"><?php  echo $currency." " ; ?><?php  echo $purchase_all_data[$i]['total']; ?></td> 
                    </tr>
                    <?php $count++;}} ?>
                    </tbody>
                                   
                    <tbody>
                <?php ?>
                             
                <tfoot>
                    <tr>
                    <td colspan="6" style="text-align:right;font-weight:bold;"><?php echo display('Total') ?>:</td>
                        <td style="font-size: 16px;"><?php  echo $currency." " ; ?><?php echo $total_amt;  ?></td>
                    </tr>
                    <tr>
                       
                       <td colspan="6" style="text-align:right;font-weight:bold;"><?php echo  "Tax (".$tax_des;  ?></td>
                              <td style="font-size: 16px;"><?php  echo $currency." " ; ?><?php echo $tax_amt;  ?></td>
                          </tr>
                       <tr>
                    <tr>
                        <td colspan="6" style="text-align:right;font-weight:bold;"><?php echo display('Grand Total') ?>:</td>
                        <td style="font-size: 16px;"><?php  echo $currency." " ; ?><?php echo $grandtotal;  ?></td>
                    </tr>
                    <tr>
                        <td colspan="6" style="text-align:right;font-weight:bold;"><?php echo display('Grand Total') ?><?php echo display('Preferred Currency') ?>:</td>
                        <td style="font-size: 16px;"><?php echo $customer_currency." ".$purchase_all_data[0]['customer_gtotal'];  ?></td>
                    </tr>
                    <tr>
                    <td style="text-align:right;"  colspan="6"><b><?php echo display('Amount Paid') ?>:</b></td>
                        <td style="font-size: 16px;"> <?php echo $customer_currency." ".$purchase_all_data[0]['amt_paid'] ;?></td>
                    </tr>
                    <tr>
                    <td style="text-align:right;"  colspan="6"><b><?php echo display('Balance') ?>:</b></td>
                        <td style="font-size: 16px;"> <?php echo $customer_currency." ".$purchase_all_data[0]['balance'] ;?></td>
                    </tr>
                    </tfoot>
            </table>
            <br>

                       <h4><?php echo display('Remarks') ?> : </h4> <?php echo $remarks;  ?> <br/><br/> 
         </div>
         <?php 

}
elseif($template==3)
{
    ?>  
          
  <div class="brand-section">
<div class="row">
       


<?php if(empty($header)){ ?>
  <div class="col-sm-2 text-center" style="color:white;"><h3><?php echo "TRUCKING"; ?></h3></div>
 <?php } 
else
{  ?>
  <div class="col-sm-2 text-center" style="color:white;"><h3><?php echo $header; ?></h3></div>
<?php } ?>


<div class="col-sm-4"><img src="<?php echo  base_url().$logo; ?>"   style='width: 30%;float:right;'  /></div>



<div class="col-sm-6" style="color:white;font-weight:bold ;text-align: end;">
   
<b>  <?php echo display('Company name') ?> : </b><?php echo $cname; ?><br>
  <b>   <?php echo display('Address') ?> : </b><?php echo $address; ?><br>
  <b>   <?php echo display('Email') ?> : </b><?php echo $email; ?><br>
  <b>   <?php echo display('Contact') ?> : </b><?php echo $phone; ?><br>
</div>














            </div></div>
              <div class="row"> <div class="col-sm-12 ">&nbsp;</div></div>
           <div class="row">

            <div class="col-6">
                    <table id="one" >
                    <tr><td  class="key"> <?php echo display('Invoice No') ?></td><td style="width:10px;">:</td><td calss="value"><?php echo$invoice_no;  ?></td></tr>
<tr><td  class="key"><?php echo display('Customer Name') ?></td><td style="width:10px;">:</td><td calss="value"><?php echo  $customer_name; ?></td></tr>
<tr><td  class="key"><?php echo display('Container / Goods Pick up date') ?></td><td style="width:10px;">:</td><td calss="value">{container_pickup_date}</td></tr>
<tr><td  class="key"><?php echo display('Delivery to') ?></td><td style="width:10px;">:</td><td calss="value"><?php echo  $delivery_to; ?></td></tr>
<tr><td  class="key"><?php echo display('Truck No') ?></td><td style="width:10px;">:</td><td calss="value"><?php echo  $truck_no; ?></td></tr>
</table>

</div>
<div class="col-6">
<table id="two">
<tr><td  class="key"><?php echo display('Invoice Date') ?></td><td style="width:10px;">:</td><td calss="value"><?php echo $invoice_date;  ?></td></tr>
<tr><td  class="key"><?php echo display('Shipment company') ?></td><td style="width:10px;">:</td><td calss="value"><?= $shipment_company; ?></td></tr>
<tr><td  class="key"><?php echo display('Delivery Time') ?></td><td style="width:10px;">:</td><td calss="value"><?php echo "<span style='font-weight:bold'>From :</span>".$delivery_time_from."<span style='font-weight:bold'> To :</span>".$delivery_time_to; ?></td></tr>
<tr><td  class="key"><?php echo display('Delivery Date') ?></td><td style="width:10px;">:</td><td calss="value">{delivery_date}</td></tr>

</table>
               

            </div>
             
      
   </div>
       </div>

       <div class="body-section">
           <table class="table-bordered">
               <thead>
                   <tr>
                   <th data-column-id="id" class="ID"   style="width:100px;" ><?php echo display('S.No') ?></th>
                        <th class="text-center"><?php echo display('Date') ?></th>
                        <th class="text-center"><?php echo display('Quantity') ?></th>
                        <th class="text-center"><?php echo display('Description') ?></th>
                        <th class="text-center"><?php echo display('Rate') ?></th>
                        <th class="text-center"><?php echo display('Pro No / Reference') ?></th>
                        <th class="text-center"><?php echo display('Total') ?></th>
                   </tr>
               </thead>




                   <tbody>
               <?php
                                   if ($purchase_all_data) {
                              $count=1;
                                  for($i=0;$i<sizeof($purchase_all_data);$i++){ ?>
                   <tr>
                        
                   <td style="font-size: 15px;"><?php echo $count; ?></td>

                       <td style="font-size: 15px;"><?php  echo $purchase_all_data[$i]['trucking_date']; ?></td>
                        <td style="font-size: 15px;"><?php echo $purchase_all_data[$i]['qty']; ?></td>
                        <td style="font-size: 15px;"><?php echo $purchase_all_data[$i]['description']; ?></td>

                        <td style="font-size: 15px;"><?php  echo $currency." " ; ?><?php echo $purchase_all_data[$i]['rate']; ?></td>
                        <td style="font-size: 15px;"><?php echo $purchase_all_data[$i]['pro_no_reference']; ?></td>
                        <td style="font-size: 15px;"><?php  echo $currency." " ; ?><?php  echo $purchase_all_data[$i]['total']; ?></td> 
                   </tr>
                   <?php $count++;}} ?>
                   </tbody>
                                  
                   <tbody>
               <?php ?>
                            
               <tfoot>
                   <tr>
                   <td colspan="6" style="text-align:right;font-weight:bold;"><?php echo display('Total') ?>:</td>
                        <td style="font-size: 16px;"><?php  echo $currency." " ; ?><?php echo $total_amt;  ?></td>
                    </tr>
                    <tr>
                       
                       <td colspan="6" style="text-align:right;font-weight:bold;"><?php echo  "Tax (".$tax_des;  ?></td>
                              <td style="font-size: 16px;"><?php  echo $currency." " ; ?><?php echo $tax_amt;  ?></td>
                          </tr>
                       <tr>
                    <tr>
                        <td colspan="6" style="text-align:right;font-weight:bold;"><?php echo display('Grand Total') ?>:</td>
                        <td style="font-size: 16px;"><?php  echo $currency." " ; ?><?php echo $grandtotal;  ?></td>
                    </tr>
                    <tr>
                        <td colspan="6" style="text-align:right;font-weight:bold;"><?php echo display('Grand Total') ?><?php echo display('Preferred Currency') ?>:</td>
                        <td style="font-size: 16px;"><?php echo $customer_currency." ".$purchase_all_data[0]['customer_gtotal'];  ?></td>
                    </tr>
                    <tr>
                    <td style="text-align:right;"  colspan="6"><b><?php echo display('Amount Paid') ?>:</b></td>
                        <td style="font-size: 16px;"> <?php echo $customer_currency." ".$purchase_all_data[0]['amt_paid'] ;?></td>
                    </tr>
                    <tr>
                    <td style="text-align:right;"  colspan="6"><b><?php echo display('Balance') ?>:</b></td>
                        <td style="font-size: 16px;"> <?php echo $customer_currency." ".$purchase_all_data[0]['balance'] ;?></td>
                    </tr>
                    </tfoot>
            </table>
            <br>

                       <h4><?php echo display('Remarks') ?> : </h4> <?php echo $remarks;  ?> <br/><br/> 
        </div>
        <?php 



}


 ?>
    </div> 
    </section> 
</div>  
       
        </div>
        <div class="modal fade" id="myModal_strucking" role="dialog" >
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content" style="width: 500px;height:100px;text-align:center;margin-bottom: 300px;">
        <div class="modal-header" style="">
      
          <h4 class="modal-title"><?php echo display('Sales - Trucking') ?></h4>
        </div>
        <div class="content">

        <div class="modal-body" style="text-align:center;font-weight:bold;">
          
          <h4><?php echo display('Trucking Invoice Downloaded Successfully') ?></h4>
     
        </div>
        <div class="modal-footer">
        </div>
        </div>
      </div>
      
    </div>
  </div>

             <style>
.key{
    text-align:left;
font-weight:bold;

}
.value{
    text-align:left;
}
#one,#two{
float:left;
width:100%;
}
body{
    background-color: #fcf8f8; 
    margin: 0;
    padding: 0;
}
h1,h2,h3,h4,h5,h6{
    margin: 0;
    padding: 0;
}
p{
    margin: 0;
    padding: 0;
}
.heading_name{
    font-weight: bold;
}
.container{
    width: 100%;
    margin-right: auto;
    margin-left: auto;
    margin-top: 50px;
}
.brand-section{
   background-color: #5961b3;
   padding: 10px 40px;
}
.logo{
    width: 50%;
}

.row{
    display: flex;
    flex-wrap: wrap;
    
}
.col-6{
    width: 50%;
    flex: 0 0 auto;
   
}
.text-white{
    color: #fff;
}
.company-details{
    float: right;
    text-align: right;
}

.body-section{
    padding: 16px;
    border: 1px solid gray;
    
}
th{
    font-size: 15px;
    font-weight:bold;
}
.heading{
    font-size: 20px;
    margin-bottom: 08px;
}
.sub-heading{
    color: #262626;
    margin-bottom: 05px;
}
table{
    padding"10px;
   font-size:15px;
    /*background-color: #fff;*/
    width: 100%;
    border-collapse: collapse;
   
}

table thead tr{
    border: 1px solid #111;
    background-color: #5961b3;
   
}
.table-bordered td{
    text-align:center;
}
table td {
    vertical-align: middle !important;
  
    word-wrap: break-word;
}
th{
    text-align:center;
    color:white;
}
table th, table td {
    padding-top: 08px;
    padding-bottom: 08px;
}
.table-bordered{
    box-shadow: 0px 0px 5px 0.5px gray !important;
}
.table-bordered td, .table-bordered th {
    border: 1px solid black !important;
}
.text-right{
    text-align: right;
}
.w-20{
    width: 20%;
}
.float-right{
    float: right;
}
@media only screen and (max-width: 600px) {
    
}
.modal {
  position: fixed;
  top: 0;
  left: 0;
  display: flex;
  width: 100%;
  height: 100vh;
  justify-content: center;
  align-items: center;
  opacity: 0;
  visibility: hidden;
}

.modal .content {
  position: relative;
  padding: 10px;
 
  border-radius: 8px;
  background-color: #fff;
  box-shadow: rgba(112, 128, 175, 0.2) 0px 16px 24px 0px;
  transform: scale(0);
  transition: transform 300ms cubic-bezier(0.57, 0.21, 0.69, 1.25);
}

.modal .close {
  position: absolute;
  top: 5px;
  right: 5px;
  width: 30px;
  height: 30px;
  cursor: pointer;
  border-radius: 8px;
  background-color: #7080af;
  clip-path: polygon(0 10%, 10% 0, 50% 40%, 89% 0, 100% 10%, 60% 50%, 100% 90%, 90% 100%, 50% 60%, 10% 100%, 0 89%, 40% 50%);
}

.modal.open {
    background-color:#38469f;
  opacity: 1;
  visibility: visible;
}
.modal.open .content {
  transform: scale(1);
}
.content-wrapper.blur {
  filter: blur(5px);
}
.content {
   min-height: 0px;
}
    @media only print {
      
   
        .content-header{
             display:none;
        }
 
        footer, header, .sidebar {
            display:none;
        }
    }
@page {
    size: auto;
    size: A3;
    margin: 0mm;
}
   #content{display:none;} 
    @media print 
{ 

#content{display:block;} 
}      


</style>

<div class="modal fade" id="myModal_sale" role="dialog" >
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content" style="width: 500px;height:100px;text-align:center;margin-bottom: 300px;">
        <div class="modal-header" style="">
      
          <h4 class="modal-title"><?php echo display('New Sale') ?></h4>
        </div>
        <div class="content">

        <div class="modal-body" style="text-align:center;font-weight:bold;">
          
          <h4><?php echo display('New Sale Downloaded Successfully') ?></h4>
     
        </div>
        <div class="modal-footer">
        </div>
        </div>
      </div>
      
    </div>
  </div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>


 <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.0.272/jspdf.debug.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>
<script>


$(document).ready(function () {
printDiv('content')
});
function printDiv(elementId) {
    var a = document.getElementById('content').value;
    var b = document.getElementById(elementId).innerHTML;
    window.frames["print_frame"].document.title = document.title;
    window.frames["print_frame"].document.body.innerHTML = '<style> .key{ text-align:left; font-weight:bold;  }, .value{ text-align:left; }, #one,#two{ float:left; width:100%; }, body{ background-color: #fcf8f8; margin: 0; padding: 0; }, h1,h2,h3,h4,h5,h6{ margin: 0; padding: 0; }, p{ margin: 0; padding: 0; }, .heading_name{ font-weight: bold; }, .container{ width: 100%; margin-right: auto; margin-left: auto; margin-top: 50px; }, .brand-section{ background-color: #5961b3; padding: 10px 40px; }, .logo{ width: 50%; },  .row{ display: flex; flex-wrap: wrap;  }, .col-6{ width: 50%; flex: 0 0 auto;  }, .text-white{ color: #fff; }, .company-details{ float: right; text-align: right; },  .body-section{ padding: 16px; border: 1px solid gray;  }, .heading{ font-size: 20px; margin-bottom: 08px; }, .sub-heading{ color: #262626; margin-bottom: 05px; }, table{  background-color: #fff; width: 100%; border-collapse: collapse;  },  table thead tr{ border: 1px solid #111; background-color: #5961b3;  }, .table-bordered td{ text-align:center; }, table td { vertical-align: middle !important;  word-wrap: break-word; }, th{  }, table th, table td { padding-top: 08px; padding-bottom: 08px; }, .table-bordered{ box-shadow: 0px 0px 5px 0.5px gray !important; }, .table-bordered td, .table-bordered th { border: 1px solid #dee2e6 !important; }, .text-right{ text-align: right; }, .w-20{ width: 20%; }, .float-right{ float: right; }, @media only screen and (max-width: 600px) {  }, .modal { position: fixed; top: 0; left: 0; display: flex; width: 100%; height: 100vh; justify-content: center; align-items: center; opacity: 0; visibility: hidden; },  .modal .content { position: relative; padding: 10px;  border-radius: 8px; background-color: #fff; box-shadow: rgba(112, 128, 175, 0.2) 0px 16px 24px 0px; transform: scale(0); transition: transform 300ms cubic-bezier(0.57, 0.21, 0.69, 1.25); },  .modal .close { position: absolute; top: 5px; right: 5px; width: 30px; height: 30px; cursor: pointer; border-radius: 8px; background-color: #7080af; clip-path: polygon(0 10%, 10% 0, 50% 40%, 89% 0, 100% 10%, 60% 50%, 100% 90%, 90% 100%, 50% 60%, 10% 100%, 0 89%, 40% 50%); },  .modal.open { background-color:#38469f; opacity: 1; visibility: visible; }, .modal.open .content { transform: scale(1); }, .content-wrapper.blur { filter: blur(5px); }, .content { min-height: 0px; }</style>' + b;
    window.frames["print_frame"].window.focus();
    window.frames["print_frame"].window.print();
}
   </script>



