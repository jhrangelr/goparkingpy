<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Goparhing</title>
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="crossorigin"/>
        <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;700&amp;display=swap"/>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;700&amp;display=swap" media="print" onload="this.media='all'"/>
        <noscript>
            <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;700&amp;display=swap"/>
        </noscript>
        <link href="css/bootstrap.min.css?ver=1.2.0" rel="stylesheet">
        <link href="css/font-awesome/css/all.min.css?ver=1.2.0" rel="stylesheet">
        <link href="css/main.css?ver=1.2.0" rel="stylesheet">
        <script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
        <script type="text/javascript" src="js/jquery-ui.js"></script>
    </head>
    <body id="top">
        <div class="site-wrapper">
            <div class="site-wrapper-inner">
                <div class="cover-container">
                    <div class="masthead clearfix">
                        <div class="inner">
                            <h3 class="masthead-brand">Goparking</h3>
                            <nav class="nav nav-masthead">
                            <a class="nav-link nav-social" href="#" title="Facebook"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                            <a class="nav-link nav-social" href="#" title="Twitter"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                            <a class="nav-link nav-social" href="#" title="Youtube"><i class="fab fa-youtube" aria-hidden="true"></i></a>
                            <a class="nav-link nav-social" href="#" title="Instagram"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                            </nav>
                        </div>
                    </div>      
                    <div class="inner cover">
                        <h1 class="cover-heading">Manten tu vehiculo seguro</h1>
                        <p class="lead cover-copy">Ingresa a nuestra plaforma, tu vehiculo esta seguro con nosotros.</p>
                        <p class="lead"><button type="button" id="ingresar" class="btn btn-lg btn-default btn-notify" >Ingresar</button></p>
                    </div>
                    <div class="mastfoot">
                        <div class="inner">
                            <p>&copy; Goparking. Design: <a href="https://goparking.com.co/" target="_blank">Ucompensar</a>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $(document).ready(function(){
                $('#ingresar').click(function(){
                    window.location.href = 'login.php';
                })
            });
        </script>
    </body>
</html>