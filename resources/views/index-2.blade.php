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
											<a href="page-login.html" class="dropdown-item ai-icon">
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
							<li><a href="index-2.html">Dashboard Dark</a></li>
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
							<li><a href="market.html">Market</a></li>
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

		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-8">
						<div class="row">
							<div class="col-xl-12">
								<div class="card bubles">
									<div class="card-body">
										<div class="buy-coin  bubles-down">
											<div>
												<h2>Buy & Sell 100+ coins instantly</h2>
												<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.</p>
												<a href="exchange.html" class="btn btn-primary">Buy Coin</a>
											</div>
											<div class="coin-img">
												<img src="images/coin.png" class="img-fluid" alt="">
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-12">
								<div class="swiper mySwiper">
									<div class="swiper-wrapper">
										<div class="swiper-slide">
											<div class="card card-wiget">
												<div class="card-body">
													<div class="card-wiget-info">
														<h4 class="count-num">$2,478.90</h4>
														<p>Total Balance</p>
														<div>
															<svg class="me-1" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M19.6997 12.4191C18.364 17.7763 12.9382 21.0365 7.58042 19.7006C2.22486 18.365 -1.03543 12.9388 0.300792 7.582C1.63577 2.22424 7.06166 -1.03636 12.4179 0.299241C17.7753 1.63487 21.0353 7.06169 19.6997 12.4191Z" fill="#F7931A"/>
																<path d="M6.71062 11.684C6.65625 11.8191 6.51844 12.0215 6.20781 11.9447C6.21877 11.9606 5.41033 11.7456 5.41033 11.7456L4.86566 13.0015L6.29343 13.3575C6.55906 13.424 6.81938 13.4937 7.07563 13.5594L6.62155 15.3825L7.71748 15.6559L8.16716 13.8522C8.46655 13.9334 8.75716 14.0084 9.04153 14.079L8.5934 15.8743L9.6906 16.1477L10.1446 14.3281C12.0156 14.6821 13.4224 14.5393 14.0146 12.8472C14.4918 11.4847 13.9909 10.6987 13.0065 10.1862C13.7234 10.0209 14.2633 9.54937 14.4074 8.57532C14.6065 7.24471 13.5933 6.5294 12.208 6.05221L12.6574 4.24971L11.5602 3.97627L11.1227 5.73126C10.8343 5.65938 10.538 5.59157 10.2437 5.52437L10.6843 3.75781L9.58775 3.48438L9.13807 5.28623C8.89931 5.23186 8.66496 5.17808 8.43745 5.12154L8.43869 5.1159L6.92557 4.7381L6.63368 5.90996C6.63368 5.90996 7.44775 6.09653 7.43056 6.10808C7.87494 6.21902 7.95524 6.51307 7.94182 6.74622L6.71062 11.684ZM11.9006 12.0906C11.5615 13.4531 9.26747 12.7165 8.52372 12.5318L9.12622 10.1166C9.86995 10.3022 12.2549 10.6697 11.9006 12.0906ZM12.2399 8.55564C11.9306 9.79501 10.0212 9.16533 9.40183 9.01096L9.94808 6.82033C10.5674 6.97471 12.5621 7.26283 12.2399 8.55564Z" fill="white"/>
															</svg>
															<span>0.11857418</span>
														</div>
													</div>
													<div id="NewCustomers"></div>
												</div>
												<div class="back-icon">
													<svg width="64" height="127" viewBox="0 0 64 127" fill="none" xmlns="http://www.w3.org/2000/svg">
														<g opacity="0.05">
														<path d="M70.1991 32.0409C63.3711 28.2675 56.1119 25.3926 48.9246 22.4098C44.7559 20.6849 40.7669 18.6724 37.2451 15.8694C30.3093 10.3351 31.639 1.3509 39.7607 -2.20684C42.0606 -3.21307 44.4684 -3.5365 46.9121 -3.68024C56.3275 -4.18336 65.2758 -2.4584 73.7928 1.63839C78.0333 3.68679 79.4349 3.03993 80.8723 -1.38029C82.3817 -6.05207 83.6395 -10.7957 85.041 -15.5034C85.9753 -18.6659 84.8254 -20.7502 81.8426 -22.0799C76.3802 -24.4876 70.7741 -26.2126 64.8805 -27.1469C57.19 -28.3329 57.19 -28.3688 57.1541 -36.0952C57.1181 -46.984 57.1181 -46.984 46.1934 -46.984C44.6122 -46.984 43.0309 -47.02 41.4497 -46.984C36.3467 -46.8403 35.4842 -45.9419 35.3405 -40.8029C35.2686 -38.503 35.3405 -36.203 35.3045 -33.8671C35.2686 -27.0391 35.2327 -27.1469 28.6922 -24.7751C12.88 -19.0252 3.1052 -8.24421 2.06304 9.00543C1.12868 24.2785 9.10664 34.5924 21.6486 42.1032C29.375 46.739 37.9279 49.4702 46.1215 53.0998C49.3199 54.5014 52.3745 56.1185 55.0338 58.3466C62.904 64.8512 61.4665 75.6681 52.1229 79.7649C47.1277 81.957 41.845 82.4961 36.4186 81.8133C28.0453 80.7711 20.0314 78.579 12.4847 74.6619C8.06447 72.3619 6.77075 72.9729 5.2614 77.7524C3.96768 81.8852 2.81771 86.0538 1.66773 90.2225C0.122451 95.8286 0.697435 97.1583 6.05201 99.7817C12.88 103.088 20.1752 104.777 27.6141 105.963C33.4358 106.897 33.6155 107.149 33.6874 113.186C33.7233 115.917 33.7233 118.684 33.7593 121.416C33.7952 124.866 35.4483 126.878 39.006 126.95C43.0309 127.022 47.0918 127.022 51.1167 126.914C54.4229 126.842 56.1119 125.045 56.1119 121.703C56.1119 117.966 56.2916 114.192 56.1478 110.455C55.9682 106.646 57.6213 104.705 61.2868 103.699C69.7319 101.399 76.9193 96.8708 82.4535 90.1147C97.8345 71.4276 91.9768 44.0797 70.1991 32.0409Z" fill="#9568FF"/>
														</g>
													</svg>
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="card card-wiget">
												<div class="card-body">
													<div class="card-wiget-info">
														<h4 class="count-num">$3,27.23</h4>
														<p>Profit & Loss</p>
														<div>
															<span class="text-success">+3.02%</span>
														</div>
													</div>
													<div id="ProfitlossChart"></div>
												</div>
												<div class="back-icon">
													<svg width="157" height="114" viewBox="0 0 157 114" fill="none" xmlns="http://www.w3.org/2000/svg">
														<g opacity="0.05">
															<path d="M12.1584 84.1906V110.157C12.1584 111.737 13.5953 113.053 15.4007 113.053H37.8751C39.6436 113.053 41.1173 111.77 41.1173 110.157V64.4771L24.7957 79.0565C21.3324 82.1172 16.9112 83.8944 12.1584 84.1906Z" fill="#9568FF"/>
															<path d="M52.3177 64.1484V110.158C52.3177 111.737 53.7546 113.054 55.56 113.054H78.0344C79.8029 113.054 81.2766 111.77 81.2766 110.158V83.0721C76.1554 82.9734 71.3657 81.1633 67.7551 77.938L52.3177 64.1484Z" fill="#9568FF"/>
															<path d="M92.4769 80.2078V110.157C92.4769 111.736 93.9138 113.053 95.7191 113.053H118.194C119.962 113.053 121.436 111.769 121.436 110.157V54.8994L95.6823 77.904C94.6875 78.7926 93.6191 79.5496 92.4769 80.2078Z" fill="#9568FF"/>
															<path d="M159.421 20.9355L132.636 44.8617V110.157C132.636 111.736 134.073 113.053 135.878 113.053H158.353C160.121 113.053 161.595 111.769 161.595 110.157V22.7456C160.858 22.1862 160.306 21.6925 159.9 21.3634L159.421 20.9355Z" fill="#9568FF"/>
															<path d="M177.806 -21.4532C176.737 -22.4734 175.116 -23 173.053 -23C172.869 -23 172.648 -23 172.464 -23C162 -22.5722 151.573 -22.1114 141.11 -21.6836C139.71 -21.6177 137.794 -21.5519 136.283 -20.2026C135.804 -19.7747 135.436 -19.2811 135.141 -18.6887C133.594 -15.6938 135.768 -13.7521 136.799 -12.8306L139.415 -10.461C141.22 -8.81546 143.063 -7.16992 144.905 -5.55729L81.6816 50.9505L53.2754 25.5763C51.5806 24.0624 49.2964 23.2067 46.8647 23.2067C44.433 23.2067 42.1856 24.0624 40.4908 25.5763L2.65272 59.3427C-0.88424 62.5022 -0.88424 67.6033 2.65272 70.7628L4.34751 72.2767C6.0423 73.7906 8.32659 74.6462 10.7582 74.6462C13.1899 74.6462 15.4374 73.7906 17.1321 72.2767L46.8647 45.7177L75.2709 71.0919C76.9657 72.6058 79.25 73.4615 81.6816 73.4615C84.1133 73.4615 86.3607 72.6058 88.0924 71.0919L159.421 7.37663L167.49 14.5512C168.448 15.4069 169.774 16.5916 171.8 16.5916C172.648 16.5916 173.495 16.3942 174.379 15.9663C174.969 15.6702 175.485 15.341 175.927 14.9461C177.511 13.5309 177.806 11.7209 177.88 10.3057C178.174 4.25011 178.506 -1.80547 178.837 -7.89396L179.316 -17.0102C179.427 -18.9191 178.948 -20.4001 177.806 -21.4532Z" fill="#9568FF"/>
															</g>
													</svg>

												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="card card-wiget">
												<div class="card-body">
													<div class="card-wiget-info">
														<h4 class="count-num">$2,478.90</h4>
														<p class="sm-chart">Total Deposit</p>
													</div>
													<div id="TotaldipositChart"></div>
												</div>
												<div class="back-icon">
													<svg width="138" height="113" viewBox="0 0 138 113" fill="none" xmlns="http://www.w3.org/2000/svg">
														<g opacity="0.05">
														<path d="M119.285 -15.4771H113.59V4.77299H133.524V-1.23874C133.524 -9.08974 127.136 -15.4771 119.285 -15.4771Z" fill="#9568FF"/>
														<path d="M99.3521 -49.0015H42.3988C39.7777 -49.0015 37.6527 -46.8765 37.6527 -44.2554V4.77188H104.098V-44.2554C104.098 -46.8765 101.973 -49.0015 99.3521 -49.0015Z" fill="#9568FF"/>
														<path d="M28.1602 -15.4771H14.8711C10.898 -15.4771 7.16314 -13.9305 4.35502 -11.122C1.5466 -8.31391 0 -4.57905 0 -0.605927V4.77299H28.1602V-15.4771Z" fill="#9568FF"/>
														<path d="M108.211 59.8423C108.211 66.8647 113.998 75.3463 121.183 75.3463H157.254C159.875 75.3463 162 73.2213 162 70.6002V49.0845C162 46.4634 159.875 44.3384 157.254 44.3384H121.183C113.998 44.3384 108.211 52.82 108.211 59.8423ZM128.777 59.8414C128.777 62.4628 126.652 64.5875 124.031 64.5875C121.41 64.5875 119.285 62.4628 119.285 59.8414C119.285 57.2203 121.41 55.0953 124.031 55.0953C126.652 55.0953 128.777 57.2203 128.777 59.8414Z" fill="#9568FF"/>
														<path d="M105.012 76.6807C101.013 71.8922 98.719 65.7555 98.719 59.8437C98.719 53.932 101.013 47.7953 105.012 43.0068C109.406 37.7452 115.15 34.8476 121.184 34.8476H153.774V20.6093C153.774 19.8236 153.719 19.0516 153.615 18.2966C153.293 15.9761 151.277 14.2656 148.935 14.2656H0V96.7621C0 105.716 6.38731 113 14.2383 113H139.535C147.386 113 153.774 105.716 153.774 96.7621V84.8399H121.184C115.15 84.8399 109.406 81.9422 105.012 76.6807Z" fill="#9568FF"/>
														</g>
													</svg>
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="card card-wiget">
												<div class="card-body">
													<div class="card-wiget-info rewards">
														<h4 class="count-num">$52,478.90</h4>
														<p>Rewards Earned</p>
														<div>
															<span class="text-primary">+200 This Month</span>
														</div>
														<div class="d-flex align-items-baseline reward-earn">
															<h2 class="me-2">25%</h2>
															<span>Level 2</span>
														</div>
														<div class="progress-box">
															<div class="progress">
																<div class="progress-bar bg-primary" style="width:50%; height:7px; border-radius:4px;" role="progressbar"></div>
															</div>
														</div>
													</div>
												</div>
												<div class="back-icon">
													<svg width="115" height="123" viewBox="0 0 115 123" fill="none" xmlns="http://www.w3.org/2000/svg">
														<g opacity="0.05">
														<path d="M15.3627 66.1299L0.487194 95.8762C-0.228022 97.3054 -0.151221 99.0034 0.687599 100.362C1.52882 101.719 3.00965 102.546 4.60689 102.546H26.9838L40.4097 120.447C41.2821 121.614 42.6514 122.29 44.0926 122.29C46.0066 122.29 47.5151 121.148 48.2159 119.744L62.2334 91.7073C43.2814 89.8952 26.5722 80.2854 15.3627 66.1299Z" fill="#9568FF"/>
														<path d="M137.06 95.8762L122.184 66.1299C110.975 80.2854 94.2658 89.8952 75.3137 91.7073L89.3324 119.744C90.0321 121.148 91.5405 122.29 93.4545 122.29C94.8958 122.29 96.2662 121.614 97.1386 120.447L110.563 102.546H132.94C134.537 102.546 136.018 101.719 136.86 100.362C137.698 99.0034 137.775 97.3054 137.06 95.8762Z" fill="#9568FF"/>
														<path d="M76.4862 10.3573L68.7736 -1.96338L61.0634 10.3573C60.431 11.3677 59.4314 12.0937 58.2758 12.383L44.1766 15.9098L53.5105 27.0509C54.2761 27.9641 54.6577 29.1389 54.5749 30.3282L53.5705 44.8269L67.0504 39.3932C67.6912 39.1352 69.0016 38.7908 70.4956 39.3932L83.9768 44.8269L82.9735 30.3282C82.8919 29.1389 83.2735 27.9641 84.0392 27.0509L93.373 15.9098L79.2738 12.383C78.1182 12.0937 77.1186 11.3677 76.4862 10.3573Z" fill="#9568FF"/>
														<path d="M127.676 23.9022C127.676 -8.57659 101.252 -35 68.7736 -35C36.2949 -35 9.87146 -8.57659 9.87146 23.9022C9.87146 56.3797 36.2949 82.8043 68.7736 82.8043C101.252 82.8043 127.676 56.3809 127.676 23.9022ZM105.166 16.1848L92.2966 31.5451L93.679 51.5352C93.7882 53.1192 93.0754 54.6481 91.7914 55.5817C90.5061 56.5141 88.8321 56.7205 87.3596 56.1277L68.7736 48.6359L50.1876 56.1277C49.6896 56.3281 47.7059 56.9977 45.7559 55.5817C44.4719 54.6481 43.759 53.1192 43.8682 51.5352L45.2531 31.5451L32.384 16.186C31.364 14.968 31.0424 13.3119 31.5332 11.8023C32.024 10.2926 33.2576 9.14062 34.7984 8.75541L54.2365 3.8929L64.8675 -13.0935C65.71 -14.4387 67.186 -15.2559 68.7736 -15.2559C70.3613 -15.2559 71.8373 -14.4387 72.6797 -13.0935L83.3132 3.8929L102.751 8.75541C104.292 9.14062 105.526 10.2926 106.016 11.8023C106.507 13.3119 106.186 14.968 105.166 16.1848Z" fill="#9568FF"/>
														</g>
													</svg>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-12">
								<div class="card">
									<div class="card-body">
										 <div id="tradingview_85dc0" class="tranding-chart"></div>
									</div>
								</div>
							</div>
							<div class="col-xl-5 assets-al col-lg-12">
								<div class="card">
									<div class="card-header border-0 pb-0">
										<h2 class="heading">Assets Allocation</h2>
										<div class="dropdown custom-dropdown">
											<div class="btn sharp btn-primary tp-btn " data-bs-toggle="dropdown">
												<svg width="6" height="20" viewBox="0 0 6 20" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M5.19995 10.001C5.19995 9.71197 5.14302 9.42576 5.03241 9.15872C4.9218 8.89169 4.75967 8.64905 4.55529 8.44467C4.35091 8.24029 4.10828 8.07816 3.84124 7.96755C3.5742 7.85694 3.28799 7.80001 2.99895 7.80001C2.70991 7.80001 2.4237 7.85694 2.15667 7.96755C1.88963 8.07816 1.64699 8.24029 1.44261 8.44467C1.23823 8.64905 1.0761 8.89169 0.965493 9.15872C0.854882 9.42576 0.797952 9.71197 0.797952 10.001C0.798085 10.5848 1.0301 11.1445 1.44296 11.5572C1.85582 11.9699 2.41571 12.2016 2.99945 12.2015C3.58319 12.2014 4.14297 11.9694 4.55565 11.5565C4.96832 11.1436 5.20008 10.5838 5.19995 10L5.19995 10.001ZM5.19995 3.00101C5.19995 2.71197 5.14302 2.42576 5.03241 2.15872C4.9218 1.89169 4.75967 1.64905 4.55529 1.44467C4.35091 1.24029 4.10828 1.07816 3.84124 0.967552C3.5742 0.856941 3.28799 0.800011 2.99895 0.800011C2.70991 0.800011 2.4237 0.856941 2.15667 0.967552C1.88963 1.07816 1.64699 1.24029 1.44261 1.44467C1.23823 1.64905 1.0761 1.89169 0.965493 2.15872C0.854883 2.42576 0.797953 2.71197 0.797953 3.00101C0.798085 3.58475 1.0301 4.14453 1.44296 4.55721C1.85582 4.96988 2.41571 5.20164 2.99945 5.20151C3.58319 5.20138 4.14297 4.96936 4.55565 4.5565C4.96832 4.14364 5.20008 3.58375 5.19995 3.00001L5.19995 3.00101ZM5.19995 17.001C5.19995 16.712 5.14302 16.4258 5.03241 16.1587C4.9218 15.8917 4.75967 15.6491 4.55529 15.4447C4.35091 15.2403 4.10828 15.0782 3.84124 14.9676C3.5742 14.8569 3.28799 14.8 2.99895 14.8C2.70991 14.8 2.4237 14.8569 2.15666 14.9676C1.88963 15.0782 1.64699 15.2403 1.44261 15.4447C1.23823 15.6491 1.0761 15.8917 0.965493 16.1587C0.854882 16.4258 0.797952 16.712 0.797952 17.001C0.798084 17.5848 1.0301 18.1445 1.44296 18.5572C1.85582 18.9699 2.41571 19.2016 2.99945 19.2015C3.58319 19.2014 4.14297 18.9694 4.55565 18.5565C4.96832 18.1436 5.20008 17.5838 5.19995 17L5.19995 17.001Z" fill="var(--primary)"/>
												</svg>
											</div>
											<div class="dropdown-menu dropdown-menu-end">
												<a class="dropdown-item" href="javascript:void(0);">Option 1</a>
												<a class="dropdown-item" href="javascript:void(0);">Option 2</a>
												<a class="dropdown-item" href="javascript:void(0);">Option 3</a>
											</div>
										</div>
									</div>
									<div class="card-body text-center pt-0 pb-2">
										<div id="morris_donught" class="custome-donut"></div>
										<div class="chart-items">
											<div class="row">
												<div class=" col-xl-12 col-sm-12">
													<div class="text-start">
														<span class="font-w600 mb-2 d-block text-secondary fs-14">Legend</span>
														<div class="color-picker">
															<span class="mb-0 col-6 fs-14">
																<svg class="me-2" width="16" height="16" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<rect width="14" height="14" rx="4" fill="var(--primary)"/>
																</svg>
																XTZ(40%)
															</span>
															<h5>$763</h5>
														</div>
														<div class="color-picker">
															<span class="mb-0 col-6 fs-14">
																<svg class="me-2" width="16" height="16" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<rect width="14" height="14" rx="4" fill="#2A353A"/>
																</svg>
																BTC(20%)
															</span>
															<h5>$321</h5>
														</div>
														<div class="color-picker">
															<span class="mb-0 col-6 fs-14">
																<svg class="me-2" width="16" height="16" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<rect width="14" height="14" rx="4" fill="#C0E192"/>
																</svg>
																BNB(10%)
															</span>
															<h5>$69</h5>
														</div>
														<div class="color-picker">
															<span class="mb-0 col-6 fs-14">
																<svg class="me-2" width="16" height="16" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<rect width="14" height="14" rx="4" fill="#E085E4"/>
																</svg>
																ETH(10%)
															</span>
															<h5>$154</h5>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 market-previews col-sm-6">
								<div class="card">
									<div class="card-header border-0 pb-0">
										<div>
											<h2 class="heading">Market Previews</h2>
										</div>
									</div>
									<div class="card-body pt-0 px-0">
										<div class="previews-info-list">
											<div class="pre-icon">
												<span class="icon-box icon-box-sm bg-success">
													<svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M15.5 13.7222H7.72226C7.44585 13.7236 7.17885 13.6219 6.9734 13.437C6.76794 13.2521 6.63878 12.9972 6.61115 12.7222L6.9667 9.05553L10.2445 8.16664C10.5392 8.08707 10.7902 7.8937 10.9423 7.62907C11.0944 7.36443 11.1352 7.05021 11.0556 6.75553C10.976 6.46084 10.7827 6.20983 10.518 6.05772C10.2534 5.90561 9.93916 5.86485 9.64448 5.94442L7.21115 6.6333L7.72226 1.61108C7.75173 1.3164 7.66292 1.02208 7.47539 0.792865C7.28785 0.563654 7.01694 0.418329 6.72226 0.38886C6.42757 0.359392 6.13325 0.448194 5.90404 0.63573C5.67483 0.823266 5.5295 1.09418 5.50004 1.38886L4.91115 7.3333L1.8667 8.16664C1.57202 8.20642 1.30521 8.36164 1.12496 8.59814C0.944719 8.83464 0.865809 9.13306 0.905592 9.42775C0.945374 9.72243 1.10059 9.98925 1.33709 10.1695C1.5736 10.3497 1.87202 10.4286 2.1667 10.3889C2.26605 10.405 2.36736 10.405 2.4667 10.3889L4.68893 9.75553L4.38892 12.6111C4.38892 13.4951 4.74011 14.343 5.36523 14.9681C5.99036 15.5932 6.8382 15.9444 7.72226 15.9444H15.5C15.7947 15.9444 16.0773 15.8274 16.2857 15.619C16.4941 15.4106 16.6111 15.128 16.6111 14.8333C16.6111 14.5386 16.4941 14.256 16.2857 14.0476C16.0773 13.8393 15.7947 13.7222 15.5 13.7222Z" fill="#FCFCFC"/>
													</svg>
												</span>
												<div class="ms-2">
													<h6>LTC/Year</h6>
													<span>March</span>
												</div>
											</div>
											<div class="count">
												<h6>120.45</h6>
												<span class="text-success">1,24%</span>
											</div>
										</div>
										<div class="previews-info-list">
											<div class="pre-icon">
												<span class="icon-box icon-box-sm bg-warning">
													<svg width="17" height="21" viewBox="0 0 17 21" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M13.2472 9.15687C13.6996 8.48871 13.9615 7.70994 14.0047 6.90419C14.0479 6.09844 13.8707 5.29615 13.4924 4.58346C13.114 3.87078 12.5486 3.27462 11.857 2.85901C11.1653 2.4434 10.3735 2.22404 9.56662 2.22448V1.11337C9.56662 0.818684 9.44956 0.536069 9.24119 0.327695C9.03281 0.119321 8.7502 0.0022583 8.45551 0.0022583C8.16083 0.0022583 7.87821 0.119321 7.66984 0.327695C7.46146 0.536069 7.3444 0.818684 7.3444 1.11337V2.22448H5.12218V1.11337C5.12218 0.818684 5.00512 0.536069 4.79674 0.327695C4.58837 0.119321 4.30575 0.0022583 4.01107 0.0022583C3.71638 0.0022583 3.43377 0.119321 3.22539 0.327695C3.01702 0.536069 2.89996 0.818684 2.89996 1.11337V2.22448H1.78885C1.49416 2.22448 1.21154 2.34154 1.00317 2.54992C0.794797 2.75829 0.677734 3.04091 0.677734 3.33559C0.677734 3.63028 0.794797 3.91289 1.00317 4.12127C1.21154 4.32964 1.49416 4.4467 1.78885 4.4467H2.89996V15.5578H1.78885C1.49416 15.5578 1.21154 15.6749 1.00317 15.8833C0.794797 16.0916 0.677734 16.3742 0.677734 16.6689C0.677734 16.9636 0.794797 17.2462 1.00317 17.4546C1.21154 17.663 1.49416 17.78 1.78885 17.78H2.89996V18.8911C2.89996 19.1858 3.01702 19.4684 3.22539 19.6768C3.43377 19.8852 3.71638 20.0023 4.01107 20.0023C4.30575 20.0023 4.58837 19.8852 4.79674 19.6768C5.00512 19.4684 5.12218 19.1858 5.12218 18.8911V17.78H7.3444V18.8911C7.3444 19.1858 7.46146 19.4684 7.66984 19.6768C7.87821 19.8852 8.16083 20.0023 8.45551 20.0023C8.7502 20.0023 9.03281 19.8852 9.24119 19.6768C9.44956 19.4684 9.56662 19.1858 9.56662 18.8911V17.78H11.7888C12.8383 17.7828 13.8548 17.413 14.6572 16.7367C15.4597 16.0603 15.9962 15.1211 16.1712 14.0863C16.3462 13.0515 16.1484 11.9882 15.613 11.0855C15.0776 10.1829 14.2393 9.49948 13.2472 9.15693V9.15687ZM5.12218 4.4467H9.56662C10.156 4.4467 10.7212 4.68083 11.138 5.09758C11.5547 5.51432 11.7888 6.07956 11.7888 6.66893C11.7888 7.2583 11.5547 7.82353 11.138 8.24027C10.7212 8.65702 10.156 8.89115 9.56662 8.89115H5.12218V4.4467ZM11.7888 15.5578H5.12218V11.1134H11.7888C12.3782 11.1134 12.9434 11.3475 13.3602 11.7642C13.7769 12.181 14.0111 12.7462 14.0111 13.3356C14.0111 13.925 13.7769 14.4902 13.3602 14.9069C12.9434 15.3237 12.3782 15.5578 11.7888 15.5578Z" fill="#FCFCFC"/>
													</svg>
												</span>
												<div class="ms-2">
													<h6>BTC/Year</h6>
													<span class="text-gray">January</span>
												</div>
											</div>
											<div class="count">
												<h6>120.45</h6>
												<span>1,24%</span>
											</div>
										</div>
										<div class="previews-info-list">
											<div class="pre-icon">
												<span class="icon-box icon-box-sm bg-primary">
													<svg width="16" height="24" viewBox="0 0 16 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M15.1119 12.24C15.1219 12.1603 15.1219 12.0797 15.1119 12C15.1212 11.9233 15.1212 11.8457 15.1119 11.7689C15.1134 11.7393 15.1134 11.7096 15.1119 11.68C15.0979 11.6399 15.08 11.6012 15.0586 11.5645L8.83639 0.897799C8.81109 0.846041 8.77467 0.800512 8.72973 0.764466C8.64641 0.672805 8.54486 0.599569 8.43159 0.549453C8.31831 0.499338 8.19582 0.47345 8.07195 0.47345C7.94808 0.47345 7.82559 0.499338 7.71231 0.549453C7.59904 0.599569 7.49749 0.672805 7.41417 0.764466C7.36923 0.800512 7.33281 0.846041 7.30751 0.897799L1.08528 11.5645C1.06386 11.6012 1.046 11.6399 1.03195 11.68C1.03047 11.7096 1.03047 11.7393 1.03195 11.7689C0.973936 11.8389 0.926059 11.9167 0.889728 12C0.880507 12.0768 0.880507 12.1544 0.889728 12.2311C0.888246 12.2607 0.888246 12.2904 0.889728 12.32C0.90378 12.3602 0.921639 12.3988 0.943061 12.4356L7.16528 23.1022C7.24399 23.2349 7.35585 23.3448 7.48988 23.4211C7.62391 23.4974 7.77549 23.5375 7.92973 23.5375C8.08396 23.5375 8.23554 23.4974 8.36957 23.4211C8.5036 23.3448 8.61547 23.2349 8.69417 23.1022L14.9164 12.4356C14.9378 12.3988 14.9557 12.3602 14.9697 12.32C15.0195 12.2978 15.0671 12.271 15.1119 12.24ZM4.03639 12L7.11195 10.6845V13.3511L4.03639 12ZM7.11195 8.74669L3.90306 10.1245L7.11195 4.62224V8.74669ZM8.88973 10.6845L11.9653 12L8.88973 13.3156V10.6845ZM8.88973 8.74669V4.62224L12.0986 10.1245L8.88973 8.74669ZM8.00084 20.8889L3.90306 13.8578L7.65417 15.4667C7.76384 15.5131 7.88173 15.5371 8.00084 15.5371C8.11994 15.5371 8.23783 15.5131 8.34751 15.4667L12.0986 13.8578L8.00084 20.8889Z" fill="#FCFCFC"/>
													</svg>
												</span>
												<div class="ms-2">
													<h6>LTC/Year</h6>
													<span class="text-gray">January</span>
												</div>
											</div>
											<div class="count">
												<h6>120.45</h6>
												<span>-2,24%</span>
											</div>
										</div>
										<div class="previews-info-list">
											<div class="pre-icon">
												<span class="icon-box icon-box-sm bg-pink">
													<svg width="21" height="22" viewBox="0 0 21 22" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M15.8893 12.6666C15.4127 12.6738 14.9402 12.7563 14.4893 12.9111L12.8893 11L14.4893 9.08887C14.9402 9.24363 15.4127 9.32613 15.8893 9.33331C16.9087 9.33828 17.8988 8.99266 18.6937 8.35439C19.4886 7.71613 20.0399 6.82401 20.2552 5.8276C20.4705 4.83118 20.3367 3.79104 19.8763 2.88154C19.4158 1.97203 18.6567 1.24845 17.7262 0.832085C16.7957 0.415724 15.7504 0.331894 14.7654 0.594648C13.7804 0.857402 12.9157 1.45077 12.3163 2.27528C11.7168 3.09978 11.4189 4.10531 11.4727 5.12331C11.5265 6.1413 11.9285 7.10987 12.6115 7.86665L10.9226 9.88887H9.06709C8.79666 8.84147 8.15351 7.92866 7.2582 7.32153C6.36289 6.71441 5.27689 6.45465 4.20376 6.59096C3.13063 6.72726 2.14406 7.25027 1.42896 8.06194C0.713861 8.87362 0.319336 9.91823 0.319336 11C0.319336 12.0817 0.713861 13.1263 1.42896 13.938C2.14406 14.7497 3.13063 15.2727 4.20376 15.409C5.27689 15.5453 6.36289 15.2856 7.2582 14.6784C8.15351 14.0713 8.79666 13.1585 9.06709 12.1111H10.9226L12.6115 14.1333C11.9285 14.8901 11.5265 15.8587 11.4727 16.8767C11.4189 17.8946 11.7168 18.9002 12.3163 19.7247C12.9157 20.5492 13.7804 21.1426 14.7654 21.4053C15.7504 21.6681 16.7957 21.5842 17.7262 21.1679C18.6567 20.7515 19.4158 20.0279 19.8763 19.1184C20.3367 18.2089 20.4705 17.1688 20.2552 16.1724C20.0399 15.1759 19.4886 14.2838 18.6937 13.6456C17.8988 13.0073 16.9087 12.6617 15.8893 12.6666ZM4.77821 13.2222C4.33869 13.2222 3.90905 13.0919 3.54361 12.8477C3.17816 12.6035 2.89334 12.2564 2.72514 11.8504C2.55695 11.4443 2.51294 10.9975 2.59868 10.5664C2.68443 10.1354 2.89607 9.73942 3.20686 9.42863C3.51764 9.11785 3.9136 8.9062 4.34467 8.82046C4.77574 8.73471 5.22256 8.77872 5.62861 8.94691C6.03467 9.11511 6.38174 9.39994 6.62592 9.76538C6.8701 10.1308 7.00043 10.5605 7.00043 11C7.00043 11.5893 6.7663 12.1546 6.34955 12.5713C5.93281 12.9881 5.36758 13.2222 4.77821 13.2222ZM15.8893 2.66665C16.3288 2.66665 16.7585 2.79698 17.1239 3.04116C17.4894 3.28534 17.7742 3.6324 17.9424 4.03846C18.1106 4.44452 18.1546 4.89133 18.0688 5.3224C17.9831 5.75347 17.7714 6.14943 17.4607 6.46022C17.1499 6.771 16.7539 6.98265 16.3229 7.06839C15.8918 7.15414 15.445 7.11013 15.0389 6.94193C14.6329 6.77374 14.2858 6.48891 14.0416 6.12347C13.7974 5.75803 13.6671 5.32838 13.6671 4.88887C13.6671 4.2995 13.9012 3.73427 14.318 3.31752C14.7347 2.90077 15.2999 2.66665 15.8893 2.66665ZM15.8893 19.3333C15.4498 19.3333 15.0202 19.203 14.6547 18.9588C14.2893 18.7146 14.0044 18.3676 13.8363 17.9615C13.6681 17.5554 13.624 17.1086 13.7098 16.6776C13.7955 16.2465 14.0072 15.8505 14.318 15.5397C14.6288 15.229 15.0247 15.0173 15.4558 14.9316C15.8869 14.8458 16.3337 14.8898 16.7397 15.058C17.1458 15.2262 17.4928 15.511 17.737 15.8765C17.9812 16.2419 18.1115 16.6716 18.1115 17.1111C18.1115 17.7005 17.8774 18.2657 17.4607 18.6824C17.0439 19.0992 16.4787 19.3333 15.8893 19.3333Z" fill="#FCFCFC"/>
													</svg>
												</span>
												<div class="ms-2">
													<h6>LTC/Year</h6>
													<span class="text-gray">January</span>
												</div>
											</div>
											<div class="count">
												<h6>120.45</h6>
												<span>-2,24%</span>
											</div>
										</div>
										<div class="previews-info-list">
											<div class="pre-icon">
												<span class="icon-box icon-box-sm bg-primary">
													<svg width="16" height="24" viewBox="0 0 16 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M15.1119 12.24C15.1219 12.1603 15.1219 12.0797 15.1119 12C15.1212 11.9233 15.1212 11.8457 15.1119 11.7689C15.1134 11.7393 15.1134 11.7096 15.1119 11.68C15.0979 11.6399 15.08 11.6012 15.0586 11.5645L8.83639 0.897799C8.81109 0.846041 8.77467 0.800512 8.72973 0.764466C8.64641 0.672805 8.54486 0.599569 8.43159 0.549453C8.31831 0.499338 8.19582 0.47345 8.07195 0.47345C7.94808 0.47345 7.82559 0.499338 7.71231 0.549453C7.59904 0.599569 7.49749 0.672805 7.41417 0.764466C7.36923 0.800512 7.33281 0.846041 7.30751 0.897799L1.08528 11.5645C1.06386 11.6012 1.046 11.6399 1.03195 11.68C1.03047 11.7096 1.03047 11.7393 1.03195 11.7689C0.973936 11.8389 0.926059 11.9167 0.889728 12C0.880507 12.0768 0.880507 12.1544 0.889728 12.2311C0.888246 12.2607 0.888246 12.2904 0.889728 12.32C0.90378 12.3602 0.921639 12.3988 0.943061 12.4356L7.16528 23.1022C7.24399 23.2349 7.35585 23.3448 7.48988 23.4211C7.62391 23.4974 7.77549 23.5375 7.92973 23.5375C8.08396 23.5375 8.23554 23.4974 8.36957 23.4211C8.5036 23.3448 8.61547 23.2349 8.69417 23.1022L14.9164 12.4356C14.9378 12.3988 14.9557 12.3602 14.9697 12.32C15.0195 12.2978 15.0671 12.271 15.1119 12.24ZM4.03639 12L7.11195 10.6845V13.3511L4.03639 12ZM7.11195 8.74669L3.90306 10.1245L7.11195 4.62224V8.74669ZM8.88973 10.6845L11.9653 12L8.88973 13.3156V10.6845ZM8.88973 8.74669V4.62224L12.0986 10.1245L8.88973 8.74669ZM8.00084 20.8889L3.90306 13.8578L7.65417 15.4667C7.76384 15.5131 7.88173 15.5371 8.00084 15.5371C8.11994 15.5371 8.23783 15.5131 8.34751 15.4667L12.0986 13.8578L8.00084 20.8889Z" fill="#FCFCFC"/>
													</svg>
												</span>
												<div class="ms-2">
													<h6>LTC/Year</h6>
													<span class="text-gray">January</span>
												</div>
											</div>
											<div class="count">
												<h6>120.45</h6>
												<span>-2,24%</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-sm-6">
								<div class="card bg-secondary email-susb">
									<div class="card-body text-center">
										<div class="">
											<img src="images/metaverse.png" alt="">
										</div>
										<div class="toatal-email">
											<h3>7,642</h3>
											<h5>Total emails Subcriber</h5>
										</div>
										<a href="exchange.html" class="btn btn-primary email-btn">Buy Coin</a>
									</div>

								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-4">
						<div class="row">
							<div class="col-xl-12 col-sm-6">
								<div class="card h-auto">
									<div class="card-body px-0 pt-1">
										<div class="">
											<nav class="buy-sell">
											  <div class="nav nav-tabs" id="nav-tab2" role="tablist">
												<button class="nav-link active" id="nav-buy-tab" data-bs-toggle="tab" data-bs-target="#nav-buy" type="button" role="tab" aria-controls="nav-buy" aria-selected="true">buy</button>
												<button class="nav-link" id="nav-sell-tab" data-bs-toggle="tab" data-bs-target="#nav-sell" type="button" role="tab" aria-controls="nav-sell" aria-selected="false">sell</button>
											  </div>
											</nav>
											<div class="tab-content" id="nav-tabContent">
												<div class="tab-pane fade show active" id="nav-buy" role="tabpanel" aria-labelledby="nav-buy-tab">
													<nav class="limit-sell">
														<div class="nav nav-tabs" id="nav-tab3" role="tablist">
															<button class="nav-link active" id="nav-market-order-tab1" data-bs-toggle="tab" data-bs-target="#nav-market-order1" type="button" role="tab" aria-controls="nav-market-order1" aria-selected="true">market order</button>
															<button class="nav-link" id="nav-limit-order-tab1" data-bs-toggle="tab" data-bs-target="#nav-limit-order1" type="button" role="tab" aria-controls="nav-limit-order1" aria-selected="false">limit order</button>
													  </div>
													</nav>
													<div class="tab-content" id="nav-tabContent1">
														<div class="tab-pane fade show active" id="nav-market-order1" role="tabpanel" aria-labelledby="nav-market-order-tab1">
														</div>
														<div class="tab-pane fade" id="nav-limit-order1" role="tabpanel" aria-labelledby="nav-limit-order-tab1">
														</div>
													</div>
													<div class="sell-element">
														<form>
															<div class="sell-blance">
																<label class="form-label text-primary">Price</label>
																<div class="form-label blance"><span>BALANCE:</span><p>$3,123.9</p></div>
																<div class="input-group">
																	<input type="text" class="form-control" placeholder="0.00">
																	<span class="input-group-text">USDT</span>
																</div>
															</div>
															<div class="sell-blance">
																<label class="form-label text-primary">Amount</label>
																<div class="input-group">
																	<input type="text" class="form-control" placeholder="Amount">
																	<span class="input-group-text">BTC</span>
																</div>
															</div>
															<div class="sell-blance">
																<label class="form-label text-primary">Total</label>
																<div class="input-group">
																	<input type="text" class="form-control" placeholder="Total">
																	<span class="input-group-text">USDT</span>
																</div>
															</div>
															<div class="slider-wrapper">
															  <div id="employees"></div>
															</div>
															<div class="text-center">
																<a href="exchange.html" class="btn btn-primary w-75">BUY BTC</a>
															</div>
														</form>
													</div>

												</div>
												<div class="tab-pane fade" id="nav-sell" role="tabpanel" aria-labelledby="nav-sell-tab">
													<nav class="limit-sell">
														<div class="nav nav-tabs" id="nav-tab4" role="tablist">
															<button class="nav-link active" id="nav-market-order-tab" data-bs-toggle="tab" data-bs-target="#nav-market-order" type="button" role="tab" aria-controls="nav-market-order" aria-selected="true">market order</button>
															<button class="nav-link" id="nav-limit-order-tab" data-bs-toggle="tab" data-bs-target="#nav-limit-order" type="button" role="tab" aria-controls="nav-limit-order" aria-selected="false">limit order</button>
													  </div>
													</nav>
													<div class="tab-content" id="nav-tabContent2">
													  <div class="tab-pane fade show active" id="nav-market-order" role="tabpanel" aria-labelledby="nav-market-order-tab"></div>
													  <div class="tab-pane fade" id="nav-limit-order" role="tabpanel" aria-labelledby="nav-limit-order-tab">...</div>
													</div>
													<div class="sell-element">
														<form>
															<div class="sell-blance">
																<label class="form-label text-primary">Price</label>
																<div class="form-label blance"><span>BALANCE:</span><p>$3,123.9</p></div>
																<div class="input-group">
																	<input type="text" class="form-control" placeholder="0.00">
																	<span class="input-group-text">USDT</span>
																</div>
															</div>
															<div class="sell-blance">
																<label class="form-label text-primary">Amount</label>
																<div class="input-group">
																	<input type="text" class="form-control" placeholder="Amount">
																	<span class="input-group-text">BTC</span>
																</div>
															</div>
															<div class="sell-blance">
																<label class="form-label text-primary">Total</label>
																<div class="input-group">
																	<input type="text" class="form-control" placeholder="Total">
																	<span class="input-group-text">USDT</span>
																</div>
															</div>
															<div class="slider-wrapper">
															  <div id="employees1"></div>
															</div>
															<div class="text-center">
																<a href="exchange.html" class="btn btn-primary w-75">SELL BTC</a>
															</div>
														</form>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-12 col-sm-6">
								<div class="card">
									<div class="card-header py-2">
										<h2 class="heading">Order Book <span>(BTC/USDT)</span></h2>
									</div>
									<div class="card-body pt-0 pb-3 px-2">
										<nav class="buy-sell style-1">
											<div class="nav nav-tabs" id="nav-tab1" role="tablist">
												<button class="nav-link active" id="nav-openorder-tab" data-bs-toggle="tab" data-bs-target="#nav-openorder" type="button" role="tab" aria-controls="nav-openorder" aria-selected="true">Open Orders</button>
											 	<button class="nav-link" id="nav-orderhistory-tab" data-bs-toggle="tab" data-bs-target="#nav-orderhistory" type="button" role="tab" aria-controls="nav-orderhistory" aria-selected="false">Order History</button>
											</div>
										</nav>
										<div class="tab-content" id="nav-tabContent3">
											<div class="tab-pane fade show active" id="nav-openorder" role="tabpanel" aria-labelledby="nav-openorder-tab">
												<div class="list-row-head">
													<span>Price</span>
													<span>Size</span>
													<span class="text-end">Total</span>
												</div>
												<div class="list-table danger">
													<div class="list-row">
														<span>19852.63</span>
														<span>0.050300</span>
														<span class="text-end">2.362877</span>
														<div class="bg-layer">

														</div>
													</div>
													<div class="list-row"><span>19852.63</span>
														<span>0.050300</span>
														<span class="text-end">2.362877</span>
														<div class="bg-layer">

														</div>
													</div>
													<div class="list-row">
														<span>19852.63</span>
														<span>0.050300</span>
														<span class="text-end">2.362877</span>
														<div class="bg-layer">

														</div>
													</div>
													<div class="list-row">
														<span>19852.63</span>
														<span>0.050300</span>
														<span class="text-end">2.362877</span>
														<div class="bg-layer">

														</div>
													</div>
													<div class="list-row">
														<span>19852.63</span>
														<span>0.050300</span>
														<span class="text-end">2.362877</span>
														<div class="bg-layer">

														</div>
													</div>
													<div class="list-row">
														<span>19852.63</span>
														<span>0.050300</span>
														<span class="text-end">2.362877</span>
														<div class="bg-layer">

														</div>
													</div>

													<div class="list-row">
														<span>19852.63</span>
														<span>0.050300</span>
														<span class="text-end">2.362877</span>
														<div class="bg-layer">

														</div>
													</div>
													<div class="list-row">
														<span>19852.63</span>
														<span>0.050300</span>
														<span class="text-end">2.362877</span>
														<div class="bg-layer">

														</div>
													</div>
													<div class="list-row">
														<span>19852.63</span>
														<span>0.050300</span>
														<span class="text-end">2.362877</span>
														<div class="bg-layer">

														</div>
													</div>
													<div class="list-row">
														<span>19852.63</span>
														<span>0.050300</span>
														<span class="text-end">2.362877</span>
														<div class="bg-layer">

														</div>
													</div>
													<div class="list-row">
														<span>19852.63</span>
														<span>0.050300</span>
														<span class="text-end">2.362877</span>
														<div class="bg-layer">
														</div>
													</div>
												</div>
												<div class="list-bottom-info">
													<h6 class="text-danger mb-0">19858.19 <i class="fa-solid fa-caret-up"></i></h6>
												</div>
												<div class="list-table success">
													<div class="list-row">
														<span>19852.63</span>
														<span>0.050300</span>
														<span class="text-end">2.362877</span>
														<div class="bg-layer">

														</div>
													</div>
													<div class="list-row">
														<span>19852.63</span>
														<span>0.050300</span>
														<span class="text-end">2.362877</span>
														<div class="bg-layer">

														</div>
													</div>
													<div class="list-row">
														<span>19852.63</span>
														<span>0.050300</span>
														<span class="text-end">2.362877</span>
														<div class="bg-layer">

														</div>
													</div>
													<div class="list-row">
														<span>19852.63</span>
														<span>0.050300</span>
														<span class="text-end">2.362877</span>
														<div class="bg-layer">

														</div>
													</div>
													<div class="list-row">
														<span>19852.63</span>
														<span>0.050300</span>
														<span class="text-end">2.362877</span>
														<div class="bg-layer">

														</div>
													</div>
													<div class="list-row">
														<span>19852.63</span>
														<span>0.050300</span>
														<span class="text-end">2.362877</span>
														<div class="bg-layer">

														</div>
													</div>
													<div class="list-row">
														<span>19852.63</span>
														<span>0.050300</span>
														<span class="text-end">2.362877</span>
														<div class="bg-layer">

														</div>
													</div>
													<div class="list-row">
														<span>19852.63</span>
														<span>0.050300</span>
														<span class="text-end">2.362877</span>
														<div class="bg-layer">

														</div>
													</div>
													<div class="list-row">
														<span>19852.63</span>
														<span>0.050300</span>
														<span class="text-end">2.362877</span>
														<div class="bg-layer">

														</div>
													</div>
													<div class="list-row">
														<span>19852.63</span>
														<span>0.050300</span>
														<span class="text-end">2.362877</span>
														<div class="bg-layer">

														</div>
													</div>
													<div class="list-row">
														<span>19852.63</span>
														<span>0.050300</span>
														<span class="text-end">2.362877</span>
														<div class="bg-layer">

														</div>
													</div>
												</div>
											</div>
											<div class="tab-pane fade" id="nav-orderhistory" role="tabpanel" aria-labelledby="nav-orderhistory-tab">
												<div class="list-row-head">
													<span>Price</span>
													<span>Size</span>
													<span class="text-end">Total</span>
												</div>
												<div class="list-table danger">
													<div class="list-row">
														<span>19852.63</span>
														<span>0.050300</span>
														<span class="text-end">2.362877</span>
														<div class="bg-layer">

														</div>
													</div>
													<div class="list-row"><span>19852.63</span>
														<span>0.050300</span>
														<span class="text-end">2.362877</span>
														<div class="bg-layer">

														</div>
													</div>
													<div class="list-row">
														<span>19852.63</span>
														<span>0.050300</span>
														<span class="text-end">2.362877</span>
														<div class="bg-layer">

														</div>
													</div>
													<div class="list-row">
														<span>19852.63</span>
														<span>0.050300</span>
														<span class="text-end">2.362877</span>
														<div class="bg-layer">

														</div>
													</div>
													<div class="list-row">
														<span>19852.63</span>
														<span>0.050300</span>
														<span class="text-end">2.362877</span>
														<div class="bg-layer">

														</div>
													</div>
													<div class="list-row">
														<span>19852.63</span>
														<span>0.050300</span>
														<span class="text-end">2.362877</span>
														<div class="bg-layer">

														</div>
													</div>
													<div class="list-row">
														<span>19852.63</span>
														<span>0.050300</span>
														<span class="text-end">2.362877</span>
														<div class="bg-layer">

														</div>
													</div>
													<div class="list-row">
														<span>19852.63</span>
														<span>0.050300</span>
														<span class="text-end">2.362877</span>
														<div class="bg-layer">

														</div>
													</div>
													<div class="list-row">
														<span>19852.63</span>
														<span>0.050300</span>
														<span class="text-end">2.362877</span>
														<div class="bg-layer">

														</div>
													</div>
													<div class="list-row">
														<span>19852.63</span>
														<span>0.050300</span>
														<span class="text-end">2.362877</span>
														<div class="bg-layer">

														</div>
													</div>
													<div class="list-row">
														<span>19852.63</span>
														<span>0.050300</span>
														<span class="text-end">2.362877</span>
														<div class="bg-layer">

														</div>
													</div>
													<div class="list-row">
														<span>19852.63</span>
														<span>0.050300</span>
														<span class="text-end">2.362877</span>
														<div class="bg-layer">
														</div>
													</div>
												</div>
												<div class="list-bottom-info">
													<h6 class="text-danger mb-0">19858.19 <i class="fa-solid fa-caret-up"></i></h6>
												</div>
												<div class="list-table success">
													<div class="list-row">
														<span>19852.63</span>
														<span>0.050300</span>
														<span class="text-end">2.362877</span>
														<div class="bg-layer">

														</div>
													</div>
													<div class="list-row">
														<span>19852.63</span>
														<span>0.050300</span>
														<span class="text-end">2.362877</span>
														<div class="bg-layer">

														</div>
													</div>
													<div class="list-row">
														<span>19852.63</span>
														<span>0.050300</span>
														<span class="text-end">2.362877</span>
														<div class="bg-layer">

														</div>
													</div>
													<div class="list-row">
														<span>19852.63</span>
														<span>0.050300</span>
														<span class="text-end">2.362877</span>
														<div class="bg-layer">

														</div>
													</div>
													<div class="list-row">
														<span>19852.63</span>
														<span>0.050300</span>
														<span class="text-end">2.362877</span>
														<div class="bg-layer">

														</div>
													</div>
													<div class="list-row">
														<span>19852.63</span>
														<span>0.050300</span>
														<span class="text-end">2.362877</span>
														<div class="bg-layer">

														</div>
													</div>
													<div class="list-row">
														<span>19852.63</span>
														<span>0.050300</span>
														<span class="text-end">2.362877</span>
														<div class="bg-layer">

														</div>
													</div>
													<div class="list-row">
														<span>19852.63</span>
														<span>0.050300</span>
														<span class="text-end">2.362877</span>
														<div class="bg-layer">

														</div>
													</div>
													<div class="list-row">
														<span>19852.63</span>
														<span>0.050300</span>
														<span class="text-end">2.362877</span>
														<div class="bg-layer">

														</div>
													</div>
													<div class="list-row">
														<span>19852.63</span>
														<span>0.050300</span>
														<span class="text-end">2.362877</span>
														<div class="bg-layer">

														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-12 col-sm-6 server-chart">
								<div class="card">
									<div class="card-header border-0 pb-0">
										<h2 class="heading mb-0">Server Status</h2>
									</div>
									<div class="card-body pt-0 custome-tooltip">
										<div id="chartBar" class="chartBar"></div>
										<div class="d-flex server-status">
											<div>
												<span>Country</span>
												<h4 class="fs-14 mb-0">Indonesia</h4>
											</div>
											<div>
												<span>Domain</span>
												<h4 class="fs-14 mb-0">website.com</h4>
											</div>
											<div>
												<span><i class="fa-solid fa-caret-up text-secondary scale-2"></i></span>
												<h4 class="fs-14 mb-0">2.0 mbps</h4>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->



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
