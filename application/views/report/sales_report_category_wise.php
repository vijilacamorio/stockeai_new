<!-- Manage Invoice Start -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"/>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.base64.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/drag_drop_index_table.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/html2canvas.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/jspdf.plugin.autotable"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/jspdf.umd.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap/3/css/bootstrap.css" />
<script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />
<script type="text/javascript" src="<?php echo base_url()?>my-assets/js/tableManager.js"></script>
<script type="text/javascript" src="https://unpkg.com/xlsx@0.15.1/dist/xlsx.full.min.js"></script>
<script type="text/javascript" src="http://mrrio.github.io/jsPDF/dist/jspdf.debug.js"></script>
<input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>my-assets/css/css.css" />
<script type="text/javascript" src="http://www.bacubacu.com/colresizable/js/colResizable-1.5.min.js"></script>
<style>
   .table{
   /* display: block; */
   overflow-x: auto;
   }
</style>
<div class="content-wrapper">
<section class="content-header">
   <div class="header-icon">
      <i class="pe-7s-note2"></i>
   </div>
   <div class="header-title">
      <h1><?php echo display('category_wise_sales_report') ?></h1>
      <small><?php //echo display('category_wise_sales_report') ?></small>
      <ol class="breadcrumb">
         <li><a href="<?php echo base_url()?>"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
         <li><a href="#"><?php echo display('report') ?></a></li>
         <li class="active" style="color:orange;"><?php echo display('category_wise_sales_report') ?></li>
      </ol>
   </div>
