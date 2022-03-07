function delete_row(id)
{
    $("#delete_uid").val(id);
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
function load_countries(ddlName, selectedvalue) {
    $.ajax({
        type: "POST",
        url: "../include/db/load_countries.php",
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
                    var li_txt = "<option value='" + result[i].countries_uid + "'>" + result[i].countries_name + "</option>";
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
function load_model(ddlName, selectedvalue) {
    $.ajax({
        type: "POST",
        url: "../include/db/load_model.php",
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
                    var li_txt = "<option value='" + result[i].models_uid + "'>" + result[i].models_name + "</option>";
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

function loadtype(ddlName, selectedvalue) {

    $.ajax({
        type: "POST",
        url: "../include/db/load_type.php",
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
                    var li_txt = "<option value='" + result[i].type_uid + "'>" + result[i].type_name + "</option>";
                    $('#' + ddlName).append(li_txt);
                });
                if (selectedvalue != null) {
                    $("#countries").val(selectedvalue);
                }

            } else
            {

            }
        },
        error: function (err) {
            console.log(err);
        }
    });
}