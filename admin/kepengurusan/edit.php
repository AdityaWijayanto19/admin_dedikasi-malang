<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pengurus - Dedikasi Malang CMS</title>
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
                        <h1 class="text-3xl font-bold text-gray-900">Edit Pengurus</h1>
                        <p class="mt-1 text-sm text-gray-600">Perbarui detail pengurus yang sudah ada.</p>
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
                                <input type="text" name="nama" id="nama" class="block w-full rounded-lg border-gray-300 shadow-sm py-2 px-3 focus:border-primary-yellow focus:ring focus:ring-primary-yellow/50 transition duration-150" value="Ahmad Maulana">
                            </div>

                            <!-- Jabatan & Periode -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label for="jabatan" class="block text-sm font-medium text-gray-700 mb-1">Jabatan</label>
                                    <input type="text" name="jabatan" id="jabatan" class="block w-full rounded-lg border-gray-300 shadow-sm py-2 px-3 focus:border-primary-yellow focus:ring focus:ring-primary-yellow/50 transition duration-150" value="Ketua Umum">
                                </div>
                                <div>
                                    <label for="periode" class="block text-sm font-medium text-gray-700 mb-1">Periode</label>
                                    <input type="text" name="periode" id="periode" class="block w-full rounded-lg border-gray-300 shadow-sm py-2 px-3 focus:border-primary-yellow focus:ring focus:ring-primary-yellow/50 transition duration-150" value="2024 - 2026">
                                </div>
                            </div>

                            <!-- Upload Foto -->
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Foto</label>
                                <div class="mt-2 flex items-center space-x-6">
                                    <div class="shrink-0">
                                        <img class="h-20 w-20 object-cover rounded-full" src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?..." alt="Current photo">
                                    </div>
                                    <label class="block">
                                        <span class="sr-only">Choose photo</span>
                                        <!-- PERBAIKAN UX: Konsistensi styling tombol file -->
                                        <input type="file" class="block w-full text-sm text-gray-500
                                          file:mr-4 file:py-2 file:px-4
                                          file:rounded-full file:border-0
                                          file:text-sm file:font-semibold
                                          file:bg-yellow-100 file:text-yellow-700
                                          hover:file:bg-yellow-200 transition-colors duration-200" />
                                    </label>
                                </div>
                            </div>
                        </div>

                        <!-- Form Actions -->
                        <div class="border-t border-gray-200 mt-8 pt-6 flex items-center justify-end space-x-3">
                            <a href="index.html" class="bg-white py-2 px-5 border border-gray-300 rounded-lg shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50">Batal</a>
                            <button type="submit" class="inline-flex justify-center py-2 px-5 border border-transparent shadow-sm text-sm font-medium rounded-lg text-gray-800 bg-primary-yellow hover:bg-yellow-400">Update Pengurus</button>
                        </div>
                    </div>
                </form>
            </main>
        </div>
    </div>
</body>

</html>