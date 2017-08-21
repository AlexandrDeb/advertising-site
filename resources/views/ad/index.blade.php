@extends('app')

@section('content')

    <div>
        {!! link_to_route('ad.create', 'new') !!}
    </div>

    @foreach($ads as $ad)
        <article>
            <h2>{!! $ad->title !!}</h2>

            <p>
                {!! $ad->description !!}
            </p>
            <p>
                {!! $ad->author_name !!}
            </p>
            <p>
                published: {{$ad->created_at_datetime}}
            </p>
        </article>
    @endforeach
@stop
