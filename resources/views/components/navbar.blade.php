<nav class="fixed top-0 w-full z-50">

    <div class="max-w-7xl mx-auto px-6 py-4">

        <div class="bg-white/70 backdrop-blur-xl border border-white/30 rounded-2xl px-8 py-4 flex justify-between items-center">

            <!-- Logo -->
            <div class="flex items-center gap-3">

                <img src="{{ asset('assets/images/logo.png') }}"
                     class="h-12 w-12 object-cover rounded-full">

                <span class="font-bold text-xl text-red-900">
                    SigerNav
                </span>

            </div>

            <!-- Menu -->
            <div class="hidden md:flex items-center gap-4">

                <a href="/"
                   class="{{ request()->is('/') ? 'bg-orange-50 text-orange-500' : 'text-slate-700' }}
                          px-4 py-2 rounded-xl
                          hover:bg-orange-50
                          hover:text-orange-500
                          transition-all duration-300">
                    Beranda
                </a>

                <a href="/map"
                   class="{{ request()->is('map') ? 'bg-orange-50 text-orange-500' : 'text-slate-700' }}
                          px-4 py-2 rounded-xl
                          hover:bg-orange-50
                          hover:text-orange-500
                          transition-all duration-300">
                    Peta Wisata
                </a>

                <a href="/about"
                   class="{{ request()->is('about') ? 'bg-orange-50 text-orange-500' : 'text-slate-700' }}
                          px-4 py-2 rounded-xl
                          hover:bg-orange-50
                          hover:text-orange-500
                          transition-all duration-300">
                    Tentang
                </a>

            </div>

        </div>

    </div>

</nav>