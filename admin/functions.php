<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "booking_hotels");

// ini_set('display_errors', 1);
// error_reporting(E_ALL);


// if ($conn->connect_error) {
//     // Jika koneksi gagal, hentikan eksekusi dan tampilkan pesan error
//     die("Koneksi gagal: " . $conn->connect_error);
// }
function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data) {
    global $conn;

    $room_name = $data['room_name'];
    $description = htmlspecialchars($data['description']);
    $price_per_night = htmlspecialchars($data['price_per_night']);
    $max_guest = htmlspecialchars($data['max_guest']);
    $bed_type = htmlspecialchars($data['bed_type']);
    $status = htmlspecialchars($data['status']);
    $room_type = htmlspecialchars($data['room_type']);
    
    
    // upload gambar
    $image_url = upload();
    if( !$image_url ) {
        return false;
    }

    $query = "INSERT INTO room 
        (room_id, room_name, description, price_per_night, max_guest, bed_type, image_url, status, room_type)
        VALUES 
        (NULL, '$room_name', '$description', '$price_per_night', '$max_guest', '$bed_type', '$image_url', '$status', '$room_type')
    ";

    mysqli_query($conn, $query) or die(mysqli_error($conn));


    return mysqli_affected_rows($conn);
}

function upload() {
    $nameFile = $_FILES['image_url']['name'];
    $sizeFile = $_FILES['image_url']['size'];
    $error = $_FILES['image_url']['error'];
    $tmpName = $_FILES['image_url']['tmp_name'];
    // cek apakah tidak ada gambar yang diupload
    if( $error === 4 ) {
        echo "<script>
                alert('Pilih gambar terlebih dahulu!');
              </script>";
        return false;
    }

    // cek apakah yang diupload adalah gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $nameFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if( !in_array($ekstensiGambar, $ekstensiGambarValid) ) {
        echo "<script>
                alert('Yang anda upload bukan gambar!');
              </script>";
        return false;
    }

    // cek jika ukurannya terlalu besar
    if( $sizeFile > 1000000 ) {
        echo "<script>
                alert('Ukuran gambar terlalu besar!');
              </script>";
        return false;
    }

    // lolos pengecekan, gambar siap diupload
    // generate nama gambar baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;
    move_uploaded_file($tmpName, '../../img/room_hotel/' . $namaFileBaru);

    return $namaFileBaru;
    
}

function update($data) {
    global $conn;

    $room_name = $data['room_name'];
    $description = htmlspecialchars($data['description']);
    $price_per_night = htmlspecialchars($data['price_per_night']);
    $max_guest = htmlspecialchars($data['max_guest']);
    $bed_type = htmlspecialchars($data['bed_type']);
    $status = htmlspecialchars($data['status']);
    $room_type = htmlspecialchars($data['room_type']);
    
    
    // upload gambar
    $image_url = upload();
    if( !$image_url ) {
        return false;
    }

    $query = "UPDATE room SET
        room_id = $data[room_id],
        room_name = '$room_name',
        description = '$description',
        price_per_night = '$price_per_night',
        max_guest = '$max_guest',
        bed_type = '$bed_type',
        image_url = '$image_url',
        status = '$status',
        room_type = '$room_type'
        WHERE room_id = $data[room_id]
    ";

    mysqli_query($conn, $query) or die(mysqli_error($conn));


    return mysqli_affected_rows($conn);
}

function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM room WHERE room_id = $id") or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}

function register($data) {
    global $conn;

    $first_name = strtolower(stripslashes($data['first_name']));
    $last_name = strtolower(stripslashes($data['last_name']));
    $email = strtolower(stripslashes($data['email']));
    $password = mysqli_real_escape_string($conn, $data['password']);
    $role = htmlspecialchars($data['role']);
    $location = htmlspecialchars($data['location']);
    $date_of_birth = htmlspecialchars($data['date_of_birth']);
    $phone_number = htmlspecialchars($data['phone_number']);

    // cek email sudah ada atau belum
    $result = mysqli_query($conn, "SELECT email FROM users WHERE email = '$email'");
    if( mysqli_fetch_assoc($result) ) {
        echo "<script>
                alert('Email sudah terdaftar!');
              </script>";
        return false;
    }

    // enkripsi password
    // $password = password_hash($password, PASSWORD_DEFAULT);

    // tambahkan user baru ke database
    mysqli_query($conn, "INSERT INTO users VALUES (NULL, '$email', '$password', '$first_name', '$last_name', '$phone_number', '$date_of_birth', '$location', '$role')");

    return mysqli_affected_rows($conn);
}   

