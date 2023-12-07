<?php

$layout = 'auth';
/** @var \App\Core\IAuthenticator $auth */
/** @var Array $data */
/** @var \App\Core\LinkGenerator $link */

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="public/css/styleLogin.css">
    <meta charset="UTF-8">
    <title>Prihlásenie</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
                <div class="card-body">
                    <h5 class="card-title text-center">Prihlásenie</h5>
                    <div class="text-center text-danger mb-3">
                        <?= @$data['message'] ?>
                    </div>
                    <form class="form-signin" method="post" action="<?=\App\Config\Configuration::LOGIN_URL?>">
                        <div class="form-label-group mb-3">
                            <input name="login" type="text" id="login" class="form-control" placeholder="  E-mail"
                                   required>
                        </div>

                        <div class="form-label-group mb-3">
                            <input name="password" type="password" id="password" class="form-control"
                                   placeholder="  Heslo" required>
                        </div>
                        <div class="text-center">
                            <button class="btn btn-primary" type="submit" name="submit">Prihlásiť
                            </button>
                        </div>
                        <br>
                        <p>Ešte nemáš účet?  <a href="<?= $link->url("home.registration") ?>">Zaregistruj sa</a> </p>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>