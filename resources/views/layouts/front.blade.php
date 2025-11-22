<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Midas Gulf Loans & Overdues Rescheduling Services LLC - Dubai</title>
    <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap/bootstrap.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-pro/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/toastr/toastr.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('front/css/style.css') }}">
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
                            modalSubtitle.textContent = `We will negotiate with banks or other financial institutions regarding installment plans for your unpaid loan. In our company "Midas Gulf" we also help in Restructuring of your past due payments of your personal and business loans. We also provide legal services in order to clear your Civil case, Travel Ban, and Police case. Our professional team will help you with services such as Credit Repair, Debt Consolidation, Buy out, Bankruptcy services in case of business loans.`;
                            break;
                        case "House":
                            modalBox.classList.add("bg-house");
                            modalSubtitle.textContent = `We will negotiate with banks or other financial institutions regarding installment plans for your unpaid loan. In our company "Midas Gulf" we also help in Restructuring of your past due payments of your personal and business loans. We also provide legal services in order to clear your Civil case, Travel Ban, and Police case. Our professional team will help you with services such as Credit Repair, Debt Consolidation, Buy out, Bankruptcy services in case of business loans.`;
                            break;
                        case "Car":
                            modalBox.classList.add("bg-car");
                            modalSubtitle.textContent = `We will negotiate with banks or other financial institutions regarding installment plans for your unpaid loan. In our company "Midas Gulf" we also help in Restructuring of your past due payments of your personal and business loans. We also provide legal services in order to clear your Civil case, Travel Ban, and Police case. Our professional team will help you with services such as Credit Repair, Debt Consolidation, Buy out, Bankruptcy services in case of business loans.`;
                            break;
                        case "Credit Card":
                            modalBox.classList.add("bg-credit");
                            modalSubtitle.textContent = `We will negotiate with banks or other financial institutions regarding installment plans for your unpaid loan. In our company "Midas Gulf" we also help in Restructuring of your past due payments of your personal and business loans. We also provide legal services in order to clear your Civil case, Travel Ban, and Police case. Our professional team will help you with services such as Credit Repair, Debt Consolidation, Buy out, Bankruptcy services in case of business loans.`;
                            break;
                        case "Landlords":
                            modalBox.classList.add("bg-landlords");
                            modalSubtitle.textContent = `We will negotiate with banks or other financial institutions regarding installment plans for your unpaid loan. In our company "Midas Gulf" we also help in Restructuring of your past due payments of your personal and business loans. We also provide legal services in order to clear your Civil case, Travel Ban, and Police case. Our professional team will help you with services such as Credit Repair, Debt Consolidation, Buy out, Bankruptcy services in case of business loans.`;
                            break;
                        case "Vendors":
                            modalBox.classList.add("bg-vendors");
                            modalSubtitle.textContent = `We will negotiate with banks or other financial institutions regarding installment plans for your unpaid loan. In our company "Midas Gulf" we also help in Restructuring of your past due payments of your personal and business loans. We also provide legal services in order to clear your Civil case, Travel Ban, and Police case. Our professional team will help you with services such as Credit Repair, Debt Consolidation, Buy out, Bankruptcy services in case of business loans.`;
                            break;
                        case "Supplier":
                            modalBox.classList.add("bg-supplier");
                            modalSubtitle.textContent = `We will negotiate with banks or other financial institutions regarding installment plans for your unpaid loan. In our company "Midas Gulf" we also help in Restructuring of your past due payments of your personal and business loans. We also provide legal services in order to clear your Civil case, Travel Ban, and Police case. Our professional team will help you with services such as Credit Repair, Debt Consolidation, Buy out, Bankruptcy services in case of business loans.`;
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