var url_string = window.location.href;
var url = new URL(url_string);
var _filter = url.searchParams.get("inv_id");
$.ajax({
    url: "viewlist/invoice_viewlist.php",
    type: "POST",
    data: {filter: _filter},
    cache: false,
    success: function (data) {
        $('#_index_invloice_list').append(data);
        generateDTable('invoice_list');
    }
});
