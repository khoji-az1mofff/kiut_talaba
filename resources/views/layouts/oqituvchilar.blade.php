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
	<title>Wallet - Payday Loan Service Template</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">
	<meta name="description" content="This is meta description">
	<meta name="author" content="Themefisher">
	<link rel="shortcut icon" href="{{asset('../build/assets/images/favicon.png')}}" type="image/x-icon">
	<link rel="icon" href="{{asset('../build/assets/images/favicon.png')}}" type="image/x-icon">

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
					<li class="nav-item"> <a class="nav-link" href="index.html">Uy</a>
					</li>
					<li class="nav-item "> <a class="nav-link" href="oqituvchilar.html">O'qituvchilar</a>
					</li>
					<li class="nav-item "> <a class="nav-link" href="oquvchilar.html">O'quvchilar</a>
					</li>
					<li class="nav-item "> <a class="nav-link" href="universitet-haqida.html">Universitet haqida</a>
					</li>

				</ul>
				<!-- account btn --> <a href="#!" class="btn btn-outline-primary">Kirish</a>
				<!-- account btn --> <a href="#!" class="btn btn-primary ms-2 ms-lg-3">Ro'yxatdan o'tish</a>
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

<section class="page-header bg-tertiary">
	<div class="container">
		<div class="row">
			<div class="col-8 mx-auto text-center">
				<h2 class="mb-3 text-capitalize">O'qituvchilar</h2>
				<ul class="list-inline breadcrumbs text-capitalize" style="font-weight:500">
					<li class="list-inline-item"><a href="index.html">Uy</a>
					</li>
					<li class="list-inline-item">/ &nbsp; <a href="oqituvchilar.html">O'qituvchilar</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="has-shapes">
		<svg class="shape shape-left text-light" viewBox="0 0 192 752" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M-30.883 0C-41.3436 36.4248 -22.7145 75.8085 4.29154 102.398C31.2976 128.987 65.8677 146.199 97.6457 166.87C129.424 187.542 160.139 213.902 172.162 249.847C193.542 313.799 149.886 378.897 129.069 443.036C97.5623 540.079 122.109 653.229 191 728.495" stroke="currentColor" stroke-miterlimit="10" />
			<path d="M-55.5959 7.52271C-66.0565 43.9475 -47.4274 83.3312 -20.4214 109.92C6.58466 136.51 41.1549 153.722 72.9328 174.393C104.711 195.064 135.426 221.425 147.449 257.37C168.829 321.322 125.174 386.42 104.356 450.559C72.8494 547.601 97.3965 660.752 166.287 736.018" stroke="currentColor" stroke-miterlimit="10" />
			<path d="M-80.3302 15.0449C-90.7909 51.4697 -72.1617 90.8535 -45.1557 117.443C-18.1497 144.032 16.4205 161.244 48.1984 181.915C79.9763 202.587 110.691 228.947 122.715 264.892C144.095 328.844 100.439 393.942 79.622 458.081C48.115 555.123 72.6622 668.274 141.552 743.54" stroke="currentColor" stroke-miterlimit="10" />
			<path d="M-105.045 22.5676C-115.506 58.9924 -96.8766 98.3762 -69.8706 124.965C-42.8646 151.555 -8.29436 168.767 23.4835 189.438C55.2615 210.109 85.9766 236.469 98.0001 272.415C119.38 336.367 75.7243 401.464 54.9072 465.604C23.4002 562.646 47.9473 675.796 116.838 751.063" stroke="currentColor" stroke-miterlimit="10" />
		</svg>
		<svg class="shape shape-right text-light" viewBox="0 0 731 746" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M12.1794 745.14C1.80036 707.275 -5.75764 666.015 8.73984 629.537C27.748 581.745 80.4729 554.968 131.538 548.843C182.604 542.703 234.032 552.841 285.323 556.748C336.615 560.64 391.543 557.276 433.828 527.964C492.452 487.323 511.701 408.123 564.607 360.255C608.718 320.353 675.307 307.183 731.29 327.323" stroke="currentColor" stroke-miterlimit="10" />
			<path d="M51.0253 745.14C41.2045 709.326 34.0538 670.284 47.7668 635.783C65.7491 590.571 115.623 565.242 163.928 559.449C212.248 553.641 260.884 563.235 309.4 566.931C357.916 570.627 409.887 567.429 449.879 539.701C505.35 501.247 523.543 426.331 573.598 381.059C615.326 343.314 678.324 330.853 731.275 349.906" stroke="currentColor" stroke-miterlimit="10" />
			<path d="M89.8715 745.14C80.6239 711.363 73.8654 674.568 86.8091 642.028C103.766 599.396 150.788 575.515 196.347 570.054C241.906 564.578 287.767 573.629 333.523 577.099C379.278 580.584 428.277 577.567 465.976 551.423C518.279 515.172 535.431 444.525 582.62 401.832C621.964 366.229 681.356 354.493 731.291 372.46" stroke="currentColor" stroke-miterlimit="10" />
			<path d="M128.718 745.14C120.029 713.414 113.678 678.838 125.837 648.274C141.768 608.221 185.939 585.788 228.737 580.659C271.536 575.515 314.621 584.008 357.6 587.282C400.58 590.556 446.607 587.719 482.028 563.16C531.163 529.111 547.275 462.733 591.612 422.635C628.572 389.19 684.375 378.162 731.276 395.043" stroke="currentColor" stroke-miterlimit="10" />
			<path d="M167.564 745.14C159.432 715.451 153.504 683.107 164.863 654.519C179.753 617.046 221.088 596.062 261.126 591.265C301.164 586.452 341.473 594.402 381.677 597.465C421.88 600.527 464.95 597.872 498.094 574.896C544.061 543.035 559.146 480.942 600.617 443.423C635.194 412.135 687.406 401.817 731.276 417.612" stroke="currentColor" stroke-miterlimit="10" />
			<path d="M817.266 289.466C813.108 259.989 787.151 237.697 759.261 227.271C731.372 216.846 701.077 215.553 671.666 210.904C642.254 206.24 611.795 197.156 591.664 175.224C555.853 136.189 566.345 75.5336 560.763 22.8649C552.302 -56.8256 498.487 -130.133 425 -162.081" stroke="currentColor" stroke-miterlimit="10" />
			<path d="M832.584 276.159C828.427 246.683 802.469 224.391 774.58 213.965C746.69 203.539 716.395 202.246 686.984 197.598C657.573 192.934 627.114 183.85 606.982 161.918C571.172 122.883 581.663 62.2275 576.082 9.55873C567.62 -70.1318 513.806 -143.439 440.318 -175.387" stroke="currentColor" stroke-miterlimit="10" />
			<path d="M847.904 262.853C843.747 233.376 817.789 211.084 789.9 200.659C762.011 190.233 731.716 188.94 702.304 184.292C672.893 179.627 642.434 170.544 622.303 148.612C586.492 109.577 596.983 48.9211 591.402 -3.74766C582.94 -83.4382 529.126 -156.746 455.638 -188.694" stroke="currentColor" stroke-miterlimit="10" />
			<path d="M863.24 249.547C859.083 220.07 833.125 197.778 805.236 187.353C777.347 176.927 747.051 175.634 717.64 170.986C688.229 166.321 657.77 157.237 637.639 135.306C601.828 96.2707 612.319 35.6149 606.738 -17.0538C598.276 -96.7443 544.462 -170.052 470.974 -202" stroke="currentColor" stroke-miterlimit="10" />
		</svg>
	</div>
