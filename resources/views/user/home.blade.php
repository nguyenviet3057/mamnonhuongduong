@extends('layout.master')

@section('style')
    {{ asset('css/user/home.css') }}
@stop

@section('body')
    <div class="body container-fluid d-flex flex-column justify-content-center">
        <div class="introduction">
            <div class="intro-img" style="background-image: url('{{ asset('css/images/thumbnail.jpg') }}')"></div>
            <div class="intro-brief">
                <p class="container">Trường mầm non Hướng Dương - Hàm Thuận Bắc - Bình Thuận thành lập xuất phát từ tình yêu thương con trẻ, từ tâm huyết cả đời, từ những kiến thức đã học và với khát khao học tập, phát triển bản thân của ban giám hiệu nhà trường. Mầm non Hướng Dương luôn luôn lắng nghe, học hỏi để đem đến điều tốt đẹp nhất cho những bạn nhỏ theo học tại trường.</p>
            </div>
        </div>
        <div class="body-content container-fluid">
            <div class="content container">
                <div class="intro-content container d-flex flex-column justify-content-center align-items-center">
                    <div class="committee d-flex flex-column align-items-center">
                        <p>Đại hội Đảng bộ của trường</p>
                        <img src="{{ asset('css/images/committee-img.jpg') }}" class="committee-img" width="1280" height="960" alt="ĐẠI HỘI ĐẢNG BỘ CỦA TRƯỜNG ">
                    </div>
                </div>
                <hr>
                <div class="act d-flex flex-column align-items-center">
                    <p class="act-title">Văn nghệ của trường</p>
                    <div class="activities d-flex align-items-center row">
                        <div class="act-content col-md-4 col-12">
                            <img src="{{ asset('css/images/act1.png') }}" alt="Văn nghệ tổng kết">
                            <p>Văn nghệ tổng kết</p>
                        </div>
                        <div class="act-content col-md-4 col-12">
                            <img src="{{ asset('css/images/act2.png') }}" alt="Văn nghệ tổng kết">
                            <p>Văn nghệ tổng kết</p>
                        </div>
                        <div class="act-content col-md-4 col-12">
                            <img src="{{ asset('css/images/act3.png') }}" alt="Lễ ra trường">
                            <p>Lễ ra trường</p>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="act-5k d-flex flex-column align-items-center">
                    <p class="act-5k-title">Công tác phòng chống dịch<br>Thông điệp 5k</p>
                    <div class="activities-5k d-flex row">
                        <div class="act-5k-content col-md-3 col-12">
                            <img src="{{ asset('css/images/act-5k-1.jpg') }}" alt="Xịt khử khuẩn khi các bé đến trường">
                            <p>Xịt khử khuẩn khi các bé đến trường</p>
                        </div>
                        <div class="act-5k-content col-md-3 col-12">
                            <img src="{{ asset('css/images/act-5k-2.jpg') }}" alt="Xịt khử khuẩn khi các bé đến trường">
                            <p>Xịt khử khuẩn khi các bé đến trường</p>
                        </div>
                        <div class="act-5k-content col-md-3 col-12">
                            <img src="{{ asset('css/images/act-5k-3.jpg') }}" alt="Xịt khử khuẩn khi các bé đến trường">
                            <p>Xịt khử khuẩn khi các bé đến trường</p>
                        </div>
                        <div class="act-5k-content col-md-3 col-12">
                            <img src="{{ asset('css/images/act-5k-4.jpg') }}" alt="Xịt khử khuẩn khi các bé đến trường">
                            <p>Xịt khử khuẩn khi các bé đến trường</p>
                        </div>
                        <div class="act-5k-content col-md-3 col-12">
                            <img src="{{ asset('css/images/act-5k-5.jpg') }}" alt="Các cô đón bé vào lớp">
                            <p>Các cô đón bé vào lớp</p>
                        </div>
                        <div class="act-5k-content col-md-3 col-12">
                            <img src="{{ asset('css/images/act-5k-6.jpg') }}" alt="Các cô đón bé vào lớp">
                            <p>Các cô đón bé vào lớp</p>
                        </div>
                        <div class="act-5k-content col-md-3 col-12">
                            <img src="{{ asset('css/images/act-5k-7.jpg') }}" alt="Các cô đón bé vào lớp">
                            <p>Các cô đón bé vào lớp</p>
                        </div>
                        <div class="act-5k-content col-md-3 col-12">
                            <img src="{{ asset('css/images/act-5k-8.jpg') }}" alt="Các cô đón bé vào lớp">
                            <p>Các cô đón bé vào lớp</p>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="act-child d-flex flex-column align-items-center">
                    <p class="act-child-title">Hoạt động học của các bé</p>
                    <div class="activities-child d-flex row">
                        <div class="act-child-content col-md-3 col-12">
                            <img src="{{ asset('css/images/act-child-1.png') }}" alt="Hoạt động phát triển thể chất">
                            <p>Hoạt động phát triển thể chất</p>
                        </div>
                        <div class="act-child-content col-md-3 col-12">
                            <img src="{{ asset('css/images/act-child-2.png') }}" alt="Hoạt động phát triển thẩm mĩ">
                            <p>Hoạt động phát triển thẩm mĩ</p>
                        </div>
                        <div class="act-child-content col-md-3 col-12">
                            <img src="{{ asset('css/images/act-child-3.png') }}" alt="Hoạt động phát triển thẩm mĩ">
                            <p>Hoạt động phát triển thẩm mĩ</p>
                        </div>
                        <div class="act-child-content col-md-3 col-12">
                            <img src="{{ asset('css/images/act-child-4.png') }}" alt="Hoạt động phát triển ngôn ngữ">
                            <p>Hoạt động phát triển ngôn ngữ</p>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="other-act d-flex flex-column align-items-center">
                    <p class="other-act-title">Các hoạt động khác của các bé</p>
                    <div class="other-activities d-flex align-items-center row">
                        <div class="other-act-content col-md-3 col-12">
                            <img src="{{ asset('css/images/other-act-1.png') }}" alt="Các hoạt động khác của các bé">
                            <!-- <p></p> -->
                        </div>
                        <div class="other-act-content col-md-3 col-12">
                            <img src="{{ asset('css/images/other-act-2.png') }}" alt="Các hoạt động khác của các bé">
                            <!-- <p></p> -->
                        </div>
                        <div class="other-act-content col-md-3 col-12">
                            <img src="{{ asset('css/images/other-act-3.png') }}" alt="Các hoạt động khác của các bé">
                            <!-- <p></p> -->
                        </div>
                        <div class="other-act-content col-md-3 col-12">
                            <img src="{{ asset('css/images/other-act-4.png') }}" alt="Các hoạt động khác của các bé">
                            <!-- <p></p> -->
                        </div>
                        <div class="other-act-content col-md-3 col-12">
                            <img src="{{ asset('css/images/other-act-5.png') }}" alt="Các hoạt động khác của các bé">
                            <!-- <p></p> -->
                        </div>
                        <div class="other-act-content col-md-3 col-12">
                            <img src="{{ asset('css/images/other-act-6.png') }}" alt="Các hoạt động khác của các bé">
                            <!-- <p></p> -->
                        </div>
                        <div class="other-act-content col-md-3 col-12">
                            <img src="{{ asset('css/images/other-act-7.png') }}" alt="Các hoạt động khác của các bé">
                            <!-- <p></p> -->
                        </div>
                        <div class="other-act-content col-md-3 col-12">
                            <img src="{{ asset('css/images/other-act-8.png') }}" alt="Các hoạt động khác của các bé">
                            <!-- <p></p> -->
                        </div>
                        <div class="others col-12 col-md-6 d-flex flex-column">
                            <p class="col-12 col-md-6">Bé tập làm nội trợ</p>
                            <img src="{{ asset('css/images/housework.png') }}" alt="Bé tập làm nội trợ">
                        </div>
                        <div class="others col-12 col-md-6 d-flex flex-column">
                            <p class="col-12 col-md-6">Sinh nhật của các bé</p>
                            <img src="{{ asset('css/images/birthday.png') }}" alt="Sinh nhật của các bé">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop