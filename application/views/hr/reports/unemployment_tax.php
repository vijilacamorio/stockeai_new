<?php error_reporting(1);  ?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"/>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.base64.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/drag_drop_index_table.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/html2canvas.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/jspdf.plugin.autotable"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/jspdf.umd.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>my-assets/js/invoice_tableManager.js"></script>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap/3/css/bootstrap.css" />
<script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />
<script type="text/javascript" src="<?php echo base_url()?>my-assets/js/tableManager.js"></script>
<script type="text/javascript" src="https://unpkg.com/xlsx@0.15.1/dist/xlsx.full.min.js"></script>
<script type="text/javascript" src="http://mrrio.github.io/jsPDF/dist/jspdf.debug.js"></script>
<input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<script src="<?php echo base_url() ?>assets/js/dashboard.js" ></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet">
<link href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.2.2/css/bootstrap.min.css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="<?php echo base_url() ?>my-assets/css/style.css">
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript" src="http://www.bacubacu.com/colresizable/js/colResizable-1.5.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>my-assets/css/css.css" />
<input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>my-assets/css/css.css" />
<script type="text/javascript" src="http://www.bacubacu.com/colresizable/js/colResizable-1.5.min.js"></script>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap/3/css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>my-assets/css/css.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>my-assets/css/css.css" />
<input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
 <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap/3/css/bootstrap.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js" integrity="sha512-CryKbMe7sjSCDPl18jtJI5DR5jtkUWxPXWaLCst6QjH8wxDexfRJic2WRmRXmstr2Y8SxDDWuBO6CQC6IE4KTA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
<link href="<?php echo base_url() ?>assets/css/daterangepicker.css" rel="stylesheet">
<link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet">
<style>

.btnclr{
       background-color:<?php echo $setting_detail[0]['button_color']; ?>;
       color: white;

   }
.table td{
   text-align:center;
}

   .table{
   display: block;
   overflow-x: auto;
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
    width: 110px;
  }
}
</style>






