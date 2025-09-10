<div class="bg-white rounded-xl shadow-sm border border-gray-100 p-4">
            <div class="flex items-center justify-between mb-6">
                <div class="flex items-center space-x-3">
                    <div class="w-10 h-10 bg-gradient-to-r from-purple-500 to-pink-600 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900">Section 2</h3>
                    </div>
                </div>
                <label class="inline-flex items-center">
                    <input type="checkbox" wire:model="section_2_is_disabled" class="rounded border-gray-300 text-red-600 focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-transparent">
                    <span class="ml-2 text-sm text-gray-600 font-medium">Disable Section</span>
                </label>
            </div>

            <div class="space-y-6">
                <!-- Background Color -->
                <div x-data="{ selectedColor: '{{ $section_2_bg_color }}' }">
                    <label class="block text-sm font-medium text-gray-700 mb-3">
                        Background Color
                    </label>
                    <div class="flex items-center space-x-4">
                        <div class="relative group">
                            <div class="w-10 h-10 rounded-lg border-2 border-gray-300 shadow-sm overflow-hidden cursor-pointer hover:border-gray-400 transition-all duration-200"
                                :style="'background-color: ' + selectedColor" wire:key="section2-bg-{{ $section_2_bg_color }}">
                                <input
                                    type="color"
                                    wire:model="section_2_bg_color"
                                    x-model="selectedColor"
                                    class="opacity-0 w-full h-full cursor-pointer"
                                    title="Select background color">
                            </div>
                        </div>
                        <div class="flex-1">
                            <div class="bg-gray-50 rounded-lg p-3 border border-gray-200 h-10 flex items-center">
                                <p class="text-sm font-medium text-gray-700">Selected Color: <span class="font-mono text-sm text-gray-600" x-text="selectedColor">{{ $section_2_bg_color }}</span></p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Line 1 -->
                <div class="border-t border-gray-200 pt-6">
                    <h4 class="text-md font-semibold text-gray-800 mb-4 flex items-center">
                        <span class="w-2 h-2 bg-purple-500 rounded-full mr-2"></span>
                        Line 1 Styling
                    </h4>
                    <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-5 gap-4">
                        <!-- Text Color -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Text Color</label>
                            <div class="flex items-center space-x-3" x-data="{ selectedColor: '{{ $section_2_line_1_font_color }}' }">
                                <div class="w-10 h-10 rounded-lg border-2 border-gray-300 shadow-sm overflow-hidden cursor-pointer hover:border-gray-400 transition-all duration-200" :style="'background-color: ' + selectedColor" wire:key="line1-{{ $section_2_line_1_font_color }}">
                                    <input type="color" wire:model="section_2_line_1_font_color" x-model="selectedColor" class="opacity-0 w-full h-full cursor-pointer" title="Select text color">
                                </div>
                                <div class="flex-1">
                                    <div class="bg-gray-50 rounded-md p-2 border border-gray-200 h-10 flex items-center">
                                        <p class="text-xs font-mono text-gray-600" x-text="selectedColor">{{ $section_2_line_1_font_color }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Font Family -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Font Family</label>
                            <select wire:model="section_2_line_1_font_name" class="w-full rounded-lg border border-gray-300 px-3 h-10 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all">
                                @foreach($fontFamilies as $font)
                                <option value="{{ $font }}">{{ $font }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Font Weight -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Font Weight</label>
                            <select wire:model="section_2_line_1_font_weight" class="w-full rounded-lg border border-gray-300 px-3 h-10 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all">
                                @foreach($fontWeights as $weight)
                                <option value="{{ $weight }}">{{ ucfirst(str_replace('font-', '', $weight)) }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Font Size -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Font Size</label>
                            <select wire:model="section_2_line_1_font_size" class="w-full rounded-lg border border-gray-300 px-3 h-10 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all">
                                @foreach($fontSizes as $size)
                                <option value="{{ $size }}">{{ ucfirst(str_replace('text-', '', $size)) }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Text Alignment -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Text Alignment</label>
                            <select wire:model="section_2_line_1_text_alignment" class="w-full rounded-lg border border-gray-300 px-3 h-10 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all">
                                @foreach($textAlignments as $alignment)
                                <option value="{{ $alignment }}">{{ ucfirst(str_replace('text-', '', $alignment)) }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Line 2 -->
                <div class="border-t border-gray-200 pt-6">
                    <h4 class="text-md font-semibold text-gray-800 mb-4 flex items-center">
                        <span class="w-2 h-2 bg-blue-500 rounded-full mr-2"></span>
                        Line 2 Styling
                    </h4>
                    <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-5 gap-4">
                        <!-- Text Color -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Text Color</label>
                            <div class="flex items-center space-x-3" x-data="{ selectedColor: '{{ $section_2_line_2_font_color }}' }">
                                <div class="w-10 h-10 rounded-lg border-2 border-gray-300 shadow-sm overflow-hidden cursor-pointer hover:border-gray-400 transition-all duration-200" :style="'background-color: ' + selectedColor" wire:key="line2-{{ $section_2_line_2_font_color }}">
                                    <input type="color" wire:model="section_2_line_2_font_color" x-model="selectedColor" class="opacity-0 w-full h-full cursor-pointer" title="Select text color">
                                </div>
                                <div class="flex-1">
                                    <div class="bg-gray-50 rounded-md p-2 border border-gray-200 h-10 flex items-center">
                                        <p class="text-xs font-mono text-gray-600" x-text="selectedColor">{{ $section_2_line_2_font_color }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Font Family -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Font Family</label>
                            <select wire:model="section_2_line_2_font_name" class="w-full rounded-lg border border-gray-300 px-3 h-10 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all">
                                @foreach($fontFamilies as $font)
                                <option value="{{ $font }}">{{ $font }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Font Weight -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Font Weight</label>
                            <select wire:model="section_2_line_2_font_weight" class="w-full rounded-lg border border-gray-300 px-3 h-10 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all">
                                @foreach($fontWeights as $weight)
                                <option value="{{ $weight }}">{{ ucfirst(str_replace('font-', '', $weight)) }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Font Size -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Font Size</label>
                            <select wire:model="section_2_line_2_font_size" class="w-full rounded-lg border border-gray-300 px-3 h-10 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all">
                                @foreach($fontSizes as $size)
                                <option value="{{ $size }}">{{ ucfirst(str_replace('text-', '', $size)) }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Text Alignment -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Text Alignment</label>
                            <select wire:model="section_2_line_2_text_alignment" class="w-full rounded-lg border border-gray-300 px-3 h-10 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all">
                                @foreach($textAlignments as $alignment)
                                <option value="{{ $alignment }}">{{ ucfirst(str_replace('text-', '', $alignment)) }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Paragraph 3 -->
                <div class="border-t border-gray-200 pt-6">
                    <h4 class="text-md font-semibold text-gray-800 mb-4 flex items-center">
                        <span class="w-2 h-2 bg-green-500 rounded-full mr-2"></span>
                        Paragraph 3 Styling
                    </h4>
                    <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-5 gap-4">
                        <!-- Text Color -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Text Color</label>
                            <div class="flex items-center space-x-3" x-data="{ selectedColor: '{{ $section_2_paragraph_3_font_color }}' }">
                                <div class="w-10 h-10 rounded-lg border-2 border-gray-300 shadow-sm overflow-hidden cursor-pointer hover:border-gray-400 transition-all duration-200" :style="'background-color: ' + selectedColor" wire:key="para3-{{ $section_2_paragraph_3_font_color }}">
                                    <input type="color" wire:model="section_2_paragraph_3_font_color" x-model="selectedColor" class="opacity-0 w-full h-full cursor-pointer" title="Select text color">
                                </div>
                                <div class="flex-1">
                                    <div class="bg-gray-50 rounded-md p-2 border border-gray-200 h-10 flex items-center">
                                        <p class="text-xs font-mono text-gray-600" x-text="selectedColor">{{ $section_2_paragraph_3_font_color }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Font Family -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Font Family</label>
                            <select wire:model="section_2_paragraph_3_font_name" class="w-full rounded-lg border border-gray-300 px-3 h-10 focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent transition-all">
                                @foreach($fontFamilies as $font)
                                <option value="{{ $font }}">{{ $font }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Font Weight -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Font Weight</label>
                            <select wire:model="section_2_paragraph_3_font_weight" class="w-full rounded-lg border border-gray-300 px-3 h-10 focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent transition-all">
                                @foreach($fontWeights as $weight)
                                <option value="{{ $weight }}">{{ ucfirst(str_replace('font-', '', $weight)) }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Font Size -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Font Size</label>
                            <select wire:model="section_2_paragraph_3_font_size" class="w-full rounded-lg border border-gray-300 px-3 h-10 focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent transition-all">
                                @foreach($fontSizes as $size)
                                <option value="{{ $size }}">{{ ucfirst(str_replace('text-', '', $size)) }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Text Alignment -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Text Alignment</label>
                            <select wire:model="section_2_paragraph_3_text_alignment" class="w-full rounded-lg border border-gray-300 px-3 h-10 focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent transition-all">
                                @foreach($textAlignments as $alignment)
                                <option value="{{ $alignment }}">{{ ucfirst(str_replace('text-', '', $alignment)) }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Button 1 -->
                <div class="border-t border-gray-200 pt-6">
                    <h4 class="text-md font-semibold text-gray-800 mb-4 flex items-center">
                        <span class="w-2 h-2 bg-orange-500 rounded-full mr-2"></span>
                        Button 1 Styling
                    </h4>

                    <!-- Background Color -->
                    <div class="mb-4" x-data="{ selectedColor: '{{ $section_2_button_1_bg_color }}' }">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Background Color</label>
                        <div class="flex items-center space-x-4">
                            <div class="w-10 h-10 rounded-lg border-2 border-gray-300 shadow-sm overflow-hidden cursor-pointer hover:border-gray-400 transition-all duration-200" :style="'background-color: ' + selectedColor" wire:key="btn-bg-{{ $section_2_button_1_bg_color }}">
                                <input type="color" wire:model="section_2_button_1_bg_color" x-model="selectedColor" class="opacity-0 w-full h-full cursor-pointer" title="Select background color">
                            </div>
                            <div class="flex-1">
                                <div class="bg-gray-50 rounded-lg p-3 border border-gray-200 h-10 flex items-center">
                                    <p class="text-sm font-medium text-gray-700">Selected Color: <span class="font-mono text-sm text-gray-600" x-text="selectedColor">{{ $section_2_button_1_bg_color }}</span></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Icon Link -->
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Icon Link</label>
                        <input type="url" wire:model="section_2_button_1_icon_link" class="w-full rounded-lg border border-gray-300 px-4 h-10 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent transition-all" placeholder="https://example.com/icon-link" title="Enter icon link URL">
                    </div>

                    <!-- Button text -->
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Button Text</label>
                        <input type="text" wire:model="section_2_button_1_text" class="w-full rounded-lg border border-gray-300 px-4 h-10 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent transition-all">
                    </div>

                    <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-5 gap-4">
                        <!-- Text Color -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Text Color</label>
                            <div class="flex items-center space-x-3" x-data="{ selectedColor: '{{ $section_2_button_1_font_color }}' }">
                                <div class="w-10 h-10 rounded-lg border-2 border-gray-300 shadow-sm overflow-hidden cursor-pointer hover:border-gray-400 transition-all duration-200" :style="'background-color: ' + selectedColor" wire:key="btn-text-{{ $section_2_button_1_font_color }}">
                                    <input type="color" wire:model="section_2_button_1_font_color" x-model="selectedColor" class="opacity-0 w-full h-full cursor-pointer" title="Select text color">
                                </div>
                                <div class="flex-1">
                                    <div class="bg-gray-50 rounded-md p-2 border border-gray-200 h-10 flex items-center">
                                        <p class="text-xs font-mono text-gray-600" x-text="selectedColor">{{ $section_2_button_1_font_color }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Font Family -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Font Family</label>
                            <select wire:model="section_2_button_1_font_name" class="w-full rounded-lg border border-gray-300 px-3 h-10 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent transition-all">
                                @foreach($fontFamilies as $font)
                                <option value="{{ $font }}">{{ $font }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Font Weight -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Font Weight</label>
                            <select wire:model="section_2_button_1_font_weight" class="w-full rounded-lg border border-gray-300 px-3 h-10 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent transition-all">
                                @foreach($fontWeights as $weight)
                                <option value="{{ $weight }}">{{ ucfirst(str_replace('font-', '', $weight)) }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Font Size -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Font Size</label>
                            <select wire:model="section_2_button_1_font_size" class="w-full rounded-lg border border-gray-300 px-3 h-10 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent transition-all">
                                @foreach($fontSizes as $size)
                                <option value="{{ $size }}">{{ ucfirst(str_replace('text-', '', $size)) }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Text Alignment -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Text Alignment</label>
                            <select wire:model="section_2_button_1_text_alignment" class="w-full rounded-lg border border-gray-300 px-3 h-10 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent transition-all">
                                @foreach($textAlignments as $alignment)
                                <option value="{{ $alignment }}">{{ ucfirst(str_replace('text-', '', $alignment)) }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <div class="flex justify-end pt-4 border-t border-gray-200">
                    <button
                        type="button"
                        wire:click="updateSection2"
                        wire:loading.attr="disabled"
                        wire:target="updateSection2"
                        class="inline-flex items-center px-4 py-2 bg-purple-600 hover:bg-purple-700 disabled:opacity-50 disabled:cursor-not-allowed text-white font-medium text-sm rounded-lg transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-purple-500 cursor-pointer h-10">
                        <div wire:loading.remove wire:target="updateSection2">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                        <div wire:loading wire:target="updateSection2">
                            <svg class="animate-spin w-4 h-4 mr-2" fill="none" viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 818-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                            </svg>
                        </div>
                        <span wire:loading.remove wire:target="updateSection2">Update Section 2</span>
                        <span wire:loading wire:target="updateSection2">Updating...</span>
                    </button>
                </div>
            </div>
</div>