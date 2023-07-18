<div>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        NOVO POST
    </button>

    <!-- Modal -->
    <div wire:ignore class="modal modal-lg fade" data-bs-backdrop="static" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">NOVO POST</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form wire:submit.prevent="save">

                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" wire:model="title" class="form-control" id="title">

                        </div>
                        <div class="mb-3">
                            <label for="subtitle" class="form-label">Sub-Title</label>
                            <input type="text" wire:model="subtitle" class="form-control" id="subtitle">

                        </div>
                        <div class="mb-3">
                            <label for="textarea" class="form-label">Texto</label>
                            <textarea wire:model="text" class="form-control" id="textarea" rows="10"> </textarea>

                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <span>

    </span>

</div>

