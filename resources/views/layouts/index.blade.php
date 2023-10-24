<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="en-us">

<head>
	<meta charset="utf-8">
	<title>kiut talabalar</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">
	<meta name="description" content="This is meta description">
	<meta name="author" content="Themefisher">
	<link rel="shortcut icon" href="images/favicon.png"  type="image/x-icon">
	<link rel="icon" href="images/favicon.png" type="image/x-icon">

  <!-- theme meta -->
  <meta name="theme-name" content="wallet" />

	<!-- # Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;700&display=swap" rel="stylesheet">

	<!-- # CSS Plugins -->
	<link rel="stylesheet" href="plugins/slick/slick.css">
	<link rel="stylesheet" href="plugins/font-awesome/fontawesome.min.css">
	<link rel="stylesheet" href="plugins/font-awesome/brands.css">
	<link rel="stylesheet" href="plugins/font-awesome/solid.css">

	<!-- # Main Style Sheet -->
	<link rel="stylesheet" href="{{asset('../build/assets/css/style.css')}}">
</head>

<body>

<!-- navigation -->
<header class="navigation bg-tertiary">
	<nav class="navbar navbar-expand-xl navbar-light text-center py-3">
		<div class="container">
			<a class="navbar-brand" href="index.html">
				<img loading="prelaod" decoding="async" class="img-fluid" width="160" src="{{asset('../build/assets/images/logo.png')}}" alt="Wallet">
			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mx-auto mb-2 mb-lg-0">
					<li class="nav-item"> <a class="nav-link" href="{{url('index')}}">Uy</a>
					</li>
					<li class="nav-item "> <a class="nav-link" href="oqituvchilar.html">O'qituvchilar</a>
					</li>
					<li class="nav-item "> <a class="nav-link" href="oquvchilar.html">O'quvchilar</a>
					</li>
					<li class="nav-item "> <a class="nav-link" href="universitet-haqida.html">Universitet haqida</a>
					</li>

				</ul>
				<!-- account btn --> <button href="#!" class="btn btn-outline-primary ">Kirish</button>
				<!-- account btn --> <button href="#!"  class="btn btn-primary ms-2 ms-lg-3 ">Ro'yxatdan o'tish</button>
			</div>
		</div>
	</nav>
</header>
<!-- /navigation -->

<div class="modal applyLoanModal fade" id="applyLoan" tabindex="-1" aria-labelledby="applyLoanLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header border-bottom-0">
        <h4 class="modal-title" id="exampleModalLabel">How much do you need?</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="#!" method="post">
          <div class="row">
            <div class="col-lg-6 mb-4 pb-2">
              <div class="form-group">
                <label for="loan_amount" class="form-label">Amount</label>
                <input type="number" class="form-control shadow-none" id="loan_amount" placeholder="ex: 25000">
              </div>
            </div>
            <div class="col-lg-6 mb-4 pb-2">
              <div class="form-group">
                <label for="loan_how_long_for" class="form-label">How long for?</label>
                <input type="number" class="form-control shadow-none" id="loan_how_long_for" placeholder="ex: 12">
              </div>
            </div>
            <div class="col-lg-12 mb-4 pb-2">
              <div class="form-group">
                <label for="loan_repayment" class="form-label">Repayment</label>
                <input type="number" class="form-control shadow-none" id="loan_repayment" disabled>
              </div>
            </div>
            <div class="col-lg-6 mb-4 pb-2">
              <div class="form-group">
                <label for="loan_full_name" class="form-label">Full Name</label>
                <input type="text" class="form-control shadow-none" id="loan_full_name">
              </div>
            </div>
            <div class="col-lg-6 mb-4 pb-2">
              <div class="form-group">
                <label for="loan_email_address" class="form-label">Email address</label>
                <input type="email" class="form-control shadow-none" id="loan_email_address">
              </div>
            </div>
            <div class="col-lg-12">
              <button type="submit" class="btn btn-primary w-100">Get Your Loan Now</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>


