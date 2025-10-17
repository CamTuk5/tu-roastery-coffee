@extends('layouts.app')
@section('title', 'Thực đơn')
@section('content')
    <h1 style="text-align: center; margin-bottom: 2rem; color: #6B4E31;">☕ Thực đơn đặc biệt</h1>
    
    @foreach($drinks as $category => $items)
        <h2 class="category">{{ $category }}</h2>
        <div class="grid">
            @foreach($items as $drink)
                <div class="card">
                    <img src="{{ asset($drink['image']) }}" 
                         alt="{{ $drink['name'] }}"
                         onerror="this.src='data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 300 200%22><rect fill=%22%23f0f0f0%22 width=%22300%22 height=%22200%22/><text x=%22150%22 y=%22100%22 font-family=%22Arial%22 font-size=%2212%22 text-anchor=%22middle%22 fill=%22%23666%22>{{ $drink['name'] }}</text></svg>'">
                    <h3>{{ $drink['name'] }}</h3>
                    <p class="price">{{ number_format($drink['price'], 0, ',', '.') }} VNĐ</p>
                    <p>{{ $drink['description'] }}</p>
                    <a href="{{ route('drink.show', $drink['id']) }}" class="btn">Xem chi tiết</a>
                </div>
            @endforeach
        </div>
    @endforeach
@endsection