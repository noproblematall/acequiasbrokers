<div class="max-w-7xl mx-auto space-y-8">
    <!-- Session Flash Messages -->
    @if (session()->has('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-lg shadow-sm" role="alert" x-data="{ show: true }" x-show="show" wire:key="success-{{ md5(session('success')) }}">
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                    <span>{{ session('success') }}</span>
                </div>
                <button type="button" @click="show = false" class="text-green-500 hover:text-green-700 transition-colors duration-200">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"/>
                    </svg>
                </button>
            </div>
        </div>
    @endif
    
    @if (session()->has('error'))
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded-lg shadow-sm" role="alert" x-data="{ show: true }" x-show="show" wire:key="error-{{ md5(session('error')) }}">
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/>
                    </svg>
                    <span>{{ session('error') }}</span>
                </div>
                <button type="button" @click="show = false" class="text-red-500 hover:text-red-700 transition-colors duration-200">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"/>
                    </svg>
                </button>
            </div>
        </div>
    @endif
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


    <!-- Section 1 -->
    <div class="bg-white rounded-xl shadow-sm">
        <div class="p-4 space-y-4 border-b border-gray-300">
            <h2 class="text-xl font-semibold text-gray-900 mb-4">Landing level</h2>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-3">
                    Background Color
                </label>
                <div class="flex items-center space-x-4">
                    <div class="relative group">
                        <div class="w-10 h-10 rounded-lg border border-gray-300 shadow-sm overflow-hidden cursor-pointer hover:border-gray-400 transition-all duration-200"
                            style="background-color: {{ $landing_bg_color }};">
                            <input
                                type="color"
                                wire:model="landing_bg_color"
                                class="opacity-0 w-full h-full cursor-pointer"
                                title="Select background color">
                        </div>
                    </div>
                    <div class="flex-1">
                        <div class="bg-gray-50 rounded-md p-2 border border-gray-200">
                            <div>
                                <p class="text-sm font-medium text-gray-700">Selected Color: <span class="text-sm text-gray-500">{{ $landing_bg_color }}</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <button
                type="button"
                wire:click="updateLandingLevel"
                class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-lg transition-colors duration-200 cursor-pointer">
                Update Landing Level
            </button>
        </div>

        <div class="p-4 space-y-4 border-b border-gray-300">
            <div class="flex items-center justify-between mb-4">
                <h2 class="text-xl font-semibold text-gray-900">Section 1</h2>
                <label class="inline-flex items-center">
                    <input type="checkbox" wire:model="section_1_is_disabled" class="rounded border-gray-300 text-blue-600 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-transparent">
                    <span class="ml-2 text-sm text-gray-600">Disable Section</span>
                </label>
            </div>

            <!-- Background Color -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-3">
                    Background Color
                </label>
                <div class="flex items-center space-x-4">
                    <div class="relative group">
                        <div class="w-10 h-10 rounded-lg border border-gray-300 shadow-sm overflow-hidden cursor-pointer hover:border-gray-400 transition-all duration-200"
                            style="background-color: {{ $section_1_bg_color }};">
                            <input
                                type="color"
                                wire:model="section_1_bg_color"
                                class="opacity-0 w-full h-full cursor-pointer"
                                title="Select background color">
                        </div>
                    </div>
                    <div class="flex-1">
                        <div class="bg-gray-50 rounded-lg p-2 border border-gray-200">
                            <p class="text-sm font-medium text-gray-700">Selected: <span class="text-sm text-gray-500">{{ $section_1_bg_color }}</span></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Line 1 -->
            <h3 class="text-lg font-semibold text-gray-700 mb-3">Line 1</h3>
            <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-4">

                <!-- Text Color -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-3">
                        Text Color
                    </label>
                    <div class="flex items-center space-x-4">
                        <div class="relative group">
                            <div class="w-10 h-10 rounded-lg border border-gray-300 shadow-sm overflow-hidden cursor-pointer hover:border-gray-400 transition-all duration-200"
                                style="background-color: {{ $section_1_line_1_font_color }};">
                                <input
                                    type="color"
                                    wire:model="section_1_line_1_font_color"
                                    class="opacity-0 w-full h-full cursor-pointer"
                                    title="Select text color">
                            </div>
                        </div>
                        <div class="flex-1">
                            <div class="bg-gray-50 rounded-md p-2 border border-gray-200">
                                <p class="text-sm font-medium text-gray-700">Selected: <span class="text-sm text-gray-500">{{ $section_1_line_1_font_color }}</span></p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Font Family -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-3">
                        Font Family
                    </label>
                    <select wire:model="section_1_line_1_font_name" class="w-full rounded-md border border-gray-300 px-3 py-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-transparent transition-colors">
                        @foreach($fontFamilies as $font)
                        <option value="{{ $font }}">{{ $font }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Font Weight -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-3">
                        Font Weight
                    </label>
                    <select wire:model="section_1_line_1_font_weight" class="w-full rounded-md border border-gray-300 px-3 py-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-transparent transition-colors">
                        @foreach($fontWeights as $weight)
                        <option value="{{ $weight }}">{{ ucfirst(str_replace('font-', '', $weight)) }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Font Size -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-3">
                        Font Size
                    </label>
                    <select wire:model="section_1_line_1_font_size" class="w-full rounded-md border border-gray-300 px-3 py-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-transparent transition-colors">
                        @foreach($fontSizes as $size)
                        <option value="{{ $size }}">{{ ucfirst(str_replace('text-', '', $size)) }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Text Alignment -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-3">
                        Text Alignment
                    </label>
                    <select wire:model="section_1_line_1_text_alignment" class="w-full rounded-md border border-gray-300 px-3 py-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-transparent transition-colors">
                        @foreach($textAlignments as $alignment)
                        <option value="{{ $alignment }}">{{ ucfirst(str_replace('text-', '', $alignment)) }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <!-- Line 2 -->
            <h3 class="text-lg font-semibold text-gray-700 mb-3">Line 2</h3>
            <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-4">

                <!-- Text Color -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-3">
                        Text Color
                    </label>
                    <div class="flex items-center space-x-4">
                        <div class="relative group">
                            <div class="w-10 h-10 rounded-lg border border-gray-300 shadow-sm overflow-hidden cursor-pointer hover:border-gray-400 transition-all duration-200"
                                style="background-color: {{ $section_1_line_2_font_color }};">
                                <input
                                    type="color"
                                    wire:model="section_1_line_2_font_color"
                                    class="opacity-0 w-full h-full cursor-pointer"
                                    title="Select text color">
                            </div>
                        </div>
                        <div class="flex-1">
                            <div class="bg-gray-50 rounded-md p-2 border border-gray-200">
                                <p class="text-sm font-medium text-gray-700">Selected: <span class="text-sm text-gray-500">{{ $section_1_line_2_font_color }}</span></p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Font Family -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-3">
                        Font Family
                    </label>
                    <select wire:model="section_1_line_2_font_name" class="w-full rounded-md border border-gray-300 px-3 py-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-transparent transition-colors">
                        @foreach($fontFamilies as $font)
                        <option value="{{ $font }}">{{ $font }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Font Weight -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-3">
                        Font Weight
                    </label>
                    <select wire:model="section_1_line_2_font_weight" class="w-full rounded-md border border-gray-300 px-3 py-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-transparent transition-colors">
                        @foreach($fontWeights as $weight)
                        <option value="{{ $weight }}">{{ ucfirst(str_replace('font-', '', $weight)) }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Font Size -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-3">
                        Font Size
                    </label>
                    <select wire:model="section_1_line_2_font_size" class="w-full rounded-md border border-gray-300 px-3 py-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-transparent transition-colors">
                        @foreach($fontSizes as $size)
                        <option value="{{ $size }}">{{ ucfirst(str_replace('text-', '', $size)) }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Text Alignment -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-3">
                        Text Alignment
                    </label>
                    <select wire:model="section_1_line_2_text_alignment" class="w-full rounded-md border border-gray-300 px-3 py-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-transparent transition-colors">
                        @foreach($textAlignments as $alignment)
                        <option value="{{ $alignment }}">{{ ucfirst(str_replace('text-', '', $alignment)) }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <!-- Paragraph 3 -->
            <h3 class="text-lg font-semibold text-gray-700 mb-3">Paragraph 3</h3>
            <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-4">

                <!-- Text Color -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-3">
                        Text Color
                    </label>
                    <div class="flex items-center space-x-4">
                        <div class="relative group">
                            <div class="w-10 h-10 rounded-lg border border-gray-300 shadow-sm overflow-hidden cursor-pointer hover:border-gray-400 transition-all duration-200"
                                style="background-color: {{ $section_1_paragraph_3_font_color }};">
                                <input
                                    type="color"
                                    wire:model="section_1_paragraph_3_font_color"
                                    class="opacity-0 w-full h-full cursor-pointer"
                                    title="Select text color">
                            </div>
                        </div>
                        <div class="flex-1">
                            <div class="bg-gray-50 rounded-md p-2 border border-gray-200">
                                <p class="text-sm font-medium text-gray-700">Selected: <span class="text-sm text-gray-500">{{ $section_1_paragraph_3_font_color }}</span></p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Font Family -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-3">
                        Font Family
                    </label>
                    <select wire:model="section_1_paragraph_3_font_name" class="w-full rounded-md border border-gray-300 px-3 py-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-transparent transition-colors">
                        @foreach($fontFamilies as $font)
                        <option value="{{ $font }}">{{ $font }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Font Weight -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-3">
                        Font Weight
                    </label>
                    <select wire:model="section_1_paragraph_3_font_weight" class="w-full rounded-md border border-gray-300 px-3 py-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-transparent transition-colors">
                        @foreach($fontWeights as $weight)
                        <option value="{{ $weight }}">{{ ucfirst(str_replace('font-', '', $weight)) }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Font Size -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-3">
                        Font Size
                    </label>
                    <select wire:model="section_1_paragraph_3_font_size" class="w-full rounded-md border border-gray-300 px-3 py-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-transparent transition-colors">
                        @foreach($fontSizes as $size)
                        <option value="{{ $size }}">{{ ucfirst(str_replace('text-', '', $size)) }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Text Alignment -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-3">
                        Text Alignment
                    </label>
                    <select wire:model="section_1_paragraph_3_text_alignment" class="w-full rounded-md border border-gray-300 px-3 py-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-transparent transition-colors">
                        @foreach($textAlignments as $alignment)
                        <option value="{{ $alignment }}">{{ ucfirst(str_replace('text-', '', $alignment)) }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <!-- Button 1 -->
            <h3 class="text-lg font-semibold text-gray-700 mb-3">Button 1</h3>
            <!-- Background Color -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-3">
                    Background Color
                </label>
                <div class="flex items-center space-x-4">
                    <div class="relative group">
                        <div class="w-10 h-10 rounded-lg border border-gray-300 shadow-sm overflow-hidden cursor-pointer hover:border-gray-400 transition-all duration-200"
                            style="background-color: {{ $section_1_button_1_bg_color }};">
                            <input
                                type="color"
                                wire:model="section_1_button_1_bg_color"
                                class="opacity-0 w-full h-full cursor-pointer"
                                title="Select background color">
                        </div>
                    </div>
                    <div class="flex-1">
                        <div class="bg-gray-50 rounded-md p-2 border border-gray-200">
                            <p class="text-sm font-medium text-gray-700">Selected: <span class="text-sm text-gray-500">{{ $section_1_button_1_bg_color }}</span></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Icon Link -->
            <div class="xl:col-span-3 lg:col-span-2">
                <label class="block text-sm font-medium text-gray-700 mb-3">
                    Icon Link
                </label>
                <input
                    type="url"
                    wire:model="section_1_button_1_icon_link"
                    class="w-full rounded-md border border-gray-300 px-3 py-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-transparent transition-colors"
                    placeholder="https://example.com/icon-link"
                    title="Enter icon link URL">
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-4">
                <!-- Text Color -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-3">
                        Text Color
                    </label>
                    <div class="flex items-center space-x-4">
                        <div class="relative group">
                            <div class="w-10 h-10 rounded-lg border border-gray-300 shadow-sm overflow-hidden cursor-pointer hover:border-gray-400 transition-all duration-200"
                                style="background-color: {{ $section_1_button_1_font_color }};">
                                <input
                                    type="color"
                                    wire:model="section_1_button_1_font_color"
                                    class="opacity-0 w-full h-full cursor-pointer"
                                    title="Select text color">
                            </div>
                        </div>
                        <div class="flex-1">
                            <div class="bg-gray-50 rounded-md p-2 border border-gray-200">
                                <p class="text-sm font-medium text-gray-700">Selected: <span class="text-sm text-gray-500">{{ $section_1_button_1_font_color }}</span></p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Font Family -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-3">
                        Font Family
                    </label>
                    <select wire:model="section_1_button_1_font_name" class="w-full rounded-md border border-gray-300 px-3 py-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-transparent transition-colors">
                        @foreach($fontFamilies as $font)
                        <option value="{{ $font }}">{{ $font }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Font Weight -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-3">
                        Font Weight
                    </label>
                    <select wire:model="section_1_button_1_font_weight" class="w-full rounded-md border border-gray-300 px-3 py-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-transparent transition-colors">
                        @foreach($fontWeights as $weight)
                        <option value="{{ $weight }}">{{ ucfirst(str_replace('font-', '', $weight)) }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Font Size -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-3">
                        Font Size
                    </label>
                    <select wire:model="section_1_button_1_font_size" class="w-full rounded-md border border-gray-300 px-3 py-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-transparent transition-colors">
                        @foreach($fontSizes as $size)
                        <option value="{{ $size }}">{{ ucfirst(str_replace('text-', '', $size)) }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Text Alignment -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-3">
                        Text Alignment
                    </label>
                    <select wire:model="section_1_button_1_text_alignment" class="w-full rounded-md border border-gray-300 px-3 py-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-transparent transition-colors">
                        @foreach($textAlignments as $alignment)
                        <option value="{{ $alignment }}">{{ ucfirst(str_replace('text-', '', $alignment)) }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <button
                type="button"
                wire:click="updateSection1"
                class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-lg transition-colors duration-200 cursor-pointer">
                Update Section 1
            </button>
        </div>
    </div>
</div>
