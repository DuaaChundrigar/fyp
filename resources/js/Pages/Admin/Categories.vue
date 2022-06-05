<template>
<div>
        <Navbar2/>

    <!--Body-->
    <!-- <div class="grid grid-cols-6 gap-4 m-2"> -->
        <!--Side bar-->

        <!-- <SideMenu/> -->

        <!--Right Side-->
        <!-- <div class="col-span-5 ... m-2"> -->
            <h1 class="m-10 mb-5 font-serif text-3xl font-bold text-center text-gray-800">Categories List</h1>
            <div class="grid grid-cols-4">
                <div class="col-span-1 m-2">
                    <Link
                        href="/admin/categoriess"
                        class="px-6 py-4 font-medium text-center text-white bg-blue-700 rounded-md text-1xl"
                    >
                        Add New Category
                    </Link>
                </div>
                <div class="col-span-1"></div>
                <div class="col-span-1 "></div>
                <div class="col-span-1"></div>
            </div>

            <!-- Table  -->

            <div class="flex flex-col m-10 mt-10">
                            <table class="text-center border ">
                                <thead class="bg-white border-b">
                                    <tr>
                                        <th
                                            scope="col"
                                            class="px-6 py-4 text-sm font-medium text-gray-900"
                                        >
                                            S.no
                                        </th>

                                        <th
                                            scope="col"
                                            class="px-6 py-4 text-sm font-medium text-gray-900 "
                                        >
                                            Category Name
                                        </th>

                                        <th
                                            scope="col"
                                            class="px-6 py-4 text-sm font-medium text-gray-900"
                                        >
                                            Edit
                                        </th>
                                        <th
                                            scope="col"
                                            class="px-6 py-4 text-sm font-medium text-gray-900"
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
                                            {{ category.category }}
                                        </td>

                                        <td
                                            class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap"
                                        >
                                            <Link
                                                :href="
                                                    `/admin/categories/edit/` +
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
    <!-- </div>
</div> -->
</template>

<script>
import { Link } from "@inertiajs/inertia-vue3";
import Navbar2 from "../../Components/Admin/Navbar2";
// import SideMenu from "../../Components/Admin/SideMenu.vue";
import Swal from 'sweetalert2';


import axios from "axios";
export default {
    components: {
        Link,
        Navbar2,
        // SideMenu,
        Swal,
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
            var vm = this;
            axios
                .post("/admin/categories/delete/" + category_id)
                .then((response) => {
                        vm.showNotification("Category deleted Successfully", "success");
                    this.categories = response.data;
                });
        },
            showNotification(message, type) {
            Swal.fire({
                icon: type,
                text: message,
                showConfirmButton: true,
            });
        },
    },
};
</script>
