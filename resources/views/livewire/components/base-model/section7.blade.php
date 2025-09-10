<div class="bg-white rounded-xl shadow-sm border border-gray-100">
    <div class="flex flex-col lg:flex-row gap-6">
        <!-- Left side - Configuration -->
        <div class="flex-1 p-6">
            <div class="flex items-center justify-between mb-6">
                <div class="flex items-center space-x-3">
                    <div class="w-10 h-10 bg-gradient-to-r from-blue-600 to-blue-700 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900">Section 7</h3>
                    </div>
                </div>
                <label class="inline-flex items-center">
                    <input type="checkbox" wire:model="section_7_is_disabled" class="rounded border-gray-300 text-red-600 focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-transparent">
                    <span class="ml-2 text-sm text-gray-600 font-medium">Disable Section</span>
                </label>
            </div>
            
            <div class="space-y-6">
            <!-- Background Color -->
            <div x-data="{ selectedColor: '{{ $section_7_bg_color }}' }">
                <label class="block text-sm font-medium text-gray-700 mb-3">Background Color</label>
                <div class="flex items-center space-x-4">
                    <div class="w-10 h-10 rounded-lg border-2 border-gray-300 shadow-sm overflow-hidden cursor-pointer hover:border-gray-400 transition-all duration-200" :style="'background-color: ' + selectedColor" wire:key="bg-color-{{ $section_7_bg_color }}">
                        <input type="color" wire:model="section_7_bg_color" x-model="selectedColor" class="opacity-0 w-full h-full cursor-pointer">
                    </div>
                    <div class="flex-1">
                        <div class="bg-gray-50 rounded-lg p-3 border border-gray-200 h-10 flex items-center">
                            <p class="text-sm font-medium text-gray-700">Selected Color: <span class="font-mono text-sm text-gray-600" x-text="selectedColor">{{ $section_7_bg_color }}</span></p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Rectangle 1 -->
            <div class="border-t border-gray-200 pt-6">
                <h4 class="text-md font-semibold text-gray-800 mb-4 flex items-center">
                    <span class="w-2 h-2 bg-blue-500 rounded-full mr-2"></span>
                    Rectangle 1 - Icon & Title
                </h4>
                
                <!-- Icon URL -->
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700 mb-2">Icon URL</label>
                    <input type="url" wire:model="section_7_rect1_icon_url" class="w-full rounded-lg border border-gray-300 px-4 h-10 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="https://example.com/icon.png">
                </div>

                <!-- Title Text -->
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700 mb-2">Title Text</label>
                    <input type="text" wire:model="section_7_rect1_title" class="w-full rounded-lg border border-gray-300 px-4 h-10 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter title text">
                </div>

                <!-- Title Styling -->
                <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-5 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Font</label>
                        <select wire:model="section_7_rect1_title_font_name" class="w-full rounded-lg border border-gray-300 px-3 h-10 focus:outline-none focus:ring-2 focus:ring-blue-500">
                            @foreach($fontFamilies as $font)
                            <option value="{{ $font }}">{{ $font }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Weight</label>
                        <select wire:model="section_7_rect1_title_font_weight" class="w-full rounded-lg border border-gray-300 px-3 h-10 focus:outline-none focus:ring-2 focus:ring-blue-500">
                            @foreach($fontWeights as $weight)
                            <option value="{{ $weight }}">{{ ucfirst(str_replace('font-', '', $weight)) }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Size</label>
                        <select wire:model="section_7_rect1_title_font_size" class="w-full rounded-lg border border-gray-300 px-3 h-10 focus:outline-none focus:ring-2 focus:ring-blue-500">
                            @foreach($fontSizes as $size)
                            <option value="{{ $size }}">{{ ucfirst(str_replace('text-', '', $size)) }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Color</label>
                        <div class="flex items-center space-x-3" x-data="{ selectedColor: '{{ $section_7_rect1_title_font_color }}' }">
                            <div class="w-10 h-10 rounded-lg border-2 border-gray-300 shadow-sm overflow-hidden cursor-pointer hover:border-gray-400 transition-all duration-200" :style="'background-color: ' + selectedColor" wire:key="rect1-title-color-{{ $section_7_rect1_title_font_color }}">
                                <input type="color" wire:model="section_7_rect1_title_font_color" x-model="selectedColor" class="opacity-0 w-full h-full cursor-pointer">
                            </div>
                            <div class="flex-1">
                                <div class="bg-gray-50 rounded-md p-2 border border-gray-200 h-10 flex items-center">
                                    <p class="text-xs font-mono text-gray-600" x-text="selectedColor">{{ $section_7_rect1_title_font_color }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Alignment</label>
                        <select wire:model="section_7_rect1_title_text_alignment" class="w-full rounded-lg border border-gray-300 px-3 h-10 focus:outline-none focus:ring-2 focus:ring-blue-500">
                            @foreach($textAlignments as $alignment)
                            <option value="{{ $alignment }}">{{ ucfirst(str_replace('text-', '', $alignment)) }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>

            <!-- Rectangle 2 - Shared Styling -->
            <div class="border-t border-gray-200 pt-6">
                <h4 class="text-md font-semibold text-gray-800 mb-4 flex items-center">
                    <span class="w-2 h-2 bg-blue-500 rounded-full mr-2"></span>
                    Rectangle 2 - Shared Title Styling
                </h4>
                
                <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-5 gap-4 mb-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Title Font</label>
                        <select wire:model="section_7_rect2_title_font_name" class="w-full rounded-lg border border-gray-300 px-3 h-10 focus:outline-none focus:ring-2 focus:ring-blue-500">
                            @foreach($fontFamilies as $font)
                            <option value="{{ $font }}">{{ $font }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Title Weight</label>
                        <select wire:model="section_7_rect2_title_font_weight" class="w-full rounded-lg border border-gray-300 px-3 h-10 focus:outline-none focus:ring-2 focus:ring-blue-500">
                            @foreach($fontWeights as $weight)
                            <option value="{{ $weight }}">{{ ucfirst(str_replace('font-', '', $weight)) }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Title Size</label>
                        <select wire:model="section_7_rect2_title_font_size" class="w-full rounded-lg border border-gray-300 px-3 h-10 focus:outline-none focus:ring-2 focus:ring-blue-500">
                            @foreach($fontSizes as $size)
                            <option value="{{ $size }}">{{ ucfirst(str_replace('text-', '', $size)) }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Title Color</label>
                        <div class="flex items-center space-x-3" x-data="{ selectedColor: '{{ $section_7_rect2_title_font_color }}' }">
                            <div class="w-10 h-10 rounded-lg border-2 border-gray-300 shadow-sm overflow-hidden cursor-pointer hover:border-gray-400 transition-all duration-200" :style="'background-color: ' + selectedColor" wire:key="rect2-title-color-{{ $section_7_rect2_title_font_color }}">
                                <input type="color" wire:model="section_7_rect2_title_font_color" x-model="selectedColor" class="opacity-0 w-full h-full cursor-pointer">
                            </div>
                            <div class="flex-1">
                                <div class="bg-gray-50 rounded-md p-2 border border-gray-200 h-10 flex items-center">
                                    <p class="text-xs font-mono text-gray-600" x-text="selectedColor">{{ $section_7_rect2_title_font_color }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Title Alignment</label>
                        <select wire:model="section_7_rect2_title_text_alignment" class="w-full rounded-lg border border-gray-300 px-3 h-10 focus:outline-none focus:ring-2 focus:ring-blue-500">
                            @foreach($textAlignments as $alignment)
                            <option value="{{ $alignment }}">{{ ucfirst(str_replace('text-', '', $alignment)) }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <h4 class="text-md font-semibold text-gray-800 mb-4 flex items-center">
                    <span class="w-2 h-2 bg-blue-500 rounded-full mr-2"></span>
                    Rectangle 2 - Shared Subtitle Styling
                </h4>

                <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-5 gap-4 mb-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Subtitle Font</label>
                        <select wire:model="section_7_rect2_subtitle_font_name" class="w-full rounded-lg border border-gray-300 px-3 h-10 focus:outline-none focus:ring-2 focus:ring-blue-500">
                            @foreach($fontFamilies as $font)
                            <option value="{{ $font }}">{{ $font }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Subtitle Weight</label>
                        <select wire:model="section_7_rect2_subtitle_font_weight" class="w-full rounded-lg border border-gray-300 px-3 h-10 focus:outline-none focus:ring-2 focus:ring-blue-500">
                            @foreach($fontWeights as $weight)
                            <option value="{{ $weight }}">{{ ucfirst(str_replace('font-', '', $weight)) }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Subtitle Size</label>
                        <select wire:model="section_7_rect2_subtitle_font_size" class="w-full rounded-lg border border-gray-300 px-3 h-10 focus:outline-none focus:ring-2 focus:ring-blue-500">
                            @foreach($fontSizes as $size)
                            <option value="{{ $size }}">{{ ucfirst(str_replace('text-', '', $size)) }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Subtitle Color</label>
                        <div class="flex items-center space-x-3" x-data="{ selectedColor: '{{ $section_7_rect2_subtitle_font_color }}' }">
                            <div class="w-10 h-10 rounded-lg border-2 border-gray-300 shadow-sm overflow-hidden cursor-pointer hover:border-gray-400 transition-all duration-200" :style="'background-color: ' + selectedColor" wire:key="rect2-subtitle-color-{{ $section_7_rect2_subtitle_font_color }}">
                                <input type="color" wire:model="section_7_rect2_subtitle_font_color" x-model="selectedColor" class="opacity-0 w-full h-full cursor-pointer">
                            </div>
                            <div class="flex-1">
                                <div class="bg-gray-50 rounded-md p-2 border border-gray-200 h-10 flex items-center">
                                    <p class="text-xs font-mono text-gray-600" x-text="selectedColor">{{ $section_7_rect2_subtitle_font_color }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Subtitle Alignment</label>
                        <select wire:model="section_7_rect2_subtitle_text_alignment" class="w-full rounded-lg border border-gray-300 px-3 h-10 focus:outline-none focus:ring-2 focus:ring-blue-500">
                            @foreach($textAlignments as $alignment)
                            <option value="{{ $alignment }}">{{ ucfirst(str_replace('text-', '', $alignment)) }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>

            <!-- Items Content -->
            <div class="border-t border-gray-200 pt-6">
                <h4 class="text-md font-semibold text-gray-800 mb-4 flex items-center">
                    <span class="w-2 h-2 bg-blue-500 rounded-full mr-2"></span>
                    Contact Items Content
                </h4>
                
                <!-- Item 1 -->
                <div class="mb-6 p-4 border border-gray-200 rounded-lg">
                    <h5 class="text-sm font-semibold text-gray-700 mb-4">Item 1 - WhatsApp</h5>
                    
                    <!-- Icon URL -->
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Icon URL</label>
                        <input type="url" wire:model="section_7_item1_icon_url" class="w-full rounded-lg border border-gray-300 px-4 h-10 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="https://example.com/icon.png">
                    </div>

                    <!-- Title -->
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Title</label>
                        <input type="text" wire:model="section_7_item1_title" class="w-full rounded-lg border border-gray-300 px-4 h-10 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>

                    <!-- Subtitle -->
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Subtitle</label>
                        <input type="text" wire:model="section_7_item1_subtitle" class="w-full rounded-lg border border-gray-300 px-4 h-10 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                </div>

                <!-- Item 2 -->
                <div class="mb-6 p-4 border border-gray-200 rounded-lg">
                    <h5 class="text-sm font-semibold text-gray-700 mb-4">Item 2 - Schedule Call</h5>
                    
                    <!-- Icon URL -->
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Icon URL</label>
                        <input type="url" wire:model="section_7_item2_icon_url" class="w-full rounded-lg border border-gray-300 px-4 h-10 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="https://example.com/icon.png">
                    </div>

                    <!-- Title -->
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Title</label>
                        <input type="text" wire:model="section_7_item2_title" class="w-full rounded-lg border border-gray-300 px-4 h-10 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>

                    <!-- Subtitle -->
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Subtitle</label>
                        <input type="text" wire:model="section_7_item2_subtitle" class="w-full rounded-lg border border-gray-300 px-4 h-10 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                </div>

                <!-- Item 3 -->
                <div class="mb-6 p-4 border border-gray-200 rounded-lg">
                    <h5 class="text-sm font-semibold text-gray-700 mb-4">Item 3 - Save Contact</h5>
                    
                    <!-- Icon URL -->
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Icon URL</label>
                        <input type="url" wire:model="section_7_item3_icon_url" class="w-full rounded-lg border border-gray-300 px-4 h-10 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="https://example.com/icon.png">
                    </div>

                    <!-- Title -->
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Title</label>
                        <input type="text" wire:model="section_7_item3_title" class="w-full rounded-lg border border-gray-300 px-4 h-10 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>

                    <!-- Subtitle -->
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Subtitle</label>
                        <input type="text" wire:model="section_7_item3_subtitle" class="w-full rounded-lg border border-gray-300 px-4 h-10 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                </div>
            </div>

                <div class="flex justify-end pt-4 border-t border-gray-200">
                    <button
                        type="button"
                        wire:click="updateSection7"
                        class="inline-flex items-center px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white font-medium text-sm rounded-lg transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-blue-500 cursor-pointer h-10">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Update Section 7
                    </button>
                </div>
            </div>
        </div>

        <!-- Right side - Preview -->
        <div class="w-full max-w-md p-4 bg-gray-100 flex items-center">
            <div class="bg-white border border-gray-200 rounded p-3 w-full">
                <livewire:components.public.section7 />
            </div>
        </div>
    </div>
</div>