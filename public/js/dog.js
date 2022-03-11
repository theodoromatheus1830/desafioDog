$(document).ready(function(){

    if(localStorage.dogName != undefined){
        $('#dogName').val(localStorage.dogName);
        $('#breed').val(localStorage.breed);
        $('#font').val(localStorage.font);
        $('#color').val(localStorage.color);

        var myModal = $('#dogInfoModal');
        myModal.modal('show');
        $('#dogNameLabel').text(localStorage.dogName);
        $('#dogNameLabel').css("font-family", localStorage.font);
        $('#dogNameLabel').css("color", localStorage.color);
        var breed = localStorage.breed.replace("`", '');
        var breed = breed.replace("`", '');

        $.ajax({
            url: 'https://dog.ceo/api/breed/'+ breed +'/images/random',
            type: 'GET',
            dataType: 'json',
            success: function(res) {
                
                $('#imgModal').show();

                var url = JSON.stringify(res.message);
                url = url.replace('"', '');
                url = url.replace('"', '');
                $('#imgModal').attr("src", url);
            }
        });
    }

    // Cancela o evento de submit para salvar no localstorage
    $( "#form" ).submit(function( event ) {
        event.preventDefault();

        localStorage.dogName = $('#dogName').val();
        localStorage.breed = $('#breed').val();
        localStorage.font = $('#font').val();
        localStorage.color = $('#color').val();
        localStorage.datetime = Date.now();

        alert("Salvo com sucesso!");

        location.reload();

    });
});