<footer class="py-2 mt-4 bg-white border-t text-xs">
    <div class="flex justify-around text-center max-w-md mx-auto">
        <a class="text-black hover:underline" href="{{ route('about') }}">About</a>

        <a class="text-black hover:underline" href="{{ route('stats') }}">Statistics</a>

        <a class="text-black hover:underline" href="{{ route('donate') }}">
            Donate
            <svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 fill-current text-red">
                <path d="M896 1664q-26 0-44-18l-624-602q-10-8-27.5-26t-55.5-65.5-68-97.5-53.5-121-23.5-138q0-220 127-344t351-124q62 0 126.5 21.5t120 58 95.5 68.5 76 68q36-36 76-68t95.5-68.5 120-58 126.5-21.5q224 0 351 124t127 344q0 221-229 450l-623 600q-18 18-44 18z"></path>
            </svg>
        </a>

        <a class="flex text-black hover:underline" href="https://github.com/SjorsO/keys">
            <span class="h-4 w-4 mr-1">@include('components.svg.github')</span>
            Github
        </a>
    </div>
</footer>
