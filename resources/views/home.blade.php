@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

    <div class="col-md-12">
         <div class="panel panel-default">
                <div class="panel-heading">My profile</div>

                <div class="panel-body">
                   @foreach($user_details as $result)

                    <h4>Name:</h4>{{ $result->name }}
                    <h4>Email:</h4>{{ $result->email }}

                   @endforeach
                </div>
            </div>


    </div>

        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">Home</div>

                <div class="panel-body">
                   @foreach($poems as $poem)

                    <h2>{{ $poem->title }}</h2>

                    {!! html_entity_decode($poem->body) !!}

                    <br>

                    <h5>Authore: {{ $poem->author }}</h5>
                    <h5>Published At:{{ $poem->published_at }}</h5>

                   @endforeach
                </div>
            </div>
        </div>

        <div class="col-md-4">

            <div class="panel panel-default">
                <div class="panel-heading">Trending Now</div>

                <div class="panel-body">
                    <div>
                    <h4>One</h4>
                    </div>

                </div>


            </div>

            <div class="panel panel-default">
                <div class="panel-heading">Suggestions</div>

                <div class="panel-body">
                    <div>
                    @foreach($details as $detail)
                    
                        <h4>{{ $detail->name }}</h4>

                        <form action="followers/id" method="get">
                            <input type="hidden" name="f_id" value="{{ $detail->id }}">
                            <input type="submit"  class="btn btn-primary" value="Follow">
                        </form>

                    @endforeach
                    </div>

                </div>


            </div>

        </div>
    </div>
</div>
@endsection
