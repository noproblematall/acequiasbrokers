<div class="max-w-md w-full space-y-8">
    <div>
        <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
            Sign in to your account
        </h2>
    </div>

    <form wire:submit="login" class="mt-8 space-y-6">
        <div class="rounded-md shadow-sm -space-y-px">
            <div>
                <label for="email" class="sr-only">Email address</label>
                <input wire:model="email" id="email" name="email" type="email" autocomplete="email" required 
                       class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" 
                       placeholder="Email address">
            </div>
            <div>
                <label for="password" class="sr-only">Password</label>
                <input wire:model="password" id="password" name="password" type="password" autocomplete="current-password" required 
                       class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" 
                       placeholder="Password">
            </div>
        </div>
        
        <!-- Error Messages -->
        @if($errors->any())
            <div class="text-sm text-red-600 space-y-1">
                @error('email')
                    <p>{{ $message }}</p>
                @enderror
                @error('password')
                    <p>{{ $message }}</p>
                @enderror
            </div>
        @endif

        <div>
            <button type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Sign in
            </button>
        </div>
    </form>
</div>
