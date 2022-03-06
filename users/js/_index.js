$(document).ready(function () {
    load_usraccess('usr_access');
});
var url_string = window.location.href;
var url = new URL(url_string);
var _filter = url.searchParams.get("filter");
$.ajax({
    url: "viewlist/users_viewlist.php",
    type: "POST",
    data: {filter: _filter},
    cache: false,
    success: function (data) {
        $('#users_tbody').html(data);
        generateDTable('users_table');
    }
});
function update_user(id)
{
    $.ajax
            ({
                type: "POST",
                url: "db/get_userdetail.php",
                data: {id: id},
                dataType: 'json',
                success: function (result)
                {
                    var len = result.length;
                    if (len != 0)
                    {
                        for (var i = 0; i < len; i++)
                        {
                            var users_id = result[i]['users_id'];
                            var emp_id = result[i]['emp_id'];
                            var firstname = result[i]['firstname'];
                            var lastname = result[i]['lastname'];
                            var username = result[i]['username'];
                            var password = result[i]['password'];
                            var user_access = result[i]['user_access'];
                            if (len > 0)
                            {
                                $("#user_id").val(users_id);
                                $("#emp_id").val(emp_id);
                                $("#fname").val(firstname);
                                $("#lname").val(lastname);
                                $("#username").val(username);
                                $("#password").val(password);
                                load_usraccess('usr_access',user_access);
                                
                            }
                        }
                    }
                }
            });
}
function delete_user(id)
{
    $("#delete_uid").val(id);
}
$("#delete_button").click(function ()
{
    var uid = $("#delete_uid").val();
    $.ajax
            ({
                type: "POST",
                url: "db/delete_user.php",
                data: 'uid=' + uid,
                datatype: "html",
                success: function (result)
                {
                    if (result == 1)
                    {
                        modal_hide('delete_modal_box');
                        toastr_success('Deleted Successfully..!', '');
                    } else
                    {
                        toastr_error();
                    }
                }
            });
});