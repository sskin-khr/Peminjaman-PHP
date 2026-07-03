<?php
$daftarBarang = [];  
$idBerikutnya = 1;    


while (true) {
    echo "\n=== SISTEM PEMINJAMAN BARANG UPATIK ===\n";
    echo "1. Tambah  2. Lihat  3. Hapus  4. Keluar\n";
    $pilih = readline("Pilih menu: ");


    if ($pilih == "1") {
        $nama = readline("Nama Barang   : ");
        $peminjam = readline("Nama Peminjam : ");


        $barangBaru = [
            "id"       => $idBerikutnya,
            "nama"     => $nama,
            "peminjam" => $peminjam,
            "status"   => "Dipinjam"
        ];
        $daftarBarang[] = $barangBaru;  
        $idBerikutnya++;
        echo "> Barang berhasil ditambahkan!\n";


    } elseif ($pilih == "2") {
        if (count($daftarBarang) == 0) {
            echo "Belum ada barang dipinjam.\n";
        } else {
            $no = 1;
            foreach ($daftarBarang as $b) {
                echo $no . ". [ID: " . $b["id"] . "] " . $b["nama"]
                   . " | " . $b["peminjam"]
                   . " | " . $b["status"] . "\n";
                $no++;
            }
        }


    } elseif ($pilih == "3") {
    $idHapus = (int) readline("Masukkan ID barang yang ingin dihapus: ");

    foreach ($daftarBarang as $index => $b) {
        if ($b["id"] == $idHapus) {
            array_splice($daftarBarang, $index, 1);
            $ditemukan = true;
            echo "> Barang berhasil dihapus!\n";
            break;
            
        } else {
            echo "Error: barang tidak ditemukan!\n";
        }
    }

    } elseif ($pilih == "4") {
        echo "Terima kasih!\n";
        break;
    } else {
        echo "Menu tidak dikenali.\n";
    }
}
