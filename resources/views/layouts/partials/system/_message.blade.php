<div class="row mt-4">
    <div class="col-md-12">
        @if (session()->has('success'))
            <div class="bg-green-500 border border-green-500 text-white text-center text-l pt-2 rounded relative" role="alert">
                <div class="alert-content">
                    <p>{{ session()->get('success') }}</p>
                    <button type="button" class="close text-capitalize" data-dismiss="alert" aria-label="Close">
                        <span data-feather="x" aria-hidden="true"></span>
                    </button>
                </div>
            </div>
            <br>
        @endif
        @if (session()->has('failure'))
            <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md"  role="alert">
                <div class="alert-content">
                    <h6 class='alert-heading'>Failure</h6>
                    <p>{{ session()->get('failure') }}</p>
                    <button type="button" class="close text-capitalize" data-dismiss="alert" aria-label="Close">
                        <span data-feather="x" aria-hidden="true"></span>
                    </button>
                </div>
            </div>
            <br>
        @endif
        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            <br>
        @endif

    </div>
</div>
