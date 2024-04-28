<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
    <title>Simak UNSRI FASILKOM</title>
  </head>
  <body class="font-opensans overflow-hidden">
    
  {{-- Alert Gagal Login --}}
@if (session()->has('loginError'))
<div
      id="popup-modal4"
      tabindex="-1"
      class="overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 flex justify-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full"
    >
      <div class="relative p-4 w-full max-w-md">
        <div class="relative bg-red-600 rounded-lg shadow h-[180px]">
          <button
            type="button"
            class="absolute top-3 left-[375px] text-white bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
            data-modal-hide="popup-modal4"
            id="close"
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
              NIM atau Password Yang Anda Masukkan Salah !!!
            </h3>
          </div>
        </div>
      </div>
    </div>
@endif

    <!-- Global Container -->
    <div
      class="flex items-center justify-center min-h-screen sm:bg-slate-300 md:bg-[url('../../public/images/fixhero.jpg')] bg-no-repeat bg-cover"
    >
      <!-- Main Container -->
      <div
        class="container flex flex-col m-6 bg-white space-y-8 md:space-y-0 space-x-4 shadow-2xl rounded-md max-w-xl"
      >
        <div class="w-10/12 mx-auto text-center my-8">
          <!-- Logo UNSRI -->
          <img src="images/UNSRI-noBG.png" alt="" class="w-40 mx-auto mt-0" />

          <!-- "SIMAK UNSRI" -->
          <h1 class="font-semibold md:text-xl sm:text-sm my-2">
            Sistem Informasi Akademik (SIMAK)
          </h1>
          <h1 class="text-sm md:text-xl">Universitas Sriwijaya</h1>

          <!-- Line on Side -->
          <div class="inline-flex items-center justify-center w-full">
            <hr class="w-full h-px my-8 bg-gray-300 border-0" />
            <span
              class="absolute px-3 font-light text-xs md:text-sm text-gray-400 -translate-x-1/2 bg-white left-1/2"
              >Silahkan Masuk</span
            >
          </div>

          <form action="/" method="post">
            @csrf
          <!-- Input NIM -->
          <div
            class="relative flex w-full border border-gray-400 py-0 pl-1 rounded-md items-center"
          >
            <div class="border-gray-400 pr-[2px] py-3 w-[30px]">
              <img src="images/user-login.svg" alt="" class="mx-auto" />
            </div>
            <input
              type="text"
              placeholder="NIM/NIP/E-mail Official UNSRI"
              class="w-full outline-none p-1 py-3 md:p-2 text-xs md:text-sm rounded-r-md border border-l-gray-400 focus:ring-2 focus:ring-yellow-400 focus:border-none focus:rounded-md 
              required"
              name="nim"
              id="nim"
            />
          </div>
          <!-- Input Password -->
          <div
            class="relative flex w-full border border-gray-400 py-0 pl-1 rounded-md items-center mt-4"
          >
            <div class="border-gray-400 pr-[2px] py-3 w-[30px]">
              <img src="images/lock-pw.svg" alt="" class="mx-auto" />
            </div>
            <input
              type="password"
              placeholder="Password"
              class="w-full outline-none p-1 py-3 md:p-2 text-xs md:text-sm rounded-r-md border border-l-gray-400 focus:ring-2 focus:ring-yellow-400 focus:border-none focus:rounded-md"
              required
              name="password"
            />
          </div>
          <!-- Buttons -->
          <div>
            <button
              class="text-sm md:text-[16px] flex justify-center rounded-md items-center w-full py-[8px] md:p-3 border text-yellow-400 border-yellow-400 mt-4 mb-4 hover:bg-yellow-400 hover:cursor-pointer hover:text-white"
              name="submit"
            >
              LOGIN
            </button>

        </form>
            <button
              class="text-xs md:text-sm flex justify-center mb-[12px] rounded-md items-center w-full p-1 md:p-2 text-white bg-red-500 hover:bg-red-600 hover:cursor-pointer"
            >
              <img src="images/reset.svg" alt="" class="mx-2" />
              Reset Password
            </button>
          </div>

          <!-- Extras -->
          <div class="text-left text-[10px] md:text-xs">
            <p class="text-black mt-2 mb-0">Belum memiliki akun?</p>
            <a
              href="#"
              class="text-red-500 underline hover:text-yellow-400 mt-0 font-bold"
              >Hubungi Admin Disini!</a
            >
          </div>
        </div>
      </div>
    </div>
    
    <script>
      function closeAlert() {
        var alert = document.getElementById('alert-2');
        alert.style.display = 'none';
      }

      let close = document.getElementById('close');

      close.addEventListener('click', function(){
        let modal = document.getElementById('popup-modal4');

        modal.className = 'hidden';
      });
    </script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>\
  </body>
</html>
