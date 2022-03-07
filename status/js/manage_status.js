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
        url: "db/get_staus.php",
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
                    var status_name = result[i]['status_name'];
                    if (len > 0)
                    {
                        $("#status_uid").val(_id);
                        $("#status_name").val(status_name);
                    }
                }
            }
        }
    });
}
$("#status_name").change(function () {
    var status_name = $("#status_name").val();
    $.ajax
            ({
                type: "POST",
                url: "db/validate_status_name.php",
                data: 'status_name=' + status_name,
                datatype: "html",
                success: function (result)
                {
                    if (result == 1)
                    {
                        inputbox_error_notification('status_name', 'Status Already in database');
                        add_disabled('savestatusbutton');

                    } else
                    {
                        inputbox_success_notification('status_name', 'Status Available');
                        remove_disabled('savestatusbutton');
                    }
                }
            });
});

function save_status()
{
    var isNew = false;
    var status_uid = $("#status_uid").val();
    var status_name = $("#status_name").val();
    add_disabled('savestatusbutton');
    if (status_uid == '')
    {
        isNew = true;
    }
    if (status_name == '')
    {
        inputbox_error_notification('status_name', 'Please Enter Status');
    } else
    {
        $.ajax
                ({
                    type: "POST",
                    url: "db/manage_status.php",
                    data: 'isNew=' + isNew.toString() + '&status_uid=' + status_uid + '&status_name=' + status_name,
                    datatype: "html",
                    success: function (result)
                    {
                        result = result.replaceAll('\n', '');
                        var _result = $.parseJSON(result);

                        if (_result[0].status == '1' && isNew == true)
                        {
                            toastr_success('Status Added Successfully..!', 'index');
                        } else if (_result[0].status == '1' && isNew == false) {
                            toastr_success('Status Updated Successfully..!', 'index');
                        } else
                        {
                            toastr_error();
                        }
                    }
                });
    }
}