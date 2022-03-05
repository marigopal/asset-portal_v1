
function inputbox_error_notification(input, msg)
{
    $("#" + input).addClass('is-invalid');
    $("#" + input).prop('title', msg);
    $("#" + input).focus();
}
function inputbox_success_notification(input, msg)
{
    $("#" + input).addClass('is-valid');
    $("#" + input).prop('title', msg);
    $("#" + input).focus();
}
function input_remove_error_notification(input)
{
    $("#" + input).removeClass('is-invalid');
    $("#" + input).prop('title', '');
    $("#" + input).focus();
}
function remove_disabled(id)
{
    $("#" + id).removeAttr('disabled');
}
function remove_required(id)
{
    $("#" + id).removeAttr('required');
}
function add_disabled(id)
{
    $("#" + id).attr('disabled', true);
}
function add_hidden(id)
{
    $("#" + id).attr('hidden', true);
}
function modal_hide(id)
{
    $("#" + id).modal('hide');
}
function removehidden_class(id)
{
    $("#" + id).removeClass('d-none');
}
function addhidden_class(id)
{
    $("#" + id).addClass('d-none');
}
function toastr_success_selfreload(msg)
{
    toastr.success(msg);
    setTimeout(function () {
        location.reload(true);
    }, 2000);
}
function toastr_success(msg, location)
{
    toastr.success(msg);
    setTimeout(function () {
        window.location.href = location;
    }, 2000);
}
function toastr_success_no_redirect(msg)
{
    toastr.success(msg);
    setTimeout(function () {

    }, 2000);
}
function toastr_success_parameter(msg, location, parameter)
{
    toastr.success(msg);
    setTimeout(function () {
        window.location.href = location + '?id=' + parameter;
    }, 2000);
}
function toastr_error()
{
    toastr.error('Something Went Wrong..!Please tray again..');
    setTimeout(function () {
        table.ajax.reload();
    }, 2000);
}
function toastr_error_pagereload()
{
    toastr.error('Something Went Wrong..!Please tray again..');
    setTimeout(function () {
        window.location.reload();
    }, 2000);
}
function toastr_error_msg(msg)
{
    toastr.error(msg);
    setTimeout(function () {
        table.ajax.reload();
    }, 3000);
}
function generateDTable(tablename) {
    $("#" + tablename).DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
        "scrollX": true
    }).buttons().container().appendTo('#' + tablename + '_wrapper .col-md-6:eq(0)');
}
function generateUID()
{
    return window.btoa(Array.from(window.crypto.getRandomValues(new Uint8Array(8 * 2))).map((b) => String.fromCharCode(b)).join("")).replace(/[+/]/g, "").substring(0, 8);
}