@extends('layouts.mainlayout')

@section('title', 'Accueil')

@section('contenu')
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.theme.default.css')}}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.transitions.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
        <link rel="stylesheet" href="assets/css/animate.css"> <!-- CSS POUR COMPTE REBOUR -->

        
        <script type="text/javascript" src="{{ asset('assets/js/owl.carousel.js')}}"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
        <script type="text/javascript" src="{{ asset('assets/js/jquery.nav.js')}}"></script>      <!-- JS POUR COMPTE REBOUR  -->
        <script type="text/javascript" src="{{ asset('assets/js/jquery.mixitup.min.js')}}"></script> <!-- JS POUR COMPTE REBOUR -->
        <script type="text/javascript" src="{{ asset('assets/js/jquery.fancybox.pack.js')}}"></script> <!-- JS POUR COMPTE REBOUR -->
        <script type="text/javascript" src="{{ asset('assets/js/jquery.appear.js')}}"></script> <!-- JS POUR COMPTE REBOUR -->
        <script type="text/javascript" src="{{ asset('assets/js/jquery-countTo.js')}}"></script> <!-- JS POUR COMPTE REBOUR -->
        <script type="text/javascript" src="{{ asset('assets/js/wow.min.js')}}"></script> <!-- JS POUR COMPTE REBOUR -->
        <script type="text/javascript" src="{{ asset('assets/js/main.js')}}"></script> <!-- JS POUR COMPTE REBOUR -->

