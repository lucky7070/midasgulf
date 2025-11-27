@extends('layouts.front')

@section('css')
<link rel="stylesheet" href="{{ asset('front/css/legal-services-ppc.css') }}">
@endsection

@section('content')
<div class="lsp">
    <div class="hero">
        <div class="container">
            <div class="row p-4">
                <div class="col-lg-8 mb-3 mb-lg-0 d-flex flex-column justify-content-center min-h-100">
                    <h2 class="heading">
                        Looking for solutions to settle Your <span style="color: rgb(168, 43, 40)">legal and financial cases</span>?
                    </h2>
                    <h5 class="sub-heading">
                        Don't Worry! We specialized in <b> loan settlement, negotiations and restructuring, cheques execution, and bankruptcy </b>for SMEs, corporates, and individuals within and outside UAE.
                    </h5>
                </div>
                <div class="col-lg-4 mb-3 mb-lg-0">
                    <form action="{{ route('contact') }}" method="post" id="contact-form">
                        <div class="card" style="background-color: #00000085;">
                            <div class="card-body" style="min-height: 400px;">
                                <h4 class="text-center mb-3 fw-semibold text-white">Book Your Free Consultation! </h4>
                                <div class="">
                                    @csrf

                                    <div class="mb-2">
                                        <input type="text" class="form-control form-control-lg" placeholder="First Name" name="first_name" value="{{ old('first_name') }}">
                                        @error("first_name")
                                        <small class="text-white">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="mb-2">
                                        <input type="text" class="form-control form-control-lg" placeholder="Last Name" name="last_name" value="{{ old('last_name') }}">
                                        @error("last_name")
                                        <small class="text-white">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="mb-2">
                                        <input type="text" class="form-control form-control-lg" placeholder="Email" name="email" value="{{ old('email') }}">
                                        @error("email")
                                        <small class="text-white">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="mb-2">
                                        <div class="input-group">
                                            <select name="country_code" id="country_code" class="form-control form-control-lg" style="max-width: 120px;">
                                                @foreach(config('constant.countries', []) as $row)
                                                <option value="{{ $row['code'] }}" @selected(old('country_code')===$row['code'])>{{ $row['flag'] }} {{ $row['code'] }}</option>
                                                @endforeach
                                            </select>
                                            <input type="tel" name="phone" placeholder="XX XXX XXXX" class="form-control form-control-lg" value="{{ old('phone') }}">
                                        </div>
                                        @error("phone")
                                        <small class="text-white">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="mb-2">
                                        <textarea rows="3" class="form-control form-control-lg" placeholder="Your Message" name="message">{{ old('message') }}</textarea>
                                        @error("message")
                                        <small class="text-white">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <button type="submit" class="btn btn-theme btn-lg w-100">Get a Quick Call Back</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-6 min-h-100">
                <div class="d-flex flex-column gap-2 justify-content-center align-items-start h-100">
                    <h2 class="fw-bold">About Us</h2>
                    <p>
                        Midas Gulf is a one-stop destination for loan negotiations, loan
                        consolidations, and loan settlements with all banks in the UAE,
                        including any creditor to whom you or your company owe money.
                    </p>
                    <p>
                        This includes managing and rescheduling vendor, supplier, and even
                        landlord payments, plus assisting you with any legal problems or
                        litigation caused by payment defaults.
                    </p>

                    <button class="btn btn-theme btn-lg">
                        Get A Free Consultation Today
                    </button>
                </div>
            </div>
            <div class="col-lg-6">
                <img src="{{ asset('front/images/download-hand-shake.jfif') }}" alt="" class="w-100">
            </div>
        </div>
    </div>
    <div class="bg-black text-center py-5">
        <h1 class="text-white mb-4 fw-bold mx-auto" style="max-width: 1000px;">Leave the paperwork to us. We make it easy to start, run, and grow your dream business.</h1>
        <a href="{{ route('contact') }}" class="btn btn-theme btn-lg">
            Get A Free Consultation Today
        </a>
    </div>
</div>
@endsection

@section('js')
<script>
    $(document).ready(function() {
        $("#contact-form").validate({
            errorClass: "error fs--1",
            errorElement: "small",
            rules: {
                first_name: {
                    required: true,
                    minlength: 2,
                    maxlength: 50,
                },
                last_name: {
                    required: true,
                    minlength: 2,
                    maxlength: 50,
                },
                email: {
                    required: true,
                    email: true,
                    minlength: 2,
                    maxlength: 50,
                },
                country_code: {
                    required: true
                },
                phone: {
                    required: true,
                    minlength: 8,
                    maxlength: 15,
                },
                message: {
                    required: true,
                    minlength: 10,
                    maxlength: 1000,
                },
            },
            messages: {
                first_name: {
                    required: "Please enter first name",
                    minlength: "First name must consist of at least 2 characters.",
                    maxlength: "First name must not exceed characters limit 50.",
                },
                last_name: {
                    required: "Please enter last name",
                    minlength: "last name must consist of at least 2 characters.",
                    maxlength: "last name must not exceed characters limit 50.",
                },
                email: {
                    email: "Please enter a valid email address",
                    required: "Please enter email",
                    minlength: "Email must consist of at least 2 characters.",
                    maxlength: "Email must not exceed characters limit 50.",
                },
                message: {
                    required: "Please enter message",
                    minlength: "Message must consist of at least 10 characters.",
                    maxlength: "Message must not exceed characters limit 1000.",
                },
            },
            errorPlacement: function(label, element) {
                if (element.parent().hasClass('input-group')) {
                    label.addClass('fs--1 text-white');
                    label.insertAfter(element.parent());
                } else {
                    label.addClass('fs--1 text-white');
                    label.insertAfter(element);
                }
            },
            submitHandler: function(form) {
                var submitButton = $(form).find('button[type="submit"]');
                submitButton.prop('disabled', true);
                submitButton.text('Sending...');
                form.submit();
            }
        });
    });
</script>
@endsection