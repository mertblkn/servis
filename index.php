
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Balkın Makina</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
        <link href="css/styleindex.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    </head>
    <body>
        <nav class="navbar navbar-inverse">
          <div class="container">
                <div class="navbar-header">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                      </button>
                    <a class="navbar-brand" href="#">Balkın Makina</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                      <form class="navbar-form navbar-right" method="post">
                            <div class="form-group">
                                <input placeholder="Seri No" type="text" name="seriNo" id="seriNo" class="form-control" value="<?php echo addslashes($seriNo); ?>" autocomplete="off">
                            </div>
                            <div class="form-group">
                                
                                <input type="text" placeholder="Telefon No" name="telNo" class="form-control" value="<?php echo addslashes($telNo); ?>">
                            </div>
                            <input type="submit" class="btn btn-success" name="submit" value="Bul">
                      </form>
                </div>
          </div>
        </nav>
        <input type="button" class="btn btn-info" value="Kayıt Aç" id="kayitAc">
    <form method="post" class="form-group" id="kayitForm">
        <div class="container">
            <h3>Müşterinin Bilgileri</h3>
            <div class="row">
                <div class="col-md-6">
                    <input type="text" name="ad" class="form-control" placeholder="Ad Soyad" id="ad">
                </div>
                <div class="col-md-6">
                    <input type="text" name="tel" class="form-control" placeholder="Telefon" id="tel">
                </div>
                <div class="col-md-6">
                    <input type="email" name="email" class="form-control" placeholder="Email" id="email">
                </div>
                <div class="col-md-6">
                    <input type="text" name="adres" class="form-control" placeholder="Adres" id="adres">
                </div>
            </div>
        </div>
        <div class="container">
            <h3>Makina Bilgileri</h3>
            <div class="row">
                <div class="col-md-6">
                    <input type="text" name="seriNo" class="form-control" placeholder="Seri No" id="seriNo">
                </div>
                <div class="col-md-6">
                    <input type="text" name="marka" class="form-control" placeholder="Marka" id="marka">
                </div>
                <div class="col-md-6">
                    <input type="text" name="model" class="form-control" placeholder="Model" id="model">
                </div>
                <div class="col-md-6">
                    <input type="text" name="sorun" class="form-control" placeholder="Sorun" id="sorun">
                </div>
                <div class="col-md-6">
                    <input type="text" name="gelis" class="form-control" placeholder="Gelis Tarihi" id="gelis">
                </div>
            </div>
            <input type="submit" class="btn btn-success" name="submit" value="Kayıt">
        </div>
     </div>
        

    </form>
<?php
if($error){
  echo '<div class="alert alert-danger">'.addslashes($error).'</div>';  
}
if($success){
    echo '<div class="alert alert-success">'.$success.'</div>';
}
if($problem){
    echo '<div class="alert alert-warning">'.$problem.'</div>';
}
?>
		
        <script>
            $(".contentContainer").css("min-height",$(window).height());
            $("#kayitForm").hide();
            $("#kayitAc").click(function() {
                $("#kayitForm").toggle();
            });
        </script>
    </body>
</html>