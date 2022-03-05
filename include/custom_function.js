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