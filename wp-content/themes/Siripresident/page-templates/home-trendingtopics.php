<div class="section">
  <div class="row">
  <?php
  require_once('TwitterAPIExchange.php');

  /** Set access tokens here - see: https://dev.twitter.com/apps/ **/
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


  foreach ($result[0]->trends as $value) {
  ?>
    <div class="col s12 m5">
      <div class="card blue-grey darken-1">
        <div class="card-content white-text">
          <span class="card-title"><?=$value->name?></span>
        </div>
        <div class="card-action">
          <a href="#">This is a link</a>
          <a href="#">This is a link</a>
        </div>
      </div>
    </div>
  <?php
  }
  ?>
  </div>
</div>