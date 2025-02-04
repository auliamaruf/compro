@php
$general = \App\Models\General::first();
@endphp

<div class="fixed bottom-8 right-8 z-50">
    <div class="relative group">
        <!-- Main Toggle Button -->
        <button class="bg-blue-600 hover:bg-blue-700 w-12 h-12 rounded-full flex items-center justify-center text-white shadow-lg transform transition-all duration-300 hover:scale-110 focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
            </svg>
        </button>

        <!-- Contact Options -->
        <div class="absolute bottom-full right-0 mb-4 transform scale-0 opacity-0 group-hover:scale-100 group-hover:opacity-100 transition-all duration-300 origin-bottom-right">
            <div class="bg-white rounded-xl shadow-xl p-2 space-y-2 w-52">
                @if($general->whatsapp)
                <div class="relative group/tooltip">
                    <a href="https://wa.me/{{ $general->whatsapp }}" target="_blank" 
                       class="flex items-center p-2 rounded-lg hover:bg-gradient-to-r from-green-50 to-transparent transition-all duration-200">
                        <div class="bg-green-500 rounded-lg p-1.5 shadow-sm">
                            <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/>
                            </svg>
                        </div>
                        <span class="ml-3 text-sm font-medium text-gray-700">WhatsApp</span>
                    </a>
                    <!-- Improved WhatsApp Tooltip -->
                    <div class="absolute right-full mr-3 top-1/2 -translate-y-1/2 opacity-0 group-hover/tooltip:opacity-100 transition-all duration-300 pointer-events-none">
                        <div class="bg-gradient-to-r from-gray-900 via-gray-800 to-gray-900 text-white text-sm rounded-xl py-2.5 px-4 shadow-[0_0_15px_rgba(0,0,0,0.1)] border border-white/10 backdrop-blur-sm transform -translate-x-2 group-hover/tooltip:translate-x-0 transition-all duration-300">
                            <div class="flex items-center space-x-2">
                                <span class="flex items-center space-x-2">
                                    <svg class="w-4 h-4 text-green-400" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12 2C6.486 2 2 6.486 2 12c0 1.728.45 3.42 1.304 4.924L2 22l5.076-1.304A9.959 9.959 0 0012 22c5.514 0 10-4.486 10-10S17.514 2 12 2z"/>
                                    </svg>
                                    <span class="font-medium tracking-wide">{{ $general->whatsapp }}</span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                @endif

                @if($general->telepon)
                <div class="relative group/tooltip">
                    <a href="tel:{{ $general->telepon }}" 
                       class="flex items-center p-2 rounded-lg hover:bg-gradient-to-r from-blue-50 to-transparent transition-all duration-200">
                        <div class="bg-blue-500 rounded-lg p-1.5 shadow-sm">
                            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                        </div>
                        <span class="ml-3 text-sm font-medium text-gray-700">Telepon</span>
                    </a>
                    <!-- Improved Phone Tooltip -->
                    <div class="absolute right-full mr-3 top-1/2 -translate-y-1/2 opacity-0 group-hover/tooltip:opacity-100 transition-all duration-300 pointer-events-none">
                        <div class="bg-gradient-to-r from-gray-900 via-gray-800 to-gray-900 text-white text-sm rounded-xl py-2.5 px-4 shadow-[0_0_15px_rgba(0,0,0,0.1)] border border-white/10 backdrop-blur-sm transform -translate-x-2 group-hover/tooltip:translate-x-0 transition-all duration-300">
                            <div class="flex items-center space-x-2">
                                <span class="flex items-center space-x-2">
                                    <svg class="w-4 h-4 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                    </svg>
                                    <span class="font-medium tracking-wide">{{ $general->telepon }}</span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                @endif

                @if($general->email)
                <div class="relative group/tooltip">
                    <a href="mailto:{{ $general->email }}" 
                       class="flex items-center p-2 rounded-lg hover:bg-gradient-to-r from-red-50 to-transparent transition-all duration-200">
                        <div class="bg-red-500 rounded-lg p-1.5 shadow-sm">
                            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <span class="ml-3 text-sm font-medium text-gray-700">Email</span>
                    </a>
                    <!-- Improved Email Tooltip -->
                    <div class="absolute right-full mr-3 top-1/2 -translate-y-1/2 opacity-0 group-hover/tooltip:opacity-100 transition-all duration-300 pointer-events-none">
                        <div class="bg-gradient-to-r from-gray-900 via-gray-800 to-gray-900 text-white text-sm rounded-xl py-2.5 px-4 shadow-[0_0_15px_rgba(0,0,0,0.1)] border border-white/10 backdrop-blur-sm transform -translate-x-2 group-hover/tooltip:translate-x-0 transition-all duration-300">
                            <div class="flex items-center space-x-2">
                                <span class="flex items-center space-x-2">
                                    <svg class="w-4 h-4 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                    </svg>
                                    <span class="font-medium tracking-wide">{{ $general->email }}</span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
