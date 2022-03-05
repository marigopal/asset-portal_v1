var url_string = window.location.href;
var url = new URL(url_string);
var _filter = url.searchParams.get("filter");
$.ajax({
    url: "viewlist/import_users_viewlist.php",
    type: "POST",
    data: {filter: _filter},
    cache: false,
    success: function (data) {
        $('#_index_users_list').html(data);
        generateDTable('users_list');
    }
});
$("#file").change(function(){
    $(".import_button").click();
});