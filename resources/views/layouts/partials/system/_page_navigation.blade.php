<nav class="flex" aria-label="Breadcrumb">
    <ol class="inline-flex items-center space-x-1 md:space-x-3">
        <li class="inline-flex items-center">Home</li>
        @if (!empty($pageNavigation))
            @foreach ($pageNavigation as $item)
                <li class="breadcrumb-item">{{ $item }}</li>
            @endforeach
        @endif
        <li class="breadcrumb-item active" aria-current="page">{{ $pageTitle }}</li>
    </ol>
</nav>
