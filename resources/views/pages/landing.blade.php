<div>
<section id="home" class="bg-[#FFF9F2] min-h-screen flex flex-col md:flex-row items-center justify-center gap-8 px-6 pt-32 pb-16">
    <div class="max-w-7xl mx-auto w-full flex flex-col md:flex-row items-center gap-8">

      <!-- Kiri: Text Hero -->
      <div class="flex-1 space-y-6 text-center md:text-left">
        <span class="text-4xl font-semibold border border-[#ff5722] text-[#ff5722] rounded-full px-4 py-1 inline-block">
          BEST FOOD FOREVER
        </span>
        <h1 class="text-6xl md:text-7xl lg:text-8xl font-extrabold text-[#2B2B2B] leading-tight">
          Mie Ayam Bakso <br> PARADISE
        </h1>

        <button
          class="bg-[#1C1C1C] text-white px-8 py-3 rounded-full font-semibold hover:bg-[#333] transition-all duration-300">
          ORDER NOW
        </button>
      </div>

              <!-- Kanan: Kartu & Gambar -->
      <div class="relative flex-1 flex justify-center items-center max-w-2xl">

        <!-- Gambar hero -->
        <img
          src="{{ asset('images/mieAyam.jpg') }}"
          alt="Food Dish"
          class="w-[90%] h-auto max-h-[600px] object-cover rounded-[50px] shadow-2xl"
        />

      </div>

    </div>
  </section>


  <section class="bg-[#FFF9F2] py-20 px-6">
  <div class="max-w-7xl mx-auto text-center mb-10">
    <h2 class="text-4xl font-extrabold text-[#2B2B2B] mb-4">Best Menu</h2>
    <p class="text-gray-600">Explore our top picks — delicious and fresh!</p>
  </div>

  <div 
    x-data="carouselData()"
    x-init="init()"
    class="relative"
  >
    <!-- Container Menu -->
    <div class="overflow-hidden">
      <div 
        class="flex transition-transform duration-500 ease-in-out"
        :style="`transform: translateX(-${current * slideWidth}%)`"
      >
        <template x-for="(item, index) in items" :key="index">
          <div class="min-w-full sm:min-w-[50%] lg:min-w-[33.333%] px-3">
            <div class="bg-white rounded-3xl shadow-lg overflow-hidden">
              <img :src="item.img" alt="" class="w-full h-64 object-cover">
              <div class="bg-[#1C1C1C] text-white p-5 flex justify-between items-center rounded-t-none">
                <div>
                  <h3 class="font-bold text-lg" x-text="item.name"></h3>
                  <div class="flex items-center mt-1 space-x-2">
                    <span class="bg-yellow-400 w-6 h-6 flex items-center justify-center rounded-full">
                      <span class="text-black text-sm">→</span>
                    </span>
                    <span class="text-yellow-400 font-bold text-lg" x-text="item.price"></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </template>
      </div>
    </div>

    <!-- Tombol Navigasi -->
    <div class="flex justify-center items-center space-x-3 mt-8">
      <button 
        @click="prev()"
        class="p-3 rounded-lg border border-gray-400 hover:bg-gray-100 transition">
        ←
      </button>
      <button 
        @click="next()"
        class="p-3 rounded-lg bg-[#1C1C1C] text-white hover:bg-[#333] transition">
        →
      </button>
    </div>
  </div>
</section>


<section id="menu" x-data="menuData()" x-init="init()" class="py-12 bg-white">
  <div class="flex justify-center gap-4 mb-8">
    <button 
      @click="setCategory('makanan')" 
      :class="category === 'makanan' ? 'bg-[#ff5722] text-white' : 'bg-white text-[#2B2B2B] border border-gray-300 hover:bg-[#ff5722] hover:text-white transition'" 
      class="tab-btn px-6 py-2 rounded-full font-semibold">
      Makanan
    </button>
    <button 
      @click="setCategory('minuman')" 
      :class="category === 'minuman' ? 'bg-[#ff5722] text-white' : 'bg-white text-[#2B2B2B] border border-gray-300 hover:bg-[#ff5722] hover:text-white transition'" 
      class="tab-btn px-6 py-2 rounded-full font-semibold">
      Minuman
    </button>
  </div>

  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 px-6 lg:px-16">
    <template x-for="(item, index) in items" :key="index">
      <div class="rounded-2xl overflow-hidden shadow-lg bg-white">
        <img :src="item.img" alt="" class="w-full h-56 object-cover">
        <div class="bg-gray-900 text-white p-4 flex justify-between items-center rounded-b-2xl">
          <div>
            <h3 class="font-semibold text-lg" x-text="item.name"></h3>
          </div>
          <div class="flex items-center gap-2">
            <span class="bg-yellow-400 text-black w-6 h-6 flex items-center justify-center rounded-full">
              →
            </span>
            <p class="text-yellow-400 font-bold" x-text="item.price"></p>
          </div>
        </div>
      </div>
    </template>
  </div>
