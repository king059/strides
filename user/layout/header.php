<?php 
$name= 'Giftted';
?>

<style>
    @media only screen and (max-width: 767px) {
        .cc_div {
            display: none !important; /* Hide the cookie consent box on small screens */
        }
        #exchange {
            display: none !important; /* Hide the exchange section */
        }
    }
</style>

<!DOCTYPE html>
<html lang="en" dir="">

<head>
    <title>
        AccountGo SaaS - Dashboard
    </title>

    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>

    <meta name="csrf-token" content="pJNIBMdknSFUpW22umIDSIkDuOPXGAETqJ01Ft8l" />
    <!-- Meta -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- Primary Meta Tags -->
    <meta name="title" content=AccountGo SaaS>
    <meta name="description" content=AccountGo SaaS is an account management software that facilitates ease in revenue calculation by keeping a tab on all the accountancy matters of business.>

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content=#>
    <meta property="og:title" content=AccountGo SaaS>
    <meta property="og:description" content=AccountGo SaaS is an account management software that facilitates ease in revenue calculation by keeping a tab on all the accountancy matters of business.>
    <meta property="og:image" content=1681971772_meta_image.png>

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content=#>
    <meta property="twitter:title" content=AccountGo SaaS>
    <meta property="twitter:description" content=AccountGo SaaS is an account management software that facilitates ease in revenue calculation by keeping a tab on all the accountancy matters of business.>
    <meta property="twitter:image" content=storage/uploads/metaevent/1681971772_meta_image.png>
    <!-- Favicon icon -->
    <link rel="icon" href="storage/uploads/logo/favicon.png?1751567121" type="image" sizes="16x16">
    <script src="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.js"></script>


    <link rel="stylesheet" href="assets/css/plugins/style.css">
    <link rel="stylesheet" href="assets/css/plugins/animate.min.css">

    <link rel="stylesheet" href="assets/css/plugins/datepicker-bs5.min.css">

    <!--bootstrap switch-->
    <link rel="stylesheet" href="assets/css/plugins/bootstrap-switch-button.min.css">


    <!-- font css -->
    <link rel="stylesheet" href="assets/fonts/tabler-icons.min.css">
    <link rel="stylesheet" href="assets/fonts/feather.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome.css">
    <link rel="stylesheet" href="assets/fonts/material.css">
    <link rel="stylesheet" href="assets/css/plugins/main.css">
    <!-- vendor css -->

    <link rel="stylesheet" href="assets/css/plugins/flatpickr.min.css">

    <link rel="stylesheet" href="assets/css/style.css" id="style">

    <link rel="stylesheet" href="assets/css/plugins/dropzone.min.css">
    <link rel="stylesheet" href="assets/css/customizer.css">


    <link rel="stylesheet" href="css/custom.css" id="main-style-link">


    <style>
        :root {
            --color-customColor: theme-6;
        }
    </style>

    <link rel="stylesheet" href="css/custom-color.css">


    <style>
        [dir="rtl"] .dash-sidebar {
            left: auto !important;
        }

        [dir="rtl"] .dash-header {
            left: 0;
            right: 280px;
        }

        [dir="rtl"] .dash-header:not(.transprent-bg) .header-wrapper {
            padding: 0 0 0 30px;
        }

        [dir="rtl"] .dash-header:not(.transprent-bg):not(.dash-mob-header)~.dash-container {
            margin-left: 0px !important;
        }

        [dir="rtl"] .me-auto.dash-mob-drp {
            margin-right: 10px !important;
        }

        [dir="rtl"] .me-auto {
            margin-left: 10px !important;
        }
    </style>

    <!-- Google Translate Script -->
<script type="text/javascript">
  function googleTranslateElementInit() {
    new google.translate.TranslateElement({
      pageLanguage: 'en',
      includedLanguages: 'en,ar,zh-CN,da,de,es,fr,he,it,ja,nl,pl,pt,pt-BR,ru,tr',
      layout: google.translate.TranslateElement.InlineLayout.SIMPLE
    }, 'google_translate_element');
  }
</script>
<script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

</head>


