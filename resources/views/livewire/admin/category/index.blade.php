    <!-- Modal -->
    <div>
        {{-- <div wire:ignore.self class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby=""
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="">Category Delete</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form wire:submit.prevent="destroyCategory">
                        <div class="modal-body">
                            <h5>Are your sure you want to delete this data ?</h5>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Yes .Delete it</button>
                        </div>
                    </form>
                </div>
            </div>
        </div> --}}

        <div wire:ignore.self class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="">Delete Brand</h5>
                        <button type="button" class="btn-close"  data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div wire:loading class="p-2">
                        <div class="spinner-border text-primary" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>Loading...
                    </div>
        
                    <div wire:loading.remove>
                        <form wire:submit.prevent="destroyCategory">
                            <div class="modal-body">
                                <h4>Are you sure want delete ??</h4>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" 
                                    data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Yes.Delete</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 grid-margin">
                @if (session('message'))
                    <div class="alert alert-success">{{ session('message') }}</div>
                @endif
                <div class="card">
                    <div class="card-header">
                        <h4>Category
                            <a href="{{ url('admin/category/create') }}" class="btn btn-primary btn-sm float-end text-white">Add
                                Category</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <td>ID</td>
                                    <td>Name</td>
                                    <td>Status</td>
                                    <td>Action</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                    <tr>
                                        <td>{{ $category->id }}</td>
                                        <td>{{ $category->name }}</td>
                                        <td>{{ $category->status == '1' ? 'Hidden' : 'Visible' }}</td>
                                        <td>
                                            <a href="{{ url('admin/category/' . $category->id . '/edit') }}"
                                                class="btn btn-success text-white btn-sm me-2">Edit</a>
                                            {{-- <a href="" wire:click="deleteCategory({{ $category->id }})"
                                                data-bs-toggle="modal" data-bs-target="#deleteModal"
                                                class="btn btn-danger text-white btn-sm">Delete</a> --}}
                                                <a href="" wire:click="deleteCategory({{ $category->id }})"
                                                    data-bs-toggle="modal" data-bs-target="#deleteModal"
                                                    class="btn btn-danger btn-sm text-white">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div>
                            {{ $categories->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('script')
        <script>
            window.addEventListener('close-modal', event => {
                $('#deleteModal').modal('hide');
            });
        </script>
    @endpush
