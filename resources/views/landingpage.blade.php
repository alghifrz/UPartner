<x-header>{{ $landingpage['header'] }}</x-header>
<body class="bg-background">
    <img class="absolute h-full top-0 w-full z-0" src="img/bg.png" alt="Your Company">
    <div class="min-h-full z-20"> 
        <div class="pt-12">
        <x-navbarlanding></x-navbarlanding>
        </div>
        <main class="relative"> 
            <div class="mx-24 pt-16 items-start flex min-h-screen">
                <div class="flex items-center justify-between">
                    <div>
                        <h1 class="leading-tight text-7xl font-bold mb-10 text-transparent bg-clip-text bg-gradient-to-r from-primary to-tertiary mr-32">{{ $landingpage['title'] }}</h1>
                        <h1 class="leading-tight text-3xl font-semibold text-secondary mb-16">{{ $landingpage['description'] }}</h1>
                        <a href="#" class="rounded-full text-3xl border-2 border-secondary bg-gradient-to-t from-primary via-secondary to-secondary px-8 py-4 font-semibold text-white hover:bg-gradient-to-t hover:from-primary hover:via-primary hover:to-secondary hover:text-white">{{ $landingpage['button'] }}</a>
                        <div class="mt-20">
                        <x-sosmed></x-sosmed>
                        </div>
                    </div>
                    <img src="{{ $landingpage['image'] }}" alt="" width="800px" class="animate-shake hover:animate-none hover:cursor-pointer hover:scale-105">
                </div>
            </div>
            <x-footer></x-footer>
        </main>
    </div>
      
</body>
</html>