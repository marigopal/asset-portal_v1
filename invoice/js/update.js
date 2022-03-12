$(document).ready(function () {
    load_suppliers('supplier');
    var url_string = window.location.href;
    var url = new URL(url_string);
    var _id = url.searchParams.get("id");
    if (_id != undefined) {
        load_data(_id);
    }
});
function load_data(_id) {
    $.ajax({
        url: "db/get_invoice.php",
        type: "POST",
        data: {id: _id},
        dataType: 'json',
        success: function (result)
        {
            var len = result.length;
            if (len != 0)
            {
                for (var i = 0; i < len; i++)
                {
                    var purchase_date = result[i]['purchase_date'];
                    var purchase_no = result[i]['purchase_no'];
                    var purchase_cost = result[i]['purchase_cost'];
                    var supplier_ = result[i]['supplier'];
                    var invoice_date = result[i]['invoice_date'];
                    var invoice_no = result[i]['invoice_no'];
                    var inv_filename = result[i]['inv_filename'];
                    if (len > 0)
                    {
                        $("#invoice_uid").val(_id);
                        $("#pod").val(purchase_date);
                        $("#pon").val(purchase_no);
                        $("#poc").val(purchase_cost);
                        $("#supplier").val(supplier_);
                        $("#invdate").val(invoice_date);
                        $("#invno").val(invoice_no);
                        $("#img_name").val(inv_filename);
                        if (inv_filename != '') {
                        $("#receipt_display").attr("src", "../image_location/" + inv_filename);
                        $("#download_incoicebtn").attr("href", "../image_location/" + inv_filename);
                        removehidden_class('receipt_display');
                    }
                    }
                }
            }
        }
    });
}
$("#saveinvoicebutton").click(function(){
    var isNew = false;
    var invoice_uid = $("#invoice_uid").val();
    var pod = $("#pod").val();
    var pon = $("#pon").val();
    var poc = $("#poc").val();
    var supplier = $("#supplier").val();
    var invdate = $("#invdate").val();
    var invno = $("#invno").val();
    var img_name = $("#img_name").val();
    if (invoice_uid == '')
    {
        isNew = true;
    }
    else
    {
      add_disabled('saveinvoicebutton');
        $.ajax
                ({
                    type: "POST",
                    url: "db/manage_invoice.php",
                    data: 'isNew=' + isNew.toString() + '&invoice_uid=' + invoice_uid + '&pod=' + pod + '&pon=' + pon + '&poc=' + poc + '&supplier=' + supplier + '&invdate=' + invdate + '&invno=' + invno + '&img_name=' + img_name,
                    datatype: "html",
                    success: function (result)
                    {
                         if (result.trim() == 1)
                         {
                             if (isNew == true)
                             {
                                 toastr_success('Invoice Added Successfully.', 'index');
                             } else
                             {
                                 toastr_success('Invoice Updated Successfully.', '');
                             }
                         } else
                         {
                             toastr_error();
                         }
                    }
                });
    }
});
