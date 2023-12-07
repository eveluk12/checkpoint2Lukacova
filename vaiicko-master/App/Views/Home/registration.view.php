<?php

/** @var Array $data */
/** @var \App\Core\LinkGenerator $link */

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="public/css/styleRegistration.css">
    <meta charset="UTF-8">
    <title>Registrácia</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
                <div class="card-body">
                    <h5 class="card-title text-center">Registrácia</h5>
                    <div class="text-center text-danger mb-3">
                        <?= @$data['message'] ?>
                    </div>
                    <form class="form-registration" method="post" action="/?c=registration&a=registracia">
                        <div class="form-label-group mb-3">
                            <input name="login" type="text" id="login" class="login" placeholder="  E-mail"
                                   required autofocus>
                        </div>

                        <div class="form-label-group mb-3">
                            <input name="password" type="password" id="password" class="password"
                                   placeholder="  Heslo" required>
                        </div>

                        <div class="form-label-group mb-3">
                            <input name="meno" type="text" id="meno" class="meno" placeholder="  Meno"
                                   required autofocus>
                        </div>

                        <div class="form-label-group mb-3">
                            <input name="priezvisko" type="text" id="priezvisko" class="priezvisko" placeholder="  Priezvisko"
                                   required autofocus>
                        </div>

                        <div class="text-center">
                            <button class="btn btn-primary" type="submit" name="submit">Vytvoriť
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
