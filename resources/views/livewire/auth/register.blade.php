@section('title', 'Create a new account')

<div>
    <div class="sm:mx-auto sm:w-full sm:max-w-md">
        <h2 class="mt-6 text-3xl font-extrabold text-center text-gray-900 leading-9">
            Create an account
        </h2>

        <p class="mt-2 text-sm text-center hover:underline text-gray-200 leading-5 max-w">
            <a href="{{ route('login') }}" class="font-light text-blue focus:outline-none focus:underline transition ease-in-out duration-150">
                already have one?
            </a>
        </p>
    </div>

    <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md shadow-2xl">
        <div class="px-4 py-8 text-white shadow sm:px-10 bg-blue ">
            <form wire:submit.prevent="register">
                <div>
                    <label for="name" class="block text-sm text-gray-700 leading-5">
                        name
                    </label>

                    <div class="mt-1 shadow-sm">
                        <input wire:model.lazy="name" id="name" type="text" required autofocus class="appearance-none block w-full px-3 py-2 placeholder-black text-black focus:outline-none focus:ring-blue transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('name') text-red-900 placeholder-red-300 focus:ring-red @enderror" />
                    </div>

                    @error('name')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mt-6">
                    <label for="email" class="block text-sm text-gray-700 leading-5">
                        email
                    </label>

                    <div class="mt-1 shadow-sm">
                        <input wire:model.lazy="email" id="email" type="email" required class="appearance-none block w-full px-3 py-2 placeholder-black text-black focus:outline-none focus:ring-blue transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('email') text-red-900 placeholder-red-300 focus:ring-red @enderror" />
                    </div>

                    @error('email')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mt-6">
                    <label for="password" class="block text-sm text-gray-700 leading-5">
                        password
                    </label>

                    <div class="mt-1 shadow-sm">
                        <input wire:model.lazy="password" id="password" type="password" required class="appearance-none block w-full px-3 py-2 placeholder-black text-black font-bold focus:outline-none focus:ring-blue transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('password') text-red-900 placeholder-red-300 focus:ring-red @enderror" />
                    </div>

                    @error('password')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mt-6">
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-700 leading-5">
                        password confirmation
                    </label>

                    <div class="mt-1 shadow-sm">
                        <input wire:model.lazy="passwordConfirmation" id="password_confirmation" type="password" required class="block w-full px-3 py-2 font-bold placeholder-black text-black appearance-none focus:outline-none focus:ring-blue transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                    </div>
                </div>

                <div class="mt-10">
                    <span class="block w-full shadow-sm">
                        <button type="submit" class="flex justify-center w-full px-4 py-2 font-medium text-black bg-formaggio hover:bg-darkformaggio focus:outline-none transition duration-150 ease-in-out">
                            Let's Make Some Forms!
                        </button>
                    </span>
                </div>
            </form>
        </div>
    </div>
</div>
