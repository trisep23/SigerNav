@extends('layouts.app')

@push('head')
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
@endpush

@section('content')

{{-- ============================================================
     HERO SECTION
============================================================ --}}
<section class="relative min-h-screen bg-[#fffcf9] overflow-hidden">

    {{-- Background decorative blobs --}}
    <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-orange-100 rounded-full opacity-50 blur-3xl -translate-y-1/2 translate-x-1/3 pointer-events-none"></div>
    <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-red-50 rounded-full opacity-60 blur-3xl translate-y-1/2 -translate-x-1/3 pointer-events-none"></div>
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] bg-orange-50 rounded-full opacity-40 blur-3xl pointer-events-none"></div>

    <div class="relative z-10 container mx-auto max-w-7xl px-6 py-16 lg:py-24">

        {{-- Main hero grid --}}
        <div class="grid lg:grid-cols-2 gap-12 xl:gap-16 items-center">

            {{-- Left: Text content --}}
            <div>
                <h1 class="text-5xl sm:text-6xl lg:text-7xl xl:text-8xl font-black text-gray-900 leading-[0.95] tracking-tight">
                    Jelajahi
                    <span class="block text-red-900">Lampung</span>
                    <span class="block text-orange-500">Bersama</span>
                    <span class="block text-gray-900">SigerNav</span>
                </h1>

                <p class="mt-8 text-base sm:text-lg text-gray-500 max-w-sm leading-relaxed">
                    Temukan destinasi wisata terbaik di seluruh Provinsi Lampung dengan navigasi interaktif dan rekomendasi tempat menarik.
                </p>

                <div class="mt-10 flex flex-wrap gap-4">
                    <a href="/map"
                       class="group inline-flex items-center gap-3 px-8 py-4 bg-red-900 text-white rounded-2xl font-semibold hover:bg-red-800 transition-all duration-200 shadow-lg shadow-red-900/20 hover:shadow-xl hover:shadow-red-900/30 hover:-translate-y-0.5">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 group-hover:scale-110 transition-transform" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5A2.5 2.5 0 1112 6a2.5 2.5 0 010 5.5z"/>
                        </svg>
                        Buka Peta Wisata
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 group-hover:translate-x-1 transition-transform" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"/>
                        </svg>
                    </a>
                    <a href="#features"
                       class="inline-flex items-center gap-2 px-8 py-4 border border-gray-200 text-gray-700 rounded-2xl font-semibold hover:bg-white hover:shadow-lg hover:-translate-y-0.5 transition-all duration-200">
                        Lihat Fitur
                    </a>
                </div>

                {{-- Mini stats --}}
                <div class="mt-14 flex items-center gap-8">
                    <div>
                        <div class="text-3xl font-black text-gray-900">200+</div>
                        <div class="text-sm text-gray-400 mt-0.5">Destinasi</div>
                    </div>
                    <div class="w-px h-12 bg-gray-200"></div>
                    <div>
                        <div class="text-3xl font-black text-gray-900">7</div>
                        <div class="text-sm text-gray-400 mt-0.5">Kategori</div>
                    </div>
                    <div class="w-px h-12 bg-gray-200"></div>
                    <div>
                        <div class="text-3xl font-black text-gray-900">100%</div>
                        <div class="text-sm text-gray-400 mt-0.5">Lampung</div>
                    </div>
                </div>
            </div>

            {{-- Right: Card gallery --}}
            <div class="hidden lg:block relative">

                {{-- Glow orb --}}
                <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-orange-200/40 rounded-full blur-3xl pointer-events-none"></div>

                {{-- Card images arranged as floating stack --}}
                <div class="relative w-full h-[520px]">

                    {{-- Card 1: gigihiu --}}
                    <div class="absolute left-0 top-1/2 -translate-y-1/2 -translate-x-2 rotate-[-20deg]
                                hover:scale-110 hover:-translate-y-[calc(50%-12px)] hover:z-50
                                transition-all duration-500 cursor-pointer z-10 group/image">
                        <div class="relative overflow-hidden rounded-3xl shadow-2xl border-4 border-white">
                            <img src="{{ asset('assets/images/gigihiu.jpg') }}"
                                 class="w-44 h-60 object-cover group-hover:scale-105 transition-transform duration-700"
                                 alt="Pantai Gigi Hiu">
                            <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/60 to-transparent p-4">
                                <p class="text-white text-sm font-semibold">Pantai Gigi Hiu</p>
                                <p class="text-white/70 text-xs">Tanggamus</p>
                            </div>
                        </div>
                    </div>

                    {{-- Card 2: kyokobeach --}}
                    <div class="absolute left-16 top-6 rotate-[-10deg]
                                hover:scale-110 hover:-translate-y-3 hover:z-50
                                transition-all duration-500 cursor-pointer z-20 group/image">
                        <div class="relative overflow-hidden rounded-3xl shadow-2xl border-4 border-white">
                            <img src="{{ asset('assets/images/kyokobeach.jpg') }}"
                                 class="w-44 h-60 object-cover group-hover:scale-105 transition-transform duration-700"
                                 alt="Kyoko Beach">
                            <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/60 to-transparent p-4">
                                <p class="text-white text-sm font-semibold">Kyoko Beach</p>
                                <p class="text-white/70 text-xs">Pesisir Barat</p>
                            </div>
                        </div>
                    </div>

                    {{-- Card 3: curup (center, main) --}}
                    <div class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 z-30
                                hover:scale-105 hover:-translate-x-1/2 hover:-translate-y-[calc(50%-8px)]
                                transition-all duration-500 cursor-pointer group/image">
                        <div class="relative overflow-hidden rounded-3xl shadow-2xl border-4 border-white ring-4 ring-orange-100">
                            <img src="{{ asset('assets/images/curup.jpg') }}"
                                 class="w-52 h-64 object-cover group-hover:scale-105 transition-transform duration-700"
                                 alt="Curup">
                            <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-5">
                                <p class="text-white text-sm font-bold">Curup</p>
                                <p class="text-white/70 text-xs">Lampung Tengah</p>
                            </div>
                        </div>
                    </div>

                    {{-- Card 4: navara --}}
                    <div class="absolute right-16 top-6 rotate-[10deg]
                                hover:scale-110 hover:-translate-y-3 hover:z-50
                                transition-all duration-500 cursor-pointer z-20 group/image">
                        <div class="relative overflow-hidden rounded-3xl shadow-2xl border-4 border-white">
                            <img src="{{ asset('assets/images/navara.jpg') }}"
                                 class="w-44 h-60 object-cover group-hover:scale-105 transition-transform duration-700"
                                 alt="Navara Beach">
                            <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/60 to-transparent p-4">
                                <p class="text-white text-sm font-semibold">Navara Beach</p>
                                <p class="text-white/70 text-xs">Pesawaran</p>
                            </div>
                        </div>
                    </div>

                    {{-- Card 5: sebuku --}}
                    <div class="absolute right-0 top-1/2 -translate-y-1/2 translate-x-2 rotate-[20deg]
                                hover:scale-110 hover:-translate-y-[calc(50%-12px)] hover:z-50
                                transition-all duration-500 cursor-pointer z-10 group/image">
                        <div class="relative overflow-hidden rounded-3xl shadow-2xl border-4 border-white">
                            <img src="{{ asset('assets/images/sebuku.jpg') }}"
                                 class="w-44 h-60 object-cover group-hover:scale-105 transition-transform duration-700"
                                 alt="Pulau Sebuku">
                            <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/60 to-transparent p-4">
                                <p class="text-white text-sm font-semibold">Pulau Sebuku</p>
                                <p class="text-white/70 text-xs">Lampung Selatan</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>


    </div>
