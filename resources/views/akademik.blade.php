<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Akademik</title>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
  </head>
  <body class="font-opensans bg-slate-100 relative min-h-screen">
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
        <h1 class="text-xl">Akademik</h1>
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
      <!-- Whole container content -->
      <div class="w-full h-max flex flex-col bg-white font-black">
        <div class="border-b-2 border-b-gray-100 w-full p-4">
          <h1>Perkuliahan</h1>
        </div>
        <!-- Dropdown menu -->
        <div class="flex flex-row w-full max-h-max shadow-md">
          <!-- Shortcut links -->
          <div class="flex flex-row w-full border-b-2 border-b-gray-100">
            <a
              href="#"
              class="p-3 tab duration-300 tabs tabs-aktif w-1/3 text-center"
              >Kartu Rencana Studi</a
            >
            <a
              href="#"
              class="border-l p-3 tab duration-300 tabs w-1/3 text-center"
              >Kartu Hasil Studi</a
            >
            <a href="#" class="border-l p-3 tab tabs w-1/3 text-center"
              >Transkrip Nilai</a
            >
          </div>
        </div>
        <!-- KRS -->
        <div class="w-full block bg-white text-sm content">
          <div class="flex flex-row mt-2 p-2">
            <table class="w-1/2">
              <tr class="hover:bg-slate-50 text-left">
                <th class="font-bold">NIM</th>
                <td class=""><span class="mr-8">:</span>09021282227045</td>
              </tr>
              <tr class="hover:bg-slate-50 text-left">
                <th class="font-bold">Semester</th>
                <td class=""><span class="mr-8">:</span>4</td>
              </tr>
              <tr class="hover:bg-slate-50 text-left">
                <th class="font-bold">NIP P.A.</th>
                <td class=""><span class="mr-8">:</span>198806282018031001</td>
              </tr>
            </table>
            <table class="w-1/2">
              <tr class="hover:bg-slate-50 text-left">
                <th class="font-bold">Nama</th>
                <td class=""><span class="mr-8">:</span>Julio Syah Putra</td>
              </tr>
              <tr class="hover:bg-slate-50 text-left">
                <th class="font-bold">Program Studi</th>
                <td class=""><span class="mr-8">:</span>Teknik Informatika</td>
              </tr>
              <tr class="hover:bg-slate-50 text-left">
                <th class="font-bold">Nama Dosen P.A.</th>
                <td class="">
                  <span class="mr-8">:</span>OSVARI ARSALAN, S.KOM., M.T.
                </td>
              </tr>
            </table>
          </div>

          <table class="w-full">
            <tr class="text-white bg-birusemi">
              <th rowspan="2" class="p-2 border-2">No.</th>
              <th rowspan="2" class="p-8 py-4 border-2 whitespace-nowrap">
                Kode MK
              </th>
              <th rowspan="2" class="p-8 border-2">Mata Kuliah</th>
              <th rowspan="2" class="p-2 border-2">SKS</th>
              <th colspan="2" class="p-8 py-2 border-2">Jadwal</th>
              <th rowspan="2" class="p-3 border-2">Dosen</th>
              <th rowspan="2" class="p-8 border-2">Ruangan</th>
            </tr>
            <tr>
              <td class="py-2 px-1 border-2 text-center text-white bg-birusemi">
                Hari
              </td>
              <td class="py-2 px-1 border-2 text-center text-white bg-birusemi">
                Jam
              </td>
            </tr>
            <tr>
              <td class="p-4 border-2 text-center">1</td>
              <td class="p-4 border-2 text-center">FSK3227</td>
              <td class="p-4 border-2 text-center">
                PENGOLAHAN CITRA DIGITAL/PENGOLAHAN CITRA
              </td>
              <td class="p-2 border-2 text-center">3</td>
              <td class="p-4 border-2 text-center">Kamis</td>
              <td class="py-4 px-2 text-center border-2 whitespace-nowrap">
                10.30 - 13.30
              </td>
              <td class="p-4 px-2 border-2 text-center">
                JULIAN SUPARDI, M.T., PH.D.
              </td>
              <td class="p-4 border-2 text-center">D 1.1</td>
            </tr>
            <tr>
              <td class="p-4 border-2 text-center">2</td>
              <td class="p-4 border-2 text-center">FTI2208</td>
              <td class="p-4 border-2 text-center">Etika Profesi</td>
              <td class="p-2 border-2 text-center">2</td>
              <td class="p-4 border-2 text-center">Kamis</td>
              <td class="py-4 px-1 border-2 text-center">13.30 - 16.00</td>
              <td class="p-4 px-2 border-2 text-center">
                SAMSURYADI, M.KOM., PH.D.
              </td>
              <td class="p-4 border-2 text-center">D 1.4</td>
            </tr>
            <tr>
              <td class="p-4 border-2 text-center">3</td>
              <td class="p-4 border-2 text-center">FTI2209</td>
              <td class="p-4 border-2 text-center">REKAYASA PERANGKAT LUNAK</td>
              <td class="p-2 border-2 text-center">3</td>
              <td class="p-4 border-2 text-center">Kamis</td>
              <td class="py-4 px-1 border-2 text-center">08.00 - 10.30</td>
              <td class="p-4 px-2 border-2 text-center">
                JULIAN SUPARDI, M.T., PH.D.
              </td>
              <td class="p-4 border-2 text-center">D 1.1</td>
            </tr>
            <tr>
              <td class="p-4 border-2 text-center">4</td>
              <td class="p-4 border-2 text-center">FTI2210</td>
              <td class="p-4 border-2 text-center">TEORI BAHASA DAN OTOMATA</td>
              <td class="p-2 border-2 text-center">3</td>
              <td class="p-4 border-2 text-center">Selasa</td>
              <td class="py-4 px-1 border-2 text-center">08.00 - 10.30</td>
              <td class="p-4 border-2 px-2 text-center">NOVI YUSLIANI, M.T.</td>
              <td class="p-4 border-2 text-center">D 1.1</td>
            </tr>
            <tr>
              <td class="p-4 border-2 text-center">5</td>
              <td class="p-4 border-2 text-center">FTI2211</td>
              <td class="p-4 border-2 text-center">PEMROGRAMAN WEB II</td>
              <td class="p-2 border-2 text-center">3</td>
              <td class="p-4 border-2 text-center">Senin</td>
              <td class="py-4 px-1 border-2 text-center">13:30 - 16:00</td>
              <td class="p-4 border-2 px-2 text-center">
                JUNIA KURNIATI, M.KOM.
              </td>
              <td class="p-4 border-2 text-center">D 2.1</td>
            </tr>
            <tr>
              <td class="p-4 border-2 text-center">6</td>
              <td class="p-4 border-2 text-center">FTI2213</td>
              <td class="p-4 border-2 text-center">KECERDASAN BUATAN</td>
              <td class="p-2 border-2 text-center">3</td>
              <td class="p-4 border-2 text-center">Rabu</td>
              <td class="py-4 px-1 border-2 text-center">10:30 - 13:00</td>
              <td class="p-4 border-2 px-2 text-center">
                RIZKI KURNIATI, M.T.
              </td>
              <td class="p-4 border-2 text-center">D 3.1</td>
            </tr>
            <tr>
              <td class="p-4 border-2 text-center">7</td>
              <td class="p-4 border-2 text-center">FTI2214</td>
              <td class="p-4 border-2 text-center">
                PENGEMBANGAN PERANGKAT LUNAK BERORIENTASI OBYEK
              </td>
              <td class="p-2 border-2 text-center">3</td>
              <td class="p-4 border-2 text-center">Rabu</td>
              <td class="py-4 px-1 border-2 text-center">08.00 - 10.30</td>
              <td class="p-4 border-2 px-2 text-center">
                DESTY RODIAH, S.KOM., M.T.
              </td>
              <td class="p-4 border-2 text-center">D 2.1</td>
            </tr>
            <tr>
              <td class="p-4 border-2 text-center">8</td>
              <td class="p-4 border-2 text-center">FTI2215</td>
              <td class="p-4 border-2 text-center">
                PRAKTIKUM PENGEMBANGAN PERANGKAT LUNAK BERORIENTASI OBYEK
              </td>
              <td class="p-2 border-2 text-center">1</td>
              <td class="p-4 border-2 text-center">Rabu</td>
              <td class="py-4 px-1 border-2 text-center">13.30 - 15.30</td>
              <td class="p-4 border-2 px-2 text-center">
                DESTY RODIAH, S.KOM., M.T.
              </td>
              <td class="p-4 border-2 text-center">D 2.1</td>
            </tr>
            <tr>
              <td class="p-4 border-2 text-center">9</td>
              <td class="p-4 border-2 text-center">FTI3227</td>
              <td class="p-4 border-2 text-center">DATA WAREHOUSE</td>
              <td class="p-2 border-2 text-center">3</td>
              <td class="p-4 border-2 text-center">Selasa</td>
              <td class="py-4 px-1 border-2 text-center">13.30 - 15.30</td>
              <td class="p-4 border-2 px-2 whitespace-nowrap text-center">
                OSVARI ARSALAN, S.KOM., M.T.
              </td>
              <td class="p-4 border-2 text-center">D 2.1</td>
            </tr>
            <tr class="text-white bg-birusemi">
              <th colspan="6" class="p-8 py-2 border-2 text-left">
                Jumlah SKS
              </th>
              <th colspan="2" class="p-8 py-2 border-2">24</th>
            </tr>
          </table>
          <!-- Button Print -->
          <div class="bg-slate-100">
            <a
              href="#"
              class="my-4 border-2 border-birutua p-2 text-sm hover:text-white hover:bg-birusemi rounded-sm w-[180px]"
              data-modal-target="popup-modal5"
              data-modal-toggle="popup-modal5"
            >
              Ambil Mata Kuliah
            </a>
            <button
              class="my-4 border-2 border-birutua p-2 text-sm hover:text-white hover:bg-birusemi rounded-sm w-[180px] ml-4"
            >
              Cetak MS. WORD
            </button>
          </div>
        </div>
        <!-- KHS -->
        <div class="w-full block bg-white text-sm content hidden">
          <div class="flex flex-row mt-2 p-2">
            <table class="w-1/2">
              <tr class="hover:bg-slate-50 text-left">
                <th class="font-bold">NIM</th>
                <td class=""><span class="mr-8">:</span>09021282227045</td>
              </tr>
              <tr class="hover:bg-slate-50 text-left">
                <th class="font-bold">Semester</th>
                <td class=""><span class="mr-8">:</span>4</td>
              </tr>
              <tr class="hover:bg-slate-50 text-left">
                <th class="font-bold">NIP P.A.</th>
                <td class=""><span class="mr-8">:</span>198806282018031001</td>
              </tr>
            </table>
            <table class="w-1/2">
              <tr class="hover:bg-slate-50 text-left">
                <th class="font-bold">Nama</th>
                <td class=""><span class="mr-8">:</span>Julio Syah Putra</td>
              </tr>
              <tr class="hover:bg-slate-50 text-left">
                <th class="font-bold">Program Studi</th>
                <td class=""><span class="mr-8">:</span>Teknik Informatika</td>
              </tr>
              <tr class="hover:bg-slate-50 text-left">
                <th class="font-bold">Nama Dosen P.A.</th>
                <td class="">
                  <span class="mr-8">:</span>OSVARI ARSALAN, S.KOM., M.T.
                </td>
              </tr>
            </table>
          </div>

          <table class="w-full">
            <tr class="text-white bg-birusemi">
              <th rowspan="2" class="p-2 border-2">No.</th>
              <th rowspan="2" class="p-8 py-4 border-2 whitespace-nowrap">
                Kode MK
              </th>
              <th rowspan="2" class="p-8 border-2">Mata Kuliah</th>
              <th rowspan="2" class="p-2 border-2">SKS</th>
              <th colspan="2" class="p-8 py-2 border-2">Nilai</th>
              <th rowspan="2" class="p-3 border-2">Dosen</th>
              <th rowspan="2" class="p-8 border-2">Bobot</th>
            </tr>
            <tr>
              <td class="py-2 px-1 border-2 text-center text-white bg-birusemi">
                Huruf
              </td>
              <td class="py-2 px-1 border-2 text-center text-white bg-birusemi">
                Angka
              </td>
            </tr>
            <tr>
              <td class="p-4 border-2 text-center">1</td>
              <td class="p-4 border-2 text-center">FSK3227</td>
              <td class="p-4 border-2 text-center">
                PENGOLAHAN CITRA DIGITAL/PENGOLAHAN CITRA
              </td>
              <td class="p-2 border-2 text-center">3</td>
              <td class="p-4 border-2 text-center">F</td>
              <td class="py-4 px-2 text-center border-2 whitespace-nowrap">
                0
              </td>
              <td class="p-4 px-2 border-2 text-center">
                JULIAN SUPARDI, M.T., PH.D.
              </td>
              <td class="p-4 border-2 text-center">0</td>
            </tr>
            <tr>
              <td class="p-4 border-2 text-center">2</td>
              <td class="p-4 border-2 text-center">FTI2208</td>
              <td class="p-4 border-2 text-center">Etika Profesi</td>
              <td class="p-2 border-2 text-center">2</td>
              <td class="p-4 border-2 text-center">F</td>
              <td class="py-4 px-1 border-2 text-center">0</td>
              <td class="p-4 px-2 border-2 text-center">
                SAMSURYADI, M.KOM., PH.D.
              </td>
              <td class="p-4 border-2 text-center">0</td>
            </tr>
            <tr>
              <td class="p-4 border-2 text-center">3</td>
              <td class="p-4 border-2 text-center">FTI2209</td>
              <td class="p-4 border-2 text-center">REKAYASA PERANGKAT LUNAK</td>
              <td class="p-2 border-2 text-center">3</td>
              <td class="p-4 border-2 text-center">F</td>
              <td class="py-4 px-1 border-2 text-center">0</td>
              <td class="p-4 px-2 border-2 text-center">
                JULIAN SUPARDI, M.T., PH.D.
              </td>
              <td class="p-4 border-2 text-center">0</td>
            </tr>
            <tr>
              <td class="p-4 border-2 text-center">4</td>
              <td class="p-4 border-2 text-center">FTI2210</td>
              <td class="p-4 border-2 text-center">TEORI BAHASA DAN OTOMATA</td>
              <td class="p-2 border-2 text-center">3</td>
              <td class="p-4 border-2 text-center">F</td>
              <td class="py-4 px-1 border-2 text-center">0</td>
              <td class="p-4 border-2 px-2 text-center">NOVI YUSLIANI, M.T.</td>
              <td class="p-4 border-2 text-center">0</td>
            </tr>
            <tr>
              <td class="p-4 border-2 text-center">5</td>
              <td class="p-4 border-2 text-center">FTI2211</td>
              <td class="p-4 border-2 text-center">PEMROGRAMAN WEB II</td>
              <td class="p-2 border-2 text-center">3</td>
              <td class="p-4 border-2 text-center">F</td>
              <td class="py-4 px-1 border-2 text-center">0</td>
              <td class="p-4 border-2 px-2 text-center">
                JUNIA KURNIATI, M.KOM.
              </td>
              <td class="p-4 border-2 text-center">0</td>
            </tr>
            <tr>
              <td class="p-4 border-2 text-center">6</td>
              <td class="p-4 border-2 text-center">FTI2213</td>
              <td class="p-4 border-2 text-center">KECERDASAN BUATAN</td>
              <td class="p-2 border-2 text-center">3</td>
              <td class="p-4 border-2 text-center">F</td>
              <td class="py-4 px-1 border-2 text-center">0</td>
              <td class="p-4 border-2 px-2 text-center">
                RIZKI KURNIATI, M.T.
              </td>
              <td class="p-4 border-2 text-center">0</td>
            </tr>
            <tr>
              <td class="p-4 border-2 text-center">7</td>
              <td class="p-4 border-2 text-center">FTI2214</td>
              <td class="p-4 border-2 text-center">
                PENGEMBANGAN PERANGKAT LUNAK BERORIENTASI OBYEK
              </td>
              <td class="p-2 border-2 text-center">3</td>
              <td class="p-4 border-2 text-center">F</td>
              <td class="py-4 px-1 border-2 text-center">0</td>
              <td class="p-4 border-2 px-2 text-center">
                DESTY RODIAH, S.KOM., M.T.
              </td>
              <td class="p-4 border-2 text-center">0</td>
            </tr>
            <tr>
              <td class="p-4 border-2 text-center">8</td>
              <td class="p-4 border-2 text-center">FTI2215</td>
              <td class="p-4 border-2 text-center">
                PRAKTIKUM PENGEMBANGAN PERANGKAT LUNAK BERORIENTASI OBYEK
              </td>
              <td class="p-2 border-2 text-center">1</td>
              <td class="p-4 border-2 text-center">F</td>
              <td class="py-4 px-1 border-2 text-center">0</td>
              <td class="p-4 border-2 px-2 text-center">
                DESTY RODIAH, S.KOM., M.T.
              </td>
              <td class="p-4 border-2 text-center">0</td>
            </tr>
            <tr>
              <td class="p-4 border-2 text-center">9</td>
              <td class="p-4 border-2 text-center">FTI3227</td>
              <td class="p-4 border-2 text-center">DATA WAREHOUSE</td>
              <td class="p-2 border-2 text-center">3</td>
              <td class="p-4 border-2 text-center">F</td>
              <td class="py-4 px-1 border-2 text-center">0</td>
              <td class="p-4 border-2 px-2 whitespace-nowrap text-center">
                OSVARI ARSALAN, S.KOM., M.T.
              </td>
              <td class="p-4 border-2 text-center">0</td>
            </tr>
            <tr class="text-white bg-birusemi">
              <th colspan="6" class="p-8 py-2 border-2 text-left">
                Kredit yang Ditempuh
              </th>
              <th colspan="2" class="p-8 py-2 border-2">24</th>
            </tr>
            <tr class="text-white bg-birusemi">
              <th colspan="6" class="p-8 py-2 border-2 text-left">
                Total Kredit yang Telah Ditempuh
              </th>
              <th colspan="2" class="p-8 py-2 border-2">62</th>
            </tr>
            <tr class="text-white bg-birusemi">
              <th colspan="6" class="p-8 py-2 border-2 text-left">
                Index Prestasi Semester
              </th>
              <th colspan="2" class="p-8 py-2 border-2">-</th>
            </tr>
            <tr class="text-white bg-birusemi">
              <th colspan="6" class="p-8 py-2 border-2 text-left">
                Index Prestasi Kumulatif
              </th>
              <th colspan="2" class="p-8 py-2 border-2">3.94</th>
            </tr>
            <tr class="text-white bg-birusemi">
              <th colspan="6" class="p-8 py-2 border-2 text-left">
                Jumlah SKS Maks Semester Berikutnya
              </th>
              <th colspan="2" class="p-8 py-2 border-2">-</th>
            </tr>
          </table>
          <!-- Button Print -->
          <div class="bg-slate-100">
            <button
              class="my-4 border-2 border-birutua p-2 text-sm hover:text-white hover:bg-birusemi rounded-sm w-[180px]"
            >
              Cetak MS. WORD
            </button>
          </div>
        </div>
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
    {{-- Ambil MK Modal --}}
    <div 
      id="popup-modal5"
      tabindex="-1"
      class="hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-[1220px] mx-auto md:inset-0 h-[calc(100%-1rem)] max-h-screen"
    >
      <div
        class="w-full block bg-white text-sm content overflow-y-scroll max-h-[640px] font-bold"
      >
        <table class="w-full">
          <tr class="text-white bg-birusemi">
            <th rowspan="2" class="p-2 border-2">Check</th>
            <th rowspan="2" class="p-8 py-4 border-2 whitespace-nowrap">
              Kode MK
            </th>
            <th rowspan="2" class="p-8 border-2">Mata Kuliah</th>
            <th rowspan="2" class="p-2 border-2">SKS</th>
            <th rowspan="2" class="p-3 border-2">Dosen</th>
            <th rowspan="2" class="p-8 border-2">Ruangan</th>
          </tr>
          <tr></tr>
          <tr>
            <td class="p-4 border-2 text-center">
              <input type="checkbox" class="rounded-sm" />
            </td>
            <td class="p-4 border-2 text-center">FSK3227</td>
            <td class="p-4 border-2 text-center">
              PENGOLAHAN CITRA DIGITAL/PENGOLAHAN CITRA
            </td>
            <td class="p-2 border-2 text-center">3</td>
            <td class="p-4 px-2 border-2 text-center">
              JULIAN SUPARDI, M.T., PH.D.
            </td>
            <td class="p-4 border-2 text-center">D 1.1</td>
          </tr>
          <tr>
            <td class="p-4 border-2 text-center">
              <input type="checkbox" class="rounded-sm" />
            </td>
            <td class="p-4 border-2 text-center">FTI2208</td>
            <td class="p-4 border-2 text-center">Etika Profesi</td>
            <td class="p-2 border-2 text-center">2</td>
            <td class="p-4 px-2 border-2 text-center">
              SAMSURYADI, M.KOM., PH.D.
            </td>
            <td class="p-4 border-2 text-center">D 1.4</td>
          </tr>
          <tr>
            <td class="p-4 border-2 text-center">
              <input type="checkbox" class="rounded-sm" />
            </td>
            <td class="p-4 border-2 text-center">FTI2209</td>
            <td class="p-4 border-2 text-center">REKAYASA PERANGKAT LUNAK</td>
            <td class="p-2 border-2 text-center">3</td>
            <td class="p-4 px-2 border-2 text-center">
              JULIAN SUPARDI, M.T., PH.D.
            </td>
            <td class="p-4 border-2 text-center">D 1.1</td>
          </tr>
          <tr>
            <td class="p-4 border-2 text-center">
              <input type="checkbox" class="rounded-sm" />
            </td>
            <td class="p-4 border-2 text-center">FTI2210</td>
            <td class="p-4 border-2 text-center">TEORI BAHASA DAN OTOMATA</td>
            <td class="p-2 border-2 text-center">3</td>
            <td class="p-4 border-2 px-2 text-center">NOVI YUSLIANI, M.T.</td>
            <td class="p-4 border-2 text-center">D 1.1</td>
          </tr>
          <tr>
            <td class="p-4 border-2 text-center">
              <input type="checkbox" class="rounded-sm" />
            </td>
            <td class="p-4 border-2 text-center">FTI2211</td>
            <td class="p-4 border-2 text-center">PEMROGRAMAN WEB II</td>
            <td class="p-2 border-2 text-center">3</td>
            <td class="p-4 border-2 px-2 text-center">
              JUNIA KURNIATI, M.KOM.
            </td>
            <td class="p-4 border-2 text-center">D 2.1</td>
          </tr>
          <tr>
            <td class="p-4 border-2 text-center">
              <input type="checkbox" class="rounded-sm" />
            </td>
            <td class="p-4 border-2 text-center">FTI2213</td>
            <td class="p-4 border-2 text-center">KECERDASAN BUATAN</td>
            <td class="p-2 border-2 text-center">3</td>
            <td class="p-4 border-2 px-2 text-center">RIZKI KURNIATI, M.T.</td>
            <td class="p-4 border-2 text-center">D 3.1</td>
          </tr>
          <tr>
            <td class="p-4 border-2 text-center">
              <input type="checkbox" class="rounded-sm" />
            </td>
            <td class="p-4 border-2 text-center">FTI2214</td>
            <td class="p-4 border-2 text-center">
              PENGEMBANGAN PERANGKAT LUNAK BERORIENTASI OBYEK
            </td>
            <td class="p-2 border-2 text-center">3</td>
            <td class="p-4 border-2 px-2 text-center">
              DESTY RODIAH, S.KOM., M.T.
            </td>
            <td class="p-4 border-2 text-center">D 2.1</td>
          </tr>
          <tr>
            <td class="p-4 border-2 text-center">
              <input type="checkbox" class="rounded-sm" />
            </td>
            <td class="p-4 border-2 text-center">FTI2215</td>
            <td class="p-4 border-2 text-center">
              PRAKTIKUM PENGEMBANGAN PERANGKAT LUNAK BERORIENTASI OBYEK
            </td>
            <td class="p-2 border-2 text-center">1</td>
            <td class="p-4 border-2 px-2 text-center">
              DESTY RODIAH, S.KOM., M.T.
            </td>
            <td class="p-4 border-2 text-center">D 2.1</td>
          </tr>
          <tr>
            <td class="p-4 border-2 text-center">
              <input type="checkbox" class="rounded-sm" />
            </td>
            <td class="p-4 border-2 text-center">FTI3227</td>
            <td class="p-4 border-2 text-center">DATA WAREHOUSE</td>
            <td class="p-2 border-2 text-center">3</td>
            <td class="p-4 border-2 px-2 whitespace-nowrap text-center">
              OSVARI ARSALAN, S.KOM., M.T.
            </td>
            <td class="p-4 border-2 text-center">D 2.1</td>
          </tr>
          <tr>
            <td class="p-4 border-2 text-center">
              <input type="checkbox" class="rounded-sm" />
            </td>
            <td class="p-4 border-2 text-center">FTI3227</td>
            <td class="p-4 border-2 text-center">DATA WAREHOUSE</td>
            <td class="p-2 border-2 text-center">3</td>
            <td class="p-4 border-2 px-2 whitespace-nowrap text-center">
              OSVARI ARSALAN, S.KOM., M.T.
            </td>
            <td class="p-4 border-2 text-center">D 2.1</td>
          </tr>
          <tr>
            <td class="p-4 border-2 text-center">
              <input type="checkbox" class="rounded-sm" />
            </td>
            <td class="p-4 border-2 text-center">FTI3227</td>
            <td class="p-4 border-2 text-center">DATA WAREHOUSE</td>
            <td class="p-2 border-2 text-center">3</td>
            <td class="p-4 border-2 px-2 whitespace-nowrap text-center">
              OSVARI ARSALAN, S.KOM., M.T.
            </td>
            <td class="p-4 border-2 text-center">D 2.1</td>
          </tr>
          <tr>
            <td class="p-4 border-2 text-center">
              <input type="checkbox" class="rounded-sm" />
            </td>
            <td class="p-4 border-2 text-center">FTI3227</td>
            <td class="p-4 border-2 text-center">DATA WAREHOUSE</td>
            <td class="p-2 border-2 text-center">3</td>
            <td class="p-4 border-2 px-2 whitespace-nowrap text-center">
              OSVARI ARSALAN, S.KOM., M.T.
            </td>
            <td class="p-4 border-2 text-center">D 2.1</td>
          </tr>
          <tr>
            <td class="p-4 border-2 text-center">
              <input type="checkbox" class="rounded-sm" />
            </td>
            <td class="p-4 border-2 text-center">FTI3227</td>
            <td class="p-4 border-2 text-center">DATA WAREHOUSE</td>
            <td class="p-2 border-2 text-center">3</td>
            <td class="p-4 border-2 px-2 whitespace-nowrap text-center">
              OSVARI ARSALAN, S.KOM., M.T.
            </td>
            <td class="p-4 border-2 text-center">D 2.1</td>
          </tr>
          <tr>
            <td class="p-4 border-2 text-center">
              <input type="checkbox" class="rounded-sm" />
            </td>
            <td class="p-4 border-2 text-center">FTI3227</td>
            <td class="p-4 border-2 text-center">DATA WAREHOUSE</td>
            <td class="p-2 border-2 text-center">3</td>
            <td class="p-4 border-2 px-2 whitespace-nowrap text-center">
              OSVARI ARSALAN, S.KOM., M.T.
            </td>
            <td class="p-4 border-2 text-center">D 2.1</td>
          </tr>
        </table>
        <button
          class="my-4 border-2 border-birutua p-2 text-sm hover:text-white hover:bg-birusemi rounded-sm w-[180px] ml-4"
        >
          Submit
        </button>
        <button
          class="my-4 border-2 border-birutua p-2 text-sm hover:text-white hover:bg-birusemi rounded-sm w-[180px] ml-4"
          data-modal-hide="popup-modal5"
        >
          Batal
        </button>
      </div>
    </div>
    <footer class="w-full h-9 bg-birutua mt-8">
      <div
        class="w-[1220px] flex mx-auto text-white h-full items-center justify-between"
      >
        <h1>©️ 2024 Kelompok 8</h1>
        <h1>Made with 😭 btw</h1>
      </div>
    </footer>
    <script>
      const tabs = document.querySelectorAll(".tab");
      const contents = document.querySelectorAll(".content");

      tabs.forEach((tab, index) => {
        tab.addEventListener("click", () => {
          tabs.forEach((tab) => tab.classList.remove("tabs-aktif"));
          tab.classList.add("tabs-aktif");

          contents.forEach((content) => {
            content.classList.add("hidden");
          });
          contents[index].classList.remove("hidden");
        });
      });
    </script>
  </body>
</html>
