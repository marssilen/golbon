<?php require_once('app/views/head.php'); ?>

<body xmlns="http://www.w3.org/1999/html">
<?php require_once('app/views/header.php'); ?>
<?php require_once('app/views/menu.php');
$url = "http" . (($_SERVER['SERVER_PORT'] == 443) ? "s://" : "://") . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
?>
<br>
<div class="w3-card-2 w3-round w3-white container rtl-container" style="padding: 50px">
    کمک های انسانی
</div>
<div class="w3-blue-grey">
<div class="w3-row container" style="margin-top:20px">
    <div class="w3-col m3 s12 w3-center" style="padding: 12px">
        <p>
            نماد اعتماد الکترونیکی
            <br>
            <img src="<?= URL ?>public/namad.png">
        </p>
    </div>
    <div class="w3-col m3 s12" style="padding: 12px">
        <p>
            آدرس: یزد - اردکان - بازار سنتی چهارسوق - عصاری چهارسوق تولیدی محصولات گلبن
        </p>
    </div>
    <div class="w3-col m3 s12" style="padding: 12px">
        <p>
            آمادگی پذیرش نمایندگی در کل کشور<br>
             برای دریافت نمایندگی با شماره:09136720593 آقای بهشتی تماس بگیرید
        </p>
    </div>
    <div class="w3-col m3 s12" style="padding: 12px">
        <p>
محصولات
            <br>
            <a href="">روغن ارده ی کنجد</a>
            <br>
            <a href="">حلوا شکری</a>
            <br>
            <a href="">ارده</a>
            <br>
            <a href="">کرم ارده</a>
        </p>
    </div>

</div>
</div>
</body>
</html>
