<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        @media (max-width: 991.98px) {
            #profileContent {
                margin-top: 10px;
            }
        }

        /* Perubahan warna tombol Edit Profile */
        .profile-actions .btn-primary {
            background-color: #1F4D4E;
            border-color: #1F4D4E;
        }

        .profile-actions .btn-primary:hover {
            background: linear-gradient(45deg, #1F4D4E, #97AEAE);
            border-color: #1F4D4E;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light sticky-top" style="background-color: #1B4445;">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/welcome') }}" style="margin-right: 70px;"><b><span style="color: #FFFFFF">F A R M E D I C</span></b></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup" style="color: #FFFFFF">
            <div class="nav-item dropdown" style="padding: 0 15px;">
                <a class="nav-link d-flex align-items-center" href="#" id="navbarDropdownLayanan" role="button" style="color: #FFFFFF;">
                    Layanan <img src="https://cdn-icons-png.flaticon.com/512/25/25243.png" alt="dropdown icon" style="width: 12px; height: 12px; margin-left: 5px; filter: brightness(0) invert(1);">
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownLayanan" style="background-color: #FFFFFF; border-radius: 8px; padding: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); display: none; transition: opacity 0.5s ease;">
                    <a class="dropdown-item" href="kamuspenyakit" style="color: #1B4445;">Kamus penyakit</a>
                    <a class="dropdown-item" href="#" style="color: #1B4445;">Panduan perawatan</a>
                    <a class="dropdown-item" href="konsultasi" style="color: #1B4445;">Konsultasi online</a>
                    <a class="dropdown-item" href="{{ route('pemesanan') }}" style="color: #1B4445;">Pemesanan vaksin</a>
                </div>
            </div>
            <script>
                const navItem = document.getElementById('navbarDropdownLayanan');
                const dropdownMenu = document.querySelector('.dropdown-menu');

                navItem.addEventListener('mouseover', function() {
                    dropdownMenu.style.display = 'block';
                    dropdownMenu.style.opacity = '1';
                });

                navItem.addEventListener('mouseout', function(event) {
                    if (!dropdownMenu.contains(event.relatedTarget)) {
                        dropdownMenu.style.display = 'none';
                        dropdownMenu.style.opacity = '0';
                    }
                });

                dropdownMenu.addEventListener('mouseover', function() {
                    this.style.display = 'block';
                    this.style.opacity = '1';
                });

                dropdownMenu.addEventListener('mouseout', function() {
                    this.style.display = 'none';
                    this.style.opacity = '0';
                });
            </script>
            <div class="navbar-nav ms-auto " style="color: #FFFFFF">
            <a class="nav-link" href='forum' style="color: #FFFFFF;">Forum</a>
            </div>
            <div class="navbar-nav ms-auto ">
                <a class="nav-link" href="{{ url('/berita') }}" style="color: #FFFFFF;">Artikel</a>
            </div>
            <div class="navbar-nav ms-auto">
                <div class="nav-item dropdown" style="padding: 0 15px;">
                    <a class="nav-link d-flex align-items-center" href="#" id="navbarDropdownTreckmind" role="button" style="color: #FFFFFF;">
                        Treckmind <img src="https://cdn-icons-png.flaticon.com/512/25/25243.png" alt="dropdown icon" style="width: 12px; height: 12px; margin-left: 5px; filter: brightness(0) invert(1);">
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownTreckmind" style="background-color: #FFFFFF; border-radius: 8px; padding: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); display: none; transition: opacity 0.5s ease;">
                        <a class="dropdown-item" href="{{ url('/reminder') }}" style="color: #1B4445;">Reminder</a>
                        <a class="dropdown-item" href="{{ url('/monitoring') }}" style="color: #1B4445;">Monitoring</a>
                        <a class="dropdown-item" href="{{ url('/trackings') }}" style="color: #1B4445;">Tracking</a>
                    </div>
                </div>
                <script>
                    const navItemTreckmind = document.getElementById('navbarDropdownTreckmind');
                    const dropdownMenuTreckmind = document.querySelector('.dropdown-menu[aria-labelledby="navbarDropdownTreckmind"]');

                    navItemTreckmind.addEventListener('mouseover', function() {
                        dropdownMenuTreckmind.style.display = 'block';
                        dropdownMenuTreckmind.style.opacity = '1';
                    });

                    navItemTreckmind.addEventListener('mouseout', function(event) {
                        if (!dropdownMenuTreckmind.contains(event.relatedTarget)) {
                            dropdownMenuTreckmind.style.display = 'none';
                            dropdownMenuTreckmind.style.opacity = '0';
                        }
                    });

                    dropdownMenuTreckmind.addEventListener('mouseover', function() {
                        this.style.display = 'block';
                        this.style.opacity = '1';
                    });

                    dropdownMenuTreckmind.addEventListener('mouseout', function() {
                        this.style.display = 'none';
                        this.style.opacity = '0';
                    }); 
                </script>
            </div>
            <div class="navbar-nav ms-auto ">
                <a class="nav-link" href="" style="color: #FFFFFF;">Kontak</a>
            </div>
            <div class="navbar-nav ms-auto ">
                <a class="nav-link" href='riwayat' style="color: #FFFFFF; margin-right: 20px;">Riwayat User</a>
            </div>

            <div class="navbar-nav ms-auto">
                <form class="d-flex" role="search" style="margin-right: 20px;">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" style="border-radius: 20px;">
                    <a href="{{ route('profile') }}" id="profileBtn"><img src="https://cdn.builder.io/api/v1/image/assets/TEMP/9dc310fced59e51b65a2c12224bba16738b2c8cfaee05abe85598f174a0386bb?apiKey=fbbcae9ed22d4f8d8688a8a771dff213&" alt="profile" style="width : 40px; height: 40px; border-radius: 50%; margin-left: 10px;"></a>
                </form>
            </div>
        </div>
    </div>
</nav>

<!-- End Navbar -->


<script>
    document.getElementById("changeProfileImageButton").addEventListener("click", function() {
        document.getElementById("profileImageInput").click();
    });

    document.getElementById("profileImageInput").addEventListener("change", function(e) {
        var profileImage = document.getElementById("profileImage");
        var file = e.target.files[0];
        var reader = new FileReader();

        reader.onloadend = function() {
            profileImage.src = reader.result;
        }

        if (file) {
            reader.readAsDataURL(file);
        } else {
            profileImage.src = "path_to_default_image";
        }
    });
</script>
</body>
</html>
