<template>
    <div class="">
        <div class="bg-gray-100 shadow-lg">
            <div
                class="container flex justify-between m-auto mx-auto space-x-8"
            >
                <div class="flex">
                    <img
                        class="flex-shrink-0 w-auto h-20"
                        src="/storage/logo/logo.png"
                        alt="Logo"
                    />
                </div>

                <div class="flex items-center justify-center">
                    <Link
                        href="/"
                        type="button"
                        class="px-3 py-2 font-bold text-gray-100 bg-gray-900 rounded-md text-1xl hover:bg-gray-200 hover:text-gray-900"
                    >
                        Home
                    </Link>
                </div>
            </div>
        </div>

        <!-- <div
            class="flex max-w-md px-4 py-8 mx-auto my-8 bg-gray-100 sm:px-6 md:px-8 lg:px-10 "
        > -->
        <div
            class="w-3/12 px-4 py-8 m-auto mt-8 bg-gray-700 shadow-md sm:px-6 md:px-8 lg:px-10 rounded-2xl"
        >
            <div
                class="text-xl font-bold text-center text-gray-100 sm:text-3xl"
            >
                Register Now
            </div>

            <div class="mt-5">
                <!-- <span class="text-sm text-red-600"> {{ getTest }}</span> -->
                <form @submit.prevent="submitForm">
                    <div class="grid grid-cols-1 mb-2">
                        <div class="relative inline-flex col-span-1">
                            <label class="mr-4 text-sm text-white"> Roll No. </label>
                        </div>
                        <div class="col-span-1">
                            <input
                                required
                                id="regno"
                                type="text"
                                v-model="formData.regno"
                                name="regno"
                                class="w-full py-2 pl-5 pr-4 text-sm placeholder-gray-500 border border-gray-400 rounded-2xl focus:outline-none focus:border-blue-400"
                                placeholder="Enter your register number"
                            />
                        </div>
                    </div>
                    <div class="grid grid-cols-1 mb-2">
                        <div class="relative inline-flex col-span-1">
                            <label class="mr-4 text-sm text-white">
                                Full Name
                            </label>
                        </div>
                        <div class="col-span-1">
                            <input
                                required
                                id="name"
                                type="text"
                                v-model="formData.name"
                                name="name"
                                class="w-full py-2 pl-5 pr-4 text-sm placeholder-gray-500 border border-gray-400 rounded-2xl focus:outline-none focus:border-blue-400"
                                placeholder="Enter your name"
                            />
                        </div>
                    </div>
                    <div class="grid grid-cols-1 mb-2">
                        <div class="relative inline-flex col-span-1">
                            <label class="mr-4 text-sm text-white">
                                Email
                            </label>
                        </div>
                        <div class="col-span-1">
                            <input
                                required
                                id="email"
                                type="email"
                                v-model="formData.email"
                                name="email"
                                class="w-full py-2 pl-5 pr-4 text-sm placeholder-gray-500 border border-gray-400 rounded-2xl focus:outline-none focus:border-blue-400"
                                placeholder="Enter your email"
                            />
                        </div>
                    </div>

                    <!-- <div class="flex flex-col mb-2">
                        <div class="relative">
                            <input
                                id="batch"
                                type="text"
                                v-model="formData.batch"
                                name="batch"
                                class="w-full py-2 pl-5 pr-4 text-sm placeholder-gray-500 border border-gray-400 rounded-2xl focus:outline-none focus:border-blue-400"
                                placeholder="Enter your Batch"
                            />
                        </div>
                    </div> -->
                    <div class="grid grid-cols-1 mb-2">
                        <div class="relative inline-flex col-span-1">
                            <label class="mr-4 text-sm text-white">
                                School / College / Batch
                            </label>
                        </div>
                        <div class="col-span-1">
                            <select
                                class="w-full text-gray-500 rounded-full"
                                v-model="formData.batch"
                                required
                            >
                                <option value="">Select an option</option>
                                <option>9</option>
                                <option>10</option>
                                <option>11</option>
                                <option>12</option>
                                <option>18</option>
                                <option>19</option>
                                <option>21st</option>
                                <option>1st</option>
                                <option>23</option>
                                <option>24</option>
                                <option>25</option>
                                <option>26</option>
                                <option>27</option>
                            </select>
                        </div>
                    </div>
                    <!-- <div class="flex flex-col mb-2">
                        <div class="relative">
                            <input
                                id="program"
                                type="text"
                                v-model="formData.program"
                                name="program"
                                class="w-full py-2 pl-5 pr-4 text-sm placeholder-gray-500 border border-gray-400 rounded-2xl focus:outline-none focus:border-blue-400"
                                placeholder="Enter your program"
                            />
                        </div> -->
                    <div class="grid grid-cols-1 mb-2">
                        <div class="relative inline-flex col-span-1">
                            <label class="mr-4 text-sm text-white">
                                Program
                            </label>
                        </div>
                        <div class="col-span-1">
                            <select
                                class="w-full text-gray-500 rounded-full"
                                v-model="formData.program"
                                required
                            >
                                <option value="">Select an option</option>
                                <option>School</option>
                                <option>College</option>
                                <option>BSIT</option>
                                <option>BBA</option>
                                <option>BSCS MEUT</option>
                                <option>BSCS GCU</option>
                            </select>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 mb-2">
                        <div class="relative inline-flex col-span-1">
                            <label class="mr-4 text-sm text-white">
                                Enter Password
                            </label>
                        </div>
                        <div class="col-span-1">
                            <input
                                required
                                id="password"
                                type="password"
                                v-model="formData.password"
                                name="password"
                                class="w-full py-2 pl-5 pr-4 text-sm placeholder-gray-500 border border-gray-400 rounded-2xl focus:outline-none focus:border-blue-400"
                                placeholder="Enter your password"
                            />
                        </div>
                    </div>
                    <div class="grid grid-cols-1 mb-2">
                        <div class="relative inline-flex col-span-1">
                            <label class="mr-4 text-sm text-white">
                                Re-Enter Password
                            </label>
                        </div>
                        <div class="col-span-1">
                            <input
                                required
                                id="confirm_password"
                                type="password"
                                name="confirm_password"
                                class="w-full py-2 pl-5 pr-4 text-sm placeholder-gray-500 border border-gray-400 rounded-2xl focus:outline-none focus:border-blue-400"
                                placeholder="Re-enter your password"
                            />
                        </div>
                    </div>

                    <div class="grid grid-cols-1 mb-2">
                        <div class="relative inline-flex col-span-1">
                            <label
                                for=""
                                class="pl-1 mr-4 text-sm text-white"
                                >Select Your Profile Picture</label
                            >
                        </div>
                        <div class="col-span-1">
                            <input
                                id="profile_image"
                                type="file"
                                required
                                @change="onFileChange($event)"
                                name="profile_image"
                                class="w-full py-2 pl-5 pr-4 text-sm"
                            />
                        </div>
                    </div>

                    <div class="flex items-center justify-center">
                        <button
                            type="submit"
                            class="px-8 py-2 mt-4 font-semibold text-gray-800 bg-white rounded text-1xl hover:bg-gray-600 hover:text-white"
                        >
                            Sign up
                        </button>
                    </div>
                </form>
                <div
                    class="inline-flex items-center text-xs font-medium text-center text-gray-100"
                >
                    <span class="ml-24"
                        >You have an account?
                        <Link
                            href="/login"
                            class="ml-2 text-xs font-semibold text-blue-400"
                        >
                            Login here
                        </Link>
                    </span>
                </div>
            </div>
        </div>
        <!-- </div> -->
    </div>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue3";
