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
        <h1 class="text-xl">Jadwal Kuliah</h1>
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
      <div class="wrapper bg-white rounded shadow w-full">
        <div class="header flex justify-between border-b p-2">
          <span class="text-lg font-bold"> Semester Genap</span>
          <div class="buttons">
            <button class="p-1">
              <svg
                width="1em"
                fill="gray"
                height="1em"
                viewBox="0 0 16 16"
                class="bi bi-arrow-left-circle"
                fill="currentColor"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  fill-rule="evenodd"
                  d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"
                />
                <path
                  fill-rule="evenodd"
                  d="M8.354 11.354a.5.5 0 0 0 0-.708L5.707 8l2.647-2.646a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708 0z"
                />
                <path
                  fill-rule="evenodd"
                  d="M11.5 8a.5.5 0 0 0-.5-.5H6a.5.5 0 0 0 0 1h5a.5.5 0 0 0 .5-.5z"
                />
              </svg>
            </button>
            <button class="p-1">
              <svg
                width="1em"
                fill="gray"
                height="1em"
                viewBox="0 0 16 16"
                class="bi bi-arrow-right-circle"
                fill="currentColor"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  fill-rule="evenodd"
                  d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"
                />
                <path
                  fill-rule="evenodd"
                  d="M7.646 11.354a.5.5 0 0 1 0-.708L10.293 8 7.646 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0z"
                />
                <path
                  fill-rule="evenodd"
                  d="M4.5 8a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5z"
                />
              </svg>
            </button>
          </div>
        </div>
        <table class="w-full">
          <thead>
            <tr>
              <th
                class="p-2 border-r h-10 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 xl:text-sm text-xs"
              >
                <span class="xl:block lg:block md:block sm:block hidden"
                  >Minggu</span
                >
                <span class="xl:hidden lg:hidden md:hidden sm:hidden block"
                  >Sun</span
                >
              </th>
              <th
                class="p-2 border-r h-10 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 xl:text-sm text-xs"
              >
                <span class="xl:block lg:block md:block sm:block hidden"
                  >Senin</span
                >
                <span class="xl:hidden lg:hidden md:hidden sm:hidden block"
                  >Mon</span
                >
              </th>
              <th
                class="p-2 border-r h-10 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 xl:text-sm text-xs"
              >
                <span class="xl:block lg:block md:block sm:block hidden"
                  >Selasa</span
                >
                <span class="xl:hidden lg:hidden md:hidden sm:hidden block"
                  >Tue</span
                >
              </th>
              <th
                class="p-2 border-r h-10 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 xl:text-sm text-xs"
              >
                <span class="xl:block lg:block md:block sm:block hidden"
                  >Rabu</span
                >
                <span class="xl:hidden lg:hidden md:hidden sm:hidden block"
                  >Wed</span
                >
              </th>
              <th
                class="p-2 border-r h-10 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 xl:text-sm text-xs"
              >
                <span class="xl:block lg:block md:block sm:block hidden"
                  >Kamis</span
                >
                <span class="xl:hidden lg:hidden md:hidden sm:hidden block"
                  >Thu</span
                >
              </th>
              <th
                class="p-2 border-r h-10 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 xl:text-sm text-xs"
              >
                <span class="xl:block lg:block md:block sm:block hidden"
                  >Jum'at</span
                >
                <span class="xl:hidden lg:hidden md:hidden sm:hidden block"
                  >Fri</span
                >
              </th>
              <th
                class="p-2 border-r h-10 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 xl:text-sm text-xs"
              >
                <span class="xl:block lg:block md:block sm:block hidden"
                  >Sabtu</span
                >
                <span class="xl:hidden lg:hidden md:hidden sm:hidden block"
                  >Sat</span
                >
              </th>
            </tr>
          </thead>
          <tbody>
            <tr class="text-center h-20">
              <td
                class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300"
              >
                <div
                  class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden"
                >
                  <div class="top h-5 w-full">
                    <span class="text-gray-500"></span>
                  </div>
                  <div
                    class="bottom flex-grow h-30 py-1 w-full cursor-pointer flex flex-col items-center justify-center"
                  ></div>
                </div>
              </td>
              <td
                class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300"
              >
                <div
                  class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden"
                >
                  <div class="top h-5 w-full">
                    <span class="text-gray-500"></span>
                  </div>
                  <div
                    class="bottom flex-grow h-30 py-1 w-full cursor-pointer flex flex-col items-center justify-center"
                  >
                    <div
                      class="event bg-birutua text-white rounded p-1 text-sm mb-1"
                    >
                      <span class="time"> 13.30 - 16.00 </span>
                      <span class="event-name">Pemrogramman Web II </span>
                    </div>
                    <!-- <div
                      class="event bg-purple-400 text-white rounded p-1 text-sm mb-1"
                    >
                      <span class="event-name"> Meating </span>
                      <span class="time"> 18:00~20:00 </span>
                    </div> -->
                  </div>
                </div>
              </td>
              <td
                class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300"
              >
                <div
                  class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden"
                >
                  <div class="top h-5 w-full">
                    <span class="text-gray-500"></span>
                  </div>
                  <div
                    class="bottom flex-grow h-30 py-1 w-full cursor-pointer flex flex-col items-center justify-center"
                  >
                    <div
                      class="event bg-birutua text-white rounded p-1 text-sm mb-1 w-40"
                    >
                      <span class="time"> 08.00 - 10.30 <br /> </span>
                      <span class="event-name"> Teori Bahasa Otomata </span>
                    </div>
                    <div
                      class="event bg-birutua text-white rounded p-1 text-sm mb-1 flex flex-col w-40"
                    >
                      <span class="time"> 13.30 - 16.00 </span>
                      <span class="event-name"> Data Warehouse</span>
                    </div>
                  </div>
                </div>
              </td>
              <td
                class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300"
              >
                <div
                  class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden"
                >
                  <div class="top h-5 w-full">
                    <span class="text-gray-500"></span>
                  </div>
                  <div
                    class="bottom flex-grow h-30 py-1 w-full cursor-pointer flex flex-col items-center justify-center"
                  >
                    <div
                      class="event bg-birutua text-white rounded p-1 text-sm mb-1 w-40"
                    >
                      <span class="time"> 08.00 - 10.30 <br /> </span>
                      <span class="event-name"> PPLBO </span>
                    </div>
                    <div
                      class="event bg-birutua text-white rounded p-1 text-sm mb-1"
                    >
                      <span class="time"> 10.30 - 13.30 </span>
                      <span class="event-name"> Kecerdasan Buatan </span>
                    </div>
                    <div
                      class="event bg-birutua text-white rounded p-1 text-sm mb-1 flex flex-col w-40"
                    >
                      <span class="time"> 13.30 - 16.00 </span>
                      <span class="event-name"> Prak.PPLBO </span>
                    </div>
                  </div>
                </div>
              </td>
              <td
                class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300"
              >
                <div
                  class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden"
                >
                  <div class="top h-5 w-full">
                    <span class="text-gray-500"></span>
                  </div>
                  <div
                    class="bottom flex-grow h-30 py-1 w-full cursor-pointer flex flex-col items-center justify-center"
                  >
                    <div
                      class="event bg-birutua text-white rounded p-1 text-sm mb-1 w-40"
                    >
                      <span class="time"> 08.00 - 10.30 <br /> </span>
                      <span class="event-name"> Rekayasa Per. Lunak </span>
                    </div>
                    <div
                      class="event bg-birutua text-white rounded p-1 text-sm mb-1 w-40"
                    >
                      <span class="time"> 10.30 - 13.30 <br /></span>
                      <span class="event-name"> Pengolahan Citra </span>
                    </div>
                    <div
                      class="event bg-birutua text-white rounded p-1 text-sm mb-1 flex flex-col w-40"
                    >
                      <span class="time"> 13.30 - 16.00 <br /></span>
                      <span class="event-name"> Etika Profesi </span>
                    </div>
                  </div>
                </div>
              </td>
              <td
                class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-hidden transition cursor-pointer duration-500 ease hover:bg-gray-300"
              >
                <div
                  class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden"
                >
                  <div class="top h-5 w-full">
                    <span class="text-gray-500"></span>
                  </div>
                  <div
                    class="bottom flex-grow h-30 py-1 w-full cursor-pointer"
                  ></div>
                </div>
              </td>
              <td
                class="border p-1 h-40 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto transition cursor-pointer duration-500 ease hover:bg-gray-300"
              >
                <div
                  class="flex flex-col h-40 mx-auto xl:w-40 lg:w-30 md:w-30 sm:w-full w-10 mx-auto overflow-hidden"
                >
                  <div class="top h-5 w-full">
                    <span class="text-gray-500 text-sm"></span>
                  </div>
                  <div
                    class="bottom flex-grow h-30 py-1 w-full cursor-pointer"
                  ></div>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <h1 class="mt-4 text-xl">Perkuliahan Daring</h1>
      <!-- Card Container -->
      <div class="w-full flex flex-row justify-between">
        <!-- Card 1 -->
        <a
          href="https://uscamz.unsri.ac.id/b"
          class="w-[400px] flex flex-row items-center justify-between bg-white rounded-md p-4 my-4 group relative"
        >
          <span
            class="ease absolute left-0 top-0 h-0 w-0 border-t-2 border-birutua transition-all duration-500 group-hover:w-full"
          ></span>
          <span
            class="ease absolute right-0 top-0 h-0 w-0 border-r-2 border-birutua transition-all duration-500 group-hover:h-full"
          ></span>
          <span
            class="ease absolute bottom-0 right-0 h-0 w-0 border-b-2 border-birutua transition-all duration-500 group-hover:w-full"
          ></span>
          <span
            class="ease absolute bottom-0 left-0 h-0 w-0 border-l-2 border-birutua transition-all duration-500 group-hover:h-full"
          ></span>
          <img src="images/globe.svg" alt="" />
          <div class="flex flex-col">
            <div class="flex flex-row items-center justify-center">
              <h1 class="text-2xl text-[#144272] mr-3">Kuliah Online</h1>
            </div>
            <p class="text-xs text-[#144272] mt-1">
              Layanan perkuliahan daring
            </p>
            <p class="text-xs text-[#144272] mt-1">USCamZi</p>
          </div>
        </a>
        <!-- Card 2 -->
        <a
          href="https://forms.gle/X9iKZfFCvNgK8oM4A"
          class="w-[400px] flex flex-row items-center justify-between bg-white rounded-md p-4 my-4 group relative"
          ><span
            class="ease absolute left-0 top-0 h-0 w-0 border-t-2 border-birutua transition-all duration-500 group-hover:w-full"
          ></span>
          <span
            class="ease absolute right-0 top-0 h-0 w-0 border-r-2 border-birutua transition-all duration-500 group-hover:h-full"
          ></span>
          <span
            class="ease absolute bottom-0 right-0 h-0 w-0 border-b-2 border-birutua transition-all duration-500 group-hover:w-full"
          ></span>
          <span
            class="ease absolute bottom-0 left-0 h-0 w-0 border-l-2 border-birutua transition-all duration-500 group-hover:h-full"
          ></span>
          <img src="images/Mail.svg" alt="" />
          <div class="flex flex-col">
            <div class="flex flex-row items-center justify-center">
              <h1 class="text-2xl text-[#144272] mr-3">Absensi Online</h1>
            </div>
            <p class="text-xs text-[#144272] mt-1">Absensi via GForm</p>
            <p class="text-xs text-[#144272] mt-1">Sesuai ketentuan Dosen MK</p>
          </div>
        </a>
        <!-- Card 3 -->
        <a
          href="https://classroom.google.com/"
          class="w-[400px] flex flex-row items-center justify-between bg-white rounded-md p-4 my-4 group relative"
          ><span
            class="ease absolute left-0 top-0 h-0 w-0 border-t-2 border-birutua transition-all duration-500 group-hover:w-full"
          ></span>
          <span
            class="ease absolute right-0 top-0 h-0 w-0 border-r-2 border-birutua transition-all duration-500 group-hover:h-full"
          ></span>
          <span
            class="ease absolute bottom-0 right-0 h-0 w-0 border-b-2 border-birutua transition-all duration-500 group-hover:w-full"
          ></span>
          <span
            class="ease absolute bottom-0 left-0 h-0 w-0 border-l-2 border-birutua transition-all duration-500 group-hover:h-full"
          ></span>
          <img src="images/tugas.svg" alt="" />
          <div class="flex flex-col">
            <div class="flex flex-row items-center justify-center">
              <h1 class="text-2xl text-[#144272] mr-3">Pengumpulan Tugas</h1>
            </div>
            <p class="text-xs text-[#144272] mt-1">
              Layanan pengumpulan soft file tugas
            </p>
            <p class="text-xs text-[#144272] mt-1">Google Classroom</p>
          </div>
        </a>
      </div>
    </div>
    <div
      id="popup-modal"
      tabindex="-1"
      class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full"
    >
      <div class="relative p-4 w-full max-w-md max-h-full">
        <div class="relative bg-birusemi rounded-lg shadow">
          <button
            type="button"
            class="absolute top-3 end-2.5 text-white bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
            data-modal-hide="popup-modal"
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
              Tagihan Anda sebesar Rp. 7.800.000,00. Segera selesaikan tagihan
              anda sebelum tanggal xx-xx-xxxx
            </h3>
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
