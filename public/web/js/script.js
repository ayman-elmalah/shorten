$(document).ready(function () {
    // Copy to clipboard
    function copyToClipboard(element, text) {
        var $temp = $("<input>");
        $("body").append($temp);
        $temp.val(text).select();
        document.execCommand("copy");
        $temp.remove();
    }

    // Store request
    $('#link_store').on('submit', function (e) {
        e.preventDefault();
        var url = $(this).attr('action');
        var method = $(this).attr('method');
        var data = $(this).serialize();
        $.ajax({
            url : url,
            method : method,
            data : data,
            dataType : 'json',
            success : function (data) {
                $('#link_message').empty().removeClass('alert-danger alert-success');
                if (data.errors) {
                    $('#link_message').text(data.errors.full_url).addClass('alert-danger');
                } else {
                    $('#link_store')[0].reset();
                    var url = data.url;
                    copyToClipboard('link', url);
                    $('#link_message').text('Link is copied to your clipboard').addClass('alert-success');
                }
            },
            error : function () {
                alert('There error on server');
            }
        });
        return false;
    });

    $('body').on('click', '.delete_confirmation', function (e) {
        e.preventDefault();
        $(document).find('#delete_action').attr('action', $(this).attr('data-action'));
    });
});