</section>

<section class="section">
	<div class="container">
		<div class="row justify-content-center align-items-center">
			<div class="col-lg-7">
				<div class="section-title">
					<p class="text-primary text-uppercase fw-bold mb-3">Bizning o'qituvchilar</p>
					<h2 class="h1 mb-4">Yuqori malaka <br> Yuqori natija</h2>
					<div class="content pe-0 pe-lg-5">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
						<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 mt-5 mt-lg-0">
				<img loading="lazy" decoding="async" src="{{asset('../build/assets/images/about/about-11.jpg')}}" alt="Business Loans &lt;br&gt; For Daily Expenses" class="rounded w-100">
			</div>
		</div>
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

			<h1 class="mb-4">KIUT Namangan yangiliklari</h1>
			<p class="lead mb-0">KIUT Namangan o'qituvchilari tomonidan joylangan yangiliklar </p>
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

<!-- Ma'muriyat a'zolari -->

<!-- <section class="section teams">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12">
				<div class="section-title text-center">
					<p class="text-primary text-uppercase fw-bold mb-3">Questions You Have</p>
					<h1>Mamuriyat a'zolari</h1>
					<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing . egestas
						<br>cursus pellentesque dignissim dui, congue. Vel etiam ut</p>
				</div>
			</div>
		</div>
		<div class="row position-relative">
			<div class="col-xl-3 col-lg-4 col-md-6 mt-4">
				<div class="card bg-transparent border-0 text-center">
					<div class="card-img">
						<img loading="lazy" decoding="async" src="{{asset('../build/assets/images/about/team-1.jpg')}}" alt="Scarlet Pena" class="rounded w-100" width="300" height="332">
						<ul class="card-social list-inline">
							<li class="list-inline-item"><a class="facebook" href="#"><i class="fab fa-facebook"></i></a>
							</li>
							<li class="list-inline-item"><a class="twitter" href="#"><i class="fab fa-twitter"></i></a>
							</li>
							<li class="list-inline-item"><a class="instagram" href="#"><i class="fab fa-instagram"></i></a>
							</li>
						</ul>
					</div>
					<div class="card-body">
						<h3>Kimsanhon</h3>
						<p>Matematika</p>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-4 col-md-6 mt-4">
				<div class="card bg-transparent border-0 text-center">
					<div class="card-img">
						<img loading="lazy" decoding="async" src="{{asset('../build/assets/images/about/team-2.jpg')}}" alt="Claire Simmmons" class="rounded w-100" width="300" height="333">
						<ul class="card-social list-inline">
							<li class="list-inline-item"><a class="facebook" href="#"><i class="fab fa-facebook"></i></a>
							</li>
							<li class="list-inline-item"><a class="twitter" href="#"><i class="fab fa-twitter"></i></a>
							</li>
							<li class="list-inline-item"><a class="instagram" href="#"><i class="fab fa-instagram"></i></a>
							</li>
						</ul>
					</div>
					<div class="card-body">
						<h3>Kimsanhonni onasi</h3>
						<p>Rektor</p>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-4 col-md-6 mt-4">
				<div class="card bg-transparent border-0 text-center">
					<div class="card-img">
						<img loading="lazy" decoding="async" src="{{asset('../build/assets/images/about/team-3.jpg')}}" alt="Leslie Pena" class="rounded w-100" width="300" height="333">
						<ul class="card-social list-inline">
							<li class="list-inline-item"><a class="facebook" href="#"><i class="fab fa-facebook"></i></a>
							</li>
							<li class="list-inline-item"><a class="twitter" href="#"><i class="fab fa-twitter"></i></a>
							</li>
							<li class="list-inline-item"><a class="instagram" href="#"><i class="fab fa-instagram"></i></a>
							</li>
						</ul>
					</div>
					<div class="card-body">
						<h3>Kimsanhonni singlisi</h3>
						<p>Bir nimalar</p>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-4 col-md-6 mt-4">
				<div class="card bg-transparent border-0 text-center">
					<div class="card-img">
						<img loading="lazy" decoding="async" src="{{asset('../build/assets/images/about/team-1.jpg')}}" alt="Scarlet Pena" class="rounded w-100" width="300" height="332">
						<ul class="card-social list-inline">
							<li class="list-inline-item"><a class="facebook" href="#"><i class="fab fa-facebook"></i></a>
							</li>
							<li class="list-inline-item"><a class="twitter" href="#"><i class="fab fa-twitter"></i></a>
							</li>
							<li class="list-inline-item"><a class="instagram" href="#"><i class="fab fa-instagram"></i></a>
							</li>
						</ul>
					</div>
					<div class="card-body">
						<h3>Kimsanhonni o'zi</h3>
						<p>Instructor</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section> -->

