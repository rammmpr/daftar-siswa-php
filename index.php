<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Santri Baru | Pondok Pesantren</title>
</head>

<body>
    <header>
        <h3>Pendaftaran Santri Baru</h3>
        <h2>PPIT Al-Madinah</h2>
    </header>

    <h4>Menu</h4>
    <nav>
        <ul>
            <li><a href="form-daftar.php">Daftar Baru</a></li>
            <li><a href="list-siswa.php">Pendaftar</a></li>
        </ul>
    </nav>
    <?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Pendaftaran siswa baru berhasil!";
            } else {
                echo "Pendaftaran gagal!";
            }
        ?>
    </p>
<?php endif; ?>
    </body>
</html>