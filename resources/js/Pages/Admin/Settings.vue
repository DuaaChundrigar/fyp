<template>
    <div>
        <Navbar2 />
        <!--Body-->
        <!-- <div class="grid grid-cols-6 gap-4 m-2"> -->
            <!--Side bar-->

            <!-- <SideMenu /> -->
            <!--Right Side-->
            <!-- <div class="col-span-5 ... m-2"> -->
                <h1
                    class="mb-5 m-10 font-serif text-3xl font-bold text-center text-gray-800"
                >
                    Password Reset
                </h1>

                <div
                    class="flex flex-col w-5/12 px-4 py-8 m-auto mt-10 bg-gray-800 shadow-md rounded-2xl"
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
                                        required
                                        v-model="formData.password"
                                        class="w-full py-2 pl-5 pr-4 text-sm placeholder-gray-500 border border-gray-400 rounded-2xl focus:outline-none focus:border-blue-400"
                                        placeholder="Enter New Password"
                                    />
                                </div>
                                <div class="relative">
                                    <label for="category" class="text-white">
                                        Confirm Password
                                    </label>
                                    <input
                                        type="text"
                                        required
                                        class="w-full py-2 pl-5 pr-4 text-sm placeholder-gray-500 border border-gray-400 rounded-2xl focus:outline-none focus:border-blue-400"
                                        placeholder="Enter Confirm Password"
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
        <!-- </div>
    </div> -->
</template>
<script>
import { Link } from "@inertiajs/inertia-vue3";
import Navbar2 from "../../Components/Admin/Navbar2";
// import SideMenu from "../../Components/Admin/SideMenu";
import Swal from 'sweetalert2';

//import axios from "axios";
export default {
    components: {
        Link,
        Navbar2,
        // SideMenu,
        Swal,
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
            var vm = this;
            axios
                .post("/admin/settings/update", {
                    formData: this.formData,
                })
                .then((response) => {
                    vm.showNotification("Password Reset Successfully", "success");
                    window.location.href = "/logout";
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
