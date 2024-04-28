@extends('dashboard.layouts.main')

@section('navbar')
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
      @foreach ($datas as $data)
      <h1 class="text-white uppercase">{{ $data->name }}</h1> 
      @endforeach
    </div>
  </nav>
</div>
@endsection

@section("Dashboard Profile")
      <!-- Dashboard Profile -->
      <div class="db-container">
        <div
          class="w-full bg-birusemi h-3/5 rounded-md rounded-b-none flex flex-row items-center"
        >
        @foreach ($datas as $data)  
          <div class="ml-40 mt-8">
            <h1 class="uppercase text-white">{{ $data->name }}</h1>
          </div>
        @endforeach
        </div>
        <div
          class="w-full bg-white h-2/5 rounded-b-md flex flex-row items-center justify-between"
        >
        @foreach ($datas as $data)  
          <div class="ml-40">
            <h1 class="text-sm">NIM :{{ $data->nim }} | {{ $data->jurusan }} S1</h1>
          </div>
        @endforeach
          <!-- Links -->
          <div class="flex flex-row">
            <a
              href="/dashboard"
              class="link-style bg-birusemi items-center"
            >
              <?xml version="1.0" encoding="utf-8"?>
              <svg
                width="14px"
                height="14px"
                viewBox="0 0 24 24"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M21 21H6.2C5.07989 21 4.51984 21 4.09202 20.782C3.71569 20.5903 3.40973 20.2843 3.21799 19.908C3 19.4802 3 18.9201 3 17.8V3M7 15L12 9L16 13L21 7"
                  stroke="#ffffff"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
              </svg>
              <h1 class="ml-2 text-sm text-white">Dashboard</h1>
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
@endsection

@section("SA & IPK Container")
      <!-- Main Dashboard -->
      <!-- SA & IPK Container -->
      <div class="flex flex-row my-4 justify-between">
        <!-- Status Akademik -->
        <div class="w-[780px] flex flex-col bg-white rounded-md p-4">
          <div class="flex flex-row">
            <img src="images/museum.svg" alt="" class="mr-2" />
            <h1 class="text-md">Status Akademik</h1>
          </div>
          <p class="text-xs pt-4">
            Informasi selengkapnya mengenai status akademik silakan menghubungi
            akademik Fakultas Ilmu Komputer.
          </p>
          @foreach ($datas as $data)
            
          
          <div class="flex flex-row justify-center mt-8">
            <img src="images/user-link.svg" alt="" />
            <h1 class="text-sm">
              <span class="font-bold m-1">Dosen wali:</span>{{ $data->dosenPA }}
            </h1>
          </div>
          <p class="text-sm flex justify-center mb-2 font-bold">
            (NIP: {{ $data->nipDPA }})
          </p>
          @endforeach
          <!-- Aktif's Flexbox -->
          <div class="flex flex-row justify-center mt-4">
            <div
              class="flex flex-col justify-center items-center border-r-2 px-4"
            >
              <h1>Semester Akademik Sekarang</h1>
              <h1>2023/2024 Genap</h1>
            </div>
            <div
              class="flex flex-col justify-center items-center border-r-2 px-4"
            >
              <h1>Semester Studi</h1>
              <h1>4</h1>
            </div>
            <div class="flex flex-col justify-center items-center px-4">
              <h1>Status Akademik</h1>
              <h1 class="uppercase bg-birumuda text-white px-2 rounded-md">
                aktif
              </h1>
            </div>
          </div>
        </div>
        <!-- Prestasi Akademik -->
        <div class="w-[400px] flex flex-col bg-white rounded-md p-4">
          <div class="flex flex-row">
            <img src="images/trophy.svg" alt="" class="mr-2" />
            <h1 class="text-md">Prestasi Akademik</h1>
          </div>
          <p class="text-xs pt-4">
            Prestasi akademik mencakup pencapaian signifikan dalam studi,
            seperti IPk tinggi yang mencerminkan dedikasi mahasiswa dalam
            lingkungan akademik.
          </p>
          <p class="text-xs pt-4">
            Apabila IPk atau SKSs tidak sesuai, silahkan hubungi prodi untuk
            melakukan penghitungan ulang.
          </p>
          <div class="flex flex-row justify-center mt-4">
            <div
              class="flex flex-col justify-center items-center border-r-2 px-4"
            >
              <h1>IPk</h1>
              <h1>3.94</h1>
            </div>
            <div class="flex flex-col justify-center items-center px-4">
              <h1>SKSs</h1>
              <h1>62</h1>
            </div>
          </div>
        </div>
      </div>

@endsection

