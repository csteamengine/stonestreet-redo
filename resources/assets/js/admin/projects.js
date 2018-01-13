/* show file value after file select */
$('.custom-file-input').on('change',function(){
    $(this).next('.form-control-file').addClass("selected").html($(this).val());
    console.log($(this)[0].files);
    if ($(this)[0].files) {
        var files = $(this)[0].files;
        for(var i = 0; i< files.length; i++){
            console.log(files[i]);
            var reader = new FileReader();

            reader.onload = function (e) {
                //alert(e.target.result);
                var newImg= ""+
                    "<div class='imgdiv col-12 col-sm-6 col-md-4'>" +
                    "<img src='" + e.target.result +  "' class='imgdivimg img-fluid' />" +
                    "<i class='fa fa-trash fa-2x deleteImageIcon'></i> " +
                    "" +
                    "</div>";

                $('#imageCard').append(newImg);
            }

            reader.readAsDataURL($(this)[0].files[i]);
        }

    }

});

$('body').on('click', '.deleteImageIcon', function() {
    // do something
    $(this).parent().remove();
    if ($('.custom-file-input')[0].files) {
        var files = $('.custom-file-input')[0].files;
        for(var i = 0; i< files.length; i++) {
            if($('.custom-file-input')[0].files[i]){

            }
        }

    }
});

/* method 2 - change file input to text input after selection
$('.custom-file-input').on('change',function(){
    var fileName = $(this).val();
    $(this).next('.form-control-file').hide();
    $(this).toggleClass('form-control custom-file-input').attr('type','text').val(fileName);
})
*/