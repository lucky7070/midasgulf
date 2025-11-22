@extends('layouts.front')

@section('content')
<div class="bg-secondary">
    <div class="container py-4">
        <div class="d-flex align-items-center">
            <h1 class="text-4xl md:text-5xl font-bold">Terms &amp; Conditions</h1>
        </div>
        <p class="fs-5 text-gray">Last updated: November 2024</p>
    </div>
</div>
<div class="container my-4">
    <div class="bg-white rounded shadow p-5 space-y-5">
        <div>
            <h2 class="h4 fw-bold text-dark mb-3">1. Agreement to Terms</h2>
            <p class="text-muted">
                By accessing and using Midas Gulf's services, you agree to be bound by these Terms and Conditions. If
                you do not agree with any part of these terms, you may not use our services.
            </p>
        </div>

        <div>
            <h2 class="h4 fw-bold text-dark mb-3">2. Services Provided</h2>
            <p class="text-muted mb-3">
                Midas Gulf provides debt settlement and debt restructuring services in the United Arab Emirates. Our
                services include:
            </p>
            <ul class="list-unstyled text-muted">
                <li class="d-flex mb-2">
                    <div class="w-2 h-2 bg-warning rounded-circle mt-2 me-3 flex-shrink-0"></div>
                    <span>Negotiation with creditors on behalf of clients</span>
                </li>
                <li class="d-flex mb-2">
                    <div class="w-2 h-2 bg-warning rounded-circle mt-2 me-3 flex-shrink-0"></div>
                    <span>Debt settlement and restructuring plans</span>
                </li>
                <li class="d-flex mb-2">
                    <div class="w-2 h-2 bg-warning rounded-circle mt-2 me-3 flex-shrink-0"></div>
                    <span>Legal consultation and support</span>
                </li>
                <li class="d-flex mb-2">
                    <div class="w-2 h-2 bg-warning rounded-circle mt-2 me-3 flex-shrink-0"></div>
                    <span>Financial advisory services</span>
                </li>
            </ul>
        </div>

        <div>
            <h2 class="h4 fw-bold text-dark mb-3">3. Client Obligations</h2>
            <p class="text-muted mb-3">As a client of Midas Gulf, you agree to:</p>
            <ul class="list-unstyled text-muted">
                <li class="d-flex mb-2">
                    <div class="w-2 h-2 bg-warning rounded-circle mt-2 me-3 flex-shrink-0"></div>
                    <span>Provide accurate and complete information about your financial situation</span>
                </li>
                <li class="d-flex mb-2">
                    <div class="w-2 h-2 bg-warning rounded-circle mt-2 me-3 flex-shrink-0"></div>
                    <span>Cooperate fully with our team throughout the process</span>
                </li>
                <li class="d-flex mb-2">
                    <div class="w-2 h-2 bg-warning rounded-circle mt-2 me-3 flex-shrink-0"></div>
                    <span>Make agreed payments on time</span>
                </li>
                <li class="d-flex mb-2">
                    <div class="w-2 h-2 bg-warning rounded-circle mt-2 me-3 flex-shrink-0"></div>
                    <span>Inform us immediately of any changes in your financial circumstances</span>
                </li>
            </ul>
        </div>

        <div>
            <h2 class="h4 fw-bold text-dark mb-3">4. Service Fees and Payment Terms</h2>
            <p class="text-muted mb-3">
                Our service fees will be clearly communicated to you before engagement. Fees are based on the complexity
                of your case and the services required.
            </p>
            <div class="bg-light border border-danger p-4 rounded mb-3">
                <h4 class="fw-semibold text-dark mb-2">Payment Processing Fees:</h4>
                <ul class="list-unstyled text-muted">
                    <li class="d-flex mb-2">
                        <div class="w-2 h-2 bg-danger rounded-circle mt-2 me-3 flex-shrink-0"></div>
                        <span>
                            <strong>Bank Card Payment:</strong> A 4% processing fee will be added to your basic invoice
                            value. This amount is included in your total net fee payable.
                        </span>
                    </li>
                    <li class="d-flex mb-2">
                        <div class="w-2 h-2 bg-danger rounded-circle mt-2 me-3 flex-shrink-0"></div>
                        <span>
                            <strong>VAT:</strong> In addition to the 4% card fee, you are required to pay an additional
                            5% Value Added Tax (VAT) as per prevailing UAE laws.
                        </span>
                    </li>
                </ul>
            </div>
            <p class="text-muted">
                We do not charge upfront fees without a clear agreement in place. All fees, including payment processing
                charges and VAT, will be itemized in your service agreement.
            </p>
        </div>

        <div>
            <h2 class="h4 fw-bold text-dark mb-3">5. Confidentiality</h2>
            <p class="text-muted">
                We maintain strict confidentiality regarding all client information. Your personal and financial data
                will only be shared with creditors and legal authorities as necessary to perform our services, and
                always with your consent.
            </p>
        </div>

        <div>
            <h2 class="h4 fw-bold text-dark mb-3">6. No Guarantee of Results</h2>
            <p class="text-muted">
                While we strive to achieve the best possible outcomes, we cannot guarantee specific results. The success
                of debt settlement negotiations depends on various factors including creditor cooperation, your
                financial situation, and legal considerations.
            </p>
        </div>

        <div>
            <h2 class="h4 fw-bold text-dark mb-3">7. Termination of Services</h2>
            <p class="text-muted">
                Either party may terminate the service agreement with written notice. In case of termination, you will
                be responsible for fees for services already rendered. Any ongoing negotiations will be properly
                concluded or transferred as per your instructions.
            </p>
        </div>

        <div>
            <h2 class="h4 fw-bold text-dark mb-3">8. Liability Limitations</h2>
            <p class="text-muted">
                Midas Gulf shall not be liable for any indirect, incidental, special, or consequential damages arising
                from the use of our services. Our liability is limited to the amount of fees paid for our services.
            </p>
        </div>

        <div>
            <h2 class="h4 fw-bold text-dark mb-3">9. Payment Methods and TABBY Installments</h2>
            <p class="text-muted mb-3">
                We accept multiple payment methods to provide flexibility to our clients:
            </p>
            <ul class="list-unstyled text-muted mb-3">
                <li class="d-flex mb-2">
                    <div class="w-2 h-2 bg-warning rounded-circle mt-2 me-3 flex-shrink-0"></div>
                    <span>Bank transfers and direct deposits</span>
                </li>
                <li class="d-flex mb-2">
                    <div class="w-2 h-2 bg-warning rounded-circle mt-2 me-3 flex-shrink-0"></div>
                    <span>Credit and debit cards (subject to 4% processing fee)</span>
                </li>
                <li class="d-flex mb-2">
                    <div class="w-2 h-2 bg-warning rounded-circle mt-2 me-3 flex-shrink-0"></div>
                    <span>TABBY installment payment system</span>
                </li>
            </ul>
            <div class="bg-light border border-warning p-4 rounded mb-3">
                <h4 class="fw-semibold text-dark mb-2">TABBY Installment Payment Requirements:</h4>
                <p class="text-muted mb-2">
                    If you choose to use the TABBY installment payment system, the following restrictions apply:
                </p>
                <ul class="list-unstyled text-muted">
                    <li class="d-flex mb-2">
                        <div class="w-2 h-2 bg-warning rounded-circle mt-2 me-3 flex-shrink-0"></div>
                        <span>
                            <strong>UAE Payment Cards Only:</strong> TABBY installment payments can ONLY be made with
                            UAE-issued credit or debit cards. International cards and cards issued outside the UAE are
                            not accepted for TABBY installment plans.
                        </span>
                    </li>
                    <li class="d-flex mb-2">
                        <div class="w-2 h-2 bg-warning rounded-circle mt-2 me-3 flex-shrink-0"></div>
                        <span>Installment payment arrangements must be confirmed at the time of engagement.</span>
                    </li>
                </ul>
            </div>
        </div>

        <div>
            <h2 class="h4 fw-bold text-dark mb-3">10. Governing Law</h2>
            <p class="text-muted">
                These terms and conditions are governed by the laws of the United Arab Emirates. Any disputes arising
                from these terms will be subject to the exclusive jurisdiction of UAE courts.
            </p>
        </div>

        <div>
            <h2 class="h4 fw-bold text-dark mb-3">11. Changes to Terms</h2>
            <p class="text-muted">
                We reserve the right to modify these terms at any time. Changes will be effective immediately upon
                posting on our website. Your continued use of our services constitutes acceptance of any changes.
            </p>
        </div>

        <div class="bg-light border-start border-4 border-warning p-4 rounded">
            <div class="d-flex align-items-start">
                <i class="bi bi-exclamation-circle text-warning me-3 fs-5 flex-shrink-0 mt-1"></i>
                <div>
                    <h3 class="h5 fw-semibold text-dark mb-2">Questions about our Terms?</h3>
                    <p class="text-muted mb-3">
                        If you have any questions about these Terms and Conditions, please contact us.
                    </p>
                    <a
                        class="btn btn-warning text-white px-4 py-2 rounded fw-semibold"
                        href="{{ route('contact') }}"
                        data-discover="true">
                        Contact Us
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection