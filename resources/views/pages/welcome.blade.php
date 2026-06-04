@extends('layouts.app')

@section('content')
<section class="relative min-h-screen bg-[#fffcf9] overflow-hidden">

    <div class="absolute inset-0 bg-gradient-to-br from-red-50 via-orange-50 to-white"></div>

    <div class="container mx-auto px-6 py-20 relative z-10">

        <div class="grid lg:grid-cols-2 gap-16 items-center">

            <div>
                <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-red-100 text-red-900 text-sm font-medium mb-6">
                    #1 Platform Eksplorasi Wisata Lampung
                </div>

                <h1 class="text-5xl lg:text-7xl font-extrabold text-gray-900 leading-tight">
                    Jelajahi Lampung
                    dengan
                    <span class="text-orange-500">
                        SigerNav
                    </span>
                </h1>

                <p class="mt-6 text-lg text-gray-600 max-w-xl">
                    Temukan destinasi wisata terbaik, navigasi interaktif,
                    dan rekomendasi tempat menarik di seluruh Provinsi Lampung.
                </p>

                <div class="flex flex-wrap gap-4 mt-10">
                    <a href="/map"
                       class="px-8 py-4 bg-red-900 text-white rounded-2xl hover:bg-red-800 transition">
                        Buka Peta Wisata
                    </a>
                    <a href="#features"
                       class="px-8 py-4 border border-gray-300 rounded-2xl hover:bg-white transition">
                        Pelajari Fitur
                    </a>
                </div>
            </div>

            <div class="hidden lg:flex items-center justify-center">

                <div class="relative w-[700px] h-[500px] mt-20">

                    <!-- Glow -->
                    <div class="absolute inset-0 bg-orange-300/20 blur-3xl rounded-full"></div>

                    <!-- Card 1 -->
                    <div class="absolute left-0 top-28 rotate-[-22deg]
                                hover:scale-110 hover:-translate-y-6
                                hover:z-50 transition-all duration-500 cursor-pointer">

                        <img
                            src="{{ asset('assets/images/gigihiu.jpg') }}"
                            class="w-56 h-80 object-cover rounded-3xl shadow-2xl border-4 border-white"
                        >
                    </div>

                    <!-- Card 2 -->
                    <div class="absolute left-28 top-14 rotate-[-12deg]
                                hover:scale-110 hover:-translate-y-6
                                hover:z-50 transition-all duration-500 cursor-pointer">

                        <img
                            src="{{ asset('assets/images/kyokobeach.jpg') }}"
                            class="w-56 h-80 object-cover rounded-3xl shadow-2xl border-4 border-white"
                        >
                    </div>

                    <!-- Card 3 -->
                    <div class="absolute left-56 top-4
                                hover:scale-110 hover:-translate-y-6
                                hover:z-50 transition-all duration-500 cursor-pointer">

                        <img
                            src="{{ asset('assets/images/curup.jpg') }}"
                            class="w-56 h-80 object-cover rounded-3xl shadow-2xl border-4 border-white"
                        >
                    </div>

                    <!-- Card 4 -->
                    <div class="absolute left-[340px] top-14 rotate-[12deg]
                                hover:scale-110 hover:-translate-y-6
                                hover:z-50 transition-all duration-500 cursor-pointer">

                        <img
                            src="{{ asset('assets/images/navara.jpg') }}"
                            class="w-56 h-80 object-cover rounded-3xl shadow-2xl border-4 border-white"
                        >
                    </div>

                    <!-- Card 5 -->
                    <div class="absolute left-[460px] top-28 rotate-[22deg]
                                hover:scale-110 hover:-translate-y-6
                                hover:z-50 transition-all duration-500 cursor-pointer">

                        <img
                            src="{{ asset('assets/images/sebuku.jpg') }}"
                            class="w-56 h-80 object-cover rounded-3xl shadow-2xl border-4 border-white"
                        >
                    </div>

                </div>

            </div>

        </div>
    </div>
</section>

