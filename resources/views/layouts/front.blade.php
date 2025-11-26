<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Midas Gulf Loans & Overdues Rescheduling Services LLC - Dubai</title>
    <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap/bootstrap.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-pro/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/toastr/toastr.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('front/css/style.css?v=1.2.1') }}">
    @yield('css')
</head>

<body>
    @include('partial.front.header')
    @yield('content')
    @include('partial.front.footer')

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 id="modal-title" class="modal-title fw-bold"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3 position-relative">
                        <!-- <button type="button" class="btn-close position-absolute end-0 top-0 p-3 bg-secondary bg-opacity-25-" data-bs-dismiss="modal" aria-label="Close"></button> -->
                        <!-- <h2 id="modal-service-title" class="modal-head">Vendors Inquiry</h2> -->
                        <img id="modal-image" src="{{ asset('front/images/card/Money.jpeg') }}" class="object-fit-cover w-100 rounded-3" alt="" style="height: 200px;">
                    </div>
                    <p id="modal-subtitle" class="modal-subtitle small">If you have defaulted on repayment of your car loan, Midas Gulf assist you in rescheduling your repayment plan by negotiating with the financial institutions. Also in case of repossession related court proceedings.</p>
                    <div class="card-body">
                        <div class="row settlement-options">
                            <div class="col-lg-6 mb-3 mb-lg-0">
                                <div class="option-card option-card-settlement">
                                    <div>
                                        <img style="width: 100px;" src="{{ asset('front/images/debt-settlement.png') }}" alt="" srcset="">
                                        <h3 style="color: black; font-weight: bold;">Debt Settlement</h3>
                                        <p id="service-desc1" data-service="settlement">Negotiate housing loan settlements to
                                            avoid foreclosure. Protect your home while
                                            reducing outstanding mortgage debt.</p>
                                    </div>
                                    <a href="{{ route('debt-settlement') }}" class="Card-btn btn-settlement">
                                        Apply for Settlement
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="option-card option-card-restructuring">
                                    <div>
                                        <img style="width: 100px;" src="{{ asset('front/images/debt-restructuring.png') }}" alt="" srcset="">
                                        <h3 style="color: black; font-weight: bold;">Debt Restructuring</h3>
                                        <p id="service-desc2" data-service="restructuring">Extend payment terms and reduce
                                            monthly EMI on housing loans. Keep your property
                                            while making payments affordable.</p>
                                    </div>
                                    <a href="{{ route('debt-restructuring') }}" class="Card-btn btn-restructuring">
                                        Apply for Restructuring
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/plugins/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.validate.js') }}"></script>
    <script src="{{ asset('assets/plugins/toastr/toastr.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.settle-card').on('click', function() {
                const data = $(this).data('debt-type');
                let modalSubtitle = modalSubtitle2 = modalSubtitle3 = image = '';
                switch (data) {
                    case "Personal/Business":
                        image = "{{ asset('front/images/card/Money.jpeg') }}";
                        modalSubtitle = `We will negotiate with banks or other financial institutions regarding installment plans for your unpaid loan. In our company “Midas Gulf” we also help in Restructuring of your past due payments of your personal and business loans. We also provide legal services in order to clear your Civil case, Travel Ban, and Police case. Our professional team will help you with services such as Credit Repair, Debt Consolidation, Buy out, Bankruptcy services in case of business loans.`;
                        modalSubtitle2 = `Negotiate directly with creditors to reduce your total debt by 40-70%. Our proven track record helps you settle .`;
                        modalSubtitle3 = `Reorganize your payment terms with lower interest rates and extended timelines. Make debt manageable without bankruptcy..`;
                        break;
                    case "House":
                        image = "{{ asset('front/images/card/pexels-photo-1396122.jpeg') }}";
                        modalSubtitle = `If you have failed in making payments of your housing loan, for more than 3 months, the bank has the right to initiate a legal proceeding against you. In such cases, Midas Gulf will help to negotiate a repayment scheme from the bank. This will also prevent the lender/bank from initiating a case against the borrower.`;
                        modalSubtitle2 = `Negotiate housing loan settlements to avoid foreclosure. Protect your home while reducing outstanding mortgage debt.`;
                        modalSubtitle3 = `Extend payment terms and reduce monthly EMI on housing loans. Keep your property while making payments affordable.`;
                        break;
                    case "Car":
                        image = "{{ asset('front/images/card/car.jpeg') }}";
                        modalSubtitle = `If you have defaulted on repayment of your car loan, Midas Gulf assist you in rescheduling your repayment plan by negotiating with the financial institutions. Also in case of repossession related court proceedings.`;
                        modalSubtitle2 = `Settle vehicle loans for less than owed amount. Prevent repossession and clear your auto debt efficiently.`;
                        modalSubtitle3 = `Restructure car loan payments with reduced interest rates. Lower your monthly EMI while keeping your vehicle.`;
                        break;
                    case "Credit Card":
                        image = "{{ asset('front/images/card/credit-card.webp') }}";
                        modalSubtitle = `We offer options for settlement of financial and legal issues that arise from personal and corporate credit cards outstanding. We work on your behalf to successfully negotiate with banks and to initiate all kinds of solutions in terms of credit cards.`;
                        modalSubtitle2 = `Reduce credit card debt by negotiating lump-sum settlements. Stop accumulating interest and penalties immediately.`;
                        modalSubtitle3 = `Convert credit card debt into manageable payment plans. Lower interest rates and consolidate multiple cards.`;
                        break;
                    case "Landlords":
                        image = "{{ asset('front/images/card/landrods.webp') }}";
                        modalSubtitle = `We work on your behalf in rental dispute cases to reach solutions (which include reaching settlement points between landlords and tenants, amending and reviewing contracts) so to ensure justice between the parties to avoid further losses.`;
                        modalSubtitle2 = `Negotiate unpaid rent settlements with landlords. Avoid legal action and clear rental arrears at reduced amounts.`;
                        modalSubtitle3 = `Create payment plans for overdue rent. Maintain your tenancy while clearing outstanding rental payments.`;
                        break;
                    case "Vendors":
                        image = "{{ asset('front/images/card/Vendors.webp') }}";
                        modalSubtitle = `We at Midas Gulf will help the SMEs and Business Owners who are facing any payment issues with suppliers and banks. We will help you in solving your financial problems by negotiating with the suppliers or banks to get the best payment option like rescheduling the repayment amount depending on your financial situation.`;
                        modalSubtitle2 = `Settle vendor payables for reduced amounts. Maintain business relationships while clearing outstanding invoices.`;
                        modalSubtitle3 = `Restructure vendor payment terms to ease cash flow. Extended payment schedules for business sustainability.`;
                        break;
                    case "Supplier":
                        image = "{{ asset('front/images/card/suplier.jpeg') }}";
                        modalSubtitle = `If you are facing difficulty in making payments to your supplier or have defaulted on your payments, we at Midas gulf will help you to solve your problems and financial issues by negotiating with the vendors or banks to get a feasible repayment schedule depending on your financial situation.`;
                        modalSubtitle2 = `Negotiate supplier debt settlements to resolve outstanding balances. Keep business operations running smoothly.`;
                        modalSubtitle3 = `Restructure supplier credit terms with flexible payment options. Preserve critical business supply chains.`;
                        break;
                }

                $('#modal-image').attr('src', image)
                $('#modal-title').text(data + " Inquiry")
                $('#modal-subtitle').text(modalSubtitle)
                $('#service-desc1').text(modalSubtitle2)
                $('#service-desc2').text(modalSubtitle3)
                $('#exampleModal').modal('show');
            })
        })
    </script>
    @yield('js')
    @include('partial.toastr')
</body>

</html>