<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'UMKM Inventory' }}</title>

    {{-- Tailwind CSS via CDN --}}
    <script src="https://cdn.tailwindcss.com"></script>

    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>


    {{-- Livewire Styles --}}
    @livewireStyles
</head>
<body class="bg-gray-50 text-gray-800">

    {{-- Navbar --}}
    @include('components.navbar')

    {{-- Konten Halaman (Livewire Content) --}}
    <main class="min-h-screen">
        {{ $slot }}
    </main>

    {{-- Footer --}}
    <footer class="bg-gray-900 text-gray-100 text-center py-4">
        <p>&copy; {{ date('Y') }} Fajar Herlambang. All rights reserved.</p>
    </footer>

    {{-- Livewire Scripts --}}
    @livewireScripts


    <!-- Best Menu -->
<script>
  function carouselData() {
    return {
      current: 0,
      items: [
        { name: 'Mie Ayam', price: '15.000', img: '{{ asset('images/mieAyam.jpg') }}' },
        { name: 'Nasi Goreng', price: '15.000', img: '{{ asset('images/nasiGoreng.jpg') }}' },
        { name: 'Sop Bakso', price: '10.000', img: '{{ asset('images/sopBakso.jpg') }}' },
        { name: 'Sop Iga Sapi', price: '20.000', img: '{{ asset('images/sopIga.jpg') }}' },
        { name: 'Soto Ayam', price: '12.000', img: '{{ asset('images/sotoAyam.jpg') }}' },
      ],
      slideWidth: 100, // default (mobile)
      visibleItems: 1,

      init() {
        this.updateVisibleItems()
        window.addEventListener('resize', () => this.updateVisibleItems())
      },

      updateVisibleItems() {
        if (window.innerWidth >= 1024) {
          this.visibleItems = 3
          this.slideWidth = 100 / 3
        } else if (window.innerWidth >= 640) {
          this.visibleItems = 2
          this.slideWidth = 50
        } else {
          this.visibleItems = 1
          this.slideWidth = 100
        }
      },

      next() {
        this.current = (this.current + 1) % (this.items.length - this.visibleItems + 1)
      },
      prev() {
        this.current = (this.current - 1 + (this.items.length - this.visibleItems + 1)) % (this.items.length - this.visibleItems + 1)
      }
    }
  }

  function menuData() {
    return {
      category: 'makanan',
      items: [],

      allData: {
        makanan: [
          { name: 'Mie Ayam', price: '$15.000', img: '{{ asset("images/mieAyam.jpg") }}' },
          { name: 'Nasi Goreng', price: '15.000', img: '{{ asset("images/nasiGoreng.jpg") }}' },
          { name: 'Sop Bakso', price: '10.000', img: '{{ asset("images/sopBakso.jpg") }}' },
          { name: 'Soto Ayam', price: '12.000', img: '{{ asset("images/sotoAyam.jpg") }}' },
          { name: 'Soto Ayam', price: '12.000', img: '{{ asset("images/sotoAyam.jpg") }}' },
        ],
        minuman: [
          { name: 'Es Teh Manis', price: '$2.00', img: '{{ asset("images/esTeh.jpg") }}' },
          { name: 'Kopi Hitam', price: '$2.50', img: '{{ asset("images/kopiHitam.jpg") }}' },
          { name: 'Jus Alpukat', price: '$3.00', img: '{{ asset("images/jusAlpukat.jpg") }}' },
          { name: 'Cappuccino', price: '$3.40', img: '{{ asset("images/cappuccino.jpg") }}' },
        ]
      },

      init() {
        this.items = this.allData[this.category];
      },

      setCategory(cat) {
        this.category = cat;
        this.items = this.allData[cat];
      }
    }
  }
</script>
</body>
</html>
