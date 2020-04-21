$(document).ready(function() {
    var source = $("#card-template").html();
    var templateCard = Handlebars.compile(source);

    $.ajax({
        url: 'server.php',
        method: 'GET',
        success: function (data) {
            var dischi = data;
            for (var i = 0; i < dischi.length; i++) {
                var disco = dischi[i];
                var cardCompilata = templateCard(disco);
                $('.container').append(cardCompilata);
            }
        },
        error: function() {
            alert('errore recupero informazioni');
        }
    })
});
