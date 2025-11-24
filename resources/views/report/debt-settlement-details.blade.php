@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card mb-3">
            <div class="card-header">
                <div class="row flex-between-end">
                    <div class="col-auto align-self-center">
                        <h5 class="mb-0" id="table-example">Report :: Debt Settlement Lead Details </h5>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="bg-light-primary p-4 rounded-3 mb-3">
                    <h3 class="h5 fw-semibold text-dark mb-3">Client Information</h3>
                    <div class="row text-sm">
                        <div class="col-md-6">
                            <label class="">Name:</label>
                            <span class="fw-medium text-dark ms-2">{{ $data->name }}</span>
                        </div>
                        <div class="col-md-6">
                            <label class="">Email:</label>
                            <span class="fw-medium text-dark ms-2">{{ $data->email }}</span>
                        </div>
                        <div class="col-md-6">
                            <label class="">Phone:</label>
                            <span class="fw-medium text-dark ms-2">{{ $data->phone }}</span>
                        </div>
                        <div class="col-md-6">
                            <label class="">Status:</label>
                            <span class="fw-medium text-dark ms-2 text-uppercase">{{ $data->client_status }}</span>
                        </div>
                    </div>
                </div>

                <div class="bg-light-info p-4 rounded-3 mb-3">
                    <h3 class="h5 fw-semibold text-dark mb-3">Creditors ({{ isset($data['creditor']) ? count($data['creditor']) : 0 }})</h3>
                    <div class="space-y-3">
                        @foreach((isset($data['creditor']) ? $data['creditor'] : 0) as $key => $row)
                        <div class="bg-white p-3 rounded border border-info border-opacity-25">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <h4 class="h6 fw-semibold text-dark mb-0">Creditor {{ $key }}</h4>
                                <span class="badge badge-secondary">{{ $row['type_of_debt'] }}</span>
                            </div>
                            <div class="row text-sm">
                                <div class="col-md-6">
                                    <label class="text-muted">Name:</label>
                                    <span class="fw-medium text-dark ms-2">{{ $row['name'] }}</span>
                                </div>
                                <div class="col-md-6">
                                    <label class="text-muted">Outstanding:</label>
                                    <span class="fw-medium text-dark ms-2">AED {{ $row['name'] }}</span>
                                </div>
                                <div class="col-md-6">
                                    <label class="text-muted">EMI:</label>
                                    <span class="fw-medium text-dark ms-2">AED {{ $row['name'] }}</span>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <div class="pt-3">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="bg-light-warning p-3 rounded-3">
                                    <p class="text-muted small mb-1">Total Outstanding Debt</p>
                                    <p class="h4 fw-bold mb-0">AED 100</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="bg-light-warning p-3 rounded-3">
                                    <p class="text-muted small mb-1">Total Monthly EMI</p>
                                    <p class="h4 fw-bold mb-0">AED 200</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection