<x-layout>
    <section class="flex h-screen flex-col items-center justify-center text-center">
        <h1>JOSÉ CARLOS ROMÁN RUBIO</h1>
        <h2 class="text-gray-400">Computer Scientist & Software Engineer</h2>
        <div id="typewriter" class="hidden">
            @foreach ($skills as $skill)
                <p>{{ strtoupper($skill['name']) }}</p> 
            @endforeach
        </div>
        <div class="text-2xl md:text-4xl text-(--color-accent) my-5 font-bold">_</div>    
        <div class="social-media-follow">
            <ul>
                <li class="inline-block pr-1">
                    <a href="https://www.facebook.com/jc11235" title="Follow on Facebook" target="_blank">
                        <i class="fa-brands fa-square-facebook text-3xl text-(--color-facebook)"></i>
                    </a>
                </li>
                <li class="inline-block pr-1">
                    <a href="https://github.com/jcdotnet" title="GitHub" target="_blank">
                        <i class="fa-brands fa-square-github text-3xl text-(--color-github)"></i>
                    </a>
                </li>
                <li class="inline-block pr-1">
                    <a href="https://www.linkedin.com/in/romanrubio/" title="Follow on LinkedIn" target="_blank">
                        <i class="fa-brands fa-linkedin text-3xl text-(--color-linkedin)"></i>
                    </a>
                </li>
                <li class="inline-block">
                    <a href="https://x.com/jcdev_" title="Follow on X" target="_blank">
                        <i class="fa-brands fa-square-x-twitter text-3xl text-black"></i>
                    </a>
                </li>
            </ul>
        </div>
        <div class="progress flex flex-col items-center mt-10">
            <x-clock/>
            <h2>Website In Progress</h2>
        </div>
    </section>
</x-layout>