<div class="bg-white rounded-xl shadow-sm border border-gray-100">
    <div class="p-6">
        <div class="flex items-center justify-between mb-6">
            <div class="flex items-center space-x-3">
                <div class="w-10 h-10 bg-gradient-to-r from-blue-500 to-indigo-600 rounded-lg flex items-center justify-center">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-gray-900">Section 1</h3>
                    <p class="text-sm text-gray-600">Logo and header section configuration</p>
                </div>
            </div>
            <label class="inline-flex items-center">
                <input type="checkbox" wire:model="section_1_is_disabled" class="rounded border-gray-300 text-red-600 focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-transparent">
                <span class="ml-2 text-sm text-gray-600 font-medium">Disable Section</span>
            </label>
        </div>
        
        <div class="space-y-6">
            <!-- Logo Settings -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                <!-- Logo Link -->
                <div class="lg:col-span-2">
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        Logo Link
                    </label>
                    <input
                        type="url"
                        wire:model="section_1_logo_link"
                        class="w-full rounded-lg border border-gray-300 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200"
                        placeholder="https://example.com/logo.png"
                        title="Enter logo URL">
                </div>

                <!-- Logo Width -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        Logo Width (%)
                    </label>
                    <input
                        type="number"
                        wire:model="section_1_logo_width"
                        min="10"
                        max="100"
                        step="1"
                        class="w-full rounded-lg border border-gray-300 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200"
                        title="Enter logo width as percentage">
                </div>
            </div>

            <!-- Background Color -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-3">
                    Background Color
                </label>
                <div class="flex items-center space-x-4">
                    <div class="relative group">
                        <div class="w-12 h-12 rounded-lg border-2 border-gray-300 shadow-sm overflow-hidden cursor-pointer hover:border-gray-400 transition-all duration-200"
                            style="background-color: {{ $section_1_bg_color }};">
                            <input
                                type="color"
                                wire:model="section_1_bg_color"
                                class="opacity-0 w-full h-full cursor-pointer"
                                title="Select background color">
                        </div>
                    </div>
                    <div class="flex-1">
                        <div class="bg-gray-50 rounded-lg p-3 border border-gray-200">
                            <p class="text-sm font-medium text-gray-700">Selected: <span class="font-mono text-sm text-gray-600">{{ $section_1_bg_color }}</span></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex justify-end pt-4 border-t border-gray-200">
                <button
                    type="button"
                    wire:click="updateSection1"
                    class="inline-flex items-center px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white font-medium text-sm rounded-lg transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    Update Section 1
                </button>
            </div>
        </div>
    </div>
</div>