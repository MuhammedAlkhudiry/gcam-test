<template>
    <Head title="الرئيسية" />

    <BreezeAuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                الرئيسية
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <div v-if="user.type === 'user' && !user.trusted"
                             class=" mx-auto p-5 border-b border-yellow-600 bg-yellow-100 rounded text-yellow-800">
                            يجب أن تُأكد بريدك الإلكتروني وأن يسمح لك قسم الموارد البشرية ليمكنك طلب بطاقة جديدة
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </BreezeAuthenticatedLayout>
</template>

<script setup>
import BreezeAuthenticatedLayout from '@/Layouts/Authenticated.vue'
import { Head, Link } from '@inertiajs/inertia-vue3';
import Button from "@/Components/Button.vue";
import {useUser} from "@/useUser.js";

const user = useUser();

</script>
