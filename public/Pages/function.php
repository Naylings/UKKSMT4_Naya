<?php
// tempat menyimpan function

// siapkan koneksi ke database, secara global

$HOSTNAME = "localhost";
$DATABASE = "db_rpl2324";
$USERNAME = "root";
$PASSWORD = "";


$KONEKSI = mysqli_connect($HOSTNAME, $USERNAME, $PASSWORD, $DATABASE);

if (!$KONEKSI) {
    die("ERROR BANG!!...   BACA TUH EROR -->" . mysqli_connect_error($KONEKSI));
}

// membuat fungsi tampil
function tampil($DATA)
{
    global $KONEKSI;

    $HASIL = mysqli_query($KONEKSI, $DATA);
    $row = []; // menyiapkan variable/wadah kosong untuk menyimpan data yang di query/panggil dari database

    while ($row = mysqli_fetch_assoc($HASIL)) {
        $rows[] = $row; // kita masukkan datanya disini

    }
    return $rows; // kita kembalikan/munculkan nilai
}

//function tambah
function tambah_crud($DATA)
{
    global $KONEKSI;

    $NAMA = $_POST["Nama"];
    $KELAS = $_POST["Kelas"];
    $ALAMAT = $_POST["Alamat"];
    $JURUSAN = $_POST["Jurusan"];

    // echo $NAMA . " | " . $KELAS . " | " . $ALAMAT . " | " . $JURUSAN;

    $SQL = "INSERT INTO tbl_foreach SET 
        nama='$NAMA',
        kelas='$KELAS',
        alamat='$ALAMAT',
        jurusan='$JURUSAN'";

    mysqli_query($KONEKSI, $SQL) or die("ERROR BANG!!...   BACA TUH EROR -->" . mysqli_connect_error($KONEKSI));
    echo ("Data Berhasil Di Simpan");
}

function tambah_inn($DATA)
{
    global $KONEKSI;

    // Ambil data dari form
    $NIS = $_POST["Nis"];
    $JENKEL = $_POST["Jenkel"];
    $NAMA = $_POST["Nama"];
    $STATUS = $_POST["Status"];
    $ALAMAT = $_POST["Alamat"];
    $JURUSAN = $_POST["Jurusan"];

    // Pengecekan apakah ada data yang kosong
    if (empty($NIS) || empty($NAMA) || empty($JURUSAN) || empty($JENKEL) || empty($STATUS) || empty($ALAMAT)) {
?>
        <div class="alert alert-danger alert-dismissible text-bg-danger border-0 fade show" role="alert">
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
            <strong>Error - </strong> Pastikan Semua Data Terisi!!!
        </div>
        <?php
    } else {
        // SQL Query untuk menambahkan data ke dalam database
        $SQL = "INSERT INTO tbl_siswa SET 
            nama='$NAMA',
            kode_status='$STATUS',
            nis='$NIS',
            jenkel='$JENKEL',
            alamat='$ALAMAT',
            kode_jurusan='$JURUSAN'";

        // Eksekusi query dan cek apakah berhasil
        if (mysqli_query($KONEKSI, $SQL)) {
        ?>
            <div class="alert alert-success  text-bg-success border-0 " role="alert">
                <strong>Success - </strong> Data Anda Telah Di Tambah
            </div>
            <meta http-equiv="refresh" content="1; url=index.php?pages=pts_ganjil">
        <?php
        } else {
        ?>
            <div class="alert alert-danger alert-dismissible text-bg-danger border-0 fade show" role="alert">
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                <strong>Error - </strong> Data Tidak Berhasil Diisi!!!
            </div>
        <?php
        }
    }
}


