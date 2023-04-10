<!doctype html>
<html lang="en">

<head>
    <!-- initiate head with meta tags, css and script -->
    <link rel="stylesheet" href="https://demo.smartcart.shopping/plugins/toastr-master/build/toastr.css">
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="https://demo.smartcart.shopping/favicon.png" />

    <!-- font awesome library -->
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@500&display=swap" rel="stylesheet">

    <!-- themekit admin template asstes -->
    <link rel="stylesheet" href="https://demo.smartcart.shopping/plugins/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://demo.smartcart.shopping/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://demo.smartcart.shopping/plugins/icon-kit/dist/css/iconkit.min.css">
    <link rel="stylesheet" href="https://demo.smartcart.shopping/plugins/ionicons/dist/css/ionicons.min.css">
    <link rel="stylesheet" href="https://demo.smartcart.shopping/plugins/perfect-scrollbar/css/perfect-scrollbar.css">
    <link rel="stylesheet" href="https://demo.smartcart.shopping/plugins/jquery-ui/jquery-ui.css">
    <!-- Stack array for including inline css or head elements -->
    <title>Dashboard | Admin Panel</title>

    <link rel="stylesheet" href="https://demo.smartcart.shopping/plugins/weather-icons/css/weather-icons.min.css">
    <link rel="stylesheet" href="https://demo.smartcart.shopping/plugins/owl.carousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://demo.smartcart.shopping/plugins/owl.carousel/dist/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://demo.smartcart.shopping/plugins/chartist/dist/chartist.min.css">
    <link rel="stylesheet" href="https://demo.smartcart.shopping/plugins/tempusdominus-bootstrap-4/build/css/tempusdominus-bootstrap-4.min.css">

    <link rel="stylesheet" href="https://demo.smartcart.shopping/dist/css/theme.min.css">
    <link rel="stylesheet" href="https://demo.smartcart.shopping/css/style.css">
    <script src="https://demo.smartcart.shopping/src/js/vendor/modernizr-2.8.3.min.js"></script>
    @yield('css')

    <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
    <script>
        // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;

        var pusher = new Pusher('b3284130a7e422708888', {
            cluster: 'mt1',
            encrypted: true
        });
    </script>
    <style>
        .toast-top-right {
            top: 64px;
        }
    </style>
</head>


