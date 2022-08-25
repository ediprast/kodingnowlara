<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Kami melayani pembuatan berbagai jenis website dan aplikasi android. Mulai dari toko online, website perusahaan, website pemerintah, online learning, landing page, web application, website pribadi, dan website lainnya sesuai pesanan Anda.">
        <title>KodingNow | Our Works</title>
        <link rel="icon" href="{{ url('/images/favicon.png') }}" >
        <link rel="preconnect" href="https://fonts.googleapis.com" >
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="true">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
        @vite('resources/css/app.css')
        <script defer src="https://unpkg.com/@alpinejs/intersect@3.x.x/dist/cdn.min.js"></script>
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    </head>
    <body x-data="{  }">
        <header>
            <div class="navbar w-full py-10" x-intersect="$el.classList.add('fadeInDown')">
                <div class="container relative flex flex-row justify-between items-center">
                    <div class="w-6/12">
                        <a href="/">
                            <img class="h-8"
                            src="/images/logo-color40x40.png"
                            alt="KodingNow Logo"/>
                        </a>
                    </div>
        
                    <div class="w-6/12 flex items-center justify-end">
                        <a href="/" class="btn-purple">
                            {{__("words.home")}}
                        </a>
                    </div>
                </div>
            </div>
        </header>

        <section id="work" class="py-20">
            <div class="container text-center">
                <h2 class="font-semibold text-xl text-center mb-10 md:text-3xl">{{__("words.section_title_work")}}</h2>
                @if (count($works) > 0)
                    <div class="grid grid-cols-1 gap-6 mb-10 md:grid-cols-2 lg:grid-cols-3 lg:px-20">
                        @foreach ($works as $item) 
                        <div class="work-item w-full h-72 md:h-80 bg-purple-light rounded-lg p-5 text-center">
                            <div class="h-4/5 relative rounded-lg overflow-hidden mb-5 group">
                                <img class="h-full w-full object-cover absolute" src="{{ url('/') }}{{ $item->image_url }}" alt="Our Works Image">
                                
                                <div class="w-full h-full absolute flex items-center justify-center opacity-70 transition-all duration-300 group-hover:bg-blue-bold">
                                    <a href="/works/{{ $item->slug }}" class="text-center hidden group-hover:inline">
                                        <img src="./images/icons/link.svg" alt="Link Icon">
                                    </a>
                                </div>
                            </div>
                            <p class="font-semibold text-lg text-white">{{ $item->title }}</p>
                        </div>
                        @endforeach
                    </div>
                @else
                    <div class="w-full mx-auto bg-red-200 rounded-full py-3 px-6 md:w-1/2 lg:w-1/3">
                        <p class="text-red-400">Works not found.</p>
                    </div>
                @endif
            </div>
        </section>

        <footer class="pt-10">
            <div class="container">
                <div class="flex flex-col gap-16 md:gap-20 mb-10 lg:flex-row">
                    <div id="contact" class="w-full flex flex-col gap-6 md:gap-12 lg:w-1/3">
                        <h3 class="text-2xl md:text-3xl">KodingNow</h3>
                        <div class="flex flex-row items-center border border-gray-500 rounded-md px-3 py-5 gap-3">
                            <img src="/images/icons/mail.svg" alt="Mail Icon"/>
                            <input type="email" class="w-full bg-white-light focus:outline-none"
                            placeholder="{{__("words.your_email")}}"/>
                            <a href="#">
                            <img class="w-8" src="/images/icons/send.svg" alt="Send Icon"/>
                            </a>
                        </div>

                        <div class="flex flex-row justify-center gap-12 mb-2 lg:justify-start">
                            <div>
                                <a href="https://www.instagram.com/kodingnowcom/" target="_blank" rel="noreferrer" class="group transition-all duration-300">
                                    <svg class="stroke-gray-500 group-hover:stroke-purple-light" width="33" height="33"
                                    viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M23.375 2.75H9.625C5.82804 2.75 2.75 5.82804 2.75 9.625V23.375C2.75 27.172 5.82804 30.25 9.625 30.25H23.375C27.172 30.25 30.25 27.172 30.25 23.375V9.625C30.25 5.82804 27.172 2.75 23.375 2.75Z"
                                            strokeWidth="2"
                                            strokeLinecap="round"
                                            strokeLinejoin="round"
                                        />
                                        <path
                                            d="M22 15.6337C22.1697 16.778 21.9743 17.9467 21.4414 18.9736C20.9086 20.0004 20.0656 20.8331 19.0323 21.3532C17.9989 21.8733 16.8279 22.0544 15.6857 21.8706C14.5436 21.6868 13.4884 21.1475 12.6704 20.3295C11.8524 19.5115 11.3132 18.4564 11.1294 17.3142C10.9456 16.1721 11.1266 15.001 11.6467 13.9677C12.1668 12.9344 12.9995 12.0913 14.0264 11.5585C15.0532 11.0257 16.2219 10.8302 17.3663 10.9999C18.5335 11.173 19.6142 11.7169 20.4486 12.5513C21.283 13.3858 21.8269 14.4664 22 15.6337Z"
                                            strokeWidth="2"
                                            strokeLinecap="round"
                                            strokeLinejoin="round"
                                        />
                                        <path
                                            d="M24.0625 8.9375H24.0763"
                                            strokeWidth="2"
                                            strokeLinecap="round"
                                            strokeLinejoin="round"
                                        />
                                    </svg>
                                </a>
                            </div>

                            <div>
                                <a href="#" class="transition-all duration-300 group">
                                    <svg class="stroke-gray-500 group-hover:stroke-purple-light"width="34" height="33"
                                    viewBox="0 0 34 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clipPath="url(#clip0_38_40)">
                                            <path
                                                d="M32 4.12515C30.6833 5.05394 29.2254 5.76431 27.6825 6.2289C26.8544 5.27673 25.7538 4.60186 24.5297 4.29555C23.3055 3.98925 22.0168 4.0663 20.8379 4.51628C19.6589 4.96626 18.6466 5.76746 17.9379 6.81152C17.2291 7.85557 16.8581 9.09212 16.875 10.3539V11.7289C14.4586 11.7916 12.0643 11.2556 9.90514 10.1689C7.74602 9.08214 5.88919 7.47828 4.5 5.50015C4.5 5.50015 -1 17.8752 11.375 23.3752C8.54323 25.2974 5.16984 26.2612 1.75 26.1252C14.125 33.0002 29.25 26.1252 29.25 10.3127C29.2487 9.92965 29.2119 9.5476 29.14 9.1714C30.5433 7.78746 31.5336 6.04013 32 4.12515V4.12515Z"
                                                strokeWidth="2"
                                                strokeLinecap="round"
                                                strokeLinejoin="round"
                                            />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_38_40">
                                            <rect
                                                width="33"
                                                height="33"
                                                fill="white"
                                                transform="translate(0.375)"
                                            />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </a>
                            </div>

                            <div>
                                <a href="#" class="transition-all duration-300 group">
                                    <svg class="stroke-gray-500 group-hover:stroke-purple-light" width="34" height="33" viewBox="0 0 34 33"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M25.5 2.75H21.375C19.5516 2.75 17.803 3.47433 16.5136 4.76364C15.2243 6.05295 14.5 7.80164 14.5 9.625V13.75H10.375V19.25H14.5V30.25H20V19.25H24.125L25.5 13.75H20V9.625C20 9.26033 20.1449 8.91059 20.4027 8.65273C20.6606 8.39487 21.0103 8.25 21.375 8.25H25.5V2.75Z"
                                        strokeWidth="2"
                                        strokeLinecap="round"
                                        strokeLinejoin="round"
                                    />
                                    </svg>
                                </a>
                            </div>
                        </div>

                        <p class="text-gray-500 text-center lg:text-left -mt-3">kodingnow@gmail.com</p>
                    </div>

                    <div class="w-full flex flex-col gap-10 md:flex-row lg:w-2/3">
                        <div class="w-full flex flex-col gap-7 md:gap-12">
                            <h5 class="text-xl">{{__("words.about")}}</h5>
                            <div class="flex flex-col gap-3 md:gap-7">
                                <a href="#" class="text-gray-500 hover:text-purple-light">{{__("words.about_us")}}
                                </a>
                                <a href="#" class="text-gray-500 hover:text-purple-light">{{__("words.features")}}
                                </a>
                                <a href="#" class="text-gray-500 hover:text-purple-light">{{__("words.latest")}}
                                </a>
                                <a href="#" class="text-gray-500 hover:text-purple-light">{{__("words.career")}}
                                </a>
                            </div>
                        </div>

                        <div class="w-full flex flex-col gap-7 md:gap-12">
                            <h5 class="text-xl">{{__("words.company")}}</h5>
                            <div class="flex flex-col gap-3 md:gap-7">
                                <a href="#" class="text-gray-500 hover:text-purple-light">{{__("words.our_team")}}
                                </a>
                                <a href="#" class="text-gray-500 hover:text-purple-light">{{__("words.partner_with_us")}}
                                </a>
                                <a href="#" class="text-gray-500 hover:text-purple-light">{{__("words.faq")}}
                                </a>
                                <a href="#" class="text-gray-500 hover:text-purple-light">{{__("words.blog")}}
                                </a>
                            </div>
                        </div>

                        <div class="w-full flex flex-col gap-7 md:gap-12">
                            <h5 class="text-xl">{{__("words.support")}}</h5>
                            <div class="flex flex-col gap-3 md:gap-7">
                                <a href="#" class="text-gray-500 hover:text-purple-light">{{__("words.account")}}
                                </a>
                                <a href="#" class="text-gray-500 hover:text-purple-light">{{__("words.support_center")}}</a>
                                <a href="#" class="text-gray-500 hover:text-purple-light">{{__("words.feedback")}}</a>
                                <a href="#" class="text-gray-500 hover:text-purple-light">{{__("words.contact_us")}}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="text-sm md:text-base text-gray-500 text-center pt-12 pb-5 border-t border-gray-300">
                    <p>{{__("words.office_address")}} : Jl. Widororejo No.4 Makamhaji, Kartasura
                    Sukoharjo 57161</p>
                </div>

                <div class="pb-12 text-center text-sm md:text-base">
                    <a href="#" class="hover:text-purple-light">{{__("words.term_of_service")}}</a> |
                    <a href="#" class="hover:text-purple-light">{{__("words.privacy_police")}}</a> |
                    <a href="#" class="hover:text-purple-light">{{__("words.licenses")}}</a>
                    &copy; 2022 KodingNow. Copyright and All rights reserved.
                </div>
            </div>
        </footer>
    </body>
</html>
