<template>
    <aside
        class="filters hidden fixed top-20 right-0 z-50 w-full bg-white text-black p-4"
    >
        <div>
            <div class="filters-title flex justify-between items-center">
                <h2
                    class="font-extrabold uppercase border-b-4 border-solid border-black"
                >
                    Filtra per:
                </h2>
                <i
                    class="fas fa-times cursor-pointer"
                    @click="closeFiltersMenu"
                ></i>
            </div>

            <div class="wrapper-filters flex flex-wrap">
                <div class="my-3 sm:my-0 md:my-0 lg:my-0 mr-4 filter-container">
                    <div>
                        <h4 class="font-bold uppercase">Nome Prodotto</h4>
                    </div>
                    <div class="filter-item flex items-baseline">
                        <label for="name-prod" class="mr-2">Nome</label>
                        <input
                            id="name-prod"
                            type="text"
                            class="border-solid border-gray-300 border-2 rounded-2xl pl-3"
                            v-model="nameProduct"
                        />
                    </div>
                </div>

                <div class="filter-container mr-4 my-3 md:my-0 lg:my-0">
                    <div>
                        <h4 class="font-bold uppercase">Prezzo</h4>
                    </div>

                    <div class="filter-item flex items-baseline">
                        <label for="min" class="mr-2">Minimo</label>
                        <input
                            id="min"
                            type="number"
                            step=".01"
                            class="border-solid border-gray-300 border-2 rounded-2xl pl-3"
                            v-model="minPrice"
                        />
                    </div>

                    <div class="filter-item flex items-baseline">
                        <label for="max" class="mr-2">Massimo</label>
                        <input
                            id="max"
                            type="number"
                            step=".01"
                            class="border-solid border-gray-300 border-2 rounded-2xl pl-3"
                            v-model="maxPrice"
                        />
                    </div>
                </div>

                <div class="filter-container mr-4 my-3 md:my-0 lg:my-0">
                    <div>
                        <h4 class="font-bold uppercase">Disponibilità</h4>
                    </div>

                    <div class="filter-item flex items-center">
                        <label for="availability" class="my-0 mr-2"
                            >Disponibile</label
                        >
                        <input
                            id="availability"
                            type="checkbox"
                            v-model="availability"
                        />
                    </div>
                </div>
            </div>
            <div class="filter-buttons flex">
                <div class="search-products-btn mr-4">
                    <a href="#">
                        <button
                            @click="emitFiltersData"
                            class="custom-btn bg-black text-white font-bold uppercase rounded-md px-4 py-2 hover:opacity-50"
                        >
                            Cerca
                        </button>
                    </a>
                </div>
                <div class="reset-search-btn mr-4">
                    <button
                        @click="resetFilters"
                        class="custom-btn bg-black text-white font-bold uppercase rounded-md px-4 py-2 hover:opacity-50"
                    >
                        Reset
                    </button>
                </div>
            </div>
        </div>
        <!-- <p>Prezzo minimo: {{ minPrice }}</p>
        <p>Prezzo massimo: {{ maxPrice }}</p>
        <p>Quantità: {{ quantity }}</p> -->
    </aside>
</template>

<script>
export default {
    name: "FiltersProduct",
    data() {
        return {
            nameProduct: "",
            minPrice: "",
            maxPrice: "",
            quantity: "",
            availability: ""
        };
    },
    methods: {
        emitFiltersData() {
            let menuFilters = document.querySelector(".filters");
            menuFilters.classList.add("hidden");
            this.$emit("filterData", {
                nameProd: this.nameProduct.trim(),
                min: this.minPrice,
                max: this.maxPrice,
                availability: this.availability
                /* quantity: this.quantity */
            });
        },
        resetFilters() {
            this.nameProduct = "";
            this.minPrice = "";
            this.maxPrice = "";
            this.availability = "";
            this.emitFiltersData();
        },
        closeFiltersMenu() {
            let menuFilters = document.querySelector(".filters");
            menuFilters.classList.add("hidden");
        }
    }
};
</script>

<style lang="scss" scoped>
aside.filters label {
    min-width: 100px;
}

/* aside.filters {
    background-color: blue;
} */

/* aside.filters {
    background-color: #1574e6;
    padding: 15px;

    .filter-container {
        margin-top: 1rem;

        .filter-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            input {
                height: 1.3rem;
                border: none;
                border-radius: 5px;
                &:focus {
                    outline: none;
                }
            }
        }
    }

    .filters-title h2 {
        font-family: "Montserrat";
        text-align: center;
        text-transform: uppercase;
    }
    .filter-container h4 {
        font-family: "Montserrat";
        text-transform: uppercase;
    }
    .filter-container label {
        font-family: "Poppins";
        cursor: pointer;
    }

    .filter-buttons {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .search-products-btn .custom-btn,
    .reset-search-btn .custom-btn {
        font-family: "Poppins";
        padding: 0.5rem 0.75rem;
        border-radius: 5px;
        border: none;
        margin-top: 1.5rem;
        background-color: white;
        color: #1d68a7;
        cursor: pointer;
        &:hover {
            background-color: #3490dc;
        }
    }
}
 */
/* @media all and (max-width: 1500px) {
    aside.filters {
        .filter-container {
            text-align: center;
        }
        .filter-item {
            flex-direction: column;
            align-items: center;
        }
    }
}

@media all and (max-width: 700px) {
    aside.filters {
        display: none;
        position: absolute;
        width: 100%;
        z-index: 999;
    }
    aside.filters.display-drop {
        display: block;
    }
} */
</style>