function tambah_pts($DATA)
{
    global $KONEKSI;

    $NAMA = $_POST["Name"];
    $ALAMAT = $_POST["Alamat"];
    $TELEPON = $_POST["Telepon"];
    $UNIT = $_POST["Unit"];
    $TYPE = $_POST["Type"];
    $LAMA = $_POST["Lama"];
    $PERIODE = $_POST["Periode"];

    // echo $NAMA . " | " . $STATUS . " | " . $ALAMAT . " | " . $JURUSAN. " | " . $JENKEL. " | " . $NIS;

    if (empty($NAMA) || empty($ALAMAT) || empty($TELEPON) || empty($UNIT) || empty($TYPE) || empty($LAMA) || empty($PERIODE)) {
        ?>
        <div class="alert alert-danger alert-dismissible text-bg-danger border-0 fade show" role="alert">
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
            <strong>Error - </strong> Pastikan Semua Data Terisi!!!
        </div>
        <?php
    } else {

        $SQL = "INSERT INTO tbl_pelanggan SET 
        nama_pelanggan='$NAMA',
        alamat_pelanggan='$ALAMAT',
        telepon_pelanggan='$TELEPON',
        id_ruangan='$UNIT',
        id_type='$TYPE',
        lama_sewa='$LAMA',
        periode_sewa='$PERIODE'";

        $SQL_UPDATE = "UPDATE tbl_ruangan SET tbl_ruangan.status='1' WHERE id_ruangan = $UNIT";

        if (mysqli_query($KONEKSI, $SQL) && mysqli_query($KONEKSI, $SQL_UPDATE)) {
        ?>
            <div class="alert alert-success  text-bg-success border-0 " role="alert">
                <strong>Success - </strong> Data Anda Telah Di Tambah
            </div>
            <meta http-equiv="refresh" content="1; url=index.php?pages=pts_ganjil">
        <?php
        } else {
        ?>
            <div class="alert alert-danger alert-dismissible text-bg-danger border-0 fade show" role="alert">
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                <strong>Error - </strong> Data Tidak Berhasil Diisi!!!
            </div>
        <?php
        }
    }
}

// function edit

function edit_crud($DATA)
{
    global $KONEKSI;

    $ID = $_POST['Id_siswa'];
    $NAMA = $_POST["Nama"];
    $KELAS = $_POST["Kelas"];
    $ALAMAT = $_POST["Alamat"];
    $JURUSAN = $_POST["Jurusan"];

    $RUBAH = "UPDATE tbl_foreach SET 
    nama='$NAMA',
    kelas='$KELAS',
    alamat='$ALAMAT',
    jurusan='$JURUSAN' 
    WHERE id=$ID";

    mysqli_query($KONEKSI, $RUBAH) or die("ERROR BANG!!...   BACA TUH EROR -->" . mysqli_connect_error($KONEKSI));

    return mysqli_affected_rows($KONEKSI);
}

