<?php

$aot_items = $aot->results;

function checkStatus($status)
{
    if ($status === false) {
        return 'Finished';
    } else {
        return 'Airing';
    }
}
?>

<div class="header">
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <img src="<?php echo base_url('assets/') ?>images/logo.png" class="img-fluid" alt="">
            <h1>Anime Site With Jikan API</h1>
            <hr>
        </div>
    </div>
</div>
<div class="list">
    <div class="row title">
        <div class="col-md-12">
            <h1>Attack On Titan</h1>
        </div>
    </div>
    <div class="row">
        <?php foreach ($aot_items as $aot_item) : ?>
            <div class="col-md-3 col-2 ">
                <div class="card anime-card">
                    <img src="<?php echo $aot_item->image_url ?>" class="card-img" alt="">
                    <input type="checkbox" name="" id="">
                    <div class="toggle">+</div>
                    <div class="more" data-toggle="tooltip" data-placement="top" title="Read More"><i class="fas fa-eye"></i></div>
                    <div class="card-img-overlay">
                        <h5 class="card-title"><?php echo $aot_item->title ?></h5>
                        <div class="d-inline p-2 text-white"><?php echo $aot_item->episodes ?> Eps</div>
                        <div class="d-inline p-2 text-white">|</div>
                        <div class="d-inline p-2 text-white"><?php echo checkStatus($aot_item->airing) ?></div>
                        <p class="card-text" style="margin-top:10px;">Airing : <?php echo date('Y-m-d', strtotime($aot_item->start_date)) ?></p>
                        <p class="card-text">Finished : <?php echo date('Y-m-d', strtotime($aot_item->end_date)) ?></p>
                        <p class="card-text score"><i class="fas fa-star"></i><?php echo $aot_item->score ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>


    </div>
</div>