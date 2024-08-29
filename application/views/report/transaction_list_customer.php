<link rel="stylesheet" href="<?php echo base_url() ?>my-assets/css/style.css">
<input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">

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
    width: 170px;
  }

   
}
   
</style>

<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>my-assets/css/balance_sheet.css" />
<div class="content-wrapper">
   <section class="content-header" style='height:70px;'>
      <div class="header-icon">
         <figure class="one">
               <img src="<?php echo base_url()  ?>asset/images/reportcustomer.png"  class="headshotphoto" style="height:50px;" />
      </div>
      
      
          
            <div class="header-title">
          <div class="logo-holder logo-9">
         <h1><?php echo "Transaction By Customer"; ?></h1>
       </div> 
         
         
         
         <small><?php //echo "Vocher Report"; ?></small>
         <ol class="breadcrumb" style="border: 3px solid #d7d4d6;" >
            <li><a href="#"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
            <li><a href="#"><?php echo "Accounts"; ?></a></li>
            <li class="active" style="color:orange;"><?php echo "Transaction By Customer"; ?></li>
        
           <div class="load-wrapp">
       <div class="load-10">
         <div class="bar"></div>
       </div>
       </div>
      
        
         </ol>
      </div>
   </section>
   <section class="content">
      
     
      <div class="row">
         <div class="col-sm-12 panel panel-bd lobidrag" style="border: 3px solid #d7d4d6;">
            <div class="col-sm-8">
               <div class="panel-body" style='margin-bottom:-30px;'>
                  <table class="table1 table-bordered" cellspacing="0" width="100%" style='border:none;'>
                     <tr style="text-align: center; font-weight: bold;" class="filters">
                        <td style="width: 100px;"> </td>
                        <td class="search_dropdown" style="width: 100px; color: black; padding: 5px;">
                          Payment Date : 
                        </td>
                        <td class="search_dropdown" id="datepicker-container" style="width: 15%; color: black; padding: 5px;">
                           <div >
                              <input type="text" class="form-control daterangepicker-field" id="daterangepicker-field" name="daterangepicker-field" style="width: 180px; margin-top:10px;border-radius: 8px; height: 35px;" />
                           </div>
                        </td>
                        <td style="width: 20px; padding: 5px;">
                           <input type="button" id="searchtrans" name="btnSave" class="btn btnclr" value="Search" />
                        </td>
                        <td style="width: 100px;"></td>
                     </tr>
                  </table>
                  <!-- </div> -->
               </div>
            </div>
                                          <div class='col-sm-2' style='margin-top: 20px;
    margin-left: 140px;text-align:end;'>
    
