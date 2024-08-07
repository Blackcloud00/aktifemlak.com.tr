<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aktif Emlak</title>
    <meta name="title" content="Aktif Emlak">
    <meta name="keywords" content="Aktif Emlak">
    <meta name="description" content="Aktif Emlak">
    <meta name="subject" content="Aktif Emlak">
    <meta name="author" content="olgunkarabulut.com | olgun karabulut">
    <meta name="robots" content="noindex, nofollow">
    <link rel="shortcut icon" href="assets/image/favicon.png" type="image/png">
    <link rel="icon" href="assets/image/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/lib/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/lib/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/lib/aos.css">
    <link rel="stylesheet" href="assets/fonts/stylesheet.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="subelerimiz">
    
    <?php  include "_header.php";  ?>
    
    <?php  include "_slider.php";  ?>

    <?php
    $title= "Öne Çıkan İlanlar";
    $class= "";
    include "_popular_sales.php";  ?>
    
    <section class="subelerimiz_area mt-5 mb-5">
        <h2 class="index_title bold">Öne Çıkan Kategoriler</h2>
        <div class="container">
            <div class="row mt-5">
                <div class="col-xl-5">
                    <div class="box-1">
                        <h3>10 Yıllık Tecrübemizle Sektörün Zirvesindeyiz</h3>
                        <div class="text">Aktif Emlak olarak, yıllardır sürdürdüğümüz lider konumumuzla, güvenilir ve yenilikçi hizmet anlayışımızla gayrimenkul sektöründe fark yaratıyoruz</div>
                    </div>
                    <div class="box-2 mt-3"  style="background-image:url('assets/image/subelerimiz_esas/home.jpg'); background-size:cover;">
                        <h2>123 İlan Daire</h2>
                        <a href="#">İncele</a>
                    </div>
                    <div class="box-1 mt-3">
                        <h3>Müşteri Memnuniyeti Önceliğimizdir</h3>
                        <div class="text">Müşterilerimize en iyi hizmeti sunmak için sürekli olarak çalışıyor, onların ihtiyaçlarını en iyi şekilde karşılamak için titizlikle hareket ediyoruz.</div>
                    </div>
                </div>
                <div class="col-xl-7 mt-xl-0 mt-3">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="box-4" style="background-image:url('assets/image/subelerimiz_esas/olive_area.jpg'); background-size:cover;">
                                <h2>123 İlan Zeytinlik</h2>
                                <a href="#">İncele</a>
                            </div> 
                            <div class="box-3 mt-3" style="background-image:url('assets/image/subelerimiz_esas/villa.jpg'); background-size:cover;">
                                <h2>123 İlan Arsa</h2>
                                <a href="#">İncele</a>
                            </div> 
                        </div>
                        <div class="col-lg-6">
                            <div class="box-3" style="background-image:url('assets/image/subelerimiz_esas/garden.jpg'); background-size:cover;">
                                <h2>123 İlan Tarla</h2>
                                <a href="#">İncele</a>
                            </div>
                            <div class="box-3 mt-3" style="background-image:url('assets/image/subelerimiz_esas/workplace.jpg'); background-size:cover;">
                                <h2>123 İlan İşyeri</h2>
                                <a href="#">İncele</a>
                            </div> 
                            <div class="box-3 mt-3" style="background-image:url('assets/image/subelerimiz_esas/field.jpg'); background-size:cover;">
                                <h2>123 İlan Arsa</h2>
                                <a href="#">İncele</a>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
    $title= "Yeni İlanlar";
    $class= "";
    include "_popular_sales.php";  ?>

    <?php  include "_footer.php";  ?>

    <script type="text/javascript" src="assets/js/lib/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="assets/js/lib/swiper-bundle.min.js"></script>
    <script type="text/javascript" src="assets/js/lib/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="assets/js/lib/aos.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>
    <script type="text/javascript" src="assets/js/index.js"></script>
</body>
</html>