@extends('layouts.front')

@section('css')
<link rel="stylesheet" href="{{ asset('front/css/services.css') }}">
@endsection

@section('content')
<section id="debt-restructuring-form">
    <div class="container">
        <div class="py-2">
            <a href="{{ route('home') }}" class="back-to-services">
                &larr; Back to Services
            </a>
        </div>
        <div class="form-header-area">
            <div class="service-details">
                <div class="card-icon settlement-icon">
                    <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path
                            d="M12 4V1L8 5l4 4V6c3.31 0 6 2.69 6 6s-2.69 6-6 6-6-2.69-6-6h-2c0 4.42 3.58 8 8 8s8-3.58 8-8-3.58-8-8-8z" />
                    </svg> -->
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path
                            d="M14 2H6c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V8l-6-6zm2 14H8v-2h8v2zm0-4H8v-2h8v2zm-4-4V3.5L17.5 9H12z" />
                    </svg>
                </div>
                <h2>Debt Settlement</h2>
                <p class="service-tagline">
                    Negotiate with creditors to reduce your total debt amount and settle for less than what you owe.
                </p>
            </div>
        </div>

        <form class="main-debt-application-form" method="POST" action="{{ request()->url() }}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="type" value="1">
            <div class="form-section-card">
                <h3>Client Profile Information</h3>
                <div class="section-group">
                    <h4 class="fw-normal">Your Information</h4>
                    <div class="row gap-2 gap-lg-0">
                        <div class="col-md-4">
                            <label for="" class="form-label mb-1">Full Name <span class="text-danger">*</span></label>
                            <input type="text" name="name" placeholder="Your full name" class="form-control" value="{{ old('name') }}">
                            @error('name')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-md-4">
                            <label for="" class="form-label mb-1">Email Address <span class="text-danger">*</span></label>
                            <input type="email" name="email" placeholder="your@email.com" class="form-control" value="{{ old('email') }}">
                            @error('email')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-md-4">
                            <label for="" class="form-label mb-1">Phone Number <span class="text-danger">*</span></label>
                            <input type="tel" name="phone" placeholder="+971 XX XXX XXXX" class="form-control" value="{{ old('phone') }}">
                            @error('phone')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                </div>

                <!-- Creditors Section -->
                <div class="section-group">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="fw-normal mb-0">Creditor Details</h4>
                        <button type="button" id="add-creditor-btn" class="btn btn-warning">
                            <i class="fas fa-plus"></i> Add Creditor
                        </button>
                    </div>

                    <div id="creditors-container">
                        <!-- Initial Creditor -->
                        <div class="creditor-block mb-4 p-3 border rounded" data-index="0">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h5 class="mb-0">Creditor #1</h5>
                                <button type="button" class="btn btn-danger btn-sm remove-creditor" {{ old('creditor') && count(old('creditor')) > 1 ? '' : 'disabled' }}>
                                    <i class="fas fa-trash"></i> Remove
                                </button>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Creditor Name <span class="text-danger">*</span></label>
                                    <input type="text" name="creditor[0][name]" class="form-control" placeholder="Bank or creditor name" value="{{ old('creditor.0.name') }}">
                                    @error("creditor.0.name")
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Amount Outstanding (AED) <span class="text-danger">*</span></label>
                                    <input type="number" name="creditor[0][amount_outstanding]" class="form-control" placeholder="0" value="{{ old('creditor.0.amount_outstanding') }}">
                                    @error("creditor.0.amount_outstanding")
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Creditor Phone <span class="text-danger">*</span></label>
                                    <input type="tel" name="creditor[0][phone]" class="form-control" placeholder="+971 XX XXX XXXX" value="{{ old('creditor.0.phone') }}">
                                    @error("creditor.0.phone")
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Creditor Email <span class="text-danger">*</span></label>
                                    <input type="email" name="creditor[0][email]" class="form-control" placeholder="email@example.com" value="{{ old('creditor.0.email') }}">
                                    @error("creditor.0.email")
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Contact Person Name</label>
                                    <input type="text" name="creditor[0][person_name]" class="form-control" placeholder="Contact name" value="{{ old('creditor.0.person_name') }}">
                                    @error("creditor.0.person_name")
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Date of Last Payment</label>
                                    <input type="date" name="creditor[0][last_payment]" class="form-control" value="{{ old('creditor.0.last_payment') }}">
                                    @error("creditor.0.last_payment")
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Current EMI Per Month (AED)</label>
                                    <input type="number" name="creditor[0][emi_per_month]" class="form-control" placeholder="0" value="{{ old('creditor.0.emi_per_month') }}">
                                    @error("creditor.0.emi_per_month")
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Security Cheque Value (AED)</label>
                                    <input type="number" name="creditor[0][cheque_value]" class="form-control" placeholder="0" value="{{ old('creditor.0.cheque_value') }}">
                                    @error("creditor.0.cheque_value")
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Type of Debt <span class="text-danger">*</span></label>
                                    <select name="creditor[0][type_of_debt]" class="form-control">
                                        <option value="">Select debt type</option>
                                        <option value="credit-card" {{ old('creditor.0.type_of_debt') == 'credit-card' ? 'selected' : '' }}>Credit Card</option>
                                        <option value="personal-loan" {{ old('creditor.0.type_of_debt') == 'personal-loan' ? 'selected' : '' }}>Personal Loan</option>
                                        <option value="business-loan" {{ old('creditor.0.type_of_debt') == 'business-loan' ? 'selected' : '' }}>Business Loan</option>
                                        <option value="vehicle-loan" {{ old('creditor.0.type_of_debt') == 'vehicle-loan' ? 'selected' : '' }}>Vehicle Loan</option>
                                        <option value="housing-loan" {{ old('creditor.0.type_of_debt') == 'housing-loan' ? 'selected' : '' }}>Housing Loan</option>
                                        <option value="other" {{ old('creditor.0.type_of_debt') == 'other' ? 'selected' : '' }}>Other</option>
                                    </select>
                                    @error("creditor.0.type_of_debt")
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <!-- Additional creditors from old input (in case of validation errors) -->
                        @if(old('creditor'))
                        @foreach(old('creditor') as $index => $creditor)
                        @if($index > 0)
                        <div class="creditor-block mb-4 p-3 border rounded" data-index="{{ $index }}">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h5 class="mb-0">Creditor #{{ $index + 1 }}</h5>
                                <button type="button" class="btn btn-danger btn-sm remove-creditor">
                                    <i class="fas fa-trash"></i> Remove
                                </button>
                            </div>

                            <div class="row">
                                <div class="col-lg-6 mb-2 creditor-fields" data-index="0">
                                    <div class="creditor-header" style="display: flex; justify-content: space-between; align-items: center;">
                                        <span>Creditor 1</span>
                                    </div>
                                    <label class="form-label">Creditor Name <span class="text-danger">*</span></label>
                                    <input
                                        type="text"
                                        name="creditor[{{ $index }}][name]"
                                        class="form-control"
                                        placeholder="Bank or creditor name"
                                        value="{{ $creditor['name'] ?? '' }}" />
                                    @error("creditor.{$index}.name")
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-lg-6 mb-2 creditor-fields">
                                    <label class="form-label">Amount Outstanding (AED) <span class="text-danger">*</span></label>
                                    <input
                                        type="number"
                                        name="creditor[{{ $index }}][amount_outstanding]"
                                        class="form-control"
                                        placeholder="0"
                                        value="{{ $creditor['amount_outstanding'] ?? '' }}" />
                                    @error("creditor.{$index}.amount_outstanding")
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-lg-6 mb-2 creditor-fields">
                                    <label class="form-label">Creditor Phone <span class="text-danger">*</span></label>
                                    <input
                                        type="tel"
                                        name="creditor[{{ $index }}][phone]"
                                        class="form-control"
                                        placeholder="+971 XX XXX XXXX"
                                        value="{{ $creditor['phone'] ?? '' }}" />
                                    @error("creditor.{$index}.phone")
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-lg-6 mb-2 creditor-fields">
                                    <label class="form-label">Creditor Email <span class="text-danger">*</span></label>
                                    <input
                                        type="email"
                                        name="creditor[{{ $index }}][email]"
                                        class="form-control"
                                        placeholder="email@example.com"
                                        value="{{ $creditor['email'] ?? '' }}" />
                                    @error("creditor.{$index}.email")
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-lg-6 mb-2 creditor-fields">
                                    <label class="form-label">Contact Person Name</label>
                                    <input
                                        type="text"
                                        name="creditor[{{ $index }}][person_name]"
                                        class="form-control"
                                        placeholder="Contact name"
                                        value="{{ $creditor['person_name'] ?? '' }}" />
                                    @error("creditor.{$index}.person_name")
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-lg-6 mb-2 creditor-fields">
                                    <label class="form-label">Date of Last Payment</label>
                                    <input
                                        type="date"
                                        name="creditor[{{ $index }}][last_payment]"
                                        class="form-control"
                                        value="{{ $creditor['last_payment'] ?? '' }}" />
                                    @error("creditor.{$index}.last_payment")
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-lg-6 mb-2 creditor-fields">
                                    <label class="form-label">Current EMI Per Month (AED)</label>
                                    <input
                                        type="number"
                                        name="creditor[{{ $index }}][emi_per_month]"
                                        class="form-control"
                                        placeholder="0"
                                        value="{{ $creditor['emi_per_month'] ?? '' }}" />
                                    @error("creditor.{$index}.emi_per_month")
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-lg-6 mb-2 creditor-fields">
                                    <label class="form-label">Security Cheque Value (AED)</label>
                                    <input
                                        type="number"
                                        name="creditor[{{ $index }}][cheque_value]"
                                        class="form-control"
                                        placeholder="0"
                                        value="{{ $creditor['cheque_value'] ?? '' }}" />
                                    @error("creditor.{$index}.cheque_value")
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-lg-6 mb-2 creditor-fields">
                                    <label class="form-label">Type of Debt <span class="text-danger">*</span></label>
                                    <select
                                        name="creditor[{{ $index }}][type_of_debt]"
                                        class="form-control">
                                        <option value="">Select debt type</option>
                                        <option value="credit-card" {{ old("creditor.$index.type_of_debt") == 'credit-card' ? 'selected' : '' }}>Credit Card</option>
                                        <option value="personal-loan" {{ old("creditor.$index.type_of_debt") == 'personal-loan' ? 'selected' : '' }}>Personal Loan</option>
                                        <option value="business-loan" {{ old("creditor.$index.type_of_debt") == 'business-loan' ? 'selected' : '' }}>Business Loan</option>
                                        <option value="vehicle-loan" {{ old("creditor.$index.type_of_debt") == 'vehicle-loan' ? 'selected' : '' }}>Vehicle Loan</option>
                                        <option value="housing-loan" {{ old("creditor.$index.type_of_debt") == 'housing-loan' ? 'selected' : '' }}>Housing Loan</option>
                                        <option value="other" {{ old("creditor.$index.type_of_debt") == 'other' ? 'selected' : '' }}>Other</option>
                                    </select>
                                    @error("creditor.{$index}.type_of_debt")
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        @endif
                        @endforeach
                        @endif
                    </div>
                </div>

                <!-- Rest of your form remains the same -->
                <div class="section-group">
                    <h4 class="fw-normal">Case Status</h4>
                    <label class="checkbox-label">
                        <input type="checkbox" name="active_criminal_case" value="1" id="active_criminal_case" @checked(old('active_criminal_case'))>
                        Active Criminal Case
                    </label>
                    <div id="criminal_case_details" style="display: none;" class="my-2">
                        <textarea id="criminal_case_description" class="form-control" name="criminal_case_description" rows="4" placeholder="Enter criminal case details here...">{{ old('criminal_case_description') }}</textarea>
                        @error('criminal_case_description')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <label class="checkbox-label">
                        <input type="checkbox" name="active_civil_case" value="1" id="active_civil_case" @checked(old('active_civil_case'))>
                        Active Civil Case
                    </label>
                    <div id="civil_case_details" style="display: none;" class="my-2">
                        <textarea id="civil_case_description" class="form-control" name="civil_case_description" rows="4" placeholder="Enter civil case details here...">{{ old('civil_case_description') }}</textarea>
                        @error('civil_case_description')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>

                <div class="section-group personal-info">
                    <h4 class="fw-normal">Personal Information</h4>
                    <div class="row">
                        <div class="col-lg-6 mb-2">
                            <label class="checkbox-label">
                                <input type="checkbox" name="currently_in_country" value="1" @checked(old('currently_in_country', true))>
                                Currently in the Country
                            </label>
                            <label class="checkbox-label">
                                <input type="checkbox" name="valid_emirates_id" value="1" @checked(old('valid_emirates_id'))>
                                Valid Emirates ID
                            </label>
                            <label class="checkbox-label">
                                <input type="checkbox" name="valid_passport" value="1" @checked(old('valid_passport'))>
                                Valid Passport
                            </label>
                        </div>
                        <div class="col-lg-6 mb-2">
                            <label for="" class="form-label">Client Status <span class="text-danger">*</span></label>
                            <select name="client_status" id="settlement-client-status" class="form-select">
                                <option value="">Select Client Status</option>
                                <option value="individual" @selected(old('client_status')==='individual' )>Individual</option>
                                <option value="corporate" @selected(old('client_status')==='corporate' )>Corporate</option>
                            </select>
                            @error('client_status')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-lg-6 mt-0 mt-lg-2">
                            <label class="form-label" for="">Timeline to Close Issue <span class="text-danger">*</span></label>
                            <select name="timelineRequirement" class="form-select">
                                <option value="">Select timeline</option>
                                <option value="less-than-6-months" @selected(old('timelineRequirement')==='less-than-6-months' )>Less than 6 months</option>
                                <option value="6-12-months" @selected(old('timelineRequirement')==='6-12-months' )>More than 6 months but less than a year</option>
                                <option value="flexible" @selected(old('timelineRequirement')==='flexible' )>Flexible</option>
                            </select>
                            @error('timelineRequirement')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="section-group personal-info">
                    <h4 class="fw-normal">Required Attachments</h4>
                    <div class="attachment-grid">
                        <div class="">
                            <div class="upload-box">
                                <input type="file" id="settlement-upload-emirates-front" name="settlement_upload_emirates_front" accept="application/pdf,image/jpeg,image/png">
                                <label class="fw-normal" for="settlement-upload-emirates-front">
                                    <i class="upload-icon">
                                        <i class="fa-duotone fa-cloud-arrow-up"></i>
                                    </i>
                                    Upload Emirates ID (Front)
                                    <span>PDF, JPG, or PNG</span>
                                </label>
                            </div>
                            @error('settlement_upload_emirates_front')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="">
                            <div class="upload-box">
                                <input type="file" id="settlement-upload-emirates-back" name="settlement_upload_emirates_back" accept="application/pdf,image/jpeg,image/png">
                                <label class="fw-normal" for="settlement-upload-emirates-back">
                                    <i class="upload-icon">
                                        <i class="fa-duotone fa-cloud-arrow-up"></i>
                                    </i>
                                    Upload Emirates ID (Back)
                                    <span>PDF, JPG, or PNG</span>
                                </label>
                            </div>
                            @error('settlement_upload_emirates_back')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="">
                            <div class="upload-box">
                                <input type="file" id="settlement-upload-passport" name="settlement_upload_passport" accept="application/pdf,image/jpeg,image/png">
                                <label class="fw-normal" for="settlement-upload-passport">
                                    <i class="upload-icon">
                                        <i class="fa-duotone fa-cloud-arrow-up"></i>
                                    </i>
                                    Upload Passport
                                    <span>PDF, JPG, or PNG</span>
                                </label>
                            </div>
                            @error('settlement_upload_passport')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="">
                            <div class="upload-box">
                                <input type="file" id="settlement-upload-license" name="settlement_upload_license" accept="application/pdf,image/jpeg,image/png">
                                <label class="fw-normal" for="settlement-upload-license">
                                    <i class="upload-icon">
                                        <i class="fa-duotone fa-cloud-arrow-up"></i>
                                    </i>
                                    Upload License Page (If Corporate)
                                    <span>PDF, JPG, or PNG</span>
                                </label>
                            </div>
                            @error('settlement_upload_license')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="">
                            <div class="upload-box">
                                <input type="file" id="settlement-upload-ejari" name="settlement_upload_ejari" accept="application/pdf,image/jpeg,image/png">
                                <label class="fw-normal" for="settlement-upload-ejari">
                                    <i class="upload-icon">
                                        <i class="fa-duotone fa-cloud-arrow-up"></i>
                                    </i>
                                    Upload Ejari (If Corporate)
                                    <span>PDF, JPG, or PNG</span>
                                </label>
                            </div>
                            @error('settlement_upload_ejari')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="submit-area">
                    <button type="submit" class="btn-submit-app"><i class="submit-icon"></i>Submit Application</button>
                </div>
            </div>
        </form>
    </div>
