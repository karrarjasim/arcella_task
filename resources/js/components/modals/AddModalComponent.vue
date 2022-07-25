<template>
 <div>
    <!-- file Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add new file</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="files" method="post" enctype="multipart/form-data">
                        <div class="modal-body">
                            <input type="hidden" name="_token" :value="csrfToken" />
                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input name="title" v-model="form.title" type="text" class="form-control" id="title" autocomplete="off"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label for="file" class="form-label">File</label>
                                <input name="file"  type="file" class="form-control" id="file" required>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- link Modal -->
        <div class="modal fade" id="linkModal" tabindex="-1" aria-labelledby="linkModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="linkModalLabel">Add new link</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="links" method="post">
                        <div class="modal-body">
                            <input type="hidden" name="_token" :value="csrfToken" />
                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input name="title" v-model="form.title" type="text" class="form-control" id="title" autocomplete="off"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label for="link" class="form-label">Link</label>
                                <input name="link" v-model="form.link" type="text" class="form-control" id="link" autocomplete="off"
                                    required>
                            </div>
                            <div class="mb-3 form-check">
                                <input name="new_tab" type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">open in new tab</label>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- snippet Modal -->
        <div class="modal fade" id="snippetModal" tabindex="-1" aria-labelledby="snippetModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="snippetModalLabel">Add new Snippet</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="snippets" method="post">
                        <div class="modal-body">
                            <input type="hidden" name="_token" :value="csrfToken" />
                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input name="title" v-model="form.title" type="text" class="form-control" id="title" autocomplete="off"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label for="descreption" class="form-label">Descreption</label>
                                <textarea name="descreption" v-model="form.descreption" class="form-control" aria-label="With textarea"
                                    required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="snippet" class="form-label">HTML Snippet</label>
                                <textarea v-model="form.snippet" name="snippet" class="form-control" aria-label="With textarea"
                                    required></textarea>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
 </div>
</template>

<script>

export default {
    data () {
        return {
            isUpdate: true
        }
    },
   props: {
    form: {},
   
   },
    created() {
        this.csrfToken = document.querySelector("meta[name=\"csrf-token\"]").content;
    },
    watch: { 
      	form: function(newVal, oldVal) { // watch it
          this.isUpdate= false
          
        }
      }
   
}
</script>