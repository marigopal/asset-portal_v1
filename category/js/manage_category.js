$(document).ready(function () {
    loadtype('asset_type');
    var url_string = window.location.href;
    var url = new URL(url_string);
    var _id = url.searchParams.get("id");
    if (_id != undefined) {
        load_data(_id);
    }
});
function load_data(_id) {
    $.ajax({
        url: "db/get_category.php",
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
                    var category_name = result[i]['category_name'];
                    var category_prefix = result[i]['category_prefix'];
                    var type = result[i]['type'];
                    var category_imagename = result[i]['category_imagename'];
                    if (len > 0)
                    {
                        $("#category_uid").val(_id);
                        $("#category_name").val(category_name);
                        $("#category_tag").val(category_prefix);
                        $("#asset_type").val(type);
                        $("#img_name").val(category_imagename);
                        if (category_imagename != '') {
                            $("#receipt_display").attr("src", "../image_location/" + category_imagename);
                            removehidden_class('receipt_display');
                        }
                    }
                }
            }
        }
    });
}
$("#category_name").change(function () {
    var asset_type = $("#asset_type").val();
    var category_name = $("#category_name").val();
    var cate_prefix = (category_name.slice(0, 3)).toUpperCase();
    $("#category_tag").val(cate_prefix);
    $.ajax
            ({
                type: "POST",
                url: "db/validate_category_name.php",
                data: 'category_name=' + category_name + '&asset_type=' + asset_type,
                datatype: "html",
                success: function (result)
                {
                    if (result == 1)
                    {
                        inputbox_error_notification('category_name', 'category Already in database');
                        add_disabled('savecategorybutton');

                    } else
                    {
                        inputbox_success_notification('category_name', 'category Available');
                        remove_disabled('savecategorybutton');
                    }
                }
            });
            category_prefix_validate();
            

});
function category_prefix_validate()
{
    var category_tag = $("#category_tag").val();
    $.ajax
            ({
                type: "POST",
                url: "db/validate_category_prefix.php",
                data: 'cate_prefix=' + category_tag,
                datatype: "html",
                success: function (result)
                {
                    if (result == 1)
                    {
                        inputbox_error_notification('category_tag', 'category Prefix Already in database');
                        add_disabled('savecategorybutton');

                    } else
                    {
                        inputbox_success_notification('category_tag', 'category Prefix Available');
                        remove_disabled('savecategorybutton');
                    }
                }
            });
}
function save_category()
{
    var isNew = false;
    var category_uid = $("#category_uid").val();
    var category_name = $("#category_name").val();
    var category_tag = $("#category_tag").val();
    var asset_type = $("#asset_type").val();
    var img_name = $("#img_name").val();

    if (category_uid == '')
    {
        isNew = true;
    }
    if (asset_type == '')
    {
        inputbox_error_notification('asset_type', 'Please Enter category Type');
    } else if (category_name == '')
    {
        inputbox_error_notification('category_name', 'Please Enter category Name');
    } else
    {
        add_disabled('savecategorybutton');
        $.ajax
                ({
                    type: "POST",
                    url: "db/manage_category.php",
                    data: 'isNew=' + isNew.toString() + '&category_uid=' + category_uid + '&category_tag=' + category_tag + '&category_name=' + category_name  + '&asset_type=' + asset_type + '&img_name=' + img_name,
                    datatype: "html",
                    success: function (result)
                    {

                        result = result.replaceAll('\n', '');
                        var _result = $.parseJSON(result);

                        if (_result[0].category == '1' && isNew == true)
                        {
                            toastr_success('Category Added Successfully..!', 'index');
                        } else if (_result[0].category == '1' && isNew == false) {
                            toastr_success('Category Updated Successfully..!', 'index');
                        } else
                        {
                            toastr_error();
                        }
                    }
                });
    }
}