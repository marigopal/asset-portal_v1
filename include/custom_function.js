function manage_users()
{
    var isNew = false;
    var user_id = $("#user_id").val();
    var emp_id = $("#emp_id").val();
    var fname = $("#fname").val();
    var lname = $("#lname").val();
    var username = $("#username").val();
    var password = $("#password").val();
    var usr_access = $("#usr_access").val();
    if (user_id == '')
    {
        isNew = true;
    }
//    if (emp_id == '')
//    {
//        inputbox_error_notification('emp_id', 'Employee ID Should be enter');
//
//        $("#emp_id").focus();
//    } else 
        if (fname == '')
    {
        inputbox_error_notification('fname', 'First Name Should be enter');
        $("#fname").focus();
    } else if (lname == '')
    {
        inputbox_error_notification('lname', 'Last Name Should be enter');
        $("#lname").focus();
    } else if (username == '')
    {
        inputbox_error_notification('username', 'Username Should be enter');
        $("#username").focus();
    } else {
        $.ajax
                ({
                    type: "POST",
                    url: "db/manage_user.php",
                    data: 'isNew=' + isNew.toString() + '&user_id=' + user_id + '&emp_id=' + emp_id + '&fname=' + fname + '&lname=' + lname + '&username=' + username + '&password=' + password + '&usr_access=' + usr_access,
                    datatype: "html",
                    success: function (result)
                    {
                        result = result.replaceAll('\n', '');
                        var _result = $.parseJSON(result);
                       
                        if (_result[0].user != '' && isNew == true)
                        {
                            modal_hide('users_modal_box');
                            toastr_success_selfreload('Use Added Successfully..!');
                        }else if (_result[0].user != '' && isNew == false){
                            modal_hide('users_modal_box');
                            toastr_success_selfreload('User Updated Successfully..!');
                        } else
                        {
                            toastr_error();
                        }
                    }
                });
    }
    }
function load_usraccess(ddlName, selectedvalue) {
    $.ajax({
        type: "POST",
        url: "../include/db/load_usraccess.php",
        data: {},
        success: function (_result)
        {
            var result = JSON.parse(_result.replace('\n', ''));
            $('#' + ddlName).empty();
            var select_li_txt = "<option value=''>Select</option>";
            $('#' + ddlName).append(select_li_txt);
            if (result != '')
            {
                $.each(result, function (i) {
                    var li_txt = "<option value='" + result[i].usraccess_uid + "'>" + result[i].access_name + "</option>";
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