{!! Form::open(['route' => ['restaurants.items.store', $restaurent ]]) !!}

{{ Form::hidden('item_id', $item->id) }}
{{ Form::submit('Book Item', ['class' => 'btn btn-primary delete-onclick']) }}
{!! Form::close() !!}