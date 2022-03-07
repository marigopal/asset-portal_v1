var url_string = window.location.href;
var url = new URL(url_string);
var _filter = url.searchParams.get("filter");
$.ajax({
    url: "viewlist/asset_viewlist.php",
    type: "POST",
    data: {filter: _filter},
    cache: false,
    success: function (data) {
        $('#_index_component_list').html(data);
        generateDTable('component_list');
    }
});
$("#delete_button").click(function ()
{
    var uid = $("#delete_uid").val();
    $.ajax
            ({
                type: "POST",
                url: "db/delete_supplier.php",
                data: 'uid=' + uid,
                datatype: "html",
                success: function (result)
                {
                    if (result == 1)
                    {
                        modal_hide('delete_modal_box');
                        toastr_success('Deleted Successfully.', '');
                    } else
                    {
                        toastr_error();
                    }
                }
            });
});
$(document).ready(function () {
    load_suppliers('invupd_supplier');
    load_assetcategory('asset_category_select');
});
$("#asset_category_select").change(function () {
    
    var val = $(this).val(); // get selected value
    if(url_string == '')
    {
        var url_string = url_string + "index";
    }
    var urlparam = url_string +"?id="+ val;
    if (urlparam) { // require a URL
        window.location = urlparam; // redirect
    }
    return false;
});