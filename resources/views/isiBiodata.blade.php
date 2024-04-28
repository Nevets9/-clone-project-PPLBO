<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&family=Raleway:ital,wght@0,400;0,700;1,400&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/app.css" />
    @vite('resources/css/app.css')
    <title>SIMAK FASILKOM UNSRI</title>
  </head>
  <body class="font-opensans bg-slate-100 relative min-h-screen pb-16">
    <!-- Navbar Container-->
    <div class="flex flex-row w-full h-16 bg-birutua">
      <!-- Navbar -->
      <nav class="navbar-style">
        <a href="#" class="flex flex-row items-center">
          <img src="images/UNSRI-noBG.png" alt="" class="w-12 mr-4" />
          <h1 class="text-white font-extrabold text-2xl">SIMAK UNSRI</h1>
        </a>
        <div class="items-center flex flex-row">
          <div class="w-[30px] mx-2 rounded-lg overflow-hidden">
            <img src="images/Julio Syah Putra.jpg" alt="" class="w-[30px]" />
          </div>
          <h1 class="text-white uppercase">Julio Syah Putra</h1>
        </div>
      </nav>
    </div>
    <div class="w-[1220px] mx-auto mb-4">
      <!-- Dashboard & Home links -->
      <div class="justify-between flex flex-row w-full py-4">
        <h1 class="text-xl">Dashboard</h1>
        <!-- Home links -->
        <div class="flex flex-row items-center">
          <a href="/dashboard" class="home-logout-link">
            <img src="images/home-1.svg" alt="" />
            Home
          </a>
          <h1 class="text-sm">/</h1>
          <a
            href="#"
            class="home-logout-link border-dotted hover:border-b-2 hover:border-solid duration-300"
            data-modal-target="popup-modal1"
            data-modal-toggle="popup-modal1"
          >
            <img src="images/logout.svg" alt="" />
            Log Out
          </a>
        </div>
      </div>

      <!-- Dashboard Profile -->
      <div class="db-container mb-4">
        <div
          class="w-full bg-birusemi h-3/5 rounded-md rounded-b-none flex flex-row items-center"
        >
          <div class="ml-40 mt-8">
            <h1 class="uppercase text-white">Julio Syah Putra</h1>
          </div>
        </div>
        <div
          class="w-full bg-white h-2/5 rounded-b-md flex flex-row items-center justify-between"
        >
          <div class="ml-40">
            <h1 class="text-sm">NIM :09021282227045 | Teknik Informatika S1</h1>
          </div>
          <!-- Links -->
          <div class="flex flex-row">
            <a href="/dashboard" class="link-style">
              <img src="images/chart-fix.svg" alt="" class="mr-2" />
              <h1 class="text-sm">Dashboard</h1>
            </a>
            <a href="/biodata" class="link-style">
              <img src="images/user-link.svg" alt="" class="mr-2" />
              <h1 class="text-sm">Biodata</h1>
            </a>
            <a href="/pengaturan" class="link-style">
              <img src="images/settings.svg" alt="" class="mr-2" />
              <h1 class="text-sm">Pengaturan</h1>
            </a>
          </div>
        </div>
        <div
          class="border-4 border-white w-[100px] h-[100px] mx-2 rounded-full overflow-hidden absolute top-8 left-4"
        >
          <img
            src="images/Photo Profil.jpg"
            alt=""
            class="w-[100px] h-[120px]"
          />
        </div>
      </div>
      <div class="w-full mx-auto p-4 bg-white">
        <h1 class="mb-4 text-2xl font-bold">
          Pengisian Data Pribadi Mahasiswa
        </h1>
        <table class="w-full text-sm text-left rtl:text-right text-black">
          <tbody>
            <tr class="border hover:bg-slate-50">
              <th scope="row" class="px-2 font-bold py-4">Nama</th>
              <td space="row" class="">
                <span class="mr-8">:</span>Julio Syah Putra
              </td>
            </tr>
            <tr class="border hover:bg-slate-50">
              <th scope="row" class="px-2 font-bold whitespace-nowrap py-4">
                NIM
              </th>
              <td class=""><span class="mr-8">:</span>09021282227045</td>
            </tr>
            <tr class="border hover:bg-slate-50">
              <th scope="row" class="px-2 font-bold whitespace-nowrap py-4">
                Fakultas
              </th>
              <td class=""><span class="mr-8">:</span>FASILKOM</td>
            </tr>
            <tr class="border hover:bg-slate-50">
              <th scope="row" class="px-2 font-bold whitespace-nowrap py-4">
                Prodi
              </th>
              <td class=""><span class="mr-8">:</span>Teknik Informatika</td>
            </tr>
            <tr class="border hover:bg-slate-50">
              <th scope="row" class="px-2 font-bold whitespace-nowrap py-4">
                Angkatan
              </th>
              <td class=""><span class="mr-8">:</span>2022</td>
            </tr>
            <tr class="border hover:bg-slate-50">
              <th scope="row" class="px-2 font-bold whitespace-nowrap py-4">
                Tempat Lahir
              </th>
              <td class="flex flex-row items-center justify-center py-2">
                <span class="mr-8">:</span
                ><input
                  type="text"
                  placeholder="Masukkan Tempat Lahir Anda"
                  class="input-bio"
                />
              </td>
            </tr>
            <tr class="border hover:bg-slate-50">
              <th scope="row" class="px-2 font-bold whitespace-nowrap py-4">
                Tanggal Lahir
              </th>
              <td class="flex flex-row items-center justify-center py-2">
                <span class="mr-8">:</span
                ><input
                  type="text"
                  placeholder="Tanggal - Nama Bulan - Tahun Lahir"
                  class="input-bio"
                />
              </td>
            </tr>
            <tr class="border hover:bg-slate-50">
              <th scope="row" class="px-2 font-bold whitespace-nowrap py-4">
                NIK
              </th>
              <td class="flex flex-row items-center justify-center py-2">
                <span class="mr-8">:</span
                ><input
                  type="text"
                  placeholder="Masukkan Nomor Induk Keluarga Anda"
                  class="input-bio"
                />
              </td>
            </tr>
            <tr class="border hover:bg-slate-50">
              <th scope="row" class="px-2 font-bold whitespace-nowrap py-4">
                Nama Ayah
              </th>
              <td class="flex flex-row items-center justify-center py-2">
                <span class="mr-8">:</span
                ><input
                  type="text"
                  placeholder="Nama Ayah Kandung"
                  class="input-bio"
                />
              </td>
            </tr>
            <tr class="border hover:bg-slate-50">
              <th scope="row" class="px-2 font-bold whitespace-nowrap py-4">
                Nama Ibu
              </th>
              <td class="flex flex-row items-center justify-center py-2">
                <span class="mr-8">:</span
                ><input
                  type="text"
                  placeholder="Nama Ibu Kandung"
                  class="input-bio"
                />
              </td>
            </tr>
            <tr class="border hover:bg-slate-50">
              <th scope="row" class="px-2 font-bold whitespace-nowrap py-4">
                Kode Kewarganegaraan
              </th>
              <td class=""><span class="mr-8">:</span>ID</td>
            </tr>
            <tr class="border hover:bg-slate-50">
              <th scope="row" class="px-2 font-bold whitespace-nowrap py-4">
                Nomor HP
              </th>
              <td class="flex flex-row items-center justify-center py-2">
                <span class="mr-8">:</span
                ><input
                  type="text"
                  placeholder="Masukkan Nomor HP Pribadi Anda"
                  class="input-bio"
                />
              </td>
            </tr>
            <tr class="border hover:bg-slate-50">
              <th scope="row" class="px-2 font-bold whitespace-nowrap py-4">
                Email Pribadi
              </th>
              <td class="flex flex-row items-center justify-center py-2">
                <span class="mr-8">:</span
                ><input
                  type="text"
                  placeholder="Masukkan Email Pribadi Anda"
                  class="input-bio"
                />
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="bg-slate-100">
        <button
          class="my-4 border-2 border-birutua p-2 text-sm hover:text-white hover:bg-birusemi rounded-sm w-[150px]"
        >
          SIMPAN
        </button>
        <button
          class="my-4 border-2 border-birutua p-2 text-sm hover:text-white hover:bg-birusemi rounded-sm w-[150px] ml-4"
        >
          Reset
        </button>
      </div>
    </div>
    <div
      id="popup-modal1"
      tabindex="-1"
      class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full"
    >
      <div class="relative p-4 w-full max-w-md max-h-full">
        <div class="relative bg-birusemi rounded-lg shadow">
          <button
            type="button"
            class="absolute top-3 end-2.5 text-white bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
            data-modal-hide="popup-modal1"
          >
            <svg
              class="w-3 h-3"
              aria-hidden="true"
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 14 14"
            >
              <path
                stroke="currentColor"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"
              />
            </svg>
            <span class="sr-only">Close modal</span>
          </button>
          <div class="p-4 md:p-5 text-center">
            <svg
              class="mx-auto mb-4 text-white w-12 h-12"
              aria-hidden="true"
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 20 20"
            >
              <path
                stroke="currentColor"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"
              />
            </svg>
            <h3 class="mb-5 text-lg font-normal text-white">
              Apakah anda yakin ingin keluar dari laman ini?
            </h3>
            <div class="flex flex-row items-center justify-center">
                <form action="/logout" method="post">
                    @csrf
                    <button
                    data-modal-hide="popup-modal1"
                    type="submit"
                    name="submit"
                    class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center"
                    >
                    Log out
                    </button>
                </form>
                <button
                data-modal-hide="popup-modal1"
                type="button"
                class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 "
                >
                Batal
                </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="w-full h-9 bg-birutua absolute bottom-0">
      <div
        class="w-[1220px] flex mx-auto text-white h-full items-center justify-between"
      >
        <h1>©️ 2024 Kelompok 8</h1>
        <h1>Made with 😭 btw</h1>
      </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
  </body>
</html>