<div class="content-wrapper">
   <section class="content-header">
      <div class="header-icon">
         <figure class="one">
               <img src="<?php echo base_url()  ?>asset/images/salesreport.png"  class="headshotphoto" style="height:50px;" />
      </div>
      
      
         
        
          <div class="header-title">
          <div class="logo-holder logo-9">
         <h1><?php echo 'Unemployment Tax' ?></h1>
       </div>
        
        
         <small><?php //echo display('user_wise_sale_report') ?></small>
         <ol class="breadcrumb"   style=" border: 3px solid #d7d4d6;"   >
            <li><a href="<?php echo base_url()?>"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
            <li><a href="#"><?php echo display('report') ?></a></li>
            <li class="active" style="color:orange"><?php echo 'Unemployment Tax';?></li>
       
        <div class="load-wrapp">
       <div class="load-10">
         <div class="bar"></div>
       </div>
       </div>
       
       
       
       
         </ol>
      </div>
   </section>
   
   
   
   
   
   
   
   
   
   <script></script>
   <section class="content">
      
      <div class="row">
         <div class="col-sm-12">
      
         </div>
      </div>
      <!-- Sales report -->
      <?php  
         $commercial_invoice_number  = array();
         foreach ($sale_datas as $invoice) {
         $commercial_invoice_number [] = $invoice['customer_name'];
         }
         $unique_commercial_invoice_number = array_unique($commercial_invoice_number);
         
         
         $container_no = array();
         foreach ($sale_datas as $invoice) {
         $container_no[] = $invoice['product_name'];
         }
         $unique_container_no = array_unique($container_no);
         
         
         $customer_name = array();
         foreach ($sale_datas as $invoice) {
         $customer_name[] = $invoice['payment_due_date'];
         }
         $unique_customer_name = array_unique($customer_name);
         
         
         $payment_terms = array();
         foreach ($sale_datas as $invoice) {
         $payment_terms[] = $invoice['details'];
         }
         $unique_payment_terms = array_unique($payment_terms);
         ?>
      <?php //echo form_open('Admin_dashboard/user_sales_report', array('class' => 'form-inline', 'method' => 'get')) ?>
      <div class="row">
      <div class="col-sm-16 col-md-14">
            <div class="panel panel-bd lobidrag" style='height:80px; border: 3px solid #d7d4d6;'>
                <div class='col-sm-8'>
                   <form id="fetch_tax" action="<?php echo base_url(); ?>Chrm/unemployment_tax_report" method="POST">
               <table class="table" align="center" style="overflow-x: unset;position: relative; left: 150px;">
                  <tr style='text-align:center;font-weight:bold;' class="filters">
                     <!-- <td style='width:200px;'></td> -->
                     <td class="search_dropdown" style="width: 15%; color: black;">
                      <input type="hidden" class="txt_csrfname" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>">
                        <span><?php echo 'Employee'; ?></span>
                        <select id="customer-name-filter" name="employee_name" class="form-control">
                           <option value="All">All</option>
                           <?php
                              foreach ($employee_data as $emp) {
                                $emp['first_name']=trim($emp['first_name']);
                                 $emp['last_name']=trim($emp['last_name']);
                              ?>
                           <option value="<?php echo $emp['first_name']." ".$emp['middle_name']." ".$emp['last_name']; ?>"><?php echo $emp['first_name']." ".$emp['middle_name']." ".$emp['last_name']; ?></option>
                           <?php } ?>
                        </select>
                     </td>
                     
                    
                    
                     <td class="search_dropdown" style="width: 15%; color: black; position: relative; top: 4px;">
                        <div id="datepicker-container">
                           <input type="text" class="form-control daterangepicker-field getdate_reults" id="daterangepicker-field" name="daterangepicker-field" style="margin-top: 15px;padding: 5px; width: 200px; border-radius: 8px; height: 35px;" />
                        </div>
                     </td>
                     <input type="hidden" class="getcurrency" value="<?php echo $currency; ?>">
                     <td style='float: left;width:30px; position: relative; top: 4px;'>
                        <input type="submit"  name="btnSave" class="btn btnclr" style='margin-top: 15px;' value='Search'/>
                     </td>
                  </tr>
               </table>
                            
            </div>
                <div class='col-sm-2'>
                  <div class="dropdown bootcol" id="drop" style="    width: 300px;">
                     <button class="btnclr btn btn-default dropdown-toggle" type="button"  style="margin-top: 20px;
    margin-left: 120px;float:left;" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                     <span class="fa fa-download"></span> <?php echo display('download') ?>
                     </button>
                     <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <li><a href="#" onclick="generate()"> <img src="<?php echo base_url() ?>assets/images/pdf.png" width="24px"> <?php echo display('PDF') ?></a></li>
                        <li class="divider"></li>
                        <li><a href="#" onclick="$('#ProfarmaInvList').tableExport({type:'excel',escape:'false'});"> <img src="<?php echo base_url() ?>assets/images/xls.png" width="24px"> <?php echo display('XLS') ?></a></li>
                     </ul>
                     &nbsp;                     &nbsp;
                     &nbsp;

                     <button type="button"   class="btnclr btn btn-default dropdown-toggle"  onclick="printDiv('printableArea')"><b class="ti-printer"></b>&nbsp;<?php echo display('print') ?></button>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <?php //echo form_close() ?>
      <!-- Manage Invoice report -->
      </form>



                <div class="row">
         <div class="col-sm-16 col-md-14">
            <div class="panel panel-bd lobidrag" id="printableArea"   style="border: 3px solid #d7d4d6;" >
               <div class="panel-body">
                   <div class="sortableTable__container">
                    <div class="sortableTable__discard">
                    </div>





                <div id='printableArea'>
         <?php  if($start){ ?>   <p style='text-align:center;font-weight:bold;'>FROM : <?php  echo $start;  ?>    TO : <?php echo $end;  ?></p>      <?php   }  ?>
               <table class="table table-bordered" cellspacing="0" width="100%" id="ProfarmaInvList">
                  <thead class="sortableTable">
                     <tr  class="sortableTable__header btnclr">
                        <th rowspan="2" class="1 value" data-col="1" style="height: 45.0114px; text-align:center; width: 300px;"><?php echo 'S.NO'?></th>
                        <th rowspan="2" class="2 value" data-col="2" style="text-align:center; width: 300px;"><?php echo 'Employee Name'?></th>
                           <th rowspan="2" class="2 value" data-col="2" style="text-align:center; width: 300px;"><?php echo 'Employee Tax'?></th>
                        <th rowspan="2" class="3 value" data-col="3" style="text-align:center; width: 300px;"><?php echo 'TimeSheet ID'?></th>
                   <th rowspan="2" class="3 value" data-col="3" style="text-align:center; width: 300px;"><?php echo 'Pay Period'?></th>
                        <th colspan="2" class="4 value" data-col="4" style="text-align:center;width: 200px;"><?php echo ('Unemployment Tax')?></th>

                       
                     </tr>
                     <tr class="btnclr">
                       <th class="4 value" data-col="4" style="text-align:center;width: 200px;"><?php echo ('Employee Contribution')?></th>
                        <th class="4 value" data-col="4" style="text-align:center;width: 200px;"><?php echo ('Employer Contribution')?></th>
                              </tr>
                  </thead>
                   <tbody class="sortableTable__body" id="tab">
