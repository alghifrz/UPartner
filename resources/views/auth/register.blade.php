<x-layoutregislogin :title="'Register'">
    <div class="relative w-[1300px] h-auto flex flex-col md:flex-row bg-abubiru bg-opacity-30 backdrop-blur-md rounded-[30px] shadow-xl overflow-hidden m-5">
        <!-- Register Form Container -->
        <div class="w-full md:w-1/2 h-auto md:h-full flex items-center text-gray-700 text-center p-20 z-10">

            <x-validation-errors class="mb-4" />
            
            

            <form method="POST" action="{{ route('register') }}" class="w-full">
                @csrf
            
                {{-- <p class="text-xs md:text-sm my-4">or Register with Social Platforms</p>
                <div class="flex justify-center">
                    <a href="#" class="inline-flex p-2 md:p-3 border-2 border-gray-300 rounded-lg text-lg md:text-2xl text-gray-700 no-underline mx-1 md:mx-2 hover:border-blue-500 hover:text-blue-500 transition-colors">
                        <i class="bx bxl-google"></i>
                    </a>
                    <a href="#" class="inline-flex p-2 md:p-3 border-2 border-gray-300 rounded-lg text-lg md:text-2xl text-gray-700 no-underline mx-1 md:mx-2 hover:border-blue-500 hover:text-blue-500 transition-colors">
                        <i class="bx bxl-facebook"></i>
                    </a>
                    <a href="#" class="inline-flex p-2 md:p-3 border-2 border-gray-300 rounded-lg text-lg md:text-2xl text-gray-700 no-underline mx-1 md:mx-2 hover:border-blue-500 hover:text-blue-500 transition-colors">
                        <i class="bx bxl-github"></i>
                    </a>
                    <a href="#" class="inline-flex p-2 md:p-3 border-2 border-gray-300 rounded-lg text-lg md:text-2xl text-gray-700 no-underline mx-1 md:mx-2 hover:border-blue-500 hover:text-blue-500 transition-colors">
                        <i class="bx bxl-linkedin"></i>
                    </a>
                </div> --}}

                <h1 class="text-2xl md:text-4xl font-semibold text-white -mt-3 md:mb-6">Create Account</h1>
            
                <div class="relative my-6 md:my-4 text-start">
                    <x-label for="name" value="{{ __('Nama Lengkap') }}" class="text-white text-xl mb-1"/>
                    <input id="name" name="name" :value="old('name')" type="text" required autofocus autocomplete="name" placeholder="Masukkan Nama Lengkap Anda" 
                        class="w-full py-3 px-5 pr-12 bg-gray-100 rounded-lg border-none outline-none text-sm md:text-base text-gray-700 font-medium">
                    <i class="bx bxs-user absolute right-5 top-2/3 -translate-y-1/2"></i>
                </div>
            
                <div class="relative my-6 md:my-4 text-start">
                    <x-label for="nim" value="{{ __('NIM') }}" class="text-white text-xl mb-1"/>
                    <input id="nim" name="nim" :value="old('nim')" type="text" required autofocus autocomplete="nim" placeholder="Masukkan NIM Anda" 
                        class="w-full py-3 px-5 pr-12 bg-gray-100 rounded-lg border-none outline-none text-sm md:text-base text-gray-700 font-medium">
                    <i class="bx bxs-user absolute right-5 top-2/3 -translate-y-1/2"></i>
                </div>
            
                <div class="relative my-6 md:my-4 text-start">
                    <x-label for="email" value="{{ __('Email') }}" class="text-white text-xl mb-1"/>
                    <input id="email" name="email" :value="old('email')" type="email" placeholder="Masukkan Email Anda" required autocomplete="email"
                        class="w-full py-3 px-5 pr-12 bg-gray-100 rounded-lg border-none outline-none text-sm md:text-base text-gray-700 font-medium">
                    <i class="bx bxs-envelope absolute right-5 top-2/3 -translate-y-1/2"></i>
                </div>

                <div class="relative my-6 md:my-4 text-start">
                    <x-label for="password" value="{{ __('Kata Sandi') }}" class="text-white text-xl mb-1"/>
                    <input id="password" name="password" type="password" placeholder="Masukkan Kata Sandi Anda" required autocomplete="new-password" 
                        class="w-full py-3 px-5 pr-12 bg-gray-100 rounded-lg border-none outline-none text-sm md:text-base text-gray-700 font-medium">
                    <i class="bx bxs-lock-alt absolute right-5 top-2/3 -translate-y-1/2"></i>
                </div>

                <div class="relative my-6 md:my-4 text-start">
                    <x-label for="password_confirmation" value="{{ __('Konfirmasi Kata Sandi') }}" class="text-white text-xl mb-1"/>
                    <input id="password_confirmation" name="password_confirmation" type="password" placeholder="Masukkan Kata Sandi Anda" required autocomplete="new-password" 
                        class="w-full py-3 px-5 pr-12 bg-gray-100 rounded-lg border-none outline-none text-sm md:text-base text-gray-700 font-medium">
                    <i class="bx bxs-lock-alt absolute right-5 top-2/3 -translate-y-1/2"></i>
                </div>

                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                    <div class="mt-4">
                        <x-label for="terms">
                            <div class="flex items-center">
                                <x-checkbox name="terms" id="terms" required />

                                <div class="ms-2">
                                    {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                            'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                            'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                    ]) !!}
                                </div>
                            </div>
                        </x-label>
                    </div>
                @endif

                <button type="submit" class="w-full h-12 mt-12 md:mt-12 bg-primary rounded-lg shadow-md border-none cursor-pointer text-sm md:text-base text-white font-semibold hover:bg-secondary transition-colors">
                    Register
                </button>

                
            </form>
        </div>

        <!-- Blue Panel -->
        <div class="w-full md:w-1/2 bg-primary flex items-center justify-center">
            <div class="text-center text-white p-5 md:p-0">
                <h1 class="text-2xl md:text-4xl mb-2 md:mb-4">Welcome Back!</h1>
                <p class="text-sm md:text-base mb-4 md:mb-8">Already have an account?</p>
                <a href="{{ route('login') }}" 
                    class="inline-block w-32 md:w-40 h-10 md:h-12 leading-[38px] md:leading-[46px] border-2 border-white rounded-lg text-white font-semibold hover:bg-white hover:text-[#7494ec] transition-colors">
                    Login
                </a>
            </div>
        </div>
    </div>
</x-layoutregislogin>