</section>

{{-- ============================================================
     CATEGORIES SECTION
============================================================ --}}
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-6">

        <div class="text-center mb-12">
            <p class="text-orange-500 font-semibold text-sm tracking-widest uppercase mb-3">Kategori Wisata</p>
            <h2 class="text-3xl sm:text-4xl font-bold text-gray-900">
                Jelajahi Berdasarkan Kategori
            </h2>
        </div>

        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-4">

            @foreach ([
                ['icon' => 'beach_access', 'label' => 'Pantai', 'color' => 'bg-blue-50 text-blue-600 hover:bg-blue-100'],
                ['icon' => 'terrain', 'label' => 'Gunung', 'color' => 'bg-green-50 text-green-600 hover:bg-green-100'],
                ['icon' => 'water_drop', 'label' => 'Air Terjun', 'color' => 'bg-cyan-50 text-cyan-600 hover:bg-cyan-100'],
                ['icon' => 'anchor', 'label' => 'Pulau', 'color' => 'bg-indigo-50 text-indigo-600 hover:bg-indigo-100'],
                ['icon' => 'park', 'label' => 'Hutan', 'color' => 'bg-emerald-50 text-emerald-600 hover:bg-emerald-100'],
                ['icon' => 'account_balance', 'label' => 'Budaya', 'color' => 'bg-amber-50 text-amber-600 hover:bg-amber-100'],
            ] as $cat)
                <a href="/map?kategori={{ strtolower(str_replace(' ', '_', $cat['label'])) }}"
                   class="group flex flex-col items-center gap-3 p-5 rounded-2xl border border-gray-100 {{ $cat['color'] }} transition-all duration-200 hover:shadow-md hover:-translate-y-1">
                    <span class="material-icons text-4xl">{{ $cat['icon'] }}</span>
                    <span class="text-sm font-semibold text-gray-700 group-hover:text-gray-900">{{ $cat['label'] }}</span>
                </a>
            @endforeach

        </div>
    </div>
