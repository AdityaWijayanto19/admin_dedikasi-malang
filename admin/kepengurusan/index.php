<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Kepengurusan - Dedikasi Malang CMS</title>
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

    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <?php include '../../components/sidebar.php'; ?>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col h-screen overflow-x-auto">
            <!-- Header -->
            <header class="bg-primary-yellow shadow-md">
                <div class="px-6 py-3">
                    <h1 class="text-3xl font-bold text-gray-800">Manajemen Kepengurusan</h1>
                </div>
            </header>

            <!-- Content -->
            <main class="flex-1 p-4 bg-gray-50">
                <div class="flex justify-between items-center mb-6">
                    <!-- Kolom Pencarian -->
                    <div class="relative w-full max-w-sm">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 text-gray-400">
                                <path fill-rule="evenodd" d="M9 3.5a5.5 5.5 0 1 0 0 11 5.5 5.5 0 0 0 0-11ZM2 9a7 7 0 1 1 12.452 4.391l3.328 3.329a.75.75 0 1 1-1.06 1.06l-3.329-3.328A7 7 0 0 1 2 9Z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <input
                            type="text"
                            id="searchInput"
                            class="block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-lg leading-5 bg-white placeholder-gray-500 focus:outline-none focus:placeholder-gray-400 focus:ring-1 focus:ring-yellow-500 focus:border-yellow-500 sm:text-sm"
                            placeholder="Cari berdasarkan nama...">
                    </div>

                    <!-- Tombol Tambah Cerita (sudah diperbaiki) -->
                    <a
                        href="create.php"
                        class="inline-flex items-center bg-primary-yellow text-gray-800 font-semibold py-2 px-5 rounded-lg shadow-md hover:bg-yellow-400 transition-colors duration-300 ml-4 flex-shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 mr-2">
                            <path d="M10.75 4.75a.75.75 0 0 0-1.5 0v4.5h-4.5a.75.75 0 0 0 0 1.5h4.5v4.5a.75.75 0 0 0 1.5 0v-4.5h4.5a.75.75 0 0 0 0-1.5h-4.5v-4.5Z" />
                        </svg>
                        <span>Tambah Pengurus</span>
                    </a>
                </div>

                <!-- Grid Layout -->
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">

                    <!-- Card 1 -->
                    <div class="bg-white rounded-lg shadow-md p-6 text-center flex flex-col items-center">
                        <img class="w-24 h-24 rounded-full object-cover shadow-lg" src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80" alt="Foto Ahmad Maulana">
                        <h3 class="mt-4 text-lg font-semibold text-gray-800">Ahmad Maulana</h3>
                        <p class="text-sm text-gray-600">Ketua Umum</p>
                        <p class="mt-1 text-xs text-gray-400">Periode 2024 - 2026</p>
                        <div class="mt-4 flex space-x-2">
                            <a href="edit.php" class="p-2 rounded-md bg-primary-yellow hover:bg-yellow-400 transition-colors duration-200"><svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.5L16.732 3.732z" />
                                </svg></a>
                            <a href="#" class="p-2 rounded-md bg-primary-yellow hover:bg-yellow-400 transition-colors duration-200"><svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                </svg></a>
                        </div>
                    </div>
                    <div class="bg-white rounded-lg shadow-md p-6 text-center flex flex-col items-center">
                        <img class="w-24 h-24 rounded-full object-cover shadow-lg" src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80" alt="Foto Ahmad Maulana">
                        <h3 class="mt-4 text-lg font-semibold text-gray-800">Ahmad Maulana</h3>
                        <p class="text-sm text-gray-600">Ketua Umum</p>
                        <p class="mt-1 text-xs text-gray-400">Periode 2024 - 2026</p>
                        <div class="mt-4 flex space-x-2">
                            <a href="edit.php" class="p-2 rounded-md bg-primary-yellow hover:bg-yellow-400 transition-colors duration-200"><svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.5L16.732 3.732z" />
                                </svg></a>
                            <a href="#" class="p-2 rounded-md bg-primary-yellow hover:bg-yellow-400 transition-colors duration-200"><svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                </svg></a>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="bg-white rounded-lg shadow-md p-6 text-center flex flex-col items-center">
                        <img class="w-24 h-24 rounded-full object-cover shadow-lg" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80" alt="Foto Rina Setiawati">
                        <h3 class="mt-4 text-lg font-semibold text-gray-800">Rina Setiawati</h3>
                        <p class="text-sm text-gray-600">Sekretaris</p>
                        <p class="mt-1 text-xs text-gray-400">Periode 2024 - 2026</p>
                        <div class="mt-4 flex space-x-2">
                            <a href="#" class="p-2 rounded-md bg-primary-yellow hover:bg-yellow-400 transition-colors duration-200"><svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.5L16.732 3.732z" />
                                </svg></a>
                            <a href="#" class="p-2 rounded-md bg-primary-yellow hover:bg-yellow-400 transition-colors duration-200"><svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                </svg></a>
                        </div>
                    </div>
                    <div class="bg-white rounded-lg shadow-md p-6 text-center flex flex-col items-center">
                        <img class="w-24 h-24 rounded-full object-cover shadow-lg" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80" alt="Foto Rina Setiawati">
                        <h3 class="mt-4 text-lg font-semibold text-gray-800">Rina Setiawati</h3>
                        <p class="text-sm text-gray-600">Sekretaris</p>
                        <p class="mt-1 text-xs text-gray-400">Periode 2024 - 2026</p>
                        <div class="mt-4 flex space-x-2">
                            <a href="#" class="p-2 rounded-md bg-primary-yellow hover:bg-yellow-400 transition-colors duration-200"><svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.5L16.732 3.732z" />
                                </svg></a>
                            <a href="#" class="p-2 rounded-md bg-primary-yellow hover:bg-yellow-400 transition-colors duration-200"><svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                </svg></a>
                        </div>
                    </div>

                    <!-- Tambahkan card lain di sini -->

                </div>
                <!-- Pagination -->
                <div class="px-6 py-4 border-t border-gray-200 flex items-center justify-between">
                    <div class="text-sm text-gray-600">
                        Menampilkan <span class="font-semibold">1</span> sampai <span class="font-semibold">4</span> dari <span class="font-semibold">20</span> hasil
                    </div>
                    <div class="flex space-x-2">
                        <a href="#" class="px-3 py-1 border border-gray-300 rounded-md text-sm font-medium text-gray-500 bg-white hover:bg-gray-50 cursor-not-allowed">
                            Previous
                        </a>
                        <a href="#" class="px-3 py-1 border border-gray-300 rounded-md text-sm font-medium text-gray-700 bg-white hover:bg-gray-50">
                            Next
                        </a>
                    </div>
                </div>
            </main>
        </div>
    </div>

</body>

</html>