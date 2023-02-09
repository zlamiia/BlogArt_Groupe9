<?php require_once 'header.php'; 
sql_connect();

// print_r(curl("https://reqres.in/api/users", "POST", '{"name": "morpheus", "job": "leader"}'));
?>

<!-- Titre page  -->
<div class="container-fluid title-content">
        <img src="/src/images/Articles-title.svg" alt="">
        <h1 class="subtitle">Retrouvez l’univers et les dernières nouveautés de l’art digital</h1>
        <!-- Articles -->
        <div class="container text-center">
            <div class="row row-cols-2">
                <div class="col-5 articles-img_box-2"></div>
                <div class="col-2 space-articles"></div> <!-- Espacement entre les deux div -->
                <div class="col-5 articles-img_box-2"></div>
                <div class="col-5 articles-text-2"></div>
                <div class="col-2 space-articles"></div> <!-- Espacement entre les deux div -->
                <div class="col-5 articles-text-2"></div>
            </div>
        </div>
    </div>

<?php require_once 'footer.php'; ?>