<section class="py-10 bg-[#fffcf9]">

    <div class="max-w-6xl mx-auto px-6">

        <div class="grid md:grid-cols-3 gap-8">

            <div class="bg-white rounded-3xl p-8 shadow-sm border border-orange-100 text-center">

                <h3 class="text-5xl font-bold text-orange-500">
                    200+
                </h3>

                <p class="mt-3 text-slate-500">
                    Destinasi Wisata
                </p>

            </div>

            <div class="bg-white rounded-3xl p-8 shadow-sm border border-orange-100 text-center">

                <h3 class="text-5xl font-bold text-orange-500">
                    10+
                </h3>

                <p class="mt-3 text-slate-500">
                    Kategori Wisata
                </p>

            </div>

            <div class="bg-white rounded-3xl p-8 shadow-sm border border-orange-100 text-center">

                <h3 class="text-5xl font-bold text-orange-500">
                    100%
                </h3>

                <p class="mt-3 text-slate-500">
                    Fokus Lampung
                </p>

            </div>

        </div>

    </div>

</section>

<section id="features" class="py-18 bg-[#fffcf9]">

    <div class="max-w-7xl mx-auto px-6">

        <div class="text-center mb-16">

            <span class="text-orange-500 font-semibold">
                FITUR UNGGULAN
            </span>

            <h2 class="text-4xl font-bold mt-4 text-slate-900">
                Dibuat Untuk Menjelajahi Lampung
            </h2>

        </div>

        <div class="grid lg:grid-cols-3 gap-8">

            <div class="bg-white rounded-3xl p-8 shadow-sm hover:shadow-xl transition">

                <div class="w-14 h-14 rounded-2xl bg-orange-100 flex items-center justify-center mb-6">

                    <div class="w-14 h-14 rounded-2xl bg-orange-100 flex items-center justify-center mb-6">

                        <svg xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24"
                            fill="currentColor"
                            class="w-8 h-8 text-orange-500">
                            <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5A2.5 2.5 0 1112 6a2.5 2.5 0 010 5.5z"/>

                        </svg>

                    </div>

                </div>

                <h3 class="text-2xl font-bold mb-4">
                    Wisata Terdekat
                </h3>

                <p class="text-slate-500">
                    Menampilkan destinasi wisata yang paling dekat dari lokasi Anda.
                </p>

            </div>

            <div class="bg-white rounded-3xl p-8 shadow-sm hover:shadow-xl transition">

                <div class="w-14 h-14 rounded-2xl bg-orange-100 flex items-center justify-center mb-6">

                    <svg xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.8"
                        stroke="currentColor"
                        class="w-8 h-8 text-orange-500">

                        <path stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 01.553-.894L9 2m0 18l6-2m-6 2V2m6 16l5.447 2.724A1 1 0 0021 19.382V8.618a1 1 0 00-.553-.894L15 5m0 13V5m0 0L9 2"/>
                    </svg>

                </div>

                <h3 class="text-2xl font-bold mb-4">
                    Peta Interaktif
                </h3>

                <p class="text-slate-500">
                    Eksplorasi seluruh destinasi wisata Lampung dalam satu peta.
                </p>

            </div>

            <div class="bg-white rounded-3xl p-8 shadow-sm hover:shadow-xl transition">

                <div class="w-14 h-14 rounded-2xl bg-orange-100 flex items-center justify-center mb-6">

                <div class="w-14 h-14 rounded-2xl bg-orange-100 flex items-center justify-center mb-6">

                    <svg xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="2"
                        stroke="currentColor"
                        class="w-8 h-8 text-orange-500">

                        <path stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M12 2L19 21L12 17L5 21L12 2Z"/>

                    </svg>

                </div>

                </div>

                <h3 class="text-2xl font-bold mb-4">
                    Navigasi Rute
                </h3>

                <p class="text-slate-500">
                    Dapatkan petunjuk arah menuju destinasi pilihan Anda.
                </p>

            </div>

        </div>

    </div>

</section>

<footer class="bg-slate-950 text-slate-400 py-12">
    <div class="container mx-auto px-6">
        <div class="flex flex-col md:flex-row justify-between items-center gap-8">
            
            <div class="text-center md:text-left">
                <h2 class="text-xl font-bold text-white mb-2">SigerNav</h2>
                <p class="text-sm">Platform navigasi wisata terbaik untuk mengeksplorasi Lampung.</p>
            </div>
            
            <div class="flex gap-8 text-sm font-medium">
                <a href="/" class="hover:text-orange-500 transition">Beranda</a>
                <a href="/map" class="hover:text-orange-500 transition">Peta Wisata</a>
                <a href="#" class="hover:text-orange-500 transition">Kebijakan Privasi</a>
            </div>

            <div class="text-xs text-slate-600">
                &copy; {{ date('Y') }} SigerNav. All rights reserved.
            </div>
        </div>
    </div>
</footer>
@endsection