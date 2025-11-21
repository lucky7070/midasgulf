<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Midas Gulf Loans & Overdues Rescheduling Services LLC - Dubai</title>
    <link rel="stylesheet" href="{{ asset('front/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-pro/css/all.min.css') }}">
    @yield('css')
</head>

<body>
    @include('partial.front.header')
    @yield('content')
    @include('partial.front.footer')

    <div id="enquiryModal" class="modal">
        <div class="modal-content">
            <div class="modal-first">
                <span class="close-btn">&times;</span>
                <h2 id="modal-service-title" class="modal-title"></h2>
            </div>
            <p id="modal-subtitle" class="modal-subtitle "></p>

            <div class="modal-last">
                <form class="main-enquiry-form">
                    <input type="hidden" id="hidden-debt-type" name="debt_type">
                    <div class="selection-content">
                        <div class="settlement-options">
                            <!-- Left Section: Debt Settlement -->
                            <div class="option-card option-card-settlement">
                                <div>
                                    <div class="card-icon icon-settlement">
                                        <!-- Document/File Icon SVG -->
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                            <path
                                                d="M14 2H6c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V8l-6-6zm2 14H8v-2h8v2zm0-4H8v-2h8v2zm-4-4V3.5L17.5 9H12z" />
                                        </svg>
                                    </div>
                                    <h3>Debt Settlement</h3>
                                    <p class="service-desc" data-service="settlement">Negotiate housing loan settlements to avoid foreclosure. Protect your home while
                                        reducing outstanding mortgage debt.</p>
                                </div>
                                <a href="{{ route('debt-settlement') }}" class="Card-btn btn-settlement">Apply for
                                    Settlement</a>
                            </div>

                            <!-- Right Section: Debt Restructuring -->
                            <div class="option-card option-card-restructuring">
                                <div>
                                    <div class="card-icon icon-restructuring">
                                        <!-- Refresh/Loop Icon SVG -->
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                            <path
                                                d="M12 4V1L8 5l4 4V6c3.31 0 6 2.69 6 6s-2.69 6-6 6-6-2.69-6-6h-2c0 4.42 3.58 8 8 8s8-3.58 8-8-3.58-8-8-8z" />
                                        </svg>
                                    </div>
                                    <h3>Debt Restructuring</h3>
                                    <p class="service-desc" data-service="restructuring">Extend payment terms and reduce monthly EMI on housing loans. Keep your property
                                        while making payments affordable.</p>
                                </div>
                                <a href="{{ route('debt-restructuring') }}" class="Card-btn btn-restructuring">Apply
                                    for Restructuring</a>
                            </div>
                        </div>
                </form>
            </div>

        </div>
    </div>
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
                            modalSubtitle.textContent = "We will negotiate with banks or other financial institutions regarding installment plans for your unpaid loan. In our company ,Midas Gulf, we also help in Restructuring of your past due payments of your personal and business loans. We also provide legal services in order to clear your Civil case, Travel Ban, and Police case. Our professional team will help you with services such as Credit Repair, Debt Consolidation, Buy out, Bankruptcy services in case of business loans.";
                            break;
                        case "House":
                            modalBox.classList.add("bg-house");
                            modalSubtitle.textContent = "We will negotiate with banks or other financial institutions regarding installment plans for your unpaid loan. In our company ,Midas Gulf, we also help in Restructuring of your past due payments of your personal and business loans. We also provide legal services in order to clear your Civil case, Travel Ban, and Police case. Our professional team will help you with services such as Credit Repair, Debt Consolidation, Buy out, Bankruptcy services in case of business loans..";
                            break;
                        case "Car":
                            modalBox.classList.add("bg-car");
                            modalSubtitle.textContent = "We will negotiate with banks or other financial institutions regarding installment plans for your unpaid loan. In our company ,Midas Gulf, we also help in Restructuring of your past due payments of your personal and business loans. We also provide legal services in order to clear your Civil case, Travel Ban, and Police case. Our professional team will help you with services such as Credit Repair, Debt Consolidation, Buy out, Bankruptcy services in case of business loans.";
                            break;
                        case "Credit Card":
                            modalBox.classList.add("bg-credit");
                            modalSubtitle.textContent = "We will negotiate with banks or other financial institutions regarding installment plans for your unpaid loan. In our company ,Midas Gulf, we also help in Restructuring of your past due payments of your personal and business loans. We also provide legal services in order to clear your Civil case, Travel Ban, and Police case. Our professional team will help you with services such as Credit Repair, Debt Consolidation, Buy out, Bankruptcy services in case of business loans.";
                            break;
                        case "Landlords":
                            modalBox.classList.add("bg-landlords");
                            modalSubtitle.textContent = "We will negotiate with banks or other financial institutions regarding installment plans for your unpaid loan. In our company ,Midas Gulf, we also help in Restructuring of your past due payments of your personal and business loans. We also provide legal services in order to clear your Civil case, Travel Ban, and Police case. Our professional team will help you with services such as Credit Repair, Debt Consolidation, Buy out, Bankruptcy services in case of business loans.";
                            break;
                        case "Vendors":
                            modalBox.classList.add("bg-vendors");
                            modalSubtitle.textContent = "We will negotiate with banks or other financial institutions regarding installment plans for your unpaid loan. In our company ,Midas Gulf, we also help in Restructuring of your past due payments of your personal and business loans. We also provide legal services in order to clear your Civil case, Travel Ban, and Police case. Our professional team will help you with services such as Credit Repair, Debt Consolidation, Buy out, Bankruptcy services in case of business loans.";
                            break;
                        case "Supplier":
                            modalBox.classList.add("bg-supplier");
                            modalSubtitle.textContent = "We will negotiate with banks or other financial institutions regarding installment plans for your unpaid loan. In our company ,Midas Gulf, we also help in Restructuring of your past due payments of your personal and business loans. We also provide legal services in order to clear your Civil case, Travel Ban, and Police case. Our professional team will help you with services such as Credit Repair, Debt Consolidation, Buy out, Bankruptcy services in case of business loans.";
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

</body>
<script>
    function toggleMenu() {
        document.querySelector(".nav-links").style.display =
            document.querySelector(".nav-links").style.display === "flex" ? "none" : "flex";
    }
</script>
<script>
    window.addEventListener("scroll", function() {
        const topBar = document.getElementById("topBar");
        const navbar = document.getElementById("navbar");

        if (window.scrollY > 0) {
            topBar.style.display = "none"; // hide top bar
            navbar.classList.add("fixed");
        } else {
            topBar.style.display = "flex"; // show top bar
            navbar.classList.remove("fixed"); // remove fixed
        }
    });


    const hamburger = document.querySelector('.hamburger');
    const navLinks = document.querySelector('.nav-links');

    hamburger.addEventListener('click', () => {
        navLinks.classList.toggle('active');
    });
</script>

</html>