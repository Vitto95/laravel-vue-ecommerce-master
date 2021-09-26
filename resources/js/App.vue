<template>
    <div class="wrapper-app relative">
        <Header />
        <DisplayWindow />
    </div>
</template>

<script>
import Header from "./components/Header.vue";
import DisplayWindow from "./components/DisplayWindow.vue";

export default {
    name: "App",
    components: {
        Header,
        DisplayWindow
    }
};
</script>

<style lang="scss">
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

a {
    color: inherit;
    &:hover {
        color: inherit;
    }
}

ul {
    list-style-type: none;
}

.wrapper-app {
    width: 100%;
}

input {
    padding-left: 10px;
}
</style>
