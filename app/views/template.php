<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Template inspiré Airbnb</title>
    <link rel="stylesheet" href="assets/bootstrap.min.css">
    <link rel="stylesheet" href="assets/template.css">
    <style>
   
    </style>
</head>
<body>
    <header class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Airbnb</a>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#" style="color: white;">Mettre mon logement sur Airbnb</a></li>
                <li><a href="#" style="color: white;"><span class="glyphicon glyphicon-user"></span></a></li>
            </ul>
        </div>
    </header>

    <div class="container-fluid">
        <div class="row text-center categories">
            <div class="col-sm-2">Chambres d'hôtes</div>
            <div class="col-sm-2">Sous les tropiques</div>
            <div class="col-sm-2">Bord de mer</div>
            <div class="col-sm-2">Tendance</div>
            <div class="col-sm-2">Wow !</div>
            <div class="col-sm-2">Fermes</div>
        </div>

        <div class="row listings">
           <?php include($page.'.php');?>
      </div>
    </div>

</body>
</html>
