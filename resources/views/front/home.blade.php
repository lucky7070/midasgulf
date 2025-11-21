@extends('layouts.front')

@section('content')
<section class="hero-section">
    <img src="{{ asset('front/images/slider-mainbg-004.jpg') }}" alt="slider-mainbg-004 Image">
    <div class="hero-text-overlay">
        <h1 style="color: red; font-weight: bold; font-size: 40px;"><b>Since 2014!</b></h1>
        <h1 class="main-title">WE ARE A DEBT RELIEF PROVIDER</h1>

        <p class="subtitle">Specializing in debt settlement, financial cases and restructuring</p>
        <p class="subtitle">for SME,corporates,and individuals both within and outside UAE</p>

        <p class="description">
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

@endsection