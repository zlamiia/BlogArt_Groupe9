<?php require_once 'header.php'; 
sql_connect();

// print_r(curl("https://reqres.in/api/users", "POST", '{"name": "morpheus", "job": "leader"}'));
?>

<div class="container connection-section">
        <div class="row">
            <div class="col"></div>
            <div id="login" class="col-4 connection-box">
                <h1>Login</h1>
                <form id="form-connect" action="">
                    <input class="login-username" type="text" id="username" name="username" placeholder="Username">
                    <br>
                    <input class="login-password" type="text" id="password" name="password" placeholder="Password">
                    <br>
                    <input href="index.php" class="submit-connect" type="submit" form="form-connect" value="Connect"/>
                </form>
                <h6 onclick="createAccount()">Créer compte</h6>
            </div>
            <div class="col"></div>
        </div>
</div>
    <script>
        function createAccount(){
            document.getElementById('login').innerHTML = '<h1>Create</h1> <form id="form-create" action=""> <input class="create_e-mail" type="text" id="e-mail" name="e-mail" placeholder="E-mail"> <br> <input class="login-username" type="text" id="username" name="username" placeholder="Username"> <br> <input class="login-password" type="text" id="password" name="password" placeholder="Password"> <br> <input class="submit-connect" type="submit" form="form-create" value="Create"/> </form>';
        }
    </script>

<?php require_once 'footer.php'; ?>