<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin ~ SIMAK</title>
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
  <body class="font-opensans bg-slate-100 relative min-h-screen">
    <div class="flex flex-row w-full h-16 bg-birutua">
      <!-- Navbar -->
      <nav
        class="w-[1220px] flex flex-row items-center mx-auto justify-between"
      >
        <div class="items-center flex flex-row">
          <h1 class="text-white uppercase text-lg font-bold">
            ADMIN SIMAK FASILKOM
          </h1>
        </div>
        <form action="/logout" method="post">
            @csrf
        <button
          type="submit"
          name="submit"
          class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 focus:outline-none"
          >Log Out</
        >
        </form>
      </nav>
    </div>
    <div class="w-[1220px] mx-auto mt-4">
      <div class="flex flex-row justify-between items-center mb-2">
        <h1 class="text-xl font-bold">User SIMAK FASILKOM UNSRI</h1>
        <a
          href=""
          class="text-xl font-bold p-2 rounded-md bg-birutua text-white hover:bg-birusemi"
          >Buat Akun</a
        >
      </div>
      <div class="w-full h-max flex flex-col bg-white font-black">
        <div class="w-full block bg-white text-sm content">
          <table class="w-full">
            <tr class="text-white bg-birusemi">
              <th rowspan="2" class="p-2 border-2">No.</th>
              <th rowspan="2" class="p-8 border-2">NIM/NIP</th>
              <th rowspan="2" class="p-2 border-2">Nama</th>
              <th rowspan="2" class="p-8 py-2 border-2">Role</th>
              <th rowspan="2" class="p-3 border-2">Modifikasi</th>
              <th rowspan="2" class="p-8 border-2">Detail User</th>
            </tr>
            <tbody>
              <td class="p-4 border-2 text-center">1</td>
              <td class="p-4 border-2 text-center">09021282227045</td>
              <td class="p-4 border-2 text-center">Julio Syah Putra</td>
              <td class="p-2 border-2 text-center">Mahasiswa</td>
              <td class="p-4 px-2 border-2 text-center">
                <a
                  href="#"
                  class="text-white bg-birusemi hover:bg-birutua focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 focus:outline-none"
                  >Hapus Akun</a
                >
                <a
                  href="#"
                  class="text-white bg-birusemi hover:bg-birutua focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 focus:outline-none"
                  >Input IPS & IPK</a
                >
                <a
                  href="#"
                  class="text-white bg-birusemi hover:bg-birutua focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 focus:outline-none"
                  >Input Skor USEPT</a
                >
              </td>
              <td class="p-4 border-2 text-center">
                <a
                  href="#"
                  class="bg-birutua text-white rounded-sm p-1"
                  data-modal-target="popup-modal2"
                  data-modal-toggle="popup-modal2"
                >
                  ...
                </a>
              </td>
            </tbody>
            <tbody>
              <td class="p-4 border-2 text-center">2</td>
              <td class="p-4 border-2 text-center">09021282227037</td>
              <td class="p-4 border-2 text-center">Denni Setiawan</td>
              <td class="p-2 border-2 text-center">Mahasiswa</td>
              <td class="p-4 px-2 border-2 text-center">
                <a
                  href="#"
                  class="text-white bg-birusemi hover:bg-birutua focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 focus:outline-none"
                  >Hapus Akun</a
                >
                <a
                  href="#"
                  class="text-white bg-birusemi hover:bg-birutua focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 focus:outline-none"
                  >Input IPS & IPK</a
                >
                <a
                  href="#"
                  class="text-white bg-birusemi hover:bg-birutua focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 focus:outline-none"
                  >Input Skor USEPT</a
                >
              </td>
              <td class="p-4 border-2 text-center">
                <a
                  href="#"
                  class="bg-birutua text-white rounded-sm p-1"
                  data-modal-target="popup-modal2"
                  data-modal-toggle="popup-modal2"
                >
                  ...
                </a>
              </td>
            </tbody>
            <tbody>
              <td class="p-4 border-2 text-center">3</td>
              <td class="p-4 border-2 text-center">09021282227043</td>
              <td class="p-4 border-2 text-center">Steven</td>
              <td class="p-2 border-2 text-center">Mahasiswa</td>
              <td class="p-4 px-2 border-2 text-center">
                <a
                  href="#"
                  class="text-white bg-birusemi hover:bg-birutua focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 focus:outline-none"
                  >Hapus Akun</a
                >
                <a
                  href="#"
                  class="text-white bg-birusemi hover:bg-birutua focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 focus:outline-none"
                  >Input IPS & IPK</a
                >
                <a
                  href="#"
                  class="text-white bg-birusemi hover:bg-birutua focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 focus:outline-none"
                  >Input Skor USEPT</a
                >
              </td>
              <td class="p-4 border-2 text-center">
                <a
                  href="#"
                  class="bg-birutua text-white rounded-sm p-1"
                  data-modal-target="popup-modal2"
                  data-modal-toggle="popup-modal2"
                >
                  ...
                </a>
              </td>
            </tbody>
            <tbody>
              <td class="p-4 border-2 text-center">4</td>
              <td class="p-4 border-2 text-center">09021282227042</td>
              <td class="p-4 border-2 text-center">Ichsan Try Mulya</td>
              <td class="p-2 border-2 text-center">Mahasiswa</td>
              <td class="p-4 px-2 border-2 text-center">
                <a
                  href="#"
                  class="text-white bg-birusemi hover:bg-birutua focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 focus:outline-none"
                  >Hapus Akun</a
                >
                <a
                  href="#"
                  class="text-white bg-birusemi hover:bg-birutua focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 focus:outline-none"
                  >Input IPS & IPK</a
                >
                <a
                  href="#"
                  class="text-white bg-birusemi hover:bg-birutua focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 focus:outline-none"
                  >Input Skor USEPT</a
                >
              </td>
              <td class="p-4 border-2 text-center">
                <a
                  href="#"
                  class="bg-birutua text-white rounded-sm p-1"
                  data-modal-target="popup-modal2"
                  data-modal-toggle="popup-modal2"
                >
                  ...
                </a>
              </td>
            </tbody>
            <tbody>
              <td class="p-4 border-2 text-center">5</td>
              <td class="p-4 border-2 text-center">09021282227041</td>
              <td class="p-4 border-2 text-center">Ahmad Bintara Mansur</td>
              <td class="p-2 border-2 text-center">Mahasiswa</td>
              <td class="p-4 px-2 border-2 text-center">
                <a
                  href="#"
                  class="text-white bg-birusemi hover:bg-birutua focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 focus:outline-none"
                  >Hapus Akun</a
                >
                <a
                  href="#"
                  class="text-white bg-birusemi hover:bg-birutua focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 focus:outline-none"
                  >Input IPS & IPK</a
                >
                <a
                  href="#"
                  class="text-white bg-birusemi hover:bg-birutua focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 focus:outline-none"
                  >Input Skor USEPT</a
                >
              </td>
              <td class="p-4 border-2 text-center">
                <a
                  href="#"
                  class="bg-birutua text-white rounded-sm p-1"
                  data-modal-target="popup-modal2"
                  data-modal-toggle="popup-modal2"
                >
                  ...
                </a>
              </td>
            </tbody>
            <tbody>
              <td class="p-4 border-2 text-center">6</td>
              <td class="p-4 border-2 text-center">198806282018031001</td>
              <td class="p-4 border-2 text-center">
                OSVARI ARSALAN, S.KOM., M.T.
              </td>
              <td class="p-2 border-2 text-center">Dosen</td>
              <td class="p-4 px-2 border-2 text-center">
                <a
                  href="#"
                  class="text-white bg-birusemi hover:bg-birutua focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 focus:outline-none"
                  >Hapus Akun</a
                >
                <a
                  href="#"
                  class="text-white bg-birusemi hover:bg-birutua focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 focus:outline-none"
                  >Ubah Data</a
                >
              </td>
              <td class="p-4 border-2 text-center">
                <a
                  href="#"
                  class="bg-birutua text-white rounded-sm p-1"
                  data-modal-target="popup-modal2"
                  data-modal-toggle="popup-modal2"
                >
                  ...
                </a>
              </td>
            </tbody>
          </table>
          <!-- Button Print -->
          <div class="bg-slate-100">
            <button
              class="my-4 border-2 border-birutua p-2 text-sm hover:text-white hover:bg-birusemi rounded-sm w-[180px]"
            >
              Ubah Tabel Lomba
            </button>
            <button
              class="my-4 border-2 border-birutua p-2 text-sm hover:text-white hover:bg-birusemi rounded-sm w-[180px] ml-2"
            >
              Ubah Tenggat UKT
            </button>
          </div>
        </div>
      </div>
    </div>
    <div
      id="popup-modal2"
      tabindex="-1"
      class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full"
    >
      <div class="flex flex-row max-h-max bg-white py-4 rounded-lg">
        <!-- Foto -->
        <div class="flex justify-center items-center w-[300px] relative">
          <div
            class="absolute top-0 flex flex-col items-center justify-center mx-auto"
          >
            <img
              src="images/Photo Profil.jpg"
              alt=""
              class="w-[150px] h-[200px]"
            />
            <h1 class="text-sm my-2">2022/2023 Genap</h1>
            <h1
              class="uppercase bg-birumuda text-white px-2 rounded-sm text-xs"
            >
              aktif
            </h1>
          </div>
        </div>
        <!-- Data diri -->
        <div class="flex flex-col w-[890px]">
          <table class="w-full text-sm text-left rtl:text-right text-black">
            <tbody>
              <tr class="border-b hover:bg-slate-50">
                <th scope="row" class="px-2 font-bold">Nama</th>
                <td space="row" class="">
                  <span class="mr-8">:</span>Julio Syah Putra
                </td>
              </tr>
              <tr class="border-b hover:bg-slate-50">
                <th scope="row" class="px-2 font-bold whitespace-nowrap">
                  NIM
                </th>
                <td class=""><span class="mr-8">:</span>09021282227045</td>
              </tr>
              <tr class="border-b hover:bg-slate-50">
                <th scope="row" class="px-2 font-bold whitespace-nowrap">
                  Fakultas
                </th>
                <td class=""><span class="mr-8">:</span>FASILKOM</td>
              </tr>
              <tr class="border-b hover:bg-slate-50">
                <th scope="row" class="px-2 font-bold whitespace-nowrap">
                  Prodi
                </th>
                <td class=""><span class="mr-8">:</span>Teknik Informatika</td>
              </tr>
              <tr class="border-b hover:bg-slate-50">
                <th scope="row" class="px-2 font-bold whitespace-nowrap">
                  Angkatan
                </th>
                <td class=""><span class="mr-8">:</span>2022</td>
              </tr>
              <tr class="border-b hover:bg-slate-50">
                <th scope="row" class="px-2 font-bold whitespace-nowrap">
                  Tempat Lahir
                </th>
                <td class=""><span class="mr-8">:</span>Jakarta</td>
              </tr>
              <tr class="border-b hover:bg-slate-50">
                <th scope="row" class="px-2 font-bold whitespace-nowrap">
                  Tanggal Lahir
                </th>
                <td class=""><span class="mr-8">:</span>21 Juli 2004</td>
              </tr>
              <tr class="border-b hover:bg-slate-50">
                <th scope="row" class="px-2 font-bold whitespace-nowrap">
                  NIK
                </th>
                <td class=""><span class="mr-8">:</span>082184196510</td>
              </tr>
              <tr class="border-b hover:bg-slate-50">
                <th scope="row" class="px-2 font-bold whitespace-nowrap">
                  Nama Ayah
                </th>
                <td class=""><span class="mr-8">:</span>Piter Fakhrurrozi</td>
              </tr>
              <tr class="border-b hover:bg-slate-50">
                <th scope="row" class="px-2 font-bold whitespace-nowrap">
                  Nama Ibu
                </th>
                <td class=""><span class="mr-8">:</span>Karsimah</td>
              </tr>
              <tr class="border-b hover:bg-slate-50">
                <th scope="row" class="px-2 font-bold whitespace-nowrap">
                  Kode Kewarganegaraan
                </th>
                <td class=""><span class="mr-8">:</span>ID</td>
              </tr>
              <tr class="border-b hover:bg-slate-50">
                <th scope="row" class="px-2 font-bold whitespace-nowrap">
                  Nomor HP
                </th>
                <td class=""><span class="mr-8">:</span>082184196510</td>
              </tr>
              <tr class="border-b hover:bg-slate-50">
                <th scope="row" class="px-2 font-bold whitespace-nowrap">
                  Email Pribadi
                </th>
                <td class="">
                  <span class="mr-8">:</span>juliosp2107@gmail.com
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
  </body>
</html>
