@extends('layouts.front')

@section('content')
<div class="bg-secondary">
    <div class="container py-4">
        <div class="d-flex align-items-center">
            <h1 class="text-4xl md:text-5xl font-bold">Refund Policy</h1>
        </div>
        <p class="fs-5 text-gray">No Refund Policy - Understanding our terms</p>
    </div>
</div>
<div class="container my-4">
    <div class="bg-white rounded shadow p-5 space-y-5">
        <div class="bg-light p-4 rounded border border-danger mb-4">
            <div class="d-flex align-items-start">
                <i class="bi bi-exclamation-circle text-danger me-3 fs-5"></i>
                <div>
                    <h3 class="h5 text-danger fw-bold mb-2">IMPORTANT: No Refund Policy</h3>
                    <p class="text-muted">
                        At Midas Gulf, due to the nature of our debt resolution services and the immediate work that
                        commences upon engagement, all payments made are final and non-refundable. Please read this
                        policy carefully before engaging our services.
                    </p>
                </div>
            </div>
        </div>

        <div>
            <div class="d-flex align-items-center mb-3">
                <i class="bi bi-shield-check text-secondary me-3 fs-5"></i>
                <h2 class="h4 fw-bold text-dark">1. Policy Overview</h2>
            </div>
            <p class="text-muted mb-3">
                Midas Gulf operates under a strict no refund policy. Once payment is made and services are engaged, no
                refunds will be issued under any circumstances. This policy exists because:
            </p>
            <ul class="list-unstyled ms-4">
                <li class="text-muted d-flex mb-2">
                    <span class="text-secondary me-2">•</span>
                    <span>Work on your case begins immediately upon payment and engagement</span>
                </li>
                <li class="text-muted d-flex mb-2">
                    <span class="text-secondary me-2">•</span>
                    <span>Our team invests significant time, resources, and expertise from day one</span>
                </li>
                <li class="text-muted d-flex mb-2">
                    <span class="text-secondary me-2">•</span>
                    <span>Confidential negotiations with creditors commence immediately</span>
                </li>
                <li class="text-muted d-flex mb-2">
                    <span class="text-secondary me-2">•</span>
                    <span>Legal and financial consultation services are provided throughout the process</span>
                </li>
            </ul>
        </div>

        <div>
            <div class="d-flex align-items-center mb-3">
                <i class="bi bi-x-circle text-danger me-3 fs-5"></i>
                <h2 class="h4 fw-bold text-dark">2. No Refund Circumstances</h2>
            </div>
            <p class="text-muted mb-3">
                Refunds will NOT be issued under ANY circumstances, including but not limited to:
            </p>
            <ul class="list-unstyled ms-4">
                <li class="text-muted d-flex mb-2">
                    <span class="text-danger me-2">•</span>
                    <span>Change of mind after payment</span>
                </li>
                <li class="text-muted d-flex mb-2">
                    <span class="text-danger me-2">•</span>
                    <span>Client fails to provide required documentation or information</span>
                </li>
                <li class="text-muted d-flex mb-2">
                    <span class="text-danger me-2">•</span>
                    <span>Client makes unauthorized contact with creditors that compromises negotiations</span>
                </li>
                <li class="text-muted d-flex mb-2">
                    <span class="text-danger me-2">•</span>
                    <span>Creditors refuse to negotiate (as this is beyond our control)</span>
                </li>
                <li class="text-muted d-flex mb-2">
                    <span class="text-danger me-2">•</span>
                    <span>Client's financial situation changes during the process</span>
                </li>
                <li class="text-muted d-flex mb-2">
                    <span class="text-danger me-2">•</span>
                    <span>Dissatisfaction with negotiation outcomes</span>
                </li>
                <li class="text-muted d-flex mb-2">
                    <span class="text-danger me-2">•</span>
                    <span>Early termination of services by the client</span>
                </li>
                <li class="text-muted d-flex mb-2">
                    <span class="text-danger me-2">•</span>
                    <span>Incomplete service delivery due to client non-cooperation</span>
                </li>
                <li class="text-muted d-flex mb-2">
                    <span class="text-danger me-2">•</span>
                    <span>Any other reason whatsoever</span>
                </li>
            </ul>
        </div>

        <div>
            <h2 class="h4 fw-bold text-dark mb-3">3. Service Fees</h2>
            <p class="text-muted mb-3">
                All fees charged by Midas Gulf are final and non-refundable, including:
            </p>
            <ul class="list-unstyled ms-4">
                <li class="text-muted d-flex mb-2">
                    <span class="text-secondary me-2">•</span>
                    <span>Initial consultation fees</span>
                </li>
                <li class="text-muted d-flex mb-2">
                    <span class="text-secondary me-2">•</span>
                    <span>Setup and administrative fees</span>
                </li>
                <li class="text-muted d-flex mb-2">
                    <span class="text-secondary me-2">•</span>
                    <span>Service fees for ongoing negotiations</span>
                </li>
                <li class="text-muted d-flex mb-2">
                    <span class="text-secondary me-2">•</span>
                    <span>Performance-based fees</span>
                </li>
                <li class="text-muted d-flex mb-2">
                    <span class="text-secondary me-2">•</span>
                    <span>Legal consultation fees</span>
                </li>
                <li class="text-muted d-flex mb-2">
                    <span class="text-secondary me-2">•</span>
                    <span>Any other fees outlined in your service agreement</span>
                </li>
            </ul>
        </div>

        <div>
            <h2 class="h4 fw-bold text-dark mb-3">4. Understanding Before Engagement</h2>
            <p class="text-muted mb-3">
                Before engaging our services, clients must acknowledge and understand that:
            </p>
            <ul class="list-unstyled ms-4">
                <li class="text-muted d-flex mb-2">
                    <span class="text-secondary me-2">•</span>
                    <span>All payments are final and no refunds will be provided</span>
                </li>
                <li class="text-muted d-flex mb-2">
                    <span class="text-secondary me-2">•</span>
                    <span>We cannot guarantee specific outcomes with creditors</span>
                </li>
                <li class="text-muted d-flex mb-2">
                    <span class="text-secondary me-2">•</span>
                    <span>Results depend on multiple factors including creditor cooperation</span>
                </li>
                <li class="text-muted d-flex mb-2">
                    <span class="text-secondary me-2">•</span>
                    <span>Client cooperation and timely provision of information is essential</span>
                </li>
                <li class="text-muted d-flex mb-2">
                    <span class="text-secondary me-2">•</span>
                    <span>This no refund policy is absolute and binding</span>
                </li>
            </ul>
        </div>

        <div>
            <h2 class="h4 fw-bold text-dark mb-3">5. Exceptions</h2>
            <p class="text-muted mb-3">The only exceptions to this no refund policy are:</p>
            <ul class="list-unstyled ms-4">
                <li class="text-muted d-flex mb-2">
                    <span class="text-secondary me-2">•</span>
                    <span>Duplicate payments made in error (refund of duplicate amount only)</span>
                </li>
                <li class="text-muted d-flex mb-2">
                    <span class="text-secondary me-2">•</span>
                    <span>Technical billing errors (correction of the error only)</span>
                </li>
                <li class="text-muted d-flex mb-2">
                    <span class="text-secondary me-2">•</span>
                    <span>Material breach of contract by Midas Gulf (subject to management review and approval)</span>
                </li>
            </ul>
            <p class="text-muted mt-3">
                Any exceptions require written approval from senior management and will be evaluated on a case-by-case
                basis.
            </p>
        </div>

        <div>
            <h2 class="h4 fw-bold text-dark mb-3">6. Billing Disputes</h2>
            <p class="text-muted">
                If you believe there has been a billing error (such as a duplicate charge), you must notify us in
                writing within 7 days of the charge. Send your dispute to support@midasgulf.com with complete details.
                We will investigate and respond within 10 business days. This does not constitute a refund claim but
                rather a billing correction request.
            </p>
        </div>

        <div>
            <h2 class="h4 fw-bold text-dark mb-3">7. Governing Law</h2>
            <p class="text-muted">
                This no refund policy is governed by the laws of the United Arab Emirates. All disputes arising from
                this policy will be subject to the exclusive jurisdiction of UAE courts. By engaging our services, you
                acknowledge that you have read, understood, and agree to this no refund policy.
            </p>
        </div>

        <div class="bg-light p-4 rounded border mb-3">
            <h3 class="h5 fw-semibold text-dark mb-2">Questions About Our Policy?</h3>
            <p class="text-muted mb-3">
                If you have questions about our No Refund Policy or need clarification before engaging our services,
                please contact us:
            </p>
            <div class="space-y-2 text-muted">
                <p>Email: help@midasgulf.com</p>
                <p>Phone: +971 4 566 5861</p>
                <p>Toll-Free: 800 MIDASGULF</p>
                <p>WhatsApp: +971 52 886 7088</p>
            </div>
        </div>

        <div class="bg-light p-4 rounded border border-danger">
            <div class="d-flex align-items-start">
                <i class="bi bi-exclamation-circle text-danger me-3 fs-5"></i>
                <div>
                    <p class="text-muted small">
                        <strong class="text-danger">IMPORTANT NOTICE:</strong> By engaging our services and making
                        payment, you acknowledge that you have read, understood, and agree to this no refund policy.
                        This policy is subject to change without notice. The latest version will always be available on
                        our website. Last updated: November 2024
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection