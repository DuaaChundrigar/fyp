<template>
<div>

<Navbar/>

    <!--Body-->
    <div class="grid grid-cols-6 gap-4 m-2">
        <!--Side bar-->

        <SideMenu />

        <!--Right Side-->
        <div class="col-span-5 ... m-2">
            <div
                class="grid h-24 grid-cols-3 gap-4 text-2xl font-bold text-center text-white"
            >
                <div class="col-span-1 ... rounded-md p-6 bg-red-600">
                    Check-in Books
                </div>

                <div class="col-span-1 ... rounded-md p-6 bg-blue-600">
                    Check-out Books
                </div>

                <div class="col-span-1 ... rounded-md p-6 bg-green-700">
                    Booking Books
                </div>
            </div>

            <div
                class="relative flex flex-wrap items-stretch w-6/12 m-10 ml-60 input-group"
            >
                <input
                    type="search"
                    class="form-control relative flex-auto min-w-0 block px-3 py-1.5 text-base font-normal text-gray-700 bg-white border border-solid border-gray-300 rounded focus:bg-white focus:border-blue-600"
                    placeholder="Search for Book"
                    aria-label="Search"
                />
                <button
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
                </button>
            </div>
        </div>
    </div>

</div>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue3";
import Navbar from "../../Components/Admin/Navbar";
import SideMenu from "../../Components/Admin/SideMenu.vue";
export default {
    components: {
        Link,
        Navbar,
        SideMenu,
    },
};
</script>
