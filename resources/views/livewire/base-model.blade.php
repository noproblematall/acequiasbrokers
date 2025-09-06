<div class="max-w-7xl mx-auto space-y-8">
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-4">
        <div class="flex items-center space-x-4">
            <div class="w-16 h-16 bg-gradient-to-r from-blue-500 to-purple-600 rounded-xl flex items-center justify-center">
                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                </svg>
            </div>
            <div>
                <h1 class="text-3xl font-bold text-gray-900">Base model configuration</h1>
                <p class="text-gray-600 mt-1">Configure and manage base model settings and options for your application. </p>
            </div>
        </div>
    </div>

    @if (session()->has('message'))
    <div x-data="{ show: true }" x-show="show" x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="bg-green-50 border border-green-200 text-green-800 px-4 py-3 rounded-lg relative">
        <div class="flex items-center justify-between">
            <span>{{ session('message') }}</span>
            <button @click="show = false" class="ml-4 text-green-600 hover:text-green-800 focus:outline-none">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
    </div>
    @endif

    <div class="bg-white rounded-xl shadow-sm border-b border-gray-100">
        <div class="p-4 space-y-4">
            <h2 class="text-xl font-semibold text-gray-900 mb-4">Landing level</h2>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-3">
                    Background Color
                </label>
                <div class="flex items-center space-x-4">
                    <div class="relative group">
                        <div class="w-12 h-12 rounded-lg border-2 border-gray-400 shadow-lg overflow-hidden cursor-pointer hover:border-gray-500 transition-all duration-200 hover:shadow-md" 
                             style="background-color: {{ $landing_bg_color }};">
                            <input
                                type="color"
                                wire:model.live="landing_bg_color"
                                class="opacity-0 w-full h-full cursor-pointer"
                                title="Select background color">
                        </div>
                    </div>
                    <div class="flex-1">
                        <div class="bg-gray-50 rounded-lg p-4 border border-gray-200">
                            <div>
                                <p class="text-sm font-medium text-gray-700">Selected Color: <span class="text-sm text-gray-500">{{ $landing_bg_color }}</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="px-6 py-4 bg-gray-50 rounded-b-xl border-t border-gray-200">
            <button
                type="button"
                wire:click="updateBaseModel"
                class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-6 rounded-lg transition-colors duration-200 cursor-pointer">
                Update
            </button>
        </div>
    </div>
</div>