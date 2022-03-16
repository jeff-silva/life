<template>
    <div>
        <div class="d-flex">
            <div class="bg-dark" style="height:100vh; width:200px;">
                <ui-nav :items="navItems" text-color="#fff"></ui-nav>
            </div>
    
            <div class="flex-grow-1 p-3" style="height:100vh; overflow:auto;">
                <nuxt-child></nuxt-child>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            navItems: [
                {label:"Home", to:"/admin/dev/", children:[]},
                {label:"Endpoints", to:"/admin/dev/endpoints/", children:[]},
                {label:"Components", children:[
                    {label:"Checks", to:"/admin/dev/components-check/", children:[]},
                    {label:"Dropdown", to:"/admin/dev/components-dropdown/", children:[]},
                ]},
                {label:"Admin", to:"/admin/", children:[]},
            ],
        };
    },
}
</script>