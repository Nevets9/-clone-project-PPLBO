
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
              href="/biodata"
              class="flex flex-row p-1 border border-gray-500 rounded-md mr-3 px-2 border-b-4 border-b-birutua"
            >
              <img src="images/user-link.svg" alt="" class="mr-2" />
              <h1 class="text-sm">Biodata</h1>
            </a>
            <a
              href="#"
              class="flex flex-row p-1 border border-gray-500 rounded-md mr-3 px-2 border-b-4 border-b-birutua bg-birusemi items-center"
            >
              <?xml version="1.0" encoding="utf-8"?><!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
              <svg
                width="16px"
                height="16px"
                viewBox="0 0 24 24"
                fill="#FFFFFF"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M9.99996 2C9.44768 2 8.99996 2.44772 8.99996 3V4.58178C8.30471 4.86318 7.65844 5.23923 7.07704 5.69365L5.70573 4.90193C5.47605 4.76932 5.20309 4.73338 4.94691 4.80202C4.69073 4.87067 4.47232 5.03827 4.33971 5.26795L2.33971 8.73205C2.06357 9.21034 2.22744 9.82193 2.70573 10.0981L4.07654 10.8895C4.02603 11.2528 3.99997 11.6236 3.99997 12C3.99997 12.3764 4.02603 12.7471 4.07654 13.1105L2.70574 13.9019C2.47605 14.0345 2.30846 14.2529 2.23981 14.5091C2.17117 14.7653 2.2071 15.0382 2.33971 15.2679L4.33971 18.732C4.47232 18.9617 4.69074 19.1293 4.94692 19.198C5.2031 19.2666 5.47605 19.2307 5.70574 19.0981L7.07706 18.3063C7.65846 18.7607 8.30472 19.1368 8.99996 19.4182V21C8.99996 21.5523 9.44768 22 9.99996 22H14C14.5522 22 15 21.5523 15 21V19.4182C15.6952 19.1368 16.3415 18.7607 16.9229 18.3063L18.2942 19.0981C18.5239 19.2307 18.7968 19.2666 19.053 19.198C19.3092 19.1293 19.5276 18.9617 19.6602 18.7321L21.6602 15.268C21.7928 15.0383 21.8288 14.7653 21.7601 14.5091C21.6915 14.253 21.5239 14.0345 21.2942 13.9019L19.9234 13.1105C19.9739 12.7472 20 12.3764 20 12C20 11.6236 19.9739 11.2528 19.9234 10.8895L21.2942 10.0981C21.7725 9.82191 21.9364 9.21032 21.6602 8.73203L19.6602 5.26793C19.5276 5.03824 19.3092 4.87065 19.053 4.802C18.7968 4.73336 18.5239 4.76929 18.2942 4.9019L16.9229 5.69364C16.3415 5.23922 15.6952 4.86318 15 4.58178V3C15 2.44772 14.5522 2 14 2H9.99996ZM11 5.28986V4H13V5.28986C13 5.73228 13.2907 6.12211 13.7147 6.24831C14.6258 6.51947 15.4475 7.00198 16.1223 7.64029C16.4436 7.94424 16.9264 8.00099 17.3095 7.77984L18.4282 7.13395L19.4282 8.866L18.3109 9.51107C17.9281 9.73205 17.7358 10.1781 17.8379 10.6081C17.9437 11.0538 18 11.5197 18 12C18 12.4803 17.9437 12.9462 17.8379 13.3919C17.7358 13.8219 17.9281 14.2679 18.3109 14.4889L19.4282 15.134L18.4282 16.866L17.3094 16.2201C16.9264 15.999 16.4436 16.0557 16.1222 16.3597C15.4475 16.998 14.6258 17.4805 13.7147 17.7516C13.2907 17.8778 13 18.2677 13 18.7101V20H11V18.7101C11 18.2677 10.7092 17.8778 10.2852 17.7516C9.37409 17.4805 8.55246 16.998 7.87767 16.3597C7.55635 16.0557 7.07352 15.999 6.69048 16.2201L5.57176 16.866L4.57176 15.134L5.68905 14.4889C6.0718 14.2679 6.26409 13.8219 6.16201 13.3919C6.05621 12.9462 5.99997 12.4803 5.99997 12C5.99997 11.5197 6.0562 11.0538 6.16201 10.6081C6.26409 10.1781 6.07179 9.73207 5.68905 9.51109L4.57176 8.86603L5.57176 7.13398L6.69046 7.77986C7.07351 8.00101 7.55633 7.94425 7.87766 7.6403C8.55245 7.00199 9.37409 6.51948 10.2852 6.24831C10.7092 6.12211 11 5.73228 11 5.28986ZM9.99998 12C9.99998 10.8954 10.8954 10 12 10C13.1046 10 14 10.8954 14 12C14 13.1046 13.1046 14 12 14C10.8954 14 9.99998 13.1046 9.99998 12ZM12 8C9.79084 8 7.99998 9.79086 7.99998 12C7.99998 14.2091 9.79084 16 12 16C14.2091 16 16 14.2091 16 12C16 9.79086 14.2091 8 12 8Z"
                  fill="#FFFFFF"
                />
              </svg>
              <h1 class="ml-2 text-sm text-white">Pengaturan</h1>
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

