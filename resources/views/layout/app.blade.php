<!DOCTYPE html>
<html lang="en">

<head>
    <title>MBBD(AIIMS), MD(AIIMS), DM(AIIMD) Gastroenterologist & Interventional Endoscopist</title>
    <meta name="google-site-verification" content="iC9giiQcVL9ZgiDPh4um_xQnjOLwrL9t8BY0-EtvZBo" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{ asset('') }}images/favicon.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet"
        href="{{ asset('') }}https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('') }}css/bootstrap/bootstrap-reboot.css">
    <link rel="stylesheet" href="{{ asset('') }}css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{ asset('') }}css/animate.css">
    <link rel="stylesheet" href="{{ asset('') }}css/animate.css">
    <link rel="stylesheet" href="{{ asset('') }}css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('') }}css/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{ asset('') }}css/magnific-popup.css">
    <link rel="stylesheet" href="{{ asset('') }}css/aos.css">
    <link rel="stylesheet" href="{{ asset('') }}css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('') }}css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="{{ asset('') }}css/jquery.timepicker.css">
    <link rel="stylesheet" href="{{ asset('') }}css/flaticon.css">
    <link rel="stylesheet" href="{{ asset('') }}css/icomoon.css">
    <link rel="stylesheet" href="{{ asset('') }}css/style.css">
    <meta name="google-site-verification" content="C-ySXry0loY4YSNKcOM__I2j3nvrnPW-WGIxNw0M2rI" />
</head>

