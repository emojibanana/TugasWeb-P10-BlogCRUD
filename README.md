# TugasWeb-P10-BlogCRUD

Aplikasi blog sederhana berbasis Laravel untuk memenuhi tugas CRUD dengan fitur lengkap: validasi form, flash message, Blade components, dan pagination.

## Kriteria yang Terpenuhi

Semua syarat wajib (8/8) sudah diimplementasikan:

- Route::resource('posts') + named routes
- PostController resource dengan 7 method (index, create, store, show, edit, update, destroy)
- Blade layout master + @extends/@yield
- Minimal 2 components (Alert, Card)
- Validasi + error per field + old input
- Flash message sukses/gagal
- @csrf semua form + @method PUT/DELETE
- Route Model Binding + pagination

Fitur bonus (search, soft delete, upload gambar): belum diimplementasikan.

## Panduan Menjalankan

1. Pastikan PHP dan Composer terinstall
2. Salin file environment:
   ```
   cp .env.example .env
   ```
3. Install dependency:
   ```
   composer install
   ```
4. Generate application key:
   ```
   php artisan key:generate
   ```
5. Jalankan migrasi database:
   ```
   php artisan migrate
   ```
6. Jalankan server lokal:
   ```
   php artisan serve
   ```
7. Buka browser ke http://localhost:8000

## Struktur Folder

```
app/
  Http/Controllers/PostController.php  - Controller resource dengan 7 method CRUD
  Models/Post.php                      - Model Eloquent untuk tabel posts

database/
  migrations/                          - File migrasi tabel posts (title, body, timestamps)

resources/views/
  layouts/app.blade.php                - Master layout dengan @yield('content')
  posts/                               - View index, create, edit, show
  components/alert.blade.php           - Komponen reusable untuk flash message
  components/card.blade.php            - Komponen reusable untuk container post

routes/
  web.php                              - Definisi Route::resource('posts')
```
