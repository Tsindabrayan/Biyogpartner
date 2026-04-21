<!DOCTYPE html> 
<html lang="fr"> 
<head> 
<meta charset="UTF-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<title>À propos - Rodrigue Biyog</title> 
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"> 
<link href="{{asset('css/style.css')}}" rel="stylesheet"> 
</head> 
<body> 
@include('layouts.navbar')
    <section class="banner-propos"> 
        <div class="container"> 
            <h1 class="display-4 fw-bold">À propos de nous</h1> 
            <p>Découvrez notre histoire et notre mission</p> 
        </div> 
    </section> 
 
    <section class="py-5"> 
        <div class="container"> 
            <div class="row align-items-center"> 
 
                <div class="col-md-6"> 
                    <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f" 
                         class="about-img" 
                         alt="Equipe"> 
                </div> 
 
                <div class="col-md-6"> 
                    <h2>Notre histoire</h2> 
                    <p> 
                        Rodrigue Biyog Softdigital manager et partner's accompagne les entreprises dans leur transformation 
                        digitale avec des solutions modernes, innovantes et orientées résultats. 
                    </p> 
 
                    <h3 class="mt-4">Notre mission</h3> 
                    <p> 
                        Offrir des services digitaux premium : développement web, 
                        marketing digital, branding et accompagner les particuliers et les entreprises dans leurs transformation digitale. 
                    </p> 
                </div> 
 
            </div> 
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="card-custom">
                        <h4>Notre mission</h4>
                        <p>Création de sites vitrines, e-commerce et applications métiers.</p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card-custom">
                        <h4>Notre vision</h4>
                        <p>Gestion réseaux sociaux, publicité Facebook et Google Ads.</p>
                    </div>
                </div>
            </div>

            <div>
                <div class="mt-5">
                    <h2 class=" text-center">Nos valeurs</h2>
                    <p class="text-center">Les valeurs qui prouvent chacune de nos actions</p>
                </div>
                
                <div class="row g-4">
                    <div class="col-md-3">
                        <div class="card-custom">
                            <h4>Integrite</h4>
                            <p>Création de sites vitrines, e-commerce et applications métiers.</p>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card-custom">
                            <h4>Professionnalisme</h4>
                            <p>Gestion réseaux sociaux, publicité Facebook et Google Ads.</p>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card-custom">
                            <h4>Collaboration</h4>
                            <p>Création de logos, chartes graphiques et identité visuelle.</p>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card-custom">
                            <h4>Impact</h4>
                            <p>Création de logos, chartes graphiques et identité visuelle.</p>
                        </div>
                    </div>
                </div>
   
        <!-- CTA -->
                <section class="py-5">
                    <div class="container">
                        <div class="card-customs">
                            <h5>Envie d'en savoir plus sur ce que nous pouvons accomplire ensembles ?</h5>
                            <a  href="#" class="btn-custom">Nous contactez</a>
                        </div>
                    </div>
                </section>
            </div>
        </div> 
    </section> 
 
    <footer>
        @include ("layouts.footer")
    </footer>
 
</body> 
</html> 
 