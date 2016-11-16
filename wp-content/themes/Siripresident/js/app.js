
jQuery(document).ready(function($){

    jQuery(document).ready(function($){
        var currentlySearching = false;

        $(".send-my-vote").on("click", function(e){
            e.preventDefault();
            var news = this.dataset.news;

            if(localStorage.getItem(news) === null){
                this.style.color = "#ffd8a6";
                localStorage.setItem(news, 1);
            }
        });
    });

    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();


    // Ajax for article category

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
