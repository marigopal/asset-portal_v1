$(document).ready(function () {
    load_countries('countries');
    var url_string = window.location.href;
    var url = new URL(url_string);
    var _id = url.searchParams.get("id");
    if (_id != undefined) {
        load_data(_id);
    }
});
function load_data(_id) {
    $.ajax({
        url: "db/get_supplier.php",
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
                    var supplier_name = result[i]['supplier_name'];
                    var supplier_address1 = result[i]['supplier_address1'];
                    var supplier_address2 = result[i]['supplier_address2'];
                    var supplier_city = result[i]['supplier_city'];
                    var supplier_state = result[i]['supplier_state'];
                    var supplier_country = result[i]['supplier_country'];
                    var supplier_zipcode = result[i]['supplier_zipcode'];
                    var supplier_contactname = result[i]['supplier_contactname'];
                    var supplier_phone = result[i]['supplier_phone'];
                    var supplier_fax = result[i]['supplier_fax'];
                    var supplier_email = result[i]['supplier_email'];
                    var supplier_url = result[i]['supplier_url'];
                    var supplier_notes = result[i]['supplier_notes'];
                    var supplier_imagename = result[i]['supplier_imagename'];
                    if (len > 0)
                    {
                        $("#supplier_uid").val(_id);
                        $("#suppliername").val(supplier_name);
                        $("#supplier_address1").val(supplier_address1);
                        $("#supplier_address2").val(supplier_address2);
                        $("#supplier_city").val(supplier_city);
                        $("#supplier_state").val(supplier_state);
                        $("#countries").val(supplier_country);
                        $("#supplier_zip").val(supplier_zipcode);
                        $("#supplier_contactname").val(supplier_contactname);
                        $("#supplier_phone").val(supplier_phone);
                        $("#supplier_fax").val(supplier_fax);
                        $("#supplier_email").val(supplier_email);
                        $("#supplier_url").val(supplier_url);
                        $("#supplier_notes").val(supplier_notes);
                        $("#img_name").val(supplier_imagename);
                        if (supplier_imagename != '') {
                            $("#receipt_display").attr("src", "../image_location/" + supplier_imagename);
                            removehidden_class('receipt_display');
                        }
                    }
                }
            }
        }
    });
}
$("#savesupplierbutton").click(function(){
    var isNew = false;
    var supplier_uid = $("#supplier_uid").val();
    var suppliername = $("#suppliername").val();
    var supplier_address1 = $("#supplier_address1").val();
    var supplier_address2 = $("#supplier_address2").val();
    var supplier_city = $("#supplier_city").val();
    var supplier_state = $("#supplier_state").val();
    var countries = $("#countries").val();
    var supplier_zip = $("#supplier_zip").val();
    var supplier_contactname = $("#supplier_contactname").val();
    var supplier_phone = $("#supplier_phone").val();
    var supplier_fax = $("#supplier_fax").val();
    var supplier_email = $("#supplier_email").val();
    var supplier_url = $("#supplier_url").val();
    var supplier_notes = $("#supplier_notes").val();
    var img_name = $("#img_name").val();
    add_disabled('savesupplierbutton');
    if (supplier_uid == '')
    {
        isNew = true;
    }
    if (suppliername == '')
    {
        inputbox_error_notification('suppliername', 'Please Enter Supplier Name');
    } else
    {
        $.ajax
                ({
                    type: "POST",
                    url: "db/manage_supplier.php",
                    data: 'isNew=' + isNew.toString() + '&supplier_uid=' + supplier_uid + '&suppliername=' + suppliername + '&supplier_address1=' + supplier_address1 + '&supplier_address2=' + supplier_address2 + '&supplier_city=' + supplier_city + '&supplier_state=' + supplier_state + '&countries=' + countries + '&supplier_zip=' + supplier_zip + '&supplier_contactname=' + supplier_contactname + '&supplier_phone=' + supplier_phone + '&supplier_fax=' + supplier_fax + '&supplier_email=' + supplier_email + '&supplier_url=' + supplier_url + '&supplier_notes=' + supplier_notes + '&img_name=' + img_name,
                    datatype: "html",
                    success: function (result)
                    {
                         if (result.trim() == 1)
                         {
                             if (isNew == true)
                             {
                                 toastr_success('Supplier Added Successfully.', 'index');
                             } else
                             {
                                 toastr_success('Supplier Updated Successfully.', '');
                             }
                         } else
                         {
                             toastr_error();
                         }
                    }
                });
    }
});
$("#suppliername").change(function () {
    var suppliername = $("#suppliername").val();

    $.ajax
            ({
                type: "POST",
                url: "db/validate_suppliername.php",
                data: 'suppliername=' + suppliername,
                datatype: "html",
                success: function (result)
                {
                    if (result == 1)
                    {
                        inputbox_error_notification('suppliername', 'Supplier Already in database');
                        add_disabled('savesupplierbutton');

                    } else
                    {
                        inputbox_success_notification('suppliername', 'Supplier Available');
                        remove_disabled('savesupplierbutton');
                    }
                }
            });

});