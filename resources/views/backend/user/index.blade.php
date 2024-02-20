@include('backend.dashboard.component.breadcrumb', ['title' => $config['seo']['index']['title']])

<body class="g-sidenav-show  bg-gray-200">
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->

        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row mt20">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h6 class="text-white text-capitalize ps-3">{{ $config['seo']['index']['table']}}</h6>
                            </div>
                        </div>

                        <div class="ibox-content">
                            @include('backend.user.component.filter')
                            @include('backend.user.component.table')

                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="container-fluid py-4">
            @include('backend.dashboard.component.footer')
        </div>
        <script>
        $(document).ready(function() {
            var elem = document.querySelector('js-switch');
            var switchery = new Switchery(elem, {
                color: '#1AB394'
            });
        })
        </script>
    </main>
    <!--   Core JS Files   -->


</body>

</html>