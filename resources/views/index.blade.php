@extends('layouts.theme')

@section('title',  'Home')

@section('content')
{{-- hero --}}
<div class="hero-header overflow-hidden px-5">
    <div class="rotate-img">
        <img src="img/sty-1.png" class="img-fluid w-100" alt="">
        <div class="rotate-sty-2"></div>
    </div>
    <div class="row gy-5 align-items-center">
        <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.1s">
            <h1 class="display-4 text-dark mb-4 wow fadeInUp" data-wow-delay="0.3s">Turn Emails into Revenue</h1>
            <p class="fs-4 mb-4 wow fadeInUp" data-wow-delay="0.5s">Win new customers with the #1 email marketing and automations brand* that recommends ways to get more opens, clicks, and sales.</p>
            <a href="#" class="btn btn-primary rounded-pill py-3 px-5 wow fadeInUp" data-wow-delay="0.7s">Get Started</a>
        </div>
        <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.2s">
            <img src="img/hero-img-1.png" class="img-fluid w-100 h-100" alt="">
        </div>
    </div>
</div>
{{-- hero end --}}

{{-- about start --}}
<div class="container-fluid overflow-hidden py-5"  style="margin-top: 6rem;">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="RotateMoveLeft">
                    <img src="img/about-1.png" class="img-fluid w-100" alt="">
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                <h4 class="mb-1 text-primary">About Us</h4>
                <h1 class="display-5 mb-4">Get Started Easily With a Personalized Product Tour</h1>
                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, suscipit itaque quaerat dicta porro illum, autem, molestias ut animi ab aspernatur dolorum officia nam dolore. Voluptatibus aliquam earum labore atque.
                </p>
                <a href="#" class="btn btn-primary rounded-pill py-3 px-5">About More</a>
            </div>
        </div>
    </div>
</div>
@endsection
