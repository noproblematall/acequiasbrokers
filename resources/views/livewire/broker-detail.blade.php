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

    <!-- Section 2 Personalization -->
    <div class="bg-white rounded-xl shadow-sm">
        <div class="p-4 space-y-4 border-b border-gray-300">
            <h2 class="text-xl font-semibold text-gray-900 mb-4">Section 2</h2>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
                <!-- Section 2 Line 1 -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-3">
                        Line 1
                    </label>
                    <input
                        type="text"
                        wire:model="section_2_line_1"
                        class="w-full rounded-md border border-gray-300 px-3 py-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-transparent transition-colors"
                        placeholder="Enter line 1 text">
                </div>

                <!-- Section 2 Line 2 -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-3">
                        Line 2
                    </label>
                    <input
                        type="text"
                        wire:model="section_2_line_2"
                        class="w-full rounded-md border border-gray-300 px-3 py-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-transparent transition-colors"
                        placeholder="Enter line 2 text">
                </div>

                <!-- Section 2 Paragraph 3 -->
                <div class="lg:col-span-2">
                    <label class="block text-sm font-medium text-gray-700 mb-3">
                        Paragraph 3
                    </label>
                    <textarea
                        wire:model="section_2_paragraph_3"
                        rows="3"
                        class="w-full rounded-md border border-gray-300 px-3 py-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-transparent transition-colors"
                        placeholder="Enter paragraph 3 text"></textarea>
                </div>

                <!-- Button Link -->
                <div class="lg:col-span-2">
                    <label class="block text-sm font-medium text-gray-700 mb-3">
                        Button Link
                    </label>
                    <input
                        type="url"
                        wire:model="button_link"
                        class="w-full rounded-md border border-gray-300 px-3 py-2 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-transparent transition-colors"
                        placeholder="https://example.com">
                </div>
            </div>

            <button
                type="button"
                wire:click="updatePersonalization"
                class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-lg transition-colors duration-200 cursor-pointer">
                Update
            </button>
        </div>
    </div>

</div>