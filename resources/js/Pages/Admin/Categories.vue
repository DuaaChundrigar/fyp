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
            <div class="grid grid-cols-4">
                <div class="col-span-1"></div>
                <div class="col-span-1"></div>
                <div class="col-span-1"></div>
                <div class="col-span-1">
                    <Link
                        href="/dashboard/insertCategorys"
                        class="px-6 py-4 font-medium text-center text-white bg-blue-700 rounded-md text-1xl"
                    >
                        Add New Category
                    </Link>
                </div>
            </div>

            <!-- Table  -->

            <div class="flex flex-col m-10">
                <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block py-2 sm:px-6 lg:px-8">
                        <div class="overflow-hidden">
                            <table class="ml-32 border">
                                <thead class="bg-white border-b">
                                    <tr>
                                        <th
                                            scope="col"
                                            class="px-6 py-4 text-sm font-medium text-left text-gray-900"
                                        >
                                            S.no
                                        </th>

                                        <th
                                            scope="col"
                                            class="px-6 py-4 text-sm font-medium text-left text-gray-900"
                                        >
                                            Category Name
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
                                        v-for="category in categories"
                                        :key="category.id"
                                        class="transition duration-300 ease-in-out bg-white border-b hover:bg-gray-100"
                                    >
                                        <td
                                            class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap"
                                        >
                                            {{ category.id }}
                                        </td>

                                        <td
                                            class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap"
                                        >
                                            {{ category.subject }}
                                        </td>

                                        <td
                                            class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap"
                                        >
                                            <Link
                                                :href="
                                                    `/admin/category/edit/` +
                                                    category.id
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
                                                @click="
                                                    deleteCategory(category.id)
                                                "
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
        </div>
    </div>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue3";
// import axios from "axios";
export default {
    components: {
        Link,
    },
    props: {
        categories: {
            type: Array,
            default: [],
        },
    },

    data() {
        return {
            categories: this.categories,
        };
    },

    methods: {
        deleteCategory(category_id) {
            axios
                .post("/admin/categories/delete/" + category_id)
                .then((response) => {
                    this.categories = response.data;
                });
        },
    },
};
</script>
