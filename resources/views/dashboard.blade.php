@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Your Listings <span class="float-right"><a href="{{ route('listings.create') }}" class="btn btn-success btn-xs">Add Listing</a></span></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="panel-body">
                        @include('inc.messages')
                        @if(count($listings))
                            <table class="table table-stripped table-responsive">
                                <tr>
                                    <th>Company Name</th>
                                    <th>Address</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                </tr>
                                <tr>
                                    @foreach($listings as $listing)
                                        <tr>
                                            <td>{{ $listing->name }}</td>
                                            <td>{{ $listing->address }}</td>
                                            <td>{{ $listing->email }}</td>
                                            <td>{{ $listing->phone }}</td>
                                            <td><a class="btn btn-outline-info btn-xs" href="/listings/{{ $listing->id }}/edit">Edit</a></td>
                                            <td>
                                                {!! Form::open(['action'=>['ListingsController@destroy', $listing->id], 'method' => 'POST', 'class'=>'float-left', 'onsubmit'=>'return confirm("Are you sure?")']) !!}
                                                    {!! Form::hidden('_method', 'DELETE') !!}
                                                    <div class="form-group">
                                                        {!! Form::submit('Delete', ['class'=>'btn btn-outline-danger btn-xs']) !!}
                                                    </div>
                                                {!! Form::close() !!}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tr>
                            </table>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
