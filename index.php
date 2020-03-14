<?php
session_start();
if (isset($_SESSION['situation']) && $_SESSION['situation'] != -1) {
    header('Location: /CKTU/situationPage.php');
    exit();
} else {
    $_SESSION['situation'] = -1;
}
?>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />
    <meta http-equiv="Content-Language" content="zh-TW">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="Shortcut Icon" type="image/x-icon" href="/CKTU/images/icon.png" />
    <title>最佳評價、購物網站</title>
    <link rel="stylesheet" href="/CKTU/css/bootstrap.min.css">
    <link rel="stylesheet" href="/CKTU/css/default.css">
    <script src="/CKTU/js/jquery-3.4.1.min.js"></script>
    <script src="/CKTU/js/popper.min.js"></script>
    <script src="/CKTU/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container" style="margin: 10px auto">
        <div class="shadow p-3 mb-5 bg-white rounded" style="padding:2.5rem!important">
            <h1>實驗說明</h1>
            <hr>
            <div>
                <p>親愛的同學：</p>
                <p>您好，非常感謝您抽空參加本實驗研究。</p>
                <p>&emsp;&emsp;本實驗研究目的在瞭解購物網站中產品資訊呈現...。您接下來在網站中，所提供的所有數據及個人資訊，均會受到保護與保密，並僅限於學術研究用途，絕對不會公開，請您放心作答。</p>
                <p>整個實驗過程，約為15-20分鐘，總共有三個部分：</p>
                <p>
                    第一個部分：個人基本資料填寫；<br />
                    第二個部分：購物網站的瀏覽；<br />
                    第三個部分：網站瀏覽後的感受；<br />
                </p>
                <p>再次謝謝您的協助！</p>
                <p style="text-align: right;font-size: 12px;">資管系 陳美如老師 敬上</p>
            </div>
            <div>
                <button type="button" class="btn btn-success" onclick="window.location.href='./personalInfo.php'">下一步</button>
            </div>
        </div>
    </div>
</body>

</html>