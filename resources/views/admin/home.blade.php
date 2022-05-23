@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body d-flex justify-content-center">
                    <a href="{{ route('admin.posts.create') }}" class="btn btn-dark mb-4 me-2">Crea un nuovo post</a>
                    <a href="{{ route('admin.posts.index') }}" class="btn btn-primary mb-4 me-2">Vedi tutti i post</a>
                    <a href="{{ route('admin.categories.index') }}" class="btn btn-primary mb-4 me-2">Vedi tutte le categorie</a>
                    <a href="{{ route('admin.posts.myindex') }}" class="btn btn-info mb-4">I miei post</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
