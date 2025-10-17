@extends('layouts.app')
@section('title', 'Giới thiệu')
@section('content')
    <div class="card" style="max-width: 800px; margin: 0 auto;">
        <h1>🌟 Về Tú Roastery Coffee</h1>
        <p><strong>Tú Roastery Coffee</strong> - Nơi khởi nguồn đam mê cà phê thượng hạng.</p>
        
        <h3>✨ Hành trình của chúng tôi</h3>
        <p>Với tình yêu dành cho cà phê specialty, chúng tôi bắt đầu từ những ngày học về nghệ thuật rang xay, quyết tâm mang đến những tách cà phê chất lượng cao nhất cho cộng đồng yêu cà phê Việt Nam.</p>
        
        <h3>☕ Cam kết chất lượng</h3>
        <p>Chọn lọc hạt cà phê từ những vùng trồng nổi tiếng thế giới, rang xay thủ công theo phương pháp truyền thống, và pha chế với tất cả tâm huyết. Mỗi tách cà phê là một tác phẩm nghệ thuật.</p>
        
        <div style="text-align: center; margin-top: 2rem;">
            <a href="{{ route('menu') }}" class="btn">Khám phá thực đơn ngay</a>
        </div>
    </div>
@endsection