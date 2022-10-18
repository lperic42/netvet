<template>
    <div class="app-advanced p-10">
        <h2 style="text-align: center; font-size: 25px; font-weight: 500; margin-bottom: 20px;">Imaš pitanje?</h2>
        <p style="text-align: center; font-size:16px;">Stručna osoba iz našeg tima odgovorit će ti u najkraćem roku!</p>
        <form
            action="#"
            @submit="handleSubmit"
            method="POST"
            target="_blank"
            class="w-1/2 mx-auto mt-5"
        >
            <div class="mb-3 pt-0">
                <input
                    type="text"
                    placeholder="Ime i prezime"
                    name="name"
                    class="
            px-3
            py-3
            placeholder-gray-400
            text-gray-600
            relative
            bg-white bg-white
            rounded
            text-sm
            border-0
            shadow
            outline-none
            focus:outline-none
            focus:ring
            w-full
          "
                    required
                />
            </div>

            <div class="mb-3 pt-0">
                <input
                    type="email"
                    placeholder="Vaš E-mail"
                    name="email"
                    class="
            px-3
            py-3
            placeholder-gray-400
            text-gray-600
            relative
            bg-white bg-white
            rounded
            text-sm
            border-0
            shadow
            outline-none
            focus:outline-none
            focus:ring
            w-full
          "
                    required
                />
            </div>

            <div class="mb-3 pt-0">
        <textarea
            placeholder="Poruka"
            name="message"
            class="
            px-3
            py-3
            placeholder-gray-400
            text-gray-600
            relative
            bg-white bg-white
            rounded
            text-sm
            border-0
            shadow
            outline-none
            focus:outline-none
            focus:ring
            w-full
          "
            required
        />
            </div>

            <div class="mb-3 pt-0">
                <button
                    class="
            bg-blue-500
            text-white
            active:bg-blue-600
            font-bold
            uppercase
            text-sm
            px-6
            py-3
            rounded
            shadow
            hover:shadow-lg
            outline-none
            focus:outline-none
            mr-1
            mb-1
            ease-linear
            transition-all
            duration-150
          "
                    type="submit"
                >
                    Pošalji
                </button>
            </div>
        </form>

        <div v-if="submitted" class="text-center mt-10">
            <h2 class="text-2xl">Hvala na upitu!</h2>
            <div class="text-md">Odgovorit ćemo Vam u najkražem roku.</div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Contact",
    data: () => ({
        submitted: false,
        FORM_ENDPOINT: '',
    }),

    methods: {
        handleSubmit() {
            setTimeout(() => {
                this.submitted = true;
            }, 100);
        },
    },

    // To Add Tailwind
    beforeCreate() {
        if (document) {
            const stylesheet = document.createElement("link");
            stylesheet.rel = "stylesheet";
            stylesheet.href =
                "https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css";

            document.head.appendChild(stylesheet);
        }
    },
};
</script>
