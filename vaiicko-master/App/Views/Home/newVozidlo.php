<?php

/** @var Array $data */
/** @var \App\Core\LinkGenerator $link */

?>

<div class="container">
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
                <div class="card-body">
                    <h5 class="card-title text-center">Pridať vozidlo</h5>
                    <div class="text-center text-danger mb-3">
                        <?= @$data['message'] ?>
                    </div>
                    <form class="form-newvozidlo" method="post" action="/?c=vozidlo&a=vytvor">
                        <div class="form-label-group mb-3">
                            <input name="spz" type="text" id="spz" class="form-control" placeholder="  Zadaj SPZ"
                                   required>
                        </div>

                        <div class="form-label-group mb-3">
                            <input name="vin" type="text" id="vin" class="form-control" placeholder="  Zadaj VIN"
                                   required>
                        </div>

                        <div class="form-label-group mb-3">
                            <input name="id_osoba" type="text" id="id_osoba" class="form-control" placeholder="  Zadaj svoje ID"
                                   required>
                        </div>

                        <div class="text-center">
                            <button class="btn btn-primary" type="submit" name="submit">Vytvor
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
