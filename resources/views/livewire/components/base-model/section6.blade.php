<div class="bg-white rounded-xl shadow-sm border border-gray-100">
    <div class="p-6">
        <div class="flex items-center justify-between mb-6">
            <div class="flex items-center space-x-3">
                <div class="w-10 h-10 bg-gradient-to-r from-cyan-500 to-teal-600 rounded-lg flex items-center justify-center">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-gray-900">Section 6</h3>
                </div>
            </div>
            <label class="inline-flex items-center">
                <input type="checkbox" wire:model="section_6_is_disabled" class="rounded border-gray-300 text-red-600 focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-transparent">
                <span class="ml-2 text-sm text-gray-600 font-medium">Disable Section</span>
            </label>
        </div>

        <div class="space-y-6">
            <!-- Background Color -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-3">Background Color</label>
                <div class="flex items-center space-x-4">
                    <div class="w-10 h-10 rounded-lg border-2 border-gray-300 shadow-sm overflow-hidden cursor-pointer hover:border-gray-400 transition-all duration-200" style="background-color: {{ $section_6_bg_color }};" wire:key="bg-color-{{ $section_6_bg_color }}">
                        <input type="color" wire:model.live="section_6_bg_color" class="opacity-0 w-full h-full cursor-pointer">
                    </div>
                    <div class="flex-1">
                        <div class="bg-gray-50 rounded-lg p-3 border border-gray-200 h-10 flex items-center">
                            <p class="text-sm font-medium text-gray-700">Selected Color: <span class="font-mono text-sm text-gray-600">{{ $section_6_bg_color }}</span></p>
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
                
                <!-- Icon Link -->
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700 mb-2">Icon Link</label>
                    <input type="url" wire:model="section_6_rect1_icon_link" class="w-full rounded-lg border border-gray-300 px-4 h-10 focus:outline-none focus:ring-2 focus:ring-cyan-500" placeholder="https://example.com/icon.png">
                </div>

                <!-- Title Text -->
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700 mb-2">Title Text</label>
                    <input type="text" wire:model="section_6_rect1_title" class="w-full rounded-lg border border-gray-300 px-4 h-10 focus:outline-none focus:ring-2 focus:ring-cyan-500" placeholder="Enter title text">
                </div>

                <!-- Title Styling -->
                <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-5 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Font</label>
                        <select wire:model="section_6_rect1_title_font_name" class="w-full rounded-lg border border-gray-300 px-3 h-10 focus:outline-none focus:ring-2 focus:ring-cyan-500">
                            @foreach($fontFamilies as $font)
                            <option value="{{ $font }}">{{ $font }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Weight</label>
                        <select wire:model="section_6_rect1_title_font_weight" class="w-full rounded-lg border border-gray-300 px-3 h-10 focus:outline-none focus:ring-2 focus:ring-cyan-500">
                            @foreach($fontWeights as $weight)
                            <option value="{{ $weight }}">{{ ucfirst(str_replace('font-', '', $weight)) }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Size</label>
                        <select wire:model="section_6_rect1_title_font_size" class="w-full rounded-lg border border-gray-300 px-3 h-10 focus:outline-none focus:ring-2 focus:ring-cyan-500">
                            @foreach($fontSizes as $size)
                            <option value="{{ $size }}">{{ ucfirst(str_replace('text-', '', $size)) }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Color</label>
                        <div class="flex items-center space-x-3">
                            <div class="w-10 h-10 rounded-lg border-2 border-gray-300 shadow-sm overflow-hidden cursor-pointer hover:border-gray-400 transition-all duration-200" style="background-color: {{ $section_6_rect1_title_font_color }};" wire:key="rect1-title-color-{{ $section_6_rect1_title_font_color }}">
                                <input type="color" wire:model.live="section_6_rect1_title_font_color" class="opacity-0 w-full h-full cursor-pointer">
                            </div>
                            <div class="flex-1">
                                <div class="bg-gray-50 rounded-md p-2 border border-gray-200 h-10 flex items-center">
                                    <p class="text-xs font-mono text-gray-600">{{ $section_6_rect1_title_font_color }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Alignment</label>
                        <select wire:model="section_6_rect1_title_text_alignment" class="w-full rounded-lg border border-gray-300 px-3 h-10 focus:outline-none focus:ring-2 focus:ring-cyan-500">
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
                    <span class="w-2 h-2 bg-teal-500 rounded-full mr-2"></span>
                    Rectangle 2 - Image, Title & Text
                </h4>
                
                <!-- Image Link -->
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700 mb-2">Image Link</label>
                    <input type="url" wire:model="section_6_rect2_image_link" class="w-full rounded-lg border border-gray-300 px-4 h-10 focus:outline-none focus:ring-2 focus:ring-teal-500" placeholder="https://example.com/image.png">
                </div>

                <!-- Title Text -->
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700 mb-2">Title Text</label>
                    <input type="text" wire:model="section_6_rect2_title" class="w-full rounded-lg border border-gray-300 px-4 h-10 focus:outline-none focus:ring-2 focus:ring-teal-500" placeholder="Enter title text">
                </div>

                <!-- Title Styling -->
                <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-5 gap-4 mb-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Title Font</label>
                        <select wire:model="section_6_rect2_title_font_name" class="w-full rounded-lg border border-gray-300 px-3 h-10 focus:outline-none focus:ring-2 focus:ring-teal-500">
                            @foreach($fontFamilies as $font)
                            <option value="{{ $font }}">{{ $font }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Title Weight</label>
                        <select wire:model="section_6_rect2_title_font_weight" class="w-full rounded-lg border border-gray-300 px-3 h-10 focus:outline-none focus:ring-2 focus:ring-teal-500">
                            @foreach($fontWeights as $weight)
                            <option value="{{ $weight }}">{{ ucfirst(str_replace('font-', '', $weight)) }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Title Size</label>
                        <select wire:model="section_6_rect2_title_font_size" class="w-full rounded-lg border border-gray-300 px-3 h-10 focus:outline-none focus:ring-2 focus:ring-teal-500">
                            @foreach($fontSizes as $size)
                            <option value="{{ $size }}">{{ ucfirst(str_replace('text-', '', $size)) }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Title Color</label>
                        <div class="flex items-center space-x-3">
                            <div class="w-10 h-10 rounded-lg border-2 border-gray-300 shadow-sm overflow-hidden cursor-pointer hover:border-gray-400 transition-all duration-200" style="background-color: {{ $section_6_rect2_title_font_color }};" wire:key="rect2-title-color-{{ $section_6_rect2_title_font_color }}">
                                <input type="color" wire:model.live="section_6_rect2_title_font_color" class="opacity-0 w-full h-full cursor-pointer">
                            </div>
                            <div class="flex-1">
                                <div class="bg-gray-50 rounded-md p-2 border border-gray-200 h-10 flex items-center">
                                    <p class="text-xs font-mono text-gray-600">{{ $section_6_rect2_title_font_color }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Title Alignment</label>
                        <select wire:model="section_6_rect2_title_text_alignment" class="w-full rounded-lg border border-gray-300 px-3 h-10 focus:outline-none focus:ring-2 focus:ring-teal-500">
                            @foreach($textAlignments as $alignment)
                            <option value="{{ $alignment }}">{{ ucfirst(str_replace('text-', '', $alignment)) }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <!-- Text Content -->
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700 mb-2">Text Content</label>
                    <textarea wire:model="section_6_rect2_text" rows="3" class="w-full rounded-lg border border-gray-300 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-teal-500 resize-none" placeholder="Enter text content"></textarea>
                </div>

                <!-- Text Styling -->
                <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-5 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Text Font</label>
                        <select wire:model="section_6_rect2_text_font_name" class="w-full rounded-lg border border-gray-300 px-3 h-10 focus:outline-none focus:ring-2 focus:ring-teal-500">
                            @foreach($fontFamilies as $font)
                            <option value="{{ $font }}">{{ $font }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Text Weight</label>
                        <select wire:model="section_6_rect2_text_font_weight" class="w-full rounded-lg border border-gray-300 px-3 h-10 focus:outline-none focus:ring-2 focus:ring-teal-500">
                            @foreach($fontWeights as $weight)
                            <option value="{{ $weight }}">{{ ucfirst(str_replace('font-', '', $weight)) }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Text Size</label>
                        <select wire:model="section_6_rect2_text_font_size" class="w-full rounded-lg border border-gray-300 px-3 h-10 focus:outline-none focus:ring-2 focus:ring-teal-500">
                            @foreach($fontSizes as $size)
                            <option value="{{ $size }}">{{ ucfirst(str_replace('text-', '', $size)) }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Text Color</label>
                        <div class="flex items-center space-x-3">
                            <div class="w-10 h-10 rounded-lg border-2 border-gray-300 shadow-sm overflow-hidden cursor-pointer hover:border-gray-400 transition-all duration-200" style="background-color: {{ $section_6_rect2_text_font_color }};" wire:key="rect2-text-color-{{ $section_6_rect2_text_font_color }}">
                                <input type="color" wire:model.live="section_6_rect2_text_font_color" class="opacity-0 w-full h-full cursor-pointer">
                            </div>
                            <div class="flex-1">
                                <div class="bg-gray-50 rounded-md p-2 border border-gray-200 h-10 flex items-center">
                                    <p class="text-xs font-mono text-gray-600">{{ $section_6_rect2_text_font_color }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Text Alignment</label>
                        <select wire:model="section_6_rect2_text_text_alignment" class="w-full rounded-lg border border-gray-300 px-3 h-10 focus:outline-none focus:ring-2 focus:ring-teal-500">
                            @foreach($textAlignments as $alignment)
                            <option value="{{ $alignment }}">{{ ucfirst(str_replace('text-', '', $alignment)) }}</option>
                            @endforeach
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
                
                <!-- Button Text -->
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700 mb-2">Button Text</label>
                    <input type="text" wire:model="section_6_button_text" class="w-full rounded-lg border border-gray-300 px-4 h-10 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter button text">
                </div>

                <!-- Icon Link -->
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700 mb-2">Icon Link</label>
                    <input type="url" wire:model="section_6_button_icon_link" class="w-full rounded-lg border border-gray-300 px-4 h-10 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="https://example.com/icon.png">
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-6 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Button BG Color</label>
                        <div class="flex items-center space-x-3">
                            <div class="w-10 h-10 rounded-lg border-2 border-gray-300 shadow-sm overflow-hidden cursor-pointer hover:border-gray-400 transition-all duration-200" style="background-color: {{ $section_6_button_bg_color }};" wire:key="button-bg-{{ $section_6_button_bg_color }}">
                                <input type="color" wire:model.live="section_6_button_bg_color" class="opacity-0 w-full h-full cursor-pointer">
                            </div>
                            <div class="flex-1">
                                <div class="bg-gray-50 rounded-md p-2 border border-gray-200 h-10 flex items-center">
                                    <p class="text-xs font-mono text-gray-600">{{ $section_6_button_bg_color }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Text Color</label>
                        <div class="flex items-center space-x-3">
                            <div class="w-10 h-10 rounded-lg border-2 border-gray-300 shadow-sm overflow-hidden cursor-pointer hover:border-gray-400 transition-all duration-200" style="background-color: {{ $section_6_button_font_color }};" wire:key="button-text-{{ $section_6_button_font_color }}">
                                <input type="color" wire:model.live="section_6_button_font_color" class="opacity-0 w-full h-full cursor-pointer">
                            </div>
                            <div class="flex-1">
                                <div class="bg-gray-50 rounded-md p-2 border border-gray-200 h-10 flex items-center">
                                    <p class="text-xs font-mono text-gray-600">{{ $section_6_button_font_color }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Font</label>
                        <select wire:model="section_6_button_font_name" class="w-full rounded-lg border border-gray-300 px-3 h-10 focus:outline-none focus:ring-2 focus:ring-blue-500">
                            @foreach($fontFamilies as $font)
                            <option value="{{ $font }}">{{ $font }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Weight</label>
                        <select wire:model="section_6_button_font_weight" class="w-full rounded-lg border border-gray-300 px-3 h-10 focus:outline-none focus:ring-2 focus:ring-blue-500">
                            @foreach($fontWeights as $weight)
                            <option value="{{ $weight }}">{{ ucfirst(str_replace('font-', '', $weight)) }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Size</label>
                        <select wire:model="section_6_button_font_size" class="w-full rounded-lg border border-gray-300 px-3 h-10 focus:outline-none focus:ring-2 focus:ring-blue-500">
                            @foreach($fontSizes as $size)
                            <option value="{{ $size }}">{{ ucfirst(str_replace('text-', '', $size)) }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Text Alignment</label>
                        <select wire:model="section_6_button_text_alignment" class="w-full rounded-lg border border-gray-300 px-3 h-10 focus:outline-none focus:ring-2 focus:ring-blue-500">
                            @foreach($textAlignments as $alignment)
                            <option value="{{ $alignment }}">{{ ucfirst(str_replace('text-', '', $alignment)) }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>

            <div class="flex justify-end pt-6 border-t border-gray-200">
                <button type="button" wire:click="updateSection6" class="inline-flex items-center px-4 py-2 bg-cyan-600 hover:bg-cyan-700 text-white font-medium text-sm rounded-lg transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-cyan-500 cursor-pointer h-10">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    Update Section 6
                </button>
            </div>
        </div>
    </div>
</div>