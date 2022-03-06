$(document).ready(function () {
    load_countries('country');
    var url_string = window.location.href;
    var url = new URL(url_string);
    var _id = url.searchParams.get("id");
    if (_id != undefined) {
        load_data(_id);
    }
});

function load_data(id)
{
    $.ajax({
        url: "db/get_userdetail.php",
        type: "POST",
        data: {id: id},
        dataType: 'json',
        success: function (result)
        {
            var len = result.length;
            if (len != 0)
            {
                for (var i = 0; i < len; i++)
                {
                    var _emp_id = result[i]['emp_id'];
                    var _firstname = result[i]['firstname'];
                    var _lastname = result[i]['lastname'];
                    var _username = result[i]['username'];
                    var _mobile_no = result[i]['mobile_no'];
                    var _email_address = result[i]['email_address'];
                    var _address1 = result[i]['address1'];
                    var _address2 = result[i]['address2'];
                    var _city = result[i]['city'];
                    var _country = result[i]['country'];
                    if (len > 0)
                    {
                        $("#user_id").val(id);
                        $("#fullname_display").text(_firstname);
                        $("#email_display").text(_email_address);
                        $("#address1_display").text(_address1);
                        $("#address2_display").text(_address2);
                        $("#city_display").text(_city);
                        $("#first_name").val(_firstname);
                        $("#last_name").val(_lastname);
                        $("#eid").val(result[i]['emp_id']);
                        $("#user_name").val(_username);
                        $("#mobile").val(_mobile_no);
                        $("#email").val(_email_address);
                        $("#address1").val(_address1);
                        $("#address2").val(_address2);
                        $("#city").val(_city);
                        load_countries('country',_country);
                        

                    }
                }
            }
        }
    });
}
$("#updateuserprofile_button").click(function () {
    var isNew = false;
    var user_id = $("#user_id").val();
    var first_name = $("#first_name").val();
    var last_name = $("#last_name").val();
    var emp_id = $("#eid").val();
    var mobile = $("#mobile").val();
    var email = $("#email").val();
    var address1 = $("#address1").val();
    var address2 = $("#address2").val();
    var city = $("#city").val();
    var country = $("#country").val();
    add_disabled('updateuserprofile_button');
    if (user_id == '')
    {
        isNew = true;
    } else {
        $.ajax
                ({
                    type: "POST",
                    url: "db/manage_userprofile.php",
                    data: 'isNew=' + isNew.toString() + '&user_id=' + user_id + '&first_name=' + first_name + '&last_name=' + last_name + '&emp_id=' + emp_id + '&mobile=' + mobile + '&email=' + email + '&address1=' + address1 + '&address2=' + address2 + '&city=' + city+ '&country=' + country,
                    datatype: "html",
                    success: function (result)
                    {
                        if (result.trim() != '')
                        {
                            if (isNew == true)
                            {
                            } else
                                (isNew == false)
                            {
                                toastr_success('Profile Updated Successfully..!', '');
                            }
                        } else
                        {
                            toastr_error();
                        }
                    }
                });
    }
});