$(document).ready(function () {
    $(document).on('click', '#update_image', function (e) {
        e.preventDefault();
        if ($("#photo").length) {
        
            $("#update_image").hide();
            $("#cancel_update_image").show();
            $("#photo").show();
        
        }
        return false;
    });




});