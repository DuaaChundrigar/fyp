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
                    class="m-10 mb-5 font-serif text-3xl font-bold text-center text-gray-800"
                >
                    Contact Messages
                </h1>
                <div class="flex flex-col m-10">
                    <table class="text-center border">
                        <thead class="bg-white border-b">
                            <tr>
                                <th
                                    scope="col"
                                    class="px-6 py-4 text-sm font-medium text-gray-900"
                                >
                                    S.No
                                </th>
                                <th
                                    scope="col"
                                    class="px-6 py-4 text-sm font-medium text-gray-900"
                                >
                                    Student Reg No
                                </th>
                                <th
                                    scope="col"
                                    class="px-6 py-4 text-sm font-medium text-gray-900"
                                >
                                    Student Name
                                </th>
                                <th
                                    scope="col"
                                    class="px-6 py-4 text-sm font-medium text-gray-900"
                                >
                                    Student Email
                                </th>
                                <th
                                    scope="col"
                                    class="px-6 py-4 text-sm font-medium text-gray-900"
                                >
                                    Message
                                </th>
                                <th
                                    scope="col"
                                    class="px-6 py-4 text-sm font-medium text-gray-900"
                                >
                                    Delete Message
                                </th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr
                                v-for="(contact, index) in contacts"
                                :key="contact.id"
                                class="px-6 py-4 text-sm font-medium text-gray-900 bg-white border-b hover:bg-gray-100"
                            >
                                <td
                                    class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap"
                                >
                                    {{ index + 1 }}
                                </td>
                                <td
                                    class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap"
                                >
                                    {{ contact.regno }}
                                </td>
                                <td
                                    class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap"
                                >
                                    {{ contact.name }}
                                </td>
                                <td
                                    class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap"
                                >
                                    {{ contact.email }}
                                </td>
                                <td
                                    class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap"
                                >
                                    {{ contact.msg }}
                                </td>

                                <td
                                    class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap"
                                >
                                    <button
                                        type="button"
                                        @click="deleteMsg(contact.id)"
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
// import SideMenu from "../../Components/Admin/SideMenu";
import Swal from "sweetalert2";

import axios from "axios";
export default {
    components: {
        Link,
        Navbar2,
        // SideMenu,
        Swal,
    },
    props: {
        contacts: {
            type: Array,
            default: [],
        },
    },

    data() {
        return {
            contacts: this.contacts,
        };
    },

    methods: {
        deleteMsg(contact_id) {
            var vm = this;
            axios
                .post("/admin/contacts/delete/" + contact_id)
                .then((response) => {
                    vm.showNotification(
                        "Delete Massege Successfully",
                        "success"
                    );
                    this.contacts = response.data;
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
