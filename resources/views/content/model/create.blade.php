<div class="card">
    <h5 class="card-header">Model</h5>
    <div class="card-body">
        <form method="POST" action="{{ route('catalog.models.store') }}" role="form" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <!-- <label class="form-label" for="basic-default-fullname">Name</label> -->
                <input type="text" class="form-control" name="name" id="basic-default-fullname"
                       placeholder="Enter Model Name"/>
            </div>
            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-primary">Add Model</button>
            </div>
        </form>
    </div>
</div>

