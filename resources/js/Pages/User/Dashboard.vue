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

                    <div
                        class="ml-4 font-serif text-4xl font-bold text-gray-700 underline"
                    >
                        <button
                            type="button"
                            class="px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded"
                            id="rfb"
                        >
                            <Link href="/" class=""> Request for Book </Link>
                        </button>
                        <button
                            type="button"
                            class="px-3 py-2 ml-2 text-sm font-medium text-white bg-gray-900 rounded"
                            id="lor"
                        >
                            <Link href="/books/requests" class="">
                                List of Request
                            </Link>
                        </button>
                    </div>
                </div>
                <div
                    class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0"
                >
                    <div>
                        <button
                            type="button"
                            class="px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-md"
                            id="login"
                        >
                            <Link href="/logout" class="">Logout</Link>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="flex justify-center mt-5">
        <div class="mb-3 xl:w-96">
            <div
                class="relative flex flex-wrap items-stretch w-full mb-4 input-group"
            >
                <input
                    type="search"
                    class="form-control relative flex-auto min-w-0 block px-3 py-1.5 text-base font-normal text-gray-700 bg-white border border-solid border-gray-300 rounded focus:bg-white focus:border-blue-600"
                    placeholder="Search for Book"
                    aria-label="Search"
                    v-model="searchTerm"
                    @keyup="search()"
                />
                <!-- <button
                    class="btn px-6 py-2.5 bg-blue-600 text-white rounded shadow-md hover:bg-blue-700 active:bg-blue-800"
                    type="button"
                    id=""
                >
                    <svg
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
    </div>

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
import Swal from "sweetalert2";
import axios from "axios";
export default {
    components: {
        Link,
        Swal,
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
