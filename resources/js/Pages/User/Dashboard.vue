<template>

<Navbar />

    <div class="flex justify-center ">
        <div class="grid grid-cols-4">
                    <div class="col-span-1 m-2">
                        
                    </div>
                    <div class="col-span-1"></div>
                    <div class="col-span-1 "></div>
                    <div class="col-span-1"></div>
                </div>

                <div
                    class="relative flex flex-wrap items-stretch w-6/12 m-10 ml-auto mr-auto input-group"
                >
                    <input
                        type="search"
                        class="relative flex-auto block min-w-0 px-3 py-3 text-base font-normal text-gray-700 bg-white border border-gray-300 border-solid rounded form-control focus:bg-white focus:border-blue-600"
                        placeholder="Search for Book"
                        aria-label="Search"
                        v-model="searchTerm"
                        @keyup="search()"
                    />
                    <!-- <button
                        class="btn px-6 py-2.5 bg-blue-600 text-white rounded shadow-md hover:bg-blue-700 active:bg-blue-800"
                        type="button"
                    > -->
                    <!-- <svg
                            aria-hidden="true"
                            focusable="false"
                            data-prefix="fas"
                            data-icon="search"
                            class="w-4"
                            role="img"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 512 512"
                        >
                            <path
                                fill="currentColor"
                                d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"
                            ></path>
                        </svg>
                    </button> -->
                </div>
                
    </div>
                <h1 class="m-10 mb-5 font-serif text-3xl font-bold text-center text-gray-800 ">Books List</h1>

    <!-- Table  -->

    <div class="flex flex-col m-10">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                <div class="overflow-hidden">
                    <table class="min-w-full border">
                        <thead class="bg-white border-b">
                            <tr>
                                <th
                                    scope="col"
                                    class="px-6 py-4 text-sm font-medium text-left text-gray-900"
                                >
                                    Book.No
                                </th>
                                <th
                                    scope="col"
                                    class="px-6 py-4 text-sm font-medium text-left text-gray-900"
                                >
                                    Book Name
                                </th>
                                <th
                                    scope="col"
                                    class="px-6 py-4 text-sm font-medium text-left text-gray-900"
                                >
                                    Category
                                </th>
                                <th
                                    scope="col"
                                    class="px-6 py-4 text-sm font-medium text-left text-gray-900"
                                >
                                    Author
                                </th>
                                <th
                                    scope="col"
                                    class="px-6 py-4 text-sm font-medium text-left text-gray-900"
                                >
                                    Publisher
                                </th>
                                <th
                                    scope="col"
                                    class="px-6 py-4 text-sm font-medium text-left text-gray-900"
                                >
                                    Published year
                                </th>
                                <th
                                    scope="col"
                                    class="px-6 py-4 text-sm font-medium text-left text-gray-900"
                                >
                                    No. of Copies
                                </th>
                                <th
                                    scope="col"
                                    class="px-6 py-4 text-sm font-medium text-left text-gray-900"
                                >
                                    Request for Borrow
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr
                                v-for="book in filteredBooks"
                                :key="book.id"
                                class="transition duration-300 ease-in-out bg-white border-b hover:bg-gray-100"
                            >
                                <td
                                    class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap"
                                >
                                    {{ book.book_no }}
                                </td>
                                <td
                                    class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap"
                                >
                                    {{ book.book_name }}
                                </td>
                                <td
                                    class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap"
                                >
                                    {{ book.subject }}
                                </td>
                                <td
                                    class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap"
                                >
                                    {{ book.author }}
                                </td>
                                <td
                                    class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap"
                                >
                                    {{ book.publisher }}
                                </td>
                                <td
                                    class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap"
                                >
                                    {{ book.edition }}
                                </td>
                                <td
                                    class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap"
                                >
                                    {{ book.copies }}
                                </td>
                                <td
                                    class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap"
                                >
                                    <button
                                        type="button"
                                        class="px-3 py-2 text-sm font-medium text-white bg-blue-600 rounded-md"
                                        @click="request(book.id)"
                                    >
                                        Request Submit
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue3";
import Navbar from "../../Components/User/Navbar";

import Swal from "sweetalert2";
import axios from "axios";
export default {
    components: {
        Link,
        Swal,
        Navbar,
    },

    props: {
        user: {
            type: Object,
            default: {},
        },
        books: {
            type: Array,
            default: [],
        },
    },

    data() {
        return {
            books: this.books,
            filteredBooks: this.books,
            searchTerm: "",
        };
    },

    mounted() {},

    methods: {
        request(book_id) {
            var vm = this;
            axios
                .post("/book/request", {
                    book_id: book_id,
                })
                .then((response) => {
                    vm.showNotification("Request Submitted", "success");
                })
                .catch((error) => {
                    vm.showNotification("Already Submitted", "error");
                });
        },

        search() {
            if (this.searchTerm == "") {
                this.filteredBooks = this.books;
            } else {
                this.filteredBooks = this.books.filter((book) => {
                    return (
                        book.book_name
                            .toLowerCase()
                            .includes(this.searchTerm.toLowerCase()) ||
                        book.subject
                            .toLowerCase()
                            .includes(this.searchTerm.toLowerCase()) ||
                        book.author
                            .toLowerCase()
                            .includes(this.searchTerm.toLowerCase()) ||
                        book.publisher
                            .toLowerCase()
                            .includes(this.searchTerm.toLowerCase()) ||
                        book.edition
                            .toLowerCase()
                            .includes(this.searchTerm.toLowerCase())
                    );
                });
            }
        },

        checkIfWeAreOnSamePage(url) {
            console.log(url);
            return window.location.pathname === url;
        },

        showNotification(message, type) {
            Swal.fire({
                icon: type,
                text: message,
                showConfirmButton: false,
            });
        },
    },
};
</script>
