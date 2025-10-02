<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Kegiatan - Dedikasi Malang CMS</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'primary-yellow': '#FFD700',
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

    <!-- PERBAIKAN LAYOUT 1: Menggunakan h-screen untuk membuat viewport tetap -->
    <div class="flex h-screen">
        <!-- Sidebar (Statis dan tidak akan scroll) -->
        <?php include '../../components/sidebar.php'; ?>

        <!-- Main Content Wrapper -->
        <!-- PERBAIKAN LAYOUT 2: flex-1 untuk mengisi sisa ruang & overflow-y-auto untuk scroll vertikal HANYA di area ini -->
        <div class="flex-1 flex flex-col overflow-y-auto">
            <!-- Header (Akan ikut scroll ke atas) -->
            <header class="bg-primary-yellow shadow-sm sticky top-0 z-10">
                <div class="px-8 py-6">
                    <h1 class="text-3xl font-bold text-gray-900">Edit Kegiatan</h1>
                    <p class="mt-1 text-sm text-gray-600">Perbarui detail untuk kegiatan yang sudah ada.</p>
                </div>
            </header>

            <!-- Content -->
            <main class="flex-1 p-8 bg-gray-50">
                <form action="#" method="POST">
                    <div class="bg-white rounded-lg shadow-md p-8">
                        <div class="space-y-6">
                            <!-- Judul -->
                            <div>
                                <label for="judul" class="block text-sm font-medium text-gray-700 mb-1">Judul</label>
                                <!-- PERBAIKAN UX FORM DI SINI -->
                                <input type="text" name="judul" id="judul" 
                                class="block w-full rounded-lg border-gray-300 shadow-sm py-2 px-3 focus:border-primary-yellow focus:ring focus:ring-primary-yellow/50 transition duration-150" 
                                value="Bakti Sosial di Panti Asuhan">
                            </div>

                            <!-- Deskripsi -->
                            <div>
                                <label for="deskripsi" class="block text-sm font-medium text-gray-700 mb-1">Deskripsi</label>
                                <!-- PERBAIKAN UX FORM DI SINI -->
                                <textarea id="deskripsi" name="deskripsi" rows="6" 
                                class="block w-full rounded-lg border-gray-300 shadow-sm py-2 px-3 focus:border-primary-yellow focus:ring focus:ring-primary-yellow/50 transition duration-150">Kegiatan ini bertujuan untuk memberikan bantuan dan hiburan kepada anak-anak di Panti Asuhan Kasih Bunda. Acara akan diisi dengan permainan, pembagian sembako, dan donasi buku. Kegiatan ini bertujuan untuk memberikan bantuan dan hiburan kepada anak-anak di Panti Asuhan Kasih Bunda. Acara akan diisi dengan permainan, pembagian sembako, dan donasi buku. Kegiatan ini bertujuan untuk memberikan bantuan dan hiburan kepada anak-anak di Panti Asuhan Kasih Bunda. Acara akan diisi dengan permainan, pembagian sembako, dan donasi buku.</textarea>
                            </div>

                            <!-- Tanggal & Lokasi -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label for="tanggal" class="block text-sm font-medium text-gray-700 mb-1">Tanggal</label>
                                    <!-- PERBAIKAN UX FORM DI SINI -->
                                    <input type="date" name="tanggal" id="tanggal" 
                                    class="block w-full rounded-lg border-gray-300 shadow-sm py-2 px-3 focus:border-primary-yellow focus:ring focus:ring-primary-yellow/50 transition duration-150" 
                                    value="2025-10-15">
                                </div>
                                <div>
                                    <label for="lokasi" class="block text-sm font-medium text-gray-700 mb-1">Lokasi</label>
                                    <!-- PERBAIKAN UX FORM DI SINI -->
                                    <input type="text" name="lokasi" id="lokasi" 
                                    class="block w-full rounded-lg border-gray-300 shadow-sm py-2 px-3 focus:border-primary-yellow focus:ring focus:ring-primary-yellow/50 transition duration-150" 
                                    value="Malang">
                                </div>
                            </div>

                            <!-- Upload Gambar -->
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Gambar Utama</label>
                                <div class="mt-2 flex items-center space-x-6">
                                    <img class="h-24 w-24 object-cover rounded-lg" src="https://andalusiapeduli.com/wp-content/uploads/2023/01/donasi-untuk-renovasi-gedung-panti-asuhan-al-andalusia-sukabumi.png" alt="Current photo">
                                    <input type="file" class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-yellow-100 file:text-yellow-700 hover:file:bg-yellow-200 transition-colors duration-200" />
                                </div>
                            </div>

                            <!-- Status -->
                            <div>
                                <label for="status" class="block text-sm font-medium text-gray-700 mb-1">Status</label>
                                <!-- PERBAIKAN UX FORM DI SINI -->
                                <select id="status" name="status" 
                                class="block w-full rounded-lg border-gray-300 shadow-sm py-2 px-3 focus:border-primary-yellow focus:ring focus:ring-primary-yellow/50 transition duration-150">
                                    <option>Draft</option>
                                    <option selected>Publish</option>
                                </select>
                            </div>
                        </div>

                        <!-- Form Actions -->
                        <div class="border-t border-gray-200 mt-8 pt-6 flex items-center justify-end space-x-3">
                            <a href="#" class="bg-white py-2 px-5 border border-gray-300 rounded-lg shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500">
                                Batal
                            </a>
                            <button type="submit" class="inline-flex justify-center py-2 px-5 border border-transparent shadow-sm text-sm font-medium rounded-lg text-gray-800 bg-primary-yellow hover:bg-yellow-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500 transition-colors duration-300">
                                Update Kegiatan
                            </button>
                        </div>
                    </div>
                </form>
            </main>
        </div>
    </div>

</body>
</html>