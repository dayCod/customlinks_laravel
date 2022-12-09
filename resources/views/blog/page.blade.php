@extends('blog.index')

@section('content')
    <div class="container">
        <div class="row mt-3 align-items-stretch">
            @forelse($blog as $v)
            <div class="col-12 col-md-4 mb-4">
                <div class="card h-100">
                    <h5 class="card-header fw-bold">{{ $v->title }}</h5>
                    <div class="card-body d-flex flex-column justify-content-between">
                        <div>
                            <h5 class="card-title">{{ $v->route->name }}</h5>
                            <p class="card-text" style="text-align: justify">{{ $v->content }}</p>
                        </div>
                        <div class="mt-3">
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>

            @empty
            <p class="text-center">Data Kosong!!</p>
            @endforelse
        </div>
    </div>
@endsection
