<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title') - Laravel App</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        /* ! tailwindcss v3.4.1 | MIT License | https://tailwindcss.com */
        *,
        ::after,
        ::before {
            box-sizing: border-box;
            border-width: 0;
            border-style: solid;
            border-color: #e5e7eb
        }

        ::after,
        ::before {
            --tw-content: ''
        }

        :host,
        html {
            line-height: 1.5;
            -webkit-text-size-adjust: 100%;
            -moz-tab-size: 4;
            tab-size: 4;
            font-family: Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            font-feature-settings: normal;
            font-variation-settings: normal;
            -webkit-tap-highlight-color: transparent
        }

        body {
            background-image: url("https://petshop.petcenter.com.bo/wp-content/uploads/2021/03/perro-enfermero.png");

            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            margin: 0;
            background-position: center center;
        }

        .background-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(5px);
            z-index: -1;
        }

        hr {
            height: 0;
            color: inherit;
            border-top-width: 1px
        }

        @media (min-width: 640px) {
            .sm\:size-16 {
                width: 4rem;
                height: 4rem
            }

            .sm\:size-6 {
                width: 1.5rem;
                height: 1.5rem
            }

            .sm\:pt-5 {
                padding-top: 1.25rem
            }
        }

        @media (min-width: 768px) {
            .md\:row-span-3 {
                grid-row: span 3 / span 3
            }
        }

        @media (min-width: 1024px) {
            .lg\:col-start-2 {
                grid-column-start: 2
            }

            .lg\:h-16 {
                height: 4rem
            }

            .lg\:max-w-7xl {
                max-width: 80rem
            }

            .lg\:grid-cols-3 {
                grid-template-columns: repeat(3, minmax(0, 1fr))
            }

            .lg\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }

            .lg\:flex-col {
                flex-direction: column
            }

            .lg\:items-end {
                align-items: flex-end
            }

            .lg\:justify-center {
                justify-content: center
            }

            .lg\:gap-8 {
                gap: 2rem
            }

            .lg\:p-10 {
                padding: 2.5rem
            }

            .lg\:pb-10 {
                padding-bottom: 2.5rem
            }

            .lg\:pt-0 {
                padding-top: 0px
            }

            .lg\:text-\[\#FF2D20\] {
                --tw-text-opacity: 1;
                color: rgb(255 45 32 / var(--tw-text-opacity))
            }
        }

        button.botonverde {
            font-size: 20px;
            background-color: #d3ff54;
            color: #222;
            padding: 0.75rem 1.5rem;
            border-radius: 20px;
            font-weight: bold;
            text-decoration: none;
            border: 3px solid black;
            transition: background-color 0.3s ease;
        }

        .botonverde:hover {
            background-color: #b0e63a;
        }

        .container {
            background-color: #78D4CC;
            border: 3px solid black;
            border-radius: 20px;
            margin: 2rem auto;
            padding: 2rem;
            min-width: 350px;
            max-width: 600px;
            text-align: center;
            box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.5);
            justify-content: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        h1 {

            color: black;
            margin-bottom: 1.5rem;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            align-self: stretch;

        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: calc(100% - 2rem);
            padding: 1rem;
            margin: 0.5rem 0;
            border: 3px solid black;
            border-radius: 10px;
            font-size: 1rem;
        }


        .forgot-password {
            display: block;
            margin-top: 0.5rem;
            font-size: 0.8rem;
            color: #333;
            margin-left: auto;
            padding-right: 20px;
        }

        .separator {
            margin: 1rem 0;
            text-align: center;
            color: black;
            font-weight: bold;
            font-size: 20px;
        }

        .google-button {
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: white;
            border: 2px solid #ddd;
            border-radius: 5px;
            padding: 0.5rem 1rem;
            text-decoration: none;
            font-weight: bold;
            color: #333;
            transition: background-color 0.3s ease;
        }

        .google-button:hover {
            background-color: #f5f5f5;
        }

        .google-button img {
            width: 1.5rem;
            height: 1.5rem;
            margin-right: 0.5rem;
        }
    </style>
</head>

<body>
    <x-header />

    <div class="background-overlay"></div>
    
    @yield('content')
    
    <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">

    </div>
</body>

</html>