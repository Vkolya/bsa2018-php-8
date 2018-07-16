<li class="list-group-item">
    <img src="{{ $currency->logo_url }}"/> <a href="{{ route('currencies-show', $currency->id) }}">{{ $currency->title }}</a>({{ $currency->short_name }}) - {{ $currency->price }} USD
    <a href="{{ route('currencies-edit', $currency->id) }}" class="btn btn-warning edit-button" role="button">Edit</a>
    <form method="post" action="{{ route('currencies-delete', $currency->id) }}" class="form-delete">
        @csrf
        @method('DELETE')
            <button type="submit" title="Delete" class="btn btn-danger delete-button"><i class="fas fa-trash-alt"></i> Delete</button>
    </form>
 </li>