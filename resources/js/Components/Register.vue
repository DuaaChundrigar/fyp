<template>
    <div
        class="flex flex-col items-center justify-center min-h-screen bg-gray-100"
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
                    <div class="flex flex-col mb-2">
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
                    </div>
                    <div class="flex flex-col mb-2">
                        <div class="relative">
                            <input
                                id="program"
                                type="text"
                                v-model="formData.program"
                                name="program"
                                class="w-full py-2 pl-5 pr-4 text-sm placeholder-gray-500 border border-gray-400 rounded-2xl focus:outline-none focus:border-blue-400"
                                placeholder="Enter your program"
                            />
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
            },
        };
    },

    methods: {
        submitForm() {
            this.$inertia.post("/register", { formData: this.formData });
        },
    },
};
</script>
