<template>
    <div>
        <Navbar2 />
        <!--Body-->
        <!-- <div class="grid grid-cols-6 gap-4 m-2"> -->
        <!--Side bar-->

        <!-- <SideMenu/> -->

        <!--Right Side-->
        <!-- <div class="col-span-5 ... m-2"> -->
        <h1
            class="m-10 mb-5 font-serif text-3xl font-bold text-center text-gray-800"
        >
            Lending Books
        </h1>

        <!-- Table  -->
        <div class="flex flex-col m-10">
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
                            {{ booking.checkin_datetime ?? "-" }}
                        </td>
                        <td
                            class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap"
                        >
                            {{ booking.checkout_datetime ?? "-" }}
                        </td>
                        <td
                            class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap"
                        >
                            {{ booking.status.toUpperCase() ?? "Pending" }}
                        </td>
                        <td class="px-3 py-4 text-white">
                            <div class="grid grid-cols-2 gap-2">
                                <Link
                                    type="button"
                                    :href="
                                        `/admin/borrowDetails/booking/status/` +
                                        booking.id +
                                        `/approved`
                                    "
                                    v-if="
                                        booking.status === 'pending' &&
                                        booking.checkout_datetime === null &&
                                        booking.checkin_datetime === null
                                    "
                                    class="px-2 py-2 text-sm bg-green-600 text-center rounded-md"
                                >
                                    Approved
                                </Link>
                                <Link
                                    type="button"
                                    v-else
                                    class="px-2 py-2 text-sm cursor-not-allowed bg-gray-400 text-center rounded-md"
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
                                    v-if="
                                        booking.status === 'pending' &&
                                        booking.checkout_datetime === null &&
                                        booking.checkin_datetime === null
                                    "
                                    class="px-2 py-2 text-sm bg-red-600 text-center rounded-md"
                                >
                                    Rejected
                                </Link>
                                <Link
                                    type="button"
                                    v-else
                                    class="px-2 py-2 text-sm bg-gray-400 text-center rounded-md"
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
                                    v-if="
                                        booking.status.toUpperCase() ===
                                        'APPROVED'
                                    "
                                    class="px-2 py-2 text-sm bg-green-600 text-center rounded-md"
                                >
                                    Check-in
                                </Link>
                                <Link
                                    type="button"
                                    v-else
                                    class="px-2 py-2 text-sm bg-gray-400 text-center rounded-md"
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
                                    v-if="
                                        booking.status.toUpperCase() ===
                                        'CHECKIN'
                                    "
                                    class="px-2 py-2 text-sm bg-blue-600 text-center rounded-md"
                                >
                                    Cehck-out
                                </Link>
                                <Link
                                    type="button"
                                    v-else
                                    class="px-2 py-2 text-sm bg-gray-400 text-center rounded-md"
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
    <!-- </div>
    </div> -->
</template>

<script>
import { Link } from "@inertiajs/inertia-vue3";
import Navbar2 from "../../Components/Admin/Navbar2.vue";
// import SideMenu from "../../Components/Admin/SideMenu.vue";

//import axios from "axios";
export default {
    components: {
        Link,
        Navbar2,
        // SideMenu,
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