@section("Card and Table Global Container")
      <!-- Card and Table Global Container -->
      <div class="flex flex-row justify-between max-h-max">
        <!-- Flex Row Card -->
        <div class="flex flex-col">
          <!-- Tables -->
          <div class="bg-white pt-4 h-[215px]">
            <div
              class="flex flex-col items-start justify-center mb-2 border-b-[1px] border-birumuda px-4"
            >
              <h1 class="text-md">Informasi Seputar Perlombaan FASILKOM</h1>
            </div>
            <div class="overflow-y-scroll max-h-[165px]">
              <table class="w-full text-sm text-left rtl:text-right text-white">
                <thead
                  class="text-xs text-white uppercase bg-birusemi sticky top-0"
                >
                  <tr>
                    <th scope="col" class="px-6 py-3">Nama Lomba</th>
                    <th scope="col" class="px-6 py-3">Penyelenggara</th>
                    <th scope="col" class="px-6 py-3">Tanggal Diadakan</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="border-b bg-birumuda">
                    <th
                      scope="row"
                      class="px-6 py-4 font-medium text-white whitespace-nowrap"
                    >
                      IFFEST
                    </th>
                    <td class="px-6 py-4">HMIF</td>
                    <td class="px-6 py-4">14/04/2024</td>
                  </tr>
                  <tr class="border-b bg-birumuda">
                    <th
                      scope="row"
                      class="px-6 py-4 font-medium text-white whitespace-nowrap"
                    >
                      Techporia Festival
                    </th>
                    <td class="px-6 py-4">BEM KM FASILKOM UNSRI</td>
                    <td class="px-6 py-4">21/05/2024</td>
                  </tr>
                  <tr class="border-b bg-birumuda">
                    <th
                      scope="row"
                      class="px-6 py-4 font-medium text-white whitespace-nowrap"
                    >
                      PTQ
                    </th>
                    <td class="px-6 py-4">LDF WIFI</td>
                    <td class="px-6 py-4">19/06/2024</td>
                  </tr>
                  <tr class="border-b bg-birumuda">
                    <th
                      scope="row"
                      class="px-6 py-4 font-medium text-white whitespace-nowrap"
                    >
                      KTI
                    </th>
                    <td class="px-6 py-4">FASCO</td>
                    <td class="px-6 py-4">25/06/2024</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="w-[780px] flex flex-row justify-between h-[100px] mt-4">
            <!-- Card Akademik -->
            <a href="/akademik" class="card-flex-row">
              <img src="images/academic.svg" alt="" class="" />
              <div class="flex flex-col items-start mx-3">
                <h1 class="text-2xl text-[#144272] mt-2">Akademik</h1>
                <p class="text-xs text-[#144272] mt-1">TA 2023/2024 Genap</p>
              </div>
            </a>
            <!-- Card Cuti Kuliah -->
            <a href="https://forms.gle/X9iKZfFCvNgK8oM4A" class="card-flex-row">
              <img src="images/mail.svg" alt="" />
              <div class="flex flex-col items-start mx-3">
                <h1 class="text-2xl text-[#144272] mt-2">Cuti Kuliah</h1>
                <p class="text-xs text-[#144272] mt-1">Pengajuan form cuti</p>
              </div>
            </a>
            <!-- Card UKT -->
            <a
              href="#"
              class="card-flex-row"
              data-modal-target="popup-modal"
              data-modal-toggle="popup-modal"
            >
              <img src="images/money.svg" alt="" />
              <div class="flex flex-col items-start mx-3">
                <h1 class="text-2xl text-[#144272] mt-2">UKT</h1>
                <p class="text-xs text-[#144272] mt-1">Cek tagihan anda</p>
              </div>
            </a>
          </div>
        </div>
        <!-- Flex Col Card -->
        <div class="flex flex-col max-h-screen">
          <!-- Card Jadwal Kuliah -->
          <a href="/jadwalKuliah" class="card-flex-col group relative">
            <div class="flex flex-row justify-between h-[100px]">
              <span class="card-hover-t"></span>
              <span class="card-hover-r"></span>
              <span class="card-hover-b"></span>
              <span class="card-hover-l"></span>
              <img src="images/calendar.svg" alt="" />
              <div class="flex flex-col items-end mx-3">
                <h1 class="text-2xl text-[#144272] mt-2">Jadwal Kuliah</h1>
                <p class="text-xs text-[#144272] mt-1">TA 2023/2024 Genap</p>
              </div>
            </div>
          </a>
          <!-- Card USEPT -->
          <a href="/usept" class="card-flex-col group relative">
            <span class="card-hover-t"></span>
            <span class="card-hover-r"></span>
            <span class="card-hover-b"></span>
            <span class="card-hover-l"></span>
            <div class="flex flex-row justify-between h-[100px]">
              <img src="images/usept.svg" alt="" />
              <div class="flex flex-col items-end mx-3">
                <h1 class="text-2xl text-[#144272] mt-2">USEPT</h1>
                <p class="text-xs text-[#144272] mt-1">FASILKOM Grade : 500</p>
              </div>
            </div>
          </a>
          <!-- Card Biodata -->
          <a href="/isiBiodata" class="card-flex-col group relative">
            <span class="card-hover-t"></span>
            <span class="card-hover-r"></span>
            <span class="card-hover-b"></span>
            <span class="card-hover-l"></span>
            <div class="flex flex-row justify-between h-[100px]">
              <img src="images/user-link-bio.svg" alt="" />
              <div class="flex flex-col items-end mx-3">
                <h1 class="text-2xl text-[#144272] mt-2">Lengkapi Biodata</h1>
                <p class="text-xs text-[#144272] mt-1"></p>
              </div>
            </div>
          </a>
        </div>
      </div>
@endsection
