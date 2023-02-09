<?php require_once 'header.php'; 
sql_connect();

// print_r(curl("https://reqres.in/api/users", "POST", '{"name": "morpheus", "job": "leader"}'));
?>
<!-- Cover -->
<img class="container-fluid cover" src="/src/images/Cover.svg" alt="">
    <!-- Articles Homepage -->
    <div class="container-fluid title-content">
        <img src="/src/images/Articles-title.svg" alt="">
        <h1 class="subtitle">Retrouvez l’univers et les dernières nouveautés de l’art digital</h1>
        <!-- Container Articles -->
        <div class="container articles-home-content">
            <!-- 1er article image et texte  -->
            <div class="row articles-home-1">
                <div class="col-8 articles-home-img_box-1">

                </div>
                <div class="col articles-home-text-1">
                    
                </div>
            </div>
        </div>
        <!-- 2eme et 3eme articles image  -->
        <div class="row articles-2-3-img">
            <div class="col articles-img_box-2">

            </div>
            <div class="col-1 space-articles-2-3"></div> <!-- Espacement entre les deux div -->
            <div class="col articles-img_box-3">
                
            </div>
        </div>
        <!-- 2eme et 3eme articles texte  -->
        <div class="row articles-2-3-text">

            <div class="col articles-text-2">

            </div>
            <div class="col-1 space-articles-2-3"></div> <!-- Espacement entre les deux div -->
            <div class="col articles-text-3">
                
            </div>
        </div>
    </div>
    <!-- Evenements Homepage  -->
    <div class="container-fluid home-content">
        <img src="/src/images/Evenements-title.svg" alt="">
        <h1 class="subtitle">Retrouvez l’univers et les dernières nouveautés de l’art digital</h1>
        <!-- Container Carte Evenements  -->
        <div class="container evenement-home-content">
            <svg class="evenement-home-carte" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1158.27 293.71">
                <defs>
                    <style>
                        .cls-1{
                            fill:#4247c6;
                        }
                        .cls-2{
                            fill:#fff;
                            stroke:#4247c6;
                            stroke-width:3px;
                        }
                    </style>
                </defs>
                <!-- Border Carte Evenement -->
                <path class="cls-1" d="M34.27,12.37h1104a20,20,0,0,1,20,20v242a20,20,0,0,1-20,20H34.27a20,20,0,0,1-20-20v-242A20,20,0,0,1,34.27,12.37Z" transform="translate(0 -0.64)"/>
                <path class="cls-2" d="M20,2.14H1124a18.5,18.5,0,0,1,18.5,18.5v242a18.5,18.5,0,0,1-18.5,18.5H20a18.5,18.5,0,0,1-18.5-18.5v-242A18.5,18.5,0,0,1,20,2.14Z" transform="translate(0 -0.64)"/>
                <!-- Contenue Carte Evenement -->
                <foreignObject class="border" x="0" y="0" width="1145px" height="280px">
                    <div class="container row evenement-home-carte-content">
                        <div class="col-1 border evenement-carte-content-date">
                            <p>wsh</p>
                        </div>
                        <div class="col-2 border evenement-carte-content-img">
                            <p>wsh</p>
                        </div>
                        <div class="col-6 border evenement-carte-content-texte">
                            <p>wsh</p>
                        </div>
                        <div class="col-3 border evenement-carte-content-button">
                            <p>wsh</p>
                        </div>
                    </div>
                </foreignObject>
            </svg> <!-- On a utilisé des paths svg car on peut facilement manipuler le contenu à l'interieure et le svg est mieux integre dans le site -->
        </div>      <!-- sans compter qu'il nous donne la possible de realiser des animations interessante plustard -->
    </div>

<?php require_once 'footer.php'; ?>