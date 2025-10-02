<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Cerita - Dedikasi Malang CMS</title>
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
            <header class="bg-primary-yellow shadow-sm sticky top-0 z-10">
                <div class="px-8 py-6">
                    <h1 class="text-3xl font-bold text-gray-900">Tambah Cerita Baru</h1>
                    <p class="mt-1 text-sm text-gray-600">Buat dan bagikan cerita inspiratif kepada audiens Anda.</p>
                </div>
            </header>

            <!-- Content -->
            <main class="flex-1 p-8 bg-gray-50">
                <form action="#" method="POST">
                    <div class="bg-white rounded-lg shadow-md p-8">
                        <div class="space-y-8"> <!-- PERBAIKAN UX: Menambah jarak antar field -->
                            <!-- Judul -->
                            <div>
                                <label for="judul" class="block text-sm font-medium text-gray-700 mb-1">Judul</label>
                                <!-- PERBAIKAN UX: Konsistensi styling field -->
                                <input type="text" name="judul" id="judul"
                                    class="block w-full rounded-lg border-gray-300 shadow-sm py-2 px-3 focus:border-primary-yellow focus:ring focus:ring-primary-yellow/50 transition duration-150"
                                    placeholder="Ketik judul cerita di sini...">
                            </div>

                            <!-- Rich Text Editor (Placeholder) -->
                            <div>
                                <label for="isi-cerita" class="block text-sm font-medium text-gray-700 mb-1">Isi Cerita</label>
                                <!-- PERBAIKAN UX: Styling lebih baik untuk editor -->
                                <div class="mt-1 rounded-lg border border-gray-300 shadow-sm overflow-hidden focus-within:border-primary-yellow focus-within:ring-1 focus-within:ring-primary-yellow/50">
                                    <div class="p-2 bg-gray-50 border-b border-gray-300">
                                        <div class="flex items-center space-x-1 text-gray-600">
                                            <button type="button" class="p-2 hover:bg-gray-200 rounded-md"><strong>B</strong></button>
                                            <button type="button" class="p-2 hover:bg-gray-200 rounded-md"><em>I</em></button>
                                            <button type="button" class="p-2 hover:bg-gray-200 rounded-md"><u>U</u></button>
                                        </div>
                                    </div>
                                    <textarea id="isi-cerita" name="isi-cerita" rows="12"
                                        class="block w-full border-0 p-3 focus:ring-0 resize-y"
                                        placeholder="Mulai tulis ceritamu di sini..."></textarea>
                                </div>
                                <p class="mt-2 text-sm text-gray-500">Styling dasar tersedia. Anda dapat menambahkan gambar langsung di dalam teks.</p>
                            </div>

                            <!-- Status -->
                            <div>
                                <label for="status" class="block text-sm font-medium text-gray-700 mb-1">Status</label>
                                <!-- PERBAIKAN UX: Konsistensi styling field -->
                                <select id="status" name="status"
                                    class="block w-full rounded-lg border-gray-300 shadow-sm py-2 px-3 focus:border-primary-yellow focus:ring focus:ring-primary-yellow/50 transition duration-150">
                                    <option value="draft">Draft</option>
                                    <option value="publish">Publish</option>
                                </select>
                            </div>
                        </div>

                        <!-- Upload Gambar -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Gambar Utama</label>
                            <!-- PERBAIKAN UX: Menambahkan transisi pada hover -->
                            <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-lg hover:border-primary-yellow transition-colors duration-200">
                                <div class="space-y-1 text-center">
                                    <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                        <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <div class="flex text-sm text-gray-600"><label for="file-upload" class="relative cursor-pointer bg-white rounded-md font-medium text-yellow-600 hover:text-yellow-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-yellow-500"><span>Upload file</span><input id="file-upload" name="file-upload" type="file" class="sr-only"></label>
                                        <p class="pl-1">atau drag and drop</p>
                                    </div>
                                    <p class="text-xs text-gray-500">PNG, JPG, GIF hingga 10MB</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Form Actions -->
                    <div class="border-t border-gray-200 mt-8 pt-6 flex items-center justify-end space-x-3">
                        <!-- PERBAIKAN UX: Mengubah tombol menjadi link/batal yang lebih standar -->
                        <a href="../artikel/index.html" class="bg-white py-2 px-5 border border-gray-300 rounded-lg shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50">Batal</a>
                        <button type="submit" class="inline-flex justify-center py-2 px-5 border border-transparent shadow-sm text-sm font-medium rounded-lg text-gray-800 bg-primary-yellow hover:bg-yellow-400">Publish Cerita</button>
                    </div>
        </div>
        </form>
        </main>
    </div>
    </div>
</body>

</html>