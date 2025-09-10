<div>
    @if(!$section_9_is_disabled)
    <section class="">
        <!-- Rectangle 1 -->
        <div class="p-2 mb-1" style="background-color: {{ $section_9_bg_color }};">
            <div class="flex items-center">
                @if($section_9_rect1_icon_url)
                <img src="{{ $section_9_rect1_icon_url }}" alt="Icon" class="w-6 h-6 mr-4">
                @endif
                <h3 class="{{ $section_9_rect1_title_text_alignment }} {{ $section_9_rect1_title_font_size }} {{ $section_9_rect1_title_font_weight }}"
                    style="color: {{ $section_9_rect1_title_font_color }}; font-family: {{ $section_9_rect1_title_font_name }};">
                    {{ $section_9_rect1_title }}
                </h3>
            </div>
        </div>

        <!-- Rectangle 2 - Image and Text with Button -->
        <div class="" style="background-color: {{ $section_9_bg_color }};">
            <div class="px-5 py-4">
                <!-- Full Width Image -->
                <div class="mb-4">
                    @if($section_9_rect2_image_url)
                    <img src="{{ $section_9_rect2_image_url }}" alt="Office" class="w-full object-cover ">
                    @endif
                </div>

                <!-- Text and Button Row -->
                <div class="flex items-center justify-between">
                    <!-- Text Section -->
                    <div class="flex-1">
                        <p class="{{ $section_9_rect2_text_text_alignment }} {{ $section_9_rect2_text_font_size }} {{ $section_9_rect2_text_font_weight }}"
                           style="color: {{ $section_9_rect2_text_font_color }}; font-family: {{ $section_9_rect2_text_font_name }};">
                            {!! $section_9_rect2_text !!}
                        </p>
                    </div>

                    <!-- Button Section -->
                    <div class="flex-shrink-0 ml-4">
                        <a href="{{ $section_9_button_link }}" target="_blank"
                           class="inline-flex items-center px-4 py-2 rounded-full transition-colors duration-200 hover:opacity-90"
                           style="background-color: {{ $section_9_button_bg_color }};">
                            <span class="{{ $section_9_button_text_alignment }} {{ $section_9_button_font_size }} {{ $section_9_button_font_weight }}"
                                  style="color: {{ $section_9_button_font_color }}; font-family: {{ $section_9_button_font_name }};">
                                {{ $section_9_button_text }}
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif
</div>