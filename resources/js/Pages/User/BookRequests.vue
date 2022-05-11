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
                                    Request Date
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
                                v-for="booking in bookings"
                                :key="booking.id"
                                class="transition duration-300 ease-in-out bg-white border-b hover:bg-gray-100"
                            >
                                <td
                                    class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap"
                                >
                                    {{ booking.book["book_no"] }}
                                </td>
                                <td
                                    class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap"
                                >
                                    {{ booking.book["book_name"] }}
                                </td>
                                <td
                                    class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap"
                                >
                                    {{ booking.book["subject"] }}
                                </td>
                                <td
                                    class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap"
                                >
                                    {{ booking.book["author"] }}
                                </td>
                                <td
                                    class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap"
                                >
                                    {{ booking.book["publisher"] }}
                                </td>
                                <td
                                    class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap"
                                >
                                    {{ getDate(booking.created_at) }}
                                </td>
                                <td
                                    class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap"
                                >
                                    <button
                                        type="button"
                                        class="px-3 py-2 text-sm font-medium text-white rounded-md"
                                        id="login"
                                        :class="{
                                            'bg-green-500':
                                                booking.status == 'approved',
                                            'bg-red-500':
                                                booking.status == 'rejected',
                                            'bg-gray-500':
                                                booking.status == 'pending',
                                            'bg-yellow-500':
                                                booking.status == 'checkin',
                                            'bg-blue-500':
                                                booking.status == 'checkout',
                                        }"
                                    >
                                        {{ capitalize(booking.status) }}
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

export default {
    components: {
        Link,
    },

    props: {
        bookings: {
            type: Array,
            default: [],
        },
    },

    methods: {
        capitalize(text) {
            return text.charAt(0).toUpperCase() + text.slice(1);
        },

        getDate(date) {
            var datee = date.split("T")[0];
            var time = date.split("T")[1].split(".")[0];
            var hour = parseInt(time.split(":")[0]) + 5;
            var minutes = parseInt(time.split(":")[1]);
            var seconds = parseInt(time.split(":")[2]);

            var ampm = hour >= 12 ? "PM" : "AM";
            hour = hour % 12;
            hour = hour ? hour : 12;
            minutes = minutes < 10 ? "0" + minutes : minutes;
            hour = hour < 10 ? "0" + hour : hour;
            seconds = seconds < 10 ? "0" + seconds : seconds;
            var strTime = hour + ":" + minutes + ":" + seconds + " " + ampm;

            return datee + " - " + strTime;
        },
    },
};
</script>
