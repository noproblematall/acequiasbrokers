<div class="bg-white rounded-xl shadow-sm border border-gray-100">
    <div class="p-6">
        <div class="flex items-center justify-between mb-6">
            <div class="flex items-center space-x-3">
                <div class="w-10 h-10 bg-gradient-to-r from-orange-500 to-red-600 rounded-lg flex items-center justify-center">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-gray-900">Section 4</h3>
                    <p class="text-sm text-gray-600">Calendar section with image and styling options</p>
                </div>
            </div>
            <label class="inline-flex items-center">
                <input type="checkbox" wire:model="section_4_is_disabled" class="rounded border-gray-300 text-red-600 focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-transparent">
                <span class="ml-2 text-sm text-gray-600 font-medium">Disable Section</span>
            </label>
        </div>

        <div class="space-y-6">
            <!-- Background Color -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-3">Background Color</label>
                <div class="flex items-center space-x-4">
                    <div class="w-12 h-12 rounded-lg border-2 border-gray-300 shadow-sm overflow-hidden cursor-pointer hover:border-gray-400 transition-all duration-200" style="background-color: {{ $section_4_bg_color }};">
                        <input type="color" wire:model="section_4_bg_color" class="opacity-0 w-full h-full cursor-pointer">
                    </div>
                    <div class="flex-1">
                        <div class="bg-gray-50 rounded-lg p-3 border border-gray-200">
                            <p class="text-sm font-medium text-gray-700">Selected Color: <span class="font-mono text-sm text-gray-600">{{ $section_4_bg_color }}</span></p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Picture Link -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-3">Picture Link</label>
                <input type="url" wire:model="section_4_picture_link" class="w-full rounded-lg border border-gray-300 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent transition-all" placeholder="https://example.com/image.jpg">
            </div>

            <!-- Line 1 Styling -->
            <div class="border-t border-gray-200 pt-6">
                <h4 class="text-md font-semibold text-gray-800 mb-4 flex items-center">
                    <span class="w-2 h-2 bg-orange-500 rounded-full mr-2"></span>
                    Line 1 Content & Styling
                </h4>
                <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-5 gap-4">
                    <div class="xl:col-span-5 lg:col-span-2 mb-4">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Line 1 Text</label>
                        <input type="text" wire:model="section_4_line_1" class="w-full rounded-lg border border-gray-300 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent transition-all" placeholder="Enter line 1 text">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Font</label>
                        <select wire:model="section_4_line_1_font_name" class="w-full rounded-lg border border-gray-300 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-orange-500">
                            <option value="Helvetica Neue">Helvetica Neue</option>
                            <option value="Arial">Arial</option>
                            <option value="Ubuntu">Ubuntu</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Weight</label>
                        <select wire:model="section_4_line_1_font_weight" class="w-full rounded-lg border border-gray-300 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-orange-500">
                            <option value="font-normal">Normal</option>
                            <option value="font-medium">Medium</option>
                            <option value="font-semibold">Semibold</option>
                            <option value="font-bold">Bold</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Size</label>
                        <select wire:model="section_4_line_1_font_size" class="w-full rounded-lg border border-gray-300 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-orange-500">
                            <option value="text-sm">Small</option>
                            <option value="text-base">Base</option>
                            <option value="text-lg">Large</option>
                            <option value="text-xl">XL</option>
                            <option value="text-2xl">2XL</option>
                            <option value="text-3xl">3XL</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Color</label>
                        <input type="color" wire:model="section_4_line_1_font_color" class="w-full h-10 rounded-lg border border-gray-300">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Alignment</label>
                        <select wire:model="section_4_line_1_text_alignment" class="w-full rounded-lg border border-gray-300 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-orange-500">
                            <option value="text-left">Left</option>
                            <option value="text-center">Center</option>
                            <option value="text-right">Right</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Line 2 Styling -->
            <div class="border-t border-gray-200 pt-6">
                <h4 class="text-md font-semibold text-gray-800 mb-4 flex items-center">
                    <span class="w-2 h-2 bg-red-500 rounded-full mr-2"></span>
                    Line 2 Content & Styling
                </h4>
                <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-5 gap-4">
                    <div class="xl:col-span-5 lg:col-span-2 mb-4">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Line 2 Text</label>
                        <input type="text" wire:model="section_4_line_2" class="w-full rounded-lg border border-gray-300 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-transparent transition-all" placeholder="Enter line 2 text">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Font</label>
                        <select wire:model="section_4_line_2_font_name" class="w-full rounded-lg border border-gray-300 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-red-500">
                            <option value="Helvetica Neue">Helvetica Neue</option>
                            <option value="Arial">Arial</option>
                            <option value="Ubuntu">Ubuntu</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Weight</label>
                        <select wire:model="section_4_line_2_font_weight" class="w-full rounded-lg border border-gray-300 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-red-500">
                            <option value="font-normal">Normal</option>
                            <option value="font-medium">Medium</option>
                            <option value="font-semibold">Semibold</option>
                            <option value="font-bold">Bold</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Size</label>
                        <select wire:model="section_4_line_2_font_size" class="w-full rounded-lg border border-gray-300 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-red-500">
                            <option value="text-sm">Small</option>
                            <option value="text-base">Base</option>
                            <option value="text-lg">Large</option>
                            <option value="text-xl">XL</option>
                            <option value="text-2xl">2XL</option>
                            <option value="text-3xl">3XL</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Color</label>
                        <input type="color" wire:model="section_4_line_2_font_color" class="w-full h-10 rounded-lg border border-gray-300">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Alignment</label>
                        <select wire:model="section_4_line_2_text_alignment" class="w-full rounded-lg border border-gray-300 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-red-500">
                            <option value="text-left">Left</option>
                            <option value="text-center">Center</option>
                            <option value="text-right">Right</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Button Styling -->
            <div class="border-t border-gray-200 pt-6">
                <h4 class="text-md font-semibold text-gray-800 mb-4 flex items-center">
                    <span class="w-2 h-2 bg-blue-500 rounded-full mr-2"></span>
                    Button Styling
                </h4>
                <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-6 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Button BG Color</label>
                        <input type="color" wire:model="section_4_button_1_bg_color" class="w-full h-10 rounded-lg border border-gray-300">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Font</label>
                        <select wire:model="section_4_button_1_font_name" class="w-full rounded-lg border border-gray-300 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <option value="Ubuntu">Ubuntu</option>
                            <option value="Helvetica Neue">Helvetica Neue</option>
                            <option value="Arial">Arial</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Weight</label>
                        <select wire:model="section_4_button_1_font_weight" class="w-full rounded-lg border border-gray-300 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <option value="font-normal">Normal</option>
                            <option value="font-medium">Medium</option>
                            <option value="font-semibold">Semibold</option>
                            <option value="font-bold">Bold</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Size</label>
                        <select wire:model="section_4_button_1_font_size" class="w-full rounded-lg border border-gray-300 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <option value="text-sm">Small</option>
                            <option value="text-base">Base</option>
                            <option value="text-lg">Large</option>
                            <option value="text-xl">XL</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Text Color</label>
                        <input type="color" wire:model="section_4_button_1_font_color" class="w-full h-10 rounded-lg border border-gray-300">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Icon Link</label>
                        <input type="url" wire:model="section_4_button_1_icon_link" class="w-full rounded-lg border border-gray-300 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="https://example.com/icon.png">
                    </div>
                </div>
            </div>

            <div class="flex justify-end pt-6 border-t border-gray-200">
                <button type="button" wire:click="updateSection4" class="inline-flex items-center px-4 py-2 bg-orange-600 hover:bg-orange-700 text-white font-medium text-sm rounded-lg transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-offset-2">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    Update Section 4
                </button>
            </div>
        </div>
    </div>
</div>