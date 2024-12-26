<div class="p-6 py-12 bg-gray-200 text-center flex flex-col justify-between w-full h-120 hover:bg-biruMuda rounded-2xl">
    <a href={{ $link }}>
        <img src="{{ $image }}" alt="" width="200px" class="mb-4 mx-auto rounded-full bg-gray-100">
        <p class="text-3xl font-bold mb-2">{{ $author }}</p>
        <p class="text-abu mb-8">{{ $email }}</p>
    </a>
    <x-sosmed></x-sosmed>
</div>