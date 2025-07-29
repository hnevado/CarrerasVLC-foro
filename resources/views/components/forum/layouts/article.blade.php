@props(['question',
        'home' => true])

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
                                    <a href="{{ route('questions.show', $question) }}">{{ $question->title }}</a>
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
                                <x-avatar>
                                    {{ strtoupper(substr($question->user->name, 0, 2)) }}
                                </x-avatar>
                                
                                <div>
                                    <x-detail :item="$question" />
                                </div>

                            </div>

                            
                            {{-- Action buttons --}}
                                <div class="flex items-center space-x-2">
                                  @if ($home) 
                                    <a href="{{ route('questions.show', $question) }}" class="inline-flex items-center px-3 py-1.5 text-xs font-medium text-slate-600 bg-slate-100 rounded-lg hover:bg-slate-200 transition-colors duration-200">
                                            💬 {{ count($question->answers) }} respuestas
                                    </a>
                                   @endif
                                    <a href="#" class="inline-flex items-center px-3 py-1.5 text-xs font-medium text-slate-600 bg-slate-100 rounded-lg hover:bg-slate-200 transition-colors duration-200">
                                        <span class="text-3xl">&hearts;</span>
                                    </a>
                                </div>
                           

                        </div>

                        {{-- Hover accent border --}}
                        <div class="absolute bottom-0 left-0 right-0 h-1 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left"
                             style="background-color: {{ $question->category->color }}"></div>
                    </div>
    </article>

    @if (!$home)
    <div class="m-4 mt-0 mb-0">
    {{-- Comentarios--}}
        @foreach ($question->comments as $comment)
            <div class="mb-8 pl-4 border-l-2 border-slate-200">
                    <div class="flex items-start gap-3">
                        <div class="flex-shrink-0">
                            <x-avatar>
                                {{ strtoupper(substr($comment->user->name, 0, 2)) }}
                            </x-avatar>
                        </div>
                    <div class="flex-1">
                            <p class="text-slate-700 leading-relaxed mb-1">{{ $comment->content }}</p>
                            <div class="flex items-center gap-2">
                             <x-detail :item="$comment" />     
                            </div>
                        </div>
                    </div>
            </div>
        @endforeach
    </div>
    @endif

 @if (!$home)   
  <section>
    <div class="space-y-6">
      @foreach ($question->answers as $answer)
        <article class="group relative rounded-xl bg-white border border-blue-100 shadow hover:shadow-lg transition-all duration-300 p-6">
          <div class="flex items-start gap-4">
            <div class="flex-shrink-0">
                 <x-avatar>
                     {{ strtoupper(substr($answer->user->name, 0, 2)) }}
                 </x-avatar>
            </div>
            <div class="flex-1">
              <div class="flex items-center justify-between mb-2">
                <x-detail :item="$answer" />
              </div>
              <p class="text-slate-700 leading-relaxed mb-3">{{ $answer->content }}</p>
            </div>
          </div>
        </article>
        
         @if ($answer->comments->count())
             <div class="m-4 mt-0">
                  @foreach ($answer->comments as $comment)
                        <div class="mb-8 pl-4 border-l-2 border-slate-200">
                                <div class="flex items-start gap-3">
                                <div class="flex-shrink-0">
                                    <x-avatar>
                                        {{ strtoupper(substr($comment->user->name, 0, 2)) }}
                                    </x-avatar>
                                </div>
                         <div class="flex-1">
                                    <p class="text-slate-700 leading-relaxed mb-1">{{ $comment->content }}</p>
                                    <div class="flex items-center gap-2">
                                    <p class="font-medium text-slate-800 text-sm">por {{ $comment->user->name }}</p>
                                    <span class="text-xs text-slate-500">· {{ $comment->created_at ? $comment->created_at->diffForHumans() : 'Hace un momento' }}</span>      
                                    </div>
                                </div>
                         </div>
                        </div>
                    @endforeach
                </div>
          @endif
      @endforeach
    </div>
  </section>

  <div class="mt-4">
    <a href="{{ route('home') }}" class="inline-flex items-center px-3 py-1.5 text-sm font-medium text-slate-600 bg-slate-100 rounded-lg hover:bg-slate-200 transition-colors duration-200">
        &lt; Volver
    </a>
  </div>
@endif