</section>
@endsection

@section('js')
<script>
    $(document).ready(function() {
        let creditorIndex = parseInt("{{ max(array_keys(old('creditor', [0]))) + 1 }}");

        // Add new creditor
        $('#add-creditor-btn').click(function() {
            const newCreditorHtml = `
                <div class="creditor-block mb-4 p-3 border rounded" data-index="${creditorIndex}">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h5 class="mb-0">Creditor #${creditorIndex + 1}</h5>
                        <button type="button" class="btn btn-danger btn-sm remove-creditor">
                            <i class="fas fa-trash"></i> Remove
                        </button>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Creditor Name <span class="text-danger">*</span></label>
                            <input type="text" name="creditor[${creditorIndex}][name]" class="form-control creditor-name" placeholder="Bank or creditor name" value="">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Amount Outstanding (AED) <span class="text-danger">*</span></label>
                            <input type="number" name="creditor[${creditorIndex}][amount_outstanding]" class="form-control creditor-amount" placeholder="0" value="">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Creditor Phone <span class="text-danger">*</span></label>
                            <input type="tel" name="creditor[${creditorIndex}][phone]" class="form-control" placeholder="+971 XX XXX XXXX" value="">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Creditor Email <span class="text-danger">*</span></label>
                            <input type="email" name="creditor[${creditorIndex}][email]" class="form-control" placeholder="email@example.com" value="">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Contact Person Name</label>
                            <input type="text" name="creditor[${creditorIndex}][person_name]" class="form-control" placeholder="Contact name" value="">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Date of Last Payment</label>
                            <input type="date" name="creditor[${creditorIndex}][last_payment]" class="form-control" value="">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Current EMI Per Month (AED)</label>
                            <input type="number" name="creditor[${creditorIndex}][emi_per_month]" class="form-control" placeholder="0" value="">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Security Cheque Value (AED)</label>
                            <input type="number" name="creditor[${creditorIndex}][cheque_value]" class="form-control" placeholder="0" value="">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Type of Debt <span class="text-danger">*</span></label>
                            <select name="creditor[${creditorIndex}][type_of_debt]" class="form-control creditor-type">
                                <option value="">Select debt type</option>
                                <option value="credit-card">Credit Card</option>
                                <option value="personal-loan">Personal Loan</option>
                                <option value="business-loan">Business Loan</option>
                                <option value="vehicle-loan">Vehicle Loan</option>
                                <option value="housing-loan">Housing Loan</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                    </div>
                </div>
            `;

            $('#creditors-container').append(newCreditorHtml);

            // Enable remove button for first creditor if this is the second one
            if (creditorIndex === 1) {
                $('.creditor-block[data-index="0"] .remove-creditor').prop('disabled', false);
            }

            // Add validation rules for the new creditor fields
            addCreditorValidationRules(creditorIndex);

            creditorIndex++;
        });

        // Remove creditor
        $(document).on('click', '.remove-creditor', function() {
            const creditorBlock = $(this).closest('.creditor-block');
            const index = creditorBlock.data('index');

            // Remove validation rules before removing the element
            removeCreditorValidationRules(index);

            creditorBlock.remove();

            // Renumber remaining creditors
            renumberCreditors();

            // Disable remove button if only one creditor remains
            if ($('.creditor-block').length === 1) {
                $('.creditor-block .remove-creditor').prop('disabled', true);
            }
        });

        // Renumber creditors after removal
        function renumberCreditors() {
            let currentIndex = 0;
            $('.creditor-block').each(function() {
                const oldIndex = $(this).data('index');
                $(this).attr('data-index', currentIndex);
                $(this).find('h5').text(`Creditor #${currentIndex + 1}`);

                // Update all input names and validation rules
                $(this).find('[name]').each(function() {
                    const name = $(this).attr('name');
                    const newName = name.replace(/creditor\[\d+\]/, `creditor[${currentIndex}]`);
                    $(this).attr('name', newName);
                });

                // Update validation rules for this creditor
                updateCreditorValidationRules(oldIndex, currentIndex);

                currentIndex++;
            });

            creditorIndex = currentIndex;
        }

        // Add validation rules for a specific creditor index
        function addCreditorValidationRules(index) {
            const validator = $('.main-debt-application-form').validate();

            // Creditor name
            $(`input[name="creditor[${index}][name]"]`).rules('add', {
                required: true,
                maxlength: 100,
                messages: {
                    required: "Creditor name is required",
                    maxlength: "Creditor name cannot exceed 100 characters"
                }
            });

            // Amount outstanding
            $(`input[name="creditor[${index}][amount_outstanding]"]`).rules('add', {
                required: true,
                number: true,
                min: 0,
                messages: {
                    required: "Amount outstanding is required",
                    number: "Please enter a valid number",
                    min: "Amount cannot be negative"
                }
            });

            $(`input[name="creditor[${index}][phone]"]`).rules('add', {
                required: true,
                minlength: 8,
                maxlength: 15,
                digits: true,
                messages: {
                    required: "Phone is required",
                    minlength: "Phone number must be at least 8 digits",
                    maxlength: "Phone number cannot exceed 15 digits",
                    digits: "Please enter only digits"
                }
            });

            // Creditor email
            $(`input[name="creditor[${index}][email]"]`).rules('add', {
                email: true,
                customEmail: true,
                required: true,
                maxlength: 100,
                messages: {
                    required: "Email is required",
                    email: "Please enter a valid email address",
                    maxlength: "Email cannot exceed 100 characters"
                }
            });

            // Contact person name
            $(`input[name="creditor[${index}][person_name]"]`).rules('add', {
                maxlength: 255,
                messages: {
                    maxlength: "Contact person name cannot exceed 255 characters"
                }
            });

            // Last payment date
            $(`input[name="creditor[${index}][last_payment]"]`).rules('add', {
                date: true,
                maxDate: new Date().toISOString().split('T')[0],
                messages: {
                    date: "Please enter a valid date",
                    maxDate: "Last payment date cannot be in the future"
                }
            });

            // EMI per month
            $(`input[name="creditor[${index}][emi_per_month]"]`).rules('add', {
                number: true,
                min: 0,
                messages: {
                    number: "Please enter a valid number",
                    min: "EMI cannot be negative"
                }
            });

            // Cheque value
            $(`input[name="creditor[${index}][cheque_value]"]`).rules('add', {
                number: true,
                min: 0,
                messages: {
                    number: "Please enter a valid number",
                    min: "Cheque value cannot be negative"
                }
            });

            // Type of debt
            $(`select[name="creditor[${index}][type_of_debt]"]`).rules('add', {
                required: true,
                messages: {
                    required: "Please select type of debt"
                }
            });
        }

        // Remove validation rules for a specific creditor index
        function removeCreditorValidationRules(index) {
            $(`input[name="creditor[${index}][name]"]`).rules('remove');
            $(`input[name="creditor[${index}][amount_outstanding]"]`).rules('remove');
            $(`input[name="creditor[${index}][phone]"]`).rules('remove');
            $(`input[name="creditor[${index}][email]"]`).rules('remove');
            $(`input[name="creditor[${index}][person_name]"]`).rules('remove');
            $(`input[name="creditor[${index}][last_payment]"]`).rules('remove');
            $(`input[name="creditor[${index}][emi_per_month]"]`).rules('remove');
            $(`input[name="creditor[${index}][cheque_value]"]`).rules('remove');
            $(`select[name="creditor[${index}][type_of_debt]"]`).rules('remove');
        }

        // Update validation rules when renumbering
        function updateCreditorValidationRules(oldIndex, newIndex) {
            removeCreditorValidationRules(oldIndex);
            addCreditorValidationRules(newIndex);
        }

        // Case status textarea toggle
        function toggleTextareas() {
            const criminalChecked = $('#active_criminal_case').is(':checked');
            const civilChecked = $('#active_civil_case').is(':checked');

            $('#criminal_case_details').toggle(criminalChecked);
            $('#civil_case_details').toggle(civilChecked);
        }

        $('#active_criminal_case, #active_civil_case').on('change', toggleTextareas);
        toggleTextareas();

        // jQuery Validation - Initialize with basic rules
        $('.main-debt-application-form').validate({
            rules: {
                name: {
                    required: true,
                    minlength: 2,
                    maxlength: 100
                },
                email: {
                    required: true,
                    email: true,
                    customEmail: true,
                    maxlength: 50
                },
                phone: {
                    required: true,
                    minlength: 8,
                    maxlength: 15,
                    digits: true
                },
                client_status: {
                    required: true
                },
                timelineRequirement: {
                    required: true
                },
                settlement_upload_emirates_front: {
                    accept: "image/jpeg,image/png,application/pdf"
                },
                settlement_upload_emirates_back: {
                    accept: "image/jpeg,image/png,application/pdf"
                },
                settlement_upload_passport: {
                    accept: "image/jpeg,image/png,application/pdf"
                },
                settlement_upload_license: {
                    accept: "image/jpeg,image/png,application/pdf"
                },
                settlement_upload_ejari: {
                    accept: "image/jpeg,image/png,application/pdf"
                }
            },
            messages: {
                name: {
                    required: "Please enter your full name",
                    minlength: "Name must be at least 2 characters long",
                    maxlength: "Name cannot exceed 100 characters"
                },
                email: {
                    required: "Please enter your email address",
                    email: "Please enter a valid email address",
                    maxlength: "Email cannot exceed 50 characters"
                },
                phone: {
                    required: "Please enter your phone number",
                    minlength: "Phone number must be at least 8 digits",
                    maxlength: "Phone number cannot exceed 15 digits",
                    digits: "Please enter only digits"
                },
                client_status: {
                    required: "Please select client status"
                },
                timelineRequirement: {
                    required: "Please select timeline requirement"
                },
                settlement_upload_emirates_front: {
                    accept: "Please upload only JPEG, PNG, or PDF files"
                },
                settlement_upload_emirates_back: {
                    accept: "Please upload only JPEG, PNG, or PDF files"
                },
                settlement_upload_passport: {
                    accept: "Please upload only JPEG, PNG, or PDF files"
                },
                settlement_upload_license: {
                    accept: "Please upload only JPEG, PNG, or PDF files"
                },
                settlement_upload_ejari: {
                    accept: "Please upload only JPEG, PNG, or PDF files"
                }
            },
            errorElement: 'small',
            errorClass: 'text-danger',
            errorPlacement: function(error, element) {
                if (element.attr('name') === 'active_criminal_case' ||
                    element.attr('name') === 'active_civil_case' ||
                    element.attr('name') === 'currently_in_country' ||
                    element.attr('name') === 'valid_passport') {
                    error.insertAfter(element.closest('.checkbox-label'));
                } else if (element.attr('type') === 'file') {
                    error.insertAfter(element.closest('.upload-box'));
                } else {
                    error.insertAfter(element);
                }
            },
            highlight: function(element, errorClass, validClass) {
                $(element).addClass('is-invalid').removeClass('is-valid');
                $(element).closest('.form-control, .form-select').addClass('is-invalid');
            },
            unhighlight: function(element, errorClass, validClass) {
                $(element).removeClass('is-invalid').addClass('is-valid');
                $(element).closest('.form-control, .form-select').removeClass('is-invalid');
            },
            submitHandler: function(form) {
                $('.btn-submit-app').prop('disabled', true).html('<i class="submit-icon"></i>Submitting...');

                // Validate file sizes (optional additional validation)
                if (!validateFileSizes()) {
                    $('.btn-submit-app').prop('disabled', false).html('<i class="submit-icon"></i>Submit Application');
                    return false;
                }

                form.submit();
            }
        });

        $.validator.addMethod("customEmail", function(t, a) {
            var e = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
            return this.optional(a) || e.test(t)
        }, "Invalid Email Address.")

        // Custom validation methods
        $.validator.addMethod("maxDate", function(value, element) {
            if (this.optional(element)) {
                return true;
            }
            var selectedDate = new Date(value);
            var today = new Date();
            return selectedDate <= today;
        }, "Date cannot be in the future");

        $.validator.addMethod("accept", function(value, element, param) {
            if (this.optional(element)) {
                return true;
            }
            if (!value) return true;

            var extension = value.split('.').pop().toLowerCase();
            var mimeType = $(element).prop('files')[0].type;

            return param.split(',').indexOf(mimeType) !== -1;
        });

        function validateFileSizes() {
            var maxSize = 5 * 1024 * 1024;
            var isValid = true;

            $('input[type="file"]').each(function() {
                if (this.files && this.files[0]) {
                    if (this.files[0].size > maxSize) {
                        isValid = false;
                        $(this).siblings('.text-danger').remove();
                        $(this).parent().addClass("highlight-error").removeClass("highlight").append('<small class="text-danger">File size must be less than 5MB</small>');
                    } else if (!["image/png", "image/jpg", "application/pdf"].includes(this.files[0].type)) {
                        $(this).parent().addClass("highlight-error").removeClass("highlight").append('<small class="text-danger">File type must be image or pdf.</small>');
                    } else {
                        $(this).parent().addClass("highlight").removeClass("highlight-error");
                        $(this).parent().find('small.text-danger').remove();
                    }
                }
            });

            return isValid;
        }

        // File input change handler
        $('input[type="file"]').on('change', function() {
            $(this).valid();
            $(this).siblings('.text-danger').filter(function() {
                return $(this).text() === 'File size must be less than 5MB';
            }).remove();

            if (this.files && this.files[0]) {
                var maxSize = 5 * 1024 * 1024;
                if (this.files[0].size > maxSize) {
                    $(this).parent().addClass("highlight-error").removeClass("highlight");
                    $(this).parent().append('<small class="text-danger">File size must be less than 5MB</small>');
                } else if (!["image/png", "image/jpg", "application/pdf"].includes(this.files[0].type)) {
                    $(this).parent().addClass("highlight-error").removeClass("highlight");
                    $(this).parent().append('<small class="text-danger">File type must be image or pdf.</small>');
                } else {
                    $(this).parent().addClass("highlight").removeClass("highlight-error");
                    $(this).parent().find('small.text-danger').remove();
                }
            }
        });

        // Initialize validation for existing creditors on page load
        function initializeCreditorValidation() {
            $('.creditor-block').each(function() {
                const index = $(this).data('index');
                addCreditorValidationRules(index);
            });
        }

        // Initialize everything when document is ready
        initializeCreditorValidation();
    });
</script>
@endsection