</section>

{{-- ============================================================
     FEATURES SECTION
============================================================ --}}
<section id="features" class="py-20 bg-[#fffcf9]">
    <div class="max-w-7xl mx-auto px-6">

        <div class="grid lg:grid-cols-2 gap-16 items-center">

            {{-- Left: Heading + text --}}
            <div>
                <p class="text-orange-500 font-semibold text-sm tracking-widest uppercase mb-4">Fitur Unggulan</p>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-gray-900 leading-tight">
                    Semua yang Anda butuhkan untuk menjelajahi Lampung
                </h2>
                <p class="mt-6 text-gray-500 leading-relaxed max-w-md">
                    SigerNav menyediakan berbagai fitur untuk membantu Anda menemukan dan menjangkau destinasi wisata terbaik di Lampung dengan mudah.
                </p>
                <a href="/map"
                   class="mt-8 inline-flex items-center gap-2 text-red-900 font-semibold hover:gap-3 transition-all">
                    Jelajahi sekarang
                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"/>
                    </svg>
                </a>
            </div>

            {{-- Right: Feature cards --}}
            <div class="grid sm:grid-cols-2 gap-5">

                <div class="group bg-white rounded-2xl p-6 border border-gray-100 hover:border-orange-200 hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                    <div class="w-12 h-12 rounded-2xl bg-red-100 flex items-center justify-center mb-5 group-hover:bg-red-900 transition-colors duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                             class="w-6 h-6 text-red-600 group-hover:text-white transition-colors duration-300">
                            <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5A2.5 2.5 0 1112 6a2.5 2.5 0 010 5.5z"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Peta Interaktif</h3>
                    <p class="text-sm text-gray-500 leading-relaxed">Eksplorasi seluruh destinasi wisata Lampung dalam satu peta digital.</p>
                </div>

                <div class="group bg-white rounded-2xl p-6 border border-gray-100 hover:border-orange-200 hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                    <div class="w-12 h-12 rounded-2xl bg-orange-100 flex items-center justify-center mb-5 group-hover:bg-orange-500 transition-colors duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                             stroke-width="1.8" stroke="currentColor"
                             class="w-6 h-6 text-orange-600 group-hover:text-white transition-colors duration-300">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Wisata Terdekat</h3>
                    <p class="text-sm text-gray-500 leading-relaxed">Temukan destinasi terdekat dari lokasi Anda secara real-time.</p>
                </div>

                <div class="group bg-white rounded-2xl p-6 border border-gray-100 hover:border-orange-200 hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                    <div class="w-12 h-12 rounded-2xl bg-blue-100 flex items-center justify-center mb-5 group-hover:bg-blue-600 transition-colors duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                             stroke-width="1.8" stroke="currentColor"
                             class="w-6 h-6 text-blue-600 group-hover:text-white transition-colors duration-300">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Navigasi Rute</h3>
                    <p class="text-sm text-gray-500 leading-relaxed">Dapatkan petunjuk arah akurat menuju lokasi wisata.</p>
                </div>

                <div class="group bg-white rounded-2xl p-6 border border-gray-100 hover:border-orange-200 hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                    <div class="w-12 h-12 rounded-2xl bg-green-100 flex items-center justify-center mb-5 group-hover:bg-green-600 transition-colors duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                             stroke-width="1.8" stroke="currentColor"
                             class="w-6 h-6 text-green-600 group-hover:text-white transition-colors duration-300">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Pencarian Lengkap</h3>
                    <p class="text-sm text-gray-500 leading-relaxed">Cari destinasi berdasarkan kategori, lokasi, atau nama.</p>
                </div>

            </div>
        </div>
    </div>
