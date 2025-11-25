<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simael</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Stack+Sans+Headline:wght@200..700&display=swap" rel="stylesheet">
    
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        html {
            scroll-behavior: smooth;
        }
        nav {
            font-family: 'Stack Sans Headline', sans-serif;
        }
    </style>
    
</head>
<body class="bg-gradient-to-br from-blue-800 to-cyan-700 text-white font-sans relative">
    
    <!-- Navbar -->
    <nav id="" class="fixed w-full bg-white border-b border-gray-200 z-50 shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">

                {{-- 1. LEFT: LOGO & BRAND --}}
                <div class="flex items-center space-x-2">
                    <div> 
                        <h1 class="text-2xl font-bold text-gray-900">SIMAEL</h1>
                        <p class="text-xs text-gray-500">
                            @student
                                Student Dashboard
                            @else
                                @teacher
                                    Teacher Dashboard
                                @else
                                    Sistem Manajemen PKL
                                @endteacher
                            @endstudent
                        </p>
                    </div>
                </div>

               {{-- 2. MIDDLE: MAIN NAVIGATION --}}
                <div class="hidden sm:flex sm:items-center sm:space-x-10">
                    <a href="#home" class="group relative inline-block text-gray-700 font-medium text-sm transition duration-200 ease-in-out">
                        Home
                        <span class="absolute left-0 -bottom-1 h-0.5 w-0 bg-black transition-all duration-300 ease-in-out group-hover:w-full"></span>
                    </a>
                    <a href="#feature" class="group relative inline-block text-gray-700 font-medium text-sm transition duration-200 ease-in-out">
                        Feature
                        <span class="absolute left-0 -bottom-1 h-0.5 w-0 bg-black transition-all duration-300 ease-in-out group-hover:w-full"></span>
                    </a>
                    <a href="#about" class="group relative inline-block text-gray-700 font-medium text-sm transition duration-200 ease-in-out">
                        About
                        <span class="absolute left-0 -bottom-1 h-0.5 w-0 bg-black transition-all duration-300 ease-in-out group-hover:w-full"></span>
                    </a>
                    <a href="#team-developer" class="group relative inline-block text-gray-700 font-medium text-sm transition duration-200 ease-in-out">
                        Developer
                        <span class="absolute left-0 -bottom-1 h-0.5 w-0 bg-black transition-all duration-300 ease-in-out group-hover:w-full"></span>
                    </a>
                </div>

                {{-- Login --}}
                <div class="flex items-center space-x-4">
                    @student
                        {{-- Logout --}}
                    @else
                        <a href="{{ route('login') }}" class="group relative inline-block text-gray-700 font-medium text-sm transition duration-200 ease-in-out">
                            Login
                            <span class="absolute left-0 -bottom-1 h-0.5 w-0 bg-black transition-all duration-300 ease-in-out group-hover:w-full"></span>
                        </a>
                    @endstudent
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="pt-32 pb-20 text-white">
        <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-10 items-center">
            <div data-aos="fade-right">
                <h2 class="text-5xl font-extrabold leading-tight">
                    Platform Manajemen PKL yang <span class="text-yellow-300">Modern</span> & Efisien
                </h2>
                <p class="mt-4 text-lg opacity-90">
                    Simael membantu sekolah dalam mengelola data pkl, kelompok, dan kerja kelompok dengan cepat dan terintegrasi.
                </p>
                <div class="marquee-container">
                    <p class="marquee-text">
                        Ini adalah teks yang akan bergerak ke samping secara terus-menerus!
                    </p>
                </div>
                <div class="mt-6">
                    <a href="/register" class="px-6 py-3 bg-yellow-300 text-gray-900 font-semibold rounded-lg shadow hover:bg-gray-200 transition">Mulai Sekarang</a>
                </div>
            </div>
            <div data-aos="fade-left" class="flex justify-center">
                <img src="{{ Vite::asset('resources/assets/img/simael-logo.png') }}" 
                    alt="SIMAEL Logo" 
                    class="w-96 md:w-auto max-w-sm drop-shadow-2xl rounded-xl 
                    **transform rotate-3 hover:rotate-0 hover:scale-105** transition-all duration-500 ease-in-out" />
            </div>
        </div>
    </section>

    <!-- Feature Section -->
    <section id="feature" class="py-20 bg-white text-gray-800">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-4xl text-center font-bold mb-12">Fitur</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div data-aos="zoom-in" class="bg-gray-50 p-6 rounded-xl shadow hover:shadow-lg transition">
                    <h3 class="text-xl font-semibold mb-3 text-blue-600">Dashboard Real-Time</h3>
                    <p>Pantau aktivitas siswa dan data penting secara langsung.</p>
                </div>
                <div data-aos="zoom-in" class="bg-gray-50 p-6 rounded-xl shadow hover:shadow-lg transition">
                    <h3 class="text-xl font-semibold mb-3 text-blue-600">Manajemen Data Siswa</h3>
                    <p>Kelola data siswa dengan sistem yang rapi dan terstruktur.</p>
                </div>
                <div data-aos="zoom-in" class="bg-gray-50 p-6 rounded-xl shadow hover:shadow-lg transition">
                    <h3 class="text-xl font-semibold mb-3 text-blue-600">Sistem Squad & Undangan</h3>
                    <p>Buat kelompok Pkl dan koordinasi kelompok secara mudah.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-30 bg-gray-200 text-gray-800">
        <div class="max-w-5xl mx-auto px-6 text-center" data-aos="fade-up">
            <h2 class="text-4xl font-bold mb-6">Tentang Simael</h2>
            <p class="text-lg leading-relaxed max-w-3xl mx-auto ">
                SIMAEL adalah platform manajemen digital terpadu yang dirancang khusus untuk mengoptimalkan proses Praktek Kerja Lapangan (PKL) di lingkungan sekolah. Mulai dari pendaftaran, penugasan lokasi, pencatatan jurnal harian, hingga penilaian akhir, SIMAEL memastikan seluruh alur PKL berjalan efisien, transparan, dan terintegrasi bagi siswa, guru pembimbing, dan pihak industri.
            </p>
        </div>
    </section>

    <!-- Developer Section -->
    <section id="team-developer" class="py-20 bg-white text-gray-800">
        <div class="max-w-4xl mx-auto px-6">
            <h2 class="text-5xl font-bold text-center mb-12">Tim Developer</h2>
            <div class="grid md:grid-cols-3 gap-20 justify-items-center">

                <!-- Card 1 -->
                <div data-aos="fade-up" class="relative bg-gray-200 p-6 pt-36 rounded-xl shadow-lg hover:shadow-2xl hover:scale-105 transition-all duration-500 ease-in-out text-center w-64 overflow-hidden">
                    <div class="absolute top-0 left-0 w-full h-35 -z-10 rounded-t-xl overflow-hidden">
                        <img src="{{ Vite::asset('resources/assets/gif/luffy.gif') }}" class="w-full h-full object-cover" />
                    </div>
                    <div class="relative -mt-20">
                        <img src="{{ Vite::asset('resources/assets/img/lutfi-profile.png') }}" class="w-36 h-36 rounded-full mx-auto mb-4 object-cover border-4 border-white shadow-lg" />
                    </div>
                    <h3 class="text-xl font-semibold mt-2">Lutfi</h3>
                    <p class="text-gray-600">Frontend Developer</p>
                    <a href="https://github.com/ReizeJS" target="_blank" class="mt-2 inline-flex items-center text-black-600 hover:underline">
                        <!-- Logo GitHub -->
                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M12 0C5.37 0 0 5.37 0 12c0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577
                                0-.285-.01-1.04-.015-2.04-3.338.726-4.042-1.61-4.042-1.61-.546-1.387-1.333-1.756-1.333-1.756-1.09-.744.083-.729.083-.729
                                1.205.084 1.84 1.237 1.84 1.237 1.07 1.835 2.807 1.305 3.492.997.108-.775.418-1.305.762-1.605-2.665-.303-5.467-1.333-5.467-5.933
                                0-1.31.468-2.38 1.235-3.22-.124-.303-.535-1.523.117-3.176 0 0 1.008-.322 3.3 1.23.957-.266 1.983-.399 3.003-.404
                                1.02.005 2.047.138 3.006.404 2.29-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.873.118 3.176.77.84 1.232 1.91
                                1.232 3.22 0 4.61-2.807 5.625-5.48 5.922.43.37.823 1.102.823 2.222 0 1.606-.015 2.898-.015 3.293 0 .321.218.694.825.576C20.565
                                21.796 24 17.303 24 12c0-6.63-5.373-12-12-12z"/>
                        </svg>
                        GitHub
                    </a>
                </div>

                <!-- Card 2 -->
                <div data-aos="fade-up" class="relative bg-gray-200 p-6 pt-36 rounded-xl shadow-lg hover:shadow-2xl hover:scale-105 transition-all duration-500 ease-in-out text-center w-64 overflow-hidden">
                    <div class="absolute top-0 left-0 w-full h-35 -z-10 rounded-t-xl overflow-hidden">
                        <img src="{{ Vite::asset('resources/assets/gif/maomao.gif') }}" class="w-full h-full object-cover" />
                    </div>
                    <div class="relative -mt-20">
                        <img src="{{ Vite::asset('resources/assets/img/riyandra-profile.jpeg') }}" class="w-36 h-36 rounded-full mx-auto mb-4 object-cover border-4 border-white shadow-lg" />
                    </div>
                    <h3 class="text-xl font-semibold mt-2">Riyandra</h3>
                    <p class="text-gray-600">Backend Developer</p>
                    <a href="https://github.com/ry726" target="_blank" class="mt-2 inline-flex items-center text-black-600 hover:underline">
                        <!-- Logo GitHub -->
                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M12 0C5.37 0 0 5.37 0 12c0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577
                                0-.285-.01-1.04-.015-2.04-3.338.726-4.042-1.61-4.042-1.61-.546-1.387-1.333-1.756-1.333-1.756-1.09-.744.083-.729.083-.729
                                1.205.084 1.84 1.237 1.84 1.237 1.07 1.835 2.807 1.305 3.492.997.108-.775.418-1.305.762-1.605-2.665-.303-5.467-1.333-5.467-5.933
                                0-1.31.468-2.38 1.235-3.22-.124-.303-.535-1.523.117-3.176 0 0 1.008-.322 3.3 1.23.957-.266 1.983-.399 3.003-.404
                                1.02.005 2.047.138 3.006.404 2.29-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.873.118 3.176.77.84 1.232 1.91
                                1.232 3.22 0 4.61-2.807 5.625-5.48 5.922.43.37.823 1.102.823 2.222 0 1.606-.015 2.898-.015 3.293 0 .321.218.694.825.576C20.565
                                21.796 24 17.303 24 12c0-6.63-5.373-12-12-12z"/>
                        </svg>
                        GitHub
                    </a>
                </div>

                <!-- Card 3 -->
                <div data-aos="fade-up" class="relative bg-gray-200 p-6 pt-36 rounded-xl shadow-lg hover:shadow-2xl hover:scale-105 transition-all duration-500 ease-in-out text-center w-64 overflow-hidden">
                    <div class="absolute top-0 left-0 w-full h-35 -z-10 rounded-t-xl overflow-hidden">
                        <img src="{{ Vite::asset('resources/assets/gif/furina.gif') }}" class="w-full h-full object-cover" />
                    </div>
                    <div class="relative -mt-20">
                        <img src="{{ Vite::asset('resources/assets/img/habiburohman-profile.jpg') }}" class="w-36 h-36 rounded-full mx-auto mb-4 object-cover border-4 border-white shadow-lg" />
                    </div>
                    <h3 class="text-xl font-semibold mt-2">Habiburohman</h3>
                    <p class="text-gray-600">Backend Developer</p>
                    <a href="https://github.com/Kuredew" target="_blank" class="mt-2 inline-flex items-center text-black-600 hover:underline">
                        <!-- Logo GitHub -->
                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M12 0C5.37 0 0 5.37 0 12c0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577
                                0-.285-.01-1.04-.015-2.04-3.338.726-4.042-1.61-4.042-1.61-.546-1.387-1.333-1.756-1.333-1.756-1.09-.744.083-.729.083-.729
                                1.205.084 1.84 1.237 1.84 1.237 1.07 1.835 2.807 1.305 3.492.997.108-.775.418-1.305.762-1.605-2.665-.303-5.467-1.333-5.467-5.933
                                0-1.31.468-2.38 1.235-3.22-.124-.303-.535-1.523.117-3.176 0 0 1.008-.322 3.3 1.23.957-.266 1.983-.399 3.003-.404
                                1.02.005 2.047.138 3.006.404 2.29-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.873.118 3.176.77.84 1.232 1.91
                                1.232 3.22 0 4.61-2.807 5.625-5.48 5.922.43.37.823 1.102.823 2.222 0 1.606-.015 2.898-.015 3.293 0 .321.218.694.825.576C20.565
                                21.796 24 17.303 24 12c0-6.63-5.373-12-12-12z"/>
                        </svg>
                        GitHub
                    </a>
                </div>

                <!-- Card 4 -->
                <div data-aos="fade-up" class="relative bg-gray-200 p-6 pt-36 rounded-xl shadow-lg hover:shadow-2xl hover:scale-105 transition-all duration-500 ease-in-out text-center w-64 overflow-hidden">
                    <div class="absolute top-0 left-0 w-full h-35 -z-10 rounded-t-xl overflow-hidden">
                        <img src="{{ Vite::asset('resources/assets/gif/wangja.gif') }}" class="w-full h-full object-cover" />
                    </div>
                    <div class="relative -mt-20">
                        <img src="{{ Vite::asset('resources/assets/img/aufa-profile.jpeg') }}" class="w-36 h-36 rounded-full mx-auto mb-4 object-cover border-4 border-white shadow-lg" />
                    </div>
                    <h3 class="text-xl font-semibold mt-2">Aufa</h3>
                    <p class="text-gray-600">Frontend Developer</p>
                    <a href="https://github.com/hehehdev" target="_blank" class="mt-2 inline-flex items-center text-black-600 hover:underline">
                        <!-- Logo GitHub -->
                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M12 0C5.37 0 0 5.37 0 12c0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577
                                0-.285-.01-1.04-.015-2.04-3.338.726-4.042-1.61-4.042-1.61-.546-1.387-1.333-1.756-1.333-1.756-1.09-.744.083-.729.083-.729
                                1.205.084 1.84 1.237 1.84 1.237 1.07 1.835 2.807 1.305 3.492.997.108-.775.418-1.305.762-1.605-2.665-.303-5.467-1.333-5.467-5.933
                                0-1.31.468-2.38 1.235-3.22-.124-.303-.535-1.523.117-3.176 0 0 1.008-.322 3.3 1.23.957-.266 1.983-.399 3.003-.404
                                1.02.005 2.047.138 3.006.404 2.29-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.873.118 3.176.77.84 1.232 1.91
                                1.232 3.22 0 4.61-2.807 5.625-5.48 5.922.43.37.823 1.102.823 2.222 0 1.606-.015 2.898-.015 3.293 0 .321.218.694.825.576C20.565
                                21.796 24 17.303 24 12c0-6.63-5.373-12-12-12z"/>
                        </svg>
                        GitHub
                    </a>
                </div>

                <!-- Card 5 -->
                <div data-aos="fade-up" class="relative bg-gray-200 p-6 pt-36 rounded-xl shadow-lg hover:shadow-2xl hover:scale-105 transition-all duration-500 ease-in-out text-center w-64 overflow-hidden">
                    <div class="absolute top-0 left-0 w-full h-35 -z-10 rounded-t-xl overflow-hidden">
                        <img src="{{ Vite::asset('resources/assets/gif/waguri.gif') }}" class="w-full h-full object-cover" />
                    </div>
                    <div class="relative -mt-20">
                        <img src="{{ Vite::asset('resources/assets/img/kenneth-profile.png') }}" class="w-36 h-36 rounded-full mx-auto mb-4 object-cover border-4 border-white shadow-lg" />
                    </div>
                    <h3 class="text-xl font-semibold mt-2">Kenneth</h3>
                    <p class="text-gray-600">UI/UX Designer</p>
                    <a href="https://github.com/Caxerion" target="_blank" class="mt-2 inline-block text-blue-600 hover:underline">GitHub</a>
                </div>

                <!-- Card 6 -->
                <div data-aos="fade-up" class="relative bg-gray-200 p-6 pt-36 rounded-xl shadow-lg hover:shadow-2xl hover:scale-105 transition-all duration-500 ease-in-out text-center w-64 overflow-hidden">
                    <div class="absolute top-0 left-0 w-full h-35 -z-10 rounded-t-xl overflow-hidden">
                        <img src="{{ Vite::asset('resources/assets/gif/') }}" class="w-full h-full object-cover" />
                    </div>
                    <div class="relative -mt-20">
                        <img src="{{ Vite::asset('resources/assets/img/') }}" class="w-36 h-36 rounded-full mx-auto mb-4 object-cover border-4 border-white shadow-lg" />
                    </div>
                    <h3 class="text-xl font-semibold mt-2">Aziz</h3>
                    <p class="text-gray-600">UI/UX Designer</p>
                    <a href="https://github.com/aufa" target="_blank" class="mt-2 inline-flex items-center text-black-600 hover:underline">

                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M12 0C5.37 0 0 5.37 0 12c0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577
                                0-.285-.01-1.04-.015-2.04-3.338.726-4.042-1.61-4.042-1.61-.546-1.387-1.333-1.756-1.333-1.756-1.09-.744.083-.729.083-.729
                                1.205.084 1.84 1.237 1.84 1.237 1.07 1.835 2.807 1.305 3.492.997.108-.775.418-1.305.762-1.605-2.665-.303-5.467-1.333-5.467-5.933
                                0-1.31.468-2.38 1.235-3.22-.124-.303-.535-1.523.117-3.176 0 0 1.008-.322 3.3 1.23.957-.266 1.983-.399 3.003-.404
                                1.02.005 2.047.138 3.006.404 2.29-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.873.118 3.176.77.84 1.232 1.91
                                1.232 3.22 0 4.61-2.807 5.625-5.48 5.922.43.37.823 1.102.823 2.222 0 1.606-.015 2.898-.015 3.293 0 .321.218.694.825.576C20.565
                                21.796 24 17.303 24 12c0-6.63-5.373-12-12-12z"/>
                        </svg>
                        GitHub
                    </a>
                </div>

            </div>
        </div>
    </section>


    <!-- Footer -->
    <footer class="bg-blue-800 text-white py-6 text-center">
        © 2025 Simael - Sistem Manajemen PKL
    </footer>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();

        // Mobile menu toggle
        const mobileBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        mobileBtn.addEventListener('click', () => mobileMenu.classList.toggle('hidden'));
    </script>

</body>
</html>
