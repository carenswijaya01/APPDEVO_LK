<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Website LK</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
          integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
            integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
            integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
            crossorigin="anonymous"></script>

    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="style5.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
            integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ"
            crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"
            integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <!-- Modal -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<style>
    /*
    DEMO STYLE
*/
    @import "https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700";

    trix-toolbar [data-trix-button-group="file-tools"] {
        display: none;
    }

    .header_img {
        width: 120px;
        height: 135px
    }

    .header_img img {
        width: 120px
    }

    body {
        font-family: 'Poppins', sans-serif;
        background: #fafafa;
    }

    p {
        font-family: 'Poppins', sans-serif;
        font-size: 1.1em;
        font-weight: 300;
        line-height: 1.7em;
        color: #f5f5f5;
    }

    a, a:hover, a:focus {
        color: inherit;
        text-decoration: none;
        transition: all 0.3s;
    }

    .btn-logout {
        color: #003289;
    }

    .btn-logout:hover {
        color: #fff;
        background: #003289;
    }

    .navbar {
        padding: 15px 10px;
        background: #fff;
        border: none;
        border-radius: 0;
        margin-bottom: 40px;
        box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
    }

    .navbar-btn {
        box-shadow: none;
        outline: none !important;
        border: none;
    }

    .line {
        width: 100%;
        height: 1px;
        border-bottom: 1px dashed #ddd;
        margin: 40px 0;
    }

    /* ---------------------------------------------------
        SIDEBAR STYLE
    ----------------------------------------------------- */

    .wrapper {
        display: flex;
        width: 100%;
        align-items: stretch;
        perspective: 1500px;
    }


    #sidebar {
        min-width: 300px;
        max-width: 300px;
        background: #003289d2;
        color: #fff;
        transition: all 0.6s cubic-bezier(0.945, 0.020, 0.270, 0.665);
        transform-origin: bottom left;
    }

    #sidebar.active {
        margin-left: -250px;
        transform: rotateY(100deg);
    }

    #sidebar .sidebar-header {
        padding: 20px;
        background: #003289;
    }

    #sidebar ul.components {
        padding: 20px 0;
        border-bottom: 1px solid #47748b;
    }

    #sidebar ul p {
        color: #fff;
        padding: 10px;
    }

    #sidebar ul li a {
        padding: 10px;
        font-size: 1.1em;
        display: block;
        color: #fff;
    }

    #sidebar ul li a:hover {
        color: #003289;
        background: #fff;
    }

    #sidebar ul li.active > a, a[aria-expanded="true"] {
        color: #fff;
        background: #003289;
    }


    a[data-toggle="collapse"] {
        position: relative;
    }

    .dropdown-toggle::after {
        display: block;
        position: absolute;
        top: 50%;
        right: 20px;
        transform: translateY(-50%);
    }

    ul ul a {
        font-size: 0.9em !important;
        padding-left: 30px !important;
        background: #f5f5f5;
    }

    ul.CTAs {
        padding: 20px;
    }

    ul.CTAs a {
        text-align: center;
        font-size: 0.9em !important;
        display: block;
        border-radius: 5px;
        margin-bottom: 5px;
    }

    a.download {
        background: #fff;
        color: #f5f5f5;
    }

    a.article, a.article:hover {
        background: #f5f5f5 !important;
        color: #e87910 !important;
    }


    /* ---------------------------------------------------
        CONTENT STYLE
    ----------------------------------------------------- */
    #content {
        width: 100%;
        padding: 20px;
        min-height: 100vh;
        transition: all 0.3s;
    }

    #sidebarCollapse {
        width: 40px;
        height: 40px;
        background: #f5f5f5;
        cursor: pointer;
    }

    #sidebarCollapse span {
        width: 80%;
        height: 2px;
        margin: 0 auto;
        display: block;
        background: #555;
        transition: all 0.8s cubic-bezier(0.810, -0.330, 0.345, 1.375);
        transition-delay: 0.2s;
    }

    #sidebarCollapse span:first-of-type {
        transform: rotate(45deg) translate(2px, 2px);
    }

    #sidebarCollapse span:nth-of-type(2) {
        opacity: 0;
    }

    #sidebarCollapse span:last-of-type {
        transform: rotate(-45deg) translate(1px, -1px);
    }


    #sidebarCollapse.active span {
        transform: none;
        opacity: 1;
        margin: 5px auto;
    }


    /* ---------------------------------------------------
        MEDIAQUERIES
    ----------------------------------------------------- */
    @media (max-width: 768px) {
        #sidebar {
            margin-left: -250px;
            transform: rotateY(90deg);
        }

        #sidebar.active {
            margin-left: 0;
            transform: none;
        }

        #sidebarCollapse span:first-of-type,
        #sidebarCollapse span:nth-of-type(2),
        #sidebarCollapse span:last-of-type {
            transform: none;
            opacity: 1;
            margin: 5px auto;
        }

        #sidebarCollapse.active span {
            margin: 0 auto;
        }

        #sidebarCollapse.active span:first-of-type {
            transform: rotate(45deg) translate(2px, 2px);
        }

        #sidebarCollapse.active span:nth-of-type(2) {
            opacity: 0;
        }

        #sidebarCollapse.active span:last-of-type {
            transform: rotate(-45deg) translate(1px, -1px);
        }

    }

