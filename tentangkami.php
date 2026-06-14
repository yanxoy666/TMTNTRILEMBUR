<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami - TumbuTani Nusantara</title>
    <link rel="stylesheet" href="css/tentang-kami.css">
</head>
<?php
session_start();
?>
<body class="page-transition">

    <?php include 'komponen/navbar.php'; ?>

    <div class="container">
        <h2 class="section-title animate-on-scroll">Filosofi Perusahaan</h2>
        <div style="text-align:center; max-width: 800px; margin: auto; margin-bottom: 50px;" class="animate-on-scroll">
            <p>Warna hijau pada logo kami melambangkan dedikasi kami pada pelestarian alam dan kesuburan tanah Nusantara, sementara aksen oranye menyimbolkan semangat, inovasi, serta kualitas pedas khas Cabai Domba yang tiada duanya.</p>
        </div>

        <!-- Tangga TumbuTani Section -->
        <section class="tangga-section animate-on-scroll">
            <div class="tangga-wrapper">
                <div class="tangga-title-container">
                    <h1 class="tangga-title">
                        <span class="text-green">TANGGA</span>
                        <span class="text-green-light">Tumbu</span>
                        <span class="text-yellow">TANI</span>
                    </h1>
                </div>

                <div class="staircase">
                    <div class="stair-step step-1" data-step="1">
                        <span class="step-label">Kualitas & Konsistensi.</span>
                        <div class="step-bar">
                            <span class="step-number">1</span>
                        </div>
                    </div>
                    <div class="stair-step step-2" data-step="2">
                        <span class="step-label">Lahan & Infrastruktur.</span>
                        <div class="step-bar">
                            <span class="step-number">2</span>
                        </div>
                    </div>
                    <div class="stair-step step-3" data-step="3">
                        <span class="step-label">Brand & Kualitas.</span>
                        <div class="step-bar">
                            <span class="step-number">3</span>
                        </div>
                    </div>
                    <div class="stair-step step-4" data-step="4">
                        <span class="step-label">Produksi & Distribusi Efisien.</span>
                        <div class="step-bar">
                            <span class="step-number">4</span>
                        </div>
                    </div>
                    <div class="stair-step step-5" data-step="5">
                        <span class="step-label">Ekspansi Pasar & Produk.</span>
                        <div class="step-bar">
                            <span class="step-number">5</span>
                        </div>
                    </div>
                    <div class="stair-step step-6" data-step="6">
                        <span class="step-label">Kemitraan & Komunitas.</span>
                        <div class="step-bar">
                            <span class="step-number">6</span>
                        </div>
                    </div>
                    <div class="stair-step step-7" data-step="7">
                        <span class="step-label">Pangan & Inspirasi.</span>
                        <div class="step-bar">
                            <span class="step-number">7</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="step-explanation-container">
                <div class="step-explanation-card" id="explanation-card">
                    <div class="explanation-icon" id="explanation-icon">🌱</div>
                    <div class="explanation-content">
                        <h3 class="explanation-title" id="explanation-title">Pilih anak tangga untuk penjelasan</h3>
                        <p class="explanation-text" id="explanation-text">Klik salah satu anak tangga di atas untuk melihat detail filosofi dan tahapan bisnis kami.</p>
                    </div>
                </div>
            </div>
        </section>

        <script>
        document.addEventListener('DOMContentLoaded', () => {
            const stepsData = {
                1: {
                    icon: "🌱",
                    title: "Langkah 1: Kualitas & Konsistens",
                    text: "TumbuTani Nusantara berdedikasi tinggi untuk menjaga kualitas terbaik dan konsistensi rasa pedas serta kesegaran dari setiap Cabai Domba yang kami panen. Kami menggunakan bibit unggulan pilihan dan standar pasca-panen ketat guna memastikan kepuasan optimal bagi pelanggan setia kami."
                },
                2: {
                    icon: "🚜",
                    title: "Langkah 2: Lahan & Infrastruktur",
                    text: "Kami terus berinvestasi pada perluasan lahan pertanian modern dan pembangunan infrastruktur kelas dunia. Mulai dari sistem rumah kaca (greenhouse) hingga pengelolaan jaringan irigasi cerdas, kami memastikan tanaman cabai tumbuh dalam kondisi optimal sepanjang musim."
                },
                3: {
                    icon: "🏷️",
                    title: "Langkah 3: Brand & Kualitas",
                    text: "Membangun brand TumbuTani Nusantara sebagai simbol kepercayaan, keberlanjutan, dan kualitas premium di mata masyarakat. Kami berkomitmen untuk selalu menghadirkan produk yang tersertifikasi aman konsumsi dan dikemas secara higienis."
                },
                4: {
                    icon: "⚙️",
                    title: "Langkah 4: Produksi & Distribusi Efisien",
                    text: "Dengan mengadopsi teknologi otomatisasi produksi pertanian dan manajemen rantai pasok pintar, kami berhasil meminimalkan waktu distribusi. Cabai segar dari kebun langsung dikirimkan ke mitra dan pelanggan untuk mempertahankan kesegarannya."
                },
                5: {
                    icon: "📈",
                    title: "Langkah 5: Ekspansi Pasar & Produk",
                    text: "Kami memperluas jangkauan pasar hingga mencakup wilayah nasional, baik ke pasar modern, horeka (hotel, restoran, kafe), maupun pasar industri. Kami juga terus berinovasi dalam memproduksi produk olahan turunan berkualitas tinggi."
                },
                6: {
                    icon: "🤝",
                    title: "Langkah 6: Kemitraan & Komunitas",
                    text: "Pemberdayaan petani lokal adalah inti dari misi sosial kami. Melalui kemitraan yang transparan dan pembinaan berkala, kami membantu meningkatkan keterampilan bertani, membagikan teknologi modern, serta menjamin pembelian hasil panen dengan harga adil."
                },
                7: {
                    icon: "🍽️",
                    title: "Langkah 7: Pangan & Inspirasi",
                    text: "Tujuan tertinggi kami adalah mewujudkan kemandirian pangan nasional serta menjadi inspirasi bagi generasi muda Indonesia untuk bangga bertani. TumbuTani Nusantara membuktikan bahwa pertanian jika dipadukan dengan teknologi dapat menjadi sektor yang modern dan berdaya saing global."
                }
            };

            const steps = document.querySelectorAll('.stair-step');
            const card = document.getElementById('explanation-card');
            const expIcon = document.getElementById('explanation-icon');
            const expTitle = document.getElementById('explanation-title');
            const expText = document.getElementById('explanation-text');

            steps.forEach(step => {
                step.addEventListener('click', () => {
                    const stepNumber = step.getAttribute('data-step');
                    const data = stepsData[stepNumber];

                    if (!data) return;

                    // Remove active class from all steps
                    steps.forEach(s => s.classList.remove('active'));

                    // Add active class to clicked step
                    step.classList.add('active');

                    // Fade out explanation card
                    card.classList.add('fade-out');

                    // Wait for transition, then change content and fade in
                    setTimeout(() => {
                        expIcon.textContent = data.icon;
                        expTitle.textContent = data.title;
                        expText.textContent = data.text;
                        card.classList.remove('fade-out');
                    }, 250);
                });
            });

            // Auto-click first step on load
            if (steps.length > 0) {
                steps[0].click();
            }
        });
        </script>

        <h2 class="section-title animate-on-scroll">Perjalanan Kami</h2>
        <div class="timeline">
            <div class="timeline-item left animate-on-scroll">
                <div class="timeline-content">
                    <h3>2023 - Awal Mula</h3>
                    <p>Didirikan sebagai lahan percobaan kecil untuk mencari varietas Cabai Domba yang paling adaptif.</p>
                </div>
            </div>
            <div class="timeline-item right animate-on-scroll">
                <div class="timeline-content">
                    <h3>2024 - Ekspansi Lahan</h3>
                    <p>Membuka lahan seluas 5 Hektar dan mulai memasok ke pasar tradisional di seluruh provinsi.</p>
                </div>
            </div>
            <div class="timeline-item left animate-on-scroll">
                <div class="timeline-content">
                    <h3>2025 - Teknologi Pintar</h3>
                    <p>Mengintegrasikan sistem IoT untuk kontrol kelembapan dan pupuk cair otomatis.</p>
                </div>
            </div>
            <div class="timeline-item right animate-on-scroll">
                <div class="timeline-content">
                    <h3>2026 - Go Nasional</h3>
                    <p>Membangun pabrik pengolahan turunan cabai (saus & bubuk) dan merangkul 500+ petani mitra.</p>
                </div>
            </div>
        </div>
    </div>

    <?php include 'komponen/footer.php'; ?>
    <script src="js/main.js"></script>
</body>
</html>