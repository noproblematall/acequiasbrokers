<div class="bg-white rounded-xl shadow-sm border border-gray-100">
    <div class="p-6">
        <div class="flex items-center space-x-3 mb-6">
            <div class="w-10 h-10 bg-gradient-to-r from-blue-500 to-purple-600 rounded-lg flex items-center justify-center">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                </svg>
            </div>
            <div>
                <h3 class="text-lg font-semibold text-gray-900">Section 2</h3>
                <p class="text-sm text-gray-600">Personalize content for {{ $broker->full_name }}</p>
            </div>
        </div>
        
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <!-- Section 2 Line 1 -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-3">
                    Line 1
                </label>
                <input
                    type="text"
                    wire:model="section_2_line_1"
                    class="w-full rounded-lg border border-gray-300 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200"
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
                    class="w-full rounded-lg border border-gray-300 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200"
                    placeholder="Enter line 2 text">
            </div>

            <!-- Section 2 Paragraph 3 -->
            <div class="lg:col-span-2">
                <label class="block text-sm font-medium text-gray-700 mb-3">
                    Paragraph 3
                </label>
                <textarea
                    wire:model="section_2_paragraph_3"
                    rows="4"
                    class="w-full rounded-lg border border-gray-300 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 resize-none"
                    placeholder="Enter paragraph 3 text"></textarea>
            </div>

            <!-- Button Link -->
            <div class="lg:col-span-2">
                <label class="block text-sm font-medium text-gray-700 mb-3">
                    Button Link
                </label>
                <input
                    type="url"
                    wire:model="section_2_button_link"
                    class="w-full rounded-lg border border-gray-300 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200"
                    placeholder="https://example.com">
            </div>
        </div>

        <div class="flex justify-end pt-6 border-t border-gray-200 mt-6">
            <button
                type="button"
                wire:click="updatePersonalization"
                class="inline-flex items-center px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white font-medium text-sm rounded-lg transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                Update
            </button>
        </div>
    </div>
</div>