</section>

<section id="about" class="py-20 bg-white">
  <div class="container mx-auto px-6 lg:px-16 flex flex-col lg:flex-row items-center gap-12">
    <!-- Gambar di Kiri -->
    <div class="lg:w-1/2">
      <img 
        src="{{ asset('images/mieAyam.jpg') }}" 
        alt="About Us" 
        class="rounded-2xl shadow-lg w-full h-[400px] object-cover">
    </div>

    <!-- Teks di Kanan -->
    <div class="lg:w-1/2 text-gray-800">
      <h2 class="text-3xl lg:text-4xl font-bold mb-4 text-[#ff5722]">Tentang Kami</h2>
      <h3 class="text-2xl font-semibold mb-3">Rasakan Cita Rasa Terbaik Kami</h3>
      <p class="text-gray-600 leading-relaxed mb-6">
        Kami menghadirkan beragam hidangan lezat yang dibuat dari bahan segar pilihan 
        dan dimasak oleh chef berpengalaman. Dengan suasana yang nyaman dan pelayanan ramah, 
        kami siap memberikan pengalaman kuliner yang tak terlupakan bagi Anda.
      </p>
    </div>
  </div>
</section>

<section id="delivery" class="py-20 bg-[#fff7f3]">
  <div class="container mx-auto px-6 lg:px-16 flex flex-col-reverse lg:flex-row items-center gap-12">
    
    <!-- Bagian Kiri (Teks) -->
    <div class="lg:w-1/2 text-gray-800">
      <h2 class="text-3xl lg:text-4xl font-bold mb-4 text-[#ff5722]">Delivery Order</h2>
      <h3 class="text-2xl font-semibold mb-3">Pesan Makanan Favoritmu dari Rumah</h3>
      <p class="text-gray-600 leading-relaxed mb-6">
        Nikmati kenyamanan memesan makanan tanpa harus keluar rumah!  
        Kami menyediakan layanan <span class="font-semibold">delivery cepat</span> 
        langsung ke pintu Anda. Cukup klik tombol di bawah ini dan pesan melalui WhatsApp.
      </p>

      <!-- Tombol Pesan via WhatsApp -->
      <a 
        href="https://wa.me/6285890558653?text=Halo%20kak%2C%20saya%20mau%20pesan%20makanan%20delivery%20dong!" 
        target="_blank"
        class="bg-[#25D366] flex items-center gap-2 text-white px-6 py-3 rounded-full font-semibold hover:bg-[#20b857] transition inline-block w-fit">
        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-5 h-5" viewBox="0 0 24 24">
          <path d="M12 2C6.486 2 2 6.486 2 12a9.93 9.93 0 0 0 1.613 5.43L2 22l4.708-1.6A9.938 9.938 0 0 0 12 22c5.514 0 10-4.486 10-10S17.514 2 12 2zm0 18a8.02 8.02 0 0 1-4.272-1.22l-.305-.184-2.799.952.958-2.707-.192-.312A8.02 8.02 0 0 1 4 12c0-4.411 3.589-8 8-8s8 3.589 8 8-3.589 8-8 8zm4.416-5.576c-.242-.121-1.434-.707-1.656-.787-.223-.082-.385-.121-.547.121s-.629.787-.771.949c-.143.162-.283.182-.525.061-.242-.121-1.023-.377-1.949-1.201-.72-.64-1.207-1.429-1.348-1.671-.143-.242-.015-.373.107-.494.111-.111.242-.283.364-.424.121-.141.162-.242.242-.404.081-.162.04-.303-.02-.424-.061-.121-.547-1.316-.748-1.802-.197-.473-.398-.408-.547-.416l-.467-.008c-.162 0-.424.061-.646.303s-.848.828-.848 2.02.869 2.34.99 2.502c.121.162 1.713 2.619 4.15 3.672.58.25 1.033.398 1.385.51.582.186 1.111.16 1.529.098.467-.07 1.434-.586 1.637-1.152.202-.566.202-1.051.141-1.152-.06-.101-.222-.162-.465-.283z"/>
        </svg>
        Pesan via WhatsApp
      </a>
    </div>

    <!-- Bagian Kanan (Gambar) -->
    <div class="lg:w-1/2 flex justify-center">
      <img 
        src="{{ asset('images/delivery.png') }}" 
        alt="Delivery Order"
        class="rounded-2xl w-full max-w-md object-cover">
    </div>

  </div>
</section>




</div>