<section class="banner bg-tertiary position-relative overflow-hidden">
  <div class="container">
    <div class="row align-items-center justify-content-center">
      <div class="col-lg-6 mb-5 mb-lg-0">
        <div class="block text-center text-lg-start pe-0 pe-xl-5">
          <h1 class="text-capitalize mb-4">Toshkent Kimyo Xalqaro Universiteti</h1>
          <p class="mb-4">Bu dastur orqali Toshkent Kimyo Xalqaro Universiteti talabalari
            <br>bir birlari bilan o'zaro ma'lumot almashishlari mumkun.</p> <a type="button"
            class="btn btn-primary" href="#" data-bs-toggle="modal" data-bs-target="#applyLoan">Hoziroq ro'yxatdan o'ting <span style="font-size: 14px;" class="ms-2 fas fa-arrow-right"></span></a>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="ps-lg-5 text-center">
          <img loading="lazy" decoding="async"
            src="{{asset('../build/assets/images/banner/banner.png')}}"
            alt="banner image" class="w-100">
        </div>
      </div>
    </div>
  </div>
  <div class="has-shapes">
    <svg class="shape shape-left text-light" viewBox="0 0 192 752" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path
        d="M-30.883 0C-41.3436 36.4248 -22.7145 75.8085 4.29154 102.398C31.2976 128.987 65.8677 146.199 97.6457 166.87C129.424 187.542 160.139 213.902 172.162 249.847C193.542 313.799 149.886 378.897 129.069 443.036C97.5623 540.079 122.109 653.229 191 728.495"
        stroke="currentColor" stroke-miterlimit="10" />
      <path
        d="M-55.5959 7.52271C-66.0565 43.9475 -47.4274 83.3312 -20.4214 109.92C6.58466 136.51 41.1549 153.722 72.9328 174.393C104.711 195.064 135.426 221.425 147.449 257.37C168.829 321.322 125.174 386.42 104.356 450.559C72.8494 547.601 97.3965 660.752 166.287 736.018"
        stroke="currentColor" stroke-miterlimit="10" />
      <path
        d="M-80.3302 15.0449C-90.7909 51.4697 -72.1617 90.8535 -45.1557 117.443C-18.1497 144.032 16.4205 161.244 48.1984 181.915C79.9763 202.587 110.691 228.947 122.715 264.892C144.095 328.844 100.439 393.942 79.622 458.081C48.115 555.123 72.6622 668.274 141.552 743.54"
        stroke="currentColor" stroke-miterlimit="10" />
      <path
        d="M-105.045 22.5676C-115.506 58.9924 -96.8766 98.3762 -69.8706 124.965C-42.8646 151.555 -8.29436 168.767 23.4835 189.438C55.2615 210.109 85.9766 236.469 98.0001 272.415C119.38 336.367 75.7243 401.464 54.9072 465.604C23.4002 562.646 47.9473 675.796 116.838 751.063"
        stroke="currentColor" stroke-miterlimit="10" />
    </svg>
    <svg class="shape shape-right text-light" viewBox="0 0 731 746" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path
        d="M12.1794 745.14C1.80036 707.275 -5.75764 666.015 8.73984 629.537C27.748 581.745 80.4729 554.968 131.538 548.843C182.604 542.703 234.032 552.841 285.323 556.748C336.615 560.64 391.543 557.276 433.828 527.964C492.452 487.323 511.701 408.123 564.607 360.255C608.718 320.353 675.307 307.183 731.29 327.323"
        stroke="currentColor" stroke-miterlimit="10" />
      <path
        d="M51.0253 745.14C41.2045 709.326 34.0538 670.284 47.7668 635.783C65.7491 590.571 115.623 565.242 163.928 559.449C212.248 553.641 260.884 563.235 309.4 566.931C357.916 570.627 409.887 567.429 449.879 539.701C505.35 501.247 523.543 426.331 573.598 381.059C615.326 343.314 678.324 330.853 731.275 349.906"
        stroke="currentColor" stroke-miterlimit="10" />
      <path
        d="M89.8715 745.14C80.6239 711.363 73.8654 674.568 86.8091 642.028C103.766 599.396 150.788 575.515 196.347 570.054C241.906 564.578 287.767 573.629 333.523 577.099C379.278 580.584 428.277 577.567 465.976 551.423C518.279 515.172 535.431 444.525 582.62 401.832C621.964 366.229 681.356 354.493 731.291 372.46"
        stroke="currentColor" stroke-miterlimit="10" />
      <path
        d="M128.718 745.14C120.029 713.414 113.678 678.838 125.837 648.274C141.768 608.221 185.939 585.788 228.737 580.659C271.536 575.515 314.621 584.008 357.6 587.282C400.58 590.556 446.607 587.719 482.028 563.16C531.163 529.111 547.275 462.733 591.612 422.635C628.572 389.19 684.375 378.162 731.276 395.043"
        stroke="currentColor" stroke-miterlimit="10" />
      <path
        d="M167.564 745.14C159.432 715.451 153.504 683.107 164.863 654.519C179.753 617.046 221.088 596.062 261.126 591.265C301.164 586.452 341.473 594.402 381.677 597.465C421.88 600.527 464.95 597.872 498.094 574.896C544.061 543.035 559.146 480.942 600.617 443.423C635.194 412.135 687.406 401.817 731.276 417.612"
        stroke="currentColor" stroke-miterlimit="10" />
      <path
        d="M817.266 289.466C813.108 259.989 787.151 237.697 759.261 227.271C731.372 216.846 701.077 215.553 671.666 210.904C642.254 206.24 611.795 197.156 591.664 175.224C555.853 136.189 566.345 75.5336 560.763 22.8649C552.302 -56.8256 498.487 -130.133 425 -162.081"
        stroke="currentColor" stroke-miterlimit="10" />
      <path
        d="M832.584 276.159C828.427 246.683 802.469 224.391 774.58 213.965C746.69 203.539 716.395 202.246 686.984 197.598C657.573 192.934 627.114 183.85 606.982 161.918C571.172 122.883 581.663 62.2275 576.082 9.55873C567.62 -70.1318 513.806 -143.439 440.318 -175.387"
        stroke="currentColor" stroke-miterlimit="10" />
      <path
        d="M847.904 262.853C843.747 233.376 817.789 211.084 789.9 200.659C762.011 190.233 731.716 188.94 702.304 184.292C672.893 179.627 642.434 170.544 622.303 148.612C586.492 109.577 596.983 48.9211 591.402 -3.74766C582.94 -83.4382 529.126 -156.746 455.638 -188.694"
        stroke="currentColor" stroke-miterlimit="10" />
      <path
        d="M863.24 249.547C859.083 220.07 833.125 197.778 805.236 187.353C777.347 176.927 747.051 175.634 717.64 170.986C688.229 166.321 657.77 157.237 637.639 135.306C601.828 96.2707 612.319 35.6149 606.738 -17.0538C598.276 -96.7443 544.462 -170.052 470.974 -202"
        stroke="currentColor" stroke-miterlimit="10" />
    </svg>
  </div>
