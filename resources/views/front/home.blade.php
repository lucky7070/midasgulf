@extends('layouts.front')

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
@endsection

@section('content')
<section class="hero-section">
    <img src="{{ asset('front/images/slider-mainbg-004.jpg') }}" alt="slider-mainbg-004 Image">
    <div class="hero-text-overlay">
        <div class="text-animate mb-3" style="color: rgb(255, 0, 0);">PROVEN DEBT RELIEF TRACK RECORD!!</div>
        <h1 style="color: red; font-weight: normal; font-size: 40px;"><b>Since 2014!</b></h1>
        <h1 class="main-title fw-normal animate__animated animate__shakeX">WE ARE A DEBT RELIEF PROVIDER</h1>

        <p class="subtitle animate__animated animate__shakeX">Specializing in debt settlement, financial cases and
            restructuring</p>
        <p class="subtitle animate__animated animate__shakeX">for SME,corporates,and individuals both within and outside
            UAE</p>

        <p class="description animate__animated animate__fadeIn">
            Specializing in debt settlement and restructuring for businesses and individuals. Your one-stop
            destination for debt negotiations with banks, vendors, suppliers, and landlords across the UAE.
        </p>
    </div>
</section>
<section class="our-services-section">
    <div class="container">
        <h2 class="section-title">Our Services</h2>
        <p class="section-subtitle">We specialize in two core services to help you overcome your debt challenges.
        </p>
        <div class="services-grid">
            <div class="service-card">
                <div class="card-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path
                            d="M14 2H6c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V8l-6-6zm2 14H8v-2h8v2zm0-4H8v-2h8v2zm-4-4V3.5L17.5 9H12z" />
                    </svg>
                </div>
                <h3>Debt Settlement</h3>
                <p>Negotiate with creditors to reduce your total debt amount and settle for less than what you owe.
                </p>
                <ul>
                    <li>Reduce debt by 40-70%</li>
                    <li>Stop harassment calls</li>
                    <li>Legal protection</li>
                    <li>Single monthly payment</li>
                </ul>
                <a href="{{ route('debt-settlement') }}" class="Nav-btn"
                    style="color: white; text-decoration: none;">Get Started</a>
            </div>

            <div class="service-card">
                <div class="card-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path
                            d="M12 4V1L8 5l4 4V6c3.31 0 6 2.69 6 6s-2.69 6-6 6-6-2.69-6-6h-2c0 4.42 3.58 8 8 8s8-3.58 8-8-3.58-8-8-8z" />
                    </svg>
                </div>
                <h3>Debt Restructuring</h3>
                <p>Reorganize your debt payments with better terms, lower interest rates, and manageable monthly
                    payments.</p>
                <ul>
                    <li>Lower monthly payments</li>
                    <li>Reduced interest rates</li>
                    <li>Extended payment terms</li>
                    <li>Avoid bankruptcy</li>
                </ul>
                <a href="{{ route('debt-restructuring') }}" class="Nav-btn"
                    style="color: white; text-decoration: none;">Get Started</a>
            </div>

        </div>
    </div>
</section>

<div class="position-fixed bottom-0 bg-danger text-white p-2 w-100 align-items-start justify-content-between"
    id="ticker" style="z-index: 999; display: flex">
    <div class="">
        <p class="mb-1 w-100">Are you a UAE-based SME reeling under commercial debt and ever-increasing payments towards
            rents, salaries,
            suppliers, marketing, and everything else to keep your business alive and ticking?</p>
        <p class="mb-1 w-100">Are you as a founder looking to free yourself from dealing with accounts payable and
            focusing on building your
            business instead?</p>
        <p class="mb-1 w-100">If that is you, WhatsApp us on
            <span style="font-weight: bold; text-decoration: underline"><span
                    style="color: blue; font-weight: bold; background-color: yellow">+971528867088</span></span>, and we
            will take over your entire problem and most importantly ensure you get reductions in payments to your
            creditors.
        </p>
        <p><strong>Proven Debt Relief Track Record!!</strong></p>
    </div>
    <button id="close-btn" class="btn btn-secondary btn-icon">X</button>
</div>
@endsection

@section('js')
<script>
    $(document).ready(function() {
        $('#close-btn').on('click', function() {
            $('#ticker').hide();
        })
    })
</script>
@endsection