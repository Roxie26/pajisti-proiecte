<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Proiect ROXANA MOROȘAN</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
  <link rel="stylesheet" href="/css/style.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <link rel="icon" href="/pic/tag.jpg">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

</head>

<body>
  <?php print_r($resurse[0]->locatie); ?>
  <?php 
  $hero;
  $despre;
  $noutati;
  $contact;
  foreach($resurse as $resursa){
    switch($resursa->locatie){
      case 'Hero':
        $hero = $resursa->data;
        break;
      case 'Despre noi':
        $despre = $resursa->data;
        break;
      case 'Noutati':
        $noutati = $resursa->data;
        break;
      case 'Contact':
        $contact = $resursa->data;
        break;
        default: 
          return false;
    }
  }
  ?>
  <header>
    <a href="#top" class="logo" title="pajisti-proiecte"><img src="/pic/logo.png" /></a>
    <nav id="navi" class="navbar">
      <ul>
        <li><a href="#despre-noi" title="Despre noi" onclick="closeMenu()">Despre noi</a></li>
        <li><a href="#servicii" title="Servicii" onclick="closeMenu()">Servicii</a></li>
        <li></li>
        <li><a href="#noutati" title="Noutati" onclick="closeMenu()">Noutati</a></li>
        <li><a href="#contact" title="Contact" onclick="closeMenu()">Contact</a></li>
      </ul>
      <a href="javascript:void(0);" class="icon" onclick="toggleMenu()">
        <i class="fa fa-bars"></i>
      </a>
    </nav>
  </header>
  <div class="content">
    <section id="top">
      <div class="background-blur" style="background-image: url(/pic/{{$hero['imagine']}})">
      </div>
      <div class="container">
        <h1 data-aos="fade-up" data-aos-duration="2000">{{$hero['titlu']}}</h1>
        <p style="font-weight:bold;" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="100">{{$hero['subtitlu']}}</p>
        <a href="#servicii" class="btn btn-primary" title="buton" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="200">{{$hero['buttonText']}}</a>
      </div>
    </section>
    <section id="despre-noi">
      <div class="container">
        <div class="panel">
          <h2 class="title-with-underline">Despre noi</h2>
          <?php echo htmlspecialchars_decode($despre['continut']); ?>
          <img src="/pic/tractor.jpg" alt="despre noi" class="img-responsive img-separator" />
          <div class="row">
            <div class="col-md-12 ">
              <i class="fa-solid fa-trophy"></i>
              <h3 class="valori">Valori</h3>
              <div class="row" data-aos="flip-left" data-aos-duration="2000">
                <div class="col-md-4">
                  <h5>{{$despre['valori']['adaptabilitate']['titlu']}}</h5>
                  <?php echo htmlspecialchars_decode($despre['valori']['adaptabilitate']['continut']); ?>
                </div>
                <div class="col-md-4">
                  <h5>{{$despre['valori']['cortectitudine']['titlu']}}</h5>
                  <?php echo htmlspecialchars_decode($despre['valori']['cortectitudine']['continut']); ?>
                </div>
                <div class="col-md-4">
                  <h5>{{$despre['valori']['onestitate']['titlu']}}</h5>
                  <?php echo htmlspecialchars_decode($despre['valori']['onestitate']['continut']); ?>
                </div>
              </div>
            </div>
            <div class="col-md-6" data-aos="flip-left" data-aos-duration="2000">
              <i class="fa-solid fa-wheat-awn"></i>
              <h3>{{$despre['misiune']['titlu']}}</h3>
              <?php echo htmlspecialchars_decode($despre['misiune']['continut']); ?>
            </div>
            <div class="col-md-6" data-aos="flip-right" data-aos-duration="2000">
              <i class="fa-solid fa-lightbulb"></i>
              <h3>{{$despre['viziune']['titlu']}}</h3>
              <?php echo htmlspecialchars_decode($despre['viziune']['continut']); ?>
            </div>


          </div>
        </div>
      </div>
    </section>
    <section id="servicii">
      <div class="container">
        <h2 class="title-with-underline">Servicii</h2>
        <div class="row justify-content-center">
          @foreach($servicii as $serviciu)
          <div class="col-md-6">
            <div class="panel" data-aos="fade-right" data-aos-duration="2000" data-aos-delay="200">
              <img src="/pic/{{$serviciu->imagine}}" alt="{{$serviciu->titlu}}" class="img-responsive" />
              <div class="servicii-content">
                <h3>{{$serviciu->titlu}}</h3>
                <?php echo htmlspecialchars_decode($serviciu->descriere); ?>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </section>
    <section id="noutati">
      <div class="container">
        <div class="panel" data-aos="fade-up" data-aos-duration="2000">
          <h2 class="title-with-underline">Noutăți</h2>
          <img src="/pic/{{$noutati['imagine']}}" alt="noutati" class="img-responsive img-separator" />
          <div class="row">
            <div class="col-md-6 noutate">
              <h3>{{$noutati['tehnologii']['titlu']}}</h3>
              <?php echo htmlspecialchars_decode($noutati['tehnologii']['continut']); ?>
            </div>
            <div class="col-md-6 noutate">
              <h3>{{$noutati['legislatie']['titlu']}}</h3>
              <?php echo htmlspecialchars_decode($noutati['legislatie']['continut']); ?>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="contact">
      <div class="title-with-underline-wrapper">
        <h2 class="title-with-underline">Contact</h2>
      </div>
      <div class="row no-gutters justify-content-center w-100">
        <div class="col-md-12">
          <div class="wrapper">
            <div class="row no-gutters">
              <div class="col-lg-8 col-md-7 order-md-last d-flex align-items-stretch">
                <div class="contact-wrap w-100 p-md-5 p-4" data-aos="fade-left" data-aos-duration="2000" data-aos-delay="200">
                  <h3 class="mb-4">Lasa-ne un mesaj, iți vom raspunde cât mai curând</h3>
                  <div id="alert" class="alert alert-success hide" role="alert">
                    Mesajul a fost trimis cu succes!
                  </div>
                  <!-- <form method="POST" action="{{url('index')}}" id="index" name="index" class="contactForm needs-validation" -->
                  <form method="POST" action="{{url('index')}}" id="index" name="index" class="contactForm" novalidate="novalidate">
                    @csrf
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="label" for="name" name="nume">Nume si Prenume </label>
                          <input type="text" class="form-control" name="nume" id="name" required placeholder="Nume si Prenumele dumneavoastra">
                          <div class="invalid-feedback">Câmp obligatoriu</div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="label" for="email" name="email">E-mail</label>
                          <input type="email" class="form-control" name="email" id="email" required placeholder="Adresa de e-mail de formatul: aaaaa@exemplu.com">
                          <div class="invalid-feedback">Câmp obligatoriu sau incorect</div>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="label" for="subject" name="titlu">Titlu</label>
                          <input type="text" class="form-control" name="titlu" id="subject" required placeholder="Titlul mesajului tau">
                          <div class="invalid-feedback">Câmp obligatoriu</div>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="label" for="#" name="Mesaj">Mesaj</label>
                          <textarea name="mesaj" class="form-control" id="mesaj" cols="30" rows="4" required placeholder="Scrie aici mesajul tau"></textarea>
                          <div class="invalid-feedback">Câmp obligatoriu</div>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group text-center">
                          <input type="submit" value="Trimite mesajul" class="btn btn-secondary">
                          <div class="submitting"></div>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <div class="col-lg-4 col-md-5 d-flex align-items-stretch" data-aos="fade-right" data-aos-duration="2000" data-aos-delay="200">
                <div class="info-wrap bg-primary w-100 p-md-5 p-4 d-flex align-items-center flex-column justify-content-center">
                  <h3>{{$contact['titlu']}}</h3>
                  <div class="dbox w-100 d-flex align-items-center location-item">
                    <div class="icon d-flex align-items-center justify-content-center">
                      <span class="fa fa-map-marker"></span>
                    </div>
                    <div class="text pl-5 ">
                      <p><span>Adresa:</span> {{$contact['adresa']}}</p>
                    </div>
                  </div>
                  <div class="dbox w-100 d-flex align-items-center location-item">
                    <div class="icon d-flex align-items-center justify-content-center">
                      <span class="fa fa-phone"></span>
                    </div>
                    <div class="text pl-3">
                      <p><span>Telefon:</span> {{$contact['telefon']}}</p>
                    </div>
                  </div>
                  <div class="dbox w-100 d-flex align-items-center location-item">
                    <div class="icon d-flex align-items-center justify-content-center">
                      <span class="fa fa-paper-plane"></span>
                    </div>
                    <div class="text pl-3">
                      <p><span>E-mail:</span> <a href="mailto:{{$contact['email']}}">{{$contact['email']}}</a></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <footer>
    Made with <i class="fa-solid fa-heart"></i> by © Roxie 2022
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/308de6639d.js" crossorigin="anonymous"></script>

  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="/js/main.js"></script>
</body>

</html>