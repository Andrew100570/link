<template>
        <div >
            <p>Новая ссылка</p>
            <p>{{ counter }}</p>
            <p>Cсылка для перехода</p>
            <a :href="`${old_link }/`">{{ new_link }}</a>
            <p>Cсылка для счетчкиа</p>
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
                this.new_link = data.new;
                this.old_link = data.old;
                })
             },



        },



    }

</script>
<style scoped>
</style>
