@extends('layouts.public')

@section('content')

    <header id="hero">
        <div class="container hero-text-wrapper">
            <div class="row flex-column-reverse flex-md-row">
                <div class="col-md-6">
                    <h1 class="display-1 font-weight-bolder">{{ config('app.name', 'Nubie') }}</h1>
                    <p class="lead">Digital solution for you businesses and services</p>
                    <button class="btn btn-light btn-lg font-weight-bolder px-5" data-toggle="modal" data-target="#popContact">
                        Talk with us
                    </button>
                </div>
                <div class="col-md-6">
                    <div class="nubie-teamwork-illustration">
                        <img src="{{ asset('images/illustration-teamwork.svg') }}"
                            alt="Nubie's teamwork illustration"
                            class="img-fluid"
                        />
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section id="what-we-do">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="section-title">What We Do</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="services">
                        <img src="{{ asset('images/icon-uiux.svg') }}" alt="UI / UX service icon">
                        <h4>UI / UX</h4>
                        <p>Landing Pages, User Flow, Wireframing, Prototyping, Mobile App Design, Web App</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="services">
                        <img src="{{ asset('images/icon-design.svg') }}" alt="Design service icon">
                        <h4>Design &amp; Illustration</h4>
                        <p>Character Design, Icon Set, Illustration Guide, Illustration Set</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="services">
                        <img src="{{ asset('images/icon-development.svg') }}" alt="Development service icon">
                        <h4>Development</h4>
                        <p>HTML/CSS, JavaScript Animation, PHP, Python, Flutter, Responsive Website</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="services">
                        <img src="{{ asset('images/icon-branding.svg') }}" alt="Branding service icon">
                        <h4>Branding</h4>
                        <p>Visual Identity, Stationary Kit, Marketing Materials</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="services">
                        <img src="{{ asset('images/icon-modeling.svg') }}" alt="Modeling service icon">
                        <h4>Modeling</h4>
                        <p>3D Modeling, Architectural Design, Data Visualization</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="our-latest-works">
        <div class="container wrapper">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="section-title">Our Latest Works</h2>
                </div>
            </div>
        </div>
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="card shadow" style="
                        background: url({{ asset('images/primatama-home.png') }});
                        background-size: cover;
                        background-position: center;
                        background-repeat: no-repeat;">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card shadow" style="
                        background: url({{ asset('images/primatama-booking.png') }});
                        background-size: cover;
                        background-position: center;
                        background-repeat: no-repeat;">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card shadow" style="
                        background: url({{ asset('images/gis-mockup.png') }});
                        background-size: cover;
                        background-position: center;
                        background-repeat: no-repeat;">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card shadow" style="
                        background: url({{ asset('images/smartindustry.png') }});
                        background-size: cover;
                        background-position: top;
                        background-repeat: no-repeat;">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card shadow" style="
                        background: url({{ asset('images/smartindustry-logo-original.png') }});
                        background-size: cover;
                        background-position: center;
                        background-repeat: no-repeat;">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card shadow" style="
                        background: url({{ asset('images/smartindustry-logo-white.png') }});
                        background-size: cover;
                        background-position: center;
                        background-repeat: no-repeat;">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer id="contact">
        <div class="text-wrapper">
            <h3 class="title">Interested to work with us?</h3>
            <button class="btn btn-light btn-lg font-weight-bolder px-5" data-toggle="modal" data-target="#popContact">
                Let's talk!
            </button>
        </div>
        <div class="social-account-wrapper">
            <a href="#" class="social-account">
                <img src="{{ asset('images/dribbble.svg') }}" alt="Nubie's official dribble account">
            </a>
            <a href="#" class="social-account">
                <img src="{{ asset('images/instagram.svg') }}" alt="Nubie's official instagram account">
            </a>
            <a href="#" class="social-account">
                <img src="{{ asset('images/behance.svg') }}" alt="Nubie's official behance account">
            </a>
        </div>
    </footer>

    @include('components.modal-contact')
@endsection
