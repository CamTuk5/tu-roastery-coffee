<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Tú Roastery Coffee - {{ config("app.name") }}')</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { 
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; 
            line-height: 1.6; 
            color: #333; 
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%); 
            min-height: 100vh;
        }
        
        /* HEADER */
        .header { 
            background: linear-gradient(135deg, #6B4E31 0%, #8B4513 100%); 
            color: white; 
            padding: 1rem 0; 
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            position: sticky; 
            top: 0; 
            z-index: 100;
        }
        .nav { 
            max-width: 1200px; 
            margin: 0 auto; 
            display: flex; 
            justify-content: space-between; 
            align-items: center; 
            padding: 0 2rem; 
        }
        .logo { 
            font-size: 1.8rem; 
            font-weight: bold; 
            text-decoration: none; 
            color: white;
        }
        .nav-links { 
            display: flex; 
            list-style: none; 
            gap: 2rem; 
        }
        .nav-links a { 
            color: white; 
            text-decoration: none; 
            padding: 0.5rem 1rem; 
            border-radius: 5px; 
            transition: all 0.3s; 
            font-weight: 500;
        }
        .nav-links a:hover, .nav-links a.active { 
            background: rgba(255,255,255,0.2); 
            transform: translateY(-2px);
        }
        
        /* CONTAINER */
        .container { 
            max-width: 1200px; 
            margin: 0 auto; 
            padding: 2rem; 
        }
        
        /* BANNER */
        .banner { 
            background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), 
                        url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 500"><rect fill="%236b4e31" width="1200" height="500"/><circle fill="%23d4af37" cx="200" cy="150" r="100"/><circle fill="%23d4af37" cx="800" cy="300" r="80"/><circle fill="%238b4513" cx="1000" cy="200" r="60"/></svg>'); 
            background-size: cover; 
            color: white; 
            text-align: center; 
            padding: 5rem 2rem; 
            border-radius: 0 0 20px 20px;
        }
        .banner h1 { 
            font-size: 3.5rem; 
            margin-bottom: 1rem; 
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }
        
        /* GRID & CARDS */
        .grid { 
            display: grid; 
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); 
            gap: 2rem; 
            margin: 2rem 0;
        }
        .card { 
            background: white; 
            border-radius: 15px; 
            padding: 1.5rem; 
            box-shadow: 0 8px 25px rgba(0,0,0,0.1); 
            transition: all 0.3s ease; 
            overflow: hidden;
        }
        .card:hover { 
            transform: translateY(-10px); 
            box-shadow: 0 15px 35px rgba(0,0,0,0.15);
        }
        .card img { 
            width: 100%; 
            height: 200px; 
            object-fit: cover; 
            border-radius: 10px; 
            margin-bottom: 1rem;
        }
        
        /* PRICE */
        .price { 
            font-weight: bold; 
            color: #6B4E31; 
            font-size: 1.3rem; 
            margin: 0.5rem 0; 
        }
        
        /* BUTTON */
        .btn { 
            display: inline-block; 
            background: linear-gradient(135deg, #6B4E31, #8B4513); 
            color: white; 
            padding: 0.8rem 1.5rem; 
            text-decoration: none; 
            border-radius: 25px; 
            transition: all 0.3s; 
            font-weight: 500;
            border: none;
            cursor: pointer;
        }
        .btn:hover { 
            background: linear-gradient(135deg, #8B4513, #A0522D); 
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(107,78,49,0.4);
        }
        
        /* TWO COLUMN LAYOUT */
        .two-column { 
            display: grid; 
            grid-template-columns: 1fr 2fr; 
            gap: 2rem; 
            align-items: start; 
        }
        
        /* FORM */
        .form-group { 
            margin-bottom: 1.5rem; 
        }
        .form-group label { 
            display: block; 
            margin-bottom: 0.5rem; 
            font-weight: bold; 
            color: #6B4E31;
        }
        .form-group input, 
        .form-group textarea { 
            width: 100%; 
            padding: 0.8rem; 
            border: 2px solid #e0e0e0; 
            border-radius: 8px; 
            font-size: 1rem; 
            transition: border-color 0.3s;
        }
        .form-group input:focus, 
        .form-group textarea:focus { 
            outline: none; 
            border-color: #6B4E31;
        }
        .form-group textarea { 
            height: 120px; 
            resize: vertical;
        }
        
        /* CATEGORY */
        h2.category { 
            color: #6B4E31; 
            margin: 2rem 0 1rem; 
            border-bottom: 3px solid #8B4513; 
            padding-bottom: 0.5rem; 
            font-size: 1.8rem;
        }
        
        /* DETAIL PAGE */
        .detail-img { 
            max-width: 70%; 
            margin: 2rem auto; 
            display: block; 
            border-radius: 15px; 
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }
        
        /* FOOTER */
        .footer { 
            background: #2C1810; 
            color: white; 
            text-align: center; 
            padding: 2rem; 
            margin-top: 4rem;
        }
        
        /* RESPONSIVE */
        @media (max-width: 768px) {
            .nav { flex-direction: column; gap: 1rem; }
            .banner h1 { font-size: 2.5rem; }
            .two-column { grid-template-columns: 1fr; }
            .detail-img { max-width: 100%; }
        }
    </style>
</head>
<body>
    <!-- HEADER -->
    <header class="header">
        <nav class="nav">
            <a href="{{ route('home') }}" class="logo">☕ {{ config('app.name') }}</a>
            <ul class="nav-links">
                <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Trang chủ</a></li>
                <li><a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">Giới thiệu</a></li>
                <li><a href="{{ route('menu') }}" class="{{ request()->routeIs(['menu', 'drink.show']) ? 'active' : '' }}">Thực đơn</a></li>
                <li><a href="{{ route('beans-story') }}" class="{{ request()->routeIs('beans-story') ? 'active' : '' }}">Hạt cà phê</a></li>
                <li><a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Liên hệ</a></li>
            </ul>
        </nav>
    </header>

    <!-- MAIN CONTENT -->
    <main class="container">
        @yield('content')
    </main>

    <!-- FOOTER -->
    <footer class="footer">
        <p>&copy; {{ date('Y') }} {{ config('app.name') }} - Made with ☕ & ❤️</p>
    </footer>
</body>
</html>