<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title></title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        jQuery(document).ready(function ($) {
            $("#menu-toggle").click(function (e) {
                e.preventDefault();
                $("#wrapper").toggleClass("toggled");
            });
        })
    </script>
    <style>
        body {
            overflow-x: hidden;
        }

        #sidebar-wrapper {
            min-height: 100vh;
            margin-left: -15rem;
            -webkit-transition: margin .25s ease-out;
            -moz-transition: margin .25s ease-out;
            -o-transition: margin .25s ease-out;
            transition: margin .25s ease-out;
        }

        #sidebar-wrapper .sidebar-heading {
            padding: 0.875rem 1.25rem;
            font-size: 1.2rem;
        }

        #sidebar-wrapper .list-group {
            width: 15rem;
        }

        #page-content-wrapper {
            min-width: 100vw;
        }

        #wrapper.toggled #sidebar-wrapper {
            margin-left: 0;
        }

        @media (min-width: 768px) {
            #sidebar-wrapper {
                margin-left: 0;
            }

            #page-content-wrapper {
                min-width: 0;
                width: 100%;
            }

            #wrapper.toggled #sidebar-wrapper {
                margin-left: -15rem;
            }
        }
    </style>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-light" id="sidebar-wrapper">
            <div class="sidebar-heading">
                Exam Results
            </div>
            <div class="list-group list-group-flush">
                <a href="{{url('dashboard')}}" class="list-group-item list-group-item-action bg-light border-0">
                    <i class="bi bi-clipboard pe-2"></i>
                    Dashboard
                </a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">

            <nav class="navbar navbar-expand-sm navbar-light bg-light p-1">
                <i class="bi bi-list fs-3 ps-3" id="menu-toggle"></i>

                <button class="navbar-toggler navbar-toggle" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                        <li class="nav-item dropdown">
                            @if(Auth::user())
                            <a class="nav-link pe-4" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false"><i
                                    class="bi bi-person-circle pe-2"></i>{{Auth::user()->name}}
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <div class="text-center">
                                    <h6 class="text-capitalize">{{Auth::user()->role}}</h6>
                                    <span>{{Auth::user()->email}}</span>
                                </div>
                                <hr class="dropdown-divider">
                                <a class="dropdown-item" href="{{url('logout')}}">
                                    <i class="bi bi-box-arrow-right pe-2"></i>Logout</a>
                            </div>
                            @endif
                        </li>
                    </ul>
                </div>
            </nav>
            @yield('Dashboard')
        </div>
    </div>
</body>

</html>