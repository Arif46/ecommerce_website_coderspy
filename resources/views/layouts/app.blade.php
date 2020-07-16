<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @php
        $faviconLogo = \App\GeneralSetting::select('favicon')->first();
    @endphp
    @if($faviconLogo->favicon != null)
        @if(File::exists(public_path($faviconLogo->favicon)))
            <link name="favicon" type="image/x-icon" href="{{url('public/')}}/{{$faviconLogo->favicon}}" rel="shortcut icon" />
        @else
            <link name="favicon" type="image/x-icon" href="{{url('public/img/favicon.png')}}" rel="shortcut icon" />
        @endif
    @else
        <link name="favicon" type="image/x-icon" href="{{url('public/img/favicon.png')}}" rel="shortcut icon" />
    @endif
    <title>Myfragmence | @yield('title') </title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <!--Bootstrap Stylesheet [ REQUIRED ]-->
    <link href="{{ asset('public/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('public/css/tagify.css')}}" rel="stylesheet">

    <!--active-shop Stylesheet [ REQUIRED ]-->
    <link href="{{ asset('public/css/active-shop.min.css')}}" rel="stylesheet">

    <!--active-shop Premium Icon [ DEMONSTRATION ]-->
    <link href="{{ asset('public/css/demo/active-shop-demo-icons.min.css')}}" rel="stylesheet">

    <!--Font Awesome [ OPTIONAL ]-->
    <link href="{{ asset('public/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">

    <!--Switchery [ OPTIONAL ]-->
    <link href="{{ asset('public/plugins/switchery/switchery.min.css')}}" rel="stylesheet">

    <!--DataTables [ OPTIONAL ]-->
    <link href="{{ asset('public/plugins/datatables/media/css/dataTables.bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('public/plugins/datatables/extensions/Responsive/css/responsive.dataTables.min.css') }}" rel="stylesheet">

    <!--Select2 [ OPTIONAL ]-->
    <link href="{{ asset('public/plugins/select2/css/select2.min.css')}}" rel="stylesheet">

    <!--Chosen [ OPTIONAL ]-->
    {{-- <link href="{{ asset('plugins/chosen/chosen.min.css')}}" rel="stylesheet"> --}}

    <!--Bootstrap Tags Input [ OPTIONAL ]-->
    <link href="{{ asset('public/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.css') }}" rel="stylesheet">

    <!--Summernote [ OPTIONAL ]-->
    <link href="{{ asset('public/css/jodit.min.css') }}" rel="stylesheet">

    <!--Theme [ DEMONSTRATION ]-->
    <!-- <link href="{{ asset('public/css/themes/type-full/theme-dark-full.min.css') }}" rel="stylesheet"> -->
    <link href="{{ asset('public/css/themes/type-c/theme-navy.min.css') }}" rel="stylesheet">

    <!--Spectrum Stylesheet [ REQUIRED ]-->
    <link href="{{ asset('public/css/spectrum.css')}}" rel="stylesheet">

    <!--Custom Stylesheet [ REQUIRED ]-->
    <link href="{{ asset('public/css/custom.css')}}" rel="stylesheet">
    <link href="{{ asset('public/css/myfrag.css')}}" rel="stylesheet">
  

    @stack('style')


    <!--JAVASCRIPT-->
    <!--=================================================-->

    <!--jQuery [ REQUIRED ]-->
    <script src=" {{asset('public/js/jquery.min.js') }}"></script>


    <!--BootstrapJS [ RECOMMENDED ]-->
    <script src="{{ asset('public/js/bootstrap.min.js') }}"></script>


    <!--active-shop [ RECOMMENDED ]-->
    <script src="{{ asset('public/js/active-shop.min.js') }}"></script>

    <!--Alerts [ SAMPLE ]-->
    <script src="{{ asset('public/js/demo/ui-alerts.js') }}"></script>

    <!--Switchery [ OPTIONAL ]-->
    <script src="{{ asset('public/plugins/switchery/switchery.min.js')}}"></script>

    <!--DataTables [ OPTIONAL ]-->
    <script src="{{ asset('public/plugins/datatables/media/js/jquery.dataTables.js')}}"></script>
    <script src="{{ asset('public/plugins/datatables/media/js/dataTables.bootstrap.js')}}"></script>
    <script src="{{ asset('public/plugins/datatables/extensions/Responsive/js/dataTables.responsive.min.js')}}"></script>

    <!--DataTables Sample [ SAMPLE ]-->
    <script src="{{ asset('public/js/demo/tables-datatables.js')}}"></script>

    <!--Select2 [ OPTIONAL ]-->
    <script src="{{ asset('public/plugins/select2/js/select2.min.js')}}"></script>

    <!--Summernote [ OPTIONAL ]-->
    <script src="{{ asset('public/js/jodit.min.js') }}"></script>

    <!--Bootstrap Tags Input [ OPTIONAL ]-->
    <script src="{{ asset('public/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js')}}"></script>

    <!--Bootstrap Validator [ OPTIONAL ]-->
    <script src="{{ asset('public/plugins/bootstrap-validator/bootstrapValidator.min.js') }}"></script>

    <!--Bootstrap Wizard [ OPTIONAL ]-->
    <script src="{{ asset('public/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js') }}"></script>

    <!--Bootstrap Datepicker [ OPTIONAL ]-->
    <script src="{{ asset('public/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>

    <!--Form Component [ SAMPLE ]-->
    <script src="{{asset('public/js/demo/form-wizard.js')}}"></script>

    <!--Spectrum JavaScript [ REQUIRED ]-->
    <script src="{{ asset('public/js/spectrum.js')}}"></script>

    <!--Spartan Image JavaScript [ REQUIRED ]-->
    <script src="{{ asset('public/js/spartan-multi-image-picker-min.js') }}"></script>

    <!--Custom JavaScript [ REQUIRED ]-->
    <script src="{{ asset('public/js/custom.js')}}"></script>

    <script type="text/javascript">

        $( document ).ready(function() {
            //$('div.alert').not('.alert-important').delay(3000).fadeOut(350);
            if($('.active-link').parent().parent().parent().is('ul')){
                $('.active-link').parent().parent().addClass('in');
                $('.active-link').parent().parent().parent().addClass('in');
            }
            if($('.active-link').parent().parent().is('li')){
                $('.active-link').parent().parent().addClass('active-sub');
            }
            if($('.active-link').parent().is('ul')){
                $('.active-link').parent().addClass('in');
            }

            if ($('#lang-change').length > 0) {
                $('#lang-change .dropdown-item a').each(function() {
                    $(this).on('click', function(e){
                        e.preventDefault();
                        var $this = $(this);
                        var locale = $this.data('flag');
                        $.post('{{ route('language.change') }}',{_token:'{{ csrf_token() }}', locale:locale}, function(data){
                            location.reload();
                        });

                    });
                });
            }

        });

    </script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    @if (\App\BusinessSetting::where('type', 'google_analytics')->first()->value == 1)
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-133955404-1"></script>

        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
          gtag('config', @php env('TRACKING_ID') @endphp);
        </script>
    @endif
 
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.min.css">

    <script src="https://code.jquery.com/jquery-3.5.1.js"> </script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"> </script>
    <script src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"> </script>
    <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.flash.min.js"> </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"> </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"> </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"> </script>
    <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js"> </script>
    <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.print.min.js"> </script>
</head>
<body>

    @foreach (session('flash_notification', collect())->toArray() as $message)
        <script type="text/javascript">
            $(document).on('nifty.ready', function() {
                showAlert('{{ $message['level'] }}', '{{ $message['message'] }}');
            });
        </script>
    @endforeach


    <div id="container" class="effect aside-float aside-bright mainnav-lg">

        @include('inc.admin_nav')

        <div class="boxed">

            <!--CONTENT CONTAINER-->
            <!--===================================================-->
            <div id="content-container">
                <div id="page-content">

                    @yield('content')

                </div>
            </div>
        </div>

        @include('inc.admin_sidenav')

        @include('inc.admin_footer')

        @include('partials.modal')

    </div>
    <script type="text/javascript">
        function sort_brands(el){
            $('#sort_brands').submit();
        }
        $(document).ready(function() {
            $("#myFrag").dataTable().fnDestroy();
            $('#myFrag').DataTable( { 

                responsive: true, 
                "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
                dom: 'Bfrtip',
                buttons: [
                    'pageLength', 'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            } );
        } );
    </script>
        @yield('script')

</body>
</html>
