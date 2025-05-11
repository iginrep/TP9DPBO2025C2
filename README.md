# TP9DPBO2025C2

# JANJI

Saya Muhammad Igin Adigholib dengan NIM 2301125 mengerjakan Tugas Praktikum 9 dalam mata kuliah Desain dan Pemrograman Berorientasi Objek untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin.

# Desain Program

## Tabel Database: mahasiswa

```sql
CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nim` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tempat` varchar(100) NOT NULL,
  `tl` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telp` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
```

# Alur Program

Program ini menggunakan arsitektur MVP (Model-View-Presenter) untuk mengelola data mahasiswa. Berikut adalah penjelasan detail dari setiap komponen:

1. **Model**:

   - `DB.class.php`: Menangani koneksi dan operasi dasar database MySQL
   - `Mahasiswa.class.php`: Model entitas mahasiswa yang menyimpan atribut seperti NIM, nama, tempat lahir, dll
   - `TabelMahasiswa.class.php`: Mengelola operasi CRUD pada tabel mahasiswa
   - `Template.class.php`: Menangani pemrosesan template tampilan

2. **View**:

   - `KontrakView.php`: Interface yang mendefinisikan kontrak untuk view
   - `TampilMahasiswa.php`: Implementasi tampilan utama yang menampilkan data mahasiswa
   - `skin.html`: Template HTML dengan desain Bootstrap untuk UI

3. **Presenter**:
   - `KontrakPresenter.php`: Interface yang mendefinisikan kontrak untuk presenter
   - `ProsesMahasiswa.php`: Implementasi presenter yang menghubungkan Model dan View

Alur kerja program:

1. User mengakses `index.php` sebagai entry point
2. `index.php` membuat instance `TampilMahasiswa`
3. `TampilMahasiswa` membuat instance `ProsesMahasiswa`
4. `ProsesMahasiswa` menginisialisasi koneksi database dan mengambil data mahasiswa
5. Data ditampilkan menggunakan template Bootstrap
6. User dapat melakukan operasi CRUD:
   - Create: Menambah data mahasiswa baru melalui form modal
   - Read: Melihat data mahasiswa dalam bentuk tabel
   - Update: Mengubah data mahasiswa yang ada melalui form modal
   - Delete: Menghapus data mahasiswa dengan konfirmasi modal

Keunggulan arsitektur MVP yang diimplementasikan:

1. Pemisahan concerns yang jelas:
   - Model: Logika bisnis dan data
   - View: Tampilan dan interaksi user
   - Presenter: Mediator antara Model dan View
2. Kode lebih terstruktur dan mudah di-maintain
3. Implementasi interface memastikan konsistensi
4. Template system memudahkan perubahan tampilan

# Dokumentasi

https://github.com/user-attachments/assets/c238a4d7-b935-4d7b-b20a-96c9602411b8




