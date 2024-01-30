<template>
        <div >
            <p>Новая ссылка</p>
            <p>{{ counter }}</p>
            <button @click="counter++">{{ new_link }}</button>
        <input type='text' v-model='link' placeholder="Введите ссылку" />
        <button v-on:click="send()">Преобразовать ссылку</button>
       </div>

</template>

<script>
    import axios from 'axios';

    export default {
        name: "LinkVue",
        data() {
            return {
                link: null,
                new_link: null,
                counter: 0,
            };
        },
        methods : {
        async send() {
            axios.post(
                    '/changeLink',
                    {
                        link: this.link
                    },
                ).then(({ data }) => {
                    console.log(data);
                this.new_link = data

                })
             },



        },



    }

</script>
<style scoped>
</style>
