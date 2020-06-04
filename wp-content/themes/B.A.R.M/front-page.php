<?php get_header(''); ?>

<section id="imgTop">
    <div class="container-fluid containerTopPage">
        <div class="topPage">

            <div class="titleTop">
                <h1>B.A.R.M</h1>
                <p>Become A Real Masseur</p>
            </div>

            <div class="phraseMid">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perspiciatis non totam, adipisci asperiores iure consectetur laborum fugit</p>
            </div>

            <div class="buttonBot">
                <button onclick="location.href='<?php echo esc_url( apply_filters( 'woocommerce_return_to_shop_redirect', wc_get_page_permalink( 'shop' ) ) ); ?>';">Acheter une formation</button>
            </div>
        </div>
    </div>
</section>

<section id="biographieMid">
    <div class="container-fluid containerBiographie">
        <div class="row">
            <div class="col-lg-6 biographieText">
                <h2>
                    Biographie
                </h2>
                <p>
                Régis Kaldy est praticien de massages et possède plus de 20 ans d’expérience, de pratique et d’interventions auprès de personnalités du monde entier toutes différentes les unes des autres : personnalités du show business, de la politique, du monde sportif, de l’industrie.
                <br>
                En tant que masseur il a toujours été animé par la conviction qu’apporter du bien-être nécessitait d’avoir des gestes justes bien au-delà d’une simple technique et qu’au contraire il fallait non seulement être disponible à l’autre mais également maitriser les principes propres sous-jacent à un massage de qualité.
                </p>
            </div>
            <div class="col-lg-6 d-flex align-items-center justify-content-center biographieImg">
                <img src="<?php bloginfo('template_directory') ?>/images/sourire.jpg" alt="Profile Photo" width="70%" class="img-fluid">
            </div>
        </div>
    </div>
</section>

<section id="newVideos">
    <h2>
        Nouveautés
    </h2>
    <div class="container-fluid containerVideo">
        <div class="row">

            <div class="col-lg-4 newVideo">

                <div class="videoContainer">
                    <!-- <img src="<?php //bloginfo('template_directory') ?>/images/exemple_miniature.png" alt="miniature" class="img-fluid"> -->

                </div>
                <div class="titleContainer">
                    Titre de la formation
                </div>
                
            </div>
            <div class="col-lg-4 newVideo">

                <div class="videoContainer">
                    <!-- <img src="<?php bloginfo('template_directory') ?>/images/exemple_miniature.png" alt="miniature" class="img-fluid"> -->

                </div> 
                <div class="titleContainer">
                    Titre de la formation
                </div>

            </div>
            <div class="col-lg-4 newVideo">

                <div class="videoContainer">
                    <!-- <img src="<?php bloginfo('template_directory') ?>/images/exemple_miniature.png" alt="miniature" class="img-fluid"> -->

                </div> 
                <div class="titleContainer">
                    Titre de la formation
                </div>
            </div>

        </div>
        
    </div>

    <div class="buttonNew">
        <button onclick="location.href='<?php echo esc_url( apply_filters( 'woocommerce_return_to_shop_redirect', wc_get_page_permalink( 'shop' ) ) ); ?>';">Voir toutes les formations</button>
    </div>
</section>




<?php get_footer(); ?>