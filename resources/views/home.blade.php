<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rodrigue Biyog</title>
    <link href="{{asset('css/style.css')}}" rel="stylesheet"> 
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
</head>
<body>
@include('layouts.navbar')
    <!-- HERO -->
    <section class="hero">
        <div class="container">
            <div class="row align-items-center">
                
                <div class="col-md-6 mb-5">
                    <h1>Des solutions sur mesure pour <span>vos projets</span></h1>
                    <p class="mt-4">
                        Nous accompagnons les entreprises avec des solutions digitales,
                        marketing et développement web.
                    </p>

                    <a href="/service" class="btn-custom">Nos services</a>
                    <a href="/contact" class="btn-custom">Nous contactez</a>
                </div>

                <div class="col-md-6">
                    <img src="https://images.unsplash.com/photo-1497366754035-f200968a6e72"
                         class="hero-img"
                         alt="Bureau">
                </div>
            </div>
        </div>
    </section>
    <section class="py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-3">
                    <div class="card-custom">
                        <div class="icon">
                            <i class="fas fa-eye"></i>
                        </div>
                        <h4>Qualite</h4>
                        <p>Création de sites vitrines, e-commerce et applications métiers.</p>
                    </div>
                </div>
        
                <div class="col-md-3">
                    <div class="card-custom">
                        <div class="icon">
                            <i class="fas fa-home"></i>
                        </div>
                        <h4>Innovation</h4>
                        <p>Gestion réseaux sociaux, publicité Facebook et Google Ads.</p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card-custom">
                        <div class="icon">
                            <i class="fas fa-home"></i>
                        </div>
                        <h4>Engargement</h4>
                        <p>Création de logos, chartes graphiques et identité visuelle.</p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card-custom">
                        <div class="icon">
                            <i class="fas fa-home"></i>
                        </div>
                        <h4>satisfaction</h4>
                        <p>Création de logos, chartes graphiques et identité visuelle.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

     <!-- WHY US -->
    <section class="py-5">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-md-6">
                    <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d"
                         class="hero-img"
                         alt="Equipe">
                </div>

                <div class="col-md-6">
                    <h2 class="section-title">Pourquoi nous choisir ?</h2>
                    <p class="text">
                        Nous ne faisons pas que du matériel informatique, nous apportons des vraies
                         solutions adaptées à vos besoins informatiques. Dans un monde ou le numérique 
                         est devenu essentiel, nous vous accompagnons avec professionnalisme, rapidité 
                         et expertise pour vous garantir des équipements de qualité, des services fiables
                          et un service personnalisé. Que vous soyez un particulier ou une entreprise notre
                           priorité est devenu essentiel; vous offrir des solutions modernes efficaces et durables
                            pour améliorer votre productivité et sécuriser votre activité. Nous choisir, c’est opter 
                            pour la confiance, l’innovation et un partenaire engagé à rendre le numérique simple et 
                            accessible à vous. 
                    </p>
                    <a href="#" class="btn-custom">En savoir plus</a>
                </div>

            </div>
        </div>
    </section>

    <!-- SERVICES -->
    <section class="py-5">
        <div class="container">
            <h2 class="section-title text-center">Nos services</h2>
            
            <div class="row g-4">
                <div class="col-md-3">
                    <div class="card-custom">
                        <h4>Développement Web</h4>
                        <p>Création de sites vitrines, e-commerce et applications métiers.</p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card-custom">
                        <h4>Prestations de service informatique</h4>
                        <p>Gestion réseaux sociaux, publicité Facebook et Google Ads.</p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card-custom">
                        <h4>Marketing Digital</h4>
                        <p>Gestion réseaux sociaux, publicité Facebook et Google Ads.</p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card-custom">
                        <h4>Branding</h4>
                        <p>Création de logos, chartes graphiques et identité visuelle.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

   

    <!-- CTA -->
    <section class="py-5">
        <div class="container">
            <div class="card-customs">
                <h2>Prêt à démarrer votre projet ?</h2>
                <p>Contactez-nous aujourd’hui pour discuter de vos besoins.</p>
                <a href="#" class="btn-custom">Demander un devis</a>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer>
        @include("layouts.footer")
    </footer>

</body>
</html>