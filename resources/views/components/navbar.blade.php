<nav class="bg-[#FFF9F2] shadow-sm fixed w-full top-0 left-0 z-50">
  <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
    
    <!-- Logo -->
    <a href="#" class="text-2xl font-extrabold text-gray-800 tracking-tight">RESTOKU<span class="text-black"></span></a>

    <!-- Nav Links -->
    <ul class="hidden md:flex space-x-10">
      <li>
        <a href="#home" class="relative text-gray-800 font-medium after:content-[''] after:absolute after:w-full after:h-[2px] after:bg-black after:left-0 after:-bottom-1 after:scale-x-0 after:origin-right after:transition-transform after:duration-300 hover:after:scale-x-100 hover:after:origin-left">Home</a>
      </li>
      <li>
        <a href="#menu" class="relative text-gray-500 hover:text-gray-800 font-medium after:content-[''] after:absolute after:w-full after:h-[2px] after:bg-black after:left-0 after:-bottom-1 after:scale-x-0 after:origin-right after:transition-transform after:duration-300 hover:after:scale-x-100 hover:after:origin-left">Menu</a>
      </li>
      <li>
        <a href="#about" class="relative text-gray-500 hover:text-gray-800 font-medium after:content-[''] after:absolute after:w-full after:h-[2px] after:bg-black after:left-0 after:-bottom-1 after:scale-x-0 after:origin-right after:transition-transform after:duration-300 hover:after:scale-x-100 hover:after:origin-left">About</a>
      </li>
      <li>
        <a href="#delivery" class="relative text-gray-500 hover:text-gray-800 font-medium after:content-[''] after:absolute after:w-full after:h-[2px] after:bg-black after:left-0 after:-bottom-1 after:scale-x-0 after:origin-right after:transition-transform after:duration-300 hover:after:scale-x-100 hover:after:origin-left">Delivery Order</a>
      </li>
    </ul>

    <!-- Tombol Contact -->
    <a href="#contact" class="hidden md:inline-block bg-black text-white px-5 py-2 rounded-full font-medium hover:bg-gray-800 transition-all duration-300">
      Contact
    </a>

    <!-- Hamburger Menu (Mobile) -->
    <button id="menu-toggle" class="md:hidden text-gray-800 focus:outline-none">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none"
        viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M4 6h16M4 12h16M4 18h16" />
      </svg>
    </button>
  </div>

  <!-- Mobile Menu -->
  <div id="mobile-menu" class="hidden md:hidden bg-[#FFFCF7] border-t border-gray-200">
    <ul class="flex flex-col items-center space-y-4 py-4">
      <li><a href="#home" class="text-gray-800 font-medium hover:text-black">Home</a></li>
      <li><a href="#about" class="text-gray-800 font-medium hover:text-black">Menu</a></li>
      <li><a href="#menu" class="text-gray-800 font-medium hover:text-black">About</a></li>
      <li><a href="#services" class="text-gray-800 font-medium hover:text-black">Delivery Order</a></li>
      <li><a href="#contact" class="bg-black text-white px-5 py-2 rounded-full font-medium hover:bg-gray-800">Contact</a></li>
    </ul>
  </div>
</nav>

<script>
  const toggleBtn = document.getElementById("menu-toggle");
  const mobileMenu = document.getElementById("mobile-menu");

  toggleBtn.addEventListener("click", () => {
    mobileMenu.classList.toggle("hidden");
  });
</script>

