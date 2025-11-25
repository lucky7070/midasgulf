<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Midas Gulf Loans & Overdues Rescheduling Services LLC - Dubai</title>
    <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap/bootstrap.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-pro/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/toastr/toastr.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('front/css/style.css?v=1.1') }}">
    @yield('css')
</head>

<body>
    @include('partial.front.header')
    @yield('content')
    @include('partial.front.footer')

    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.validate.js') }}"></script>
    <script src="{{ asset('assets/plugins/toastr/toastr.min.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const Enquiry = document.getElementById("enquiryModal");
            const closeBtn = document.querySelector(".close-btn");
            const openBtns = document.querySelectorAll(".open-modal-btn");
            const modalTitle = document.getElementById("modal-service-title");
            const hiddenDebtTypeInput = document.getElementById("hidden-debt-type");
            const modalBox = document.querySelector(".modal-first");
            const modalSubtitle = document.getElementById("modal-subtitle");
            const modalSubtitle2 = document.getElementById("service-desc1");
            const modalSubtitle3 = document.getElementById("service-desc2");




            openBtns.forEach(btn => {
                btn.addEventListener('click', function(event) {
                    event.preventDefault();

                    const debtType = this.getAttribute('data-debt-type');
                    modalTitle.textContent = debtType + " Inquiry";
                    hiddenDebtTypeInput.value = debtType;

                    modalBox.classList.remove(
                        "bg-personal",
                        "bg-house",
                        "bg-car",
                        "bg-credit",
                        "bg-landlords",
                        "bg-vendors",
                        "bg-supplier"
                    );

                    switch (debtType) {
                        case "Personal/Business":
                            modalBox.classList.add("bg-personal");
                            modalSubtitle.textContent = `We will negotiate with banks or other financial institutions regarding installment plans for your unpaid loan. In our company “Midas Gulf” we also help in Restructuring of your past due payments of your personal and business loans. We also provide legal services in order to clear your Civil case, Travel Ban, and Police case. Our professional team will help you with services such as Credit Repair, Debt Consolidation, Buy out, Bankruptcy services in case of business loans.`;
                            modalSubtitle2.textContent = `Negotiate directly with creditors to reduce your total debt by 40-70%. Our proven track record helps you settle .`;
                            modalSubtitle3.textContent = `Reorganize your payment terms with lower interest rates and extended timelines. Make debt manageable without bankruptcy..`;
                            break;
                        case "House":
                            modalBox.classList.add("bg-house");
                            modalSubtitle.textContent = `If you have failed in making payments of your housing loan, for more than 3 months, the bank has the right to initiate a legal proceeding against you. In such cases, Midas Gulf will help to negotiate a repayment scheme from the bank. This will also prevent the lender/bank from initiating a case against the borrower.`;
                            modalSubtitle2.textContent = `Negotiate housing loan settlements to avoid foreclosure. Protect your home while reducing outstanding mortgage debt.`;
                            modalSubtitle3.textContent = `Extend payment terms and reduce monthly EMI on housing loans. Keep your property while making payments affordable.`;
                            break;
                        case "Car":
                            modalBox.classList.add("bg-car");
                            modalSubtitle.textContent = `If you have defaulted on repayment of your car loan, Midas Gulf assist you in rescheduling your repayment plan by negotiating with the financial institutions. Also in case of repossession related court proceedings.`;
                            modalSubtitle2.textContent = `Settle vehicle loans for less than owed amount. Prevent repossession and clear your auto debt efficiently.`;
                            modalSubtitle3.textContent = `Restructure car loan payments with reduced interest rates. Lower your monthly EMI while keeping your vehicle.`;
                            break;
                        case "Credit Card":
                            modalBox.classList.add("bg-credit");
                            modalSubtitle.textContent = `We offer options for settlement of financial and legal issues that arise from personal and corporate credit cards outstanding. We work on your behalf to successfully negotiate with banks and to initiate all kinds of solutions in terms of credit cards.`;
                            modalSubtitle2.textContent = `Reduce credit card debt by negotiating lump-sum settlements. Stop accumulating interest and penalties immediately.`;
                            modalSubtitle3.textContent = `Convert credit card debt into manageable payment plans. Lower interest rates and consolidate multiple cards.`;
                            break;
                        case "Landlords":
                            modalBox.classList.add("bg-landlords");
                            modalSubtitle.textContent = `We work on your behalf in rental dispute cases to reach solutions (which include reaching settlement points between landlords and tenants, amending and reviewing contracts) so to ensure justice between the parties to avoid further losses.`;
                            modalSubtitle2.textContent = `Negotiate unpaid rent settlements with landlords. Avoid legal action and clear rental arrears at reduced amounts.`;
                            modalSubtitle3.textContent = `Create payment plans for overdue rent. Maintain your tenancy while clearing outstanding rental payments.`;
                            break;
                        case "Vendors":
                            modalBox.classList.add("bg-vendors");
                            modalSubtitle.textContent = `We at Midas Gulf will help the SMEs and Business Owners who are facing any payment issues with suppliers and banks. We will help you in solving your financial problems by negotiating with the suppliers or banks to get the best payment option like rescheduling the repayment amount depending on your financial situation.`;
                            modalSubtitle2.textContent = `Settle vendor payables for reduced amounts. Maintain business relationships while clearing outstanding invoices.`;
                            modalSubtitle3.textContent = `Restructure vendor payment terms to ease cash flow. Extended payment schedules for business sustainability.`;
                            break;
                        case "Supplier":
                            modalBox.classList.add("bg-supplier");
                            modalSubtitle.textContent = `If you are facing difficulty in making payments to your supplier or have defaulted on your payments, we at Midas gulf will help you to solve your problems and financial issues by negotiating with the vendors or banks to get a feasible repayment schedule depending on your financial situation.`;
                            modalSubtitle2.textContent = `Negotiate supplier debt settlements to resolve outstanding balances. Keep business operations running smoothly.`;
                            modalSubtitle3.textContent = `Restructure supplier credit terms with flexible payment options. Preserve critical business supply chains.`;
                            break;
                    }

                    Enquiry.style.display = "flex";
                    document.body.style.overflow = "hidden";
                });
            });

            if (closeBtn) {
                closeBtn.onclick = function() {
                    Enquiry.style.display = "none";
                    document.body.style.overflow = "auto";
                }
            }

            window.onclick = function(event) {
                if (event.target == Enquiry) {
                    Enquiry.style.display = "none";
                    document.body.style.overflow = "auto";
                }
            }
        });
    </script>
    @yield('js')
    @include('partial.toastr')
</body>

</html>