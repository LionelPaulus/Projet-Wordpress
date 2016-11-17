jQuery(document).ready(function($){
  // Materialize modal
  // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
  $('.modal').modal();


  //////////
  //LIONEL//
  //////////

  // Ajax for news vote
  var currentlyVoting = false;
  $(".send-my-vote").on("click", function(e){
    e.preventDefault();
    var news = this.dataset.news;
    var vote = this.dataset.vote;

    if(localStorage.getItem(news) === null){
      this.style.color = "#ffd8a6";
      localStorage.setItem(news, 1);

      jQuery.post(
        ajaxurl,
        {
          'action': 'news_vote',
          'news'  : news,
          'vote' : vote
        }
      );
    }else{
      alert('Vous avez déjà voté pour cette actualité.');
    }
  });


  /////////
  //LOUIS//
  /////////

  // Ajax for article category
  $("#slide-out a").on("click",function(e){
    e.preventDefault();
    var term_id = $(this).attr("data-id");

    var content=  $(".article_prog");
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
        content.html(response);
        // ajoute la propriété pour le drop et le transfert de données
        $.event.props.push('dataTransfer');


        var i, $this;


        $('.text_prog').on({

          // on commence le drag
          dragstart: function(e) {
            console.log('commence');
            $this = $(this);

            i = $this.index();
            $this.css('opacity', '0.5');

            // on garde le texte en mémoire (A, B, C ou D)
            e.dataTransfer.setData('text', $this.html());
          },

          // déclenché tant qu on a pas lâché l élément
          dragover: function(e) {
            e.preventDefault();
          },
          // on lâche l élément
          drop: function(e) {
            // si l élément sur lequel on drop n'est pas l'élément de départ
            if (i !== $(this).index()) {
              // on récupère le texte initial
              var data = e.dataTransfer.getData('text');


              // on met le nouveau texte à la place de l ancien et inversement
              $this.html($(this).html());
              $(this).html(data);
            }

          },
          // fin du drag (même sans drop)
          dragend: function() {
            $(this).css('opacity', '1');
          },

        });
      }
    );
  });
});