</section>
<section class="content">
   <div class="row">
      <div class="col-sm-12">
         <?php if($this->permission1->method('all_report','read')->access()){ ?>
         <a class="btn btn-success m-b-5 m-r-2" style="background-color: #337AB7;border-color: #2E6DA4;" href="<?php echo base_url('Admin_dashboard/all_report') ?>"><?php echo display('todays_report') ?></a>
         <?php } ?>
         <?php if($this->permission1->method('todays_purchase_report','read')->access()){ ?>
         <a href="<?php echo base_url('Admin_dashboard/todays_purchase_report') ?>" class="btn btn-success m-b-5 m-r-2" style="background-color: #337AB7;border-color: #2E6DA4;"><i class="ti-align-justify"> </i>  <?php echo display('purchase_report') ?> </a>
         <?php }?>
         <?php if($this->permission1->method('product_sales_reports_date_wise','read')->access()){ ?>
         <a href="<?php echo base_url('Admin_dashboard/product_sales_reports_date_wise') ?>" class="btnclr btn btn-primary m-b-5 m-r-2" style="background-color: #337AB7;border-color: #2E6DA4;"><i class="ti-align-justify"> </i>  <?php echo display('sales_report_product_wise') ?> </a>
         <?php }?>
         <?php if($this->permission1->method('todays_sales_report','read')->access() && $this->permission1->method('todays_purchase_report','read')->access()){ ?>
         <a href="<?php echo base_url('Admin_dashboard/total_profit_report') ?>" class="btn btn-warning m-b-5 m-r-2" style="background-color: #337AB7;border-color: #2E6DA4;"><i class="ti-align-justify"> </i>  <?php echo display('profit_report') ?> </a>
         <?php }?>
      </div>
   </div>
   <!-- Sales report -->
   <div class="row">
      <div class="col-sm-12">
         <div class="panel panel-default">
            <div class="panel-body">
               <?php echo form_open('Admin_dashboard/filter_sales_report_category_wise', array('class' => 'form-inline', 'method' => 'post')) ?>
               <?php
                  $today = date('Y-m-d');
                  ?>
               <div class="col-sm-2"></div>
               <div class="col-sm-6">
                  <div class="form-group">
                     <label class="" for="category"><?php echo display('category') ?></label>
                     <select  name="category" class="form-control" id="category">
                        <option value="">Select Category</option>
                        <?php
                           foreach ($category_list as $category) {
                               ?>
                        <option value="<?php echo $category['category_id']; ?>"><?php echo $category['category_name']; ?></option>
                        <?php } ?>
                     </select>
                  </div>
                  <div class="form-group">
                     <label class="" for="from_date"><?php echo display('start_date') ?><i class="text-danger">*</i></label>
                     <input type="date" name="from_date" class="form-control datepicker" id="from_date" placeholder="<?php echo display('start_date') ?>" value="">
                  </div>
                  <div class="form-group">
                     <label class="" for="to_date"><?php echo display('end_date') ?><i class="text-danger">*</i></label>
                     <input type="date" name="to_date" class="form-control datepicker" id="to_date" placeholder="<?php echo display('end_date') ?>" value="">
                  </div>
                  <button type="submit"  class="btn btnclr" name="btnSave"><?php echo display('find') ?></button>
               </div>
               <?php if(isset($_POST['btnSave']))
                  {
                   ?>
               <div class="col-sm-2"></div>
               <div class="col-sm-2">
                  <i class="fa fa-cog"  aria-hidden="true"  id="myBtn" style="font-size:25px;" onClick="columnSwitchMODAL()"></i>
                  <div class="dropdown bootcol" id="drop" style="float:right;padding-right:20px;padding-bottom:10px;">
                     <button class="btnclr btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                     <span class="glyphicon glyphicon-th-list"></span> Download
                     </button>
                     <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <li><a href="#" onclick="generate()" id="cmd"> <img src="<?php echo base_url()?>assets/images/pdf.png" width="24px"> PDF</a></li>
                        <li class="divider"></li>
                        <li><a href="#" onclick="$('#ProfarmaInvList').tableExport({type:'excel',escape:'false'});"> <img src="<?php echo base_url()?>assets/images/xls.png" width="24px"> XLS</a></li>
                     </ul>
                     <a  class="btn btnclr" href="#" style="background-color: #337AB7;border-color: #2E6DA4;" style="background-color: #337AB7;border-color: #2E6DA4;" onclick="printDiv('printable')"><?php echo display('print') ?></a>
                  </div>
                  <?php echo form_close() ?>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- Manage Invoice report -->
   <div class="row">
   <div class="col-sm-12">
      <div class="panel panel-bd lobidrag">
         <div class="panel-heading">
            <div class="row">
               <div id="for_filter_by" class="for_filter_by" style="display: inline;">
                  <label for="filter_by">Filter By&nbsp;&nbsp;
                  </label>
                  <select id="filterby" style="border-radius:5px;height:25px;">
                     <option value="1"> Category Name</option>
                     <option value="2">Product Name</option>
                     <option value="3">Model</option>
                     <option value="4">Date</option>
                     <option value="5">Invoice ID</option>
                     <option value="6">Amount</option>
                  </select>
                  <input id="filterinput" type="text" style="border-radius:5px;height:25px;">
               </div>
            </div>
         </div>
         <div id="content">
            <div class="panel-body" >
               <div  class="table-responsive" id="printable">
                  <table class="print-table" width="100%">
                     <tr>
                        <td align="left" class="print-table-tr">
                           <img src="<?php echo  base_url().$logo; ?>"   style='width: 90px;'  />
                        </td>
                        <td align="center" class="print-cominfo">
                           <span class="company-txt">
                           <h3> <?php echo $company; ?> </h3>
                           <h4></b><?php echo $address; ?> </h4>
                           <h4></b><?php echo $email; ?> </h4>
                           <h4></b><?php echo $phone; ?> </h4>
                        </td>
                        <td align="right" class="print-table-tr">
                           <date>
                              <?php echo display('date')?>: <?php
                                 echo date('d-M-Y');
                                 ?> 
                           </date>
                        </td>
                     </tr>
                  </table>
                  <div class="panel-body" style="padding-top: 0px;">
                     <div class="sortableTable__container">
                        <div class="sortableTable__discard">
                        </div>
                        <div id="customers">
                           <table class="table table-bordered"  id="ProfarmaInvList">
                              <thead class="sortableTable">
                                 <tr style="background-color: #337ab7;border-color: #2e6da4;" class="sortableTable__header">
                                    <th data-col="1" data-control-column="1" class="1 value" name="Category Name" style="height: 35.0114px;"> Category Name</th>
                                    <th data-col="2" data-control-column="2" class="2 value" name="Product Name" style="height: 35.0114px;"> Product Name</th>
                                    <th data-col="3" data-control-column="3" class="3 value" name="Model" style="height: 35.0114px;"> Model</th>
                                    <th data-col="4" data-control-column="4" class="4 value" name="Date" style="height: 35.0114px;"> Date</th>
                                    <th data-col="5" data-control-column="5" class="5 value" name="Invoice ID" style="height: 35.0114px;"> Invoice ID</th>
                                    <th data-col="6" data-control-column="6" class="6 value" name="Amount" style="height: 35.0114px;"> Amount</th>
                                 </tr>
                              </thead>
                              <tbody class="sortableTable__body">
                                 <?php
                                    $total = 0;
                                    $i=0;
                                    if ($sales_report_category_wise) {
                                        foreach ($sales_report_category_wise as $single) {
                                            if($i&1)
                                            $bg="#e2e4ed";
                                        else
                                            $bg="#FFFFFF";
                                            ?>
                                 <tr class="task-list-row">
                                    <td data-col="1"  class="1"><?php echo html_escape($single->category_name); ?></td>
                                    <td data-col="2" class="2"><?php echo html_escape($single->product_name); ?></td>
                                    <td data-col="3"  class="3"><?php echo html_escape($single->product_model); ?></td>
                                    <td data-col="4" class="4"><?php echo html_escape($single->date); ?></td>
                                    <td data-col="5" class="5"><?php echo html_escape($single->invoice); ?></td>
                                    <td data-col="6" class="6"><?php echo (($position == 0) ? $currency.' '.number_format($single->total_price,2) : number_format($single->total_price,2).' '. $currency);
                                       $total +=$single->total_price;
                                        ?></td>
                                 </tr>
                                 <?php $i++;} ?>
                                 <tr class="task-list-row">
                                    <td data-col="1"  class="1">&nbsp;</td>
                                    <td data-col="2"  class="2">&nbsp;</td>
                                    <td data-col="3"  class="3">&nbsp;</td>
                                    <td data-col="4"  class="4">&nbsp;</td>
                                    <td  class="5" data-col="5"><b><?php echo display('total') ?></b></td>
                                    <td  class="6" data-col="6" ><b><?php echo (($position == 0) ? $currency.' '.number_format($total,2) : number_format($total,2).' '. $currency) ?></b></td>
                                 </tr>
                                 <?php } else {
                                    ?>
                                 <tr>
                                    <td class="text-center" colspan="6"><?php echo display('not_found'); ?></td>
                                 </tr>
                                 <?php } ?>
                              </tbody>
                           </table>
                        </div>
                        <?php }?>
                     </div>
                  </div>
               </div>
            </div>