@section("Setting's Global Container")
<div class="flex flex-row w-[1220px] mx-auto justify-between mt-4">
  <!-- Left Side Bar -->
  <div class="flex flex-col w-[340px] bg-white rounded-md shadow-xl h-max">
    <div class="flex flex-row items-center justify-start p-4 font-bold">
      <img src="images/settings.svg" alt="" />
      <h1 class="text-md pl-2">Pengaturan Akun</h1>
    </div>
    <div class="flex flex-row w-full max-h-max shadow-md">
      <!-- Shortcut links -->
      <div class="flex flex-col w-full">
        <a href="#" class="border-y p-5 tab duration-300 tabs tabs-aktif"
          >Ubah Foto Profil</a
        >
        <a href="#" class="border-y p-5 tab duration-300 tabs"
          >Ganti Password</a
        >
        <a href="#" class="border-y p-5 tab tabs">Hapus Akun</a>
      </div>
    </div>
  </div>
  <!-- Right Side Window -->
  <div class="block w-[820px]">
    <div
      class="w-full bg-white flex flex-col rounded-md shadow-xl h-max content"
    >
      <div
        class="flex flex-row items-center justify-start pl-4 py-3 font-bold w-full"
      >
        <img src="images/profile-picture.svg" alt="" />
        <h1 class="text-xl ml-3 text-birusemi">Ubah Profil</h1>
      </div>
      <div class="flex flex-col w-full pl-6 pr-6">
        <form action="">
          <h1 class="">Email Mahasiswa</h1>
          <input
            type="text"
            class="style-input"
            value="{{ $data->nim }}@student.unsri.ac.id"
            readonly
          />
          <h1>Display Name</h1>
          <input type="text" class="style-input" value="{{ $data->name }}" readonly/>
          <h1>Upload Foto Profil</h1>
          <input type="file" class="style-input" />
        </form>
        <button
          class="border w-24 rounded-md text-white bg-birusemi mx-auto my-4 py-2"
        >
          Simpan
        </button>
      </div>
    </div>
    <div
      class="w-full bg-white flex flex-col rounded-md shadow-xl h-max content hidden"
    >
      <div
        class="flex flex-row items-center justify-start pl-6 py-3 font-bold w-full"
      >
        <?xml version="1.0" encoding="utf-8"?><!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
        <svg
          width="32px"
          height="32px"
          viewBox="0 0 24 24"
          fill="#144272"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            fill-rule="evenodd"
            clip-rule="evenodd"
            d="M6.75 8C6.75 5.10051 9.10051 2.75 12 2.75C14.4453 2.75 16.5018 4.42242 17.0846 6.68694C17.1879 7.08808 17.5968 7.32957 17.9979 7.22633C18.3991 7.12308 18.6405 6.7142 18.5373 6.31306C17.788 3.4019 15.1463 1.25 12 1.25C8.27208 1.25 5.25 4.27208 5.25 8V9.30277C5.02317 9.31872 4.80938 9.33948 4.60825 9.36652C3.70814 9.48754 2.95027 9.74643 2.34835 10.3483C1.74643 10.9503 1.48754 11.7081 1.36652 12.6082C1.24996 13.4752 1.24998 14.5775 1.25 15.9451V16.0549C1.24998 17.4225 1.24996 18.5248 1.36652 19.3918C1.48754 20.2919 1.74643 21.0497 2.34835 21.6516C2.95027 22.2536 3.70814 22.5125 4.60825 22.6335C5.47522 22.75 6.57754 22.75 7.94513 22.75H16.0549C17.4225 22.75 18.5248 22.75 19.3918 22.6335C20.2919 22.5125 21.0497 22.2536 21.6517 21.6516C22.2536 21.0497 22.5125 20.2919 22.6335 19.3918C22.75 18.5248 22.75 17.4225 22.75 16.0549V15.9451C22.75 14.5775 22.75 13.4752 22.6335 12.6082C22.5125 11.7081 22.2536 10.9503 21.6517 10.3483C21.0497 9.74643 20.2919 9.48754 19.3918 9.36652C18.5248 9.24996 17.4225 9.24998 16.0549 9.25H7.94513C7.52161 9.24999 7.12353 9.24999 6.75 9.25344V8ZM3.40901 11.409C3.68577 11.1322 4.07435 10.9518 4.80812 10.8531C5.56347 10.7516 6.56459 10.75 8 10.75H16C17.4354 10.75 18.4365 10.7516 19.1919 10.8531C19.9257 10.9518 20.3142 11.1322 20.591 11.409C20.8678 11.6858 21.0482 12.0743 21.1469 12.8081C21.2484 13.5635 21.25 14.5646 21.25 16C21.25 17.4354 21.2484 18.4365 21.1469 19.1919C21.0482 19.9257 20.8678 20.3142 20.591 20.591C20.3142 20.8678 19.9257 21.0482 19.1919 21.1469C18.4365 21.2484 17.4354 21.25 16 21.25H8C6.56459 21.25 5.56347 21.2484 4.80812 21.1469C4.07435 21.0482 3.68577 20.8678 3.40901 20.591C3.13225 20.3142 2.9518 19.9257 2.85315 19.1919C2.75159 18.4365 2.75 17.4354 2.75 16C2.75 14.5646 2.75159 13.5635 2.85315 12.8081C2.9518 12.0743 3.13225 11.6858 3.40901 11.409Z"
            fill=""
          />
        </svg>
        <h1 class="text-xl ml-3 text-birusemi">Ganti Password</h1>
      </div>
      <div class="flex flex-col w-full pl-6 pr-6">
        @foreach ($datas as $data)
        <form action="/pengaturan" method="post">
          @method('put')
          @csrf
          <div class="flex justify-between">
            <h1 class="">Password Sekarang</h1>
            @if (session()->has('SalahPassword'))
              <h1 class="text-red-600">{{ session('SalahPassword') }}</h1>
            @endif
            @if (session()->has('SalahKonfirmasi'))
              <h1 class="text-red-600">{{ session('SalahKonfirmasi') }}</h1>
            @endif
          </div>
          <input
            type="password"
            name="password"
            class="border w-full py-[6px] pl-2 bg-slate-100 rounded-md border-gray-200 focus:ring-1 focus:ring-birutua focus:rounded-md my-2"
            
          />
          <h1>Password Baru</h1>
          <input
            type="password"
            name="passwordBaru"
            class="border w-full py-[6px] pl-2 bg-slate-100 rounded-md border-gray-200 focus:ring-1 focus:ring-birutuafocus:rounded-md my-2"
            
          />
          <h1>Konfirmasi Passoword Baru</h1>
          <input
            type="password"
            name="passwordKonfirmasi"
            class="border w-full py-[6px] pl-2 bg-slate-100 rounded-md border-gray-200 focus:ring-1 focus:ring-birutua focus:rounded-md mt-2"
            
          />
          <div class="w-full flex justify-center">
            <button
            name="submit"
            class="border w-24 rounded-md text-white bg-birusemi  my-4 py-2"
          >
            Simpan
            </button>
          </div>
        </form>
                  
        @endforeach
      </div>
    </div>
    <div
      class="w-full bg-white flex flex-col rounded-md shadow-xl h-max content hidden"
    >
      <div
        class="flex flex-row items-center justify-start pl-4 py-3 font-bold w-full"
      >
        <img src="images/delete.svg" alt="" class="pl-2" />
        <h1 class="text-xl ml-3 text-birusemi">Hapus Akun</h1>
      </div>
      <div class="flex flex-col w-full pl-6 pr-6">
        <h1>
          Dengan menghapus akun Anda, semua data Anda akan dihapus secara
          permanen dari database kami. Setelah tereksekusi, tindakan ini
          tidak dapat dibatalkan.
        </h1>
        <h1 class="mt-6 text-gray-500 text-sm">
          Untuk mengonfirmasi penghapusan akun, ketik "DELETE" dibawah ini
        </h1>
        @if (session()->has('gagalDelete'))
        <div class="flex justify-start">
          <h3 class="text-red-600">Salah Input!</h3>
        </div>  
        @endif
        <form class="flex flex-row" action="/pengaturan" method="post">
          @csrf
          <input
            type="text"
            name="delete"
            class="border w-7/12 py-[6px] pl-2 bg-slate-100 rounded-md border-gray-200 focus:ring-1 focus:ring-birutua focus:rounded-md my-2 uppercase"
          />
          <button
            class="border w-24 rounded-md text-white bg-red-600 mx-auto my-4 py-2 ml-4" onclick="return confirm('Apakah Kamu Yakin??')"
          >
            Hapus
          </button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection

