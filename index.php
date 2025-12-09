<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curriculum Vitae</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg cv-navbar">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <i class="fas fa-user-circle me-2"></i>Rafly Bagus Ardiansyah
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#" data-section="about">
                            <i class="fas fa-user me-1"></i> Tentang Saya
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-section="education">
                            <i class="fas fa-graduation-cap me-1"></i> Pendidikan
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-section="projects">
                            <i class="fas fa-code me-1"></i> Proyek
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="artikel.php">
                            <i class="fas fa-newspaper me-1"></i> Artikel
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-section="contact">
                            <i class="fas fa-envelope me-1"></i> Kontak
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Floating Button -->
    <a href="#" class="floating-btn" id="backToTop">
        <i class="fas fa-arrow-up"></i>
    </a>

    <div class="cv-container">
        <!-- Header Section -->
        <header class="header text-center text-md-start">
            <div class="row align-items-center">
                <div class="col-md-3 mb-4 mb-md-0 text-center">
                    <img src="WhatsApp Image 2024-10-28 at 20.14.54_05f336b7.png" alt="Profile Photo" class="profile-img">
                </div>
                <div class="col-md-9">
                    <h1 class="display-4 fw-bold mb-2">Rafly Bagus Ardiansyah</h1>
                    <p class="lead mb-3">SISWA RPL</p>
                    <p class="mb-0">Saya adalah seorang siswa SMKN 1 BAWANG yang memiliki minat dalam teknologi dan desain web. Saya bersemangat untuk belajar dan mengembangkan keterampilan saya di bidang ini.</p>
                </div>
            </div>
        </header>

        <!-- Main Content -->
        <div class="row">
            <div class="col-12">
                <!-- About Me Section -->
                <section id="about" class="content-section active">
                    <h2 class="section-title">Tentang Saya</h2>
                    <p class="mb-4">Aku Adalah Seorang Anak RPL Mahasiswa RPL bukan hanya sekadar menulis kode, tapi juga merancang solusi.</p>
                    
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <p> Di balik setiap baris program yang dibuat, ada kerja keras dan semangat yang tak pernah padam Mereka belajar menghadapi error, bukan sebagai hambatan, tetapi sebagai tantangan untuk terus berkembang Bagi anak RPL, setiap proyek adalah kesempatan untuk menciptakan sesuatu yang bermanfaat dan berinovasi demi masa depan teknologi</p>
                            <p>Selain pengembangan web, saya juga memiliki minat dalam desain UI/UX yang membuat saya dapat menciptakan produk digital yang tidak hanya berfungsi dengan baik tetapi juga memberikan pengalaman pengguna yang menyenangkan.</p>
                        </div>
                        <div class="col-md-6">
                            <div class="card border-0 shadow-sm">
                                <div class="card-body">
                                    <h5 class="card-title text-gradient">Informasi Pribadi</h5>
                                    <div class="row mt-3">
                                        <div class="col-sm-6">
                                            <p class="mb-2"><strong>Umur:</strong> 17 tahun</p>
                                            <p class="mb-2"><strong>Lokasi:</strong> BANJARNEGARA, Indonesia</p>
                                        </div>
                                        <div class="col-sm-6">
                                            <p class="mb-2"><strong></strong></p>
                                            <p class="mb-0"><strong>Email:</strong> raflyybagus@gmail.com</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <h3 class="mb-3 text-gradient">Keahlian</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="skill-item">
                                <div class="skill-name">
                                    <span>HTML/CSS</span>
                                    <span class="skill-percent">75%</span>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            
                                
                        
                            <div class="skill-item">
                                <div class="skill-name">
                                    <span>UI/UX Design</span>
                                    <span class="skill-percent">90%</span>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Education Section -->
                <section id="education" class="content-section">
                    <h2 class="section-title">Pendidikan</h2>
                    <div class="timeline">
                        <div class="timeline-item">
                            <h4>SD</h4>
                            <h5 class="text-gradient">SDN 1 Pucang</h5>
                            <p class="text-muted mb-2">2015 - 2021</p>
                            <p class="mb-1"></p>
                            <p class="mb-0"></p>
                        </div>
                        <div class="timeline-item">
                            <h4>MTS Negeri 1 Banjarnegara</h4>
                            <h5 class="text-gradient"></h5>
                            <p class="text-muted mb-2">2021 - 2024</p>
                            <p class="mb-0"></p>
                        </div>
                        <div class="timeline-item">
                            <h4>SMK NEGERI 1 BAWANG</h4>
                            <p class="text-muted mb-0">JURUSAN RPL</p>
                            <p class="text-muted mb-0">2024 - 2027</p>
                        </div>
                    </div>
                </section>

                

                <!-- Projects Section -->
                <section id="projects" class="content-section">
                    <h2 class="section-title">Proyek</h2>
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <div class="project-card card">
                                <img src="pr1.png" class="card-img-top" alt="Project 1">
                                <div class="card-body">
                                    <h5 class="card-title">Desain UI/UX </h5>
                                    <p class="card-text">"Membangun desain UI/UX yang lengkap dan interaktif untuk website Serulingmas menggunakan Figma. Fitur termasuk prototipe halaman beranda, katalog produk, keranjang belanja, proses checkout, dan manajemen admin, yang siap untuk diserahkan ke tim pengembang.".</p>
                                    <div class="d-flex flex-wrap">
                                        <span class="badge bg-primary me-2 mb-2"></span>
                                        <span class="badge bg-primary me-2 mb-2">Figma</span>
                                        <span class="badge bg-primary me-2 mb-2"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="project-card card">
                                <img src="p2.png" class="card-img-top" alt="Project 2">
                                <div class="card-body">
                                    <h5 class="card-title">Uji Coba Membuat Web</h5>
                                    <p class="card-text">Mendesain dan mengembangkan website yang responsif dan modern dengan fitur portfolio, dan form kontak.</p>
                                    <div class="d-flex flex-wrap">
                                        <span class="badge bg-primary me-2 mb-2">HTML/CSS</span>
                                        <span class="badge bg-primary me-2 mb-2">JavaScript</span>
                                        <span class="badge bg-primary me-2 mb-2"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="project-card card">
                                <img src="p.jpg" class="card-img-top" alt="Project 3">
                                <div class="card-body">
                                    <h5 class="card-title">Rancangan Aplikasi Kas Kelas</h5>
                                    <p class="card-text">Aplikasi Kas Kelas menggunakan Figma, fitur termasuk dashboard keuangan, pencatatan pemasukan dan pengeluaran, laporan keuangan otomatis, serta manajemen anggota kelas.</p>
                                    <div class="d-flex flex-wrap">
                                        <span class="badge bg-primary me-2 mb-2">Figma</span>
                                        <span class="badge bg-primary me-2 mb-2"></span>
                                        <span class="badge bg-primary me-2 mb-2"></span>
                                    </div>
                                </div>
                            </div>
                        
                </section>

                <!-- Contact Section -->
                <section id="contact" class="content-section">
                    <h2 class="section-title">Kontak</h2>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="contact-info">
                                <div class="contact-icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div>
                                    <h5 class="mb-0">Lokasi</h5>
                                    <p class="text-muted mb-0">Banjarnegara, Indonesia</p>
                                </div>
                            </div>
                            <div class="contact-info">
                                <div class="contact-icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div>
                                    <h5 class="mb-0">Email</h5>
                                    <p class="text-muted mb-0">raflyybagus@gmail.com</p>
                                </div>
                            </div>
                            <div class="contact-info">
                                <div class="contact-icon">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div>
                                    <h5 class="mb-0">Telepon</h5>
                                    <p class="text-muted mb-0">+62 85647738694</p>
                                </div>
                            </div>
                            
                            <div class="social-links mt-4">
                                <a href="https://github.com/RafSkyMahal" target="_blank" title="GitHub"><i class="fab fa-github"></i></a>
                                <a href="https://www.instagram.com/rflyardnsyh___?igsh=bHJpeHVhNG90a3Nn" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <form id="contactForm" class="mt-4 mt-md-0">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Nama Lengkap</label>
                                    <input type="text" class="form-control" id="name" required>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Alamat Email</label>
                                    <input type="email" class="form-control" id="email" required>
                                </div>
                                <div class="mb-3">
                                    <label for="subject" class="form-label">Subjek</label>
                                    <input type="text" class="form-control" id="subject" required>
                                </div>
                                <div class="mb-3">
                                    <label for="message" class="form-label">Pesan</label>
                                    <textarea class="form-control" id="message" rows="4" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary w-100">
                                    <i class="fas fa-paper-plane me-2"></i> Kirim Pesan
                                </button>
                            </form>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

    <!-- Bootstrap & jQuery JS -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Custom JS -->
    <script>
        $(document).ready(function() {
            // Navigation functionality
            $('.nav-link[data-section]').click(function(e) {
                e.preventDefault();
                
                // Remove active class from all links
                $('.nav-link').removeClass('active');
                
                // Add active class to clicked link
                $(this).addClass('active');
                
                // Get the target section
                var targetSection = $(this).data('section');
                
                // Hide all sections
                $('.content-section').removeClass('active');
                
                // Show the target section
                $('#' + targetSection).addClass('active');
                
                // Scroll to the top of the content
                $('html, body').animate({
                    scrollTop: $('.cv-container').offset().top - 70
                }, 500);
            });
            
            // Back to top button
            $(window).scroll(function() {
                if ($(this).scrollTop() > 200) {
                    $('#backToTop').fadeIn();
                } else {
                    $('#backToTop').fadeOut();
                }
            });
            
            $('#backToTop').click(function(e) {
                e.preventDefault();
                $('html, body').animate({scrollTop: 0}, 800);
                return false;
            });
            
            // Animate progress bars on scroll
            $(window).scroll(function() {
                $('.progress-bar').each(function() {
                    var position = $(this).offset().top;
                    var scroll = $(window).scrollTop();
                    var windowHeight = $(window).height();
                    
                    if (scroll > position - windowHeight + 100) {
                        $(this).css('width', $(this).attr('aria-valuenow') + '%');
                    }
                });
            });
            
            // Contact form submission
            $('#contactForm').submit(function(e) {
                e.preventDefault();
                alert('Pesan Anda telah dikirim! Terima kasih telah menghubungi saya.');
                $('#contactForm')[0].reset();
            });
        });
    </script>
</body>
</html>