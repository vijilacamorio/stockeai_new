    var count = 2;
    var limits = 500;
        "use strict";
    function addpackingList(divName){

       
  
        if (count == limits)  {
            alert("You have reached the limit of adding " + count + " inputs");
        }
        else{
            var newdiv = document.createElement('tr');
            var tabin="product_name_"+count;
            tabindex = count * 4 ,
            newdiv = document.createElement("tr");
            tab1 = tabindex + 1;
            
            tab2 = tabindex + 2;
            tab3 = tabindex + 3;
            tab4 = tabindex + 4;
            tab5 = tabindex + 5;
            tab6 = tab5 + 1;
            tab7 = tab6 +1;
           

            newdiv.innerHTML ='<td class="span3 supplier"><input type="text" id="serial_number[]" name="serial_number[]" class="sl form-control text-right" value="'+ count +'">  </td>  <td class="wt"> <input type="text" name="slab_no[]" id="" class="form-control text-right" placeholder="0.00"/></td><td class="text-right" style="display: flex;"><input type="text" name="width[]" tabindex="'+tab2+'" required  id="cartoon_'+ count +'" class="form-control text-right store_cal_' + count + '" onkeyup="calculate_store(' + count + ');" onchange="calculate_store(' + count + ');" placeholder="Width" style="width: 50%;" /><input type="text" name="height[]" id="product_rate_' + count + '" tabindex="'+tab2+'" required  id="cartoon_'+ count +'" class="form-control text-right store_cal_' + count + '" onkeyup="calculate_store(' + count + ');" onchange="calculate_store(' + count + ');" placeholder="Height" style="width: 50%;" /> </td><td class="text-right"><input class="form-control total_price text-right total_price_'+ count +'" type="text" name="total_price[]" id="total_price_'+ count +'" value="0.00" readonly="readonly" /> </td><td> <input type="hidden" id="total_discount_1" class="" /><input type="hidden" id="all_discount_1" class="total_discount" /><button style="text-align: right;" class="btn btn-danger red" type="button"  onclick="deleteRow(this)" tabindex="8"><i class="fa fa-close"></i></button></td>';
            document.getElementById(divName).appendChild(newdiv);
            // document.getElementById(tabin).focus();
            document.getElementById("add_invoice_item").setAttribute("tabindex", tab5);
            document.getElementById("add_purchase").setAttribute("tabindex", tab6);
           // document.getElementById("add_purchase_another").setAttribute("tabindex", tab7);
            
            count++;

            $("select.form-control:not(.dont-select-me)").select2({
                placeholder: "Select option",
                allowClear: true
            });
        }
    }   

    "use strict";
    function deleteRow(t) {
        var a = $("#purchaseTable > tbody > tr").length;
        if (1 == a)
            alert("There only one row you can't delete.");
        else {
            var e = t.parentNode.parentNode;
            e.parentNode.removeChild(e),
                    calculateSum();
            invoice_paidamount();
            var current = 1;
            $("#purchaseTable > tbody > tr td input.productSelection").each(function () {
                current++;
                $(this).attr('id', 'product_name' + current);
            });
            var common_qnt = 1;
            $("#purchaseTable > tbody > tr td input.common_qnt").each(function () {
                common_qnt++;
                $(this).attr('id', 'total_qntt_' + common_qnt);
                $(this).attr('onkeyup', 'quantity_calculate('+common_qnt+');');
                $(this).attr('onchange', 'quantity_calculate('+common_qnt+');');
            });
            var common_rate = 1;
            $("#purchaseTable > tbody > tr td input.common_rate").each(function () {
                common_rate++;
                $(this).attr('id', 'price_item_' + common_rate);
                $(this).attr('onkeyup', 'quantity_calculate('+common_qnt+');');
                $(this).attr('onchange', 'quantity_calculate('+common_qnt+');');
            });
            var common_discount = 1;
            $("#purchaseTable > tbody > tr td input.common_discount").each(function () {
                common_discount++;
                $(this).attr('id', 'discount_' + common_discount);
                $(this).attr('onkeyup', 'quantity_calculate('+common_qnt+');');
                $(this).attr('onchange', 'quantity_calculate('+common_qnt+');');
            });
            var common_total_price = 1;
            $("#purchaseTable > tbody > tr td input.common_total_price").each(function () {
                common_total_price++;
                $(this).attr('id', 'total_price_' + common_total_price);
            });
    
           
    
        }
    
       // calculateSum();
    }

         "use strict";
    function addPurchaseOrderField2(divName){
  
        if (count == limits)  {
            alert("You have reached the limit of adding " + count + " inputs");
        }
        else{
            var newdiv = document.createElement('tr');
            var tabin="product_name_"+count;
             tabindex = count * 4 ,
           newdiv = document.createElement("tr");
            tab1 = tabindex + 1;
            
            tab2 = tabindex + 2;
            tab3 = tabindex + 3;
            tab4 = tabindex + 4;
            tab5 = tabindex + 5;
            tab6 = tab5 + 1;
            tab7 = tab6 +1;
           


            newdiv.innerHTML ='<td class="span3 supplier"><input type="text" name="product_name" required="" class="form-control product_name productSelection" onkeypress="product_pur_or_list('+ count +');" placeholder="Product Name" id="product_name_'+ count +'" tabindex="'+tab1+'" > <input type="hidden" class="autocomplete_hidden_value product_id_'+ count +'" name="product_id[]" id="SchoolHiddenId"/>  <input type="hidden" class="sl" value="'+ count +'">  </td>  <td class="wt"> <input type="text" class="form-control text-right" placeholder="0.00" /> </td>  <td class="wt"> <input type="text" id="available_quantity_'+ count +'" class="form-control text-right stock_ctn_'+ count +'"/> </td><td class="text-right"><input type="text" name="product_quantity[]" tabindex="'+tab2+'" required  id="cartoon_'+ count +'" class="form-control text-right store_cal_' + count + '" onkeyup="calculate_store(' + count + ');" onchange="calculate_store(' + count + ');" placeholder="0.00" value="" min="0"/>  </td><td class="test"><input type="text" name="product_rate[]" onkeyup="calculate_store('+ count +');" onchange="calculate_store('+ count +');" id="product_rate_'+ count +'" class="form-control product_rate_'+ count +' text-right" placeholder="0.00" value="" min="0" tabindex="'+tab3+'"/></td><td class="text-right"><input class="form-control total_price text-right total_price_'+ count +'" type="text" name="total_price[]" id="total_price_'+ count +'" value="0.00" readonly="readonly" /> </td><td> <input type="hidden" id="total_discount_1" class="" /><input type="hidden" id="all_discount_1" class="total_discount" /><button style="text-align: right;" class="btn btn-danger red" type="button"  onclick="deleteRow(this)" tabindex="8"><i class="fa fa-close"></i></button></td>';
            document.getElementById(divName).appendChild(newdiv);
            document.getElementById(tabin).focus();
            document.getElementById("add_invoice_item").setAttribute("tabindex", tab5);
            document.getElementById("add_purchase").setAttribute("tabindex", tab6);
            document.getElementById("add_purchase_another").setAttribute("tabindex", tab7);
           
            count++;

            $("select.form-control:not(.dont-select-me)").select2({
                placeholder: "Select option",
                allowClear: true
            });
        }
    }

  // Counts and limit for purchase order


    //Calculate store product
        "use strict";
    function calculate_store(sl) {
       
        var gr_tot = 0;
        var dis = 0;
        var item_ctn_qty    = $("#cartoon_"+sl).val();
        var vendor_rate = $("#product_rate_"+sl).val();

        var total_price     = item_ctn_qty * vendor_rate/144;
        $("#total_price_"+sl).val(total_price.toFixed(2));

       
        //Total Price
        $(".total_price").each(function() {
            isNaN(this.value) || 0 == this.value.length || (gr_tot += parseFloat(this.value))
        });
         $(".discount").each(function() {
            isNaN(this.value) || 0 == this.value.length || (dis += parseFloat(this.value))
        });

        $("#Total").val(gr_tot.toFixed(2,2));
        var grandtotal = gr_tot - dis;
        $("#grandTotal").val(grandtotal.toFixed(2,2));
        invoice_paidamount();
    }


        function invoice_paidamount() {
      var t = $("#grandTotal").val(),
            a = $("#paidAmount").val(),
            e = t - a;
     if(e > 0){
    $("#dueAmmount").val(e.toFixed(2,2))
}else{
  $("#dueAmmount").val(0)   
}
}

    "use strict";
