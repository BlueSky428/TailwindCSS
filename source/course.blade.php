@extends('_layouts.master')

@section('meta')
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@tailwindcss">
<meta name="twitter:title" content="Designing with Tailwind CSS">
<meta name="twitter:description" content="{{ $page->description ? $page->description : 'A free video series coming this July.' }}">
<meta name="twitter:image" content="https://tailwindcss.com/img/course-twitter-card.png">
<meta name="twitter:creator" content="@tailwindcss">
<meta property="og:url" content="https://tailwindcss.com/" />
<meta property="og:type" content="article" />
<meta property="og:title" content="Designing with Tailwind CSS" />
<meta property="og:description" content="{{ $page->description ? $page->description : 'A free video series coming this July.' }}" />
<meta property="og:image" content="https://tailwindcss.com/img/course-twitter-card.png" />
@endsection

@section('title', 'Designing with Tailwind CSS - A free video series coming this July')

@push('scripts')
<script src="{{ mix('/js/nav.js', 'assets/build') }}"></script>
@endpush

@section('body')
<div>
  <div id="header">
    <div class="bg-gray-100 overflow-hidden">
      <div class="w-full max-w-screen-xl relative mx-auto px-6 pt-16 pb-48">
        <div class="flex -mx-6">
          <div class="relative z-10 px-6 max-w-2xl mx-auto xl:mx-0 w-full flex-shrink-0">
            <svg class="h-12 w-auto" viewBox="0 0 273 64" fill="none" xmlns="http://www.w3.org/2000/svg">
              <title>Tailwind CSS</title>
              <path fill-rule="evenodd" clip-rule="evenodd" d="M32 16C24.8 16 20.3 19.6 18.5 26.8C21.2 23.2 24.35 21.85 27.95 22.75C30.004 23.2635 31.4721 24.7536 33.0971 26.4031C35.7443 29.0901 38.8081 32.2 45.5 32.2C52.7 32.2 57.2 28.6 59 21.4C56.3 25 53.15 26.35 49.55 25.45C47.496 24.9365 46.0279 23.4464 44.4029 21.7969C41.7557 19.1099 38.6919 16 32 16ZM18.5 32.2C11.3 32.2 6.8 35.8 5 43C7.7 39.4 10.85 38.05 14.45 38.95C16.504 39.4635 17.9721 40.9536 19.5971 42.6031C22.2443 45.2901 25.3081 48.4 32 48.4C39.2 48.4 43.7 44.8 45.5 37.6C42.8 41.2 39.65 42.55 36.05 41.65C33.996 41.1365 32.5279 39.6464 30.9029 37.9969C28.2557 35.3099 25.1919 32.2 18.5 32.2Z" fill="url(#paint0_linear)"/>
              <path fill-rule="evenodd" clip-rule="evenodd" d="M85.996 29.652H81.284V38.772C81.284 41.204 82.88 41.166 85.996 41.014V44.7C79.688 45.46 77.18 43.712 77.18 38.772V29.652H73.684V25.7H77.18V20.596L81.284 19.38V25.7H85.996V29.652ZM103.958 25.7H108.062V44.7H103.958V41.964C102.514 43.978 100.272 45.194 97.308 45.194C92.14 45.194 87.846 40.824 87.846 35.2C87.846 29.538 92.14 25.206 97.308 25.206C100.272 25.206 102.514 26.422 103.958 28.398V25.7ZM97.954 41.28C101.374 41.28 103.958 38.734 103.958 35.2C103.958 31.666 101.374 29.12 97.954 29.12C94.534 29.12 91.95 31.666 91.95 35.2C91.95 38.734 94.534 41.28 97.954 41.28ZM114.902 22.85C113.458 22.85 112.28 21.634 112.28 20.228C112.28 18.784 113.458 17.606 114.902 17.606C116.346 17.606 117.524 18.784 117.524 20.228C117.524 21.634 116.346 22.85 114.902 22.85ZM112.85 44.7V25.7H116.954V44.7H112.85ZM121.704 44.7V16.96H125.808V44.7H121.704ZM152.446 25.7H156.778L150.812 44.7H146.784L142.832 31.894L138.842 44.7H134.814L128.848 25.7H133.18L136.866 38.81L140.856 25.7H144.77L148.722 38.81L152.446 25.7ZM161.87 22.85C160.426 22.85 159.248 21.634 159.248 20.228C159.248 18.784 160.426 17.606 161.87 17.606C163.314 17.606 164.492 18.784 164.492 20.228C164.492 21.634 163.314 22.85 161.87 22.85ZM159.818 44.7V25.7H163.922V44.7H159.818ZM178.666 25.206C182.922 25.206 185.962 28.094 185.962 33.034V44.7H181.858V33.452C181.858 30.564 180.186 29.044 177.602 29.044C174.904 29.044 172.776 30.64 172.776 34.516V44.7H168.672V25.7H172.776V28.132C174.03 26.156 176.082 25.206 178.666 25.206ZM205.418 18.1H209.522V44.7H205.418V41.964C203.974 43.978 201.732 45.194 198.768 45.194C193.6 45.194 189.306 40.824 189.306 35.2C189.306 29.538 193.6 25.206 198.768 25.206C201.732 25.206 203.974 26.422 205.418 28.398V18.1ZM199.414 41.28C202.834 41.28 205.418 38.734 205.418 35.2C205.418 31.666 202.834 29.12 199.414 29.12C195.994 29.12 193.41 31.666 193.41 35.2C193.41 38.734 195.994 41.28 199.414 41.28ZM223.278 45.194C217.54 45.194 213.246 40.824 213.246 35.2C213.246 29.538 217.54 25.206 223.278 25.206C227.002 25.206 230.232 27.144 231.752 30.108L228.218 32.16C227.382 30.374 225.52 29.234 223.24 29.234C219.896 29.234 217.35 31.78 217.35 35.2C217.35 38.62 219.896 41.166 223.24 41.166C225.52 41.166 227.382 39.988 228.294 38.24L231.828 40.254C230.232 43.256 227.002 45.194 223.278 45.194ZM238.592 30.944C238.592 34.402 248.814 32.312 248.814 39.342C248.814 43.142 245.508 45.194 241.404 45.194C237.604 45.194 234.868 43.484 233.652 40.748L237.186 38.696C237.794 40.406 239.314 41.432 241.404 41.432C243.228 41.432 244.634 40.824 244.634 39.304C244.634 35.922 234.412 37.822 234.412 31.02C234.412 27.448 237.49 25.206 241.366 25.206C244.482 25.206 247.066 26.65 248.396 29.158L244.938 31.096C244.254 29.614 242.924 28.93 241.366 28.93C239.884 28.93 238.592 29.576 238.592 30.944ZM256.11 30.944C256.11 34.402 266.332 32.312 266.332 39.342C266.332 43.142 263.026 45.194 258.922 45.194C255.122 45.194 252.386 43.484 251.17 40.748L254.704 38.696C255.312 40.406 256.832 41.432 258.922 41.432C260.746 41.432 262.152 40.824 262.152 39.304C262.152 35.922 251.93 37.822 251.93 31.02C251.93 27.448 255.008 25.206 258.884 25.206C262 25.206 264.584 26.65 265.914 29.158L262.456 31.096C261.772 29.614 260.442 28.93 258.884 28.93C257.402 28.93 256.11 29.576 256.11 30.944Z" fill="#2D3748"/>
              <defs>
                <linearGradient id="paint0_linear" x1="3.5" y1="16" x2="59" y2="48" gradientUnits="userSpaceOnUse">
                  <stop stop-color="#2298BD"/>
                  <stop offset="1" stop-color="#0ED7B5"/>
                </linearGradient>
              </defs>
            </svg>

            <h1 class="mt-10 text-5xl sm:text-6xl font-light leading-none">Designing with <span class="sm:block text-teal-500">Tailwind CSS</span></h1>
            <p class="mt-6 leading-relaxed text-xl text-gray-600">
              Learn to build fully responsive, professionally designed UIs from the creator of the framework.
            </p>
            <div class="mt-6">
              <script src="https://f.convertkit.com/ckjs/ck.5.js"></script>
              <form class="font-medium text-gray-800 text-lg" action="https://app.convertkit.com/forms/961421/subscriptions" method="POST" data-sv-form="961421" data-uid="ce7d8ec042" data-options="{&quot;settings&quot;:{&quot;after_subscribe&quot;:{&quot;success_message&quot;:&quot;Thanks for signing up!&quot;}}}">
                <ul data-element="errors"></ul>
                <div data-element="fields">
                  <p class="font-medium text-gray-800 text-lg">Get notified when the course is released for free this July.</p>
                  <div class="mt-4 flex relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-4">
                      <svg class="fill-current text-gray-400 h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M4 4h16a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6c0-1.1.9-2 2-2zm16 3.38V6H4v1.38l8 4 8-4zm0 2.24l-7.55 3.77a1 1 0 0 1-.9 0L4 9.62V18h16V9.62z"/></svg>
                    </div>
                    <input type="email" name="email_address" class="flex-shrink-1 block max-w-sm w-full border-2 pl-12 pr-5 py-3 rounded-lg text-lg appearance-none focus:outline-none focus:border-teal-400" placeholder="your@email.com" required>
                    <button data-element="submit" class="ml-4 flex-shrink-0 bg-gray-800 hover:bg-gray-700 focus:outline-none focus:bg-gray-700 px-5 py-2 rounded-lg text-white font-medium shadow text-lg">
                      Get notified
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="hidden xl:block px-6 flex-1 relative">
            <div class="absolute inset-0 pt-16 px-8">
              <img class="rounded-lg shadow-xl relative z-10" style="max-width: none; height: 512px !important;" src="/img/workcation-screenshot.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="bg-center bg-repeat-x md:hidden" style="transform: scaleX(-1); height: 142.5px; margin-top: -142.5px; background-size: 3241.5px 142.5px; background-image: url(&quot;data:image/svg+xml,%3Csvg viewBox='0 0 4322 190' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath fill='%23F7FAFC' d='M1 0h4320v190H1z' /%3E%3Cpath d='M1441 190H1V95s202.817-45 360-45 360 45 360 45 202.817 45 360 45c157.18 0 360-45 360-45v95z' fill='%23fff' /%3E%3Cpath d='M721 95c-.217.976-.216.976-.214.977l.007.001.028.007.111.024.441.097c.389.085.969.212 1.732.377 1.525.33 3.783.814 6.711 1.43 5.857 1.23 14.398 2.989 25.137 5.099a2518.171 2518.171 0 0 0 86.945 15.475C912.268 129.74 1002.33 141 1081 141v-2c-78.51 0-168.451-11.24-238.786-22.487a2518.276 2518.276 0 0 1-86.875-15.463 1956.06 1956.06 0 0 1-25.111-5.095 1180.206 1180.206 0 0 1-8.427-1.803l-.438-.096-.11-.024-.027-.006-.007-.002c-.002 0-.002 0-.219.976zm360 46c78.67 0 168.73-11.26 239.1-22.513a2519.232 2519.232 0 0 0 86.95-15.475c10.74-2.11 19.28-3.868 25.13-5.1 2.93-.615 5.19-1.1 6.72-1.43.76-.164 1.34-.29 1.73-.376.19-.043.34-.075.44-.097.05-.01.08-.019.11-.024a.228.228 0 0 1 .03-.007v-.001c.01 0 .01 0-.21-.977l-.22-.976-.01.002-.02.006c-.03.005-.06.013-.11.024l-.44.096-1.73.376c-1.52.33-3.77.812-6.7 1.427-5.85 1.23-14.38 2.987-25.11 5.095-21.46 4.217-51.71 9.84-86.87 15.463C1249.45 127.76 1159.51 139 1081 139v2zM1 95c.217.976.217.976.219.976a.12.12 0 0 1 .007-.002l.027-.006.11-.024.438-.096 1.726-.376c1.523-.33 3.776-.812 6.7-1.427A1958.54 1958.54 0 0 1 35.34 88.95a2517.83 2517.83 0 0 1 86.875-15.463C192.549 62.24 282.488 51 361 51v-2c-78.671 0-168.732 11.26-239.102 22.513a2520.39 2520.39 0 0 0-86.945 15.474 1960.08 1960.08 0 0 0-25.137 5.1 1190.357 1190.357 0 0 0-8.884 1.904l-.111.024-.028.007-.007.001c-.002 0-.003 0 .214.977zm360-44c78.512 0 168.451 11.24 238.786 22.487a2517.73 2517.73 0 0 1 86.875 15.463 1956.06 1956.06 0 0 1 25.111 5.095 1180.206 1180.206 0 0 1 8.427 1.803l.438.096.11.024.027.006.007.002c.002 0 .002 0 .219-.976s.216-.976.214-.977l-.007-.001-.028-.007a52.997 52.997 0 0 1-.111-.024l-.441-.097c-.389-.085-.969-.212-1.732-.377-1.525-.33-3.783-.814-6.711-1.43a1963.63 1963.63 0 0 0-25.137-5.1 2520.12 2520.12 0 0 0-86.945-15.474C529.732 60.26 439.671 49 361 49v2z' fill='%23EDF2F7' /%3E%3Cpath d='M721 95c-.11.994-.109.994-.108.994h.007a4.033 4.033 0 0 0 .139.016l.44.049 1.731.188c1.524.165 3.781.407 6.708.714 5.855.616 14.394 1.495 25.131 2.55a4859.582 4859.582 0 0 0 86.929 7.736C912.338 112.873 1002.37 118.5 1081 118.5v-2c-78.55 0-168.521-5.623-238.864-11.247a4862.892 4862.892 0 0 1-86.892-7.733 3742.387 3742.387 0 0 1-25.118-2.548 2277.852 2277.852 0 0 1-8.431-.901l-.438-.049-.11-.012-.028-.003h-.007c-.001 0-.002 0-.112.993zm360 23.5c78.63 0 168.66-5.627 239.02-11.253 35.19-2.813 65.46-5.626 86.93-7.736 10.74-1.055 19.28-1.934 25.13-2.55a2033.552 2033.552 0 0 0 8.44-.902l.44-.049.11-.012.03-.003h.01L1441 95l-.11-.994-.01.001-.03.003-.11.012-.44.048c-.38.043-.96.106-1.72.189-1.53.164-3.78.406-6.71.713-5.85.615-14.38 1.494-25.11 2.548-21.47 2.11-51.73 4.921-86.9 7.733-70.34 5.624-160.31 11.247-238.86 11.247v2zM1 95c.11.994.111.994.113.994l.006-.001.028-.003.11-.012a832.34 832.34 0 0 1 2.167-.236c1.523-.165 3.777-.407 6.702-.714 5.851-.615 14.385-1.494 25.118-2.548a4862.105 4862.105 0 0 1 86.892-7.733C192.479 79.123 282.448 73.5 361 73.5v-2c-78.631 0-168.662 5.627-239.023 11.253a4863.709 4863.709 0 0 0-86.929 7.736 3741.098 3741.098 0 0 0-25.13 2.55 2267.42 2267.42 0 0 0-8.44.902l-.44.049-.11.012-.029.003H.892c-.001.001-.002.001.108.995zm360-21.5c78.552 0 168.521 5.623 238.864 11.247a4861.657 4861.657 0 0 1 86.892 7.733 3742.387 3742.387 0 0 1 25.118 2.548 2277.852 2277.852 0 0 1 8.431.901l.438.049.11.012.028.003h.007c.001 0 .002 0 .112-.993.11-.994.109-.994.108-.994h-.007a4.033 4.033 0 0 0-.139-.016l-.44-.049-1.731-.188c-1.524-.165-3.781-.407-6.708-.714a3745.292 3745.292 0 0 0-25.131-2.55 4863.637 4863.637 0 0 0-86.929-7.736C529.662 77.127 439.631 71.5 361 71.5v2z' fill='%23EDF2F7' /%3E%3Cpath d='M721 95c-.406.914-.405.914-.403.915l.007.003.028.013c.025.01.063.027.112.05l.441.193c.39.171.971.424 1.734.755 1.527.66 3.786 1.628 6.715 2.86a1159.053 1159.053 0 0 0 25.146 10.204 1439.3 1439.3 0 0 0 86.972 30.959C912.132 163.461 1002.25 186 1081 186v-2c-78.43 0-168.315-22.461-238.639-44.952a1439.162 1439.162 0 0 1-86.849-30.916 1160.302 1160.302 0 0 1-25.103-10.187 718.783 718.783 0 0 1-6.696-2.852 417.12 417.12 0 0 1-2.162-.943l-.109-.048a1.004 1.004 0 0 1-.034-.015c-.002 0-.002-.001-.408.913zm360 91c78.75 0 168.87-22.539 239.25-45.048a1440.417 1440.417 0 0 0 86.97-30.959c10.74-4.222 19.29-7.74 25.15-10.204 2.93-1.232 5.18-2.2 6.71-2.86.76-.33 1.34-.584 1.73-.755.2-.085.35-.15.45-.194.05-.022.08-.038.11-.05l.03-.012v-.003s.01-.001-.4-.915l-.41-.913v.003a.14.14 0 0 0-.03.012c-.03.01-.06.027-.11.048-.1.043-.24.107-.44.192-.39.17-.96.422-1.72.75a754.49 754.49 0 0 1-6.7 2.853c-5.85 2.459-14.37 5.971-25.1 10.187a1440.735 1440.735 0 0 1-86.85 30.916C1249.31 161.539 1159.43 184 1081 184v2zM1 95c.406.914.406.914.408.913l.006-.003.028-.012.11-.048.436-.192a716.557 716.557 0 0 1 8.421-3.603c5.847-2.459 14.376-5.971 25.103-10.187a1438.123 1438.123 0 0 1 86.849-30.915C192.685 28.46 282.566 6 361 6V4c-78.749 0-168.868 22.539-239.248 45.047a1440.043 1440.043 0 0 0-86.972 30.96A1160.442 1160.442 0 0 0 9.634 90.21c-2.93 1.232-5.188 2.2-6.715 2.86a407.475 407.475 0 0 0-2.175.949l-.112.05-.028.012-.007.003c-.002 0-.003.001.403.915zM361 6c78.434 0 168.315 22.461 238.639 44.953a1438.217 1438.217 0 0 1 86.849 30.915 1161.015 1161.015 0 0 1 25.103 10.187 718.783 718.783 0 0 1 6.696 2.852 417.12 417.12 0 0 1 2.162.943l.109.048a1.004 1.004 0 0 1 .034.015c.002 0 .002.001.408-.913.406-.914.405-.914.403-.915l-.007-.003-.028-.013c-.025-.01-.063-.027-.112-.05l-.441-.193c-.39-.171-.971-.424-1.734-.755a729.681 729.681 0 0 0-6.715-2.86 1159.897 1159.897 0 0 0-25.146-10.204 1440.245 1440.245 0 0 0-86.972-30.96C529.868 26.54 439.749 4 361 4v2z' fill='%23EDF2F7' /%3E%3Cpath d='M2881 190H1441V95s202.82-45 360-45 360 45 360 45 202.82 45 360 45 360-45 360-45v95z' fill='%23fff' /%3E%3Cpath d='M721 95c-.316.949-.315.95-.313.95l.007.002.028.01.112.036.44.146a862.55 862.55 0 0 0 8.447 2.71 1402.428 1402.428 0 0 0 25.142 7.652 1778.488 1778.488 0 0 0 86.96 23.216C912.199 146.603 1002.29 163.5 1081 163.5v-2c-78.47 0-168.382-16.853-238.71-33.722a1777.19 1777.19 0 0 1-86.861-23.19 1399.482 1399.482 0 0 1-25.106-7.641 856.118 856.118 0 0 1-8.424-2.703l-.437-.144-.11-.037-.027-.009-.007-.002c-.002 0-.002 0-.318.948zm360 68.5c78.71 0 168.8-16.897 239.18-33.778a1782.519 1782.519 0 0 0 86.96-23.216c10.74-3.166 19.28-5.804 25.14-7.652a766.601 766.601 0 0 0 8.45-2.71l.44-.146c.05-.016.08-.028.11-.037a.172.172 0 0 1 .03-.009v-.002s.01-.001-.31-.95l-.32-.948v.002a.163.163 0 0 0-.03.01c-.03.007-.06.02-.11.036-.1.032-.25.08-.44.144-.39.127-.96.316-1.72.563-1.53.493-3.78 1.218-6.7 2.14-5.85 1.844-14.38 4.479-25.11 7.641a1777.105 1777.105 0 0 1-86.86 23.19C1249.38 144.647 1159.47 161.5 1081 161.5v2zM1 95c.316.949.316.949.318.948l.007-.002.027-.01a61.574 61.574 0 0 1 .547-.18 866.032 866.032 0 0 1 8.424-2.703 1404.167 1404.167 0 0 1 25.106-7.64 1776.776 1776.776 0 0 1 86.861-23.19C192.618 45.352 282.527 28.5 361 28.5v-2c-78.71 0-168.801 16.897-239.177 33.778a1778.831 1778.831 0 0 0-86.96 23.216 1405.54 1405.54 0 0 0-25.142 7.652 867.48 867.48 0 0 0-8.447 2.71 178.697 178.697 0 0 0-.587.194c-.002 0-.003.001.313.95zm360-66.5c78.473 0 168.382 16.853 238.71 33.722a1776.52 1776.52 0 0 1 86.861 23.19 1401.624 1401.624 0 0 1 25.106 7.641 856.118 856.118 0 0 1 8.424 2.703l.437.144.11.037.027.009.007.002c.002 0 .002 0 .318-.948.316-.949.315-.95.313-.95l-.007-.002-.028-.01-.112-.036a862.55 862.55 0 0 0-8.887-2.856 1406.453 1406.453 0 0 0-25.142-7.652 1778.897 1778.897 0 0 0-86.96-23.216C529.801 43.397 439.71 26.5 361 26.5v2z' fill='%234FD1C5' /%3E%3Cpath d='M4321 190H2881V95s202.82-45 360-45 360 45 360 45 202.82 45 360 45 360-45 360-45v95z' fill='%23fff' /%3E%3Cpath d='M1441 95s202.82-45 360-45 360 45 360 45 202.82 45 360 45 360-45 360-45 202.82-45 360-45 360 45 360 45 202.82 45 360 45 360-45 360-45' stroke='%23EDF2F7' stroke-width='2' /%3E%3Cpath d='M1441 95s202.82-22.5 360-22.5S2161 95 2161 95s202.82 22.5 360 22.5S2881 95 2881 95s202.82-22.5 360-22.5S3601 95 3601 95s202.82 22.5 360 22.5S4321 95 4321 95' stroke='%23EDF2F7' stroke-width='2' /%3E%3Cpath d='M1441 95s202.82-90 360-90 360 90 360 90 202.82 90 360 90 360-90 360-90 202.82-90 360-90 360 90 360 90 202.82 90 360 90 360-90 360-90' stroke='%23EDF2F7' stroke-width='2' /%3E%3Cpath d='M1441 95s202.82-67.5 360-67.5S2161 95 2161 95s202.82 67.5 360 67.5S2881 95 2881 95s202.82-67.5 360-67.5S3601 95 3601 95s202.82 67.5 360 67.5S4321 95 4321 95' stroke='%234FD1C5' stroke-width='2' /%3E%3C/svg%3E%0A&quot;);"></div>
    <div class="bg-center bg-repeat-x hidden md:block" style="transform: scaleX(-1); height: 190px; margin-top: -190px; background-size: 4322px 190px; background-image: url(&quot;data:image/svg+xml,%3Csvg viewBox='0 0 4322 190' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath fill='%23F7FAFC' d='M1 0h4320v190H1z' /%3E%3Cpath d='M1441 190H1V95s202.817-45 360-45 360 45 360 45 202.817 45 360 45c157.18 0 360-45 360-45v95z' fill='%23fff' /%3E%3Cpath d='M721 95c-.217.976-.216.976-.214.977l.007.001.028.007.111.024.441.097c.389.085.969.212 1.732.377 1.525.33 3.783.814 6.711 1.43 5.857 1.23 14.398 2.989 25.137 5.099a2518.171 2518.171 0 0 0 86.945 15.475C912.268 129.74 1002.33 141 1081 141v-2c-78.51 0-168.451-11.24-238.786-22.487a2518.276 2518.276 0 0 1-86.875-15.463 1956.06 1956.06 0 0 1-25.111-5.095 1180.206 1180.206 0 0 1-8.427-1.803l-.438-.096-.11-.024-.027-.006-.007-.002c-.002 0-.002 0-.219.976zm360 46c78.67 0 168.73-11.26 239.1-22.513a2519.232 2519.232 0 0 0 86.95-15.475c10.74-2.11 19.28-3.868 25.13-5.1 2.93-.615 5.19-1.1 6.72-1.43.76-.164 1.34-.29 1.73-.376.19-.043.34-.075.44-.097.05-.01.08-.019.11-.024a.228.228 0 0 1 .03-.007v-.001c.01 0 .01 0-.21-.977l-.22-.976-.01.002-.02.006c-.03.005-.06.013-.11.024l-.44.096-1.73.376c-1.52.33-3.77.812-6.7 1.427-5.85 1.23-14.38 2.987-25.11 5.095-21.46 4.217-51.71 9.84-86.87 15.463C1249.45 127.76 1159.51 139 1081 139v2zM1 95c.217.976.217.976.219.976a.12.12 0 0 1 .007-.002l.027-.006.11-.024.438-.096 1.726-.376c1.523-.33 3.776-.812 6.7-1.427A1958.54 1958.54 0 0 1 35.34 88.95a2517.83 2517.83 0 0 1 86.875-15.463C192.549 62.24 282.488 51 361 51v-2c-78.671 0-168.732 11.26-239.102 22.513a2520.39 2520.39 0 0 0-86.945 15.474 1960.08 1960.08 0 0 0-25.137 5.1 1190.357 1190.357 0 0 0-8.884 1.904l-.111.024-.028.007-.007.001c-.002 0-.003 0 .214.977zm360-44c78.512 0 168.451 11.24 238.786 22.487a2517.73 2517.73 0 0 1 86.875 15.463 1956.06 1956.06 0 0 1 25.111 5.095 1180.206 1180.206 0 0 1 8.427 1.803l.438.096.11.024.027.006.007.002c.002 0 .002 0 .219-.976s.216-.976.214-.977l-.007-.001-.028-.007a52.997 52.997 0 0 1-.111-.024l-.441-.097c-.389-.085-.969-.212-1.732-.377-1.525-.33-3.783-.814-6.711-1.43a1963.63 1963.63 0 0 0-25.137-5.1 2520.12 2520.12 0 0 0-86.945-15.474C529.732 60.26 439.671 49 361 49v2z' fill='%23EDF2F7' /%3E%3Cpath d='M721 95c-.11.994-.109.994-.108.994h.007a4.033 4.033 0 0 0 .139.016l.44.049 1.731.188c1.524.165 3.781.407 6.708.714 5.855.616 14.394 1.495 25.131 2.55a4859.582 4859.582 0 0 0 86.929 7.736C912.338 112.873 1002.37 118.5 1081 118.5v-2c-78.55 0-168.521-5.623-238.864-11.247a4862.892 4862.892 0 0 1-86.892-7.733 3742.387 3742.387 0 0 1-25.118-2.548 2277.852 2277.852 0 0 1-8.431-.901l-.438-.049-.11-.012-.028-.003h-.007c-.001 0-.002 0-.112.993zm360 23.5c78.63 0 168.66-5.627 239.02-11.253 35.19-2.813 65.46-5.626 86.93-7.736 10.74-1.055 19.28-1.934 25.13-2.55a2033.552 2033.552 0 0 0 8.44-.902l.44-.049.11-.012.03-.003h.01L1441 95l-.11-.994-.01.001-.03.003-.11.012-.44.048c-.38.043-.96.106-1.72.189-1.53.164-3.78.406-6.71.713-5.85.615-14.38 1.494-25.11 2.548-21.47 2.11-51.73 4.921-86.9 7.733-70.34 5.624-160.31 11.247-238.86 11.247v2zM1 95c.11.994.111.994.113.994l.006-.001.028-.003.11-.012a832.34 832.34 0 0 1 2.167-.236c1.523-.165 3.777-.407 6.702-.714 5.851-.615 14.385-1.494 25.118-2.548a4862.105 4862.105 0 0 1 86.892-7.733C192.479 79.123 282.448 73.5 361 73.5v-2c-78.631 0-168.662 5.627-239.023 11.253a4863.709 4863.709 0 0 0-86.929 7.736 3741.098 3741.098 0 0 0-25.13 2.55 2267.42 2267.42 0 0 0-8.44.902l-.44.049-.11.012-.029.003H.892c-.001.001-.002.001.108.995zm360-21.5c78.552 0 168.521 5.623 238.864 11.247a4861.657 4861.657 0 0 1 86.892 7.733 3742.387 3742.387 0 0 1 25.118 2.548 2277.852 2277.852 0 0 1 8.431.901l.438.049.11.012.028.003h.007c.001 0 .002 0 .112-.993.11-.994.109-.994.108-.994h-.007a4.033 4.033 0 0 0-.139-.016l-.44-.049-1.731-.188c-1.524-.165-3.781-.407-6.708-.714a3745.292 3745.292 0 0 0-25.131-2.55 4863.637 4863.637 0 0 0-86.929-7.736C529.662 77.127 439.631 71.5 361 71.5v2z' fill='%23EDF2F7' /%3E%3Cpath d='M721 95c-.406.914-.405.914-.403.915l.007.003.028.013c.025.01.063.027.112.05l.441.193c.39.171.971.424 1.734.755 1.527.66 3.786 1.628 6.715 2.86a1159.053 1159.053 0 0 0 25.146 10.204 1439.3 1439.3 0 0 0 86.972 30.959C912.132 163.461 1002.25 186 1081 186v-2c-78.43 0-168.315-22.461-238.639-44.952a1439.162 1439.162 0 0 1-86.849-30.916 1160.302 1160.302 0 0 1-25.103-10.187 718.783 718.783 0 0 1-6.696-2.852 417.12 417.12 0 0 1-2.162-.943l-.109-.048a1.004 1.004 0 0 1-.034-.015c-.002 0-.002-.001-.408.913zm360 91c78.75 0 168.87-22.539 239.25-45.048a1440.417 1440.417 0 0 0 86.97-30.959c10.74-4.222 19.29-7.74 25.15-10.204 2.93-1.232 5.18-2.2 6.71-2.86.76-.33 1.34-.584 1.73-.755.2-.085.35-.15.45-.194.05-.022.08-.038.11-.05l.03-.012v-.003s.01-.001-.4-.915l-.41-.913v.003a.14.14 0 0 0-.03.012c-.03.01-.06.027-.11.048-.1.043-.24.107-.44.192-.39.17-.96.422-1.72.75a754.49 754.49 0 0 1-6.7 2.853c-5.85 2.459-14.37 5.971-25.1 10.187a1440.735 1440.735 0 0 1-86.85 30.916C1249.31 161.539 1159.43 184 1081 184v2zM1 95c.406.914.406.914.408.913l.006-.003.028-.012.11-.048.436-.192a716.557 716.557 0 0 1 8.421-3.603c5.847-2.459 14.376-5.971 25.103-10.187a1438.123 1438.123 0 0 1 86.849-30.915C192.685 28.46 282.566 6 361 6V4c-78.749 0-168.868 22.539-239.248 45.047a1440.043 1440.043 0 0 0-86.972 30.96A1160.442 1160.442 0 0 0 9.634 90.21c-2.93 1.232-5.188 2.2-6.715 2.86a407.475 407.475 0 0 0-2.175.949l-.112.05-.028.012-.007.003c-.002 0-.003.001.403.915zM361 6c78.434 0 168.315 22.461 238.639 44.953a1438.217 1438.217 0 0 1 86.849 30.915 1161.015 1161.015 0 0 1 25.103 10.187 718.783 718.783 0 0 1 6.696 2.852 417.12 417.12 0 0 1 2.162.943l.109.048a1.004 1.004 0 0 1 .034.015c.002 0 .002.001.408-.913.406-.914.405-.914.403-.915l-.007-.003-.028-.013c-.025-.01-.063-.027-.112-.05l-.441-.193c-.39-.171-.971-.424-1.734-.755a729.681 729.681 0 0 0-6.715-2.86 1159.897 1159.897 0 0 0-25.146-10.204 1440.245 1440.245 0 0 0-86.972-30.96C529.868 26.54 439.749 4 361 4v2z' fill='%23EDF2F7' /%3E%3Cpath d='M2881 190H1441V95s202.82-45 360-45 360 45 360 45 202.82 45 360 45 360-45 360-45v95z' fill='%23fff' /%3E%3Cpath d='M721 95c-.316.949-.315.95-.313.95l.007.002.028.01.112.036.44.146a862.55 862.55 0 0 0 8.447 2.71 1402.428 1402.428 0 0 0 25.142 7.652 1778.488 1778.488 0 0 0 86.96 23.216C912.199 146.603 1002.29 163.5 1081 163.5v-2c-78.47 0-168.382-16.853-238.71-33.722a1777.19 1777.19 0 0 1-86.861-23.19 1399.482 1399.482 0 0 1-25.106-7.641 856.118 856.118 0 0 1-8.424-2.703l-.437-.144-.11-.037-.027-.009-.007-.002c-.002 0-.002 0-.318.948zm360 68.5c78.71 0 168.8-16.897 239.18-33.778a1782.519 1782.519 0 0 0 86.96-23.216c10.74-3.166 19.28-5.804 25.14-7.652a766.601 766.601 0 0 0 8.45-2.71l.44-.146c.05-.016.08-.028.11-.037a.172.172 0 0 1 .03-.009v-.002s.01-.001-.31-.95l-.32-.948v.002a.163.163 0 0 0-.03.01c-.03.007-.06.02-.11.036-.1.032-.25.08-.44.144-.39.127-.96.316-1.72.563-1.53.493-3.78 1.218-6.7 2.14-5.85 1.844-14.38 4.479-25.11 7.641a1777.105 1777.105 0 0 1-86.86 23.19C1249.38 144.647 1159.47 161.5 1081 161.5v2zM1 95c.316.949.316.949.318.948l.007-.002.027-.01a61.574 61.574 0 0 1 .547-.18 866.032 866.032 0 0 1 8.424-2.703 1404.167 1404.167 0 0 1 25.106-7.64 1776.776 1776.776 0 0 1 86.861-23.19C192.618 45.352 282.527 28.5 361 28.5v-2c-78.71 0-168.801 16.897-239.177 33.778a1778.831 1778.831 0 0 0-86.96 23.216 1405.54 1405.54 0 0 0-25.142 7.652 867.48 867.48 0 0 0-8.447 2.71 178.697 178.697 0 0 0-.587.194c-.002 0-.003.001.313.95zm360-66.5c78.473 0 168.382 16.853 238.71 33.722a1776.52 1776.52 0 0 1 86.861 23.19 1401.624 1401.624 0 0 1 25.106 7.641 856.118 856.118 0 0 1 8.424 2.703l.437.144.11.037.027.009.007.002c.002 0 .002 0 .318-.948.316-.949.315-.95.313-.95l-.007-.002-.028-.01-.112-.036a862.55 862.55 0 0 0-8.887-2.856 1406.453 1406.453 0 0 0-25.142-7.652 1778.897 1778.897 0 0 0-86.96-23.216C529.801 43.397 439.71 26.5 361 26.5v2z' fill='%234FD1C5' /%3E%3Cpath d='M4321 190H2881V95s202.82-45 360-45 360 45 360 45 202.82 45 360 45 360-45 360-45v95z' fill='%23fff' /%3E%3Cpath d='M1441 95s202.82-45 360-45 360 45 360 45 202.82 45 360 45 360-45 360-45 202.82-45 360-45 360 45 360 45 202.82 45 360 45 360-45 360-45' stroke='%23EDF2F7' stroke-width='2' /%3E%3Cpath d='M1441 95s202.82-22.5 360-22.5S2161 95 2161 95s202.82 22.5 360 22.5S2881 95 2881 95s202.82-22.5 360-22.5S3601 95 3601 95s202.82 22.5 360 22.5S4321 95 4321 95' stroke='%23EDF2F7' stroke-width='2' /%3E%3Cpath d='M1441 95s202.82-90 360-90 360 90 360 90 202.82 90 360 90 360-90 360-90 202.82-90 360-90 360 90 360 90 202.82 90 360 90 360-90 360-90' stroke='%23EDF2F7' stroke-width='2' /%3E%3Cpath d='M1441 95s202.82-67.5 360-67.5S2161 95 2161 95s202.82 67.5 360 67.5S2881 95 2881 95s202.82-67.5 360-67.5S3601 95 3601 95s202.82 67.5 360 67.5S4321 95 4321 95' stroke='%234FD1C5' stroke-width='2' /%3E%3C/svg%3E%0A&quot;);"></div>
  </div>
