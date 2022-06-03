<template>
    <div>
        <Navbar />
        <!--Body-->
        <div class="grid grid-cols-6 gap-4 m-2">
            <!--Side bar-->

            <SideMenu />
            <!--Right Side-->
            <div class="col-span-5 ... m-2">
                <h1 class="mb-5 font-serif text-3xl font-bold text-center text-gray-800">Books List</h1>
                <div class="grid grid-cols-4">
                    <div class="col-span-1 m-2">
                        <Link
                            href="/admin/book"
                            class="px-6 py-4 font-medium text-center text-white bg-blue-700 rounded-md text-1xl"
                        >
                            Add New Book
                        </Link>
                    </div>
                    <div class="col-span-1"></div>
                    <div class="col-span-1 "></div>
                    <div class="col-span-1"></div>
                </div>

                <div
                    class="relative flex flex-wrap items-stretch w-6/12 m-10 ml-60 input-group"
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

                <!-- Table  -->

                <div class="flex flex-col m-10">
                                <table class="border">
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
                                                Book ISBN No.
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
                                                Subject
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
                                                Edit
                                            </th>
                                            <th
                                                scope="col"
                                                class="px-6 py-4 text-sm font-medium text-left text-gray-900"
                                            >
                                                Delete
                                            </th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr
                                            v-for="(book , index) in filteredBooks"
                                            :key="book.id"
                                            class="transition duration-300 ease-in-out bg-white border-b hover:bg-gray-100"
                                        >
                                            <td
                                                class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap"
                                            >
                                                {{ index + 1 }}
                                            </td>
                                            <td
                                                class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap"
                                            >
                                                {{ book.isbn }}
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
                                                {{ book.category }}
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
                                                <Link
                                                    :href="
                                                        `/admin/book/edit/` +
                                                        book.id
                                                    "
                                                    class="px-6 py-2 text-sm font-medium text-white bg-green-600 rounded-md"
                                                >
                                                    Edit
                                                </Link>
                                            </td>
                                            <td
                                                class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap"
                                            >
                                                <button
                                                    type="button"
                                                    @click="deleteBook(book.id)"
                                                    class="px-3 py-2 text-sm font-medium text-white bg-red-600 rounded-md"
                                                >
                                                    Delete
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
import Navbar from "../../Components/Admin/Navbar";
import SideMenu from "../../Components/Admin/SideMenu";

import axios from "axios";
export default {
    components: {
        Link,
        Navbar,
        SideMenu,
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

    methods: {
        deleteBook(book_id) {
            var vm = this;
            axios
            .post("/admin/books/delete/" + book_id)
            .then((response) => {
                vm.showNotification(
                        "Book Deleted Successfully",
                        "success"
                    );
                this.books = response.data;
            });
        },

        showNotification(message, type) {
            Swal.fire({
                icon: type,
                text: message,
                showConfirmButton: true,
                willClose: function () {
                    window.location.reload();
                },
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
    },
};
</script>
