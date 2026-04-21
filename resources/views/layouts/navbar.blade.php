 <style>
      body {
            background: #050b16;
            color: white;
            font-family: Arial, sans-serif;
        }

        .navbar {
            background: #000814;
        }

        .logo {
            height: 90px;
            width: 150px;
        }
        .footer {
            background: #000814;
            padding: 30px 0;
            margin-top: 60px;
        }
        @media (max-width:760px){
            .navbar-brand{
                margin-right: 0;
            }
            .navbar-nav{
                text-align: center;
            }
            #menu{
                justify-content:center;
                flex-direction:column;
            }

        }
 </style>
 
 
 <!-- NAVBAR -->
 <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">
                <img src="{{ asset('image/logo.jpg') }}" class="logo" alt="Logo">
               
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav ms-auto ">
                    <li class="nav-item"><a class="nav-link" href="/">Accueil</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('propos')}}">À propos</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('service')}}">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('realisation')}}">Réalisations</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('contact')}}">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>