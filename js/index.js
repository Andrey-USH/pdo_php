$('#but').click(function(){
    $.ajax({
        type: "POST",
        url: "container.php",
        data: ('#form').serialize(),
        success: function(response) {
            $('#data').html(response);
        }
    })
});



