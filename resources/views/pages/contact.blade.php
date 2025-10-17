@extends('layouts.app')
@section('title', 'Liên hệ')
@section('content')
    <div class="grid">
        <!-- INFO -->
        <div class="card">
            <h2 style="color: #6B4E31;">📍 Thông tin liên hệ</h2>
            <div style="line-height: 2;">
                <p><strong>🌟 Tú Roastery Coffee</strong></p>
                <p><strong>📍 Địa chỉ:</strong> 459, Tôn Đức Thắng, Liên Chiểu, Đà Nẵng</p>
                <p><strong>📞 Hotline:</strong> 0905899254</p>
                <p><strong>✉️ Email:</strong> tun932315@gmail.com</p>
                <p><strong>🕒 Giờ mở cửa:</strong> 7:00 - 22:00 (hàng ngày)</p>
            </div>
        </div>
        
        <!-- FORM -->
        <div class="card">
            <h2 style="color: #6B4E31;">✉️ Gửi tin nhắn</h2>
            <form action="#" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Họ và tên *</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email *</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="message">Tin nhắn *</label>
                    <textarea id="message" name="message" required placeholder="Bạn muốn chia sẻ điều gì với chúng tôi?"></textarea>
                </div>
                <button type="submit" class="btn" style="width: 100%;">Gửi tin nhắn ☕</button>
            </form>
        </div>
    </div>
@endsection