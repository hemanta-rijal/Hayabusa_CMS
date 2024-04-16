
<form action="{{ $route }}"
      method="post"
      style="display: inline-block;">
    @csrf
    @method('DELETE')

    <a href="#" class="btn-delete bs-tooltip" data-toggle="tooltip"
       data-placement="top" title="Delete">
        <button class="btn btn-outline-danger btn-icon">
            @include('backend.shared.svg.bin-delete')
        </button>
    </a>
</form>
