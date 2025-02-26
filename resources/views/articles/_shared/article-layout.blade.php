@extends('layouts.app')

@section('content')
    <div class="min-h-screen bg-gradient-to-br from-blue-50 to-white relative">
        <!-- Decorative Elements -->
        <div
            class="absolute top-0 right-0 w-64 h-64 bg-blue-100 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob">
        </div>
        <div
            class="absolute top-0 left-0 w-72 h-72 bg-cyan-100 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob animation-delay-2000">
        </div>

        <div class="container mx-auto px-4 py-12 relative">
            <div class="max-w-4xl mx-auto bg-white/80 backdrop-blur-sm rounded-2xl shadow-xl p-8 border border-gray-100">
                <!-- Header Decoration -->
                <div class="absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                    <div class="w-24 h-1 bg-gradient-to-r from-blue-500 to-cyan-500 rounded-full"></div>
                </div>

                {{ $slot ?? '' }}
            </div>
        </div>
    </div>

    <style>
        @keyframes blob {
            0% {
                transform: translate(0px, 0px) scale(1);
            }

            33% {
                transform: translate(30px, -50px) scale(1.1);
            }

            66% {
                transform: translate(-20px, 20px) scale(0.9);
            }

            100% {
                transform: translate(0px, 0px) scale(1);
            }
        }

        .animate-blob {
            animation: blob 7s infinite;
        }

        .animation-delay-2000 {
            animation-delay: 2s;
        }

        .prose h2 {
            @apply relative inline-block;
        }

        .prose h2::after {
            content: '';
            @apply absolute bottom-0 left-0 w-full h-1 bg-gradient-to-r from-blue-200 to-transparent rounded-full;
        }
    </style>
@endsection