</div>
         </div>
      </div>
      <div class="row">
         <div class="col-sm-16 col-md-14">
            <div class="panel panel-bd lobidrag" id="printableArea"   style="border: 3px solid #d7d4d6;" >
               <div class="panel-body">
                   <div class="sortableTable__container">
                    <div class="sortableTable__discard">
                    </div>
                        <table class="table table-bordered" id="transactionList" cellspacing="0" width="100%">
                            <thead class="sortableTable">
                                <th width="5%">S.No</th>
                                <th width="11%">Customer Name</th>
                                <th width="11%">Invoice Number</th>
                                <th width="11%">Payment ID</th>
                                <th width="11%">Payment Date</th>
                                <th width="11%">Total Amount</th>
                                <th width="10%">Amount Paid</th>
                                <th width="10%">Balance</th>
                                <th width="10%">Details</th>
                                <th width="10%">Status</th>
                            </thead>
                               
                  </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
     
      <script src='<?php echo base_url();?>assets/js/moment.min.js'></script>
      <script src='https://cdnjs.cloudflare.com/ajax/libs/knockout/3.4.0/knockout-debug.js'></script>
      <script  src="<?php echo base_url() ?>assets/js/scripts.js"></script> 

      <script>
            $(document).ready(function() {
                if ($.fn.DataTable.isDataTable('#transactionList')) {
                    $('#transactionList').DataTable().clear().destroy();
                }
                var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>';
                var csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';
                var dtable = $('#transactionList').DataTable({
                    "processing": true,
                    "serverSide": true,
                    "lengthMenu": [
                        [10, 25, 50, 100],
                        [10, 25, 50, 100]
                    ],
                    "ajax": {
                        "url": "<?php echo base_url('Creport/getCustomerTransactionDatas?id='); ?>" +
                            encodeURIComponent('<?php echo $_GET['id']; ?>'),
                        "type": "POST",
                        "data": function(d) {
                            d['<?php echo $this->security->get_csrf_token_name(); ?>'] =
                                '<?php echo $this->security->get_csrf_hash(); ?>',
                            d['payment_date_search'] = $('#daterangepicker-field').val(); // Send the search input value
                        },
                        "dataSrc": function(json) {
                           csrfHash = json[
                                '<?php echo $this->security->get_csrf_token_name(); ?>'];
                            return json.data;
                        }
                    },
                    "columns": [{
                            "data": "customer_id"
                        },
                        {
                            "data": "customer_name"
                        },
                        {
                            "data": "commercial_invoice_number"
                        },
                        {
                            "data": "payment_id"
                        },
                        {
                            "data": "payment_date"
                        },
                        {
                            "data": "total_amt"
                        },
                        {
                            "data": "amt_paid"
                        },
                        {
                            "data": "balance"
                        },
                        {
                            "data": "details"
                        },
                        {
                            "data": "status"
                        },
                        
                    ],
                    "columnDefs": [{
                        "orderable": false,
                        "targets": [0, 9],
                        searchBuilder: {
                            defaultCondition: '='
                        },
                        "initComplete": function() {
                            this.api().columns().every(function() {
                                var column = this;
                                var select = $(
                                        '<select><option value=""></option></select>'
                                    )
                                    .appendTo($(column.footer()).empty())
                                    .on('change', function() {
                                        var val = $.fn.dataTable.util
                                            .escapeRegex(
                                                $(this).val()
                                            );
                                        column.search(val ? '^' + val + '$' :
                                            '', true, false).draw();
                                    });
                                column.data().unique().sort().each(function(d, j) {
                                    select.append('<option value="' + d +
                                        '">' + d + '</option>')
                                });
                            });
                        },
                    }],
                    "pageLength": 10,
                    "colReorder": true,
                    "stateSave": true,
                    "stateSaveCallback": function(settings, data) {
                        localStorage.setItem('customer', JSON.stringify(data));
                    },
                    "stateLoadCallback": function(settings) {
                        var savedState = localStorage.getItem('customer');
                        return savedState ? JSON.parse(savedState) : null;
                    },
                    "dom": "<'row'<'col-sm-4'l><'col-sm-4 text-center'B><'col-sm-4'f>>" +
                        "<'row'<'col-sm-12'tr>>" + "<'row'<'col-sm-6'i><'col-sm-6'p>>",
                    "buttons": [{
                            "extend": "copy",
                            "className": "btn-sm",
                            "exportOptions": {
                                "columns": ':visible'
                            }
                        },
                        {
                            "extend": "csv",
                            "title": "Report",
                            "className": "btn-sm",
                            "exportOptions": {
                                "columns": ':visible'
                            }
                        },
                        {
                            "extend": "pdf",
                            "title": "Report",
                            "className": "btn-sm",
                            "exportOptions": {
                                "columns": ':visible'
                            }
                        },
                        {
                            "extend": "print",
                            "className": "btn-sm",
                            "exportOptions": {
                                "columns": ':visible'
                            },
                            "customize": function(win) {
                                $(win.document.body)
                                    .css('font-size', '10pt')
                                    .prepend(
                                        '<div style="text-align:center;"><h3>Manage company</h3></div>'
                                    )
                                    .append(
                                        '<div style="text-align:center;"><h4>amoriotech.com</h4></div>'
                                    );
                                $(win.document.body).find('table')
                                    .addClass('compact')
                                    .css('font-size', 'inherit');
                                var rows = $(win.document.body).find('table tbody tr');
                                rows.each(function() {
                                    if ($(this).find('td').length === 0) {
                                        $(this).remove();
                                    }
                                });
                                $(win.document.body).find('div:last-child')
                                    .css('page-break-after', 'auto');
                                $(win.document.body)
                                    .css('margin', '0')
                                    .css('padding', '0');
                            }
                        },
                        {
                            "extend": "colvis",
                            "className": "btn-sm"
                        }
                    ]
                });
                $('#searchtrans').on('click', function() {
                    dtable.draw(); // Redraw the DataTable with the new search input value
                });
            });
            
            </script>
      <script>
      $(document).ready(function() {
    $(".btnclr").click(function() {
        $(this).siblings('.dropdown-menu').toggle();
    });
});
      function generate() {
                 var utc = new Date().toJSON().slice(0,10).replace(/-/g,'/');
  $(".myButtonClass").hide();
  var doc = new jsPDF("p", "pt");
  var res = doc.autoTableHtmlToJson(document.getElementById("ProfarmaInvList"));
  var height = doc.internal.pageSize.height;
  //doc.text("Generated PDF", 50, 50);

  doc.autoTable(res.columns, res.data, {
    startY: doc.autoTableEndPosY() + 50,
  });
  doc.save("Customer_Transaction_List_"+utc+".pdf");
}
        function fnExcelReport()
{
 table = $('#ProfarmaInvList').clone();
    
      
    
    var hyperLinks = table.find('a');
    
    var tab_text="<table border='2px'><tr bgcolor='#87AFC6'>";
    var textRange; var j=0;
    tab = document.getElementById('ProfarmaInvList'); // id of table

    for(j = 0 ; j < tab.rows.length ; j++) 
    {   var sp=  $(hyperLinks[j]).text();
        tab_text=tab_text+tab.rows[j].innerHTML+"</tr>";
        //tab_text=tab_text+"</tr>";
          console.log(sp);
    }

    tab_text=tab_text+"</table>";
   tab_text= tab_text.replace(/<a[^>]*>/g, "");
    tab_text= tab_text.replace(/<A[^>]*>|<\/A>/g, "");//remove if u want links in your table
    tab_text= tab_text.replace(/<img[^>]*>/gi,""); // remove if u want images in your table
    tab_text= tab_text.replace(/<input[^>]*>|<\/input>/gi, ""); // reomves input params

    var ua = window.navigator.userAgent;
    var msie = ua.indexOf("MSIE "); 

    if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./))      // If Internet Explorer
    {
        txtArea1.document.open("txt/html","replace");
        txtArea1.document.write(tab_text);
        txtArea1.document.close();
        txtArea1.focus(); 
        sa=txtArea1.document.execCommand("SaveAs",true,"");
    }  
    else                 //other browser not tested on IE 11
        sa = window.open('data:application/vnd.ms-excel,' + encodeURIComponent(tab_text));  

    return (sa);
}
         /*$(document).ready(function(){
          $('#datepicker-container').hide();
         }); 
         $(document).on('change', '#payment-filter', function () {
             var selectedValue = $(this).val().trim();
           
             if (selectedValue == 'Custom') {
                 // If "custom" is selected, show the date picker and filter the table based on it
                 $('#datepicker-container').show();
             
             }  else {
                 // For other options, hide the date picker and show all table rows
                 $('#datepicker-container').hide();
               
             }
         });*/
         
         document.getElementById('search').addEventListener('click', function (e) {
             e.preventDefault(); // Prevent the default form submission
         
             // Get selected filter values
             var selectedCustomer = document.getElementById('customer-name-filter').value;
             var selectedPaymentFilter = document.getElementById('payment-filter').value;
         
             // Get all rows in the table
             var rows = document.querySelectorAll("table.table tbody tr");
             var dateRange = document.getElementById('daterangepicker-field').value;
             var dateRangeParts = dateRange.split(' to ');
         
             var selectedStartDate = new Date(dateRangeParts[0]);
             var selectedEndDate = new Date(dateRangeParts[1]);
         
             // Check if the payment date filter is set to "Custom"
             var isCustomDateFilter = selectedPaymentFilter === 'custom';
         
             // Loop through each row and check filter conditions
             for (var i = 0; i < rows.length; i++) {
                 var row = rows[i];
                 var customerName = row.querySelector("td:nth-child(1)").textContent.trim();
                 var paymentDate = row.querySelector("td:nth-child(4)").textContent.trim();
                 var paymentDateObj = new Date(paymentDate);
         
                 // Check filter conditions
                 var customerFilterMatch = (selectedCustomer === 'Any' || selectedCustomer === customerName);
         
                 // Check if the payment date filter is set to "Custom"
                 if (isCustomDateFilter) {
                     var dateFilterMatch = (paymentDateObj >= selectedStartDate && paymentDateObj <= selectedEndDate);
                     if (customerFilterMatch && dateFilterMatch) {
                         row.style.display = "";
                     } else {
                         row.style.display = "none";
                     }
                 } else {
                     if (customerFilterMatch) {
                         row.style.display = "";
                     } else {
                         row.style.display = "none";
                     }
                 }
             }
         });
      </script>
      
      
      <script type="text/javascript">
         $(document).ready(function() {
         // Function to store the visibility state of rows in localStorage
         function storeVisibilityState() {
            var transcationlistvisibilityStates = {};
            $("#ProfarmaInvList tr").each(function(index, element) {
                var row = $(element);
                var rowID = index;
                var isVisible = row.is(':visible');
                transcationlistvisibilityStates[rowID] = isVisible;
            });
            // Store the visibility states in localStorage
            localStorage.setItem("transcationlistvisibilityStates", JSON.stringify(transcationlistvisibilityStates));
         }
         // Apply the stored visibility state on page load
         function applyVisibilityState() {
            var storedVisibilityStates = JSON.parse(localStorage.getItem("transcationlistvisibilityStates")) || {};
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
   </section>
</div>