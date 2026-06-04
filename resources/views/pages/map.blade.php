@extends('layouts.app')

@section('content')

<section class="pt-28 bg-[#fffcf9]">

    <div class="max-w-7xl mx-auto px-6">

        <div class="grid grid-cols-12 gap-6">

            <!-- Sidebar -->
            <div class="col-span-3">

                <div class="bg-white rounded-3xl p-6 shadow-sm">

                    <h2 class="font-bold text-xl mb-4">
                        Eksplorasi Wisata
                    </h2>

                    <input
                        type="text"
                        placeholder="Cari destinasi..."
                        class="w-full border rounded-xl px-4 py-3 mb-4">

                    <h3 class="font-semibold mb-3">
                        Kategori
                    </h3>

                    <div class="space-y-2">

                        <label class="flex gap-2">
                            <input type="checkbox">
                            Pantai
                        </label>

                        <label class="flex gap-2">
                            <input type="checkbox">
                            Air Terjun
                        </label>

                        <label class="flex gap-2">
                            <input type="checkbox">
                            Pulau
                        </label>

                        <label class="flex gap-2">
                            <input type="checkbox">
                            Budaya
                        </label>

                    </div>

                    <div class="mt-8">

                        <h3 class="font-semibold mb-3">
                            Statistik
                        </h3>

                        <p>200+ Destinasi</p>
                        <p>13 Kabupaten</p>
                        <p>2 Kota</p>

                    </div>

                </div>

            </div>

            <!-- Map -->
            <div class="col-span-9">

                <div
                    id="map"
                    class="h-[80vh] rounded-3xl overflow-hidden shadow-sm">
                </div>

            </div>

        </div>

    </div>

</section>
@endsection

@push('scripts')

<script>

const map = L.map('map').setView([-5.4,105.2],8);

L.tileLayer(
'https://tile.openstreetmap.org/{z}/{x}/{y}.png',
{
maxZoom:19
}
).addTo(map);

fetch('/data/wisata_lampung.geojson')
.then(response => response.json())
.then(data => {

    L.geoJSON(data, {

        onEachFeature: function(feature, layer){

            layer.bindPopup(`
                <div class="p-2">

                    <h3>
                        ${feature.properties.nama}
                    </h3>

                    <p>
                        ${feature.properties.kategori}
                    </p>

                </div>
            `);

        }

    }).addTo(map);

});

</script>

@endpush