</section>
<!-- yangiliklar -->
<section class="section testimonials overflow-hidden bg-tertiary">
  <div class="container">
    <div class="row justify-content-center">
    </div>
    <div class="row position-relative">
      <div class="col-lg-4 col-md-6 pt-1 ">
        <div class="section-title "><br><br>
          <p class="text-primary text-uppercase fw-bold mb-3">Kiut namangan</p>

          <h1 class="mb-4">Kiut Namangan yangiliklari</h1>
          <p class="lead mb-0">Toshkent Kimyo Xalqaro Universiteti Namangan filiali so'ngi yangiliklari</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 pt-1">
        <div class="shadow rounded bg-white p-4 mt-4">
          <div class="d-block d-sm-flex align-items-center mb-3">
            <img loading="lazy" decoding="async"
              src="{{asset('../build/assets/images/testimonials/02.jpg')}}"
              alt="Arlene McCoy" class="img-fluid" width="65" height="66">
            <div class="mt-3 mt-sm-0 ms-0 ms-sm-3">
              <h4 class="h5 mb-1">Arlene McCoy</h4>
              <p class="mb-0">Content Strategist</p>
            </div>
          </div>
          <div class="content">Lorem ipsum dolor <a href="http://google.com">@reamansimond</a> demina egestas sit purus
            felis arcu. Vitae, turpisds tortr etiam faucibus ac suspendisse.</div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 pt-1">
        <div class="shadow rounded bg-white p-4 mt-4">
          <div class="d-block d-sm-flex align-items-center mb-3">
            <img loading="lazy" decoding="async"
              src="{{asset('../build/assets/images/testimonials/03.jpg')}}"
              alt="Marvin McKinney" class="img-fluid" width="65" height="66">
            <div class="mt-3 mt-sm-0 ms-0 ms-sm-3">
              <h4 class="h5 mb-1">Marvin McKinney</h4>
              <p class="mb-0">Video Game Writer</p>
            </div>
          </div>
          <div class="content">Lorem ipsum dolor <a href="http://google.com">@reamansimond</a> demina egestas sit purus
            felis arcu. Vitae, turpisds tortr etiam faucibus ac suspendisse.</div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 pt-1">
        <div class="shadow rounded bg-white p-4 mt-4">
          <div class="d-block d-sm-flex align-items-center mb-3">
            <img loading="lazy" decoding="async"
              src="{{asset('../build/assets/images/testimonials/04.jpg')}}"
              alt="Devon Lane" class="img-fluid" width="65" height="66">
            <div class="mt-3 mt-sm-0 ms-0 ms-sm-3">
              <h4 class="h5 mb-1">Devon Lane</h4>
              <p class="mb-0">Nursing Assistant</p>
            </div>
          </div>
          <div class="content">Lorem ipsum dolor <a href="http://google.com">@reamansimond</a> demina egestas sit purus
            felis arcu. Vitae, turpisds tortr etiam faucibus ac suspendisse.</div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 pt-1">
        <div class="shadow rounded bg-white p-4 mt-4">
          <div class="d-block d-sm-flex align-items-center mb-3">
            <img loading="lazy" decoding="async"
              src="{{asset('../build/assets/images/testimonials/05.jpg')}}"
              alt="Bessie Cooper" class="img-fluid" width="65" height="66">
            <div class="mt-3 mt-sm-0 ms-0 ms-sm-3">
              <h4 class="h5 mb-1">Bessie Cooper</h4>
              <p class="mb-0">Video Game Writer</p>
            </div>
          </div>
          <div class="content">Lorem ipsum dolor <a href="http://google.com">@reamansimond</a> demina egestas sit purus
            felis arcu. Vitae, turpisds tortr etiam faucibus ac suspendisse.</div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 pt-1">
        <div class="shadow rounded bg-white p-4 mt-4">
          <div class="d-block d-sm-flex align-items-center mb-3">
            <img loading="lazy" decoding="async"
              src="{{asset('../build/assets/images/testimonials/06.jpg')}}"
              alt="Kathryn Murphy" class="img-fluid" width="65" height="66">
            <div class="mt-3 mt-sm-0 ms-0 ms-sm-3">
              <h4 class="h5 mb-1">Kathryn Murphy</h4>
              <p class="mb-0">Film Critic</p>
            </div>
          </div>
          <div class="content">Lorem ipsum dolor <a href="http://google.com">@reamansimond</a> demina egestas sit purus
            felis arcu. Vitae, turpisds tortr etiam faucibus ac suspendisse.</div>
        </div>
      </div>
    </div>
  </div>
  <div class="has-shapes">
    <svg class="shape shape-left text-light" width="290" height="709" viewBox="0 0 290 709" fill="none"
      xmlns="http://www.w3.org/2000/svg">
      <path
        d="M-119.511 58.4275C-120.188 96.3185 -92.0001 129.539 -59.0325 148.232C-26.0649 166.926 11.7821 174.604 47.8274 186.346C83.8726 198.088 120.364 215.601 141.281 247.209C178.484 303.449 153.165 377.627 149.657 444.969C144.34 546.859 197.336 649.801 283.36 704.673"
        stroke="currentColor" stroke-miterlimit="10" />
      <path
        d="M-141.434 72.0899C-142.111 109.981 -113.923 143.201 -80.9554 161.895C-47.9878 180.588 -10.1407 188.267 25.9045 200.009C61.9497 211.751 98.4408 229.263 119.358 260.872C156.561 317.111 131.242 391.29 127.734 458.631C122.417 560.522 175.414 663.463 261.437 718.335"
        stroke="currentColor" stroke-miterlimit="10" />
      <path
        d="M-163.379 85.7578C-164.056 123.649 -135.868 156.869 -102.901 175.563C-69.9331 194.256 -32.086 201.934 3.9592 213.677C40.0044 225.419 76.4955 242.931 97.4127 274.54C134.616 330.779 109.296 404.957 105.789 472.299C100.472 574.19 153.468 677.131 239.492 732.003"
        stroke="currentColor" stroke-miterlimit="10" />
      <path
        d="M-185.305 99.4208C-185.982 137.312 -157.794 170.532 -124.826 189.226C-91.8589 207.919 -54.0118 215.597 -17.9666 227.34C18.0787 239.082 54.5697 256.594 75.4869 288.203C112.69 344.442 87.3706 418.62 83.8633 485.962C78.5463 587.852 131.542 690.794 217.566 745.666"
        stroke="currentColor" stroke-miterlimit="10" />
    </svg>
    <svg class="shape shape-right text-light" width="731" height="429" viewBox="0 0 731 429" fill="none"
      xmlns="http://www.w3.org/2000/svg">
      <path
        d="M12.1794 428.14C1.80036 390.275 -5.75764 349.015 8.73984 312.537C27.748 264.745 80.4729 237.968 131.538 231.843C182.604 225.703 234.032 235.841 285.323 239.748C336.615 243.64 391.543 240.276 433.828 210.964C492.452 170.323 511.701 91.1227 564.607 43.2553C608.718 3.35334 675.307 -9.81661 731.29 10.323"
        stroke="currentColor" stroke-miterlimit="10" />
      <path
        d="M51.0253 428.14C41.2045 392.326 34.0538 353.284 47.7668 318.783C65.7491 273.571 115.623 248.242 163.928 242.449C212.248 236.641 260.884 246.235 309.4 249.931C357.916 253.627 409.887 250.429 449.879 222.701C505.35 184.248 523.543 109.331 573.598 64.0588C615.326 26.3141 678.324 13.8532 731.275 32.9066"
        stroke="currentColor" stroke-miterlimit="10" />
      <path
        d="M89.8715 428.14C80.6239 394.363 73.8654 357.568 86.8091 325.028C103.766 282.396 150.788 258.515 196.347 253.054C241.906 247.578 287.767 256.629 333.523 260.099C379.278 263.584 428.277 260.567 465.976 234.423C518.279 198.172 535.431 127.525 582.62 84.8317C621.964 49.2292 681.356 37.4924 731.291 55.4596"
        stroke="currentColor" stroke-miterlimit="10" />
      <path
        d="M128.718 428.14C120.029 396.414 113.678 361.838 125.837 331.274C141.768 291.221 185.939 268.788 228.737 263.659C271.536 258.515 314.621 267.008 357.6 270.282C400.58 273.556 446.607 270.719 482.028 246.16C531.163 212.111 547.275 145.733 591.612 105.635C628.572 72.19 684.375 61.1622 731.276 78.0432"
        stroke="currentColor" stroke-miterlimit="10" />
      <path
        d="M167.564 428.14C159.432 398.451 153.504 366.107 164.863 337.519C179.753 300.046 221.088 279.062 261.126 274.265C301.164 269.452 341.473 277.402 381.677 280.465C421.88 283.527 464.95 280.872 498.094 257.896C544.061 226.035 559.146 163.942 600.617 126.423C635.194 95.1355 687.406 84.8167 731.276 100.612"
        stroke="currentColor" stroke-miterlimit="10" />
    </svg>
  </div>