<header class="container-fluid"  >
        <section class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top"> <!-- Début de la NavBar   -->
                <a class="navbar-brand" href="#">
                    <img src="assets/img/logo_coco.png" width="100" height="100" class="d-inline-block align-top" alt="Logo de notre entreprise">
                </a>   
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Accueil <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Publier votre Annonce</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#">Recherche</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Inscription</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Connexion</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Deconnexion</a>
                        </li>
                        
                    </ul>
                </div>
            </nav><!-- /Fin de la NavBar   -->
        </section><!-- /fin du Container  -->
    </header><!-- /fin du header  -->
    
    <!-- Début du Main -->
    <main class="container-fluid"> 
        <section class="row" id="imageHome"> 
            <!-- DEBUT FORMULAIRE DE TRAJET -->
            <div class="container formtrajet">
                <div class="row">
                    <div class="col-6">
                        <div class="row">   
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><a href=""><i class="fas fa-map-marker-alt"></a></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Départ" aria-label="Départ" aria-describedby="basic-addon1">
                            </div>
                        </div>          
                    </div>
                    <div class="col-6">
                        <div class="row">                   
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" style="margin-left: 10px;" id="basic-addon1"><i class="fas fa-map-marker"></i></span>
                                </div>
                                <input type="text" class="form-control" style="margin-right: 10px;" placeholder="Arrivé" aria-label="Arrivé" aria-describedby="basic-addon1">
                            </div>
                        </div>          
                    </div>
                    <div class="col-6"> 
                        <div class="row">               
                            <label class="sr-only" for="adressArrive">Date</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text allign"><i class="far fa-calendar"></i></div>
                                </div>
                                <input type="date" class="form-control" id="dateDepart" placeholder="Date">
                            </div>
                        </div>          
                    </div>
                    <div class="col-6"> 
                        <div class="row">
                            <button type="button" class="btn btnmore btn-secondary col ml-2" onclick="">Afficher moins</button>     
                        </div>                          
                    </div>
                    <div class="col-12">
                        <div class="row selectform">
                            <div class="col-6 borderform">
                                <div class="row mr-1 ">
                                    <a><h4>Vous recherchez :</h4>&nbsp;</a>
                                    <select class="form-control mb-5" id="exampleFormControlSelect1">
                                        <option>Non précisé</option>
                                        <option>Voiture</option>
                                        <option>VTC</option>
                                        <option>2 Roues</option>
                                        <option>Bateau</option>
                                        <option>Avion</option>
                                        <option>Drone</option>
                                        <option>Navette spatiale</option>
                                    </select>
                                    <div class="center col-12">
                                        <h4 style="display: inline;">Pour&nbsp;:&nbsp;</h4>
                                        <label class="radio mt-2 btnRadTypePassager">
                                            <input type="radio" checked="" value="personne" id="btnRadPersonne" name="btnRadTypePassager">
                                            Personne&nbsp;
                                        </label>
                                        <label class="radio mt-2 btnRadTypePassager">
                                            <input type="radio" value="coli" id="btnRadColi" name="btnRadTypePassager">
                                            Colis
                                        </label>
                                    </div>
                                    <!-- Si colis séléctioné -->
                                    <div id="infosColi">
                                        <div class="input-group mb-3 mt-5">
                                            <p>Informations relatives au colis :</p>
                                            <input type="text" class="form-controlkg" aria-label="Poid en kg.">
                                            <div class="input-group-append">
                                                <span class="input-group-text">Kg</span>
                                            </div>
                                        </div>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text pr-4" id="inputGroup-sizing-default">Contenue :</span>
                                            </div>
                                            <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                                        </div>
                                        <p>Dimension en cm : </p>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" aria-label="Poid en kg.">
                                            <div class="input-group-append">
                                                <span class="input-group-text">Longueur</span>
                                            </div>
                                            <input type="text" class="form-control" aria-label="Poid en kg.">
                                            <div class="input-group-append">
                                                <span class="input-group-text">Largeur</span>
                                            </div>
                                            <input type="text" class="form-control" aria-label="Poid en kg.">
                                            <div class="input-group-append">
                                                <span class="input-group-text">Hauteur</span>
                                            </div>
                                        </div>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Informations :</span>
                                            </div>
                                            <textarea class="form-control" aria-label="With textarea"></textarea>
                                        </div>
                                    </div>
                                    
                                    <!-- Fin colis séléctioné -->
                                    
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="row">
                                    <div class="control-group col-12 contenueform">
                                        <label class="control-label"><h4>Type trajet :</h4></label>
                                        <div class="controls">
                                            <label class="radio btnRadTypeAller">
                                                <input type="radio" checked="" value="allerSimple" id="btnRadAllerSimple" name="btnRadTypeAller">
                                                Aller simple
                                            </label>
                                            <label class="radio btnRadTypeAller">
                                                <input type="radio" value="allerRetour" id="btnRadAllerRetour" name="btnRadTypeAller">
                                                Aller retour
                                            </label>
                                            <!-- Si date retour afficher :-->
                                            <div id="infoRetour">
                                                <p>Retour le : </p>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text"><i class="far fa-calendar"></i></div>
                                                    </div>
                                                    <input type="date" class="form-control" id="dateDepart" placeholder="Date">
                                                </div>      
                                            </div>

                                            <!-- end :-->
                                        </div>
                                    </div>  
                                    <hr>                        
                                    <div class="control-group col-12 contenueform">
                                        <hr>
                                        <label class="control-label"><h4>Trajet unisexe :</h4></label>
                                        <div class="controls radio-group">
                                            <label class="radio btnRadUnisexe">
                                                <input type="radio" value="oui" id="btnRadUnisexeOui" name="btnRadUnisexe">
                                                Oui
                                            </label>
                                            <label class="radio btnRadUnisexe">
                                                <input type="radio" checked="" value="non" id="btnRadUnisexeNon" name="btnRadUnisexe">
                                                Non
                                            </label>
                                            <!-- Si pas connecté afficher :-->
                                            <div id="infosSexe">
                                                <p>Vous êtes : </p>
                                                <select class="form-control">
                                                    <option>Femme</option>
                                                    <option>Homme</option>
                                                </select>
                                            </div>
                                            
                                            <!-- end :-->                                       
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="control-group col-12 contenueform">
                                        <hr>
                                        <label class="control-label"><h4>Fréquence trajet :</h4></label>
                                        <div class="controls radio-group">
                                            <label class="radio">
                                                <input type="radio" checked="" value="occasionel" id="btnRadTrajetOcca" name="btnRadTypeTrajet">
                                                Occasionel
                                            </label>
                                            <label class="radio">
                                                <input type="radio" value="regulier" id="btnRadTrajetRegulier" name="btnRadTypeTrajet">
                                                Régulier
                                            </label>
                                        </div>
                                    </div>  
                                </div>
                            </div> <!-- /container -->                              
                        </div> <!-- /row selectform -->                                                     
                    </div> <!-- /col12 --> 
                </div> <!-- /row -->
                <button type="button" class="btn btn-secondary col-12 mt-3" onclick="">Rechercher</button>
            </div> <!-- /container -->
            <!-- FIN DU FORMULAIRE DE TRAJET -->
            <div class="container" >
                <div class="row" >
                    <div class="col">
                    </div><!-- /fin du   -->
                </div>
            </div>
        </section><!-- /fin row  -->
        
        <section class="row mt-5 mb-5" style="padding-left: 0px;padding-right: 0px;"> <!-- DEBUT ROW PRINCIPAL -->
            <div class="col-12" style="padding-left: 0px;padding-right: 0px;"> <!-- CONTENUE COL CENTRE -->
                <div class="container mt-2">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="mb-5" style="text-align: center;">Prochains trajets : </h2>
                        </div>              
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Départ <i class="fas fa-location-arrow"></i></th>
                                    <th scope="col">Arrivée <i class="fas fa-map-marker"></i></th>
                                    <th scope="col">Date <i class="far fa-calendar"></i></th>
                                    <th scope="col">Heure départ <i class="fas fa-clock"></i></th>
                                    <th scope="col">Heure arrivée <i class="fas fa-clock"></i></th>
                                    <th scope="col">Places disponibles <i class="fas fa-male"></i></th>
                                    <th scope="col">C'est partit ! <i class="fas fa-car"></i></i></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>

                                    <td>Auxerre</td>
                                    <td>Paris</td>
                                    <td>23/04/1998</td>
                                    <td>16h30</td>
                                    <td>18h22</td>
                                    <td>1 places</td>
                                    <td><button type="button" class="btn btn-primary">Réserver</button></td>
                                </tr>
                                <tr>
                                    <td>Auxerre</td>
                                    <td>Paris</td>
                                    <td>23/04/1998</td>
                                    <td>16h30</td>
                                    <td>18h22</td>
                                    <td>1 places</td>
                                    <td><button type="button" class="btn btn-primary">Réserver</button></td>
                                </tr>
                                <tr>
                                    <td>Auxerre</td>
                                    <td>Paris</td>
                                    <td>23/04/1998</td>
                                    <td>16h30</td>
                                    <td>18h22</td>
                                    <td>1 places</td>
                                    <td><button type="button" class="btn btn-primary">Réserver</button></td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="col-2 offset-10">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>                                      
                    </div>
                </div>
                 <div class="container-fluid mt-5" style="padding-left: 0px;padding-right: 0px;">
                <div class="row numberfact">
                        <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-delay="0.5s">
                            <div class="fact-item text-center">
                                <div class="fact-icon">
                                    <i class="fa fa-check-square fa-lg"></i>
                                </div>
                                <span data-to="120">0</span>
                                <p>Grammes de CO2 économisé.</p>
                            </div>
                        </div>
                        
                        <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-delay="0.8s">
                            <div class="fact-item text-center">
                                <div class="fact-icon">
                                    <i class="fa fa-users fa-lg"></i>                                    
                                </div>
                                <span data-to="152">0</span>
                                <p>Trajets parcourus</p>
                            </div>
                        </div>
                        
                        <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-delay="1.1s">
                            <div class="fact-item text-center last">
                                <div class="fact-icon">
                                      <i class="fa fa-users fa-lg"></i>   
                                </div>
                                <span data-to="2500">0</span>
                                <p>Km parcourus</p>
                            </div>
                        </div>
                        
                        <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-delay="1.3s">
                            <div class="fact-item text-center last">
                                <div class="fact-icon">
                                    <i class="fa fa-trophy fa-lg"></i>
                                </div>
                                <span data-to="150">0</span>
                                <p>Voyageurs heureux</p>
                            </div>
                        </div>
                </div>
                <div class="container mt-5">
                    <div class="row">
                        <div class="col-5">
                            <div class="row doubleform">
                                <h3>Je suis un particulier :</h3>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                <button type="button" class="btn btn-primary mt-2">S'inscrire</button>
                            </div>
                        </div>
                        <div class="col-5 offset-2">
                            <div class="row doubleform">
                                <h3>Je suis une entreprise :</h3>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                <button type="button" class="btn btn-primary mt-2">S'inscrire</button>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div><!-- /fin du  -->
                    </div>
                </div>
                <section class="container-fluid mt-5" id="startArea">
                    <div class="support-area section fix"><!--Start sup. area-->
                        <div class="container-fluid">
                            <div class="row">
                                <div class="support col-sm-3">
                                    <i class="fa fa-thumbs-up"></i>
                                    <h3>High quality</h3>
                                    <p>Lorem ipsum dolor sit amet, conseetur adipiscing elit, consectetur</p>
                                </div>
                                <div class="support col-sm-3">
                                    <i class="fa fa-bus"></i>
                                    <h3>Fast Delivery</h3>
                                    <p>Lorem ipsum dolor sit amet, conseetur adipiscing elit, consectetur</p>
                                </div>
                                <div class="support col-sm-3">
                                    <i class="fa fa-phone"></i>
                                    <h3>24/7 support</h3>
                                    <p>Lorem ipsum dolor sit amet, conseetur adipiscing elit, consectetur</p>
                                </div>
                                <div class="support col-sm-3">
                                    <i class="fa fa-random"></i>
                                    <h3>14 - Day Returns</h3>
                                    <p>Lorem ipsum dolor sit amet, conseetur adipiscing elit, consectetur</p>
                                </div>
                            </div>
                        </div>
                    </div><!--Start sup. area-->
                </section>
                <div class="container">
                    <h2 class="white mt-5" style="text-align: center;"> Témoignages : </h2>
                    <div class="demo">
                        <div class="row"> <!-- DEBUT ROW TEMOIGNAGE -->
                            <div class="col-md-12">
                                <div id="testimonial-slider" class="owl-carousel">
                                    <div class="testimonial">
                                        <div class="pic">
                                            <img src="images/person-2.jpg" alt=""/>
                                        </div>
                                        <div class="testimonial-content">
                                            <p class="description">
                                                Novice chez Cococar, on comprend très vite le système! Pratique, rapide, sérieux, merci Cococar de changer nos trajets autoroutiers
                                            </p>
                                            <h3 class="testimonial-title">Jean-Claude
                                                <small class="post">Membre depuis : 10/06/2018</small>
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="testimonial">
                                        <div class="pic">
                                            <img src="images/Sam-Revilter.jpg" alt=""/>
                                        </div>
                                        <div class="testimonial-content">
                                            <p class="description">
                                                Bon principe et bon concept innovant pour trouver rapidement et à moindre prix un trajet vers l'endroit où on souhaite se rendre ! Cela nous permet de rencontrer également des personnes sympathiques !
                                            </p>
                                            <h3 class="testimonial-title">Michel
                                                <small class="post">Membre depuis : 05/06/2018</small>
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="testimonial">
                                        <div class="pic">
                                            <img src="images/team4-large.jpg" alt=""/>
                                        </div>
                                        <div class="testimonial-content">
                                            <p class="description">
                                                Cococar offre un service sécurisé de covoiturage. Le site internet complet permet l'utilisation de la plateforme.  
                                            </p>
                                            <h3 class="testimonial-title">Roberto
                                                <small class="post">Membre depuis : 03/05/2017</small>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!--  FIN ROW TEMOINAGNE -->
                    </div>
                </div>
            </div> <!-- FIN DIV COL CONTENUE CENTRE -->
        </section><!-- /fin ROW PRINCIPAL  -->
    </main><!-- /fin du Main  -->   
@endsection