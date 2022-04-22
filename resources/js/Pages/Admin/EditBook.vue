<template>
    <nav class="bg-gray-400">
        <div class="px-2 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="relative flex items-center justify-between h-16">
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

    {{ book }}

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
                    class="w-full px-3 py-2 m-1 text-sm font-medium text-white bg-gray-800 rounded-md hover:bg-gray-500"
                    id="login"
                >
                    <Link href="/dasboard/books" class="">Books</Link>
                </button>
            </div>
            <div>
                <button
                    type="button"
                    class="w-full px-3 py-2 m-1 text-sm font-medium text-white bg-gray-700 rounded-md hover:bg-gray-500"
                    id="login"
                >
                    <Link href="#" class="Categories">Categories</Link>
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

        <!--Book Insertion Form-->

        <div
            class="flex flex-col w-full px-4 py-8 bg-gray-800 shadow-md ml-60 rounded-2xl"
        >
            <div
                class="self-center text-xl font-bold text-gray-100 sm:text-3xl"
            >
                Update Book
            </div>

            <div class="mt-5">
                <form @submit.prevent="submitForm">
                    <div class="flex flex-col mb-2">
                        <div class="relative">
                            <input
                                id="book_no"
                                type="text"
                                v-model="formData.book_no"
                                name="book_no"
                                class="w-full py-2 pl-5 pr-4 text-sm placeholder-gray-500 border border-gray-400 rounded-2xl focus:outline-none focus:border-blue-400"
                                placeholder="Enter book number"
                            />
                        </div>
                    </div>
                    <div class="flex flex-col mb-2">
                        <div class="relative">
                            <input
                                id="isbn"
                                type="text"
                                v-model="formData.isbn"
                                name="isbn"
                                class="w-full py-2 pl-5 pr-4 text-sm placeholder-gray-500 border border-gray-400 rounded-2xl focus:outline-none focus:border-blue-400"
                                placeholder="Enter book ISBN Number"
                            />
                        </div>
                    </div>
                    <div class="flex flex-col mb-2">
                        <div class="relative">
                            <input
                                id="subject"
                                type="subject"
                                v-model="formData.subject"
                                name="subject"
                                class="w-full py-2 pl-5 pr-4 text-sm placeholder-gray-500 border border-gray-400 rounded-2xl focus:outline-none focus:border-blue-400"
                                placeholder="Enter Subject Name"
                            />
                        </div>
                    </div>
                    <div class="flex flex-col mb-2">
                        <div class="relative">
                            <input
                                id="book_name"
                                type="text"
                                v-model="formData.book_name"
                                name="book_name"
                                class="w-full py-2 pl-5 pr-4 text-sm placeholder-gray-500 border border-gray-400 rounded-2xl focus:outline-none focus:border-blue-400"
                                placeholder="Enter Book Name"
                            />
                        </div>
                    </div>
                    <div class="flex flex-col mb-2">
                        <div class="relative">
                            <input
                                id="author"
                                type="text"
                                v-model="formData.author"
                                name="author"
                                class="w-full py-2 pl-5 pr-4 text-sm placeholder-gray-500 border border-gray-400 rounded-2xl focus:outline-none focus:border-blue-400"
                                placeholder="Enter Author Name"
                            />
                        </div>
                    </div>
                    <div class="flex flex-col mb-2">
                        <div class="relative">
                            <input
                                id="publisher"
                                type="publisher"
                                v-model="formData.publisher"
                                name="publisher"
                                class="w-full py-2 pl-5 pr-4 text-sm placeholder-gray-500 border border-gray-400 rounded-2xl focus:outline-none focus:border-blue-400"
                                placeholder="Enter Publisher Name"
                            />
                        </div>
                    </div>
                    <div class="flex flex-col mb-2">
                        <div class="relative">
                            <input
                                id="edition"
                                type="edition"
                                v-model="formData.edition"
                                name="edition"
                                class="w-full py-2 pl-5 pr-4 text-sm placeholder-gray-500 border border-gray-400 rounded-2xl focus:outline-none focus:border-blue-400"
                                placeholder="Enter Edition"
                            />
                        </div>
                    </div>
                    <div class="flex flex-col mb-2">
                        <div class="relative">
                            <input
                                id="copies"
                                type="copies"
                                v-model="formData.copies"
                                name="copies"
                                class="w-full py-2 pl-5 pr-4 text-sm placeholder-gray-500 border border-gray-400 rounded-2xl focus:outline-none focus:border-blue-400"
                                placeholder="Enter Copies"
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
</template>

<script>
import { Link } from "@inertiajs/inertia-vue3";
import axios from "axios";
export default {
    components: {
        Link,
    },
    props: {
        book: {
            type: Object,
            default: {},
        },
    },

    data() {
        return {
            formData: {
                book_no: this.book.book_no,
                isbn: this.book.isbn,
                subject: this.book.subject,
                book_name: this.book.book_name,
                author: this.book.author,
                publisher: this.book.publisher,
                edition: this.book.edition,
                copies: this.book.copies,
            },
        };
    },

    methods: {
        submitForm() {
            // this.$inertia.post("/admin/book/update/" + this.book.id, {
            //     formData: this.formData,
            // });

            axios
                .post("/admin/book/update/" + this.book.id, {
                    formData: this.formData,
                })
                .then((response) => {
                    console.log(response);
                });
        },
    },
};
</script>
