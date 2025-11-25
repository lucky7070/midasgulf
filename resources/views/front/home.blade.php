@extends('layouts.front')

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
@endsection

@section('content')
<section class="hero-section">
    <img src="{{ asset('front/images/slider-mainbg-004.jpg') }}" alt="slider-mainbg-004 Image">
    <div class="hero-text-overlay">
        <div class="text-animate fs-5 fw-bold" style="color: rgb(255, 0, 0);">PROVEN DEBT RELIEF TRACK RECORD!!</div>
        <h1 class="animate__animated animate__slideInRight fw-bold" style="color: red; font-weight: normal; font-size: 40px;">Since 2014!</h1>
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