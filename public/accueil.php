<html>

<head>
    <title>ShopHouse</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <meta name="Accueil" content="Page d'Accueil, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<?php 
    echo ("COU");
?>

<body>

    <header id="header">

    </header>

     <!--   Construction structure page par la fonction js : buildpage();
        Début zone recherche --->

    <div class="wrapper">
        <h1>Vous cherchez quelque chose de précis ?</h1>
        <form class="formRecherche">

            <div class="form-inline">

                <div class="form-group">
                    <input type="date" id="rechercheDate" oninput="recherche()" />
                    <label for="input" class="control-label">Produit</label><i class="bar"></i>
                </div>


                <div class="form-group">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" id="recherchePetitDejeuner" oninput="recherche()" /><i
                                class="helper"></i>Prix min
                        </label>
                    </div>
                </div>


                <div class="form-group">


                    <div class="checkbox">
                        <label>
                            <input type="checkbox" id="rechercheAnimaux" oninput="recherche()" /><i
                                class="helper"></i>Prix max
                        </label>
                    </div>
                </div>

            </div>

            <div class="form-group">
                <div class="range">
                    <label>                        
                        <input onchange="recherche()" type="range" min="0" max="2000" step="10" id="recherchePrix" value="10">
                    </label>
                </div>
            </div>

            <div class="button-container">
                <button href="#" class="button"><span>Chercher</span></button>
            </div>

        </form>
    </div>

     <!-- Fin de la zone de recherche -->

    <!-- Début grille -->
    <div class="grid-container" id="grille">
       
        <template id="destination">
            <div>
                <div onclick="fctTransfert(this)" class="grid-item" id={{idDestination}}>
                    <h2 class="top-left"> Template Voyage à {{ville}}, {{pays}} </h2>
                    <h2 class="bottom-left" id={{ville}}> Température : {{cTemp}} &#8451; </h2>
                    <img src={{image}}>
                </div>
            </div>
        </template> 

        <div class="grid-item" id="A1" onclick="fctTransfert(this)">
            <h2 class="top-left" id="city">Voyage à </h2>
            <h2 class="bottom-left" id="cTemp">Température : </h2>
            <img src="Ressources/andrew-scherle-Kazu2Eap8Yg-unsplash.jpg">
        </div>

        <div class="grid-item" id="A2" onclick="fctTransfert(this)">
            <img src="Ressources/andrew-scherle-Kazu2Eap8Yg-unsplash.jpg">
        </div>

        <div class="grid-item" id="A3" onclick="fctTransfert(this)">
            <img src="Ressources/lukas-blaskevicius--mCckQzuZnw-unsplash (1).jpg">
        </div>

        <div class="grid-item" id="A4" onclick="fctTransfert(this)">
            <img src="Ressources/andrew-scherle-Kazu2Eap8Yg-unsplash.jpg">
        </div>

        <div class="grid-item" id="A5" onclick="fctTransfert(this)">
            <img src="Ressources/van-blog-sydneyfacile-768x512.jpg">
        </div>

        <div class="grid-item" id="A6" onclick="fctTransfert(this)">
            <img src="Ressources/andrew-scherle-Kazu2Eap8Yg-unsplash.jpg">        
        </div>
    </div>

    <!-- Fin grille -->

    
    <div id="footer"></div>  <!-- Pied de page -->

    <div id="buildAncre"></div>


    <script src="JS/main.js"></script>
</body>

</html>