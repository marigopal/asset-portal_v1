$("#image_upload").change(function () {
    $("#button_upload_image").click();
});
$("#button_upload_image").click(function () {

    var fd = new FormData();
    var files = $('#image_upload')[0].files;
    if (files.length > 0) {
        fd.append('image_upload', files[0]);

        $.ajax({
            url: '../include/imageupload.php',
            type: 'post',
            data: fd,
            contentType: false,
            processData: false,
            success: function (response) {
                if (response != 0) {
                    $("#img_name").val(response);
                    $("#receipt_display").attr("src", "../image_location/" + response);
                    removehidden_class('receipt_display');
                } else {
                    alert('file not uploaded');
                }
            },
        });
    } else {
        alert("Please select a file.");
    }
});