<!DOCTYPE html> 
<html lang="fr"> 
<head> 
<meta charset="UTF-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<title>Nos services - Rodrigue Biyog</title> 
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"> 
<link href="{{asset('css/style.css')}}" rel="stylesheet"> 
</head> 
<body> 
@include('layouts.navbar')
    <section class="banner-service"> 
        <div class="container"> 
            <h1 class="display-4 fw-bold">Nos services</h1> 
            <p>Des solutions adaptées à vos besoins professionnels</p> 
        </div> 
    </section> 
 
    <section class="py-5 service"> 
        <div class="container "> 
            <div class="row g-4"> 
                <div class="text-center">
                    <h2>Ce que nous faisons</h2>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Esse laudantium debitis totam quo perferendis, exercitation</p>
                </div>
                <div class="col-md-4"> 
                    <div class="service-card"> 
                        <h3>Développement Web</h3> 
                        <p>Sites vitrines, e-commerce, applications métiers.</p> 
                    </div> 
                </div> 
 
                <div class="col-md-4"> 
                    <div class="service-card"> 
                        <h3>Maintenance et depannage</h3> 
                        <p>Rapide et efficace.</p> 
                    </div> 
                </div> 
 
                <div class="col-md-4"> 
                    <div class="service-card"> 
                        <h3>Branding</h3> 
                        <p>Création logo, identité visuelle et stratégie de marque.</p> 
                    </div> 
                </div>
                <div class="col-md-4"> 
                    <div class="service-card"> 
                        <h3>Formation</h3> 
                        <p>Initiation informatique bureautique,maintenanceset developpements web.</p> 
                    </div> 
                </div>
                <div class="col-md-4"> 
                    <div class="service-card"> 
                        <h3>Reseau et installation</h3> 
                        <p>Configuration,WI-FI,camera de surveillance.</p> 
                    </div> 
                </div>
                
                <div class="col-md-4"> 
                    <div class="service-card"> 
                        <h3>Prestation de service informatique</h3> 
                        <p>Gestion réseaux sociaux, publicité Facebook et Google Ads.</p> 
                    </div> 
                </div> 
 
                <div class="col-md-4"> 
                    <div class="service-card"> 
                        <h3>Creation des sites web et mobiles</h3> 
                        <p>Sites vitriners, boutique en ligne et maintenances.</p> 
                    </div> 
                </div> 
 
                <div class="col-md-4"> 
                    <div class="service-card"> 
                        <h3>Vente des equipements informatique</h3> 
                        <p>Vente des logiciels et maintenances et des equipements informatiques.</p> 
                    </div> 
                </div>
 
            </div> 
        </div> 

    </section> 

    
    <section class="py-5">
        <div class="container">
            <div class="card-customs">
                <h5>Un projet en tete ? Parlons-en ?</h5>
                <a  href="#" class="btn-custom">Nous contactez</a>
            </div>
        </div>
    </section>
 
    <footer>
        @include ("layouts.footer")
    </footer>
 
</body> 
</html>