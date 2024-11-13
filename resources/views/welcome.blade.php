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
                                    <svg class="fill-current" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_2005_10818)"><path d="M12 0.674805C5.625 0.674805 0.375 5.8498 0.375 12.2998C0.375 17.3998 3.7125 21.7498 8.3625 23.3248C8.9625 23.4373 9.15 23.0623 9.15 22.7998C9.15 22.5373 9.15 21.7873 9.1125 20.7748C5.8875 21.5248 5.2125 19.1998 5.2125 19.1998C4.6875 17.8873 3.9 17.5123 3.9 17.5123C2.85 16.7623 3.9375 16.7623 3.9375 16.7623C5.1 16.7998 5.7375 17.9623 5.7375 17.9623C6.75 19.7623 8.475 19.2373 9.1125 18.8998C9.225 18.1498 9.525 17.6248 9.8625 17.3248C7.3125 17.0623 4.575 16.0498 4.575 11.6248C4.575 10.3498 5.0625 9.3373 5.775 8.5498C5.6625 8.2873 5.25 7.0873 5.8875 5.4748C5.8875 5.4748 6.9 5.1748 9.1125 6.6748C10.05 6.4123 11.025 6.2623 12.0375 6.2623C13.05 6.2623 14.0625 6.3748 14.9625 6.6748C17.175 5.2123 18.15 5.4748 18.15 5.4748C18.7875 7.0498 18.4125 8.2873 18.2625 8.5498C19.0125 9.3373 19.4625 10.3873 19.4625 11.6248C19.4625 16.0498 16.725 17.0623 14.175 17.3248C14.5875 17.6998 14.9625 18.4498 14.9625 19.4998C14.9625 21.0748 14.925 22.3123 14.925 22.6873C14.925 22.9873 15.15 23.3248 15.7125 23.2123C20.2875 21.6748 23.625 17.3623 23.625 12.2248C23.5875 5.8498 18.375 0.674805 12 0.674805Z"/></g><defs><clipPath id="clip0_2005_10818"><rect width="24" height="24" fill="white"/></clipPath></defs></svg>
                                    Star on Github
                                </a>
                            </li>
                        </ul>
                        <div>
                            <p class="mb-4 text-base font-medium text-center text-white">
                                Built using the <a href="https://tallstack.dev/" target="_blank" class="underline">TALL Stack</a>
                            </p>
                            <div class="flex items-center justify-center gap-4 text-center -mt-6">
                                <a href="https://laravel.com/"
                                   class="duration-300 ease-in-out text-white/60 hover:text-white" target="_blank">
                                    <svg class="fill-current" fill="none" xmlns="http://www.w3.org/2000/svg" width="41" height="32" viewBox="0 0 498 512"><path fill="currentColor" d="M204.786 56.49L108.402 1.072a8.01 8.01 0 0 0-8.012 0L4.006 56.49C1.314 57.98.036 60.332 0 63.444v329.669a8.05 8.05 0 0 0 4.024 6.955l192.787 110.831c2.786 1.48 5.128 1.45 7.994.019L397.59 400.086a7.99 7.99 0 0 0 4.025-6.955V287.878l92.36-53.104A7.99 7.99 0 0 0 498 227.82V117.924c0-1.985-1.193-5.315-4.098-6.955l-96.384-55.415a8.01 8.01 0 0 0-8.012 0l-96.384 55.415c-2.63 1.497-4.006 3.94-4.006 6.955v105.253l-80.324 46.186V63.443c0-2.42-1.42-5.569-4.006-6.954m-4.116 327.393l-80.176-45.305l176.579-101.51l80.25 46.13zm184.774-205.9v91.38l-80.341-46.186v-91.38zm8.031-106.227l80.286 46.168l-80.286 46.167l-80.286-46.167zM112.335 324.78V123.502l80.341-46.186v201.259zm-8.03-307.484l80.286 46.167l-80.287 46.168l-80.286-46.168zm104.414 472.777v-92.298l176.726-100.74v91.437zm192.786-220.709v-91.38l80.342-46.187v91.381zm-208.792 128.41v92.281L15.933 388.471V77.316l80.34 46.186V343.28z"/></svg>
                                </a>

                                <a href="https://tailwindcss.com/"
                                   class="duration-300 ease-in-out text-white/60 hover:text-white" target="_blank">
                                    <svg class="fill-current" width="41" height="26" viewBox="0 0 41 26" fill="none" xmlns="http://www.w3.org/2000/svg"><mask id="mask0_2005_10783" style="mask-type: luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="41" height="26"><path d="M0.521393 0.949463H40.5214V25.0135H0.521393V0.949463Z"/></mask><g mask="url(#mask0_2005_10783)"><path d="M20.5214 0.980713C15.1882 0.980713 11.8546 3.64743 10.5214 8.98071C12.5214 6.31399 14.8546 5.31399 17.5214 5.98071C19.043 6.36103 20.1302 7.46495 21.3342 8.68667C23.295 10.6771 25.5642 12.9807 30.5214 12.9807C35.8546 12.9807 39.1882 10.314 40.5214 4.98071C38.5214 7.64743 36.1882 8.64743 33.5214 7.98071C31.9998 7.60039 30.9126 6.49651 29.7086 5.27479C27.7478 3.28431 25.4786 0.980713 20.5214 0.980713ZM10.5214 12.9807C5.18819 12.9807 1.85459 15.6474 0.521393 20.9807C2.52139 18.314 4.85459 17.314 7.52139 17.9807C9.04299 18.361 10.1302 19.465 11.3342 20.6867C13.295 22.6771 15.5642 24.9807 20.5214 24.9807C25.8546 24.9807 29.1882 22.314 30.5214 16.9807C28.5214 19.6474 26.1882 20.6474 23.5214 19.9807C21.9998 19.6004 20.9126 18.4965 19.7086 17.2748C17.7478 15.2843 15.4786 12.9807 10.5214 12.9807Z"/></g></svg>
                                </a>

                                <a href="https://alpinejs.dev/"
                                   class="duration-300 ease-in-out text-white/60 hover:text-white" target="_blank">
                                    <svg  class="fill-current" width="41" height="36" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="currentColor" fill-rule="evenodd" d="M17.556 7.413L22 11.838l-4.445 4.425l-4.444-4.425zm-11.112 0l9.214 9.174H6.77L2 11.838z" clip-rule="evenodd"/></svg>
                                </a>

                                <a href="https://livewire.laravel.com/"
                                   class="duration-300 ease-in-out text-white/60 hover:text-white" target="_blank">
                                    <svg class="mt-0.5 fill-current" fill="none" xmlns="http://www.w3.org/2000/svg" width="30" height="38"  viewBox="0 0 24 24"><path fill="currentColor" d="M12.001 0C6.174 0 1.448 4.957 1.448 11.072c0 2.09.552 4.042 1.51 5.71c.25.279.544.484.965.484c1.339 0 1.268-2.065 2.607-2.065s1.411 2.065 2.75 2.065c1.34 0 1.266-2.065 2.606-2.065c.584 0 .928.397 1.24.84c-.221-.205-.48-.348-.82-.348c-1.196 0-1.307 1.678-2.201 2.141v4.51a1.657 1.657 0 0 0 3.312 0V16.45c.308.433.647.815 1.22.815c1.34 0 1.267-2.065 2.606-2.065c.465 0 .774.255 1.04.58a1.1 1.1 0 0 0-.43-.088c-1.159 0-1.297 1.574-2.118 2.094v2.436a1.49 1.49 0 0 0 2.98 0V16.37c.324.466.67.895 1.278.895c.796 0 1.093-.73 1.485-1.32a11.5 11.5 0 0 0 1.074-4.874C22.552 4.957 17.828 0 12 0m-.566 2.877c2.88 0 5.214 2.784 5.214 5.807s-1.545 5.15-5.214 5.15s-5.215-2.127-5.215-5.15s2.335-5.807 5.215-5.807m-1.403 1.66a1.955 2.158 0 0 0-1.955 2.158a1.955 2.158 0 0 0 1.955 2.158a1.955 2.158 0 0 0 1.955-2.158a1.955 2.158 0 0 0-1.955-2.158m-.326.664a.978.996 0 0 1 .979.996a.978.996 0 0 1-.979.996a.978.996 0 0 1-.977-.996a.978.996 0 0 1 .977-.996m-2.95 10.493c-1.074 0-1.272 1.354-1.95 1.964v1.782a1.49 1.49 0 0 0 2.98 0v-3.182c-.264-.324-.577-.564-1.03-.564"/></svg>
                                </a>

                                <a href="https://filamentphp.com/"
                                   class="duration-300 ease-in-out text-white/60 hover:text-white" target="_blank">
                                    <svg class="fill-current" width="81" height="auto" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128"><path d="M11.059 51.213q-1.226 0-2.352.295a5.8 5.8 0 0 0-2.053.992q-.927.698-1.613 1.89q-.687 1.195-1.05 2.977l-.452 2.186H.795L0 63.336h2.748l-.041.193l-.217 1.037l-.105.51q-.265 1.27-.48 2.313l-.348 1.68q-.431 2.085-.787 3.775a452 452 0 0 0-.721 3.488h4.933q.381-1.8.729-3.48q.29-1.402.648-3.106l.147-.693l1.181-5.717h4.53l.795-3.783H8.277l.149-.748l.166-.832q.265-1.294.96-1.942q.696-.646 1.92-.648a5.7 5.7 0 0 1 1.374.168q.68.168 1.293.47l1.191-4.035a7.6 7.6 0 0 0-1.234-.412a13 13 0 0 0-3.037-.361m20.609.035l-5.033.436q-.414 2.017-.828 4.02q-.42 2.028-.86 4.05l-1.92 9.314q-.447 2.086-.795 3.776q-.36 1.745-.728 3.488h4.95q.737-3.644 1.505-7.28l1.937-9.314q.48-2.32.918-4.414q.44-2.092.854-4.076m-10.91.117q-1.345 0-2.278.588q-.93.588-1.207 1.934q-.291 1.479.381 2.277q.673.798 2.002.799q1.362 0 2.278-.512t1.207-1.976q.26-1.278-.389-2.194q-.648-.915-1.994-.916m103.633 1.85l-5.065.89l-.672 3.229l-.42 2.004l-.045.215h-2.671l-.795 3.783h2.68l-.02.102l-.06.292q-.265 1.305-.507 2.438q-.24 1.136-.453 2.187q-.216 1.05-.449 2.143q-.445 2.136.102 3.531a3.82 3.82 0 0 0 1.879 2.076q1.332.68 3.251.682a8 8 0 0 0 1.291-.11a11 11 0 0 0 1.301-.286q.605-.177.951-.412l.53-4.12q-.645.456-1.283.641a4.2 4.2 0 0 1-1.166.184q-1.21 0-1.649-.84q-.436-.84-.09-2.455l1.25-6.053h4.924l.795-3.783h-4.932l.034-.158l.207-.983l.064-.314q.257-1.236.504-2.405q.248-1.168.514-2.478M40.22 59.1q-.845 0-1.73.1a21 21 0 0 0-1.731.269a32 32 0 0 0-1.606.361q-.761.193-1.357.395l-.78 4.406a20 20 0 0 1 1.583-.613q.77-.261 1.498-.438a14 14 0 0 1 1.398-.27q.631-.09 1.268-.091q1.157 0 1.902.31q.745.312 1.035.875t.125 1.319l-5.181.824q-1.027.15-1.979.445a7 7 0 0 0-1.738.799a4.8 4.8 0 0 0-1.342 1.295q-.555.79-.803 1.967q-.33 1.529.084 2.824a4.04 4.04 0 0 0 1.473 2.078q1.06.78 2.633.781q.993 0 1.853-.295a5.4 5.4 0 0 0 1.598-.873a6.6 6.6 0 0 0 1.35-1.472h.38l-.217 2.236h4.272q.348-1.614.639-3.01l.554-2.656l.297-1.412l.381-1.807q.181-.866.348-1.707q.448-2.05-.149-3.539q-.596-1.488-2.136-2.295T40.22 59.1m21.11 0a6.1 6.1 0 0 0-2.194.402a7.4 7.4 0 0 0-1.938 1.102q-.886.697-1.498 1.554h-.414l.348-2.857l-4.172.252a667 667 0 0 1-.844 4.06a377 377 0 0 0-.777 3.776l-.348 1.68q-.447 2.085-.795 3.775q-.36 1.745-.728 3.488h4.949q.365-1.8.713-3.463l.744-3.547l.713-3.48q.53-.623 1.066-1.112a4.8 4.8 0 0 1 1.127-.773a2.8 2.8 0 0 1 1.25-.285q1.16 0 1.48.916q.324.915.008 2.43l-.478 2.32a668 668 0 0 0-.729 3.531l-.712 3.463h4.933l.736-3.488s.79-3.77 1.176-5.658l.317-1.504l.035-.04q.354-.39.717-.728l.181-.166a5.2 5.2 0 0 1 1.135-.781a2.76 2.76 0 0 1 1.25-.295q1.158 0 1.48.916q.323.915.008 2.43l-.478 2.32q-.354 1.77-.72 3.539q-.34 1.639-.722 3.455h4.95q.363-1.8.713-3.48q.347-1.682.794-3.784q.2-.975.39-1.882l.339-1.614q.63-2.94-.398-4.707q-1.025-1.765-3.56-1.765a6 6 0 0 0-2.2.412a7.94 7.94 0 0 0-3.51 2.715h-.363l-.026-.133q-.26-1.266-1.06-2.02q-1.035-.974-2.889-.974m25.349 0q-2.318 0-4.123 1t-2.996 2.816t-1.688 4.254q-.597 2.959.223 5.111a6.37 6.37 0 0 0 2.814 3.32q1.995 1.17 4.975 1.169q1.174 0 2.193-.15a13 13 0 0 0 1.797-.388q.778-.236 1.225-.505l.662-4.27a8 8 0 0 1-1.557.664a11.4 11.4 0 0 1-1.697.387q-.852.126-1.547.125q-1.59 0-2.682-.53q-1.093-.53-1.564-1.597q-.315-.713-.28-1.674l.002-.066H92.57l.082-.229q.12-.347.225-.713q.141-.486.273-1.04q.563-2.304-.017-4.036q-.578-1.733-2.217-2.691q-1.64-.96-4.236-.957m21.097 0a6.4 6.4 0 0 0-2.26.402a7.4 7.4 0 0 0-1.978 1.102a7.5 7.5 0 0 0-1.508 1.554h-.412l.348-2.857l-4.172.252q-.431 2.1-.846 4.068a503 503 0 0 0-.777 3.768l-.348 1.68c-.505 2.422-1.523 7.263-1.523 7.263h4.949l.713-3.455l.746-3.555l.71-3.48q.53-.623 1.085-1.112q.554-.487 1.158-.773q.605-.285 1.317-.285q1.308 0 1.656.916q.347.915.015 2.43l-.48 2.32c-.238 1.177-.72 3.531-.72 3.531l-.72 3.463h4.95l.736-3.488s.495-2.385.772-3.776q.214-.975.404-1.882l.34-1.614q.612-2.94-.43-4.707q-1.043-1.765-3.725-1.765m-88.7.42l-2.415.093l-.303 1.082l-.007.047a.43.43 0 0 0 .164.397l1.672 1.164l-1.956.13c-.153.01-.282.136-.32.307l-.148.682l-.008.047a.43.43 0 0 0 .166.396l1.67 1.164l-1.953.131c-.154.01-.285.135-.323.307l-.148.681l-.008.047a.43.43 0 0 0 .166.397l1.67 1.164l-1.953.13c-.153.011-.283.136-.32.307l-.15.682l-.009.047a.43.43 0 0 0 .166.396l1.67 1.164l-1.953.131c-.153.01-.283.135-.32.307l-.148.682l-.008.046a.43.43 0 0 0 .164.397l1.672 1.164l-1.953.13c-.154.011-.285.136-.323.307l-.676 2.686h2.188l.342-1.46l2.74-.243c.153-.01.283-.135.32-.307l.149-.681l.008-.047a.42.42 0 0 0-.166-.395l-1.67-1.166l1.953-.13c.153-.011.285-.136.322-.307l.148-.682l.008-.047a.42.42 0 0 0-.166-.394l-1.67-1.166l1.953-.131c.154-.01.283-.135.32-.307l.151-.681l.006-.047a.42.42 0 0 0-.164-.395l-1.672-1.166l1.955-.13c.154-.011.283-.136.32-.307l.149-.682l.008-.047a.42.42 0 0 0-.166-.394l-1.67-1.166l1.953-.131c.153-.01.285-.135.322-.307l.149-.682l.007-.047a.42.42 0 0 0-.166-.394l-2.212-1.557zm67.702 3.126q1.34 0 1.903 1.11q.444.876.322 1.982l-.02.145l-5.982.127l.05-.147q.27-.774.647-1.35q.63-.959 1.432-1.413a3.3 3.3 0 0 1 1.648-.454m-45.566 5.346l-.563 2.692a6.3 6.3 0 0 1-1.017 1.16q-.555.487-1.16.748q-.604.26-1.2.26q-.827 0-1.308-.512q-.48-.513-.315-1.438q.117-.588.465-.959a2.3 2.3 0 0 1 .877-.572q.53-.2 1.176-.351a32 32 0 0 0 1.572-.38q.58-.16.91-.32t.563-.328"/></svg>
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
                            Main Features
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
                        <div class="relative z-10 mb-10 flex h-[70px] w-[70px] items-center justify-center rounded-[14px] bg-primary">
                            <span class="absolute left-0 top-0 -z-[1] mb-8 flex h-[70px] w-[70px] rotate-[25deg] items-center justify-center rounded-[14px] bg-primary bg-opacity-20 duration-300 group-hover:rotate-45"></span>
                            <svg width="37" height="37" viewBox="0 0 37 37" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M30.5801 8.30514H27.9926C28.6113 7.85514 29.1176 7.34889 29.3426 6.73014C29.6801 5.88639 29.6801 4.48014 27.9363 2.84889C26.0801 1.04889 24.3926 1.04889 23.3238 1.33014C20.9051 1.94889 19.2738 4.76139 18.3738 6.78639C17.4738 4.76139 15.8426 2.00514 13.4238 1.33014C12.3551 1.04889 10.6676 1.10514 8.81133 2.84889C7.06758 4.53639 7.12383 5.88639 7.40508 6.73014C7.63008 7.34889 8.13633 7.85514 8.75508 8.30514H5.71758C4.08633 8.30514 2.73633 9.65514 2.73633 11.2864V14.9989C2.73633 16.5739 4.03008 17.8676 5.60508 17.9239V31.6489C5.60508 33.5614 7.18008 35.1926 9.14883 35.1926H27.5426C29.4551 35.1926 31.0863 33.6176 31.0863 31.6489V17.8676C32.4926 17.6426 33.5613 16.4051 33.5613 14.9426V11.2301C33.5613 9.59889 32.2113 8.30514 30.5801 8.30514ZM23.9426 3.69264C23.9988 3.69264 24.1676 3.63639 24.3363 3.63639C24.7301 3.63639 25.3488 3.80514 26.1926 4.59264C26.8676 5.21139 27.0363 5.66139 26.9801 5.77389C26.6988 6.56139 23.8863 7.40514 20.6801 7.74264C21.4676 5.99889 22.6488 4.03014 23.9426 3.69264ZM10.4988 4.64889C11.3426 3.86139 11.9613 3.69264 12.3551 3.69264C12.5238 3.69264 12.6363 3.74889 12.7488 3.74889C14.0426 4.08639 15.2801 5.99889 16.0676 7.79889C12.8613 7.46139 10.0488 6.61764 9.76758 5.83014C9.71133 5.66139 9.88008 5.26764 10.4988 4.64889ZM5.26758 14.9426V11.2301C5.26758 11.0051 5.43633 10.7801 5.71758 10.7801H30.5801C30.8051 10.7801 31.0301 10.9489 31.0301 11.2301V14.9426C31.0301 15.1676 30.8613 15.3926 30.5801 15.3926H5.71758C5.49258 15.3926 5.26758 15.2239 5.26758 14.9426ZM27.5426 32.6614H9.14883C8.58633 32.6614 8.13633 32.2114 8.13633 31.6489V17.9239H28.4988V31.6489C28.5551 32.2114 28.1051 32.6614 27.5426 32.6614Z" fill="white"/></svg>
                        </div>
                        <h4 class="mb-3 text-xl font-bold text-dark ">
                            Free and Open-Source
                        </h4>
                        <p class="mb-8 text-body-color  lg:mb-9">
                            This starter kit provides a robust foundation for
                            building web applications with Laravel.
                        </p>
                        <a href="javascript:void(0)"
                           class="text-base font-medium text-dark hover:text-primary  ">
                            Learn More
                        </a>
                    </div>
                </div>
                <div class="w-full px-4 md:w-1/2 lg:w-1/4">
                    <div class="mb-12 group">
                        <div class="relative z-10 mb-10 flex h-[70px] w-[70px] items-center justify-center rounded-[14px] bg-primary">
                            <span class="absolute left-0 top-0 -z-[1] mb-8 flex h-[70px] w-[70px] rotate-[25deg] items-center justify-center rounded-[14px] bg-primary bg-opacity-20 duration-300 group-hover:rotate-45"></span>
                            <svg width="36" height="36" viewBox="0 0 36 36" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M30.5998 1.01245H5.39981C2.98105 1.01245 0.956055 2.9812 0.956055 5.4562V30.6562C0.956055 33.075 2.9248 35.0437 5.39981 35.0437H30.5998C33.0186 35.0437 34.9873 33.075 34.9873 30.6562V5.39995C34.9873 2.9812 33.0186 1.01245 30.5998 1.01245ZM5.39981 3.48745H30.5998C31.6123 3.48745 32.4561 4.3312 32.4561 5.39995V11.1937H3.4873V5.39995C3.4873 4.38745 4.38731 3.48745 5.39981 3.48745ZM3.4873 30.6V13.725H23.0623V32.5125H5.39981C4.38731 32.5125 3.4873 31.6125 3.4873 30.6ZM30.5998 32.5125H25.5373V13.725H32.4561V30.6C32.5123 31.6125 31.6123 32.5125 30.5998 32.5125Z"
                                    fill="white"/>
                            </svg>
                        </div>
                        <h4 class="mb-3 text-xl font-bold text-dark ">
                            Multipurpose StarterKit
                        </h4>
                        <p class="mb-8 text-body-color  lg:mb-9">
                            This starter kit provides a versatile foundation for various web applications.
                        </p>
                        <a href="javascript:void(0)"
                           class="text-base font-medium text-dark hover:text-primary  ">
                            Learn More
                        </a>
                    </div>
                </div>
                <div class="w-full px-4 md:w-1/2 lg:w-1/4">
                    <div class="mb-12 group">
                        <div class="relative z-10 mb-10 flex h-[70px] w-[70px] items-center justify-center rounded-[14px] bg-primary">
                            <span class="absolute left-0 top-0 -z-[1] mb-8 flex h-[70px] w-[70px] rotate-[25deg] items-center justify-center rounded-[14px] bg-primary bg-opacity-20 duration-300 group-hover:rotate-45"></span>
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
                            Batteries Included
                        </h4>
                        <p class="mb-8 text-body-color  lg:mb-9">
                            This starter kit comes with all the essential features to kickstart your project.
                        </p>
                        <a href="javascript:void(0)"
                           class="text-base font-medium text-dark hover:text-primary  ">
                            Learn More
                        </a>
                    </div>
                </div>
                <div class="w-full px-4 md:w-1/2 lg:w-1/4">
                    <div class="mb-12 group">
                        <div class="relative z-10 mb-10 flex h-[70px] w-[70px] items-center justify-center rounded-[14px] bg-primary">
                            <span class="absolute left-0 top-0 -z-[1] mb-8 flex h-[70px] w-[70px] rotate-[25deg] items-center justify-center rounded-[14px] bg-primary bg-opacity-20 duration-300 group-hover:rotate-45"></span>
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
                            Easy to Start With
                        </h4>
                        <p class="mb-8 text-body-color  lg:mb-9">
                            This starter kit is designed to help you quickly get started with your project.
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
                                Brilliant StarterKit to Build Your Websites and platforms Faster.
                            </h2>
                            <p class="mb-10 text-base leading-relaxed text-body-color ">
                                Build your websites and platforms faster with our Laravel StarterKit.
                                Focus on protecting highly vulnerable business applications with
                                interactive panel discussions and roundtables led by subject
                                matter experts.
                            </p>

                            <a href="https://github.com/digiton-ma/laravel-starter-kit"
                               class="inline-flex gap-4 items-center justify-center py-3 text-base font-medium text-center text-white border rounded-md border-primary bg-primary px-7 hover:border-blue-dark hover:bg-blue-dark">
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

                                <span>Star on Github</span>
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

                                <div class="relative z-10 mb-4 flex items-center justify-center overflow-hidden bg-primary px-6 py-12 sm:mb-8 sm:h-[160px] sm:p-5 lg:mb-4 xl:mb-8">
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
                                Start using It Now
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
