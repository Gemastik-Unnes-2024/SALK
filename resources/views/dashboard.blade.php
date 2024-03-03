<x-app-layout>
    <!-- Header Section -->
    <section class="bg-gradient-white-blue h-100 w-screen flex items-center justify-center md:px-40 py-20">
        <div class="container mx-auto flex flex-wrap items-center justify-center">
            <div class="w-full md:w-1/2 p-4 text-center">
                <h2 class="text-4xl font-bold mb-4">REVOLUSI PERIZINAN <br> DAN AKREDITASI <br> LEMBAGA KURSUS</h2>
                <p class="text-lg mb-4">Bergabunglah untuk merevolusi alur perizinan dan membangun birokrasi sehat</p>
                <div class="flex justify-center mt-4">
                    <button class="bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-400 hover:text-white transition duration-300 flex items-center mr-4">
                        <svg class="h-5 w-5 mr-2" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7V5z" />
                        </svg>
                        <span>Mulai hari ini</span>
                    </button>
                    
                    <button class="bg-white text-blue-900 py-2 px-6 rounded-lg hover:bg-blue-100 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25" />
                            </svg>  
                        <span> Ketahui lebih dalam</span>
                    </button>
                </div>
            </div>
            <div class="w-full md:w-1/2 p-4 text-center">
                <img src="{{ asset('img/icon1.png') }}" class="mx-auto" alt="Icon 1">
            </div>  
        </div>
    </section>
 
    <!-- Tentang Kami Section -->
    <section class="bg-gradient-to-r from-white to-gray-200 py-20 text-black text-center md:px-40">
        <div class="container mx-auto">
            <h1 class="text-4xl font-bold mb-4">Tentang Kami</h1>
            <p class="text-lg mb-8">Penyedia platform terkemuka untuk sertifikasi dan akreditasi lembaga kursus. Melalui platform inovatif kami, kami berkomitmen untuk mendukung pertumbuhan dan kualitas lembaga kursus Anda.</p>
            <div class="flex justify-center gap-10">
                <div class="w-1/4 bg-gray-100 border border-gray-300 p-4 h-50 flex flex-col items-center justify-center">
                    <h2 class="text-xl font-bold mb-2">Visi</h2>
                    <p class="text-base">Mendorong kualitas pendidikan dan pemberdayaan masyarakat melalui standar sertifikasi yang tinggi dan proses akreditasi yang terpercaya.</p>
                </div>
                <div class="w-1/4 bg-gray-100 border border-gray-300 p-4 h-50 flex flex-col items-center justify-center">
                    <h2 class="text-xl font-bold mb-2">Misi</h2>
                    <p class="text-base">Mendorong kualitas pendidikan dan pemberdayaan masyarakat melalui standar sertifikasi yang tinggi dan proses akreditasi yang terpercaya.</p>
                </div>
            </div>
            <img src="{{ asset('img/icon6.png') }}" alt="Contoh Gambar" class="mx-auto mt-8 bottom-0 left-0 w-full">
        </div>
    </section>

    <!-- Rank Section -->
    <section class="bg-white h-100 w-screen flex items-center justify-center md:px-40 py-10">
        <div class="container mx-auto flex flex-wrap items-center justify-center">
            <div class="w-full md:w-1/2 p-4 text-center">
                <h2 class="text-4xl font-bold mb-4">Capai Rank Teratas, <br> Tingkatkan Akreditasi <br> Dan Reputasi</h2>
                <p class="text-lg mb-4">Kumpulkan XP Poin dan naikkan pangkat peringkat lembaga kursus Anda dan Bronze-Platinum, capai Top 10 Lembaga Kursus Terbaik</p>
            </div>
            <div class="w-full md:w-1/2 p-4 text-center">
                <img src="{{ asset('img/icon4.png') }}" class="mx-auto" alt="Icon 4">
            </div>  
        </div>
    </section>

    <!-- Birorasi Sehat Section -->
    <section class="bg-cover bg-center h-100 w-screen flex items-center justify-center md:px-40" style="background-image: url('{{ asset('img/bg1.png') }}')">
        <div class="container mx-auto flex flex-wrap items-center justify-center">
            <div class="w-full p-4 text-right py-40">
                <h2 class="text-4xl font-bold mb-4">Ciptakan Birokrasi Sehat <br> dan Bersih di Indonesia</h2>
            </div> 
        </div>
    </section>
    
    <!-- Mulai Perjalanan Section -->
    <section class="bg-white h-100 w-screen flex items-center justify-center md:px-40">
        <div class="container mx-auto flex flex-wrap items-center justify-center">
            <div class="w-full p-4 text-center">
                <h2 class="text-4xl font-bold mb-4">Mulai Perjalananmu Hari Ini!</h2>
            </div>
            <div class="flex justify-center mt-4">
                <button class="bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-400 hover:text-white transition duration-300 flex items-center">
                    <svg class="h-5 w-5 mr-2" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7V5z" />
                    </svg>
                    <span>Mulai hari ini</span>
                </button>
            </div>  
        </div>
        <div class="w-full md:w-1/2 p-4 text-center py-10">
            <img src="{{ asset('img/icon5.png') }}" class="mx-auto" alt="Icon 4">
        </div>
    </section>

    <footer class="bg-gray-800 text-white text-center py-4">
        &copy; 2024 Sipal Kursus
    </footer>
</x-app-layout>