function full_paid() {
    var grandTotal = $("#grandTotal").val();
    $("#paidAmount").val(grandTotal);
    invoice_paidamount();
    calculate_store();
}

    //Delete row

    "use strict";
    function calculateSum() {
        var taxnumber = $("#txfieldnum").val();
         var t = 0,
               a = 0,
               e = 0,
               o = 0,
               p = 0,
               f = 0,
               ad = 0,
               tx = 0,
               ds = 0,
               s_cost =  $("#shipping_cost").val();
   
       //Total Tax
      for(var i=0;i<taxnumber;i++){
         
   var j = 0;
       $(".total_tax"+i).each(function () {
           isNaN(this.value) || 0 == this.value.length || (j += parseFloat(this.value))
       });
               $("#total_tax_ammount"+i).val(j.toFixed(2, 2));
                
       }
               //Total Discount
               $(".total_discount").each(function () {
           isNaN(this.value) || 0 == this.value.length || (p += parseFloat(this.value))
       }),
               $("#total_discount_ammount").val(p.toFixed(2, 2)),
   
                $(".totalTax").each(function () {
           isNaN(this.value) || 0 == this.value.length || (f += parseFloat(this.value))
       }),
               $("#total_tax_amount").val(f.toFixed(2, 2)),
            
               //Total Price
               $(".total_price").each(function () {
           isNaN(this.value) || 0 == this.value.length || (t += parseFloat(this.value))
       }),
   
    $(".dppr").each(function () {
           isNaN(this.value) || 0 == this.value.length || (ad += parseFloat(this.value))
       }),
               
               o = a.toFixed(2, 2),
               e = t.toFixed(2, 2),
               tx = f.toFixed(2, 2),
       ds = p.toFixed(2, 2);
   
       var test = +tx + +s_cost + +e + -ds + + ad;
       $("#Total").val(e);
     
       
   }





       "use strict";
    function product_pur_or_list_by_company(sl) {

    var supplier_id = 10;
    var base_url = $('#base_url').val();
    var csrf_test_name = $('[name="csrf_test_name"]').val();
    if ( supplier_id == 0) {
        alert('Please select Supplier !');
        return false;
    }

    // Auto complete
    var options = {
        minLength: 0,
        source: function( request, response ) {
            var product_name = $('#product_name_'+sl).val();
        $.ajax( {
          url: base_url + "Cpurchase/product_search_by_supplier",
          method: 'post',
          dataType: "json",
          data: {
            term: request.term,
            supplier_id:10,
            product_name:product_name,
            csrf_test_name:csrf_test_name
          },
          success: function( data ) {
            response( data );
          }
        });
      },
       focus: function( event, ui ) {
           $(this).val(ui.item.label);
           return false;
       },
       select: function( event, ui ) {
            $(this).parent().parent().find(".autocomplete_hidden_value").val(ui.item.value); 
            var sl = $(this).parent().parent().find(".sl").val(); 

            var product_id          = ui.item.value;
          
           var  supplier_id=$('#supplier_id').val();
     
           
            var base_url    = $('.baseUrl').val();

            var available_quantity    = 'available_quantity_'+sl;
            var product_rate    = 'product_rate_'+sl;

         
            $.ajax({
                type: "POST",
                url: base_url + "Cinvoice/retrieve_product_data",
                data: {product_id:product_id,supplier_id:supplier_id,csrf_test_name:csrf_test_name},
                cache: false,
                success: function(data)
                {
                    //console.log(data);
                    obj = JSON.parse(data);
                   $('#'+available_quantity).val(obj.total_product);
                    $('#'+product_rate).val(obj.supplier_price);
                  
                } 
            });

            $(this).unbind("change");
            return false;
       }
   }

   $('body').on('keypress.autocomplete', '.product_name', function() {
       $(this).autocomplete(options);
   });

}
    

        "use strict";
      function bank_paymet(val){
        if(val==2){
           var style = 'block'; 
           document.getElementById('bank_id').setAttribute("required", true);
        }else{
   var style ='none';
    document.getElementById('bank_id').removeAttribute("required");
        }
           
    document.getElementById('bank_div').style.display = style;
    }

    $( document ).ready(function() {
        var paytype = $("#editpayment_type").val();
        if(paytype == 2){
          $("#bank_div").css("display", "block");        
      }else{
       $("#bank_div").css("display", "none"); 
      }

      $(".bankpayment").css("width", "100%");
    });


    $(document).ready(function() { 
          "use strict";
     var csrf_test_name = $('[name="csrf_test_name"]').val();
     var total_purchase_no = $("#total_purchase_no").val();
     var base_url = $("#base_url").val();
     var currency = $("#currency").val();
     var purchasedatatable = $('#PackingOrderList').DataTable({ 
             responsive: true,

             "aaSorting": [[4, "desc" ]],
             "columnDefs": [
                { "bSortable": false, "aTargets": [0,1,2,3,5,6] },

            ],
           'processing': true,
           'serverSide': true,

          
           'lengthMenu':[[10, 25, 50,100,250,500, total_purchase_no], [10, 25, 50,100,250,500, "All"]],

             dom:"'<'col-sm-4'l><'col-sm-4 text-center'><'col-sm-4'>Bfrtip", buttons:[ {
                extend: "copy",exportOptions: {
                       columns: [ 0,1,2,3,4,5 ] //Your Colume value those you want
                           }, className: "btn-sm prints"
            }
            , {
                extend: "csv", title: "PurchaseLIst",exportOptions: {
                       columns: [ 0,1,2,3,4,5] //Your Colume value those you want print
                           }, className: "btn-sm prints",charset: 'UTF-16LE'
            }
            , {
                extend: "excel",exportOptions: {
                       columns: [0,1,2,3,4,5 ] //Your Colume value those you want print
                           }, title: "PurchaseLIst", className: "btn-sm prints"
            }
            , {
                extend: "pdf",exportOptions: {
                       columns: [0,1,2,3,4,5] //Your Colume value those you want print
                           }, title: "PurchaseLIst", className: "btn-sm prints"
            }
            , {
                extend: "print",exportOptions: {
                       columns: [ 0,1,2,3,4,5] //Your Colume value those you want print
                           },title: "<center> PurchaseLIst</center>", className: "btn-sm prints"
            }
            ],
 
            
            'serverMethod': 'post',
            'ajax': {
               'url':base_url + 'Cpurchase/CheckPackingList',
                     "data": function ( data) {
             data.fromdate = $('#from_date').val();
             data.todate = $('#to_date').val();
             data.csrf_test_name = csrf_test_name;
            
            }
            },
          'columns': [
             { data: 'sl' },
             { data: 'invoice_no'},
             { data: 'expense_packing_id'},
             { data: 'gross_weight'},
             { data: 'container_no'},
             { data: 'invoice_date'},
             { data: 'thickness'},
             { data: 'button'},
          ],

  "footerCallback": function(row, data, start, end, display) {
  var api = this.api();
   api.columns('.total_sale', {
    page: 'current'
  }).every(function() {
    var sum = this
      .data()
      .reduce(function(a, b) {
        var x = parseFloat(a) || 0;
        var y = parseFloat(b) || 0;
        return x + y;
      }, 0);
    $(this.footer()).html(currency+' '+sum.toLocaleString(undefined, {minimumFractionDigits: 2, maximumFractionDigits: 2}));
  });
}


    });


$('#btn-filter').click(function(){ 
purchasedatatable.ajax.reload();  
});

});







