<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Cerita - Dedikasi Malang CMS</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'primary-yellow': '#FFD700'
                    }
                }
            }
        }
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');

        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>

<body class="bg-gray-100">

    <!-- PERBAIKAN BUG LAYOUT: Struktur flex utama untuk mencegah scroll ganda -->
    <div class="flex h-screen">
        <!-- Sidebar -->
        <?php include '../../components/sidebar.php'; ?>

        <!-- Main Content Wrapper (Hanya bagian ini yang bisa scroll) -->
        <div class="flex-1 flex flex-col overflow-y-auto">
            <!-- Header (Dibuat sticky agar tetap terlihat saat scroll) -->
            <header class="bg-white shadow-sm sticky top-0 z-10">
                <div class="px-8 py-6">
                    <h1 class="text-3xl font-bold text-gray-900">Edit Cerita</h1>
                    <p class="mt-1 text-sm text-gray-600">Perbarui konten cerita yang sudah ada di bawah ini.</p>
                </div>
            </header>

            <!-- Content -->
            <main class="flex-1 p-8 bg-gray-50">
                <form action="#" method="POST">
                    <div class="bg-white rounded-lg shadow-md p-8">
                        <div class="space-y-8"> <!-- PERBAIKAN UX: Jarak antar field ditambah -->
                            <!-- Judul -->
                            <div>
                                <label for="judul" class="block text-sm font-medium text-gray-700 mb-1">Judul</label>
                                <!-- PERBAIKAN UX: Konsistensi styling field -->
                                <input type="text" name="judul" id="judul"
                                    class="block w-full rounded-lg border-gray-300 shadow-sm py-2 px-3 focus:border-primary-yellow focus:ring focus:ring-primary-yellow/50 transition duration-150"
                                    value="Mengubah Dunia Melalui Pendidikan">
                            </div>

                            <!-- Rich Text Editor (Placeholder) -->
                            <div>
                                <label for="isi-cerita" class="block text-sm font-medium text-gray-700 mb-1">Isi Cerita</label>
                                <!-- PERBAIKAN UX: Editor disamakan dengan halaman "Tambah Cerita" -->
                                <div class="mt-1 rounded-lg border border-gray-300 shadow-sm overflow-hidden focus-within:border-primary-yellow focus-within:ring-1 focus-within:ring-primary-yellow/50">
                                    <div class="p-2 bg-gray-50 border-b border-gray-300">
                                        <div class="flex items-center space-x-1 text-gray-600">
                                            <button type="button" class="p-2 hover:bg-gray-200 rounded-md"><strong>B</strong></button>
                                            <button type="button" class="p-2 hover:bg-gray-200 rounded-md"><em>I</em></button>
                                            <button type="button" class="p-2 hover:bg-gray-200 rounded-md"><u>U</u></button>
                                        </div>
                                    </div>
                                    <textarea id="isi-cerita" name="isi-cerita" rows="12"
                                        class="block w-full border-0 p-3 focus:ring-0 resize-y">Pendidikan adalah kunci untuk membuka potensi tak terbatas dalam diri setiap anak. Di Dedikasi Malang, kami percaya bahwa dengan memberikan akses pendidikan yang berkualitas, kita tidak hanya mengajarkan mereka membaca dan menulis, tetapi juga memberikan mereka alat untuk membangun masa depan yang lebih cerah bagi diri mereka sendiri dan komunitasnya.</textarea>
                                </div>
                            </div>

                            <!-- Kategori & Status -->
                            <div>
                                <label for="status" class="block text-sm font-medium text-gray-700 mb-1">Status</label>
                                <!-- PERBAIKAN UX: Konsistensi styling field -->
                                <select id="status" name="status"
                                    class="block w-full rounded-lg border-gray-300 shadow-sm py-2 px-3 focus:border-primary-yellow focus:ring focus:ring-primary-yellow/50 transition duration-150">
                                    <option>Draft</option>
                                    <option selected>Publish</option>
                                </select>
                            </div>

                            <!-- Upload Gambar -->
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Gambar Utama</label>
                                <div class="mt-2 flex items-center space-x-6">
                                    <div class="shrink-0">
                                        <!-- PERBAIKAN UX: Konsistensi border radius -->
                                        <img class="h-24 w-24 object-cover rounded-lg" src="https://images.unsplash.com/photo-1542810634-71277d95dcbb?..." alt="Current story photo">
                                    </div>
                                    <label class="block">
                                        <span class="sr-only">Choose photo</span>
                                        <!-- PERBAIKAN UX: Styling tombol file lebih baik -->
                                        <input type="file" class="block w-full text-sm text-gray-500
                                          file:mr-4 file:py-2 file:px-4
                                          file:rounded-full file:border-0
                                          file:text-sm file:font-semibold
                                          file:bg-yellow-100 file:text-yellow-700
                                          hover:file:bg-yellow-200 transition-colors duration-200
                                        " />
                                    </label>
                                </div>
                            </div>
                        </div>

                        <!-- Form Actions (Tidak ada perubahan) -->
                        <div class="border-t border-gray-200 mt-8 pt-6 flex items-center justify-end space-x-3">
                            <a href="../artikel/index.html" class="bg-white py-2 px-5 border border-gray-300 rounded-lg shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50">
                                Batal
                            </a>
                            <button type="submit" class="inline-flex justify-center py-2 px-5 border border-transparent shadow-sm text-sm font-medium rounded-lg text-gray-800 bg-primary-yellow hover:bg-yellow-400">
                                Update Cerita
                            </button>
                        </div>
                    </div>
                </form>
            </main>
        </div>
    </div>
</body>

</html>