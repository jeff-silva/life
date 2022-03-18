<template>
    <div>
        <ui-app ref="app">
            <template #content>
                <nuxt></nuxt>
            </template>

            <template #nav-header>
                <div class="py-5 text-center border-bottom">
                    Bem vindo {{ $auth.user.name }}
                </div>
            </template>

            <template #nav-body>
                <ui-nav :items="$store.state.admin.menu" @select="$refs.app.drawerClose()"></ui-nav>
            </template>

            <template #header>
                <div class="flex-grow-1"></div>

                <ui-autocomplete action="/api/app/search" :params="{q:'', limit:3}" style="max-width:300px;" class="d-none d-md-block">
                    <template #input="{ params, loading, search }">
                        <div class="input-group form-control border-0 shadow-none p-0">
                            <input type="text" class="form-control bg-light border-0 shadow-none" v-model="params.q" placeholder="Buscar no sistema" @keyup.enter="search()">

                            <div class="input-group-btn">
                                <button type="button" class="btn btn-light border-0 rounded-0" @click="search()" v-loading="loading">
                                    <i class="fas fa-fw fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </template>

                    <template #response="{loading, response}">
                        <div class="bg-white shadow-sm">
                            <div v-for="r in response" v-if="r.items.length">
                                <div style="background:#ddd; padding:4px; font-size:14px;">{{ r.name }}</div>
                                <div v-for="i in r.items" style="overflow:hidden;">
                                    <nuxt-link :to="i.url" class="d-block p-1" style="color:#666; text-decoration:none;">
                                        {{ i.name }}
                                    </nuxt-link>
                                </div>
                            </div>
                        </div>
                    </template>
                </ui-autocomplete>
            </template>
        </ui-app>
    </div>
</template>