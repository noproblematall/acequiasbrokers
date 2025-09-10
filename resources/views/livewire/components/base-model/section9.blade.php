<div class="bg-white rounded-xl shadow-sm border border-gray-100 p-4">
    <div class="flex items-center justify-between mb-6">
        <div class="flex items-center space-x-3">
            <div class="w-10 h-10 bg-gradient-to-r from-cyan-600 to-cyan-700 rounded-lg flex items-center justify-center">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                </svg>
            </div>
            <div>
                <h3 class="text-lg font-semibold text-gray-900">Section 9</h3>
            </div>
        </div>
        <label class="inline-flex items-center">
            <input type="checkbox" wire:model="section_9_is_disabled" class="rounded border-gray-300 text-red-600 focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-transparent">
            <span class="ml-2 text-sm text-gray-600 font-medium">Disable Section</span>
        </label>
    </div>

    <div class="space-y-6">
        <!-- Background Color -->
        <div x-data="{ selectedColor: '{{ $section_9_bg_color }}' }">
            <label class="block text-sm font-medium text-gray-700 mb-3">Background Color</label>
            <div class="flex items-center space-x-4">
                <div class="w-10 h-10 rounded-lg border-2 border-gray-300 shadow-sm overflow-hidden cursor-pointer hover:border-gray-400 transition-all duration-200" :style="'background-color: ' + selectedColor" wire:key="bg-color-{{ $section_9_bg_color }}">
                    <input type="color" wire:model="section_9_bg_color" x-model="selectedColor" class="opacity-0 w-full h-full cursor-pointer">
                </div>
                <div class="flex-1">
                    <div class="bg-gray-50 rounded-lg p-3 border border-gray-200 h-10 flex items-center">
                        <p class="text-sm font-medium text-gray-700">Selected Color: <span class="font-mono text-sm text-gray-600" x-text="selectedColor">{{ $section_9_bg_color }}</span></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Rectangle 1 -->
        <div class="border-t border-gray-200 pt-6">
            <h4 class="text-md font-semibold text-gray-800 mb-4 flex items-center">
                <span class="w-2 h-2 bg-cyan-500 rounded-full mr-2"></span>
                Rectangle 1 - Icon & Title
            </h4>

            <!-- Icon URL -->
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 mb-2">Icon URL</label>
                <input type="url" wire:model="section_9_rect1_icon_url" class="w-full rounded-lg border border-gray-300 px-4 h-10 focus:outline-none focus:ring-2 focus:ring-cyan-500" placeholder="https://example.com/icon.png">
            </div>

            <!-- Title Text -->
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 mb-2">Title Text</label>
                <input type="text" wire:model="section_9_rect1_title" class="w-full rounded-lg border border-gray-300 px-4 h-10 focus:outline-none focus:ring-2 focus:ring-cyan-500" placeholder="Enter title text">
            </div>

            <!-- Title Styling -->
            <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-5 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Font</label>
                    <select wire:model="section_9_rect1_title_font_name" class="w-full rounded-lg border border-gray-300 px-3 h-10 focus:outline-none focus:ring-2 focus:ring-cyan-500">
                        @foreach($fontFamilies as $font)
                        <option value="{{ $font }}">{{ $font }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Weight</label>
                    <select wire:model="section_9_rect1_title_font_weight" class="w-full rounded-lg border border-gray-300 px-3 h-10 focus:outline-none focus:ring-2 focus:ring-cyan-500">
                        @foreach($fontWeights as $weight)
                        <option value="{{ $weight }}">{{ ucfirst(str_replace('font-', '', $weight)) }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Size</label>
                    <select wire:model="section_9_rect1_title_font_size" class="w-full rounded-lg border border-gray-300 px-3 h-10 focus:outline-none focus:ring-2 focus:ring-cyan-500">
                        @foreach($fontSizes as $size)
                        <option value="{{ $size }}">{{ ucfirst(str_replace('text-', '', $size)) }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Color</label>
                    <div class="flex items-center space-x-3" x-data="{ selectedColor: '{{ $section_9_rect1_title_font_color }}' }">
                        <div class="w-10 h-10 rounded-lg border-2 border-gray-300 shadow-sm overflow-hidden cursor-pointer hover:border-gray-400 transition-all duration-200" :style="'background-color: ' + selectedColor" wire:key="rect1-title-color-{{ $section_9_rect1_title_font_color }}">
                            <input type="color" wire:model="section_9_rect1_title_font_color" x-model="selectedColor" class="opacity-0 w-full h-full cursor-pointer">
                        </div>
                        <div class="flex-1">
                            <div class="bg-gray-50 rounded-md p-2 border border-gray-200 h-10 flex items-center">
                                <p class="text-xs font-mono text-gray-600" x-text="selectedColor">{{ $section_9_rect1_title_font_color }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Alignment</label>
                    <select wire:model="section_9_rect1_title_text_alignment" class="w-full rounded-lg border border-gray-300 px-3 h-10 focus:outline-none focus:ring-2 focus:ring-cyan-500">
                        @foreach($textAlignments as $alignment)
                        <option value="{{ $alignment }}">{{ ucfirst(str_replace('text-', '', $alignment)) }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <!-- Rectangle 2 -->
        <div class="border-t border-gray-200 pt-6">
            <h4 class="text-md font-semibold text-gray-800 mb-4 flex items-center">
                <span class="w-2 h-2 bg-cyan-500 rounded-full mr-2"></span>
                Rectangle 2 - Image & Text
            </h4>

            <!-- Image URL -->
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 mb-2">Image URL</label>
                <input type="url" wire:model="section_9_rect2_image_url" class="w-full rounded-lg border border-gray-300 px-4 h-10 focus:outline-none focus:ring-2 focus:ring-cyan-500" placeholder="https://example.com/image.jpg">
            </div>

            <!-- Text Content -->
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 mb-2">Text Content</label>
                <textarea wire:model="section_9_rect2_text" rows="3" class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-cyan-500" placeholder="Enter text content"></textarea>
            </div>

            <!-- Text Styling -->
            <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-5 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Font</label>
                    <select wire:model="section_9_rect2_text_font_name" class="w-full rounded-lg border border-gray-300 px-3 h-10 focus:outline-none focus:ring-2 focus:ring-cyan-500">
                        @foreach($fontFamilies as $font)
                        <option value="{{ $font }}">{{ $font }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Weight</label>
                    <select wire:model="section_9_rect2_text_font_weight" class="w-full rounded-lg border border-gray-300 px-3 h-10 focus:outline-none focus:ring-2 focus:ring-cyan-500">
                        @foreach($fontWeights as $weight)
                        <option value="{{ $weight }}">{{ ucfirst(str_replace('font-', '', $weight)) }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Size</label>
                    <select wire:model="section_9_rect2_text_font_size" class="w-full rounded-lg border border-gray-300 px-3 h-10 focus:outline-none focus:ring-2 focus:ring-cyan-500">
                        @foreach($fontSizes as $size)
                        <option value="{{ $size }}">{{ ucfirst(str_replace('text-', '', $size)) }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Color</label>
                    <div class="flex items-center space-x-3" x-data="{ selectedColor: '{{ $section_9_rect2_text_font_color }}' }">
                        <div class="w-10 h-10 rounded-lg border-2 border-gray-300 shadow-sm overflow-hidden cursor-pointer hover:border-gray-400 transition-all duration-200" :style="'background-color: ' + selectedColor" wire:key="rect2-text-color-{{ $section_9_rect2_text_font_color }}">
                            <input type="color" wire:model="section_9_rect2_text_font_color" x-model="selectedColor" class="opacity-0 w-full h-full cursor-pointer">
                        </div>
                        <div class="flex-1">
                            <div class="bg-gray-50 rounded-md p-2 border border-gray-200 h-10 flex items-center">
                                <p class="text-xs font-mono text-gray-600" x-text="selectedColor">{{ $section_9_rect2_text_font_color }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Alignment</label>
                    <select wire:model="section_9_rect2_text_text_alignment" class="w-full rounded-lg border border-gray-300 px-3 h-10 focus:outline-none focus:ring-2 focus:ring-cyan-500">
                        @foreach($textAlignments as $alignment)
                        <option value="{{ $alignment }}">{{ ucfirst(str_replace('text-', '', $alignment)) }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <!-- Button Configuration -->
        <div class="border-t border-gray-200 pt-6">
            <h4 class="text-md font-semibold text-gray-800 mb-4 flex items-center">
                <span class="w-2 h-2 bg-cyan-500 rounded-full mr-2"></span>
                Button Configuration
            </h4>

            <!-- Button Content -->
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 mb-2">Button Text</label>
                <input type="text" wire:model="section_9_button_text" class="w-full rounded-lg border border-gray-300 px-4 h-10 focus:outline-none focus:ring-2 focus:ring-cyan-500">
            </div>

            <!-- Button Styling in One Row -->
            <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-6 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Background Color</label>
                    <div class="flex items-center space-x-3" x-data="{ selectedColor: '{{ $section_9_button_bg_color }}' }">
                        <div class="w-10 h-10 rounded-lg border-2 border-gray-300 shadow-sm overflow-hidden cursor-pointer hover:border-gray-400 transition-all duration-200" :style="'background-color: ' + selectedColor" wire:key="button-bg-color-{{ $section_9_button_bg_color }}">
                            <input type="color" wire:model="section_9_button_bg_color" x-model="selectedColor" class="opacity-0 w-full h-full cursor-pointer">
                        </div>
                        <div class="flex-1">
                            <div class="bg-gray-50 rounded-md p-2 border border-gray-200 h-10 flex items-center">
                                <p class="text-xs font-mono text-gray-600" x-text="selectedColor">{{ $section_9_button_bg_color }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Font Color</label>
                    <div class="flex items-center space-x-3" x-data="{ selectedColor: '{{ $section_9_button_font_color }}' }">
                        <div class="w-10 h-10 rounded-lg border-2 border-gray-300 shadow-sm overflow-hidden cursor-pointer hover:border-gray-400 transition-all duration-200" :style="'background-color: ' + selectedColor" wire:key="button-font-color-{{ $section_9_button_font_color }}">
                            <input type="color" wire:model="section_9_button_font_color" x-model="selectedColor" class="opacity-0 w-full h-full cursor-pointer">
                        </div>
                        <div class="flex-1">
                            <div class="bg-gray-50 rounded-md p-2 border border-gray-200 h-10 flex items-center">
                                <p class="text-xs font-mono text-gray-600" x-text="selectedColor">{{ $section_9_button_font_color }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Font</label>
                    <select wire:model="section_9_button_font_name" class="w-full rounded-lg border border-gray-300 px-3 h-10 focus:outline-none focus:ring-2 focus:ring-cyan-500">
                        @foreach($fontFamilies as $font)
                        <option value="{{ $font }}">{{ $font }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Weight</label>
                    <select wire:model="section_9_button_font_weight" class="w-full rounded-lg border border-gray-300 px-3 h-10 focus:outline-none focus:ring-2 focus:ring-cyan-500">
                        @foreach($fontWeights as $weight)
                        <option value="{{ $weight }}">{{ ucfirst(str_replace('font-', '', $weight)) }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Size</label>
                    <select wire:model="section_9_button_font_size" class="w-full rounded-lg border border-gray-300 px-3 h-10 focus:outline-none focus:ring-2 focus:ring-cyan-500">
                        @foreach($fontSizes as $size)
                        <option value="{{ $size }}">{{ ucfirst(str_replace('text-', '', $size)) }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Alignment</label>
                    <select wire:model="section_9_button_text_alignment" class="w-full rounded-lg border border-gray-300 px-3 h-10 focus:outline-none focus:ring-2 focus:ring-cyan-500">
                        @foreach($textAlignments as $alignment)
                        <option value="{{ $alignment }}">{{ ucfirst(str_replace('text-', '', $alignment)) }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <div class="flex justify-end pt-6 border-t border-gray-200 mt-6">
            <button
                type="button"
                wire:click="updateSection9"
                wire:loading.attr="disabled"
                wire:target="updateSection9"
                class="inline-flex items-center px-4 py-2 bg-cyan-600 hover:bg-cyan-700 disabled:opacity-50 disabled:cursor-not-allowed text-white font-medium text-sm rounded-lg transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-cyan-500 cursor-pointer h-10">
                <div wire:loading.remove wire:target="updateSection9">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                </div>
                <div wire:loading wire:target="updateSection9">
                    <svg class="animate-spin w-4 h-4 mr-2" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 818-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                </div>
                <span wire:loading.remove wire:target="updateSection9">Update Section 9</span>
                <span wire:loading wire:target="updateSection9">Updating...</span>
            </button>
        </div>
    </div>
</div>