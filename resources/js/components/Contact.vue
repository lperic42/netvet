<template>
    <div class="app-advanced p-10">
        <h2 style="text-align: center; font-size: 25px; font-weight: 500; margin-bottom: 20px;">Imaš pitanje?</h2>
        <p style="text-align: center; font-size:16px;">Stručna osoba iz našeg tima odgovorit će ti u najkraćem roku!</p>
        <form
            action=""
            @submit="handleSubmit"
            method="POST"
            class="mx-auto mt-5 contact-form"
        >
            <div class="mb-3 pt-0">
                <input
                    type="text"
                    placeholder="Ime i prezime"
                    name="name"
                    v-model="form.name"
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
                    v-model="form.email"
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
            v-model="form.message"
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
                    v-if="!this.submitted"
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
                <button
                    v-if="this.submitted"
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
                    style="opacity: .5; user-select: none; cursor: wait"
                    type="submit"
                >
                    Pošalji
                </button>
            </div>
        </form>


    </div>
</template>

<script>
export default {
    name: "Contact",
    data: () => ({
        form: {
            'name': null,
            'email': null,
            'message': null,
        },
        submitted: false,
        FORM_ENDPOINT: '',
    }),

    methods: {
        handleSubmit(e) {
            e.preventDefault();

            this.submitted = true;

            axios.post(`/kontakt`, {
                'name': this.form.name,
                'email': this.form.email,
                'message': this.form.message
            }).then((response) => {
                const {data, status} = response;
                if (status === 200) {
                    window.location.replace("/hvala");
                } else {
                    this.loading = false;
                }
            }).catch((e) => {
                const {status, data} = e.response;

                if (status === 422) {
                    for (const [key, value] of Object.entries(data.errors)) {
                        this.errors[key] = data.errors[key][0] || null;
                    }
                }

                this.loading = false;
            })
        }
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

<style scoped>
.contact-form {
    width: 50%;
}

@media (max-width: 870px) {
    .contact-form {
        width: 100%;
    }
}
</style>
