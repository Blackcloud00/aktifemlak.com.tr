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
    <link rel="stylesheet" href="assets/css/sub_global.css">
    <link rel="stylesheet" href="assets/css/giris-yap.css">
</head>
<body> 
    
    <?php  include "_header.php";  ?>
    
    <section class="uyelik" style="background-image:url('assets/image/uyelik/bg-1.jpg'); background-size:cover;">
        <div class="container">
            <div class="web_input_group">
                <h4 class="h4-sml">Üye Girişi</h4>
                <form action="#" method="post">
                    <div class="form-group">
                        <input type="email" id="email" name="email" placeholder="E-Posta" class="input_items" required>
                    </div>
                    <div class="form-group">
                        <input type="password" id="password" name="password" placeholder="Şifre" class="input_items" required>
                    </div>
                    <div class="form-group d-flex flex-lg-row flex-column justify-content-between">
                        <div class="checkbox">
                            <input type="checkbox" id="remember-me" name="remember-me">
                            <label for="remember-me">Beni Hatırla</label>
                        </div>
                        <a href="sifremi-unuttum.php">Şifrenizi mi unuttunuz?</a>
                    </div>
                    <div class="form-group d-flex justify-content-center">
                        <button type="submit">Giriş Yap</button>
                    </div>
                    <div class="form-group d-flex justify-content-center"">Üye değil misiniz? <a href="yeni-uyelik.php" title="Hemen Üye Ol">Hemen Üye Ol</a></div>
                </form>
            </div>
        </div>
    </section>
    <section class="breadcumb-area">
        <div class="container">
            <ul class="breadcumb-item">
                <li class="breadcumb-item-li">
                    <a href="#" title="Ana Sayfa">Ana Sayfa</a>
                </li>
                <li class="breadcumb-item-li">
                    <a href="#" title="Kurumsal">Kurumsal</a>
                </li>
                <li class="breadcumb-item-li">
                    <a href="#" title="Blog">Blog</a>
                </li>
            </ul>
        </div>
    </section>
    <?php  include "_footer.php";  ?>

    <script type="text/javascript" src="assets/js/lib/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="assets/js/lib/swiper-bundle.min.js"></script>
    <script type="text/javascript" src="assets/js/lib/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="assets/js/lib/aos.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>
    <script type="text/javascript" src="assets/js/index.js"></script>
</body>
</html>