</section>
<input type="hidden" value="Sale/New Sale" id="url"/>
<script src="<?php echo base_url()?>assets/js/jquery.bootgrid.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.0.0-alpha.1/jspdf.plugin.autotable.js"></script>
<div id="myModal_colSwitch"  class="modal_colSwitch">
<div class="modal-content_colSwitch" style="width:25%;height:30%;">
<span class="close_colSwitch">&times;</span>
<div class="col-sm-2" ></div>
<div class="col-sm-4" ><br>
<div class="form-group row"  > 
<br><input type="checkbox"  data-control-column="1" checked = "checked" class="1" value="1"/>&nbsp;<?php echo ('Category Name')?><br>
<br><input type="checkbox"  data-control-column="2" checked = "checked" class="2" value="2"/>&nbsp;<?php echo ('Product Name')?><br>
<br><input type="checkbox"  data-control-column="3" checked = "checked" class="3 " value="3  "/>&nbsp;<?php echo ('Model')?> <br>
</div>
</div>
<div class="col-sm-4" ><br>
<div class="form-group row"  >
<br><input type="checkbox"  data-control-column="4" checked = "checked" class="4" value="4"/>&nbsp;<?php echo ('Date')?><br>
<br><input type="checkbox"  data-control-column="5" checked = "checked" class="5" value="5"/>&nbsp;<?php echo ('Invoice ID')?><br>
<br><input type="checkbox"  data-control-column="6" checked = "checked" class="6" value="6"/>&nbsp;<?php echo ('Amount')?><br>
</div>
</div>
</div>
</section>
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
   $(document).on('keyup', '#filterinput', function(){
    
      var value = $(this).val().toLowerCase();
      var filter=$("#filterby").val();
      $("#ProfarmaInvList tr:not(:eq(0))").filter(function() {
          $(this).toggle($(this).find("td."+filter).text().toLowerCase().indexOf(value) > -1)
      });
   });
