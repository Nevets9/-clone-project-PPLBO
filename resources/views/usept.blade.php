<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Jadwal Perkuliahan</title>
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
  </head>
  <body class="font-opensans bg-slate-100">
    <div class="flex flex-row w-full h-16 bg-birutua">
      <!-- Navbar -->
      <nav
        class="w-[1220px] flex flex-row items-center mx-auto justify-between"
      >
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
    <!-- Dashboard Container -->
    <div class="w-[1220px] mx-auto">
      <!-- Dashboard & Home links -->
      <div class="justify-between flex flex-row w-full py-4">
        <h1 class="text-xl">SULIET / USEPT</h1>
        <!-- Home links -->
        <div class="flex flex-row items-center">
          <a
            href="/dashboard"
            class="flex flex-row mx-3 border-b-2 border-birutua rounded-sm text-sm"
          >
            <img src="images/home-1.svg" alt="" />
            Home
          </a>
          <h1 class="text-sm">/</h1>
          <a
            href="#"
            class="flex flex-row mx-3 border-b-2 border-dotted border-birutua rounded-sm text-sm hover:border-b-2 hover:border-solid duration-300 ease"
            data-modal-target="popup-modal1"
            data-modal-toggle="popup-modal1"
          >
            <img src="images/logout.svg" alt="" />
            Log Out
          </a>
        </div>
      </div>
    </div>
    <div class="w-[1220px] mx-auto mt-4">
      <table class="w-full">
        <tr class="text-white bg-birusemi">
          <th rowspan="2" class="p-2 border-2">No.</th>
          <th rowspan="2" class="p-8 py-4 border-2">Tanggal Test</th>
          <th rowspan="2" class="p-8 border-2">NIM</th>
          <th rowspan="2" class="p-8 border-2">Nama</th>
          <th colspan="4" class="p-8 py-2 border-2">Hasil Test</th>
          <th rowspan="2" class="p-3 border-2">Syarat Lulus Prodi</th>
          <th rowspan="2" class="p-8 border-2">Keterangan</th>
        </tr>
        <tr>
          <td class="py-2 px-1 border-2 text-center text-white bg-birusemi">
            Listening
          </td>
          <td class="py-2 px-1 border-2 text-center text-white bg-birusemi">
            Structure
          </td>
          <td class="py-2 px-1 border-2 text-center text-white bg-birusemi">
            Reading
          </td>
          <td class="py-2 px-1 border-2 text-center text-white bg-birusemi">
            Skor
          </td>
        </tr>
        <tr>
          <td class="p-4 border-2 text-center">1</td>
          <td class="p-4 border-2 text-center">19 SEPTEMBER 2022</td>
          <td class="p-4 border-2 text-center">09021282227045</td>
          <td class="p-4 border-2 text-center">JULIO SYAH PUTRA</td>
          <td class="p-4 border-2 text-center">49</td>
          <td class="p-4 border-2 text-center">49</td>
          <td class="p-4 border-2 text-center">42</td>
          <td class="p-4 border-2 text-center">467</td>
          <td class="p-4 border-2 text-center">500</td>
          <td class="p-4 border-2 text-center">BELUM LULUS</td>
        </tr>
        <tr>
          <td class="p-4 border-2 text-center">2</td>
          <td class="p-4 border-2 text-center">27 NOVEMBER 2023</td>
          <td class="p-4 border-2 text-center">09021282227045</td>
          <td class="p-4 border-2 text-center">JULIO SYAH PUTRA</td>
          <td class="p-4 border-2 text-center">58</td>
          <td class="p-4 border-2 text-center">47</td>
          <td class="p-4 border-2 text-center">41</td>
          <td class="p-4 border-2 text-center">487</td>
          <td class="p-4 border-2 text-center">500</td>
          <td class="p-4 border-2 text-center">BELUM LULUS</td>
        </tr>
      </table>
    </div>

    {{-- alert belum lulus --}}
    <div class="flex flex-col w-[1220px] mx-auto mt-4">
      <div
        class="w-full mt-4 flex flex-row bg-birumuda rounded-md mb-[19px] h-[75px]"
      >
        <div
          class="bg-birusemi w-[100px] flex items-center relative rounded-l-md"
        >
          <img src="images/alert.svg" alt="" class="mx-auto" />
          <div
            class="w-[20px] bg-birusemi rotate-45 z-10 text-birusemi absolute left-[44px]"
          >
            p
          </div>
        </div>
        <h1 class="text-sm text-justify p-2">
          <span class="font-bold"
            >MAAF, ANDA BELUM LULUS DARI PERSYARATAN MINIMAL USEPT DAN ANDA
            BELUM BISA TAMAT SEBELUM SYARAT DIPENUHI. SILAHKAN MENGIKUTI TEST
            USEPT KEMBALI!</span
          >
          Segerakan ikuti test USEPT berikutnya agar Anda tidak ada masalah pada
          saat akan lulus dari program studi.
        </h1>
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
