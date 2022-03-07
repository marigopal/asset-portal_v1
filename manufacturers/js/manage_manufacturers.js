$(document).ready(function () {
    var url_string = window.location.href;
    var url = new URL(url_string);
    var _id = url.searchParams.get("id");
    if (_id != undefined) {
        load_data(_id);
    }
});
function load_data(_id) {
    $.ajax({
        url: "db/get_manufacturers.php",
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
                    var manufacturers_name = result[i]['manufacturers_name'];
                    var manufacturers_url = result[i]['manufacturers_url'];
                    var manufacturers_supporturl = result[i]['manufacturers_supporturl'];
                    var manufacturers_supportphone = result[i]['manufacturers_supportphone'];
                    var manufacturers_supportemail = result[i]['manufacturers_supportemail'];
                    var manufacturers_image = result[i]['manufacturers_image'];
                    if (len > 0)
                    {
                        $("#manufacturers_uid").val(_id);
                        $("#manufacturers_name").val(manufacturers_name);
                        $("#manufacturers_url").val(manufacturers_url);
                        $("#manufacturers_supporturl").val(manufacturers_supporturl);
                        $("#manufacturers_supportphone").val(manufacturers_supportphone);
                        $("#manufacturers_supportemail").val(manufacturers_supportemail);
                        $("#img_name").val(manufacturers_image);
                        if (manufacturers_image != '') {
                            $("#receipt_display").attr("src", "../image_location/" + manufacturers_image);
                            removehidden_class('receipt_display');
                        }
                    }
                }
            }
        }
    });
}
$("#manufacturers_name").change(function () {
    var manufacturers_name = $("#manufacturers_name").val();

    $.ajax
            ({
                type: "POST",
                url: "db/validate_manufacturersname.php",
                data: 'manufacturers_name=' + manufacturers_name,
                datatype: "html",
                success: function (result)
                {
                    if (result == 1)
                    {
                        inputbox_error_notification('manufacturers_name', 'Location Already in database');
                        add_disabled('savemanufacturersbutton');

                    } else
                    {
                        inputbox_success_notification('manufacturers_name', 'Location Available');
                        remove_disabled('savemanufacturersbutton');
                    }
                }
            });

});
$("#savemanufacturersbutton").click(function () {
    var isNew = false;
    var manufacturers_uid = $("#manufacturers_uid").val();
    var manufacturers_name = $("#manufacturers_name").val();
    var manufacturers_url = $("#manufacturers_url").val();
    var manufacturers_supporturl = $("#manufacturers_supporturl").val();
    var manufacturers_supportphone = $("#manufacturers_supportphone").val();
    var manufacturers_supportemail = $("#manufacturers_supportemail").val();
    var img_name = $("#img_name").val();
    add_disabled('savemanufacturersbutton');
    if (manufacturers_uid == '')
    {
        isNew = true;
    }
    if (manufacturers_name == '')
    {
        inputbox_error_notification('manufacturers_name', 'Please Enter Manufacturer Name');
    } else
    {
        $.ajax
                ({
                    type: "POST",
                    url: "db/manage_manufacturers.php",
                    data: 'isNew=' + isNew.toString() + '&manufacturers_uid=' + manufacturers_uid + '&manufacturers_name=' + manufacturers_name + '&manufacturers_url=' + manufacturers_url + '&manufacturers_supporturl=' + manufacturers_supporturl + '&manufacturers_supportphone=' + manufacturers_supportphone + '&manufacturers_supportemail=' + manufacturers_supportemail + '&img_name=' + img_name,
                    datatype: "html",
                    success: function (result)
                    {
                         if (result.trim() == 1)
                         {
                             if (isNew == true)
                             {
                                 toastr_success('Manufacturer Added Successfully.', 'index');
                             } else
                             {
                                 toastr_success('Manufacturer Updated Successfully.', '');
                             }
                         } else
                         {
                             toastr_error();
                         }
                    }
                });
    }
});