<template>
    <div class="flex column center">
        <p>sidebar</p>
        <img v-bind:src="icon" v-bind:alt="icon_name">
        <p>{{ user_name }}</p>
        <p>Link</p>
        <ul>
            <li v-for="item in list" v-bind:key="item.id">
                <a v-bind:href="item.url">{{ item.name }}</a>
            </li>
        </ul>
    </div>
    
    
</template>

<script>
    export default {
        props:
        [
            "icon",
            "icon_name",
            "url_home",
            "url_create"
        ],
        data() {
            return {
                list:
                [
                    { id: 1, name: 'Home', url: this.url_home },
                    { id: 2, name: 'Create', url: this.url_create }
                ]
            }
        }
    }
</script>
