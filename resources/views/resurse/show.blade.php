@extends('layouts.app')

@section('content')

<style>
    .preview {
        max-height: 800px;
        display: block;
        overflow: hidden;
    }


    .preview .btn {
        padding: 10px 30px;
        font-size: 1.5em;
        border-radius: 100px;
    }

    .preview .btn.btn-primary {
        background-color: rgba(255, 255, 255, 0.8);
        border-color: rgba(255, 255, 255, 0.8);
        color: black;
    }

    .preview .btn.btn-primary:hover,
    .preview .btn.btn-primary:focus,
    .preview .btn.btn-primary:active {
        outline: none;
        background-color: white;
        -webkit-box-shadow: none;
        box-shadow: none;
    }

    .preview .btn.btn-secondary {
        background-color: rgba(44, 103, 0, 0.8);
        border-color: rgba(44, 103, 0, 0.8);
        color: white;
    }

    .preview .btn.btn-secondary:hover,
    .preview .btn.btn-secondary:focus,
    .preview .btn.btn-secondary:active {
        outline: none;
        background-color: #2c6700;
        border-color: #2c6700;
        -webkit-box-shadow: none;
        box-shadow: none;
    }

    .preview section .title-with-underline {
        font-size: 2.5em;
        padding-bottom: 30px;
        margin-bottom: 30px;
        border-bottom: 2px solid grey;
        display: inline-block;
        padding-left: 30px;
        padding-right: 30px;
    }

    .preview section .title-with-underline+p {
        text-align: center;
        max-width: 600px;
        margin-left: auto;
        margin-right: auto;
    }
</style>

<div class="container mb-3">
    <div class="row">
        <div class="col">
            <h2>Resurse - {{$resurse->titlu}}</h2>
        </div>
        <div class="col text-end">
            <a href="{{ route('resurse.index') }}" class="btn btn-primary btn-sm ">Vezi toate</a>
        </div>
    </div>
