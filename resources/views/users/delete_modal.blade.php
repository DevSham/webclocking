<!-- Button trigger modal -->
<button type="button" class="btn bg-red-500 text-white" data-bs-toggle="modal" data-bs-target="#deleteModal-{{$loop->iteration}}" >
    delete
</button>

<!-- Delete Modal -->
<div class="modal fade" id="deleteModal-{{$loop->iteration}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog pt-48">
        <div class="modal-content">
            <div class="modal-body h-40 p-20 text-md">
                Please confirm you wish to delete this user?
            </div>
            <div class="modal-footer bg-gray-200 h-20">
                <form action="/users/{{ $user->id }}" method="POST">
                    {{method_field('DELETE')}}
                    {{ csrf_field() }}
                    <button type="submit" class="bg-gray-300 text-xl max-w-4xl border border-red-900 mr-2 p-1 px-4" data-bs-toggle="modal" data-bs-target="#deleteModal">
                        Ok
                    </button>
                </form>
                <button type="button" class="bg-gray-300 text-xl focus max-w-4xl border border-gray-200 p-1 px-4 mr-24" data-bs-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
