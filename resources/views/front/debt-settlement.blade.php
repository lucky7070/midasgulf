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
            <div class="form-section-card">
                <h3>Client Profile Information</h3>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <div class="section-group">
                    <h4 class="fw-normal">Your Information</h4>
                    <div class="row gap-2 gap-lg-0">
                        <div class="col-md-4">
                            <label for="" class="form-label mb-1">Full Name <span class="text-danger">*</span></label>
                            <input type="hidden" name="type" value="1">
                            @csrf
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
                <div class="row py-3 rounded-3 mb-3"  id="creditor-fields-container" style="background-color: rgb(249,250,251);">
                     <div class="col-12 mb-2" style="display: flex; justify-content: space-between; align-items: center;">
                       <h4 class="fw-normal">Creditor Details</h4>
                       <button type="button" id="add-creditor-btn" class="btn flex justify-content-center mt-3 col-form-label" style="background-color: #ffc107;" >Add Creditor</button>
                      </div>
                       @error('creditor.0.name')
                         <small class="text-danger">{{ $message }}</small>
                      @enderror
                    <div class="col-lg-6 mb-2 creditor-fields"  data-index="0" >
                        <div class="creditor-header" style="display: flex; justify-content: space-between; align-items: center;">
                         <span>Creditor 1</span>  <!-- This text will change dynamically -->
                        </div>
                    <label class="form-label">Creditor Name <span class="text-danger">*</span></label>
                        <input
                            type="text"
                            name="creditor[0][name]"
                            class="form-control"
                            placeholder="Bank or creditor name"
                            value="{{ old('creditor.0.name', '') }}" />
                        @error('creditor.0.name')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                       </div>
                       <div class="col-lg-6 mb-2 creditor-fields"  >
                        <label class="form-label">Amount Outstanding (AED) <span class="text-danger">*</span></label>
                        <input
                            type="number"
                            name="creditor[0][amount_outstanding]"
                            class="form-control"
                            placeholder="0"
                            value="{{ old('creditor.0.amount_outstanding', '') }}" />
                        @error('creditor.0.amount_outstanding')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-lg-6 mb-2 creditor-fields" >
                        <label class="form-label">Creditor Phone</label>
                        <input
                            type="tel"
                            name="creditor[0][phone]"
                            class="form-control"
                            placeholder="+971 XX XXX XXXX"
                            value="{{ old('creditor.0.phone', '') }}" />
                        @error('creditor.0.phone')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-lg-6 mb-2 creditor-fields" >
                        <label class="form-label">Creditor Email</label>
                        <input
                            type="email"
                            name="creditor[0][email]"
                            class="form-control"
                            placeholder="email@example.com"
                            value="{{ old('creditor.0.email', '') }}" />
                        @error('creditor.0.email')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-lg-6 mb-2 creditor-fields" >
                        <label class="form-label">Contact Person Name</label>
                        <input
                            type="text"
                            name="creditor[0][person_name]"
                            class="form-control"
                            placeholder="Contact name"
                            value="{{ old('creditor.0.person_name', '') }}" />
                        @error('creditor.0.person_name')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-lg-6 mb-2 creditor-fields" >
                        <label class="form-label">Date of Last Payment</label>
                        <input
                            type="date"
                            name="creditor[0][last_payment]"
                            class="form-control"
                            value="{{ old('creditor.0.last_payment', '') }}" />
                        @error('creditor.0.last_payment')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-lg-6 mb-2 creditor-fields" >
                        <label class="form-label">Current EMI Per Month (AED)</label>
                        <input
                            type="number"
                            name="creditor[0][emi_per_month]"
                            class="form-control"
                            placeholder="0"
                            value="{{ old('creditor.0.emi_per_month', '') }}" />
                        @error('creditor.0.emi_per_month')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-lg-6 mb-2 creditor-fields" >
                        <label class="form-label">Security Cheque Value (AED)</label>
                        <input
                            type="number"
                            name="creditor[0][cheque_value]"
                            class="form-control"
                            placeholder="0"
                            value="{{ old('creditor.0.cheque_value', '') }}" />
                        @error('creditor.0.cheque_value')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-lg-6 mb-2 creditor-fields" >
                        <label class="form-label">Type of Debt <span class="text-danger">*</span></label>
                        <select
                            name="creditor[0][type_of_debt]"
                            class="form-control">
                            <option value="">Select debt type</option>
                            <option value="credit-card" {{ old('creditor.0.type_of_debt') == 'credit-card' ? 'selected' : '' }}>Credit Card</option>
                            <option value="personal-loan" {{ old('creditor.0.type_of_debt') == 'personal-loan' ? 'selected' : '' }}>Personal Loan</option>
                            <option value="business-loan" {{ old('creditor.0.type_of_debt') == 'business-loan' ? 'selected' : '' }}>Business Loan</option>
                            <option value="vehicle-loan" {{ old('creditor.0.type_of_debt') == 'vehicle-loan' ? 'selected' : '' }}>Vehicle Loan</option>
                            <option value="housing-loan" {{ old('creditor.0.type_of_debt') == 'housing-loan' ? 'selected' : '' }}>Housing Loan</option>
                            <option value="other" {{ old('creditor.0.type_of_debt') == 'other' ? 'selected' : '' }}>Other</option>
                        </select>
                        @error('creditor.0.type_of_debt')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
            <div class="section-group">
    <h4 class="fw-normal">Case Status</h4>
    
    <label class="checkbox-label">
        <input type="checkbox" name="active_criminal_case" value="1" id="active_criminal_case" @checked(old('active_criminal_case'))>
        Active Criminal Case
    </label>
     <div id="criminal_case_details" style="display: none;">
        <textarea id="criminal_case_description" style=" width:100%;" name="criminal_case_description" rows="4" placeholder="Enter criminal case details here..."></textarea>
    </div>
    <label class="checkbox-label">
        <input type="checkbox" name="active_civil_case" value="1" id="active_civil_case" @checked(old('active_civil_case'))>
        Active Civil Case
    </label>
    <div id="civil_case_details" style="display: none;">
        <textarea id="civil_case_description" style=" width:100%;" name="civil_case_description" rows="4" placeholder="Enter civil case details here..."></textarea>
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
   $(document).ready(function() {
    let creditorIndex = 1; 

    $('#add-creditor-btn').click(function() {
        let newCreditorFields = $('.creditor-fields').clone(); 

          newCreditorFields.find('input, select').each(function() {
            let nameAttr = $(this).attr('name');
            if (nameAttr) {
                let updatedName = nameAttr.replace(/\[0\]/, `[${creditorIndex}]`);
                $(this).attr('name', updatedName);
            }
        });

        newCreditorFields.find('input').val('');
        newCreditorFields.find('select').val('');

        newCreditorFields.find('.creditor-header span').text(`Creditor ${creditorIndex + 1}`);
 
       let removeBtn = $('<button>')
            .attr('type', 'button')
            .addClass('remove-creditor-btn btn btn-danger btn-sm')
            .text('Remove')
            .css({
                'position': 'absolute',
                'top': '-10px',
                'right': '18px',
                'z-index': '10'
            })
            .click(function() {
                newCreditorFields.remove(); 
            });

        newCreditorFields.find('.creditor-header').append(removeBtn);

        $('#creditor-fields-container').append(newCreditorFields);

        creditorIndex++;
    });

   $(document).on('click', '.remove-creditor-btn', function() {
        $(this).closest('.creditor-fields-container').remove();  // Remove the block
    });
});


