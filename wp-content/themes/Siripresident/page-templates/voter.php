<?php get_header(); //appel du template header.php  ?>
<body>

<section>
        <div class="left_container">
        <div class="card-panel white accent-1 text-vote">
            <h4>N'attendez plus pour agir !</h4>
            <p>Venez voter le 20 novembre 2017 pour votre candidat preféré ! Vous trouverez ci-dessous la carte de tous les bureaux de vote de france.
            Inscrivez votre adresse pour localiser le bureau de vote le plus proche de chez vous !</p>
            <div class="valign-wrapper">
                <!-- Modal Trigger -->
                <a class="waves-effect waves-light btn " href="#modal1">Modalités</a>

                <!-- Modal Structure -->
                <div id="modal1" class="modal">
                    <div class="modal-content formality_container">
                        <h4>Formalités</h4>
                        <p>Vous devez être :</p>
                        <ul>
                            <li>
                                -> De nationalité Française
                            </li>
                            <li>
                                -> Majeur(plus de 18 ans)
                            </li>
                            <li>
                                -> Libre de jouir de ces droits civiques et politiques
                            </li>
                            <li>
                                -> Inscrit sur la liste éléctorale
                            </li>
                        </ul>

                        <p>Vous devez être muni de :</p>
                        <ul>
                            <li>
                                -> Une pièce d'identité prouvant votre nationalité française
                            </li>
                            <li>-> Une pièce de 2 euros pour financer l'organisation des bureaux de vote
                            </li>
                        </ul>
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/YMPFWCo0xeQ" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div class="modal-footer">
                        <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Compris</a>
                    </div>
                </div>
            </div>
        </div>
    <div class="card-panel white accent-1 join_block">
        <?php echo    do_shortcode('[contact-form-7 id="64" title="Formulaire de contact 1"]'); ?>
    </div>
        </div>
    <div class=" googlemap_block">
    <?php echo do_shortcode("[huge_it_maps id='1']"); ?>
    </div>


</section>


<script src="https://maps.googleapis.com/maps/api/js" type="text/javascript"></script>

</body>
</html>