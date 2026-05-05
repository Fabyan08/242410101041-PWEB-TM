<!doctype html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', 'LibMate | Pemesanan Ruang Perpus AI')</title>

    <!-- Scripts & Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet" />
    <link rel="shortcut icon" href="{{ asset('Libmate.png') }}" type="image/x-icon" />

    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>

    <!-- Tailwind Configuration (Jika tidak menggunakan build tool penuh) -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['"Plus Jakarta Sans"', "sans-serif"],
                    },
                    colors: {
                        brand: {
                            50: "#eff6ff",
                            100: "#dbeafe",
                            500: "#3b82f6",
                            600: "#2563eb",
                            700: "#1d4ed8",
                            900: "#1e3a8a"
                        },
                    },
                    animation: {
                        float: "float 6s ease-in-out infinite",
                        "float-delayed": "float 6s ease-in-out 3s infinite",
                        blob: "blob 7s infinite",
                    },
                    keyframes: {
                        float: {
                            "0%, 100%": {
                                transform: "translateY(0)"
                            },
                            "50%": {
                                transform: "translateY(-20px)"
                            }
                        },
                        blob: {
                            "0%": {
                                transform: "translate(0px, 0px) scale(1)"
                            },
                            "33%": {
                                transform: "translate(30px, -50px) scale(1.1)"
                            },
                            "66%": {
                                transform: "translate(-20px, 20px) scale(0.9)"
                            },
                            "100%": {
                                transform: "translate(0px, 0px) scale(1)"
                            },
                        },
                    },
                },
            },
        };
    </script>
    @stack('styles')
</head>

<body class="bg-slate-50 text-slate-800 antialiased overflow-x-hidden">
    <!-- Navbar Component -->
    @include('partials.navbar')

    <!-- Main Content Area -->
    <main>
        @yield('content')
    </main>

    <!-- Footer Component -->
    @include('partials.footer')

    <!-- Scripts stack for page-specific JS -->
    @stack('scripts')
    <script>
        lucide.createIcons();
    </script>
</body>

</html>
