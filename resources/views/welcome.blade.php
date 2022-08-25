<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Kami melayani pembuatan berbagai jenis website dan aplikasi android. Mulai dari toko online, website perusahaan, website pemerintah, online learning, landing page, web application, website pribadi, dan website lainnya sesuai pesanan Anda.">
        <title>KodingNow</title>
        <link rel="icon" href="{{ url('/images/favicon.png') }}" >
        <link rel="preconnect" href="https://fonts.googleapis.com" >
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="true">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
        @vite('resources/css/app.css')
        <script defer src="https://unpkg.com/@alpinejs/intersect@3.x.x/dist/cdn.min.js"></script>
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    </head>
    <body x-data="{ navbarOpen: true, langOpen: false }">
        <div class="md:mb-20 lg:mb-48">
            <header class="bg-hero" style="background-image: url('{{ asset('images/bg-hero.png')}}');">
             
                <div class="navbar w-full py-10" x-intersect="$el.classList.add('fadeInDown')">
                    <div class="container relative flex flex-row justify-between items-center">
                        <div class="w-3/12">
                            <a href="/">
                                <img class="h-8"
                                src="/images/logo-color40x40.png"
                                alt="KodingNow Logo"/>
                            </a>
                        </div>
            
                        <div class="w-6/12 hidden lg:block">
                            <ul id="nav" class="gap-8 flex justify-center">
                                <li>
                                    <a href="/" class="inline-block hover:text-purple-light">
                                        {{__("words.home")}}
                                    </a>
                                </li>
                                <li>
                                    <a href="#services" class="inline-block hover:text-purple-light">
                                        {{__("words.services")}}
                                    </a>
                                </li>
                                <li>
                                    <a href="#pricing" class="inline-block hover:text-purple-light">
                                        {{__("words.pricing")}}
                                    </a>
                                </li>
                                <li>
                                    <a href="#how" class="inline-block hover:text-purple-light">
                                        {{__("words.how")}}
                                    </a>
                                </li>
                                <li>
                                    <a href="#work" class="inline-block hover:text-purple-light">
                                        {{__("words.portfolio")}}
                                    </a>
                                </li>
                                <li>
                                <a href="#contact" class="inline-block hover:text-purple-light">
                                    {{__("words.contact")}}
                                </a>
                                </li>
                            </ul>
                        </div>
            
                        <div class="hidden w-3/12 lg:flex items-center gap-6 justify-end">
                            <div class="relative bg-sky-200 py-2 px-2 rounded-lg">
                                <button x-on:click="langOpen=!langOpen" class="flex items-center gap-1">
                                    <p class="font-semibold">
                                        {{ session()->get('lang_code') == 'id' ? 'ID' : 'EN' }}
                                    </p>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </button>
                                <div class="absolute -bottom-16 right-0 bg-sky-200 py-1 px-3 rounded-lg" :class="{'hidden': !langOpen}">
                                    <ul>
                                        <li>
                                            <button onclick="changeLanguage('id')" x-on:click="langOpen = false" class="hover:text-red-500">ID</button>
                                        </li>
                                        <li>
                                            <button 
                                            onclick="changeLanguage('en')" x-on:click="langOpen = false" class="hover:text-red-500">EN</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <a href="https://wa.me/+6288806413757" target="_blank" class="btn-purple">
                                {{__("words.start")}}
                            </a>
                        </div>

                        <div class="menu w-9/12 text-right lg:hidden">
                            <button x-on:click="navbarOpen=!navbarOpen">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-8 w-8 fill-blue-bold transition-all duration-1000 ease-in-out"
                                viewBox="0 0 20 20"
                                fill="currentColor">
                                <path
                                fillRule="evenodd"
                                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                clipRule="evenodd"
                                />
                            </svg>
                            </button>
                        </div>
            
                        <div class="fixed h-full bg-white z-10 top-0 w-full p-10 transition-all duration-300 lg:hidden" :class="{'right-0': !navbarOpen, '-right-full': navbarOpen}">
                            <button  x-on:click="navbarOpen=!navbarOpen" class="absolute right-8 top-8 w-10 fill-blue-bold"
                            type="button">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-8 w-8"
                                viewBox="0 0 20 20"
                                fill="currentColor"
                            >
                                <path
                                fillRule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clipRule="evenodd"
                                />
                            </svg>
                            </button>
                            <ul id="nav" class="gap-4 flex flex-col justify-center">
                                <li>
                                    <a href="/" class="inline-block hover:text-purple-light">
                                        {{__("words.home")}}
                                    </a>
                                </li>
                                <li>
                                    <a href="#services" class="inline-block hover:text-purple-light">
                                        {{__("words.services")}}
                                    </a>
                                </li>
                                <li>
                                    <a href="#pricing" class="inline-block hover:text-purple-light">
                                        {{__("words.pricing")}}
                                    </a>
                                </li>
                                <li>
                                    <a href="#how" class="inline-block hover:text-purple-light">
                                        {{__("words.how")}}
                                    </a>
                                </li>
                                <li>
                                    <a href="#work" class="inline-block hover:text-purple-light">
                                        {{__("words.portfolio")}}
                                    </a>
                                </li>
                                <li>
                                <a href="#contact" class="inline-block hover:text-purple-light">
                                    {{__("words.contact")}}
                                </a>
                                </li>
                                <li class="lg:hidden h-12 flex items-center">
                                    <div class="relative bg-sky-200 py-2 px-2 rounded-lg">
                                        <button x-on:click="langOpen=!langOpen" class="flex items-center gap-1">
                                            <p class="font-semibold">
                                                {{ session()->get('lang_code') == 'id' ? 'ID' : 'EN' }}
                                            </p>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                            </svg>
                                        </button>
                                        <div class="absolute -bottom-16 right-0 bg-sky-200 py-1 px-3 rounded-lg" :class="{'hidden': !langOpen}">
                                            <ul>
                                                <li>
                                                    <button onclick="changeLanguage('id')" x-on:click="langOpen = false" class="hover:text-red-500">ID</button>
                                                </li>
                                                <li>
                                                    <button 
                                                    onclick="changeLanguage('en')" x-on:click="langOpen = false" class="hover:text-red-500">EN</button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="lg:hidden h-12 flex items-center">
                                    <a href="https://wa.me/+6288806413757" target="_blank" class="btn-purple">
                                        {{__("words.start")}}
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>

                <div class="container">
                    <div class="hero text-center py-3">
                        <h1 class="hero-heading font-bold text-xl text-blue-bold mb-5 px-0 md:px-5 md:text-[40px] lg:text-[60px] leading-tight md:mb-8" x-intersect="$el.classList.add('fadeInUp')">
                            The <span class="text-blue-medium">Best Way</span> to Make
                            <br />
                            <span class="text-blue-medium"> Your Dreams</span> Come True
                        </h1>
                        <p class="font-light text-xs md:text-base mb-5 px-0 md:px-10 lg:px-28 text-dark opacity-0 duration-1000" x-intersect="$el.classList.add('opacity-100')">{{__("words.sub_heading")}}</p>
                        <div class="px-10 lg:px-36" x-intersect="$el.classList.add('scaleUp')">
                            <img
                            class="hero-img mx-auto h-auto w-auto"
                            src="/images/hero.png"
                            alt="Hero Image"/>
                        </div>
                    </div>
                </div>
            </header>
        </div>

        <section id="services" class="py-20">
            <div class="container">
              <h2 class="max-w-xl m-auto font-semibold text-center text-lg md:text-xl mb-10 lg:text-3xl">
                {{__("words.section_title_services")}}
              </h2>

              <div class="flex flex-col gap-8 md:flex-row">
                  <div class="service-item w-full bg-white rounded-lg p-12">
                    <div class="h-16 w-16 rounded-full bg-blue-light flex items-center mb-10 md:h-24 md:w-24">
                      <img
                        class="w-8 mx-auto md:w-12"
                        src="./images/icons/computer.svg"
                        alt="Computer Icon"
                      />
                    </div>
                    <h5 class="text-lg font-semibold mb-3 md:text-xl lg:text-2xl">
                        {{__("words.web_service")}}
                    </h5>
                    <p class="text-gray-400 font-medium text-sm md:text-base lg:text-lg">
                      E-Commerce, Landing Page, Company Profile, LMS,
                      Marketplace, Etc.
                    </p>
                  </div>
                  <div class="service-item w-full bg-white rounded-lg p-12">
                    <div class="h-16 w-16 rounded-full bg-blue-light flex items-center mb-10 md:h-24 md:w-24">
                      <img
                        class="h-8 mx-auto md:h-12"
                        src="./images/icons/phone.svg"
                        alt="Computer Icon"
                      />
                    </div>
                    <h5 class="text-lg font-semibold mb-3 md:text-xl lg:text-2xl">
                        {{__("words.app_service")}}
                    </h5>
                    <p class="text-gray-400 font-medium text-sm md:text-base lg:text-lg">
                      Mobile E-Commerce, Mobile Landing Page, Mobile Company
                      Profile, LMS, Marketplace, Etc.
                    </p>
                  </div>
              </div>
            </div>
        </section>

        <section id="whyUs" class="py-4 md:py-20">
            <div class="container">
              <h2 class="font-semibold text-lg text-center mb-10 md:text-xl lg:text-3xl">
                {{__("words.section_title_why_us")}}
              </h2>

              <div class="flex md:flex-row flex-col items-center">
                <div class="w-full text-center justify-center flex md:mr-5 md:w-1/2 lg:mb-0 mb-12">
                  <img class="w-full" id="hero" src="/images/why.png" alt="Laptop Image" />
                </div>
                <div class="w-full flex flex-col justify-start items-center gap-6 md:w-1/2">
                    <div class="whyus-item w-full flex flex-row gap-4">
                      <div>
                        <div class="h-12 w-12 rounded-full bg-blue-light flex items-center mx-auto mb-5">
                          <img class="w-6 mx-auto" src="/images/icons/code.svg" alt="Computer Icon" />
                        </div>
                      </div>
                      <div>
                        <h5 class="text-lg md:text-xl font-semibold mb-3">
                          Source Code
                        </h5>
                        <p class="text-gray-500 font-medium text-sm md:text-base">
                            {{__("words.desc_source_code")}}
                        </p>
                      </div>
                    </div>
                    <div class="whyus-item  w-full flex flex-row gap-4">
                      <div>
                        <div class="h-12 w-12 rounded-full bg-blue-light flex items-center mx-auto mb-5">
                          <img class="w-6 mx-auto" src="/images/icons/cpu.svg" alt="Computer Icon" />
                        </div>
                      </div>
                      <div>
                        <h5 class="text-lg md:text-xl font-semibold mb-3">
                          Domain & Hosting
                        </h5>
                        <p class="text-gray-500 font-medium text-sm md:text-base">
                            {{__("words.desc_domain")}}
                        </p>
                      </div>
                    </div>
                    <div class="whyus-item w-full flex flex-row gap-4">
                      <div>
                        <div class="h-12 w-12 rounded-full bg-blue-light flex items-center mx-auto mb-5">
                          <img class="w-6 mx-auto" src="/images/icons/server.svg" alt="Computer Icon"/>
                        </div>
                      </div>
                      <div>
                        <h5 class="text-lg md:text-xl font-semibold mb-3">
                          Free Maintenance
                        </h5>
                        <p class="text-gray-500 font-medium text-sm md:text-base">
                            {{__("words.desc_maintenance")}}
                        </p>
                      </div>
                    </div>
                    <div class="whyus-item  w-full flex flex-row gap-4">
                      <div>
                        <div class="h-12 w-12 rounded-full bg-blue-light flex items-center mx-auto mb-5">
                          <img class="w-6 mx-auto" src="/images/icons/upload-cloud.svg" alt="Computer Icon"/>
                        </div>
                      </div>
                      <div>
                        <h5 class="text-lg md:text-xl font-semibold mb-3">
                          Free Upload to Google Play
                        </h5>
                        <p class="text-gray-500 font-medium text-sm md:text-base">
                            {{__("words.desc_upload")}}
                        </p>
                      </div>
                    </div>
                </div>
              </div>
            </div>
        </section>

        <section id="pricing" class="py-20">
            <div class="container">
                <h2 class="font-semibold text-lg text-center mb-10 md:text-xl lg:text-3xl">
                    {{__("words.pricing")}}
                </h2>
    
                <div class="grid grid-cols-1 gap-6 md:gap-12 md:grid-cols-2 lg:grid-cols-3">
                    <div class="pricing-item bg-white flex flex-col rounded-[46px] p-8 md:p-14 w-full">
                        <div class="flex-1">
                            <h5 class="text-lg md:text-xl text-purple-light mb-5">
                            Web Basic
                            </h5>
                            <div class="mb-5">
                                <span>Start from</span>
                                <br />
                                <span span class="text-2xl md:text-3xl font-semibold text-purple-light">Rp 1.XXX.000,-</span>
                            </div>
                            <p class="text-sm mb-8">
                                Suitable for personal websites, company profiles, and other simple websites.
                            </p>
    
                            <ul class="mb-8 flex flex-col gap-2 text-sm md:text-base">
                            <li class="flex flex-row gap-4 items-center">
                                <div>
                                <div class="w-8 h-8 flex items-center justify-center bg-blue-light rounded-full">
                                    <img
                                    class="w-4"
                                    src="/images/icons/check.svg"
                                    alt=""
                                    />
                                </div>
                                </div>
                                Source code
                            </li>
                            <li class="flex flex-row gap-4 items-center">
                                <div>
                                <div class="w-8 h-8 flex items-center justify-center bg-blue-light rounded-full">
                                    <img
                                    class="w-4"
                                    src="/images/icons/check.svg"
                                    alt=""
                                    />
                                </div>
                                </div>
                                Website design
                            </li>
                            <li class="w-full flex flex-row gap-4 items-center">
                                <div>
                                <div class="w-8 h-8 flex items-center justify-center bg-blue-light rounded-full">
                                    <img
                                    class="w-4"
                                    src="/images/icons/check.svg"
                                    alt=""
                                    />
                                </div>
                                </div>
                                Domain [dot] com for 1 year
                            </li>
                            <li class="flex flex-row gap-4 items-center">
                                <div>
                                <div class="w-8 h-8 flex items-center justify-center bg-blue-light rounded-full">
                                    <img
                                    class="w-4"
                                    src="/images/icons/check.svg"
                                    alt=""
                                    />
                                </div>
                                </div>
                                Hosting for 1 year
                            </li>
                            <li class="flex flex-row gap-4 items-center">
                                <div>
                                <div class="w-8 h-8 flex items-center justify-center bg-blue-light rounded-full">
                                    <img
                                    class="w-4"
                                    src="/images/icons/check.svg"
                                    alt=""
                                    />
                                </div>
                                </div>
                                5 menus
                            </li>
                            <li class="flex flex-row gap-4 items-center">
                                <div>
                                <div class="w-8 h-8 flex items-center justify-center bg-blue-light rounded-full">
                                    <img
                                    class="w-4"
                                    src="/images/icons/check.svg"
                                    alt=""
                                    />
                                </div>
                                </div>
                                Dynamic website
                            </li>
                            <li class="flex flex-row gap-4 items-center">
                                <div>
                                <div class="w-8 h-8 flex items-center justify-center bg-blue-light rounded-full">
                                    <img
                                    class="w-4"
                                    src="/images/icons/check.svg"
                                    alt=""
                                    />
                                </div>
                                </div>
                                7 working days
                            </li>
                            <li class="flex flex-row gap-4 items-center">
                                <div>
                                <div class="w-8 h-8 flex items-center justify-center bg-blue-light rounded-full">
                                    <img
                                    class="w-4"
                                    src="/images/icons/check.svg"
                                    alt=""
                                    />
                                </div>
                                </div>
                                1 week maintenance
                            </li>
                            </ul>
                        </div>
                        <a href="https://wa.me/+6288806413757?text=Paket Web Basic. " class="btn-square bg-white border-purple-light text-purple-light hover:bg-purple-light hover:text-white">Choose Plan</a>
                    </div>

                    <div class="pricing-item bg-purple-light text-white flex flex-col rounded-[46px] p-8 md:p-14 w-full">
                        <div class="flex-1">
                            <h5 class="text-lg md:text-xl mb-5">Web Regular</h5>
                            <div class="mb-5">
                                <span>Start from</span>
                                <br />
                                <span class="text-2xl md:text-3xl font-semibold">
                                    Rp 4.XXX.000,-
                                </span>
                            </div>
                            <p class="text-sm mb-8">
                            Suitable for government web, virtual lab web, and other
                            websites with more complex features.
                            </p>
    
                            <ul class="mb-8 flex flex-col gap-2 text-sm md:text-base">
                            <li class="flex flex-row gap-4 items-center">
                                <div>
                                <div class="w-8 h-8 flex items-center justify-center bg-blue-light rounded-full">
                                    <img
                                    class="w-4"
                                    src="/images/icons/check.svg"
                                    alt=""
                                    />
                                </div>
                                </div>
                                Source code
                            </li>
                            <li class="flex flex-row gap-4 items-center">
                                <div>
                                <div class="w-8 h-8 flex items-center justify-center bg-blue-light rounded-full">
                                    <img
                                    class="w-4"
                                    src="/images/icons/check.svg"
                                    alt=""
                                    />
                                </div>
                                </div>
                                Website design
                            </li>
                            <li class="flex flex-row gap-4 items-center">
                                <div>
                                <div class="w-8 h-8 flex items-center justify-center bg-blue-light rounded-full">
                                    <img
                                    class="w-4"
                                    src="/images/icons/check.svg"
                                    alt=""
                                    />
                                </div>
                                </div>
                                Domain [dot] com for 1 year
                            </li>
                            <li class="flex flex-row gap-4 items-center">
                                <div>
                                <div class="w-8 h-8 flex items-center justify-center bg-blue-light rounded-full">
                                    <img
                                    class="w-4"
                                    src="/images/icons/check.svg"
                                    alt=""
                                    />
                                </div>
                                </div>
                                Hosting for 1 year
                            </li>
                            <li class="flex flex-row gap-4 items-center">
                                <div>
                                <div class="w-8 h-8 flex items-center justify-center bg-blue-light rounded-full">
                                    <img
                                    class="w-4"
                                    src="/images/icons/check.svg"
                                    alt=""
                                    />
                                </div>
                                </div>
                                10 menus
                            </li>
                            <li class="flex flex-row gap-4 items-center">
                                <div>
                                <div class="w-8 h-8 flex items-center justify-center bg-blue-light rounded-full">
                                    <img
                                    class="w-4"
                                    src="/images/icons/check.svg"
                                    alt=""
                                    />
                                </div>
                                </div>
                                Dynamic website
                            </li>
                            <li class="flex flex-row gap-4 items-center">
                                <div>
                                <div class="w-8 h-8 flex items-center justify-center bg-blue-light rounded-full">
                                    <img
                                    class="w-4"
                                    src="/images/icons/check.svg"
                                    alt=""
                                    />
                                </div>
                                </div>
                                30 working days
                            </li>
                            <li class="flex flex-row gap-4 items-center">
                                <div>
                                <div class="w-8 h-8 flex items-center justify-center bg-blue-light rounded-full">
                                    <img
                                    class="w-4"
                                    src="/images/icons/check.svg"
                                    alt=""
                                    />
                                </div>
                                </div>
                                2 week maintenance
                            </li>
                            </ul>
                        </div>
                        <a href="https://wa.me/+6288806413757?text=Paket Web Regular. " class="btn-square bg-purple-light text-white border-white hover:bg-white hover:text-purple-light">
                        Choose Plan
                        </a>
                    </div>

                    <div class="pricing-item bg-white flex flex-col rounded-[46px] p-8 md:p-14 w-full">
                        <div class="flex-1">
                            <h5 class="text-lg md:text-xl text-purple-light mb-5">
                                Web Premium
                            </h5>
                            <div class="mb-5">
                                <span>Start from</span>
                                <br />
                                <span class="text-2xl md:text-3xl font-semibold text-purple-light">
                                    Rp 9.XXX.000,-
                                </span>
                            </div>
                            <p class="text-sm mb-8">
                                Suitable for e-learning websites, academic platforms, and
                                other more complex websites.
                            </p>
    
                            <ul class="mb-8 flex flex-col gap-2 text-sm md:text-base">
                            <li class="flex flex-row gap-4 items-center">
                                <div>
                                <div class="w-8 h-8 flex items-center justify-center bg-blue-light rounded-full">
                                    <img
                                    class="w-4"
                                    src="/images/icons/check.svg"
                                    alt=""
                                    />
                                </div>
                                </div>
                                Source code
                            </li>
                            <li class="flex flex-row gap-4 items-center">
                                <div>
                                <div class="w-8 h-8 flex items-center justify-center bg-blue-light rounded-full">
                                    <img
                                    class="w-4"
                                    src="/images/icons/check.svg"
                                    alt=""
                                    />
                                </div>
                                </div>
                                Website design
                            </li>
                            <li class="flex flex-row gap-4 items-center">
                                <div>
                                <div class="w-8 h-8 flex items-center justify-center bg-blue-light rounded-full">
                                    <img
                                    class="w-4"
                                    src="/images/icons/check.svg"
                                    alt=""
                                    />
                                </div>
                                </div>
                                Domain [dot] com, id, etc for 1 year
                            </li>
                            <li class="flex flex-row gap-4 items-center">
                                <div>
                                <div class="w-8 h-8 flex items-center justify-center bg-blue-light rounded-full">
                                    <img
                                    class="w-4"
                                    src="/images/icons/check.svg"
                                    alt=""
                                    />
                                </div>
                                </div>
                                Hosting for 1 year & Unlimited
                            </li>
                            <li class="flex flex-row gap-4 items-center">
                                <div>
                                <div class="w-8 h-8 flex items-center justify-center bg-blue-light rounded-full">
                                    <img
                                    class="w-4"
                                    src="/images/icons/check.svg"
                                    alt=""
                                    />
                                </div>
                                </div>
                                Customize menus
                            </li>
                            <li class="flex flex-row gap-4 items-center">
                                <div>
                                <div class="w-8 h-8 flex items-center justify-center bg-blue-light rounded-full">
                                    <img
                                    class="w-4"
                                    src="/images/icons/check.svg"
                                    alt=""
                                    />
                                </div>
                                </div>
                                Dynamic website
                            </li>
                            <li class="flex flex-row gap-4 items-center">
                                <div>
                                <div class="w-8 h-8 flex items-center justify-center bg-blue-light rounded-full">
                                    <img
                                    class="w-4"
                                    src="/images/icons/check.svg"
                                    alt=""
                                    />
                                </div>
                                </div>
                                Over 30 working days
                            </li>
                            <li class="flex flex-row gap-4 items-center">
                                <div>
                                <div class="w-8 h-8 flex items-center justify-center bg-blue-light rounded-full">
                                    <img
                                    class="w-4"
                                    src="/images/icons/check.svg"
                                    alt=""
                                    />
                                </div>
                                </div>
                                1 month maintenance
                            </li>
                            </ul>
                        </div>
                        <a href="https://wa.me/+6288806413757?text=Paket Web Premium. "
                            class="btn-square bg-white border-purple-light text-purple-light hover:bg-purple-light hover:text-white">Choose Plan</a>
                    </div>

                    <div class="pricing-item bg-white flex flex-col rounded-[46px] p-8 md:p-14 w-full">
                        <div class="flex-1">
                            <h5 class="text-lg md:text-xl text-purple-light mb-5">
                                App Basic
                            </h5>
                            <div class="mb-5">
                                <span>Start from</span>
                                <br />
                                <span class="text-2xl md:text-3xl font-semibold text-purple-light">
                                    Rp 2.XXX.000,-
                                </span>
                            </div>
                            <p class="text-sm mb-8">
                            Suitable for personal applications, corporate profile
                            applications and other simple applications.
                            </p>
    
                            <ul class="mb-8 flex flex-col gap-2 text-sm md:text-base">
                            <li class="flex flex-row gap-4 items-center">
                                <div>
                                <div class="w-8 h-8 flex items-center justify-center bg-blue-light rounded-full">
                                    <img
                                    class="w-4"
                                    src="/images/icons/check.svg"
                                    alt=""
                                    />
                                </div>
                                </div>
                                Source code
                            </li>
                            <li class="flex flex-row gap-4 items-center">
                                <div>
                                <div class="w-8 h-8 flex items-center justify-center bg-blue-light rounded-full">
                                    <img
                                    class="w-4"
                                    src="/images/icons/check.svg"
                                    alt=""
                                    />
                                </div>
                                </div>
                                Application design
                            </li>
                            <li class="flex flex-row gap-4 items-center">
                                <div>
                                <div class="w-8 h-8 flex items-center justify-center bg-blue-light rounded-full">
                                    <img
                                    class="w-4"
                                    src="/images/icons/check.svg"
                                    alt=""
                                    />
                                </div>
                                </div>
                                Domain [dot] com for 1 year
                            </li>
                            <li class="flex flex-row gap-4 items-center">
                                <div>
                                <div class="w-8 h-8 flex items-center justify-center bg-blue-light rounded-full">
                                    <img
                                    class="w-4"
                                    src="/images/icons/check.svg"
                                    alt=""
                                    />
                                </div>
                                </div>
                                Hosting for 1 year
                            </li>
                            <li class="flex flex-row gap-4 items-center">
                                <div>
                                <div class="w-8 h-8 flex items-center justify-center bg-blue-light rounded-full">
                                    <img
                                    class="w-4"
                                    src="/images/icons/check.svg"
                                    alt=""
                                    />
                                </div>
                                </div>
                                1 static landing page & 5 menus
                            </li>
                            <li class="flex flex-row gap-4 items-center">
                                <div>
                                <div class="w-8 h-8 flex items-center justify-center bg-blue-light rounded-full">
                                    <img
                                    class="w-4"
                                    src="/images/icons/check.svg"
                                    alt=""
                                    />
                                </div>
                                </div>
                                Free upload Google Play
                            </li>
                            <li class="flex flex-row gap-4 items-center">
                                <div>
                                <div class="w-8 h-8 flex items-center justify-center bg-blue-light rounded-full">
                                    <img
                                    class="w-4"
                                    src="/images/icons/check.svg"
                                    alt=""
                                    />
                                </div>
                                </div>
                                14 working days
                            </li>
                            <li class="flex flex-row gap-4 items-center">
                                <div>
                                <div class="w-8 h-8 flex items-center justify-center bg-blue-light rounded-full">
                                    <img
                                    class="w-4"
                                    src="/images/icons/check.svg"
                                    alt=""
                                    />
                                </div>
                                </div>
                                1 week maintenance
                            </li>
                            </ul>
                        </div>
                        <a href="https://wa.me/+6288806413757?text=Paket Android App Basic. " class="btn-square bg-white border-purple-light text-purple-light hover:bg-purple-light hover:text-white">Choose Plan</a>
                    </div>

                    <div class="pricing-item bg-white flex flex-col rounded-[46px] p-8 md:p-14 w-full">
                        <div class="flex-1">
                            <h5 class="text-lg md:text-xl text-purple-light mb-5">
                                App Regular
                            </h5>
                            <div class="mb-5">
                                <span>Start from</span>
                                <br />
                                <span class="text-2xl md:text-3xl font-semibold text-purple-light">
                                    Rp 5.XXX.000,-
                                </span>
                            </div>
                            <p class="text-sm mb-8">
                            Suitable for government apps, laboratory apps, and other
                            applications with more complex features.
                            </p>
    
                            <ul class="mb-8 flex flex-col gap-2 text-sm md:text-base">
                            <li class="flex flex-row gap-4 items-center">
                                <div>
                                <div class="w-8 h-8 flex items-center justify-center bg-blue-light rounded-full">
                                    <img
                                    class="w-4"
                                    src="/images/icons/check.svg"
                                    alt=""
                                    />
                                </div>
                                </div>
                                Source code
                            </li>
                            <li class="flex flex-row gap-4 items-center">
                                <div>
                                <div class="w-8 h-8 flex items-center justify-center bg-blue-light rounded-full">
                                    <img
                                    class="w-4"
                                    src="/images/icons/check.svg"
                                    alt=""
                                    />
                                </div>
                                </div>
                                Application design
                            </li>
                            <li class="flex flex-row gap-4 items-center">
                                <div>
                                <div class="w-8 h-8 flex items-center justify-center bg-blue-light rounded-full">
                                    <img
                                    class="w-4"
                                    src="/images/icons/check.svg"
                                    alt=""
                                    />
                                </div>
                                </div>
                                Domain [dot] com for 1 year
                            </li>
                            <li class="flex flex-row gap-4 items-center">
                                <div>
                                <div class="w-8 h-8 flex items-center justify-center bg-blue-light rounded-full">
                                    <img
                                    class="w-4"
                                    src="/images/icons/check.svg"
                                    alt=""
                                    />
                                </div>
                                </div>
                                Hosting for 1 year
                            </li>
                            <li class="flex flex-row gap-4 items-center">
                                <div>
                                <div class="w-8 h-8 flex items-center justify-center bg-blue-light rounded-full">
                                    <img
                                    class="w-4"
                                    src="/images/icons/check.svg"
                                    alt=""
                                    />
                                </div>
                                </div>
                                1 static landing page & 10 menus
                            </li>
                            <li class="flex flex-row gap-4 items-center">
                                <div>
                                <div class="w-8 h-8 flex items-center justify-center bg-blue-light rounded-full">
                                    <img
                                    class="w-4"
                                    src="/images/icons/check.svg"
                                    alt=""
                                    />
                                </div>
                                </div>
                                Free upload Google Play
                            </li>
                            <li class="flex flex-row gap-4 items-center">
                                <div>
                                <div class="w-8 h-8 flex items-center justify-center bg-blue-light rounded-full">
                                    <img
                                    class="w-4"
                                    src="/images/icons/check.svg"
                                    alt=""
                                    />
                                </div>
                                </div>
                                30 working days
                            </li>
                            <li class="flex flex-row gap-4 items-center">
                                <div>
                                <div class="w-8 h-8 flex items-center justify-center bg-blue-light rounded-full">
                                    <img
                                    class="w-4"
                                    src="/images/icons/check.svg"
                                    alt=""
                                    />
                                </div>
                                </div>
                                2 week maintenance
                            </li>
                            </ul>
                        </div>
                        <a href="https://wa.me/+6288806413757?text=Paket Android App Regular. " class="btn-square bg-white border-purple-light text-purple-light hover:bg-purple-light hover:text-white">Choose Plan</a>
                    </div>

                    <div class="pricing-item bg-white flex flex-col rounded-[46px] p-8 md:p-14 w-full">
                        <div class="flex-1">
                            <h5 class="text-lg md:text-xl text-purple-light mb-5">
                                App Premium
                            </h5>
                            <div class="mb-5">
                                <span>Start from</span>
                                <br />
                                <span class="text-2xl md:text-3xl font-semibold text-purple-light">
                                    Rp 10.XXX.000,-
                                </span>
                            </div>
                            <p class="text-sm mb-8">Suitable for e-learning applications, academic systems, and
                            other more complex applications.</p>
            
                            <ul class="mb-8 flex flex-col gap-2 text-sm md:text-base">
                            <li class="flex flex-row gap-4 items-center">
                                <div>
                                <div class="w-8 h-8 flex items-center justify-center bg-blue-light rounded-full">
                                    <img
                                    class="w-4"
                                    src="/images/icons/check.svg"
                                    alt=""
                                    />
                                </div>
                                </div>
                                Source code
                            </li>
                            <li class="flex flex-row gap-4 items-center">
                                <div>
                                <div class="w-8 h-8 flex items-center justify-center bg-blue-light rounded-full">
                                    <img
                                    class="w-4"
                                    src="/images/icons/check.svg"
                                    alt=""
                                    />
                                </div>
                                </div>
                                Application design
                            </li>
                            <li class="flex flex-row gap-4 items-center">
                                <div>
                                <div class="w-8 h-8 flex items-center justify-center bg-blue-light rounded-full">
                                    <img
                                    class="w-4"
                                    src="/images/icons/check.svg"
                                    alt=""
                                    />
                                </div>
                                </div>
                                Domain [dot] com for 1 year
                            </li>
                            <li class="flex flex-row gap-4 items-center">
                                <div>
                                <div class="w-8 h-8 flex items-center justify-center bg-blue-light rounded-full">
                                    <img
                                    class="w-4"
                                    src="/images/icons/check.svg"
                                    alt=""
                                    />
                                </div>
                                </div>
                                Hosting for 1 year
                            </li>
                            <li class="flex flex-row gap-4 items-center">
                                <div>
                                <div class="w-8 h-8 flex items-center justify-center bg-blue-light rounded-full">
                                    <img
                                    class="w-4"
                                    src="/images/icons/check.svg"
                                    alt=""
                                    />
                                </div>
                                </div>
                                Customize landing page & menus
                            </li>
                            <li class="flex flex-row gap-4 items-center">
                                <div>
                                <div class="w-8 h-8 flex items-center justify-center bg-blue-light rounded-full">
                                    <img
                                    class="w-4"
                                    src="/images/icons/check.svg"
                                    alt=""
                                    />
                                </div>
                                </div>
                                Free upload Google Play
                            </li>
                            <li class="flex flex-row gap-4 items-center">
                                <div>
                                <div class="w-8 h-8 flex items-center justify-center bg-blue-light rounded-full">
                                    <img
                                    class="w-4"
                                    src="/images/icons/check.svg"
                                    alt=""
                                    />
                                </div>
                                </div>
                                30+ working days
                            </li>
                            <li class="flex flex-row gap-4 items-center">
                                <div>
                                <div class="w-8 h-8 flex items-center justify-center bg-blue-light rounded-full">
                                    <img
                                    class="w-4"
                                    src="/images/icons/check.svg"
                                    alt=""
                                    />
                                </div>
                                </div>
                                1 month maintenance
                            </li>
                            </ul>
                        </div>
                        <a href="https://wa.me/+6288806413757?text=Paket Android App Premium. " class="btn-square bg-white border-purple-light text-purple-light hover:bg-purple-light hover:text-white">Choose Plan</a>
                    </div>
                </div>
            </div>
        </section>

        <section id="how" class="py-20">
            <div class="container">
                <div class="bg-blue-light rounded-xl p-8 md:p-16">
                    <h2 class="font-semibold text-lg md:text-xl text-center mb-10 lg:text-3xl">{{__("words.section_title_how")}}</h2>

                    <div class="flex flex-col gap-8 md:flex-row">
                        <div class="how-item how-1">
                            <div class="h-12 w-12 rounded-full bg-purple-light flex items-center justify-center mb-5">
                                <span class="text-3xl font-bold text-white-light">1</span>
                            </div>
                            <h5 class="text-lg md:text-xl font-semibold mb-3">{{__("words.title_how_contact")}}</h5>
                            <p class="text-gray-500 font-medium text-sm md:text-base">{{__("words.desc_how_contact")}}.</p>
                        </div>

                        <div class="how-item how-2">
                            <div class="h-12 w-12 rounded-full bg-purple-light flex items-center justify-center mb-5">
                                <span class="text-3xl font-bold text-white-light">2
                                </span>
                            </div>
                            <h5 class="text-lg md:text-xl font-semibold mb-3">{{__("words.title_how_plan")}}</h5>
                            <p class="text-gray-500 font-medium text-sm md:text-base">{{__("words.desc_how_plan")}}</p>
                        </div>

                        <div class="how-item how-3">
                            <div class="h-12 w-12 rounded-full bg-purple-light flex items-center justify-center mb-5">
                                <span class="text-3xl font-bold text-white-light">3
                                </span>
                            </div>
                            <h5 class="text-lg md:text-xl font-semibold mb-3">{{__("words.title_how_dev")}}</h5>
                            <p class="text-gray-500 font-medium text-sm md:text-base">{{__("words.desc_how_dev")}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

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
                <a href="/works" class="btn-purple">{{__("words.see_more")}}</a>
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

        <a target="_blank" href="https://wa.me/+6288806413757" class="fixed w-12 h-12 bg-white border-2 border-purple-light rounded-full flex justify-center items-center bottom-6 right-6 group md:bottom-12">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 fill-purple-light group-hover:-translate-y-2 duration-300" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M18 10c0 3.866-3.582 7-8 7a8.841 8.841 0 01-4.083-.98L2 17l1.338-3.123C2.493 12.767 2 11.434 2 10c0-3.866 3.582-7 8-7s8 3.134 8 7zM7 9H5v2h2V9zm8 0h-2v2h2V9zM9 9h2v2H9V9z" clip-rule="evenodd" />
            </svg>
        </a>
    
        <script>
            function changeLanguage(lang){
                window.location='{{url("lang")}}/'+lang;
            }
        </script>
    </body>
</html>
