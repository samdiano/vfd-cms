<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Awesome Admin Panel For VFD Group">
    <meta name="author" content="CodebagNG">
    <link rel="shortcut icon" href="{{ asset('dashboard/images/favicon.ico') }}">

    <title>{{ config('app.name') }} | Dashboard</title>
    <link rel="stylesheet" href="{{ asset('dashboard/plugins/morris/morris.css') }}">


    <!-- App css -->
    <link href="{{ asset('dashboard/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('dashboard/css/core.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('dashboard/css/components.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('dashboard/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('dashboard/css/icons.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('dashboard/css/pages.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('dashboard/css/menu.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('dashboard/css/responsive.css') }}" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <script src="https://cdn.tiny.cloud/1/92iapb5hpv4b03x6b71ddi2l0dzs9x1stzcdrt5096d34nwg/tinymce/5/tinymce.min.js">
    </script>
    <script>
        tinymce.init({
  selector: 'textarea',
  plugins: 'print maxChars preview fullpage paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap quickbars emoticons',
  imagetools_cors_hosts: ['picsum.photos'],
  menubar: 'file edit view insert format tools table help',
  toolbar: 'undo redo | bold italic underline strikethrough |  numlist bullist | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent | forecolor backcolor removeformat | pagebreak preview | insertfile link anchor codesample',
  toolbar_sticky: true,
  autosave_ask_before_unload: true,
  autosave_interval: "30s",
  autosave_prefix: "{path}{query}-{id}-",
  autosave_restore_when_empty: false,
  autosave_retention: "2m",
  image_advtab: true,
  content_css: [
    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
    '//www.tiny.cloud/css/codepen.min.css'
  ],
  link_list: [
    { title: 'My page 1', value: 'http://www.tinymce.com' },
    { title: 'My page 2', value: 'http://www.moxiecode.com' }
  ],
  image_list: [
    { title: 'My page 1', value: 'http://www.tinymce.com' },
    { title: 'My page 2', value: 'http://www.moxiecode.com' }
  ],
  image_class_list: [
    { title: 'None', value: '' },
    { title: 'Some class', value: 'class-name' }
  ],
  importcss_append: true,
  height: 400,
  file_picker_callback: function (callback, value, meta) {
    /* Provide file and text for the link dialog */
    if (meta.filetype === 'file') {
      callback('https://www.google.com/logos/google.jpg', { text: 'My text' });
    }

    /* Provide image and alt text for the image dialog */
    if (meta.filetype === 'image') {
      callback('https://www.google.com/logos/google.jpg', { alt: 'My alt text' });
    }

    /* Provide alternative source and posted for the media dialog */
    if (meta.filetype === 'media') {
      callback('movie.mp4', { source2: 'alt.ogg', poster: 'https://www.google.com/logos/google.jpg' });
    }
  },
  templates: [
        { title: 'New Table', description: 'creates a new table', content: '<div class="mceTmpl"><table width="98%%"  border="0" cellspacing="0" cellpadding="0"><tr><th scope="col"> </th><th scope="col"> </th></tr><tr><td> </td><td> </td></tr></table></div>' },
    { title: 'Starting my story', description: 'A cure for writers block', content: 'Once upon a time...' },
    { title: 'New list with dates', description: 'New List with dates', content: '<div class="mceTmpl"><span class="cdate">cdate</span><br /><span class="mdate">mdate</span><h2>My List</h2><ul><li></li><li></li></ul></div>' }
  ],
  template_cdate_format: '[Date Created (CDATE): %m/%d/%Y : %H:%M:%S]',
  template_mdate_format: '[Date Modified (MDATE): %m/%d/%Y : %H:%M:%S]',
  height: 400,
  image_caption: true,
  quickbars_selection_toolbar: 'bold italic | quicklink h2 h3 blockquote quickimage quicktable',
  noneditable_noneditable_class: "mceNonEditable",
  toolbar_drawer: 'sliding',
  contextmenu: "link image imagetools table",
  setup: function (editor) {
        editor.on('init', function () {
            editor.dom.addClass(tinymce.activeEditor.dom.select('p'), 'text-justify slick_dark');
        });
        editor.maxChars = 10;

	}
 });

    </script>
    <script src="{{ asset('dashboard/js/modernizr.min.js') }}"></script>
</head>

