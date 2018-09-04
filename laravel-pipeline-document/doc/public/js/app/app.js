$( document ).ready(function() {
    $('.id-proyecto').click(function () {
        var id = $(this).attr('data-id-proyecto');
console.log(id);        
        $('#exampleModalLabel').text(id);
        $('ul.list-group.lista-documentos').html('');
        $.getJSON('/documentosPorProyecto/' + id, function (data) {
            $.each(data, function(key, item) {
                console.log(item);
               var elemento = '<li class="list-group-item">' +
                            '<a href="/documento/'+ item.uuid +'">'+item.nombre+'</a>' +
                        '</li>';
                $('ul.list-group.lista-documentos').append(elemento);             
            })

        });
    });
});



$(document).on("ready", function () {
console.log('iniciando ...');
    function GetDocumenByProject() {
        var item = "";
        $('#tblList tbody').html('');
        $.getJSON('/api/person', function (data) {
            $.each(data, function (key, value) {
                item += "<tr><td>" + value.Name + "</td><td>" + value.LastName + "</td><td>" + value.Twitter + "</td></tr>";
            });
            $('#tblList tbody').append(item);
        });
    }
});