<?php
if (isset($pictures['wallpapers'])) {
    $pictures = $pictures['wallpapers'];
    $pictures = array_slice($pictures, 0, 9);
} else {
    $pictures = null;
}
?>

<h1 class="detail-title "><?php echo $details['title'] ?></h1>
<div class="details-container">
    <div class="row">
        <div class="col-md-3">
            <div class="card  side-detail" style="width: 18rem;">
                <img src="<?php echo $details['image_url'] ?>" class="card-img-top" alt="...">

                <div class="card-body">
                    <div class="row">
                        <div class="col btn-icon">
                            <a><i class="fab fa-facebook-f"></i></a>
                        </div>
                        <div class="col btn-icon">
                            <a><i class="fab fa-twitter"></i></a>
                        </div>
                        <div class="col btn-icon">
                            <a><i class="fab fa-instagram"></i></a>
                        </div>
                        <div class="col btn-icon">
                            <a><i class="fab fa-reddit"></i></a>
                        </div>
                    </div>
                    <h5>Alternative Names</h5>
                    <ul class="child-details">
                        <li><span>English : </span><?php echo $details['title_english'] ?></li>
                        <li><span>Japanese : </span><?php echo $details['title_japanese'] ?></li>
                        <li><span>Synonyms : </span>
                            <?php foreach ($details['title_synonyms'] as $synonym) : ?>
                                <?php echo $synonym ?>
                            <?php endforeach; ?>
                        </li>
                    </ul>
                    <h5>Information</h5>
                    <ul class="child-details">
                        <li><span>Type : </span><?php echo $details['type'] ?></li>
                        <li><span>Episodes : </span><?php echo $details['episodes'] ?></li>
                        <li><span>Status : </span><?php echo $details['status'] ?></li>
                        <li><span>Aired : </span><?php echo $details['aired']['string'] ?></li>
                        <li><span>Premiered : </span><?php echo $details['premiered'] ?></li>
                        <li><span>Broadcast : </span><?php echo $details['broadcast'] ?></li>
                        <li><span>Producers : </span>
                            <?php foreach ($details['producers'] as $producer) : ?>
                                <?php echo $producer['name'] ?>
                            <?php endforeach; ?>
                        </li>
                        <li><span>Licensors : </span><?php foreach ($details['licensors'] as $licensor) : ?>
                                <?php echo $licensor["name"] ?>
                            <?php endforeach; ?></li>
                        </li>
                        <li><span>Studios : </span><?php foreach ($details['studios'] as $studio) : ?>
                                <?php echo $studio["name"] ?>
                            <?php endforeach; ?>
                        </li>
                        <li><span>Source : </span><?php echo $details['source'] ?></li>
                        <li><span>Genres : </span><?php foreach ($details['genres'] as $genre) : ?>
                                <?php echo $genre["name"] ?>
                            <?php endforeach; ?>
                        </li>
                        <li><span>Duration : </span><?php echo $details['duration'] ?></li>
                        <li><span>Rating : </span><?php echo $details['rating'] ?></li>
                    </ul>
                    <h5>Statistics</h5>
                    <ul class="child-details">
                        <li><span>Score : </span><?php echo $details['score'] ?> (scored by <?php echo number_format($details['scored_by']) ?> users) </li>
                        <li><span>Ranked : </span>#<?php echo $details['rank'] ?></li>
                        <li><span>Popularity : </span>#<?php echo $details['popularity'] ?></li>
                        <li><span>Members : </span><?php echo number_format($details['members']) ?></li>
                        <li><span>Favorites : </span><?php echo number_format($details['favorites']) ?></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-9 ">
            <div class="card text-center detail-nav">
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs">
                        <li class="nav-item">
                            <a class="nav-link " href="<?php echo base_url('anime/details/' . $details['mal_id']) ?>">Details</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Related</a>
                        </li>
                        <li class="nav-item-active">
                            <a class="nav-link" href="<?php echo base_url('anime/others/' . $details['mal_id']) ?>">Others</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="card text-left main-details other-contents r">
                <div class="card-header">
                    <h4>Pictures</h4>
                    <hr>
                </div>
                <div class="pictures-section">
                    <div class="card-body">
                        <div class="row" id="lightgallery">
                            <?php if ($pictures !== null) : ?>
                                <?php foreach ($pictures as $picture) : ?>
                                    <div class="col-md-4" data-src="<?php echo $picture['url_image'] ?>" data-sub-html="<h4><?php echo $details['title_english']; ?></h4><h4>Powered By Wallpaper Abyss</h4>">
                                        <img src=" <?php echo $picture['url_image'] ?>" class="img-fluid rounded" alt="Attack on Titan">
                                    </div>
                                <?php endforeach; ?>
                            <?php else : ?>
                                <div class="col-md-12 no-image">
                                    <h1>Sorry No Related Image Found</h1>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="card-header">
                    <h4>Recommendations</h4>
                    <hr>
                </div>
                <div class="card-body">
                    <div class="row slick-carousel">
                        <?php foreach ($recommends as $recommend) : ?>
                            <div class="card anime-carousel-card">
                                <img src="<?php echo $recommend['image_url'] ?>" class="card-img" alt="<?php echo $recommend['title'] ?>">
                                <div class="card-img-overlay">
                                    <h5 class="card-title"><?php echo $recommend['title'] ?></h5>
                                </div>
                                <a class="btn btn-primary see-more-button" href="<?php echo base_url('anime/details/') . $recommend['mal_id'] ?>">See More</a>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>