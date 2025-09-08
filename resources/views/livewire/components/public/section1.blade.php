<div>
    @if(!$section_1_is_disabled && $section_1_logo_link)
    <div class="mb-4" style="background-color: {{ $section_1_bg_color }};">
        <div class="flex justify-end">
            <img
                src="{{ $section_1_logo_link }}"
                alt="Logo"
                style="width: {{ $section_1_logo_width }}%;"
                class="max-w-full h-auto">
        </div>
    </div>
    @endif
</div>