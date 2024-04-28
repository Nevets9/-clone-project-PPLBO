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
              class="border border-gray-500 border-b-4 border-b-birutua flex flex-row p-1 rounded-md mr-3 px-2"
            >
              <img src="images/chart.svg" alt="" class="mr-2" />
              <h1 class="text-sm">Dashboard</h1>
            </a>
            <a
              href="#"
              class="flex flex-row p-1 border border-gray-500 rounded-md mr-3 px-2 border-b-4 border-b-birutua bg-birusemi items-center"
            >
              <?xml version="1.0" encoding="utf-8"?><!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
              <svg
                width="14px"
                height="14px"
                viewBox="0 0 24 24"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <circle cx="12" cy="6" r="4" fill="#FFFFFF" />
                <path
                  d="M20 17.5C20 19.9853 20 22 12 22C4 22 4 19.9853 4 17.5C4 15.0147 7.58172 13 12 13C16.4183 13 20 15.0147 20 17.5Z"
                  fill="#FFFFFF"
                />
              </svg>
              <h1 class="ml-2 text-sm text-white">Biodata</h1>
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

@section('biodata')
@foreach ($datas as $data)

      <!-- Biodata -->
      <div class="mx-auto w-[1220px] max-h-max bg-white rounded-md pb-3 mt-4">
        <!-- Profil images -->
        <div class="flex flex-row items-center justify-start p-4">
          <img src="images/user-link.svg" alt="" />
          <h1 class="text-md pl-2">Profil</h1>
        </div>
        <!--Foto + Data Diri -->
        <div class="flex flex-row max-h-max">
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
                    <span class="mr-8">:</span>{{ $data->name }}
                  </td>
                </tr>
                <tr class="border-b hover:bg-slate-50">
                  <th scope="row" class="px-2 font-bold whitespace-nowrap">
                    NIM
                  </th>
                  <td class=""><span class="mr-8">:</span>{{ $data->nim }}</td>
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
                  <td class=""><span class="mr-8">:</span>{{ $data->jurusan }}</td>
                </tr>
                <tr class="border-b hover:bg-slate-50">
                  <th scope="row" class="px-2 font-bold whitespace-nowrap">
                    Angkatan
                  </th>
                  <td class=""><span class="mr-8">:</span>{{ $data->angkatan }}</td>
                </tr>
                <tr class="border-b hover:bg-slate-50">
                  <th scope="row" class="px-2 font-bold whitespace-nowrap">
                    Tempat Lahir
                  </th>
                  <td class=""><span class="mr-8">:</span>{{ $data->tempatLahir }}</td>
                </tr>
                <tr class="border-b hover:bg-slate-50">
                  <th scope="row" class="px-2 font-bold whitespace-nowrap">
                    Tanggal Lahir
                  </th>
                  <td class=""><span class="mr-8">:</span>{{ $data->tanggalLahir }}</td>
                </tr>
                <tr class="border-b hover:bg-slate-50">
                  <th scope="row" class="px-2 font-bold whitespace-nowrap">
                    NIK
                  </th>
                  <td class=""><span class="mr-8">:</span>{{ $data->nik }}</td>
                </tr>
                <tr class="border-b hover:bg-slate-50">
                  <th scope="row" class="px-2 font-bold whitespace-nowrap">
                    Nama Ayah
                  </th>
                  <td class=""><span class="mr-8">:</span>{{ $data->namaAyah }}</td>
                </tr>
                <tr class="border-b hover:bg-slate-50">
                  <th scope="row" class="px-2 font-bold whitespace-nowrap">
                    Nama Ibu
                  </th>
                  <td class=""><span class="mr-8">:</span>{{ $data->namaIbu }}</td>
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
                  <td class=""><span class="mr-8">:</span>{{ $data->noHP }}</td>
                </tr>
                <tr class="border-b hover:bg-slate-50">
                  <th scope="row" class="px-2 font-bold whitespace-nowrap">
                    Email Pribadi
                  </th>
                  <td class="">
                    <span class="mr-8">:</span>{{ $data->email }}
                  </td>
                </tr>
              </tbody>
            </table>
            <!-- Warning 1 -->
            <div
              class="w-full mt-6 flex flex-row bg-[#F9D486] rounded-md h-[75px]"
            >
              <div
                class="bg-[#F6BB42] w-[200px] flex items-center relative rounded-l-md"
              >
                <img src="images/alert.svg" alt="" class="mx-auto" />
                <div
                  class="w-[20px] bg-[#F6BB42] rotate-45 z-10 text-[#F6BB42] absolute left-[52px]"
                >
                  p
                </div>
              </div>
              <h1 class="text-sm text-justify p-2">
                <span class="font-bold">
                  Info : Pastikan data diri Anda diatas benar, sebelum mendaftar
                  WISUDA.
                </span>
                Apabila ada kesalahan bisa mengajukan koreksi data, mohon datang
                ke
                <span class="font-bold"
                  >Admin jurusan domisili kampus masing - masing</span
                >
                dengan membawa Surat Pernyataan dan berkas untuk verifikasi (KTM,
                FC KTP, FC KK [Jika dibutuhkan]). Informasi lebih lanjut hubungi
                admin jurusan.
              </h1>
            </div>
            <!-- Warning 2 -->
            <div
              class="w-full mt-4 flex flex-row bg-birumuda rounded-md mb-[19px] h-[75px]"
            >
              <div
                class="bg-birusemi w-[140px] flex items-center relative rounded-l-md"
              >
                <img src="images/alert.svg" alt="" class="mx-auto" />
                <div
                  class="w-[20px] bg-birusemi rotate-45 z-10 text-birusemi absolute left-[51px]"
                >
                  p
                </div>
              </div>
              <h1 class="text-sm text-justify p-2">
                <span class="font-bold"
                  >Info : Pastikan data diri Anda di pangkalan data pendidikan
                  tinggi (PDDIKTI) benar</span
                >
                dengan mengecek di halaman
                <a href="#" class="text-yellow-400">forlap.ristekdikti.go.id</a>
                Informasi lebih lanjut dan pertanyaan mengenai data PDDIKTI UNSRI
                bisa menghubungi Admin jurusan.
              </h1>
            </div>
          </div>
        </div>
      </div>
  
@endforeach
@endsection

@section("Dashboard Profile")
      <!-- Dashboard Profile -->
      <div class="db-container ">
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


