<!DOCTYPE html>
<html lang="en">

<head>
    <title>Project Admin Dashboard</title>
    <!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 11]>
    	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    	<![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="Phoenixcoded" />

    {{-- {{ asset(' ') }} --}}
    <!-- Favicon icon -->
    <link rel="icon" href="{{ asset('assets/images/favicon.ico ') }}" type="image/x-icon">

    
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/fullcalendar.min.css')}}">

    <!-- vendor css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css ') }}">
    
    

</head>
<body class="">
	<!-- [ Pre-loader ] start -->
	{{-- <div class="loader-bg">
		<div class="loader-track">
			<div class="loader-fill"></div>
		</div>
	</div> --}}
	<!-- [ Pre-loader ] End -->
	
    @include('admin.sidebar')
	<!-- [ Header ] start -->
	<header class="navbar pcoded-header navbar-expand-lg navbar-light header-blue">
		
			
				<div class="m-header">
					<a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
					<a href="#!" class="b-brand">
						<!-- ========   change your logo hear   ============ -->
						{{-- <img src="{{ asset('assets/images/logo.png')}}" alt="" class="logo"> --}}
						<img src="{{ asset('assets/images/gaf.gif')}}" alt="" class="logo" width="220px" style="padding-top: 3em">
					</a>
					<a href="#!" class="mob-toggler">
						<i class="feather icon-more-vertical"></i>
					</a>
				</div>
				<div class="collapse navbar-collapse">
					{{-- <ul class="navbar-nav mr-auto">
						<li class="nav-item">
							<a href="#!" class="pop-search"><i class="feather icon-search"></i></a>
							<div class="search-bar">
								<input type="text" class="form-control border-0 shadow-none" placeholder="Search hear">
								<button type="button" class="close" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
						</li>
					</ul> --}}
					<ul class="navbar-nav ml-auto">
						<li>
							<div class="dropdown">
								<a class="dropdown-toggle" href="#" data-toggle="dropdown"><i class="icon feather icon-bell"></i></a>
								<div class="dropdown-menu dropdown-menu-right notification">
									<div class="noti-head">
										<h6 class="d-inline-block m-b-0">Notifications</h6>
										<div class="float-right">
											<a href="#!" class="m-r-10">mark as read</a>
											<a href="#!">clear all</a>
										</div>
									</div>
									<ul class="noti-body">
										<li class="n-title">
											<p class="m-b-0">NEW</p>
										</li>
										<li class="notification">
											<div class="media">
												<img class="img-radius" src="{{ asset('assets/images/user/avatar-1.jpg ') }}" alt="Generic placeholder image">
												<div class="media-body">
													<p><strong>John Doe</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>5 min</span></p>
													<p>New ticket Added</p>
												</div>
											</div>
										</li>
										<li class="n-title">
											<p class="m-b-0">EARLIER</p>
										</li>
										<li class="notification">
											<div class="media">
												<img class="img-radius" src="{{ asset('assets/images/user/avatar-2.jpg ') }}" alt="Generic placeholder image">
												<div class="media-body">
													<p><strong>Joseph William</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>10 min</span></p>
													<p>Prchace New Theme and make payment</p>
												</div>
											</div>
										</li>
										<li class="notification">
											<div class="media">
												<img class="img-radius" src="{{ asset('assets/images/user/avatar-1.jpg ') }}" alt="Generic placeholder image">
												<div class="media-body">
													<p><strong>Sara Soudein</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>12 min</span></p>
													<p>currently login</p>
												</div>
											</div>
										</li>
										<li class="notification">
											<div class="media">
												<img class="img-radius" src="{{ asset('assets/images/user/avatar-2.jpg ') }}" alt="Generic placeholder image">
												<div class="media-body">
													<p><strong>Joseph William</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>30 min</span></p>
													<p>Prchace New Theme and make payment</p>
												</div>
											</div>
										</li>
									</ul>
									<div class="noti-footer">
										<a href="#!">show all</a>
									</div>
								</div>
							</div>
						</li>
						<li>
							<div class="dropdown drp-user show" >
								<a href="#" class="has-ripple" data-toggle="dropdown" aria-expanded="true">
									<i class="feather icon-user"></i>
                                        {{ Auth::user()->name }}
                                    
                                    <span class="ripple ripple-animate" style="height: 160px; width: 160px; animation-duration: 0.7s; animation-timing-function: linear; background: rgb(255, 255, 255); opacity: 0.4; top: -80.5px; left: 15.0234px;"></span>
								</a>
                                
								<div class="dropdown-menu dropdown-menu-right profile-notification">
									<ul class="pro-body">
										<li><a href="user-profile.html" class="dropdown-item"><i class="feather icon-user"></i> Profile</a></li>
										<li><a href="email_inbox.html" class="dropdown-item"><i class="feather icon-mail"></i> My Messages</a></li>
										<li><a href="auth-signin.html" class="dropdown-item"><i class="feather icon-lock"></i> Lock Screen</a></li>
                                        <li><a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();  document.getElementById('logout-form').submit();"><i class="feather icon-log-out"></i>Logout
                                    </a></li>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf </form>
                                    </ul>
								</div>
							</div>
						</li>
					</ul>
				</div>
				
			
	</header>
	<!-- [ Header ] end -->
	
	

<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-content">

        @yield('admin')
        
    </div>
</div>

<!-- [ Main Content ] end -->
    <!-- Warning Section start -->
    <!-- Older IE warning message -->
    <!--[if lt IE 11]>
        <div class="ie-warning">
            <h1>Warning!!</h1>
            <p>You are using an outdated version of Internet Explorer, please upgrade
               <br/>to any of the following web browsers to access this website.
            </p>
            <div class="iew-container">
                <ul class="iew-download">
                    <li>
                        <a href="http://www.google.com/chrome/">
                            <img src="assets/images/browser/chrome.png" alt="Chrome">
                            <div>Chrome</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.mozilla.org/en-US/firefox/new/">
                            <img src="assets/images/browser/firefox.png" alt="Firefox">
                            <div>Firefox</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://www.opera.com">
                            <img src="assets/images/browser/opera.png" alt="Opera">
                            <div>Opera</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.apple.com/safari/">
                            <img src="assets/images/browser/safari.png" alt="Safari">
                            <div>Safari</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                            <img src="assets/images/browser/ie.png" alt="">
                            <div>IE (11 & above)</div>
                        </a>
                    </li>
                </ul>
            </div>
            <p>Sorry for the inconvenience!</p>
        </div>
    <![endif]-->
    <!-- Warning Section Ends -->

    <!-- Required Js -->
    <script src="{{ asset('assets/js/vendor-all.min.js ') }}"></script>
    <script src="{{ asset('assets/js/plugins/bootstrap.min.js ') }}"></script>
    <script src="{{ asset('assets/js/ripple.js ') }}"></script>
    <script src="{{ asset('assets/js/pcoded.min.js ') }}"></script>
	<script src="{{ asset('assets/js/menu-setting.min.js ') }}"></script>
    <script src="{{ asset('assets/js/plugins/moment.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/fullcalendar.min.js') }}"></script>

 <!-- Apex Chart -->
 <script src="{{ asset('assets/js/plugins/apexcharts.min.js') }}"></script>

<!-- Apex Chart -->
<script src="{{ asset('assets/js/plugins/apexcharts.min.js ') }}"></script>
<!-- custom-chart js -->
<script src="{{ asset('assets/js/pages/dashboard-main.js ') }}"></script>

<script>
    // [ operation-processed ] start
    $(function() {
        var options = {
            chart: {
                height: 250,
                type: 'area',
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                width: 2,
                curve: 'smooth'
            },
            colors: ["#ff5252", "#4680ff"],
            fill: {
                type: 'solid',
                opacity: 0.2,
            },
            markers: {
                size: 3,
                opacity: 0.9,
                colors: "#fff",
                strokeColor: ["#ff5252", "#4680ff"],
                strokeWidth: 2,
                hover: {
                    size: 7,
                }
            },
            series: [{
                name: 'Expense',
                data: [40, 75, 20, 45, 30, 50, 30]
            }, {
                name: 'Income',
                data: [90, 40, 60, 20, 10, 0, 0]
            }],

            xaxis: {
                type: 'datetime',
                categories: ["2019\-01-19", "2019\-02-19", "2019\-03-19", "2019\-04-19", "2019\-05-19", "2019\-06-19", "2019\-07-19"],
            },
            tooltip: {
                x: {
                    format: 'dd/MM/yy HH:mm'
                },
            }
        }
        var chart = new ApexCharts(
            document.querySelector("#summary-chart"),
            options
        );
        chart.render();
    });
    // [ operation-processed ] end
    // [ proj-earning ] start
    $(function() {
        var options = {
            chart: {
                type: 'bar',
                height: 310,
                zoom: {
                    enabled: false
                },
                toolbar: {
                    show: false,
                },
            },
            dataLabels: {
                enabled: false,
            },
            colors: ["#fff"],
            plotOptions: {
                bar: {
                    color: '#fff',
                    columnWidth: '60%',
                }
            },
            fill: {
                type: 'solid',
                opacity: 1,
            },
            series: [{
                data: [25, 66, 41, 89, 63, 25, 44, 12, 36, 9, 54, 25, 66, 41, 89, 63, 54, 25, 66, 41, 89, 63, 25, 44, 12, 36]
            }],
            xaxis: {
                crosshairs: {
                    width: 1
                },
                labels: {
                    show: false,
                },
            },
            yaxis: {
                labels: {
                    style: {
                        color: '#fff',
                    }
                },
            },
            grid: {
                borderColor: '#ffffff85',
                padding: {
                    bottom: 0,
                    left: 10,
                }
            },
            tooltip: {
                fixed: {
                    enabled: false
                },
                x: {
                    show: false
                },
                y: {
                    title: {
                        formatter: function(seriesName) {
                            return 'Total absent'
                        }
                    }
                },
                marker: {
                    show: false
                }
            }
        };
        var chart = new ApexCharts(document.querySelector("#absent-chart"), options);
        chart.render();
    });
    // [ proj-earning ] end
    // Full calendar
    $(function() {
        $('#Eventcalendar').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
            },
            defaultDate: '2018-08-12',
            editable: true,
            droppable: true,
            events: [{
                title: 'All Day Event',
                start: '2018-08-01',
                borderColor: '#04a9f5',
                backgroundColor: '#04a9f5',
                textColor: '#fff'
            }, {
                title: 'Long Event',
                start: '2018-08-07',
                end: '2018-08-10',
                borderColor: '#f44236',
                backgroundColor: '#f44236',
                textColor: '#fff'
            }, {
                id: 999,
                title: 'Repeating Event',
                start: '2018-08-09T16:00:00',
                borderColor: '#f4c22b',
                backgroundColor: '#f4c22b',
                textColor: '#fff'
            }, {
                id: 999,
                title: 'Repeating Event',
                start: '2018-08-16T16:00:00',
                borderColor: '#3ebfea',
                backgroundColor: '#3ebfea',
                textColor: '#fff'
            }, {
                title: 'Conference',
                start: '2018-08-11',
                end: '2018-08-13',
                borderColor: '#1de9b6',
                backgroundColor: '#1de9b6',
                textColor: '#fff'
            }, {
                title: 'Meeting',
                start: '2018-08-12T10:30:00',
                end: '2018-08-12T12:30:00'
            }, {
                title: 'Lunch',
                start: '2018-08-12T12:00:00',
                borderColor: '#f44236',
                backgroundColor: '#f44236',
                textColor: '#fff'
            }, {
                title: 'Happy Hour',
                start: '2018-08-12T17:30:00',
                borderColor: '#a389d4',
                backgroundColor: '#a389d4',
                textColor: '#fff'
            }, {
                title: 'Birthday Party',
                start: '2018-08-13T07:00:00'
            }, {
                title: 'Click for Google',
                url: 'http://google.com/',
                start: '2018-08-28',
                borderColor: '#a389d4',
                backgroundColor: '#a389d4',
                textColor: '#fff'
            }],
            drop: function() {
                if ($('#drop-remove').is(':checked')) {
                    $(this).remove();
                }
            }
        });
    });
</script>
</body>

</html>
