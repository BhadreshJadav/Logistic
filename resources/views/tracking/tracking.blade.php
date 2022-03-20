<!DOCTYPE html>
<html style="font-size: 16px;">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="page_type" content="np-template-header-footer-from-plugin">
  <title>tracking</title>
  <link rel="stylesheet" href="{{('css/tracking/nicepage.css')}}" media="screen">
  <link rel="stylesheet" href="{{('css/tracking/tracking.css')}}" media="screen">
  <script class="u-script" type="text/javascript" src="{{('css/tracking/jquery.js')}}" defer=""></script>
  <script class="u-script" type="text/javascript" src="{{('css/tracking/nicepage.js')}}" defer=""></script>
  <meta name="generator" content="Nicepage 4.5.4, nicepage.com">
  <link id="u-theme-google-font" rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">


  <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": ""
}</script>
  <meta name="theme-color" content="#478ac9">
  <meta property="og:title" content="tracking">
  <meta property="og:type" content="website">
</head>

<body class="u-body u-xl-mode">
  <header class="u-border-2 u-border-palette-1-light-2 u-clearfix u-header u-palette-1-light-3 u-header" id="sec-be47">
    <div class="u-align-left u-clearfix u-sheet u-sheet-1"><span class="u-file-icon u-icon u-icon-1"
        data-href="{{url('/')}}"><img src="{{asset('images/tracking/3.png')}}" alt=""></span>
      <p class="u-text u-text-palette-1-base u-text-1">
        <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1"
          href="{{url('/')}}">FASTER </a>
      </p>
    </div>
  </header>
  <section class="u-clearfix u-section-1" id="sec-f53e">
    <div class="u-clearfix u-sheet u-sheet-1">
      <img class="u-image u-image-default u-preserve-proportions u-image-1" src="{{asset('images/tracking/8541834.png')}}" alt=""
        data-image-width="128" data-image-height="128" data-href="{{url('/')}}">
      <div class="u-container-style u-grey-5 u-group u-shape-rectangle u-group-1">
        <div class="u-container-layout u-container-layout-1">
          <h6 class="u-text u-text-1">AWB number here<span style="font-weight: 700;"> {{ $order->awb_no }}</span>
          </h6>
        </div>
      </div>
      <div class="u-container-style u-group u-group-2">
        <div class="u-container-layout">
          <h4 class="u-align-center u-text u-text-default u-text-2">Track Delivery Status<span
              style="font-weight: 700;"></span>
          </h4><span class="u-file-icon u-icon u-icon-1"><img src="{{asset('images/tracking/3788207.png')}}" alt=""></span>
          <h6 class="u-text u-text-default u-text-3" @if($order->status === 'Pick Up') style="color: #1e7e34" @endif>Pick Up</h6>
          <div class="u-black u-shape u-shape-circle u-shape-1"></div><span class="u-file-icon u-icon u-icon-2"><img
              src="{{asset('images/tracking/16251.png')}}" alt=""></span><span class="u-file-icon u-icon u-icon-3"><img
              src="{{asset('images/tracking/1585156.png')}}" alt=""></span>
          <h6 class="u-text u-text-default u-text-4" @if($order->status === 'City Warehouse') style="color: #1e7e34" @endif>City Warehouse</h6>
          <div class="u-black u-preserve-proportions u-shape u-shape-circle u-shape-2"></div><span
            class="u-file-icon u-icon u-icon-4"><img src="{{asset('images/tracking/16251.png')}}" alt=""></span><span
            class="u-align-left u-file-icon u-icon u-icon-5"><img src="{{asset('images/tracking/6832115.png')}}" alt=""></span>
          <h6 class="u-text u-text-default u-text-5" @if($order->status === 'Area Warehouse') style="color: #1e7e34" @endif>Area Warehouse</h6>
          <div class="u-black u-shape u-shape-circle u-shape-3"></div><span class="u-file-icon u-icon u-icon-6"><img
              src="{{asset('images/tracking/16251.png')}}" alt=""></span><span class="u-align-left u-file-icon u-icon u-icon-7"><img
              src="{{asset('images/tracking/411763.png')}}" alt=""></span>
          <h6 class="u-text u-text-default u-text-6" @if($order->status === 'Shipped') style="color: #1e7e34" @endif>Shipped</h6>
          <div class="u-black u-shape u-shape-circle u-shape-4"></div><span class="u-file-icon u-icon u-icon-8" ><img
              src="{{asset('images/tracking/16251.png')}}" alt="" @if($order->status === 'Done') style="filter: invert(48%) sepia(13%) saturate(3207%) hue-rotate(130deg) brightness(95%) contrast(80%);" @endif></span><span class="u-align-left u-file-icon u-icon u-icon-9"><img
              src="{{asset('images/tracking/1023656.png')}}" alt="" @if($order->status === 'Done') style="filter: invert(48%) sepia(13%) saturate(3207%) hue-rotate(130deg) brightness(95%) contrast(80%);" @endif></span>
          <h6 class="u-text u-text-default u-text-7" @if($order->status === 'Done') style="color: #1e7e34" @endif>Done</h6>
          <div class="u-black u-shape u-shape-circle u-shape-5"></div>
        </div>
      </div>
    </div>
  </section>

</body>

</html>
