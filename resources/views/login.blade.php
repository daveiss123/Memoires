<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IUT/Service des stages</title>
    <link rel="shortcut icon" href="assets/images/x-icon.png" type="image/x-icon">
    
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/icofont.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/swiper.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/lightcase.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>

<body>

    <!-- Register Start Here -->
    <section class="register-section padding-tb pb-0">
        <div class="container">
            <div class="row g-4 row-cols-lg-2 row-cols-1 align-items-center">
                <div class="col">
                    <div class="section-header">
                        <h2 class="title">Veuillez entrer vos informations </h2>
                    </div>
                </div>
                <div class="col">
                    <div class="section-wrapper">

                        <h4>Connectez-vous</h4>

                        <form class="register-form" form method="POST" action="">
                        @csrf

                        <!-- email -->
                            <input type="email" name="email" placeholder="Email" class="reg-input" required autocomplete="Email">

                        <!-- Nouveau mot de passe -->
                    <input type="password" name="mot_de_passe" placeholder="Mot de passe" class="reg-input" required autocomplete="nouveau_mot_de_passe">


                            <button type="submit" class="lab-btn"><span>Se connecter</span></button>
                            <a href="inscription">Vous n'avez-pas de compte ?</a>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Register End Here -->


   
        <div class="footer-bottom">
            <div class="container">
                <div class="section-wrapper">
                    
                    <div class="footer-bottom-list">
                        <a href="#"></a>
                        <a href="#"></a>
                        <a href="#"></a>
                        <a href="#"></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section Ending Here -->




    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/swiper.min.js"></script>
    <script src="assets/js/progress.js"></script>
    <script src="assets/js/lightcase.js"></script>
    <script src="assets/js/counter-up.js"></script>
    <script src="assets/js/isotope.pkgd.js"></script>
    <script src="assets/js/functions.js"></script>
    
</body>
</html>

