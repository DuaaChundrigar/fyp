<template>
    <nav class="bg-gray-400">
        <div class="px-2 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="relative flex items-center justify-between h-16">
                <div
                    class="flex items-center justify-center flex-1 sm:items-stretch sm:justify-start"
                >
                    <div class="flex items-center flex-shrink-0">
                        <!-- <img
                            class="hidden w-auto h-8 lg:block"
                            src="1.png"
                            alt="Logo"
                        /> -->
                    </div>
                </div>
                <div
                    class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0"
                >
                    <div>
                        <button
                            type="button"
                            class="px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-md hover:bg-gray-500"
                            id="login"
                        >
                            <Link href="/logout" class="">Logout</Link>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!--Body-->
    <div class="grid grid-cols-6 gap-4 m-2">
        <!--Side bar-->

        <div class="...">
            <div>
                <button
                    type="button"
                    class="w-full px-3 py-2 m-1 text-sm font-medium text-white bg-gray-700 rounded-md hover:bg-gray-500"
                    id="login"
                >
                    <Link href="/" class="">Dashboard</Link>
                </button>
            </div>
            <div>
                <button
                    type="button"
                    class="w-full px-3 py-2 m-1 text-sm font-medium text-white bg-gray-700 rounded-md hover:bg-gray-500"
                    id="login"
                >
                    <Link href="/dasboard/books" class="">Books</Link>
                </button>
            </div>
            <div>
                <button
                    type="button"
                    class="w-full px-3 py-2 m-1 text-sm font-medium text-white bg-gray-800 rounded-md hover:bg-gray-500"
                    id="login"
                >
                    <Link href="/dashboard/categories" class="Categories"
                        >Categories</Link
                    >
                </button>
            </div>
            <div>
                <button
                    type="button"
                    class="w-full px-3 py-2 m-1 text-sm font-medium text-white bg-gray-700 rounded-md hover:bg-gray-500"
                    id="login"
                >
                    <Link href="" class="">Borrow Details</Link>
                </button>
            </div>
            <div>
                <button
                    type="button"
                    class="w-full px-3 py-2 m-1 text-sm font-medium text-white bg-gray-700 rounded-md hover:bg-gray-500"
                    id="login"
                >
                    <Link href="#" class="">Students</Link>
                </button>
            </div>
            <div>
                <button
                    type="button"
                    class="w-full px-3 py-2 m-1 text-sm font-medium text-white bg-gray-700 rounded-md hover:bg-gray-500"
                    id="login"
                >
                    <Link href="#" class="">Report</Link>
                </button>
            </div>
            <div>
                <button
                    type="button"
                    class="w-full px-3 py-2 m-1 text-sm font-medium text-white bg-gray-700 rounded-md hover:bg-gray-500"
                    id="login"
                >
                    <Link href="#" class="">Settings</Link>
                </button>
            </div>
        </div>

        <!--Right Side-->
        <div class="col-span-5 ... m-2">
            <div
                class="flex flex-col w-5/12 px-4 py-8 bg-gray-800 shadow-md ml-60 rounded-2xl"
            >
                <div
                    class="self-center text-xl font-bold text-gray-100 sm:text-3xl"
                >
                    Update Category
                </div>

                <div class="">
                    <form @submit.prevent="submitForm">
                        <div class="flex flex-col mb-2">
                            <div class="relative">
                                <label for="category" class="text-white">
                                    Category Name
                                </label>
                                <input
                                    type="text"
                                    v-model="formData.subject"
                                    name="subject"
                                    class="w-full py-2 pl-5 pr-4 text-sm placeholder-gray-500 border border-gray-400 rounded-2xl focus:outline-none focus:border-blue-400"
                                    placeholder="Enter Category"
                                />
                            </div>
                        </div>

                        <div class="flex items-center justify-center">
                            <button
                                type="submit"
                                class="px-8 py-2 mt-2 font-semibold text-gray-800 bg-white rounded text-1xl hover:bg-gray-600 hover:text-white"
                            >
                                Update
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue3";
import axios from "axios";
export default {
    components: {
        Link,
    },

    props: {
        categories: {
            type: Object,
            default: {},
        },
    },

    data() {
        return {
            formData: {
                subject: this.categories.subject,
            },
        };
    },
    methods: {
        submitForm() {
            // this.$inertia.post("/admin/book/update/" + this.book.id, {
            //     formData: this.formData,
            // });

            axios
                .post("/admin/categories/update/" + this.categories.id, {
                    formData: this.formData,
                })
                .then((response) => {
                    window.location.href = "/admin/categories";
                });
        },
    },
};
</script>
