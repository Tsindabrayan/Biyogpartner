<!DOCTYPE html> 
<html lang="fr"> 
<head> 
<meta charset="UTF-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<title>Nos réalisations - Rodrigue Biyog</title> 
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"> 
<link href="{{asset('css/style.css')}}" rel="stylesheet"> 
</head> 
<body> 

@include('layouts.navbar')
    <section class="banner"> 
        <div class="container"> 
            <h1 class="display-4 fw-bold">Nos réalisations</h1> 
            <p>Découvrez quelques projets que nous avons réalisés avec succès</p> 
        </div> 
    </section>
    <!-- PROJECTS --> 
    <section class="py-5"> 
        <div class="container"> 
            <div class="row g-4"> 
 
                <div class="col-md-4"> 
                    <div class="project-card"> 
                        <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f" alt="Projet 1"> 
                        <div class="project-content"> 
                            <h4>Projet Alpha</h4> 
                            <p>Développement d’un site vitrine premium pour une entreprise.</p> 
                            <a href="#" class="btn-custom">Voir le projet</a> 
                        </div> 
                    </div> 
                </div> 
 
                <div class="col-md-4"> 
                    <div class="project-card"> 
                        <img src="https://images.unsplash.com/photo-151938995047347ba0277781c" alt="Projet 2"> 
                        <div class="project-content"> 
                            <h4>Application Mobile</h4> 
                            <p>Création d’une solution mobile de gestion et suivi client.</p> 
                            <a href="#" class="btn-custom">Voir le projet</a> 
                        </div> 
                    </div> 
                </div> 
 
                <div class="col-md-4"> 
                    <div class="project-card"> 
                        <img src="https://images.unsplash.com/photo-1552664730-d307ca884978" alt="Projet 3"> 
                        <div class="project-content"> 
                            <h4>Marketing Digital</h4> 
                            <p>Campagne publicitaire digitale avec forte conversion.</p> 
                            <a href="#" class="btn-custom">Voir le projet</a> 
                        </div> 
                    </div> 
                </div> 

                <div class="col-md-4"> 
                    <div class="project-card"> 
                        <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f" alt="Projet 4"> 
                        <div class="project-content"> 
                            <h4>Application & site web</h4> 
                            <p>Développement d’un site web premium pour une entreprise.</p> 
                            <a href="#" class="btn-custom">Voir le projet</a> 
                        </div> 
                    </div> 
                </div> 
 
                <div class="col-md-4"> 
                    <div class="project-card"> 
                        <img src="https://images.unsplash.com/photo-151938995047347ba0277781c" alt="Projet 5"> 
                        <div class="project-content"> 
                            <h4>Branding</h4> 
                            <p>Création des logo et flyer des entreprise et client.</p> 
                            <a href="#" class="btn-custom">Voir le projet</a> 
                        </div> 
                    </div> 
                </div> 
 
                <div class="col-md-4"> 
                    <div class="project-card"> 
                        <img src="https://images.unsplash.com/photo-1552664730-d307ca884978" alt="Projet 6"> 
                        <div class="project-content"> 
                            <h4>Prestation de service</h4> 
                            <p>Campagne publicitaire digitale avec forte conversion.</p> 
                            <a href="#" class="btn-custom">Voir le projet</a> 
                        </div> 
                    </div> 
                </div> 
 
            </div> 
 
            <!-- CTA --> 
            <div class="cta"> 
                <h2>Votre projet peut être le prochain</h2> 
                <p>Confiez-nous votre vision et nous la transformons en succès.</p> 
                <a href="/contact" class="btn-custom">Nous contacter</a> 
            </div> 
        </div> 
    </section> 
 
    <footer>
        @include ("layouts.footer")
    </footer>
</body> 
</html> 