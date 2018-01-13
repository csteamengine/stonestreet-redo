/* show file value after file select */
$('.custom-file-input').on('change',function(){
    $(this).next('.form-control-file').addClass("selected").html($(this).val());
    if ($(this)[0].files) {
        var files = $(this)[0].files;
        for(var i = 0; i< files.length; i++){
            console.log(files[i]);
            var reader = new FileReader();

            reader.onload = function (e) {
                //alert(e.target.result);
                var newImg= ""+
                    "<div class='imgdiv'>" +
                    "<img src='" + e.target.result +  "' class='imgdivimg' />" +
                    "<i class='fa fa-trash fa-2x' onclick='deleteImage()'></i> " +
                    "" +
                    "</div>";

                $('#imageCard').append(newImg);
            }

            reader.readAsDataURL($(this)[0].files[i]);
        }

    }

});

function deleteImage(){
    //TODO remove the parent div of this image, and remove it from the input
    console.log('removing image');
}

/* method 2 - change file input to text input after selection
$('.custom-file-input').on('change',function(){
    var fileName = $(this).val();
    $(this).next('.form-control-file').hide();
    $(this).toggleClass('form-control custom-file-input').attr('type','text').val(fileName);
})
*/