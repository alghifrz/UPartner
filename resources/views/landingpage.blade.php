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

            <div class="mx-64 ml-80 pt-16 items-start mb-36">
                <div class="flex items-center justify-between gap-12">
                    <div class="text-center">
                        <img src="img/icon1.png" alt="" class="absolute w-45 h-auto left-20 top-100 mt-0">
                        <h1 class="text-5xl font-bold mb-6 text-secondary">{{ $landingpage['content']['judul'][0] }}</h1>
                        <p class="bg-white p-10 py-8 rounded-2xl text-center text-2xl text-secondary leading-relaxed">{!! $landingpage['content']['description'][0] !!}</p>
                    </div>
                    <img src="{{ $landingpage ['content'][ 'gambar'][0]}}" alt="" width="600px" class="animate-shake hover:animate-none hover:cursor-pointer hover:scale-105">
                </div>
            </div>

            <div class="mx-64 mr-80 pt-16 items-start mb-36">
                <div class="flex items-center justify-between gap-12">
                    <img src="{{ $landingpage ['content'][ 'gambar'][1]}}" alt="" width="600px" class="animate-shake hover:animate-none hover:cursor-pointer hover:scale-105">
                    <div class="text-center">
                        <img src="img/icon2.png" alt="" class="absolute w-45 h-auto right-20 top-100 mt-0">
                        <h1 class="text-5xl font-bold mb-6 text-secondary">{{ $landingpage['content']['judul'][1] }}</h1>
                        <p class="bg-white p-10 py-8 rounded-2xl text-center text-2xl text-secondary leading-relaxed">{!! $landingpage['content']['description'][1] !!}</p>
                    </div>
                </div>
            </div>
            
            <div class="bg-secondary p-16 mb-36">
                <img src="img/icon3.png" alt="" class="absolute w-45 h-auto left-20 top-110 z-0">
                <img src="img/icon5.png" alt="" class="absolute w-45 h-auto right-0 top-100 z-0">
                <h1 class="text-5xl font-bold mb-12 text-center text-white">{{ $landingpage['judulFitur']}}</h1>
                <div class="mx-24 flex flex-wrap justify-center gap-16">
                    @foreach($landingpage['fitur'] as $fitur)
                        <a href="{{ $fitur['link'] }}" class="fitur-item w-[25%] h-auto bg-white bg-opacity-20 backdrop-blur-sm rounded-2xl p-4 justify-center text-center flex flex-col items-center shadow-lg hover:cursor-pointer hover:scale-105 hover:duration-500 z-10">
                            <img src="{{ $fitur['gambar'] }}" alt="Fitur Gambar" class="h-[150px] w-auto mx-auto">
                            <p class="text-xl font-semibold text-white">{{ $fitur['isi'] }}</p>
                        </a>
                    @endforeach
                </div>                
            </div> 

            <div class="mb-36">
                <h1 class="text-5xl font-bold mb-12 text-center text-secondary">{{ $landingpage['judulAlasan']}}</h1>
                <div class="mx-24 flex flex-wrap justify-center gap-16">
                    @foreach($landingpage['alasan'] as $fitur)
                        <a href="{{ $fitur['link'] }}" class="fitur-item w-[20%] h-auto bg-muda rounded-2xl p-4 justify-center text-center flex flex-col items-center shadow-lg hover:cursor-pointer hover:scale-105 hover:duration-500 z-10 py-20">
                            <img src="{{ $fitur['gambar'] }}" alt="Fitur Gambar" class="h-[150px] w-auto mx-auto mb-8">
                            <p class="text-xl font-semibold text-primary">{{ $fitur['isi'] }}</p>
                        </a>
                    @endforeach
                </div> 
            </div>

            <div class="mb-36 overflow-hidden">
                <div class="bg-muda -rotate-3 p-20 shadow-lg flex flex-col justify-center items-center text-center">
                    <h1 class="text-6xl font-semibold mb-12 text-primary rotate-3 max-w-3xl leading-normal">{{ $landingpage['ajak'] }}</h1>
                    <a href="{{ route('register') }}" class="bg-primary rounded-full text-4xl  px-16 py-4 font-semibold text-white hover:bg-secondary hover:text-white rotate-3">Daftar</a>
                </div>
            </div>
            

            <x-footer></x-footer>
        </main>
    </div>
      
</body>
</html>