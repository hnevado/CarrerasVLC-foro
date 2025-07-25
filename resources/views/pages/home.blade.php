<x-forum.layouts.home>



    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        
        <div class="grid gap-6 md:gap-8">
            @foreach ($questions as $question)
                <article class="group relative overflow-hidden rounded-2xl shadow-md hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">

                    <div class="absolute inset-0 opacity-10 group-hover:opacity-20 transition-opacity duration-300" 
                         style="background-color: {{ $question->category->color }}"></div>
                    
                    <div class="relative bg-white/95 backdrop-blur-sm p-6 md:p-8">
                        
                        <div class="flex items-start justify-between mb-4">
                            <div class="flex-1">
                                <div class="flex items-center gap-3 mb-3">
                                    <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium text-white shadow-sm transition-all duration-200 hover:scale-105"
                                          style="background-color: {{ $question->category->color }}">
                                        🏷️ {{ $question->category->name }}
                                    </span>
                                </div>
                                
                                <h2 class="text-xl md:text-2xl font-bold text-slate-800 mb-3 line-clamp-2 group-hover:text-slate-900 transition-colors duration-200">
                                    {{ $question->title }}
                                </h2>
                            </div>
                        </div>

                        <div class="mb-6">
                            <p class="text-slate-600 leading-relaxed line-clamp-3 md:line-clamp-2">
                                {{ $question->description }}
                            </p>
                        </div>

                        <div class="flex items-center justify-between pt-4 border-t border-slate-100">
                            <div class="flex items-center space-x-3">
                                {{-- User Avatar Placeholder --}}
                                <div class="w-10 h-10 rounded-full bg-gradient-to-br from-blue-400 to-blue-600 flex items-center justify-center text-white font-semibold text-sm shadow-sm">
                                    {{ strtoupper(substr($question->user->name, 0, 2)) }}
                                </div>
                                
                                <div>
                                    <p class="font-medium text-slate-800 text-sm">
                                        {{ $question->user->name }}
                                    </p>
                                    <p class="text-xs text-slate-500">
                                        {{ $question->created_at ? $question->created_at->diffForHumans() : 'Hace un momento' }}
                                    </p>
                                </div>
                            </div>

                            {{-- Action buttons --}}
                            <div class="flex items-center space-x-2">
                                <button class="inline-flex items-center px-3 py-1.5 text-xs font-medium text-slate-600 bg-slate-100 rounded-lg hover:bg-slate-200 transition-colors duration-200">
                                    💬 Responder
                                </button>
                                <button class="inline-flex items-center px-3 py-1.5 text-xs font-medium text-slate-600 bg-slate-100 rounded-lg hover:bg-slate-200 transition-colors duration-200">
                                    👍 Like
                                </button>
                            </div>
                        </div>

                        {{-- Hover accent border --}}
                        <div class="absolute bottom-0 left-0 right-0 h-1 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left"
                             style="background-color: {{ $question->category->color }}"></div>
                    </div>
                </article>
            @endforeach
        </div>
        
    </div>
    </x-forum.layouts.home>