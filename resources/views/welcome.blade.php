<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport"
            content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net"
            rel="preconnect">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap"
            rel="stylesheet" />

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <style>
            * {
                margin: 0;
                padding: 0;
            }

            body {
                display: flex;
                justify-content: center;
                align-items: center;
                min-height: 100vh;
                background: #fff;
                font-family: "Lato", sans-serif;
                font-weight: 400;
                font-style: normal;
            }

            section {
                padding-block: min(20vh, 2rem);
                width: calc(min(76.5rem, 90%));
                margin-inline: auto;
                color: #111;

                h2 {
                    text-transform: capitalize;
                    letter-spacing: 0.025em;
                    font-size: clamp(2rem, 1.8125rem + 0.75vw, 2.6rem);
                }

                a {
                    display: inline-block;
                    text-decoration: none;
                }

                .container {
                    margin-top: 5em;
                    display: grid;
                    grid-template-columns: repeat(auto-fit, minmax(16rem, 1fr));
                    gap: 2rem;

                    .card-inner {
                        .box {
                            position: relative;
                            width: inherit;
                            height: 18.75rem;
                            background: red;
                            border-radius: 1.25rem;
                            overflow: hidden;

                            .imgBox {
                                position: absolute;
                                inset: 0;

                                img {
                                    width: 100%;
                                    height: 100%;
                                    object-fit: cover;
                                }
                            }

                            .icon {
                                position: absolute;
                                bottom: -0.375rem;
                                right: -0.375rem;
                                width: 6rem;
                                height: 6rem;
                                background: orange;
                                border-top-left-radius: 50%;

                                &:hover .iconBox {
                                    transform: scale(1.1);
                                }

                                &::before {
                                    position: absolute;
                                    content: "";
                                    bottom: 0.375rem;
                                    left: -1.25rem;
                                    background: yellow;
                                    width: 1.25rem;
                                    height: 1.25rem;
                                    border-bottom-right-radius: 1.25rem;
                                    box-shadow: 0.313rem 0.313rem 0 0.313rem yellow;
                                }

                                &::after {
                                    position: absolute;
                                    content: "";
                                    top: -1.25rem;
                                    right: 0.375rem;
                                    background: red;
                                    width: 1.25rem;
                                    height: 1.25rem;
                                    border-bottom-right-radius: 1.25rem;
                                    box-shadow: 0.313rem 0.313rem 0 0.313rem orange;
                                }

                                .iconBox {
                                    position: absolute;
                                    inset: 10px;
                                    background: #282828;
                                    border-radius: 50%;
                                    display: flex;
                                    justify-content: center;
                                    align-items: center;
                                    transition: 0.3s;

                                    span {
                                        color: #fff;
                                        font-size: 1.5rem;
                                    }
                                }
                            }
                        }
                    }
                }
            }
        </style>
        @livewireStyles
    </head>

    <body class="font-sans antialiased">

        <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0"
            rel="stylesheet" />
        <section>

            <div class="container">
                <div class="card">
                    <div class="card-inner"
                        style="--clr:#fff;">
                        <div class="box">
                            <div class="imgBox">
                                <img src="https://images.unsplash.com/photo-1601049676869-702ea24cfd58?q=80&w=2073&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                    alt="Trust & Co.">
                            </div>
                            <div class="icon">
                                <a class="iconBox"
                                    href="#"> <span class="material-symbols-outlined">
                                        arrow_outward
                                    </span></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </body>

</html>
