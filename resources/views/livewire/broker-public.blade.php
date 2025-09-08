<div class="min-h-screen py-4">
    <livewire:components.public.section1 />
    <livewire:components.public.section2 :broker="$broker" />
    <livewire:components.public.section4 :broker="$broker" />
    <livewire:components.public.section5 :broker="$broker" />
    <livewire:components.public.section6 :broker="$broker" />
    <livewire:components.public.section7 :broker="$broker" />
    <livewire:components.public.section8 :broker="$broker" />
    <livewire:components.public.section9 :broker="$broker" />
    <livewire:components.public.section10 :broker="$broker" />
    
    <!-- Footer -->
    <footer class="">
        <div class="text-right px-4">
            <p class="text-sm text-blue-600">
                © {{ config('app.name') }} {{ date('Y') }}
            </p>
        </div>
    </footer>
</div>