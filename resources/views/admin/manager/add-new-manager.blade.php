<!DOCTYPE html>
<html style="font-size: 16px;">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="keywords" content="Add Manager">
  <meta name="description" content="">
  <meta name="page_type" content="np-template-header-footer-from-plugin">
  <title>add-new-manager</title>
  <link rel="stylesheet" href="{{asset ('css/admin/nicepage.css')}}" media="screen">
  <link rel="stylesheet" href="{{asset('css/admin/add-new-manager.css')}}" media="screen">
  <script class="u-script" type="text/javascript" src="{{asset ('js/admin/jquery.js')}}" defer=""></script>
  <script class="u-script" type="text/javascript" src="{{asset ('js/admin/nicepage.js')}}" defer=""></script>
  <meta name="generator" content="Nicepage 4.5.4, nicepage.com">
  <link id="u-theme-google-font" rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">


  <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": ""
}</script>
  <meta name="theme-color" content="#478ac9">
  <meta property="og:title" content="add-new-manager">
  <meta property="og:type" content="website">
</head>

<body class="u-body u-xl-mode">
  <header class="u-border-2 u-border-palette-1-light-2 u-clearfix u-header u-palette-1-light-3 u-header" id="sec-b07d">
    <div class="u-align-left u-clearfix u-sheet u-sheet-1"><span
        class="u-file-icon u-icon u-text-palette-1-base u-icon-1" data-href="{{url('admin-home')}}"
        data-page-id="84728025"><img src="{{asset('images/p-images/1.png')}}" alt=""></span>
      <nav class="u-dropdown-icon u-menu u-menu-dropdown u-offcanvas u-menu-1">
        <div class="menu-collapse" style="font-size: 1.125rem; font-weight: 700;">
          <a class="u-button-style u-custom-border-radius u-custom-text-hover-color u-nav-link" href="#">
            <svg class="u-svg-link" viewBox="0 0 24 24">
              <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-67d3"></use>
            </svg>
            <svg class="u-svg-content" version="1.1" id="svg-67d3" viewBox="0 0 16 16" x="0px" y="0px"
              xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
              <g>
                <rect y="1" width="16" height="2"></rect>
                <rect y="7" width="16" height="2"></rect>
                <rect y="13" width="16" height="2"></rect>
              </g>
            </svg>
          </a>
        </div>
        <div class="u-custom-menu u-nav-container">
          <ul class="u-nav u-unstyled u-nav-1">
            <li class="u-nav-item"><a
                class="u-border-3 u-border-hover-palette-1-base u-button-style u-nav-link u-radius-10 u-text-hover-palette-2-base"
                rel="nofollow" style="padding: 10px 20px;">Welcome {{ auth()->user()->name }}</a>
              <div class="u-nav-popup">
                <ul class="u-h-spacing-40 u-nav u-unstyled u-v-spacing-11 u-nav-2">
                  <li class="u-nav-item"><a
                      class="u-button-style u-grey-5 u-hover-white u-nav-link u-text-hover-palette-2-base"
                      href="{{url('admin-profile')}}">Profile</a>
                  </li>
                  <li class="u-nav-item"><a
                      class="u-button-style u-grey-5 u-hover-white u-nav-link u-text-hover-palette-2-base"
                      href="{{url('logout')}}">Log
                      Out</a>
                  </li>
                </ul>
              </div>
            </li>
          </ul>
        </div>
        <div class="u-custom-menu u-nav-container-collapse">
          <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
            <div class="u-inner-container-layout u-sidenav-overflow">
              <div class="u-menu-close"></div>
              <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-3">
                <li class="u-nav-item"><a class="u-button-style u-nav-link" rel="nofollow"
                    style="padding: 10px 20px;">Welcome !</a>
                  <div class="u-nav-popup">
                    <ul class="u-h-spacing-40 u-nav u-unstyled u-v-spacing-11 u-nav-4">
                      <li class="u-nav-item"><a class="u-button-style u-nav-link"
                          href="{{url('admin-profile')}}">Profile</a>
                      </li>
                      <li class="u-nav-item"><a class="u-button-style u-nav-link" href="{{url('logout')}}">Log Out</a>
                      </li>
                    </ul>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
        </div>
      </nav>
      <p class="u-text u-text-palette-1-base u-text-1">
        <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1"
          href="{{url('admin-home')}}" data-page-id="84728025">FASTER </a>
      </p>
    </div>
  </header>
  <section class="u-clearfix u-gradient u-section-1" id="sec-2bfb">
    <div class="u-clearfix u-sheet u-sheet-1"><span class="u-file-icon u-icon u-icon-1"
        data-href="{{url('admin-manager-main')}}" data-page-id="17044625"><img src="{{asset('images/p-images/85418319.png')}}" alt=""></span>
      <div class="u-clearfix u-layout-wrap u-layout-wrap-1">
        <div class="u-layout">
          <div class="u-layout-row">
            <div class="u-container-style u-image u-layout-cell u-size-30 u-image-1" data-image-width="150"
              data-image-height="99">
              <div class="u-container-layout u-container-layout-1"></div>
            </div>
            <div class="u-container-style u-layout-cell u-size-30 u-layout-cell-2">
              <div class="u-container-layout u-container-layout-2">
                <div class="u-container-style u-expanded-width u-group u-shape-rectangle u-white u-group-1">
                  <div class="u-container-layout u-container-layout-3">
                    <h2 class="u-text u-text-default u-text-1">Add Manager</h2>
                    <div class="u-align-center u-expanded-width u-form u-form-1">
                      <form action="#" method="POST" class="u-clearfix u-form-spacing-16 u-form-vertical u-inner-form"
                        source="custom" name="form" style="padding: 10px;">
                        <div class="u-form-group u-form-name u-label-top">
                          <label for="name-bcc0" class="u-label u-label-1">Name</label>
                          <input type="text" placeholder="Enter your Name" id="name-bcc0" name="name"
                            class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-25 u-white u-input-1"
                            required="" autofocus="autofocus">
                        </div>
                        <div class="u-form-email u-form-group u-label-top">
                          <label for="email-bcc0" class="u-label u-label-2">Email</label>
                          <input type="email" placeholder="Enter a valid email address" id="email-bcc0" name="email"
                            class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-25 u-white u-input-2"
                            required="">
                        </div>
                        <div class="u-form-group u-label-top u-form-group-3">
                          <label for="text-5084" class="u-label u-label-3">Password</label>
                          <input type="password" placeholder="Enter password" id="text-5084" name="password"
                            class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-25 u-white u-input-3"
                            required="required">
                        </div>
                        <div class="u-form-group u-label-top u-form-group-4">
                        
                          <label for="text-37c6" class="u-label u-label-4">City</label><br>
                          <input type="text" placeholder="Enter City" id="city" name="city"
                            class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-25 u-white u-input-3"
                            required="required">
                        </div>
                        <div class="u-form-group u-label-top u-form-group-4">
                        
                        <label for="text-37c6" class="u-label u-label-4">Area</label><br>
                        <input type="text" placeholder="Enter Area" id="area" name="area"
                          class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-25 u-white u-input-3"
                          required="required">
                      </div>
                        <div class="u-form-group u-form-phone u-label-top u-form-group-6">
                          <label for="text-979e" class="u-label u-label-6">Pincode</label>
                          <input type="tel" id="text-979e" name="number"
                            class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-25 u-white u-input-6"
                            placeholder="Enter pincode" required="required" maxlength="10">
                        </div>
                        <div class="u-form-group u-label-top u-form-group-7">
                          <label for="text-eafe" class="u-label u-label-7">Mobile</label>
                          <input type="text" placeholder="Enter mobile number" id="text-eafe" name="number-1"
                            class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-25 u-white u-input-7"
                            maxlength="10" required="required">
                        </div>
                        <div class="u-align-center u-form-group u-form-submit u-label-top">
                          <input type="submit" value="submit" class="u-form-control-hidden">
                          <a href=""
                            class="u-border-none u-btn u-btn-round u-btn-submit u-button-style u-hover-palette-1-light-1 u-radius-25 u-btn-1">register</a>
                        </div>
                        <div class="u-form-send-message u-form-send-success"></div>
                        <div class="u-form-send-error u-form-send-message"></div>
                        <input type="hidden" value="" name="recaptchaResponse">
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
 

</body>

</html>