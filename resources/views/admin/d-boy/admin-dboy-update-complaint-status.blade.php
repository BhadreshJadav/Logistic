<!DOCTYPE html>
<html style="font-size: 16px;">

<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="keywords" content="Delivery Boy Details">
  <meta name="description" content="">
  <meta name="page_type" content="np-template-header-footer-from-plugin">
  <title>admin-user-details</title>
  <link rel="stylesheet" href="{{asset ('css/admin/nicepage.css')}}" media="screen">
  <link rel="stylesheet" href="{{asset('css/admin/admin-user-update-complaint-status.css')}}" media="screen">
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
  <meta property="og:title" content="manager-order-update-status">
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
                      class="u-button-style u-grey-5 u-hover-white u-nav-link u-text-hover-palette-2-base" href="{{url('logout')}}">Log
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
                      <li class="u-nav-item"><a class="u-button-style u-nav-link" href="{{url('admin-profile')}}">Profile</a>
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
  <section class="u-clearfix u-section-1" id="sec-e9e2">
    <div class="u-clearfix u-sheet u-sheet-1">
      <img class="u-image u-image-default u-preserve-proportions u-image-1" src="{{asset('images/p-images/85418315.png')}}" alt=""
        data-image-width="128" data-image-height="128" data-href="{{url('admin-deliveryboy-complaints ')}}" data-page-id="54942144">
      <h2 class="u-align-center u-text u-text-default u-text-1">Complaint Update Status</h2>
      <div class="u-align-left u-border-2 u-border-grey-5 u-container-style u-group u-shape-rectangle u-group-1">
        <div class="u-container-layout u-container-layout-1">
          <h3 class="u-align-center u-text u-text-default u-text-2">Status Update<span style="font-weight: 700;"></span>
          </h3>
          <form action="{{ route('update.Dboy.Complaint.status') }}"  method="post">
                @csrf
          <div class="orderstatus">
       <select id="dboycomplaintupdatestatus" name="status">
          <label for ="Order Update Status"></label>
                 <option value="pending" @if($data->status === 'Pending') selected @endif>Pending</option>
                 <option value="reviewed"  @if($data->status === 'Reviewed') selected @endif>Reviewed</option>
                
                </select>
              </div>
              <input type="hidden" name="dboy_id" value="{{ $data->id }}">
          <div class="u-align-center u-container-style u-group u-shape-rectangle u-group-2">
            <div class="u-container-layout u-container-layout-2">
              <h6 class="u-text u-text-grey-40 u-text-3">DeliveryBoy ID :{{ $data->dboy_id }} </h6>
            </div>
          </div>
          <button href="#" type="submit"
            class="u-black u-border-none u-btn u-button-style u-hover-palette-1-dark-1 u-btn-1">UpdATE STATUS</button>
            </form>
        </div>
      </div>
    </div>
  </section>



</body>

</html>