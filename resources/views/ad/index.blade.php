@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-md-offset-1">
                @if(Session::has('message'))
                    <div class="alert alert-success">{{Session::get('message')}}</div>
                @endif
            </div>
        </div>

        @foreach($ads as $ad)
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-md-offset-1">

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h2>{!! $ad->title !!}</h2>

                            </div>


                            <div class="panel-body">
                                <article>

                                    <p>
                                        {!! $ad->description !!}
                                    </p>
                                    <p>
                                        {!! $ad->author_name !!}
                                    </p>
                                    <p>
                                        published: {{$ad->created_at}}
                                    </p>
                                </article>
                                <div class="panel-heading">
                                    {!! Form::open(array('route' =>['ad.destroy', $ad->id], 'method' => 'DELETE')) !!}
                                    {!! link_to_route('ad.create', 'Create Ad', null, ['class'=>'btn btn-success']) !!}
                                    {!! link_to_route('ad.edit', 'Edit Ad',  $ad->id, ['class'=>'btn btn-primary']) !!}
                                    {!! Form::button('Delete',['class' => 'btn btn-danger', 'type' => 'submit']) !!}
                                    {!! Form::close() !!}
                                </div>
                            </div>


                        </div>

                    </div>

                </div>
            </div>

        @endforeach
        <div class="container">
            {{--    pagination--}}
            <?php echo $ads->render(); ?>
        </div>

@stop
