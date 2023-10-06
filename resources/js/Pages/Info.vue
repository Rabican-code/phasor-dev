<script setup>
import { Head, Link } from '@inertiajs/vue3';

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
});
</script>

<template>
    <Head title="Home" />
    <div class="flex sm-m:flex-col-reverse">
        <div class="w-[50vw] sm-m:w-[100vw] sm-m:h-[60vh] h-[100vh] flex  justify-center items-center">
            <div class="">
                <p class="text-3xl font-extrabold my-8">Phasor</p>
                <p class="w-[35vw] sm-m:w-[70vw] my-4">Welcome to our AI-powered Chatbot: your virtual companion for navigating the
                    intricacies of Australian Electrical Standards. Whether you're an electrician, an engineer, a business
                    owner, or simply someone interested in understanding electrical regulations, our chatbot is here to
                    provide
                    you with accurate and up-to-date information.</p>
                <div class="text-center mt-20 relative">
                    <Link :href="route('login')" class=" px-7 py-4 p-3 sm-m:absolute sm-m:bottom-[1vw] sm-m:left-[20vw] rounded-full bg-[#b30059] hover:bg-[#7a204d]">Get Started
                    </Link>
                </div>
            </div>
        </div>
        <div class=" sm-m:w-[100vw] sm-m:h-[50vh] flex justify-center items-center bg-white w-[50vw] h-[100vh]">
            <div class="h-fit">
                <img class="h-[60vh]" src="../../../public/img/brain-ai.png" alt="">
            </div>
        </div>
    </div>        
</template>

<style>
.bg-dots-darker {
    background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E");
}

@media (prefers-color-scheme: dark) {
    .dark\:bg-dots-lighter {
        background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E");
    }
}
</style>
