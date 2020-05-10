@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Listing</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="panel-body">
                            @include('inc.messages')
                            {!! Form::open(['action' => ['ListingsController@update', $listing->id], 'method'=>'POST']) !!}
                            <div class="form-group">
                                {!! Form::text('name', $listing->name, ['class' => 'form-control', 'placeholder' => 'Company name']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::text('website', $listing->website, ['class' => 'form-control', 'placeholder' => 'Company website']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::text('email', $listing->email, ['class' => 'form-control', 'placeholder' => 'Email Address']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::text('phone', $listing->phone, ['class' => 'form-control', 'placeholder' => 'Phone number']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::text('address', $listing->address, ['class' => 'form-control', 'placeholder' => 'Address']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::textarea('bio', $listing->bio, ['class' => 'form-control', 'placeholder' => 'Company Introduction']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::submit('Update', ['class'=>'btn btn-primary']) !!}
                            </div>
                                {!! Form::hidden('_method', 'PUT') !!}
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
