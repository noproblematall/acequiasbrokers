<div>
    @if(!$section_8_is_disabled)
    <section class="mb-4">
        <!-- Rectangle 1 -->
        <div class="p-2 mb-1" style="background-color: {{ $section_8_bg_color }};">
            <div class="flex items-center">
                @if($section_8_rect1_icon_url)
                <img src="{{ $section_8_rect1_icon_url }}" alt="Icon" class="w-6 h-6 mr-4">
                @endif
                <h3 class="{{ $section_8_rect1_title_text_alignment }} {{ $section_8_rect1_title_font_size }} {{ $section_8_rect1_title_font_weight }}"
                    style="color: {{ $section_8_rect1_title_font_color }}; font-family: {{ $section_8_rect1_title_font_name }};">
                    {{ $section_8_rect1_title }}
                </h3>
            </div>
        </div>

        <!-- Rectangle 2 - Sharing Options -->
        <div class="" style="background-color: {{ $section_8_bg_color }};">
            <div class="px-5 py-4">
                <!-- Title -->
                <h4 class="mb-4 {{ $section_8_rect2_title_text_alignment }} {{ $section_8_rect2_title_font_size }} {{ $section_8_rect2_title_font_weight }}"
                    style="color: {{ $section_8_rect2_title_font_color }}; font-family: {{ $section_8_rect2_title_font_name }};">
                    {{ $section_8_rect2_title }}
                </h4>

                <!-- First Row - 2 Buttons -->
                <div class="grid grid-cols-2 gap-3 mb-3">
                    <!-- Button 1 - WhatsApp -->
                    <a href="{{ $section_8_button1_link }}" target="_blank" 
                       class="flex items-center justify-center px-3 py-2 rounded-full transition-colors duration-200 hover:opacity-90"
                       style="background-color: {{ $section_8_button_bg_color }};">
                        <div class="flex items-center space-x-2">
                            @if($section_8_button1_icon_url)
                            <img src="{{ $section_8_button1_icon_url }}" alt="WhatsApp" class="w-5 h-5">
                            @endif
                            <span class="{{ $section_8_button_text_alignment }} {{ $section_8_button_font_size }} {{ $section_8_button_font_weight }}"
                                  style="color: {{ $section_8_button_font_color }}; font-family: {{ $section_8_button_font_name }};">
                                {{ $section_8_button1_text }}
                            </span>
                        </div>
                    </a>

                    <!-- Button 2 - Facebook -->
                    <a href="{{ $section_8_button2_link }}" target="_blank" 
                       class="flex items-center justify-center px-3 py-2 rounded-full transition-colors duration-200 hover:opacity-90"
                       style="background-color: {{ $section_8_button_bg_color }};">
                        <div class="flex items-center space-x-2">
                            @if($section_8_button2_icon_url)
                            <img src="{{ $section_8_button2_icon_url }}" alt="Facebook" class="w-5 h-5">
                            @endif
                            <span class="{{ $section_8_button_text_alignment }} {{ $section_8_button_font_size }} {{ $section_8_button_font_weight }}"
                                  style="color: {{ $section_8_button_font_color }}; font-family: {{ $section_8_button_font_name }};">
                                {{ $section_8_button2_text }}
                            </span>
                        </div>
                    </a>
                </div>

                <!-- Second Row - 2 Buttons -->
                <div class="grid grid-cols-2 gap-3">
                    <!-- Button 3 - LinkedIn -->
                    <a href="{{ $section_8_button3_link }}" target="_blank" 
                       class="flex items-center justify-center px-3 py-2 rounded-full transition-colors duration-200 hover:opacity-90"
                       style="background-color: {{ $section_8_button_bg_color }};">
                        <div class="flex items-center space-x-2">
                            @if($section_8_button3_icon_url)
                            <img src="{{ $section_8_button3_icon_url }}" alt="LinkedIn" class="w-5 h-5">
                            @endif
                            <span class="{{ $section_8_button_text_alignment }} {{ $section_8_button_font_size }} {{ $section_8_button_font_weight }}"
                                  style="color: {{ $section_8_button_font_color }}; font-family: {{ $section_8_button_font_name }};">
                                {{ $section_8_button3_text }}
                            </span>
                        </div>
                    </a>

                    <!-- Button 4 - Email -->
                    <a href="{{ $section_8_button4_link }}" 
                       class="flex items-center justify-center px-3 py-2 rounded-full transition-colors duration-200 hover:opacity-90"
                       style="background-color: {{ $section_8_button_bg_color }};">
                        <div class="flex items-center space-x-2">
                            @if($section_8_button4_icon_url)
                            <img src="{{ $section_8_button4_icon_url }}" alt="Email" class="w-5 h-5">
                            @endif
                            <span class="{{ $section_8_button_text_alignment }} {{ $section_8_button_font_size }} {{ $section_8_button_font_weight }}"
                                  style="color: {{ $section_8_button_font_color }}; font-family: {{ $section_8_button_font_name }};">
                                {{ $section_8_button4_text }}
                            </span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    @endif
</div>