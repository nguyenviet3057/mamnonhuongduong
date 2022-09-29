@extends('layout.master')

@section('style')
    {{ asset('css/user/news.css') }}
@stop

@section('body')
    <div class="body container-fluid">
        <div class="news-bg container-fluid d-flex justify-content-center align-items-center" style="background-image: url('{{ asset('css/images/notification.jpg') }}')">
            <div class="fade-screen"></div>
            <span>Thông báo</span>
        </div>
        <div class="news-title container-fluid d-flex flex-column align-items-center">
            <span>Thông báo hằng tháng</span>
            <p>Giáo viên, phụ huynh và học viên có thể cập nhật về các hoạt động mới nhất diễn ra trong lớp học.</p>
        </div>
        <div class="news-content container d-flex justify-content-center align-items-center">
            <p>
                Hiện chưa có thông báo!
            </p>
        </div>
    </div>
@stop