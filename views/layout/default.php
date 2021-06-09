<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- TITULO DE LA PAG. -->
    <title>Ministerio de Modernizacion</title>

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo img?>favicon.png">

    <!-- LINKS Y LIBRERIAS -->
    <?php include(links); ?>
</head>
<body class="color-backgray">



    <?= $content ?>

   
<style>

html {
  position: relative;
  min-height: 100%;
}
body {
  margin-bottom: 70px; /* Margin bottom by footer height */
}
.footer {
  margin-top: 5px;
  position: absolute;
  bottom: 0;
  width: 100%;
  height: 60px; /* Set the fixed height of the footer here */
  line-height: 60px; /* Vertically center the text there */
  background-color: #f5f5f5;
}


</style>

    <footer class="footer">
        <!--
      <div class="container">
          
        <span class="text-muted">Footer Sticky by JuanMaBalocco</span>
      </div>
        -->
        <div class="text-center color-bluecat text-white">
            © 2021 Derechos de Autor @
            <a class="text-white" href="#">Tuy Software</a>
        </div>
    </footer>
      
        <!-- POPPER JS -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

    </body>
</html>