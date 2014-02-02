
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

var orderAnnonceBy = function(obj) {
    var orderBy = $(obj).val();
    if (orderBy) {
        var location = window.location.href;
        var url = '';
        if (location.indexOf('orderBy') != '-1') {
            url = location.replace(/(orderBy=)[^\&]+/, '$1' + orderBy);
        } else {
            if (location.indexOf('?') != '-1') {
                url = location + '&orderBy=' + orderBy;
            } else {
                url = location + '?orderBy=' + orderBy;
            }
        }

        window.location.href = url;
    }
}

$(document).ready(function() {
    $('#showAnnonceConnexionCompte').click(function() {
        $('#annonceConnexionCompte').slideToggle(300);
    });

    $('#affNumTelAnnonce').click(function() {
        var annonceKey = $('#annonceKey').val();
        $.ajax({
            url: 'http://localhost/locazik/web/app_dev.php/annonce/detail/getNumTel/' + annonceKey,
            type: "get",
            dataType: 'json',
            async: true,
            success: function(data) {
                if (data['result'] === 'success') {
                    $('#affNumTelAnnonce').html(data['numTel']);
                    alert('penser à supprimer le rappel ajax afin déviter le spam de requete');
                }
            }
        });
    });

    $(".autocompleteCpAnnonceCreation").autocomplete({
        minLength: 4,
        scrollHeight: 220,
        source: function(req, add) {
            $.ajax({
                url: 'http://localhost/locazik/web/app_dev.php/geo/listeVilles/' + req.term,
                type: "get",
                dataType: 'json',
                //data: req.term,
                async: true,
                cache: true,
                success: function(data) {
                    var suggestions = [];
                    //process response  
                    $.each(data['data'], function(i, val) {
                        suggestions.push({"id": val.id, "value": val.cp + ' - ' + val.nom});
                    });
                    //pass array to callback  
                    add(suggestions);
                }
            });
        }
    });
});