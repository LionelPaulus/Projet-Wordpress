
jQuery(document).ready(function($){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();




    $("#slide-out a").on("click",function(e){
        e.preventDefault();
        var term_id = $(this).attr("data-id");

        var content= $(".description_programmation");
        $(".slide-out a").removeClass("current");
        $(this).addClass("current");
        content.empty().append("Recherche en cours...");

        jQuery.post(
            ajaxurl,
            {

                'action'  : 'filtre-category',
                'term_id' : term_id,
                'paged'   : 1
            },
            function(response)
            {
                console.log(response);
            }
        );



    });







});














