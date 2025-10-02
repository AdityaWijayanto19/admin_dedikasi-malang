<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Kampanye Donasi - Dedikasi Malang CMS</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: { colors: { 'primary-yellow': '#FFD700' } }
            }
        };
        document.addEventListener('DOMContentLoaded', () => {
            tinymce.init({
                selector: '#deskripsi',
                plugins: 'autolink lists link charmap preview wordcount',
                toolbar: 'undo redo | blocks | bold italic | alignleft aligncenter alignright | bullist numlist outdent indent | link | removeformat',
                height: 300,
                menubar: false, // PERBAIKAN UX: Sembunyikan menubar agar lebih simpel
                skin: (window.matchMedia('(prefers-color-scheme: dark)').matches ? 'oxide-dark' : 'oxide'),
                content_css: (window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'default')
            });
        });
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
        body { font-family: 'Inter', sans-serif; }
        
        /* PERBAIKAN UX: Menambahkan focus state pada editor TinyMCE */
        .tox-tinymce {
            border-radius: 0.5rem; /* rounded-lg */
            border: 1px solid #D1D5DB; /* border-gray-300 */
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }
        .tox-tinymce:focus-within {
            border-color: #FFD700; /* border-primary-yellow */
            box-shadow: 0 0 0 1px #FFD700; /* ring-1 ring-primary-yellow */
        }
    </style>
</head>
<body class="bg-gray-100">

    <div class="flex h-screen"> <!-- PERBAIKAN BUG LAYOUT -->
        <!-- Sidebar -->
        <?php include '../../components/sidebar.php'; ?>
        
        <!-- Main Content Wrapper -->
        <div class="flex-1 flex flex-col overflow-y-auto"> <!-- PERBAIKAN BUG LAYOUT -->
            <!-- Header -->
            <header class="bg-primary-yellow shadow-md sticky top-0 z-10">
                <div class="px-8 py-6">
                    <h1 class="text-3xl font-bold text-gray-800">Tambah Kampanye Donasi Baru</h1>
                </div>
            </header>

            <!-- Content -->
            <main class="flex-1 p-8 bg-gray-50">
                <form action="#" method="POST" class="bg-white rounded-lg shadow-md p-8 max-w-4xl mx-auto">
                    <div class="space-y-8">
                        <!-- Judul Donasi -->
                        <div>
                            <label for="judul" class="block text-sm font-medium text-gray-700 mb-1">Judul Donasi</label>
                            <input type="text" name="judul" id="judul" class="block w-full rounded-lg border-gray-300 shadow-sm py-2 px-3 focus:border-primary-yellow focus:ring focus:ring-primary-yellow/50 transition duration-150" placeholder="Contoh: Bantuan untuk Korban Banjir">
                        </div>

                        <!-- Upload Gambar -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Gambar Sampul</label>
                            <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-lg hover:border-primary-yellow transition-colors duration-200">
                                <div class="space-y-1 text-center">
                                    <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true"><path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" /></svg>
                                    <div class="flex text-sm text-gray-600"><label for="file-upload" class="relative cursor-pointer bg-white rounded-md font-medium text-yellow-600 hover:text-yellow-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-yellow-500"><span>Unggah file</span><input id="file-upload" name="file-upload" type="file" class="sr-only"></label><p class="pl-1">atau seret dan lepas</p></div>
                                    <p class="text-xs text-gray-500">PNG, JPG, GIF hingga 10MB</p>
                                </div>
                            </div>
                        </div>

                        <!-- Deskripsi -->
                        <div>
                            <label for="deskripsi" class="block text-sm font-medium text-gray-700 mb-1">Deskripsi</label>
                            <textarea id="deskripsi" name="deskripsi" placeholder="Jelaskan tujuan dan detail dari kampanye donasi ini..."></textarea>
                        </div>
                        <!-- Status -->
                        <div>
                            <label for="status" class="block text-sm font-medium text-gray-700 mb-1">Status</label>
                            <select id="status" name="status" class="block w-full rounded-lg border-gray-300 shadow-sm py-2 px-3 focus:border-primary-yellow focus:ring focus:ring-primary-yellow/50 transition duration-150">
                                <option value="aktif">Aktif</option>
                                <option value="selesai">Selesai</option>
                            </select>
                        </div>
                    </div>

                    <!-- Tombol Aksi -->
                    <div class="mt-8 pt-6 border-t border-gray-200 flex justify-end gap-x-3">
                        <a href="index.html" class="bg-white py-2 px-5 border border-gray-300 rounded-lg shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50">Batal</a>
                        <button type="submit" class="bg-primary-yellow text-gray-800 font-semibold py-2 px-5 rounded-lg shadow-md hover:bg-yellow-400">Simpan Donasi</button>
                    </div>
                </form>
            </main>
        </div>
    </div>
</body>
</html>