//text area  visible 
function toggleTextareas() {
        const criminalChecked = document.getElementById('active_criminal_case').checked;
        const civilChecked = document.getElementById('active_civil_case').checked;
        
        if (criminalChecked) {
            document.getElementById('criminal_case_details').style.display = 'block';
        } else {
            document.getElementById('criminal_case_details').style.display = 'none';
        }

        if (civilChecked) {
            document.getElementById('civil_case_details').style.display = 'block';
        } else {
            document.getElementById('civil_case_details').style.display = 'none';
        }
    }
    document.getElementById('active_criminal_case').addEventListener('change', toggleTextareas);
    document.getElementById('active_civil_case').addEventListener('change', toggleTextareas);


    toggleTextareas();




    $(document).ready(function() {
        $(document).ready(function() {
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
                        maxlength: 50
                    },
                    phone: {
                        required: true,
                        minlength: 8,
                        maxlength: 12,
                        digits: true
                    },
                    client_status: {
                        required: true
                    },
                    timelineRequirement: {
                        required: true
                    },
                    'creditor[0][name]': {
                        required: true,
                        maxlength: 100
                    },
                    'creditor[0][amount_outstanding]': {
                        required: true,
                        number: true,
                        min: 0
                    },
                    'creditor[0][phone]': {
                        maxlength: 20,
                        digits: true
                    },
                    'creditor[0][email]': {
                        email: true,
                        maxlength: 255
                    },
                    'creditor[0][person_name]': {
                        maxlength: 255
                    },
                    'creditor[0][last_payment]': {
                        date: true,
                        maxDate: new Date().toISOString().split('T')[0]
                    },
                    'creditor[0][emi_per_month]': {
                        number: true,
                        min: 0
                    },
                    'creditor[0][cheque_value]': {
                        number: true,
                        min: 0
                    },
                    'creditor[0][type_of_debt]': {
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
                        maxlength: "Phone number cannot exceed 12 digits",
                        digits: "Please enter only digits"
                    },
                    client_status: {
                        required: "Please select client status"
                    },
                    timelineRequirement: {
                        required: "Please select timeline requirement"
                    },
                    'creditor[0][name]': {
                        required: "Creditor name is required",
                        maxlength: "Creditor name cannot exceed 100 characters"
                    },
                    'creditor[0][amount_outstanding]': {
                        required: "Amount outstanding is required",
                        number: "Please enter a valid number",
                        min: "Amount cannot be negative"
                    },
                    'creditor[0][phone]': {
                        maxlength: "Phone number cannot exceed 20 digits",
                        digits: "Please enter only digits"
                    },
                    'creditor[0][email]': {
                        email: "Please enter a valid email address",
                        maxlength: "Email cannot exceed 255 characters"
                    },
                    'creditor[0][person_name]': {
                        maxlength: "Contact person name cannot exceed 255 characters"
                    },
                    'creditor[0][last_payment]': {
                        date: "Please enter a valid date",
                        maxDate: "Last payment date cannot be in the future"
                    },
                    'creditor[0][emi_per_month]': {
                        number: "Please enter a valid number",
                        min: "EMI cannot be negative"
                    },
                    'creditor[0][cheque_value]': {
                        number: "Please enter a valid number",
                        min: "Cheque value cannot be negative"
                    },
                    'creditor[0][type_of_debt]': {
                        required: "Please select type of debt"
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

            // Custom method for date validation
            $.validator.addMethod("maxDate", function(value, element) {
                if (this.optional(element)) {
                    return true;
                }
                var selectedDate = new Date(value);
                var today = new Date();
                return selectedDate <= today;
            }, "Date cannot be in the future");

            // Custom method for file type validation
            $.validator.addMethod("accept", function(value, element, param) {
                if (this.optional(element)) {
                    return true;
                }
                if (!value) return true; // No file selected is valid for optional fields

                var extension = value.split('.').pop().toLowerCase();
                var mimeType = $(element).prop('files')[0].type;

                // Check if file type matches allowed types
                return param.split(',').indexOf(mimeType) !== -1;
            });

            // File size validation function
            function validateFileSizes() {
                var maxSize = 5 * 1024 * 1024; // 5MB in bytes
                var isValid = true;

                $('input[type="file"]').each(function() {
                    if (this.files && this.files[0]) {
                        if (this.files[0].size > maxSize) {
                            isValid = false;
                            $(this).addClass('is-invalid');
                            $(this).siblings('.text-danger').remove();
                            $(this).after('<small class="text-danger">File size must be less than 5MB</small>');
                        }
                    }
                });

                return isValid;
            }

            // Real-time validation for file inputs
            $('input[type="file"]').on('change', function() {
                $(this).valid(); // Trigger validation for this field

                // Clear file size error if any
                $(this).siblings('.text-danger').filter(function() {
                    return $(this).text() === 'File size must be less than 5MB';
                }).remove();

                // Validate file size immediately
                if (this.files && this.files[0]) {
                    var maxSize = 5 * 1024 * 1024; // 5MB
                    if (this.files[0].size > maxSize) {
                        $(this).addClass('is-invalid');
                        $(this).after('<small class="text-danger">File size must be less than 5MB</small>');
                    }
                }
            });

            // Dynamic validation for creditor fields (if you add more creditors dynamically)
            function setupCreditorValidation(index) {
                $('input[name="creditor[' + index + '][name]"]').rules('add', {
                    required: true,
                    maxlength: 100
                });

                $('input[name="creditor[' + index + '][amount_outstanding]"]').rules('add', {
                    required: true,
                    number: true,
                    min: 0
                });

                // Add similar rules for other creditor fields...
            }

            // Initialize validation for first creditor
            setupCreditorValidation(0);
        });
    })
</script>
@endsection