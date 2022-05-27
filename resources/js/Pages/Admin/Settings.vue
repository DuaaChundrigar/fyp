<template>
    <div>
        <Navbar />
        <!--Body-->
        <div class="grid grid-cols-6 gap-4 m-2">
            <!--Side bar-->

            <SideMenu />
            <!--Right Side-->
            <div class="col-span-5 ... m-2">
                <h1
                    class="mb-5 font-serif text-3xl font-bold text-center text-gray-800"
                >
                    Password Reset
                </h1>

                <div
                    class="flex flex-col w-5/12 px-4 py-8 bg-gray-800 shadow-md ml-60 rounded-2xl"
                >
                    <div
                        class="self-center text-xl font-bold text-gray-100 sm:text-3xl"
                    >
                        Update Password
                    </div>

                    <div class="">
                        <form @submit.prevent="submitForm">
                            <div class="flex flex-col mb-2">
                                <div class="relative">
                                    <label for="category" class="text-white">
                                        Add New Password
                                    </label>
                                    <input
                                        type="text"
                                        v-model="formData.password"
                                        class="w-full py-2 pl-5 pr-4 text-sm placeholder-gray-500 border border-gray-400 rounded-2xl focus:outline-none focus:border-blue-400"
                                        placeholder="Enter New Password"
                                    />
                                </div>
                            </div>

                            <div class="flex items-center justify-center">
                                <button
                                    type="submit"
                                    class="px-8 py-2 mt-2 font-semibold text-gray-800 bg-white rounded text-1xl hover:bg-gray-600 hover:text-white"
                                >
                                    Update
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import { Link } from "@inertiajs/inertia-vue3";
import Navbar from "../../Components/Admin/Navbar";
import SideMenu from "../../Components/Admin/SideMenu";

//import axios from "axios";
export default {
    components: {
        Link,
        Navbar,
        SideMenu,
    },

    props: {},

    data() {
        return {
            formData: {
                password: "",
                confirm_password: "",
            },
        };
    },
    methods: {
        submitForm() {
            axios
                .post("/admin/settings/update", {
                    formData: this.formData,
                })
                .then((response) => {
                    window.location.href = "/admin/settings";
                });
        },
    },
};
</script>
