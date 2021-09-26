<template>
    <header class="w-full bg-white flex items-center fixed top-0 z-40 px-8">
        <div class="w-4/5 mx-auto h-full flex justify-between items-center">
            <div>
                <h2 class="transform font-bold">Logo</h2>
            </div>

            <ul class="menu-header flex h-full items-center ml-3 my-0">
                <li class="p-7 bg-gray-200 cursor-pointer">
                    <a href="#" class="uppercase font-bold">Shop</a>
                </li>
                <li class="p-7 cursor-pointer hover:bg-gray-200">
                    <a href="#" class="uppercase font-bold">Sell</a>
                </li>
                <li class="p-7 cursor-pointer hover:bg-gray-200">
                    <a href="#" class="uppercase font-bold">About</a>
                </li>
            </ul>

            <div class="search-header w-1/2 relative">
                <input
                    type="text"
                    class="w-full h-10 border-solid border-gray-300 border-2 rounded-2xl pl-5"
                    placeholder="Search"
                    @focus="openFiltersMenu"
                />
                <i
                    class="fas fa-search absolute left-0 cursor-pointer custom-search opacity-50"
                ></i>
            </div>

            <div class="icons-header">
                <i
                    class="far fa-heart text-lg mr-2 cursor-pointer opacity-50 hover:opacity-100"
                ></i>
                <i
                    class="fas fa-user text-lg mr-2 cursor-pointer opacity-50 hover:opacity-100"
                ></i>
                <i
                    class="fas fa-shopping-cart text-lg mr-2 cursor-pointer opacity-50 hover:opacity-100"
                ></i>

                <!-- <i
                    class="fas fa-search cursor-pointer text-right text-lg transform hover:scale-125"
                    @click="openFiltersMenu"
                ></i> -->
            </div>
        </div>
    </header>
</template>

<script>
export default {
    name: "Header",
    methods: {
        openFiltersMenu() {
            let menuFilters = document.querySelector(".filters");
            menuFilters.classList.remove("hidden");
        }
        /* openSearchMenu() {
            let headerMenu = document.querySelector(".menu-header");
            let iconsHeader = document.querySelector(".icons-header");
            let searchHeader = document.querySelector(".search-header input");
            console.log(document.activeElement);
            if (document.activeElement === searchHeader) {
                headerMenu.classList.add("hidden");
                iconsHeader.classList.add("hidden");
                searchHeader.classList.add("w-full");
            } else {
                headerMenu.classList.remove("hidden");
                iconsHeader.classList.remove("hidden");
                searchHeader.classList.remove("w-full");
            }
        } */
    }
};
</script>

<style lang="scss">
header {
    height: 80px;
}

.custom-search {
    left: 12px;
    top: 50%;
    transform: translateY(-50%);
}

/* .search-header:focus .menu-header {
    display: none;
} */

/* header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 100%;
    height: 80px;
    padding: 20px;
    h1 {
        font-family: "Montserrat";
        text-transform: uppercase;
    }

} */

/* @media all and (max-width: 700px) {
    header .menu-mobile-icon {
        display: block;
        cursor: pointer;
    }
} */
</style>
