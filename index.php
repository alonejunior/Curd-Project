<?php
    include("baglanti.php");
    $username_err="";
    
    $parola_err="";
   
    

    if(isset($_POST["giris"])){
//empty() fonksiyonu değişkenin boş olup olmadığını KONTROL EDER
//kullanıcı adı dogrulama

                if(empty( $_POST["kullaniciadi"])){
                   $username_err="kullanıcı adı boş geçilemez!";
                }

    else{
        $username=$_POST["kullaniciadi"];
        
    }

   

        //parola doğrulama 

        if(empty($_POST["parola"])){
            $parola_err="parola alanı bos geçilemez";
        }
        else{
            $parola=$_POST["parola"];
        }

        
        $username=$_POST["kullaniciadi"];
        
        $parola=$_POST["parola"];
            //password_hash($_POST["parola"],PASSWORD_DEFAULT) şeklinde eklersek veritabanına özel şifre ekler ve veritabanı kullanan kişi şifreyi göremez
           

            if(isset($username) && isset($parola) ){
            $secim = "SELECT * FROM kullanicilar WHERE kullanici_adi = '$username'";
            $calistir=mysqli_query($baglanti,$secim);
            $kayitsayisi = mysqli_num_rows($calistir); // ya sıfır ya birdir
            
            if($kayitsayisi>0){
                            $ilgilikayit = mysqli_fetch_assoc($calistir);
                           
                            if($parola){
                                    session_start();
                                    $_SESSION["kullanici_adi"]=$ilgilikayit["kullanici_adi"];
                                    $_SESSION["email"]=$ilgilikayit["email"];
                                    header("location:panel.php");
                            }
                            else{
                                echo '<div class="alert alert-danger" role="alert">
               Parola yanlış
              </div> ';
                            }
            }
            else{
                echo '<div class="alert alert-danger" role="alert">
                kullanıcı adı yanlış
              </div> ';
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
    <title>Giriş Yap</title>

        <h1>Giriş Yap</h1>
        <img src="logo.jpg" alt="logo">
            <div class="outer-box">
                <div class="login-box">
                    <h4 class="login-text">Giriş Yap</h4>
                   <form action="index.php" method="POST">
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
   
  
    
                    
                   <button type="submit" id="btn-forgot" name="giris">GİRİŞ YAP</button>
                  <button type="submit" id="btn-forgot" name="giris"><a href="kayıtol.php">Kayıt ol!</a></button>
                    </form>
                   
                </div>
            </div>
       
<body>
    
</body>
</html>

