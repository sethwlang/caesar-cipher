<template>
    <div>
        <input type="text" v-model="text">
        <input type="number" v-model="shift">
        <button @click="encrypt">Encrypt</button>
        <button @click="decrypt">Decrypt</button>
        <p>{{ result }}</p>
    </div>
</template>

<script>
export default {
    data() {
        return {
            text: '',
            shift: 0,
            result: ''
        };
    },
    methods: {
        encrypt() {
           self = this;
            axios.post('/encrypt', {
                text: this.text,
                shift: this.shift
            }
            ).then(response => {
                self.result = response.data;
                })
            .catch(error => {
            console.error('Error:', error);
            });
        },
        decrypt() {
            self = this;
            axios.post('/decrypt', {
                text: this.text,
                shift: this.shift
            }
            ).then(response => {
                self.result = response.data;
                })
            .catch(error => {
            console.error('Error:', error);
            });
        }
    }
};
</script>
