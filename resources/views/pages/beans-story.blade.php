@extends('layouts.app')
@section('title', 'Câu chuyện hạt cà phê')
@section('content')
    <h1 style="text-align: center; margin-bottom: 2rem; color: #6B4E31;">🌱 Câu chuyện hạt cà phê</h1>
    
    @foreach($beans as $bean)
        <div class="card" style="margin-bottom: 3rem;">
            <div class="two-column">
                <div>
                    <img src="{{ asset($bean['image']) }}" 
                         alt="{{ $bean['name'] }}"
                         style="width: 100%; border-radius: 10px;"
                         onerror="this.src='data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 300 200%22><rect fill=%22%23f0f0f0%22 width=%22300%22 height=%22200%22/><text x=%22150%22 y=%22100%22 font-family=%22Arial%22 font-size=%2212%22 text-anchor=%22middle%22 fill=%22%23666%22>{{ $bean['name'] }}</text></svg>'">
                </div>
                <div>
                    <h3 style="color: #6B4E31;">{{ $bean['name'] }}</h3>
                    <p><strong>🌍 Nguồn gốc:</strong> {{ $bean['origin'] }}</p>
                    <p><strong>☕ Hương vị:</strong> {{ $bean['notes'] }}</p>
                    <a href="#" class="btn" style="margin-top: 1rem;">Tìm hiểu thêm</a>
                </div>
            </div>
        </div>
    @endforeach
@endsection