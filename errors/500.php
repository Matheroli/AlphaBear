<!DOCTYPE html>
<html lang=fr dir=ltr>
<head>
    <title>Erreur 500</title>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Encode+Sans+Semi+Condensed:100,200,300,400" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="../assets/broken.png">
</head>
<body class="loading">
  <h1>500</h1>
  <h2>Erreur interne. Le problème vient du site en lui-même pas de vous :(</h2>
  <div class="gears">
    <div class="gear one">
      <div class="bar"></div>
      <div class="bar"></div>
      <div class="bar"></div>
    </div>
    <div class="gear two">
      <div class="bar"></div>
      <div class="bar"></div>
      <div class="bar"></div>
    </div>
    <div class="gear three">
      <div class="bar"></div>
      <div class="bar"></div>
      <div class="bar"></div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
  <link rel="stylesheet" type="text/css" href="styles.css">
  <script>
      $(function() {
          setTimeout(function(){
              $('body').removeClass('loading');
            }, 1000);
        });
    </script>
</body>
</html>