</section>
<!-- yangiliklar -->


<section class="homepage_tab position-relative">
  <div class="section container">
    <div class="row justify-content-center">
      <div class="col-lg-8 mb-4">
        <div class="section-title text-center">
          <p class="text-primary text-uppercase fw-bold mb-3">kiut namangan</p>
          <h1>Toshkent Kimyo Xalqaro Universiteti Namangan Filiali Ijtimoiy Tarmoqlari</h1>
        </div>
      </div>
      <div class="col-lg-10">
        <ul class="payment_info_tab nav nav-pills justify-content-center mb-4" id="pills-tab" role="tablist">
          <li class="nav-item m-2" role="presentation"> <a
              class="nav-link btn btn-outline-primary effect-none text-dark active" id="pills-how-much-can-i-recive-tab"
              data-bs-toggle="pill" href="#pills-how-much-can-i-recive" role="tab"
              aria-controls="pills-how-much-can-i-recive" aria-selected="true">Instagram ijtimoiy tarmog'i</a>
          </li>
          <li class="nav-item m-2" role="presentation"> <a
              class="nav-link btn btn-outline-primary effect-none text-dark " id="pills-how-much-does-it-costs-tab"
              data-bs-toggle="pill" href="#pills-how-much-does-it-costs" role="tab"
              aria-controls="pills-how-much-does-it-costs" aria-selected="true">Telegram ijtimoiy tarmog'i</a>
          </li>
          <li class="nav-item m-2" role="presentation"> <a
              class="nav-link btn btn-outline-primary effect-none text-dark " id="pills-how-do-i-repay-tab"
              data-bs-toggle="pill" href="#pills-how-do-i-repay" role="tab" aria-controls="pills-how-do-i-repay"
              aria-selected="true">You Tube ijtimoiy tarmog'i</a>
          </li>
        </ul>
        <div class="rounded shadow bg-white p-5 tab-content" id="pills-tabContent">
          <div  class="tab-pane fade show active" id="pills-how-much-can-i-recive" role="tabpanel"
            aria-labelledby="pills-how-much-can-i-recive-tab">
            <div class="row align-items-center">
              <div class="col-md-6 order-1 order-md-0">
                <div class="content-block">
                  <a href="https://www.instagram.com/kiut.namangan_rasmiy/">
                     <h3 class="mb-4">Instagram ijtimoiy tarmog'i</h3>
                  </a>
                  <div class="content">
                    <p>Ushbu ijtimoiy tarmoq orqali universitetdagi eng so'ngi yangiliklardan habardor bo'lishingiz </p>
                    <p>va o'z fikringizni bildirishingiz mumkun.</p><br>
                    <a href="https://www.instagram.com/kiut.namangan_rasmiy/">
                      <!-- instagram --> <button href="#!" class="btn btn-outline-primary ">Instagramga kirish</button>
                    </a>

                  </div>
                </div>
              </div>
              <div class="col-md-6 order-0 order-md-1 mb-5 mt-md-0">
                <div class="image-block text-center">
                  <img loading="lazy" decoding="async"
                    src="{{asset('../build/assets/images/payment-info.png')}}" alt="How Much Can I Recive?" class="img-fluid">
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade " id="pills-how-much-does-it-costs" role="tabpanel"
            aria-labelledby="pills-how-much-does-it-costs-tab">
            <div class="row align-items-center">
              <div class="col-md-6 order-1 order-md-0">
                <div class="content-block">
                  <a href="https://t.me/kiut_nm">
                     <h3 class="mb-4">Telegram ijtimoiy tarmog'i</h3>
                  </a>

                  <div class="content">
                    <p>Ushbu ijtimoiy tarmoq orqali universitetdagi eng so'ngi yangiliklardan habardor bo'lishingiz</p>
                    <p>va o'z fikringizni bildirishingiz mumkun.</p><br>
                    <a href="https://t.me/kiut_nm">
			<!-- telegram --> <button href="#!" class="btn btn-outline-primary ">Telegramga kirish</button>
                    </a>

                  </div>
                </div>
              </div>
              <div class="col-md-6 order-0 order-md-1 mb-5 mt-md-0">
                <div class="image-block text-center">
                  <img loading="lazy" decoding="async" src="{{asset('../build/assets/images/illustration-2.png')}}" alt="How Much Does It Costs?" class="img-fluid">
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade " id="pills-how-do-i-repay" role="tabpanel"
            aria-labelledby="pills-how-do-i-repay-tab">
            <div class="row align-items-center">
              <div class="col-md-6 order-1 order-md-0">
                <div class="content-block">
                  <a href="https://www.youtube.com/@Kiut.namangan_rasmiy">
                    <h3 class="mb-4">You Tube ijtimoiy tarmog'i</h3>
                  </a>

                  <div class="content">
                    <p>Ushbu ijtimoiy tarmoq orqali universitetdagi eng so'ngi yangiliklardan habardor bo'lishingiz</p>
                    <p>va o'z fikringizni bildirishingiz mumkun.</p><br>
                    <a href="https://www.youtube.com/@Kiut.namangan_rasmiy">
				<!-- you tube --> <button href="#!" class="btn btn-outline-primary ">You Tubega kirish</button>
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-md-6 order-0 order-md-1 mb-5 mt-md-0">
                <div class="image-block text-center">
                  <img loading="lazy" decoding="async" src="{{asset('../build/assets/images/illustration-1.png')}}" alt="How Do I Repay?" class="img-fluid">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="has-shapes">
      <svg class="shape shape-left text-light" width="290" height="709" viewBox="0 0 290 709" fill="none"
        xmlns="http://www.w3.org/2000/svg">
        <path
          d="M-119.511 58.4275C-120.188 96.3185 -92.0001 129.539 -59.0325 148.232C-26.0649 166.926 11.7821 174.604 47.8274 186.346C83.8726 198.088 120.364 215.601 141.281 247.209C178.484 303.449 153.165 377.627 149.657 444.969C144.34 546.859 197.336 649.801 283.36 704.673"
          stroke="currentColor" stroke-miterlimit="10" />
        <path
          d="M-141.434 72.0899C-142.111 109.981 -113.923 143.201 -80.9554 161.895C-47.9878 180.588 -10.1407 188.267 25.9045 200.009C61.9497 211.751 98.4408 229.263 119.358 260.872C156.561 317.111 131.242 391.29 127.734 458.631C122.417 560.522 175.414 663.463 261.437 718.335"
          stroke="currentColor" stroke-miterlimit="10" />
        <path
          d="M-163.379 85.7578C-164.056 123.649 -135.868 156.869 -102.901 175.563C-69.9331 194.256 -32.086 201.934 3.9592 213.677C40.0044 225.419 76.4955 242.931 97.4127 274.54C134.616 330.779 109.296 404.957 105.789 472.299C100.472 574.19 153.468 677.131 239.492 732.003"
          stroke="currentColor" stroke-miterlimit="10" />
        <path
          d="M-185.305 99.4208C-185.982 137.312 -157.794 170.532 -124.826 189.226C-91.8589 207.919 -54.0118 215.597 -17.9666 227.34C18.0787 239.082 54.5697 256.594 75.4869 288.203C112.69 344.442 87.3706 418.62 83.8633 485.962C78.5463 587.852 131.542 690.794 217.566 745.666"
          stroke="currentColor" stroke-miterlimit="10" />
      </svg>
      <svg class="shape shape-right text-light" width="474" height="511" viewBox="0 0 474 511" fill="none"
        xmlns="http://www.w3.org/2000/svg">
        <path
          d="M601.776 325.899C579.043 348.894 552.727 371.275 520.74 375.956C478.826 382.079 438.015 355.5 412.619 321.6C387.211 287.707 373.264 246.852 354.93 208.66C336.584 170.473 311.566 132.682 273.247 114.593C220.12 89.5159 155.704 108.4 99.7772 90.3769C53.1531 75.3464 16.3392 33.2759 7.65012 -14.947"
          stroke="currentColor" stroke-miterlimit="10" />
        <path
          d="M585.78 298.192C564.28 319.945 539.378 341.122 509.124 345.548C469.472 351.341 430.868 326.199 406.845 294.131C382.805 262.059 369.62 223.419 352.278 187.293C334.936 151.168 311.254 115.417 275.009 98.311C224.74 74.582 163.815 92.4554 110.913 75.3971C66.8087 61.1784 31.979 21.3767 23.7639 -24.2362"
          stroke="currentColor" stroke-miterlimit="10" />
        <path
          d="M569.783 270.486C549.5 290.99 526.04 310.962 497.501 315.13C460.111 320.592 423.715 296.887 401.059 266.641C378.392 236.402 365.963 199.965 349.596 165.901C333.24 131.832 310.911 98.1265 276.74 82.0034C229.347 59.6271 171.895 76.4848 122.013 60.4086C80.419 47.0077 47.5905 9.47947 39.8431 -33.5342"
          stroke="currentColor" stroke-miterlimit="10" />
        <path
          d="M553.787 242.779C534.737 262.041 512.691 280.809 485.884 284.722C450.757 289.853 416.568 267.586 395.286 239.173C373.993 210.766 362.308 176.538 346.945 144.535C331.581 112.533 310.605 80.8723 278.502 65.7217C233.984 44.6979 180.006 60.54 133.149 45.4289C94.0746 32.8398 63.2303 -2.41965 55.9568 -42.8233"
          stroke="currentColor" stroke-miterlimit="10" />
        <path
          d="M537.791 215.073C519.964 233.098 499.336 250.645 474.269 254.315C441.41 259.126 409.422 238.286 389.513 211.704C369.594 185.13 358.665 153.106 344.294 123.17C329.923 93.2337 310.293 63.6078 280.258 49.4296C238.605 29.7646 188.105 44.5741 144.268 30.4451C107.714 18.6677 78.8538 -14.3229 72.0543 -52.1165"
          stroke="currentColor" stroke-miterlimit="10" />
      </svg>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6">
        <div class="section-title pt-4">
          <p class="text-primary text-uppercase fw-bold mb-3">Kiut Namangan</p>
          <h1>Kiut Namangan yangiliklari</h1>
          <p>Toshkent Kimyo Xalqaro Universiteti Namangan filiali songi yangiliklari</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 service-item">
        <a class="text-black" href="service-details.html">
          <div class="block"> <span class="colored-box text-center h3 mb-4">01</span>
            <h3 class="mb-3 service-title">Personal loans</h3>
            <p class="mb-0 service-description">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
              eirmod</p>
          </div>
        </a>
      </div>
      <div class="col-lg-4 col-md-6 service-item">
        <a class="text-black" href="service-details.html">
          <div class="block"> <span class="colored-box text-center h3 mb-4">02</span>
            <h3 class="mb-3 service-title">Home Equity Loans</h3>
            <p class="mb-0 service-description">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
              eirmod</p>
          </div>
        </a>
      </div>
      <div class="col-lg-4 col-md-6 service-item">
        <a class="text-black" href="service-details.html">
          <div class="block"> <span class="colored-box text-center h3 mb-4">


              03

            </span>
            <h3 class="mb-3 service-title">Student Loans</h3>
            <p class="mb-0 service-description">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
              eirmod</p>
          </div>
        </a>
      </div>
      <div class="col-lg-4 col-md-6 service-item">
        <a class="text-black" href="service-details.html">
          <div class="block"> <span class="colored-box text-center h3 mb-4">


              04

            </span>
            <h3 class="mb-3 service-title">Mortgage Loans</h3>
            <p class="mb-0 service-description">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
              eirmod</p>
          </div>
        </a>
      </div>
      <div class="col-lg-4 col-md-6 service-item">
        <a class="text-black" href="service-details.html">
          <div class="block"> <span class="colored-box text-center h3 mb-4">


              05

            </span>
            <h3 class="mb-3 service-title">Payday Loans</h3>
            <p class="mb-0 service-description">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
              eirmod</p>
          </div>
        </a>
      </div>
    </div>
  </div>
