<div class="bg-white rounded-xl shadow-sm border border-gray-100 p-4">
    <div class="flex items-center space-x-3 mb-6">
        <div class="w-10 h-10 bg-gradient-to-r from-pink-600 to-pink-700 rounded-lg flex items-center justify-center">
            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 4V2a1 1 0 011-1h8a1 1 0 011 1v2M7 4h10M7 4l-4 12h18L17 4M9 8v8m6-8v8"></path>
            </svg>
        </div>
        <div>
            <h3 class="text-lg font-semibold text-gray-900">Section 10</h3>
        </div>
    </div>
    
    <div class="space-y-6">
        <!-- Icon 1 Link -->
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-3">
                Icon 1 Link (Instagram)
            </label>
            <input
                type="url"
                wire:model="section_10_icon1_link"
                class="w-full rounded-lg border border-gray-300 px-4 h-10 focus:outline-none focus:ring-2 focus:ring-pink-500 focus:border-transparent transition-all duration-200"
                placeholder="https://instagram.com/username">
        </div>

        <!-- Icon 2 Link -->
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-3">
                Icon 2 Link (Facebook)
            </label>
            <input
                type="url"
                wire:model="section_10_icon2_link"
                class="w-full rounded-lg border border-gray-300 px-4 h-10 focus:outline-none focus:ring-2 focus:ring-pink-500 focus:border-transparent transition-all duration-200"
                placeholder="https://facebook.com/username">
        </div>

        <!-- Icon 3 Link -->
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-3">
                Icon 3 Link (LinkedIn)
            </label>
            <input
                type="url"
                wire:model="section_10_icon3_link"
                class="w-full rounded-lg border border-gray-300 px-4 h-10 focus:outline-none focus:ring-2 focus:ring-pink-500 focus:border-transparent transition-all duration-200"
                placeholder="https://linkedin.com/in/username">
        </div>
    </div>

    <div class="flex justify-end pt-6 border-t border-gray-200 mt-6">
        <button
            type="button"
            wire:click="updatePersonalization"
            class="inline-flex items-center px-4 py-2 bg-pink-600 hover:bg-pink-700 text-white font-medium text-sm rounded-lg transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-pink-500 cursor-pointer h-10">
            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            Update
        </button>
    </div>
</div>