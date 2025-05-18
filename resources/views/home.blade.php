<x-layout>
    <div class="flex flex-1 flex-col items-center justify-center text-center">
        <h1>JOSÉ CARLOS ROMÁN RUBIO</h1>
        <h2 class="text-gray-400">Computer Engineer & Software Developer</h2>
        <div id="typewriter" class="hidden">
            @foreach ($skills as $skill)
                <p>{{ strtoupper($skill['name']) }}</p> 
            @endforeach
        </div>
        <div class="text-xl sm:text-2xl md:text-4xl text-(--color-accent) my-3 font-bold">_</div>    
        <div class="social-media-follow">
            <ul>
                <li class="inline-block pr-1">
                    <a href="https://www.facebook.com/jc11235" title="Follow on Facebook" target="_blank">
                        <i class="fa-brands fa-square-facebook text-2xl sm:text-3xl text-(--color-facebook)"></i>
                    </a>
                </li>
                <li class="inline-block">
                    <a href="https://github.com/jcdotnet" title="GitHub" target="_blank">
                        <i class="fa-brands fa-square-github text-2xl sm:text-3xl text-(--color-github)"></i>
                    </a>
                </li>
                <li class="inline-block">
                    <a href="https://www.linkedin.com/in/romanrubio/" title="Follow on LinkedIn" target="_blank">
                        <i class="fa-brands fa-linkedin text-2xl sm:text-3xl text-(--color-linkedin)"></i>
                    </a>
                </li>
                <li class="inline-block pr-1">
                    <a href="https://x.com/jcdev_" title="Follow on X" target="_blank">
                        <i class="fa-brands fa-square-x-twitter text-2xl sm:text-3xl text-black"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</x-layout>