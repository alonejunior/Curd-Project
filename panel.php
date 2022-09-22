<?php
session_start();
if(isset($_SESSION["kullanici_adi"])){
    echo "<h3>".$_SESSION["kullanici_adi"]."HOŞGELDİN</h3>";
    echo "<a href=index.php style='color:red; background-color:yellow;border:1px solid red; padding: 5px 5px;'>Çıkış Yap</a>";
}
else{
    {
        echo "bu sayfayı goruntuleme yetkın yok kardeş";
    }
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <link rel="icon" href="favicon.ico" type="image/x-icon" />

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel|Anasayfa</title>
    <link rel="stylesheet" href="giris.css">
    <script src="https://kit.fontawesome.com/c20485228a.js" crossorigin="anonymous"></script>
</head>
<body>

        <section id="menu">
            <div id="logo">Müşteri Giriş</div>
            <nav>
                    <a href="">Anasayfa</a>
                    <a href="">Müşteri Ekle</a>
                    <a href="">Müşteri listesi</a>
                    <a href="">Biz Kimiz?</a>
                    
            </nav>
        </section>
        <section id="anasayfa">
            <div id="black">

            </div>
            <div id="icerik">
                <h2>Coach SOFTWARE</h2>
                <hr width="300" align="left">
                <p>
                    Coach Dünyasına hoşgeldiniz!! Sitemizi inceleyebilir,panelden müşterilerimize bakabilirsiniz.
                </p>

            </div>
        </section>

        <section id="bizkimiz">
            <h3 id="bizkimiz">Biz Kimiz?</h3>
                <div id="container">
                    <div id="sol">
                        <h5 id="h5sol">
                           Yazılım Dünyasına yepyeni bi soluk getirmek için buradayız.
                        </h5>
                    </div>
                    <div id="sag">
                       <span></span>
                        <p id="sag">
                            Toplu müşteri ekleme,müşterilere toplu mail gönderme özel mesajlar ve fırsatlardan yararlanmasını sağlayan bi siteyiz tek yapmanız gereken kayıt olup giriş yapmak

                        </p>
                    </div>
                    <img src="img/about.jpg" alt="" class="img-fluid mt100">
                
                        <p id="pson">2021 yılından beri süre gelen şirketimizde birçok üst düzey firmaya hizmet vermiş bulunmaktayız.Köklü bi şirket olan Coach SOFTWARE dünyasına sizde katılmak isterseniz bekleriz.Detaylı bilgi için bize mail atabilir,yada ofisimizi ziyaret edebilirsiniz.
                        </p>
                    </div>

        </section>
        <section id="İLetisim">
            <div class="container">
            <h3 id="h3iletisim">İletişim</h3>
            <div id="iletisimopak">
            <div id="adres">
                <h4 id="adresbaslik">Adres:</h4>
                <p class="adresp">Ankara caddesi</p>
                <p class="adresp">no:123</p>
                <p class="adresp">Sincan/Ankara</p>
                <p class="adresp">0312 268 1475</p>
                <p class="adresp">Email:8824charlie@gmail.com</p>


            </div>
        </div>
        </div>

        <footer>
            <div id="copright">2022 Tüm hakları saklıdır. </div>
        </footer>
        </section>
      
        
</body>
</html>