</script>
<script>
   function reload(){
       location.reload();
   }
       var csrfName = '<?php echo $this->security->get_csrf_token_name();?>';
   var csrfHash = '<?php echo $this->security->get_csrf_hash();?>';
   $editor = $('#submit'),
     $editor.on('click', function(e) {
       if (this.checkValidity && !this.checkValidity()) return;
       e.preventDefault();
       var yourArray = [];
       //loop through all checkboxes which is checked
       $('.modal-content_colSwitch input[type=checkbox]:not(:checked)').each(function() {
         yourArray.push($(this).val());//push value in array
       });
      
       values = {
       
         extralist_text: yourArray
       
       };
       console.log(values)
       var json=values;
       var data = {
           page:$('#url').val(),
             content: yourArray
          
          };
          data[csrfName] = csrfHash;
   $.ajax({
       
       type: "POST",  
       url:'<?php echo base_url();?>Cinvoice/setting',
      
       data: data,
       dataType: "json", 
       success: function(data) {
           if(data) {
              console.log(data);
           }
       }  
   });
     });
   
     $( document ).ready(function() {
      
      var page=$('#url').val();
      page=page.split('/');
       var data = {
           'menu':page[0],
           'submenu':page[1]
            
          
          };
         
          data[csrfName] = csrfHash;
       $.ajax({
       
       type: "POST",  
       url:'<?php echo base_url();?>Cinvoice/get_setting',
      
       data: data,
       dataType: "json", 
       success: function(data) {
        var menu=data.menu;
        var submenu=data.submenu;
        if(menu=='Sale' && submenu=='New Sale'){
        var s=data.setting;
   s=JSON.parse(s);
   console.log(s);
   for (var i = 0; i < s.length; i++) {
       console.log(s[i]);
       $('td.'+s[i]).hide(); // hide the column header th
       $('th.'+s[i]).hide();
   $('tr').each(function(){
        $(this).find('td:eq('+$('td.'+s[i]).index()+')').hide();
   });
       }
       for (var i = 0; i < s.length; i++) {
           if( $('.'+s[i]))
     $('.'+s[i]).prop('checked', false); //check the box from the array, note: you need to add a class to your checkbox group to only select the checkboxes, right now it selects all input elements that have the values in the array 
       }  
   }
       }
   });
   
   
   });
   
   $('#cmd').click(function() {
     var pdf = new jsPDF('p','pt','a4');
     $('#for_numrows,#pagesControllers').hide();
       const invoice = document.getElementById("content");
                console.log(invoice);
                console.log(window);
                var pageWidth = 8.5;
                var margin=0.5;
                var opt = {
      lineHeight : 1.2,
      margin : 0.2,
      maxLineWidth : pageWidth - margin *1,
                    filename: 'invoice'+'.pdf',
                    allowTaint: true,
                    html2canvas: { scale: 3 },
                    jsPDF: { unit: 'in', format: 'a4', orientation: 'portrait' }
                };
                 html2pdf().from(invoice).set(opt).toPdf().get('pdf').then(function (pdf) {
     var totalPages = pdf.internal.getNumberOfPages();
    for (var i = 1; i <= totalPages; i++) {
       pdf.setPage(i);
       pdf.setFontSize(10);
       pdf.setTextColor(150);
     }
     }).save('invoice_no.pdf');
       setTimeout( function(){
         $('#for_numrows,#pagesControllers').show();
       }, 4500 );
   });
   
//   $("input:checkbox:not(:checked)").each(function() {
//       var column = "table ." + $(this).attr("value");
//       console.log("Heyy : "+column);
//       $(column).hide();
//   });
   
//   $("input:checkbox").click(function(){
//       var column = "table ." + $(this).attr("value");
//          console.log("Heyy : "+column);
//       $(column).toggle();
//   });
   
   
   $(document).ready(function() {
  // Function to toggle column visibility
  function toggleColumnVisibility(columnSelector, isChecked) {
    $(columnSelector).toggle(isChecked);
  }

  // Loop through checkboxes and initialize column visibility
  $("input:checkbox").each(function() {
    var columnValue = $(this).attr("value");
    var columnSelector = "table ." + columnValue;
    var isChecked = localStorage.getItem(columnSelector) === "true" || $(this).prop("checked");
    
    // Store checkbox state in localStorage
    localStorage.setItem(columnSelector, isChecked);

    // Toggle column visibility based on checkbox state
    toggleColumnVisibility(columnSelector, isChecked);
    
    // Set checkbox state
    $(this).prop("checked", isChecked);
  });

  // When a checkbox is clicked, update localStorage and toggle column visibility
  $("input:checkbox").click(function() {
    var columnValue = $(this).attr("value");
    var columnSelector = "table ." + columnValue;
    var isChecked = $(this).is(":checked");
    
    // Store checkbox state in localStorage
    localStorage.setItem(columnSelector, isChecked);

    // Toggle column visibility based on checkbox state
    toggleColumnVisibility(columnSelector, isChecked);
  });
});

</script>


<script type="text/javascript">
         $(document).ready(function() {
         // Function to store the visibility state of rows in localStorage
         function storeVisibilityState() {
            var CategorywisesalesreportlistvisibilityStates = {};
            $("#ProfarmaInvList tr").each(function(index, element) {
                var row = $(element);
                var rowID = index;
                var isVisible = row.is(':visible');
                CategorywisesalesreportlistvisibilityStates[rowID] = isVisible;
            });
            // Store the visibility states in localStorage
            localStorage.setItem("CategorywisesalesreportlistvisibilityStates", JSON.stringify(CategorywisesalesreportlistvisibilityStates));
         }
         // Apply the stored visibility state on page load
         function applyVisibilityState() {
            var storedVisibilityStates = JSON.parse(localStorage.getItem("CategorywisesalesreportlistvisibilityStates")) || {};
            $("#ProfarmaInvList tr").each(function(index, element) {
                var row = $(element);
                var rowID = index;
                if (storedVisibilityStates.hasOwnProperty(rowID) && !storedVisibilityStates[rowID]) {
                    row.hide();
                } else {
                    row.show();
                }
            });
         }
         // Event listener for row clicks to toggle row visibility
         $(".bank_edit").on('click', function() {
            var row = $(this);
            row.toggle();
            storeVisibilityState(); // Store the updated visibility state
         });
         applyVisibilityState(); 
         });
      </script>


<style>
   .select2{
   display:none;
   }
</style>