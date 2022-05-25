<template>
    <div>
        <Navbar />
        <!--Body-->
        <div class="grid grid-cols-6 gap-4 m-2">
            <!--Side bar-->

        <SideMenu/>

            <!--Right Side-->
            <div class="col-span-5 ... m-2">
                <h1 class="mb-5 font-serif text-3xl font-bold text-center text-gray-800">Lending Books</h1>

                <!-- Table  -->
                <div class="flex flex-col m-10">
                    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="inline-block py-2 sm:px-6 lg:px-8">
                            <div class="overflow-hidden">
                                <table class="border">
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
                                                Book Name
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
                                                Status
                                            </th>
                                            <th
                                                scope="col"
                                                class="px-6 py-4 text-sm font-medium text-center text-gray-900"
                                            >
                                                Action
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr
                                            v-for="(booking, index) in bookings"
                                            :key="booking.id"
                                            class="transition duration-300 ease-in-out bg-white border-b hover:bg-gray-100"
                                        >
                                            <td
                                                class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap"
                                            >
                                                {{ index + 1 }}
                                            </td>
                                            <td
                                                class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap"
                                            >
                                                {{ booking.book.book_name }}
                                            </td>

                                            <td
                                                class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap"
                                            >
                                                {{ booking.student.regno }}
                                            </td>
                                            <td
                                                class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap"
                                            >
                                                {{ booking.student.name }}
                                            </td>
                                            <td
                                                class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap"
                                            >
                                                {{
                                                    booking.checkin_datetime ??
                                                    "-"
                                                }}
                                            </td>
                                            <td
                                                class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap"
                                            >
                                                {{
                                                    booking.checkout_datetime ??
                                                    "-"
                                                }}
                                            </td>
                                            <td
                                                class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap"
                                            >
                                                {{
                                                    booking.status.toUpperCase() ??
                                                    "Pending"
                                                }}
                                            </td>
                                            <td
                                                class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap"
                                            >
                                                <div
                                                    class="grid grid-cols-2 gap-2"
                                                >
                                                    <Link
                                                        type="button"
                                                        :href="
                                                            `/admin/borrowDetails/booking/status/` +
                                                            booking.id +
                                                            `/approved`
                                                        "
                                                        class="px-2 py-2 text-sm font-medium text-white bg-green-600 rounded-md"
                                                    >
                                                        Approved
                                                    </Link>
                                                    <Link
                                                        type="button"
                                                        :href="
                                                            `/admin/borrowDetails/booking/status/` +
                                                            booking.id +
                                                            `/rejected`
                                                        "
                                                        class="px-2 py-2 text-sm font-medium text-white bg-red-600 rounded-md"
                                                    >
                                                        Rejected
                                                    </Link>
                                                    <Link
                                                        type="button"
                                                        :href="
                                                            `/admin/borrowDetails/booking/status/` +
                                                            booking.id +
                                                            `/checkin`
                                                        "
                                                        class="px-2 py-2 text-sm font-medium text-white bg-green-600 rounded-md"
                                                    >
                                                        Check-in
                                                    </Link>
                                                    <Link
                                                        type="button"
                                                        :href="
                                                            '/admin/borrowDetails/booking/status/' +
                                                            booking.id +
                                                            '/checkout'
                                                        "
                                                        class="px-2 py-2 text-sm font-medium text-white bg-blue-600 rounded-md"
                                                    >
                                                        Cehck-out
                                                    </Link>
                                                </div>
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
import Navbar from "../../Components/Admin/Navbar.vue";
import SideMenu from "../../Components/Admin/SideMenu.vue";

//import axios from "axios";
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
