<div class="container trending-topics">
  <div class="section">
    <h4 class="center">Les sujets du jour</h4>
    <p class="center">
      Siri analyse tous les jours les sujets qui font l'actualité afin d'être au courant de ce qu'il se passe dans le monde.
      <br>Aidez-le à se forger un avis en partageant votre opinion sur les actualités du jour.
    </p>
    <div class="row">
    <?php
    require_once('TwitterAPIExchange.php');

    $settings = array(
      'oauth_access_token' => "55237330-R2MpcqC1OIJAUH33l97BSw4xdXl9uVfU66iNxaiph",
      'oauth_access_token_secret' => "tCfKmfqUcPPPYJ8YVHMTeFVCzeSRld11eAJRqW21ufMjm",
      'consumer_key' => "7winBKhdFRN49LEvBkQfr49QX",
      'consumer_secret' => "9XBTcKJQEwmKMWLhz4wHv5kGL7mRIIowLQ7jJXGKOFuFgkYVus"
    );

    $url = 'https://api.twitter.com/1.1/trends/place.json';
    $getfield = '?id=23424819';
    $requestMethod = 'GET';
    $twitter = new TwitterAPIExchange($settings);
    $result = $twitter->setGetfield($getfield)
                 ->buildOauth($url, $requestMethod)
                 ->performRequest();
    $result = json_decode($result);

    $i = 0;
    foreach ($result[0]->trends as $value) {
      $i++;
      if($i > 12)
        break;
    ?>
      <div class="col s12 m4">
        <div class="card blue-grey darken-1">
          <div class="card-content white-text">
            <span class="card-title"><?=$value->name?></span>
          </div>
          <div class="card-action">
            <a href="#" class="send-my-vote" data-news="<?=$value->name?>" data-vote="like"><i class="material-icons">thumb_up</i></a>
            <a href="#" class="send-my-vote" data-news="<?=$value->name?>" data-vote="dislike"><i class="material-icons">thumb_down</i></a>
          </div>
        </div>
      </div>
    <?php
    }
    ?>
    </div>
  </div>
</div>