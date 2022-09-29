@extends('layout.master')

@section('style')
    {{ asset('css/user/schedule.css') }}
@stop

@section('body')
    <div class="body container-fluid d-flex flex-column justify-content-center">
        <div class="schedule-bg container-fluid d-flex justify-content-center align-items-center" style="background-image: url('{{ asset('css/images/timetable.jpg') }}')">
            <div class="fade-screen"></div>
            <span>Thời khóa biểu</span>
        </div>
        <div class="schedule-content container-fluid d-flex flex-column align-items-center">
            <span>Thời khóa biểu hằng ngày</span>
            <div class="schedule-table">
                <table class="table table-striped">
                    <tr>
                    <td>08:55 sáng - 09:25 sáng</td>
                    <td>Hoạt động buổi sáng</td>
                    </tr>
                    <tr>
                    <td>09:25 sáng - 10:55 sáng</td>
                    <td>Đọc</td>
                    </tr>
                    <tr>
                    <td>11:00 sáng - 11:35 sáng</td>
                    <td>Ăn trưa/Giải lao</td>
                    </tr>
                    <tr>
                    <td>11:45 sáng - 12:45 chiều</td>
                    <td>Toán</td>
                    </tr>
                    <tr>
                    <td>12:45 chiều - 01:30 chiều</td>
                    <td>Viết</td>
                    </tr>
                    <tr>
                    <td>01:30 chiều - 02:00 chiều</td>
                    <td>Ăn nhẹ/Giải lao</td>
                    </tr>
                    <tr>
                    <td>02:00 chiều - 02:35 chiều</td>
                    <td>Khoa học xã hội</td>
                    </tr>
                    <tr>
                    <td>02:40 chiều - 03:25 chiều</td>
                    <td>Khoa học</td>
                    </tr>
                    <tr>
                    <td>03:25 chiều - 03:35 chiều</td>
                    <td>Tan học</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@stop