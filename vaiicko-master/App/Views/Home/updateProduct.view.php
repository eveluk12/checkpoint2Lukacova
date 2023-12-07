<?php

/** @var Array $data */
/** @var \App\Core\LinkGenerator $link */

?>

<div class="container">
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
                <div class="card-body">
                    <h5 class="card-title text-center">Pridať produkt</h5>
                    <div class="text-center text-danger mb-3">
                        <?= @$data['message'] ?>
                    </div>
                    <form class="form-newproduct" method="post" action="/?c=product&a=delete">
                        <div class="form-label-group mb-3">
                            <input name="id" type="text" id="id" class="form-control" placeholder="  Zadaj ID"
                                   required>
                        </div>

                        <div class="form-label-group mb-3">
                            <input name="nazov" type="text" id="nazov" class="form-control" placeholder="  Zadaj novy názov"
                                   required>
                        </div>

                        <div class="form-label-group mb-3">
                            <input name="cena" type="text" id="cena" class="form-control" placeholder="  Zadaj novú cenu"
                                   required>
                        </div>

                        <div class="text-center">
                            <button class="btn btn-primary" type="submit" name="submit">Upraviť
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
