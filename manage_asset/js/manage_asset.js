$(document).ready(function () {
    var url_string = window.location.href;
    var url = new URL(url_string);
    var _id = url.searchParams.get("id");
    if (_id != undefined) {
        load_data(_id);
    } else
    {
        $("#category").removeAttr('readonly', false);
        $("#assettag_div").attr("hidden", true);
        load_assetcategory('category');
        load_manufacturer('manufacturer');
        load_model('model');
    }
});
function load_data(_id) {
    $.ajax({
        url: "db/get_component.php",
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
                    var asset_tag = result[i]['asset_tag'];
                    var warranty = result[i]['warranty'];
                    var from_category_ = result[i]['category'];
                    var manufacturer_ = result[i]['manufacturer'];
                    var model_ = result[i]['model'];
                    var modelno_ = result[i]['model_no'];
                    var serialno = result[i]['serialno'];
                    var remarks = result[i]['remarks'];
                    if (len > 0)
                    {
                        $("#comp_uid").val(_id);
                        $("#asset_tag").val(asset_tag);
                        $("#warranty").val(warranty);
                        $("#category").val(from_category_);
                        load_assetcategory('category', from_category_);
                        $("#manufacturer").val(manufacturer_);
                        load_manufacturer('manufacturer', manufacturer_);
                        load_model('model', model_);
                        if(model_ != ''){
                        load_modelno('asset_modelno', model_, modelno_);
                    }
                        $("#serial").val(serialno);
                        $("#remarks").val(remarks);
                    }
                }
            }
        }
    });
}
$("#savecomponent_btn").click(function () {
    var isNew = false;
    var comp_uid = $("#comp_uid").val();
    var category = $("#category").val();
    var asset_category_name = $("#asset_category_name").val();
    var asset_tag = $("#asset_tag").val();
    var warranty = $("#warranty").val();
    var manufacturer = $("#manufacturer").val();
    var model = $("#model").val();
    var asset_modelno = $("#asset_modelno").val();
    var serial = $("#serial").val();
    var remarks = $("#remarks").val();
    add_disabled('savecomponent_btn');
    if (comp_uid == '')
    {
        isNew = true;
    }
    $.ajax
            ({
                type: "POST",
                url: "db/db_manage_asset.php",
                data: 'isNew=' + isNew.toString() + '&comp_uid=' + comp_uid + '&category=' + category + '&asset_category_name=' + asset_category_name + '&asset_tag=' + asset_tag + '&warranty=' + warranty + '&manufacturer=' + manufacturer + '&model=' + model + '&asset_modelno=' + asset_modelno + '&serial=' + serial + '&remarks=' + remarks,
                datatype: "html",
                success: function (result)
                {
                    if (result.trim() == 1)
                    {
                        if (isNew == true)
                        {
                            toastr_success('Added Successfully.', '../component/');
                        } else
                        {
                            toastr_success('Updated Successfully.', '../component/');
                        }
                    } else
                    {
                        toastr_error();
                    }
                }
            });
});

function load_modelno(ddlName, model, selectedvalue)
{

    var asset_model_text = $("#model option:selected").text();
    $.ajax({
        type: "POST",
        url: "db/load_modelno.php",
        data: {asset_model: model},
        success: function (_result)
        {
            var result = JSON.parse(_result.replace('\n', ''));
            $('#' + ddlName).empty();
            var select_li_txt = "<option value='0'>Select</option>";
            $('#' + ddlName).append(select_li_txt);
            if (result != '')
            {
                $.each(result, function (i) {
                    var li_txt = "<option value='" + result[i].modelno_uid + "'>" + asset_model_text + " " + result[i].model_number + "</option>";
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
    function load_assetprefix() {
      var asset_category = $("#category").val();
        $.ajax({
            url: "db/get_assetprefix.php",
            type: "POST",
            data: {id: asset_category},
            dataType: 'json',
            success: function (result)
            {
                var len = result.length;
                if (len != 0)
                {
                    for (var i = 0; i < len; i++)
                    {
                        var _category_prefix = result[i]['category_prefix'];

                        if (len > 0)
                        {

                            $("#asset_category_name").val(_category_prefix);

                        }
                    }
                }
            }
        });
    }