</div>

<div class="max-w-screen-xl mx-auto px-6 pt-12 pb-24">
  <div class="max-w-2xl mx-auto xl:mx-0 text-gray-700 leading-relaxed text-lg">
    <p class="mt-4">
      <strong class="text-gray-800">Designing with Tailwind CSS</strong> is a free video course I'm working on that will teach you how to build fully responsive, professionally designed UIs from scratch using Tailwind CSS.
    </p>
    <p class="mt-4">Together we’ll build <em>Workcation</em>, a property rental app loaded with interesting details that will help you master Tailwind in no time.</p>
    <div class="mt-12 xl:hidden">
      <img class="rounded-lg shadow-xl" src="/img/workcation-screenshot.jpg" alt="">
    </div>
    <p class="mt-12 xl:mt-8 uppercase font-semibold text-gray-900 tracking-wider text-base">
      What you'll learn
    </p>
    <ul class="mt-4">
      <li class="mt-3 flex">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-6 w-6 mt-px mr-3 flex-shrink-0"><circle cx="12" cy="12" r="10" class="text-green-200 fill-current"></circle><path d="M10 14.59l6.3-6.3a1 1 0 0 1 1.4 1.42l-7 7a1 1 0 0 1-1.4 0l-3-3a1 1 0 0 1 1.4-1.42l2.3 2.3z" class="text-green-600 fill-current"></path></svg>
        <span class="-mt-px">Getting Tailwind up and running in your project</span>
      </li>
      <li class="mt-3 flex">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-6 w-6 mt-px mr-3 flex-shrink-0"><circle cx="12" cy="12" r="10" class="text-green-200 fill-current"></circle><path d="M10 14.59l6.3-6.3a1 1 0 0 1 1.4 1.42l-7 7a1 1 0 0 1-1.4 0l-3-3a1 1 0 0 1 1.4-1.42l2.3 2.3z" class="text-green-600 fill-current"></path></svg>
        <span class="-mt-px">Building complex application layouts with flexbox</span>
      </li>
      <li class="mt-3 flex">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-6 w-6 mt-px mr-3 flex-shrink-0"><circle cx="12" cy="12" r="10" class="text-green-200 fill-current"></circle><path d="M10 14.59l6.3-6.3a1 1 0 0 1 1.4 1.42l-7 7a1 1 0 0 1-1.4 0l-3-3a1 1 0 0 1 1.4-1.42l2.3 2.3z" class="text-green-600 fill-current"></path></svg>
        <span class="-mt-px">Using Tailwind's color, size, and weight utilities to create hierarchy</span>
      </li>
      <li class="mt-3 flex">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-6 w-6 mt-px mr-3 flex-shrink-0"><circle cx="12" cy="12" r="10" class="text-green-200 fill-current"></circle><path d="M10 14.59l6.3-6.3a1 1 0 0 1 1.4 1.42l-7 7a1 1 0 0 1-1.4 0l-3-3a1 1 0 0 1 1.4-1.42l2.3 2.3z" class="text-green-600 fill-current"></path></svg>
        <span class="-mt-px">Creating depth in your designs using shadows and layers</span>
      </li>
      <li class="mt-3 flex">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-6 w-6 mt-px mr-3 flex-shrink-0"><circle cx="12" cy="12" r="10" class="text-green-200 fill-current"></circle><path d="M10 14.59l6.3-6.3a1 1 0 0 1 1.4 1.42l-7 7a1 1 0 0 1-1.4 0l-3-3a1 1 0 0 1 1.4-1.42l2.3 2.3z" class="text-green-600 fill-current"></path></svg>
        <span class="-mt-px">Flexible positioning techniques for building components that are adaptive instead of static and rigid</span>
      </li>
      <li class="mt-3 flex">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-6 w-6 mt-px mr-3 flex-shrink-0"><circle cx="12" cy="12" r="10" class="text-green-200 fill-current"></circle><path d="M10 14.59l6.3-6.3a1 1 0 0 1 1.4 1.42l-7 7a1 1 0 0 1-1.4 0l-3-3a1 1 0 0 1 1.4-1.42l2.3 2.3z" class="text-green-600 fill-current"></path></svg>
        <span class="-mt-px">Implementing custom form styles</span>
      </li>
      <li class="mt-3 flex">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-6 w-6 mt-px mr-3 flex-shrink-0"><circle cx="12" cy="12" r="10" class="text-green-200 fill-current"></circle><path d="M10 14.59l6.3-6.3a1 1 0 0 1 1.4 1.42l-7 7a1 1 0 0 1-1.4 0l-3-3a1 1 0 0 1 1.4-1.42l2.3 2.3z" class="text-green-600 fill-current"></path></svg>
        <span class="-mt-px">Extracting reusable components</span>
      </li>
      <li class="mt-3 flex">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-6 w-6 mt-px mr-3 flex-shrink-0"><circle cx="12" cy="12" r="10" class="text-green-200 fill-current"></circle><path d="M10 14.59l6.3-6.3a1 1 0 0 1 1.4 1.42l-7 7a1 1 0 0 1-1.4 0l-3-3a1 1 0 0 1 1.4-1.42l2.3 2.3z" class="text-green-600 fill-current"></path></svg>
        <span class="-mt-px">Working with plugins</span>
      </li>
      <li class="mt-3 flex">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-6 w-6 mt-px mr-3 flex-shrink-0"><circle cx="12" cy="12" r="10" class="text-green-200 fill-current"></circle><path d="M10 14.59l6.3-6.3a1 1 0 0 1 1.4 1.42l-7 7a1 1 0 0 1-1.4 0l-3-3a1 1 0 0 1 1.4-1.42l2.3 2.3z" class="text-green-600 fill-current"></path></svg>
        <span class="-mt-px">Customizing Tailwind to meet the needs of your design</span>
      </li>
      <li class="mt-3 flex">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-6 w-6 mt-px mr-3 flex-shrink-0"><circle cx="12" cy="12" r="10" class="text-green-200 fill-current"></circle><path d="M10 14.59l6.3-6.3a1 1 0 0 1 1.4 1.42l-7 7a1 1 0 0 1-1.4 0l-3-3a1 1 0 0 1 1.4-1.42l2.3 2.3z" class="text-green-600 fill-current"></path></svg>
        <span class="-mt-px">Augmenting Tailwind with JavaScript to make your designs interactive</span>
      </li>
    </ul>
    <p class="mt-8">
      The course is completely free, and will be available in early July.
    </p>
  </div>
</div>
@endsection
