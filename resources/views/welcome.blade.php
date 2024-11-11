<x-guest-layout>
    <x-slot name="title">
        Home
    </x-slot>

    @push('head::styles')
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    @endpush

    <!-- ====== Hero Section Start -->
    <div id="home" class="relative overflow-hidden bg-primary pt-[120px] md:pt-[130px] lg:pt-[160px]">
        <div class="container">
            <div class="flex flex-wrap items-center -mx-4">
                <div class="w-full px-4">
                    <div class="hero-content mx-auto max-w-[780px] text-center">
                        <h1 class="mb-6 text-3xl font-bold leading-snug text-white sm:text-4xl sm:leading-snug lg:text-5xl lg:leading-[1.2]">
                            Open-Source Laravel starter-kit, Developped by
                            <a href="https://digiton.ma" target="_blank" class="underline">
                                Digiton.ma.
                            </a>
                        </h1>
                        <p class="mx-auto mb-9 max-w-[600px] text-base font-medium text-white sm:text-lg sm:leading-[1.44]">
                            "Digiton Starter Kit" is a Filamentphp backed Laravel project template that helps you to
                            start your new project with ease.
                        </p>
                        <ul class="flex flex-wrap items-center justify-center gap-5 mb-10">
                            <li>
                                <a href="https://github.com/digiton-ma/laravel-starter-kit"
                                   class="inline-flex items-center justify-center rounded-md bg-white px-7 py-[14px] text-center text-base font-medium text-dark shadow-1 transition duration-300 ease-in-out hover:bg-gray-2 hover:text-body-color">
                                    Use it Now
                                </a>
                            </li>
                            <li>
                                <a href="https://github.com/digiton-ma/laravel-starter-kit" target="_blank"
                                   class="flex items-center gap-4 rounded-md bg-white/[0.12] px-6 py-[14px] text-base font-medium text-white transition duration-300 ease-in-out hover:bg-white hover:text-dark">
                                    <svg class="fill-current" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_2005_10818)">
                                            <path
                                                d="M12 0.674805C5.625 0.674805 0.375 5.8498 0.375 12.2998C0.375 17.3998 3.7125 21.7498 8.3625 23.3248C8.9625 23.4373 9.15 23.0623 9.15 22.7998C9.15 22.5373 9.15 21.7873 9.1125 20.7748C5.8875 21.5248 5.2125 19.1998 5.2125 19.1998C4.6875 17.8873 3.9 17.5123 3.9 17.5123C2.85 16.7623 3.9375 16.7623 3.9375 16.7623C5.1 16.7998 5.7375 17.9623 5.7375 17.9623C6.75 19.7623 8.475 19.2373 9.1125 18.8998C9.225 18.1498 9.525 17.6248 9.8625 17.3248C7.3125 17.0623 4.575 16.0498 4.575 11.6248C4.575 10.3498 5.0625 9.3373 5.775 8.5498C5.6625 8.2873 5.25 7.0873 5.8875 5.4748C5.8875 5.4748 6.9 5.1748 9.1125 6.6748C10.05 6.4123 11.025 6.2623 12.0375 6.2623C13.05 6.2623 14.0625 6.3748 14.9625 6.6748C17.175 5.2123 18.15 5.4748 18.15 5.4748C18.7875 7.0498 18.4125 8.2873 18.2625 8.5498C19.0125 9.3373 19.4625 10.3873 19.4625 11.6248C19.4625 16.0498 16.725 17.0623 14.175 17.3248C14.5875 17.6998 14.9625 18.4498 14.9625 19.4998C14.9625 21.0748 14.925 22.3123 14.925 22.6873C14.925 22.9873 15.15 23.3248 15.7125 23.2123C20.2875 21.6748 23.625 17.3623 23.625 12.2248C23.5875 5.8498 18.375 0.674805 12 0.674805Z"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_2005_10818">
                                                <rect width="24" height="24" fill="white"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    Star on Github
                                </a>
                            </li>
                        </ul>
                        <div>
                            <p class="mb-4 text-base font-medium text-center text-white">
                                Built using the <a href="https://tallstack.dev/" target="_blank" class="underline">TALL Stack</a>
                            </p>
                            <div class="flex items-center justify-center gap-4 text-center -mt-6">
                                <a href="https://laravel.com"
                                   class="duration-300 ease-in-out text-white/60 hover:text-white" target="_blank">
                                    <svg class="fill-current" fill="none" xmlns="http://www.w3.org/2000/svg" width="41" height="32" viewBox="0 0 498 512">
                                        <path fill="currentColor" d="M204.786 56.49L108.402 1.072a8.01 8.01 0 0 0-8.012 0L4.006 56.49C1.314 57.98.036 60.332 0 63.444v329.669a8.05 8.05 0 0 0 4.024 6.955l192.787 110.831c2.786 1.48 5.128 1.45 7.994.019L397.59 400.086a7.99 7.99 0 0 0 4.025-6.955V287.878l92.36-53.104A7.99 7.99 0 0 0 498 227.82V117.924c0-1.985-1.193-5.315-4.098-6.955l-96.384-55.415a8.01 8.01 0 0 0-8.012 0l-96.384 55.415c-2.63 1.497-4.006 3.94-4.006 6.955v105.253l-80.324 46.186V63.443c0-2.42-1.42-5.569-4.006-6.954m-4.116 327.393l-80.176-45.305l176.579-101.51l80.25 46.13zm184.774-205.9v91.38l-80.341-46.186v-91.38zm8.031-106.227l80.286 46.168l-80.286 46.167l-80.286-46.167zM112.335 324.78V123.502l80.341-46.186v201.259zm-8.03-307.484l80.286 46.167l-80.287 46.168l-80.286-46.168zm104.414 472.777v-92.298l176.726-100.74v91.437zm192.786-220.709v-91.38l80.342-46.187v91.381zm-208.792 128.41v92.281L15.933 388.471V77.316l80.34 46.186V343.28z"/>
                                    </svg>
                                </a>

                                <a href="https://tailwindcss.com"
                                   class="duration-300 ease-in-out text-white/60 hover:text-white" target="_blank">
                                    <svg class="fill-current" width="41" height="26" viewBox="0 0 41 26" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <mask id="mask0_2005_10783" style="mask-type: luminance"
                                              maskUnits="userSpaceOnUse" x="0" y="0"
                                              width="41" height="26">
                                            <path d="M0.521393 0.949463H40.5214V25.0135H0.521393V0.949463Z"/>
                                        </mask>
                                        <g mask="url(#mask0_2005_10783)">
                                            <path
                                                d="M20.5214 0.980713C15.1882 0.980713 11.8546 3.64743 10.5214 8.98071C12.5214 6.31399 14.8546 5.31399 17.5214 5.98071C19.043 6.36103 20.1302 7.46495 21.3342 8.68667C23.295 10.6771 25.5642 12.9807 30.5214 12.9807C35.8546 12.9807 39.1882 10.314 40.5214 4.98071C38.5214 7.64743 36.1882 8.64743 33.5214 7.98071C31.9998 7.60039 30.9126 6.49651 29.7086 5.27479C27.7478 3.28431 25.4786 0.980713 20.5214 0.980713ZM10.5214 12.9807C5.18819 12.9807 1.85459 15.6474 0.521393 20.9807C2.52139 18.314 4.85459 17.314 7.52139 17.9807C9.04299 18.361 10.1302 19.465 11.3342 20.6867C13.295 22.6771 15.5642 24.9807 20.5214 24.9807C25.8546 24.9807 29.1882 22.314 30.5214 16.9807C28.5214 19.6474 26.1882 20.6474 23.5214 19.9807C21.9998 19.6004 20.9126 18.4965 19.7086 17.2748C17.7478 15.2843 15.4786 12.9807 10.5214 12.9807Z"/>
                                        </g>
                                    </svg>
                                </a>

                                <a href="https://alpinejs.dev"
                                   class="duration-300 ease-in-out text-white/60 hover:text-white" target="_blank">
                                    <svg  class="fill-current" width="41" height="36" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path fill="currentColor" fill-rule="evenodd" d="M17.556 7.413L22 11.838l-4.445 4.425l-4.444-4.425zm-11.112 0l9.214 9.174H6.77L2 11.838z" clip-rule="evenodd"/>
                                    </svg>
                                </a>

                                <a href="https://github.com/TailGrids/play-astro/"
                                   class="duration-300 ease-in-out text-white/60 hover:text-white" target="_blank">
                                    <svg class="mt-0.5 fill-current" fill="none" xmlns="http://www.w3.org/2000/svg" width="30" height="38"  viewBox="0 0 24 24">
                                        <path fill="currentColor" d="M12.001 0C6.174 0 1.448 4.957 1.448 11.072c0 2.09.552 4.042 1.51 5.71c.25.279.544.484.965.484c1.339 0 1.268-2.065 2.607-2.065s1.411 2.065 2.75 2.065c1.34 0 1.266-2.065 2.606-2.065c.584 0 .928.397 1.24.84c-.221-.205-.48-.348-.82-.348c-1.196 0-1.307 1.678-2.201 2.141v4.51a1.657 1.657 0 0 0 3.312 0V16.45c.308.433.647.815 1.22.815c1.34 0 1.267-2.065 2.606-2.065c.465 0 .774.255 1.04.58a1.1 1.1 0 0 0-.43-.088c-1.159 0-1.297 1.574-2.118 2.094v2.436a1.49 1.49 0 0 0 2.98 0V16.37c.324.466.67.895 1.278.895c.796 0 1.093-.73 1.485-1.32a11.5 11.5 0 0 0 1.074-4.874C22.552 4.957 17.828 0 12 0m-.566 2.877c2.88 0 5.214 2.784 5.214 5.807s-1.545 5.15-5.214 5.15s-5.215-2.127-5.215-5.15s2.335-5.807 5.215-5.807m-1.403 1.66a1.955 2.158 0 0 0-1.955 2.158a1.955 2.158 0 0 0 1.955 2.158a1.955 2.158 0 0 0 1.955-2.158a1.955 2.158 0 0 0-1.955-2.158m-.326.664a.978.996 0 0 1 .979.996a.978.996 0 0 1-.979.996a.978.996 0 0 1-.977-.996a.978.996 0 0 1 .977-.996m-2.95 10.493c-1.074 0-1.272 1.354-1.95 1.964v1.782a1.49 1.49 0 0 0 2.98 0v-3.182c-.264-.324-.577-.564-1.03-.564"/>
                                    </svg>
                                </a>

                                <a href="https://github.com/NextJSTemplates/play-nextjs"
                                   class="duration-300 ease-in-out text-white/60 hover:text-white" target="_blank">
                                    <svg class="fill-current" width="81" height="auto" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128">
                                        <path d="M11.059 51.213q-1.226 0-2.352.295a5.8 5.8 0 0 0-2.053.992q-.927.698-1.613 1.89q-.687 1.195-1.05 2.977l-.452 2.186H.795L0 63.336h2.748l-.041.193l-.217 1.037l-.105.51q-.265 1.27-.48 2.313l-.348 1.68q-.431 2.085-.787 3.775a452 452 0 0 0-.721 3.488h4.933q.381-1.8.729-3.48q.29-1.402.648-3.106l.147-.693l1.181-5.717h4.53l.795-3.783H8.277l.149-.748l.166-.832q.265-1.294.96-1.942q.696-.646 1.92-.648a5.7 5.7 0 0 1 1.374.168q.68.168 1.293.47l1.191-4.035a7.6 7.6 0 0 0-1.234-.412a13 13 0 0 0-3.037-.361m20.609.035l-5.033.436q-.414 2.017-.828 4.02q-.42 2.028-.86 4.05l-1.92 9.314q-.447 2.086-.795 3.776q-.36 1.745-.728 3.488h4.95q.737-3.644 1.505-7.28l1.937-9.314q.48-2.32.918-4.414q.44-2.092.854-4.076m-10.91.117q-1.345 0-2.278.588q-.93.588-1.207 1.934q-.291 1.479.381 2.277q.673.798 2.002.799q1.362 0 2.278-.512t1.207-1.976q.26-1.278-.389-2.194q-.648-.915-1.994-.916m103.633 1.85l-5.065.89l-.672 3.229l-.42 2.004l-.045.215h-2.671l-.795 3.783h2.68l-.02.102l-.06.292q-.265 1.305-.507 2.438q-.24 1.136-.453 2.187q-.216 1.05-.449 2.143q-.445 2.136.102 3.531a3.82 3.82 0 0 0 1.879 2.076q1.332.68 3.251.682a8 8 0 0 0 1.291-.11a11 11 0 0 0 1.301-.286q.605-.177.951-.412l.53-4.12q-.645.456-1.283.641a4.2 4.2 0 0 1-1.166.184q-1.21 0-1.649-.84q-.436-.84-.09-2.455l1.25-6.053h4.924l.795-3.783h-4.932l.034-.158l.207-.983l.064-.314q.257-1.236.504-2.405q.248-1.168.514-2.478M40.22 59.1q-.845 0-1.73.1a21 21 0 0 0-1.731.269a32 32 0 0 0-1.606.361q-.761.193-1.357.395l-.78 4.406a20 20 0 0 1 1.583-.613q.77-.261 1.498-.438a14 14 0 0 1 1.398-.27q.631-.09 1.268-.091q1.157 0 1.902.31q.745.312 1.035.875t.125 1.319l-5.181.824q-1.027.15-1.979.445a7 7 0 0 0-1.738.799a4.8 4.8 0 0 0-1.342 1.295q-.555.79-.803 1.967q-.33 1.529.084 2.824a4.04 4.04 0 0 0 1.473 2.078q1.06.78 2.633.781q.993 0 1.853-.295a5.4 5.4 0 0 0 1.598-.873a6.6 6.6 0 0 0 1.35-1.472h.38l-.217 2.236h4.272q.348-1.614.639-3.01l.554-2.656l.297-1.412l.381-1.807q.181-.866.348-1.707q.448-2.05-.149-3.539q-.596-1.488-2.136-2.295T40.22 59.1m21.11 0a6.1 6.1 0 0 0-2.194.402a7.4 7.4 0 0 0-1.938 1.102q-.886.697-1.498 1.554h-.414l.348-2.857l-4.172.252a667 667 0 0 1-.844 4.06a377 377 0 0 0-.777 3.776l-.348 1.68q-.447 2.085-.795 3.775q-.36 1.745-.728 3.488h4.949q.365-1.8.713-3.463l.744-3.547l.713-3.48q.53-.623 1.066-1.112a4.8 4.8 0 0 1 1.127-.773a2.8 2.8 0 0 1 1.25-.285q1.16 0 1.48.916q.324.915.008 2.43l-.478 2.32a668 668 0 0 0-.729 3.531l-.712 3.463h4.933l.736-3.488s.79-3.77 1.176-5.658l.317-1.504l.035-.04q.354-.39.717-.728l.181-.166a5.2 5.2 0 0 1 1.135-.781a2.76 2.76 0 0 1 1.25-.295q1.158 0 1.48.916q.323.915.008 2.43l-.478 2.32q-.354 1.77-.72 3.539q-.34 1.639-.722 3.455h4.95q.363-1.8.713-3.48q.347-1.682.794-3.784q.2-.975.39-1.882l.339-1.614q.63-2.94-.398-4.707q-1.025-1.765-3.56-1.765a6 6 0 0 0-2.2.412a7.94 7.94 0 0 0-3.51 2.715h-.363l-.026-.133q-.26-1.266-1.06-2.02q-1.035-.974-2.889-.974m25.349 0q-2.318 0-4.123 1t-2.996 2.816t-1.688 4.254q-.597 2.959.223 5.111a6.37 6.37 0 0 0 2.814 3.32q1.995 1.17 4.975 1.169q1.174 0 2.193-.15a13 13 0 0 0 1.797-.388q.778-.236 1.225-.505l.662-4.27a8 8 0 0 1-1.557.664a11.4 11.4 0 0 1-1.697.387q-.852.126-1.547.125q-1.59 0-2.682-.53q-1.093-.53-1.564-1.597q-.315-.713-.28-1.674l.002-.066H92.57l.082-.229q.12-.347.225-.713q.141-.486.273-1.04q.563-2.304-.017-4.036q-.578-1.733-2.217-2.691q-1.64-.96-4.236-.957m21.097 0a6.4 6.4 0 0 0-2.26.402a7.4 7.4 0 0 0-1.978 1.102a7.5 7.5 0 0 0-1.508 1.554h-.412l.348-2.857l-4.172.252q-.431 2.1-.846 4.068a503 503 0 0 0-.777 3.768l-.348 1.68c-.505 2.422-1.523 7.263-1.523 7.263h4.949l.713-3.455l.746-3.555l.71-3.48q.53-.623 1.085-1.112q.554-.487 1.158-.773q.605-.285 1.317-.285q1.308 0 1.656.916q.347.915.015 2.43l-.48 2.32c-.238 1.177-.72 3.531-.72 3.531l-.72 3.463h4.95l.736-3.488s.495-2.385.772-3.776q.214-.975.404-1.882l.34-1.614q.612-2.94-.43-4.707q-1.043-1.765-3.725-1.765m-88.7.42l-2.415.093l-.303 1.082l-.007.047a.43.43 0 0 0 .164.397l1.672 1.164l-1.956.13c-.153.01-.282.136-.32.307l-.148.682l-.008.047a.43.43 0 0 0 .166.396l1.67 1.164l-1.953.131c-.154.01-.285.135-.323.307l-.148.681l-.008.047a.43.43 0 0 0 .166.397l1.67 1.164l-1.953.13c-.153.011-.283.136-.32.307l-.15.682l-.009.047a.43.43 0 0 0 .166.396l1.67 1.164l-1.953.131c-.153.01-.283.135-.32.307l-.148.682l-.008.046a.43.43 0 0 0 .164.397l1.672 1.164l-1.953.13c-.154.011-.285.136-.323.307l-.676 2.686h2.188l.342-1.46l2.74-.243c.153-.01.283-.135.32-.307l.149-.681l.008-.047a.42.42 0 0 0-.166-.395l-1.67-1.166l1.953-.13c.153-.011.285-.136.322-.307l.148-.682l.008-.047a.42.42 0 0 0-.166-.394l-1.67-1.166l1.953-.131c.154-.01.283-.135.32-.307l.151-.681l.006-.047a.42.42 0 0 0-.164-.395l-1.672-1.166l1.955-.13c.154-.011.283-.136.32-.307l.149-.682l.008-.047a.42.42 0 0 0-.166-.394l-1.67-1.166l1.953-.131c.153-.01.285-.135.322-.307l.149-.682l.007-.047a.42.42 0 0 0-.166-.394l-2.212-1.557zm67.702 3.126q1.34 0 1.903 1.11q.444.876.322 1.982l-.02.145l-5.982.127l.05-.147q.27-.774.647-1.35q.63-.959 1.432-1.413a3.3 3.3 0 0 1 1.648-.454m-45.566 5.346l-.563 2.692a6.3 6.3 0 0 1-1.017 1.16q-.555.487-1.16.748q-.604.26-1.2.26q-.827 0-1.308-.512q-.48-.513-.315-1.438q.117-.588.465-.959a2.3 2.3 0 0 1 .877-.572q.53-.2 1.176-.351a32 32 0 0 0 1.572-.38q.58-.16.91-.32t.563-.328"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full px-4">
                    <div class="relative z-10 mx-auto max-w-[845px]">
                        <div class="mt-16">
                            <img src="assets/images/hero/hero-image.webp" alt="hero"
                                 class="max-w-full mx-auto rounded-t-xl rounded-tr-xl"/>
                        </div>
                        <div class="absolute -left-9 bottom-0 z-[-1]">
                            <svg width="134" height="106" viewBox="0 0 134 106" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <circle cx="1.66667" cy="104" r="1.66667" transform="rotate(-90 1.66667 104)"
                                        fill="white"/>
                                <circle cx="16.3333" cy="104" r="1.66667" transform="rotate(-90 16.3333 104)"
                                        fill="white"/>
                                <circle cx="31" cy="104" r="1.66667" transform="rotate(-90 31 104)" fill="white"/>
                                <circle cx="45.6667" cy="104" r="1.66667" transform="rotate(-90 45.6667 104)"
                                        fill="white"/>
                                <circle cx="60.3333" cy="104" r="1.66667" transform="rotate(-90 60.3333 104)"
                                        fill="white"/>
                                <circle cx="88.6667" cy="104" r="1.66667" transform="rotate(-90 88.6667 104)"
                                        fill="white"/>
                                <circle cx="117.667" cy="104" r="1.66667" transform="rotate(-90 117.667 104)"
                                        fill="white"/>
                                <circle cx="74.6667" cy="104" r="1.66667" transform="rotate(-90 74.6667 104)"
                                        fill="white"/>
                                <circle cx="103" cy="104" r="1.66667" transform="rotate(-90 103 104)" fill="white"/>
                                <circle cx="132" cy="104" r="1.66667" transform="rotate(-90 132 104)" fill="white"/>
                                <circle cx="1.66667" cy="89.3333" r="1.66667" transform="rotate(-90 1.66667 89.3333)"
                                        fill="white"/>
                                <circle cx="16.3333" cy="89.3333" r="1.66667" transform="rotate(-90 16.3333 89.3333)"
                                        fill="white"/>
                                <circle cx="31" cy="89.3333" r="1.66667" transform="rotate(-90 31 89.3333)"
                                        fill="white"/>
                                <circle cx="45.6667" cy="89.3333" r="1.66667" transform="rotate(-90 45.6667 89.3333)"
                                        fill="white"/>
                                <circle cx="60.3333" cy="89.3338" r="1.66667" transform="rotate(-90 60.3333 89.3338)"
                                        fill="white"/>
                                <circle cx="88.6667" cy="89.3338" r="1.66667" transform="rotate(-90 88.6667 89.3338)"
                                        fill="white"/>
                                <circle cx="117.667" cy="89.3338" r="1.66667" transform="rotate(-90 117.667 89.3338)"
                                        fill="white"/>
                                <circle cx="74.6667" cy="89.3338" r="1.66667" transform="rotate(-90 74.6667 89.3338)"
                                        fill="white"/>
                                <circle cx="103" cy="89.3338" r="1.66667" transform="rotate(-90 103 89.3338)"
                                        fill="white"/>
                                <circle cx="132" cy="89.3338" r="1.66667" transform="rotate(-90 132 89.3338)"
                                        fill="white"/>
                                <circle cx="1.66667" cy="74.6673" r="1.66667" transform="rotate(-90 1.66667 74.6673)"
                                        fill="white"/>
                                <circle cx="1.66667" cy="31.0003" r="1.66667" transform="rotate(-90 1.66667 31.0003)"
                                        fill="white"/>
                                <circle cx="16.3333" cy="74.6668" r="1.66667" transform="rotate(-90 16.3333 74.6668)"
                                        fill="white"/>
                                <circle cx="16.3333" cy="31.0003" r="1.66667" transform="rotate(-90 16.3333 31.0003)"
                                        fill="white"/>
                                <circle cx="31" cy="74.6668" r="1.66667" transform="rotate(-90 31 74.6668)"
                                        fill="white"/>
                                <circle cx="31" cy="31.0003" r="1.66667" transform="rotate(-90 31 31.0003)"
                                        fill="white"/>
                                <circle cx="45.6667" cy="74.6668" r="1.66667" transform="rotate(-90 45.6667 74.6668)"
                                        fill="white"/>
                                <circle cx="45.6667" cy="31.0003" r="1.66667" transform="rotate(-90 45.6667 31.0003)"
                                        fill="white"/>
                                <circle cx="60.3333" cy="74.6668" r="1.66667" transform="rotate(-90 60.3333 74.6668)"
                                        fill="white"/>
                                <circle cx="60.3333" cy="31.0001" r="1.66667" transform="rotate(-90 60.3333 31.0001)"
                                        fill="white"/>
                                <circle cx="88.6667" cy="74.6668" r="1.66667" transform="rotate(-90 88.6667 74.6668)"
                                        fill="white"/>
                                <circle cx="88.6667" cy="31.0001" r="1.66667" transform="rotate(-90 88.6667 31.0001)"
                                        fill="white"/>
                                <circle cx="117.667" cy="74.6668" r="1.66667" transform="rotate(-90 117.667 74.6668)"
                                        fill="white"/>
                                <circle cx="117.667" cy="31.0001" r="1.66667" transform="rotate(-90 117.667 31.0001)"
                                        fill="white"/>
                                <circle cx="74.6667" cy="74.6668" r="1.66667" transform="rotate(-90 74.6667 74.6668)"
                                        fill="white"/>
                                <circle cx="74.6667" cy="31.0001" r="1.66667" transform="rotate(-90 74.6667 31.0001)"
                                        fill="white"/>
                                <circle cx="103" cy="74.6668" r="1.66667" transform="rotate(-90 103 74.6668)"
                                        fill="white"/>
                                <circle cx="103" cy="31.0001" r="1.66667" transform="rotate(-90 103 31.0001)"
                                        fill="white"/>
                                <circle cx="132" cy="74.6668" r="1.66667" transform="rotate(-90 132 74.6668)"
                                        fill="white"/>
                                <circle cx="132" cy="31.0001" r="1.66667" transform="rotate(-90 132 31.0001)"
                                        fill="white"/>
                                <circle cx="1.66667" cy="60.0003" r="1.66667" transform="rotate(-90 1.66667 60.0003)"
                                        fill="white"/>
                                <circle cx="1.66667" cy="16.3336" r="1.66667" transform="rotate(-90 1.66667 16.3336)"
                                        fill="white"/>
                                <circle cx="16.3333" cy="60.0003" r="1.66667" transform="rotate(-90 16.3333 60.0003)"
                                        fill="white"/>
                                <circle cx="16.3333" cy="16.3336" r="1.66667" transform="rotate(-90 16.3333 16.3336)"
                                        fill="white"/>
                                <circle cx="31" cy="60.0003" r="1.66667" transform="rotate(-90 31 60.0003)"
                                        fill="white"/>
                                <circle cx="31" cy="16.3336" r="1.66667" transform="rotate(-90 31 16.3336)"
                                        fill="white"/>
                                <circle cx="45.6667" cy="60.0003" r="1.66667" transform="rotate(-90 45.6667 60.0003)"
                                        fill="white"/>
                                <circle cx="45.6667" cy="16.3336" r="1.66667" transform="rotate(-90 45.6667 16.3336)"
                                        fill="white"/>
                                <circle cx="60.3333" cy="60.0003" r="1.66667" transform="rotate(-90 60.3333 60.0003)"
                                        fill="white"/>
                                <circle cx="60.3333" cy="16.3336" r="1.66667" transform="rotate(-90 60.3333 16.3336)"
                                        fill="white"/>
                                <circle cx="88.6667" cy="60.0003" r="1.66667" transform="rotate(-90 88.6667 60.0003)"
                                        fill="white"/>
                                <circle cx="88.6667" cy="16.3336" r="1.66667" transform="rotate(-90 88.6667 16.3336)"
                                        fill="white"/>
                                <circle cx="117.667" cy="60.0003" r="1.66667" transform="rotate(-90 117.667 60.0003)"
                                        fill="white"/>
                                <circle cx="117.667" cy="16.3336" r="1.66667" transform="rotate(-90 117.667 16.3336)"
                                        fill="white"/>
                                <circle cx="74.6667" cy="60.0003" r="1.66667" transform="rotate(-90 74.6667 60.0003)"
                                        fill="white"/>
                                <circle cx="74.6667" cy="16.3336" r="1.66667" transform="rotate(-90 74.6667 16.3336)"
                                        fill="white"/>
                                <circle cx="103" cy="60.0003" r="1.66667" transform="rotate(-90 103 60.0003)"
                                        fill="white"/>
                                <circle cx="103" cy="16.3336" r="1.66667" transform="rotate(-90 103 16.3336)"
                                        fill="white"/>
                                <circle cx="132" cy="60.0003" r="1.66667" transform="rotate(-90 132 60.0003)"
                                        fill="white"/>
                                <circle cx="132" cy="16.3336" r="1.66667" transform="rotate(-90 132 16.3336)"
                                        fill="white"/>
                                <circle cx="1.66667" cy="45.3336" r="1.66667" transform="rotate(-90 1.66667 45.3336)"
                                        fill="white"/>
                                <circle cx="1.66667" cy="1.66683" r="1.66667" transform="rotate(-90 1.66667 1.66683)"
                                        fill="white"/>
                                <circle cx="16.3333" cy="45.3336" r="1.66667" transform="rotate(-90 16.3333 45.3336)"
                                        fill="white"/>
                                <circle cx="16.3333" cy="1.66683" r="1.66667" transform="rotate(-90 16.3333 1.66683)"
                                        fill="white"/>
                                <circle cx="31" cy="45.3336" r="1.66667" transform="rotate(-90 31 45.3336)"
                                        fill="white"/>
                                <circle cx="31" cy="1.66683" r="1.66667" transform="rotate(-90 31 1.66683)"
                                        fill="white"/>
                                <circle cx="45.6667" cy="45.3336" r="1.66667" transform="rotate(-90 45.6667 45.3336)"
                                        fill="white"/>
                                <circle cx="45.6667" cy="1.66683" r="1.66667" transform="rotate(-90 45.6667 1.66683)"
                                        fill="white"/>
                                <circle cx="60.3333" cy="45.3338" r="1.66667" transform="rotate(-90 60.3333 45.3338)"
                                        fill="white"/>
                                <circle cx="60.3333" cy="1.66707" r="1.66667" transform="rotate(-90 60.3333 1.66707)"
                                        fill="white"/>
                                <circle cx="88.6667" cy="45.3338" r="1.66667" transform="rotate(-90 88.6667 45.3338)"
                                        fill="white"/>
                                <circle cx="88.6667" cy="1.66707" r="1.66667" transform="rotate(-90 88.6667 1.66707)"
                                        fill="white"/>
                                <circle cx="117.667" cy="45.3338" r="1.66667" transform="rotate(-90 117.667 45.3338)"
                                        fill="white"/>
                                <circle cx="117.667" cy="1.66707" r="1.66667" transform="rotate(-90 117.667 1.66707)"
                                        fill="white"/>
                                <circle cx="74.6667" cy="45.3338" r="1.66667" transform="rotate(-90 74.6667 45.3338)"
                                        fill="white"/>
                                <circle cx="74.6667" cy="1.66707" r="1.66667" transform="rotate(-90 74.6667 1.66707)"
                                        fill="white"/>
                                <circle cx="103" cy="45.3338" r="1.66667" transform="rotate(-90 103 45.3338)"
                                        fill="white"/>
                                <circle cx="103" cy="1.66707" r="1.66667" transform="rotate(-90 103 1.66707)"
                                        fill="white"/>
                                <circle cx="132" cy="45.3338" r="1.66667" transform="rotate(-90 132 45.3338)"
                                        fill="white"/>
                                <circle cx="132" cy="1.66707" r="1.66667" transform="rotate(-90 132 1.66707)"
                                        fill="white"/>
                            </svg>
                        </div>
                        <div class="absolute -right-6 -top-6 z-[-1]">
                            <svg width="134" height="106" viewBox="0 0 134 106" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <circle cx="1.66667" cy="104" r="1.66667" transform="rotate(-90 1.66667 104)"
                                        fill="white"/>
                                <circle cx="16.3333" cy="104" r="1.66667" transform="rotate(-90 16.3333 104)"
                                        fill="white"/>
                                <circle cx="31" cy="104" r="1.66667" transform="rotate(-90 31 104)" fill="white"/>
                                <circle cx="45.6667" cy="104" r="1.66667" transform="rotate(-90 45.6667 104)"
                                        fill="white"/>
                                <circle cx="60.3333" cy="104" r="1.66667" transform="rotate(-90 60.3333 104)"
                                        fill="white"/>
                                <circle cx="88.6667" cy="104" r="1.66667" transform="rotate(-90 88.6667 104)"
                                        fill="white"/>
                                <circle cx="117.667" cy="104" r="1.66667" transform="rotate(-90 117.667 104)"
                                        fill="white"/>
                                <circle cx="74.6667" cy="104" r="1.66667" transform="rotate(-90 74.6667 104)"
                                        fill="white"/>
                                <circle cx="103" cy="104" r="1.66667" transform="rotate(-90 103 104)" fill="white"/>
                                <circle cx="132" cy="104" r="1.66667" transform="rotate(-90 132 104)" fill="white"/>
                                <circle cx="1.66667" cy="89.3333" r="1.66667" transform="rotate(-90 1.66667 89.3333)"
                                        fill="white"/>
                                <circle cx="16.3333" cy="89.3333" r="1.66667" transform="rotate(-90 16.3333 89.3333)"
                                        fill="white"/>
                                <circle cx="31" cy="89.3333" r="1.66667" transform="rotate(-90 31 89.3333)"
                                        fill="white"/>
                                <circle cx="45.6667" cy="89.3333" r="1.66667" transform="rotate(-90 45.6667 89.3333)"
                                        fill="white"/>
                                <circle cx="60.3333" cy="89.3338" r="1.66667" transform="rotate(-90 60.3333 89.3338)"
                                        fill="white"/>
                                <circle cx="88.6667" cy="89.3338" r="1.66667" transform="rotate(-90 88.6667 89.3338)"
                                        fill="white"/>
                                <circle cx="117.667" cy="89.3338" r="1.66667" transform="rotate(-90 117.667 89.3338)"
                                        fill="white"/>
                                <circle cx="74.6667" cy="89.3338" r="1.66667" transform="rotate(-90 74.6667 89.3338)"
                                        fill="white"/>
                                <circle cx="103" cy="89.3338" r="1.66667" transform="rotate(-90 103 89.3338)"
                                        fill="white"/>
                                <circle cx="132" cy="89.3338" r="1.66667" transform="rotate(-90 132 89.3338)"
                                        fill="white"/>
                                <circle cx="1.66667" cy="74.6673" r="1.66667" transform="rotate(-90 1.66667 74.6673)"
                                        fill="white"/>
                                <circle cx="1.66667" cy="31.0003" r="1.66667" transform="rotate(-90 1.66667 31.0003)"
                                        fill="white"/>
                                <circle cx="16.3333" cy="74.6668" r="1.66667" transform="rotate(-90 16.3333 74.6668)"
                                        fill="white"/>
                                <circle cx="16.3333" cy="31.0003" r="1.66667" transform="rotate(-90 16.3333 31.0003)"
                                        fill="white"/>
                                <circle cx="31" cy="74.6668" r="1.66667" transform="rotate(-90 31 74.6668)"
                                        fill="white"/>
                                <circle cx="31" cy="31.0003" r="1.66667" transform="rotate(-90 31 31.0003)"
                                        fill="white"/>
                                <circle cx="45.6667" cy="74.6668" r="1.66667" transform="rotate(-90 45.6667 74.6668)"
                                        fill="white"/>
                                <circle cx="45.6667" cy="31.0003" r="1.66667" transform="rotate(-90 45.6667 31.0003)"
                                        fill="white"/>
                                <circle cx="60.3333" cy="74.6668" r="1.66667" transform="rotate(-90 60.3333 74.6668)"
                                        fill="white"/>
                                <circle cx="60.3333" cy="31.0001" r="1.66667" transform="rotate(-90 60.3333 31.0001)"
                                        fill="white"/>
                                <circle cx="88.6667" cy="74.6668" r="1.66667" transform="rotate(-90 88.6667 74.6668)"
                                        fill="white"/>
                                <circle cx="88.6667" cy="31.0001" r="1.66667" transform="rotate(-90 88.6667 31.0001)"
                                        fill="white"/>
                                <circle cx="117.667" cy="74.6668" r="1.66667" transform="rotate(-90 117.667 74.6668)"
                                        fill="white"/>
                                <circle cx="117.667" cy="31.0001" r="1.66667" transform="rotate(-90 117.667 31.0001)"
                                        fill="white"/>
                                <circle cx="74.6667" cy="74.6668" r="1.66667" transform="rotate(-90 74.6667 74.6668)"
                                        fill="white"/>
                                <circle cx="74.6667" cy="31.0001" r="1.66667" transform="rotate(-90 74.6667 31.0001)"
                                        fill="white"/>
                                <circle cx="103" cy="74.6668" r="1.66667" transform="rotate(-90 103 74.6668)"
                                        fill="white"/>
                                <circle cx="103" cy="31.0001" r="1.66667" transform="rotate(-90 103 31.0001)"
                                        fill="white"/>
                                <circle cx="132" cy="74.6668" r="1.66667" transform="rotate(-90 132 74.6668)"
                                        fill="white"/>
                                <circle cx="132" cy="31.0001" r="1.66667" transform="rotate(-90 132 31.0001)"
                                        fill="white"/>
                                <circle cx="1.66667" cy="60.0003" r="1.66667" transform="rotate(-90 1.66667 60.0003)"
                                        fill="white"/>
                                <circle cx="1.66667" cy="16.3336" r="1.66667" transform="rotate(-90 1.66667 16.3336)"
                                        fill="white"/>
                                <circle cx="16.3333" cy="60.0003" r="1.66667" transform="rotate(-90 16.3333 60.0003)"
                                        fill="white"/>
                                <circle cx="16.3333" cy="16.3336" r="1.66667" transform="rotate(-90 16.3333 16.3336)"
                                        fill="white"/>
                                <circle cx="31" cy="60.0003" r="1.66667" transform="rotate(-90 31 60.0003)"
                                        fill="white"/>
                                <circle cx="31" cy="16.3336" r="1.66667" transform="rotate(-90 31 16.3336)"
                                        fill="white"/>
                                <circle cx="45.6667" cy="60.0003" r="1.66667" transform="rotate(-90 45.6667 60.0003)"
                                        fill="white"/>
                                <circle cx="45.6667" cy="16.3336" r="1.66667" transform="rotate(-90 45.6667 16.3336)"
                                        fill="white"/>
                                <circle cx="60.3333" cy="60.0003" r="1.66667" transform="rotate(-90 60.3333 60.0003)"
                                        fill="white"/>
                                <circle cx="60.3333" cy="16.3336" r="1.66667" transform="rotate(-90 60.3333 16.3336)"
                                        fill="white"/>
                                <circle cx="88.6667" cy="60.0003" r="1.66667" transform="rotate(-90 88.6667 60.0003)"
                                        fill="white"/>
                                <circle cx="88.6667" cy="16.3336" r="1.66667" transform="rotate(-90 88.6667 16.3336)"
                                        fill="white"/>
                                <circle cx="117.667" cy="60.0003" r="1.66667" transform="rotate(-90 117.667 60.0003)"
                                        fill="white"/>
                                <circle cx="117.667" cy="16.3336" r="1.66667" transform="rotate(-90 117.667 16.3336)"
                                        fill="white"/>
                                <circle cx="74.6667" cy="60.0003" r="1.66667" transform="rotate(-90 74.6667 60.0003)"
                                        fill="white"/>
                                <circle cx="74.6667" cy="16.3336" r="1.66667" transform="rotate(-90 74.6667 16.3336)"
                                        fill="white"/>
                                <circle cx="103" cy="60.0003" r="1.66667" transform="rotate(-90 103 60.0003)"
                                        fill="white"/>
                                <circle cx="103" cy="16.3336" r="1.66667" transform="rotate(-90 103 16.3336)"
                                        fill="white"/>
                                <circle cx="132" cy="60.0003" r="1.66667" transform="rotate(-90 132 60.0003)"
                                        fill="white"/>
                                <circle cx="132" cy="16.3336" r="1.66667" transform="rotate(-90 132 16.3336)"
                                        fill="white"/>
                                <circle cx="1.66667" cy="45.3336" r="1.66667" transform="rotate(-90 1.66667 45.3336)"
                                        fill="white"/>
                                <circle cx="1.66667" cy="1.66683" r="1.66667" transform="rotate(-90 1.66667 1.66683)"
                                        fill="white"/>
                                <circle cx="16.3333" cy="45.3336" r="1.66667" transform="rotate(-90 16.3333 45.3336)"
                                        fill="white"/>
                                <circle cx="16.3333" cy="1.66683" r="1.66667" transform="rotate(-90 16.3333 1.66683)"
                                        fill="white"/>
                                <circle cx="31" cy="45.3336" r="1.66667" transform="rotate(-90 31 45.3336)"
                                        fill="white"/>
                                <circle cx="31" cy="1.66683" r="1.66667" transform="rotate(-90 31 1.66683)"
                                        fill="white"/>
                                <circle cx="45.6667" cy="45.3336" r="1.66667" transform="rotate(-90 45.6667 45.3336)"
                                        fill="white"/>
                                <circle cx="45.6667" cy="1.66683" r="1.66667" transform="rotate(-90 45.6667 1.66683)"
                                        fill="white"/>
                                <circle cx="60.3333" cy="45.3338" r="1.66667" transform="rotate(-90 60.3333 45.3338)"
                                        fill="white"/>
                                <circle cx="60.3333" cy="1.66707" r="1.66667" transform="rotate(-90 60.3333 1.66707)"
                                        fill="white"/>
                                <circle cx="88.6667" cy="45.3338" r="1.66667" transform="rotate(-90 88.6667 45.3338)"
                                        fill="white"/>
                                <circle cx="88.6667" cy="1.66707" r="1.66667" transform="rotate(-90 88.6667 1.66707)"
                                        fill="white"/>
                                <circle cx="117.667" cy="45.3338" r="1.66667" transform="rotate(-90 117.667 45.3338)"
                                        fill="white"/>
                                <circle cx="117.667" cy="1.66707" r="1.66667" transform="rotate(-90 117.667 1.66707)"
                                        fill="white"/>
                                <circle cx="74.6667" cy="45.3338" r="1.66667" transform="rotate(-90 74.6667 45.3338)"
                                        fill="white"/>
                                <circle cx="74.6667" cy="1.66707" r="1.66667" transform="rotate(-90 74.6667 1.66707)"
                                        fill="white"/>
                                <circle cx="103" cy="45.3338" r="1.66667" transform="rotate(-90 103 45.3338)"
                                        fill="white"/>
                                <circle cx="103" cy="1.66707" r="1.66667" transform="rotate(-90 103 1.66707)"
                                        fill="white"/>
                                <circle cx="132" cy="45.3338" r="1.66667" transform="rotate(-90 132 45.3338)"
                                        fill="white"/>
                                <circle cx="132" cy="1.66707" r="1.66667" transform="rotate(-90 132 1.66707)"
                                        fill="white"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ====== Hero Section End -->

    <!-- ====== Features Section Start -->
    <section class="pb-8 pt-20 lg:pb-[70px] lg:pt-[120px]">
        <div class="container">
            <div class="flex flex-wrap -mx-4">
                <div class="w-full px-4">
                    <div class="mx-auto mb-12 max-w-[485px] text-center lg:mb-[70px]">
            <span class="block mb-2 text-lg font-semibold text-primary">
              Features
            </span>
                        <h2 class="mb-3 text-3xl font-bold text-dark sm:text-4xl md:text-[40px] md:leading-[1.2]">
                            Main Features Of Play
                        </h2>
                        <p class="text-base text-body-color">
                            There are many variations of passages of Lorem Ipsum available
                            but the majority have suffered alteration in some form.
                        </p>
                    </div>
                </div>
            </div>
            <div class="flex flex-wrap -mx-4">
                <div class="w-full px-4 md:w-1/2 lg:w-1/4">
                    <div class="mb-12 group">
                        <div
                            class="relative z-10 mb-10 flex h-[70px] w-[70px] items-center justify-center rounded-[14px] bg-primary">
              <span
                  class="absolute left-0 top-0 -z-[1] mb-8 flex h-[70px] w-[70px] rotate-[25deg] items-center justify-center rounded-[14px] bg-primary bg-opacity-20 duration-300 group-hover:rotate-45"></span>
                            <svg width="37" height="37" viewBox="0 0 37 37" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M30.5801 8.30514H27.9926C28.6113 7.85514 29.1176 7.34889 29.3426 6.73014C29.6801 5.88639 29.6801 4.48014 27.9363 2.84889C26.0801 1.04889 24.3926 1.04889 23.3238 1.33014C20.9051 1.94889 19.2738 4.76139 18.3738 6.78639C17.4738 4.76139 15.8426 2.00514 13.4238 1.33014C12.3551 1.04889 10.6676 1.10514 8.81133 2.84889C7.06758 4.53639 7.12383 5.88639 7.40508 6.73014C7.63008 7.34889 8.13633 7.85514 8.75508 8.30514H5.71758C4.08633 8.30514 2.73633 9.65514 2.73633 11.2864V14.9989C2.73633 16.5739 4.03008 17.8676 5.60508 17.9239V31.6489C5.60508 33.5614 7.18008 35.1926 9.14883 35.1926H27.5426C29.4551 35.1926 31.0863 33.6176 31.0863 31.6489V17.8676C32.4926 17.6426 33.5613 16.4051 33.5613 14.9426V11.2301C33.5613 9.59889 32.2113 8.30514 30.5801 8.30514ZM23.9426 3.69264C23.9988 3.69264 24.1676 3.63639 24.3363 3.63639C24.7301 3.63639 25.3488 3.80514 26.1926 4.59264C26.8676 5.21139 27.0363 5.66139 26.9801 5.77389C26.6988 6.56139 23.8863 7.40514 20.6801 7.74264C21.4676 5.99889 22.6488 4.03014 23.9426 3.69264ZM10.4988 4.64889C11.3426 3.86139 11.9613 3.69264 12.3551 3.69264C12.5238 3.69264 12.6363 3.74889 12.7488 3.74889C14.0426 4.08639 15.2801 5.99889 16.0676 7.79889C12.8613 7.46139 10.0488 6.61764 9.76758 5.83014C9.71133 5.66139 9.88008 5.26764 10.4988 4.64889ZM5.26758 14.9426V11.2301C5.26758 11.0051 5.43633 10.7801 5.71758 10.7801H30.5801C30.8051 10.7801 31.0301 10.9489 31.0301 11.2301V14.9426C31.0301 15.1676 30.8613 15.3926 30.5801 15.3926H5.71758C5.49258 15.3926 5.26758 15.2239 5.26758 14.9426ZM27.5426 32.6614H9.14883C8.58633 32.6614 8.13633 32.2114 8.13633 31.6489V17.9239H28.4988V31.6489C28.5551 32.2114 28.1051 32.6614 27.5426 32.6614Z"
                                    fill="white"/>
                            </svg>
                        </div>
                        <h4 class="mb-3 text-xl font-bold text-dark ">
                            Free and Open-Source
                        </h4>
                        <p class="mb-8 text-body-color  lg:mb-9">
                            Lorem Ipsum is simply dummy text of the printing and industry.
                        </p>
                        <a href="javascript:void(0)"
                           class="text-base font-medium text-dark hover:text-primary  ">
                            Learn More
                        </a>
                    </div>
                </div>
                <div class="w-full px-4 md:w-1/2 lg:w-1/4">
                    <div class="mb-12 group">
                        <div
                            class="relative z-10 mb-10 flex h-[70px] w-[70px] items-center justify-center rounded-[14px] bg-primary">
              <span
                  class="absolute left-0 top-0 -z-[1] mb-8 flex h-[70px] w-[70px] rotate-[25deg] items-center justify-center rounded-[14px] bg-primary bg-opacity-20 duration-300 group-hover:rotate-45"></span>
                            <svg width="36" height="36" viewBox="0 0 36 36" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M30.5998 1.01245H5.39981C2.98105 1.01245 0.956055 2.9812 0.956055 5.4562V30.6562C0.956055 33.075 2.9248 35.0437 5.39981 35.0437H30.5998C33.0186 35.0437 34.9873 33.075 34.9873 30.6562V5.39995C34.9873 2.9812 33.0186 1.01245 30.5998 1.01245ZM5.39981 3.48745H30.5998C31.6123 3.48745 32.4561 4.3312 32.4561 5.39995V11.1937H3.4873V5.39995C3.4873 4.38745 4.38731 3.48745 5.39981 3.48745ZM3.4873 30.6V13.725H23.0623V32.5125H5.39981C4.38731 32.5125 3.4873 31.6125 3.4873 30.6ZM30.5998 32.5125H25.5373V13.725H32.4561V30.6C32.5123 31.6125 31.6123 32.5125 30.5998 32.5125Z"
                                    fill="white"/>
                            </svg>
                        </div>
                        <h4 class="mb-3 text-xl font-bold text-dark ">
                            Multipurpose Template
                        </h4>
                        <p class="mb-8 text-body-color  lg:mb-9">
                            Lorem Ipsum is simply dummy text of the printing and industry.
                        </p>
                        <a href="javascript:void(0)"
                           class="text-base font-medium text-dark hover:text-primary  ">
                            Learn More
                        </a>
                    </div>
                </div>
                <div class="w-full px-4 md:w-1/2 lg:w-1/4">
                    <div class="mb-12 group">
                        <div
                            class="relative z-10 mb-10 flex h-[70px] w-[70px] items-center justify-center rounded-[14px] bg-primary">
              <span
                  class="absolute left-0 top-0 -z-[1] mb-8 flex h-[70px] w-[70px] rotate-[25deg] items-center justify-center rounded-[14px] bg-primary bg-opacity-20 duration-300 group-hover:rotate-45"></span>
                            <svg width="37" height="37" viewBox="0 0 37 37" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M33.5613 21.4677L31.3675 20.1177C30.805 19.7239 30.0175 19.9489 29.6238 20.5114C29.23 21.1302 29.455 21.8614 30.0175 22.2552L31.48 23.2114L18.1488 31.5927L4.76127 23.2114L6.22377 22.2552C6.84252 21.8614 7.01127 21.0739 6.61752 20.5114C6.22377 19.8927 5.43627 19.7239 4.87377 20.1177L2.68002 21.4677C2.11752 21.8614 1.72377 22.4802 1.72377 23.1552C1.72377 23.8302 2.06127 24.5052 2.68002 24.8427L17.08 33.8989C17.4175 34.1239 17.755 34.1802 18.1488 34.1802C18.5425 34.1802 18.88 34.0677 19.2175 33.8989L33.5613 24.8989C34.1238 24.5052 34.5175 23.8864 34.5175 23.2114C34.5175 22.5364 34.18 21.8614 33.5613 21.4677Z"
                                    fill="white"/>
                                <path
                                    d="M20.1175 20.4552L18.1488 21.6364L16.18 20.3989C15.5613 20.0052 14.83 20.2302 14.4363 20.7927C14.0425 21.4114 14.2675 22.1427 14.83 22.5364L17.4738 24.1677C17.6988 24.2802 17.9238 24.3364 18.1488 24.3364C18.3738 24.3364 18.5988 24.2802 18.8238 24.1677L21.4675 22.5364C22.0863 22.1427 22.255 21.3552 21.8613 20.7927C21.4675 20.2302 20.68 20.0614 20.1175 20.4552Z"
                                    fill="white"/>
                                <path
                                    d="M7.74252 18.0927L11.455 20.4552C11.68 20.5677 11.905 20.6239 12.13 20.6239C12.5238 20.6239 12.9738 20.3989 13.1988 20.0052C13.5925 19.3864 13.3675 18.6552 12.805 18.2614L9.09252 15.8989C8.47377 15.5052 7.74252 15.7302 7.34877 16.2927C6.95502 16.9677 7.12377 17.7552 7.74252 18.0927Z"
                                    fill="white"/>
                                <path
                                    d="M5.04252 16.1802C5.43627 16.1802 5.88627 15.9552 6.11127 15.5614C6.50502 14.9427 6.28002 14.2114 5.71752 13.8177L4.81752 13.2552L5.71752 12.6927C6.33627 12.2989 6.50502 11.5114 6.11127 10.9489C5.71752 10.3302 4.93002 10.1614 4.36752 10.5552L1.72377 12.1864C1.33002 12.4114 1.10502 12.8052 1.10502 13.2552C1.10502 13.7052 1.33002 14.0989 1.72377 14.3239L4.36752 15.9552C4.53627 16.1239 4.76127 16.1802 5.04252 16.1802Z"
                                    fill="white"/>
                                <path
                                    d="M8.41752 10.7239C8.64252 10.7239 8.86752 10.6677 9.09252 10.5552L12.805 8.1927C13.4238 7.79895 13.5925 7.01145 13.1988 6.44895C12.805 5.8302 12.0175 5.66145 11.455 6.0552L7.74252 8.4177C7.12377 8.81145 6.95502 9.59895 7.34877 10.1614C7.57377 10.4989 7.96752 10.7239 8.41752 10.7239Z"
                                    fill="white"/>
                                <path
                                    d="M16.18 6.05522L18.1488 4.81772L20.1175 6.05522C20.3425 6.16772 20.5675 6.22397 20.7925 6.22397C21.1863 6.22397 21.6363 5.99897 21.8613 5.60522C22.255 4.98647 22.03 4.25522 21.4675 3.86147L18.8238 2.23022C18.43 1.94897 17.8675 1.94897 17.4738 2.23022L14.83 3.86147C14.2113 4.25522 14.0425 5.04272 14.4363 5.60522C14.83 6.16772 15.6175 6.44897 16.18 6.05522Z"
                                    fill="white"/>
                                <path
                                    d="M23.4925 8.19267L27.205 10.5552C27.43 10.6677 27.655 10.7239 27.88 10.7239C28.2738 10.7239 28.7238 10.4989 28.9488 10.1052C29.3425 9.48642 29.1175 8.75517 28.555 8.36142L24.8425 5.99892C24.28 5.60517 23.4925 5.83017 23.0988 6.39267C22.705 7.01142 22.8738 7.79892 23.4925 8.19267Z"
                                    fill="white"/>
                                <path
                                    d="M34.5738 12.1864L31.93 10.5552C31.3675 10.1614 30.58 10.3864 30.1863 10.9489C29.7925 11.5677 30.0175 12.2989 30.58 12.6927L31.48 13.2552L30.58 13.8177C29.9613 14.2114 29.7925 14.9989 30.1863 15.5614C30.4113 15.9552 30.8613 16.1802 31.255 16.1802C31.48 16.1802 31.705 16.1239 31.93 16.0114L34.5738 14.3802C34.9675 14.1552 35.1925 13.7614 35.1925 13.3114C35.1925 12.8614 34.9675 12.4114 34.5738 12.1864Z"
                                    fill="white"/>
                                <path
                                    d="M24.1675 20.624C24.3925 20.624 24.6175 20.5677 24.8425 20.4552L28.555 18.0927C29.1738 17.699 29.3425 16.9115 28.9488 16.349C28.555 15.7302 27.7675 15.5615 27.205 15.9552L23.4925 18.3177C22.8738 18.7115 22.705 19.499 23.0988 20.0615C23.3238 20.4552 23.7175 20.624 24.1675 20.624Z"
                                    fill="white"/>
                            </svg>
                        </div>
                        <h4 class="mb-3 text-xl font-bold text-dark ">
                            High-quality Design
                        </h4>
                        <p class="mb-8 text-body-color  lg:mb-9">
                            Lorem Ipsum is simply dummy text of the printing and industry.
                        </p>
                        <a href="javascript:void(0)"
                           class="text-base font-medium text-dark hover:text-primary  ">
                            Learn More
                        </a>
                    </div>
                </div>
                <div class="w-full px-4 md:w-1/2 lg:w-1/4">
                    <div class="mb-12 group">
                        <div
                            class="relative z-10 mb-10 flex h-[70px] w-[70px] items-center justify-center rounded-[14px] bg-primary">
              <span
                  class="absolute left-0 top-0 -z-[1] mb-8 flex h-[70px] w-[70px] rotate-[25deg] items-center justify-center rounded-[14px] bg-primary bg-opacity-20 duration-300 group-hover:rotate-45"></span>
                            <svg width="37" height="37" viewBox="0 0 37 37" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12.355 2.0614H5.21129C3.29879 2.0614 1.72379 3.6364 1.72379 5.5489V12.6927C1.72379 14.6052 3.29879 16.1802 5.21129 16.1802H12.355C14.2675 16.1802 15.8425 14.6052 15.8425 12.6927V5.60515C15.8988 3.6364 14.3238 2.0614 12.355 2.0614ZM13.3675 12.7489C13.3675 13.3114 12.9175 13.7614 12.355 13.7614H5.21129C4.64879 13.7614 4.19879 13.3114 4.19879 12.7489V5.60515C4.19879 5.04265 4.64879 4.59265 5.21129 4.59265H12.355C12.9175 4.59265 13.3675 5.04265 13.3675 5.60515V12.7489Z"
                                    fill="white"/>
                                <path
                                    d="M31.0863 2.0614H23.9425C22.03 2.0614 20.455 3.6364 20.455 5.5489V12.6927C20.455 14.6052 22.03 16.1802 23.9425 16.1802H31.0863C32.9988 16.1802 34.5738 14.6052 34.5738 12.6927V5.60515C34.5738 3.6364 32.9988 2.0614 31.0863 2.0614ZM32.0988 12.7489C32.0988 13.3114 31.6488 13.7614 31.0863 13.7614H23.9425C23.38 13.7614 22.93 13.3114 22.93 12.7489V5.60515C22.93 5.04265 23.38 4.59265 23.9425 4.59265H31.0863C31.6488 4.59265 32.0988 5.04265 32.0988 5.60515V12.7489Z"
                                    fill="white"/>
                                <path
                                    d="M12.355 20.0051H5.21129C3.29879 20.0051 1.72379 21.5801 1.72379 23.4926V30.6364C1.72379 32.5489 3.29879 34.1239 5.21129 34.1239H12.355C14.2675 34.1239 15.8425 32.5489 15.8425 30.6364V23.5489C15.8988 21.5801 14.3238 20.0051 12.355 20.0051ZM13.3675 30.6926C13.3675 31.2551 12.9175 31.7051 12.355 31.7051H5.21129C4.64879 31.7051 4.19879 31.2551 4.19879 30.6926V23.5489C4.19879 22.9864 4.64879 22.5364 5.21129 22.5364H12.355C12.9175 22.5364 13.3675 22.9864 13.3675 23.5489V30.6926Z"
                                    fill="white"/>
                                <path
                                    d="M31.0863 20.0051H23.9425C22.03 20.0051 20.455 21.5801 20.455 23.4926V30.6364C20.455 32.5489 22.03 34.1239 23.9425 34.1239H31.0863C32.9988 34.1239 34.5738 32.5489 34.5738 30.6364V23.5489C34.5738 21.5801 32.9988 20.0051 31.0863 20.0051ZM32.0988 30.6926C32.0988 31.2551 31.6488 31.7051 31.0863 31.7051H23.9425C23.38 31.7051 22.93 31.2551 22.93 30.6926V23.5489C22.93 22.9864 23.38 22.5364 23.9425 22.5364H31.0863C31.6488 22.5364 32.0988 22.9864 32.0988 23.5489V30.6926Z"
                                    fill="white"/>
                            </svg>
                        </div>
                        <h4 class="mb-3 text-xl font-bold text-dark ">
                            All Essential Elements
                        </h4>
                        <p class="mb-8 text-body-color  lg:mb-9">
                            Lorem Ipsum is simply dummy text of the printing and industry.
                        </p>
                        <a href="javascript:void(0)"
                           class="text-base font-medium text-dark hover:text-primary  ">
                            Learn More
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== Features Section End -->

    <!-- ====== About Section Start -->
    <section id="about" class="bg-gray-1 pb-8 pt-20 -2 lg:pb-[70px] lg:pt-[120px]">
        <div class="container">
            <div>
                <div class="flex flex-wrap items-center -mx-4">
                    <div class="w-full px-4 lg:w-1/2">
                        <div class="mb-12 max-w-[540px] lg:mb-0">
                            <h2
                                class="mb-5 text-3xl font-bold leading-tight text-dark  sm:text-[40px] sm:leading-[1.2]">
                                Brilliant Toolkit to Build Nextgen Website Faster.
                            </h2>
                            <p class="mb-10 text-base leading-relaxed text-body-color ">
                                The main ‘thrust' is to focus on educating attendees on how to
                                best protect highly vulnerable business applications with
                                interactive panel discussions and roundtables led by subject
                                matter experts.
                                <br/>
                                <br/>
                                The main ‘thrust' is to focus on educating attendees on how to
                                best protect highly vulnerable business applications with
                                interactive panel.
                            </p>

                            <a href="javascript:void(0)"
                               class="inline-flex items-center justify-center py-3 text-base font-medium text-center text-white border rounded-md border-primary bg-primary px-7 hover:border-blue-dark hover:bg-blue-dark">
                                Know More
                            </a>
                        </div>
                    </div>

                    <div class="w-full px-4 lg:w-1/2">
                        <div class="flex flex-wrap -mx-2 sm:-mx-4 lg:-mx-2 xl:-mx-4">
                            <div class="w-full px-2 sm:w-1/2 sm:px-4 lg:px-2 xl:px-4">
                                <div class="mb-4 sm:mb-8 sm:h-[400px] md:h-[540px] lg:h-[400px] xl:h-[500px]">
                                    <img src="./assets/images/about/about-image-01.jpg" alt="about image"
                                         class="object-cover object-center w-full h-full"/>
                                </div>
                            </div>

                            <div class="w-full px-2 sm:w-1/2 sm:px-4 lg:px-2 xl:px-4">
                                <div
                                    class="mb-4 sm:mb-8 sm:h-[220px] md:h-[346px] lg:mb-4 lg:h-[225px] xl:mb-8 xl:h-[310px]">
                                    <img src="./assets/images/about/about-image-02.jpg" alt="about image"
                                         class="object-cover object-center w-full h-full"/>
                                </div>

                                <div
                                    class="relative z-10 mb-4 flex items-center justify-center overflow-hidden bg-primary px-6 py-12 sm:mb-8 sm:h-[160px] sm:p-5 lg:mb-4 xl:mb-8">
                                    <div>
                    <span class="block text-5xl font-extrabold text-white">
                      09
                    </span>
                                        <span class="block text-base font-semibold text-white">
                      We have
                    </span>
                                        <span class="block text-base font-medium text-white text-opacity-70">
                      Years of experience
                    </span>
                                    </div>
                                    <div>
                    <span class="absolute top-0 left-0 -z-10">
                      <svg width="106" height="144" viewBox="0 0 106 144" fill="none"
                           xmlns="http://www.w3.org/2000/svg">
                        <rect opacity="0.1" x="-67" y="47.127" width="113.378" height="131.304"
                              transform="rotate(-42.8643 -67 47.127)" fill="url(#paint0_linear_1416_214)"/>
                        <defs>
                          <linearGradient id="paint0_linear_1416_214" x1="-10.3111" y1="47.127" x2="-10.3111"
                                          y2="178.431" gradientUnits="userSpaceOnUse">
                            <stop stop-color="white"/>
                            <stop offset="1" stop-color="white" stop-opacity="0"/>
                          </linearGradient>
                        </defs>
                      </svg>
                    </span>
                                        <span class="absolute top-0 right-0 -z-10">
                      <svg width="130" height="97" viewBox="0 0 130 97" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect opacity="0.1" x="0.86792" y="-6.67725" width="155.563" height="140.614"
                              transform="rotate(-42.8643 0.86792 -6.67725)" fill="url(#paint0_linear_1416_215)"/>
                        <defs>
                          <linearGradient id="paint0_linear_1416_215" x1="78.6495" y1="-6.67725" x2="78.6495"
                                          y2="133.937" gradientUnits="userSpaceOnUse">
                            <stop stop-color="white"/>
                            <stop offset="1" stop-color="white" stop-opacity="0"/>
                          </linearGradient>
                        </defs>
                      </svg>
                    </span>
                                        <span class="absolute bottom-0 right-0 -z-10">
                      <svg width="175" height="104" viewBox="0 0 175 104" fill="none"
                           xmlns="http://www.w3.org/2000/svg">
                        <rect opacity="0.1" x="175.011" y="108.611" width="101.246" height="148.179"
                              transform="rotate(137.136 175.011 108.611)" fill="url(#paint0_linear_1416_216)"/>
                        <defs>
                          <linearGradient id="paint0_linear_1416_216" x1="225.634" y1="108.611" x2="225.634" y2="256.79"
                                          gradientUnits="userSpaceOnUse">
                            <stop stop-color="white"/>
                            <stop offset="1" stop-color="white" stop-opacity="0"/>
                          </linearGradient>
                        </defs>
                      </svg>
                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== About Section End -->

    <!-- ====== CTA Section Start -->
    <section class="relative z-10 overflow-hidden bg-primary py-20 lg:py-[115px]">
        <div class="container mx-auto">
            <div class="relative overflow-hidden">
                <div class="flex flex-wrap items-stretch -mx-4">
                    <div class="w-full px-4">
                        <div class="mx-auto max-w-[570px] text-center">
                            <h2 class="mb-2.5 text-3xl font-bold text-white md:text-[38px] md:leading-[1.44]">
                                <span>What Are You Looking For?</span>
                                <span class="text-3xl font-normal md:text-[40px]">
                  Get Started Now
                </span>
                            </h2>
                            <p class="mx-auto mb-6 max-w-[515px] text-base leading-[1.5] text-white">
                                There are many variations of passages of Lorem Ipsum but the
                                majority have suffered in some form.
                            </p>
                            <a href="javascript:void(0)"
                               class="inline-block rounded-md border border-transparent bg-secondary px-7 py-3 text-base font-medium text-white transition hover:bg-[#0BB489]">
                                Start using Play
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
      <span class="absolute top-0 left-0">
        <svg width="495" height="470" viewBox="0 0 495 470" fill="none" xmlns="http://www.w3.org/2000/svg">
          <circle cx="55" cy="442" r="138" stroke="white" stroke-opacity="0.04" stroke-width="50"/>
          <circle cx="446" r="39" stroke="white" stroke-opacity="0.04" stroke-width="20"/>
          <path d="M245.406 137.609L233.985 94.9852L276.609 106.406L245.406 137.609Z" stroke="white"
                stroke-opacity="0.08" stroke-width="12"/>
        </svg>
      </span>
            <span class="absolute bottom-0 right-0">
        <svg width="493" height="470" viewBox="0 0 493 470" fill="none" xmlns="http://www.w3.org/2000/svg">
          <circle cx="462" cy="5" r="138" stroke="white" stroke-opacity="0.04" stroke-width="50"/>
          <circle cx="49" cy="470" r="39" stroke="white" stroke-opacity="0.04" stroke-width="20"/>
          <path d="M222.393 226.701L272.808 213.192L259.299 263.607L222.393 226.701Z" stroke="white"
                stroke-opacity="0.06" stroke-width="13"/>
        </svg>
      </span>
        </div>
    </section>
    <!-- ====== CTA Section End -->

    <!-- ====== Pricing Section Start -->
    <section id="pricing"
             class="relative z-20 overflow-hidden bg-white pb-12 pt-20  lg:pb-[90px] lg:pt-[120px]">
        <div class="container mx-auto">
            <div class="flex flex-wrap -mx-4">
                <div class="w-full px-4">
                    <div class="mx-auto mb-[60px] max-w-[510px] text-center">
            <span class="block mb-2 text-lg font-semibold text-primary">
              Pricing Table
            </span>
                        <h2 class="mb-3 text-3xl font-bold text-dark  sm:text-4xl md:text-[40px] md:leading-[1.2]">
                            Awesome Pricing Plan
                        </h2>
                        <p class="text-base text-body-color ">
                            There are many variations of passages of Lorem Ipsum available
                            but the majority have suffered alteration in some form.
                        </p>
                    </div>
                </div>
            </div>
            <div class="flex flex-wrap justify-center -mx-4">
                <div class="w-full px-4 md:w-1/2 lg:w-1/3">
                    <div
                        class="relative z-10 px-8 py-10 mb-10 overflow-hidden bg-white rounded-xl shadow-pricing -2 sm:p-12 lg:px-6 lg:py-10 xl:p-14">
            <span class="block mb-5 text-xl font-medium text-dark ">
              Starter
            </span>
                        <h2 class="mb-11 text-4xl font-semibold text-dark  xl:text-[42px] xl:leading-[1.21]">
                            <span class="text-xl font-medium">$</span>
                            <span class="-ml-1 -tracking-[2px]">25.00</span>
                            <span class="text-base font-normal text-body-color ">
                Per Month
              </span>
                        </h2>
                        <div class="mb-[50px]">
                            <h5 class="mb-5 text-lg font-medium text-dark ">
                                Features
                            </h5>
                            <div class="flex flex-col gap-[14px]">
                                <p class="text-base text-body-color ">
                                    Up to 1 User
                                </p>
                                <p class="text-base text-body-color ">
                                    All UI components
                                </p>
                                <p class="text-base text-body-color ">
                                    Lifetime access
                                </p>
                                <p class="text-base text-body-color ">
                                    Free updates
                                </p>
                            </div>
                        </div>
                        <a href="javascript:void(0)"
                           class="inline-block py-3 text-base font-medium text-center text-white transition rounded-md bg-primary px-7 hover:bg-blue-dark">
                            Purchase Now
                        </a>
                    </div>
                </div>
                <div class="w-full px-4 md:w-1/2 lg:w-1/3">
                    <div
                        class="relative z-10 px-8 py-10 mb-10 overflow-hidden bg-white rounded-xl shadow-pricing -2 sm:p-12 lg:px-6 lg:py-10 xl:p-14">
                        <p
                            class="absolute right-[-50px] top-[60px] inline-block -rotate-90 rounded-bl-md rounded-tl-md bg-primary px-5 py-2 text-base font-medium text-white">
                            Recommended
                        </p>
                        <span class="block mb-5 text-xl font-medium text-dark ">
              Basic
            </span>
                        <h2 class="mb-11 text-4xl font-semibold text-dark  xl:text-[42px] xl:leading-[1.21]">
                            <span class="text-xl font-medium">$</span>
                            <span class="-ml-1 -tracking-[2px]">59.00</span>
                            <span class="text-base font-normal text-body-color ">
                Per Month
              </span>
                        </h2>
                        <div class="mb-[50px]">
                            <h5 class="mb-5 text-lg font-medium text-dark ">
                                Features
                            </h5>
                            <div class="flex flex-col gap-[14px]">
                                <p class="text-base text-body-color ">
                                    Up to 1 User
                                </p>
                                <p class="text-base text-body-color ">
                                    All UI components
                                </p>
                                <p class="text-base text-body-color ">
                                    Lifetime access
                                </p>
                                <p class="text-base text-body-color ">
                                    Free updates
                                </p>
                            </div>
                        </div>
                        <a href="javascript:void(0)"
                           class="inline-block py-3 text-base font-medium text-center text-white transition rounded-md bg-primary px-7 hover:bg-blue-dark">
                            Purchase Now
                        </a>
                    </div>
                </div>
                <div class="w-full px-4 md:w-1/2 lg:w-1/3">
                    <div
                        class="relative z-10 px-8 py-10 mb-10 overflow-hidden bg-white rounded-xl shadow-pricing -2 sm:p-12 lg:px-6 lg:py-10 xl:p-14">
            <span class="block mb-5 text-xl font-medium text-dark ">
              Premium
            </span>
                        <h2 class="mb-11 text-4xl font-semibold text-dark  xl:text-[42px] xl:leading-[1.21]">
                            <span class="text-xl font-medium">$</span>
                            <span class="-ml-1 -tracking-[2px]">99.00</span>
                            <span class="text-base font-normal text-body-color ">
                Per Month
              </span>
                        </h2>
                        <div class="mb-[50px]">
                            <h5 class="mb-5 text-lg font-medium text-dark ">
                                Features
                            </h5>
                            <div class="flex flex-col gap-[14px]">
                                <p class="text-base text-body-color ">
                                    Up to 1 User
                                </p>
                                <p class="text-base text-body-color ">
                                    All UI components
                                </p>
                                <p class="text-base text-body-color ">
                                    Lifetime access
                                </p>
                                <p class="text-base text-body-color ">
                                    Free updates
                                </p>
                            </div>
                        </div>
                        <a href="javascript:void(0)"
                           class="inline-block py-3 text-base font-medium text-center text-white transition rounded-md bg-primary px-7 hover:bg-blue-dark">
                            Purchase Now
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== Pricing Section End -->

    <!-- ====== Testimonial Section Start -->
    <section id="testimonials" class="overflow-hidden bg-gray-1 py-20 -2 md:py-[120px]">
        <div class="container mx-auto">
            <div class="flex flex-wrap justify-center -mx-4">
                <div class="w-full px-4">
                    <div class="mx-auto mb-[60px] max-w-[485px] text-center">
            <span class="block mb-2 text-lg font-semibold text-primary">
              Testimonials
            </span>
                        <h2 class="mb-3 text-3xl font-bold leading-[1.2] text-dark  sm:text-4xl md:text-[40px]">
                            What our Clients Say
                        </h2>
                        <p class="text-base text-body-color ">
                            There are many variations of passages of Lorem Ipsum available
                            but the majority have suffered alteration in some form.
                        </p>
                    </div>
                </div>
            </div>

            <div class="-m-5">
                <div class="p-5 swiper testimonial-carousel common-carousel">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="rounded-xl bg-white px-4 py-[30px] shadow-testimonial  sm:px-[30px]">
                                <div class="mb-[18px] flex items-center gap-[2px]">
                                    <img src="./assets/images/testimonials/icon-star.svg" alt="star icon"/>
                                    <img src="./assets/images/testimonials/icon-star.svg" alt="star icon"/>
                                    <img src="./assets/images/testimonials/icon-star.svg" alt="star icon"/>
                                    <img src="./assets/images/testimonials/icon-star.svg" alt="star icon"/>
                                    <img src="./assets/images/testimonials/icon-star.svg" alt="star icon"/>
                                </div>

                                <p class="mb-6 text-base text-body-color ">
                                    “Our members are so impressed. It's intuitive. It's clean.
                                    It's distraction free. If you're building a community.’’
                                </p>

                                <a href="#" class="flex items-center gap-4">
                                    <div class="h-[50px] w-[50px] overflow-hidden rounded-full">
                                        <img src="./assets/images/testimonials/author-01.jpg" alt="author"
                                             class="h-[50px] w-[50px] overflow-hidden rounded-full"/>
                                    </div>

                                    <div>
                                        <h3 class="text-sm font-semibold text-dark ">
                                            Sabo Masties
                                        </h3>
                                        <p class="text-xs text-body-secondary">Founder @ Rolex</p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="rounded-xl bg-white px-4 py-[30px] shadow-testimonial  sm:px-[30px]">
                                <div class="mb-[18px] flex items-center gap-[2px]">
                                    <img src="./assets/images/testimonials/icon-star.svg" alt="star icon"/>
                                    <img src="./assets/images/testimonials/icon-star.svg" alt="star icon"/>
                                    <img src="./assets/images/testimonials/icon-star.svg" alt="star icon"/>
                                    <img src="./assets/images/testimonials/icon-star.svg" alt="star icon"/>
                                    <img src="./assets/images/testimonials/icon-star.svg" alt="star icon"/>
                                </div>

                                <p class="mb-6 text-base text-body-color ">
                                    “Our members are so impressed. It's intuitive. It's clean.
                                    It's distraction free. If you're building a community.’’
                                </p>

                                <a href="#" class="flex items-center gap-4">
                                    <div class="h-[50px] w-[50px] overflow-hidden rounded-full">
                                        <img src="./assets/images/testimonials/author-02.jpg" alt="author"
                                             class="h-[50px] w-[50px] overflow-hidden rounded-full"/>
                                    </div>

                                    <div>
                                        <h3 class="text-sm font-semibold text-dark ">
                                            Musharof Chowdhury
                                        </h3>
                                        <p class="text-xs text-body-secondary">
                                            Founder @ Ayro UI
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="rounded-xl bg-white px-4 py-[30px] shadow-testimonial  sm:px-[30px]">
                                <div class="mb-[18px] flex items-center gap-[2px]">
                                    <img src="./assets/images/testimonials/icon-star.svg" alt="star icon"/>
                                    <img src="./assets/images/testimonials/icon-star.svg" alt="star icon"/>
                                    <img src="./assets/images/testimonials/icon-star.svg" alt="star icon"/>
                                    <img src="./assets/images/testimonials/icon-star.svg" alt="star icon"/>
                                    <img src="./assets/images/testimonials/icon-star.svg" alt="star icon"/>
                                </div>

                                <p class="mb-6 text-base text-body-color ">
                                    “Our members are so impressed. It's intuitive. It's clean.
                                    It's distraction free. If you're building a community.’’
                                </p>

                                <a href="#" class="flex items-center gap-4">
                                    <div class="h-[50px] w-[50px] overflow-hidden rounded-full">
                                        <img src="./assets/images/testimonials/author-03.jpg" alt="author"
                                             class="h-[50px] w-[50px] overflow-hidden rounded-full"/>
                                    </div>

                                    <div>
                                        <h3 class="text-sm font-semibold text-dark ">
                                            William Smith
                                        </h3>
                                        <p class="text-xs text-body-secondary">
                                            Founder @ Trorex
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="rounded-xl bg-white px-4 py-[30px] shadow-testimonial  sm:px-[30px]">
                                <div class="mb-[18px] flex items-center gap-[2px]">
                                    <img src="./assets/images/testimonials/icon-star.svg" alt="star icon"/>
                                    <img src="./assets/images/testimonials/icon-star.svg" alt="star icon"/>
                                    <img src="./assets/images/testimonials/icon-star.svg" alt="star icon"/>
                                    <img src="./assets/images/testimonials/icon-star.svg" alt="star icon"/>
                                    <img src="./assets/images/testimonials/icon-star.svg" alt="star icon"/>
                                </div>

                                <p class="mb-6 text-base text-body-color ">
                                    “Our members are so impressed. It's intuitive. It's clean.
                                    It's distraction free. If you're building a community.’’
                                </p>

                                <a href="#" class="flex items-center gap-4">
                                    <div class="h-[50px] w-[50px] overflow-hidden rounded-full">
                                        <img src="./assets/images/testimonials/author-01.jpg" alt="author"
                                             class="h-[50px] w-[50px] overflow-hidden rounded-full"/>
                                    </div>

                                    <div>
                                        <h3 class="text-sm font-semibold text-dark ">
                                            Sabo Masties
                                        </h3>
                                        <p class="text-xs text-body-secondary">Founder @ Rolex</p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="rounded-xl bg-white px-4 py-[30px] shadow-testimonial  sm:px-[30px]">
                                <div class="mb-[18px] flex items-center gap-[2px]">
                                    <img src="./assets/images/testimonials/icon-star.svg" alt="star icon"/>
                                    <img src="./assets/images/testimonials/icon-star.svg" alt="star icon"/>
                                    <img src="./assets/images/testimonials/icon-star.svg" alt="star icon"/>
                                    <img src="./assets/images/testimonials/icon-star.svg" alt="star icon"/>
                                    <img src="./assets/images/testimonials/icon-star.svg" alt="star icon"/>
                                </div>

                                <p class="mb-6 text-base text-body-color ">
                                    “Our members are so impressed. It's intuitive. It's clean.
                                    It's distraction free. If you're building a community.’’
                                </p>

                                <a href="#" class="flex items-center gap-4">
                                    <div class="h-[50px] w-[50px] overflow-hidden rounded-full">
                                        <img src="./assets/images/testimonials/author-02.jpg" alt="author"
                                             class="h-[50px] w-[50px] overflow-hidden rounded-full"/>
                                    </div>

                                    <div>
                                        <h3 class="text-sm font-semibold text-dark ">
                                            Musharof Chowdhury
                                        </h3>
                                        <p class="text-xs text-body-secondary">
                                            Founder @ Ayro UI
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="rounded-xl bg-white px-4 py-[30px] shadow-testimonial  sm:px-[30px]">
                                <div class="mb-[18px] flex items-center gap-[2px]">
                                    <img src="./assets/images/testimonials/icon-star.svg" alt="star icon"/>
                                    <img src="./assets/images/testimonials/icon-star.svg" alt="star icon"/>
                                    <img src="./assets/images/testimonials/icon-star.svg" alt="star icon"/>
                                    <img src="./assets/images/testimonials/icon-star.svg" alt="star icon"/>
                                    <img src="./assets/images/testimonials/icon-star.svg" alt="star icon"/>
                                </div>

                                <p class="mb-6 text-base text-body-color ">
                                    “Our members are so impressed. It's intuitive. It's clean.
                                    It's distraction free. If you're building a community.’’
                                </p>

                                <a href="#" class="flex items-center gap-4">
                                    <div class="h-[50px] w-[50px] overflow-hidden rounded-full">
                                        <img src="./assets/images/testimonials/author-03.jpg" alt="author"
                                             class="h-[50px] w-[50px] overflow-hidden rounded-full"/>
                                    </div>

                                    <div>
                                        <h3 class="text-sm font-semibold text-dark ">
                                            William Smith
                                        </h3>
                                        <p class="text-xs text-body-secondary">
                                            Founder @ Trorex
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="mt-[60px] flex items-center justify-center gap-1">
                        <div class="swiper-button-prev">
                            <svg class="fill-current" width="22" height="22" viewBox="0 0 22 22" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M19.25 10.2437H4.57187L10.4156 4.29687C10.725 3.9875 10.725 3.50625 10.4156 3.19687C10.1062 2.8875 9.625 2.8875 9.31562 3.19687L2.2 10.4156C1.89062 10.725 1.89062 11.2063 2.2 11.5156L9.31562 18.7344C9.45312 18.8719 9.65937 18.975 9.86562 18.975C10.0719 18.975 10.2437 18.9062 10.4156 18.7687C10.725 18.4594 10.725 17.9781 10.4156 17.6688L4.60625 11.7906H19.25C19.6625 11.7906 20.0063 11.4469 20.0063 11.0344C20.0063 10.5875 19.6625 10.2437 19.25 10.2437Z"/>
                            </svg>
                        </div>

                        <div class="swiper-button-next">
                            <svg class="fill-current" width="22" height="22" viewBox="0 0 22 22" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M19.8 10.45L12.6844 3.2313C12.375 2.92192 11.8938 2.92192 11.5844 3.2313C11.275 3.54067 11.275 4.02192 11.5844 4.3313L17.3594 10.2094H2.75C2.3375 10.2094 1.99375 10.5532 1.99375 10.9657C1.99375 11.3782 2.3375 11.7563 2.75 11.7563H17.4281L11.5844 17.7032C11.275 18.0126 11.275 18.4938 11.5844 18.8032C11.7219 18.9407 11.9281 19.0094 12.1344 19.0094C12.3406 19.0094 12.5469 18.9407 12.6844 18.7688L19.8 11.55C20.1094 11.2407 20.1094 10.7594 19.8 10.45Z"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== Testimonial Section End -->

    <!-- ====== FAQ Section Start -->
    <section class="relative z-20 overflow-hidden bg-white pb-8 pt-20  lg:pb-[50px] lg:pt-[120px]">
        <div class="container mx-auto">
            <div class="flex flex-wrap -mx-4">
                <div class="w-full px-4">
                    <div class="mx-auto mb-[60px] max-w-[520px] text-center">
            <span class="block mb-2 text-lg font-semibold text-primary">
              FAQ
            </span>
                        <h2 class="mb-3 text-3xl font-bold leading-[1.2] text-dark  sm:text-4xl md:text-[40px]">
                            Any Questions? Look Here
                        </h2>
                        <p class="mx-auto max-w-[485px] text-base text-body-color ">
                            There are many variations of passages of Lorem Ipsum available
                            but the majority have suffered alteration in some form.
                        </p>
                    </div>
                </div>
            </div>
            <div class="flex flex-wrap -mx-4">
                <div class="w-full px-4 lg:w-1/2">
                    <div class="mb-12 flex lg:mb-[70px]">
                        <div
                            class="mr-4 flex h-[50px] w-full max-w-[50px] items-center justify-center rounded-xl bg-primary text-white sm:mr-6 sm:h-[60px] sm:max-w-[60px]">
                            <svg width="32" height="32" viewBox="0 0 34 34" class="fill-current">
                                <path
                                    d="M17.0008 0.690674C7.96953 0.690674 0.691406 7.9688 0.691406 17C0.691406 26.0313 7.96953 33.3625 17.0008 33.3625C26.032 33.3625 33.3633 26.0313 33.3633 17C33.3633 7.9688 26.032 0.690674 17.0008 0.690674ZM17.0008 31.5032C9.03203 31.5032 2.55078 24.9688 2.55078 17C2.55078 9.0313 9.03203 2.55005 17.0008 2.55005C24.9695 2.55005 31.5039 9.0313 31.5039 17C31.5039 24.9688 24.9695 31.5032 17.0008 31.5032Z"/>
                                <path
                                    d="M17.9039 6.32194C16.3633 6.05631 14.8227 6.48131 13.707 7.43756C12.5383 8.39381 11.8477 9.82819 11.8477 11.3688C11.8477 11.9532 11.9539 12.5376 12.1664 13.0688C12.3258 13.5469 12.857 13.8126 13.3352 13.6532C13.8133 13.4938 14.0789 12.9626 13.9195 12.4844C13.8133 12.1126 13.707 11.7938 13.707 11.3688C13.707 10.4126 14.132 9.50944 14.8758 8.87194C15.6195 8.23444 16.5758 7.96881 17.5852 8.18131C18.9133 8.39381 19.9758 9.50944 20.1883 10.7844C20.4539 12.3251 19.657 13.8126 18.2227 14.3969C16.8945 14.9282 16.0445 16.2563 16.0445 17.7969V21.1969C16.0445 21.7282 16.4695 22.1532 17.0008 22.1532C17.532 22.1532 17.957 21.7282 17.957 21.1969V17.7969C17.957 17.0532 18.382 16.3626 18.9664 16.1501C21.1977 15.2469 22.4727 12.9094 22.0477 10.4657C21.6758 8.39381 19.9758 6.69381 17.9039 6.32194Z"/>
                                <path
                                    d="M17.0531 24.8625H16.8937C16.3625 24.8625 15.9375 25.2875 15.9375 25.8188C15.9375 26.35 16.3625 26.7751 16.8937 26.7751H17.0531C17.5844 26.7751 18.0094 26.35 18.0094 25.8188C18.0094 25.2875 17.5844 24.8625 17.0531 24.8625Z"/>
                            </svg>
                        </div>
                        <div class="w-full">
                            <h3 class="mb-6 text-xl font-semibold text-dark  sm:text-2xl lg:text-xl xl:text-2xl">
                                Is TailGrids Well-documented?
                            </h3>
                            <p class="text-base text-body-color ">
                                It takes 2-3 weeks to get your first blog post ready. That
                                includes the in-depth research & creation of your monthly
                                content ui/ux strategy that we do writing your first blog
                                post.
                            </p>
                        </div>
                    </div>
                    <div class="mb-12 flex lg:mb-[70px]">
                        <div
                            class="mr-4 flex h-[50px] w-full max-w-[50px] items-center justify-center rounded-xl bg-primary text-white sm:mr-6 sm:h-[60px] sm:max-w-[60px]">
                            <svg width="32" height="32" viewBox="0 0 34 34" class="fill-current">
                                <path
                                    d="M17.0008 0.690674C7.96953 0.690674 0.691406 7.9688 0.691406 17C0.691406 26.0313 7.96953 33.3625 17.0008 33.3625C26.032 33.3625 33.3633 26.0313 33.3633 17C33.3633 7.9688 26.032 0.690674 17.0008 0.690674ZM17.0008 31.5032C9.03203 31.5032 2.55078 24.9688 2.55078 17C2.55078 9.0313 9.03203 2.55005 17.0008 2.55005C24.9695 2.55005 31.5039 9.0313 31.5039 17C31.5039 24.9688 24.9695 31.5032 17.0008 31.5032Z"/>
                                <path
                                    d="M17.9039 6.32194C16.3633 6.05631 14.8227 6.48131 13.707 7.43756C12.5383 8.39381 11.8477 9.82819 11.8477 11.3688C11.8477 11.9532 11.9539 12.5376 12.1664 13.0688C12.3258 13.5469 12.857 13.8126 13.3352 13.6532C13.8133 13.4938 14.0789 12.9626 13.9195 12.4844C13.8133 12.1126 13.707 11.7938 13.707 11.3688C13.707 10.4126 14.132 9.50944 14.8758 8.87194C15.6195 8.23444 16.5758 7.96881 17.5852 8.18131C18.9133 8.39381 19.9758 9.50944 20.1883 10.7844C20.4539 12.3251 19.657 13.8126 18.2227 14.3969C16.8945 14.9282 16.0445 16.2563 16.0445 17.7969V21.1969C16.0445 21.7282 16.4695 22.1532 17.0008 22.1532C17.532 22.1532 17.957 21.7282 17.957 21.1969V17.7969C17.957 17.0532 18.382 16.3626 18.9664 16.1501C21.1977 15.2469 22.4727 12.9094 22.0477 10.4657C21.6758 8.39381 19.9758 6.69381 17.9039 6.32194Z"/>
                                <path
                                    d="M17.0531 24.8625H16.8937C16.3625 24.8625 15.9375 25.2875 15.9375 25.8188C15.9375 26.35 16.3625 26.7751 16.8937 26.7751H17.0531C17.5844 26.7751 18.0094 26.35 18.0094 25.8188C18.0094 25.2875 17.5844 24.8625 17.0531 24.8625Z"/>
                            </svg>
                        </div>
                        <div class="w-full">
                            <h3 class="mb-6 text-xl font-semibold text-dark  sm:text-2xl lg:text-xl xl:text-2xl">
                                Is TailGrids Well-documented?
                            </h3>
                            <p class="text-base text-body-color ">
                                It takes 2-3 weeks to get your first blog post ready. That
                                includes the in-depth research & creation of your monthly
                                content ui/ux strategy that we do writing your first blog
                                post.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 lg:w-1/2">
                    <div class="mb-12 flex lg:mb-[70px]">
                        <div
                            class="mr-4 flex h-[50px] w-full max-w-[50px] items-center justify-center rounded-xl bg-primary text-white sm:mr-6 sm:h-[60px] sm:max-w-[60px]">
                            <svg width="32" height="32" viewBox="0 0 34 34" class="fill-current">
                                <path
                                    d="M17.0008 0.690674C7.96953 0.690674 0.691406 7.9688 0.691406 17C0.691406 26.0313 7.96953 33.3625 17.0008 33.3625C26.032 33.3625 33.3633 26.0313 33.3633 17C33.3633 7.9688 26.032 0.690674 17.0008 0.690674ZM17.0008 31.5032C9.03203 31.5032 2.55078 24.9688 2.55078 17C2.55078 9.0313 9.03203 2.55005 17.0008 2.55005C24.9695 2.55005 31.5039 9.0313 31.5039 17C31.5039 24.9688 24.9695 31.5032 17.0008 31.5032Z"/>
                                <path
                                    d="M17.9039 6.32194C16.3633 6.05631 14.8227 6.48131 13.707 7.43756C12.5383 8.39381 11.8477 9.82819 11.8477 11.3688C11.8477 11.9532 11.9539 12.5376 12.1664 13.0688C12.3258 13.5469 12.857 13.8126 13.3352 13.6532C13.8133 13.4938 14.0789 12.9626 13.9195 12.4844C13.8133 12.1126 13.707 11.7938 13.707 11.3688C13.707 10.4126 14.132 9.50944 14.8758 8.87194C15.6195 8.23444 16.5758 7.96881 17.5852 8.18131C18.9133 8.39381 19.9758 9.50944 20.1883 10.7844C20.4539 12.3251 19.657 13.8126 18.2227 14.3969C16.8945 14.9282 16.0445 16.2563 16.0445 17.7969V21.1969C16.0445 21.7282 16.4695 22.1532 17.0008 22.1532C17.532 22.1532 17.957 21.7282 17.957 21.1969V17.7969C17.957 17.0532 18.382 16.3626 18.9664 16.1501C21.1977 15.2469 22.4727 12.9094 22.0477 10.4657C21.6758 8.39381 19.9758 6.69381 17.9039 6.32194Z"/>
                                <path
                                    d="M17.0531 24.8625H16.8937C16.3625 24.8625 15.9375 25.2875 15.9375 25.8188C15.9375 26.35 16.3625 26.7751 16.8937 26.7751H17.0531C17.5844 26.7751 18.0094 26.35 18.0094 25.8188C18.0094 25.2875 17.5844 24.8625 17.0531 24.8625Z"/>
                            </svg>
                        </div>
                        <div class="w-full">
                            <h3 class="mb-6 text-xl font-semibold text-dark  sm:text-2xl lg:text-xl xl:text-2xl">
                                Is TailGrids Well-documented?
                            </h3>
                            <p class="text-base text-body-color ">
                                It takes 2-3 weeks to get your first blog post ready. That
                                includes the in-depth research & creation of your monthly
                                content ui/ux strategy that we do writing your first blog
                                post.
                            </p>
                        </div>
                    </div>
                    <div class="mb-12 flex lg:mb-[70px]">
                        <div
                            class="mr-4 flex h-[50px] w-full max-w-[50px] items-center justify-center rounded-xl bg-primary text-white sm:mr-6 sm:h-[60px] sm:max-w-[60px]">
                            <svg width="32" height="32" viewBox="0 0 34 34" class="fill-current">
                                <path
                                    d="M17.0008 0.690674C7.96953 0.690674 0.691406 7.9688 0.691406 17C0.691406 26.0313 7.96953 33.3625 17.0008 33.3625C26.032 33.3625 33.3633 26.0313 33.3633 17C33.3633 7.9688 26.032 0.690674 17.0008 0.690674ZM17.0008 31.5032C9.03203 31.5032 2.55078 24.9688 2.55078 17C2.55078 9.0313 9.03203 2.55005 17.0008 2.55005C24.9695 2.55005 31.5039 9.0313 31.5039 17C31.5039 24.9688 24.9695 31.5032 17.0008 31.5032Z"/>
                                <path
                                    d="M17.9039 6.32194C16.3633 6.05631 14.8227 6.48131 13.707 7.43756C12.5383 8.39381 11.8477 9.82819 11.8477 11.3688C11.8477 11.9532 11.9539 12.5376 12.1664 13.0688C12.3258 13.5469 12.857 13.8126 13.3352 13.6532C13.8133 13.4938 14.0789 12.9626 13.9195 12.4844C13.8133 12.1126 13.707 11.7938 13.707 11.3688C13.707 10.4126 14.132 9.50944 14.8758 8.87194C15.6195 8.23444 16.5758 7.96881 17.5852 8.18131C18.9133 8.39381 19.9758 9.50944 20.1883 10.7844C20.4539 12.3251 19.657 13.8126 18.2227 14.3969C16.8945 14.9282 16.0445 16.2563 16.0445 17.7969V21.1969C16.0445 21.7282 16.4695 22.1532 17.0008 22.1532C17.532 22.1532 17.957 21.7282 17.957 21.1969V17.7969C17.957 17.0532 18.382 16.3626 18.9664 16.1501C21.1977 15.2469 22.4727 12.9094 22.0477 10.4657C21.6758 8.39381 19.9758 6.69381 17.9039 6.32194Z"/>
                                <path
                                    d="M17.0531 24.8625H16.8937C16.3625 24.8625 15.9375 25.2875 15.9375 25.8188C15.9375 26.35 16.3625 26.7751 16.8937 26.7751H17.0531C17.5844 26.7751 18.0094 26.35 18.0094 25.8188C18.0094 25.2875 17.5844 24.8625 17.0531 24.8625Z"/>
                            </svg>
                        </div>
                        <div class="w-full">
                            <h3 class="mb-6 text-xl font-semibold text-dark  sm:text-2xl lg:text-xl xl:text-2xl">
                                Is TailGrids Well-documented?
                            </h3>
                            <p class="text-base text-body-color ">
                                It takes 2-3 weeks to get your first blog post ready. That
                                includes the in-depth research & creation of your monthly
                                content ui/ux strategy that we do writing your first blog
                                post.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
      <span class="absolute left-4 top-4 -z-[1]">
        <svg width="48" height="134" viewBox="0 0 48 134" fill="none" xmlns="http://www.w3.org/2000/svg">
          <circle cx="45.6673" cy="132" r="1.66667" transform="rotate(180 45.6673 132)" fill="#13C296"/>
          <circle cx="45.6673" cy="117.333" r="1.66667" transform="rotate(180 45.6673 117.333)" fill="#13C296"/>
          <circle cx="45.6673" cy="102.667" r="1.66667" transform="rotate(180 45.6673 102.667)" fill="#13C296"/>
          <circle cx="45.6673" cy="88.0001" r="1.66667" transform="rotate(180 45.6673 88.0001)" fill="#13C296"/>
          <circle cx="45.6673" cy="73.3335" r="1.66667" transform="rotate(180 45.6673 73.3335)" fill="#13C296"/>
          <circle cx="45.6673" cy="45.0001" r="1.66667" transform="rotate(180 45.6673 45.0001)" fill="#13C296"/>
          <circle cx="45.6673" cy="16.0001" r="1.66667" transform="rotate(180 45.6673 16.0001)" fill="#13C296"/>
          <circle cx="45.6673" cy="59.0001" r="1.66667" transform="rotate(180 45.6673 59.0001)" fill="#13C296"/>
          <circle cx="45.6673" cy="30.6668" r="1.66667" transform="rotate(180 45.6673 30.6668)" fill="#13C296"/>
          <circle cx="45.6673" cy="1.66683" r="1.66667" transform="rotate(180 45.6673 1.66683)" fill="#13C296"/>
          <circle cx="31.0013" cy="132" r="1.66667" transform="rotate(180 31.0013 132)" fill="#13C296"/>
          <circle cx="31.0013" cy="117.333" r="1.66667" transform="rotate(180 31.0013 117.333)" fill="#13C296"/>
          <circle cx="31.0013" cy="102.667" r="1.66667" transform="rotate(180 31.0013 102.667)" fill="#13C296"/>
          <circle cx="31.0013" cy="88.0001" r="1.66667" transform="rotate(180 31.0013 88.0001)" fill="#13C296"/>
          <circle cx="31.0013" cy="73.3335" r="1.66667" transform="rotate(180 31.0013 73.3335)" fill="#13C296"/>
          <circle cx="31.0013" cy="45.0001" r="1.66667" transform="rotate(180 31.0013 45.0001)" fill="#13C296"/>
          <circle cx="31.0013" cy="16.0001" r="1.66667" transform="rotate(180 31.0013 16.0001)" fill="#13C296"/>
          <circle cx="31.0013" cy="59.0001" r="1.66667" transform="rotate(180 31.0013 59.0001)" fill="#13C296"/>
          <circle cx="31.0013" cy="30.6668" r="1.66667" transform="rotate(180 31.0013 30.6668)" fill="#13C296"/>
          <circle cx="31.0013" cy="1.66683" r="1.66667" transform="rotate(180 31.0013 1.66683)" fill="#13C296"/>
          <circle cx="16.3333" cy="132" r="1.66667" transform="rotate(180 16.3333 132)" fill="#13C296"/>
          <circle cx="16.3333" cy="117.333" r="1.66667" transform="rotate(180 16.3333 117.333)" fill="#13C296"/>
          <circle cx="16.3333" cy="102.667" r="1.66667" transform="rotate(180 16.3333 102.667)" fill="#13C296"/>
          <circle cx="16.3333" cy="88.0001" r="1.66667" transform="rotate(180 16.3333 88.0001)" fill="#13C296"/>
          <circle cx="16.3333" cy="73.3335" r="1.66667" transform="rotate(180 16.3333 73.3335)" fill="#13C296"/>
          <circle cx="16.3333" cy="45.0001" r="1.66667" transform="rotate(180 16.3333 45.0001)" fill="#13C296"/>
          <circle cx="16.3333" cy="16.0001" r="1.66667" transform="rotate(180 16.3333 16.0001)" fill="#13C296"/>
          <circle cx="16.3333" cy="59.0001" r="1.66667" transform="rotate(180 16.3333 59.0001)" fill="#13C296"/>
          <circle cx="16.3333" cy="30.6668" r="1.66667" transform="rotate(180 16.3333 30.6668)" fill="#13C296"/>
          <circle cx="16.3333" cy="1.66683" r="1.66667" transform="rotate(180 16.3333 1.66683)" fill="#13C296"/>
          <circle cx="1.66732" cy="132" r="1.66667" transform="rotate(180 1.66732 132)" fill="#13C296"/>
          <circle cx="1.66732" cy="117.333" r="1.66667" transform="rotate(180 1.66732 117.333)" fill="#13C296"/>
          <circle cx="1.66732" cy="102.667" r="1.66667" transform="rotate(180 1.66732 102.667)" fill="#13C296"/>
          <circle cx="1.66732" cy="88.0001" r="1.66667" transform="rotate(180 1.66732 88.0001)" fill="#13C296"/>
          <circle cx="1.66732" cy="73.3335" r="1.66667" transform="rotate(180 1.66732 73.3335)" fill="#13C296"/>
          <circle cx="1.66732" cy="45.0001" r="1.66667" transform="rotate(180 1.66732 45.0001)" fill="#13C296"/>
          <circle cx="1.66732" cy="16.0001" r="1.66667" transform="rotate(180 1.66732 16.0001)" fill="#13C296"/>
          <circle cx="1.66732" cy="59.0001" r="1.66667" transform="rotate(180 1.66732 59.0001)" fill="#13C296"/>
          <circle cx="1.66732" cy="30.6668" r="1.66667" transform="rotate(180 1.66732 30.6668)" fill="#13C296"/>
          <circle cx="1.66732" cy="1.66683" r="1.66667" transform="rotate(180 1.66732 1.66683)" fill="#13C296"/>
        </svg>
      </span>
            <span class="absolute bottom-4 right-4 -z-[1]">
        <svg width="48" height="134" viewBox="0 0 48 134" fill="none" xmlns="http://www.w3.org/2000/svg">
          <circle cx="45.6673" cy="132" r="1.66667" transform="rotate(180 45.6673 132)" fill="#3758F9"/>
          <circle cx="45.6673" cy="117.333" r="1.66667" transform="rotate(180 45.6673 117.333)" fill="#3758F9"/>
          <circle cx="45.6673" cy="102.667" r="1.66667" transform="rotate(180 45.6673 102.667)" fill="#3758F9"/>
          <circle cx="45.6673" cy="88.0001" r="1.66667" transform="rotate(180 45.6673 88.0001)" fill="#3758F9"/>
          <circle cx="45.6673" cy="73.3333" r="1.66667" transform="rotate(180 45.6673 73.3333)" fill="#3758F9"/>
          <circle cx="45.6673" cy="45.0001" r="1.66667" transform="rotate(180 45.6673 45.0001)" fill="#3758F9"/>
          <circle cx="45.6673" cy="16.0001" r="1.66667" transform="rotate(180 45.6673 16.0001)" fill="#3758F9"/>
          <circle cx="45.6673" cy="59.0001" r="1.66667" transform="rotate(180 45.6673 59.0001)" fill="#3758F9"/>
          <circle cx="45.6673" cy="30.6668" r="1.66667" transform="rotate(180 45.6673 30.6668)" fill="#3758F9"/>
          <circle cx="45.6673" cy="1.66683" r="1.66667" transform="rotate(180 45.6673 1.66683)" fill="#3758F9"/>
          <circle cx="31.0006" cy="132" r="1.66667" transform="rotate(180 31.0006 132)" fill="#3758F9"/>
          <circle cx="31.0006" cy="117.333" r="1.66667" transform="rotate(180 31.0006 117.333)" fill="#3758F9"/>
          <circle cx="31.0006" cy="102.667" r="1.66667" transform="rotate(180 31.0006 102.667)" fill="#3758F9"/>
          <circle cx="31.0006" cy="88.0001" r="1.66667" transform="rotate(180 31.0006 88.0001)" fill="#3758F9"/>
          <circle cx="31.0008" cy="73.3333" r="1.66667" transform="rotate(180 31.0008 73.3333)" fill="#3758F9"/>
          <circle cx="31.0008" cy="45.0001" r="1.66667" transform="rotate(180 31.0008 45.0001)" fill="#3758F9"/>
          <circle cx="31.0008" cy="16.0001" r="1.66667" transform="rotate(180 31.0008 16.0001)" fill="#3758F9"/>
          <circle cx="31.0008" cy="59.0001" r="1.66667" transform="rotate(180 31.0008 59.0001)" fill="#3758F9"/>
          <circle cx="31.0008" cy="30.6668" r="1.66667" transform="rotate(180 31.0008 30.6668)" fill="#3758F9"/>
          <circle cx="31.0008" cy="1.66683" r="1.66667" transform="rotate(180 31.0008 1.66683)" fill="#3758F9"/>
          <circle cx="16.3341" cy="132" r="1.66667" transform="rotate(180 16.3341 132)" fill="#3758F9"/>
          <circle cx="16.3341" cy="117.333" r="1.66667" transform="rotate(180 16.3341 117.333)" fill="#3758F9"/>
          <circle cx="16.3341" cy="102.667" r="1.66667" transform="rotate(180 16.3341 102.667)" fill="#3758F9"/>
          <circle cx="16.3341" cy="88.0001" r="1.66667" transform="rotate(180 16.3341 88.0001)" fill="#3758F9"/>
          <circle cx="16.3338" cy="73.3333" r="1.66667" transform="rotate(180 16.3338 73.3333)" fill="#3758F9"/>
          <circle cx="16.3338" cy="45.0001" r="1.66667" transform="rotate(180 16.3338 45.0001)" fill="#3758F9"/>
          <circle cx="16.3338" cy="16.0001" r="1.66667" transform="rotate(180 16.3338 16.0001)" fill="#3758F9"/>
          <circle cx="16.3338" cy="59.0001" r="1.66667" transform="rotate(180 16.3338 59.0001)" fill="#3758F9"/>
          <circle cx="16.3338" cy="30.6668" r="1.66667" transform="rotate(180 16.3338 30.6668)" fill="#3758F9"/>
          <circle cx="16.3338" cy="1.66683" r="1.66667" transform="rotate(180 16.3338 1.66683)" fill="#3758F9"/>
          <circle cx="1.66732" cy="132" r="1.66667" transform="rotate(180 1.66732 132)" fill="#3758F9"/>
          <circle cx="1.66732" cy="117.333" r="1.66667" transform="rotate(180 1.66732 117.333)" fill="#3758F9"/>
          <circle cx="1.66732" cy="102.667" r="1.66667" transform="rotate(180 1.66732 102.667)" fill="#3758F9"/>
          <circle cx="1.66732" cy="88.0001" r="1.66667" transform="rotate(180 1.66732 88.0001)" fill="#3758F9"/>
          <circle cx="1.66732" cy="73.3333" r="1.66667" transform="rotate(180 1.66732 73.3333)" fill="#3758F9"/>
          <circle cx="1.66732" cy="45.0001" r="1.66667" transform="rotate(180 1.66732 45.0001)" fill="#3758F9"/>
          <circle cx="1.66732" cy="16.0001" r="1.66667" transform="rotate(180 1.66732 16.0001)" fill="#3758F9"/>
          <circle cx="1.66732" cy="59.0001" r="1.66667" transform="rotate(180 1.66732 59.0001)" fill="#3758F9"/>
          <circle cx="1.66732" cy="30.6668" r="1.66667" transform="rotate(180 1.66732 30.6668)" fill="#3758F9"/>
          <circle cx="1.66732" cy="1.66683" r="1.66667" transform="rotate(180 1.66732 1.66683)" fill="#3758F9"/>
        </svg>
      </span>
        </div>
    </section>
    <!-- ====== FAQ Section End -->

    <!-- ====== Team Section Start -->
    <section id="team" class="overflow-hidden bg-gray-1 pb-12 pt-20 -2 lg:pb-[90px] lg:pt-[120px]">
        <div class="container mx-auto">
            <div class="flex flex-wrap -mx-4">
                <div class="w-full px-4">
                    <div class="mx-auto mb-[60px] max-w-[485px] text-center">
            <span class="block mb-2 text-lg font-semibold text-primary">
              Our Team Members
            </span>
                        <h2 class="mb-3 text-3xl font-bold leading-[1.2] text-dark  sm:text-4xl md:text-[40px]">
                            Our Creative Team
                        </h2>
                        <p class="text-base text-body-color ">
                            There are many variations of passages of Lorem Ipsum available
                            but the majority have suffered alteration in some form.
                        </p>
                    </div>
                </div>
            </div>
            <div class="flex flex-wrap justify-center -mx-4">
                <div class="w-full px-4 sm:w-1/2 lg:w-1/4 xl:w-1/4">
                    <div class="px-5 pt-12 pb-10 mb-8 bg-white group rounded-xl shadow-testimonial  ">
                        <div class="relative z-10 mx-auto mb-5 h-[120px] w-[120px]">
                            <img src="./assets/images/team/team-01.png" alt="team image"
                                 class="h-[120px] w-[120px] rounded-full"/>
                            <span
                                class="absolute bottom-0 left-0 w-10 h-10 transition-all rounded-full opacity-0 -z-10 bg-secondary group-hover:opacity-100"></span>
                            <span class="absolute top-0 right-0 transition-all opacity-0 -z-10 group-hover:opacity-100">
                <svg width="55" height="53" viewBox="0 0 55 53" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M12.5118 3.1009C13.3681 3.1009 14.0622 2.40674 14.0622 1.55045C14.0622 0.69416 13.3681 0 12.5118 0C11.6555 0 10.9613 0.69416 10.9613 1.55045C10.9613 2.40674 11.6555 3.1009 12.5118 3.1009Z"
                        fill="#3758F9"/>
                  <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M22.5038 3.1009C23.3601 3.1009 24.0543 2.40674 24.0543 1.55045C24.0543 0.69416 23.3601 0 22.5038 0C21.6475 0 20.9534 0.69416 20.9534 1.55045C20.9534 2.40674 21.6475 3.1009 22.5038 3.1009Z"
                        fill="#3758F9"/>
                  <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M32.4958 3.1009C33.3521 3.1009 34.0463 2.40674 34.0463 1.55045C34.0463 0.69416 33.3521 0 32.4958 0C31.6395 0 30.9454 0.69416 30.9454 1.55045C30.9454 2.40674 31.6395 3.1009 32.4958 3.1009Z"
                        fill="#3758F9"/>
                  <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M42.4875 3.1009C43.3438 3.1009 44.038 2.40674 44.038 1.55045C44.038 0.69416 43.3438 0 42.4875 0C41.6312 0 40.9371 0.69416 40.9371 1.55045C40.9371 2.40674 41.6312 3.1009 42.4875 3.1009Z"
                        fill="#3758F9"/>
                  <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M52.4795 3.1009C53.3358 3.1009 54.03 2.40674 54.03 1.55045C54.03 0.69416 53.3358 0 52.4795 0C51.6233 0 50.9291 0.69416 50.9291 1.55045C50.9291 2.40674 51.6233 3.1009 52.4795 3.1009Z"
                        fill="#3758F9"/>
                  <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M2.52045 13.0804C3.37674 13.0804 4.0709 12.3862 4.0709 11.5299C4.0709 10.6737 3.37674 9.97949 2.52045 9.97949C1.66416 9.97949 0.970001 10.6737 0.970001 11.5299C0.970001 12.3862 1.66416 13.0804 2.52045 13.0804Z"
                        fill="#3758F9"/>
                  <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M12.5118 13.0804C13.3681 13.0804 14.0622 12.3862 14.0622 11.5299C14.0622 10.6737 13.3681 9.97949 12.5118 9.97949C11.6555 9.97949 10.9613 10.6737 10.9613 11.5299C10.9613 12.3862 11.6555 13.0804 12.5118 13.0804Z"
                        fill="#3758F9"/>
                  <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M22.5038 13.0804C23.3601 13.0804 24.0543 12.3862 24.0543 11.5299C24.0543 10.6737 23.3601 9.97949 22.5038 9.97949C21.6475 9.97949 20.9534 10.6737 20.9534 11.5299C20.9534 12.3862 21.6475 13.0804 22.5038 13.0804Z"
                        fill="#3758F9"/>
                  <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M32.4958 13.0804C33.3521 13.0804 34.0463 12.3862 34.0463 11.5299C34.0463 10.6737 33.3521 9.97949 32.4958 9.97949C31.6395 9.97949 30.9454 10.6737 30.9454 11.5299C30.9454 12.3862 31.6395 13.0804 32.4958 13.0804Z"
                        fill="#3758F9"/>
                  <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M42.4875 13.0804C43.3438 13.0804 44.038 12.3862 44.038 11.5299C44.038 10.6737 43.3438 9.97949 42.4875 9.97949C41.6312 9.97949 40.9371 10.6737 40.9371 11.5299C40.9371 12.3862 41.6312 13.0804 42.4875 13.0804Z"
                        fill="#3758F9"/>
                  <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M52.4795 13.0804C53.3358 13.0804 54.03 12.3862 54.03 11.5299C54.03 10.6737 53.3358 9.97949 52.4795 9.97949C51.6233 9.97949 50.9291 10.6737 50.9291 11.5299C50.9291 12.3862 51.6233 13.0804 52.4795 13.0804Z"
                        fill="#3758F9"/>
                  <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M2.52045 23.0604C3.37674 23.0604 4.0709 22.3662 4.0709 21.5099C4.0709 20.6536 3.37674 19.9595 2.52045 19.9595C1.66416 19.9595 0.970001 20.6536 0.970001 21.5099C0.970001 22.3662 1.66416 23.0604 2.52045 23.0604Z"
                        fill="#3758F9"/>
                  <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M12.5118 23.0604C13.3681 23.0604 14.0622 22.3662 14.0622 21.5099C14.0622 20.6536 13.3681 19.9595 12.5118 19.9595C11.6555 19.9595 10.9613 20.6536 10.9613 21.5099C10.9613 22.3662 11.6555 23.0604 12.5118 23.0604Z"
                        fill="#3758F9"/>
                  <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M22.5038 23.0604C23.3601 23.0604 24.0543 22.3662 24.0543 21.5099C24.0543 20.6536 23.3601 19.9595 22.5038 19.9595C21.6475 19.9595 20.9534 20.6536 20.9534 21.5099C20.9534 22.3662 21.6475 23.0604 22.5038 23.0604Z"
                        fill="#3758F9"/>
                  <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M32.4958 23.0604C33.3521 23.0604 34.0463 22.3662 34.0463 21.5099C34.0463 20.6536 33.3521 19.9595 32.4958 19.9595C31.6395 19.9595 30.9454 20.6536 30.9454 21.5099C30.9454 22.3662 31.6395 23.0604 32.4958 23.0604Z"
                        fill="#3758F9"/>
                  <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M42.4875 23.0604C43.3438 23.0604 44.038 22.3662 44.038 21.5099C44.038 20.6536 43.3438 19.9595 42.4875 19.9595C41.6312 19.9595 40.9371 20.6536 40.9371 21.5099C40.9371 22.3662 41.6312 23.0604 42.4875 23.0604Z"
                        fill="#3758F9"/>
                  <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M52.4795 23.0604C53.3358 23.0604 54.03 22.3662 54.03 21.5099C54.03 20.6536 53.3358 19.9595 52.4795 19.9595C51.6233 19.9595 50.9291 20.6536 50.9291 21.5099C50.9291 22.3662 51.6233 23.0604 52.4795 23.0604Z"
                        fill="#3758F9"/>
                  <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M2.52045 33.0404C3.37674 33.0404 4.0709 32.3462 4.0709 31.4899C4.0709 30.6336 3.37674 29.9395 2.52045 29.9395C1.66416 29.9395 0.970001 30.6336 0.970001 31.4899C0.970001 32.3462 1.66416 33.0404 2.52045 33.0404Z"
                        fill="#3758F9"/>
                  <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M12.5118 33.0404C13.3681 33.0404 14.0622 32.3462 14.0622 31.4899C14.0622 30.6336 13.3681 29.9395 12.5118 29.9395C11.6555 29.9395 10.9613 30.6336 10.9613 31.4899C10.9613 32.3462 11.6555 33.0404 12.5118 33.0404Z"
                        fill="#3758F9"/>
                  <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M22.5038 33.0404C23.3601 33.0404 24.0543 32.3462 24.0543 31.4899C24.0543 30.6336 23.3601 29.9395 22.5038 29.9395C21.6475 29.9395 20.9534 30.6336 20.9534 31.4899C20.9534 32.3462 21.6475 33.0404 22.5038 33.0404Z"
                        fill="#3758F9"/>
                  <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M32.4958 33.0404C33.3521 33.0404 34.0463 32.3462 34.0463 31.4899C34.0463 30.6336 33.3521 29.9395 32.4958 29.9395C31.6395 29.9395 30.9454 30.6336 30.9454 31.4899C30.9454 32.3462 31.6395 33.0404 32.4958 33.0404Z"
                        fill="#3758F9"/>
                  <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M42.4875 33.0404C43.3438 33.0404 44.038 32.3462 44.038 31.4899C44.038 30.6336 43.3438 29.9395 42.4875 29.9395C41.6312 29.9395 40.9371 30.6336 40.9371 31.4899C40.9371 32.3462 41.6312 33.0404 42.4875 33.0404Z"
                        fill="#3758F9"/>
                  <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M52.4795 33.0404C53.3358 33.0404 54.03 32.3462 54.03 31.4899C54.03 30.6336 53.3358 29.9395 52.4795 29.9395C51.6233 29.9395 50.9291 30.6336 50.9291 31.4899C50.9291 32.3462 51.6233 33.0404 52.4795 33.0404Z"
                        fill="#3758F9"/>
                  <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M2.52045 43.0203C3.37674 43.0203 4.0709 42.3262 4.0709 41.4699C4.0709 40.6136 3.37674 39.9194 2.52045 39.9194C1.66416 39.9194 0.970001 40.6136 0.970001 41.4699C0.970001 42.3262 1.66416 43.0203 2.52045 43.0203Z"
                        fill="#3758F9"/>
                  <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M12.5118 43.0203C13.3681 43.0203 14.0622 42.3262 14.0622 41.4699C14.0622 40.6136 13.3681 39.9194 12.5118 39.9194C11.6555 39.9194 10.9613 40.6136 10.9613 41.4699C10.9613 42.3262 11.6555 43.0203 12.5118 43.0203Z"
                        fill="#3758F9"/>
                  <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M22.5038 43.0203C23.3601 43.0203 24.0543 42.3262 24.0543 41.4699C24.0543 40.6136 23.3601 39.9194 22.5038 39.9194C21.6475 39.9194 20.9534 40.6136 20.9534 41.4699C20.9534 42.3262 21.6475 43.0203 22.5038 43.0203Z"
                        fill="#3758F9"/>
                  <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M32.4958 43.0203C33.3521 43.0203 34.0463 42.3262 34.0463 41.4699C34.0463 40.6136 33.3521 39.9194 32.4958 39.9194C31.6395 39.9194 30.9454 40.6136 30.9454 41.4699C30.9454 42.3262 31.6395 43.0203 32.4958 43.0203Z"
                        fill="#3758F9"/>
                  <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M42.4875 43.0203C43.3438 43.0203 44.038 42.3262 44.038 41.4699C44.038 40.6136 43.3438 39.9194 42.4875 39.9194C41.6312 39.9194 40.9371 40.6136 40.9371 41.4699C40.9371 42.3262 41.6312 43.0203 42.4875 43.0203Z"
                        fill="#3758F9"/>
                  <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M52.4795 43.0203C53.3358 43.0203 54.03 42.3262 54.03 41.4699C54.03 40.6136 53.3358 39.9194 52.4795 39.9194C51.6233 39.9194 50.9291 40.6136 50.9291 41.4699C50.9291 42.3262 51.6233 43.0203 52.4795 43.0203Z"
                        fill="#3758F9"/>
                  <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M2.52045 53.0001C3.37674 53.0001 4.0709 52.3059 4.0709 51.4496C4.0709 50.5933 3.37674 49.8992 2.52045 49.8992C1.66416 49.8992 0.970001 50.5933 0.970001 51.4496C0.970001 52.3059 1.66416 53.0001 2.52045 53.0001Z"
                        fill="#3758F9"/>
                  <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M12.5118 53.0001C13.3681 53.0001 14.0622 52.3059 14.0622 51.4496C14.0622 50.5933 13.3681 49.8992 12.5118 49.8992C11.6555 49.8992 10.9613 50.5933 10.9613 51.4496C10.9613 52.3059 11.6555 53.0001 12.5118 53.0001Z"
                        fill="#3758F9"/>
                  <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M22.5038 53.0001C23.3601 53.0001 24.0543 52.3059 24.0543 51.4496C24.0543 50.5933 23.3601 49.8992 22.5038 49.8992C21.6475 49.8992 20.9534 50.5933 20.9534 51.4496C20.9534 52.3059 21.6475 53.0001 22.5038 53.0001Z"
                        fill="#3758F9"/>
                  <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M32.4958 53.0001C33.3521 53.0001 34.0463 52.3059 34.0463 51.4496C34.0463 50.5933 33.3521 49.8992 32.4958 49.8992C31.6395 49.8992 30.9454 50.5933 30.9454 51.4496C30.9454 52.3059 31.6395 53.0001 32.4958 53.0001Z"
                        fill="#3758F9"/>
                  <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M42.4875 53.0001C43.3438 53.0001 44.038 52.3059 44.038 51.4496C44.038 50.5933 43.3438 49.8992 42.4875 49.8992C41.6312 49.8992 40.9371 50.5933 40.9371 51.4496C40.9371 52.3059 41.6312 53.0001 42.4875 53.0001Z"
                        fill="#3758F9"/>
                  <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M52.4795 53.0001C53.3358 53.0001 54.03 52.3059 54.03 51.4496C54.03 50.5933 53.3358 49.8992 52.4795 49.8992C51.6233 49.8992 50.9291 50.5933 50.9291 51.4496C50.9291 52.3059 51.6233 53.0001 52.4795 53.0001Z"
                        fill="#3758F9"/>
                </svg>
              </span>
                        </div>
                        <div class="text-center">
                            <h4 class="mb-1 text-lg font-semibold text-dark ">
                                Melissa Tatcher
                            </h4>
                            <p class="mb-5 text-sm text-body-color ">
                                Marketing Expert
                            </p>
                            <div class="flex items-center justify-center gap-5">
                                <a href="javascript:void(0)" class="text-dark-6 hover:text-primary">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                         xmlns="http://www.w3.org/2000/svg"
                                         class="fill-current">
                                        <path
                                            d="M13.3315 7.25625H11.7565H11.194V6.69375V4.95V4.3875H11.7565H12.9377C13.2471 4.3875 13.5002 4.1625 13.5002 3.825V0.84375C13.5002 0.534375 13.2752 0.28125 12.9377 0.28125H10.8846C8.66272 0.28125 7.11584 1.85625 7.11584 4.19062V6.6375V7.2H6.55334H4.64084C4.24709 7.2 3.88147 7.50937 3.88147 7.95937V9.98438C3.88147 10.3781 4.19084 10.7438 4.64084 10.7438H6.49709H7.05959V11.3063V16.9594C7.05959 17.3531 7.36897 17.7188 7.81897 17.7188H10.4627C10.6315 17.7188 10.7721 17.6344 10.8846 17.5219C10.9971 17.4094 11.0815 17.2125 11.0815 17.0437V11.3344V10.7719H11.6721H12.9377C13.3033 10.7719 13.5846 10.5469 13.6408 10.2094V10.1813V10.1531L14.0346 8.2125C14.0627 8.01562 14.0346 7.79063 13.8658 7.56562C13.8096 7.425 13.5565 7.28437 13.3315 7.25625Z"
                                            fill=""/>
                                    </svg>
                                </a>
                                <a href="javascript:void(0)" class="text-dark-6 hover:text-primary">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                         xmlns="http://www.w3.org/2000/svg"
                                         class="fill-current">
                                        <path
                                            d="M16.4647 4.83752C16.565 4.72065 16.4343 4.56793 16.2859 4.62263C15.9549 4.74474 15.6523 4.82528 15.2049 4.875C15.7552 4.56855 16.0112 4.13054 16.2194 3.59407C16.2696 3.46467 16.1182 3.34725 15.9877 3.40907C15.458 3.66023 14.8864 3.84658 14.2854 3.95668C13.6913 3.3679 12.8445 3 11.9077 3C10.1089 3 8.65027 4.35658 8.65027 6.02938C8.65027 6.26686 8.67937 6.49818 8.73427 6.71966C6.14854 6.59919 3.84286 5.49307 2.24098 3.79696C2.13119 3.68071 1.93197 3.69614 1.86361 3.83792C1.68124 4.21619 1.57957 4.63582 1.57957 5.07762C1.57957 6.12843 2.15446 7.05557 3.02837 7.59885C2.63653 7.58707 2.2618 7.51073 1.91647 7.38116C1.74834 7.31808 1.5556 7.42893 1.57819 7.59847C1.75162 8.9004 2.80568 9.97447 4.16624 10.2283C3.89302 10.2978 3.60524 10.3347 3.30754 10.3347C3.23536 10.3347 3.16381 10.3324 3.0929 10.3281C2.91247 10.3169 2.76583 10.4783 2.84319 10.6328C3.35357 11.6514 4.45563 12.3625 5.73809 12.3847C4.62337 13.1974 3.21889 13.6816 1.69269 13.6816C1.50451 13.6816 1.42378 13.9235 1.59073 14.0056C2.88015 14.6394 4.34854 15 5.90878 15C11.9005 15 15.1765 10.384 15.1765 6.38067C15.1765 6.24963 15.1732 6.11858 15.1672 5.98877C15.6535 5.66205 16.0907 5.27354 16.4647 4.83752Z"
                                            fill=""/>
                                    </svg>
                                </a>
                                <a href="javascript:void(0)" class="text-dark-6 hover:text-primary">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                         xmlns="http://www.w3.org/2000/svg"
                                         class="fill-current">
                                        <path
                                            d="M9.02429 11.8066C10.5742 11.8066 11.8307 10.5501 11.8307 9.00018C11.8307 7.45022 10.5742 6.19373 9.02429 6.19373C7.47433 6.19373 6.21783 7.45022 6.21783 9.00018C6.21783 10.5501 7.47433 11.8066 9.02429 11.8066Z"
                                            fill=""/>
                                        <path
                                            d="M12.0726 1.5H5.92742C3.48387 1.5 1.5 3.48387 1.5 5.92742V12.0242C1.5 14.5161 3.48387 16.5 5.92742 16.5H12.0242C14.5161 16.5 16.5 14.5161 16.5 12.0726V5.92742C16.5 3.48387 14.5161 1.5 12.0726 1.5ZM9.02419 12.6774C6.96774 12.6774 5.34677 11.0081 5.34677 9C5.34677 6.99194 6.99194 5.32258 9.02419 5.32258C11.0323 5.32258 12.6774 6.99194 12.6774 9C12.6774 11.0081 11.0565 12.6774 9.02419 12.6774ZM14.1048 5.66129C13.8629 5.92742 13.5 6.07258 13.0887 6.07258C12.7258 6.07258 12.3629 5.92742 12.0726 5.66129C11.8065 5.39516 11.6613 5.05645 11.6613 4.64516C11.6613 4.23387 11.8065 3.91935 12.0726 3.62903C12.3387 3.33871 12.6774 3.19355 13.0887 3.19355C13.4516 3.19355 13.8387 3.33871 14.1048 3.60484C14.3468 3.91935 14.5161 4.28226 14.5161 4.66935C14.4919 5.05645 14.3468 5.39516 14.1048 5.66129Z"
                                            fill=""/>
                                        <path
                                            d="M13.1135 4.06433C12.799 4.06433 12.5329 4.33046 12.5329 4.64498C12.5329 4.95949 12.799 5.22562 13.1135 5.22562C13.428 5.22562 13.6942 4.95949 13.6942 4.64498C13.6942 4.33046 13.4522 4.06433 13.1135 4.06433Z"
                                            fill=""/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 sm:w-1/2 lg:w-1/4 xl:w-1/4">
                    <div class="px-5 pt-12 pb-10 mb-8 bg-white group rounded-xl shadow-testimonial  ">
                        <div class="relative z-10 mx-auto mb-5 h-[120px] w-[120px]">
                            <img src="https://cdn.tailgrids.com/1.0/assets/images/team/image-07/image-02.png"
                                 alt="team image"
                                 class="h-[120px] w-[120px] rounded-full"/>
                            <span
                                class="absolute bottom-0 left-0 w-10 h-10 transition-all rounded-full opacity-0 -z-10 bg-secondary group-hover:opacity-100"></span>
                            <span class="absolute top-0 right-0 transition-all opacity-0 -z-10 group-hover:opacity-100">
                <svg width="45" height="53" viewBox="0 0 45 53" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M2.54166 3.1009C3.39795 3.1009 4.09211 2.40674 4.09211 1.55045C4.09211 0.69416 3.39795 0 2.54166 0C1.68537 0 0.991211 0.69416 0.991211 1.55045C0.991211 2.40674 1.68537 3.1009 2.54166 3.1009Z"
                        fill="#3056D3"/>
                  <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M12.5338 3.1009C13.3901 3.1009 14.0843 2.40674 14.0843 1.55045C14.0843 0.69416 13.3901 0 12.5338 0C11.6776 0 10.9834 0.69416 10.9834 1.55045C10.9834 2.40674 11.6776 3.1009 12.5338 3.1009Z"
                        fill="#3056D3"/>
                  <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M22.526 3.1009C23.3823 3.1009 24.0765 2.40674 24.0765 1.55045C24.0765 0.69416 23.3823 0 22.526 0C21.6697 0 20.9756 0.69416 20.9756 1.55045C20.9756 2.40674 21.6697 3.1009 22.526 3.1009Z"
                        fill="#3056D3"/>
                  <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M32.5177 3.1009C33.374 3.1009 34.0682 2.40674 34.0682 1.55045C34.0682 0.69416 33.374 0 32.5177 0C31.6614 0 30.9673 0.69416 30.9673 1.55045C30.9673 2.40674 31.6614 3.1009 32.5177 3.1009Z"
                        fill="#3056D3"/>
                  <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M42.5094 3.1009C43.3657 3.1009 44.0599 2.40674 44.0599 1.55045C44.0599 0.69416 43.3657 0 42.5094 0C41.6531 0 40.959 0.69416 40.959 1.55045C40.959 2.40674 41.6531 3.1009 42.5094 3.1009Z"
                        fill="#3056D3"/>
                  <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M12.5338 13.0804C13.3901 13.0804 14.0843 12.3862 14.0843 11.5299C14.0843 10.6737 13.3901 9.97949 12.5338 9.97949C11.6776 9.97949 10.9834 10.6737 10.9834 11.5299C10.9834 12.3862 11.6776 13.0804 12.5338 13.0804Z"
                        fill="#3056D3"/>
                  <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M22.526 13.0804C23.3823 13.0804 24.0765 12.3862 24.0765 11.5299C24.0765 10.6737 23.3823 9.97949 22.526 9.97949C21.6697 9.97949 20.9756 10.6737 20.9756 11.5299C20.9756 12.3862 21.6697 13.0804 22.526 13.0804Z"
                        fill="#3056D3"/>
                  <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M32.5177 13.0804C33.374 13.0804 34.0682 12.3862 34.0682 11.5299C34.0682 10.6737 33.374 9.97949 32.5177 9.97949C31.6614 9.97949 30.9673 10.6737 30.9673 11.5299C30.9673 12.3862 31.6614 13.0804 32.5177 13.0804Z"
                        fill="#3056D3"/>
                  <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M42.5094 13.0804C43.3657 13.0804 44.0599 12.3862 44.0599 11.5299C44.0599 10.6737 43.3657 9.97949 42.5094 9.97949C41.6531 9.97949 40.959 10.6737 40.959 11.5299C40.959 12.3862 41.6531 13.0804 42.5094 13.0804Z"
                        fill="#3056D3"/>
                  <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M22.526 23.0604C23.3823 23.0604 24.0765 22.3662 24.0765 21.5099C24.0765 20.6536 23.3823 19.9595 22.526 19.9595C21.6697 19.9595 20.9756 20.6536 20.9756 21.5099C20.9756 22.3662 21.6697 23.0604 22.526 23.0604Z"
                        fill="#3056D3"/>
                  <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M32.5177 23.0604C33.374 23.0604 34.0682 22.3662 34.0682 21.5099C34.0682 20.6536 33.374 19.9595 32.5177 19.9595C31.6614 19.9595 30.9673 20.6536 30.9673 21.5099C30.9673 22.3662 31.6614 23.0604 32.5177 23.0604Z"
                        fill="#3056D3"/>
                  <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M42.5094 23.0604C43.3657 23.0604 44.0599 22.3662 44.0599 21.5099C44.0599 20.6536 43.3657 19.9595 42.5094 19.9595C41.6531 19.9595 40.959 20.6536 40.959 21.5099C40.959 22.3662 41.6531 23.0604 42.5094 23.0604Z"
                        fill="#3056D3"/>
                  <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M32.5177 33.0404C33.374 33.0404 34.0682 32.3462 34.0682 31.4899C34.0682 30.6336 33.374 29.9395 32.5177 29.9395C31.6614 29.9395 30.9673 30.6336 30.9673 31.4899C30.9673 32.3462 31.6614 33.0404 32.5177 33.0404Z"
                        fill="#3056D3"/>
                  <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M42.5094 33.0404C43.3657 33.0404 44.0599 32.3462 44.0599 31.4899C44.0599 30.6336 43.3657 29.9395 42.5094 29.9395C41.6531 29.9395 40.959 30.6336 40.959 31.4899C40.959 32.3462 41.6531 33.0404 42.5094 33.0404Z"
                        fill="#3056D3"/>
                  <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M32.5177 43.0203C33.374 43.0203 34.0682 42.3262 34.0682 41.4699C34.0682 40.6136 33.374 39.9194 32.5177 39.9194C31.6614 39.9194 30.9673 40.6136 30.9673 41.4699C30.9673 42.3262 31.6614 43.0203 32.5177 43.0203Z"
                        fill="#3056D3"/>
                  <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M42.5094 43.0203C43.3657 43.0203 44.0599 42.3262 44.0599 41.4699C44.0599 40.6136 43.3657 39.9194 42.5094 39.9194C41.6531 39.9194 40.959 40.6136 40.959 41.4699C40.959 42.3262 41.6531 43.0203 42.5094 43.0203Z"
                        fill="#3056D3"/>
                  <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M42.5094 52.9998C43.3657 52.9998 44.0599 52.3057 44.0599 51.4494C44.0599 50.5931 43.3657 49.8989 42.5094 49.8989C41.6531 49.8989 40.959 50.5931 40.959 51.4494C40.959 52.3057 41.6531 52.9998 42.5094 52.9998Z"
                        fill="#3056D3"/>
                </svg>
              </span>
                        </div>
                        <div class="text-center">
                            <h4 class="mb-1 text-lg font-semibold text-dark ">
                                Stuard Ferrel
                            </h4>
                            <p class="mb-5 text-sm text-body-color ">
                                Digital Marketer
                            </p>
                            <div class="flex items-center justify-center gap-5">
                                <a href="javascript:void(0)" class="text-dark-6 hover:text-primary">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                         xmlns="http://www.w3.org/2000/svg"
                                         class="fill-current">
                                        <path
                                            d="M13.3315 7.25625H11.7565H11.194V6.69375V4.95V4.3875H11.7565H12.9377C13.2471 4.3875 13.5002 4.1625 13.5002 3.825V0.84375C13.5002 0.534375 13.2752 0.28125 12.9377 0.28125H10.8846C8.66272 0.28125 7.11584 1.85625 7.11584 4.19062V6.6375V7.2H6.55334H4.64084C4.24709 7.2 3.88147 7.50937 3.88147 7.95937V9.98438C3.88147 10.3781 4.19084 10.7438 4.64084 10.7438H6.49709H7.05959V11.3063V16.9594C7.05959 17.3531 7.36897 17.7188 7.81897 17.7188H10.4627C10.6315 17.7188 10.7721 17.6344 10.8846 17.5219C10.9971 17.4094 11.0815 17.2125 11.0815 17.0437V11.3344V10.7719H11.6721H12.9377C13.3033 10.7719 13.5846 10.5469 13.6408 10.2094V10.1813V10.1531L14.0346 8.2125C14.0627 8.01562 14.0346 7.79063 13.8658 7.56562C13.8096 7.425 13.5565 7.28437 13.3315 7.25625Z"
                                            fill=""/>
                                    </svg>
                                </a>
                                <a href="javascript:void(0)" class="text-dark-6 hover:text-primary">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                         xmlns="http://www.w3.org/2000/svg"
                                         class="fill-current">
                                        <path
                                            d="M16.4647 4.83752C16.565 4.72065 16.4343 4.56793 16.2859 4.62263C15.9549 4.74474 15.6523 4.82528 15.2049 4.875C15.7552 4.56855 16.0112 4.13054 16.2194 3.59407C16.2696 3.46467 16.1182 3.34725 15.9877 3.40907C15.458 3.66023 14.8864 3.84658 14.2854 3.95668C13.6913 3.3679 12.8445 3 11.9077 3C10.1089 3 8.65027 4.35658 8.65027 6.02938C8.65027 6.26686 8.67937 6.49818 8.73427 6.71966C6.14854 6.59919 3.84286 5.49307 2.24098 3.79696C2.13119 3.68071 1.93197 3.69614 1.86361 3.83792C1.68124 4.21619 1.57957 4.63582 1.57957 5.07762C1.57957 6.12843 2.15446 7.05557 3.02837 7.59885C2.63653 7.58707 2.2618 7.51073 1.91647 7.38116C1.74834 7.31808 1.5556 7.42893 1.57819 7.59847C1.75162 8.9004 2.80568 9.97447 4.16624 10.2283C3.89302 10.2978 3.60524 10.3347 3.30754 10.3347C3.23536 10.3347 3.16381 10.3324 3.0929 10.3281C2.91247 10.3169 2.76583 10.4783 2.84319 10.6328C3.35357 11.6514 4.45563 12.3625 5.73809 12.3847C4.62337 13.1974 3.21889 13.6816 1.69269 13.6816C1.50451 13.6816 1.42378 13.9235 1.59073 14.0056C2.88015 14.6394 4.34854 15 5.90878 15C11.9005 15 15.1765 10.384 15.1765 6.38067C15.1765 6.24963 15.1732 6.11858 15.1672 5.98877C15.6535 5.66205 16.0907 5.27354 16.4647 4.83752Z"
                                            fill=""/>
                                    </svg>
                                </a>
                                <a href="javascript:void(0)" class="text-dark-6 hover:text-primary">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                         xmlns="http://www.w3.org/2000/svg"
                                         class="fill-current">
                                        <path
                                            d="M9.02429 11.8066C10.5742 11.8066 11.8307 10.5501 11.8307 9.00018C11.8307 7.45022 10.5742 6.19373 9.02429 6.19373C7.47433 6.19373 6.21783 7.45022 6.21783 9.00018C6.21783 10.5501 7.47433 11.8066 9.02429 11.8066Z"
                                            fill=""/>
                                        <path
                                            d="M12.0726 1.5H5.92742C3.48387 1.5 1.5 3.48387 1.5 5.92742V12.0242C1.5 14.5161 3.48387 16.5 5.92742 16.5H12.0242C14.5161 16.5 16.5 14.5161 16.5 12.0726V5.92742C16.5 3.48387 14.5161 1.5 12.0726 1.5ZM9.02419 12.6774C6.96774 12.6774 5.34677 11.0081 5.34677 9C5.34677 6.99194 6.99194 5.32258 9.02419 5.32258C11.0323 5.32258 12.6774 6.99194 12.6774 9C12.6774 11.0081 11.0565 12.6774 9.02419 12.6774ZM14.1048 5.66129C13.8629 5.92742 13.5 6.07258 13.0887 6.07258C12.7258 6.07258 12.3629 5.92742 12.0726 5.66129C11.8065 5.39516 11.6613 5.05645 11.6613 4.64516C11.6613 4.23387 11.8065 3.91935 12.0726 3.62903C12.3387 3.33871 12.6774 3.19355 13.0887 3.19355C13.4516 3.19355 13.8387 3.33871 14.1048 3.60484C14.3468 3.91935 14.5161 4.28226 14.5161 4.66935C14.4919 5.05645 14.3468 5.39516 14.1048 5.66129Z"
                                            fill=""/>
                                        <path
                                            d="M13.1135 4.06433C12.799 4.06433 12.5329 4.33046 12.5329 4.64498C12.5329 4.95949 12.799 5.22562 13.1135 5.22562C13.428 5.22562 13.6942 4.95949 13.6942 4.64498C13.6942 4.33046 13.4522 4.06433 13.1135 4.06433Z"
                                            fill=""/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 sm:w-1/2 lg:w-1/4 xl:w-1/4">
                    <div class="px-5 pt-12 pb-10 mb-8 bg-white group rounded-xl shadow-testimonial  ">
                        <div class="relative z-10 mx-auto mb-5 h-[120px] w-[120px]">
                            <img src="https://cdn.tailgrids.com/1.0/assets/images/team/image-07/image-03.png"
                                 alt="team image"
                                 class="h-[120px] w-[120px] rounded-full"/>
                            <span
                                class="absolute bottom-0 left-0 w-10 h-10 transition-all rounded-full opacity-0 -z-10 bg-secondary group-hover:opacity-100"></span>
                            <span class="absolute top-0 right-0 transition-all opacity-0 -z-10 group-hover:opacity-100">
                <svg width="45" height="53" viewBox="0 0 45 53" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M2.54166 3.1009C3.39795 3.1009 4.09211 2.40674 4.09211 1.55045C4.09211 0.69416 3.39795 0 2.54166 0C1.68537 0 0.991211 0.69416 0.991211 1.55045C0.991211 2.40674 1.68537 3.1009 2.54166 3.1009Z"
                        fill="#3056D3"/>
                  <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M12.5338 3.1009C13.3901 3.1009 14.0843 2.40674 14.0843 1.55045C14.0843 0.69416 13.3901 0 12.5338 0C11.6776 0 10.9834 0.69416 10.9834 1.55045C10.9834 2.40674 11.6776 3.1009 12.5338 3.1009Z"
                        fill="#3056D3"/>
                  <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M22.526 3.1009C23.3823 3.1009 24.0765 2.40674 24.0765 1.55045C24.0765 0.69416 23.3823 0 22.526 0C21.6697 0 20.9756 0.69416 20.9756 1.55045C20.9756 2.40674 21.6697 3.1009 22.526 3.1009Z"
                        fill="#3056D3"/>
                  <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M32.5177 3.1009C33.374 3.1009 34.0682 2.40674 34.0682 1.55045C34.0682 0.69416 33.374 0 32.5177 0C31.6614 0 30.9673 0.69416 30.9673 1.55045C30.9673 2.40674 31.6614 3.1009 32.5177 3.1009Z"
                        fill="#3056D3"/>
                  <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M42.5094 3.1009C43.3657 3.1009 44.0599 2.40674 44.0599 1.55045C44.0599 0.69416 43.3657 0 42.5094 0C41.6531 0 40.959 0.69416 40.959 1.55045C40.959 2.40674 41.6531 3.1009 42.5094 3.1009Z"
                        fill="#3056D3"/>
                  <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M12.5338 13.0804C13.3901 13.0804 14.0843 12.3862 14.0843 11.5299C14.0843 10.6737 13.3901 9.97949 12.5338 9.97949C11.6776 9.97949 10.9834 10.6737 10.9834 11.5299C10.9834 12.3862 11.6776 13.0804 12.5338 13.0804Z"
                        fill="#3056D3"/>
                  <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M22.526 13.0804C23.3823 13.0804 24.0765 12.3862 24.0765 11.5299C24.0765 10.6737 23.3823 9.97949 22.526 9.97949C21.6697 9.97949 20.9756 10.6737 20.9756 11.5299C20.9756 12.3862 21.6697 13.0804 22.526 13.0804Z"
                        fill="#3056D3"/>
                  <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M32.5177 13.0804C33.374 13.0804 34.0682 12.3862 34.0682 11.5299C34.0682 10.6737 33.374 9.97949 32.5177 9.97949C31.6614 9.97949 30.9673 10.6737 30.9673 11.5299C30.9673 12.3862 31.6614 13.0804 32.5177 13.0804Z"
                        fill="#3056D3"/>
                  <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M42.5094 13.0804C43.3657 13.0804 44.0599 12.3862 44.0599 11.5299C44.0599 10.6737 43.3657 9.97949 42.5094 9.97949C41.6531 9.97949 40.959 10.6737 40.959 11.5299C40.959 12.3862 41.6531 13.0804 42.5094 13.0804Z"
                        fill="#3056D3"/>
                  <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M22.526 23.0604C23.3823 23.0604 24.0765 22.3662 24.0765 21.5099C24.0765 20.6536 23.3823 19.9595 22.526 19.9595C21.6697 19.9595 20.9756 20.6536 20.9756 21.5099C20.9756 22.3662 21.6697 23.0604 22.526 23.0604Z"
                        fill="#3056D3"/>
                  <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M32.5177 23.0604C33.374 23.0604 34.0682 22.3662 34.0682 21.5099C34.0682 20.6536 33.374 19.9595 32.5177 19.9595C31.6614 19.9595 30.9673 20.6536 30.9673 21.5099C30.9673 22.3662 31.6614 23.0604 32.5177 23.0604Z"
                        fill="#3056D3"/>
                  <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M42.5094 23.0604C43.3657 23.0604 44.0599 22.3662 44.0599 21.5099C44.0599 20.6536 43.3657 19.9595 42.5094 19.9595C41.6531 19.9595 40.959 20.6536 40.959 21.5099C40.959 22.3662 41.6531 23.0604 42.5094 23.0604Z"
                        fill="#3056D3"/>
                  <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M32.5177 33.0404C33.374 33.0404 34.0682 32.3462 34.0682 31.4899C34.0682 30.6336 33.374 29.9395 32.5177 29.9395C31.6614 29.9395 30.9673 30.6336 30.9673 31.4899C30.9673 32.3462 31.6614 33.0404 32.5177 33.0404Z"
                        fill="#3056D3"/>
                  <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M42.5094 33.0404C43.3657 33.0404 44.0599 32.3462 44.0599 31.4899C44.0599 30.6336 43.3657 29.9395 42.5094 29.9395C41.6531 29.9395 40.959 30.6336 40.959 31.4899C40.959 32.3462 41.6531 33.0404 42.5094 33.0404Z"
                        fill="#3056D3"/>
                  <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M32.5177 43.0203C33.374 43.0203 34.0682 42.3262 34.0682 41.4699C34.0682 40.6136 33.374 39.9194 32.5177 39.9194C31.6614 39.9194 30.9673 40.6136 30.9673 41.4699C30.9673 42.3262 31.6614 43.0203 32.5177 43.0203Z"
                        fill="#3056D3"/>
                  <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M42.5094 43.0203C43.3657 43.0203 44.0599 42.3262 44.0599 41.4699C44.0599 40.6136 43.3657 39.9194 42.5094 39.9194C41.6531 39.9194 40.959 40.6136 40.959 41.4699C40.959 42.3262 41.6531 43.0203 42.5094 43.0203Z"
                        fill="#3056D3"/>
                  <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M42.5094 52.9998C43.3657 52.9998 44.0599 52.3057 44.0599 51.4494C44.0599 50.5931 43.3657 49.8989 42.5094 49.8989C41.6531 49.8989 40.959 50.5931 40.959 51.4494C40.959 52.3057 41.6531 52.9998 42.5094 52.9998Z"
                        fill="#3056D3"/>
                </svg>
              </span>
                        </div>
                        <div class="text-center">
                            <h4 class="mb-1 text-lg font-semibold text-dark ">
                                Eva Hudson
                            </h4>
                            <p class="mb-5 text-sm text-body-color ">
                                Creative Designer
                            </p>
                            <div class="flex items-center justify-center gap-5">
                                <a href="javascript:void(0)" class="text-dark-6 hover:text-primary">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                         xmlns="http://www.w3.org/2000/svg"
                                         class="fill-current">
                                        <path
                                            d="M13.3315 7.25625H11.7565H11.194V6.69375V4.95V4.3875H11.7565H12.9377C13.2471 4.3875 13.5002 4.1625 13.5002 3.825V0.84375C13.5002 0.534375 13.2752 0.28125 12.9377 0.28125H10.8846C8.66272 0.28125 7.11584 1.85625 7.11584 4.19062V6.6375V7.2H6.55334H4.64084C4.24709 7.2 3.88147 7.50937 3.88147 7.95937V9.98438C3.88147 10.3781 4.19084 10.7438 4.64084 10.7438H6.49709H7.05959V11.3063V16.9594C7.05959 17.3531 7.36897 17.7188 7.81897 17.7188H10.4627C10.6315 17.7188 10.7721 17.6344 10.8846 17.5219C10.9971 17.4094 11.0815 17.2125 11.0815 17.0437V11.3344V10.7719H11.6721H12.9377C13.3033 10.7719 13.5846 10.5469 13.6408 10.2094V10.1813V10.1531L14.0346 8.2125C14.0627 8.01562 14.0346 7.79063 13.8658 7.56562C13.8096 7.425 13.5565 7.28437 13.3315 7.25625Z"
                                            fill=""/>
                                    </svg>
                                </a>
                                <a href="javascript:void(0)" class="text-dark-6 hover:text-primary">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                         xmlns="http://www.w3.org/2000/svg"
                                         class="fill-current">
                                        <path
                                            d="M16.4647 4.83752C16.565 4.72065 16.4343 4.56793 16.2859 4.62263C15.9549 4.74474 15.6523 4.82528 15.2049 4.875C15.7552 4.56855 16.0112 4.13054 16.2194 3.59407C16.2696 3.46467 16.1182 3.34725 15.9877 3.40907C15.458 3.66023 14.8864 3.84658 14.2854 3.95668C13.6913 3.3679 12.8445 3 11.9077 3C10.1089 3 8.65027 4.35658 8.65027 6.02938C8.65027 6.26686 8.67937 6.49818 8.73427 6.71966C6.14854 6.59919 3.84286 5.49307 2.24098 3.79696C2.13119 3.68071 1.93197 3.69614 1.86361 3.83792C1.68124 4.21619 1.57957 4.63582 1.57957 5.07762C1.57957 6.12843 2.15446 7.05557 3.02837 7.59885C2.63653 7.58707 2.2618 7.51073 1.91647 7.38116C1.74834 7.31808 1.5556 7.42893 1.57819 7.59847C1.75162 8.9004 2.80568 9.97447 4.16624 10.2283C3.89302 10.2978 3.60524 10.3347 3.30754 10.3347C3.23536 10.3347 3.16381 10.3324 3.0929 10.3281C2.91247 10.3169 2.76583 10.4783 2.84319 10.6328C3.35357 11.6514 4.45563 12.3625 5.73809 12.3847C4.62337 13.1974 3.21889 13.6816 1.69269 13.6816C1.50451 13.6816 1.42378 13.9235 1.59073 14.0056C2.88015 14.6394 4.34854 15 5.90878 15C11.9005 15 15.1765 10.384 15.1765 6.38067C15.1765 6.24963 15.1732 6.11858 15.1672 5.98877C15.6535 5.66205 16.0907 5.27354 16.4647 4.83752Z"
                                            fill=""/>
                                    </svg>
                                </a>
                                <a href="javascript:void(0)" class="text-dark-6 hover:text-primary">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                         xmlns="http://www.w3.org/2000/svg"
                                         class="fill-current">
                                        <path
                                            d="M9.02429 11.8066C10.5742 11.8066 11.8307 10.5501 11.8307 9.00018C11.8307 7.45022 10.5742 6.19373 9.02429 6.19373C7.47433 6.19373 6.21783 7.45022 6.21783 9.00018C6.21783 10.5501 7.47433 11.8066 9.02429 11.8066Z"
                                            fill=""/>
                                        <path
                                            d="M12.0726 1.5H5.92742C3.48387 1.5 1.5 3.48387 1.5 5.92742V12.0242C1.5 14.5161 3.48387 16.5 5.92742 16.5H12.0242C14.5161 16.5 16.5 14.5161 16.5 12.0726V5.92742C16.5 3.48387 14.5161 1.5 12.0726 1.5ZM9.02419 12.6774C6.96774 12.6774 5.34677 11.0081 5.34677 9C5.34677 6.99194 6.99194 5.32258 9.02419 5.32258C11.0323 5.32258 12.6774 6.99194 12.6774 9C12.6774 11.0081 11.0565 12.6774 9.02419 12.6774ZM14.1048 5.66129C13.8629 5.92742 13.5 6.07258 13.0887 6.07258C12.7258 6.07258 12.3629 5.92742 12.0726 5.66129C11.8065 5.39516 11.6613 5.05645 11.6613 4.64516C11.6613 4.23387 11.8065 3.91935 12.0726 3.62903C12.3387 3.33871 12.6774 3.19355 13.0887 3.19355C13.4516 3.19355 13.8387 3.33871 14.1048 3.60484C14.3468 3.91935 14.5161 4.28226 14.5161 4.66935C14.4919 5.05645 14.3468 5.39516 14.1048 5.66129Z"
                                            fill=""/>
                                        <path
                                            d="M13.1135 4.06433C12.799 4.06433 12.5329 4.33046 12.5329 4.64498C12.5329 4.95949 12.799 5.22562 13.1135 5.22562C13.428 5.22562 13.6942 4.95949 13.6942 4.64498C13.6942 4.33046 13.4522 4.06433 13.1135 4.06433Z"
                                            fill=""/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 sm:w-1/2 lg:w-1/4 xl:w-1/4">
                    <div class="px-5 pt-12 pb-10 mb-8 bg-white group rounded-xl shadow-testimonial  ">
                        <div class="relative z-10 mx-auto mb-5 h-[120px] w-[120px]">
                            <img src="https://cdn.tailgrids.com/1.0/assets/images/team/image-07/image-04.png"
                                 alt="team image"
                                 class="h-[120px] w-[120px] rounded-full"/>
                            <span
                                class="absolute bottom-0 left-0 w-10 h-10 transition-all rounded-full opacity-0 -z-10 bg-secondary group-hover:opacity-100"></span>
                            <span class="absolute top-0 right-0 transition-all opacity-0 -z-10 group-hover:opacity-100">
                <svg width="45" height="53" viewBox="0 0 45 53" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M2.54166 3.1009C3.39795 3.1009 4.09211 2.40674 4.09211 1.55045C4.09211 0.69416 3.39795 0 2.54166 0C1.68537 0 0.991211 0.69416 0.991211 1.55045C0.991211 2.40674 1.68537 3.1009 2.54166 3.1009Z"
                        fill="#3056D3"/>
                  <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M12.5338 3.1009C13.3901 3.1009 14.0843 2.40674 14.0843 1.55045C14.0843 0.69416 13.3901 0 12.5338 0C11.6776 0 10.9834 0.69416 10.9834 1.55045C10.9834 2.40674 11.6776 3.1009 12.5338 3.1009Z"
                        fill="#3056D3"/>
                  <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M22.526 3.1009C23.3823 3.1009 24.0765 2.40674 24.0765 1.55045C24.0765 0.69416 23.3823 0 22.526 0C21.6697 0 20.9756 0.69416 20.9756 1.55045C20.9756 2.40674 21.6697 3.1009 22.526 3.1009Z"
                        fill="#3056D3"/>
                  <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M32.5177 3.1009C33.374 3.1009 34.0682 2.40674 34.0682 1.55045C34.0682 0.69416 33.374 0 32.5177 0C31.6614 0 30.9673 0.69416 30.9673 1.55045C30.9673 2.40674 31.6614 3.1009 32.5177 3.1009Z"
                        fill="#3056D3"/>
                  <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M42.5094 3.1009C43.3657 3.1009 44.0599 2.40674 44.0599 1.55045C44.0599 0.69416 43.3657 0 42.5094 0C41.6531 0 40.959 0.69416 40.959 1.55045C40.959 2.40674 41.6531 3.1009 42.5094 3.1009Z"
                        fill="#3056D3"/>
                  <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M12.5338 13.0804C13.3901 13.0804 14.0843 12.3862 14.0843 11.5299C14.0843 10.6737 13.3901 9.97949 12.5338 9.97949C11.6776 9.97949 10.9834 10.6737 10.9834 11.5299C10.9834 12.3862 11.6776 13.0804 12.5338 13.0804Z"
                        fill="#3056D3"/>
                  <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M22.526 13.0804C23.3823 13.0804 24.0765 12.3862 24.0765 11.5299C24.0765 10.6737 23.3823 9.97949 22.526 9.97949C21.6697 9.97949 20.9756 10.6737 20.9756 11.5299C20.9756 12.3862 21.6697 13.0804 22.526 13.0804Z"
                        fill="#3056D3"/>
                  <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M32.5177 13.0804C33.374 13.0804 34.0682 12.3862 34.0682 11.5299C34.0682 10.6737 33.374 9.97949 32.5177 9.97949C31.6614 9.97949 30.9673 10.6737 30.9673 11.5299C30.9673 12.3862 31.6614 13.0804 32.5177 13.0804Z"
                        fill="#3056D3"/>
                  <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M42.5094 13.0804C43.3657 13.0804 44.0599 12.3862 44.0599 11.5299C44.0599 10.6737 43.3657 9.97949 42.5094 9.97949C41.6531 9.97949 40.959 10.6737 40.959 11.5299C40.959 12.3862 41.6531 13.0804 42.5094 13.0804Z"
                        fill="#3056D3"/>
                  <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M22.526 23.0604C23.3823 23.0604 24.0765 22.3662 24.0765 21.5099C24.0765 20.6536 23.3823 19.9595 22.526 19.9595C21.6697 19.9595 20.9756 20.6536 20.9756 21.5099C20.9756 22.3662 21.6697 23.0604 22.526 23.0604Z"
                        fill="#3056D3"/>
                  <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M32.5177 23.0604C33.374 23.0604 34.0682 22.3662 34.0682 21.5099C34.0682 20.6536 33.374 19.9595 32.5177 19.9595C31.6614 19.9595 30.9673 20.6536 30.9673 21.5099C30.9673 22.3662 31.6614 23.0604 32.5177 23.0604Z"
                        fill="#3056D3"/>
                  <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M42.5094 23.0604C43.3657 23.0604 44.0599 22.3662 44.0599 21.5099C44.0599 20.6536 43.3657 19.9595 42.5094 19.9595C41.6531 19.9595 40.959 20.6536 40.959 21.5099C40.959 22.3662 41.6531 23.0604 42.5094 23.0604Z"
                        fill="#3056D3"/>
                  <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M32.5177 33.0404C33.374 33.0404 34.0682 32.3462 34.0682 31.4899C34.0682 30.6336 33.374 29.9395 32.5177 29.9395C31.6614 29.9395 30.9673 30.6336 30.9673 31.4899C30.9673 32.3462 31.6614 33.0404 32.5177 33.0404Z"
                        fill="#3056D3"/>
                  <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M42.5094 33.0404C43.3657 33.0404 44.0599 32.3462 44.0599 31.4899C44.0599 30.6336 43.3657 29.9395 42.5094 29.9395C41.6531 29.9395 40.959 30.6336 40.959 31.4899C40.959 32.3462 41.6531 33.0404 42.5094 33.0404Z"
                        fill="#3056D3"/>
                  <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M32.5177 43.0203C33.374 43.0203 34.0682 42.3262 34.0682 41.4699C34.0682 40.6136 33.374 39.9194 32.5177 39.9194C31.6614 39.9194 30.9673 40.6136 30.9673 41.4699C30.9673 42.3262 31.6614 43.0203 32.5177 43.0203Z"
                        fill="#3056D3"/>
                  <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M42.5094 43.0203C43.3657 43.0203 44.0599 42.3262 44.0599 41.4699C44.0599 40.6136 43.3657 39.9194 42.5094 39.9194C41.6531 39.9194 40.959 40.6136 40.959 41.4699C40.959 42.3262 41.6531 43.0203 42.5094 43.0203Z"
                        fill="#3056D3"/>
                  <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M42.5094 52.9998C43.3657 52.9998 44.0599 52.3057 44.0599 51.4494C44.0599 50.5931 43.3657 49.8989 42.5094 49.8989C41.6531 49.8989 40.959 50.5931 40.959 51.4494C40.959 52.3057 41.6531 52.9998 42.5094 52.9998Z"
                        fill="#3056D3"/>
                </svg>
              </span>
                        </div>
                        <div class="text-center">
                            <h4 class="mb-1 text-lg font-semibold text-dark ">
                                Jackie Sanders
                            </h4>
                            <p class="mb-5 text-sm text-body-color ">
                                SEO Expert
                            </p>
                            <div class="flex items-center justify-center gap-5">
                                <a href="javascript:void(0)" class="text-dark-6 hover:text-primary">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                         xmlns="http://www.w3.org/2000/svg"
                                         class="fill-current">
                                        <path
                                            d="M13.3315 7.25625H11.7565H11.194V6.69375V4.95V4.3875H11.7565H12.9377C13.2471 4.3875 13.5002 4.1625 13.5002 3.825V0.84375C13.5002 0.534375 13.2752 0.28125 12.9377 0.28125H10.8846C8.66272 0.28125 7.11584 1.85625 7.11584 4.19062V6.6375V7.2H6.55334H4.64084C4.24709 7.2 3.88147 7.50937 3.88147 7.95937V9.98438C3.88147 10.3781 4.19084 10.7438 4.64084 10.7438H6.49709H7.05959V11.3063V16.9594C7.05959 17.3531 7.36897 17.7188 7.81897 17.7188H10.4627C10.6315 17.7188 10.7721 17.6344 10.8846 17.5219C10.9971 17.4094 11.0815 17.2125 11.0815 17.0437V11.3344V10.7719H11.6721H12.9377C13.3033 10.7719 13.5846 10.5469 13.6408 10.2094V10.1813V10.1531L14.0346 8.2125C14.0627 8.01562 14.0346 7.79063 13.8658 7.56562C13.8096 7.425 13.5565 7.28437 13.3315 7.25625Z"
                                            fill=""/>
                                    </svg>
                                </a>
                                <a href="javascript:void(0)" class="text-dark-6 hover:text-primary">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                         xmlns="http://www.w3.org/2000/svg"
                                         class="fill-current">
                                        <path
                                            d="M16.4647 4.83752C16.565 4.72065 16.4343 4.56793 16.2859 4.62263C15.9549 4.74474 15.6523 4.82528 15.2049 4.875C15.7552 4.56855 16.0112 4.13054 16.2194 3.59407C16.2696 3.46467 16.1182 3.34725 15.9877 3.40907C15.458 3.66023 14.8864 3.84658 14.2854 3.95668C13.6913 3.3679 12.8445 3 11.9077 3C10.1089 3 8.65027 4.35658 8.65027 6.02938C8.65027 6.26686 8.67937 6.49818 8.73427 6.71966C6.14854 6.59919 3.84286 5.49307 2.24098 3.79696C2.13119 3.68071 1.93197 3.69614 1.86361 3.83792C1.68124 4.21619 1.57957 4.63582 1.57957 5.07762C1.57957 6.12843 2.15446 7.05557 3.02837 7.59885C2.63653 7.58707 2.2618 7.51073 1.91647 7.38116C1.74834 7.31808 1.5556 7.42893 1.57819 7.59847C1.75162 8.9004 2.80568 9.97447 4.16624 10.2283C3.89302 10.2978 3.60524 10.3347 3.30754 10.3347C3.23536 10.3347 3.16381 10.3324 3.0929 10.3281C2.91247 10.3169 2.76583 10.4783 2.84319 10.6328C3.35357 11.6514 4.45563 12.3625 5.73809 12.3847C4.62337 13.1974 3.21889 13.6816 1.69269 13.6816C1.50451 13.6816 1.42378 13.9235 1.59073 14.0056C2.88015 14.6394 4.34854 15 5.90878 15C11.9005 15 15.1765 10.384 15.1765 6.38067C15.1765 6.24963 15.1732 6.11858 15.1672 5.98877C15.6535 5.66205 16.0907 5.27354 16.4647 4.83752Z"
                                            fill=""/>
                                    </svg>
                                </a>
                                <a href="javascript:void(0)" class="text-dark-6 hover:text-primary">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                         xmlns="http://www.w3.org/2000/svg"
                                         class="fill-current">
                                        <path
                                            d="M9.02429 11.8066C10.5742 11.8066 11.8307 10.5501 11.8307 9.00018C11.8307 7.45022 10.5742 6.19373 9.02429 6.19373C7.47433 6.19373 6.21783 7.45022 6.21783 9.00018C6.21783 10.5501 7.47433 11.8066 9.02429 11.8066Z"
                                            fill=""/>
                                        <path
                                            d="M12.0726 1.5H5.92742C3.48387 1.5 1.5 3.48387 1.5 5.92742V12.0242C1.5 14.5161 3.48387 16.5 5.92742 16.5H12.0242C14.5161 16.5 16.5 14.5161 16.5 12.0726V5.92742C16.5 3.48387 14.5161 1.5 12.0726 1.5ZM9.02419 12.6774C6.96774 12.6774 5.34677 11.0081 5.34677 9C5.34677 6.99194 6.99194 5.32258 9.02419 5.32258C11.0323 5.32258 12.6774 6.99194 12.6774 9C12.6774 11.0081 11.0565 12.6774 9.02419 12.6774ZM14.1048 5.66129C13.8629 5.92742 13.5 6.07258 13.0887 6.07258C12.7258 6.07258 12.3629 5.92742 12.0726 5.66129C11.8065 5.39516 11.6613 5.05645 11.6613 4.64516C11.6613 4.23387 11.8065 3.91935 12.0726 3.62903C12.3387 3.33871 12.6774 3.19355 13.0887 3.19355C13.4516 3.19355 13.8387 3.33871 14.1048 3.60484C14.3468 3.91935 14.5161 4.28226 14.5161 4.66935C14.4919 5.05645 14.3468 5.39516 14.1048 5.66129Z"
                                            fill=""/>
                                        <path
                                            d="M13.1135 4.06433C12.799 4.06433 12.5329 4.33046 12.5329 4.64498C12.5329 4.95949 12.799 5.22562 13.1135 5.22562C13.428 5.22562 13.6942 4.95949 13.6942 4.64498C13.6942 4.33046 13.4522 4.06433 13.1135 4.06433Z"
                                            fill=""/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== Team Section End -->

    <!-- ====== Blog Section Start -->
    <section class="bg-white pb-10 pt-20  lg:pb-20 lg:pt-[120px]">
        <div class="container mx-auto">
            <div class="flex flex-wrap justify-center -mx-4">
                <div class="w-full px-4">
                    <div class="mx-auto mb-[60px] max-w-[485px] text-center">
            <span class="block mb-2 text-lg font-semibold text-primary">
              Our Blogs
            </span>
                        <h2 class="mb-4 text-3xl font-bold text-dark  sm:text-4xl md:text-[40px] md:leading-[1.2]">
                            Our Recent News
                        </h2>
                        <p class="text-base text-body-color ">
                            There are many variations of passages of Lorem Ipsum available
                            but the majority have suffered alteration in some form.
                        </p>
                    </div>
                </div>
            </div>
            <div class="flex flex-wrap -mx-4">
                <div class="w-full px-4 md:w-1/2 lg:w-1/3">
                    <div class="mb-10 group">
                        <div class="mb-8 overflow-hidden rounded-[5px]">
                            <a href="blog-details.html" class="block">
                                <img src="./assets/images/blog/blog-01.jpg" alt="image"
                                     class="w-full transition group-hover:rotate-6 group-hover:scale-125"/>
                            </a>
                        </div>
                        <div>
              <span
                  class="mb-6 inline-block rounded-[5px] bg-primary px-4 py-0.5 text-center text-xs font-medium leading-loose text-white">
                Dec 22, 2023
              </span>
                            <h3>
                                <a href="javascript:void(0)"
                                   class="inline-block mb-4 text-xl font-semibold text-dark hover:text-primary   sm:text-2xl lg:text-xl xl:text-2xl">
                                    Meet AutoManage, the best AI management tools
                                </a>
                            </h3>
                            <p class="max-w-[370px] text-base text-body-color ">
                                Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 md:w-1/2 lg:w-1/3">
                    <div class="mb-10 group">
                        <div class="mb-8 overflow-hidden rounded-[5px]">
                            <a href="blog-details.html" class="block">
                                <img src="./assets/images/blog/blog-02.jpg" alt="image"
                                     class="w-full transition group-hover:rotate-6 group-hover:scale-125"/>
                            </a>
                        </div>
                        <div>
              <span
                  class="mb-6 inline-block rounded-[5px] bg-primary px-4 py-0.5 text-center text-xs font-medium leading-loose text-white">
                Mar 15, 2023
              </span>
                            <h3>
                                <a href="javascript:void(0)"
                                   class="inline-block mb-4 text-xl font-semibold text-dark hover:text-primary   sm:text-2xl lg:text-xl xl:text-2xl">
                                    How to earn more money as a wellness coach
                                </a>
                            </h3>
                            <p class="max-w-[370px] text-base text-body-color ">
                                Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 md:w-1/2 lg:w-1/3">
                    <div class="mb-10 group">
                        <div class="mb-8 overflow-hidden rounded-[5px]">
                            <a href="blog-details.html" class="block">
                                <img src="./assets/images/blog/blog-03.jpg" alt="image"
                                     class="w-full transition group-hover:rotate-6 group-hover:scale-125"/>
                            </a>
                        </div>
                        <div>
              <span
                  class="mb-6 inline-block rounded-[5px] bg-primary px-4 py-0.5 text-center text-xs font-medium leading-loose text-white">
                Jan 05, 2023
              </span>
                            <h3>
                                <a href="javascript:void(0)"
                                   class="inline-block mb-4 text-xl font-semibold text-dark hover:text-primary   sm:text-2xl lg:text-xl xl:text-2xl">
                                    The no-fuss guide to upselling and cross selling
                                </a>
                            </h3>
                            <p class="max-w-[370px] text-base text-body-color ">
                                Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== Blog Section End -->

    <!-- ====== Contact Start ====== -->
    <section id="contact" class="relative py-20 md:py-[120px]">
        <div class="absolute left-0 top-0 -z-[1] h-full w-full "></div>
        <div class="absolute left-0 top-0 -z-[1] h-1/2 w-full bg-[#E9F9FF] lg:h-[45%] xl:h-1/2"></div>
        <div class="container px-4">
            <div class="flex flex-wrap items-center -mx-4">
                <div class="w-full px-4 lg:w-7/12 xl:w-8/12">
                    <div class="ud-contact-content-wrapper">
                        <div class="ud-contact-title mb-12 lg:mb-[150px]">
              <span class="block mb-6 text-base font-medium text-dark ">
                CONTACT US
              </span>
                            <h2 class="max-w-[260px] text-[35px] font-semibold leading-[1.14] text-dark ">
                                Let's talk about your problem.
                            </h2>
                        </div>
                        <div class="flex flex-wrap justify-between mb-12 lg:mb-0">
                            <div class="mb-8 flex w-[330px] max-w-full">
                                <div class="mr-6 text-[32px] text-primary">
                                    <svg width="29" height="35" viewBox="0 0 29 35" class="fill-current">
                                        <path
                                            d="M14.5 0.710938C6.89844 0.710938 0.664062 6.72656 0.664062 14.0547C0.664062 19.9062 9.03125 29.5859 12.6406 33.5234C13.1328 34.0703 13.7891 34.3437 14.5 34.3437C15.2109 34.3437 15.8672 34.0703 16.3594 33.5234C19.9688 29.6406 28.3359 19.9062 28.3359 14.0547C28.3359 6.67188 22.1016 0.710938 14.5 0.710938ZM14.9375 32.2109C14.6641 32.4844 14.2812 32.4844 14.0625 32.2109C11.3828 29.3125 2.57812 19.3594 2.57812 14.0547C2.57812 7.71094 7.9375 2.625 14.5 2.625C21.0625 2.625 26.4219 7.76562 26.4219 14.0547C26.4219 19.3594 17.6172 29.2578 14.9375 32.2109Z"/>
                                        <path
                                            d="M14.5 8.58594C11.2734 8.58594 8.59375 11.2109 8.59375 14.4922C8.59375 17.7188 11.2187 20.3984 14.5 20.3984C17.7812 20.3984 20.4062 17.7734 20.4062 14.4922C20.4062 11.2109 17.7266 8.58594 14.5 8.58594ZM14.5 18.4297C12.3125 18.4297 10.5078 16.625 10.5078 14.4375C10.5078 12.25 12.3125 10.4453 14.5 10.4453C16.6875 10.4453 18.4922 12.25 18.4922 14.4375C18.4922 16.625 16.6875 18.4297 14.5 18.4297Z"/>
                                    </svg>
                                </div>
                                <div>
                                    <h5 class="mb-[18px] text-lg font-semibold text-dark ">
                                        Our Location
                                    </h5>
                                    <p class="text-base text-body-color ">
                                        401 Broadway, 24th Floor, Orchard Cloud View, London
                                    </p>
                                </div>
                            </div>
                            <div class="mb-8 flex w-[330px] max-w-full">
                                <div class="mr-6 text-[32px] text-primary">
                                    <svg width="34" height="25" viewBox="0 0 34 25" class="fill-current">
                                        <path
                                            d="M30.5156 0.960938H3.17188C1.42188 0.960938 0 2.38281 0 4.13281V20.9219C0 22.6719 1.42188 24.0938 3.17188 24.0938H30.5156C32.2656 24.0938 33.6875 22.6719 33.6875 20.9219V4.13281C33.6875 2.38281 32.2656 0.960938 30.5156 0.960938ZM30.5156 2.875C30.7891 2.875 31.0078 2.92969 31.2266 3.09375L17.6094 11.3516C17.1172 11.625 16.5703 11.625 16.0781 11.3516L2.46094 3.09375C2.67969 2.98438 2.89844 2.875 3.17188 2.875H30.5156ZM30.5156 22.125H3.17188C2.51562 22.125 1.91406 21.5781 1.91406 20.8672V5.00781L15.0391 12.9922C15.5859 13.3203 16.1875 13.4844 16.7891 13.4844C17.3906 13.4844 17.9922 13.3203 18.5391 12.9922L31.6641 5.00781V20.8672C31.7734 21.5781 31.1719 22.125 30.5156 22.125Z"/>
                                    </svg>
                                </div>
                                <div>
                                    <h5 class="mb-[18px] text-lg font-semibold text-dark ">
                                        How Can We Help?
                                    </h5>
                                    <p class="text-base text-body-color ">
                                        info@yourdomain.com
                                    </p>
                                    <p class="mt-1 text-base text-body-color ">
                                        contact@yourdomain.com
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 lg:w-5/12 xl:w-4/12">
                    <div
                        class="rounded-lg bg-white px-8 py-10 shadow-testimonial -2  sm:px-10 sm:py-12 md:p-[60px] lg:p-10 lg:px-10 lg:py-12 2xl:p-[60px]">
                        <h3 class="mb-8 text-2xl font-semibold text-dark  md:text-[28px] md:leading-[1.42]">
                            Send us a Message
                        </h3>
                        <form>
                            <div class="mb-[22px]">
                                <label for="fullName" class="block mb-4 text-sm text-body-color ">Full Name*</label>
                                <input type="text" name="fullName" placeholder="Adam Gelius"
                                       class="w-full border-0 border-b border-[#f1f1f1] bg-transparent pb-3 text-body-color placeholder:text-body-color/60 focus:border-primary focus:outline-none  "/>
                            </div>
                            <div class="mb-[22px]">
                                <label for="email" class="block mb-4 text-sm text-body-color ">Email*</label>
                                <input type="email" name="email" placeholder="example@yourmail.com"
                                       class="w-full border-0 border-b border-[#f1f1f1] bg-transparent pb-3 text-body-color placeholder:text-body-color/60 focus:border-primary focus:outline-none  "/>
                            </div>
                            <div class="mb-[22px]">
                                <label for="phone" class="block mb-4 text-sm text-body-color ">Phone*</label>
                                <input type="text" name="phone" placeholder="+885 1254 5211 552"
                                       class="w-full border-0 border-b border-[#f1f1f1] bg-transparent pb-3 text-body-color placeholder:text-body-color/60 focus:border-primary focus:outline-none  "/>
                            </div>
                            <div class="mb-[30px]">
                                <label for="message" class="block mb-4 text-sm text-body-color ">Message*</label>
                                <textarea name="message" rows="1" placeholder="type your message here"
                                          class="w-full resize-none border-0 border-b border-[#f1f1f1] bg-transparent pb-3 text-body-color placeholder:text-body-color/60 focus:border-primary focus:outline-none  "></textarea>
                            </div>
                            <div class="mb-0">
                                <button type="submit"
                                        class="inline-flex items-center justify-center px-10 py-3 text-base font-medium text-white transition duration-300 ease-in-out rounded-md bg-primary hover:bg-blue-dark">
                                    Send
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== Contact End ====== -->

    <!-- ====== Brands Section Start -->
    <section class="pb-20">
        <div class="container px-4">
            <div class="flex flex-wrap items-center justify-center gap-8 -mx-4 xl:gap-11">
                <a href="https://graygrids.com/">
                    <img src="./assets/images/brands/graygrids.svg" alt="graygrids"/>
                </a>
                <a href="https://lineicons.com/">
                    <img src="./assets/images/brands/lineicons.svg" alt="lineicons"/>
                </a>
                <a href="https://uideck.com/">
                    <img src="./assets/images/brands/uideck.svg" alt="uideck"/>
                </a>
                <a href="https://ayroui.com/">
                    <img src="./assets/images/brands/ayroui.svg" alt="ayroui"/>
                </a>
                <a href="https://tailgrids.com/">
                    <img src="./assets/images/brands/tailgrids.svg" alt="tailgrids"/>
                </a>
            </div>
        </div>
    </section>
    <!-- ====== Brands Section End -->

    <script>
        // ==== for menu scroll
        const pageLink = document.querySelectorAll(".ud-menu-scroll");

        pageLink.forEach((elem) => {
            elem.addEventListener("click", (e) => {
                e.preventDefault();
                document.querySelector(elem.getAttribute("href")).scrollIntoView({
                    behavior: "smooth",
                    offsetTop: 1 - 60,
                });
            });
        });

        // section menu active
        function onScroll(event) {
            const sections = document.querySelectorAll(".ud-menu-scroll");
            const scrollPos =
                window.pageYOffset ||
                document.documentElement.scrollTop ||
                document.body.scrollTop;

            for (let i = 0; i < sections.length; i++) {
                const currLink = sections[i];
                const val = currLink.getAttribute("href");
                const refElement = document.querySelector(val);
                const scrollTopMinus = scrollPos + 73;
                let offsetTop = refElement?.offsetTop ?? 0;
                let offsetHeight = refElement?.offsetHeight ?? 0;
                if (offsetTop <= scrollTopMinus &&
                    offsetTop + offsetHeight > scrollTopMinus) {
                    document
                        .querySelector(".ud-menu-scroll")
                        .classList.remove("active");
                    currLink.classList.add("active");
                } else {
                    currLink.classList.remove("active");
                }
            }
        }

        window.document.addEventListener("scroll", onScroll);

        // Testimonial
        const testimonialSwiper = new Swiper(".testimonial-carousel", {
            slidesPerView: 1,
            spaceBetween: 30,

            // Navigation arrows
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },

            breakpoints: {
                640: {
                    slidesPerView: 2,
                    spaceBetween: 30,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 30,
                },
                1280: {
                    slidesPerView: 3,
                    spaceBetween: 30,
                },
            },
        });
    </script>

</x-guest-layout>
