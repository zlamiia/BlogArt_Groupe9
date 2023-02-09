<?php require_once 'header.php'; 
sql_connect();

// print_r(curl("https://reqres.in/api/users", "POST", '{"name": "morpheus", "job": "leader"}'));
?>

<!-- Article  -->
<div class="container-fluid">
        <div class="container title-content">placeholder-titre</div>
        <div class="container chapo-content">placeholder-chapo</div>
        <div class="container img-content">placeholder-img</div>
        <div class="container paragraph-content">placeholder-paragraph1</div>
        <div class="container subtitle-content">placeholder-subtitle</div>
        <div class="container paragraph-content">placeholder-paragraph2</div>
        <div class="container subtitle-content">placeholder-subtitle</div>
        <div class="container paragraph-content">placeholder-paragraph3</div>
        <div class="container subtitle-content">placeholder-subtitle</div>
        <div class="container conclusion-content">placeholder-conclusion</div>
</div>

    <!-- Commenter/Comentaires -->
    <div class="container comment-section">
        <form class="form-comment" id="form-comment" action="">
            <textarea class="form-comment-style" id="comment-box" name="comment-box" placeholder="Commenter..." rows="2" cols="50"></textarea>
            <input class="submit-comment" type="submit" form="form-comment" value=""/>
        </form>
        <div class="container comment-user">
            <div class="row user-photo-name">
                <div class="col-4 comment-user-photo">

                </div>
                <div class="col-7 comment-user-name">
                    <p>placeholder</p>
                </div>
            </div>
            <div class="comment-user-comment">
                <p>placeholder</p>
            </div>
        </div>
    </div>

    <!-- Autres Articles -->
    <div class="container text-center">
        <div class="row row-cols-3">
            <div class="col-3 articles-img_box-2 autres-articles autres-height"></div>
            <div class="col-3 articles-img_box-2 autres-articles autres-height" ></div>
            <div class="col-3 articles-img_box-2 autres-height"></div>
            <div class="col-3 articles-text-2 autres-articles autres-height"></div>
            <div class="col-3 articles-text-2 autres-articles autres-height" ></div>
            <div class="col-3 articles-text-2 autres-height"></div>
        </div>
    </div>

<?php require_once 'footer.php'; ?>