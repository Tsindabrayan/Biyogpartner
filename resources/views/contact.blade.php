<!DOCTYPE html> 
<html lang="fr"> 
<head> 
<meta charset="UTF-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<title>Contact - Rodrigue Biyog</title> 
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"> 
<link href="{{asset('css/style.css')}}" rel="stylesheet"> 
</head> 
<body> 

@include('layouts.navbar')
     <!-- BANNER --> 
    <section class="banner-contact"> 
        <div class="container"> 
            <h1 class="display-4 fw-bold">Contactez-nous</h1> 
            <p>Nous sommes disponibles pour discuter de vos projets</p> 
        </div> 
    </section> 
 
    <!-- CONTACT --> 
    <section class="py-5"> 
        <div class="container"> 
            <div class="row g-4"> 
 
                <!-- INFOS --> 
                <div class="col-md-5"> 
                    <div class="contact-box"> 
                        <h3>Nos coordonnées</h3> 
                        <hr> 
 
                        <p><strong>Email :</strong> partnersbiyog@gmail.com</p> 
                        <p><strong>Téléphone :</strong> +240 555 249 370</p> 
                        <p><strong>Adresse :</strong> Douala, Cameroun</p> 
                        <p><strong>Horaires :</strong> Lun - Sam : 08h - 18h</p> 
                    </div> 
                </div> 
 
                <!-- FORM --> 
                <div class="col-md-7"> 
                    <div class="contact-box"> 
                        <h3>Envoyez-nous un message</h3> 
                        <hr> 
                        @if(Session::has('success'))
                            <div class="alert alert-success">
                                {{Session::get('success')}}
                            </div>
                        @endif
                        <form method="POST"  action="/contact/send"> 
                            {!! csrf_field() !!}
                             
                            <div class="mb-3"> 
                                <input type="text" name="nom" class="form-control" placeholder="Votre nom"> 
                            </div> 
 
                            <div class="mb-3"> 
                                <input type="email" name="email" class="form-control" placeholder="Votre email"> 
                            </div> 
 
                            <div class="mb-3"> 
                                <input type="text" name="sujet" class="form-control" placeholder="Sujet"> 
                            </div> 
 
                            <div class="mb-3"> 
                                <textarea class="form-control" name="message" rows="5" placeholder="Votre message"></textarea> 
                            </div> 
 
                            <!-- <button class="btn-custom-contact"><i class="fas fa-mail"></i> Envoyer</button>  -->
                            <a href="https://wa.me/240555249370?text=bonjour%20je%20veux%20plus%20d'informations" target="_brank" class="btn-custom-contact bg-success">
                            <i class="fas fa-whatsApp"></i>
                            Discussion via whatsApp</a>
                        </form> 
                    </div> 
                </div> 
 
            </div> 
 
            <!-- MAP --> 
            <div class="mt-5"> 
                <iframe  
                    src="https://www.google.com/maps?q=Douala,Cameroun&output=embed" 
                    allowfullscreen> 
                </iframe> 
            </div> 
        </div> 
    </section> 
 <footer>
    @include('layouts.footer')
 </footer>

</body> 
</html>