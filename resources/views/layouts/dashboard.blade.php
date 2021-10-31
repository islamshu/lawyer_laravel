<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="rtl">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description"
        content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
    <meta name="keywords"
        content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
    <meta name="author" content="PIXINVENT">
    <title>Dashboard eCommerce - Modern Admin - Clean Bootstrap 4 Dashboard HTML Template
        + Bitcoin Dashboard</title>
    <link rel="apple-touch-icon" href="{{ asset('backend/app-assets/images/ico/apple-icon-120.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('backend/app-assets/images/ico/favicon.ico') }}">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
        rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/css-rtl/vendors.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('backend/app-assets/vendors/css/weather-icons/climacons.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/fonts/meteocons/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/vendors/css/charts/morris.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/vendors/css/charts/chartist.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('backend/app-assets/vendors/css/charts/chartist-plugin-tooltip.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('backend/app-assets/vendors/css/tables/datatable/datatables.min.css') }}">

    <!-- END VENDOR CSS-->
    <!-- BEGIN MODERN CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/css-rtl/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/css-rtl/custom-rtl.css') }}">
    <!-- END MODERN CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('backend/app-assets/css-rtl/core/menu/menu-types/vertical-content-menu.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('backend/app-assets/css-rtl/core/colors/palette-gradient.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/fonts/simple-line-icons/style.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('backend/app-assets/css-rtl/core/colors/palette-gradient.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/css-rtl/pages/timeline.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('backend/app-assets/css-rtl/pages/dashboard-ecommerce.css') }}">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/style-rtl.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/switchery/0.8.2/switchery.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/switchery/0.8.2/switchery.min.js"></script>
    <!-- END Custom CSS-->
</head>

<body class="vertical-layout vertical-content-menu 2-columns   menu-expanded fixed-navbar" data-open="click"
    data-menu="vertical-content-menu" data-col="2-columns">
    <!-- fixed-top-->
    @include('dashboard.partials.nav')
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            @include('dashboard.partials.aside')
            <div class="content-body">
                <!-- eCommerce statistic -->
                @yield('content')
                <!--/ Basic Horizontal Timeline -->
            </div>
        </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    @include('dashboard.partials.footer')
    <!-- BEGIN VENDOR JS-->
    <script src="{{ asset('backend/app-assets/vendors/js/vendors.min.js') }}" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="{{ asset('backend/app-assets/vendors/js/ui/headroom.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/app-assets/vendors/js/charts/chartist.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/app-assets/vendors/js/charts/chartist-plugin-tooltip.min.js') }}"
        type="text/javascript"></script>
    <script src="{{ asset('backend/app-assets/vendors/js/charts/raphael-min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/app-assets/vendors/js/charts/morris.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/app-assets/vendors/js/timeline/horizontal-timeline.js') }}" type="text/javascript">
    </script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN MODERN JS-->
    <script src="{{ asset('backend/app-assets/js/core/app-menu.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/app-assets/js/core/app.js') }}" type="text/javascript"></script>
    <script src="{{ asset('backend/app-assets/js/scripts/customizer.js') }}" type="text/javascript"></script>
    <!-- END MODERN JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="{{ asset('backend/app-assets/js/scripts/pages/dashboard-ecommerce.js') }}" type="text/javascript">
    </script>
    <script src="{{ asset('backend/app-assets/js/scripts/tables/datatables/datatable-basic.js') }}"></script>

    <script src="{{ asset('backend/app-assets/vendors/js/tables/datatable/datatables.min.js') }}" type="text/javascript">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
    <script>
        $(document).ready(function() {

          $( ".ckeditor" ).each(function( index ) {
        CKEDITOR.replace($( this ).attr("id"),{
            //your configurations
        });
    });
        });
    </script>
    <script>
      $(document).ready(function () {
      $(".image").change(function () {

          var img_name=$(this).attr('name');
          if (this.files && this.files[0]) {
              var reader = new FileReader();
          reader.onload = function (e) {
                  $('.image-preview[data-preview='+img_name+']').attr('src', e.target.result); }
              reader.readAsDataURL(this.files[0]);
          }
          });
      });
  </script>

    <script>
        $('.delete-confirm').click(function(event) {
            var form = $(this).closest("form");
            var name = $(this).data("name");
            event.preventDefault();
            swal({
                    title: `هل متأكد من حذف العنصر ؟`,
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        form.submit();
                    }
                });
        });
    </script>
    <script>
        let elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));

        elems.forEach(function(html) {
            let switchery = new Switchery(html, {
                size: 'small'
            });
        });
    </script>
    @yield('script')

    <!-- END PAGE LEVEL JS-->
</body>

</html>
