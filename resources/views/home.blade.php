@extends('components.master')

@section('title')
    <h1>Home Page</h1>
@endsection

@section('content')
    <div class="container">
        <h1>Sample BLog Site</h1>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header"> Contents</div>
                    @foreach ($data as $post)
                        <div class="card-body">
                            <h3 class="text-primary font-weight-bold">{{ $post->name  }}</h3>
                            <p>{{ $post->description }}</p>
                            <button class="btn btn-primary">View</button>
                            <hr>
                        </div>
                    @endforeach


                </div>
            </div>
        </div>
    </div>

@endsection
