
<style>

.btnclr{
       background-color:<?php echo $setting_detail[0]['button_color']; ?>;
       color: white;

   }

   #pagesControllers{
   padding:20px;
   }
   .select2{
   display:none;
   }
   table {
   border-collapse: collapse;
   width: 100%;
   margin-bottom: 20px;
   }
   /* Style the table header */
   thead {
   background-color: #333;
   color: #fff;
   text-align: center;
   }
   thead th {
   padding: 10px;
   border: 1px solid #000;
   }
   /* Style the table rows */
   /* tbody tr:nth-child(even) {
   background-color: #f2f2f2;
   }
   tbody tr:hover {
   background-color: #ddd;
   } */
   tbody td {
   padding: 10px;
   border: 1px solid #000;
   text-align: center !important;
   }
   th{
   text-align:center !important;
   padding:10px !important;
   }
   .table1 td , .table1 tr{
   text-align:center;
   border:none !important;
   }

     
   .logo-9 i{
    font-size:80px;
    position:absolute;
    z-index:0;
    text-align:center;
    width:100%;
    left:0;
    top:-10px;
    color:#34495e;
    -webkit-animation:ring 2s ease infinite;
    animation:ring 2s ease infinite;
}
.logo-9 h1{
    font-family: 'Lora', serif;
    font-weight:600;
    text-transform:uppercase;
    font-size:40px;
    position:relative;
    z-index:1;
    color:#e74c3c;
    text-shadow: 3px 3px 0 #fff, -3px -3px 0 #fff, 3px -3px 0 #fff, -3px 3px 0 #fff;
}
   
   
  
   .logo-9{
    position:relative;
} 
   
   /*//side*/
   
.bar {
  float: left;
  width: 25px;
  height: 3px;
  border-radius: 4px;
  background-color: #4b9cdb;
}


.load-10 .bar {
  animation: loadingJ 2s cubic-bezier(0.17, 0.37, 0.43, 0.67) infinite;
}


@keyframes loadingJ {
  0%,
  100% {
    transform: translate(0, 0);
  }

  50% {
    transform: translate(80px, 0);
    background-color: #f5634a;
    width: 150px;
  }

   
}
</style>
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>my-assets/css/balance_sheet.css" />
<div class="content-wrapper">
   <section class="content-header" style='height:70px;'>
      <div class="header-icon">
 
         <figure class="one">
            <img src="<?php echo base_url()  ?>asset/images/productreport.png"  class="headshotphoto" style="height:50px;" />
      </div>

        <div class="header-title">
            <div class="logo-holder logo-9">
            <h1><?php echo "Transaction By Vendor"; ?></h1>
        </div>

        <small><?php echo ""; ?></small>
        <ol class="breadcrumb"   style=" border: 3px solid #d7d4d6;"   >

            <li><a href="<?php echo base_url(); ?>"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
            <li><a href="#"><?php echo "Reports"; ?></a></li>
            <li class="active" style="color:orange;"><?php echo "Transaction By Vendor"; ?></li>
        
            <div class="load-wrapp">
                <div class="load-10">
                    <div class="bar"></div>
                </div>
            </div>
        </ol>
    </section>
