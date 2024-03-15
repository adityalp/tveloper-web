<div id="update-data{{ $item->id }}" class="modal fade" id="modal-default" tabindex="-1" role="dialog"
    aria-labelledby="modal-default" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="h6 modal-title">Create Data</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('socialmedia.update', $item->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="row mt-3">
                        <div class="col-3">
                            <label for="title" class="col-form-label">Title</label>
                        </div>
                        <div class="col-9">
                            <input type="text" id="title" name="title" class="form-control" value="{{ $item->title }}">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-3">
                            <label for="link" class="col-form-label">Link</label>
                        </div>
                        <div class="col-9">
                            <textarea class="form-control" id="link" name="link" rows="4">{{ $item->link }}</textarea>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-secondary">Submit</button>
                <button type="button" class="btn btn-link text-gray-600 ms-auto" data-bs-dismiss="modal">Close</button>
            </div>
            </form>
        </div>
    </div>
</div>