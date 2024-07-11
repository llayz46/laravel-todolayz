<x-layout>
    <x-navigation-header></x-navigation-header>

    <main class="isolate">
{{--        Hero --}}
        <div class="relative pt-14">
            <div class="absolute inset-x-0 -top-48 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-96" aria-hidden="true">
                <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-primary-500 to-primary-50 opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(83% 45.6%, 82.4% 30.2%, 80.4% 15.6%, 63.4% 5%, 61.2% 16.2%, 49% 20%, 64% 34.6%, 62.6% 53%, 60.8% 72%, 50.8% 81%, 32.2% 69.4%, 47.4% 58.2%, 62.8% 53%, 45.2% 34.4%, 27.4% 43.6%, 26.8% 66%, 3.4% 63.8%, 11.6% 78.4%, 32.2% 86.8%, 9.8% 87.2%, 17.8% 100%, 27.6% 94.8%, 31.6% 86.4%, 51.6% 94%, 81.4% 90.8%, 68% 73.2%, 77.4% 53.8%)"></div>
            </div>
            <div class="py-24 sm:py-32">
                <div class="mx-auto max-w-7xl px-6 lg:px-8">
                    <div class="mx-auto max-w-2xl text-center">
                        <h1 class="text-4xl font-bold tracking-tight text-title sm:text-6xl">Manage your tasks with TodoLayz</h1>
                        <p class="mt-6 text-lg leading-8 text-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus animi delectus dolores doloribus est facilis magni molestias suscipit velit? Aspernatur quae!</p>
                        <div class="mt-10 flex items-center justify-center gap-x-6">
                            <x-nav-link href="#" type="button-link">Get started</x-nav-link>
                            <x-nav-link href="#" type="arrow-link">Learn more</x-nav-link>
                        </div>
                    </div>
                </div>
            </div>
            <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]" aria-hidden="true">
                <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-primary-500 to-primary-50 opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
            </div>
        </div>
{{--        Hero --}}

{{--        Features --}}
        <div class="py-24 sm:py-32">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="mx-auto max-w-2xl lg:text-center">
                    <x-section-title>Deploy faster</x-section-title>
                    <p class="mt-2 text-3xl font-bold tracking-tight text-title sm:text-4xl">All your lists in the same place</p>
                    <p class="mt-6 text-lg leading-8 text-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam fugiat iste maiores officiis perferendis porro suscipit tempora, velit, voluptatibus?</p>
                </div>
                <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-none">
                    <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-16 lg:max-w-none lg:grid-cols-3">
                        <x-feature>
                            <x-slot:svgPath>
                                <path fill-rule="evenodd" d="M10 1a4.5 4.5 0 00-4.5 4.5V9H5a2 2 0 00-2 2v6a2 2 0 002 2h10a2 2 0 002-2v-6a2 2 0 00-2-2h-.5V5.5A4.5 4.5 0 0010 1zm3 8V5.5a3 3 0 10-6 0V9h6z" clip-rule="evenodd" />
                            </x-slot:svgPath>
                            <x-slot:title>
                                End-to-End Encryption
                            </x-slot:title>
                            <x-slot:content>
                                Commodo nec sagittis tortor mauris sed. Turpis tortor quis scelerisque diam id accumsan nullam tempus. Pulvinar etiam lacus volutpat eu. Phasellus praesent ligula sit faucibus.
                            </x-slot:content>
                        </x-feature>
                        <x-feature>
                            <x-slot:svgPath>
                                <path d="M4.0296 0.09375H1.95039C1.19132 0.09375 0.53125 0.720813 0.53125 1.51289V3.5921C0.53125 4.35117 1.15831 5.01124 1.95039 5.01124H4.0296C4.78868 5.01124 5.44874 4.38418 5.44874 3.5921V1.47989C5.41574 0.720812 4.78868 0.09375 4.0296 0.09375ZM3.93059 3.49309H2.0494V1.5789H3.93059V3.49309Z" />
                                <path d="M8.45207 3.29507H19.7722C20.1682 3.29507 20.5313 2.96504 20.5313 2.53599C20.5313 2.10695 20.2012 1.77692 19.7722 1.77692H8.45207C8.05603 1.77692 7.69299 2.10695 7.69299 2.53599C7.69299 2.96504 8.05603 3.29507 8.45207 3.29507Z" />
                                <path d="M4.0296 6.85944H1.95039C1.19132 6.85944 0.53125 7.4865 0.53125 8.27858V10.3578C0.53125 11.1169 1.15831 11.7769 1.95039 11.7769H4.0296C4.78868 11.7769 5.44874 11.1499 5.44874 10.3578V8.27858C5.41574 7.4865 4.78868 6.85944 4.0296 6.85944ZM3.93059 10.2588H2.0494V8.34458H3.93059V10.2588Z" />
                                <path d="M19.7722 8.57562H8.45207C8.05603 8.57562 7.69299 8.90566 7.69299 9.3347C7.69299 9.76374 8.02303 10.0608 8.45207 10.0608H19.7722C20.1682 10.0608 20.5313 9.73074 20.5313 9.3347C20.5313 8.93866 20.1682 8.57562 19.7722 8.57562Z" />
                                <path d="M4.0296 14.0212H1.95039C1.19132 14.0212 0.53125 14.6482 0.53125 15.4403V17.5195C0.53125 18.2786 1.15831 18.9387 1.95039 18.9387H4.0296C4.78868 18.9387 5.44874 18.3116 5.44874 17.5195V15.4403C5.41574 14.6482 4.78868 14.0212 4.0296 14.0212ZM3.93059 17.4205H2.0494V15.5063H3.93059V17.4205Z" />
                                <path d="M19.7722 15.7043H8.45207C8.05603 15.7043 7.69299 16.0343 7.69299 16.4634C7.69299 16.8924 8.02303 17.2224 8.45207 17.2224H19.7722C20.1682 17.2224 20.5313 16.8924 20.5313 16.4634C20.5313 16.0343 20.1682 15.7043 19.7722 15.7043Z" />                            </x-slot:svgPath>
                            <x-slot:title>
                                Lists Organization
                            </x-slot:title>
                            <x-slot:content>
                                Pellentesque enim a commodo malesuada turpis eleifend risus. Facilisis donec placerat sapien consequat tempor fermentum nibh.
                            </x-slot:content>
                        </x-feature>
                        <x-feature>
                            <x-slot:svgPath>
                                <path fill-rule="evenodd" d="M15.312 11.424a5.5 5.5 0 01-9.201 2.466l-.312-.311h2.433a.75.75 0 000-1.5H3.989a.75.75 0 00-.75.75v4.242a.75.75 0 001.5 0v-2.43l.31.31a7 7 0 0011.712-3.138.75.75 0 00-1.449-.39zm1.23-3.723a.75.75 0 00.219-.53V2.929a.75.75 0 00-1.5 0V5.36l-.31-.31A7 7 0 003.239 8.188a.75.75 0 101.448.389A5.5 5.5 0 0113.89 6.11l.311.31h-2.432a.75.75 0 000 1.5h4.243a.75.75 0 00.53-.219z" clip-rule="evenodd" />
                            </x-slot:svgPath>
                            <x-slot:title>
                                Real-Time Sync
                            </x-slot:title>
                            <x-slot:content>
                                Pellentesque sit elit congue ante nec amet. Dolor aenean curabitur viverra suspendisse iaculis eget. Nec mollis placerat ultricies euismod ut condimentum.
                            </x-slot:content>
                        </x-feature>
                    </dl>
                </div>
            </div>
        </div>
{{--        Features --}}

{{--        Pricing --}}
        <div class="py-24 relative">
            <div class="absolute inset-x-0 -top-20 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-40" aria-hidden="true">
                <div class="relative left-36 aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-primary-500 to-primary-50 opacity-30 sm:w-[72.1875rem]" style="clip-path: polygon(18.6% 7.4%, 37.8% 1.6%, 50.4% 7.6%, 58.4% 15.4%, 68.8% 19.8%, 78% 31.4%, 74.4% 40.4%, 62.4% 39.4%, 51% 30.8%, 58.4% 15.4%, 36.6% 19.8%, 24% 23.8%, 30.2% 34.4%, 37.4% 45.2%, 49% 46%, 56.2% 58%, 58% 70.6%, 47.8% 81.8%, 36.8% 92.6%, 18.4% 92.4%, 18.2% 78.4%, 23% 68%, 7.2% 57.6%, 6.4% 44.6%, 13% 33.2%, 18.2% 23.8%, 8.4% 14.4%, 1.4% 0.8%, 12.8% 2.8%)"></div>
            </div>
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="mx-auto max-w-4xl text-center">
                    <x-section-title>Pricing</x-section-title>
                    <p class="mt-2 text-4xl font-bold tracking-tight text-title sm:text-5xl">Budget-friendly pricing plans</p>
                </div>
                <p class="mx-auto mt-6 max-w-2xl text-center text-lg leading-8 text-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur deserunt eaque eos incidunt libero perferendis?</p>
                <div class="isolate mx-auto mt-16 grid max-w-md grid-cols-1 gap-y-8 sm:mt-20 lg:mx-0 lg:max-w-none lg:grid-cols-3">
                    @php
                        $free = [
                            'Up to 10 Tasks list',
                            'Basic Task Organization',
                            'Due Date Reminders',
                            '48-hour support response time',
                        ];
                        $plus = [
                            'Unlimited Tasks list',
                            'Advanced Task Organization',
                            'Subtasks and Dependencies',
                            'Access to LAYZ Sync',
                            '24-hour support response time',
                        ];
                        $pro = [
                            'Advanced Task Analytics',
                            'Up to 20 Collaborators',
                            'Calendar Integration',
                            'Customizable Workflows',
                            'Priority Support',
                        ];
                    @endphp
                    <x-pricing-plan :features="$free" side="left">
                        <x-slot:planName>
                            Free
                        </x-slot:planName>
                        <x-slot:planDescription>
                            Perfect for individuals starting out.
                        </x-slot:planDescription>
                        <x-slot:planPrice>
                            0
                        </x-slot:planPrice>
                    </x-pricing-plan>
                    <x-pricing-plan :features="$plus" side="middle">
                        <x-slot:planName>
                            Plus
                        </x-slot:planName>
                        <x-slot:planDescription>
                            Ideal for those needing more advanced features.
                        </x-slot:planDescription>
                        <x-slot:planPrice>
                            4
                        </x-slot:planPrice>
                    </x-pricing-plan>
                    <x-pricing-plan :features="$pro" side="right">
                        <x-slot:planName>
                            Pro
                        </x-slot:planName>
                        <x-slot:planDescription>
                            Best for power users and professionals.
                        </x-slot:planDescription>
                        <x-slot:planPrice>
                            7
                        </x-slot:planPrice>
                    </x-pricing-plan>
                </div>
            </div>
        </div>
{{--        Pricing --}}

