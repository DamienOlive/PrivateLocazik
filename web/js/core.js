
var alertBox = function(type, title, message) {
    BootstrapDialog.show({
        type: type,
        title: title,
        message: message,
        buttons: [{
                label: 'Ok',
                action: function(dialogRef) {
                    dialogRef.close();
                }
            }]
    });
}

$(document).ready(function() {
    $('#showAnnonceConnexionCompte').click(function(){
        $('#annonceConnexionCompte').slideToggle(300);
    });
});