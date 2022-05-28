<template>
    <div>
        <Navbar />
        <!--Body-->
        <div class="grid grid-cols-6 gap-4 m-2">
            <!--Side bar-->

        <SideMenu/>

            <!--Right Side-->
            <div class="col-span-5 ... m-2">
                <!-- Table  -->
            <h1 class="mb-5 font-serif text-3xl font-bold text-center text-gray-800">Books Report</h1>

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
