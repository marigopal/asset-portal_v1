$(document).ready(function () {
    load_model('model_name');
    var url_string = window.location.href;
    var url = new URL(url_string);
    var _id = url.searchParams.get("id");
    if (_id != undefined) {
        load_data(_id);
    }
});
function load_data(_id) {
    $.ajax({
        url: "db/get_modelno.php",
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
                    var model_name = result[i]['model_name'];
                    var model_number = result[i]['model_number'];
                    var modelno_image = result[i]['modelno_image'];
                    if (len > 0)
                    {
                        $("#modelno_uid").val(_id);
                        load_model('model_name', model_name);
                        $("#model_number").val(model_number);
                        $("#img_name").val(modelno_image);
                        if (modelno_image != '') {
                            $("#receipt_display").attr("src", "../image_location/" + modelno_image);
                            removehidden_class('receipt_display');
                        }
                    }
                }
            }
        }
    });
}
$("#model_number").change(function () {
    var model_name = $("#model_name").val();
    var model_number = $("#model_number").val();
    $.ajax
            ({
                type: "POST",
                url: "db/validate_modelno_name.php",
                data: 'model_number=' + model_number + '&model_name=' + model_name,
                datatype: "html",
                success: function (result)
                {
                    if (result == 1)
                    {
                        inputbox_error_notification('model_number', 'Model Number Already in database');
                        add_disabled('savemodelnobutton');

                    } else
                    {
                        inputbox_success_notification('model_number', 'Model Number Available');
                        remove_disabled('savemodelnobutton');
                    }
                }
            });

});
$("#model_name").change(function () {
    var model_number = $("#model_number").val('');
});

function save_modelnumber()
{
    var isNew = false;
    var modelno_uid = $("#modelno_uid").val();
    var model_name = $("#model_name").val();
    var model_number = $("#model_number").val();
    var img_name = $("#img_name").val();
    if (modelno_uid == '')
    {
        isNew = true;
    }
    if (model_name == '')
    {
        inputbox_error_notification('model_name_select', 'Please Enter Model Name');
    } else if (model_number == '')
    {
        inputbox_error_notification('model_number', 'Please Enter Model Number');
    } else
    {
        add_disabled('savemodelnobutton');
        $.ajax
                ({
                    type: "POST",
                    url: "db/manage_modelno.php",
                    data: 'isNew=' + isNew.toString() + '&modelno_uid=' + modelno_uid + '&model_name=' + model_name + '&model_number=' + model_number + '&img_name=' + img_name,
                    datatype: "html",
                    success: function (result)
                    {
                        result = result.replaceAll('\n', '');
                        var _result = $.parseJSON(result);

                        if (_result[0].model_no == '1' && isNew == true)
                        {
                            toastr_success('Model Number Added Successfully..!', 'index');
                        } else if (_result[0].model_no == '1' && isNew == false) {
                            toastr_success('Model Number Updated Successfully..!', 'index');
                        } else
                        {
                            toastr_error();
                        }
                    }
                });
    }
}