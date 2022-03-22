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
function load_assetcategory(ddlName, selectedvalue) {
    $.ajax({
        type: "POST",
        url: "../include/db/load_assetcategory.php",
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
                    var li_txt = "<option value='" + result[i].category_uid + "'>" + result[i].category_name + "</option>";
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
function load_locations(ddlName, selectedvalue) {
    $.ajax({
        type: "POST",
        url: "../include/db/load_locations.php",
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
                    var li_txt = "<option value='" + result[i].location_uid + "'>" + result[i].location_name + "</option>";
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
function load_suppliers(ddlName, selectedvalue) {
    $.ajax({
        type: "POST",
        url: "../include/db/load_suppliers.php",
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
                    var li_txt = "<option value='" + result[i].supplier_uid + "'>" + result[i].supplier_name + "</option>";
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
function load_manufacturer(ddlName, selectedvalue) {
    $.ajax({
        type: "POST",
        url: "../include/db/load_manufacturer.php",
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
                    var li_txt = "<option value='" + result[i].manufacturers_uid + "'>" + result[i].manufacturers_name + "</option>";
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
function load_compname(ddlName, selectedvalue) {
    $.ajax({
        type: "POST",
        url: "../include/db/load_compname.php",
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
                    var li_txt = "<option value='" + result[i].component_uid + "'>" + result[i].asset_tag + "</option>";
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
function load_users(ddlName, selectedvalue) {
    $.ajax({
        type: "POST",
        url: "../include/db/load_users.php",
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
                    var li_txt = "<option value='" + result[i].users_uid + "'>" + result[i].firstname + " ( " +  result[i].username + "-" + result[i].emp_id + ")"+"</option>";
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
function load_assetstatus(ddlName, selectedvalue) {
    $.ajax({
        type: "POST",
        url: "../include/db/load_assetstatuslist.php",
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
                    var li_txt = "<option value='" + result[i].status_uid + "'>" + result[i].status_name + "</option>";
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