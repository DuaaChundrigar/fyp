<template>

<nav class="bg-gray-500">
        
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

            <div class="...  ">
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
                            <Link href="/dashboard/categories" class="Categories">Categories</Link>
                    </button>
                </div>
                <div>
                    <button
                        type="button"
                        class="w-full px-3 py-2 m-1 text-sm font-medium text-white bg-gray-700 rounded-md hover:bg-gray-500"
                        id="login"
                    >
                            <Link href="#" class="">Borrow Details</Link>
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
    <div class="col-span-5 ... m-2" >


    <!--Book Insertion Form-->

            <div
                class="flex flex-col w-5/12 px-4 py-8 bg-gray-800 shadow-md ml-60 rounded-2xl"
            >
                    <div
                        class="self-center text-xl font-bold text-gray-100 sm:text-3xl"
                    >
                    Insert Book Now
                    </div>

                <div class="">
                        <form @submit.prevent="submitForm">
                                <div class="flex flex-col mb-2">
                                    <div class="relative">
                                        <label for="book_no" class="text-white"> Book No. </label>
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
                                        <label for="isbn" class="text-white"> ISBN No. </label>
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
                                        <label for="subject" class="text-white"> Subject </label>
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
                                        <label for="Book_name" class="text-white"> Book Name </label>
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
                                        <label for="author" class="text-white"> Author Name </label>
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
                                        <label for="publisher" class="text-white"> Publisher Name </label>
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
                                        <label for="edition" class="text-white"> Edition </label>
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
                                        <label for="Copies" class="text-white"> Copies </label>
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
                                        Insert
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

export default {
    components: {
        Link,
    },


    data() {
        return {
            formData: {
                book_no: "",
                isbn: "",
                subject: "",
                book_name: "",
                author: "",
                publisher: "",
                edition: "",
                copies: "",
            },
        };
    },

    
methods: {
    submitForm() {
            this.$inertia.post("/dasboard/books", { formData: this.formData });
        },
    },

};
</script>