</section>

<footer class="section-sm bg-tertiary">
	<div class="container">
		<div class="row justify-content-between">
			<div class="col-lg-2 col-md-4 col-6 mb-4">
				<div class="footer-widget">
					<h5 class="mb-4 text-primary font-secondary">Navbar</h5>
					<ul class="list-unstyled">
						<li class="mb-2"><a href="index.html">Uy</a>
						</li>
						<li class="mb-2"><a href="oqituvchilar.html">O'qituvchilar</a>
						</li>
						<li class="mb-2"><a href="oquvchilar.html">O'quvchilar</a>
						</li>
						<li class="mb-2"><a href="universitet-haqida.html">universitet haqida</a>
						</li>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-lg-2 col-md-4 col-6 mb-4">
				<div class="footer-widget">
					<h5 class="mb-4 text-primary font-secondary">Biz haqimizda </h5>
					<ul class="list-unstyled">
						<li class="mb-2"><a href="#!">Telegram</a>
						</li>
						<li class="mb-2"><a href="#!">Instagram</a>
						</li>
						<li class="mb-2"><a href="#!">You Tube</a>
						</li>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-lg-2 col-md-4 col-6 mb-4">
				<div class="footer-widget">
					<h5 class="mb-4 text-primary font-secondary">Yordam</h5>
					<ul class="list-unstyled">
						<li class="mb-2"><a href="contact.html">Biz bilan bog'lanish</a>
						</li>
						<li class="mb-2"><a href="faq.html">FAQs</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-lg-4 col-md-12 newsletter-form">
				<div style="background-color: #F4F4F4; padding: 35px;">
					<h5 class="mb-4 text-primary font-secondary">Obuna bo'ling</h5>
					<div class="pe-0 pe-xl-5">
						<form action="#!" method="post" name="mc-embedded-subscribe-form" target="_blank">
							<div class="input-group mb-3">
								<input type="text" class="form-control shadow-none bg-white border-end-0" placeholder="Email address"> <span class="input-group-text border-0 p-0">
                    <button class="input-group-text border-0 bg-primary" type="submit" name="subscribe"
                      aria-label="Subscribe for Newsletter"><i class="fas fa-arrow-right"></i></button>
                  </span>
							</div>
							<div style="position: absolute; left: -5000px;" aria-hidden="true">
								<input type="text" name="b_463ee871f45d2d93748e77cad_a0a2c6d074" tabindex="-1">
							</div>
						</form>
					</div>
					<p class="mb-0">Lorem ipsum dolor sit amet, rdghds consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat</p>
				</div>
			</div>
		</div>
		<div class="row align-items-center mt-5 text-center text-md-start">
			<div class="col-lg-4">
        <a href="index.html">
          <img loading="prelaod" decoding="async" class="img-fluid" width="160" src="{{asset('../build/assets/images/logo.png')}}" alt="Wallet">
        </a>
			</div>
			<div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
				<ul class="list-unstyled list-inline mb-0 text-lg-center">
					<li class="list-inline-item me-4"><a class="text-black" href="privacy-policy.html">Privacy Policy</a>
					</li>
					<li class="list-inline-item me-4"><a class="text-black" href="terms.html">Terms &amp; Conditions</a>
					</li>
				</ul>
			</div>
			<div class="col-lg-4 col-md-6 text-md-end mt-4 mt-md-0">
				<ul class="list-unstyled list-inline mb-0 social-icons">
					<li class="list-inline-item me-3"><a title="Explorer Facebook Profile" class="text-black" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
					</li>
					<li class="list-inline-item me-3"><a title="Explorer Twitter Profile" class="text-black" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
					</li>
					<li class="list-inline-item me-3"><a title="Explorer Instagram Profile" class="text-black" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</footer>


<!-- # JS Plugins -->
<script src="{{asset('../build/assets/plugins/jquery/jquery.min.js')}}"></script>
<script src="{{asset('../build/assets/plugins/bootstrap/bootstrap.min.js')}}"></script>
<script src="{{asset('../build/assets/plugins/slick/slick.min.js')}}"></script>
<script src="{{asset('../build/assets/plugins/scrollmenu/scrollmenu.min.js')}}"></script>

<!-- Main Script -->
<script src="{{asset('../build/assets/js/script.js')}}"></script>

</body>
</html>
