<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Profil - Dedikasi Malang CMS</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: { colors: { 'primary-yellow': '#FFD700' } }
            }
        };
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-gray-100">

    <div class="flex h-screen"> <!-- Layout Solid untuk mencegah scroll ganda -->
        <!-- Sidebar -->
        <?php include '../../components/sidebar.php'; ?>

        <!-- Main Content Wrapper -->
        <div class="flex-1 flex flex-col overflow-y-auto">
            <!-- Header -->
            <header class="bg-primary-yellow shadow-md sticky top-0 z-10">
                <div class="px-8 py-6">
                    <h1 class="text-3xl font-bold text-gray-800">Ubah Profil</h1>
                    <p class="mt-1 text-sm text-gray-700">Kelola informasi pribadi dan keamanan akun Anda.</p>
                </div>
            </header>

            <!-- Content -->
            <main class="flex-1 p-8 bg-gray-50">
                <form action="#" method="POST" class="bg-white rounded-lg shadow-md p-8 max-w-3xl mx-auto">
                    <!-- Bagian Informasi Pribadi -->
                    <div>
                        <h2 class="text-lg font-semibold text-gray-900">Informasi Pribadi</h2>
                        <div class="mt-6 space-y-8">
                            <!-- Foto Profil -->
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Foto Profil</label>
                                <div class="mt-2 flex items-center space-x-6">
                                    <div class="shrink-0">
                                        <img class="h-24 w-24 object-cover rounded-full" src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?..." alt="Foto profil saat ini">
                                    </div>
                                    <label class="block">
                                        <span class="sr-only">Ganti foto</span>
                                        <input type="file" class="block w-full text-sm text-gray-500
                                          file:mr-4 file:py-2 file:px-4
                                          file:rounded-full file:border-0
                                          file:text-sm file:font-semibold
                                          file:bg-yellow-100 file:text-yellow-700
                                          hover:file:bg-yellow-200 transition-colors duration-200" />
                                    </label>
                                </div>
                            </div>

                            <!-- Nama Lengkap -->
                            <div>
                                <label for="nama" class="block text-sm font-medium text-gray-700 mb-1">Nama Lengkap</label>
                                <input type="text" name="nama" id="nama" class="block w-full rounded-lg border-gray-300 shadow-sm py-2 px-3 focus:border-primary-yellow focus:ring focus:ring-primary-yellow/50 transition duration-150" value="Ahmad Budi Santoso">
                            </div>

                            <!-- Email (Read-only) -->
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                                <input type="email" name="email" id="email" class="block w-full rounded-lg border-gray-300 shadow-sm py-2 px-3 bg-gray-100 cursor-not-allowed" value="ahmad.budi@email.com" disabled>
                                <p class="mt-2 text-sm text-gray-500">Email tidak dapat diubah.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Garis Pemisah -->
                    <div class="border-t border-gray-200 mt-8 pt-8">
                        <h2 class="text-lg font-semibold text-gray-900">Ubah Password</h2>
                        <div class="mt-6 space-y-8">
                            <!-- Password Saat Ini -->
                            <div>
                                <label for="current_password" class="block text-sm font-medium text-gray-700 mb-1">Password Saat Ini</label>
                                <input type="password" name="current_password" id="current_password" class="block w-full rounded-lg border-gray-300 shadow-sm py-2 px-3 focus:border-primary-yellow focus:ring focus:ring-primary-yellow/50 transition duration-150" placeholder="Masukkan password Anda saat ini">
                            </div>

                            <!-- Password Baru -->
                            <div>
                                <label for="new_password" class="block text-sm font-medium text-gray-700 mb-1">Password Baru</label>
                                <input type="password" name="new_password" id="new_password" class="block w-full rounded-lg border-gray-300 shadow-sm py-2 px-3 focus:border-primary-yellow focus:ring focus:ring-primary-yellow/50 transition duration-150" placeholder="Minimal 8 karakter">
                                <p class="mt-2 text-sm text-gray-500">Kosongkan jika tidak ingin mengubah password.</p>
                            </div>

                            <!-- Konfirmasi Password Baru -->
                            <div>
                                <label for="confirm_password" class="block text-sm font-medium text-gray-700 mb-1">Konfirmasi Password Baru</label>
                                <input type="password" name="confirm_password" id="confirm_password" class="block w-full rounded-lg border-gray-300 shadow-sm py-2 px-3 focus:border-primary-yellow focus:ring focus:ring-primary-yellow/50 transition duration-150" placeholder="Ketik ulang password baru">
                            </div>
                        </div>
                    </div>

                    <!-- Tombol Aksi -->
                    <div class="mt-8 pt-6 border-t border-gray-200 flex justify-end gap-x-3">
                        <a href="#" class="bg-white py-2 px-5 border border-gray-300 rounded-lg shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50">Batal</a>
                        <button type="submit" class="bg-primary-yellow text-gray-800 font-semibold py-2 px-5 rounded-lg shadow-md hover:bg-yellow-400">Simpan Perubahan</button>
                    </div>
                </form>
            </main>
        </div>
    </div>
</body>
</html>