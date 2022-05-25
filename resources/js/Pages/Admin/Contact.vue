<template>
    <div>
        <Navbar />
        <!--Body-->
        <div class="grid grid-cols-6 gap-4 m-2">
            <!--Side bar-->

            <SideMenu />
            <!--Right Side-->
            <div class="col-span-5 ... m-2">

                <h1 class="mb-5 font-serif text-3xl font-bold text-center text-gray-800">Contact Messages</h1>
                <div class="flex flex-col ">
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
                                            <td class="">
                                                {{ index + 1 }}
                                            </td>
                                            <td class="">
                                                {{ contact.regno }}
                                            </td>
                                            <td class="">
                                                {{ contact.name }}
                                            </td>
                                            <td class="">
                                                {{ contact.email }}
                                            </td>
                                            <td class="">
                                                {{ contact.msg }}
                                            </td>

                                            <td class="">
                                                <button
                                                    type="button"
                                                    @click="
                                                        deleteMsg(contact.id)
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
        </div>
    </div>
</template>
<script>
import { Link } from "@inertiajs/inertia-vue3";
import Navbar from "../../Components/Admin/Navbar";
import SideMenu from "../../Components/Admin/SideMenu";

import axios from "axios";
export default {
    components: {
        Link,
        Navbar,
        SideMenu,
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
            axios
                .post("/admin/contacts/delete/" + contact_id)
                .then((response) => {
                    this.contacts = response.data;
                });
        },
    },
};
</script>
