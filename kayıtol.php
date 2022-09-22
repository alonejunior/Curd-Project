<?php
    include("baglanti.php");
    $username_err="";
    $email_err="";
    $parola_err="";
    $parolatkr_err="";
    

    if(isset($_POST["kaydet"])){
//empty() fonksiyonu değişkenin boş olup olmadığını KONTROL EDER
//kullanıcı adı dogrulama

                if(empty( $_POST["kullaniciadi"])){
                   $username_err="kullanıcı adı boş geçilemez!";
                }
//string in uzunlugunu belirler
                else if(strlen($_POST["kullaniciadi"])<6){
                        $username_err="kullanıcı adınız en az 6 karakterden oluşmalıdır!!";
                }
              
else if (!preg_match('/^[a-z\d_]{5,20}$/i', $_POST["kullaniciadi"])) {

            $username_err="kullanıcı adı buyuk kucuk harf ve rakamdan oluşmalıdır!";
} 
    else{
        $username=$_POST["kullaniciadi"];
        
    }

    //email Doğrulama
    if(empty($_POST["email"])){
            $email_err="email alanı boş geçilemez!";
    }
   
    else if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $email_err = "Geçersiz email formatı";
      }
    else{
        $email=$_POST["email"];
    }

        //parola doğrulama 

        if(empty($_POST["parola"])){
            $parola_err="parola alanı bos geçilemez";
        }
        else{
            $parola=$_POST["parola"];
        }

        //parola tekrar dogrulama

        if(empty($_POST["parolatkr"]
        )){
            $parolatkr_err="parola tekrar kısmı boş geçilemez.";
        }

        else if($_POST["parola"]!=$_POST["parolatkr"]){
            $parolatkr_err="parolalar eşleşmiyor!";
        }

        else{
            $parolatkr=$_POST["parolatkr"];
        }

        $username=$_POST["kullaniciadi"];
        $email=$_POST["email"];
        $parola=$_POST["parola"];
            //password_hash($_POST["parola"],PASSWORD_DEFAULT) şeklinde eklersek veritabanına özel şifre ekler ve veritabanı kullanan kişi şifreyi göremez
            $telefon=$_POST["telefon"];

            if(isset($username) && isset($email) && isset($parola) && isset($telefon)){

            $ekle="INSERT INTO kullanicilar (kullanici_adi , email, parola, telefon) VALUES ('$username','$email','$parola','$telefon')";
            $calistirekle = mysqli_query($baglanti,$ekle);

            if ($calistirekle) {
                echo '<div class="alert alert-success" role="alert">
                Kayıt başarılı bir şekilde eklendi
              </div> ';}
            else {
                echo '<div class="alert alert-danger" role="alert">
                Kayıt eklenirken hata oluştu.
              </div>
              ';
            }
            mysqli_close($baglanti);
    }}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <link rel="stylesheet"  href="panel.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kayıt OL</title>

        <h1>Kayıt Ol</h1>
        <img src="logo.jpg" alt="logo">
            <div class="outer-box">
                <div class="login-box">
                    <h4 class="login-text">Kayıt Ol</h4>
                   <form action="kayıtol.php" method="POST">
                    <input placeholder="Kullanıcı Adı" class="form-control is-invalid" type="text"  name="kullaniciadi" required>
                    <div id="validationServer03Feedback" class="invalid-feedback">
      <?php
                echo $username_err;

      ?>
    </div>
                    <!--istenilen giriş yap yeri input etiketiyle oluşturularak place holderla ısım verilir-->
                    <input placeholder="Şİfre" class="form-control is-invalid"  type="password" name="parola" required>
                    <div id="validationServer03Feedback" class="invalid-feedback">
                    <?php
                echo $parola_err;

      ?>
    </div>
    <!--istenilen giriş yap yeri input etiketiyle oluşturularak place holderla ısım verilir-->
    <input placeholder="Şİfre" class="form-control is-invalid"  type="password" name="parolatkr" required>
                    <div id="validationServer03Feedback" class="invalid-feedback">
                    <?php
                echo $parolatkr_err;

      ?>
    </div>
   
     
                    <input type="text" placeholder="E-mail" class="form-control is-invalid"  name="email" required>
                    <div id="validationServer03Feedback" class="invalid-feedback">
                    <?php
                echo $email_err;

      ?>
    </div>
                    <input placeholder="Telefon" class="form-control is-invalid"  name="telefon" required>
                    <div id="validationServer03Feedback" class="invalid-feedback">
    
    </div>
                    
                   <button type="submit" id="btn-forgot" name="kaydet">gönder</button>
                   <button type="submit" id="btn-forgot" name="giris"><a href="index.php">Giriş Yap</a></button>
                    </form>
                   
                </div>
            </div>
       
<body>
    
</body>
</html>