<!-- Bizning o'qituvchilar -->

<!-- <section class="section teams">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12">
				<div class="section-title text-center">
					<p class="text-primary text-uppercase fw-bold mb-3">Questions You Have</p>
					<h1>Bizning o'qituvchilar</h1>
					<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing . egestas
						<br>cursus pellentesque dignissim dui, congue. Vel etiam ut</p>
				</div>
			</div>
		</div>
		<div class="row position-relative">
			<div class="col-xl-3 col-lg-4 col-md-6 mt-4">
				<div class="card bg-transparent border-0 text-center">
					<div class="card-img">
						<img loading="lazy" decoding="async" src="{{asset('../build/assets/images/about/team-1.jpg')}}" alt="Scarlet Pena" class="rounded w-100" width="300" height="332">
						<ul class="card-social list-inline">
							<li class="list-inline-item"><a class="facebook" href="#"><i class="fab fa-facebook"></i></a>
							</li>
							<li class="list-inline-item"><a class="twitter" href="#"><i class="fab fa-twitter"></i></a>
							</li>
							<li class="list-inline-item"><a class="instagram" href="#"><i class="fab fa-instagram"></i></a>
							</li>
						</ul>
					</div>
					<div class="card-body">
						<h3>Kimsanhon</h3>
						<p>Matematika</p>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-4 col-md-6 mt-4">
				<div class="card bg-transparent border-0 text-center">
					<div class="card-img">
						<img loading="lazy" decoding="async" src="{{asset('../build/assets/images/about/team-2.jpg')}}" alt="Claire Simmmons" class="rounded w-100" width="300" height="333">
						<ul class="card-social list-inline">
							<li class="list-inline-item"><a class="facebook" href="#"><i class="fab fa-facebook"></i></a>
							</li>
							<li class="list-inline-item"><a class="twitter" href="#"><i class="fab fa-twitter"></i></a>
							</li>
							<li class="list-inline-item"><a class="instagram" href="#"><i class="fab fa-instagram"></i></a>
							</li>
						</ul>
					</div>
					<div class="card-body">
						<h3>Kimsanhonni onasi</h3>
						<p>Rektor</p>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-4 col-md-6 mt-4">
				<div class="card bg-transparent border-0 text-center">
					<div class="card-img">
						<img loading="lazy" decoding="async" src="{{asset('../build/assets/images/about/team-3.jpg')}}" alt="Leslie Pena" class="rounded w-100" width="300" height="333">
						<ul class="card-social list-inline">
							<li class="list-inline-item"><a class="facebook" href="#"><i class="fab fa-facebook"></i></a>
							</li>
							<li class="list-inline-item"><a class="twitter" href="#"><i class="fab fa-twitter"></i></a>
							</li>
							<li class="list-inline-item"><a class="instagram" href="#"><i class="fab fa-instagram"></i></a>
							</li>
						</ul>
					</div>
					<div class="card-body">
						<h3>Kimsanhonni singlisi</h3>
						<p>Bir nimalar</p>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-4 col-md-6 mt-4">
				<div class="card bg-transparent border-0 text-center">
					<div class="card-img">
						<img loading="lazy" decoding="async" src="{{asset('../build/assets/images/about/team-1.jpg')}}" alt="Scarlet Pena" class="rounded w-100" width="300" height="332">
						<ul class="card-social list-inline">
							<li class="list-inline-item"><a class="facebook" href="#"><i class="fab fa-facebook"></i></a>
							</li>
							<li class="list-inline-item"><a class="twitter" href="#"><i class="fab fa-twitter"></i></a>
							</li>
							<li class="list-inline-item"><a class="instagram" href="#"><i class="fab fa-instagram"></i></a>
							</li>
						</ul>
					</div>
					<div class="card-body">
						<h3>Kimsanhonni o'zi</h3>
						<p>Instructor</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section> -->

