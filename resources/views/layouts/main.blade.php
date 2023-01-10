<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="robots" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="CryptoZone : Crypto Trading Admin Bootstrap 5 Template">
    <meta property="og:title" content="CryptoZone  :Crypto Trading Admin Bootstrap 5 Template">
    <meta property="og:description" content="CryptoZone  :Crypto Trading Admin  Admin Bootstrap 5 Template">
    <meta property="og:image" content="https://cryptozone.dexignzone.com/xhtml/social-image.png">
    <meta name="format-detection" content="telephone=no">

    <!-- PAGE TITLE HERE -->
    <title>CryptoZone Crypto Trading Admin</title>

    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="images/favicon.png">
    <link href="./vendor/swiper/css/swiper-bundle.min.css" rel="stylesheet">
    <link href="./vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.6.4/nouislider.min.css">

    <!-- Style css -->
    <link href="./css/style.css" rel="stylesheet">

</head>
<body>

<!--*******************
    Preloader start
********************-->
<div id="loader">
</div>
<!--*******************
    Preloader end
********************-->

<!--**********************************
    Main wrapper start
***********************************-->
<div id="main-wrapper">
    <!--**********************************
        Nav header start
    ***********************************-->
    <div class="nav-header">
        <a href="index.html" class="brand-logo">
            <img src="images/logo/logo.png" class="logo-abbr" alt="">
            <img src="images/logo/logo-text.png" class="brand-title" alt="">
            <img src="images/logo/logo-color.png" class="logo-color" alt="">
            <img src="images/logo/logo-text-color.png" class="brand-title color-title" alt="">
        </a>
        <div class="nav-control">
            <div class="hamburger">
                <span class="line"></span><span class="line"></span><span class="line"></span>
                <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="22" y="11" width="4" height="4" rx="2" fill="#2A353A"/>
                    <rect x="11" width="4" height="4" rx="2" fill="#2A353A"/>
                    <rect x="22" width="4" height="4" rx="2" fill="#2A353A"/>
                    <rect x="11" y="11" width="4" height="4" rx="2" fill="#2A353A"/>
                    <rect x="11" y="22" width="4" height="4" rx="2" fill="#2A353A"/>
                    <rect width="4" height="4" rx="2" fill="#2A353A"/>
                    <rect y="11" width="4" height="4" rx="2" fill="#2A353A"/>
                    <rect x="22" y="22" width="4" height="4" rx="2" fill="#2A353A"/>
                    <rect y="22" width="4" height="4" rx="2" fill="#2A353A"/>
                </svg>
            </div>
        </div>
    </div>
    <!--**********************************
        Nav header end
    ***********************************-->

    <!--**********************************
        Chat box start
    ***********************************-->
    <div class="chatbox">
        <div class="chatbox-close"></div>
        <div class="custom-tab-1">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#notes">Notes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#alerts">Alerts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" data-bs-toggle="tab" href="#chat">Chat</a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade active show" id="chat" role="tabpanel">
                    <div class="card mb-sm-3 mb-md-0 contacts_card dz-chat-user-box">
                        <div class="card-header chat-list-header text-center">
                            <a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect fill="#000000" x="4" y="11" width="16" height="2" rx="1"/><rect fill="#000000" opacity="1.0" transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) " x="4" y="11" width="16" height="2" rx="1"/></g></svg></a>
                            <div>
                                <h6 class="mb-1">Chat List</h6>
                                <p class="mb-0">Show All</p>
                            </div>
                            <a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg></a>
                        </div>
                        <div class="card-body contacts_body p-0 dz-scroll  " id="DZ_W_Contacts_Body">
                            <ul class="contacts">
                                <li class="name-first-letter">A</li>
                                <li class="active dz-chat-user">
                                    <div class="d-flex bd-highlight">
                                        <div class="img_cont">
                                            <img src="images/avatar/1.jpg" class="rounded-circle user_img" alt="">
                                            <span class="online_icon"></span>
                                        </div>
                                        <div class="user_info">
                                            <span>Archie Parker</span>
                                            <p>Kalid is online</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="dz-chat-user">
                                    <div class="d-flex bd-highlight">
                                        <div class="img_cont">
                                            <img src="images/avatar/2.jpg" class="rounded-circle user_img" alt="">
                                            <span class="online_icon offline"></span>
                                        </div>
                                        <div class="user_info">
                                            <span>Alfie Mason</span>
                                            <p>Taherah left 7 mins ago</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="dz-chat-user">
                                    <div class="d-flex bd-highlight">
                                        <div class="img_cont">
                                            <img src="images/avatar/3.jpg" class="rounded-circle user_img" alt="">
                                            <span class="online_icon"></span>
                                        </div>
                                        <div class="user_info">
                                            <span>AharlieKane</span>
                                            <p>Sami is online</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="dz-chat-user">
                                    <div class="d-flex bd-highlight">
                                        <div class="img_cont">
                                            <img src="images/avatar/4.jpg" class="rounded-circle user_img" alt="">
                                            <span class="online_icon offline"></span>
                                        </div>
                                        <div class="user_info">
                                            <span>Athan Jacoby</span>
                                            <p>Nargis left 30 mins ago</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="name-first-letter">B</li>
                                <li class="dz-chat-user">
                                    <div class="d-flex bd-highlight">
                                        <div class="img_cont">
                                            <img src="images/avatar/5.jpg" class="rounded-circle user_img" alt="">
                                            <span class="online_icon offline"></span>
                                        </div>
                                        <div class="user_info">
                                            <span>Bashid Samim</span>
                                            <p>Rashid left 50 mins ago</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="dz-chat-user">
                                    <div class="d-flex bd-highlight">
                                        <div class="img_cont">
                                            <img src="images/avatar/1.jpg" class="rounded-circle user_img" alt="">
                                            <span class="online_icon"></span>
                                        </div>
                                        <div class="user_info">
                                            <span>Breddie Ronan</span>
                                            <p>Kalid is online</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="dz-chat-user">
                                    <div class="d-flex bd-highlight">
                                        <div class="img_cont">
                                            <img src="images/avatar/2.jpg" class="rounded-circle user_img" alt="">
                                            <span class="online_icon offline"></span>
                                        </div>
                                        <div class="user_info">
                                            <span>Ceorge Carson</span>
                                            <p>Taherah left 7 mins ago</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="name-first-letter">D</li>
                                <li class="dz-chat-user">
                                    <div class="d-flex bd-highlight">
                                        <div class="img_cont">
                                            <img src="images/avatar/3.jpg" class="rounded-circle user_img" alt="">
                                            <span class="online_icon"></span>
                                        </div>
                                        <div class="user_info">
                                            <span>Darry Parker</span>
                                            <p>Sami is online</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="dz-chat-user">
                                    <div class="d-flex bd-highlight">
                                        <div class="img_cont">
                                            <img src="images/avatar/4.jpg" class="rounded-circle user_img" alt="">
                                            <span class="online_icon offline"></span>
                                        </div>
                                        <div class="user_info">
                                            <span>Denry Hunter</span>
                                            <p>Nargis left 30 mins ago</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="name-first-letter">J</li>
                                <li class="dz-chat-user">
                                    <div class="d-flex bd-highlight">
                                        <div class="img_cont">
                                            <img src="images/avatar/5.jpg" class="rounded-circle user_img" alt="">
                                            <span class="online_icon offline"></span>
                                        </div>
                                        <div class="user_info">
                                            <span>Jack Ronan</span>
                                            <p>Rashid left 50 mins ago</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="dz-chat-user">
                                    <div class="d-flex bd-highlight">
                                        <div class="img_cont">
                                            <img src="images/avatar/1.jpg" class="rounded-circle user_img" alt="">
                                            <span class="online_icon"></span>
                                        </div>
                                        <div class="user_info">
                                            <span>Jacob Tucker</span>
                                            <p>Kalid is online</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="dz-chat-user">
                                    <div class="d-flex bd-highlight">
                                        <div class="img_cont">
                                            <img src="images/avatar/2.jpg" class="rounded-circle user_img" alt="">
                                            <span class="online_icon offline"></span>
                                        </div>
                                        <div class="user_info">
                                            <span>James Logan</span>
                                            <p>Taherah left 7 mins ago</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="dz-chat-user">
                                    <div class="d-flex bd-highlight">
                                        <div class="img_cont">
                                            <img src="images/avatar/3.jpg" class="rounded-circle user_img" alt="">
                                            <span class="online_icon"></span>
                                        </div>
                                        <div class="user_info">
                                            <span>Joshua Weston</span>
                                            <p>Sami is online</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="name-first-letter">O</li>
                                <li class="dz-chat-user">
                                    <div class="d-flex bd-highlight">
                                        <div class="img_cont">
                                            <img src="images/avatar/4.jpg" class="rounded-circle user_img" alt="">
                                            <span class="online_icon offline"></span>
                                        </div>
                                        <div class="user_info">
                                            <span>Oliver Acker</span>
                                            <p>Nargis left 30 mins ago</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="dz-chat-user">
                                    <div class="d-flex bd-highlight">
                                        <div class="img_cont">
                                            <img src="images/avatar/5.jpg" class="rounded-circle user_img" alt="">
                                            <span class="online_icon offline"></span>
                                        </div>
                                        <div class="user_info">
                                            <span>Oscar Weston</span>
                                            <p>Rashid left 50 mins ago</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card chat dz-chat-history-box d-none">
                        <div class="card-header chat-list-header text-center">
                            <a href="javascript:void(0);" class="dz-chat-history-back">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><polygon points="0 0 24 0 24 24 0 24"/><rect fill="#000000" opacity="0.3" transform="translate(15.000000, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-15.000000, -12.000000) " x="14" y="7" width="2" height="10" rx="1"/><path d="M3.7071045,15.7071045 C3.3165802,16.0976288 2.68341522,16.0976288 2.29289093,15.7071045 C1.90236664,15.3165802 1.90236664,14.6834152 2.29289093,14.2928909 L8.29289093,8.29289093 C8.67146987,7.914312 9.28105631,7.90106637 9.67572234,8.26284357 L15.6757223,13.7628436 C16.0828413,14.136036 16.1103443,14.7686034 15.7371519,15.1757223 C15.3639594,15.5828413 14.7313921,15.6103443 14.3242731,15.2371519 L9.03007346,10.3841355 L3.7071045,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(9.000001, 11.999997) scale(-1, -1) rotate(90.000000) translate(-9.000001, -11.999997) "/></g></svg>
                            </a>
                            <div>
                                <h6 class="mb-1">Chat with Khelesh</h6>
                                <p class="mb-0 text-success">Online</p>
                            </div>
                            <div class="dropdown">
                                <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg></a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li class="dropdown-item"><i class="fa fa-user-circle text-primary me-2"></i> View profile</li>
                                    <li class="dropdown-item"><i class="fa fa-users text-primary me-2"></i> Add to btn-close friends</li>
                                    <li class="dropdown-item"><i class="fa fa-plus text-primary me-2"></i> Add to group</li>
                                    <li class="dropdown-item"><i class="fa fa-ban text-primary me-2"></i> Block</li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body msg_card_body dz-scroll" id="DZ_W_Contacts_Body3">
                            <div class="d-flex justify-content-start mb-4">
                                <div class="img_cont_msg">
                                    <img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="">
                                </div>
                                <div class="msg_cotainer">
                                    Hi, how are you samim?
                                    <span class="msg_time">8:40 AM, Today</span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end mb-4">
                                <div class="msg_cotainer_send">
                                    Hi Khalid i am good tnx how about you?
                                    <span class="msg_time_send">8:55 AM, Today</span>
                                </div>
                                <div class="img_cont_msg">
                                    <img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="">
                                </div>
                            </div>
                            <div class="d-flex justify-content-start mb-4">
                                <div class="img_cont_msg">
                                    <img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="">
                                </div>
                                <div class="msg_cotainer">
                                    I am good too, thank you for your chat template
                                    <span class="msg_time">9:00 AM, Today</span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end mb-4">
                                <div class="msg_cotainer_send">
                                    You are welcome
                                    <span class="msg_time_send">9:05 AM, Today</span>
                                </div>
                                <div class="img_cont_msg">
                                    <img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="">
                                </div>
                            </div>
                            <div class="d-flex justify-content-start mb-4">
                                <div class="img_cont_msg">
                                    <img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="">
                                </div>
                                <div class="msg_cotainer">
                                    I am looking for your next templates
                                    <span class="msg_time">9:07 AM, Today</span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end mb-4">
                                <div class="msg_cotainer_send">
                                    Ok, thank you have a good day
                                    <span class="msg_time_send">9:10 AM, Today</span>
                                </div>
                                <div class="img_cont_msg">
                                    <img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="">
                                </div>
                            </div>
                            <div class="d-flex justify-content-start mb-4">
                                <div class="img_cont_msg">
                                    <img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="">
                                </div>
                                <div class="msg_cotainer">
                                    Bye, see you
                                    <span class="msg_time">9:12 AM, Today</span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-start mb-4">
                                <div class="img_cont_msg">
                                    <img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="">
                                </div>
                                <div class="msg_cotainer">
                                    Hi, how are you samim?
                                    <span class="msg_time">8:40 AM, Today</span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end mb-4">
                                <div class="msg_cotainer_send">
                                    Hi Khalid i am good tnx how about you?
                                    <span class="msg_time_send">8:55 AM, Today</span>
                                </div>
                                <div class="img_cont_msg">
                                    <img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="">
                                </div>
                            </div>
                            <div class="d-flex justify-content-start mb-4">
                                <div class="img_cont_msg">
                                    <img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="">
                                </div>
                                <div class="msg_cotainer">
                                    I am good too, thank you for your chat template
                                    <span class="msg_time">9:00 AM, Today</span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end mb-4">
                                <div class="msg_cotainer_send">
                                    You are welcome
                                    <span class="msg_time_send">9:05 AM, Today</span>
                                </div>
                                <div class="img_cont_msg">
                                    <img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="">
                                </div>
                            </div>
                            <div class="d-flex justify-content-start mb-4">
                                <div class="img_cont_msg">
                                    <img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="">
                                </div>
                                <div class="msg_cotainer">
                                    I am looking for your next templates
                                    <span class="msg_time">9:07 AM, Today</span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end mb-4">
                                <div class="msg_cotainer_send">
                                    Ok, thank you have a good day
                                    <span class="msg_time_send">9:10 AM, Today</span>
                                </div>
                                <div class="img_cont_msg">
                                    <img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="">
                                </div>
                            </div>
                            <div class="d-flex justify-content-start mb-4">
                                <div class="img_cont_msg">
                                    <img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="">
                                </div>
                                <div class="msg_cotainer">
                                    Bye, see you
                                    <span class="msg_time">9:12 AM, Today</span>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer type_msg">
                            <div class="input-group">
                                <textarea class="form-control" placeholder="Type your message..."></textarea>
                                <div class="input-group-append">
                                    <button type="button" class="btn btn-primary"><i class="fa fa-location-arrow"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="alerts" role="tabpanel">
                    <div class="card mb-sm-3 mb-md-0 contacts_card">
                        <div class="card-header chat-list-header text-center">
                            <a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg></a>
                            <div>
                                <h6 class="mb-1">Notications</h6>
                                <p class="mb-0">Show All</p>
                            </div>
                            <a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="1"/><path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"/></g></svg></a>
                        </div>
                        <div class="card-body contacts_body p-0 dz-scroll" id="DZ_W_Contacts_Body1">
                            <ul class="contacts">
                                <li class="name-first-letter">SEVER STATUS</li>
                                <li class="active">
                                    <div class="d-flex bd-highlight">
                                        <div class="img_cont primary">KK</div>
                                        <div class="user_info">
                                            <span>David Nester Birthday</span>
                                            <p class="text-primary">Today</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="name-first-letter">SOCIAL</li>
                                <li>
                                    <div class="d-flex bd-highlight">
                                        <div class="img_cont success">RU</div>
                                        <div class="user_info">
                                            <span>Perfection Simplified</span>
                                            <p>Jame Smith commented on your status</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="name-first-letter">SEVER STATUS</li>
                                <li>
                                    <div class="d-flex bd-highlight">
                                        <div class="img_cont primary">AU</div>
                                        <div class="user_info">
                                            <span>AharlieKane</span>
                                            <p>Sami is online</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex bd-highlight">
                                        <div class="img_cont info">MO</div>
                                        <div class="user_info">
                                            <span>Athan Jacoby</span>
                                            <p>Nargis left 30 mins ago</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="card-footer"></div>
                    </div>
                </div>
                <div class="tab-pane fade" id="notes">
                    <div class="card mb-sm-3 mb-md-0 note_card">
                        <div class="card-header chat-list-header text-center">
                            <a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect fill="#000000" x="4" y="11" width="16" height="2" rx="1"/><rect fill="#000000" opacity="1.0" transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) " x="4" y="11" width="16" height="2" rx="1"/></g></svg></a>
                            <div>
                                <h6 class="mb-1">Notes</h6>
                                <p class="mb-0">Add New Nots</p>
                            </div>
                            <a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="1"/><path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"/></g></svg></a>
                        </div>
                        <div class="card-body contacts_body p-0 dz-scroll" id="DZ_W_Contacts_Body2">
                            <ul class="contacts">
                                <li class="active">
                                    <div class="d-flex bd-highlight">
                                        <div class="user_info">
                                            <span>New order placed..</span>
                                            <p>10 Aug 2020</p>
                                        </div>
                                        <div class="ms-auto">
                                            <a href="javascript:void(0);" class="btn btn-primary btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                            <a href="javascript:void(0);" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex bd-highlight">
                                        <div class="user_info">
                                            <span>Youtube, a video-sharing website..</span>
                                            <p>10 Aug 2020</p>
                                        </div>
                                        <div class="ms-auto">
                                            <a href="javascript:void(0);" class="btn btn-primary btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                            <a href="javascript:void(0);" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex bd-highlight">
                                        <div class="user_info">
                                            <span>john just buy your product..</span>
                                            <p>10 Aug 2020</p>
                                        </div>
                                        <div class="ms-auto">
                                            <a href="javascript:void(0);" class="btn btn-primary btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                            <a href="javascript:void(0);" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex bd-highlight">
                                        <div class="user_info">
                                            <span>Athan Jacoby</span>
                                            <p>10 Aug 2020</p>
                                        </div>
                                        <div class="ms-auto">
                                            <a href="javascript:void(0);" class="btn btn-primary btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                            <a href="javascript:void(0);" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--**********************************
        Chat box End
    ***********************************-->

    <!--**********************************
        Header start
    ***********************************-->
    <div class="header">
        <div class="header-content">
            <nav class="navbar navbar-expand">
                <div class="collapse navbar-collapse justify-content-between">
                    <div class="header-left">
                        <div class="dashboard_bar">
                            Dashboard
                        </div>
                    </div>
                    <div class="navbar-nav header-right">
                        <div class="nav-item d-flex align-items-center">
                            <div class="input-group search-area">
									<span class="input-group-text"><a href="javascript:void(0)"><svg width="24" height="24" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M27.414 24.586L22.337 19.509C23.386 17.928 24 16.035 24 14C24 8.486 19.514 4 14 4C8.486 4 4 8.486 4 14C4 19.514 8.486 24 14 24C16.035 24 17.928 23.386 19.509 22.337L24.586 27.414C25.366 28.195 26.634 28.195 27.414 27.414C28.195 26.633 28.195 25.367 27.414 24.586ZM7 14C7 10.14 10.14 7 14 7C17.86 7 21 10.14 21 14C21 17.86 17.86 21 14 21C10.14 21 7 17.86 7 14Z" fill="var(--secondary)"/>
										</svg>
										</a></span>
                                <input type="text" class="form-control" placeholder="Search here...">
                            </div>
                        </div>
                        <div class="dz-side-menu">
                            <div class="search-coundry d-flex align-items-center">
                                <img src="images/United.png" alt="">
                                <select class="default-select dashboard-select image-select">
                                    <option data-display="Eng">Eng</option>
                                    <option value="2">Af</option>
                                    <option value="2">Al</option>
                                </select>
                            </div>
                            <div class="sidebar-social-link ">
                                <ul>
                                    <li class="nav-item dropdown notification_dropdown">
                                        <a class="nav-link " href="javascript:void(0);" data-bs-toggle="dropdown">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M20.4023 13.4798C20.7599 13.6577 21.0359 13.9387 21.23 14.2197C21.6082 14.8003 21.5775 15.5121 21.2096 16.1395L20.4942 17.2634C20.1161 17.8627 19.411 18.2373 18.6854 18.2373C18.3277 18.2373 17.9291 18.1437 17.6021 17.9564C17.3364 17.7972 17.0298 17.741 16.7028 17.741C15.691 17.741 14.8428 18.5183 14.8121 19.4455C14.8121 20.5225 13.8719 21.3653 12.6967 21.3653H11.3068C10.1214 21.3653 9.18116 20.5225 9.18116 19.4455C9.16072 18.5183 8.3125 17.741 7.30076 17.741C6.96351 17.741 6.65693 17.7972 6.40144 17.9564C6.07441 18.1437 5.66563 18.2373 5.31816 18.2373C4.58235 18.2373 3.8772 17.8627 3.49908 17.2634L2.79393 16.1395C2.4158 15.5308 2.39536 14.8003 2.77349 14.2197C2.937 13.9387 3.24359 13.6577 3.59106 13.4798C3.8772 13.3487 4.06116 13.1333 4.23489 12.8804C4.74587 12.075 4.43928 11.0167 3.57062 10.5391C2.55888 10.0053 2.23185 8.81591 2.81437 7.88875L3.49908 6.78366C4.09181 5.8565 5.35904 5.52871 6.381 6.0719C7.2701 6.52143 8.42491 6.22174 8.94611 5.4257C9.10962 5.16347 9.2016 4.88251 9.18116 4.60156C9.16072 4.23631 9.27314 3.8898 9.46731 3.60884C9.84543 3.0282 10.5301 2.65359 11.2762 2.63486H12.7171C13.4734 2.63486 14.1581 3.0282 14.5362 3.60884C14.7202 3.8898 14.8428 4.23631 14.8121 4.60156C14.7917 4.88251 14.8837 5.16347 15.0472 5.4257C15.5684 6.22174 16.7232 6.52143 17.6225 6.0719C18.6343 5.52871 19.9117 5.8565 20.4942 6.78366L21.1789 7.88875C21.7717 8.81591 21.4447 10.0053 20.4227 10.5391C19.554 11.0167 19.2474 12.075 19.7686 12.8804C19.9322 13.1333 20.1161 13.3487 20.4023 13.4798ZM9.10962 12.0095C9.10962 13.4798 10.4075 14.6505 12.012 14.6505C13.6165 14.6505 14.8837 13.4798 14.8837 12.0095C14.8837 10.5391 13.6165 9.3591 12.012 9.3591C10.4075 9.3591 9.10962 10.5391 9.10962 12.0095Z" fill="#130F26"/>
                                            </svg>

                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <div id="DZ_W_TimeLine02" class="widget-timeline dz-scroll style-1 p-3 height370">
                                                <h4 class="text-center border-bottom pb-2">Notications</h4>
                                                <ul class="timeline">
                                                    <li>
                                                        <div class="timeline-badge primary"></div>
                                                        <a class="timeline-panel text-muted" href="javascript:void(0);">
                                                            <span>10 minutes ago</span>
                                                            <h6 class="mb-0">Youtube, a video-sharing website, goes live <strong class="text-primary">$500</strong>.</h6>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <div class="timeline-badge info">
                                                        </div>
                                                        <a class="timeline-panel text-muted" href="javascript:void(0);">
                                                            <span>20 minutes ago</span>
                                                            <h6 class="mb-0">New order placed <strong class="text-info">#XF-2356.</strong></h6>
                                                            <p class="mb-0">Quisque a consequat ante Sit amet magna at volutapt...</p>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <div class="timeline-badge danger">
                                                        </div>
                                                        <a class="timeline-panel text-muted" href="javascript:void(0);">
                                                            <span>30 minutes ago</span>
                                                            <h6 class="mb-0">john just buy your product <strong class="text-warning">Sell $250</strong></h6>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <div class="timeline-badge success">
                                                        </div>
                                                        <a class="timeline-panel text-muted" href="javascript:void(0);">
                                                            <span>15 minutes ago</span>
                                                            <h6 class="mb-0">StumbleUpon is acquired by eBay. </h6>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <div class="timeline-badge warning">
                                                        </div>
                                                        <a class="timeline-panel text-muted" href="javascript:void(0);">
                                                            <span>20 minutes ago</span>
                                                            <h6 class="mb-0">Mashable, a news website and blog, goes live.</h6>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <div class="timeline-badge dark">
                                                        </div>
                                                        <a class="timeline-panel text-muted" href="javascript:void(0);">
                                                            <span>20 minutes ago</span>
                                                            <h6 class="mb-0">Mashable, a news website and blog, goes live.</h6>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <div class="timeline-badge primary"></div>
                                                        <a class="timeline-panel text-muted" href="javascript:void(0);">
                                                            <span>10 minutes ago</span>
                                                            <h6 class="mb-0">Youtube, a video-sharing website, goes live <strong class="text-primary">$500</strong>.</h6>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <div class="timeline-badge info">
                                                        </div>
                                                        <a class="timeline-panel text-muted" href="javascript:void(0);">
                                                            <span>20 minutes ago</span>
                                                            <h6 class="mb-0">New order placed <strong class="text-info">#XF-2356.</strong></h6>
                                                            <p class="mb-0">Quisque a consequat ante Sit amet magna at volutapt...</p>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <div class="timeline-badge danger">
                                                        </div>
                                                        <a class="timeline-panel text-muted" href="javascript:void(0);">
                                                            <span>30 minutes ago</span>
                                                            <h6 class="mb-0">john just buy your product <strong class="text-warning">Sell $250</strong></h6>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <div class="timeline-badge success">
                                                        </div>
                                                        <a class="timeline-panel text-muted" href="javascript:void(0);">
                                                            <span>15 minutes ago</span>
                                                            <h6 class="mb-0">StumbleUpon is acquired by eBay. </h6>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <div class="timeline-badge warning">
                                                        </div>
                                                        <a class="timeline-panel text-muted" href="javascript:void(0);">
                                                            <span>20 minutes ago</span>
                                                            <h6 class="mb-0">Mashable, a news website and blog, goes live.</h6>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <div class="timeline-badge dark">
                                                        </div>
                                                        <a class="timeline-panel text-muted" href="javascript:void(0);">
                                                            <span>20 minutes ago</span>
                                                            <h6 class="mb-0">Mashable, a news website and blog, goes live.</h6>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <a class="all-notification" href="javascript:void(0);">See all notifications <i class="ti-arrow-end"></i></a>
                                        </div>
                                    </li>

                                    <li class="nav-item dropdown notification_dropdown">
                                        <a class="nav-link bell-link " href="javascript:void(0);">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M16.9394 3.57129C18.2804 3.57129 19.5704 4.06765 20.5194 4.95828C21.4694 5.84704 22.0004 7.04579 22.0004 8.30073V15.6993C22.0004 18.3122 19.7304 20.4287 16.9394 20.4287H7.0604C4.2694 20.4287 2.0004 18.3122 2.0004 15.6993V8.30073C2.0004 5.68783 4.2594 3.57129 7.0604 3.57129H16.9394ZM18.5304 9.69615L18.6104 9.62123C18.8494 9.34964 18.8494 8.9563 18.5994 8.68471C18.4604 8.54517 18.2694 8.45994 18.0704 8.44121C17.8604 8.43091 17.6604 8.4974 17.5094 8.62852L13.0004 12C12.4204 12.4505 11.5894 12.4505 11.0004 12L6.5004 8.62852C6.1894 8.41312 5.7594 8.44121 5.5004 8.69407C5.2304 8.94693 5.2004 9.34964 5.4294 9.6306L5.5604 9.75234L10.1104 13.077C10.6704 13.4891 11.3494 13.7138 12.0604 13.7138C12.7694 13.7138 13.4604 13.4891 14.0194 13.077L18.5304 9.69615Z" fill="#130F26"/>
                                            </svg>

                                        </a>
                                    </li>
                                    <li class="nav-item dropdown notification_dropdown">
                                        <a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
                                            <svg width="24" height="23" viewBox="0 0 24 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M18.7071 8.56414C18.7071 9.74035 19.039 10.4336 19.7695 11.2325C20.3231 11.8211 20.5 12.5766 20.5 13.3963C20.5 14.215 20.2128 14.9923 19.6373 15.6233C18.884 16.3798 17.8215 16.8627 16.7372 16.9466C15.1659 17.0721 13.5937 17.1777 12.0005 17.1777C10.4063 17.1777 8.83505 17.1145 7.26375 16.9466C6.17846 16.8627 5.11602 16.3798 4.36367 15.6233C3.78822 14.9923 3.5 14.215 3.5 13.3963C3.5 12.5766 3.6779 11.8211 4.23049 11.2325C4.98384 10.4336 5.29392 9.74035 5.29392 8.56414V8.16515C5.29392 6.58996 5.71333 5.55995 6.577 4.55164C7.86106 3.08114 9.91935 2.19922 11.9558 2.19922H12.0452C14.1254 2.19922 16.2502 3.12359 17.5125 4.65728C18.3314 5.64484 18.7071 6.63146 18.7071 8.16515V8.56414ZM9.07367 19.1136C9.07367 18.642 9.53582 18.426 9.96318 18.3336C10.4631 18.2345 13.5093 18.2345 14.0092 18.3336C14.4366 18.426 14.8987 18.642 14.8987 19.1136C14.8738 19.5626 14.5926 19.9606 14.204 20.2134C13.7001 20.5813 13.1088 20.8143 12.4906 20.8982C12.1487 20.9397 11.8128 20.9407 11.4828 20.8982C10.8636 20.8143 10.2723 20.5813 9.76938 20.2125C9.37978 19.9606 9.09852 19.5626 9.07367 19.1136Z" fill="#130F26"/>
                                            </svg>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <div id="DZ_W_Notification1" class="widget-media dz-scroll p-3" style="height:380px;">
                                                <ul class="timeline">
                                                    <li>
                                                        <div class="timeline-panel">
                                                            <div class="media me-2">
                                                                <img alt="image" width="50" src="images/avatar/1.jpg">
                                                            </div>
                                                            <div class="media-body">
                                                                <h6 class="mb-1">Dr sultads Send you Photo</h6>
                                                                <small class="d-block">29 July 2020 - 02:26 PM</small>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="timeline-panel">
                                                            <div class="media me-2 media-info">
                                                                KG
                                                            </div>
                                                            <div class="media-body">
                                                                <h6 class="mb-1">Resport created successfully</h6>
                                                                <small class="d-block">29 July 2020 - 02:26 PM</small>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="timeline-panel">
                                                            <div class="media me-2 media-success">
                                                                <i class="fa fa-home"></i>
                                                            </div>
                                                            <div class="media-body">
                                                                <h6 class="mb-1">Reminder : Treatment Time!</h6>
                                                                <small class="d-block">29 July 2020 - 02:26 PM</small>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="timeline-panel">
                                                            <div class="media me-2">
                                                                <img alt="image" width="50" src="images/avatar/1.jpg">
                                                            </div>
                                                            <div class="media-body">
                                                                <h6 class="mb-1">Dr sultads Send you Photo</h6>
                                                                <small class="d-block">29 July 2020 - 02:26 PM</small>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="timeline-panel">
                                                            <div class="media me-2 media-danger">
                                                                KG
                                                            </div>
                                                            <div class="media-body">
                                                                <h6 class="mb-1">Resport created successfully</h6>
                                                                <small class="d-block">29 July 2020 - 02:26 PM</small>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="timeline-panel">
                                                            <div class="media me-2 media-primary">
                                                                <i class="fa fa-home"></i>
                                                            </div>
                                                            <div class="media-body">
                                                                <h6 class="mb-1">Reminder : Treatment Time!</h6>
                                                                <small class="d-block">29 July 2020 - 02:26 PM</small>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="timeline-panel">
                                                            <div class="media me-2">
                                                                <img alt="image" width="50" src="images/avatar/1.jpg">
                                                            </div>
                                                            <div class="media-body">
                                                                <h6 class="mb-1">Dr sultads Send you Photo</h6>
                                                                <small class="d-block">29 July 2020 - 02:26 PM</small>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="timeline-panel">
                                                            <div class="media me-2 media-info">
                                                                KG
                                                            </div>
                                                            <div class="media-body">
                                                                <h6 class="mb-1">Resport created successfully</h6>
                                                                <small class="d-block">29 July 2020 - 02:26 PM</small>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="timeline-panel">
                                                            <div class="media me-2 media-success">
                                                                <i class="fa fa-home"></i>
                                                            </div>
                                                            <div class="media-body">
                                                                <h6 class="mb-1">Reminder : Treatment Time!</h6>
                                                                <small class="d-block">29 July 2020 - 02:26 PM</small>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="timeline-panel">
                                                            <div class="media me-2">
                                                                <img alt="image" width="50" src="images/avatar/1.jpg">
                                                            </div>
                                                            <div class="media-body">
                                                                <h6 class="mb-1">Dr sultads Send you Photo</h6>
                                                                <small class="d-block">29 July 2020 - 02:26 PM</small>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="timeline-panel">
                                                            <div class="media me-2 media-danger">
                                                                KG
                                                            </div>
                                                            <div class="media-body">
                                                                <h6 class="mb-1">Resport created successfully</h6>
                                                                <small class="d-block">29 July 2020 - 02:26 PM</small>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="timeline-panel">
                                                            <div class="media me-2 media-primary">
                                                                <i class="fa fa-home"></i>
                                                            </div>
                                                            <div class="media-body">
                                                                <h6 class="mb-1">Reminder : Treatment Time!</h6>
                                                                <small class="d-block">29 July 2020 - 02:26 PM</small>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <a class="all-notification" href="javascript:void(0);">See all notifications <i class="ti-arrow-end"></i></a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <ul>
                                <li class="nav-item dropdown header-profile">
                                    <a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
                                        <img src="images/profile/pic1.jpg" alt="">
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end" style="">
                                        <a href="app-profile.html" class="dropdown-item ai-icon ">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <polygon points="0 0 24 0 24 24 0 24"/>
                                                    <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                                    <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="var(--primary)" fill-rule="nonzero"/>
                                                </g>
                                            </svg>
                                            <span class="ms-2">Profile </span>
                                        </a>
                                        <a href="email-inbox.html" class="dropdown-item ai-icon ">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24"/>
                                                    <path d="M21.9999843,15.009808 L22.0249378,15 L22.0249378,19.5857864 C22.0249378,20.1380712 21.5772226,20.5857864 21.0249378,20.5857864 C20.7597213,20.5857864 20.5053674,20.4804296 20.317831,20.2928932 L18.0249378,18 L5,18 C3.34314575,18 2,16.6568542 2,15 L2,6 C2,4.34314575 3.34314575,3 5,3 L19,3 C20.6568542,3 22,4.34314575 22,6 L22,15 C22,15.0032706 21.9999948,15.0065399 21.9999843,15.009808 Z M6.16794971,10.5547002 C7.67758127,12.8191475 9.64566871,14 12,14 C14.3543313,14 16.3224187,12.8191475 17.8320503,10.5547002 C18.1384028,10.0951715 18.0142289,9.47430216 17.5547002,9.16794971 C17.0951715,8.86159725 16.4743022,8.98577112 16.1679497,9.4452998 C15.0109146,11.1808525 13.6456687,12 12,12 C10.3543313,12 8.9890854,11.1808525 7.83205029,9.4452998 C7.52569784,8.98577112 6.90482849,8.86159725 6.4452998,9.16794971 C5.98577112,9.47430216 5.86159725,10.0951715 6.16794971,10.5547002 Z" fill="var(--primary)"/>
                                                </g>
                                            </svg>
                                            <span class="ms-2">Message </span>
                                        </a>
                                        <a href="email-inbox.html" class="dropdown-item ai-icon ">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24"/>
                                                    <path d="M21,12.0829584 C20.6747915,12.0283988 20.3407122,12 20,12 C16.6862915,12 14,14.6862915 14,18 C14,18.3407122 14.0283988,18.6747915 14.0829584,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,8 C3,6.8954305 3.8954305,6 5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,12.0829584 Z M18.1444251,7.83964668 L12,11.1481833 L5.85557487,7.83964668 C5.4908718,7.6432681 5.03602525,7.77972206 4.83964668,8.14442513 C4.6432681,8.5091282 4.77972206,8.96397475 5.14442513,9.16035332 L11.6444251,12.6603533 C11.8664074,12.7798822 12.1335926,12.7798822 12.3555749,12.6603533 L18.8555749,9.16035332 C19.2202779,8.96397475 19.3567319,8.5091282 19.1603533,8.14442513 C18.9639747,7.77972206 18.5091282,7.6432681 18.1444251,7.83964668 Z" fill="var(--primary)"/>
                                                    <circle fill="var(--primary)" opacity="0.3" cx="19.5" cy="17.5" r="2.5"/>
                                                </g>
                                            </svg>
                                            <span class="ms-2">Notification </span>
                                        </a>
                                        <a href="settings.html" class="dropdown-item ai-icon ">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24"/>
                                                    <path d="M18.6225,9.75 L18.75,9.75 C19.9926407,9.75 21,10.7573593 21,12 C21,13.2426407 19.9926407,14.25 18.75,14.25 L18.6854912,14.249994 C18.4911876,14.250769 18.3158978,14.366855 18.2393549,14.5454486 C18.1556809,14.7351461 18.1942911,14.948087 18.3278301,15.0846699 L18.372535,15.129375 C18.7950334,15.5514036 19.03243,16.1240792 19.03243,16.72125 C19.03243,17.3184208 18.7950334,17.8910964 18.373125,18.312535 C17.9510964,18.7350334 17.3784208,18.97243 16.78125,18.97243 C16.1840792,18.97243 15.6114036,18.7350334 15.1896699,18.3128301 L15.1505513,18.2736469 C15.008087,18.1342911 14.7951461,18.0956809 14.6054486,18.1793549 C14.426855,18.2558978 14.310769,18.4311876 14.31,18.6225 L14.31,18.75 C14.31,19.9926407 13.3026407,21 12.06,21 C10.8173593,21 9.81,19.9926407 9.81,18.75 C9.80552409,18.4999185 9.67898539,18.3229986 9.44717599,18.2361469 C9.26485393,18.1556809 9.05191298,18.1942911 8.91533009,18.3278301 L8.870625,18.372535 C8.44859642,18.7950334 7.87592081,19.03243 7.27875,19.03243 C6.68157919,19.03243 6.10890358,18.7950334 5.68746499,18.373125 C5.26496665,17.9510964 5.02757002,17.3784208 5.02757002,16.78125 C5.02757002,16.1840792 5.26496665,15.6114036 5.68716991,15.1896699 L5.72635306,15.1505513 C5.86570889,15.008087 5.90431906,14.7951461 5.82064513,14.6054486 C5.74410223,14.426855 5.56881236,14.310769 5.3775,14.31 L5.25,14.31 C4.00735931,14.31 3,13.3026407 3,12.06 C3,10.8173593 4.00735931,9.81 5.25,9.81 C5.50008154,9.80552409 5.67700139,9.67898539 5.76385306,9.44717599 C5.84431906,9.26485393 5.80570889,9.05191298 5.67216991,8.91533009 L5.62746499,8.870625 C5.20496665,8.44859642 4.96757002,7.87592081 4.96757002,7.27875 C4.96757002,6.68157919 5.20496665,6.10890358 5.626875,5.68746499 C6.04890358,5.26496665 6.62157919,5.02757002 7.21875,5.02757002 C7.81592081,5.02757002 8.38859642,5.26496665 8.81033009,5.68716991 L8.84944872,5.72635306 C8.99191298,5.86570889 9.20485393,5.90431906 9.38717599,5.82385306 L9.49484664,5.80114977 C9.65041313,5.71688974 9.7492905,5.55401473 9.75,5.3775 L9.75,5.25 C9.75,4.00735931 10.7573593,3 12,3 C13.2426407,3 14.25,4.00735931 14.25,5.25 L14.249994,5.31450877 C14.250769,5.50881236 14.366855,5.68410223 14.552824,5.76385306 C14.7351461,5.84431906 14.948087,5.80570889 15.0846699,5.67216991 L15.129375,5.62746499 C15.5514036,5.20496665 16.1240792,4.96757002 16.72125,4.96757002 C17.3184208,4.96757002 17.8910964,5.20496665 18.312535,5.626875 C18.7350334,6.04890358 18.97243,6.62157919 18.97243,7.21875 C18.97243,7.81592081 18.7350334,8.38859642 18.3128301,8.81033009 L18.2736469,8.84944872 C18.1342911,8.99191298 18.0956809,9.20485393 18.1761469,9.38717599 L18.1988502,9.49484664 C18.2831103,9.65041313 18.4459853,9.7492905 18.6225,9.75 Z" fill="var(--primary)" fill-rule="nonzero" opacity="0.3"/>
                                                    <path d="M12,15 C13.6568542,15 15,13.6568542 15,12 C15,10.3431458 13.6568542,9 12,9 C10.3431458,9 9,10.3431458 9,12 C9,13.6568542 10.3431458,15 12,15 Z" fill="var(--primary)"/>
                                                </g>
                                            </svg>
                                            <span class="ms-2">Settings </span>
                                        </a>
                                        <a href="{{ route('logout') }}" class="dropdown-item ai-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                            <span class="ms-2">Logout </span>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!--**********************************
        Header end ti-comment-alt
    ***********************************-->

    <!--**********************************
        Sidebar start
    ***********************************-->
    <div class="deznav">
        <div class="deznav-scroll">
            <ul class="metismenu" id="menu">
                <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                        <i class="material-icons">grid_view</i>
                        <span class="nav-text">Dashboard</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="index.html">Dashboard Light</a></li>
                        <li><a href="{{ url('dashboard-dark') }}">Dashboard Dark</a></li>
                        <li><a href="index-1.html">Dashboard-2</a></li>
                        <li><a href="index-3.html">Dashboard-3</a></li>
                        <li><a href="index-4.html">Dashboard-4</a></li>
                        <li><a href="index-5.html">Dashboard-5</a></li>
                    </ul>
                </li>
                <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                        <i class="material-icons">trending_up</i>
                        <span class="nav-text">Trading </span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="{{ url('market') }}">Market</a></li>
                        <li><a href="ico-listing.html">ICO Listing</a></li>
                        <li><a href="p2p.html">P2P</a></li>
                        <li><a href="future.html">Future</a></li>
                        <li><a href="intraday-trading.html">Intraday Trading</a></li>
                    </ul>
                </li>
                <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                        <i class="material-icons">currency_bitcoin</i>
                        <span class="nav-text">Crypto</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="crypto.html">Market Watch</a></li>
                        <li><a href="ico-listing-filter.html">ICO Listing Filter</a></li>
                        <li><a href="coin-details.html">Coin Details</a></li>
                        <li><a href="exchange.html">Exchange</a></li>
                        <li><a href="banking.html">Banking</a></li>
                    </ul>
                </li>
                <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                        <i class="material-icons">description</i>
                        <span class="nav-text">Reports</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="history.html">History</a></li>
                        <li><a href="orders.html">Orders</a></li>
                        <li><a href="reports.html">Report</a></li>
                        <li><a href="user.html">User</a></li>
                        <li><a href="contact.html">Contacts</a></li>
                        <li><a href="activity.html">Activity</a></li>
                    </ul>
                </li>
                <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                        <i class="material-icons"> app_registration </i>
                        <span class="nav-text">Apps</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="./app-profile.html">Profile</a></li>
                        <li><a href="./edit-profile.html">Edit Profile</a></li>
                        <li><a href="./post-details.html">Post Details</a></li>
                        <li><a class="has-arrow" href="javascript:void(0);" aria-expanded="false">Email</a>
                            <ul aria-expanded="false">
                                <li><a href="./email-compose.html">Compose</a></li>
                                <li><a href="./email-inbox.html">Inbox</a></li>
                                <li><a href="./email-read.html">Read</a></li>
                            </ul>
                        </li>
                        <li><a href="./app-calender.html">Calendar</a></li>
                        <li><a class="has-arrow" href="javascript:void(0);" aria-expanded="false">Shop</a>
                            <ul aria-expanded="false">
                                <li><a href="./ecom-product-grid.html">Product Grid</a></li>
                                <li><a href="./ecom-product-list.html">Product List</a></li>
                                <li><a href="./ecom-product-detail.html">Product Details</a></li>
                                <li><a href="./ecom-product-order.html">Order</a></li>
                                <li><a href="./ecom-checkout.html">Checkout</a></li>
                                <li><a href="./ecom-invoice.html">Invoice</a></li>
                                <li><a href="./ecom-customers.html">Customers</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                        <i class="material-icons"> assessment </i>
                        <span class="nav-text">Charts</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="./chart-flot.html">Flot</a></li>
                        <li><a href="./chart-morris.html">Morris</a></li>
                        <li><a href="./chart-chartjs.html">Chartjs</a></li>
                        <li><a href="./chart-chartist.html">Chartist</a></li>
                        <li><a href="./chart-sparkline.html">Sparkline</a></li>
                        <li><a href="./chart-peity.html">Peity</a></li>
                    </ul>
                </li>
                <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">

                        <i class="material-icons"> favorite </i>
                        <span class="nav-text">Bootstrap</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="./ui-accordion.html">Accordion</a></li>
                        <li><a href="./ui-alert.html">Alert</a></li>
                        <li><a href="./ui-badge.html">Badge</a></li>
                        <li><a href="./ui-button.html">Button</a></li>
                        <li><a href="./ui-modal.html">Modal</a></li>
                        <li><a href="./ui-button-group.html">Button Group</a></li>
                        <li><a href="./ui-list-group.html">List Group</a></li>
                        <li><a href="./ui-card.html">Cards</a></li>
                        <li><a href="./ui-carousel.html">Carousel</a></li>
                        <li><a href="./ui-dropdown.html">Dropdown</a></li>
                        <li><a href="./ui-popover.html">Popover</a></li>
                        <li><a href="./ui-progressbar.html">Progressbar</a></li>
                        <li><a href="./ui-tab.html">Tab</a></li>
                        <li><a href="./ui-typography.html">Typography</a></li>
                        <li><a href="./ui-pagination.html">Pagination</a></li>
                        <li><a href="./ui-grid.html">Grid</a></li>

                    </ul>
                </li>
                <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                        <i class="material-icons"> extension </i>
                        <span class="nav-text">Plugins</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="./uc-select2.html">Select 2</a></li>
                        <li><a href="./uc-nestable.html">Nestable</a></li>
                        <li><a href="./uc-noui-slider.html">Noui Slider</a></li>
                        <li><a href="./uc-sweetalert.html">Sweet Alert</a></li>
                        <li><a href="./uc-toastr.html">Toastr</a></li>
                        <li><a href="./map-jqvmap.html">Jqv Map</a></li>
                        <li><a href="./uc-lightgallery.html">Light Gallery</a></li>
                    </ul>
                </li>
                <li><a href="widget-basic.html" class="" aria-expanded="false">
                        <i class="bi bi-gear-wide"></i>
                        <span class="nav-text">Widget</span>
                    </a>
                </li>
                <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                        <i class="material-icons"> insert_drive_file </i>
                        <span class="nav-text">Forms</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="./form-element.html">Form Elements</a></li>
                        <li><a href="./form-wizard.html">Wizard</a></li>
                        <li><a href="./form-ckeditor.html">CkEditor</a></li>
                        <li><a href="form-pickers.html">Pickers</a></li>
                        <li><a href="form-validation.html">Form Validate</a></li>
                    </ul>
                </li>
                <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                        <i class="material-icons"> table_chart </i>
                        <span class="nav-text">Table</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="table-bootstrap-basic.html">Bootstrap</a></li>
                        <li><a href="table-datatable-basic.html">Datatable</a></li>
                    </ul>
                </li>
                <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                        <i class="material-icons">article</i>
                        <span class="nav-text">Pages</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="./page-login.html">Login</a></li>
                        <li><a href="./page-register.html">Register</a></li>
                        <li><a class="has-arrow" href="javascript:void(0);" aria-expanded="false">Error</a>
                            <ul aria-expanded="false">
                                <li><a href="./page-error-400.html">Error 400</a></li>
                                <li><a href="./page-error-403.html">Error 403</a></li>
                                <li><a href="./page-error-404.html">Error 404</a></li>
                                <li><a href="./page-error-500.html">Error 500</a></li>
                                <li><a href="./page-error-503.html">Error 503</a></li>
                            </ul>
                        </li>
                        <li><a href="./page-lock-screen.html">Lock Screen</a></li>
                        <li><a href="./empty-page.html">Empty Page</a></li>
                    </ul>
                </li>
            </ul>

        </div>
    </div>
    <!--**********************************
        Sidebar end
    ***********************************-->

    <!--******************************************************************************************************
        Content body start
    *******************************************************************************************************-->
        @yield('content')
    <!--******************************************************************************************************
        Content body end
    *******************************************************************************************************-->

    <!--**********************************
        Footer start
    ***********************************-->
    <div class="footer out-footer">
        <div class="copyright">
            <p>Copyright © Developed by <a href="https://dexignzone.com/" target="_blank">DexignZone</a> 2022</p>
        </div>
    </div>
    <!--**********************************
        Footer end
    ***********************************-->

    <!--**********************************
       Support ticket button start
    ***********************************-->

    <!--**********************************
       Support ticket button end
    ***********************************-->


</div>
<!--**********************************
    Main wrapper end
***********************************-->

<!--**********************************
    Scripts
***********************************-->
<!-- Required vendors -->
<script src="./vendor/global/global.min.js"></script>
<script src="./vendor/chart.js/Chart.bundle.min.js"></script>
<script src="./vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>

<!-- Apex Chart -->
<script src="./vendor/apexchart/apexchart.js"></script>
<script src="./vendor/swiper/js/swiper-bundle.min.js"></script>
<script src="https://s3.tradingview.com/tv.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wnumb/1.2.0/wNumb.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.6.4/nouislider.min.js"></script>
<script src="./vendor/raphael/raphael.min.js"></script>
<script src="./vendor/morris/morris.min.js"></script>

<!-- Dashboard 1 -->
<script src="./js/dashboard/dashboard-1.js"></script>
<script src="./js/custom.js"></script>
<script src="./js/deznav-init.js"></script>
<script src="./js/dashboard/tradingview-2.js"></script>


<script>
    jQuery(document).ready(function(){
        setTimeout(function(){
            dzSettingsOptions.version = 'dark';
            new dzSettings(dzSettingsOptions);
        },1500)
    });
</script>
</body>
</html>
