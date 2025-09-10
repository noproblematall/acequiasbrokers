<div>
    @if(!$section_2_is_disabled)
        <div class="" style="background-color: {{ $section_2_bg_color }};">
            <div class="flex items-center p-2 gap-2">
                <!-- Logo Section (1 part width) -->
                <div>
                    <div class="flex justify-center items-center h-full">
                        @if($section_2_image_url)
                            <img src="{{ $section_2_image_url }}" alt="Logo" class="w-20 h-20 object-cover rounded-full">
                        @else
                            <svg class="w-20 h-20 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                            </svg>
                        @endif
                    </div>
                </div>
                
                <!-- Content Section (2 parts width) -->
                <div class="flex-1">
                    @if($section_2_line_1)
                        <h2 class="mb-2 {{ $section_2_line_1_font_weight }} {{ $section_2_line_1_font_size }} {{ $section_2_line_1_text_alignment }}" style="font-family: {{ $section_2_line_1_font_name }}; color: {{ $section_2_line_1_font_color }};">
                            {{ $section_2_line_1 }}
                        </h2>
                    @endif
                    
                    @if($section_2_line_2)
                        <h3 class="mb-2 {{ $section_2_line_2_font_weight }} {{ $section_2_line_2_font_size }} {{ $section_2_line_2_text_alignment }}" style="font-family: {{ $section_2_line_2_font_name }}; color: {{ $section_2_line_2_font_color }};">
                            {{ $section_2_line_2 }}
                        </h3>
                    @endif
                    
                    @if($section_2_paragraph_3)
                        <p class="mb-2 {{ $section_2_paragraph_3_font_weight }} {{ $section_2_paragraph_3_font_size }} {{ $section_2_paragraph_3_text_alignment }} leading-relaxed italic" style="font-family: {{ $section_2_paragraph_3_font_name }}; color: {{ $section_2_paragraph_3_font_color }};">
                            {!! $section_2_paragraph_3 !!}
                        </p>
                    @endif
                    
                    @if($section_2_button_link)
                        <div class="{{ $section_2_button_1_text_alignment }}">
                            <a href="{{ $section_2_button_link }}" 
                               target="_blank"
                               class="inline-flex items-center px-4 py-2 rounded-full transition-colors duration-200 {{ $section_2_button_1_font_weight }} {{ $section_2_button_1_font_size }}"
                               style="background-color: {{ $section_2_button_1_bg_color }}; font-family: {{ $section_2_button_1_font_name }}; color: {{ $section_2_button_1_font_color }};">
                                @if($section_2_button_1_icon_link)
                                    <img src="{{ $section_2_button_1_icon_link }}" alt="Icon" class="w-5 h-5 mr-2">
                                @endif
                                {{ $section_2_button_1_text }}
                            </a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    @endif
</div>