import axios from "axios";
import { Inertia } from "@inertiajs/inertia";

export default {
    components: {
        Link,
    },

    props: {
        errors: {
            type: Array,
            default: [],
        },
        test: {
            type: String,
            default: "Sagheer",
        },
    },

    data() {
        return {
            formData: {
                regno: "",
                name: "",
                email: "",
                batch: "",
                program: "",
                password: "",
                profile_image: "",
            },
        };
    },

    computed: {
        getTest() {
            return this.test + " => " + this.errors[0];
        },
    },

    methods: {
        submitForm() {
            // this.$inertia
            //     .post("/register", {
            //         formData: this.formData,
            //         profile_image: this.formData.profile_image,
            //     });

            //catch errors after request using $inertia.reject()

            this.$inertia.post("/register", {
                formData: this.formData,
                profile_image: this.formData.profile_image,
            });

            // axios
            //     .post("/register", {
            //         formData: this.formData,
            //         profile_image: this.formData.profile_image,
            //     })
            //     .then((response) => {
            //         console.log(response);
            //     })
            //     .catch((error) => {
            //         console.log(error);
            //     });
            //run with axios

            // axios
            //     .post("/register", {
            //         formData: this.formData,
            //         profile_image: this.formData.profile_image,
            //     })
            //     .then((response) => {

            //     })
            //     .catch((error) => {
            //         //check error status
            //         if (error.response.status == 422) {
            //             alert("Duplicate Entry For Regno");
            //         }
            //     });
        },

        onFileChange(e) {
            const file = e.target.files[0];

            this.formData.profile_image = file;
        },
    },
};
</script>
