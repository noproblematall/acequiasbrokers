<div>
    @if(!$section_4_is_disabled)
        <div class="py-4" style="background-color: {{ $section_4_bg_color }};">
            <div class="flex items-center gap-6">
                <!-- Picture Section -->
                <div class="w-1/3 p-4">
                    <img src="{{ $section_4_picture_link }}" alt="Section 4" class="w-full h-auto rounded-lg">
                </div>
                
                <!-- Content Section -->
                <div class="w-2/3">
                    <!-- Line 1 -->
                    <h2 class="mb-2 {{ $section_4_line_1_font_weight }} {{ $section_4_line_1_font_size }} {{ $section_4_line_1_text_alignment }}" 
                        style="font-family: {{ $section_4_line_1_font_name }}; color: {{ $section_4_line_1_font_color }};">
                        {{ $section_4_line_1 }}
                    </h2>
                    
                    <!-- Line 2 -->
                    <p class="mb-2 {{ $section_4_line_2_font_weight }} {{ $section_4_line_2_font_size }} {{ $section_4_line_2_text_alignment }}" 
                       style="font-family: {{ $section_4_line_2_font_name }}; color: {{ $section_4_line_2_font_color }};">
                        {{ $section_4_line_2 }}
                    </p>
                    
                    <!-- Button -->
                    @if($section_2_button_link)
                        <div class="{{ $section_4_button_1_text_alignment }}">
                            <a href="{{ $section_2_button_link }}" 
                               target="_blank"
                               class="inline-flex items-center px-4 py-2 rounded-full transition-colors duration-200 {{ $section_4_button_1_font_weight }} {{ $section_4_button_1_font_size }}"
                               style="background-color: {{ $section_4_button_1_bg_color }}; font-family: {{ $section_4_button_1_font_name }}; color: {{ $section_4_button_1_font_color }};">
                                @if($section_4_button_1_icon_link)
                                    <img src="{{ $section_4_button_1_icon_link }}" alt="Icon" class="w-5 h-5 mr-2">
                                @endif
                                &nbsp;Agenda una visita
                            </a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    @endif
</div>