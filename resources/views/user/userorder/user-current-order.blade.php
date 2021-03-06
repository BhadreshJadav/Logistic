<!DOCTYPE html>
<html style="font-size: 16px;">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="keywords" content="Current Orders Details">
  <meta name="description" content="">
  <meta name="page_type" content="np-template-header-footer-from-plugin">
  <title>user-current-order</title>
  <link rel="stylesheet" href="{{asset ('css/admin/nicepage.css')}}" media="screen">
  <link rel="stylesheet" href="{{asset('css/user/user-current-order.css')}}"  media="screen">
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
  <meta property="og:title" content="user-current-order">
  <meta property="og:type" content="website">
</head>

<body class="u-body u-xl-mode">
  <header class="u-border-2 u-border-palette-1-light-2 u-clearfix u-header u-palette-1-light-3 u-header" id="sec-b07d">
    <div class="u-align-left u-clearfix u-sheet u-sheet-1"><span
        class="u-file-icon u-icon u-text-palette-1-base u-icon-1" data-href="{{url('user-home')}}"
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
                      href="{{url('user-profile')}}">Profile</a>
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
                      <li class="u-nav-item"><a class="u-button-style u-nav-link" href="{{url('user-profile')}}">Profile</a>
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
          href="{{url('user-home')}}" data-page-id="84728025">FASTER </a>
      </p>
    </div>
  </header>
  <section class="u-clearfix u-section-1" id="sec-239b">
    <div class="u-clearfix u-sheet u-sheet-1"><span class="u-file-icon u-icon u-icon-1" data-href="{{url('user-order-main')}}"
        data-page-id="56826989"><img src="{{asset('images/p-images/8541833.png')}}" alt=""></span>
      <a href="{{route('export_UserCurrentOrder_pdf')}}"
        class="u-black u-border-none u-btn u-button-style u-hover-grey-75 u-btn-1">Download as PDF</a>
      <h2 class="u-align-center u-text u-text-default u-text-1">Current Orders Details</h2>
      <div class="u-form u-form-1">
      <form action="{{ route('user-current-order') }}" method="get" class="u-clearfix  u-form-spacing-15 u-inner-form"
          style="padding: 15px;" source="custom" display="inline">
          <div class="u-form-group u-form-name u-label-none fg">
            <label for="name-ef64" class="u-label">Name</label>
            <input type="search" placeholder="Enter AWB Number" id="name-ef64" name="search"
              class="u-border-1 u-border-grey-30 u-input u-input-rectangle" required="" value="">
          </div>
          <div class="u-form-group u-form-submit fg">
            <button class="u-black u-border-none u-btn u-btn-submit u-button-style u-hover-grey-75 u-btn-2" type="submit">Search</button>
          </div>
        </form>
      </div>
      <div class="u-expanded-width u-table u-table-responsive u-table-1">
        <table class="u-table-entity">
          <colgroup>
            <col width="33.3%">
            <col width="33.3%">
            <col width="33.400000000000006%">
          </colgroup>
          <thead class="u-align-center u-grey-80 u-table-header u-table-header-1">
            <tr style="height: 36px;">
              <th class="u-border-1 u-border-grey-50 u-table-cell">User ID</th>
              <th class="u-border-1 u-border-grey-50 u-table-cell">Order Status</th>
              <th class="u-border-1 u-border-grey-50 u-table-cell">AWB Number</th>
            </tr>
          </thead>
         
          <tbody class="u-align-center u-grey-70 u-table-body u-table-body-1">
         @foreach($data as $value)
            <tr style="height: 52px;">
              <td class="u-border-1 u-border-grey-50 u-table-cell">{{$value->user_id}}</td>
              <td class="u-border-1 u-border-grey-50 u-table-cell">{{$value->status}}</td>
              <td class="u-border-1 u-border-grey-50 u-table-cell">{{$value->awb_no}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </section>


</body>

</html>