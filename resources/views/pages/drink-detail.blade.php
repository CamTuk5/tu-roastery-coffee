@extends('layouts.app')
@section('title', $drink['name'])
@section('content')
    <div class="card" style="max-width: 900px; margin: 0 auto;">
        <h1 style="color: #6B4E31; text-align: center;">{{ $drink['name'] }}</h1>
        
        <img class="detail-img" 
             src="{{ asset($drink['image']) }}" 
             alt="{{ $drink['name'] }}"
             onerror="this.src='data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 400 300%22><rect fill=%22%23f0f0f0%22 width=%22400%22 height=%22300%22/><text x=%22200%22 y=%22150%22 font-family=%22Arial%22 font-size=%2216%22 text-anchor=%22middle%22 fill=%22%23666%22>{{ $drink['name'] }}</text></svg>'">
        
        <div style="text-align: center; margin: 2rem 0;">
            <p class="price" style="font-size: 2.5rem; color: #8B4513;">
                {{ number_format($drink['price'], 0, ',', '.') }} VNĐ
            </p>
        </div>
        
        <div style="background: #f8f9fa; padding: 2rem; border-radius: 10px; border-left: 5px solid #6B4E31;">
            <h3 style="color: #6B4E31;">📝 Mô tả</h3>
            <p style="font-size: 1.1rem; line-height: 1.8;">{{ $drink['description'] }}</p>
        </div>
        
        <div style="text-align: center; margin-top: 2rem;">
            <a href="{{ route('menu') }}" class="btn">← Quay về thực đơn</a>
        </div>
    </div>
@endsection