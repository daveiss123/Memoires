<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edukon</title>
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

                        <h4>Formulaire d'enregistremant</h4>

                        <form class="register-form" method="get" action="{{ route('inscription') }}">
                        @csrf

                        <!-- nom -->
                            <input type="text" name="nom" placeholder="Nom" class="reg-input" required autofocus autocomplete="Nom">

                        <!-- prenom -->
                             <input type="text" name="prenom" placeholder="Prénom(s)" class="reg-input" required autofocus autocomplete="prenom" >

                        <!-- matricule -->
                             <input type="text" name="matricule" placeholder="Numero matricule" class="reg-input" required autofocus autocomplete="matricule" >

                        <!-- email -->
                            <input type="email" name="email" placeholder="Email" class="reg-input" required autocomplete="Email">
                            
                        <!-- date de naissance -->
                             <input type="date" name="date_de_naissance" placeholder="Date de naissance" class="reg-input" required autocomplete="Date de naissance">
                            <div></div>

                         <!-- Filière -->
                         <select id="filiere_id" name="filiere_id" class="block mt-1 w-full" required autofocus>
        <option value=1>assistance administrative</option>
        <option value=2>analyse comptable</option>
        <option value=3>analyse financiere</option>
        <option value=4>génie civil /bâtiment et travaux publics</option>
        <option value=5>génie électrique /énergie solaire</option>
        <option value=6>génie électrique /maintenance industrielle</option>
        <option value=7>génie électrique /réseau électrique</option>
        <option value=8>gestion des entreprises hotelieres</option>
        <option value=9>management des entreprises touristiques</option>
        <option value=10>marketing et gestion commerciale</option>
            </select>

            <!-- Rôle -->
            <select id="role_id" name="role_id" class="block mt-1 w-full" required autofocus> 
            <option value=1>etudiant</option>
            <option value=1>administrateur</option>     
        </select>  <br>
        <div></div>

                        <!-- Nouveau mot de passe -->
                    <input type="password" name="mot_de_passe" placeholder="Mot de passe" class="reg-input" required autocomplete="nouveau_mot_de_passe">
                  
                        <!-- Confirmer mot de passe -->
                    <input type="password" name="mot_de_passe_confirme" placeholder="Confirmer mot de passe" class="reg-input" required autocomplete="mot_de_passe_confirme">
                  

                            <button type="submit" class="lab-btn"><span>S'enrégistrer</span></button>
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

