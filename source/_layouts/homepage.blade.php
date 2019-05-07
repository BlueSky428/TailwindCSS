@extends('_layouts.master')

@section('meta')
<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="@tailwindcss">
<meta name="twitter:title" content="Tailwind CSS - A Utility-First CSS Framework for Rapid UI Development">
<meta name="twitter:description" content="{{ $page->description ? $page->description : 'Documentation for the Tailwind CSS framework.' }}">
<meta name="twitter:image" content="https://tailwindcss.com/img/tailwind-square.png">
<meta name="twitter:creator" content="@tailwindcss">
<meta property="og:url" content="https://tailwindcss.com/" />
<meta property="og:type" content="article" />
<meta property="og:title" content="Tailwind CSS - A Utility-First CSS Framework for Rapid UI Development" />
<meta property="og:description" content="{{ $page->description ? $page->description : 'Documentation for the Tailwind CSS framework.' }}" />
<meta property="og:image" content="https://tailwindcss.com/img/twitter-card.png" />
@endsection

@section('title', 'Tailwind CSS - A Utility-First CSS Framework for Rapid UI Development')

@push('headScripts')
<script src="{{ mix('/js/nav.js', 'assets/build') }}"></script>
@endpush

@section('body')

<div>
  <div id="header">
    <div class="bg-gray-100">

      {{-- Top nav --}}
      <div class="flex items-center">
        <div class="w-full max-w-screen-xl relative mx-auto px-6">
          <div class="border-b-2 border-gray-200 h-24 flex flex-col justify-center">
            <div class="flex items-center -mx-6">

              {{-- Logo section --}}
              <div class="lg:w-1/4 xl:w-1/5 pl-6 pr-6">
                <div class="flex items-center">
                  <a href="/" class="block">
                    {{-- <img src="/img/logo.svg" class="h-6 w-auto hidden md:block" alt="Tailwind CSS"> --}}
                    <svg class="h-12 w-auto hidden md:block" viewBox="0 0 273 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <title>Tailwind CSS></title>
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M32 16C24.8 16 20.3 19.6 18.5 26.8C21.2 23.2 24.35 21.85 27.95 22.75C30.004 23.2635 31.4721 24.7536 33.0971 26.4031C35.7443 29.0901 38.8081 32.2 45.5 32.2C52.7 32.2 57.2 28.6 59 21.4C56.3 25 53.15 26.35 49.55 25.45C47.496 24.9365 46.0279 23.4464 44.4029 21.7969C41.7557 19.1099 38.6919 16 32 16ZM18.5 32.2C11.3 32.2 6.8 35.8 5 43C7.7 39.4 10.85 38.05 14.45 38.95C16.504 39.4635 17.9721 40.9536 19.5971 42.6031C22.2443 45.2901 25.3081 48.4 32 48.4C39.2 48.4 43.7 44.8 45.5 37.6C42.8 41.2 39.65 42.55 36.05 41.65C33.996 41.1365 32.5279 39.6464 30.9029 37.9969C28.2557 35.3099 25.1919 32.2 18.5 32.2Z" fill="url(#paint0_linear)"/>
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M85.996 29.652H81.284V38.772C81.284 41.204 82.88 41.166 85.996 41.014V44.7C79.688 45.46 77.18 43.712 77.18 38.772V29.652H73.684V25.7H77.18V20.596L81.284 19.38V25.7H85.996V29.652ZM103.958 25.7H108.062V44.7H103.958V41.964C102.514 43.978 100.272 45.194 97.308 45.194C92.14 45.194 87.846 40.824 87.846 35.2C87.846 29.538 92.14 25.206 97.308 25.206C100.272 25.206 102.514 26.422 103.958 28.398V25.7ZM97.954 41.28C101.374 41.28 103.958 38.734 103.958 35.2C103.958 31.666 101.374 29.12 97.954 29.12C94.534 29.12 91.95 31.666 91.95 35.2C91.95 38.734 94.534 41.28 97.954 41.28ZM114.902 22.85C113.458 22.85 112.28 21.634 112.28 20.228C112.28 18.784 113.458 17.606 114.902 17.606C116.346 17.606 117.524 18.784 117.524 20.228C117.524 21.634 116.346 22.85 114.902 22.85ZM112.85 44.7V25.7H116.954V44.7H112.85ZM121.704 44.7V16.96H125.808V44.7H121.704ZM152.446 25.7H156.778L150.812 44.7H146.784L142.832 31.894L138.842 44.7H134.814L128.848 25.7H133.18L136.866 38.81L140.856 25.7H144.77L148.722 38.81L152.446 25.7ZM161.87 22.85C160.426 22.85 159.248 21.634 159.248 20.228C159.248 18.784 160.426 17.606 161.87 17.606C163.314 17.606 164.492 18.784 164.492 20.228C164.492 21.634 163.314 22.85 161.87 22.85ZM159.818 44.7V25.7H163.922V44.7H159.818ZM178.666 25.206C182.922 25.206 185.962 28.094 185.962 33.034V44.7H181.858V33.452C181.858 30.564 180.186 29.044 177.602 29.044C174.904 29.044 172.776 30.64 172.776 34.516V44.7H168.672V25.7H172.776V28.132C174.03 26.156 176.082 25.206 178.666 25.206ZM205.418 18.1H209.522V44.7H205.418V41.964C203.974 43.978 201.732 45.194 198.768 45.194C193.6 45.194 189.306 40.824 189.306 35.2C189.306 29.538 193.6 25.206 198.768 25.206C201.732 25.206 203.974 26.422 205.418 28.398V18.1ZM199.414 41.28C202.834 41.28 205.418 38.734 205.418 35.2C205.418 31.666 202.834 29.12 199.414 29.12C195.994 29.12 193.41 31.666 193.41 35.2C193.41 38.734 195.994 41.28 199.414 41.28ZM223.278 45.194C217.54 45.194 213.246 40.824 213.246 35.2C213.246 29.538 217.54 25.206 223.278 25.206C227.002 25.206 230.232 27.144 231.752 30.108L228.218 32.16C227.382 30.374 225.52 29.234 223.24 29.234C219.896 29.234 217.35 31.78 217.35 35.2C217.35 38.62 219.896 41.166 223.24 41.166C225.52 41.166 227.382 39.988 228.294 38.24L231.828 40.254C230.232 43.256 227.002 45.194 223.278 45.194ZM238.592 30.944C238.592 34.402 248.814 32.312 248.814 39.342C248.814 43.142 245.508 45.194 241.404 45.194C237.604 45.194 234.868 43.484 233.652 40.748L237.186 38.696C237.794 40.406 239.314 41.432 241.404 41.432C243.228 41.432 244.634 40.824 244.634 39.304C244.634 35.922 234.412 37.822 234.412 31.02C234.412 27.448 237.49 25.206 241.366 25.206C244.482 25.206 247.066 26.65 248.396 29.158L244.938 31.096C244.254 29.614 242.924 28.93 241.366 28.93C239.884 28.93 238.592 29.576 238.592 30.944ZM256.11 30.944C256.11 34.402 266.332 32.312 266.332 39.342C266.332 43.142 263.026 45.194 258.922 45.194C255.122 45.194 252.386 43.484 251.17 40.748L254.704 38.696C255.312 40.406 256.832 41.432 258.922 41.432C260.746 41.432 262.152 40.824 262.152 39.304C262.152 35.922 251.93 37.822 251.93 31.02C251.93 27.448 255.008 25.206 258.884 25.206C262 25.206 264.584 26.65 265.914 29.158L262.456 31.096C261.772 29.614 260.442 28.93 258.884 28.93C257.402 28.93 256.11 29.576 256.11 30.944Z" fill="#2D3748"/>
                      <defs>
                        <linearGradient id="paint0_linear" x1="3.5" y1="16" x2="59" y2="48" gradientUnits="userSpaceOnUse">
                          <stop stop-color="#2298BD"/>
                          <stop offset="1" stop-color="#0ED7B5"/>
                          {{-- <stop stop-color="#1F9BC2"/> --}}
                          {{-- <stop offset="1" stop-color="#1DE8C5"/> --}}
                        </linearGradient>
                      </defs>
                    </svg>

                    <svg class="w-10 h-10 block md:hidden" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg">
                      <title>Tailwind CSS</title>
                      <path d="M13.5 11.1C15.3 3.9 19.8.3 27 .3c10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05zM0 27.3c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05z" transform="translate(5 16)" fill="url(#logoMarkGradient)" fill-rule="evenodd"></path>
                      <defs>
                        <linearGradient x1="0%" y1="0%" y2="100%" id="logoMarkGradient">
                          <stop stop-color="#2298BD"/>
                          <stop offset="1" stop-color="#0ED7B5"/>
                          {{-- <stop stop-color="#2383AE" offset="0%"></stop> --}}
                          {{-- <stop stop-color="#6DD7B9" offset="100%"></stop> --}}
                        </linearGradient>
                      </defs>
                    </svg>
                  </a>
                </div>
              </div>

              <div class="flex flex-grow lg:w-3/4 xl:w-4/5">

                {{-- Search section --}}
                <div class="w-full lg:px-6 lg:w-3/4 xl:px-12">
                  <div class="relative">
                    <input id="docsearch" class="transition bg-white shadow-md focus:outline-0 border border-transparent placeholder-gray-700 rounded-lg py-2 pr-4 pl-10 block w-full appearance-none leading-normal" type="text" placeholder="Search the docs (Press &quot;/&quot; to focus)">
                    <div class="pointer-events-none absolute inset-y-0 left-0 pl-4 flex items-center">
                      <svg class="fill-current pointer-events-none text-gray-600 w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"/></svg>
                    </div>
                  </div>
                </div>


                <button type="button" id="sidebar-open" class="text-gray-500 focus:outline-none focus:text-gray-700 flex px-6 items-center lg:hidden">
                  <svg class="fill-current w-4 h-4 cursor-pointer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
                </button type="button">


                <button type="button" id="sidebar-close" class="text-gray-500 focus:outline-none focus:text-gray-700 hidden flex px-6 items-center lg:hidden">
                  <svg class="fill-current w-4 h-4 cursor-pointer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 8.586L2.929 1.515 1.515 2.929 8.586 10l-7.071 7.071 1.414 1.414L10 11.414l7.071 7.071 1.414-1.414L11.414 10l7.071-7.071-1.414-1.414L10 8.586z"/></svg>
                </button type="button">

                {{-- Links section --}}
                <div class="hidden lg:flex lg:w-1/4 px-6">
                  <div class="flex justify-start items-center text-gray-500">
                    <a class="block flex items-center hover:text-gray-700 mr-6" href="https://github.com/tailwindcss/tailwindcss">
                      <svg class="fill-current w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>GitHub</title><path d="M10 0a10 10 0 0 0-3.16 19.49c.5.1.68-.22.68-.48l-.01-1.7c-2.78.6-3.37-1.34-3.37-1.34-.46-1.16-1.11-1.47-1.11-1.47-.9-.62.07-.6.07-.6 1 .07 1.53 1.03 1.53 1.03.9 1.52 2.34 1.08 2.91.83.1-.65.35-1.09.63-1.34-2.22-.25-4.55-1.11-4.55-4.94 0-1.1.39-1.99 1.03-2.69a3.6 3.6 0 0 1 .1-2.64s.84-.27 2.75 1.02a9.58 9.58 0 0 1 5 0c1.91-1.3 2.75-1.02 2.75-1.02.55 1.37.2 2.4.1 2.64.64.7 1.03 1.6 1.03 2.69 0 3.84-2.34 4.68-4.57 4.93.36.31.68.92.68 1.85l-.01 2.75c0 .26.18.58.69.48A10 10 0 0 0 10 0"/></svg>
                    </a>
                    <a class="block flex items-center hover:text-gray-700 mr-6" href="https://twitter.com/tailwindcss">
                      <svg class="fill-current w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Twitter</title><path d="M6.29 18.25c7.55 0 11.67-6.25 11.67-11.67v-.53c.8-.59 1.49-1.3 2.04-2.13-.75.33-1.54.55-2.36.65a4.12 4.12 0 0 0 1.8-2.27c-.8.48-1.68.81-2.6 1a4.1 4.1 0 0 0-7 3.74 11.65 11.65 0 0 1-8.45-4.3 4.1 4.1 0 0 0 1.27 5.49C2.01 8.2 1.37 8.03.8 7.7v.05a4.1 4.1 0 0 0 3.3 4.03 4.1 4.1 0 0 1-1.86.07 4.1 4.1 0 0 0 3.83 2.85A8.23 8.23 0 0 1 0 16.4a11.62 11.62 0 0 0 6.29 1.84"/></svg>
                    </a>
                    <a class="block flex items-center hover:text-gray-700" href="https://discord.gg/7NF8GNe">
                      <svg class="fill-current w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 146 146"><title>Discord</title><path d="M107.75 125.001s-4.5-5.375-8.25-10.125c16.375-4.625 22.625-14.875 22.625-14.875-5.125 3.375-10 5.75-14.375 7.375-6.25 2.625-12.25 4.375-18.125 5.375-12 2.25-23 1.625-32.375-.125-7.125-1.375-13.25-3.375-18.375-5.375-2.875-1.125-6-2.5-9.125-4.25-.375-.25-.75-.375-1.125-.625-.25-.125-.375-.25-.5-.375-2.25-1.25-3.5-2.125-3.5-2.125s6 10 21.875 14.75c-3.75 4.75-8.375 10.375-8.375 10.375-27.625-.875-38.125-19-38.125-19 0-40.25 18-72.875 18-72.875 18-13.5 35.125-13.125 35.125-13.125l1.25 1.5c-22.5 6.5-32.875 16.375-32.875 16.375s2.75-1.5 7.375-3.625c13.375-5.875 24-7.5 28.375-7.875.75-.125 1.375-.25 2.125-.25 7.625-1 16.25-1.25 25.25-.25 11.875 1.375 24.625 4.875 37.625 12 0 0-9.875-9.375-31.125-15.875l1.75-2S110 19.626 128 33.126c0 0 18 32.625 18 72.875 0 0-10.625 18.125-38.25 19zM49.625 66.626c-7.125 0-12.75 6.25-12.75 13.875s5.75 13.875 12.75 13.875c7.125 0 12.75-6.25 12.75-13.875.125-7.625-5.625-13.875-12.75-13.875zm45.625 0c-7.125 0-12.75 6.25-12.75 13.875s5.75 13.875 12.75 13.875c7.125 0 12.75-6.25 12.75-13.875s-5.625-13.875-12.75-13.875z" fill-rule="nonzero"/></svg>
                    </a>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
      {{-- /Top nav --}}

      <div class="w-full max-w-screen-xl relative mx-auto px-6 pt-16 pb-40 md:pb-24">
        <div class="xl:flex -mx-6">
          <div class="px-6 text-left md:text-center xl:text-left max-w-2xl md:max-w-3xl mx-auto">
            <h1 class="text-3xl sm:text-4xl md:text-5xl xl:text-4xl font-light leading-tight">A utility-first CSS framework for <span class="sm:block text-teal-500 font-normal">rapidly building custom designs.</span></h1>
            <p class="mt-6 leading-relaxed sm:text-lg md:text-xl xl:text-lg text-gray-600">
              Tailwind CSS is a highly customizable, low-level CSS framework that gives you all of the building blocks you need to build bespoke designs without any of the annoying opinionated styles you have to fight to override.
            </p>
            <div class="flex mt-6 justify-start md:justify-center xl:justify-start">
              <a href="/docs/installation" class="rounded-lg px-4 md:px-5 xl:px-4 py-3 md:py-4 xl:py-3 bg-teal-500 hover:bg-teal-600 md:text-lg xl:text-base text-white font-semibold leading-tight shadow-md">Get Started</a>
              <a href="#what-is-tailwind" class="ml-4 rounded-lg px-4 md:px-5 xl:px-4 py-3 md:py-4 xl:py-3 bg-white hover:bg-gray-200 md:text-lg xl:text-base text-gray-800 font-semibold leading-tight shadow-md">Why Tailwind?</a>
            </div>
          </div>
          <div class="mt-12 xl:mt-0 px-6 flex-shrink-0 hidden md:block">
            <iframe src="/workflow-animation" class="border-0 mx-auto" style="width: 40rem; height: 30rem;"></iframe>
          </div>
        </div>
      </div>
    </div>
    <div class="bg-center bg-repeat-x -mb-8 md:hidden" style="height: 142.5px; margin-top: -142.5px; background-size: 3241.5px 142.5px; background-image: url(&quot;data:image/svg+xml,%3Csvg viewBox='0 0 4322 190' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath fill='%23F7FAFC' d='M1 0h4320v190H1z' /%3E%3Cpath d='M1441 190H1V95s202.817-45 360-45 360 45 360 45 202.817 45 360 45c157.18 0 360-45 360-45v95z' fill='%23fff' /%3E%3Cpath d='M721 95c-.217.976-.216.976-.214.977l.007.001.028.007.111.024.441.097c.389.085.969.212 1.732.377 1.525.33 3.783.814 6.711 1.43 5.857 1.23 14.398 2.989 25.137 5.099a2518.171 2518.171 0 0 0 86.945 15.475C912.268 129.74 1002.33 141 1081 141v-2c-78.51 0-168.451-11.24-238.786-22.487a2518.276 2518.276 0 0 1-86.875-15.463 1956.06 1956.06 0 0 1-25.111-5.095 1180.206 1180.206 0 0 1-8.427-1.803l-.438-.096-.11-.024-.027-.006-.007-.002c-.002 0-.002 0-.219.976zm360 46c78.67 0 168.73-11.26 239.1-22.513a2519.232 2519.232 0 0 0 86.95-15.475c10.74-2.11 19.28-3.868 25.13-5.1 2.93-.615 5.19-1.1 6.72-1.43.76-.164 1.34-.29 1.73-.376.19-.043.34-.075.44-.097.05-.01.08-.019.11-.024a.228.228 0 0 1 .03-.007v-.001c.01 0 .01 0-.21-.977l-.22-.976-.01.002-.02.006c-.03.005-.06.013-.11.024l-.44.096-1.73.376c-1.52.33-3.77.812-6.7 1.427-5.85 1.23-14.38 2.987-25.11 5.095-21.46 4.217-51.71 9.84-86.87 15.463C1249.45 127.76 1159.51 139 1081 139v2zM1 95c.217.976.217.976.219.976a.12.12 0 0 1 .007-.002l.027-.006.11-.024.438-.096 1.726-.376c1.523-.33 3.776-.812 6.7-1.427A1958.54 1958.54 0 0 1 35.34 88.95a2517.83 2517.83 0 0 1 86.875-15.463C192.549 62.24 282.488 51 361 51v-2c-78.671 0-168.732 11.26-239.102 22.513a2520.39 2520.39 0 0 0-86.945 15.474 1960.08 1960.08 0 0 0-25.137 5.1 1190.357 1190.357 0 0 0-8.884 1.904l-.111.024-.028.007-.007.001c-.002 0-.003 0 .214.977zm360-44c78.512 0 168.451 11.24 238.786 22.487a2517.73 2517.73 0 0 1 86.875 15.463 1956.06 1956.06 0 0 1 25.111 5.095 1180.206 1180.206 0 0 1 8.427 1.803l.438.096.11.024.027.006.007.002c.002 0 .002 0 .219-.976s.216-.976.214-.977l-.007-.001-.028-.007a52.997 52.997 0 0 1-.111-.024l-.441-.097c-.389-.085-.969-.212-1.732-.377-1.525-.33-3.783-.814-6.711-1.43a1963.63 1963.63 0 0 0-25.137-5.1 2520.12 2520.12 0 0 0-86.945-15.474C529.732 60.26 439.671 49 361 49v2z' fill='%23EDF2F7' /%3E%3Cpath d='M721 95c-.11.994-.109.994-.108.994h.007a4.033 4.033 0 0 0 .139.016l.44.049 1.731.188c1.524.165 3.781.407 6.708.714 5.855.616 14.394 1.495 25.131 2.55a4859.582 4859.582 0 0 0 86.929 7.736C912.338 112.873 1002.37 118.5 1081 118.5v-2c-78.55 0-168.521-5.623-238.864-11.247a4862.892 4862.892 0 0 1-86.892-7.733 3742.387 3742.387 0 0 1-25.118-2.548 2277.852 2277.852 0 0 1-8.431-.901l-.438-.049-.11-.012-.028-.003h-.007c-.001 0-.002 0-.112.993zm360 23.5c78.63 0 168.66-5.627 239.02-11.253 35.19-2.813 65.46-5.626 86.93-7.736 10.74-1.055 19.28-1.934 25.13-2.55a2033.552 2033.552 0 0 0 8.44-.902l.44-.049.11-.012.03-.003h.01L1441 95l-.11-.994-.01.001-.03.003-.11.012-.44.048c-.38.043-.96.106-1.72.189-1.53.164-3.78.406-6.71.713-5.85.615-14.38 1.494-25.11 2.548-21.47 2.11-51.73 4.921-86.9 7.733-70.34 5.624-160.31 11.247-238.86 11.247v2zM1 95c.11.994.111.994.113.994l.006-.001.028-.003.11-.012a832.34 832.34 0 0 1 2.167-.236c1.523-.165 3.777-.407 6.702-.714 5.851-.615 14.385-1.494 25.118-2.548a4862.105 4862.105 0 0 1 86.892-7.733C192.479 79.123 282.448 73.5 361 73.5v-2c-78.631 0-168.662 5.627-239.023 11.253a4863.709 4863.709 0 0 0-86.929 7.736 3741.098 3741.098 0 0 0-25.13 2.55 2267.42 2267.42 0 0 0-8.44.902l-.44.049-.11.012-.029.003H.892c-.001.001-.002.001.108.995zm360-21.5c78.552 0 168.521 5.623 238.864 11.247a4861.657 4861.657 0 0 1 86.892 7.733 3742.387 3742.387 0 0 1 25.118 2.548 2277.852 2277.852 0 0 1 8.431.901l.438.049.11.012.028.003h.007c.001 0 .002 0 .112-.993.11-.994.109-.994.108-.994h-.007a4.033 4.033 0 0 0-.139-.016l-.44-.049-1.731-.188c-1.524-.165-3.781-.407-6.708-.714a3745.292 3745.292 0 0 0-25.131-2.55 4863.637 4863.637 0 0 0-86.929-7.736C529.662 77.127 439.631 71.5 361 71.5v2z' fill='%23EDF2F7' /%3E%3Cpath d='M721 95c-.406.914-.405.914-.403.915l.007.003.028.013c.025.01.063.027.112.05l.441.193c.39.171.971.424 1.734.755 1.527.66 3.786 1.628 6.715 2.86a1159.053 1159.053 0 0 0 25.146 10.204 1439.3 1439.3 0 0 0 86.972 30.959C912.132 163.461 1002.25 186 1081 186v-2c-78.43 0-168.315-22.461-238.639-44.952a1439.162 1439.162 0 0 1-86.849-30.916 1160.302 1160.302 0 0 1-25.103-10.187 718.783 718.783 0 0 1-6.696-2.852 417.12 417.12 0 0 1-2.162-.943l-.109-.048a1.004 1.004 0 0 1-.034-.015c-.002 0-.002-.001-.408.913zm360 91c78.75 0 168.87-22.539 239.25-45.048a1440.417 1440.417 0 0 0 86.97-30.959c10.74-4.222 19.29-7.74 25.15-10.204 2.93-1.232 5.18-2.2 6.71-2.86.76-.33 1.34-.584 1.73-.755.2-.085.35-.15.45-.194.05-.022.08-.038.11-.05l.03-.012v-.003s.01-.001-.4-.915l-.41-.913v.003a.14.14 0 0 0-.03.012c-.03.01-.06.027-.11.048-.1.043-.24.107-.44.192-.39.17-.96.422-1.72.75a754.49 754.49 0 0 1-6.7 2.853c-5.85 2.459-14.37 5.971-25.1 10.187a1440.735 1440.735 0 0 1-86.85 30.916C1249.31 161.539 1159.43 184 1081 184v2zM1 95c.406.914.406.914.408.913l.006-.003.028-.012.11-.048.436-.192a716.557 716.557 0 0 1 8.421-3.603c5.847-2.459 14.376-5.971 25.103-10.187a1438.123 1438.123 0 0 1 86.849-30.915C192.685 28.46 282.566 6 361 6V4c-78.749 0-168.868 22.539-239.248 45.047a1440.043 1440.043 0 0 0-86.972 30.96A1160.442 1160.442 0 0 0 9.634 90.21c-2.93 1.232-5.188 2.2-6.715 2.86a407.475 407.475 0 0 0-2.175.949l-.112.05-.028.012-.007.003c-.002 0-.003.001.403.915zM361 6c78.434 0 168.315 22.461 238.639 44.953a1438.217 1438.217 0 0 1 86.849 30.915 1161.015 1161.015 0 0 1 25.103 10.187 718.783 718.783 0 0 1 6.696 2.852 417.12 417.12 0 0 1 2.162.943l.109.048a1.004 1.004 0 0 1 .034.015c.002 0 .002.001.408-.913.406-.914.405-.914.403-.915l-.007-.003-.028-.013c-.025-.01-.063-.027-.112-.05l-.441-.193c-.39-.171-.971-.424-1.734-.755a729.681 729.681 0 0 0-6.715-2.86 1159.897 1159.897 0 0 0-25.146-10.204 1440.245 1440.245 0 0 0-86.972-30.96C529.868 26.54 439.749 4 361 4v2z' fill='%23EDF2F7' /%3E%3Cpath d='M2881 190H1441V95s202.82-45 360-45 360 45 360 45 202.82 45 360 45 360-45 360-45v95z' fill='%23fff' /%3E%3Cpath d='M721 95c-.316.949-.315.95-.313.95l.007.002.028.01.112.036.44.146a862.55 862.55 0 0 0 8.447 2.71 1402.428 1402.428 0 0 0 25.142 7.652 1778.488 1778.488 0 0 0 86.96 23.216C912.199 146.603 1002.29 163.5 1081 163.5v-2c-78.47 0-168.382-16.853-238.71-33.722a1777.19 1777.19 0 0 1-86.861-23.19 1399.482 1399.482 0 0 1-25.106-7.641 856.118 856.118 0 0 1-8.424-2.703l-.437-.144-.11-.037-.027-.009-.007-.002c-.002 0-.002 0-.318.948zm360 68.5c78.71 0 168.8-16.897 239.18-33.778a1782.519 1782.519 0 0 0 86.96-23.216c10.74-3.166 19.28-5.804 25.14-7.652a766.601 766.601 0 0 0 8.45-2.71l.44-.146c.05-.016.08-.028.11-.037a.172.172 0 0 1 .03-.009v-.002s.01-.001-.31-.95l-.32-.948v.002a.163.163 0 0 0-.03.01c-.03.007-.06.02-.11.036-.1.032-.25.08-.44.144-.39.127-.96.316-1.72.563-1.53.493-3.78 1.218-6.7 2.14-5.85 1.844-14.38 4.479-25.11 7.641a1777.105 1777.105 0 0 1-86.86 23.19C1249.38 144.647 1159.47 161.5 1081 161.5v2zM1 95c.316.949.316.949.318.948l.007-.002.027-.01a61.574 61.574 0 0 1 .547-.18 866.032 866.032 0 0 1 8.424-2.703 1404.167 1404.167 0 0 1 25.106-7.64 1776.776 1776.776 0 0 1 86.861-23.19C192.618 45.352 282.527 28.5 361 28.5v-2c-78.71 0-168.801 16.897-239.177 33.778a1778.831 1778.831 0 0 0-86.96 23.216 1405.54 1405.54 0 0 0-25.142 7.652 867.48 867.48 0 0 0-8.447 2.71 178.697 178.697 0 0 0-.587.194c-.002 0-.003.001.313.95zm360-66.5c78.473 0 168.382 16.853 238.71 33.722a1776.52 1776.52 0 0 1 86.861 23.19 1401.624 1401.624 0 0 1 25.106 7.641 856.118 856.118 0 0 1 8.424 2.703l.437.144.11.037.027.009.007.002c.002 0 .002 0 .318-.948.316-.949.315-.95.313-.95l-.007-.002-.028-.01-.112-.036a862.55 862.55 0 0 0-8.887-2.856 1406.453 1406.453 0 0 0-25.142-7.652 1778.897 1778.897 0 0 0-86.96-23.216C529.801 43.397 439.71 26.5 361 26.5v2z' fill='%234FD1C5' /%3E%3Cpath d='M4321 190H2881V95s202.82-45 360-45 360 45 360 45 202.82 45 360 45 360-45 360-45v95z' fill='%23fff' /%3E%3Cpath d='M1441 95s202.82-45 360-45 360 45 360 45 202.82 45 360 45 360-45 360-45 202.82-45 360-45 360 45 360 45 202.82 45 360 45 360-45 360-45' stroke='%23EDF2F7' stroke-width='2' /%3E%3Cpath d='M1441 95s202.82-22.5 360-22.5S2161 95 2161 95s202.82 22.5 360 22.5S2881 95 2881 95s202.82-22.5 360-22.5S3601 95 3601 95s202.82 22.5 360 22.5S4321 95 4321 95' stroke='%23EDF2F7' stroke-width='2' /%3E%3Cpath d='M1441 95s202.82-90 360-90 360 90 360 90 202.82 90 360 90 360-90 360-90 202.82-90 360-90 360 90 360 90 202.82 90 360 90 360-90 360-90' stroke='%23EDF2F7' stroke-width='2' /%3E%3Cpath d='M1441 95s202.82-67.5 360-67.5S2161 95 2161 95s202.82 67.5 360 67.5S2881 95 2881 95s202.82-67.5 360-67.5S3601 95 3601 95s202.82 67.5 360 67.5S4321 95 4321 95' stroke='%234FD1C5' stroke-width='2' /%3E%3C/svg%3E%0A&quot;);"></div>
    <div class="bg-center bg-repeat-x -mb-8 hidden md:block" style="height: 190px; margin-top: -190px; background-size: 4322px 190px; background-image: url(&quot;data:image/svg+xml,%3Csvg viewBox='0 0 4322 190' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath fill='%23F7FAFC' d='M1 0h4320v190H1z' /%3E%3Cpath d='M1441 190H1V95s202.817-45 360-45 360 45 360 45 202.817 45 360 45c157.18 0 360-45 360-45v95z' fill='%23fff' /%3E%3Cpath d='M721 95c-.217.976-.216.976-.214.977l.007.001.028.007.111.024.441.097c.389.085.969.212 1.732.377 1.525.33 3.783.814 6.711 1.43 5.857 1.23 14.398 2.989 25.137 5.099a2518.171 2518.171 0 0 0 86.945 15.475C912.268 129.74 1002.33 141 1081 141v-2c-78.51 0-168.451-11.24-238.786-22.487a2518.276 2518.276 0 0 1-86.875-15.463 1956.06 1956.06 0 0 1-25.111-5.095 1180.206 1180.206 0 0 1-8.427-1.803l-.438-.096-.11-.024-.027-.006-.007-.002c-.002 0-.002 0-.219.976zm360 46c78.67 0 168.73-11.26 239.1-22.513a2519.232 2519.232 0 0 0 86.95-15.475c10.74-2.11 19.28-3.868 25.13-5.1 2.93-.615 5.19-1.1 6.72-1.43.76-.164 1.34-.29 1.73-.376.19-.043.34-.075.44-.097.05-.01.08-.019.11-.024a.228.228 0 0 1 .03-.007v-.001c.01 0 .01 0-.21-.977l-.22-.976-.01.002-.02.006c-.03.005-.06.013-.11.024l-.44.096-1.73.376c-1.52.33-3.77.812-6.7 1.427-5.85 1.23-14.38 2.987-25.11 5.095-21.46 4.217-51.71 9.84-86.87 15.463C1249.45 127.76 1159.51 139 1081 139v2zM1 95c.217.976.217.976.219.976a.12.12 0 0 1 .007-.002l.027-.006.11-.024.438-.096 1.726-.376c1.523-.33 3.776-.812 6.7-1.427A1958.54 1958.54 0 0 1 35.34 88.95a2517.83 2517.83 0 0 1 86.875-15.463C192.549 62.24 282.488 51 361 51v-2c-78.671 0-168.732 11.26-239.102 22.513a2520.39 2520.39 0 0 0-86.945 15.474 1960.08 1960.08 0 0 0-25.137 5.1 1190.357 1190.357 0 0 0-8.884 1.904l-.111.024-.028.007-.007.001c-.002 0-.003 0 .214.977zm360-44c78.512 0 168.451 11.24 238.786 22.487a2517.73 2517.73 0 0 1 86.875 15.463 1956.06 1956.06 0 0 1 25.111 5.095 1180.206 1180.206 0 0 1 8.427 1.803l.438.096.11.024.027.006.007.002c.002 0 .002 0 .219-.976s.216-.976.214-.977l-.007-.001-.028-.007a52.997 52.997 0 0 1-.111-.024l-.441-.097c-.389-.085-.969-.212-1.732-.377-1.525-.33-3.783-.814-6.711-1.43a1963.63 1963.63 0 0 0-25.137-5.1 2520.12 2520.12 0 0 0-86.945-15.474C529.732 60.26 439.671 49 361 49v2z' fill='%23EDF2F7' /%3E%3Cpath d='M721 95c-.11.994-.109.994-.108.994h.007a4.033 4.033 0 0 0 .139.016l.44.049 1.731.188c1.524.165 3.781.407 6.708.714 5.855.616 14.394 1.495 25.131 2.55a4859.582 4859.582 0 0 0 86.929 7.736C912.338 112.873 1002.37 118.5 1081 118.5v-2c-78.55 0-168.521-5.623-238.864-11.247a4862.892 4862.892 0 0 1-86.892-7.733 3742.387 3742.387 0 0 1-25.118-2.548 2277.852 2277.852 0 0 1-8.431-.901l-.438-.049-.11-.012-.028-.003h-.007c-.001 0-.002 0-.112.993zm360 23.5c78.63 0 168.66-5.627 239.02-11.253 35.19-2.813 65.46-5.626 86.93-7.736 10.74-1.055 19.28-1.934 25.13-2.55a2033.552 2033.552 0 0 0 8.44-.902l.44-.049.11-.012.03-.003h.01L1441 95l-.11-.994-.01.001-.03.003-.11.012-.44.048c-.38.043-.96.106-1.72.189-1.53.164-3.78.406-6.71.713-5.85.615-14.38 1.494-25.11 2.548-21.47 2.11-51.73 4.921-86.9 7.733-70.34 5.624-160.31 11.247-238.86 11.247v2zM1 95c.11.994.111.994.113.994l.006-.001.028-.003.11-.012a832.34 832.34 0 0 1 2.167-.236c1.523-.165 3.777-.407 6.702-.714 5.851-.615 14.385-1.494 25.118-2.548a4862.105 4862.105 0 0 1 86.892-7.733C192.479 79.123 282.448 73.5 361 73.5v-2c-78.631 0-168.662 5.627-239.023 11.253a4863.709 4863.709 0 0 0-86.929 7.736 3741.098 3741.098 0 0 0-25.13 2.55 2267.42 2267.42 0 0 0-8.44.902l-.44.049-.11.012-.029.003H.892c-.001.001-.002.001.108.995zm360-21.5c78.552 0 168.521 5.623 238.864 11.247a4861.657 4861.657 0 0 1 86.892 7.733 3742.387 3742.387 0 0 1 25.118 2.548 2277.852 2277.852 0 0 1 8.431.901l.438.049.11.012.028.003h.007c.001 0 .002 0 .112-.993.11-.994.109-.994.108-.994h-.007a4.033 4.033 0 0 0-.139-.016l-.44-.049-1.731-.188c-1.524-.165-3.781-.407-6.708-.714a3745.292 3745.292 0 0 0-25.131-2.55 4863.637 4863.637 0 0 0-86.929-7.736C529.662 77.127 439.631 71.5 361 71.5v2z' fill='%23EDF2F7' /%3E%3Cpath d='M721 95c-.406.914-.405.914-.403.915l.007.003.028.013c.025.01.063.027.112.05l.441.193c.39.171.971.424 1.734.755 1.527.66 3.786 1.628 6.715 2.86a1159.053 1159.053 0 0 0 25.146 10.204 1439.3 1439.3 0 0 0 86.972 30.959C912.132 163.461 1002.25 186 1081 186v-2c-78.43 0-168.315-22.461-238.639-44.952a1439.162 1439.162 0 0 1-86.849-30.916 1160.302 1160.302 0 0 1-25.103-10.187 718.783 718.783 0 0 1-6.696-2.852 417.12 417.12 0 0 1-2.162-.943l-.109-.048a1.004 1.004 0 0 1-.034-.015c-.002 0-.002-.001-.408.913zm360 91c78.75 0 168.87-22.539 239.25-45.048a1440.417 1440.417 0 0 0 86.97-30.959c10.74-4.222 19.29-7.74 25.15-10.204 2.93-1.232 5.18-2.2 6.71-2.86.76-.33 1.34-.584 1.73-.755.2-.085.35-.15.45-.194.05-.022.08-.038.11-.05l.03-.012v-.003s.01-.001-.4-.915l-.41-.913v.003a.14.14 0 0 0-.03.012c-.03.01-.06.027-.11.048-.1.043-.24.107-.44.192-.39.17-.96.422-1.72.75a754.49 754.49 0 0 1-6.7 2.853c-5.85 2.459-14.37 5.971-25.1 10.187a1440.735 1440.735 0 0 1-86.85 30.916C1249.31 161.539 1159.43 184 1081 184v2zM1 95c.406.914.406.914.408.913l.006-.003.028-.012.11-.048.436-.192a716.557 716.557 0 0 1 8.421-3.603c5.847-2.459 14.376-5.971 25.103-10.187a1438.123 1438.123 0 0 1 86.849-30.915C192.685 28.46 282.566 6 361 6V4c-78.749 0-168.868 22.539-239.248 45.047a1440.043 1440.043 0 0 0-86.972 30.96A1160.442 1160.442 0 0 0 9.634 90.21c-2.93 1.232-5.188 2.2-6.715 2.86a407.475 407.475 0 0 0-2.175.949l-.112.05-.028.012-.007.003c-.002 0-.003.001.403.915zM361 6c78.434 0 168.315 22.461 238.639 44.953a1438.217 1438.217 0 0 1 86.849 30.915 1161.015 1161.015 0 0 1 25.103 10.187 718.783 718.783 0 0 1 6.696 2.852 417.12 417.12 0 0 1 2.162.943l.109.048a1.004 1.004 0 0 1 .034.015c.002 0 .002.001.408-.913.406-.914.405-.914.403-.915l-.007-.003-.028-.013c-.025-.01-.063-.027-.112-.05l-.441-.193c-.39-.171-.971-.424-1.734-.755a729.681 729.681 0 0 0-6.715-2.86 1159.897 1159.897 0 0 0-25.146-10.204 1440.245 1440.245 0 0 0-86.972-30.96C529.868 26.54 439.749 4 361 4v2z' fill='%23EDF2F7' /%3E%3Cpath d='M2881 190H1441V95s202.82-45 360-45 360 45 360 45 202.82 45 360 45 360-45 360-45v95z' fill='%23fff' /%3E%3Cpath d='M721 95c-.316.949-.315.95-.313.95l.007.002.028.01.112.036.44.146a862.55 862.55 0 0 0 8.447 2.71 1402.428 1402.428 0 0 0 25.142 7.652 1778.488 1778.488 0 0 0 86.96 23.216C912.199 146.603 1002.29 163.5 1081 163.5v-2c-78.47 0-168.382-16.853-238.71-33.722a1777.19 1777.19 0 0 1-86.861-23.19 1399.482 1399.482 0 0 1-25.106-7.641 856.118 856.118 0 0 1-8.424-2.703l-.437-.144-.11-.037-.027-.009-.007-.002c-.002 0-.002 0-.318.948zm360 68.5c78.71 0 168.8-16.897 239.18-33.778a1782.519 1782.519 0 0 0 86.96-23.216c10.74-3.166 19.28-5.804 25.14-7.652a766.601 766.601 0 0 0 8.45-2.71l.44-.146c.05-.016.08-.028.11-.037a.172.172 0 0 1 .03-.009v-.002s.01-.001-.31-.95l-.32-.948v.002a.163.163 0 0 0-.03.01c-.03.007-.06.02-.11.036-.1.032-.25.08-.44.144-.39.127-.96.316-1.72.563-1.53.493-3.78 1.218-6.7 2.14-5.85 1.844-14.38 4.479-25.11 7.641a1777.105 1777.105 0 0 1-86.86 23.19C1249.38 144.647 1159.47 161.5 1081 161.5v2zM1 95c.316.949.316.949.318.948l.007-.002.027-.01a61.574 61.574 0 0 1 .547-.18 866.032 866.032 0 0 1 8.424-2.703 1404.167 1404.167 0 0 1 25.106-7.64 1776.776 1776.776 0 0 1 86.861-23.19C192.618 45.352 282.527 28.5 361 28.5v-2c-78.71 0-168.801 16.897-239.177 33.778a1778.831 1778.831 0 0 0-86.96 23.216 1405.54 1405.54 0 0 0-25.142 7.652 867.48 867.48 0 0 0-8.447 2.71 178.697 178.697 0 0 0-.587.194c-.002 0-.003.001.313.95zm360-66.5c78.473 0 168.382 16.853 238.71 33.722a1776.52 1776.52 0 0 1 86.861 23.19 1401.624 1401.624 0 0 1 25.106 7.641 856.118 856.118 0 0 1 8.424 2.703l.437.144.11.037.027.009.007.002c.002 0 .002 0 .318-.948.316-.949.315-.95.313-.95l-.007-.002-.028-.01-.112-.036a862.55 862.55 0 0 0-8.887-2.856 1406.453 1406.453 0 0 0-25.142-7.652 1778.897 1778.897 0 0 0-86.96-23.216C529.801 43.397 439.71 26.5 361 26.5v2z' fill='%234FD1C5' /%3E%3Cpath d='M4321 190H2881V95s202.82-45 360-45 360 45 360 45 202.82 45 360 45 360-45 360-45v95z' fill='%23fff' /%3E%3Cpath d='M1441 95s202.82-45 360-45 360 45 360 45 202.82 45 360 45 360-45 360-45 202.82-45 360-45 360 45 360 45 202.82 45 360 45 360-45 360-45' stroke='%23EDF2F7' stroke-width='2' /%3E%3Cpath d='M1441 95s202.82-22.5 360-22.5S2161 95 2161 95s202.82 22.5 360 22.5S2881 95 2881 95s202.82-22.5 360-22.5S3601 95 3601 95s202.82 22.5 360 22.5S4321 95 4321 95' stroke='%23EDF2F7' stroke-width='2' /%3E%3Cpath d='M1441 95s202.82-90 360-90 360 90 360 90 202.82 90 360 90 360-90 360-90 202.82-90 360-90 360 90 360 90 202.82 90 360 90 360-90 360-90' stroke='%23EDF2F7' stroke-width='2' /%3E%3Cpath d='M1441 95s202.82-67.5 360-67.5S2161 95 2161 95s202.82 67.5 360 67.5S2881 95 2881 95s202.82-67.5 360-67.5S3601 95 3601 95s202.82 67.5 360 67.5S4321 95 4321 95' stroke='%234FD1C5' stroke-width='2' /%3E%3C/svg%3E%0A&quot;);"></div>
  </div>
</div>


{{-- Main container --}}
<div class="w-full max-w-screen-xl mx-auto px-6">
  <div class="lg:flex -mx-6">
    {{-- Side nav --}}
    <div id="sidebar" class="hidden absolute z-90 top-24 w-full border-b -mb-16 lg:-mb-0 lg:static lg:border-b-0 lg:pt-0 lg:w-1/4 lg:block lg:border-0 xl:w-1/5">
      <div id="navWrapper" class="lg:block lg:relative lg:sticky lg:top-0 bg-gray-100 lg:bg-transparent overflow-hidden">
        <div id="navGradient" class="hidden lg:block h-16 pointer-events-none absolute inset-x-0 z-10" style="background-image: linear-gradient(rgba(255,255,255,1), rgba(255,255,255,0));"></div>
        <nav id="nav" class="px-6 pt-6 overflow-y-auto text-base lg:text-sm lg:py-12 lg:pl-6 lg:pr-8 sticky?lg:h-screen">
          @foreach ($page->navigation as $sectionName => $sectionItems)
          <div class="mb-8">
            <h5 class="mb-3 lg:mb-2 text-gray-500 uppercase tracking-wide font-bold text-sm lg:text-xs">{{ $sectionName }}</h5>
            <ul>
              @foreach ($sectionItems as $name => $slugOrChildren)
                <li class="mb-3 lg:mb-1">
                  <a class="px-2 -mx-2 py-1 transition-fast relative block {{ $page->active('/docs/' . $slugOrChildren) ? 'text-teal-600 font-medium' : 'hover:translate-r-2px hover:text-gray-900 text-gray-600 font-medium' }}" href="{{ $page->baseUrl }}/docs/{{ $slugOrChildren }}">
                    <span class="rounded absolute inset-0 bg-teal-200 {{ $page->active('/docs/' . $slugOrChildren) ? 'opacity-25' : 'opacity-0' }}"></span>
                    <span class="relative">{{ $name }}</span>
                  </a>
                </li>
              @endforeach
            </ul>
          </div>
          @endforeach
        </nav>
      </div>
    </div>
    {{-- /Side nav --}}

    {{-- Right content/TOC pane --}}
    <div id="content-wrapper" class="min-h-screen w-full lg:static lg:max-h-full lg:overflow-visible lg:w-3/4 xl:w-4/5 ">

      {{-- "Turbolinks" --}}
      <div id="content">

        {{-- Vue-enabled area --}}
        <div id="app" class="flex" v-cloak>

          {{-- Main content area --}}
          <div id="what-is-tailwind" class="pt-12 pb-16 lg:pt-12 w-full">
            <div class="markdown mb-6 px-6 max-w-3xl mx-auto lg:ml-0 lg:mr-auto xl:mx-0 xl:px-12 xl:w-3/4">
              <h1>{{ $page->title }}</h1>

              @if ($page->description)
                <div class="mt-0 mb-4 text-gray-600">
                  {{ $page->description }}
                </div>
              @endif
              @if ($page->titleBorder)
              <hr class="my-8 border-b-2 border-gray-200">
              @endif
            </div>
            <div class="flex">
              <div class="markdown px-6 xl:px-12 w-full max-w-3xl mx-auto lg:ml-0 lg:mr-auto xl:mx-0 xl:w-3/4">
                @yield('content')
              </div>

              {{-- Table of contents --}}
              <div class="hidden xl:text-sm xl:block xl:w-1/4 xl:px-6">
                <div class="flex flex-col justify-between overflow-y-auto sticky top-0 max-h-screen pt-12 pb-4 -mt-12">
                  <table-of-contents class="mb-8"></table-of-contents>
                  <div id="ad"></div>
                </div>
              </div>
              {{-- /Table of contents --}}

            </div>
          </div>
          {{-- /Main content area --}}


        </div>
        {{-- /Vue-enabled area --}}

        <script src="{{ mix('/js/app.js', 'assets/build') }}"></script>
      </div>
      {{-- /"Turbolinks" --}}


    </div>
    {{-- /Right content/TOC pane --}}

  </div>
</div>
{{-- /Main container --}}
@endsection

@push('scripts')
  <!-- Algolia DocSearch  -->
  <script type="text/javascript" src="https://cdn.jsdelivr.net/docsearch.js/2/docsearch.min.js"></script>
  <script type="text/javascript">
    docsearch({
      apiKey: '3df93446658cd9c4e314d4c02a052188',
      indexName: 'tailwindcss',
      inputSelector: '#docsearch',
      algoliaOptions: { 'facetFilters': ["version:{{$page->docSearchVersion}}"] },
    });
  </script>
@endpush
