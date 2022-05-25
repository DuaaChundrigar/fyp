<template>
    <div>
        <div class="bg-gray-100 shadow-lg">
            <div
                class="flex container mx-auto justify-between m-auto space-x-8"
            >
                <div class="flex">
                    <img
                        class="flex-shrink-0 w-auto h-20"
                        src="/storage/logo/logo.png"
                        alt="Logo"
                    />
                </div>

                <div class="flex justify-center items-center">
                    <Link
                        href="/"
                        type="button"
                        class="px-3 py-2 font-bold text-gray-700 rounded-md text-1xl hover:bg-gray-200"
                    >
                        Home
                    </Link>
                </div>
            </div>
        </div>

        <div class="flex flex-col items-center justify-center min-h-screen">
            <div
                class="flex flex-col w-4/12 max-w-md px-4 py-8 bg-gray-800 shadow-md sm:px-6 md:px-8 lg:px-10 rounded-3xl"
            >
                <div
                    class="self-center text-xl font-bold text-gray-100 sm:text-3xl"
                >
                    Login
                </div>

                <div class="mt-4">
                    <form @submit.prevent="login">
                        <div class="flex flex-col mb-2">
                            <span class="text-sm text-red-600">{{
                                errors[0]
                            }}</span>
                            <div class="relative">
                                <input
                                    id="email"
                                    type="email"
                                    v-model="formData.email"
                                    class="w-full py-2 pl-5 pr-4 text-sm placeholder-gray-500 border border-gray-400 rounded-2xl focus:outline-none focus:border-blue-400"
                                    placeholder="Enter your email"
                                />
                            </div>
                        </div>
                        <div class="flex flex-col mb-1">
                            <div class="relative">
                                <input
                                    id="password"
                                    type="password"
                                    v-model="formData.password"
                                    class="w-full py-2 pl-5 pr-4 text-sm placeholder-gray-500 border border-gray-400 rounded-2xl focus:outline-none focus:border-blue-400"
                                    placeholder="Enter your password"
                                />
                            </div>
                        </div>
                        <input type="checkbox" @change="checkChanged" /><label
                            class="ml-2 text-white"
                            >Remember Me</label
                        >

                        <div class="flex items-center justify-center">
                            <button
                                type="submit"
                                class="px-8 py-2 mt-2 font-semibold text-gray-800 bg-white rounded text-1xl hover:bg-gray-600 hover:text-white"
                            >
                                Login
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
                        >You don't have an account?
                        <Link
                            href="/register"
                            class="ml-2 text-xs font-semibold text-blue-900"
                        >
                            Register now
                        </Link>
                    </span>
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
    props: {
        errors: {
            type: Array,
            default: [],
        },
    },

    data() {
        return {
            formData: {
                email: "",
                password: "",
                rememberMe: false,
            },
        };
    },
    methods: {
        login() {
            this.$inertia.post("/login", { formData: this.formData });
        },
        checkChanged() {
            this.formData.rememberMe = !this.formData.rememberMe;
        },
    },
};
</script>
