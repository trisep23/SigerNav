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
                        id="searchInput"
                        placeholder="Cari destinasi..."
                        class="w-full border rounded-xl px-4 py-3 mb-4"
                        oninput="filterMarkers()">

                    <h3 class="font-semibold mb-3">
                        Kategori
                    </h3>

                    <div class="space-y-2" id="categoryList">

                        <label class="flex items-center gap-2 cursor-pointer">
                            <input type="checkbox" value="pantai" checked onchange="filterMarkers()">
                            <span class="w-3 h-3 rounded-full bg-cyan-500"></span>
                            Pantai
                        </label>

                        <label class="flex items-center gap-2 cursor-pointer">
                            <input type="checkbox" value="gunung_bukit" checked onchange="filterMarkers()">
                            <span class="w-3 h-3 rounded-full bg-red-500"></span>
                            Gunung & Bukit
                        </label>

                        <label class="flex items-center gap-2 cursor-pointer">
                            <input type="checkbox" value="hutan_alamLiar" checked onchange="filterMarkers()">
                            <span class="w-3 h-3 rounded-full bg-green-500"></span>
                            Hutan & Alam Liar
                        </label>

                        <label class="flex items-center gap-2 cursor-pointer">
                            <input type="checkbox" value="airTerjun" checked onchange="filterMarkers()">
                            <span class="w-3 h-3 rounded-full bg-blue-500"></span>
                            Air Terjun
                        </label>

                        <label class="flex items-center gap-2 cursor-pointer">
                            <input type="checkbox" value="budaya_sejarah" checked onchange="filterMarkers()">
                            <span class="w-3 h-3 rounded-full bg-yellow-600"></span>
                            Budaya &amp; Sejarah
                        </label>

                        <label class="flex items-center gap-2 cursor-pointer">
                            <input type="checkbox" value="pulau_bahari" checked onchange="filterMarkers()">
                            <span class="w-3 h-3 rounded-full bg-teal-500"></span>
                            Pulau &amp; Bahari
                        </label>

                    </div>

                    <div class="mt-8">

                        <h3 class="font-semibold mb-3">
                            Statistik
                        </h3>

                        <p id="statTotal">Memuat...</p>
                        <p>15 Kabupaten</p>
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

const map = L.map('map').setView([-5.4, 105.2], 8);

L.tileLayer(
    'https://tile.openstreetmap.org/{z}/{x}/{y}.png',
    { maxZoom: 19 }
).addTo(map);

// Color mapping for categories
const categoryColors = {
    'pantai': '#06b6d4',
    'gunung_bukit': '#ef4444',
    'hutan_alamLiar': '#22c55e',
    'airTerjun': '#3b82f6',
    'budaya_sejarah': '#d97706',
    'pulau_bahari': '#14b8a6',
};

// Category labels
const categoryLabels = {
    'pantai': 'Pantai',
    'gunung_bukit': 'Gunung & Bukit',
    'hutan_alamLiar': 'Hutan & Alam Liar',
    'airTerjun': 'Air Terjun',
    'budaya_sejarah': 'Budaya & Sejarah',
    'pulau_bahari': 'Pulau & Bahari',
};

// Store all layers
const allLayers = [];

function createPopupContent(props, id) {
    const name = props.nama || 'Tanpa Nama';
    const category = props.kategori;
    const thumb = props.gambar1 || '';
    const detailUrl = '/wisatas/' + id;

    let content = '<div style="min-width:220px">';

    if (thumb) {
        content += '<img src="' + thumb + '" alt="' + name + '" style="width:100%;height:130px;object-fit:cover;border-radius:8px;margin-bottom:10px">';
    }

    content += '<strong style="font-size:15px;display:block;margin-bottom:6px">' + name + '</strong>';
    content += '<span style="display:inline-block;padding:2px 10px;border-radius:999px;font-size:11px;font-weight:500;background:' + (categoryColors[category] || '#6b7280') + '22;color:' + (categoryColors[category] || '#6b7280') + '">' + (categoryLabels[category] || 'Lainnya') + '</span>';

    if (props.alamat) {
        content += '<p style="margin:8px 0 0;font-size:12px;color:#6b7280"><i class="fas fa-map-marker-alt"></i> ' + props.alamat + '</p>';
    }

    if (props.elevasi) {
        content += '<p style="margin:4px 0 0;font-size:12px;color:#6b7280"><i class="fas fa-mountain"></i> Elevasi: ' + props.elevasi + 'm</p>';
    }

    content += '<a href="' + detailUrl + '" style="display:inline-block;margin-top:12px;padding:8px 16px;background:#059669;color:white;text-decoration:none;border-radius:8px;font-size:13px;font-weight:600">Lihat Detail</a>';

    content += '</div>';
    return content;
}

// Load data from database API
function loadFromAPI() {
    return fetch('/api/wisatas')
        .then(function(res) { return res.json(); })
        .then(function(data) {
            let count = 0;
            data.features.forEach(function(feature) {
                const props = feature.properties;
                const id = props.id;
                const coords = feature.geometry.coordinates;
                const latlng = L.latLng(coords[1], coords[0]);
                const category = props.kategori;

                const layer = L.circleMarker(latlng, {
                    radius: 8,
                    fillColor: categoryColors[category] || categoryColors['lainnya'],
                    color: 'white',
                    weight: 2,
                    opacity: 1,
                    fillOpacity: 0.85
                });

                layer.category = category;
                layer.featureName = (props.nama || '').toLowerCase();
                layer.bindPopup(createPopupContent(props, id));
                allLayers.push(layer);
                layer.addTo(map);
                count++;
            });
            return count;
        })
        .catch(function(err) {
            console.error('Error loading API:', err);
            return 0;
        });
}

// Filter markers by category and search
function filterMarkers() {
    const searchText = (document.getElementById('searchInput') || {value: ''}).value.toLowerCase();
    const checkedCategories = Array.from(
        document.querySelectorAll('#categoryList input[type="checkbox"]:checked')
    ).map(function(cb) { return cb.value; });

    let visibleCount = 0;

    allLayers.forEach(function(layer) {
        const categoryMatch = checkedCategories.indexOf(layer.category) !== -1;
        const nameMatch = layer.featureName.indexOf(searchText) !== -1;
        const show = categoryMatch && nameMatch;

        if (show) {
            if (!map.hasLayer(layer)) map.addLayer(layer);
            visibleCount++;
        } else {
            if (map.hasLayer(layer)) map.removeLayer(layer);
        }
    });

    var statEl = document.getElementById('statTotal');
    if (statEl) statEl.textContent = visibleCount + ' Destinasi';
}

// Load all data on page load
loadFromAPI().then(function(total) {
    var statEl = document.getElementById('statTotal');
    if (statEl) statEl.textContent = total + ' Destinasi';
    filterMarkers();
});

</script>

@endpush
