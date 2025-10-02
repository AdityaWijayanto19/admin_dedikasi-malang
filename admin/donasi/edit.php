<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Edit Kampanye Donasi - Dedikasi Malang CMS</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: { colors: { "primary-yellow": "#FFD700" } }
      },
    };
    document.addEventListener("DOMContentLoaded", () => {
      tinymce.init({
        selector: "#deskripsi",
        plugins: "autolink lists link charmap preview wordcount",
        toolbar: "undo redo | blocks | bold italic | alignleft aligncenter alignright | bullist numlist outdent indent | link | removeformat",
        height: 300,
        menubar: false,
        skin: (window.matchMedia('(prefers-color-scheme: dark)').matches ? 'oxide-dark' : 'oxide'),
        content_css: (window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'default')
      });
    });
  </script>
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap");
    body { font-family: "Inter", sans-serif; }
    .tox-tinymce {
        border-radius: 0.5rem;
        border: 1px solid #D1D5DB;
        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }
    .tox-tinymce:focus-within {
        border-color: #FFD700;
        box-shadow: 0 0 0 1px #FFD700;
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
          <h1 class="text-3xl font-bold text-gray-800">Edit Kampanye Donasi</h1>
        </div>
      </header>

      <!-- Content -->
      <main class="flex-1 p-8 bg-gray-50">
        <form action="#" method="POST" class="bg-white rounded-lg shadow-md p-8 max-w-4xl mx-auto">
          <div class="space-y-8">
            <!-- Judul Donasi -->
            <div>
              <label for="judul" class="block text-sm font-medium text-gray-700 mb-1">Judul Donasi</label>
              <input type="text" name="judul" id="judul" class="block w-full rounded-lg border-gray-300 shadow-sm py-2 px-3 focus:border-primary-yellow focus:ring focus:ring-primary-yellow/50 transition duration-150" value="Bantu Renovasi Panti Asuhan Kasih Bunda" />
            </div>

            <!-- Upload Gambar -->
            <div>
              <label class="block text-sm font-medium text-gray-700 mb-1">Gambar Sampul</label>
              <div class="mt-2 flex items-center gap-x-4">
                <img class="h-24 w-44 object-cover rounded-lg" src="https://andalusiapeduli.com/wp-content/uploads/2023/01/donasi-untuk-renovasi-gedung-panti-asuhan-al-andalusia-sukabumi.png" alt="Gambar saat ini" />
                <label class="block">
                    <span class="sr-only">Ganti Gambar</span>
                    <input type="file" class="block w-full text-sm text-gray-500
                      file:mr-4 file:py-2 file:px-4
                      file:rounded-full file:border-0
                      file:text-sm file:font-semibold
                      file:bg-yellow-100 file:text-yellow-700
                      hover:file:bg-yellow-200 transition-colors duration-200" />
                </label>
              </div>
            </div>

            <!-- Deskripsi -->
            <div>
              <label for="deskripsi" class="block text-sm font-medium text-gray-700 mb-1">Deskripsi</label>
              <textarea id="deskripsi" name="deskripsi"><p>Panti Asuhan Kasih Bunda membutuhkan uluran tangan kita semua untuk merenovasi atap gedung yang sudah rapuh dan bocor saat musim hujan tiba.</p><p>Bantuan dari para donatur akan sangat berarti bagi kenyamanan dan keamanan anak-anak di panti.</p></textarea>
            </div>

            <!-- Status -->
            <div>
              <label for="status" class="block text-sm font-medium text-gray-700 mb-1">Status</label>
              <select id="status" name="status" class="block w-full rounded-lg border-gray-300 shadow-sm py-2 px-3 focus:border-primary-yellow focus:ring focus:ring-primary-yellow/50 transition duration-150">
                <option value="aktif" selected>Aktif</option>
                <option value="selesai">Selesai</option>
              </select>
            </div>
          </div>

          <!-- Tombol Aksi -->
          <div class="mt-8 pt-6 border-t border-gray-200 flex justify-end gap-x-3">
            <a href="index.html" class="bg-white py-2 px-5 border border-gray-300 rounded-lg shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50">Batal</a>
            <button type="submit" class="bg-primary-yellow text-gray-800 font-semibold py-2 px-5 rounded-lg shadow-md hover:bg-yellow-400">Update Donasi</button>
          </div>
        </form>
      </main>
    </div>
  </div>
</body>
</html>