<template>
<nav class="bg-gray-400">
        <div class="px-2 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="relative flex items-center justify-between h-16">
                <div
                    class="flex items-center justify-center flex-1 sm:items-stretch sm:justify-start"
                >
                    <div class="flex items-center flex-shrink-0">
                        <img
                                class="w-auto h-24 "
                                src="/storage/logo/logo.png"
                                alt="Logo"
                            />
                    </div>
                </div>
                <div
                    class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0"
                >
                    <div>
                        <button
                            type="button"
                            class="px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-md hover:bg-gray-500"
                        >
                            <Link href="/" class="">Home</Link>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </nav>



    <div
        class="flex flex-col items-center justify-center min-h-screen mt-10 bg-gray-100"
    >
        <div
            class="flex flex-col w-4/12 max-w-md px-4 py-8 bg-gray-800 shadow-md sm:px-6 md:px-8 lg:px-10 rounded-3xl"
        >
            <div
                class="self-center text-xl font-bold text-gray-100 sm:text-3xl"
            >
                Register Now
            </div>

            <div class="mt-5">
                <form @submit.prevent="submitForm">
                    <div class="flex flex-col mb-2">
                        <div class="relative">
                            <input
                                id="regno"
                                type="text"
                                v-model="formData.regno"
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
                                v-model="formData.name"
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
                    <div class="flex flex-col mb-2">
                        <div class="relative">
                            <label class="m-2 text-sm text-gray-100">Batch</label>

                            <select class="w-full rounded-full" v-model="formData.batch">
                                <option value="">Select an option</option>
                                <option value="09">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="BSIT 18">18</option>
                                <option value="BSIT 19">19</option>
                                <option value="BSCS Meut 21 ">21st</option>
                                <option value="GCU 1st">1st</option>
                                <option value="BBA 23">23</option>
                                <option value="BBA 24">24</option>
                                <option value="BBA 25">25</option>
                                <option value="BBA 26">26</option>
                                <option value="BBA 27">27</option>
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
                        <div class="flex flex-col mb-2">
                        <div class="relative">
                        <label class="m-2 text-sm text-gray-100">Program</label>

                            <select class="w-full rounded-full" v-model="formData.program">
                                <option value="">Select an option</option>
                                <option value="BBA 21">College</option>
                                <option value="BSIT 18">BSIT</option>
                                <option value="BSIT 19">BBA</option>
                                <option value="BSCS">BSCS MEUT</option>
                                <option value="BBA 24">BSCS GCU</option>
                            </select>
                        </div>
                    </div>
                    <div class="flex flex-col mb-2">
                        <div class="relative">
                            <input
                                id="password"
                                type="password"
                                v-model="formData.password"
                                name="password"
                                class="w-full py-2 pl-5 pr-4 text-sm placeholder-gray-500 border border-gray-400 rounded-2xl focus:outline-none focus:border-blue-400"
                                placeholder="Enter your password"
                            />
                        </div>
                    </div>
                    <div class="flex flex-col mb-2">
                        <div class="relative">
                            <input
                                id="confirm_password"
                                type="password"
                                name="confirm_password"
                                class="w-full py-2 pl-5 pr-4 text-sm placeholder-gray-500 border border-gray-400 rounded-2xl focus:outline-none focus:border-blue-400"
                                placeholder="Re-enter your password"
                            />
                        </div>
                    </div>

                    <div class="flex flex-col mb-2">
                        <div class="relative">
                            <label for="" class="pl-1 text-sm text-white"
                                >Select Your Profile Picture</label
                            >
                            <input
                                id="profile_image"
                                type="file"
                                @change="onFileChange($event)"
                                name="profile_image"
                                class="py-2 pl-5 pr-4 text-sm focus:outline-none focus:border-blue-400"
                            />
                        </div>
                    </div>

                    <div class="flex items-center justify-center">
                        <button
                            type="submit"
                            class="px-8 py-2 mt-2 font-semibold text-gray-800 bg-white rounded text-1xl hover:bg-gray-600 hover:text-white"
                        >
                            Sign up
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="flex items-center justify-center mt-6">
            <div
                class="inline-flex items-center text-xs font-medium text-center text-gray-700"
            >
                <span class="ml-2"
                    >You have an account?
                    <Link
                        href="/login"
                        class="ml-2 text-xs font-semibold text-blue-900"
                    >
                        Login here
                    </Link>
                </span>
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
                batch: "",
                program: "",
                password: "",
                profile_image: "",
            },
        };
    },

    methods: {
        submitForm() {
            this.$inertia.post("/register", {
                formData: this.formData,
                profile_image: this.formData.profile_image,
            });
        },

        onFileChange(e) {
            const file = e.target.files[0];

            this.formData.profile_image = file;
        },
    },
};
</script>
