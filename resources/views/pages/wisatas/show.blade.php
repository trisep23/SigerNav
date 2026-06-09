<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e($wisatum->nama); ?> - SigerNav</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        body { font-family: sans-serif; background: #fffcf9; margin: 0; padding: 0; }
        .container { max-width: 900px; margin: 0 auto; padding: 40px 20px; }
        .back { display: inline-block; margin-bottom: 20px; color: #059669; text-decoration: none; font-size: 14px; }
        .back:hover { text-decoration: underline; }
        .card { background: white; border-radius: 20px; overflow: hidden; box-shadow: 0 4px 20px rgba(0,0,0,0.08); }
        .thumbnail { width: 100%; height: 350px; object-fit: cover; display: block; }
        .content { padding: 30px; }
        .badge { display: inline-block; padding: 4px 14px; border-radius: 20px; font-size: 12px; font-weight: 600; text-transform: uppercase; }
        .badge-pantai { background: #e0f2fe; color: #0369a1; }
        .badge-gunung_bukit { background: #fee2e2; color: #991b1b; }
        .badge-hutan_alamLiar { background: #dcfce7; color: #166534; }
        .badge-airTerjun { background: #dbeafe; color: #1e40af; }
        .badge-budaya_sejarah { background: #fef3c7; color: #92400e; }
        .badge-pulau_bahari { background: #ccfbf1; color: #0f766e; }
        .badge-lainnya { background: #f3f4f6; color: #374151; }
        h1 { margin: 15px 0 10px; color: #1f2937; font-size: 28px; }
        .meta { color: #6b7280; font-size: 14px; margin-bottom: 20px; }
        .meta i { margin-right: 5px; }
        .description { line-height: 1.8; color: #4b5563; font-size: 15px; }
        .info-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 15px; margin-top: 25px; }
        .info-box { background: #f9fafb; padding: 15px; border-radius: 12px; }
        .info-box label { font-size: 11px; color: #9ca3af; text-transform: uppercase; display: block; margin-bottom: 5px; }
        .info-box span { font-weight: 600; color: #374151; font-size: 14px; }
        .gallery { display: grid; grid-template-columns: repeat(auto-fill, minmax(250px, 1fr)); gap: 15px; margin-top: 30px; }
        .gallery img { width: 100%; height: 200px; object-fit: cover; border-radius: 12px; cursor: pointer; transition: transform 0.2s; }
        .gallery img:hover { transform: scale(1.03); }
        .gallery-section-title { font-size: 16px; font-weight: 700; color: #1f2937; margin: 30px 0 15px; }
        .btn-maps { display: inline-flex; align-items: center; gap: 8px; background: #ea4335; color: white; padding: 10px 20px; border-radius: 25px; text-decoration: none; font-weight: 600; font-size: 14px; margin-top: 20px; transition: background 0.2s; }
        .btn-maps:hover { background: #c5221f; }
    </style>
</head>
<body>
    <div class="container">
        <a href="/map" class="back">&larr; Kembali ke Peta</a>

        <div class="card">
            <?php if ($wisatum->gambar1): ?>
            <img src="<?php echo e($wisatum->gambar1); ?>" alt="<?php echo e($wisatum->nama); ?>" class="thumbnail">
            <?php endif; ?>

            <div class="content">
                <span class="badge badge-<?php echo e($wisatum->kategori); ?>">
                    <?php echo ucfirst(str_replace('_', ' ', e($wisatum->kategori))); ?>
                </span>

                <h1><?php echo e($wisatum->nama); ?></h1>

                <div class="meta">
                    <?php if ($wisatum->alamat): ?>
                    <i class="fas fa-map-marker-alt"></i> <?php echo e($wisatum->alamat); ?>
                    <?php endif; ?>
                    <?php if ($wisatum->elevasi): ?>
                    &nbsp;&nbsp; <i class="fas fa-mountain"></i> Elevasi <?php echo e($wisatum->elevasi); ?> mdpl
                    <?php endif; ?>
                </div>

                <?php if ($wisatum->deskripsi): ?>
                <p class="description"><?php echo e($wisatum->deskripsi); ?></p>
                <?php endif; ?>

                <div class="info-grid">
                    <?php if ($wisatum->elevasi): ?>
                    <div class="info-box">
                        <label>Elevasi</label>
                        <span><?php echo e($wisatum->elevasi); ?> mdpl</span>
                    </div>
                    <?php endif; ?>
                </div>

                <?php
                $galleryImages = [];
                for ($i = 2; $i <= 10; $i++) {
                    $img = 'gambar' . $i;
                    if (!empty($wisatum->$img)) {
                        $galleryImages[] = $wisatum->$img;
                    }
                }
                ?>
                <?php if (count($galleryImages) > 0): ?>
                <div class="gallery-section-title">Galeri Foto</div>
                <div class="gallery">
                    <?php foreach ($galleryImages as $img): ?>
                    <img src="<?php echo e($img); ?>" alt="Galeri">
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>
</html>