<body id="app">
    <div class="wrapper">
        <!-- initiate header-->
        @include('layouts.header')

        <div class="page-wrap">
            @include('layouts.sidebar')



            <div class="main-content">
                <!-- yeild contents here -->
                <!-- push external head elements to head -->
                <style>
                    .card .card-header {
                        padding: 10px 20px;
                        border-color: #ffffff36;
                    }
                </style>
                <div class="container-fluid">

                    <div class="row">
                        <!-- page statustic chart start -->




                        @yield('content')


                    </div>
                </div>

                <style>
                    #markerLayer img {
                        width: 50px !important;
                        height: 50px !important;
                        margin: 0 auto !important;
                        display: table !important;
                        left: 0 !important;
                        right: 0 !important;
                    }
                </style>

                <!-- push external js -->
            </div>


            @include('layouts.footer')


        </div>
    </div>

    <!-- initiate modal menu section-->
    <div class="modal fade apps-modal" id="appsModal" tabindex="-1" role="dialog" aria-labelledby="appsModalLabel" aria-hidden="true" data-backdrop="false">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="ik ik-x-circle"></i></button>
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="quick-search">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 ml-auto mr-auto">
                                <div class="input-wrap">
                                    <input type="text" id="quick-search" class="form-control" placeholder="Search..." />
                                    <i class="ik ik-search"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-body d-flex align-items-center">
                    <div class="container">
                        <div class="apps-wrap">
                            <div class="app-item">
                                <a href="#"><i class="ik ik-bar-chart-2"></i><span>Dashboard</span></a>
                            </div>
                            <div class="app-item dropdown">
                                <a href="#" class="dropdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ik ik-command"></i><span>Ui</span></a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                            <div class="app-item">
                                <a href="#"><i class="ik ik-mail"></i><span>Message</span></a>
                            </div>
                            <div class="app-item">
                                <a href="#"><i class="ik ik-users"></i><span>Accounts</span></a>
                            </div>
                            <div class="app-item">
                                <a href="#"><i class="ik ik-shopping-cart"></i><span>Sales</span></a>
                            </div>
                            <div class="app-item">
                                <a href="#"><i class="ik ik-briefcase"></i><span>Purchase</span></a>
                            </div>
                            <div class="app-item">
                                <a href="#"><i class="ik ik-server"></i><span>Menus</span></a>
                            </div>
                            <div class="app-item">
                                <a href="#"><i class="ik ik-clipboard"></i><span>Pages</span></a>
                            </div>
                            <div class="app-item">
                                <a href="#"><i class="ik ik-message-square"></i><span>Chats</span></a>
                            </div>
                            <div class="app-item">
                                <a href="#"><i class="ik ik-map-pin"></i><span>Contacts</span></a>
                            </div>
                            <div class="app-item">
                                <a href="#"><i class="ik ik-box"></i><span>Blocks</span></a>
                            </div>
                            <div class="app-item">
                                <a href="#"><i class="ik ik-calendar"></i><span>Events</span></a>
                            </div>
                            <div class="app-item">
                                <a href="#"><i class="ik ik-bell"></i><span>Notifications</span></a>
                            </div>
                            <div class="app-item">
                                <a href="#"><i class="ik ik-pie-chart"></i><span>Reports</span></a>
                            </div>
                            <div class="app-item">
                                <a href="#"><i class="ik ik-layers"></i><span>Tasks</span></a>
                            </div>
                            <div class="app-item">
                                <a href="#"><i class="ik ik-edit"></i><span>Blogs</span></a>
                            </div>
                            <div class="app-item">
                                <a href="#"><i class="ik ik-settings"></i><span>Settings</span></a>
                            </div>
                            <div class="app-item">
                                <a href="#"><i class="ik ik-more-horizontal"></i><span>More</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- initiate scripts-->
    <script src="https://demo.smartcart.shopping/src/js/vendor/jquery-3.4.1.min.js"></script>
    <script src="https://demo.smartcart.shopping/plugins/popper.js/dist/umd/popper.min.js"></script>
    <script src="https://demo.smartcart.shopping/plugins/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="https://demo.smartcart.shopping/plugins/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
    <script src="https://demo.smartcart.shopping/plugins/screenfull/dist/screenfull.js"></script>

    <!-- Stack array for including inline js or scripts -->
    <script defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8BUI8-dzrQlGg_ttawIFvLR2xXtqTw2A&callback=initMap">
    </script>
    <script src="//js.pusher.com/3.1/pusher.min.js"></script>

    <script>
        var tracking_info = [{
            "name": "Mohammad Abu zain",
            "is_online": "Online",
            "status": "Busy",
            "latitude": "29.538532",
            "longitude": "35.013118",
            "image": "https:\/\/demo.smartcart.shopping\/img\/user.jpg"
        }, {
            "name": "\u0639\u0646\u0627\u0646 \u0639\u0627\u062f\u0644",
            "is_online": "Online",
            "status": "Busy",
            "latitude": "29.495364",
            "longitude": "34.998747",
            "image": "https:\/\/demo.smartcart.shopping\/img\/user.jpg"
        }, {
            "name": "Ramzi Abd",
            "is_online": "Online",
            "status": "Busy",
            "latitude": "29.563621",
            "longitude": "35.002256",
            "image": "https:\/\/demo.smartcart.shopping\/img\/user.jpg"
        }, {
            "name": "Yassir Shatnawi",
            "is_online": "Online",
            "status": "Busy",
            "latitude": "29.546676",
            "longitude": "35.009552",
            "image": "https:\/\/demo.smartcart.shopping\/img\/user.jpg"
        }];

        function reloadMarker(data) {
            var myMapOptions = {
                center: new google.maps.LatLng(29.5810295, 35.0050958),
                zoom: 12,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            var map = new google.maps.Map(document.getElementById("map"), myMapOptions);
            setMarkers(map, tracking_info)
        }

        function initMap() {
            var myMapOptions = {
                center: new google.maps.LatLng(29.5810295, 35.0050958),
                zoom: 12,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            var map = new google.maps.Map(document.getElementById("map"), myMapOptions);
            setMarkers(map, tracking_info)
        }

        function setMarkers(map, locations) {
            var marker, i;
            for (i = 0; i < locations.length; i++) {
                var name = locations[i].name
                var is_online = locations[i].is_online
                var status = locations[i].status
                var latitude = locations[i].latitude
                var longitude = locations[i].longitude
                // var image = locations[i].image
                const svgMarker = {
                    path: "M10.453 14.016l6.563-6.609-1.406-1.406-5.156 5.203-2.063-2.109-1.406 1.406zM12 2.016q2.906 0 4.945 2.039t2.039 4.945q0 1.453-0.727 3.328t-1.758 3.516-2.039 3.070-1.711 2.273l-0.75 0.797q-0.281-0.328-0.75-0.867t-1.688-2.156-2.133-3.141-1.664-3.445-0.75-3.375q0-2.906 2.039-4.945t4.945-2.039z",
                    fillColor: locations[i].is_online == 1 ? "red" : "green",
                    fillOpacity: 0.6,
                    strokeWeight: 0.5,
                    rotation: 0,
                    scale: 2,
                    anchor: new google.maps.Point(15, 30),
                };
                var myoverlay = new google.maps.OverlayView();
                myoverlay.draw = function() {
                    //this assigns an id to the markerlayer Pane, so it can be referenced by CSS
                    this.getPanes().markerLayer.id = 'markerLayer';
                };
                myoverlay.setMap(map);

                latlngset = new google.maps.LatLng(latitude, longitude);
                var marker = new google.maps.Marker({
                    map: map,
                    title: name,
                    position: latlngset,
                    icon: svgMarker,
                    animation: google.maps.Animation.DROP,
                });
                // map.setCenter(marker.getPosition());
                var content = `<strong>${name}</strong><br>${is_online} (${status})`;
                var infowindow = new google.maps.InfoWindow()
                google.maps.event.addListener(marker, 'click', (function(marker, content, infowindow) {
                    console.log('marker', marker)
                    return function() {
                        infowindow.setContent(content);
                        infowindow.open(map, marker);
                    };
                })(marker, content, infowindow));
            }
        }
        // Pusher to check latest input
    </script>
    <script type="text/javascript">
        $('.count').each(function() {
            $(this).prop('Counter', 0).animate({
                Counter: $(this).text()
            }, {
                duration: 3000,
                easing: 'swing',
                step: function(now) {
                    $(this).text(Math.ceil(now));
                }
            });
        });
        Pusher.logToConsole = true;
        var pusher = new Pusher('b3284130a7e422708888', {
            cluster: 'mt1',
            encrypted: true
        });
        var channel = pusher.subscribe('admin-notification');
        var channel2 = pusher.subscribe('update-location');
        var callback = (data) => {
            //reloadMarker();
            //window.location.reload();
        };
        var callback2 = (data) => {
            reloadMarker(data);
            //window.location.reload();
        };
        var eventName = "admin-notification";
        var eventName2 = "update-location";
        pusher.bind(eventName, callback);
        pusher.bind(eventName2, callback2);
    </script>

    <script src="https://demo.smartcart.shopping/dist/js/theme.js"></script>
    <script src="https://demo.smartcart.shopping/js/chat.js"></script>

    <script>
        function setRoute($id, $route) {
            $('#item_id').val($id);
            $('#frm_confirm_delete').attr('action', $route);
        }

        $(document).ready(function() {
            $('#cm_menu_search_input').keyup(function(e) {
                var text = $('#cm_menu_search_input').val().trim().toLowerCase();
                $('#main-menu-navigation div.nav-item').each(function(index, element) {
                    if (!$(element).find('a').text().toLowerCase().includes(text)) {
                        $(element).addClass('hide');
                        $('.nav-lavel').addClass('hide');
                    } else {
                        $(element).removeClass('hide');
                        $('.nav-lavel').removeClass('hide');
                    }
                });
            });


            if ($(window).innerWidth() <= 1024) {
                $('.sidebar-content').css('scroll-behavior', 'inherit')
            }
        });
    </script>
    <script src="https://demo.smartcart.shopping/plugins/toastr-master/toastr.js"></script>
    <script>
        var count = $(this).data("count");
        var notificationsWrapper = $('.dropdown-notifications');
        var notificationsCountElem = notificationsWrapper.find('span[data-count]');
        var notificationsCount = parseInt(notificationsCountElem.data('count'));
        var notifications = notificationsWrapper.find('.notifications-wrap');

        if (notificationsCount <= 0) {
            notificationsCount = 0;
        }

        $(".notif-count").text(notificationsCount);
        var pusher = new Pusher('b3284130a7e422708888', {
            cluster: 'mt1',
            encrypted: true
        });

        var channel = pusher.subscribe('admin-notification');
        var callback = (data) => {
            toastr.options = {
                "closeButton": false,
                "debug": false,
                "newestOnTop": false,
                "progressBar": true,
                "positionClass": "toast-top-right",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            };

            var notify_toast = toastr["success"](data.message);

            var existingNotifications = notifications.html();
            var newNotificationHtml = `
                    <a href="#" class="media">
                        <span class="d-flex">
                            <i class="ik ik-check"></i>
                        </span>
                        <span class="media-body">
                            <span class="heading-font-family media-heading">` + data.message + `</span>
                            <span class="media-content">1 minutes ago</span>
                        </span>
                    </a>
                    `;

            notifications.html(newNotificationHtml + existingNotifications);
            notificationsCount += 1;
            notificationsCountElem.attr('data-count', notificationsCount);
            notificationsWrapper.find('.notif-count').text(notificationsCount);
            notificationsWrapper.show();
        };

        var eventName = "admin-notification";
        pusher.bind(eventName, callback);
    </script>
</body>

</html>
