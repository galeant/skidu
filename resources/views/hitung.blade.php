<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from colorlib.com/polygon/admindek/default/auth-sign-in-social.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Oct 2018 08:50:06 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <title>Login</title>
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
      <link rel="stylesheet" href="{{ asset('files/assets/pages/waves/css/waves.min.css') }}" type="text/css" media="all"><!-- feather icon --> <link rel="stylesheet" type="text/css" href="{{ asset('files/assets/icon/feather/css/feather.css') }}">
      <!-- themify-icons line icon -->
      <link rel="stylesheet" type="text/css" href="{{ asset('files/assets/icon/themify-icons/themify-icons.css') }}">
      <!-- ico font -->
      <link rel="stylesheet" type="text/css" href="{{ asset('files/assets/icon/icofont/css/icofont.css') }}">
      <!-- Font Awesome -->
      <link rel="stylesheet" type="text/css" href="{{ asset('files/assets/icon/font-awesome/css/font-awesome.min.css') }}">
      <!-- Style.css -->
      <link rel="stylesheet" type="text/css" href="{{ asset('files/assets/css/style.css') }}"><link rel="stylesheet" type="text/css" href="{{ asset('files/assets/css/pages.css') }}">
  </head>

  <body themebg-pattern="theme1">
  <!-- Pre-loader start -->
  <div class="theme-loader">
      <div class="loader-track">
          <div class="preloader-wrapper">
              <div class="spinner-layer spinner-blue">
                  <div class="circle-clipper left">
                      <div class="circle"></div>
                  </div>
                  <div class="gap-patch">
                      <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                      <div class="circle"></div>
                  </div>
              </div>
              <div class="spinner-layer spinner-red">
                  <div class="circle-clipper left">
                      <div class="circle"></div>
                  </div>
                  <div class="gap-patch">
                      <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                      <div class="circle"></div>
                  </div>
              </div>
            
              <div class="spinner-layer spinner-yellow">
                  <div class="circle-clipper left">
                      <div class="circle"></div>
                  </div>
                  <div class="gap-patch">
                      <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                      <div class="circle"></div>
                  </div>
              </div>
            
              <div class="spinner-layer spinner-green">
                  <div class="circle-clipper left">
                      <div class="circle"></div>
                  </div>
                  <div class="gap-patch">
                      <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                      <div class="circle"></div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Pre-loader end -->
    <section class="login-block">
        
        <!-- Container-fluid starts -->
        <div class="container-fluid">
        
            <div class="row">
                <div class="col-sm-12">
                    <!-- Authentication card start -->
                        <div class="auth-box card">
                            <div class="card-block">
                                <div class="row m-b-20">
                                    <div class="col-md-12">
                                        <h3 class="text-center txt-primary">Hitung Min Max</h3>
                                        <div id="hasil" style="display:none">
                                            <h3 class="text-center txt-primary">Nilai Tertinggi: <span id="tinggi"></span></h3>
                                            <h3 class="text-center txt-primary">Nilai Terendah: <span id="rendah"></span></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group form-primary col-md-6" id="deret">
                                        <label class="float-label">Angka ke-<span id="urutan">1</span></label>
                                        <input type="text" name="nilai" class="form-control">
                                    </div>
                                </div>
                                <div class="row m-t-30">
                                    <div class="col-md-6">
                                        <button id="tambah" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">Tambah</button>  
                                    </div>
                                    <div class="col-md-6">
                                        <button id="kurang" class="btn btn-danger btn-md btn-block waves-effect text-center m-b-20">Kurang</button>  
                                    </div>
                                    <div class="col-md-12">
                                        <button id="hitung" class="btn btn-success btn-md btn-block waves-effect text-center m-b-20">Hitung</button>  
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end of form -->
                    </div>
                    <!-- Authentication card end -->
                </div>
                <!-- end of col-sm-12 -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container-fluid -->
    </section>
    <!-- Warning Section Starts -->
    <!-- Older IE warning message -->
    <!--[if lt IE 10]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
<!-- Warning Section Ends -->
<!-- Required Jquery -->
<script type="text/javascript" src="{{ asset('files/bower_components/jquery/js/jquery.min.js') }}"></script>
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
<script type="text/javascript" src="{{ asset('files/assets/js/common-pages.js') }}"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>

<script>
    $(document).ready(function(){
        $("#tambah").click(function(){
            var count = $("div#deret").length + 1;
            var ele = $("#deret").clone().insertAfter($("div#deret").last())
            ele.find("span#urutan").text(count);
            ele.find("input[name='nilai']").val(null);
        });
        $("#kurang").click(function(){
            $("div#deret").last().remove();
        })
        $("#hitung").click(function(){
            var nilai = [];
            $("input[name='nilai']").each(function(){
                nilai.push(parseInt($(this).val()));
            })
            $.ajax({
                method: "GET",
                url: "{{ url('min_max')}}",
                data: { nilai: nilai }
            }).done(function(response) {
                $("#hasil").show();
                $("#tinggi").text(response.max)
                $("#rendah").text(response.min)
            });
        })
    });
</script>
</body>


<!-- Mirrored from colorlib.com/polygon/admindek/default/auth-sign-in-social.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Oct 2018 08:50:06 GMT -->
</html>