</div>
<div class="preview">
    @switch($resurse->locatie)
    @case('Hero')
    <style>
        .preview #top {
            width: 100%;
            height: 100vh;
            min-height: 600px;
            background-color: grey;
            overflow: hidden;
            text-align: center;
            position: relative;
        }

        .preview #top .background-blur {
            background-image: url("/pic/camp.jpg");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            -webkit-filter: blur(5px);
            filter: blur(5px);
            position: absolute;
            z-index: 1;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .preview #top .container {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-flow: column;
            flex-flow: column;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            height: 100%;
            position: relative;
            z-index: 2;
        }

        .preview #top .container h1 {
            font-size: 3.5em;
            color: #2c6700;
            font-weight: 250;
        }

        .preview #top .container p {
            font-size: 2em;
            color: #2c6700;
        }
    </style>
    <section id="top">
        <div class="background-blur" style="background-image:url(/pic/{{ $resurse->data['imagine'] }})">
        </div>
        <div class="container">
            <h1 data-aos="fade-up" data-aos-duration="2000">{{ $resurse->data['titlu'] }}</h1>
            <p style="font-weight:bold;" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="100">{{ $resurse->data['subtitlu'] }}</p>
            <a href="#servicii" class="btn btn-primary" title="buton" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="200">{{ $resurse->data['buttonText'] }}</a>
        </div>
    </section>
    @break
    @case('Despre noi')
    <style>
        .preview #despre-noi {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            text-align: center;
            /* margin-top: -100px; */
            position: relative;
            z-index: 3;
        }

        .preview #despre-noi .row {
            padding-left: 30px;
            padding-right: 30px;
        }

        .preview #despre-noi .row p {
            margin-bottom: 30px;
        }

        .preview #despre-noi .row i {
            font-size: 2em;
            color: #4e4e4e;
            -webkit-transition: all 0.2s linear;
            transition: all 0.2s linear;
            padding: 20px;
            padding-top: 20px;
        }

        .preview #despre-noi .row i:hover {
            -webkit-transform: scale(1.3);
            transform: scale(1.3);
            color: #2c6700;
        }

        .preview #despre-noi .col-md-6 {
            border-top: 1px solid #dfdfdf;
        }

        .preview #despre-noi .col-md-6:nth-child(2) {
            border-right: 1px solid #dfdfdf;
        }

        .preview #despre-noi .col-md-12 {
            margin-bottom: 30px;
        }

        .preview #despre-noi h5:hover {
            color: #2c6700;
        }
    </style>
    <section id="despre-noi">
        <div class="container">
            <div class="panel">
                <h2 class="title-with-underline">Despre noi</h2>
                <?php echo htmlspecialchars_decode($resurse->data['continut']); ?>
                <img src="/pic/tractor.jpg" alt="despre noi" class="img-responsive img-separator" />
                <div class="row">
                    <div class="col-md-12 ">
                        <i class="fa-solid fa-trophy"></i>
                        <h3 class="valori">Valori</h3>
                        <div class="row" data-aos="flip-left" data-aos-duration="2000">
                            <div class="col-md-4">
                                <h5>{{$resurse->data['valori']['adaptabilitate']['titlu']}}</h5>
                                <?php echo htmlspecialchars_decode($resurse->data['valori']['adaptabilitate']['continut']); ?>
                            </div>
                            <div class="col-md-4">
                                <h5>{{$resurse->data['valori']['cortectitudine']['titlu']}}</h5>
                                <?php echo htmlspecialchars_decode($resurse->data['valori']['cortectitudine']['continut']); ?>
                            </div>
                            <div class="col-md-4">
                                <h5>{{$resurse->data['valori']['onestitate']['titlu']}}</h5>
                                <?php echo htmlspecialchars_decode($resurse->data['valori']['onestitate']['continut']); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6" data-aos="flip-left" data-aos-duration="2000">
                        <i class="fa-solid fa-wheat-awn"></i>
                        <h3>{{$resurse->data['misiune']['titlu']}}</h3>
                        <?php echo htmlspecialchars_decode($resurse->data['misiune']['continut']); ?>
                    </div>
                    <div class="col-md-6" data-aos="flip-right" data-aos-duration="2000">
                        <i class="fa-solid fa-lightbulb"></i>
                        <h3>{{$resurse->data['viziune']['titlu']}}</h3>
                        <?php echo htmlspecialchars_decode($resurse->data['viziune']['continut']); ?>
                    </div>


                </div>
            </div>
        </div>
    </section>
    @break
    @case('Noutati')
    <style>
        .preview #noutati .container .title-with-underline {
            left: 50%;
            -webkit-transform: translateX(-50%);
            transform: translateX(-50%);
            position: relative;
        }

        .preview #noutati .container .noutate {
            padding-left: 30px;
        }

        .preview .img-separator {
            width: 100%;
            height: 300px;
            overflow: hidden;
            margin-top: 30px;
            margin-bottom: 30px;
            -o-object-fit: cover;
            object-fit: cover;
        }

        .preview .img-separator img {
            width: 100%;
            height: auto;
            left: 0;
            top: 50%;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
        }
    </style>
    <section id="noutati">
        <div class="container">
            <div class="panel" data-aos="fade-up" data-aos-duration="2000">
                <h2 class="title-with-underline">Noutăți</h2>
                <img src="/pic/{{$resurse->data['imagine']}}" alt="noutati" class="img-responsive img-separator" />
                <div class="row">
                    <div class="col-md-6 noutate">
                        <h3>{{$resurse->data['tehnologii']['titlu']}}</h3>
                        <?php echo htmlspecialchars_decode($resurse->data['tehnologii']['continut']); ?>
                    </div>
                    <div class="col-md-6 noutate">
                        <h3>{{$resurse->data['legislatie']['titlu']}}</h3>
                        <?php echo htmlspecialchars_decode($resurse->data['legislatie']['continut']); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @break
    @case('Contact')
    <style>
        .preview #contact {
            padding: 30px 0 0;
        }

        .preview #contact .title-with-underline-wrapper {
            text-align: center;
        }

        .preview #contact .title-with-underline-wrapper .title-with-underline {
            margin-bottom: 50px;
        }

        .preview #contact h3 {
            text-align: center;
        }

        .contactForm .label {
            color: #000;
            text-transform: uppercase;
            font-size: 12px;
            font-weight: 600;
        }

        .contactForm .form-control {
            border: none;
            border-bottom: 1px solid rgba(0, 0, 0, 0.1);
            padding: 0;
        }

        .preview #contactForm .error {
            color: red;
            font-size: 12px;
        }

        .preview #contactForm .form-control {
            font-size: 16px;
        }

        .preview .bg-primary {
            background-color: #2c6700 !important;
        }

        .preview .info-wrap {
            color: rgba(255, 255, 255, 0.8);
        }

        .preview .info-wrap .dbox p span {
            font-weight: 500;
            color: #fff;
        }
    </style>
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
                                <h3>{{$resurse->data['titlu']}}</h3>
                                <div class="dbox w-100 d-flex align-items-center location-item">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <span class="fa fa-map-marker"></span>
                                    </div>
                                    <div class="text pl-5 ">
                                        <p><span>Adresa:</span> {{$resurse->data['adresa']}}</p>
                                    </div>
                                </div>
                                <div class="dbox w-100 d-flex align-items-center location-item">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <span class="fa fa-phone"></span>
                                    </div>
                                    <div class="text pl-3">
                                        <p><span>Telefon:</span> {{$resurse->data['telefon']}}</p>
                                    </div>
                                </div>
                                <div class="dbox w-100 d-flex align-items-center location-item">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <span class="fa fa-paper-plane"></span>
                                    </div>
                                    <div class="text pl-3">
                                        <p><span>E-mail:</span> <a href="mailto:{{$resurse->data['email']}}">{{$resurse->data['email']}}</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @break
    @default
    <div class="container">
        <h2>Resursa negasita</h2>
    </div>
    @endswitch
</div>

@endsection('content')