<body class="fixed-left">
    <div id="wrapper">
        <div class="topbar">
            <div class="topbar-left">
                {{-- <i href="/" class="logo"><span>VFD Group</span><i class="zmdi zmdi-layers"></i></i> --}}
                <a class="navbar-brand" href="/">
                    <img src="{{ asset('assets/img/VFD%20Group%20Logo%20PNG.png') }}" width="160" class="img-fluid hidden-xs hidden-sm visible-md visible-lg"
                        id="main_logo" alt="VFD Group Logo"></a>
            </div>

            <!-- Button mobile view to collapse sidebar menu -->
            <div class="navbar navbar-default" role="navigation">
                <div class="container">

                    <!-- Page title -->
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <button class="button-menu-mobile open-left">
                                <i class="zmdi zmdi-menu"></i>
                            </button>
                        </li>
                        <li>
                            <h4 class="page-title">
                                <span onClick="javascript:history.go(-1)" style="font-size: 120%" class="btn  btn-sm ">
                                    <i class="zmdi zmdi-arrow-back"></i>
                                </span>@yield('title')
                            </h4>
                        </li>

                    </ul>

                    <!-- Right(Notification and Searchbox -->
                    {{--<ul class="nav navbar-nav navbar-right">--}}
                    {{--<li class="hidden-xs">--}}

                    {{--<a href="{{url('verified/list')}}" class="btn btn-success btn-sm"--}}
                    {{--style=" margin-top: 16px ; margin-right: 16px">Verified ?</a>--}}

                    {{--</li>--}}
                    {{--<li class="hidden-xs">--}}

                    {{--<a data-toggle="modal" data-target="#mod-invoice" href="#"--}}
                    {{--class="btn btn-primary btn-sm" style=" margin-top: 16px ; margin-right: 16px">Generate--}}
                    {{--Invoice</a>--}}

                    {{--</li>--}}



                    {{--<li>--}}
                    {{--<!-- Notification -->--}}
                    {{--<div class="notification-box">--}}
                    {{--<ul class="list-inline m-b-0">--}}
                    {{--<li>--}}
                    {{--<a href="javascript:void(0);" class="right-bar-toggle">--}}
                    {{--<i class="zmdi zmdi-notifications-none"></i>--}}
                    {{--</a>--}}
                    {{--<div class="noti-dot">--}}
                    {{--<span class="dot"></span>--}}
                    {{--<span class="pulse"></span>--}}
                    {{--</div>--}}
                    {{--</li>--}}


                    {{--</ul>--}}
                    {{--</div>--}}
                    {{--<!-- End Notification bar -->--}}
                    {{--</li>--}}

                    {{--<li class="hidden-xs">--}}
                    {{--<form id="myform" role="search" class="app-search" action="{{ url('search') }}">--}}
                    {{--<input type="text" name="q" placeholder="Search..."--}}
                    {{--class="form-control">--}}
                    {{--<a href="#" onclick="document.getElementById('myform').submit()"><i--}}
                    {{--class="fa fa-search"></i></a>--}}
                    {{--</form>--}}
                    {{--</li>--}}
                    {{--</ul>--}}

                </div><!-- end container -->
            </div><!-- end navbar -->
        </div>
        <!-- Top Bar End -->


        <!-- ========== Left Sidebar Start ========== -->
        <div class="left side-menu">
            <div class="sidebar-inner slimscrollleft">

                <div class="user-box">

                </div>
                <div id="sidebar-menu">
                    <ul>
                        <li class="text-muted menu-title">Navigation</li>

                        <li>
                            <a href="/admin" class="waves-effect"><i class="zmdi zmdi-view-dashboard"></i>
                                <span> Dashboard </span> </a>
                        </li>

                        <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i
                                        class="zmdi zmdi-image"></i><span>Banner Images</span>
                                    <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{ url('admin/banner/about') }}">About us</a></li>
                                    <li><a href="{{ url('admin//banner/portfolio') }}">Our portfolio</a></li>
                                    <li><a href="{{ url('admin/banner/investor') }}">Investor Information</a></li>
                                    <li><a href="{{ url('admin/banner/media') }}">Media</a></li>
                                    <li><a href="{{ url('admin/banner/career') }}">Career</a></li>
                                    <li><a href="{{ url('admin/banner/contact') }}">Contact us</a></li>
                                </ul>
    
                            </li>

                        <li class="text-muted menu-title">Pages</li>


                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i
                                    class="zmdi zmdi-layers"></i><span>About us</span>
                                <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled">
                                <li><a href="{{ url('admin/about') }}">About us</a></li>
                                <li><a href="{{ url('admin/governance') }}">Governance</a></li>
                                <li><a href="{{ url('admin/history') }}">Our History</a></li>
                                <li><a href="{{ url('admin/culture') }}">Our Culture</a></li>
                                <li><a href="{{ url('admin/impact') }}">Our Impact</a></li>
                            </ul>

                        </li>
                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-case"></i><span>Our
                                    Portfolio</span>
                                <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled">
                                <li><a href="{{ url('admin/portfolio') }}">Introductory Text</a></li>
                                <li><a href="{{ url('admin/services') }}">Services</a></li>
                                <li><a href="{{ url('admin/subsidiaries') }}">Subsidiaries</a></li>

                            </ul>

                        </li>
                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i
                                    class="zmdi zmdi-layers"></i><span>Investor Information</span>
                                <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled">
                                <li><a href="{{ url('admin/financial-information') }}">Financial Information</a></li>
                                <li><a href="{{ url('admin/conference') }}">Conference Calls</a></li>
                                <li><a href="{{ url('admin/press') }}">Press Release</a></li>
                                <li><a href="{{ url('admin/faq') }}">FAQs</a></li>

                            </ul>

                        </li>
                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i
                                    class="zmdi zmdi-image"></i><span>Media</span>
                                <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled">
                                <li><a href="{{ url('admin/blog') }}">Blog</a></li>
                                <li><a href="{{ url('admin/gallery') }}">Gallery</a></li>
                                <li><a href="{{ url('admin/videos') }}">Videos</a></li>

                            </ul>

                        </li>
                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i
                                    class="zmdi zmdi-layers"></i><span>Careers</span>
                                <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled">
                                <li><a href="{{ url('admin/career') }}">Career</a></li>
                                <li><a href="{{ url('admin/vacancies') }}">Internal Vacancies</a></li>
                                <li><a href="{{ url('admin/portfolio-vacancies') }}">Portfolio Vacancies</a></li>
                                <li><a href="{{ url('admin/career/video') }}">Career Video</a></li>
                            </ul>

                        </li>
                        <li>
                            <a href="/admin/profile" class="waves-effect"><i class="zmdi zmdi-layers"></i>
                                <span> VFD Profile </span> </a>
                        </li>

                        <li>
                            <a href="/admin/contact" class="waves-effect"><i class="zmdi zmdi-layers"></i>
                                <span> Contact Page </span> </a>
                        </li>


                        <li>
                            <a href="/admin/subscribers" class="waves-effect"><i class="zmdi zmdi-layers"></i>
                                <span> Subscribers </span> </a>
                        </li>


                        {{-- <li>
                        <a href="/" class="waves-effect"><i class="zmdi zmdi-view-dashboard"></i>
                            <span> Users </span> </a>
                    </li> --}}

                        <li>
                            <a href="/"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                class="waves-effect"><i class="zmdi zmdi-power"></i> <span> Logout </span> </a>
                            <form id="logout-form" action="/logout" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>

                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- Left Sidebar End -->


        @yield('content')
        <div class="content-page">
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div id="mod-invoice" tabindex="-1" role="dialog" style="" class="modal fade">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" data-dismiss="modal" aria-hidden="true"
                                            class="close"><span class="mdi mdi-close"></span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="text-center">
                                            <h3>Enter Inovice Details</h3>
                                            {{--<p>Enter your passcode.</p>--}}
                                            <form method="post" action="/">
                                                {{csrf_field()}}
                                                <div class="row text-left">
                                                    <div class=" col-md-12">
                                                        <div class="form-group col-md-12">
                                                            <label for="clientName">Client Name</label>
                                                            <input type="text" class="form-control" id="clientName"
                                                                name="cName" required placeholder="Imole Ezekiel">

                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group col-md-6">
                                                            <label for="clientNumber">Client Number</label>

                                                            <input type="text" class="form-control" id="clientNumber"
                                                                name="cNumber" required placeholder="08133457829">

                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label for="clientName">Client Email</label>

                                                            <input type="email" class="form-control" id="clientEmail"
                                                                name="cEmail" required placeholder="admin@driverng.com">

                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 ">
                                                        <div class="form-group col-md-12 ">
                                                            <label for="invoice">Invoice Description</label>
                                                            <input type="text" class="form-control" id="invoice"
                                                                name="invoice_desc" required
                                                                placeholder="Service Charge" />

                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group col-md-3">
                                                            <label for="invoice_number">Invoice number</label>

                                                            <input type="number" class="form-control"
                                                                id="invoice_number" name="invoice_number" required
                                                                placeholder="1">

                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label for="invoice_price">Invoice Price</label>

                                                            <input type="text" class="form-control" id="invoice_price"
                                                                name="invoice_price" required placeholder="2500">

                                                        </div>
                                                        <div class="form-group col-md-3">
                                                            <label for="location">Client Location</label>

                                                            <input type="text" class="form-control" id="loaction"
                                                                name="cLocation" placeholder="Lagos">

                                                        </div>
                                                    </div>


                                                </div>
                                                <div class="xs-mt-50">
                                                    <button type="button" data-dismiss="modal"
                                                        class="btn btn-space btn-default">Cancel
                                                    </button>
                                                    <button type="submit" class="btn btn-space btn-success">View
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="modal-footer"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer text-right">
            {{ date('Y') }} &copy; {{ config('app.name') }}
        </footer>

    </div>


    <!-- Right Sidebar -->
    <div class="side-bar right-bar">
        <a href="javascript:void(0);" class="right-bar-toggle">
            <i class="zmdi zmdi-close-circle-o"></i>
        </a>
        <h4 class="">Notifications</h4>
        <div class="notification-list nicescroll">
            <ul class="list-group list-no-border user-list">
                <li class="list-group-item">
                    <a href="#" class="user-list-item">
                        <div class="avatar">
                            <img src="{{ asset('dashboard/images/users/avatar-2.jpg') }}" alt="">
                        </div>
                        <div class="user-desc">
                            <span class="name">Michael Zenaty</span>
                            <span class="desc">There are new settings available</span>
                            <span class="time">2 hours ago</span>
                        </div>
                    </a>
                </li>
                <li class="list-group-item">
                    <a href="#" class="user-list-item">
                        <div class="icon bg-info">
                            <i class="zmdi zmdi-account"></i>
                        </div>
                        <div class="user-desc">
                            <span class="name">New Signup</span>
                            <span class="desc">There are new settings available</span>
                            <span class="time">5 hours ago</span>
                        </div>
                    </a>
                </li>
                <li class="list-group-item">
                    <a href="#" class="user-list-item">
                        <div class="icon bg-pink">
                            <i class="zmdi zmdi-comment"></i>
                        </div>
                        <div class="user-desc">
                            <span class="name">New Message received</span>
                            <span class="desc">There are new settings available</span>
                            <span class="time">1 day ago</span>
                        </div>
                    </a>
                </li>
                <li class="list-group-item active">
                    <a href="#" class="user-list-item">
                        <div class="avatar">
                            <img src="{{ asset('dashboard/images/users/avatar-3.jpg') }}" alt="">
                        </div>
                        <div class="user-desc">
                            <span class="name">James Anderson</span>
                            <span class="desc">There are new settings available</span>
                            <span class="time">2 days ago</span>
                        </div>
                    </a>
                </li>
                <li class="list-group-item active">
                    <a href="#" class="user-list-item">
                        <div class="icon bg-warning">
                            <i class="zmdi zmdi-settings"></i>
                        </div>
                        <div class="user-desc">
                            <span class="name">Settings</span>
                            <span class="desc">There are new settings available</span>
                            <span class="time">1 day ago</span>
                        </div>
                    </a>
                </li>

            </ul>
        </div>
    </div>
    <!-- /Right-bar -->

    </div>
    <!-- END wrapper -->


    <script>
        var resizefunc = [];
    </script>

    <!-- jQuery  -->
    <script src="{{ asset('dashboard/js/jquery.min.js') }}"></script>
    <script src="{{ asset('dashboard/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('dashboard/js/detect.js') }}"></script>
    <script src="{{ asset('dashboard/js/fastclick.js') }}"></script>
    <script src="{{ asset('dashboard/js/jquery.blockUI.js') }}"></script>
    <script src="{{ asset('dashboard/js/waves.js') }}"></script>
    <script src="{{ asset('dashboard/js/jquery.nicescroll.js') }}"></script>
    <script src="{{ asset('dashboard/js/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('dashboard/js/jquery.scrollTo.min.js') }}"></script>

    <!--[if IE]>
<script type="text/javascript" src="{{ asset('dashboard/ugins/jquery-knob/excanvas.js') }}"></script>
<![endif]-->
    <script src="{{ asset('dashboard/plugins/jquery-knob/jquery.knob.js') }}"></script>
    <script src="{{ asset('dashboard/plugins/morris/morris.min.js') }}"></script>
    <script src="{{ asset('dashboard/plugins/raphael/raphael-min.js') }}"></script>
    <script src="{{ asset('dashboard/pages/jquery.dashboard.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('dashboard/js/jquery.core.js') }}"></script>
    <script src="{{ asset('dashboard/js/jquery.app.js') }}"></script>


    <!--Custom JavaScript -->
    <script src="{{URL::asset('dashboard/js/custom.js')}}"></script>
    <script src="{{URL::asset('dashboard/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{URL::asset('dashboard/js/dataTables.bootstrap4.min.js')}}"></script>
</body>

</html>