<body class="theme-6">
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    <?php include ('layout/navbar.php'); ?>

    <!-- [ navigation menu ] end -->
    <!-- [ Header ] start -->
    <header class="dash-header  transprent-bg">
        <div class="header-wrapper">
            <div class="me-auto dash-mob-drp">
                <ul class="list-unstyled">
                    <li class="dash-h-item mob-hamburger">
                        <a href="#!" class="dash-head-link" id="mobile-collapse">
                            <div class="hamburger hamburger--arrowturn">
                                <div class="hamburger-box">
                                    <div class="hamburger-inner">
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="dropdown dash-h-item drp-company">
                        <a class="dash-head-link dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">

                        <span class="theme-avtar">
                                                            <img src="storage/uploads/avatar/user_2.jpg"
                                    class="img-fluid rounded border-2 border border-primary">
                                                    </span>
                        <span class="hide-mob ms-2">Hi, <?php echo $name ?>!</span>
                        <i class="ti ti-chevron-down drp-arrow nocolor hide-mob"></i>
                    </a>
                        <div class="dropdown-menu dash-h-dropdown">

                            <a href="profile" class="dropdown-item">
                                <i class="ti ti-user"></i> <span>My Profile</span>
                            </a>

                            <a href="logout" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();" class="dropdown-item">
                                <i class="ti ti-power"></i>
                                <span>Logout</span>
                            </a>
                            <form id="frm-logout" action="logout" method="POST" class="d-none">
                                <input type="hidden" name="_token" value="pJNIBMdknSFUpW22umIDSIkDuOPXGAETqJ01Ft8l" autocomplete="off">
                            </form>



                        </div>
                    </li>

                    <li class="dropdown dash-h-item ml-2">
                        <div class="dropdown notification-icon">
                            <a class="dash-head-link dropdown-toggle arrow-none ms-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                <i class="ti ti-plus "></i>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownBookmark">
                                <a class="dropdown-item" href="#" id="openReminderModal" data-url="user/reminder" data-ajax-popup="true" data-title="Create New Reminder"><i
                                            class="ti ti-shopping-cart"></i>Create New Reminder</a>
                                <a class="dropdown-item" href="#" data-size="lg" data-url="customer/create" data-ajax-popup="true" data-title="Create New Expense"><i
                                            class="ti ti-user"></i>Create New Expense</a>                                            
                                <a class="dropdown-item" href="#" id="openVendorModal" data-size="lg" data-url="vender/create" data-ajax-popup="true" data-title="Create New Vendor"><i
                                            class="ti ti-note"></i>Create New Vendor</a>
                                <a class="dropdown-item" href="proposal/create/0"><i
                                            class="ti ti-file"></i>Create New Proposal</a>
                                <a class="dropdown-item" href="invoice/create/0"><i
                                            class="ti ti-file-invoice"></i>Create New Invoice</a>
                                <a class="dropdown-item" href="bill/create/0"><i
                                            class="ti ti-report-money"></i>Create New Bill</a>
                                <a class="dropdown-item " href="#" data-url="goal/create" data-ajax-popup="true" data-title="Create New Goal"><i
                                            class="ti ti-target "></i>Create New Goal</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="ms-auto" >
                <ul class="list-unstyled" >
                    <li class="dropdown dash-h-item drp-language">
                        <span class="drp-text hide-mob" id='date'></span>
                    </li>
                </ul>
            </div>
            <div class="ms-auto">
                <div id="google_translate_element" style="display:none;"></div>
                <ul class="list-unstyled">
                    <li class="dropdown dash-h-item drp-language">
                        <a class="dash-head-link dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <i class="ti ti-world nocolor"></i>
                        <span class="drp-text hide-mob">English</span>
                        <i class="ti ti-chevron-down drp-arrow nocolor"></i>
                    </a>
                        <div class="dropdown-menu dash-h-dropdown dropdown-menu-end">

                            <a href="#" class="dropdown-item " onclick="translateLanguage('ar')">
                                    <span>Arabic</span>
                                </a>
                            <a href="#" class="dropdown-item " onclick="translateLanguage('zh-CN')">
                                    <span>Chinese</span>
                                </a>
                            <a href="#" class="dropdown-item " onclick="translateLanguage('da')">
                                    <span>Danish</span>
                                </a>
                            <a href="#" class="dropdown-item " onclick="translateLanguage('de')">
                                    <span>German</span>
                                </a>
                            <a href="#" class="dropdown-item" onclick="translateLanguage('en')">
                                    <span>English</span>
                                </a>
                            <a href="#" class="dropdown-item " onclick="translateLanguage('es')">
                                    <span>Spanish</span>
                                </a>
                            <a href="#" class="dropdown-item " onclick="translateLanguage('fr')">
                                    <span>French</span>
                                </a>
                            <a href="#" class="dropdown-item " onclick="translateLanguage('he')">
                                    <span>Hebrew</span>
                                </a>
                            <a href="change-language/it" class="dropdown-item " onclick="translateLanguage('it')">
                                    <span>Italian</span>
                                </a>
                            <a href="#" class="dropdown-item " onclick="translateLanguage('ja')">
                                    <span>Japanese</span>
                                </a>
                            <a href="#" class="dropdown-item " onclick="translateLanguage('nl')">
                                    <span>Dutch</span>
                                </a>
                            <a href="#" class="dropdown-item " onclick="translateLanguage('pl')">
                                    <span>Polish</span>
                                </a>
                            <a href="#" class="dropdown-item " onclick="translateLanguage('pt')">
                                    <span>Portuguese</span>
                                </a>
                            <a href="#" class="dropdown-item " onclick="translateLanguage('ru')">
                                    <span>Russian</span>
                                </a>
                            <a href="#" class="dropdown-item " onclick="translateLanguage('tr')">
                                    <span>Turkish</span>
                                </a>
                            <a href="#" class="dropdown-item " onclick="translateLanguage('pt-Br')">
                                    <span>Portuguese(Brazil)</span>
                                </a>




                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </header>

    <!-- Modal -->
    <div class="modal notification-modal fade" id="notification-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close"></button>
                    <h6 class="mt-2">
                        <i data-feather="monitor" class="me-2"></i>Desktop settings
                    </h6>
                    <hr />
                    <div class="form-check form-switch">
                        <input type="checkbox" class="form-check-input" id="pcsetting1" checked />
                        <label class="form-check-label f-w-600 pl-1" for="pcsetting1">Allow desktop
                            notification</label>
                    </div>
                    <p class="text-muted ms-5">
                        you get lettest content at a time when data will updated
                    </p>
                    <div class="form-check form-switch">
                        <input type="checkbox" class="form-check-input" id="pcsetting2" />
                        <label class="form-check-label f-w-600 pl-1" for="pcsetting2">Store Cookie</label>
                    </div>
                    <h6 class="mb-0 mt-5">
                        <i data-feather="save" class="me-2"></i>Application settings
                    </h6>
                    <hr />
                    <div class="form-check form-switch">
                        <input type="checkbox" class="form-check-input" id="pcsetting3" />
                        <label class="form-check-label f-w-600 pl-1" for="pcsetting3">Backup Storage</label>
                    </div>
                    <p class="text-muted mb-4 ms-5">
                        Automaticaly take backup as par schedule
                    </p>
                    <div class="form-check form-switch">
                        <input type="checkbox" class="form-check-input" id="pcsetting4" />
                        <label class="form-check-label f-w-600 pl-1" for="pcsetting4">Allow guest to print
                            file</label>
                    </div>
                    <h6 class="mb-0 mt-5">
                        <i data-feather="cpu" class="me-2"></i>System settings
                    </h6>
                    <hr />
                    <div class="form-check form-switch">
                        <input type="checkbox" class="form-check-input" id="pcsetting5" checked />
                        <label class="form-check-label f-w-600 pl-1" for="pcsetting5">View other user chat</label>
                    </div>
                    <p class="text-muted ms-5">Allow to show public user message</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-danger btn-sm" data-bs-dismiss="modal">
                        Close
                    </button>
                    <button type="button" class="btn btn-light-primary btn-sm">
                        Save changes
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- [ Header ] end -->
