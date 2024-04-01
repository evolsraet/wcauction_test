<template>
  <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
      <router-link to="/" class="navbar-brand"></router-link>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <LocaleSwitcher />
            <li class="nav-item">
              <router-link to="/" class="nav-link" aria-current="page">{{ $t('home') }}</router-link>
            </li>
            <li class="nav-item">
              <router-link :to="{ name: 'public-posts.index'}" class="nav-link">Blog</router-link>
            </li>
            <template v-if="!user?.name">
              <li class="nav-item">
                <router-link class="nav-link" to="/login">{{ $t('login') }}</router-link>
              </li>
              <li class="nav-item">
                <router-link class="nav-link" to="/register">{{ $t('register') }}</router-link>
              </li>
            <li class="nav-item">
                <router-link class="nav-link" to="/test">{{ $t('테스트 입니다') }}</router-link>
              </li>
            </template>
            <li v-if="user?.name" class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{ user.name }}
              </a>
              <ul class="dropdown-menu dropdown-menu-lg-end">
                <li><router-link class="dropdown-item" to="/admin">Admin</router-link></li>
                <li><router-link to="/admin/posts" class="dropdown-item">Post</router-link></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="javascript:void(0)" @click="logout">Logout</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
</template>

<script setup>
import { useStore} from "vuex";
import useAuth from "@/composables/auth";
import {computed} from "vue";
import LocaleSwitcher from "../components/LocaleSwitcher.vue";

    const store = useStore();
    const user = computed(() => store.getters["auth/user"])
    const { processing, logout } = useAuth();
</script>
