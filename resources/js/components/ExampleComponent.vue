<template>
    <div class="container">
        <div class="dropdown my-3">
            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1"
                data-bs-toggle="dropdown" aria-expanded="false">
                New resource
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModal">File</button>
                </li>
                <li><button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#linkModal">Link</button></li>
                <li><button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#snippetModal">Snippet</button>
                </li>
            </ul>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">title</th>
                            <th scope="col">type</th>
                            <th scope="col">action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="resource in resources" :key="resource.id">
                            <th>{{ resource.id }}</th>
                            <td>{{ resource.resourceable.title }}</td>
                            <td>{{ getTypeNameFromClass(resource.resourceable_type) }}</td>
                            <td>
                                <button class="btn btn-secondary btn-sm">Edit</button>
                                <button class="btn btn-danger btn-sm" type="button" @click="deleteResources(resource.id)">delete</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
       
    <add-modals></add-modals>
    </div>


</template>

<script>
import AddModalComponent from "./modals/AddModalComponent.vue";

export default {
    data: function () {
        return {
            resources: [],
        };
    },
    created() {
        this.csrfToken = document.querySelector("meta[name=\"csrf-token\"]").content;
    },
    mounted() {
        this.getResources();
    },
    methods: {
        async getResources() {
            await axios.get("/api/resources").then(response => {
                this.resources = response.data;
            }).catch(error => {
                console.log(error);
                this.resources = [];
            });
        },
        deleteResources(id) {
            if (confirm("Are you sure to delete this category ?")) {
                axios.delete(`/api/resources/${id}`).then(response => {
                    this.getResources();
                }).catch(error => {
                    console.log(error);
                });
            }
        },
        getTypeNameFromClass(classString) {
            var rest = classString.substring(0, classString.lastIndexOf("\\") + 1);
            var last = classString.substring(classString.lastIndexOf("\\") + 1, classString.length);
            return last;
        }
    },
    components: { AddModalComponent }
}
</script>
