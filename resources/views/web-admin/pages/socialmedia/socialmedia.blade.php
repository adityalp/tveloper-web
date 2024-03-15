@extends('web-admin.template')

@section('content')
    <div class="py-4">

        @include('web-admin.components.breadcumb')

        <div class="d-flex justify-content-between w-100 flex-wrap">
            <div class="mb-3 mb-lg-0">
                <h1 class="h4">Socials Media Data</h1>
            </div>
            <div>
                <button class="btn btn-secondary d-inline-flex align-items-center" data-bs-toggle="modal"
                    data-bs-target="#create-data">
                    <svg class="icon icon-xs me-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                    </svg>
                    Create Data
                </button>
            </div>
        </div>
    </div>

    <div class="card border-0 shadow mb-4">
        <div class="card-body">

            @include('web-admin.components.alert')

            <div class="table-responsive">
                <table class="table">
                    <thead class="thead-light">
                        <tr class="text-center">
                            <th class="border-0 rounded-start">#</th>
                            <th class="border-0">Icon</th>
                            <th class="border-0">Title</th>
                            <th class="border-0">Link</th>
                            <th class="border-0">Is Active</th>
                            <th class="border-0">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $key => $item)
                        @php
                        $isActive = ($item->is_active === 1) ? ['Active', 'bg-success'] : ['Not Active', 'bg-danger']
                        @endphp
                            <tr class="text-center">
                                <td>{{ $key + 1 }}</td>
                                <td>
                                    <a href="{{ asset($item->icon) }}" target="_blank">
                                        <img class="rounded-circle" src="{{ asset($item->icon) }}" width="46"
                                            height="42" />
                                    </a>
                                </td>
                                <td>{{ $item->title }}</td> 
                                <td>{{ $item->link }}</td>
                                <td><span class="badge {{ $isActive[1] }}">
                                    {{ $isActive[0] }}
                                </span></td>
                                <td>
                                    <button class="btn btn-xs btn-primary" title="Update Data" data-bs-toggle="modal"
                                        data-bs-target="#update-data{{ $item->id }}">
                                        <svg class="icon icon-xs" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z">
                                            </path>
                                        </svg>
                                    </button>

                                    @include('web-admin.pages.socialmedia.modal.update')

                                    <button class="btn btn-xs btn-primary" title="Update Photo" data-bs-toggle="modal"
                                        data-bs-target="#update-photo{{ $item->id }}">
                                        <svg class="icon icon-xs" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                                            </path>
                                        </svg>
                                    </button>

                                    @include('web-admin.pages.socialmedia.modal.update-photo')

                                    <button class="btn btn-xs btn-danger" title="Delete Data" data-bs-toggle="modal"
                                        data-bs-target="#delete-data{{ $item->id }}">
                                        <svg class="icon icon-xs" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                            </path>
                                        </svg>
                                    </button>

                                    @include('web-admin.pages.socialmedia.modal.delete')

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @include('web-admin.pages.socialmedia.modal.create')
@endsection
