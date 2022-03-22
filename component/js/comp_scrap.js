var url_string = window.location.href;
var url = new URL(url_string);
var _id = url.searchParams.get("log_id");
$.ajax({
    url: "viewlist/comp_scrap_viewlist.php",
    type: "POST",
    data: {_id: _id},
    cache: false,
    success: function (data) {
        $('#_index_componentscrap_list').html(data);
         generateDTable('comp_scrap');
        }
});