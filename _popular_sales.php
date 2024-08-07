<section class="popular_sales normal">
    <div class="container">
        <h2 class="index_title bold"><?= $title ?></h2>

        <ul class="nav nav-pills mb-3 <?= $class ?>" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-konut-tab" data-bs-toggle="pill" data-bs-target="#pills-konut" type="button" role="tab" aria-controls="pills-konut" aria-selected="true">Konut</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-arsa-tab" data-bs-toggle="pill" data-bs-target="#pills-arsa" type="button" role="tab" aria-controls="pills-arsa" aria-selected="false">Arsa</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-villa-tab" data-bs-toggle="pill" data-bs-target="#pills-villa" type="button" role="tab" aria-controls="pills-villa" aria-selected="false">Müstakil Ev</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-isyeri-tab" data-bs-toggle="pill" data-bs-target="#pills-isyeri" type="button" role="tab" aria-controls="pills-isyeri" aria-selected="false">İşyeri</button>
            </li>
        </ul>
        <div class="tab-content <?= $class ?>" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-konut" role="tabpanel" aria-labelledby="pills-konut-tab" tabindex="0">
                <?php include '__homelist_slider.php'; ?>
            </div>
            <div class="tab-pane fade" id="pills-arsa" role="tabpanel" aria-labelledby="pills-arsa-tab" tabindex="0">
               <?php include '__homelist_slider.php'; ?>
            </div>
            <div class="tab-pane fade" id="pills-villa" role="tabpanel" aria-labelledby="pills-villa-tab" tabindex="0">
                <?php include '__homelist_slider.php'; ?>
            </div>
            <div class="tab-pane fade" id="pills-isyeri" role="tabpanel" aria-labelledby="pills-isyeri-tab" tabindex="0">
                <?php include '__homelist_slider.php'; ?>
            </div>
        </div>
    </div>
</section>