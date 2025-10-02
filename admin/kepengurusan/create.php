<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pengurus - Dedikasi Malang CMS</title>
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

    <div class="flex h-screen"> <!-- PERBAIKAN BUG LAYOUT -->
        <!-- Sidebar -->
        <?php include '../../components/sidebar.php'; ?>

        <!-- Main Content Wrapper -->
        <div class="flex-1 flex flex-col overflow-y-auto"> <!-- PERBAIKAN BUG LAYOUT -->
            <!-- Header with Yellow Bar -->
            <header class="bg-white shadow-sm sticky top-0 z-10"> <!-- PERBAIKAN UX: Header dibuat sticky -->
                <div class="px-8 py-6 flex items-center space-x-4">
                    <div class="h-9 w-2 bg-primary-yellow rounded-full"></div>
                    <div>
                        <h1 class="text-3xl font-bold text-gray-900">Tambah Pengurus Baru</h1>
                        <p class="mt-1 text-sm text-gray-600">Isi detail pengurus untuk menampilkannya di halaman publik.</p>
                    </div>
                </div>
            </header>

            <!-- Content -->
            <main class="flex-1 p-8 bg-gray-50">
                <form action="#" method="POST">
                    <div class="bg-white rounded-lg shadow-md p-8 max-w-3xl mx-auto">
                        <div class="space-y-8">
                            <!-- Nama Lengkap -->
                            <div>
                                <label for="nama" class="block text-sm font-medium text-gray-700 mb-1">Nama Lengkap</label>
                                <!-- PERBAIKAN UX: Konsistensi styling field -->
                                <input type="text" name="nama" id="nama" class="block w-full rounded-lg border-gray-300 shadow-sm py-2 px-3 focus:border-primary-yellow focus:ring focus:ring-primary-yellow/50 transition duration-150" placeholder="Contoh: Rina Setiawati">
                            </div>

                            <!-- Jabatan & Periode -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label for="jabatan" class="block text-sm font-medium text-gray-700 mb-1">Jabatan</label>
                                    <input type="text" name="jabatan" id="jabatan" class="block w-full rounded-lg border-gray-300 shadow-sm py-2 px-3 focus:border-primary-yellow focus:ring focus:ring-primary-yellow/50 transition duration-150" placeholder="Contoh: Sekretaris">
                                </div>
                                <div>
                                    <label for="periode" class="block text-sm font-medium text-gray-700 mb-1">Periode</label>
                                    <input type="text" name="periode" id="periode" class="block w-full rounded-lg border-gray-300 shadow-sm py-2 px-3 focus:border-primary-yellow focus:ring focus:ring-primary-yellow/50 transition duration-150" placeholder="Contoh: 2024 - 2026">
                                </div>
                            </div>

                            <!-- Upload Foto -->
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Upload Foto</label>
                                <!-- PERBAIKAN UX: Feedback hover dan konsistensi radius -->
                                <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-lg hover:border-primary-yellow transition-colors duration-200">
                                    <div class="space-y-1 text-center">
                                        <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                            <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        <div class="flex text-sm text-gray-600"><label for="file-upload" class="relative cursor-pointer bg-white rounded-md font-medium text-yellow-600 hover:text-yellow-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-yellow-500"><span>Upload file</span><input id="file-upload" name="file-upload" type="file" class="sr-only"></label>
                                            <p class="pl-1">atau seret dan lepas</p>
                                        </div>
                                        <p class="text-xs text-gray-500">PNG atau JPG. Rekomendasi rasio 1:1 (persegi).</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Form Actions -->
                        <div class="border-t border-gray-200 mt-8 pt-6 flex items-center justify-end space-x-3">
                            <a href="index.html" class="bg-white py-2 px-5 border border-gray-300 rounded-lg shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50">Batal</a>
                            <button type="submit" class="inline-flex justify-center py-2 px-5 border border-transparent shadow-sm text-sm font-medium rounded-lg text-gray-800 bg-primary-yellow hover:bg-yellow-400">Simpan Pengurus</button>
                        </div>
                    </div>
                </form>
            </main>
        </div>
    </div>
</body>

</html>