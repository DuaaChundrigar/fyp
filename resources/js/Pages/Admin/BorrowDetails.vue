<template>
    <div>
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
                class="w-full px-3 py-2 m-1 text-sm font-medium text-white bg-gray-700 rounded-md hover:bg-gray-500"
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
                <Link href="/admin/categories" class="Categories">Categories</Link>
            </button>
        </div>
        <div>
            <button
                type="button"
                class="w-full px-3 py-2 m-1 text-sm font-medium text-white bg-gray-800 rounded-md hover:bg-gray-500"
                id="login"
            >
                <Link href="/admin/borrowDetails" class="">Borrow Details</Link>
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

            <!-- Table  -->
    

    <div class="flex flex-col m-10">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block py-2 sm:px-6 lg:px-8">
                <div class="overflow-hidden">
                    <table class="border ">
                        <thead class="bg-white border-b">
                            <tr>
                                <th
                                    scope="col"
                                    class="px-6 py-4 text-sm font-medium text-left text-gray-900"
                                >
                                    S.No
                                </th>
                                <th
                                    scope="col"
                                    class="px-6 py-4 text-sm font-medium text-left text-gray-900"
                                >
                                    Book List
                                </th>
                                <th
                                    scope="col"
                                    class="px-6 py-4 text-sm font-medium text-left text-gray-900"
                                >
                                    Std Reg No.
                                </th>
                                <th
                                    scope="col"
                                    class="px-6 py-4 text-sm font-medium text-left text-gray-900"
                                >
                                    Std Name
                                </th>
                                <th
                                    scope="col"
                                    class="px-6 py-4 text-sm font-medium text-left text-gray-900"
                                >
                                    Check-in Date
                                </th>
                                <th
                                    scope="col"
                                    class="px-6 py-4 text-sm font-medium text-left text-gray-900"
                                >
                                    Check-out Date
                                </th>
                                <th
                                    scope="col"
                                    class="px-6 py-4 text-sm font-medium text-left text-gray-900"
                                >
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr 
                            v-for="booking in bookings"
                                :key="booking.id"
                                class="transition duration-300 ease-in-out bg-white border-b hover:bg-gray-100"
                            >
                                <td
                                    class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap"
                                >
                                {{ booking.id }}
                                </td>
                                <td
                                    class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap"
                                >
                                    {{booking.book_id}}
                                </td>
                            
                                <td
                                    class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap"
                                >
                                    {{booking.regno}}
                                </td>
                                <td
                                    class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap"
                                >
                                    {{booking.name}}
                                </td>
                                <td
                                    class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap"
                                >
                                    {{booking.checkin_datetime}}
                                </td>
                                <td
                                    class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap"
                                >
                                    {{booking.checkout_datetime}}
                                </td>
                                <td
                                    class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap"
                                >
                                    <button
                                    type="button"
                                    class="px-5 py-2 text-sm font-medium text-white bg-gray-600 rounded-md"
                                    >
                                        Pending
                                    </button>
                                    <button
                                        type="button"
                                        class="px-6 py-2 text-sm font-medium text-white bg-green-600 rounded-md"
                                    >
                                        Approved
                                    </button>
                                    <button
                                    type="button"
                                    class="px-5 py-2 text-sm font-medium text-white bg-red-600 rounded-md"
                                    >
                                        Rejected
                                    </button>
                                    <button
                                    type="button"
                                    class="px-5 py-2 text-sm font-medium text-white bg-yellow-600 rounded-md"
                                    >
                                        Check-in
                                    </button>
                                    <button
                                    type="button"
                                    class="px-5 py-2 text-sm font-medium text-white bg-blue-600 rounded-md"
                                    >
                                        Cehck-out
                                    </button>
                                    <button
                                    type="button"
                                    class="px-5 py-2 text-sm font-medium text-white bg-red-600 rounded-md"
                                    >
                                        Return
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
    </div>



</template>

<script>
import { Link } from "@inertiajs/inertia-vue3";
//import axios from "axios";
export default {
    components: {
        Link,
    },
    props: {
        user: {
            type: Object,
            default: {},
        },
        bookings: {
            type: Array,
            default: [],
        },
    },

    data() {
        return {
            bookings: this.bookings,
        };
    },

};
</script>