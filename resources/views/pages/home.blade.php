<x-forum.layouts.app>



    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        
        <div class="grid gap-6 md:gap-8">
            @foreach ($questions as $question)
                <x-forum.layouts.article :question="$question" />
            @endforeach
        </div>
        
    </div>
    </x-forum.layouts.app>