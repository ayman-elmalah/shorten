$('body').on('click', '.delete_confirmation', function (e) {
    e.preventDefault();
    $(document).find('#delete_action').attr('action', $(this).attr('data-action'));
});