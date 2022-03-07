$(document).ready(function () {
    load_locations('location');
    load_suppliers('supplier');
    load_suppliers('supplier_select');
    load_assetcategory('asset_category');
    load_manufacturer('manufacturer');
    load_model('asset_model');
    load_modelno('model_no');
    $(document).on('click', '.add_component', function () {
        var html = '';
        html += '<tr>';
        html += '<td><input type="text" name="serial[]" class="form-control serial" /></td>';
        html += '<td><input type="text" name="remarks[]" class="form-control size" /></td>';
        html += '<td><button type="button" name="remove" class="btn btn-danger btn-sm remove_component"><span class="glyphicon glyphicon-minus"></span></button></td></tr>';
        $('#item_table').append(html);
    });
    $(document).on('click', '.remove_component', function () {
        $(this).closest('tr').remove();
    });
    $('#insert_form').on('submit', function (event) {
        event.preventDefault();
        var error = '';

        var form_data = $(this).serialize();
        if (error == '')
        {
            $.ajax({
                url: "db/insert_inv.php",
                method: "POST",
                data: form_data,
                success: function (result)
                {
                    if (result == 1)
                    {
                        toastr_success('Component Added Successfully.', '');
                        add_disabled('saveinvoicebutton');
                    } else if (result == 2)
                    {
                        toastr_success('Invoice Added Successfully.', '');
                        add_disabled('saveinvoicebutton');
                    } else
                    {
                        toastr_error_pagereload('');
                    }
                }
            });
        }
    });

});
$('#pod').datetimepicker({
    format: 'L'
});
$('#invdate').datetimepicker({
    format: 'L'
});
$(window).on('load', function () {
    $('#confirm_model').modal('show');
});
$("#radioPrimary2").click(function () {
    remove_disabled('save_confirm_button');
    removehidden_class('invoicenumber_div');
    removehidden_class('confirm_supplier_div');
});
$("#save_confirm_button").click(function () {

});
$("#asset_category").change(function () {
    var assetcategory_text = $("#asset_category option:selected").text();
    $("#asset_category_name").val(assetcategory_text);

})
function load_invoicelist(ddlName, selectedvalue)
{
    var supplier_select= $("#supplier_select").val();
    $.ajax({
        type: "POST",
        url: "db/load_invoice.php",
        data: {supplier_select: supplier_select},
        success: function (_result)
        {
            var result = JSON.parse(_result.replace('\n', ''));
            $('#' + ddlName).empty();
            var select_li_txt = "<option value='0'>Select</option>";
            $('#' + ddlName).append(select_li_txt);
            if (result != '')
            {
                $.each(result, function (i) {
                    var li_txt = "<option value='" + result[i].invoice_uid + "'>" + result[i].invoice_no + "</option>";
                    $('#' + ddlName).append(li_txt);
                });
                if (selectedvalue != null) {
                    $('#' + ddlName).val(selectedvalue);
                }
            } 
        },
        error: function (err) {
            console.log(err);
        }
    });
}

$("#save_confirm_button").click(function(){
    var invoice_select = $("#invoice_select").val();

    $("#inv_uid").val(invoice_select);
    addhidden_class('pod_div');
    addhidden_class('invoice_div');
    remove_required('supplier');
    remove_required('invdate');
    remove_required('invno');
    $('#confirm_model').modal('toggle');
     
});