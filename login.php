<?php
    session_start();
/*if($_GET["logout"]==1){
    session_destroy();
}
*/
    $error="";
include("connection.php");
    
if(isset($_POST['seriNo'])){
    $seriNo=$_POST['seriNo'];
}else{
    $seriNo="";
}
if(isset($_POST['tel'])){
    $tel=$_POST['tel'];
}else{
    $tel="";
}
if(isset($_POST['ad'])){
    $ad=$_POST['ad'];
}else{
    $ad="";
}
if(isset($_POST['email'])){
    $email=$_POST['email'];
}else{
    $email="";
}
if(isset($_POST['marka'])){
    $marka=$_POST['marka'];
}else{
    $marka="";
}
if(isset($_POST['model'])){
    $model=$_POST['model'];
}else{
    $model="";
}
if(isset($_POST['sorun'])){
    $sorun=$_POST['sorun'];
}else{
    $sorun="";
}
if(isset($_POST['cozum'])){
    $cozum=$_POST['cozum'];
}else{
    $cozum="";
}
if(isset($_POST['yapan'])){
    $yapan=$_POST['yapan'];
}else{
    $yapan="";
}
if(isset($_POST['fiyat'])){
    $fiyat=$_POST['fiyat'];
}else{
    $fiyat="";
}
if(isset($_POST['teslimAlan'])){
    $teslimAlan=$_POST['teslimAlan'];
}else{
    $teslimAlan="";
}
    if ($_POST['submit']=="Kayıt"){
            
                $query="INSERT INTO musteri 
                (ad, tel, email, adres, seriNo, marka, model, sorun) 
                VALUES 
                   ('".mysqli_real_escape_string($link, $_POST['ad'])."',
                    '".mysqli_real_escape_string($link, $_POST['tel'])."',
                    '".mysqli_real_escape_string($link, $_POST['email'])."',
                    '".mysqli_real_escape_string($link, $_POST['adres'])."',
                    '".mysqli_real_escape_string($link, $_POST['seriNo'])."',
                    '".mysqli_real_escape_string($link, $_POST['marka'])."',
                    '".mysqli_real_escape_string($link, $_POST['model'])."',
                    '".mysqli_real_escape_string($link, $_POST['sorun'])."')";

                mysqli_query($link, $query);
                $success="Kayıt Açıldı!";
            }
            
        }
    }
if($_POST['submit']=="Log In"){
    $query="SELECT
        *
    FROM
        users
    WHERE
        seriNo='".mysqli_real_escape_string($link, $_POST['seriNo'])."'
    OR     
        tel='".mysqli_real_escape_string($link, $_POST['tel'])."' LIMIT 1
    ";
    $result = mysqli_query($link, $query);
    $row = mysqli_fetch_array($result);
    if($row){
        $_SESSION['id']=$row['id'];
        header("Location:mainpage.php");
    }else{
        $error="Kayıt bulunamadı lütfen kayıt açın";
    }
}

echo '</div>';
?>