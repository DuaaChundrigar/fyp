<template>
    <div>
        <nav class="bg-gray-800">
            <div class="px-2 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="relative flex items-center justify-between h-16">
                    <div
                        class="absolute inset-y-0 left-0 flex items-center sm:hidden"
                    ></div>
                    <div
                        class="flex items-center justify-center flex-1 sm:items-stretch sm:justify-start"
                    >
                        <div class="flex items-center flex-shrink-0">
                            <img
                                class="hidden w-auto h-8 lg:block"
                                src="1.png"
                                alt="Logo"
                            />
                        </div>
                        <div class="hidden sm:block sm:ml-6">
                            <div class="flex space-x-4">
                                <a
                                    href="#"
                                    class="px-3 py-2 text-sm font-medium text-gray-300 rounded-md hover:bg-gray-700 hover:text-white"
                                    aria-current="page"
                                    >Home</a
                                >
                                <a
                                    href="#aboutus"
                                    class="px-3 py-2 text-sm font-medium text-gray-300 rounded-md hover:bg-gray-700 hover:text-white"
                                    >About</a
                                >
                                <a
                                    href="#"
                                    class="px-3 py-2 text-sm font-medium text-gray-300 rounded-md hover:bg-gray-700 hover:text-white"
                                    >Terms and Conditions</a
                                >
                                <a
                                    href="#"
                                    class="px-3 py-2 text-sm font-medium text-gray-300 rounded-md hover:bg-gray-700 hover:text-white"
                                    >Contact Us</a
                                >
                            </div>
                        </div>
                    </div>

                    <div
                        class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0"
                    >
                        <div>
                            <Link
                                href="/login"
                                type="button"
                                class="px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-md"
                            >
                                Login
                            </Link>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <!--Body start-->

        <div class="m-10">
            <div class="text-6xl font-bold text-center text-gray-800">
                Hiast Library Management System
            </div>
            <div>
                <video
                    class="flex w-full h-[60vh] items-center m-auto mt-10"
                    autoplay="true"
                    controls
                >
                    <source src="/storage/videos/video.mp4" type="video/mp4" />
                </video>
            </div>

            <div class="m-auto">
                <div
                    class="mt-10 text-6xl font-bold text-gray-800"
                    id="aboutus"
                >
                    About
                </div>

                <div class="grid justify-center grid-cols-3 gap-4 mt-10 m-14">
                    <div>
                        <div class="mb-10 text-4xl font-bold text-gray-800">
                            About Us
                        </div>
                        <img
                            class="rounded h-2/4"
                            src="/storage/images/image.png"
                        />
                        <div class="mt-2">
                            <div>
                                <div class="text-gray-700 text-1xl">
                                    About us HiAST Established in 2001, the
                                    Hyderabad Institute of Arts, Science and
                                    Technology (HiAST) is a chartered institute
                                    that offers a variety of undergraduate and
                                    graduate programs in affiliation with the
                                    University of Sindh and Mehran University of
                                    Engineering and Technology. Additionally,
                                    the HiAST education system comprises of the
                                    Royal Cedar Montessori and HiAST School and
                                    College.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="mb-10 text-4xl font-bold text-gray-800">
                            Our Mission
                        </div>
                        <img class="rounded h-2/4" src="Mission.jpg" />
                        <div class="mt-2">
                            <div>
                                <div class="text-gray-700 text-1xl">
                                    To equip students with the state-of-the-art
                                    knowledge, skills and exposure required to
                                    succeed in todays’ global marketplace. As a
                                    private non-denominational Institution,
                                    HiAST will equip fully and prepare students
                                    for holding the reign of the future of the
                                    region and the country.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="mb-10 text-4xl font-bold text-gray-800">
                            Our Vision
                        </div>
                        <img class="rounded h-2/4" src="Vision.jpg" />
                        <div class="mt-2">
                            <div>
                                <div class="text-gray-700 text-1xl">
                                    HiAST will maintain its tradition and
                                    surface as a still higher symbol of quality
                                    education with relevance to national needs
                                    to be provided to young men and women in the
                                    areas it will serve, imbibing in its ambit
                                    all the ingredients, tangibles and
                                    intangibles, which are pre-requisites for it
                                    in order to promote social growth and
                                    knowledge-based economic prosperity with
                                    special emphasis on proper harnessing and
                                    management of available resources.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-6xl font-bold text-gray-800">
                    Terms & Conditions
                </div>
                <div
                    class="grid grid-cols-1 gap-4 mt-5 mb-10 text-gray-800 text-1xl m-14"
                >
                    <ol>
                        <li>
                            1. Login I.D.’s, Passwords of various e-resources or
                            online resources will be communicated to the
                            students and faculty members from time to time.
                        </li>
                        <li>
                            2. Do not write, underline or mark any book.
                            Mutilation of library material can lead to heavy
                            fine and a disciplinary action against the patron.
                        </li>
                        <li>
                            3. After reading, leave books on the table or on the
                            book trolley. Please do not shelve the books.
                        </li>
                        <li>
                            4. Do not write, underline or mark any book.
                            Mutilation of library material can lead to heavy
                            fine and a disciplinary action against the patron.
                        </li>
                        <li>
                            5. Members must not to be sharing their net access
                            ID and Password with other students. .
                        </li>
                    </ol>
                </div>

                <div class="grid justify-center grid-cols-2 gap-4 mt-10 m-14">
                    <div class="">
                        <div class="mb-10 text-6xl font-bold text-gray-800">
                            Contact Us
                        </div>
                        <form>
                            <div class="flex flex-col mb-2">
                                <div class="relative">
                                    <input
                                        id="regno"
                                        type="text"
                                        name="regno"
                                        class="w-full py-2 pl-5 pr-4 text-sm placeholder-gray-500 border border-gray-400 rounded-2xl focus:outline-none focus:border-blue-400"
                                        placeholder="Enter your register number"
                                    />
                                </div>
                            </div>
                            <div class="flex flex-col mb-2">
                                <div class="relative">
                                    <input
                                        id="name"
                                        type="text"
                                        name="name"
                                        class="w-full py-2 pl-5 pr-4 text-sm placeholder-gray-500 border border-gray-400 rounded-2xl focus:outline-none focus:border-blue-400"
                                        placeholder="Enter your name"
                                    />
                                </div>
                            </div>
                            <div class="flex flex-col mb-2">
                                <div class="relative">
                                    <input
                                        id="email"
                                        type="email"
                                        name="email"
                                        class="w-full py-2 pl-5 pr-4 text-sm placeholder-gray-500 border border-gray-400 rounded-2xl focus:outline-none focus:border-blue-400"
                                        placeholder="Enter your email"
                                    />
                                </div>
                            </div>

                            <div class="flex flex-col mb-2">
                                <div class="relative">
                                    <input
                                        id="msg"
                                        type="textbox"
                                        name="msg"
                                        class="w-full py-2 pl-5 pr-4 text-sm placeholder-gray-500 border border-gray-400 rounded-2xl focus:outline-none focus:border-blue-400"
                                        placeholder="Enter your message here"
                                    />
                                </div>
                            </div>

                            <div class="flex items-center justify-center">
                                <button
                                    type="submit"
                                    class="px-8 py-2 mt-2 font-semibold text-white bg-gray-800 rounded text-1xl hover:bg-gray-600 hover:text-white"
                                >
                                    submit
                                </button>
                            </div>
                        </form>
                    </div>
                    <div>
                        <div class="mb-10 text-6xl font-bold text-gray-800">
                            Location
                        </div>
                        <div>
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14419.42716082293!2d68.3444061!3d25.3761157!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6e0f6881f3d90524!2s(HIAST)%20Hyderabad%20Institute%20Of%20Arts%20Science%20and%20Technology!5e0!3m2!1sen!2s!4v1648832136748!5m2!1sen!2s"
                                width="400"
                                height="400"
                                style="border: 0"
                                allowfullscreen=""
                                loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"
                            ></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import { Link } from "@inertiajs/inertia-vue3";
export default {
    components: {
        Link,
    },
};
</script>
