<div class="bg-white rounded-xl shadow-sm border border-gray-100">
    <div class="flex flex-col lg:flex-row gap-6">
        <!-- Left side - Configuration -->
        <div class="flex-1 p-6">
            <div class="flex items-center space-x-3 mb-6">
                <div class="w-10 h-10 bg-gradient-to-r from-purple-600 to-purple-700 rounded-lg flex items-center justify-center">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-gray-900">Section 7</h3>
                </div>
            </div>
            
            <div class="space-y-6">
            <!-- Icon 1 Link -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-3">
                    Icon 1 Link (WhatsApp)
                </label>
                <input
                    type="url"
                    wire:model="section_7_item1_icon_link"
                    class="w-full rounded-lg border border-gray-300 px-4 h-10 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all duration-200"
                    placeholder="https://example.com/whatsapp-icon.png">
            </div>

            <!-- Icon 2 Link -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-3">
                    Icon 2 Link (Calendar)
                </label>
                <input
                    type="url"
                    wire:model="section_7_item2_icon_link"
                    class="w-full rounded-lg border border-gray-300 px-4 h-10 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all duration-200"
                    placeholder="https://example.com/calendar-icon.png">
            </div>

            <!-- Icon 3 Link -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-3">
                    Icon 3 Link (Contact)
                </label>
                <input
                    type="url"
                    wire:model="section_7_item3_icon_link"
                    class="w-full rounded-lg border border-gray-300 px-4 h-10 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all duration-200"
                    placeholder="https://example.com/contact-icon.png">
            </div>
        </div>

            <div class="flex justify-end pt-6 border-t border-gray-200 mt-6">
                <button
                    type="button"
                    wire:click="updatePersonalization"
                    class="inline-flex items-center px-4 py-2 bg-purple-600 hover:bg-purple-700 text-white font-medium text-sm rounded-lg transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-purple-500 cursor-pointer h-10">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    Update
                </button>
            </div>
        </div>

        <!-- Right side - Preview -->
        <div class="w-full max-w-md p-4 bg-gray-100 flex items-center">
            <div class="bg-white border border-gray-200 rounded p-3 w-full">
                <livewire:components.public.section7 />
            </div>
        </div>
    </div>
</div>