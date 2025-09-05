<div class="max-w-5xl mx-auto space-y-8">
    <!-- Page Header -->
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-8">
        <div class="flex items-center space-x-4">
            <div class="w-16 h-16 bg-gradient-to-r from-blue-500 to-purple-600 rounded-xl flex items-center justify-center">
                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                </svg>
            </div>
            <div>
                <h1 class="text-3xl font-bold text-gray-900">Profile Settings</h1>
                <p class="text-gray-600 mt-1">Manage your personal information and account security</p>
            </div>
        </div>
    </div>

    @if (session()->has('message'))
        <div class="bg-green-50 border-l-4 border-green-400 rounded-lg p-4 shadow-sm">
            <div class="flex">
                <div class="flex-shrink-0">
                    <svg class="h-5 w-5 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                </div>
                <div class="ml-3">
                    <p class="text-green-700 font-medium">{{ session('message') }}</p>
                </div>
            </div>
        </div>
    @endif

    <!-- User Information Section -->
    <div class="bg-white rounded-xl shadow-sm border border-gray-100">
        <div class="px-8 py-6 border-b border-gray-100">
            <div class="flex items-center space-x-3">
                <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center">
                    <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                    </svg>
                </div>
                <div>
                    <h2 class="text-xl font-semibold text-gray-900">Personal Information</h2>
                    <p class="text-sm text-gray-600">Update your profile details and photo</p>
                </div>
            </div>
        </div>
        
        <div class="p-8">
            <!-- Profile Image -->
            <div class="mb-8">
                <label class="block text-sm font-semibold text-gray-700 mb-4">Profile Photo</label>
                <div class="flex items-center space-x-6">
                    <div class="relative">
                        <div class="w-24 h-24 bg-gradient-to-br from-gray-200 to-gray-300 rounded-full flex items-center justify-center overflow-hidden ring-4 ring-white shadow-lg">
                            @if($profile_image && is_object($profile_image))
                                <img src="{{ $profile_image->temporaryUrl() }}" alt="Preview" class="w-24 h-24 rounded-full object-cover">
                            @elseif(auth()->user()->profile_image)
                                <img src="{{ asset('storage/' . auth()->user()->profile_image) }}" alt="Current Profile" class="w-24 h-24 rounded-full object-cover">
                            @else
                                <svg class="w-12 h-12 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                            @endif
                        </div>
                        @if($profile_image && is_object($profile_image))
                            <div class="absolute -top-1 -right-1 w-6 h-6 bg-green-500 rounded-full flex items-center justify-center">
                                <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                        @endif
                        
                        <!-- Remove button for uploaded image -->
                        @if(auth()->user()->profile_image)
                            <div x-data="{ showRemoveModal: false }" @keydown.escape.window="showRemoveModal = false">
                                <button @click="showRemoveModal = true" class="absolute -top-1 -left-1 w-6 h-6 bg-red-500 rounded-full flex items-center justify-center hover:bg-red-600 focus:outline-none cursor-pointer transition-colors" title="Remove profile image">
                                    <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                    </svg>
                                </button>
                                
                                <!-- Confirmation Modal -->
                                <div x-show="showRemoveModal" x-cloak class="fixed inset-0 z-50 flex items-center justify-center">
                                    <div @click="showRemoveModal = false" x-show="showRemoveModal" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="fixed inset-0 bg-gray-500 bg-opacity-75"></div>
                                    
                                    <div @click.stop x-show="showRemoveModal" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" class="bg-white rounded-lg shadow-xl transform transition-all sm:max-w-lg sm:w-full mx-4 relative z-10">
                                        <div class="px-6 py-4">
                                            <div class="flex items-center">
                                                <div class="w-10 h-10 bg-red-100 rounded-full flex items-center justify-center mr-4">
                                                    <svg class="w-5 h-5 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                    </svg>
                                                </div>
                                                <div>
                                                    <h3 class="text-lg font-medium text-gray-900">Remove Profile Image</h3>
                                                    <p class="text-sm text-gray-500 mt-1">Are you sure you want to remove your profile image? This action cannot be undone.</p>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="px-6 py-4 bg-gray-50 flex justify-end space-x-3 rounded-b-lg">
                                            <button @click="showRemoveModal = false" class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md hover:bg-gray-50 focus:outline-none cursor-pointer transition-colors">
                                                Cancel
                                            </button>
                                            <button @click="showRemoveModal = false; $wire.removeProfileImage()" class="px-4 py-2 text-sm font-medium text-white bg-red-600 border border-transparent rounded-md hover:bg-red-700 focus:outline-none cursor-pointer transition-colors">
                                                Remove Image
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                    <div class="flex-1" x-data="{ 
                        validationError: '',
                        isValidating: false,
                        selectedFile: null,
                        previewUrl: '',
                        uploadCompleted: false,
                        init() {
                            // Watch for when Livewire upload completes
                            this.$watch('$wire.profile_image', (value) => {
                                if (value && this.selectedFile && !this.uploadCompleted) {
                                    this.uploadCompleted = true;
                                }
                            });
                        },
                        handleFileSelect(event) {
                            const file = event.target.files[0];
                            this.validationError = '';
                            this.isValidating = true;
                            this.selectedFile = null;
                            this.previewUrl = '';
                            this.uploadCompleted = false;
                        
                            if (!file) {
                                this.isValidating = false;
                                return;
                            }
                            
                            // Check file type
                            const allowedTypes = ['image/jpeg', 'image/jpg', 'image/png', 'image/gif'];
                            if (!allowedTypes.includes(file.type)) {
                                this.validationError = 'Please select a valid image file (JPG, PNG, or GIF).';
                                this.clearFileOnly(event.target);
                                return;
                            }
                            
                            // Check file size (2MB = 2 * 1024 * 1024 bytes)
                            const maxSize = 2 * 1024 * 1024;
                            if (file.size > maxSize) {
                                this.validationError = 'Image size must be less than 2MB.';
                                this.clearFileOnly(event.target);
                                return;
                            }
                            
                            // Check image dimensions
                            const img = new Image();
                            img.onload = () => {
                                if (img.width < 100 || img.height < 100) {
                                    this.validationError = 'Image must be at least 100x100 pixels.';
                                    this.clearFileOnly(event.target);
                                } else {
                                    // Validation passed - store file and trigger Livewire
                                    this.selectedFile = file;
                                    this.previewUrl = URL.createObjectURL(file);
                                    this.triggerLivewireUpload(file);
                                    this.isValidating = false;
                                }
                            };
                            
                            img.onerror = () => {
                                this.validationError = 'Invalid image file.';
                                this.clearFileOnly(event.target);
                            };
                            
                            img.src = URL.createObjectURL(file);
                        },
                        triggerLivewireUpload(file) {
                            // Create a new FileList with the validated file
                            const dt = new DataTransfer();
                            dt.items.add(file);
                            const hiddenInput = this.$refs.hiddenFileInput;
                            hiddenInput.files = dt.files;
                            
                            // Trigger Livewire model update
                            hiddenInput.dispatchEvent(new Event('change', { bubbles: true }));
                        },
                        clearFileOnly(input) {
                            input.value = '';
                            this.selectedFile = null;
                            this.previewUrl = '';
                            this.isValidating = false;
                            this.uploadCompleted = false;
                            
                            // Clear Livewire model
                            $wire.clearProfileImage();
                        },
                        clearFile(input) {
                            input.value = '';
                            this.selectedFile = null;
                            this.previewUrl = '';
                            this.validationError = '';
                            this.isValidating = false;
                            this.uploadCompleted = false;
                            
                            // Clear Livewire model
                            $wire.clearProfileImage();
                        },
                        clearSelectedFile() {
                            this.clearFile(this.$refs.fileInput);
                        }
                    }">
                        <div class="relative">
                            <input type="file" accept="image/jpeg,image/jpg,image/png,image/gif" id="profile_image" x-ref="fileInput" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer" @change="handleFileSelect($event)">
                            <input wire:model="profile_image" type="file" x-ref="hiddenFileInput" class="hidden">
                            <label for="profile_image" class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-lg shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus-within:ring-2 focus-within:ring-blue-500 focus-within:border-blue-500 cursor-pointer transition-colors">
                                <div wire:loading.remove wire:target="profile_image">
                                    <svg class="w-4 h-4 mr-2 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                                <div wire:loading wire:target="profile_image">
                                    <svg class="animate-spin w-4 h-4 mr-2 text-blue-500" fill="none" viewBox="0 0 24 24">
                                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                    </svg>
                                </div>
                                <span wire:loading.remove wire:target="profile_image">Choose Photo</span>
                                <span wire:loading wire:target="profile_image">Uploading...</span>
                            </label>
                        </div>
                        
                        <!-- Frontend Validation Error -->
                        <div x-show="validationError" x-cloak x-transition class="mt-2">
                            <div class="flex items-center justify-between bg-red-50 border border-red-200 rounded-lg p-3">
                                <p class="text-sm text-red-600 flex items-center">
                                    <svg class="w-4 h-4 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <span x-text="validationError"></span>
                                </p>
                                <button @click="validationError = ''" class="ml-2 p-1 rounded-full hover:bg-red-100 text-red-500 hover:text-red-600 focus:outline-none cursor-pointer transition-colors" title="Dismiss">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        
                        <p class="text-xs text-gray-500 mt-2">JPG, PNG or GIF. Max size 2MB. Min 100x100 pixels.</p>
                        
                        <div x-show="selectedFile" x-cloak class="mt-3 p-3 bg-green-50 border border-green-200 rounded-lg">
                            <div class="flex items-start justify-between">
                                <div class="flex items-start space-x-3">
                                    <div x-show="previewUrl" class="w-12 h-12 bg-gray-100 rounded-lg overflow-hidden flex-shrink-0">
                                        <img :src="previewUrl" :alt="selectedFile?.name || 'Preview'" class="w-full h-full object-cover">
                                    </div>
                                    <div>
                                        <svg class="w-4 h-4 text-green-600 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <p class="text-sm text-green-800 font-medium" x-text="'Selected: ' + (selectedFile?.name || '')"></p>
                                        <p class="text-xs text-green-600 mt-1" x-text="selectedFile ? 'Size: ' + (selectedFile.size / 1024).toFixed(1) + ' KB' : ''"></p>
                                    </div>
                                </div>
                                <button x-show="uploadCompleted" @click="clearSelectedFile()" class="ml-2 p-1 rounded-full hover:bg-green-100 text-green-600 hover:text-green-800 focus:outline-none cursor-pointer transition-colors" title="Remove uploaded file">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        
                        @error('profile_image')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>

            <!-- Name Fields -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                <div>
                    <label for="first_name" class="block text-sm font-semibold text-gray-700 mb-2">First Name</label>
                    <div class="relative">
                        <input wire:model.defer="first_name" type="text" id="first_name" class="block w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors bg-gray-50 focus:bg-white text-gray-900 placeholder-gray-500" placeholder="Enter your first name">
                        <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                        </div>
                    </div>
                    @error('first_name')
                        <p class="mt-2 text-sm text-red-600 flex items-center">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div>
                    <label for="last_name" class="block text-sm font-semibold text-gray-700 mb-2">Last Name</label>
                    <div class="relative">
                        <input wire:model.defer="last_name" type="text" id="last_name" class="block w-full px-4 py-3 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors bg-gray-50 focus:bg-white text-gray-900 placeholder-gray-500" placeholder="Enter your last name">
                        <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                        </div>
                    </div>
                    @error('last_name')
                        <p class="mt-2 text-sm text-red-600 flex items-center">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            {{ $message }}
                        </p>
                    @enderror
                </div>
            </div>

            <!-- Submit Button -->
            <div class="flex justify-end">
                <button wire:click="updateUserInfo" class="inline-flex items-center px-4 py-2 border border-transparent text-base font-medium rounded-lg shadow-sm text-white bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 focus:outline-none cursor-pointer transition-all duration-200 disabled:opacity-50 disabled:cursor-not-allowed" wire:loading.attr="disabled" wire:target="updateUserInfo">
                    <div wire:loading.remove wire:target="updateUserInfo">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                    </div>
                    <div wire:loading wire:target="updateUserInfo">
                        <svg class="animate-spin w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                        </svg>
                    </div>
                    <span wire:loading.remove wire:target="updateUserInfo">Update Information</span>
                    <span wire:loading wire:target="updateUserInfo">Updating...</span>
                </button>
            </div>
        </div>
    </div>

    <!-- Email Update Section -->
    <div class="bg-white rounded-xl shadow-sm border border-gray-100">
        <div class="px-8 py-6 border-b border-gray-100">
            <div class="flex items-center space-x-3">
                <div class="w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center">
                    <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <div>
                    <h2 class="text-xl font-semibold text-gray-900">Email Address</h2>
                    <p class="text-sm text-gray-600">Update your email address for account notifications</p>
                </div>
            </div>
        </div>
        
        <div class="p-8">
            <div class="mb-8">
                <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">Email Address</label>
                <div class="relative">
                    <input wire:model.defer="email" type="email" id="email" class="block w-full px-4 py-3 pl-12 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-colors bg-gray-50 focus:bg-white text-gray-900 placeholder-gray-500" placeholder="Enter your email address">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                </div>
                @error('email')
                    <p class="mt-2 text-sm text-red-600 flex items-center">
                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <!-- Current Email Display -->
            <div class="mb-8">
                <div class="bg-gray-50 border border-gray-200 rounded-lg p-4">
                    <div class="flex items-center space-x-3">
                        <div class="w-8 h-8 bg-gray-200 rounded-full flex items-center justify-center">
                            <svg class="w-4 h-4 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-700">Current Email</p>
                            <p class="text-sm text-gray-600">{{ auth()->user()->email }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Submit Button -->
            <div class="flex justify-end">
                <button wire:click="updateEmail" class="inline-flex items-center px-4 py-2 border border-transparent text-base font-medium rounded-lg shadow-sm text-white bg-gradient-to-r from-green-600 to-green-700 hover:from-green-700 hover:to-green-800 focus:outline-none cursor-pointer transition-all duration-200 disabled:opacity-50 disabled:cursor-not-allowed" wire:loading.attr="disabled" wire:target="updateEmail">
                    <div wire:loading.remove wire:target="updateEmail">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <div wire:loading wire:target="updateEmail">
                        <svg class="animate-spin w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                        </svg>
                    </div>
                    <span wire:loading.remove wire:target="updateEmail">Update Email</span>
                    <span wire:loading wire:target="updateEmail">Updating...</span>
                </button>
            </div>
        </div>
    </div>

    <!-- Password Update Section -->
    <div class="bg-white rounded-xl shadow-sm border border-gray-100">
        <div class="px-8 py-6 border-b border-gray-100">
            <div class="flex items-center space-x-3">
                <div class="w-10 h-10 bg-red-100 rounded-lg flex items-center justify-center">
                    <svg class="w-5 h-5 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                    </svg>
                </div>
                <div>
                    <h2 class="text-xl font-semibold text-gray-900">Password & Security</h2>
                    <p class="text-sm text-gray-600">Update your password to keep your account secure</p>
                </div>
            </div>
        </div>
        
        <form wire:submit.prevent="updatePassword" class="p-8">
            <!-- Current Password -->
            <div class="mb-6">
                <label for="current_password" class="block text-sm font-semibold text-gray-700 mb-2">Current Password</label>
                <div class="relative">
                    <input wire:model.defer="current_password" type="password" id="current_password" class="block w-full px-4 py-3 pl-12 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-red-500 transition-colors bg-gray-50 focus:bg-white text-gray-900 placeholder-gray-500" placeholder="Enter your current password">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                        </svg>
                    </div>
                </div>
                @error('current_password')
                    <p class="mt-2 text-sm text-red-600 flex items-center">
                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <!-- New Password Fields -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                <div>
                    <label for="password" class="block text-sm font-semibold text-gray-700 mb-2">New Password</label>
                    <div class="relative">
                        <input wire:model.defer="password" type="password" id="password" class="block w-full px-4 py-3 pl-12 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-red-500 transition-colors bg-gray-50 focus:bg-white text-gray-900 placeholder-gray-500" placeholder="Enter new password">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                            </svg>
                        </div>
                    </div>
                    @error('password')
                        <p class="mt-2 text-sm text-red-600 flex items-center">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div>
                    <label for="password_confirmation" class="block text-sm font-semibold text-gray-700 mb-2">Confirm New Password</label>
                    <div class="relative">
                        <input wire:model.defer="password_confirmation" type="password" id="password_confirmation" class="block w-full px-4 py-3 pl-12 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-red-500 transition-colors bg-gray-50 focus:bg-white text-gray-900 placeholder-gray-500" placeholder="Confirm new password">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Password Requirements -->
            <div class="mb-8">
                <div class="bg-blue-50 border border-blue-200 rounded-lg p-4">
                    <div class="flex items-start space-x-3">
                        <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                            <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-sm font-semibold text-blue-900 mb-2">Password Requirements:</h4>
                            <ul class="text-sm text-blue-800 space-y-1">
                                <li class="flex items-center">
                                    <svg class="w-3 h-3 mr-2 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    At least 8 characters long
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-3 h-3 mr-2 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    Contains uppercase and lowercase letters
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-3 h-3 mr-2 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    Contains at least one number
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Submit Button -->
            <div class="flex justify-end">
                <button wire:click="updatePassword" class="inline-flex items-center px-4 py-2 border border-transparent text-base font-medium rounded-lg shadow-sm text-white bg-gradient-to-r from-red-600 to-red-700 hover:from-red-700 hover:to-red-800 focus:outline-none cursor-pointer transition-all duration-200 disabled:opacity-50 disabled:cursor-not-allowed" wire:loading.attr="disabled" wire:target="updatePassword">
                    <div wire:loading.remove wire:target="updatePassword">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                        </svg>
                    </div>
                    <div wire:loading wire:target="updatePassword">
                        <svg class="animate-spin w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                        </svg>
                    </div>
                    <span wire:loading.remove wire:target="updatePassword">Update Password</span>
                    <span wire:loading wire:target="updatePassword">Updating...</span>
                </button>
            </div>
        </form>
    </div>
</div>
