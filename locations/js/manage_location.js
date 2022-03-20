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
        url: "db/get_location.php",
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
                    var location_name = result[i]['location_name'];
                    var manager = result[i]['manager'];
                    var addressline1 = result[i]['addressline1'];
                    var addressline2 = result[i]['addressline2'];
                    var city = result[i]['city'];
                    var state = result[i]['state'];
                    var countries = result[i]['countries'];
                    var zipcode = result[i]['zipcode'];
                    var location_image = result[i]['location_image'];
                    if (len > 0)
                    {
                        $("#locations_uid").val(_id);
                        $("#locationsname").val(location_name);
                        $("#location_manager").val(manager);
                        $("#location_address1").val(addressline1);
                        $("#location_address2").val(addressline2);
                        $("#location_city").val(city);
                        $("#location_state").val(state);
                        $("#countries").val(countries);
                        $("#location_zip").val(zipcode);
                        $("#img_name").val(location_image);
                        if (location_image != '') {
                            $("#receipt_display").attr("src", "../image_location/" + location_image);
                            removehidden_class('receipt_display');
                        }
                    }
                }
            }
        }
    });
}


$("#locationsname").change(function () {
    var locationsname = $("#locationsname").val();

    $.ajax
            ({
                type: "POST",
                url: "db/validate_locationname.php",
                data: 'locationsname=' + locationsname,
                datatype: "html",
                success: function (result)
                {
                    if (result == 1)
                    {
                        inputbox_error_notification('locationsname', 'Location Already in database');
                        add_disabled('savelocationbutton');

                    } else
                    {
                        inputbox_success_notification('locationsname', 'Location Available');
                        remove_disabled('savelocationbutton');
                    }
                }
            });

});
$("#savelocationbutton").click(function () {
    var isNew = false;
    var locations_uid = $("#locations_uid").val();
    var locationsname = $("#locationsname").val();
    var location_manager = $("#location_manager").val();
    var location_address1 = $("#location_address1").val();
    var location_address2 = $("#location_address2").val();
    var location_city = $("#location_city").val();
    var location_state = $("#location_state").val();
    var countries = $("#countries").val();
    var location_zip = $("#location_zip").val();
    var img_name = $("#img_name").val();
    add_disabled('savelocationbutton');
    if (locations_uid == '')
    {
        isNew = true;
    }
    if (locationsname == '')
    {
        inputbox_error_notification('locationsname', 'Please Enter Location Name');
    } else
    {
        $.ajax
                ({
                    type: "POST",
                    url: "db/manage_location.php",
                    data: 'isNew=' + isNew.toString() + '&locations_uid=' + locations_uid + '&locationsname=' + locationsname + '&location_manager=' + location_manager + '&location_address1=' + location_address1 + '&location_address2=' + location_address2 + '&location_city=' + location_city + '&location_state=' + location_state + '&countries=' + countries + '&location_zip=' + location_zip + '&img_name=' + img_name,
                    datatype: "html",
                    success: function (result)
                    {
                        if (result.trim() == 1)
                        {
                            if (isNew == true)
                            {
                                toastr_success('Location Added Successfully.', 'index');
                            } else
                            {
                                toastr_success('Location Updated Successfully.', 'index');
                            }
                        } else
                        {
                            toastr_error();
                        }
                    }
                });
    }
});