<div>
    @if(!$section_7_is_disabled)
    <section class="">
        <!-- Rectangle 1 -->
        <div class="p-2 mb-1" style="background-color: {{ $section_7_bg_color }};">
            <div class="flex items-center">
                @if($section_7_rect1_icon_url)
                <img src="{{ $section_7_rect1_icon_url }}" alt="Icon" class="w-6 h-6 mr-4">
                @endif
                <h3 class="{{ $section_7_rect1_title_text_alignment }} {{ $section_7_rect1_title_font_size }} {{ $section_7_rect1_title_font_weight }}"
                    style="color: {{ $section_7_rect1_title_font_color }}; font-family: {{ $section_7_rect1_title_font_name }};">
                    {{ $section_7_rect1_title }}
                </h3>
            </div>
        </div>

        <!-- Rectangle 2 - Three Items with Shared Styling -->
        <div class="" style="background-color: {{ $section_7_bg_color }};">
            <div class="px-5 py-4 space-y-4">
                <!-- Item 1 -->
                <div class="flex items-center justify-between gap-2">
                    <div class="">
                        <h4 class="{{ $section_7_rect2_title_text_alignment }} {{ $section_7_rect2_title_font_size }} {{ $section_7_rect2_title_font_weight }}"
                            style="color: {{ $section_7_rect2_title_font_color }}; font-family: {{ $section_7_rect2_title_font_name }};">
                            {{ $section_7_item1_title }}
                        </h4>
                        <p class="{{ $section_7_rect2_subtitle_text_alignment }} {{ $section_7_rect2_subtitle_font_size }} {{ $section_7_rect2_subtitle_font_weight }}"
                           style="color: {{ $section_7_rect2_subtitle_font_color }}; font-family: {{ $section_7_rect2_subtitle_font_name }};">
                            {{ $section_7_item1_subtitle }}
                        </p>
                    </div>
                    <div class="">
                        @if($section_7_item1_icon_url)
                            @if($section_7_item1_icon_link)
                            <a href="{{ $section_7_item1_icon_link }}" target="_blank" class="cursor-pointer">
                                <img src="{{ $section_7_item1_icon_url }}" alt="Icon" class="w-8 h-8">
                            </a>
                            @else
                            <img src="{{ $section_7_item1_icon_url }}" alt="Icon" class="w-8 h-8">
                            @endif
                        @endif
                    </div>
                </div>

                <!-- Item 2 -->
                <div class="flex items-center justify-between gap-2">
                    <div class="">
                        <h4 class="{{ $section_7_rect2_title_text_alignment }} {{ $section_7_rect2_title_font_size }} {{ $section_7_rect2_title_font_weight }}"
                            style="color: {{ $section_7_rect2_title_font_color }}; font-family: {{ $section_7_rect2_title_font_name }};">
                            {{ $section_7_item2_title }}
                        </h4>
                        <p class="{{ $section_7_rect2_subtitle_text_alignment }} {{ $section_7_rect2_subtitle_font_size }} {{ $section_7_rect2_subtitle_font_weight }}"
                           style="color: {{ $section_7_rect2_subtitle_font_color }}; font-family: {{ $section_7_rect2_subtitle_font_name }};">
                            {{ $section_7_item2_subtitle }}
                        </p>
                    </div>
                    <div class="">
                        @if($section_7_item2_icon_url)
                            @if($section_7_item2_icon_link)
                            <a href="{{ $section_7_item2_icon_link }}" target="_blank" class="cursor-pointer">
                                <img src="{{ $section_7_item2_icon_url }}" alt="Icon" class="w-8 h-8">
                            </a>
                            @else
                            <img src="{{ $section_7_item2_icon_url }}" alt="Icon" class="w-8 h-8">
                            @endif
                        @endif
                    </div>
                </div>

                <!-- Item 3 -->
                <div class="flex items-center justify-between gap-2">
                    <div class="">
                        <h4 class="{{ $section_7_rect2_title_text_alignment }} {{ $section_7_rect2_title_font_size }} {{ $section_7_rect2_title_font_weight }}"
                            style="color: {{ $section_7_rect2_title_font_color }}; font-family: {{ $section_7_rect2_title_font_name }};">
                            {{ $section_7_item3_title }}
                        </h4>
                        <p class="{{ $section_7_rect2_subtitle_text_alignment }} {{ $section_7_rect2_subtitle_font_size }} {{ $section_7_rect2_subtitle_font_weight }}"
                           style="color: {{ $section_7_rect2_subtitle_font_color }}; font-family: {{ $section_7_rect2_subtitle_font_name }};">
                            {{ $section_7_item3_subtitle }}
                        </p>
                    </div>
                    <div class="">
                        @if($section_7_item3_icon_url)
                            @if($section_7_item3_icon_link)
                            <a href="{{ $section_7_item3_icon_link }}" target="_blank" class="cursor-pointer">
                                <img src="{{ $section_7_item3_icon_url }}" alt="Icon" class="w-8 h-8">
                            </a>
                            @else
                            <img src="{{ $section_7_item3_icon_url }}" alt="Icon" class="w-8 h-8">
                            @endif
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif
</div>