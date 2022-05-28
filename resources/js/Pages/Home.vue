<template>
    <div>
        
        <div  class="flex justify-between m-auto bg-gray-100 shadow-lg ">
                    
                            <div class="flex ml-10">
                                <img
                                    class="flex-shrink-0 w-auto h-20"
                                    src="/storage/logo/logo.png"
                                    alt="Logo"
                                />
                            </div>
                            
                            <div
                                class="m-auto space-x-4 font-bold text-gray-900 text-1xl "
                            >
                                <a
                                    href="#home"
                                    class="px-3 py-2 rounded-md hover:bg-gray-200"
                                    >Home</a
                                >
                                <a
                                    href="#aboutus"
                                    class="px-3 py-2 rounded-md hover:bg-gray-200 "
                                    >About</a
                                >
                                <a
                                    href="#tandc"
                                    class="px-3 py-2 rounded-md hover:bg-gray-200"
                                    >Terms and Conditions</a
                                >
                                <a
                                    href="#contact"
                                    class="px-3 py-2 rounded-md hover:bg-gray-200"
                                    >Contact Us</a
                                >
                                <a
                                    href="#team"
                                    class="px-3 py-2 rounded-md hover:bg-gray-200"
                                    >Our Team</a
                                >
                            </div>
                    
                            <div class="m-auto ml-60">
                                <Link
                                    href="/login"
                                    type="button"
                                    class="px-3 py-2 ml-10 font-bold text-gray-100 bg-gray-700 rounded-md text-1xl hover:bg-gray-200 hover:text-gray-900"
                                >
                                    Login
                                </Link>
                                <Link
                                    href="/register"
                                    type="button"
                                    class="px-3 py-2 ml-4 font-bold text-gray-100 bg-gray-700 rounded-md text-1xl hover:bg-gray-200 hover:text-gray-900"
                                >
                                    Register
                                </Link>
                            </div>
                        

        </div>

        <!--Body start-->

        <div class="m-10">
            <div
                class="font-serif text-6xl font-bold text-center text-gray-800"
            >
                Hiast Library Management System
            </div>
            <div>
                <video
                    class="flex w-full h-[60vh] items-center m-auto mt-10 mb-24"
                    autoplay
                    loop
                    muted
                >
                    <source src="/storage/videos/hiast.mp4" type="video/mp4" />
                </video>
            </div>
            <div>
                <div
                    class="mt-10 ml-12 text-6xl font-bold text-gray-800 "
                    id="aboutus"
                >
                    <h1 class="mt-10 font-serif text-6xl font-bold text-center text-gray-800 ">About Us</h1>
                </div>
                <div class="grid justify-center grid-cols-3 gap-4 mt-10 m-14">
                    <div>
                        <div class="mb-10 text-4xl font-bold text-gray-800">
                            About Us
                        </div>
                        <img
                            class="w-full text-gray-700 rounded h-2/4 text-1xl"
                            src="/storage/images/About.jpg"
                        />
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

                    <div>
                        <div class="mb-10 text-4xl font-bold text-gray-800">
                            Our Mission
                        </div>
                        <img
                            class="w-full text-gray-700 rounded h-2/4 text-1xl"
                            src="/storage/images/Mission.jpg"
                        />
                        
                                    To equip students with the state-of-the-art
                                    knowledge, skills and exposure required to
                                    succeed in todays’ global marketplace. As a
                                    private non-denominational Institution,
                                    HiAST will equip fully and prepare students
                                    for holding the reign of the future of the
                                    region and the country.
                    </div>

                    <div>
                        <div class="mb-10 text-4xl font-bold text-gray-800">
                            Our Vision
                        </div>
                        <img
                            class="w-full text-gray-700 rounded h-2/4 text-1xl"
                            src="/storage/images/Vision.jpg"
                        />
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
                <div
                    class="grid grid-cols-1 gap-4 text-gray-800 text-1xl m-14"
                >
                    <div class="text-6xl font-bold text-gray-800"
                    id="tandc"
                    >
            <h1 class="font-serif text-6xl font-bold text-center text-gray-800 ">Terms And Conditions</h1>

                    </div>
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

                <div class="grid justify-center gap-4 mt-10 m-14">
                    <div class="">
                        <div class="mb-10 text-6xl font-bold text-gray-800"
                        id="contact"
                        >
            <h1 class="font-serif text-6xl font-bold text-center text-gray-800 ">Contact Us</h1>

                        </div>
                        <form @submit.prevent="submitForm">
                            <div class="flex flex-col mb-2">
                                <div class="relative">
                                    <input
                                        type="text"
                                        v-model="formData.regno"
                                        class="w-full py-2 pl-5 pr-4 text-sm placeholder-gray-500 border border-gray-400 rounded-2xl focus:outline-none focus:border-blue-400"
                                        placeholder="Enter your register number"
                                    />
                                </div>
                            </div>
                            <div class="flex flex-col mb-2">
                                <div class="relative">
                                    <input
                                        type="text"
                                        v-model="formData.name"
                                        class="w-full py-2 pl-5 pr-4 text-sm placeholder-gray-500 border border-gray-400 rounded-2xl focus:outline-none focus:border-blue-400"
                                        placeholder="Enter your name"
                                    />
                                </div>
                            </div>
                            <div class="flex flex-col mb-2">
                                <div class="relative">
                                    <input
                                        type="email"
                                        v-model="formData.email"
                                        class="w-full py-2 pl-5 pr-4 text-sm placeholder-gray-500 border border-gray-400 rounded-2xl focus:outline-none focus:border-blue-400"
                                        placeholder="Enter your email"
                                    />
                                </div>
                            </div>

                            <div class="flex flex-col mb-2">
                                <div class="relative">
                                    <input
                                        type="textbox"
                                        v-model="formData.msg"
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
                </div>
                    <div>
                        <div class="mb-10 text-6xl font-bold text-gray-800">
        <h1 class="font-serif text-6xl font-bold text-center text-gray-800 "
        id="location"
        >Location</h1>

                        </div>
                        <div>
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14419.42716082293!2d68.3444061!3d25.3761157!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6e0f6881f3d90524!2s(HIAST)%20Hyderabad%20Institute%20Of%20Arts%20Science%20and%20Technology!5e0!3m2!1sen!2s!4v1648832136748!5m2!1sen!2s"
                                width="100%"
                                height="300"
                                style="border: 0"
                                allowfullscreen=""
                                loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"
                            ></iframe>
                        </div>
                    </div>

                    <h1 class="mt-10 font-serif text-6xl font-bold text-center text-gray-800 "
                    id="team"
                    >Our Supervisor</h1>
                <div class="grid justify-center grid-cols-3 gap-4 mt-10 text-4xl m-14">
                    <div>
                        <!-- <img
                            class="w-full text-gray-700 rounded h-2/4 text-1xl"
                            src="/storage/images/About.jpg"
                        /> -->
                                    <!-- <h1 class="mb-5 font-serif text-3xl font-bold text-center text-gray-800">Saima Palari</h1> -->
                    </div>

                    <div>
                        <img
                            class="w-full text-gray-700 rounded h-4/4 text-1xl"
                            src="/storage/images/Mission.jpg"
                        />
                        
                        <h1 class="mt-4 font-serif text-3xl font-bold text-center text-gray-800">Prof. Tehseen Hafiz</h1>

                    </div>

                    <div class="">
                        <!-- <img
                            class="w-full text-gray-700 rounded h-2/4 "
                            src="/storage/images/Vision.jpg"
                        /> -->
                        <!-- <h1 class="mb-5 font-serif text-3xl font-bold text-center text-gray-800">Duaa Chundrigar</h1> -->

                    </div>
                </div>

                 <h1 class="mb-5 font-serif text-6xl font-bold text-center text-gray-800 "
                    id="team"
                    >Our Team</h1>
                <div class="grid justify-center grid-cols-3 gap-4 mt-10 text-4xl m-14">
                    <div>
                        <img
                            class="w-full text-gray-700 rounded h-3/4 text-1xl"
                            src="/storage/images/About.jpg"
                        />
                        <h1 class="mt-4 font-serif text-3xl font-bold text-center text-gray-800 ">Saima Palari</h1>
                        <h1 class="mb-5 font-serif text-2xl font-bold text-center text-gray-800 ">A18BSIT066</h1>

                    </div>

                    <div>
                        <img
                            class="w-full text-gray-700 rounded h-3/4 text-1xl"
                            src="/storage/images/Mission.jpg"
                        />
                        
                        <h1 class="mt-4 font-serif text-3xl font-bold text-center text-gray-800">Mahnoor Tahir</h1>
                        <h1 class="mb-5 font-serif text-2xl font-bold text-center text-gray-800 ">A18BSIT052</h1>


                    </div>

                    <div class="">
                        <img
                            class="w-full text-gray-700 rounded h-3/4 "
                            src="/storage/images/Vision.jpg"
                        />
                        <h1 class="mt-4 font-serif text-3xl font-bold text-center text-gray-800">Duaa Chundrigar</h1>
                        <h1 class="mb-5 font-serif text-2xl font-bold text-center text-gray-800 ">A18BSIT067</h1>

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

    data() {
        return {
            formData: {
                regno: "",
                name: "",
                email: "",
                msg: "",
            },
        };
    },
    methods: {
        submitForm() {
            this.$inertia.post("/admin/contact", {
                formData: this.formData,
            });
        },
    },
};
</script>
