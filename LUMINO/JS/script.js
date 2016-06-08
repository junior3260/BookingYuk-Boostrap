/*khusus untuk input berupa angka [8b]==============================================================================================*/
function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
    return false;
	return true;
}
/*melihat preview file gambar yang dipilih [33b]====================================================================================*/
$(document).ready(function() {
    $("#fupload").on('change', function() {
    //Get count of selected files
        var countFiles = $(this)[0].files.length;
        var imgPath = $(this)[0].value;
        var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
        var image_holder = $("#i");
        image_holder.empty();
        if (extn == "gif" || extn == "png" || extn == "jpg" || extn == "jpeg") {
            if (typeof(FileReader) != "undefined") {
              //loop for each file selected for uploaded.
              for (var i = 0; i < countFiles; i++) {
                var reader = new FileReader();
                reader.onload = function(e) {
                  $("<img />", {
                    "src": e.target.result,
                    "class": "display_preview_image"
                  }).appendTo(image_holder);
                }
                image_holder.show();
                reader.readAsDataURL($(this)[0].files[i]);
              }
            } else {
              alert("This browser does not support FileReader.");
            }
        } else {
            alert("Pls select only images");
        }
    });
});

/*membuat efek kaca pembesasar [12b]================================================================================================*/
jQuery(document).ready(function($){
	$('#pembesargambar').perbesaran({
		sorotanu: 2,
		kisaranu: [2,10],
		anubesar: null,
		pembesaranu: [160,160]
	})
})