<body>
    <a class="qlwapp-toggle whats" href="https://wa.me/+918287228259/?text=" target="_blank">
        <i class="fa-brands fa-whatsapp"></i>
        <span>Consult On Whatsapp</span></a>
    <a class="phone-button" href="tel:+91 8287228259" target="_blank"><span class="icon-phone2"></span></a>
    <nav class="navbar py-4 navbar-expand-lg ftco_navbar navbar-light bg-light flex-row">
        <div class="container">
            <div class="row no-gutters d-flex align-items-start align-items-center px-3 px-md-0">
                <div class="col-lg-3 col-md-3 col-12 pr-4 align-items-center">
                    {{-- <a class="navbar-brand" href="{{ route('home.index') }}"><img
                            src="{{ asset('') }}images/logo1.png" alt=""></a> --}}
                    <a href="{{ route('home.index') }}">
                        <h2 class="logo-header">
                            Dr. Srikant Mohta   </h2>
                            {{-- <span> MBBS(AIIMS), MD(AIIMS), DM(AIIMS) <br> --}}
                                {{-- Gastroenterologist & Interventional<br>
                                Endoscopist in Kolkata --}}
                            {{-- </span> --}}

                    </a>
                </div>
                <div class="col-lg-9 col-md-9 col-12 d-none d-md-block">
                    <div class="row d-flex">
                        @php
                            $about = DB::table('abouts')->first();
                        @endphp
                        {{-- <div class="col-lg-3 col-md-4 d-flex topper align-items-center">
                            <a href="" class="text telec">Telephonic Consultation</a>
                        </div> --}}
                        <div class="col-lg-5 col-md-4 d-flex topper align-items-center">
                            <div class="icon bg-white mr-2 d-flex justify-content-center align-items-center"><span
                                    class="icon-paper-plane"></span></div>
                            <span class="text">Email:{{ $about->email }}</span>
                        </div>

                        <div class="col-lg-4 col-md-4 d-flex topper align-items-center">
                            <div class="icon bg-white mr-2 d-flex justify-content-center align-items-center"><span
                                    class="icon-phone2"></span></div>
                            <span class="text">Phone: +91 {{ $about->phone }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">

        <div class="container d-flex align-items-center">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>
            <p class="button-custom order-lg-last mb-0"><a href="{{ route('home.appointment') }}"
                    class="btn btn-secondary py-2 px-3">Make An Appointment</a></p>
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active"><a href="{{ route('home.index') }}" class="nav-link pl-0">Home</a>
                    </li>
                    <li class="nav-item"><a href="{{ route('home.aboutus') }}" class="nav-link">About Us</a></li>
                    <li class="nav-item">
                        <a href="javascript:void(0);" class="nav-link">Gastro Treatments</a>
                        <ul class="submenu">
                            @php  $gastros = DB::table('gastrotreatments')->get();
                            @endphp @foreach ($gastros as $gastro)
                                <li> <a
                                        href="{{ route('home.gastrotreatments', ['id' => $gastro->id]) }}">{{ $gastro->name }}</a>
                                </li>
                            @endforeach
                            {{-- <li> <a href="strictures-dilation.html">Strictures Dilation</a> </li>
                <!-- <li> <a href="piles-injection.html">Piles Injection </a> </li> -->
                <li> <a href="cbd-stone.html">CBD Stone Removal</a> </li>
                <li> <a href="bleeding-per-rectum.html">Bleeding Per Rectum</a> </li>
                <li> <a href="ulcer-bleeding.html">Ulcer Bleeding</a> </li>
                <li> <a href="esophageal-stenting.html">Esophageal Stenting </a> </li>
                <li> <a href="endoscopic-biopsy.html">Endoscopic Biopsy</a> </li>
                <li> <a href="variceal-bleeding.html">Variceal Bleeding</a> </li>
                <li> <a href="cbd-stenting.html">CBD Stenting</a> </li>
                <li> <a href="hematemesis.html">Haematemesis</a> </li>
                <li> <a href="pancreatitis.html">Pancreatitis</a> </li> --}}
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="javascript:void(0);" class="nav-link">Liver Treatment</a>

                        <ul class="submenu">
                            @php $livertreat = DB::table('livertreatments')->get();                                                                          @endphp
                            @foreach ($livertreat as $livertreat)
                                <li> <a
                                        href="{{ route('home.livertreatments', ['id' => $livertreat->id]) }}">{{ $livertreat->name }}</a>
                                </li>
                            @endforeach
                            {{-- <li> <a href="ascites.html">Ascites</a> </li>
                <li> <a href="acute-liver-failure.html">Acute Liver Failure</a> </li>
                <li> <a href="hepatitisB.html">Hepatitis B</a> </li>
                <li> <a href="jaundice.html">Jaundice</a> </li>
                <li> <a href="cirrhosis-liver.html">Cirrhosis Liver</a> </li>
                <li> <a href="liver-cancer.html">Liver Cancer</a> </li>
                <li> <a href="hepatitisC.html">Hepatitis C</a> </li> --}}
                        </ul>
                    </li>
                    <li class="nav-item"><a href="{{ route('home.gallery') }}" class="nav-link">Gallery</a></li>
                    <li class="nav-item"><a href="{{ route('home.video') }}" class="nav-link">Video</a></li>
                    <li class="nav-item"><a href="{{ route('home.contact') }}" class="nav-link">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <footer class="ftco-footer ftco-bg-dark">

        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="ftco-footer-widget mb-5">
                        <h2 class="ftco-heading-2">Gastro Service</h2>

                        <ul class="list-unstyled">
                            @php $gastros = DB::table('gastrotreatments')->get(); @endphp


                            @foreach ($gastros as $gastro)
                                <li><a href="{{ route('home.gastrotreatments', ['id' => $gastro->id]) }}"><span
                                            class="ion-ios-arrow-round-forward mr-2"></span>{{ $gastro->name }}</a>
                                </li>
                            @endforeach
                            {{-- <li><a href="ascites.html"><span class="ion-ios-arrow-round-forward mr-2"></span>Ascites</a></li>
                  <li><a href="strictures-dilation.html"><span class="ion-ios-arrow-round-forward mr-2"></span>Strictures Dilation</a></li>
                  <li><a href="cbd-stone.html"><span class="ion-ios-arrow-round-forward mr-2"></span>CBD Stone Removal</a></li>
                  <li><a href="bleeding-per-rectum.html"><span class="ion-ios-arrow-round-forward mr-2"></span>Bleeding Per Rectum</a></li>
                  <li><a href="ulcer-bleeding.html"><span class="ion-ios-arrow-round-forward mr-2"></span>Ulcer Bleeding</a> </li>
                  <li><a href="hematemesis.html"><span class="ion-ios-arrow-round-forward mr-2"></span>Haematemesis</a></li> --}}
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="ftco-footer-widget mb-5">

                        <h2 class="ftco-heading-2">Liver Service</h2>
                        <ul class="list-unstyled">
                            {{-- @php$livertreat = DB::table('livertreatments')->get();
                               @endphp
                            @foreach ($livertreat as $livertreat)
                                <li><a href="{{ route('home.livertreatments',['id'=>$livertreat->id])}}"><span
                                            class="ion-ios-arrow-round-forward mr-2"></span>{{ $livertreat->name }}</a>
                                </li>
                            @endforeach --}}

                            @php $livertreatments = DB::table('livertreatments')->get();
                            @endphp

                            <ul>
                                @foreach ($livertreatments as $livertreat)
                                    <li>
                                        <a href="{{ route('home.livertreatments', ['id' => $livertreat->id]) }}">
                                            <span
                                                class="ion-ios-arrow-round-forward mr-2"></span>{{ $livertreat->name }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>

                            {{-- <li><a href="ascites.html"><span class="ion-ios-arrow-round-forward mr-2"></span>Ascites</a></li>
                  <li><a href="acute-liver-failure.html"><span class="ion-ios-arrow-round-forward mr-2"></span>Acute Liver Failure</a></li>
                  <li><a href="hepatitisB.html"><span class="ion-ios-arrow-round-forward mr-2"></span>Hepatitis B</a></li>
                  <li><a href="jaundice.html"><span class="ion-ios-arrow-round-forward mr-2"></span>Jaundice</a></li>
                  <li> <a href="cirrhosis-liver.html"><span class="ion-ios-arrow-round-forward mr-2"></span>Cirrhosis Liver</a></li>
                  <li><a href="liver-cancer.html"><span class="ion-ios-arrow-round-forward mr-2"></span>Liver Cancer</a></li> --}}
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="ftco-footer-widget mb-5">
                        <h2 class="ftco-heading-2">Clinic</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                @php $clinic = DB::table('clinics')->get();
                                @endphp
                                @foreach ($clinic as $clinics)
                                    <li><span><i class="icon xcon-location fa fa-map-marker"></i></span>
                                        <p>@php
                                            echo "{$clinics->clinicaddres}";
                                        @endphp</p>
                                    </li>
                                @endforeach
                                {{-- <li><span><i class="icon xcon-location fa fa-map-marker"></i></span> <p>1489, Mukundapur Main Road, 124, Eastern Metropolitan Bypass, Mukundapur, Kolkata, West Bengal 700099 </p></li>
                    <li><span><i class="icon xcon-location fa fa-map-marker"></i></span> <p>56, Jamini Roy Sarani Above Samsung Showroom on Ballygunge Phari</p></li> --}}
                                @php $about = DB::table('abouts')->first();
                                                                                                                                                                                                                                                                                                @endphp ?> ?> ?> ?> ?> ?> ?> ?>

                                <li><span><i class="fa fa-phone"></i></span>
                                    <p>+91 {{ $about->phone }}</p>
                                </li>
                                <li><span><i class="fa-regular fa-envelope"></i></span>
                                    <p>{{ $about->email }} </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <hr style="border-top: 1px solid rgb(249 128 0);margin:10px 0;">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-12 text-left">
                    <p class="copyright">Copyright © 2024 Dr. Srikant Mohta</p>
                </div>
                <div class="col-lg-4 col-md-4 col-12 text-right">
                    <a href="http://www.indiadealsdigitalmedia.com/" target="_blank" class="bottom-logo">
                        <span>Designed by:</span> <img src="images/id5.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/js/all.min.js"></script>
    <script src="{{ asset('') }}js/jquery.min.js"></script>
    <script src="{{ asset('') }}js/jquery-3.2.1.min.js"></script>
    <script src="{{ asset('') }}js/jquery-migrate-3.0.1.min.js"></script>
    <script src="{{ asset('') }}js/popper.min.js"></script>
    <script src="{{ asset('') }}js/bootstrap.min.js"></script>
    <script src="{{ asset('') }}js/jquery.easing.1.3.js"></script>
    <script src="{{ asset('') }}js/jquery.waypoints.min.js"></script>
    <script src="{{ asset('') }}js/jquery.stellar.min.js"></script>
    <script src="{{ asset('') }}js/owl.carousel.min.js"></script>
    <script src="{{ asset('') }}js/jquery.magnific-popup.min.js"></script>
    <script src="{{ asset('') }}js/aos.js"></script>
    <script src="{{ asset('') }}js/jquery.animateNumber.min.js"></script>
    <script src="{{ asset('') }}js/bootstrap-datepicker.js"></script>
    <script src="{{ asset('') }}js/jquery.timepicker.min.js"></script>
    <script src="{{ asset('') }}js/scrollax.min.js"></script>
    <script
        src="{{ asset('') }}https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false">
    </script>
    <script src="{{ asset('') }}js/google-map.js"></script>
    <script src="{{ asset('') }}js/main.js"></script>
</body>

</html>
