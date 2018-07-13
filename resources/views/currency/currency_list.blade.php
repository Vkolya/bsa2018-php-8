<li class="list-group-item">
    <img src="{{ $currency->logo_url }}"/> <a href="{{ route('currencies-show', $currency->id) }}">{{ $currency->title }}</a>({{ $currency->short_name }}) - {{ $currency->price }} USD
    <a href="{{ route('currencies-edit', $currency->id) }}" class="btn btn-warning edit-button" role="button">Edit</a>
    <a href="{{ route('currencies-delete', $currency->id) }}" class="btn btn-danger delete-button" role="button">Delete</a>
   
 </li>