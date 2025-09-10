<div class="bg-white rounded-xl shadow-sm border border-gray-100 p-4">
            <div class="flex items-center justify-between mb-6">
                <div class="flex items-center space-x-3">
                    <div class="w-10 h-10 bg-gradient-to-r from-pink-600 to-pink-700 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 4V2a1 1 0 011-1h8a1 1 0 011 1v2M7 4h10M7 4l-4 12h18L17 4M9 8v8m6-8v8"></path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900">Section 10</h3>
                    </div>
                </div>
                <label class="inline-flex items-center">
                    <input type="checkbox" wire:model="section_10_is_disabled" class="rounded border-gray-300 text-red-600 focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-transparent">
                    <span class="ml-2 text-sm text-gray-600 font-medium">Disable Section</span>
                </label>
            </div>

            <div class="space-y-6">
                <!-- Background Color -->
                <div x-data="{ selectedColor: '{{ $section_10_bg_color }}' }">
                    <label class="block text-sm font-medium text-gray-700 mb-3">Background Color</label>
                    <div class="flex items-center space-x-4">
                        <div class="w-10 h-10 rounded-lg border-2 border-gray-300 shadow-sm overflow-hidden cursor-pointer hover:border-gray-400 transition-all duration-200" :style="'background-color: ' + selectedColor" wire:key="bg-color-{{ $section_10_bg_color }}">
                            <input type="color" wire:model="section_10_bg_color" x-model="selectedColor" class="opacity-0 w-full h-full cursor-pointer">
                        </div>
                        <div class="flex-1">
                            <div class="bg-gray-50 rounded-lg p-3 border border-gray-200 h-10 flex items-center">
                                <p class="text-sm font-medium text-gray-700">Selected Color: <span class="font-mono text-sm text-gray-600" x-text="selectedColor">{{ $section_10_bg_color }}</span></p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Rectangle 1 -->
                <div class="border-t border-gray-200 pt-6">
                    <h4 class="text-md font-semibold text-gray-800 mb-4 flex items-center">
                        <span class="w-2 h-2 bg-pink-500 rounded-full mr-2"></span>
                        Rectangle 1 - Icon & Title
                    </h4>

                    <!-- Icon URL -->
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Icon URL</label>
                        <input type="url" wire:model="section_10_rect1_icon_url" class="w-full rounded-lg border border-gray-300 px-4 h-10 focus:outline-none focus:ring-2 focus:ring-pink-500" placeholder="https://example.com/icon.png">
                    </div>

                    <!-- Title Text -->
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Title Text</label>
                        <input type="text" wire:model="section_10_rect1_title" class="w-full rounded-lg border border-gray-300 px-4 h-10 focus:outline-none focus:ring-2 focus:ring-pink-500" placeholder="Enter title text">
                    </div>

                    <!-- Title Styling -->
                    <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-5 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Font</label>
                            <select wire:model="section_10_rect1_title_font_name" class="w-full rounded-lg border border-gray-300 px-3 h-10 focus:outline-none focus:ring-2 focus:ring-pink-500">
                                @foreach($fontFamilies as $font)
                                <option value="{{ $font }}">{{ $font }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Weight</label>
                            <select wire:model="section_10_rect1_title_font_weight" class="w-full rounded-lg border border-gray-300 px-3 h-10 focus:outline-none focus:ring-2 focus:ring-pink-500">
                                @foreach($fontWeights as $weight)
                                <option value="{{ $weight }}">{{ ucfirst(str_replace('font-', '', $weight)) }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Size</label>
                            <select wire:model="section_10_rect1_title_font_size" class="w-full rounded-lg border border-gray-300 px-3 h-10 focus:outline-none focus:ring-2 focus:ring-pink-500">
                                @foreach($fontSizes as $size)
                                <option value="{{ $size }}">{{ ucfirst(str_replace('text-', '', $size)) }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Color</label>
                            <div class="flex items-center space-x-3" x-data="{ selectedColor: '{{ $section_10_rect1_title_font_color }}' }">
                                <div class="w-10 h-10 rounded-lg border-2 border-gray-300 shadow-sm overflow-hidden cursor-pointer hover:border-gray-400 transition-all duration-200" :style="'background-color: ' + selectedColor" wire:key="rect1-title-color-{{ $section_10_rect1_title_font_color }}">
                                    <input type="color" wire:model="section_10_rect1_title_font_color" x-model="selectedColor" class="opacity-0 w-full h-full cursor-pointer">
                                </div>
                                <div class="flex-1">
                                    <div class="bg-gray-50 rounded-md p-2 border border-gray-200 h-10 flex items-center">
                                        <p class="text-xs font-mono text-gray-600" x-text="selectedColor">{{ $section_10_rect1_title_font_color }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Alignment</label>
                            <select wire:model="section_10_rect1_title_text_alignment" class="w-full rounded-lg border border-gray-300 px-3 h-10 focus:outline-none focus:ring-2 focus:ring-pink-500">
                                @foreach($textAlignments as $alignment)
                                <option value="{{ $alignment }}">{{ ucfirst(str_replace('text-', '', $alignment)) }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Rectangle 2 - Social Icons -->
                <div class="border-t border-gray-200 pt-6">
                    <h4 class="text-md font-semibold text-gray-800 mb-4 flex items-center">
                        <span class="w-2 h-2 bg-pink-500 rounded-full mr-2"></span>
                        Rectangle 2 - Social Icons
                    </h4>

                    <!-- Icon 1 -->
                    <div class="mb-4">
                        <h5 class="text-sm font-semibold text-gray-700 mb-2">Icon 1 (Instagram)</h5>
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Icon URL</label>
                                <input type="url" wire:model="section_10_icon1_url" class="w-full rounded-lg border border-gray-300 px-4 h-10 focus:outline-none focus:ring-2 focus:ring-pink-500">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Link URL</label>
                                <input type="text" wire:model="section_10_icon1_link" class="w-full rounded-lg border border-gray-300 px-4 h-10 focus:outline-none focus:ring-2 focus:ring-pink-500">
                            </div>
                        </div>
                    </div>

                    <!-- Icon 2 -->
                    <div class="mb-4">
                        <h5 class="text-sm font-semibold text-gray-700 mb-2">Icon 2 (Facebook)</h5>
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Icon URL</label>
                                <input type="url" wire:model="section_10_icon2_url" class="w-full rounded-lg border border-gray-300 px-4 h-10 focus:outline-none focus:ring-2 focus:ring-pink-500">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Link URL</label>
                                <input type="text" wire:model="section_10_icon2_link" class="w-full rounded-lg border border-gray-300 px-4 h-10 focus:outline-none focus:ring-2 focus:ring-pink-500">
                            </div>
                        </div>
                    </div>

                    <!-- Icon 3 -->
                    <div class="mb-4">
                        <h5 class="text-sm font-semibold text-gray-700 mb-2">Icon 3 (LinkedIn)</h5>
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Icon URL</label>
                                <input type="url" wire:model="section_10_icon3_url" class="w-full rounded-lg border border-gray-300 px-4 h-10 focus:outline-none focus:ring-2 focus:ring-pink-500">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Link URL</label>
                                <input type="text" wire:model="section_10_icon3_link" class="w-full rounded-lg border border-gray-300 px-4 h-10 focus:outline-none focus:ring-2 focus:ring-pink-500">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-end pt-6 border-t border-gray-200 mt-6">
                    <button
                        type="button"
                        wire:click="updateSection10"
                        class="inline-flex items-center px-4 py-2 bg-pink-600 hover:bg-pink-700 text-white font-medium text-sm rounded-lg transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-pink-500 cursor-pointer h-10">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Update Section 10
                    </button>
                </div>
            </div>
</div>