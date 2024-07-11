<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Yudisium</title>
    <!-- Menambahkan Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
        }

        header {
            background: #333;
            color: #fff;
            padding: 1rem 0;
        }

        header .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: auto;
            padding: 0 2rem;
        }

        header h1 {
            margin: 0;
            display: flex;
            align-items: center;
        }

        header h1 img {
            width: 50px;
            height: 50px;
            margin-right: 10px;
        }

        header nav ul {
            list-style: none;
            display: flex;
        }

        header nav ul li {
            margin-left: 2rem;
        }

        header nav ul li a {
            color: #fff;
            text-decoration: none;
            display: flex;
            align-items: center;
        }

        header nav ul li a i {
            margin-right: 5px;
        }

        .hero {
            position: relative;
            width: 100%;
            height: 100vh;
            background: url('https://images.pexels.com/photos/267885/pexels-photo-267885.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2') no-repeat center center/cover;
        }

        .hero-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: #fff;
            text-align: center;
        }

        .hero-text h1 {
            font-size: 4rem;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.7);
        }

        .hero-text p {
            font-size: 1.5rem;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.7);
        }

        main {
            padding: 2rem 0;
        }

        main .container {
            max-width: 1200px;
            margin: auto;
            padding: 0 2rem;
        }

        section {
            margin-bottom: 2rem;
        }

        section h2 {
            margin-bottom: 1rem;
        }

        section p {
            margin-bottom: 1rem;
        }

        button {
            background: #333;
            color: #fff;
            border: none;
            padding: 0.5rem 1rem;
            cursor: pointer;
        }

        button:hover {
            background: #555;
        }

        form label {
            display: block;
            margin-bottom: 0.5rem;
        }

        form input, form textarea {
            width: 100%;
            padding: 0.5rem;
            margin-bottom: 1rem;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        footer {
            background: #333;
            color: #fff;
            text-align: center;
            padding: 1rem 0;
        }

        footer p {
            margin: 0;
        }

        .about-us {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: center;
        }

        .about-us .content {
            flex: 1 1 50%;
            padding: 1rem;
        }

        .about-us .image {
            flex: 1 1 40%;
            padding: 1rem;
            text-align: center;
        }

        .about-us .image img {
            max-width: 100%;
            border-radius: 8px;
        }

        .about-us .content h2 {
            font-size: 2rem;
            margin-bottom: 1rem;
        }

        .about-us .content p {
            font-size: 1rem;
            margin-bottom: 1rem;
            line-height: 1.8;
        }
        .requirements {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: flex-start;
        }

        .requirements .item {
            flex: 1 1 45%;
            padding: 1rem;
            margin-bottom: 1rem;
            background: #f0f0f0;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .requirements .item h3 {
            font-size: 1.5rem;
            margin-bottom: 0.5rem;
        }

        .requirements .item ul {
            list-style: disc;
            margin-left: 1.5rem;
        }

        .requirements .item ul li {
            margin-bottom: 0.5rem;
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <h1>
                <img src="https://www.uhb.ac.id/site/assets/files/2071/logo_uhb_r.420x0-is-pid1040.png" alt="Logo Aplikasi Yudisium">
                Siyuda
            </h1>
            @if (Route::has('login'))
            <nav class="-mx-3 flex flex-1 justify-end">
                @auth
                    <a href="{{ url('/dashboard') }}" style="color: white;"><i class="fas fa-sign-in-alt"></i> Dashboard</a>
                @else
                    <a href="{{ url('login') }}" style="color: white;"><i class="fas fa-sign-in-alt"></i> Login</a>
                    @if (Route::has('register'))
                    <a href="{{ route('register') }}" style="color: white;"><i class="fas fa-user-plus"></i> Register</a>
                    @endif
                @endauth
            </nav>
            @endif
        </div>
    </header>

    <section class="hero">
        <div class="hero-text">
            <h1>Selamat Datang di Aplikasi Yudisium</h1>
            <p>Platform ini memudahkan proses yudisium Anda dengan cepat dan efisien.</p>
        </div>
    </section>

    <main>
        <section id="about">
            <div class="container about-us">
                <div class="content">
                    <h2>Tentang Kami</h2>
                    <p>Aplikasi Yudisium adalah solusi digital untuk proses yudisium di perguruan tinggi. Kami berkomitmen untuk menyediakan layanan terbaik bagi mahasiswa dan staf akademik. Tim kami terdiri dari para profesional yang berdedikasi dalam bidang teknologi pendidikan, yang siap membantu Anda dalam setiap langkah proses yudisium.</p>
                    <p>Dengan menggunakan Aplikasi Yudisium, Anda dapat mengajukan yudisium secara online, memverifikasi dokumen dengan cepat, dan menerima notifikasi status yudisium Anda tanpa harus datang ke kampus. Kami percaya bahwa teknologi dapat mempermudah hidup Anda, dan kami berusaha untuk menghadirkan solusi yang inovatif dan efisien.</p>
                </div>
                <div class="image">
                    <img src="https://images.pexels.com/photos/7713417/pexels-photo-7713417.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Tentang Kami">
                </div>
            </div>
        </section>

        <section id="requirements">
            <div class="container">
                <h2>Persyaratan Yudisium</h2>
                <div class="requirements">
                    <div class="item">
                        <h3>Persyaratan Umum</h3>
                        <ul>
                            <li>Mahasiswa harus telah menyelesaikan semua mata kuliah yang diperlukan.</li>
                            <li>Mahasiswa harus memiliki Indeks Prestasi Kumulatif (IPK) minimal 2.5.</li>
                            <li>Mahasiswa harus mengikuti dan lulus ujian komprehensif, bila ada.</li>
                        </ul>
                    </div>
                    <div class="item">
                        <h3>Dokumen yang Diperlukan</h3>
                        <ul>
                            <li>Transkrip nilai yang sudah dilegalisir.</li>
                            <li>Skripsi.</li>
                            <li>Fotokopi Kartu Tanda Mahasiswa (KTM).</li>
                        </ul>
                    </div>
                    <div class="item">
                        <h3>Prosedur Pengajuan</h3>
                        <ul>
                            <li>Mengisi formulir pengajuan yudisium.</li>
                            <li>Mengumpulkan dokumen persyaratan.</li>
                            <li>Memverifikasi dokumen di bagian akademik kampus.</li>
                            <li>Melakukan pembayaran bi1aya administrasi yang dibutuhkan.</li>
                            <li>Menunggu proses verifikasi dan pengumuman hasil.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="container">
            <p>&copy; 2024 Aplikasi Yudisium. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
