<?php
if (!empty($_GET['email'])) {
$email = $_GET['email'];
$wpdb->insert(
  $wpdb->prefix.'newsletter',
  array(
    'email' => $email
  )
);
}
?>
    <footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Recevez la newsletter</h5>
                <div class="row">
        			<div class="input-field col s12">
              <form action="#">
         				<input style="color: #fff !important;" name="email" id="email" type="email" class="validate">
          				<label for="email">Email</label> <button class="btn waves-effect waves-light" type="submit" name="action">Valider</button>
              </form>
        			</div>
      			</div>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Suivez Siri</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Facebook</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Twitter</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Instagram</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Linkedin</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2016 Siri 2017 Projet WordPress
            <a class="grey-text text-lighten-4 right" href="https://github.com/LionelPaulus/Projet-Wordpress" target="_blank">Our Github</a>
            </div>
          </div>
        </footer>