</div>
   
   <section class="content">
     
      <?php  
         $commercial_invoice_number  = array();
        foreach ($supplier_info as $invoice) {
        $commercial_invoice_number [] = $invoice['supplier_name'];
        }
        $unique_commercial_invoice_number = array_unique($commercial_invoice_number);
         ?>
      <div class="row">
         <div class="col-sm-12">
            <div class="panel panel-bd lobidrag" style='height:70px;  border: 3px solid #d7d4d6; ' >
                <div class='col-sm-8'>
               <div class="panel-body" >
                  <!-- <div  style="display: inline-block; vertical-align: middle;"> -->
                  <table class="table1 table-bordered" style='border:none;margin-top: -10px;' cellspacing="0" width="100%"  style='border:none;'>
                     <tr style="text-align: center; font-weight: bold;" class="filters">
                        <td style="width: 100px;"> </td>
                        <td style="width: 100px;">Supplier Name </td>
                        <td style="width: 100px;">
                           <select id="customer-name-filter" style="width: 100%;" class="form-control">
                              <option value="Any">Any</option>
                              <?php
                                 // Use PHP to populate the options dynamically
                                 foreach ($unique_commercial_invoice_number as $invoice) {
                                     echo '<option value="' . $invoice . '">' . $invoice . '</option>';
                                 }
                                 ?>
                           </select>
                        </td>
                        <td style="width: 50px;text-align:end;">Date</td>
                        <td class="search_dropdown" style="width: 100px; color: black; padding: 5px;">
                           <select id="payment-filter" style="width: 100px;" class="form-control">
                              <option value="Any">Any</option>
                              <option value="Custom">Custom</option>
                           </select>
                        </td>
                        <td class="search_dropdown" style="width: 15%; color: black; padding: 5px;">
                           <div id="datepicker-container">
                              <input type="text" class="form-control daterangepicker-field" id="daterangepicker-field" name="daterangepicker-field" style="width: 180px; border-radius: 8px; height: 35px;" />
                           </div>
                        </td>
                        <td style="width: 20px; padding: 5px;">
                           <input type="submit" id="search" name="btnSave" class="btn btnclr" style="margin-top: -12px;" value="Search" />
                        </td>
                        <td style="width: 100px;"></td>
                     </tr>
                  </table>
                   </div> 
               </div>
                <div class='col-sm-2' style='margin-top: 20px;margin-left: 140px;text-align:end;'>
                    <div class="dropdown bootcol" id="drop" style="margin-top:-10px;width: 300px;">
                        <button class="btnclr btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            <span class="fa fa-download"></span> <?php echo display('download') ?>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                            <li><a href="#" onclick="generate()"><img src="<?php echo base_url() ?>assets/images/pdf.png" width="24px"> <?php echo display('PDF') ?></a></li>
                            <li class="divider"></li>
                            <li><a href="#" onclick="fnExcelReport()"><img src="<?php echo base_url() ?>assets/images/xls.png" width="24px"> <?php echo display('XLS') ?></a></li>
                        </ul>&nbsp;
                        <button type="button" class="btnclr btn btn-default dropdown-toggle" onclick="printDiv('printableArea')"><b class="ti-printer"></b>&nbsp;<?php echo display('print') ?></button>
                    </div>
                </div>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-sm-12 col-md-12">
            <div class="panel panel-bd lobidrag" id="printArea" style=" border: 3px solid #d7d4d6;" >
               <div class="panel-body">
                <div class="sortableTable__container">
                <div class="sortableTable__discard">
                </div>
                <div id='printableArea'>
                  <table class="table table-bordered"  id="ProfarmaInvList" cellspacing="0" width="100%">
                     <thead class="sortableTable">
                        <tr class="sortableTable__header btnclr">
                            <th width="5%">S. No</th>
                            <th width="11%">Supplier Name</th>
                            <th width="11%">Invoice Number</th>
                            <th width="11%">Payment ID</th>
                            <th width="11%">Payment Date</th>
                            <th width="11%">Total Amount</th>
                            <th width="10%">Amount Paid</th>
                            <th width="10%">Balance</th>
                            <th width="10%">Details</th>
                            <th width="10%">Status</th>
                        </tr>
                     </thead>
                     <tbody class="sortableTable__body">
                        <tr class="task-list-row">
                        <?php
                           // Check if $supplier contains data and if it's an array
                           if ($supplier_info) {
                               $previousSupplierName = null;
                               $previousInvoiceNumber = null;
                               $previousPaymentID = null;
                           
                               foreach ($supplier_info as $arr) {
                                   $status = '';
                           
                                   if ($arr['total_amt'] == $arr['amt_paid']) {
                                       $status = 'Paid';
                                   } else if ($arr['total_amt'] != $arr['amt_paid'] && $arr['amt_paid'] !== '0.00' && $arr['amt_paid'] !== '0' && substr($arr['due_amount'], 0, 1) !== '-') {
                                       $status = 'Partially Paid';
                                   } else if ($arr['total_amt'] != $arr['amt_paid'] && $arr['amt_paid'] == '0.00') {
                                       $status = 'Not Paid';
                                   } else if (substr($arr['balance'], 0, 1) == '-') {
                                       $status = 'Paid';
                                   }
                           
                                   // Display the "Supplier Name" only when it changes
                                
                                       echo '<td class="1 value" data-col="1">' . $arr['supplier_name'] . '</td>';
                                 
                                   // Display the "Invoice Number" only when it changes
                                 
                                       echo '<td class="2 value" data-col="2">' . $arr['chalan_no'] . '</td>';
                                     
                           
                                   // Display the "Payment ID" only when it changes
                              
                                       echo '<td class="3 value" data-col="3">' . $arr['payment_id'] . '</td>';
                                     
                           
                                   // Continue displaying the rest of the data
                                   echo '<td data-col="4" class="4 value" style="text-align:center;">' . $arr['payment_date'] . '</td>';
                                   echo '<td data-col="5" class="5 value" style="text-align:center;">' . $currency . number_format($arr['total_amt'] , 2); '</td>';
                                   echo '<td data-col="6" class="6 value" style="text-align:center; text-wrap: nowrap;">' . number_format($arr['amt_paid'] , 2); '</td>';
                                   echo '<td data-col="7" class="7 value" style="text-align:center;">' . $currency . number_format($arr['balance'] , 2);  '</td>';
                                   echo '<td data-col="8" class="8 value" style="text-align:center;">' . $currency . $arr['details'] . '</td>';
                                   echo '<td data-col="9" class="9 value" style="text-align:center;">' . $currency;
                                   if ($status == 'Paid') {
                                       echo '<span style="color: green; font-weight: bold;">' . $status . '</span>';
                                   } else if ($status == 'Partially Paid') {
                                       echo '<span style="color: #4E11A8; font-weight: bold;">' . $status . '</span>';
                                   } else if ($status == 'Not Paid') {
                                       echo '<span style="color: red; font-weight: bold;">' . $status . '</span>';
                                   }
                                   echo '</td>';
                                   echo '</tr>';
                           
                                   echo '</tr>';
                               }
                           } else {
                               // No records found
                               echo '<tr>';
                               echo '<td colspan="9" style="text-align:center; font-weight:bold;">No Records Found</td>';
                               echo '</tr>';
                           }
                           ?>
                           </tr>
                     </tbody>
                  </table>
                  </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <script>
        $(document).ready(function() {
            $(".btnclr").click(function() {
                $(this).siblings('.dropdown-menu').toggle();
            });
        });
   
      </script>
   </section>
</div>