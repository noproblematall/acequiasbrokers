<div>
    @if(!$section_10_is_disabled)
    <section class="">
        <!-- Rectangle 1 -->
        <div class="p-2 mb-1" style="background-color: {{ $section_10_bg_color }};">
            <div class="flex items-center">
                @if($section_10_rect1_icon_url)
                <img src="{{ $section_10_rect1_icon_url }}" alt="Icon" class="w-6 h-6 mr-4">
                @endif
                <h3 class="{{ $section_10_rect1_title_text_alignment }} {{ $section_10_rect1_title_font_size }} {{ $section_10_rect1_title_font_weight }}"
                    style="color: {{ $section_10_rect1_title_font_color }}; font-family: {{ $section_10_rect1_title_font_name }};">
                    {{ $section_10_rect1_title }}
                </h3>
            </div>
        </div>

        <!-- Rectangle 2 - Three Social Icons -->
        <div class="" style="background-color: {{ $section_10_bg_color }};">
            <div class="px-5 py-4">
                <div class="flex items-center justify-around">
                    <!-- Icon 1 -->
                    <div class="">
                        @if($section_10_icon1_url)
                            @if($section_10_icon1_link)
                            <a href="{{ $section_10_icon1_link }}" target="_blank" class="cursor-pointer">
                                <img src="{{ $section_10_icon1_url }}" alt="Social Icon 1" class="w-12 h-12">
                            </a>
                            @else
                            <img src="{{ $section_10_icon1_url }}" alt="Social Icon 1" class="w-12 h-12">
                            @endif
                        @endif
                    </div>

                    <!-- Icon 2 -->
                    <div class="">
                        @if($section_10_icon2_url)
                            @if($section_10_icon2_link)
                            <a href="{{ $section_10_icon2_link }}" target="_blank" class="cursor-pointer">
                                <img src="{{ $section_10_icon2_url }}" alt="Social Icon 2" class="w-12 h-12">
                            </a>
                            @else
                            <img src="{{ $section_10_icon2_url }}" alt="Social Icon 2" class="w-12 h-12">
                            @endif
                        @endif
                    </div>

                    <!-- Icon 3 -->
                    <div class="">
                        @if($section_10_icon3_url)
                            @if($section_10_icon3_link)
                            <a href="{{ $section_10_icon3_link }}" target="_blank" class="cursor-pointer">
                                <img src="{{ $section_10_icon3_url }}" alt="Social Icon 3" class="w-12 h-12">
                            </a>
                            @else
                            <img src="{{ $section_10_icon3_url }}" alt="Social Icon 3" class="w-12 h-12">
                            @endif
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif
</div>