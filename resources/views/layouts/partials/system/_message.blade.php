<div class="row mt-4">
    <div class="col-md-12">
        @if (session()->has('success'))
            <div class="alert-big alert alert-success alert-dismissible fade show" role="alert">
                <div class="alert-content">
                    <h6 class='alert-heading'>Success</h6>
                    <p>{{ session()->get('success') }}</p>
                    <button type="button" class="close text-capitalize" data-dismiss="alert" aria-label="Close">
                        <span data-feather="x" aria-hidden="true"></span>
                    </button>
                </div>
            </div>
            <br>
        @endif
    <!-- update is the same us success or failure. What changes is the message and the
      alert class. -->
        @if (Session::has('warning'))
            <div class="alert-big alert alert-warning alert-dismissible fade show" role="alert">
                <div class="alert-content">
                    <h6 class='alert-heading'>Warning</h6>
                    <p>{{ Session::get('warning') }}</p>
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
        @if (Session::has('exist'))
            <div class="alert-big alert alert-warning alert-dismissible fade show" role="alert">
                <div class="alert-content">
                    <h6 class='alert-heading'>Exist</h6>
                    <p>{{ Session::get('exist') }}</p>
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
