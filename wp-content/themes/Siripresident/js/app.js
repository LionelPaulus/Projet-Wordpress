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