<?php
$count = 1;
if (!empty($fed_tax)) {
    $index = 0; // Initialize index counter
    foreach ($fed_tax as $f_tax) {
        // Check if the index exists in $fed_tax_emplr
        $s_stax_emplr = isset($fed_tax_emplr[$index]['u_utax']) ? $fed_tax_emplr[$index]['u_utax'] : 0;
?>
        <tr>
            <td><?php echo $count; ?></td>
            <td><?php echo $f_tax['first_name'] . " " .$f_tax['middle_name']." ". $f_tax['last_name']; ?></td>
            <td><?php echo $f_tax['employee_tax']; ?></td>
            <td><?php echo $f_tax['timesheet_id']; ?></td>
            <td><?php echo $f_tax['month']; ?></td>
            <td><?php echo number_format($f_tax['u_utax'], 2); ?></td>
            <td><?php echo number_format($s_stax_emplr, 2) ?></td>
        </tr>
<?php
        $count++;
        $index++; // Increment index counter
    }
}
?>
                  </tbody>
                 <tfoot>
    <?php
    $employeeContributionTotal = 0;
    $employerContributionTotal = 0;
 $i=0;
  $index = 0;
    foreach($fed_tax as $f_tax) {
         $s_stax_emplr = isset($fed_tax_emplr[$index]['u_utax']) ? $fed_tax_emplr[$index]['u_utax'] : 0;
        $employeeContributionTotal += $f_tax['u_utax'];
        $employerContributionTotal += ($s_stax_emplr) ? $s_stax_emplr : 0;
        $i++;
        $index++;
    }
    ?>
    <tr class="btnclr">
      <td colspan="5"  style="text-align: end;" >Total </td>
        <td><?php echo number_format($employeeContributionTotal,2); ?></td>
        <td><?php echo number_format($employerContributionTotal,2); ?></td>
      
    </tr>
</tfoot>
               </table></div>
               </div>
   </section>
   </div>
   <input type="hidden" value="Sale/New Sale" id="url"/>
   <script src="<?php echo base_url()?>assets/js/jquery.bootgrid.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.0.0-alpha.1/jspdf.plugin.autotable.js"></script>
   <!--<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>-->
   <script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.js'></script>
   <script src='https://cdnjs.cloudflare.com/ajax/libs/knockout/3.4.0/knockout-debug.js'></script>
   <!--<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"></script>-->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.0.272/jspdf.debug.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>

   <!--<script type="text/javascript" src="<?php echo base_url()?>my-assets/js/profarma.js"></script>-->

   <script src="<?php echo base_url()?>assets/js/jquery.bootgrid.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.0.0-alpha.1/jspdf.plugin.autotable.js"></script>
   <!--<script type="text/javascript" src="<?php echo base_url()?>my-assets/js/profarma.js"></script>-->
   <!-- The Modal Column Switch -->
   <div id="myModal_colSwitch" class="modal_colSwitch" >
   <div class="modal-content_colSwitch" style="width:10%;height:25%;">
   <span class="close_colSwitch">&times;</span>
   <input type="checkbox"  data-control-column="1" checked = "checked" class="1"  value="1"/>Sl.No<br>
   <input type="checkbox"  data-control-column="2" checked = "checked" class="2"  value="2"/>User Name<br>
   <input type="checkbox"  data-control-column="3" checked = "checked" class="3"   value="3"/> Total Invoice<br>
   <input type="checkbox"  data-control-column="4" checked = "checked" class="4"   value="4"/>Total Amount<br>
   </div>
   </div>
   </div>
   </div>
</div>
</div>
<input type="hidden" id="total_invoice" value="<?php echo $total_invoice;?>" name="">
<input type="hidden" id="currency" value="{currency}" name="">
</div>
</div>
</section>
<input type ="hidden" name="csrf_test_name" id="csrf_test_name" value="<?php echo $this->security->get_csrf_hash();?>">
</div>
<!-- Manage Invoice End -->
<script type="text/javascript" src="<?php echo base_url()?>my-assets/js/profarma.js"></script>
<script>

