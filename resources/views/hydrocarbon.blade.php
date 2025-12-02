@extends('layouts.app')

@section('content')

<div class="page-container">
    
    <!-- Hero Image: Chemistry/Lab Aesthetic (UPDATED) -->
    <div class="about-hero-image">
        <img src="https://images.unsplash.com/photo-1556905055-8f358a7a47b2?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Hydrocarbon Chemistry">
    </div>

    <!-- 0. Brand Intro Section -->
    <section class="text-hero" style="margin-bottom: 100px; text-align: center;">
        <h1>TIMELESS ELEGANCE</h1>
        <div class="text-content">
            <p>
                Fashion & Co. adalah brand berbasis di Karawang yang menawarkan pakaian wanita berkualitas tinggi dan tak lekang oleh waktu, di mana kenyamanan dan kemewahan berpadu secara harmonis. Koleksi kami menampilkan esensi tahan lama dengan detail modern, dirancang menggunakan material yang mencerminkan stabilitas dan kekuatan struktur rantai karbon yang menjadi dasar kehidupan.
            </p>
            <p class="highlight" style="font-weight: 500; color: #000;">
                Kami percaya pada seni kesederhanaan: layaknya hidrokarbon jenuh yang stabil, ia memancarkan ketenangan namun memiliki ikatan yang kuat.
            </p>
            <p>
                Pilih Fashion & Co., perpaduan sempurna antara estetika dan struktur yang fundamental.
            </p>
        </div>
    </section>

    <hr style="border: 0; border-top: 1px solid #eee; margin: 0 auto 80px auto; max-width: 100px;">

    <!-- 1. Definisi Section -->
    <section class="text-hero" style="text-align: center;">
        <h1>HIDROKARBON</h1>
        <div class="text-content">
            <p>
                Hidrokarbon merupakan senyawa kimia yang terdiri dari unsur karbon (C) dan hidrogen (H) sebagai elemen penyusunnya. Seluruh hidrokarbon memiliki rantai karbon dan atom-atom hidrogen yang berikatan rantai-rantai tersebut. Senyawa hidrokarbon dapat diklasifikasikan menjadi 2 jenis yaitu hidrokarbon alifatik dan hidrokarbon aromatik.
            </p>
        </div>
    </section>

    <!-- Klasifikasi Grid (Alifatik & Aromatik) -->
    <section class="values-grid" style="grid-template-columns: 1fr 1fr; margin-bottom: 60px; gap: 60px; text-align: center;">
        <!-- Changed text-align to center -->
        <div class="value-item" style="text-align: center;">
            <h3>HIDROKARBON ALIFATIK</h3>
            <p>
                Hidrokarbon jenis ini merupakan senyawa yang diperoleh dari lemak atau minyak. Senyawa hidrokarbon alifatik terbagi menjadi 3 yaitu alkana, alkena, dan alkuna. 
            </p>
            <!-- Adjusted list style for centering -->
            <ul style="margin-top: 15px; font-size: 0.95rem; color: #555; padding: 0; list-style-position: inside;">
                <li><strong>Alkana:</strong> Jenis hidrokarbon alifatik yang semua ikatannya tunggal.</li>
                <li><strong>Alkena:</strong> Jenis hidrokarbon yang memiliki dua rangkap ikatan.</li>
                <li><strong>Alkuna:</strong> Memiliki ikatan tiga rangkap.</li>
            </ul>
        </div>
        <div class="value-item" style="text-align: center;">
            <h3>HIDROKARBON AROMATIK</h3>
            <p>
                Hidrokarbon aromatik yang paling sederhana adalah Benzena. Senyawa tersebut diperoleh dari degradasi kimiawi getah benzena, memiliki aroma yang dipancarkan dari pohon. Selain itu, ada juga toluena yang berasal dari zat pada pohon Amerika Tengah dan biasa digunakan untuk wewangian. Kedua senyawa tersebut menghasilkan aroma sehingga istilah aromatik diartikan sebagai senyawa yang diturunkan dari benzena.
            </p>
        </div>
    </section>

    <!-- 2 & 3. Struktur dan Sumber -->
    <div style="background-color: #fcfcfc; padding: 60px 20px; margin-bottom: 80px; border-radius: 8px;">
        <section class="text-hero" style="margin-bottom: 0; text-align: center;">
            <h2>STRUKTUR DAN SUMBER</h2>
            <!-- Changed text-align to center and added margin auto -->
            <div class="text-content" style="text-align: center; max-width: 900px; margin: 0 auto;">
                
                <div style="margin-bottom: 40px;">
                    <h3 style="font-family: var(--font-heading); font-size: 1.2rem; margin-bottom: 10px;">Struktur dan Sifat Fisik–Kimia</h3>
                    <!-- Image -->
                    <img src="https://images.unsplash.com/photo-1628595351029-c2bf17511435?q=80&w=1000&auto=format&fit=crop" alt="Struktur Molekul" style="width: 100%; max-height: 400px; object-fit: cover; border-radius: 8px; margin-bottom: 20px;">
                    
                    <p>Sifat fisik hidrokarbon antara lain kelarutan dalam air yang rendah (karena nonpolar) dan kelarutan dalam pelarut nonpolar yang tinggi, serta titik didih dan titik leleh yang meningkat seiring bertambahnya panjang rantai karbon. Sifat kimia hidrokarbon ditentukan oleh jenis ikatannya (jenuh atau tak jenuh) dan dapat berupa reaksi pembakaran, substitusi, adisi, eliminasi, dan polimerisasi.</p>
                </div>

                <div>
                    <h3 style="font-family: var(--font-heading); font-size: 1.2rem; margin-bottom: 10px;">Sumber dan Proses Pembentukan</h3>
                
                    <p>Sumber utama hidrokarbon adalah organisme laut (terutama alga dan plankton) yang mati dan terkubur selama jutaan tahun. Proses pembentukannya melibatkan serangkaian tahap geologis, termasuk dekomposisi bahan organik menjadi kerogen di bawah tekanan dan panas, kemudian pemecahan kerogen menjadi hidrokarbon (minyak dan gas alam) akibat panas lebih lanjut.</p>
                </div>

            </div>
        </section>
    </div>

    <!-- Visual Break -->
    <section class="images-grid-3">
        <div class="grid-img">
             <img src="https://images.unsplash.com/photo-1591179535738-0fe38055847b?q=80&w=387&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Visual 1">
        </div>
        <div class="grid-img">
             <img src="https://images.unsplash.com/photo-1763503836825-97f5450d155a?q=80&w=580&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Visual 2">
        </div>
        <div class="grid-img">
             <img src="https://images.unsplash.com/photo-1668170349317-8e486094949e?q=80&w=387&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Visual 3">
        </div>
    </section>

    <!-- 4 & 5. Kegunaan & Dampak -->
    <section class="values-grid" style="grid-template-columns: 1fr 1fr; margin-top: 60px; text-align: center;">
        <div class="value-item" style="text-align: center;">
            <h3>KEGUNAAN</h3>
            <p style="margin-bottom: 20px;">Hidrokarbon memilki banyak kegunaan yang sangat membantu manusia dalam menjalani kehidupan yang baik, seperti:</p>
            <ul style="list-style: none; padding: 0; color: #555; font-size: 0.95rem;">
                <li style="padding: 10px; border-bottom: 1px solid #eee;">1. Bahan Bakar Kendaraan</li>
                <li style="padding: 10px; border-bottom: 1px solid #eee;">2. Kantong Plastik</li>
                <li style="padding: 10px; border-bottom: 1px solid #eee;">3. Lilin</li>
                <li style="padding: 10px; border-bottom: 1px solid #eee;">4. Bahan Kosmetik</li>
            </ul>
        </div>
        <div class="value-item" style="text-align: center;">
            <h3>DAMPAK LINGKUNGAN</h3>
            <p style="margin-bottom: 20px;">Hidrokarbon mempunyai banyak manfaat untuk manusia, tetapi tidak lepas dari dampak negatif penggunaannya:</p>
            <ul style="list-style: none; padding: 0; color: #555; font-size: 0.95rem;">
                <li style="padding: 10px; border-bottom: 1px solid #eee;">1. Polusi Udara</li>
                <li style="padding: 10px; border-bottom: 1px solid #eee;">2. Pencemaran Tanah dan Air</li>
                <li style="padding: 10px; border-bottom: 1px solid #eee;">3. Ketergantungan bahan bakar fosil</li>
            </ul>
        </div>
    </section>

    <!-- 6 & 7. Project Context (Fashion Connection) -->
    <div class="about-hero-image" style="height: 400px; margin-bottom: 60px; margin-top: 60px;">
        <img src="https://images.unsplash.com/photo-1489987707025-afc232f7ea0f?q=80&w=1000&auto=format&fit=crop" alt="Fabric Texture">
    </div>

    <section class="text-hero small-hero" style="text-align: center;">
        <h2>PROJECT ASAT KIMIA</h2>
        <div class="text-content">
            <p>
                Kami memilih baju karena kami yakin dengan adanya project ini dapat meningkatkan pengetahuan kami terhadap baju, mulai dari peran kimia yang menghasilkan kain hingga berkembang menjadi baju yang digunakan saat ini. Baju juga terdiri dari beberapa bahan kain yang lebih bervariasi, contohnya polyester, flanel, nilon, dan masih banyak lagi.
            </p>
            <br>
            <p class="highlight" style="font-weight: 500; color: #000;">
                Alasan utama kami memilih produk baju yaitu untuk menuntaskan project ASAT Kimia kelas XII.1 tahun pelajaran 2025-2026 yang dimana kami mendapatkan bahan sandang sebagai tema dari miniatur yang kami buat.
            </p>
            
            <div style="margin-top: 50px; padding: 30px; border: 1px solid #000; display: inline-block;">
                <h3 style="font-family: var(--font-heading); font-size: 1.1rem; margin-bottom: 15px; letter-spacing: 1px;">HASIL PROJECT KAMI</h3>
                <ul style="list-style: none; padding: 0; color: #333;">
                    <li style="display: inline-block; margin: 0 10px;">• Miniatur Penjahit</li>
                    <li style="display: inline-block; margin: 0 10px;">• Miniatur Toko Baju</li>
                    <li style="display: inline-block; margin: 0 10px;">• Video Penjelasan</li>
                    <li style="display: inline-block; margin: 0 10px;">• Barbie Seragam SMA</li>
                </ul>
            </div>
        </div>
    </section>

</div>

@endsection
