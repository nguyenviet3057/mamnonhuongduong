<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="icon" href="{{ asset('css/images/logo.png') }}">
    <link rel="stylesheet" href="@yield('style')">
    <link rel="stylesheet" href="{{ asset('css/layout/master.css') }}">
    <script src="{{ asset('js/scripts.js') }}"></script>
    <title>Trường Mầm Non Hướng Dương</title>
</head>
<body>
    <div class="header container-fluid d-flex flex-row row">
        <div class="alt-nav align-items-center justify-content-center">
            <button><i class="fas fa-bars d-flex"></i></button>
            <div class="alt-nav-bar d-flex flex-column">
                <a href="{{ route('home') }}"><button>Trang chủ</button></a>
                <a href="{{ route('schedule') }}"><button>Thời khóa biểu</button></a>
                <a href="{{ route('news') }}"><button>Bản tin</button></a>
            </div>
        </div>
        <div class="fade-screen"></div>
        <div class="logo col-6 d-flex align-items-center">
            <a href="{{ route('home') }}" class="d-flex flex-row align-items-center">
                <img src="{{ asset('css/images/logo.png') }}" alt="Trường Mầm Non Hướng Dương">
                <div class="logo-name">
                    <span class="text-nowrap">Trường Mầm Non Hướng Dương</span>
                </div>
            </a>
        </div>
        <div class="navigation col-6 d-flex justify-content-end align-items-center">
            <a href="{{ route('home') }}"><button>Trang chủ</button></a>
            <a href="{{ route('schedule') }}"><button>Thời khóa biểu</button></a>
            <a href="{{ route('news') }}"><button>Bản tin</button></a>
        </div>
    </div>

    @yield('body')

    <div class="footer container-fluid d-flex flex-column align-items-center">
        <span>Trường Mầm Non Hướng Dương</span>
        <a href="mailto:c0huongduong.hamthuanbac.binhthuan@moet.edu.vn"><i class="fas fa-envelope"></i> c0huongduong.hamthuanbac.binhthuan@moet.edu.vn</a>
        <a href="tel:02323866831"><i class="fas fa-phone-alt"></i> 02323866831</a>
    </div>
</body>
</html>