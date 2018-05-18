

$(document).ready(function() {

    $("#search_term").on('keyup', function() {
        var search_term=$("#search_term").val();
        $.ajax({
            type:'post',
            dataType: "json",
            url:'get_results.php',
            data:{
                search_term:search_term
            },
            success:function(response) {
                var target = $("#result_div"); // where to output
                var template = $("#template").html();
                var html = Mustache.to_html(template, {data: response});
                target.html(html);
            }
        });
    });

    


});
// function pour réaliser l'autocomplète AJAX
// $( function() {
//     function auto( message ) {
//         $( "<div>" ).text( message ).prependTo( "#auto_div" );
//         $( "#auto_div" ).scrollTop( 0 );
//     }

//     $( "#search_term" ).autocomplete({
//         source: function( request, response ) {
//             $.ajax( {
//                 url: "auto.php",
//                 dataType: "json",
//                 data: {
//                     search_term: request.term
//                     //search_term:search_term
//                 },
//                     success: function( data ) {
//                     response( data );
//                    //}

//             } );
//         },
//         minLength: 1,
//         // select: function( event, ui ) {
//         //     log( "Selected: " + ui.item.value + " aka " + ui.item.id );
//         // }
//         } );
//     } );
