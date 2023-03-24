<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="ANSI">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Contact Form Task</title>
</head>

<body>
    <div class="h-screen bg-[#FFFBEB]">
        <div class="">
            <header class="top-0 z-1000 sticky bg-[#FFFBEB]">
                <nav class="text-center justify-between p-6" aria-label="Global">
                    <div class="space-x-12">
                        <a href="/" class="text-sm font-semibold leading-6 text-[#251749] hover:font-medium hover:underline hover:text-orange-600">
                            Home
                        </a>

                        <a href="/about" class="text-sm font-semibold leading-6 text-[#251749] hover:font-medium hover:underline hover:text-orange-600">
                            About
                        </a>

                        <a href="/services" class="text-sm font-semibold leading-6 text-[#251749] hover:font-medium hover:underline hover:text-orange-600">
                            Services
                        </a>

                        <a href="/contact" class="text-sm font-semibold leading-6 text-[#251749] hover:font-medium hover:underline hover:text-orange-600">
                            Contact
                        </a>
                    </div>
                </nav>
            </header>
        </div>
        <h1 class="text-center py-40 text-6xl font-['Helvetica Neue'] font-semibold bg-[#FFFBEB] text-[#263159]">
            welcome to the CONTACT PAGE
        </h1>
        <div>
            <div class="flex items-center justify-start bg-[#FFFBEB]">
                <div class="mx-auto w-full max-w-lg">
                    <h1 class="text-4xl font-medium">Contact us</h1>
                    <form method="POST" action="{{ url('/') }}/contact" class="mt-10">
                        @csrf
                        <input type="hidden" name="access_key" value="YOUR_ACCESS_KEY_HERE" />
                        <div class="grid gap-6 sm:grid-cols-2">
                            <div class="relative z-0">
                                <input type="text" name="name" class="peer block w-full appearance-none border-0 border-b border-gray-500 bg-transparent py-2.5 px-0 text-sm text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0" placeholder="" id="name" required />
                                <label class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:text-blue-600 peer-focus:dark:text-blue-500" htmlFor="name">
                                    Your name
                                </label>
                            </div>
                            <div class="relative z-0">
                                <input type="text" name="email" class="peer block w-full appearance-none border-0 border-b border-gray-500 bg-transparent py-2.5 px-0 text-sm text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0" placeholder="" id="email" required />
                                <label class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:text-blue-600 peer-focus:dark:text-blue-500" htmlFor="email">
                                    Your email
                                </label>
                            </div>
                            <div class="relative z-0 col-span-2">
                                <textarea name="message" rows="5" class="peer block w-full appearance-none border-0 border-b border-gray-500 bg-transparent py-2.5 px-0 text-sm text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0" placeholder="" id="message" required></textarea>
                                <label class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:text-blue-600 peer-focus:dark:text-blue-500" htmlFor="message">
                                    Your message
                                </label>
                            </div>
                        </div>
                        <button type="submit" name="submit" class="mt-5 rounded-md bg-black px-10 py-2 text-white">
                            Send Message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>