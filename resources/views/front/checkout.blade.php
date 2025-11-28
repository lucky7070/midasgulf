@extends('layouts.front')

@section('content')
<div class="min-vh-100 bg-light py-5">
    <div class="container">
        <div class="bg-white rounded-3 shadow p-5">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <div class="d-flex align-items-center">
                    <div class="w-4 h-4 bg-success bg-opacity-25 rounded-circle d-flex align-items-center justify-content-center me-3">
                        <i class="bi bi-check-circle-fill text-success fs-3"></i>
                    </div>
                    <div>
                        <h1 class="h2 fw-bold text-dark">Application Summary</h1>
                        <p class="text-muted mb-0">Review your submitted information</p>
                    </div>
                </div>
            </div>

            <div class="space-y-4">
                <div class="bg-warning bg-opacity-10 p-4 rounded-3 mb-3">
                    <h3 class="h5 fw-semibold text-dark mb-3">Client Information</h3>
                    <div class="row g-3 text-sm">
                        <div class="col-md-6">
                            <span class="text-muted">Name:</span>
                            <span class="fw-medium text-dark ms-2">{{ $data->name }}</span>
                        </div>
                        <div class="col-md-6">
                            <span class="text-muted">Email:</span>
                            <span class="fw-medium text-dark ms-2">{{ $data->email }}</span>
                        </div>
                        <div class="col-md-6">
                            <span class="text-muted">Phone:</span>
                            <span class="fw-medium text-dark ms-2">{{ $data->country_code." ".$data->phone }}</span>
                        </div>
                        <div class="col-md-6">
                            <span class="text-muted">Status:</span>
                            <span class="fw-medium text-dark ms-2 text-uppercase">{{ $data->client_status }}</span>
                        </div>
                    </div>
                </div>

                <div class="bg-info bg-opacity-10 p-4 rounded-3 mb-3">
                    <h3 class="h5 fw-semibold text-dark mb-3">Creditors ({{ isset($data['creditor']) ? count($data['creditor']) : 0 }})</h3>
                    <div class="space-y-3">
                        @foreach((isset($data['creditor']) ? $data['creditor'] : 0) as $key => $row)
                        <div class="bg-white p-3 rounded border border-info border-opacity-25">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <h4 class="h6 fw-semibold text-dark mb-0">Creditor {{ $key + 1 }}</h4>
                                <span class="badge text-bg-primary">{{ $row['type_of_debt'] }}</span>
                            </div>
                            <div class="row text-sm">
                                <div class="col-md-6 mb-2">
                                    <span class="text-muted">Name:</span>
                                    <span class="fw-medium text-dark ms-2">{{ $row['name'] }}</span>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <span class="text-muted">Phone:</span>
                                    <span class="fw-medium text-dark ms-2">{{ $row['phone'] ? $row['country_code']." ".$row['phone'] : 'N/A' }}</span>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <span class="text-muted">Email:</span>
                                    <span class="fw-medium text-dark ms-2">{{ $row['email'] ?? 'N/A' }}</span>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <span class="text-muted">Outstanding:</span>
                                    <span class="fw-medium text-dark ms-2">AED {{ $row['amount_outstanding'] }}</span>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="bg-white border border-2 border-warning p-5 rounded-3">
                    <h3 class="h4 fw-semibold text-dark mb-3 text-center">Would you like a consultation call?</h3>
                    <p class="text-muted text-center mb-4">Book a 30-minute Zoom call with our expert for AED 100 to discuss your case in detail</p>
                    <div class="d-flex gap-3 justify-content-center">
                        <a href="{{ route('home') }}" data-click="alert" data-payment="{{ $data->slug }}" class="btn btn-success px-4 py-2 rounded-2 fw-semibold d-flex align-items-center">
                            <i class="bi bi-check-circle me-2"></i>
                            <span>Yes, Book Consultation</span>
                        </a>
                        <a href="{{ route('home') }}" data-click="alert" data-payment="" class="btn btn-secondary px-4 py-2 rounded-2 fw-semibold d-flex align-items-center">
                            <i class="bi bi-x me-2"></i>
                            <span>No, Continue Without</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script src="{{ asset('assets/js/sweetalert2.min.js') }}"></script>
<script>
    $(document).ready(function() {
        $('[data-click="alert"]').click(function(e) {
            e.preventDefault();

            const token = $(this).data('payment');
            if (token) $.post("{{ route('payment') }}", {
                token,
                _token: "{{ csrf_token() }}"
            }, function(data) {});

            Swal.fire({
                icon: 'success',
                title: 'Thank you for contacting Midas Gulf',
                text: "kindly allow us a maximum period of 48 hours to revert to you on your mail id or via whatsapp. Thank you.",
                confirmButtonText: "Okay",
                customClass: {
                    confirmButton: "btn btn-success px-5",
                },
                buttonsStyling: false
            }).then((result) => {
                setTimeout(() => {
                    window.location.replace($(this).attr('href'))
                }, 500)
            })
        })
    })
</script>
@endsection