// $('#fetch_tax').submit(function (event) {
//       event.preventDefault();
          
//       var dataString = {
//           dataString : $("#fetch_tax").serialize()
       
//       };
//       dataString[csrfName] = csrfHash;
     
//       $.ajax({
//           type:"POST",
//           dataType:"json",
//           url:"<?php echo base_url(); ?>Chrm/social_tax_report_search",
//           data:$("#fetch_tax").serialize(),
   
//           success:function (data) {
//              console.log(data);
//         // var dataArray = JSON.parse(data);
//         $("#ProfarmaInvList tbody").empty();
//         var i=1;
//          var totalSStax = 0;
//             var totalStx = 0;
//         data.forEach(function(item) {
//             console.log(item);
//           var status = "";
//           var uneditable = item.uneditable;
    
//           if (uneditable == '1') {
//              status = '<span style="color: green; font-weight: bold;">Generated</span>';
//           } else {
//              status = '<span style="color: #4E11A8; font-weight: bold;">Pending</span>';
//           } 
//       console.log(item, "item");
//                  var stx='';
//           if(item.stax){
// stx=item.utax;
//           }else{
//             stx=0;
//           }
//             totalSStax += parseFloat(item.u_tax);
//                 totalStx += parseFloat(stx);
//           var row = "<tr>";
//           row += "<td style='text-align: center;'>" + i + "</td>";
//           row += "<td style='text-align: center;'>" + item.first_name+" "+item.last_name + "</td>";
//             row += "<td style='text-align: center;'>" + item.employee_tax + "</td>";
//           row += "<td style='text-align: center;'>" + item.timesheet + "</td>";
//           row += "<td style='text-align: center;'>" + item.month + "</td>";
//           row += "<td style='text-align: center;'>" +item.u_tax + "</td>"; // Add currency symbol here
//           row += "<td style='text-align: center;'>" +  stx  + "</td>";
       
//           row += "<td style='text-align: center;'>" + status + "</td>";
//           row += "</tr>";

//           $("#ProfarmaInvList tbody").append(row);
//           i=i+1;
//         });
//          var footerRow = "<tr>";
//             footerRow += "<td colspan='5'></td>"; // Adjust colspan based on your table structure
//             footerRow += "<td>" + totalSStax.toFixed(2) + "</td>"; // Format the total as needed
//             footerRow += "<td>" + totalStx.toFixed(2) + "</td>"; // Format the total as needed
//             footerRow += "<td colspan='1'></td>"; // Adjust colspan based on your table structure
//             footerRow += "</tr>";

//             $("#ProfarmaInvList tfoot").html(footerRow);
//           }
   
//       });
//       event.preventDefault();
//   });
$(function() {
  // Check if the value of the start date is set
  var startDateValue = "<?php echo isset($start) ? $start : ''; ?>";

  // Initialize the date range picker with the start date value
  $(".daterangepicker-field").daterangepicker({
    dateFormat: 'mm/dd/yy', // Setting the desired date format
    startDate: startDateValue // Setting the start date value
  });
});
  var csrfName = '<?php echo $this->security->get_csrf_token_name();?>';
var csrfHash = '<?php echo $this->security->get_csrf_hash();?>';
$(function() {
  var start = moment().startOf('isoWeek'); // Start of the current week
  var end = moment().endOf('isoWeek'); // End of the current week
  var startOfLastWeek = moment().subtract(1, 'week').startOf('week');
  var endOfLastWeek = moment().subtract(1, 'week').endOf('week').add(1, 'day');
  // Add one extra day
  function cb(start, end) {
  $('#daterangepicker-field').val(start.format('DD/MM/YYYY') + ' - ' + end.format('DD/MM/YYYY'));
  }
  $('#daterangepicker-field').daterangepicker({
  startDate: start,
  endDate: end,
  ranges: {
     'Last Week Before': [moment().subtract(2,  'week').startOf('week') , moment().subtract(2, 'week').endOf('week')],
     'Last Week': [startOfLastWeek, endOfLastWeek],
     'This Week': [moment().startOf('week'), moment().endOf('week')],
     'This Month': [moment().startOf('month'), moment().endOf('month')],
     'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
  }
  }, cb);
});
</script>






<style>
   .select2{display:none;}
   #pagesControllers{
    padding:20px;
}
</style>