<!DOCTYPE html>
<html style="font-size: 16px;">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="keywords" content="Your Complaint Status">
  <meta name="description" content="">
  <meta name="page_type" content="np-template-header-footer-from-plugin">
  <title>deliveryboy-view-complaint</title>
  <link rel="stylesheet" href="{{asset ('css/admin/nicepage.css')}}" media="screen">
  <link rel="stylesheet" href="{{asset('css/deliveryboy/deliveryboy-view-complaint.css')}}" media="screen">
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
  <meta property="og:title" content="deliveryboy-view-complaint">
  <meta property="og:type" content="website">
</head>

<body class="u-body u-xl-mode">
  <header class="u-border-2 u-border-palette-1-light-2 u-clearfix u-header u-palette-1-light-3 u-header" id="sec-b07d">
    <div class="u-align-left u-clearfix u-sheet u-sheet-1"><span
        class="u-file-icon u-icon u-text-palette-1-base u-icon-1" data-href="{{url('deliveryboy-home')}}"
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
                      href="{{url('deliveryboy-profile')}}">Profile</a>
                  </li>
                  <li class="u-nav-item"><a
                      class="u-button-style u-grey-5 u-hover-white u-nav-link u-text-hover-palette-2-base" href="{{url('/logout')}}">Log
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
                      <li class="u-nav-item"><a class="u-button-style u-nav-link" href="{{url('deliveryboy-profile')}}">Profile</a>
                      </li>
                      <li class="u-nav-item"><a class="u-button-style u-nav-link" href="{{url('/')}}">Log Out</a>
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
          href="{{url('deliveryboy-home')}}" data-page-id="84728025">FASTER </a>
      </p>
    </div>
  </header>
  <section class="u-clearfix u-section-1" id="sec-840a">
    <div class="u-clearfix u-sheet u-sheet-1"><span class="u-file-icon u-icon u-icon-1"
        data-href="{{url('deliveryboy-complaint-main')}}" data-page-id="603700979"><img src="{{asset('images/p-images/85418310.png')}}"
          alt=""></span>
      <a href="{{route('export_DboyComplaint_pdf')}}"
        class="u-black u-border-none u-btn u-button-style u-hover-grey-75 u-btn-1">Download as PDF</a>
      <h2 class="u-align-center u-text u-text-default u-text-1">Your Complaint Status</h2>
      <div class="u-expanded-width u-table u-table-responsive u-table-1">
        <table class="u-table-entity">
          <colgroup>
            <col width="33.3%">
            <col width="33.3%">
            <col width="33.400000000000006%">
          </colgroup>
          <thead class="u-align-center u-grey-80 u-table-header u-table-header-1">
            <tr style="height: 36px;">
            <th class="u-border-1 u-border-grey-50 u-table-cell">DeliveryBoy ID</th>

              <th class="u-border-1 u-border-grey-50 u-table-cell">Subject</th>
              <th class="u-border-1 u-border-grey-50 u-table-cell">Description</th>
              <th class="u-border-1 u-border-grey-50 u-table-cell">Status</th>
            </tr>
          </thead>
          @foreach($data as $value)
          <tbody class="u-align-center u-grey-70 u-table-body u-table-body-1">
            <tr style="height: 52px;">
            <td class="u-border-1 u-border-grey-50 u-table-cell">{{$value->dboy_id}}</td>

              <td class="u-border-1 u-border-grey-50 u-table-cell">{{$value->subject}}</td>
              <td class="u-border-1 u-border-grey-50 u-table-cell">{{$value->description}}</td>
              <td class="u-border-1 u-border-grey-50 u-table-cell">{{$value->status}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </section>


</body>

</html>