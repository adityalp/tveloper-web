<div id="update-data{{ $item->id }}" class="modal fade" id="modal-default" tabindex="-1" role="dialog"
    aria-labelledby="modal-default" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="h6 modal-title">Update Data</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('contact.update', $item->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-3">
                            <label for="name" class="col-form-label">Name</label>
                        </div>
                        <div class="col-9">
                            <input type="text" id="name" name="name" class="form-control" value="{{ $item->name }}">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-3">
                            <label for="email" class="col-form-label">Email</label>
                        </div>
                        <div class="col-9">
                            <input type="text" id="email" name="email" class="form-control" value="{{ $item->email }}">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-3">
                            <label for="subject" class="col-form-label">Subject</label>
                        </div>
                        <div class="col-9">
                            <input type="text" id="subject" name="subject" class="form-control" value="{{ $item->subject }}">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-3">
                            <label for="message" class="col-form-label">Message</label>
                        </div>
                        <div class="col-9">
                            <textarea class="form-control" id="message" name="message" rows="4">{{ $item->message }}</textarea>
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