</style>

<body>

<div class="wrapper">
    <!-- Sidebar Holder -->
    <nav id="sidebar" style="overflow-x:hidden">
        <div class="sidebar-header">
            <center>
                <div class="header_img mt-2">
                    <img class="" src="/img/logo_lk.png" alt="">
                </div>
            </center>
            <h4>Lembaga Kemahasiswaan FTI</h4>
            <h6 class="mt-4">{{auth()->user()->role->role}}</h6>

        </div>

        @php
            use \App\Models\Role;
        @endphp
        <ul class="nav flex-column mt-2">
            @guest("admin")
            @else
                {{-- @can('role', '')
                    <li class="nav-item ">
                        <a class="nav-link active" aria-current="page" href="{{ route('daftarKegiatan') }}">
                            <i class="fa-sharp fa-solid fa-clipboard-list fa-lg mx-2 my-2"></i>
                            Daftar Kegiatan
                        </a>
                    </li>
                @endcan --}}
                {{-- INPOST --}}
                @can('role', Role::INPOS)
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('pengumuman.index') }}">
                            <i class="fa-sharp fa-solid fa-bullhorn fa-md mx-2 my-2"></i>
                            Pengumuman
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('points.index') }}">
                            <i class="fa-solid fa-upload fa-md mx-2 my-2"></i>
                            Poin
                        </a>
                    </li>
                @endcan

                

                {{-- Komisi A --}}
                @can('role',[Role::KOMISI_A])
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('proposal-kegiatan-komisia') }}">
                            <i class="fa-sharp fa-solid fa-file fa-lg mx-2 my-2"></i>
                            Proposal Kegiatan
                        </a>
                    </li>
                @endcan

                {{-- Sekretaris BPMF --}}
                @can('role',[Role::SEKRETARIS_BPMF])
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('proposal-kegiatan-sekretarisbpmf') }}">
                            <i class="fa-sharp fa-solid fa-file fa-lg mx-2 my-2"></i>
                            Proposal Kegiatan
                        </a>
                    </li>
                @endcan
                @can('role',[Role::SEKRETARIS_BPMF])
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('proposal-anggaran-sekretarisbpmf') }}">
                            <i class="fa-sharp fa-solid fa-file-invoice-dollar fa-lg mx-2 my-2"></i>
                            Proposal Anggaran
                        </a>
                    </li>
                @endcan

                {{-- Bidang --}}
                @can('role',[Role::BIDANG])
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('proposal-kegiatan-bidang') }}">
                        <i class="fa-sharp fa-solid fa-file fa-lg mx-2 my-2"></i>
                        Proposal Kegiatan
                    </a>
                </li>
                @endcan
                @can('role',[Role::BIDANG])
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('proposal-anggaran-bidang') }}">
                            <i class="fa-sharp fa-solid fa-file-invoice-dollar fa-lg mx-2 my-2"></i>
                            Proposal Anggaran
                        </a>
                    </li>
                @endcan

                {{-- Bendahara SMF --}}
                @can('role',[Role::BENDAHARA_SMF])
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('proposal-anggaran-bendahara') }}">
                            <i class="fa-sharp fa-solid fa-file-invoice-dollar fa-lg mx-2 my-2"></i>
                            Proposal Anggaran
                        </a>
                    </li>
                @endcan

                {{-- Komisi C --}}
                @can('role',[Role::KOMISI_C])
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('proposal-anggaran-komisic') }}">
                            <i class="fa-sharp fa-solid fa-file-invoice-dollar fa-lg mx-2 my-2"></i>
                            Proposal Anggaran
                        </a>
                    </li>
                @endcan

                {{-- SUperAdmin --}}
                @can('role',Role::SUPERADMIN)
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('type-point.index') }}">
                            <i class="fa-solid fa-upload fa-md mx-2 my-2"></i>
                            Tipe Poin
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('admin.index') }}">
                            <i class="fa-solid fa-user fa-md mx-2 my-2"></i>
                            Admin
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('event.index') }}">
                            <i class="fa-solid fa-user fa-md mx-2 my-2"></i>
                            Kegiatan
                        </a>
                    </li>
                @endcan
                {{-- Super Admin --}}

                {{-- kegiatan sidebar --}}
                @can('role', Role::KEGIATAN)
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('tentang-kegiatan') }}">
                            <i class="fa-solid fa-file-invoice fa-lg mx-2 my-2"></i>
                            Tentang Kegiatan
                        </a>
                    </li>
                @endcan
                @can('role', Role::KEGIATAN)
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('tentang-anggaran') }}">
                            <i class="fa-sharp fa-solid fa-file-invoice-dollar fa-lg mx-2 my-2"></i>
                            Tentang Anggaran
                        </a>
                    </li>
                @endcan

            @endguest
        </ul>
    </nav>

    <!-- Page Content Holder -->
    <div id="content">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">

                        <button type="button" id="sidebarCollapse" class="navbar-btn">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                        <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button"
                                data-toggle="collapse" data-target="#navbarSupportedContent"
                                aria-controls="navbarSupportedContent" aria-expanded="false"
                                aria-label="Toggle navigation">
                            <i class="fas fa-align-justify"></i>
                        </button>

                        <div class="collapse navbar-collapse text-right" id="navbarSupportedContent">
                            <ul class="nav navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a class="nav-link px-3" href="{{ route('admin.logout') }}"
                                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <button type="submit" style="border: none;" class="btn btn-md btn-logout"><i
                                                class="fa-solid fa-right-from-bracket fa-xl"></i></button>
                                    </a>
                                    <form action="{{ route('admin.logout') }}" id="logout-form" method="post">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>

            </div>
        </div>


        <div>
            @yield('content')
        </div>
    </div>
</div>

<!-- jQuery CDN - Slim version (=without AJAX) -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<!-- Popper.JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
        integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ"
        crossorigin="anonymous"></script>
<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
        integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm"
        crossorigin="anonymous"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
            $(this).toggleClass('active');
        });
    });
</script>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
        integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"
        integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha"
        crossorigin="anonymous"></script>
<script src="/js/dashboard.js"></script>


{{-- JS Trix --}}
<script>
    document.addEventListener('trix-file-accept', function (e) {
        e.preventDefault();
    })

    function previewImage() {
        const image = document.querySelector('#gambar');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function (oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }
</script>

</html>

