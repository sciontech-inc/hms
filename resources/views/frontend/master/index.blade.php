<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Business Solutions</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="{{asset('/js/jquery.validate.min.js')}}" ></script>
    <script src="{{asset('/plugins/moment.js')}}" ></script>
    <link href="{{{ URL::asset('backend/css/modern.css') }}}" rel="stylesheet">
    <link href="{{asset('/plugins/toastr/toastr.min.css')}}" rel="stylesheet">
    <link href="{{asset('/css/custom.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css" />

    {{-- <script src="{{{ URL::asset('backend/js/settings.js') }}}"></script> --}}
    <script src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    @yield('scripts')
    @yield('styles')
    @yield('styles-2')
    <style>
    .alert {
        padding: 10px;
    }
    .centralized>button {
        padding: 5px 10px;
        border: 0px;
        font-size: 20px;
        color: #153d77;
        background: #fff;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        margin: 5px;
    }
    .alert {
        margin: 10px;
        width: auto !important;
    }
    .alert p {
        margin: 0px;
    }
    label.error {
        width: 100%;
        padding: 5px 10px;
        background: #ff9f9f;
        color: #fff;
    }
    </style>
    <script src="https://js.pusher.com/7.1/pusher.min.js"></script>

    <script>

        // Pusher.logToConsole = true;

        var pusher = new Pusher('4fa242eb99abc2b85cce', {
            cluster: 'ap1'
        });

        var channel = pusher.subscribe('my-channel');
            channel.bind('form-submitted', function(data) {
            alert(JSON.stringify(data));
        });

    </script>

</head>
<body>
    <div class="wrapper">
        @include('frontend.partial.sidebar')
        <div class="main">
            @include('frontend.partial.header')
            <div class="custom-modal">
                <div class="custom-modal-container">
                    <div class="custom-modal-header">
                        <h3 class="custom-modal-title">MODAL TITLE</h3>
                        <span class="custom-modal-close" onclick="scion.create.modal().hide('all')"><i class="fas fa-times"></i></span>
                    </div>
                    <div class="custom-modal-body"></div>
                </div>
            </div>
            <div class="sc-modal">
                @yield('sc-modal')
            </div>
            <div class="row" style="height:calc(100% - 180px);padding: 0 10px;">
                @if(isset($type))
                    <div class="col-xl-12" height="100%">
                        @yield('content')
                    </div>
                @else
                    <div class="col-xl-2 left-content" height="100%">
                        <div class="container-fluid" height="100%">
                            @yield('left-content')
                        </div>
                    </div>
                    <main class="col-xl-8 content" height="100%">
                        <div class="container-fluid" height="100%">
                            @yield('content')
                        </div>
                    </main>
                    <div class="col-xl-2 right-content" height="100%">
                        <div class="container-fluid" height="100%">
                            @yield('right-content')
                        </div>
                    </div>
                @endif
            </div>
            @include('frontend.partial.footer')
        </div>

    </div>


    <div class="modal fade" id="deleteMessage" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete Record</h5>
            </div>
            <div class="modal-body">
                Are you sure you want to delete this data?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                <button type="button" class="btn btn-primary" onclick="delete_func.yes()">Yes</button>
            </div>
        </div>
        </div>
    </div>

    <script src="{{ URL::asset('backend/js/app.js') }}"></script>

    <script src="{{asset('/plugins/cropimg/cropzee.js')}}" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>
    <script src="{{asset('/plugins/toastr/toastr.min.js')}}" ></script>
    <script src="{{asset('/js/global.js')}}" ></script>
    <script>
		$(function() {
			// Datatables basic
			$('#datatables-basic').DataTable({
				responsive: true
			});

			// Datatables with Buttons
			var datatablesButtons = $('#datatables-buttons').DataTable({
				lengthChange: !1,
				buttons: ["copy", "print"],
				responsive: true
			});
			datatablesButtons.buttons().container().appendTo("#datatables-buttons_wrapper .col-md-6:eq(0)");

		});
	</script>

    @yield('chart-js')
</body>
</html>