{{--        Stats --}}
        <div class="py-24">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="mx-auto max-w-4xl text-center">
                    <x-section-title>Statistics</x-section-title>
                    <p class="mt-2 text-4xl font-bold tracking-tight text-title sm:text-5xl">Our statistics</p>
                </div>
                <p class="mx-auto mt-6 max-w-2xl text-center text-lg leading-8 text-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur deserunt eaque eos incidunt libero perferendis?</p>
                <dl class="isolate mx-auto mt-16 grid grid-cols-1 gap-x-8 gap-y-16 text-center lg:grid-cols-3">
                    <div class="mx-auto flex max-w-xs flex-col gap-y-4">
                        <dt class="text-base leading-7 text-body">Tasks created every 24 hours</dt>
                        <dd class="order-first text-3xl font-semibold tracking-tight text-title sm:text-5xl">5.6 million</dd>
                    </div>
                    <div class="mx-auto flex max-w-xs flex-col gap-y-4">
                        <dt class="text-base leading-7 text-gray-600">Overall Tasks Completed</dt>
                        <dd class="order-first text-3xl font-semibold tracking-tight text-gray-900 sm:text-5xl">241 million</dd>
                    </div>
                    <div class="mx-auto flex max-w-xs flex-col gap-y-4">
                        <dt class="text-base leading-7 text-body">New users annually</dt>
                        <dd class="order-first text-3xl font-semibold tracking-tight text-title sm:text-5xl">38,000</dd>
                    </div>
                </dl>
            </div>
        </div>
{{--        Stats --}}

{{--        CTA --}}
        <div class="relative -z-10 my-32 px-6 lg:px-8">
            <div class="absolute inset-x-0 top-1/2 -z-10 flex -translate-y-1/2 transform-gpu justify-center overflow-hidden blur-3xl sm:bottom-0 sm:right-[calc(50%-6rem)] sm:top-auto sm:translate-y-0 sm:transform-gpu sm:justify-end" aria-hidden="true">
                <div class="aspect-[1108/632] w-[69.25rem] flex-none bg-gradient-to-r from-primary-500 to-primary-50 opacity-25" style="clip-path: polygon(44.6% 60.9%, 51.5% 76.9%, 56.9% 66.9%, 62.4% 52.4%, 72.9% 52.4%, 79% 45.9%, 93.2% 52.4%, 91.3% 36.3%, 77.5% 31.1%, 67.4% 20.1%, 54.9% 24.6%, 48.8% 42.6%, 44.6% 60.9%, 42.6% 42.4%, 43% 25.6%, 30.7% 36.1%, 22.1% 33.3%, 20.1% 23.1%, 22.3% 8%, 10.2% 6.3%, 0% 0%, 16.9% 45.4%, 9.4% 58.6%, 6.2% 76.9%, 24.8% 73.4%, 31.9% 90%, 36.2% 74.9%, 44.6% 60.9%)"></div>
            </div>
            <div class="mx-auto max-w-2xl text-center">
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Enhance your productivity.<br>Start using our app today.</h2>
                <p class="mx-auto mt-6 max-w-xl text-lg leading-8 text-gray-600">Incididunt sint fugiat pariatur cupidatat consectetur sit cillum anim id veniam aliqua proident excepteur commodo do ea.</p>
                <div class="mt-10 flex items-center justify-center gap-x-6">
                    <x-nav-link type="button-link" href="#">Get started</x-nav-link>
                    <x-nav-link type="arrow-link" href="#">Learn more</x-nav-link>
                </div>
            </div>
            <div class="absolute left-1/2 right-0 top-full -z-10 hidden -translate-y-1/2 transform-gpu overflow-hidden blur-3xl sm:block" aria-hidden="true">
                <div class="aspect-[1155/678] w-[72.1875rem] bg-gradient-to-tr from-primary-500 to-primary-50 opacity-30" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
            </div>
        </div>
{{--        CTA --}}

{{--        Footer--}}
        <x-navigation-footer></x-navigation-footer>
{{--        Footer--}}
    </main>
</x-layout>
