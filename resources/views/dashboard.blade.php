<x-app-layout>
    <!-- Header Section -->
    <section
        class="bg-gradient-white-blue h-100 flex items-center justify-center py-20 md:px-40"
    >
        <div
            class="container mx-auto flex flex-wrap items-center justify-center"
        >
            <div class="w-full p-4 text-center md:w-1/2">
                <h1 class="mb-4 text-5xl font-bold">
                    REVOLUSI PERIZINAN
                    <br />
                    DAN AKREDITASI
                    <br />
                    LEMBAGA KURSUS
                </h1>
                <p class="my-8 mb-4 text-lg font-bold">
                    Bergabunglah untuk merevolusi alur perizinan dan membangun
                    birokrasi sehat
                </p>
                <div class="my-8 flex justify-center">
                    <button
                        class="mr-4 flex items-center rounded-full rounded-full bg-blue-500 px-4 py-2 text-white shadow-md transition duration-300 hover:bg-blue-400 hover:text-white"
                    >
                        <svg
                            class="mr-2 h-5 w-5"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M9 5l7 7-7 7V5z"
                            />
                        </svg>
                        <span>Mulai hari ini</span>
                    </button>

                    <button
                        class="flex items-center rounded-full bg-white px-6 py-2 text-blue-900 shadow-md hover:bg-blue-100"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="mr-2 h-5 w-5"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25"
                            />
                        </svg>
                        <span>Ketahui lebih dalam</span>
                    </button>
                </div>
            </div>
            <div class="w-10 p-4 text-center md:w-1/2">
                <img
                    src="{{ asset("img/icon1.png") }}"
                    class="mx-auto"
                    alt="Icon 1"
                />
            </div>
        </div>
    </section>

    <!-- Tentang Kami Section -->
    <section
        class="bg-gradient-to-r from-white to-gray-200 py-20 text-center text-black md:px-40"
    >
        <div class="container mx-auto">
            <h1 class="mb-4 text-4xl font-bold text-blue-500">Tentang Kami</h1>
            <p class="mb-8 text-lg">
                Penyedia platform terkemuka untuk sertifikasi dan akreditasi
                lembaga kursus.
                <br />
                Melalui platform inovatif kami, kami berkomitmen untuk mendukung
                pertumbuhan dan kualitas lembaga kursus Anda.
            </p>
            <div class="flex justify-center gap-10">
                <div
                    class="h-50 flex w-1/4 flex-col items-center justify-center rounded-lg border border-gray-300 bg-gray-100 p-4 shadow-lg"
                >
                    <h2 class="mb-2 text-xl font-bold text-blue-500">Visi</h2>
                    <p class="text-base">
                        Penyedia platform terkemuka untuk sertifikasi dan
                        akreditasi lembaga kursus. Melalui platform inovatif
                        kami, kami berkomitmen untuk mendukung pertumbuhan dan
                        kualitas lembaga kursus Anda.
                    </p>
                </div>
                <div
                    class="h-50 flex w-1/4 flex-col items-center rounded-lg border border-gray-300 bg-gray-100 p-4 shadow-lg"
                >
                    <h2 class="mb-2 text-xl font-bold text-blue-500">Misi</h2>
                    <p class="text-base">
                        Menjadikan proses perizinan dan akreditasi lebih mudah
                        dan menarik bagi fasilitator agar dapat mensupport
                        pendidikan dan softskill di masyarakat.
                    </p>
                </div>
            </div>
            <div class="-mb-16">
                <img
                    src="{{ asset("img/icon6.png") }}"
                    alt="Icon 6"
                    class="bottom-0 left-0 mx-auto w-full"
                />
            </div>
        </div>
    </section>

    <!-- Rank Section -->
    <section
        class="h-100 flex items-center justify-center bg-white py-10 md:px-40"
    >
        <div
            class="container mx-auto flex flex-wrap items-center justify-center"
        >
            <div class="w-full p-4 text-center md:w-1/2">
                <h2 class="mb-4 text-4xl font-bold">
                    Capai Rank Teratas,
                    <br />
                    Tingkatkan Akreditasi
                    <br />
                    Dan Reputasi
                </h2>
                <p class="my-8 mb-4 text-lg">
                    Kumpulkan
                    <strong>XP Poin</strong>
                    dan naikkan pangkat peringkat lembaga kursus Anda dan
                    <strong>Bronze-Platinum</strong>
                    , capai Top 10 Lembaga Kursus Terbaik
                </p>
            </div>
            <div class="w-full p-4 text-center md:w-1/2">
                <img
                    src="{{ asset("img/icon4.png") }}"
                    class="mx-auto"
                    alt="Icon 4"
                />
            </div>
        </div>
    </section>

    <!-- Birorasi Sehat Section -->
    <section
        class="h-100 flex items-center justify-center bg-cover bg-center md:px-40"
        style="background-image: url('{{ asset("img/bg1.png") }}')"
    >
        <div
            class="container mx-auto flex flex-wrap items-center justify-center"
        >
            <div class="w-full p-4 py-40 text-right">
                <h2 class="mb-4 text-4xl font-bold">
                    Ciptakan Birokrasi Sehat
                    <br />
                    dan Bersih di Indonesia
                </h2>
            </div>
        </div>
    </section>

    <!-- Mulai Perjalanan Section -->
    <section class="h-100 flex items-center justify-center bg-white md:px-40">
        <div
            class="container mx-auto flex flex-wrap items-center justify-center"
        >
            <div class="w-full p-4 text-center">
                <h2 class="mb-4 text-4xl font-bold">
                    Mulai Perjalananmu Hari Ini!
                </h2>
            </div>
            <div class="mt-4 flex justify-center">
                <button
                    class="flex items-center rounded-full bg-blue-500 px-4 py-2 text-white transition duration-300 hover:bg-blue-400 hover:text-white"
                >
                    <svg
                        class="mr-2 h-5 w-5"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M9 5l7 7-7 7V5z"
                        />
                    </svg>
                    <span>Mulai hari ini</span>
                </button>
            </div>
        </div>
        <div class="w-full p-4 py-10 text-center md:w-1/2">
            <img
                src="{{ asset("img/icon5.png") }}"
                class="mx-auto"
                alt="Icon 4"
            />
        </div>
    </section>

    <footer class="h-100 bg-gray-800 py-4 text-white">
        <div class="m-8 flex shrink-0 items-center">
            <a href="{{ route("faq") }}">
                <img
                    src="{{ asset("img/logo.png") }}"
                    class="h-12"
                    alt="Logo"
                />
            </a>
        </div>
        <p class="m-8 mb-4 text-lg">
            Bergabunglah untuk merevolusi alur perizinan
            <br />
            dan membangun birokrasi sehat
        </p>
        <div class="m-8">
            &copy;Copyright 2024 Sipal Kursus. All rights reserved
        </div>
    </footer>
</x-app-layout>
