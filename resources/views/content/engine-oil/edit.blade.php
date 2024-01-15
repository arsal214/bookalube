<!-- Modal -->
<div class="modal fade" id="staticBackdrop{{ $engine_oil->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
     aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Edit Engine Oil </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('engine-oils.update',$engine_oil->id)}}" method="POST">
                @method('PATCH')
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label" for="basic-default-fullname">Name</label>
                        <input type="text" class="form-control" name="name" id="basic-default-fullname" placeholder="Edit  Name"
                               value="{{$engine_oil->name}}" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="basic-default-fullname">Price</label>
                        <input type="number" class="form-control" name="price" id="basic-default-fullname" placeholder="Edit Price"
                               value="{{$engine_oil->price}}" />
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
