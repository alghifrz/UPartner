<x-layoutregislogin :title="'Login'">
    <div class="relative w-[1300px] h-[850px] bg-white border border-gray-700 rounded-[30px] shadow-lg overflow-hidden m-5">
        <!-- Blue Panel -->
        <div class="absolute left-0 w-1/2 h-full bg-[#7494ec] flex items-center justify-center">
            <div class="text-center text-white">
                <h1 class="text-4xl mb-4">New Here?</h1>
                <p class="mb-8">Create an account and start your journey!</p>
                <a href="{{ route('register') }}" 
                    class="inline-block w-40 h-12 leading-[46px] border-2 border-white rounded-lg text-white font-semibold hover:bg-white hover:text-[#7494ec] transition-colors">
                    Register
                </a>
            </div>
        </div>

        <!-- Login Form Container -->
        <div class="absolute right-0 w-1/2 h-full bg-white flex items-center text-gray-700 text-center p-10 z-10">
            <form class="w-full">
                <h1 class="text-4xl -mt-3 mb-0">Welcome Back</h1>
                <div class="relative my-8">
                    <input type="text" placeholder="Username" required 
                        class="w-full py-3 px-5 pr-12 bg-gray-100 rounded-lg border-none outline-none text-base text-gray-700 font-medium">
                    <i class="bx bxs-user absolute right-5 top-1/2 -translate-y-1/2"></i>
                </div>
                <div class="relative my-8">
                    <input type="password" placeholder="Password" required 
                        class="w-full py-3 px-5 pr-12 bg-gray-100 rounded-lg border-none outline-none text-base text-gray-700 font-medium">
                    <i class="bx bxs-lock-alt absolute right-5 top-1/2 -translate-y-1/2"></i>
                </div>
                <div class="-mt-4 mb-4">
                    <a href="#" class="text-sm text-gray-700 no-underline">Forgot password?</a>
                </div>
                <button type="submit" class="w-full h-12 bg-blue-500 rounded-lg shadow-md border-none cursor-pointer text-base text-white font-semibold hover:bg-blue-600 transition-colors">
                    Login
                </button>
                <p class="text-sm my-4">or Login with Social Platforms</p>
                <div class="flex justify-center">
                    <a href="#" class="inline-flex p-3 border-2 border-gray-300 rounded-lg text-2xl text-gray-700 no-underline mx-2 hover:border-blue-500 hover:text-blue-500 transition-colors">
                        <i class="bx bxl-google"></i>
                    </a>
                    <a href="#" class="inline-flex p-3 border-2 border-gray-300 rounded-lg text-2xl text-gray-700 no-underline mx-2 hover:border-blue-500 hover:text-blue-500 transition-colors">
                        <i class="bx bxl-facebook"></i>
                    </a>
                    <a href="#" class="inline-flex p-3 border-2 border-gray-300 rounded-lg text-2xl text-gray-700 no-underline mx-2 hover:border-blue-500 hover:text-blue-500 transition-colors">
                        <i class="bx bxl-github"></i>
                    </a>
                    <a href="#" class="inline-flex p-3 border-2 border-gray-300 rounded-lg text-2xl text-gray-700 no-underline mx-2 hover:border-blue-500 hover:text-blue-500 transition-colors">
                        <i class="bx bxl-linkedin"></i>
                    </a>
                </div>
            </form>
        </div>
    </div>
</x-layoutregislogin>