<div>
    @if(!$section_6_is_disabled)
    <section class="mb-4">
        <!-- Rectangle 1 -->
        <div class="p-2 mb-1" style="background-color: {{ $section_6_bg_color }};">
            <div class="flex items-center">
                @if($section_6_rect1_icon_link)
                <img src="{{ $section_6_rect1_icon_link }}" alt="Icon" class="w-6 h-6 mr-4">
                @endif
                <h3 class="{{ $section_6_rect1_title_text_alignment }} {{ $section_6_rect1_title_font_size }} {{ $section_6_rect1_title_font_weight }}"
                    style="color: {{ $section_6_rect1_title_font_color }}; font-family: {{ $section_6_rect1_title_font_name }};">
                    {{ $section_6_rect1_title }}
                </h3>
            </div>
        </div>

        <!-- Rectangle 2 -->
        <div class="" style="background-color: {{ $section_6_bg_color }};">
            <div class="flex items-center p-2 gap-2">
                <div class="w-1/3">
                    @if($section_6_rect2_image_link)
                    <div class="">
                        <img src="{{ $section_6_rect2_image_link }}" alt="Section Image" class="w-full object-cover rounded-lg">
                    </div>
                    @endif
                </div>
                <div class="w-2/3">
                    <h3 class="mb-2 {{ $section_6_rect2_title_text_alignment }} {{ $section_6_rect2_title_font_size }} {{ $section_6_rect2_title_font_weight }}"
                        style="color: {{ $section_6_rect2_title_font_color }}; font-family: {{ $section_6_rect2_title_font_name }};">
                        {{ $section_6_rect2_title }}
                    </h3>

                    <p class="mb-2 {{ $section_6_rect2_text_text_alignment }} {{ $section_6_rect2_text_font_size }} {{ $section_6_rect2_text_font_weight }}"
                        style="color: {{ $section_6_rect2_text_font_color }}; font-family: {{ $section_6_rect2_text_font_name }};">
                        {{ $section_6_rect2_text }}
                    </p>
                    <!-- Button -->
                    @if($section_6_button_link)
                        <div class="{{ $section_6_button_text_alignment }}">
                            <a href="{{ $section_6_button_link }}" 
                               target="_blank"
                               class="inline-flex items-center px-4 py-2 rounded-full transition-colors duration-200 {{ $section_6_button_font_weight }} {{ $section_6_button_font_size }}"
                               style="background-color: {{ $section_6_button_bg_color }}; font-family: {{ $section_6_button_font_name }}; color: {{ $section_6_button_font_color }};">
                                @if($section_6_button_icon_link)
                                    <img src="{{ $section_6_button_icon_link }}" alt="Icon" class="w-5 h-5 mr-2">
                                @endif
                                {{ $section_6_button_text }}
                            </a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
    @endif
</div>