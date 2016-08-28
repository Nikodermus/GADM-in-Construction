<!DOCTYPE html>
<html lang="en">
<head>

       
        <!--Meta must have-->
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
        <meta name="robots" content="All" />
        <meta name="googlebot-news" content="all" />

        <!--Meta info-->
        <meta name="description" content="GADMagazine is an e-Magazine where we threat several topics within the artistic field. Add your email to tell you about our first issue" />
        <meta name="keywords" content="GADM, gadmagazine, magazine, online, e-magazine, arts, graphic design, digital design" />
        <meta name="date" content="2016" />
        <meta name="author" content="Nicolás M. Pardo" />
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        
        <!-- Stylesheets -->
        <link rel="stylesheet" href="css/normalize.min.css" media="screen"/>
        <link rel="stylesheet" href="css/fonts/font.css" media="screen"/>
        <link rel="stylesheet" href="css/main.min.css" media="screen"/>

        <!--[if lt IE 8]>
	    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	    <![endif]-->

        <title>
            GADMagazine
        </title>

        <!--jQuery-->
        <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

    </head>

    <body>

    <section>
        <article>
        <div class="magazine hidden-mid hidden-xs">
        
               <img src="img/magazine.png" alt="GADMagazine">
        
        </div>
        <div class="content">
           <h1>
                           <img src="img/logo-gadm.svg" alt="">

           </h1>
            <div class="language">
                <h2>EN</h2>
                <h2>2016</h2>
                <h2>ES</h2>
            </div>
            <div class="form">
                <form action="" method="post" enctype="">
                    <input type="email" placeholder="E-mail #1" name="email">
                    <div class="send">
                    <input type="submit" value="" name="send"> 
                                           <img src="img/mail.svg" alt="E-mail">

                    </div>
                    
                </form>
                 <?php //send contact 
                        
                //nicolasm@nikodermus.media
if(isset($_POST['email'])) {

// Debes editar las próximas dos líneas de código de acuerdo con tus preferencias

$email_to= "nicolasm@nikodermus.media";   
$email_subject = "Suscriptor de GADMagazine";
$email_from ="magazinegadm@gmail.com";

// Aquí se deberían validar los datos ingresados por el usuario
if( !isset($_POST['email']) ) {

echo "<b>There was a mistake and the massage couldn't be sent. </b><br />";
echo "Please check your info<br />";
die();
}

$email_message = "Detalles del suscriptor:\n\n";
$email_message .= "E-mail: " . $_POST['email'] . "\n";
 

    $headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
mail($email_to, $email_subject, $email_message, $headers);

}
?>
            

            </div>
            <?php if (isset($_POST['send'])) { ?>
                            <h2 class="thankyou" hidden>Thank you there!</h2>
                            <script>
                                $('.thankyou').css('margin-bottom','5vh').show();
            </script>
                            <?php  }?>
            <div class="text">
                <p>GADMagazine es una revista online donde tratamos diversos temas con interés en el campo artistico. Ingresa tu email para cuando lanzemos la primera edición</p>
                <p>GADMagazine is an e-Magazine where we threat several topics within the artistic field. Add your email to tell you about our first issue</p>
            </div>
            <div class="social-media">
                <a href="https://www.facebook.com/GADMagazine" target="_blank">
                    <h3>Facebook</h3>
                </a><a href="https://www.instagram.com/gadmagazine/" target="_blank">
                    <h3>Instagram</h3>
                </a>
            </div>
        </div>
        </article>
    </section>
</body>

</html>