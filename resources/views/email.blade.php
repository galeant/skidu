<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from colorlib.com/polygon/admindek/default/email-read.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Oct 2018 08:53:10 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
  <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
      <!-- Meta -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="description" content="Admindek Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
      <meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
      <meta name="author" content="colorlib" />
      <!-- Favicon icon -->
      <link rel="icon" href="https://colorlib.com/polygon/admindek/files/assets/images/favicon.ico" type="image/x-icon">
      <!-- Google font-->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet"><link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">
      <!-- Required Fremwork -->
      <link rel="stylesheet" type="text/css" href="{{ asset('files/bower_components/bootstrap/css/bootstrap.min.css') }}">
      <!-- waves.css -->
      <link rel="stylesheet" href="{{ asset('files/assets/pages/waves/css/waves.min.css') }}" type="text/css" media="all">
      <!-- feather icon -->
      <link rel="stylesheet" type="text/css" href="{{ asset('files/assets/icon/feather/css/feather.css') }}">
      <!-- themify-icons line icon -->
      <link rel="stylesheet" type="text/css" href="{{ asset('files/assets/icon/themify-icons/themify-icons.css') }}">
      <!-- ico font -->
      <link rel="stylesheet" type="text/css" href="{{ asset('files/assets/icon/icofont/css/icofont.css') }}">
      <!-- Font Awesome -->
      <link rel="stylesheet" type="text/css" href="{{ asset('files/assets/icon/font-awesome/css/font-awesome.min.css') }}">
      <!-- Style.css -->
      <link rel="stylesheet" type="text/css" href="{{ asset('files/assets/css/style.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('files/assets/css/pages.css') }}">

    </head>

    <body>
      <div id="pcoded" class="pcoded">
        <div class="pcoded-container navbar-wrapper">
          <div class="pcoded-main-container">
            <div class="container">
              <div class="pcoded-content" style="margin:0px">
                <div class="pcoded-inner-content">
                  <!-- Main-body start -->
                  <div class="main-body">
                    <div class="page-wrapper">
                      <!-- Page-body start -->
                      <div class="page-body">
                        <div class="card">
                          <!-- Email-card start -->
                          <div class="card-block email-card">
                           
                            <div class="row">
                              <!-- Right-side section start -->
                              <div class="col-md-9">
                                <div class="mail-body">
                                  <div class="mail-body-content email-read">
                                    <div class="card">
                                      <div class="card-header">
                                        <h5>Selamat Datang Di Skydu</h5>
                                        <h6 class="float-right">{{ $user->created_at}}</h6>
                                      </div>
                                      <div class="card-block">
                                        <div class="media m-b-20">
                                          <div class="media-left photo-table">
                                            <a href="#">
                                              <img class="media-object img-radius" src="{{ asset('images/skydu.jpg') }}" alt="E-mail User">
                                            </a>
                                          </div>
                                          <div class="media-body photo-contant">
                                            <a href="#">
                                              <h6 class="user-name txt-primary">Skydu</h6>
                                            </a>
                                            <a class="user-mail txt-muted" href="#">
                                              <h6>From:<span class="__cf_email__" data-cfemail="4b212423252f242e7a7e7f780b2c262a222765282426">{{ ENV('MAIL_USERNAME')}}</span></h6>
                                            </a>
                                            <div>
                                              <h6 class="email-welcome-txt">Hello {{ $user->name}}</h6>
                                              <p class="email-content">
                                                Mari berjelajah bersama skydu.
                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus.
                                              </p>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <!-- Right-side section end -->
                            </div>
                          </div>
                          <!-- Email-card end -->

                        </div>
                      </div>
                      <!-- Page-body end -->
                    </div>
                  </div>
                  <!-- Main-body end -->
                  <div id="styleSelector">

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>



      <!-- Warning Section Starts -->
      <!-- Older IE warning message -->
    <!--[if lt IE 10]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="../files/assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="../files/assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="../files/assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="../files/assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="../files/assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
<!-- Warning Section Ends -->
<!-- Required Jquery -->
<script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js') }}"></script><script type="text/javascript" src="{{ asset('files/bower_components/jquery/js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('files/bower_components/jquery-ui/js/jquery-ui.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('files/bower_components/popper.js/js/popper.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('files/bower_components/bootstrap/js/bootstrap.min.js') }}"></script>
<!-- waves js -->
<script src="{{ asset('files/assets/pages/waves/js/waves.min.js') }}"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="{{ asset('files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js') }}"></script>
<!-- modernizr js -->
<script type="text/javascript" src="{{ asset('files/bower_components/modernizr/js/modernizr.js') }}"></script>
<script type="text/javascript" src="{{ asset('files/bower_components/modernizr/js/css-scrollbars.js') }}"></script>

<script src="{{ asset('files/assets/js/pcoded.min.js') }}"></script>
<script src="{{ asset('files/assets/js/vertical/vertical-layout.min.js') }}"></script>
<script src="{{ asset('files/assets/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('files/assets/js/script.js') }}"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
</body>


<!-- Mirrored from colorlib.com/polygon/admindek/default/email-read.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Oct 2018 08:53:10 GMT -->
</html>
