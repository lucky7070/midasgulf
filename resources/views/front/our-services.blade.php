@extends('layouts.front')

@section('content')
<section class="our-services-section">
    <div class="container">
        <h2 class="section-title">Our Services</h2>
        <p class="section-subtitle">We specialize in two core services to help you overcome your debt challenges.
        </p>
        <div class="services-grid">
            <div class="service-card d-flex flex-column justify-content-start h-100">
                <div class="">
                    <img style="width: 100px;" src="{{ asset('front/images/debt-settlement.png') }}" alt="" srcset="">
                </div>
                <h3>Debt Settlement</h3>
                <p>Negotiate with creditors to reduce your total debt amount and settle for less than what you owe.
                </p>
                <ul>
                    <li>Reduce debt by 40-70%</li>
                    <li>Stop harassment calls</li>
                    <li>Legal protection</li>
                    <li>Convenient one shot lump sum payment or with a feasible installment plan</li>
                </ul>
                <a href="{{ route('debt-settlement') }}" class="Nav-btn mt-auto mb-0"
                    style="color: white; text-decoration: none;">Get Started</a>
            </div>

            <div class="service-card d-flex flex-column justify-content-start h-100">
                <img style="width: 100px;" src="{{ asset('front/images/debt-restructuring.png') }}" alt="" srcset="">
                <h3>Debt Restructuring</h3>
                <p>Reorganize your debt payments with better terms, lower interest rates, and manageable monthly
                    payments.</p>
                <ul>
                    <li>Lower monthly payments</li>
                    <li>Reduced interest rates</li>
                    <li>Extended payment terms</li>
                    <li>Avoid bankruptcy</li>
                </ul>
                <a href="{{ route('debt-restructuring') }}" class="Nav-btn mt-auto mb-0"
                    style="color: white; text-decoration: none;">Get Started</a>
            </div>

        </div>
    </div>
</section>

@endsection