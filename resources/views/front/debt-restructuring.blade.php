@extends('layouts.front')

@section('css')
<link rel="stylesheet" href="{{ asset('front/css/services.css') }}">
@endsection

@section('content')
<section id="debt-restructuring-form">
    <div class="container">
        <a href="services.html" class="back-to-services">
            &larr; Back to Services
        </a>
        <div class="form-header-area">
            <div class="service-details">
                <div class="card-icon settlement-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path
                            d="M12 4V1L8 5l4 4V6c3.31 0 6 2.69 6 6s-2.69 6-6 6-6-2.69-6-6h-2c0 4.42 3.58 8 8 8s8-3.58 8-8-3.58-8-8-8z" />
                    </svg>
                </div>
                <h2>Debt Restructuring</h2>
                <p class="service-tagline">
                    Reorganize your debt payments with better terms, lower interest rates, and manageable monthly payments. </p>
            </div>
        </div>

        <form class="main-debt-application-form">

            <div class="form-section-card">
                <h3>Client Profile Information</h3>

                <div class="section-group">
                    <h4>Your Information</h4>
                    <div class="input-row three-col">
                        <input type="text" name="full_name" placeholder="Your full name" required>
                        <input type="email" name="email_address" placeholder="your@email.com" required>
                        <input type="tel" name="phone_number" placeholder="+971 XX XXX XXXX" required>
                    </div>
                </div>

                <div class="section-group creditor-details-group" id="settlement-creditor-details">
                    <h4>Creditor Details <button type="button" class="btn-add-creditor" data-form="settlement">+ Add Creditor</button></h4>

                    <div class="creditor-block">
                        <h5>Creditor 1</h5>
                        <div class="input-row two-col">
                            <input type="text" name="creditor_name_1" placeholder="Bank or creditor name" required>
                            <input type="number" name="amount_outstanding_1" placeholder="Amount Outstanding (AED) *" value="0" required>
                        </div>
                        <div class="input-row two-col">
                            <input type="tel" name="creditor_phone_1" placeholder="Creditor Phone">
                            <input type="email" name="creditor_email_1" placeholder="Creditor Email (optional)">
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-section-card">

                <div class="section-group settlement-specific-fields">
                    <h4>Settlement Details</h4>

                    <div class="input-row full-width">
                        <input type="number" name="one_time_settlement_amount" placeholder="One-Time Settlement Amount You Can Pay (AED) *" required>
                    </div>

                    <div class="input-row two-col">
                        <select name="settlement_readiness" required>
                            <option value="">Ready to Settle In? *</option>
                            <option value="immediate">Immediately (Within 30 Days)</option>
                            <option value="1-3_months">1 - 3 Months</option>
                            <option value="3_months+">3+ Months</option>
                        </select>
                        <select name="type_of_debt" required>
                            <option value="">Select debt type *</option>
                            <option value="personal_loan">Personal Loan</option>
                            <option value="business_loan">Business Loan</option>
                            <option value="credit_card">Credit Card</option>
                            <option value="other">Other</option>
                        </select>
                    </div>

                    <div class="input-row two-col">
                        <input type="number" name="security_cheque_value" placeholder="Security Cheque Value (AED)" value="0">
                        <input type="text" name="contact_person" placeholder="Contact Person Name (Optional)">
                    </div>

                    <div class="section-group case-status mt-20">
                        <h4>Case Status</h4>
                        <label class="checkbox-label">
                            <input type="checkbox" name="active_criminal_case">
                            Active Criminal Case
                        </label>
                        <label class="checkbox-label">
                            <input type="checkbox" name="active_civil_case">
                            Active Civil Case
                        </label>
                    </div>
                </div>

                <div class="section-group personal-info">
                    <h4>Personal Information</h4>
                    <div class="input-row two-col">
                        <label class="checkbox-label">
                            <input type="checkbox" name="currently_in_country" checked>
                            Currently in the Country
                        </label>
                        <label class="checkbox-label">
                            <input type="checkbox" name="valid_emirates_id">
                            Valid Emirates ID
                        </label>
                    </div>
                    <div class="input-row two-col">
                        <label class="checkbox-label">
                            <input type="checkbox" name="valid_passport">
                            Valid Passport
                        </label>
                        <select name="client_status" id="settlement-client-status" required>
                            <option value="individual">Client Status *</option>
                            <option value="individual">Individual</option>
                            <option value="corporate">Corporate</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="form-section-card attachments-section">
                <h4>Required Attachments</h4>
                <div class="attachment-grid">
                    <div class="upload-box">
                        <input type="file" id="settlement-upload-emirates-front" accept="application/pdf,image/jpeg,image/png">
                        <label for="settlement-upload-emirates-front">
                            <i class="upload-icon">&#x2191;</i>
                            Upload Emirates ID (Front)
                            <span>PDF, JPG, or PNG</span>
                        </label>
                    </div>
                    <div class="upload-box">
                        <input type="file" id="settlement-upload-emirates-back" accept="application/pdf,image/jpeg,image/png">
                        <label for="settlement-upload-emirates-back">
                            <i class="upload-icon">&#x2191;</i>
                            Upload Emirates ID (Back)
                            <span>PDF, JPG, or PNG</span>
                        </label>
                    </div>
                    <div class="upload-box">
                        <input type="file" id="settlement-upload-passport" accept="application/pdf,image/jpeg,image/png">
                        <label for="settlement-upload-passport">
                            <i class="upload-icon">&#x2191;</i>
                            Upload Passport
                            <span>PDF, JPG, or PNG</span>
                        </label>
                    </div>

                    <div class="upload-box corporate-file-settlement">
                        <input type="file" id="settlement-upload-license" accept="application/pdf,image/jpeg,image/png">
                        <label for="settlement-upload-license">
                            <i class="upload-icon">&#x2191;</i>
                            Upload License Page (If Corporate)
                            <span>PDF, JPG, or PNG</span>
                        </label>
                    </div>
                    <div class="upload-box corporate-file-settlement">
                        <input type="file" id="settlement-upload-ejari" accept="application/pdf,image/jpeg,image/png">
                        <label for="settlement-upload-ejari">
                            <i class="upload-icon">&#x2191;</i>
                            Upload Ejari (If Corporate)
                            <span>PDF, JPG, or PNG</span>
                        </label>
                    </div>
                    <div class="upload-box blank-box"></div>
                </div>
            </div>

            <div class="submit-area">
                <button type="submit" class="btn-submit-app">
                    <i class="submit-icon"></i>
                    Submit Application
                </button>
            </div>

        </form>
    </div>
</section>
@endsection