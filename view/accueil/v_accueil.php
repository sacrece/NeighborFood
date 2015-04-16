<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="accueil.css" /> <!-- associe cette page au page css stylessheet-->
    <title>NeihgborFood - Bienvenue sur notre site! </title>
</head>


<body>
<div id="bloc_page">
    <header>

    </header>


    <div id="menu">
        <nav>
            <ul>
                <li class="Home"><a href="#">Home</a></li>
                <li class="Home"><a href="#">Forum</a> </li>
                <li class="Home"><a href="#">Connexion</a> </li>
                <li class="Home"><a href="#">Créer un compte</a> </li>
                <li> <a href="#">Acheter </a> </li>
            </ul>
        </nav>
    </div>


    <section>

        <div id="presentation">
            <h2> Bienvenue sur NeighborFood </h2>
            <p>
            <h1>Qui sommes nous ?</h1>
            NeighborFood est un site à but non lucratif avec pour objectif de mettre à disposition<br>
            des habitants d’un quartier, d’une commune ou d’une ville, un site Web d’achat ou d’échange<br>
            de fruits et légumes frais cultivés à proximité de chez les utilisateurs.
            </p>
        </div>
        <div id="communauté">
            <p>
            <h1>La communauté NeighborFood</h1>
            NeighborFood a pour vocation de créer une veritable communauté entre les membres inscrits du<br>
            site. Nous proposant un forum, dans le quel les membres pourront posé des questions et participé<br>
            a la vie du site
            </p>
        </div>
        <footer>
            <div>
                <ul>
                    <help>
                        <li><a href="#">Aide en ligne</a></li>
                        <li><a href="#">Contacter nous</a></li>
                    </help>
                </ul>
            </div>
            <div class="social">
                <p><i>Vous avez aimé ce site ? Alors partagez-le avec vos amis en cliquant sur les boutons ci-dessous :</i></p>
                <a target="_blank" title="Twitter" href="https://twitter.com/share?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>&via=korben" rel="nofollow" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=400,width=700');return false;"><img src="http://korben.info/wp-content/themes/korben2013/hab/twitter_icon.png" alt="Twitter" /></a>
                <a target="_blank" title="Facebook" href="https://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>&t=<?php the_title(); ?>" rel="nofollow" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=500,width=700');return false;"><img src="http://korben.info/wp-content/themes/korben2013/hab/facebook_icon.png" alt="Facebook" /></a>
                <a target="_blank" title="Google +" href="https://plus.google.com/share?url=<?php the_permalink(); ?>&hl=fr" rel="nofollow" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=450,width=650');return false;"><img src="http://korben.info/wp-content/themes/korben2013/hab/gplus_icon.png" alt="Google Plus" /></a>
            </div>

        </footer>
    </section>


</div>

</body>
</html>