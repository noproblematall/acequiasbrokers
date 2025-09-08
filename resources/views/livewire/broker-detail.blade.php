<div class="max-w-7xl mx-auto space-y-8">
    <!-- Page Header -->
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-4">
        <div class="flex items-center justify-between">
            <div class="flex items-center space-x-4">
                <div class="w-16 h-16 bg-gradient-to-r from-blue-500 to-purple-600 rounded-xl flex items-center justify-center">
                    <span class="text-white font-bold text-xl">{{ substr($broker->first_name, 0, 1) . substr($broker->last_name, 0, 1) }}</span>
                </div>
                <div>
                    <h1 class="text-3xl font-bold text-gray-900">{{ $broker->full_name }}</h1>
                    <div class="flex items-center mt-2 space-x-4">
                        <p class="text-gray-600">Broker Details</p>
                        <span class="text-gray-300">•</span>
                        <a href="/{{ $broker->url }}" target="_blank" class="inline-flex items-center text-blue-600 hover:text-blue-800 font-medium">
                            View public page
                        </a>
                    </div>
                </div>
            </div>
            <a href="{{ route('brokers') }}" wire:navigate class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-lg text-gray-700 bg-white hover:bg-gray-50 focus:outline-none cursor-pointer transition-colors">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
                Back to Brokers
            </a>
        </div>
    </div>

    <livewire:components.personalization.section2 :broker="$broker" />
    <livewire:components.personalization.section4 :broker="$broker" />
    <livewire:components.personalization.section5 :broker="$broker" />
    <livewire:components.personalization.section6 :broker="$broker" />
    <livewire:components.personalization.section7 :broker="$broker" />
    <livewire:components.personalization.section10 :broker="$broker" />

</div>