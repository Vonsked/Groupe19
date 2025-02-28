<?php
require_once "configuration.php";
$sql = "SELECT * FROM produit WHERE id_produit=3";
$stmt = $db->prepare($sql);
$stmt->execute();

while($row = $stmt->fetch(PDO::FETCH_ASSOC)):
    ?>


    <!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/produit.css">
        <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
        <title>L'Atelier Rétro</title>
    </head>
    <body>
    <!-- HEADER -->
    <header class="clearfix">
        <section class="header">
            <div class="header-left">
                <h1>
                    <a href="#"><img src="img-layout/logo.png" alt="logo"></a>
                </h1>
            </div>
            <div class="header-right">
                <div class="compte">
                    <img src="img-layout/compte.png" alt="Mon Compte">
                    <h3>
                        <a href="#">Mon Compte</a>
                    </h3>
                </div>
                <div class="panier">
                    <img src="img-layout/panier.png" alt="Panier">
                    <h3>
                        <a href="#">Panier</a>
                    </h3>
                </div>
            </div>
        </section>
        <section>
            <nav>
                <div class="navigation">
                    <ul class="categories">
                        <li class="firstli lis">
                            <a href="#">NINTENDO</a>
                            <ul class="nintendo">
                                <li>
                                    <a href="#">Jeux</a>
                                </li>
                                <li>
                                    <a href="#">Consoles</a>
                                </li>
                                <li>
                                    <a href="#">Accessoires</a>
                                </li>
                            </ul>
                        </li>
                        <li class="lis">
                            <a href="#">SEGA</a>
                            <ul class="sega">
                                <li>
                                    <a href="#">Jeux</a>
                                </li>
                                <li>
                                    <a href="#">Consoles</a>
                                </li>
                                <li>
                                    <a href="#">Accessoires</a>
                                </li>
                            </ul>
                        </li>
                        <li class="lis">
                            <a href="#">ATARI</a>
                            <ul class="atari">
                                <li>
                                    <a href="#">Jeux</a>
                                </li>
                                <li>
                                    <a href="#">Consoles</a>
                                </li>
                                <li>
                                    <a href="#">Accessoires</a>
                                </li>
                            </ul>
                        </li>
                        <li class="lis">
                            <a href="#">SONY</a>
                            <ul class="sony">
                                <li>
                                    <a href="#">Jeux</a>
                                </li>
                                <li>
                                    <a href="#">Consoles</a>
                                </li>
                                <li>
                                    <a href="#">Accessoires</a>
                                </li>
                            </ul>
                        </li>
                        <li class="lis">
                            <a href="#">MICROSOFT</a>
                            <ul class="microsoft">
                                <li>
                                    <a href="#">Jeux</a>
                                </li>
                                <li>
                                    <a href="#">Consoles</a>
                                </li>
                                <li>
                                    <a href="#">Accessoires</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" style="display:none">
                    <symbol xmlns="http://www.w3.org/2000/svg" id="sbx-icon-search-13" viewBox="0 0 40 40">
                        <path
                            d="M26.804 29.01c-2.832 2.34-6.465 3.746-10.426 3.746C7.333 32.756 0 25.424 0 16.378 0 7.333 7.333 0 16.378 0c9.046 0 16.378 7.333 16.378 16.378 0 3.96-1.406 7.594-3.746 10.426l10.534 10.534c.607.607.61 1.59-.004 2.202-.61.61-1.597.61-2.202.004L26.804 29.01zm-10.426.627c7.323 0 13.26-5.936 13.26-13.26 0-7.32-5.937-13.257-13.26-13.257C9.056 3.12 3.12 9.056 3.12 16.378c0 7.323 5.936 13.26 13.258 13.26z"
                            fill-rule="evenodd"/>
                    </symbol>
                    <symbol xmlns="http://www.w3.org/2000/svg" id="sbx-icon-clear-5" viewBox="0 0 20 20">
                        <path
                            d="M10 20c5.523 0 10-4.477 10-10S15.523 0 10 0 0 4.477 0 10s4.477 10 10 10zm1.35-10.123l3.567 3.568-1.225 1.226-3.57-3.568-3.567 3.57-1.226-1.227 3.568-3.568-3.57-3.57 1.227-1.224 3.568 3.568 3.57-3.567 1.224 1.225-3.568 3.57zM10 18.272c4.568 0 8.272-3.704 8.272-8.272S14.568 1.728 10 1.728 1.728 5.432 1.728 10 5.432 18.272 10 18.272z"
                            fill-rule="evenodd"/>
                    </symbol>
                </svg>

                <form novalidate="novalidate" onsubmit="return false;" class="searchbox sbx-custom">
                    <div role="search" class="sbx-custom__wrapper">
                        <input type="search" name="search" placeholder="Rechercher un produit" autocomplete="off" required="required" class="sbx-custom__input">
                        <button type="submit" title="Submit your search query." class="sbx-custom__submit">
                            <svg role="img" aria-label="Search">
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#sbx-icon-search-13"></use>
                            </svg>
                        </button>
                        <button type="reset" title="Clear the search query." class="sbx-custom__reset">
                            <svg role="img" aria-label="Reset">
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#sbx-icon-clear-5"></use>
                            </svg>
                        </button>
                    </div>
                </form>
                <script type="text/javascript">
                    document.querySelector('.searchbox [type="reset"]').addEventListener('click', function () {
                        this.parentNode.querySelector('input').focus();
                    });
                </script>
            </nav>
        </section>
    </header>

    <!-- CONTENU -->
    <div class="produit-content clearfix">
        <div class="content-top">
            <div class="produit-left">
                <figure>
                    <img src="images/<?= $row['img_produit'];?>" alt="">

                </figure>
            </div>

            <div class="produit-right">
                <p>
                    <?php
                    echo $row['descrip_produit']; ?>


                </p>



                <p class="prix"><?php
                    echo $row['prix_produit']; ?>€</p>
                <img class="produit-panier" src="img-layout/panier.png" alt="">
                <a href="#" class="button-commander">Commander</a>
            </div>
        </div>

     <!--   <div class="content-bot clearfix">
            <h2>Suggestions</h2>
            <div class="w25">
                <div class="suggestions">
                    <img src="img-content/n64.jpg" alt="">
                    <h2>n64</h2>
                </div>
            </div>
            <div class="w25">
                <div class="suggestions">
                    <img src="img-content/n64.jpg" alt="">
                    <h2>console de qualité extremeeeeeeeeeeeeeeeeee ozubfyzbyzbbbbbb</h2>
                </div>
            </div>
            <div class="w25">
                <div class="suggestions">
                    <img src="img-content/n64.jpg" alt="">
                    <h2>Zfzfzf</h2>
                </div>
            </div>
            <div class="w25">
                <div class="suggestions">
                    <img src="img-content/n64.jpg" alt="">
                    <h2>PIihzhf</h2>
                </div>
            </div>
        </div>
    </div> -->
    <!-- FOOTER -->
    <footer class="clearfix">
        <ul>
            <li class="propos">
                <h2>A Propos</h2>
                <p>Arcu es massa vestibulum
                    <br>Arcu es massa vestibulum
                    <br>Arcu es massa vestibulum</p>
            </li>
            <li class="faq">
                <h2>FAQ</h2>
                <p>Arcu es massa vestibulum
                    <br>Arcu es massa vestibulum</p>
            </li>
            <li class="prenium">
                <h2>Prenium</h2>
                <p>Arcu es massa vestibulum
                    <br>Arcu es massa vestibulum
                    <br>Arcu es massa vestibulum</p>
            </li>
        </ul>
        <div class="social">
            <div class="fb">
                <img src="img-layout/fb.svg" alt="Facebook">
            </div>
            <div class="twitter">
                <img src="img-layout/twitter.svg" alt="Twitter">
            </div>
        </div>
    </footer>
    </body>
    </html>
    </html>
<?php endwhile; ?>