function edit_inn($DATA)
{
    global $KONEKSI;

    $ID = mysqli_real_escape_string($KONEKSI, $_POST['Id_siswa']);
    $NIS = mysqli_real_escape_string($KONEKSI, $_POST["Nis"]);
    $JENKEL = mysqli_real_escape_string($KONEKSI, $_POST["Jenkel"]);
    $NAMA = mysqli_real_escape_string($KONEKSI, $_POST["Nama"]);
    $STATUS = mysqli_real_escape_string($KONEKSI, $_POST["Status"]);
    $ALAMAT = mysqli_real_escape_string($KONEKSI, $_POST["Alamat"]);
    $JURUSAN = mysqli_real_escape_string($KONEKSI, $_POST["Jurusan"]);

    if ($ID == "" || $NIS == "" || $JENKEL == "" || $NAMA == "" || $STATUS == "" || $ALAMAT == "" || $JURUSAN == "") {
        ?>
        <!-- Warning Alert Modal -->
        <div class="alert alert-danger alert-dismissible text-bg-danger border-0 fade show" role="alert">
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
            <strong>Error - </strong> Pastikan Semua Data Terisi!!!
        </div>
    <?php
    } else {
        $QUERY = mysqli_query($KONEKSI, "UPDATE tbl_siswa SET 
        nama='$NAMA',
        kode_status='$STATUS',
        nis='$NIS',
        jenkel='$JENKEL',
        alamat='$ALAMAT',
        kode_jurusan='$JURUSAN'
        WHERE id_siswa=$ID");
    ?>

        <div class="alert alert-success  text-bg-success border-0 " role="alert">
            <strong>Success - </strong> Data Anda Telah Di Ubah
        </div>
        <meta http-equiv="refresh" content="1; url=index.php?pages=crud_inn">
    <?php
    }

    return mysqli_affected_rows($KONEKSI);
}

function edit_pts($DATA)
{
    global $KONEKSI;

    $ID = mysqli_real_escape_string($KONEKSI, $_POST["Id_pelanggan"]);
    $UNIT = mysqli_real_escape_string($KONEKSI, $_POST["Unit_awal"]);
    $NAMA = mysqli_real_escape_string($KONEKSI, $_POST["Name"]);
    $ALAMAT = mysqli_real_escape_string($KONEKSI, $_POST["Alamat"]);
    $TELEPON = mysqli_real_escape_string($KONEKSI, $_POST["Telepon"]);
    $UNIT_NEW = mysqli_real_escape_string($KONEKSI, $_POST["Unit"]);
    $TYPE = mysqli_real_escape_string($KONEKSI, $_POST["Type"]);
    $LAMA = mysqli_real_escape_string($KONEKSI, $_POST["Lama"]);
    $PERIODE = mysqli_real_escape_string($KONEKSI, $_POST["Periode"]);

    if ($ID == "" || $NAMA == "" || $ALAMAT == "" || $TELEPON == "" || $UNIT_NEW == "" || $TYPE == "" || $LAMA == "" || $PERIODE == "") {
    ?>
        <div class="alert alert-danger alert-dismissible text-bg-danger border-0 fade show" role="alert">
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
            <strong>Error - </strong> Pastikan Semua Data Terisi!!!
        </div>
    <?php
    } else {
        $QUERY = mysqli_query($KONEKSI, "UPDATE tbl_pelanggan SET 
    nama_pelanggan='$NAMA',
    alamat_pelanggan='$ALAMAT',
    telepon_pelanggan='$TELEPON',
    id_ruangan='$UNIT_NEW',
    id_type='$TYPE',
    lama_sewa='$LAMA',
    periode_sewa='$PERIODE'
    WHERE id_pelanggan=$ID");

        $ROOM_EMPTY = mysqli_query($KONEKSI, "UPDATE tbl_ruangan SET tbl_ruangan.status='0' WHERE id_ruangan = $UNIT");
        $ROOM_OCCUPYING = mysqli_query($KONEKSI, "UPDATE tbl_ruangan SET tbl_ruangan.status='1' WHERE id_ruangan = $UNIT_NEW");

    ?>

        <div class="alert alert-success  text-bg-success border-0 " role="alert">
            <strong>Success - </strong> Data Anda Telah Di Ubah
        </div>
        <meta http-equiv="refresh" content="1; url=index.php?pages=pts_ganjil">

<?php
    }

    return mysqli_affected_rows($KONEKSI);
}
// function hapus

function hapus_crud()
{
    global $KONEKSI;

    $ID = $_GET['id_siswa'];
    $HAPUS = "DELETE FROM tbl_foreach WHERE id='$ID'";
    mysqli_query($KONEKSI, $HAPUS) or die("ERROR BANG!!...   BACA TUH EROR -->" . mysqli_connect_error($KONEKSI));
}

function hapus_inn()
{
    global $KONEKSI;

    $ID = $_GET['id_siswa'];
    $HAPUS = "DELETE FROM tbl_siswa WHERE id_siswa='$ID'";
    mysqli_query($KONEKSI, $HAPUS) or die("ERROR BANG!!...   BACA TUH EROR -->" . mysqli_error($KONEKSI));
}

function hapus_pts()
{
    global $KONEKSI;

    $ID = $_GET['id_pelanggan'];
    $RUANG = $_GET['id_ruang'];
    $HAPUS = "DELETE FROM tbl_pelanggan WHERE id_pelanggan='$ID'";

    $SQL_REMOVE = "UPDATE tbl_ruangan SET tbl_ruangan.status='0' WHERE id_ruangan = $RUANG";
    mysqli_query($KONEKSI, $SQL_REMOVE) or die("ERROR BANG!!...   BACA TUH EROR -->" . mysqli_error($KONEKSI));
    mysqli_query($KONEKSI, $HAPUS) or die("ERROR BANG!!...   BACA TUH EROR -->" . mysqli_error($KONEKSI));
}
