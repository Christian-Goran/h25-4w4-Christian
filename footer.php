<!-- format du footer -->

<footer>
    <div class="piedpage global">
        <section class="piedpage__s1">
         
                <?php wp_nav_menu(array(
                    "menu"=> "externe",
                    "container" => "nav",
                    "container_class" => "piedpage__s1__externe"
                )); ?>
    

            <div class="piedpage__s1__adresse">
                <div class="piedpage__s1__adresse">
                  <p class="piedpage__s1__coord">
                   Christian Darius Goran       
                  </p>
                  <p class="piedpage__s1__coord">
                  3800 R. Sherbrooke E, Montréal, QC H1X 2A2
                  </p> 
                  <div class="piedpage__s1__icone-app">
                    <img src="https://s2.svgbox.net/social.svg?ic=facebook&color=000000" width="20" height="20">
                    <img src="https://s2.svgbox.net/social.svg?ic=linkedin&color=000000" width="20" height="20">
                    <img src="https://s2.svgbox.net/social.svg?ic=paypal&color=000000" width="20" height="20">
                    <img src="https://s2.svgbox.net/social.svg?ic=stackoverflow&color=000000" width="20" height="20">
                  </div>  
                </div>

                <div class="piedpage__s1__adresse__recherche">
                  <?php get_search_form() ?>
                </div>
            </div>

            <div class="piedpage__s1__description">
               
            </div>
        </section>
        
        <section class="piedpage__s2">
        </section>
    </div>
</footer>
<?php wp_footer() ?>