function login($data) {
    global $conn;

    $email = $data["email"];
    $password = $data["password"];
    // $_SESSION["email"] = $email;

    $result = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'");
    // $_SESSION['user_id'] = mysqli_fetch_assoc($result)['user_id'];

    // cek email
    if(mysqli_num_rows($result) === 1) {
        // cek password
        $row = mysqli_fetch_assoc($result);
        if($password == $row["password"]) {
            // set session
            $_SESSION['user_id'] = $row['user_id'];
            $_SESSION['role'] = $row['role'];
            if( $row["role"] == "admin" ) {
                header("Location: admin/admin_room_management.php");
                exit;
            }else {
                header("Location: user_dashboard.php");
                exit;
            }
        }
    }

    echo "<script>
            alert('Email atau password salah!');
          </script>";
    return false;
}

function hitungTotalHarga($data) {
    global $conn;

    $room_id = $data['room_id'];
    $check_in = $data['check_in_date'];
    $check_out = $data['check_out_date'];
    $num_guests = $data['num_guests'];

    // Ambil harga per malam dari database
    $result = mysqli_query($conn, "SELECT price_per_night FROM room WHERE room_id = $room_id");
    $row = mysqli_fetch_assoc($result);
    $price_per_night = $row['price_per_night'];

    // Hitung jumlah malam
    $date1 = new DateTime($check_in);
    $date2 = new DateTime($check_out);
    $interval = $date1->diff($date2);
    $nights = $interval->days;

    // Hitung total harga
    $subtotal = $price_per_night * $nights;
    $service_fee = 5000; // Biaya layanan tetap
    $taxes = 0.10 * $subtotal; // Pajak 10%
    $total = $subtotal + $service_fee + $taxes;

    return $total;
}

function booking($data) {
    global $conn;

    $room_id = $data['room_id'];
    $user_id = $_SESSION['user_id'];
    $check_in_date = $data['check_in_date'];
    $check_out_date = $data['check_out_date'];
    $num_guests = $data['num_guests'];

    // Ambil harga per malam dari database
    $result = mysqli_query($conn, "SELECT price_per_night FROM room WHERE room_id = $room_id");
    $row = mysqli_fetch_assoc($result);
    $price_per_night = $row['price_per_night'];

    //cek apakah kamar tersedia pada tanggal yang dipilih
    $checkAvailabilityQuery = "SELECT * FROM booking WHERE room_id = '$room_id' AND 
        (('$check_in_date' BETWEEN check_in_date AND check_out_date) OR
        ('$check_out_date' BETWEEN check_in_date AND check_out_date) OR
        (check_in_date BETWEEN '$check_in_date' AND '$check_out_date') OR
        (check_out_date BETWEEN '$check_in_date' AND '$check_out_date')) AND
        booking_status = 'confirmed'";
    $availabilityResult = mysqli_query($conn, $checkAvailabilityQuery);
    if (mysqli_num_rows($availabilityResult) > 0) {
        echo "<script>
                alert('Kamar tidak tersedia pada tanggal yang dipilih!');
              </script>";
        return false;
    }

    // Hitung jumlah malam
    $date1 = new DateTime($check_in_date);
    $date2 = new DateTime($check_out_date);
    $interval = $date1->diff($date2);
    $nights = $interval->days;

    // Hitung total harga
    $subtotal = $price_per_night * $nights;
    $service_fee = 5000; // Biaya layanan tetap
    $taxes = 0.10 * $subtotal; // Pajak 10%
    $total = $subtotal + $service_fee + $taxes;

    echo "<script>
                alert('Total harga booking: Rp. $total');
        </script>";

    $query = "INSERT INTO booking 
        (booking_id, room_id, user_id, check_in_date, check_out_date, num_guests, total_price, booking_status)
        VALUES 
        (NULL, '$room_id', '$user_id', '$check_in_date', '$check_out_date', '$num_guests', '$total', 'confirmed')
    ";

    mysqli_query($conn, $query) or die(mysqli_error($conn));

    // ubah status room menjadi unavailable saat interval booking
    $updateRoomStatusQuery = "UPDATE room SET status = 'unavailable' WHERE room_id = '$room_id'";
    mysqli_query($conn, $updateRoomStatusQuery) or die(mysqli_error($conn)); 


    return mysqli_affected_rows($conn);
}


?>