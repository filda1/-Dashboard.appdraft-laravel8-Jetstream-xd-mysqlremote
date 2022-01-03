<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Xd&NSolucoes</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
        
    </head>

    <body class="antialiased">
        <div class="relative flex justify-center min-h-screen py-4 bg-gray-100 items-top dark:bg-gray-900 sm:items-center sm:pt-0">
            @if (Route::has('login'))
                <div class="fixed top-0 right-0 hidden px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline dark:text-gray-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline dark:text-gray-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline dark:text-gray-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                   <!-- <svg viewBox="0 0 651 192" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-auto h-16 text-gray-700 sm:h-20">
                        <g clip-path="url(#clip0)" fill="#EF3B2D">
                            <path d="M248.032 44.676h-16.466v100.23h47.394v-14.748h-30.928V44.676zM337.091 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.431 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162-.001 2.863-.479 5.584-1.432 8.161zM463.954 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.432 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162 0 2.863-.479 5.584-1.432 8.161zM650.772 44.676h-15.606v100.23h15.606V44.676zM365.013 144.906h15.607V93.538h26.776V78.182h-42.383v66.724zM542.133 78.182l-19.616 51.096-19.616-51.096h-15.808l25.617 66.724h19.614l25.617-66.724h-15.808zM591.98 76.466c-19.112 0-34.239 15.706-34.239 35.079 0 21.416 14.641 35.079 36.239 35.079 12.088 0 19.806-4.622 29.234-14.688l-10.544-8.158c-.006.008-7.958 10.449-19.832 10.449-13.802 0-19.612-11.127-19.612-16.884h51.777c2.72-22.043-11.772-40.877-33.023-40.877zm-18.713 29.28c.12-1.284 1.917-16.884 18.589-16.884 16.671 0 18.697 15.598 18.813 16.884h-37.402zM184.068 43.892c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002-35.648-20.524a2.971 2.971 0 00-2.964 0l-35.647 20.522-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v38.979l-29.706 17.103V24.493a3 3 0 00-.103-.776c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002L40.098 1.396a2.971 2.971 0 00-2.964 0L1.487 21.919l-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v122.09c0 1.063.568 2.044 1.489 2.575l71.293 41.045c.156.089.324.143.49.202.078.028.15.074.23.095a2.98 2.98 0 001.524 0c.069-.018.132-.059.2-.083.176-.061.354-.119.519-.214l71.293-41.045a2.971 2.971 0 001.489-2.575v-38.979l34.158-19.666a2.971 2.971 0 001.489-2.575V44.666a3.075 3.075 0 00-.106-.774zM74.255 143.167l-29.648-16.779 31.136-17.926.001-.001 34.164-19.669 29.674 17.084-21.772 12.428-43.555 24.863zm68.329-76.259v33.841l-12.475-7.182-17.231-9.92V49.806l12.475 7.182 17.231 9.92zm2.97-39.335l29.693 17.095-29.693 17.095-29.693-17.095 29.693-17.095zM54.06 114.089l-12.475 7.182V46.733l17.231-9.92 12.475-7.182v74.537l-17.231 9.921zM38.614 7.398l29.693 17.095-29.693 17.095L8.921 24.493 38.614 7.398zM5.938 29.632l12.475 7.182 17.231 9.92v79.676l.001.005-.001.006c0 .114.032.221.045.333.017.146.021.294.059.434l.002.007c.032.117.094.222.14.334.051.124.088.255.156.371a.036.036 0 00.004.009c.061.105.149.191.222.288.081.105.149.22.244.314l.008.01c.084.083.19.142.284.215.106.083.202.178.32.247l.013.005.011.008 34.139 19.321v34.175L5.939 144.867V29.632h-.001zm136.646 115.235l-65.352 37.625V148.31l48.399-27.628 16.953-9.677v33.862zm35.646-61.22l-29.706 17.102V66.908l17.231-9.92 12.475-7.182v33.841z"/>
                        </g>
                    </svg> -->
               
                    <svg width="1199px" height="105px" viewBox="0 0 1199 205" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <title>v</title>
                        <defs>
                            <linearGradient x1="49.9994995%" y1="0.00244851259%" x2="49.9994995%" y2="100.00004%" id="linearGradient-1">
                                <stop stop-color="#0F8EBC" offset="0%"></stop>
                                <stop stop-color="#175D8A" offset="100%"></stop>
                            </linearGradient>
                            <linearGradient x1="49.9994995%" y1="0.00244851259%" x2="49.9994995%" y2="100.00004%" id="linearGradient-2">
                                <stop stop-color="#0F8EBC" offset="0%"></stop>
                                <stop stop-color="#175D8A" offset="100%"></stop>
                            </linearGradient>
                            <linearGradient x1="49.9994995%" y1="0.00244851259%" x2="49.9994995%" y2="100.00004%" id="linearGradient-3">
                                <stop stop-color="#0F8EBC" offset="0%"></stop>
                                <stop stop-color="#175D8A" offset="100%"></stop>
                            </linearGradient>
                            <linearGradient x1="49.9994995%" y1="0.00244851259%" x2="49.9994995%" y2="100.00004%" id="linearGradient-4">
                                <stop stop-color="#0F8EBC" offset="0%"></stop>
                                <stop stop-color="#175D8A" offset="100%"></stop>
                            </linearGradient>
                        </defs>
                        <g id="v" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="Group" fill-rule="nonzero">
                                <polygon id="Fill-15" fill="url(#linearGradient-1)" points="310.93945 5.72759396 306.966589 5.72759396 306.966589 2.9191155 318.329773 2.9191155 318.329773 5.72759396 314.291865 5.72759396 314.291865 17.7124379 310.93945 17.7124379"></polygon>
                                <path d="M332.507485,12.0489233 C332.442438,10.2767283 332.382394,8.12406213 332.382394,5.97139592 L332.317348,5.97139592 C331.852012,7.8587335 331.236569,9.9663439 330.671162,11.6984893 L328.864861,17.4706384 L326.257983,17.4706384 L324.681848,11.7435451 C324.196499,10.0063935 323.691135,7.89878311 323.340882,5.97139592 L323.29585,5.97139592 C323.210789,7.96886991 323.145742,10.2466911 323.030659,12.0939791 L322.770472,17.710936 L319.683248,17.710936 L320.618922,2.91761364 L325.077133,2.91761364 L326.523174,7.8587335 C326.983506,9.57085406 327.438834,11.4131358 327.774075,13.1452812 L327.834119,13.1452812 C328.254421,11.4331606 328.759785,9.48074246 329.245135,7.8337025 L330.82127,2.91761364 L335.184413,2.91761364 L336,17.710936 L332.727643,17.710936 L332.507485,12.0489233 Z" id="Fill-17" fill="url(#linearGradient-2)"></path>
                                <polygon id="Fill-19" fill="url(#linearGradient-3)" points="171.69366 0.0300372028 108.087849 0.0150186014 90.0698718 44.2047502 66.8031141 0 0 0 55.7101246 101.455659 0.0200144151 204.182892 63.5407645 204.182892 84.5008607 155.998213 108.087849 204.182892 171.608599 204.182892 117.944948 99.663439"></polygon>
                                <path d="M180.518516,0.0300372028 L203.410004,0.0150186014 C257.028622,0.0150186014 306.964588,41.8217987 306.964588,102.106465 C306.964588,162.456212 257.143705,204.182892 203.410004,204.182892 L180.478487,204.182892 L150.351789,144.814361 L203.410004,144.814361 C214.177759,144.814361 245.360218,134.746892 245.360218,102.106465 C245.360218,71.4084435 218.530894,58.9680354 203.410004,58.9680354 L150.351789,58.9680354 L180.518516,0.0300372028 Z" id="Fill-21" fill="url(#linearGradient-4)"></path>
                            </g>
                            <path d="M411.62,154.4 C432.76,154.4 447.6,143.48 447.6,124.02 L447.6,123.74 C447.6,106.66 436.4,99.52 416.52,94.34 C399.58,90 395.38,87.9 395.38,81.46 L395.38,81.18 C395.38,76.42 399.72,72.64 407.98,72.64 C416.24,72.64 424.78,76.28 433.46,82.3 L444.66,66.06 C434.72,58.08 422.54,53.6 408.26,53.6 C388.24,53.6 373.96,65.36 373.96,83.14 L373.96,83.42 C373.96,102.88 386.7,108.34 406.44,113.38 C422.82,117.58 426.18,120.38 426.18,125.84 L426.18,126.12 C426.18,131.86 420.86,135.36 412.04,135.36 C400.84,135.36 391.6,130.74 382.78,123.46 L370.04,138.72 C381.8,149.22 396.78,154.4 411.62,154.4 Z M513.96,154.68 C544.2,154.68 566.18,131.86 566.18,104 L566.18,103.72 C566.18,75.86 544.48,53.32 514.24,53.32 C484,53.32 462.02,76.14 462.02,104 L462.02,104.28 C462.02,132.14 483.72,154.68 513.96,154.68 Z M514.24,134.8 C496.88,134.8 484.56,120.8 484.56,104 L484.56,103.72 C484.56,86.92 496.6,73.2 513.96,73.2 C531.32,73.2 543.64,87.2 543.64,104 L543.64,104.28 C543.64,121.08 531.6,134.8 514.24,134.8 Z M606.92,153 L606.92,115.06 L653.68,115.06 L653.68,95.46 L606.92,95.46 L606.92,74.6 L659.98,74.6 L659.98,55 L585.36,55 L585.36,153 L606.92,153 Z M721.58,153 L721.58,74.88 L751.4,74.88 L751.4,55 L670.2,55 L670.2,74.88 L700.02,74.88 L700.02,153 L721.58,153 Z M812.58,153.7 L834.7,89.58 L856.82,153.7 L875.58,153.7 L909.04,55 L886.5,55 L866.2,121.36 L844.22,54.72 L825.74,54.72 L803.76,121.36 L783.46,55 L760.36,55 L793.82,153.7 L812.58,153.7 Z M925.98,153 L934.94,131.02 L976.38,131.02 L985.34,153 L1007.88,153 L965.88,54.3 L946,54.3 L904,153 L925.98,153 Z M968.68,111.98 L942.64,111.98 L955.66,80.2 L968.68,111.98 Z M1044.56,153 L1044.56,121.64 L1061.5,121.64 L1082.5,153 L1107.7,153 L1083.76,118 C1096.22,113.38 1104.76,103.44 1104.76,87.62 L1104.76,87.34 C1104.76,78.1 1101.82,70.4 1096.36,64.94 C1089.92,58.5 1080.26,55 1067.8,55 L1023,55 L1023,153 L1044.56,153 Z M1066.4,102.6 L1044.56,102.6 L1044.56,74.46 L1065.98,74.46 C1076.48,74.46 1082.92,79.22 1082.92,88.46 L1082.92,88.74 C1082.92,97 1076.9,102.6 1066.4,102.6 Z M1198.84,153 L1198.84,133.82 L1145.64,133.82 L1145.64,113.24 L1191.84,113.24 L1191.84,94.06 L1145.64,94.06 L1145.64,74.18 L1198.14,74.18 L1198.14,55 L1124.22,55 L1124.22,153 L1198.84,153 Z" id="SOFTWARE" fill="#16608D" fill-rule="nonzero"></path>
                        </g>
                    </svg>

                    
                </div>

                <div class="mt-8 overflow-hidden bg-white shadow dark:bg-gray-800 sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                                <div class="ml-4 text-lg font-semibold leading-7 text-gray-900 dark:text-white">Software</div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-sm text-gray-600 dark:text-gray-400">
                                    <!--Laravel has wonderful, thorough documentation covering every aspect of the framework. Whether you are new to the framework or have previous experience with Laravel, we recommend reading all of the documentation from beginning to end.-->
                                 Plataforma tecnológica de ponto de venda mais evoluída do mercado, aliada a uma interface intuitiva e personalizável.

                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                
                                <div class="ml-4 text-lg font-semibold leading-7 text-gray-900 dark:text-white">Equipa</div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-sm text-gray-600 dark:text-gray-400">
                                   <!-- Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process. -->
                                   Conta com uma equipa muito experiente na área de Software de Gestão e um percurso de mais de 25 anos de experiência no que diz respeito ao desenvolvimento de soluções que se tornaram líderes no sector.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>
                            
                                <div class="ml-4 text-lg font-semibold leading-7 text-gray-900 dark:text-white">Missão</div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-sm text-gray-600 dark:text-gray-400">
                                    <!--Laravel News is a community driven portal and newsletter aggregating all of the latest and most important news in the Laravel ecosystem, including new package releases and tutorials. -->
                                    Somos apaixonados por apoiar o sucesso dos nossos clientes, através do desenvolvimento de soluções tecnológicas inovadoras, fornecendo ferramentas ágeis e adaptadas às novas exigências das PMEs.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <div class="ml-4 text-lg font-semibold leading-7 text-gray-900 dark:text-white">Compromisso</div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-sm text-gray-600 dark:text-gray-400">
                                    <!-- Laravel's robust library of first-party tools and libraries, such as <a href="https://forge.laravel.com" class="underline">Forge</a>, <a href="https://vapor.laravel.com" class="underline">Vapor</a>, <a href="https://nova.laravel.com" class="underline">Nova</a>, and <a href="https://envoyer.io" class="underline">Envoyer</a> help you take your projects to the next level. Pair them with powerful open source libraries like <a href="https://laravel.com/docs/billing" class="underline">Cashier</a>, <a href="https://laravel.com/docs/dusk" class="underline">Dusk</a>, <a href="https://laravel.com/docs/broadcasting" class="underline">Echo</a>, <a href="https://laravel.com/docs/horizon" class="underline">Horizon</a>, <a href="https://laravel.com/docs/sanctum" class="underline">Sanctum</a>, <a href="https://laravel.com/docs/telescope" class="underline">Telescope</a>, and more. -->
                                    A XD reafirma o compromisso com os seus parceiros, clientes finais e administração fiscal, em garantir soluções de gestão fiáveis, em constante adaptação e respeito pela legislação em vigor bem como à evolução das necessidades dos utilizadores XD.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                    <div class="text-sm text-center text-gray-500 sm:text-left">
                        <div class="flex items-center">
                            <!--<svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5 -mt-px text-gray-400">
                                <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>-->

                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                              </svg>

                            <a href="https://www.xdsoftware.pt" class="ml-1 underline">
                                Web
                            </a>

                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-5 h-5 ml-4 -mt-px text-gray-400">
                                <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>

                            <a href="" class="ml-1 underline">
                             
                            </a>
                        </div>
                    </div>

                    <div class="ml-4 text-sm text-center text-gray-500 sm:text-right sm:ml-0">
                        <!--Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})-->
                        Desenvolvido por Napp 2021.
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
