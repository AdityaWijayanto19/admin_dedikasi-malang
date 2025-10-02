<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Tambah Halaman - Dedikasi Malang CMS</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            "primary-yellow": "#FFD700"
          }
        }
      }
    };
    document.addEventListener("DOMContentLoaded", () => {
      tinymce.init({
        selector: "#isiHalaman",
        plugins: "anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount",
        toolbar: "undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat",
        height: 400,
        menubar: false,
      });
    });
  </script>
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap");

    body {
      font-family: "Inter", sans-serif;
    }

    .tox-tinymce {
      border-radius: 0.5rem;
      border: 1px solid #d1d5db;
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
          <h1 class="text-3xl font-bold text-gray-800">Tambah Halaman Baru</h1>
        </div>
      </header>

      <!-- Content -->
      <main class="flex-1 p-8 bg-gray-50">
        <div class="bg-white rounded-lg shadow-md p-8">
          <form action="#" method="POST">
            <div class="space-y-8">
              <!-- Judul Halaman -->
              <div>
                <label for="judul" class="block text-sm font-medium text-gray-700 mb-1">Judul Halaman</label>
                <input type="text" name="judul" id="judul" class="block w-full rounded-lg border-gray-300 shadow-sm py-2 px-3 focus:border-primary-yellow focus:ring focus:ring-primary-yellow/50 transition duration-150" placeholder="Contoh: Tentang Kami" />
              </div>

              <!-- Slug (URL) -->
              <div>
                <label for="slug" class="block text-sm font-medium text-gray-700 mb-1">Slug (URL)</label>
                <!-- PERBAIKAN UX: Komponen slug dibuat lebih konsisten -->
                <div class="mt-1 flex rounded-lg shadow-sm">
                  <span class="inline-flex items-center px-3 rounded-l-lg border border-r-0 border-gray-300 bg-gray-50 text-gray-500 sm:text-sm">dedikasi.com/</span>
                  <input type="text" name="slug" id="slug" class="block w-full flex-1 min-w-0 rounded-none rounded-r-lg border-gray-300 py-2 px-3 focus:border-primary-yellow focus:ring focus:ring-primary-yellow/50 transition duration-150" placeholder="contoh: tentang-kami" />
                </div>
              </div>

              <!-- Isi Halaman (Rich Text Editor) -->
              <div>
                <label for="isiHalaman" class="block text-sm font-medium text-gray-700 mb-1">Isi Halaman</label>
                <textarea id="isiHalaman"></textarea>
              </div>

              <!-- Status -->
              <div>
                <label for="status" class="block text-sm font-medium text-gray-700 mb-1">Status</label>
                <select id="status" name="status" class="block w-full rounded-lg border-gray-300 shadow-sm py-2 px-3 focus:border-primary-yellow focus:ring focus:ring-primary-yellow/50 transition duration-150">
                  <option value="published">Publish</option>
                  <option value="draft" selected>Draft</option>
                </select>
              </div>
            </div>

            <!-- Tombol Aksi -->
            <div class="mt-8 pt-6 border-t border-gray-200 flex justify-end gap-x-3">
              <a href="index.html" class="bg-white py-2 px-5 border border-gray-300 rounded-lg shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50">Batal</a>
              <button type="submit" class="bg-primary-yellow text-gray-800 font-semibold py-2 px-5 rounded-lg shadow-md hover:bg-yellow-400">Simpan Halaman</button>
            </div>
          </form>
        </div>
      </main>
    </div>
  </div>
</body>

</html>