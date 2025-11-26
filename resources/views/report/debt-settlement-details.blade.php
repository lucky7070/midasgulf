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
                    <div class="col-auto ms-auto">
                        <a href="{{ route('report.debt-settlement') }}" class="btn btn-outline-secondary">
                            <i class="fa fa-arrow-left me-1"></i> Go Back
                        </a>
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
                        <div class="bg-white p-3 rounded border border-info border-opacity-25 mb-2">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <h4 class="h6 fw-semibold text-dark mb-0">Creditor {{ $key + 1 }}</h4>
                            </div>
                            <div class="row text-sm">
                                <div class="col-md-6 mb-2">
                                    <span class="field-label">Name:</span>
                                    <span class="fw-medium text-dark ms-2">{{ @$row['name'] ?? '--' }}</span>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <span class="field-label">Amount Outstanding:</span>
                                    <span class="fw-medium text-dark ms-2">AED {{ number_format(@$row['amount_outstanding'] ?? 0, 2) }}</span>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <span class="field-label">Email:</span>
                                    <span class="fw-medium text-dark ms-2">{{ @$row['email'] ?? 'N/A' }}</span>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <span class="field-label">Phone:</span>
                                    <span class="fw-medium text-dark ms-2">{{ @$row['phone'] ? @$row['country_code']." ".@$row['phone'] : 'N/A' }}</span>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <span class="field-label">Contact Person:</span>
                                    <span class="fw-medium text-dark ms-2">{{ @$row['person_name'] ?? 'N/A' }}</span>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <span class="field-label">Last Payment:</span>
                                    <span class="fw-medium text-dark ms-2">{{ @$row['last_payment'] ? date('M d, Y', strtotime(@$row['last_payment'])) : 'N/A' }}</span>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <span class="field-label">EMI per Month:</span>
                                    <span class="fw-medium text-dark ms-2">AED {{ number_format(@$row['emi_per_month'] ?? 0, 2) }}</span>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <span class="field-label">Cheque Value:</span>
                                    <span class="fw-medium text-dark ms-2">AED {{ number_format(@$row['cheque_value'] ?? 0, 2) }}</span>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <span class="field-label">Type of Debt:</span>
                                    <span class="fw-medium text-dark ms-2">{{ @$row['type_of_debt'] ?? 'N/A' }}</span>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <span class="field-label">Loan Account / Case Number:</span>
                                    <span class="fw-medium text-dark ms-2">{{ @$row['loan_account'] ?? 'N/A' }}</span>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="bg-light-info p-4 rounded-3 mb-3">
                    <div class="">
                        <label class="form-label mb-0 d-block fw-semibold">Active Criminal Case -
                            @if($data->active_criminal_case)
                            <span class="badge text-bg-success">Yes</span>
                            @else
                            <span class="badge text-bg-danger">No</span>
                            @endif
                        </label>
                        <label class="form-label mb-0">Criminal Case Description : </label>
                        <p class="">{{ $data->criminal_case_description ?? 'N/A' }}</p>
                    </div>
                    <div class="">
                        <label class="form-label mb-0 d-block fw-semibold">Active Civil Case -
                            @if($data->active_civil_case)
                            <span class="badge text-bg-success">Yes</span>
                            @else
                            <span class="badge text-bg-danger">No</span>
                            @endif
                        </label>
                        <label class="form-label mb-0">Civil Case Description : </label>
                        <p class="">{{ $data->civil_case_description ?? 'N/A' }}</p>
                    </div>
                </div>

                <div class="bg-light-primary p-4 rounded-3 mb-3">
                    <h4 class="h5 fw-semibold text-dark mb-3">Uploaded Documents</h4>
                    <div class="d-flex gap-2 flex-wrap">
                        @if($data->settlement_upload_emirates_front)
                        <a href="{{ asset('storage/'.$data->settlement_upload_emirates_front) }}" class="btn btn-primary">
                            Settlement Upload Emirates Front <i class="fa fa-download ms-1"></i>
                        </a>
                        @endif

                        @if($data->settlement_upload_emirates_back)
                        <a href="{{ asset('storage/'.$data->settlement_upload_emirates_back) }}" class="btn btn-primary">
                            Settlement Upload Emirates Back <i class="fa fa-download ms-1"></i>
                        </a>
                        @endif

                        @if($data->settlement_upload_passport)
                        <a href="{{ asset('storage/'.$data->settlement_upload_passport) }}" class="btn btn-primary">
                            Settlement Upload Passport <i class="fa fa-download ms-1"></i>
                        </a>
                        @endif

                        @if($data->settlement_upload_license)
                        <a href="{{ asset('storage/'.$data->settlement_upload_license) }}" class="btn btn-primary">
                            Settlement Upload License <i class="fa fa-download ms-1"></i>
                        </a>
                        @endif

                        @if($data->settlement_upload_ejari)
                        <a href="{{ asset('storage/'.$data->settlement_upload_ejari) }}" class="btn btn-primary">
                            Settlement Upload Ejari <i class="fa fa-download ms-1"></i>
                        </a>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection