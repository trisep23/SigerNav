@extends('layouts.app')

@section('content')

<section class="bg-[#f3efe9] pt-32 pb-16">

    <div class="max-w-5xl mx-auto px-6 text-center">

        <span class="inline-block px-4 py-2 rounded-full bg-orange-100 text-orange-600 font-medium">
            TENTANG SIGERNAV
        </span>

        <h1 class="text-5xl lg:text-6xl font-bold mt-6 text-slate-900">
            Menjelajahi Lampung
            Melalui Teknologi Pemetaan
        </h1>

        <p class="mt-6 text-lg text-slate-500 max-w-3xl mx-auto">
            SigerNav merupakan platform WebGIS yang dirancang untuk membantu
            wisatawan menemukan destinasi wisata terbaik di Provinsi Lampung
            melalui peta interaktif dan navigasi digital.
        </p>

    </div>

</section>

<section class="py-12 bg-[#f8f6f3]">

    <div class="max-w-6xl mx-auto px-6">

        <div class="bg-white rounded-[32px] p-12 shadow-sm border border-slate-100">

            <h2 class="text-3xl font-bold text-slate-900 mb-6">
                Apa itu SigerNav?
            </h2>

            <p class="text-slate-600 leading-relaxed text-lg">
                SigerNav adalah platform navigasi wisata berbasis WebGIS yang
                dikembangkan untuk memperkenalkan dan mempermudah akses informasi
                destinasi wisata di Provinsi Lampung.

                Melalui integrasi teknologi pemetaan digital, pengguna dapat
                menemukan lokasi wisata, melihat persebaran destinasi, serta
                memperoleh informasi yang dibutuhkan secara cepat dan mudah.
            </p>

        </div>

    </div>

</section>

<section class="py-16 bg-[#f8f6f3]">

    <div class="max-w-6xl mx-auto px-6">

        <div class="text-center mb-12">

            <span class="inline-block px-4 py-2 rounded-full bg-orange-100 text-orange-600 font-medium mb-4">
                TEKNOLOGI
            </span>

            <h2 class="text-4xl font-bold text-slate-900">
                Teknologi yang Digunakan
            </h2>

        </div>

        <div class="grid md:grid-cols-3 lg:grid-cols-6 gap-6">

            <!-- Laravel -->
            <div class="bg-white p-6 rounded-3xl text-center shadow-sm border border-slate-100">
                <div class="text-3xl mb-3 text-orange-500">
                    <i class="fas fa-code"></i>
                </div>
                <div class="font-semibold">Laravel</div>
            </div>

            <!-- Leaflet -->
            <div class="bg-white p-6 rounded-3xl text-center shadow-sm border border-slate-100">
                <div class="text-3xl mb-3 text-orange-500">
                    <i class="fas fa-map"></i>
                </div>
                <div class="font-semibold">Leaflet</div>
            </div>

            <!-- GeoJSON -->
            <div class="bg-white p-6 rounded-3xl text-center shadow-sm border border-slate-100">
                <div class="text-3xl mb-3 text-orange-500">
                    <i class="fas fa-database"></i>
                </div>
                <div class="font-semibold">GeoJSON</div>
            </div>

            <!-- QGIS -->
            <div class="bg-white p-6 rounded-3xl text-center shadow-sm border border-slate-100">
                <div class="text-3xl mb-3 text-orange-500">
                    <i class="fas fa-earth-asia"></i>
                </div>
                <div class="font-semibold">QGIS</div>
            </div>

            <!-- Tailwind -->
            <div class="bg-white p-6 rounded-3xl text-center shadow-sm border border-slate-100">
                <div class="text-3xl mb-3 text-orange-500">
                    <i class="fas fa-paint-brush"></i>
                </div>
                <div class="font-semibold">Tailwind</div>
            </div>

            <!-- OpenStreetMap -->
            <div class="bg-white p-6 rounded-3xl text-center shadow-sm border border-slate-100">
                <div class="text-3xl mb-3 text-orange-500">
                    <i class="fas fa-location-dot"></i>
                </div>
                <div class="font-semibold">OpenStreetMap</div>
            </div>

        </div>

    </div>

</section>

<section class="py-11 bg-[#f8f6f3]">

    <div class="max-w-4xl mx-auto px-6">

        <div class="bg-white rounded-[32px] p-12 shadow-sm border border-slate-100 text-center">

           <div class="w-24 h-24 rounded-full bg-orange-100 mx-auto mb-6 flex items-center justify-center">

                <svg xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.8"
                    stroke="currentColor"
                    class="w-10 h-10 text-orange-500">

                    <path stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M16 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/>

                    <circle cx="10" cy="7" r="4"/>

                    <path stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M20 8v6"/>

                    <path stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M23 11h-6"/>

                </svg>

            </div>

            <h2 class="text-3xl font-bold text-slate-900">
                Tim Pengembang
            </h2>

            <p class="mt-4 text-slate-600">
                SigerNav dikembangkan sebagai proyek WebGIS untuk mendukung
                promosi dan akses informasi wisata di Provinsi Lampung.
            </p>

            <div class="grid md:grid-cols-3 gap-6 mt-10">

                <div>
                    <h3 class="font-bold text-lg text-slate-900">
                        Tri Septiani
                    </h3>
                    <h4 class="font-bold text-lg text-slate-900">
                        2315061036
                    </h4>
                    <p class="text-slate-500">
                        Frontend Developer
                    </p>
                </div>

                <div>
                    <h3 class="font-bold text-lg text-slate-900">
                        Zahra Aulia Nafisha
                    </h3>
                    <h4 class="font-bold text-lg text-slate-900">
                        2315061028
                    </h4>
                    <p class="text-slate-500">
                        GIS & Data Processing
                    </p>
                </div>

                <div>
                    <h3 class="font-bold text-lg text-slate-900">
                        Muhammad Hafiz Assyifa
                    </h3>
                    <h4 class="font-bold text-lg text-slate-900">
                        2315061072
                    </h4>
                    <p class="text-slate-500">
                        Backend Developer
                    </p>
                </div>

            </div>

            <div class="mt-8 text-slate-400 text-sm">
                Teknik Informatika • Universitas Lampung • 2025
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