<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
        content="ICO Crypto is a modern and elegant landing page, created for ICO Agencies and digital crypto currency investment website.">
    <!-- Fav Icon -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('images') }}/Keeperlogo.png">
    <!-- Site Title  -->
    <title>KeeperDApp::Decentralize your crypto world.</title>
    <!-- Vendor Bundle CSS -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/vendor.bundlee222.css?ver=142">
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/stylee222.css?ver=142">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/theme-orangee222.css?ver=142" id="layoutstyle">
</head>

<body class="theme-dark io-zinnia" data-spy="scroll" data-target="#mainnav" data-offset="80">
    <!-- Header -->
    <header class="site-header is-sticky mobile-sticky">
        <!-- Place Particle Js -->
        <div id="particles-js" class="particles-container particles-js"></div><!-- Navbar -->
        <div class="navbar navbar-full navbar-expand-lg is-transparent" id="mainnav">
            <a class="navbar-brand animated" data-animate="fadeInDown" data-delay=".65" href="{{ url('/') }}">
                <h4 class="logo logo-light">KeeperDApp</h4>
                <h5 class="logo logo-dark" style="color:green">KeeperDApp</h5>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggle"><span
                    class="navbar-toggler-icon"><span class="ti ti-align-justify"></span></span></button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarToggle">
                <ul class="navbar-nav animated remove-animation" data-animate="fadeInDown" data-delay=".75">
                    <li class="nav-item"><a class="nav-link menu-link" href="#about">Introduction<span
                                class="sr-only">(current)</span></a></li>
                    <li class="nav-item"><a class="nav-link menu-link" href="#why">Why</a></li>
                    <li class="nav-item"><a class="nav-link menu-link" href="#benefit">Features</a></li>
                    <li class="nav-item"><a class="nav-link menu-link" href="#tokenAlocate">Presale</a></li>
                    <li class="nav-item"><a class="nav-link menu-link" href="#roadmap">Roadmap</a></li>
                    <li class="nav-item"><a class="nav-link menu-link" href="#faq">Faqs</a></li>
                    <li class="nav-item"><a class="nav-link menu-link" href="#contact">Contact</a></li>
                </ul>
                <ul class="navbar-btns animated remove-animation" data-animate="fadeInDown" data-delay=".85">
                    <li class="nav-item"><a class="nav-link btn btn-sm btn-outline menu-link" href="#">BUY KPRP</a>
                    </li>
                    {{-- <li class="nav-item"><a class="nav-link btn btn-sm btn-outline menu-link" href="#">Pre-Sale</a></li> --}}
                </ul>
            </div>
        </div><!-- End Navbar -->
        <!-- Banner/Slider -->
        <div id="header" class="banner banner-zinnia">
            <div class="ui-shape ui-shape-light ui-shape-header"></div>
            <div class="container">
                <div class="banner-content">
                    <div class="row align-items-center text-center justify-content-center">
                        <div class="col-sm-10 col-md-12 col-lg-10">
                            <div class="header-txt tab-center mobile-center">
                                <h1 class="animated" data-animate="fadeInUp" data-delay="1.25">The World’s
                                    1<sup>st</sup> Platform That Brings <br class="d-none d-xl-block">
                                    All cryptocurrency Applications Together.
                                </h1>

                                <div class="gaps size-1x d-none d-md-block"></div>
                                <p class="lead animated" data-animate="fadeInUp" data-delay="1.35">Keeper aims to become
                                    the
                                    leading decentralized application <br class="d-none d-sm-block"> to base template in
                                    crytocurrency worldwide</p>

                                <div class="gaps size-1x d-none d-md-block"></div>

                                <ul class="btns animated" data-animate="fadeInUp" data-delay="1.45">
                                    <li><a href="https://etherscan.io/address/0xE5dd3e4607cC1aBA94F93494160277294b9c9AAf" target="_blank" class="btn btn-icon-s3">CONTRACT ADDRESS               
                                        <i class="fas fa-angle-double-right"></i></a></li>
                                    <li><a href="#" class="btn btn-icon-s3">BUY KPRP <i
                                                class="fas fa-angle-double-right"></i></a></li>
                                </ul>
                            </div>
                        </div><!-- .col  -->
                    </div><!-- .row  -->
                </div><!-- .banner-content  -->
            </div><!-- .container  -->
            <ul class="hr-social hr-social-mid animated" data-animate="fadeIn" data-delay="1.55">
                <li><a href="https://twitter.com/KeeperDApp?s=09" target="_blank"><em class="fab fa-twitter"></em></a></li>
                <li><a href="https://t.me/keeperDApp" target="_blank"><em class="fab fa-telegram"></em></a></li>
            </ul>
        </div><!-- End Banner/Slider -->
        <div class="presale-box animated" data-animate="fadeIn" data-delay="1.65">
            <div class="container">
                <div class="row no-gutters justify-content-center">
                    <div class="col-xl-4 col-md-5">
                        <div class="presale-countdown">
                            <h5>KPRP is Coming Soon</h5>
                            <h6>Decentralize your crypto world.</h6>

                            <div class="token-countdown" data-date="2018/12/05"></div>
                        </div>
                    </div><!-- .col  -->
                    <div class="col-xl-6 col-md-7">
                        <div class="presale-status">
                            <h5>Pre Sale</h5>

                            <div class="presale-bar">
                                <div class="presale-bar-percent" style="width:0%"></div>
                            </div>
                            <div class="presale-points d-flex justify-content-between">
                                <span>Coming soon, Loading...</span><span><h6>30thNov - 3rd Dec</h6></span>
                                {{-- <span>End</span> --}}
                                {{-- <span>15k Sold</span><span>75k Sold</span> --}}
                            </div>
                        </div>
                    </div>
                    <!-- .col  -->
                </div><!-- .row  -->
            </div><!-- .container  -->
        </div><!-- .presale-box  -->
    </header>
    <div class="gaps size-6x d-md-none"></div>
    <div class="gaps size-3x"></div><!-- End Header -->
    <!-- Start Section -->
    <div class="section section-pad about-section no-pb section-bg" id="about">
        <div class="container mt-3">
            <div class="row justify-content-center text-center">
                <div class="col-md-7">
                    <div class="section-head-s7">
                        <h2 class="section-title-s7 animated" data-animate="fadeInUp" data-delay=".1">About Keeper</h2>

                        <p class="lead animated" data-animate="fadeInUp" data-delay=".2">
                            KeeperDApp Network is a decentralized Financial System that has an interoperability
                            characteristic of integrating the crypto world Apps into one App which makes it easier for
                            users to simultaneously manage, protect and navigate in the crypto space just by switching.
                        </p>


                    <div class="service-img animated" data-animate="fadeInUp" data-delay=".3"><img
                            src="{{ asset('images') }}/zinnia/views1.jpg" alt="mobile-view"></div>
                            {{-- src="{{ asset('images') }}/zinnia/views.jpeg" alt="mobile-view"></div> --}}
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="animated" data-animate="fadeInUp" data-delay=".3"><img
                            src="{{ asset('images') }}/zinnia/KPHome.jpg" alt="cover">
                    </div>
                    <div class="service-img animated text-center" data-animate="fadeInUp" data-delay=".2">
                        <img  style="width:90%" 
                            src="{{ asset('images') }}/zinnia/download.jpg" alt="mobile-view"></div>

                </div>
            </div>
        </div>
    </div><!-- End Section -->
    <!-- Start Section -->
    <div class="section section-pad section-bg" id="why">
        <div class="ui-shape ui-shape-s1"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 order-last">
                    <div class="animated" data-animate="fadeInUp" data-delay=".5"><img
                            src="{{ asset('images') }}/zinnia/graph.jpg" alt="graph"></div>
                </div>
                <div class="col-lg-5 text-center text-lg-left res-m-bttm">
                    <div class="text-block">
                        <h2 class="animated" data-animate="fadeInUp" data-delay=".1">Direct-To-Consumer
                            Decentralize Platform</h2>

                        <p class="lead animated" data-animate="fadeInUp" data-delay=".2"><strong>
                                Our goal is to build a truly decentralized product that houses the crypto world.
                            </strong></p>

                        <p class="animated" data-animate="fadeInUp" data-delay=".3">
                            The centralized exchange apps like huobi,coinbase etc, the decentralized exchange apps like
                            uniswap DApp, dharma Dapp, trust wallet DApp, imtoken DApp, the trading analytical tools are
                            integrated into KeeperDApp.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End Section -->

    <!-- Start Section -->
    <div class="section section-pad services-section section-bg" id="benefit">
        <div class="ui-shape ui-shape-s4"></div>
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-6 col-sm-8">
                    <div class="section-head-s7">
                        <h2 class="section-title-s7 animated" data-animate="fadeInUp" data-delay=".1">Our Technology
                            Services</h2>

                        <p class="animated" data-animate="fadeInUp" data-delay=".2">At KeeperDApp, we have implemented a
                            base for all decentralized application
                            with various benefits for our costumers.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-7 res-m-bttm">
                    <div class="row justify-content-between text-center text-lg-left">
                        <div class="col-xl-5 col-md-6">
                            <div class="service-item animated" data-animate="fadeInUp" data-delay=".4">
                                <div class="service-icon mx-auto mx-lg-0"><img
                                        src="{{ asset('images') }}/zinnia/service-icon-a.png" alt="icon"></div>
                                <h5 class="service-title">Easy to Buy &amp; Sale Token</h5>

                                <p>This is made very easy for you to buy and sell token to different decentralized
                                    application networks.</p>
                            </div>
                        </div><!-- .col -->
                        <div class="col-xl-5 col-md-6">
                            <div class="service-item animated" data-animate="fadeInUp" data-delay=".5">
                                <div class="service-icon mx-auto mx-lg-0"><img
                                        src="{{ asset('images') }}/zinnia/service-icon-b.png" alt="icon"></div>
                                <h5 class="service-title">Better experience</h5>
                                <p>Easy access to your local fiat anywhere, anytime in the world when you link your card to your Keeper's wallet, fun to use, and more focus.</p>
                            </div>
                        </div><!-- .col -->
                        <div class="col-xl-5 col-md-6">
                            <div class="service-item animated" data-animate="fadeInUp" data-delay=".6">
                                <div class="service-icon mx-auto mx-lg-0"><img
                                        src="{{ asset('images') }}/zinnia/service-icon-c.png" alt="icon"></div>
                                <h5 class="service-title">Easy to Communicate</h5>

                                <p>Communication is very easy and reliable when it comes to keeperDApp.
                                    Bringing you to a Telegram community channel where you get the latest updates about us.</p>
                            </div>
                        </div><!-- .col -->
                        <div class="col-xl-5 col-md-6">
                            <div class="service-item animated" data-animate="fadeInUp" data-delay=".7">
                                <div class="service-icon mx-auto mx-lg-0"><img
                                        src="{{ asset('images') }}/zinnia/service-icon-d.png" alt="icon"></div>
                                <h5 class="service-title">Safe &amp; Secure</h5>

                                <p>Safe and security is important, keeperDApp makes sure your transactions and other
                                    related decentralized request are decrypted to enforce secure pipeline.</p>
                            </div>
                        </div><!-- .col -->
                    </div><!-- .row -->
                    <ul class="btns text-center text-lg-left animated" data-animate="fadeInUp" data-delay=".8">
                        <li><a href="#" class="btn btn-sm">Buy KPRP</a></li>
                        {{-- <li><a href="#"><em class="fab fa-apple"></em></a> --}}
                            {{-- <a href="#"><em class="fab fa-android"></em></a> --}}
                        </li>
                    </ul>
                </div><!-- .col -->
                <div class="col-lg-5 order-first order-lg-last res-m-bttm">
                    <div class="service-img animated" data-animate="fadeInUp" data-delay=".3"><img
                            src="{{ asset('images') }}/zinnia/KPMenu.jpg" alt="mobile-menu-view"></div>

                    <div class="service-img animated text-center" data-animate="fadeInUp" data-delay=".3">
                        <img  style="width:90%" 
                            src="{{ asset('images') }}/zinnia/download.jpg" alt="mobile"></div>
                    </div>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- End Section -->
    <!-- Start Section -->
    <div class="section section-pad token-alocate-section section-bg" id="tokenAlocate">
        <div class="ui-shape ui-shape-s3"></div>
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-md-6">
                    <div class="section-head-s7">
                        <h2 class="section-title-s7 animated" data-animate="fadeInUp" data-delay=".1">Token Allocation
                            Forecast</h2>
                    </div>
                </div>
            </div>
            <div class="tab-s4">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs text-center animated" data-animate="fadeInUp" data-delay=".2">
                    <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#tab-dist">Distribution </a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tab-fund">Funding
                            Allocation</a></li>
                </ul>
                <div class="gaps size-2x"></div>
                <div class="gaps size-3x d-none d-xl-block"></div><!-- Tab panes -->
                <div class="tab-content animated" data-animate="fadeInUp" data-delay=".3">
                    <div class="tab-pane animate  active show" id="tab-dist">
                        <div class="tkn-crt">
                            <div class="tkn-crt-img"><img src="{{ asset('images') }}/zinnia/chart-zinnia-a.png"
                                    alt="chart"></div>
                            <ul class="tkn-crt-lst">
                                {{-- #346c15
                                #66cd07
                                #74e80a
                                #81ea49
                                #aeee85
                                #55af71
                                #4fa754 --}}
                                <li class="tkn-crt-itm"><span class="tkn-crt-prcnt one"><span>60%</span></span><span
                                        class="tkn-crt-ttl">Total supply</span></li>
                                <li class="tkn-crt-itm"><span class="tkn-crt-prcnt two"><span>40%</span></span><span
                                        class="tkn-crt-ttl">Locked up supply</span></li>
                                <li class="tkn-crt-itm"><span class="tkn-crt-prcnt three"><span>14%</span></span><span
                                        class="tkn-crt-ttl">Pre sale / Public sale</span></li>
                                <li class="tkn-crt-itm"><span class="tkn-crt-prcnt four"><span>20%</span></span><span
                                        class="tkn-crt-ttl">Circulating supply</span></li>
                                <li class="tkn-crt-itm"><span class="tkn-crt-prcnt five"><span>10%</span></span><span
                                        class="tkn-crt-ttl">Stacking reward</span></li>
                                <li class="tkn-crt-itm"><span class="tkn-crt-prcnt five"><span>11%</span></span><span
                                        class="tkn-crt-ttl">Partners / Team</span></li>
                                <li class="tkn-crt-itm"><span class="tkn-crt-prcnt six"><span>5%</span></span><span
                                        class="tkn-crt-ttl">Airdrop / Bounty</span></li>
                            </ul>
                        </div>
                    </div><!-- End tab-pane -->
                    <div class="tab-pane animate" id="tab-fund">
                        <div class="tkn-crt">
                            <ul class="tkn-crt-lst">
                                <li class="tkn-crt-itm"><span class="tkn-crt-prcnt one"><span>90%</span></span><span
                                        class="tkn-crt-ttl">Liquidity pool</span></li>
                                <li class="tkn-crt-itm"><span class="tkn-crt-prcnt two"><span>10%</span></span><span
                                        class="tkn-crt-ttl">Project development</span></li>
                            </ul>
                        </div>
                    </div><!-- End tab-pane -->
                </div><!-- .tab-content -->
            </div><!-- .tab-custom-s4 -->
        </div>
        <!-- .container -->
    </div><!-- End Section -->
    <!-- Start Section -->
    <div class="section section-pad document-section section-bg-zinnia" id="documents">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-5 res-m-bttm">
                    <div class="document-img-s3 animated" data-animate="fadeInUp" data-delay=".1"><img
                            src="{{ asset('images') }}/zinnia/documents-cover.jpg" alt="documents" style="width: 80%"></div>
                </div><!-- .col -->
                <div class="col-lg-7 text-center text-lg-left">
                    <div class="section-head-s7">
                        <h2 class="section-title-s7 animated" data-animate="fadeInUp" data-delay=".2">Read Our Documents
                        </h2>

                        <p class="animated" data-animate="fadeInUp" data-delay=".3">Here is our full documents that help
                            you
                            to understand about us.</p>
                    </div>
                    <ul class="document-list">
                        <li class="animated" data-animate="fadeInUp" data-delay=".4"><a href="https://keeperdapp.gitbook.io/keeperdapp/" target="_blank"
                                class="btn btn-outline">KPRP document</a>
                        </li>
                        {{-- <li class="animated" data-animate="fadeInUp" data-delay=".5"><a href="#"
                                class="btn btn-outline">One Pager</a>
                        </li> --}}
                        <li class="animated" data-animate="fadeInUp" data-delay=".6"><a href="{{ url('/privacy-and-policy') }}"
                                class="btn btn-outline">Privacy
                                &amp; Policy</a></li>
                        <li class="animated" data-animate="fadeInUp" data-delay=".7"><a href="{{url('/terms-and-conditions  ')}}"
                                class="btn btn-outline">Terms &amp; conditions</a></li>
                    </ul>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- End Section -->
    <!-- Start Section -->
    <div class="section section-pad roadmap-section section-bg-zinnia" id="roadmap">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-md-6">
                    <div class="section-head-s7">
                        <h2 class="section-title-s7 animated" data-animate="fadeInUp" data-delay=".1">Roadmap</h2>

                        <p class="animated" data-animate="fadeInUp" data-delay=".2">Our team is working hardly to make
                            archive of a great decentralized network and a platform that comprises other decentralized applications.</p>
                    </div>
                </div>
            </div>
            <div class="timeline-row timeline-row-odd timeline-row-done animated" data-animate="fadeInUp"
                data-delay=".3">
                <div class="row no-gutters text-left text-lg-center justify-content-center">
                    <div class="col-lg">
                        <div class="timeline-item timeline-done"><span class="timeline-date">July Q1</span>
                            <h6 class="timeline-title">Concept</h6>
                            <ul class="timeline-info">
                                <li>project research</li>
                                <li>gathering of ideas/developers</li>
                            </ul>
                        </div>
                    </div><!-- .col -->
                    <div class="col-lg">
                        <div class="timeline-item timeline-done"><span class="timeline-date">August</span>
                            <h6 class="timeline-title">Research</h6>
                            <ul class="timeline-info">
                                <li>Proving the concept can work</li>
                                <li>Strategic Plan</li>
                                <li>project and developments kick-off.</li>
                            </ul>
                        </div>
                    </div><!-- .col -->
                    <div class="col-lg">
                        <div class="timeline-item timeline-done"><span class="timeline-date">September</span>
                            <h6 class="timeline-title">Communication</h6>
                            <ul class="timeline-info">
                                <li>our social media link to gain closure and growth of our community.</li>
                            </ul>
                        </div>
                    </div><!-- .col -->
                    <div class="col-lg">
                        <div class="timeline-item timeline-done"><span class="timeline-date">October</span>
                            <h6 class="timeline-title">AMA</h6>
                            <ul class="timeline-info">
                                <li>First AMA on 17th Oct 2020[Zoom]</li>
                            </ul>
                        </div>
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .timeline-row -->
            <div class="timeline-row timeline-row-even animated" data-animate="fadeInUp" data-delay=".4">
                <div class="row no-gutters text-left text-lg-center justify-content-center flex-row-reverse">
                    <div class="col-lg">
                        <div class="timeline-item timeline-current"><span class="timeline-date">November</span>
                            <h6 class="timeline-title">AMA</h6>
                            <ul class="timeline-info">
                                <li>Second AMA Nov 2020[Telegram]</li>
                                <li>Review / Website lunch(beta version)</li>
                                <li>Public sale</li>
                                <li>Listing of $Kprp on Uniswap</li>
                            </ul>
                        </div>
                    </div><!-- .col -->
                    <div class="col-lg">
                        <div class="timeline-item"><span class="timeline-date">December</span>
                            <h6 class="timeline-title">
                                Publicity</h6>
                            <ul class="timeline-info">
                                <li>Lunching of our staking pool</li>
                                <li>Listing of $Kprp on two(3) exchanges</li>
                            </ul>
                        </div>
                    </div><!-- .col -->
                    <div class="col-lg">
                        <div class="timeline-item"><span class="timeline-date">Q1 2021</span>
                            <h6 class="timeline-title">App
                                Beta Test</h6>
                            <ul class="timeline-info">
                                <li>ios Version</li>
                                <li>android Version</li>
                                <li>Open beta launched to public and improvement the app</li>
                            </ul>
                        </div>
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .timeline-row -->
            <div class="timeline-row timeline-row-odd timeline-row-last mb--x5 animated" data-animate="fadeInUp"
                data-delay=".5">
                <div class="row no-gutters text-left text-lg-center justify-content-center">
                    <div class="col-lg">
                        <div class="timeline-item"><span class="timeline-date">Q2 2021</span>
                            <h6 class="timeline-title">Introducing Keeper's most secured wallet/card with multiple features</h6>
                            <ul class="timeline-info">
                                <li>Ethereum tokens support</li>
                                <li>Adding more crypto Apps both decentralized and centralized crypto exchange</li>
                            </ul>
                        </div>
                    </div><!-- .col -->
                    {{-- <div class="col-lg">
                        <div class="timeline-item"><span class="timeline-date">2020 Q2</span>
                            <h6 class="timeline-title">More
                                Operational</h6>
                            <ul class="timeline-info">
                                <li>Integration with Private Chains, More Coin in Wallet</li>
                                <li>New services offered by members or business</li>
                            </ul>
                        </div>
                    </div> --}}
                    <!-- .col -->
                </div><!-- .row -->
            </div><!-- .timeline-row -->
            <div class="gaps size-2x d-lg-none"></div>
        </div><!-- .container -->
    </div><!-- End Section -->
    <!-- Start Section -->
    <div class="section section-pad-md section-bg" id="faq">
        <div class="ui-shape ui-shape-s6"></div>
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-md-7">
                    <div class="section-head-s7">
                        <h2 class="section-title-s7 animated" data-animate="fadeInUp" data-delay=".1">Frequently asked
                            questions</h2>

                        <p class="animated" data-animate="fadeInUp" data-delay=".2">Below we’ve provided a bit of KPRP
                            Token, cryptocurrencies, and few others. If you have any other questions, please get in
                            touch
                            using the contact form below.</p>
                    </div>
                </div>
            </div>
            <div class="row align-items-center justify-content-center">
                <div class="col-md-10">
                    <div class="tab-custom-s3">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs text-center justify-content-center animated" data-animate="fadeInUp"
                            data-delay=".1">
                            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#tab-1">General</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tab-2">KPRP Related</a>
                            </li>
                        </ul>
                        <div class="gaps size-1x"></div><!-- Tab panes -->
                        <div class="tab-content animated" data-animate="fadeInUp" data-delay=".2">
                            <div class="tab-pane fade show active" id="tab-1">
                                <div class="accordion-s2" id="accordion-1">
                                    <div class="card active">
                                        <div class="card-header">
                                            <h5><a data-toggle="collapse" data-target="#collapse-1-1">What
                                                    is KeeperDApp?<span class="plus-minus"><span
                                                            class="ti ti-angle-up"></span></span></a></h5>
                                        </div>
                                        <div id="collapse-1-1" class="collapse show" data-parent="#accordion-1">
                                            <div class="card-body">
                                                <p>Keeper.DApp Network is a decentralized Financial System that has an
                                                    interoperability characteristic
                                                    of integrating the crypto world Apps into one Decentralized App
                                                    which makes it easier for users to simultaneously manage,
                                                    protect and navigate in the crypto space just by switching.
                                                    This can easily be put as a decentralized App that combines
                                                    the crypto world Apps in one place for easy access </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <h5><a class="collapsed" data-toggle="collapse"
                                                    data-target="#collapse-1-2">What cryptocurrencies
                                                    can I use to purchase?<span class="plus-minus"><span
                                                            class="ti ti-angle-up"></span></span></a></h5>
                                        </div>
                                        <div id="collapse-1-2" class="collapse" data-parent="#accordion-1">
                                            <div class="card-body">
                                                <p>You can purchase our erc 20 token with ETH(0.05ETH = 1 KPRP) </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <h5><a class="collapsed" data-toggle="collapse"
                                                    data-target="#collapse-1-3">How can I participate in
                                                    the KPRP Token sale?<span class="plus-minus"><span
                                                            class="ti ti-angle-up"></span></span></a>
                                            </h5>
                                        </div>
                                        <div id="collapse-1-3" class="collapse" data-parent="#accordion-1">
                                            <div class="card-body">
                                                <p>Connect your wallet
                                                    Enter the amount of ETH you want to deposit.
                                                    Click the purchase button</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <h5><a class="collapsed" data-toggle="collapse"
                                                    data-target="#collapse-1-4">How do I benefit from
                                                    the KPRP Token?<span class="plus-minus"><span
                                                            class="ti ti-angle-up"></span></span></a></h5>
                                        </div>
                                        <div id="collapse-1-4" class="collapse" data-parent="#accordion-1">
                                            <div class="card-body">
                                                <p>Staking rewards :Staking is a feature in our system which was
                                                    created to help our investors and community at large to earn and win
                                                    tokens.
                                                    it's fast, cheap and very easy to access. We believe in the world of
                                                    scalability
                                                    and will be very happy to receive proposals from the community to
                                                    create more staking pools to enable members to earn more tokens like
                                                    BNB, DIA to mention a few.</p>
                                                    <p>Access your local fiat anywhere, anytime in the world when you link your card to your Keeper's wallet.</p>
                                                    <p> Staking reward: [10%]- 15,000 Kprp tokens</p>
                                                    <p>Airdrop reward & Bounty marketing: [5%]- 7,500 Kprp tokens. Here the Bounty marketing benefits include benefits earned by winners in a trading competition that will be hosted in exchanges.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End tab-pane -->
                            <div class="tab-pane fade" id="tab-2">
                                <div class="accordion-s2" id="accordion-2">
                                    <div class="card active">
                                        <div class="card-header">
                                            <h5><a data-toggle="collapse" data-target="#collapse-2-1">When is this
                                                    starting ?<span class="plus-minus"><span
                                                            class="ti ti-angle-up"></span></span></a></h5>
                                        </div>
                                        <div id="collapse-2-1" class="collapse show" data-parent="#accordion-2">
                                            <div class="card-body">
                                                <p>The pre-sales should take place on or before 30th Nov as the team is
                                                    working tirelessly to achieve the best of results benefitting to our
                                                    community.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <h5><a class="collapsed" data-toggle="collapse"
                                                    data-target="#collapse-2-2">I don't know how to join the
                                                    pre-sale<span class="plus-minus"><span
                                                            class="ti ti-angle-up"></span></span></a>
                                            </h5>
                                        </div>
                                        <div id="collapse-2-2" class="collapse" data-parent="#accordion-2">
                                            <div class="card-body">
                                                <p>You can participate in our pre-sales from the Keeper.DApp web
                                                    <br>OR
                                                    Send ETH directly to the contract address (Be sure to set a gas
                                                    limit of at least 100,000).</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <h5><a class="collapsed" data-toggle="collapse"
                                                    data-target="#collapse-2-4">What is pre-sale ?<span
                                                        class="plus-minus"><span
                                                            class="ti ti-angle-up"></span></span></a></h5>
                                        </div>
                                        <div id="collapse-2-4" class="collapse" data-parent="#accordion-2">
                                            <div class="card-body">
                                                <p>Pre-sale is when an up-and-coming token team sells a set amount of coins before the initial coin offering. This gives the team immediate funding and generates buzz</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End tab-pane -->
                            <!-- .tab-pane -->
                        </div><!-- .tab-content -->
                    </div><!-- .tab-custom -->
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- End Section -->
    <!-- Start Section -->
    <div class="section section-pad-md section-bg-alt" id="contact">
        <div class="ui-shape ui-shape-s7"></div>
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <div class="section-head-s7">
                        <h2 class="section-title-s7 animated" data-animate="fadeInUp" data-delay=".1">CONTACT KPRP SUPPORT
                        </h2>

                        <p class="animated" data-animate="fadeInUp" data-delay=".2">Any question? Reach out to us and
                            we’ll
                            get back to you shortly.</p>
                    </div>
                </div><!-- .col -->
            </div><!-- .row -->
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <ul class="contact-info">
                        <li class="animated" data-animate="fadeInUp" data-delay=".3"><em
                                class="fab fa-twitter"></em><span>
                                    <a href="https://twitter.com/KeeperDApp?s=09">
                                    Twitter</a></span>
                        </li>
                        <li class="animated" data-animate="fadeInUp" data-delay=".4"><em
                                class="fa fa-envelope"></em><span>info@keeperdapp.io</span>
                        </li>
                        <li class="animated" data-animate="fadeInUp" data-delay=".5"><em
                                class="fa fa-paper-plane"></em><span><a href="https://t.me/keeperDApp">Join us on
                                    Telegram</a></span></li>
                    </ul>
                </div><!-- .col -->
            </div><!-- .row -->
            <!-- .row -->
        </div><!-- .container -->
    </div><!-- End Section -->
    <!-- Start Section -->
    <div class="section footer-section section-pad-md no-pb">
        <div class="ui-shape ui-shape-light ui-shape-footer"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm">
                    <div class="widget-item">
                        <h5 class="widget-title">fEATURES</h5>
                        <ul class="widget-links">
                            <li>Coin tracker apps</li>
                            <li>Trading tool apps</li>
                            <li>DAPP web browser</li>
                            <li>App switch</li>
                            <li>Staking pool</li>
                            <li>24Hrs PNL</li>
                            <li>KeeperDapp decentralized multi wallet / card</li>
                        </ul>
                    </div>
                </div><!-- .col -->
                <div class="col-lg-2 col-sm">
                </div> 
                <!-- .col -->
                <div class="col-lg-3 col-sm">
                    <div class="widget-item">
                        <h5 class="widget-title">Company</h5>
                        <ul class="widget-links">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="#about">About</a></li>
                            <li><a href="#benefit">Features</a></li>
                            <li><a href="#tokenAlocate">Presale</a></li>
                            <li><a href="#roadmap">Roadmap</a></li>
                            <li><a href="#faq">FAQ</a></li>
                            <li><a href="#contact">Contact Us</a></li>
                        </ul>
                    </div>
                </div><!-- .col -->
                <div class="col-lg-3">
                    <div class="widget-item">
                        <h5 class="widget-title widget-title-ncap">New updates</h5>

                        <div class="widget-subsctibe">
                            Let's keep in touch with you
                            </p>

                            <form id="subscribe-form" action="#" method="post"
                                class="subscription-form subscription-form-sm"><input type="text" name="youremail"
                                    class="input-round required email" placeholder="Enter mail"><input type="text"
                                    class="d-none" name="form-anti-honeypot" value="">
                                <button type="submit" class="btn btn-plane"><i class="fas fa-paper-plane"></i></button>
                                <div class="subscribe-results"></div>
                            </form>
                        </div>
                    </div>
                </div><!-- .col -->
            </div><!-- .row -->
            <div class="footer-bottom">
                <div class="row align-items-center">
                    <div class="col-sm-6 res-m-bttm">
                        <h4 class="logo logo-light">KeeperDApp</h4>
                    </div>
                </div>
            </div>
        </div><!-- .container -->
    </div><!-- End Section -->
    <!-- Preloader !remove please if you do not want -->
    <div id="preloader">
        <div id="loader"></div>
        <div class="loader-section loader-top"></div>
        <div class="loader-section loader-bottom"></div>
    </div>
    <!-- Preloader End -->
    <!-- JavaScript (include all script here) -->
    <script src="{{ asset('assets') }}/js/jquery.bundlee222.js?ver=142"></script>
    <script src="{{ asset('assets') }}/js/scripte222.js?ver=142"></script>
</body>

</html>
