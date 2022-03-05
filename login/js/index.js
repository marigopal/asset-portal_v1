
$("form").on("submit", function (e)
{
    var dataString = $(this).serialize();
    $.ajax({
        type: "POST",
        url: "db/login_check.php",
        data: dataString,
        success: function (result)
        {

            result = result.replaceAll('\n', '');
            var _result = $.parseJSON(result);
            var userid = _result[0].user;

            if (_result[0].login == 1 && _result[0].isfirst_login != 1)
            {
                Cookies.set('user_id', userid);
                window.location.href = "../home/";
            } else if (_result[0].login == 2 && _result[0].isfirst_login != 1)
            {
                Cookies.set('remember_me', generateUID());
                Cookies.set('user_id', userid);
                window.location.href = "../home/";
            } else if (_result[0].login == 1 && _result[0].isfirst_login == 1)
            {
                Cookies.set('user_id', userid);
                window.location.href = "../users/profile?id=" + userid;
            } else if (_result[0].login == 2 && _result[0].isfirst_login == 1)
            {
                Cookies.set('remember_me', generateUID());
                Cookies.set('user_id', userid);
                window.location.href = "../users/profile?id=" + userid;
            } else if (_result[0].login == 0)
            {
                toastr_error_msg('Please check your credential');
            } else if (_result[0].login == 3)
            {
                toastr_error_msg('Your account is not available in local database. Please contact Administrator..!');
            }
        }
    });
    e.preventDefault();
});
$(function () {
    if (Cookies.get('remember_me')) {
        window.location.href = "/home";
    }
});