</section>

{{-- ============================================================
     CTA SECTION
============================================================ --}}
<section class="py-20 bg-red-900 relative overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-0 right-0 w-96 h-96 bg-white rounded-full blur-3xl translate-x-1/2 -translate-y-1/2"></div>
        <div class="absolute bottom-0 left-0 w-96 h-96 bg-white rounded-full blur-3xl -translate-x-1/2 translate-y-1/2"></div>
    </div>
    <div class="relative z-10 max-w-4xl mx-auto px-6 text-center">
        <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-white leading-tight">
            Siap menjelajahi keindahan Lampung?
        </h2>
        <p class="mt-5 text-lg text-red-200 max-w-2xl mx-auto">
            Buka peta interaktif dan temukan destinasi impian Anda hari ini.
        </p>
        <div class="mt-10 flex flex-wrap justify-center gap-4">
            <a href="/map"
               class="inline-flex items-center gap-3 px-8 py-4 bg-white text-red-900 rounded-2xl font-bold hover:bg-orange-50 transition-all duration-200 shadow-lg hover:-translate-y-0.5">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5A2.5 2.5 0 1112 6a2.5 2.5 0 010 5.5z"/>
                </svg>
                Buka Peta Sekarang
            </a>
        </div>
    </div>
</section>

{{-- ============================================================
     FOOTER
============================================================ --}}
<footer class="bg-slate-950 text-slate-400 py-12">
    <div class="max-w-7xl mx-auto px-6">
        <div class="flex flex-col md:flex-row justify-between items-center gap-6">

            <div class="flex items-center gap-2">
                <div class="w-8 h-8 bg-red-900 rounded-lg flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-white" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5A2.5 2.5 0 1112 6a2.5 2.5 0 010 5.5z"/>
                    </svg>
                </div>
                <span class="text-white font-bold">SigerNav</span>
            </div>

            <div class="flex gap-6 text-sm font-medium">
                <a href="/" class="hover:text-white transition">Beranda</a>
                <a href="/map" class="hover:text-white transition">Peta Wisata</a>
                <a href="#" class="hover:text-white transition">Kebijakan Privasi</a>
            </div>

            <div class="text-xs text-slate-600">
                &copy; {{ date('Y') }} SigerNav. All rights reserved.
            </div>

        </div>
    </div>
</footer>

@endsection