<section class="section-sm bg-primary-light">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-4 col-md-6 mb-5 mb-lg-0 text-center icon-box-item">
				<div class="icon icon-lg bg-transparent mb-4"><i class="fas fa-mouse-pointer text-primary"></i>
				</div>
				<h3>Quick Decision</h3>
				<p class="px-lg-5">Begin the process when it is convenient for you</p>
			</div>
			<div class="col-lg-4 col-md-6 mb-5 mb-lg-0 text-center icon-box-item">
				<div class="icon icon-lg bg-transparent mb-4"><i class="fas fa-file-alt text-primary"></i>
				</div>
				<h3>Submit Your Info</h3>
				<p class="px-lg-5">Begin the process when it is convenient for you</p>
			</div>
			<div class="col-lg-4 col-md-6 mb-5 mb-lg-0 text-center icon-box-item">
				<div class="icon icon-lg bg-transparent mb-4"><i class="fas fa-briefcase text-primary"></i>
				</div>
				<h3>Funds To You</h3>
				<p class="px-lg-5">Begin the process when it is convenient for you</p>
			</div>
		</div>
	</div>
</section>

<section class="section core-value bg-tertiary">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6">
				<div class="row position-relative gy-4">
					<div class="icon-box-item col-md-6">
						<div class="block bg-white">
							<!-- <div class="icon rounded-number">Sport</div> -->
							<h3 class="mb-3">Authentic</h3>
							<p class="mb-0">Lorem ipsum dolor sit aamet, ctetur adsipis cing elit. Lacaus</p>
						</div>
					</div>
					<div class="icon-box-item col-md-6">
						<div class="block bg-white">
							<!-- <div class="icon rounded-number">Ta'lim</div> -->
							<h3 class="mb-3">Empathetic</h3>
							<p class="mb-0">Lorem ipsum dolor sit aamet, ctetur adsipis cing elit. Lacaus</p>
						</div>
					</div>
					<div class="icon-box-item col-md-6">
						<div class="block bg-white">
							<!-- <div class="icon rounded-number">Madaniy</div> -->
							<h3 class="mb-3">All Improving</h3>
							<p class="mb-0">Lorem ipsum dolor sit aamet, ctetur adsipis cing elit. Lacaus</p>
						</div>
					</div>
					<div class="icon-box-item col-md-6">
						<div class="block bg-white">
							<!-- <div class="icon rounded-number">Nimadurlar</div> -->
							<h3 class="mb-3">User-Focused</h3>
							<p class="mb-0">Lorem ipsum dolor sit aamet, ctetur adsipis cing elit. Lacaus</p>
						</div>
					</div>
					<div class="has-shapes">
						<svg class="shape shape-1 text-primary" width="71" height="71" viewBox="0 0 119 119" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M8.50598 89.8686C8.17023 89.3091 7.83449 88.6376 7.49875 88.078L66.0305 0.336418C66.7019 0.448334 67.3734 0.560249 68.0449 0.560249L8.50598 89.8686Z" fill="currentColor" />
							<path d="M5.03787 83.2646C4.70213 82.5932 4.47829 81.9217 4.14255 81.2502L58.3096 -0.00032826C59.093 -0.000328191 59.7645 -0.000328132 60.5479 -0.000328064L5.03787 83.2646Z" fill="currentColor" />
							<path d="M16.9007 100.613C16.453 100.165 16.0053 99.7175 15.5577 99.2698L79.4613 3.47031C80.0209 3.69414 80.6924 3.91795 81.252 4.14178L16.9007 100.613Z" fill="currentColor" />
							<path d="M12.5352 95.5762C12.0876 95.0166 11.7518 94.5689 11.3042 94.0094L72.9695 1.45541C73.641 1.56732 74.2006 1.79115 74.8721 1.90306L12.5352 95.5762Z" fill="currentColor" />
							<path d="M0.00101471 55.5103C0.11293 54.1673 0.224831 52.9362 0.336747 51.5932L29.6586 7.72242C30.7777 7.05093 31.8969 6.49136 33.1279 5.93178L0.00101471 55.5103Z" fill="currentColor" />
							<path d="M26.1887 108.334C25.9649 108.223 25.7411 107.999 25.5172 107.887L91.2115 9.40136C91.4353 9.51328 91.6592 9.7371 91.883 9.84901C92.2188 10.0728 92.4426 10.2967 92.7783 10.4086L27.084 108.894C26.8602 108.67 26.5245 108.558 26.1887 108.334Z" fill="currentColor" />
							<path d="M114.042 81.0269C112.587 84.7201 110.685 88.4133 108.334 91.8827C105.984 95.3521 103.41 98.4857 100.5 101.396L114.042 81.0269Z" fill="currentColor" />
							<path d="M0.335842 66.7012C0.223927 65.6939 0.112026 64.7986 0.000110881 63.7914L40.7373 2.79753C41.6326 2.46179 42.6398 2.23796 43.5352 2.01413L0.335842 66.7012Z" fill="currentColor" />
							<path d="M2.23929 75.6538C2.01546 74.8704 1.79162 74.087 1.56779 73.3036L50.0271 0.558655C50.8105 0.446747 51.7059 0.334824 52.4893 0.222908L2.23929 75.6538Z" fill="currentColor" />
							<path d="M32.793 112.139C32.2335 111.915 31.6739 111.58 31.1143 111.244L96.4728 13.206C96.9205 13.6537 97.4801 13.9894 97.9277 14.4371L32.793 112.139Z" fill="currentColor" />
							<path d="M77.7822 115.161C76.8868 115.497 75.8796 115.72 74.9843 116.056L117.848 51.8168C117.96 52.824 118.072 53.7193 118.184 54.7266L77.7822 115.161Z" fill="currentColor" />
							<path d="M68.493 117.512C67.7096 117.624 66.8143 117.736 66.0309 117.848L116.057 42.8644C116.281 43.6478 116.505 44.4312 116.729 45.3265L68.493 117.512Z" fill="currentColor" />
							<path d="M60.0992 118.294C59.3158 118.294 58.6443 118.294 57.8609 118.294L113.259 35.2533C113.595 35.9248 113.819 36.5963 114.154 37.2678L60.0992 118.294Z" fill="currentColor" />
							<path d="M21.8245 105.087C21.3768 104.64 20.8172 104.304 20.3696 103.856L85.6162 6.15427C86.1758 6.37809 86.7354 6.71384 87.2949 7.04959L21.8245 105.087Z" fill="currentColor" />
							<path d="M89.0856 110.124C87.9665 110.795 86.7354 111.467 85.6162 112.026L118.184 63.1194C118.072 64.4624 117.96 65.8054 117.736 67.0364L89.0856 110.124Z" fill="currentColor" />
							<path d="M3.69339 38.2759C5.2602 34.135 7.27468 30.1061 9.84873 26.189C12.4228 22.3839 15.3326 18.9145 18.5781 15.8928L3.69339 38.2759Z" fill="currentColor" />
							<path d="M52.49 117.848C51.8185 117.736 51.147 117.736 50.4755 117.624L109.791 28.5392C110.126 29.0988 110.462 29.7703 110.798 30.3299L52.49 117.848Z" fill="currentColor" />
							<path d="M38.9475 114.712C38.388 114.489 37.7165 114.265 37.1569 114.041L101.396 17.6818C101.844 18.1295 102.292 18.5771 102.739 19.0248L38.9475 114.712Z" fill="currentColor" />
							<path d="M45.4392 116.728C44.7677 116.616 44.2081 116.392 43.5366 116.28L105.873 22.8306C106.321 23.3902 106.657 23.8378 107.105 24.3974L45.4392 116.728Z" fill="currentColor" />
						</svg>
						<svg class="shape shape-2 text-primary" width="100" height="100" viewBox="0 0 119 119" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M8.50598 89.8686C8.17023 89.3091 7.83449 88.6376 7.49875 88.078L66.0305 0.336418C66.7019 0.448334 67.3734 0.560249 68.0449 0.560249L8.50598 89.8686Z" fill="currentColor" />
							<path d="M5.03787 83.2646C4.70213 82.5932 4.47829 81.9217 4.14255 81.2502L58.3096 -0.00032826C59.093 -0.000328191 59.7645 -0.000328132 60.5479 -0.000328064L5.03787 83.2646Z" fill="currentColor" />
							<path d="M16.9007 100.613C16.453 100.165 16.0053 99.7175 15.5577 99.2698L79.4613 3.47031C80.0209 3.69414 80.6924 3.91795 81.252 4.14178L16.9007 100.613Z" fill="currentColor" />
							<path d="M12.5352 95.5762C12.0876 95.0166 11.7518 94.5689 11.3042 94.0094L72.9695 1.45541C73.641 1.56732 74.2006 1.79115 74.8721 1.90306L12.5352 95.5762Z" fill="currentColor" />
							<path d="M0.00101471 55.5103C0.11293 54.1673 0.224831 52.9362 0.336747 51.5932L29.6586 7.72242C30.7777 7.05093 31.8969 6.49136 33.1279 5.93178L0.00101471 55.5103Z" fill="currentColor" />
							<path d="M26.1887 108.334C25.9649 108.223 25.7411 107.999 25.5172 107.887L91.2115 9.40136C91.4353 9.51328 91.6592 9.7371 91.883 9.84901C92.2188 10.0728 92.4426 10.2967 92.7783 10.4086L27.084 108.894C26.8602 108.67 26.5245 108.558 26.1887 108.334Z" fill="currentColor" />
							<path d="M114.042 81.0269C112.587 84.7201 110.685 88.4133 108.334 91.8827C105.984 95.3521 103.41 98.4857 100.5 101.396L114.042 81.0269Z" fill="currentColor" />
							<path d="M0.335842 66.7012C0.223927 65.6939 0.112026 64.7986 0.000110881 63.7914L40.7373 2.79753C41.6326 2.46179 42.6398 2.23796 43.5352 2.01413L0.335842 66.7012Z" fill="currentColor" />
							<path d="M2.23929 75.6538C2.01546 74.8704 1.79162 74.087 1.56779 73.3036L50.0271 0.558655C50.8105 0.446747 51.7059 0.334824 52.4893 0.222908L2.23929 75.6538Z" fill="currentColor" />
							<path d="M32.793 112.139C32.2335 111.915 31.6739 111.58 31.1143 111.244L96.4728 13.206C96.9205 13.6537 97.4801 13.9894 97.9277 14.4371L32.793 112.139Z" fill="currentColor" />
							<path d="M77.7822 115.161C76.8868 115.497 75.8796 115.72 74.9843 116.056L117.848 51.8168C117.96 52.824 118.072 53.7193 118.184 54.7266L77.7822 115.161Z" fill="currentColor" />
							<path d="M68.493 117.512C67.7096 117.624 66.8143 117.736 66.0309 117.848L116.057 42.8644C116.281 43.6478 116.505 44.4312 116.729 45.3265L68.493 117.512Z" fill="currentColor" />
							<path d="M60.0992 118.294C59.3158 118.294 58.6443 118.294 57.8609 118.294L113.259 35.2533C113.595 35.9248 113.819 36.5963 114.154 37.2678L60.0992 118.294Z" fill="currentColor" />
							<path d="M21.8245 105.087C21.3768 104.64 20.8172 104.304 20.3696 103.856L85.6162 6.15427C86.1758 6.37809 86.7354 6.71384 87.2949 7.04959L21.8245 105.087Z" fill="currentColor" />
							<path d="M89.0856 110.124C87.9665 110.795 86.7354 111.467 85.6162 112.026L118.184 63.1194C118.072 64.4624 117.96 65.8054 117.736 67.0364L89.0856 110.124Z" fill="currentColor" />
							<path d="M3.69339 38.2759C5.2602 34.135 7.27468 30.1061 9.84873 26.189C12.4228 22.3839 15.3326 18.9145 18.5781 15.8928L3.69339 38.2759Z" fill="currentColor" />
							<path d="M52.49 117.848C51.8185 117.736 51.147 117.736 50.4755 117.624L109.791 28.5392C110.126 29.0988 110.462 29.7703 110.798 30.3299L52.49 117.848Z" fill="currentColor" />
							<path d="M38.9475 114.712C38.388 114.489 37.7165 114.265 37.1569 114.041L101.396 17.6818C101.844 18.1295 102.292 18.5771 102.739 19.0248L38.9475 114.712Z" fill="currentColor" />
							<path d="M45.4392 116.728C44.7677 116.616 44.2081 116.392 43.5366 116.28L105.873 22.8306C106.321 23.3902 106.657 23.8378 107.105 24.3974L45.4392 116.728Z" fill="currentColor" />
						</svg>
					</div>
				</div>
			</div>
			<div class="col-lg-6 mt-5 mt-lg-0">
				<div class="section-title ps-0 ps-lg-5">
					<p class="text-primary text-uppercase fw-bold mb-3">Values Wr Provide</p>
					<h2 class="h1">Our Core Values</h2>
					<div class="content">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Consv allis quam aliquet integer eget magna ullam corper intesager peent esque urna. Sed vulutate aenean nunc quis a urna morbi id vitae. Vulpuate nisl</p>
						<p>sed morbi sit ut placerat eges aeftas et. Pellen tesque tristisque magnis augue gravida pulvinar placerat. Tellus massa pretra scelerisque leo. In volutpat arcu nunc nisl et, viverra faucisfbus egestas. In habitasse sagittis, convallis ut commodo amet.</p>
					</div>
				</div>
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
<script src="js/script.js"></script>

</body>
</html>
