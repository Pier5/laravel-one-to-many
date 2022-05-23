@extends('layouts.admin')

@section('title', 'Index')

@section('content')
    <div class="container">
        @if (session('deleted'))
            <div class="alert alert-warning">{{ session('deleted') }}</div>
        @endif
        <div class="row">
            <div class="col">
                <table class="table table-dark table-hover">
                    <thead>
                        <tr>
                            <th class="text-center" scope="col">ID</th>
                            <th class="text-center" scope="col">Titolo</th>
                            <th class="text-center" scope="col">Slug</th>
                            <th class="text-center" scope="col">Data Creazione</th>
                            <th class="text-center" scope="col" colspan="5"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                            <tr data-id="{{ $post->slug }}">
                                <td class="text-center">{{ $post->id }}</td>
                                <td class="text-center">{{ $post->title }}</td>
                                <td class="text-center">{{ $post->slug }}</td>
                                <td class="text-center">{{ date('d/m/Y', strtotime($post->created_at)) }}</td>
                                <td>
                                    <a class="btn btn-primary" href="{{ route('admin.posts.show', $post->slug) }}">View</a>
                                </td>
                                <td>
                                    @if (Auth::user()->id === $post->user_id)
                                        <a class="btn btn-primary" href="{{ route('admin.posts.edit', $post->slug) }}">Edit</a>
                                    @endif
                                </td>
                                <td class="text-center">
                                    @if (Auth::user()->id === $post->user_id)
                                        <button class="btn btn-danger btn-delete">Delete</button>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="d-flex">
                    <a href="{{ route('admin.home') }}" class="btn btn-dark mb-4">Torna alla home</a>
                </div>
            </div>
        </div>

        {{ $posts->links() }}

        <section id="confirmation-overlay" class="overlay d-none">
            <div class="popup">
                <h1>Sei sicuro di voler eliminare?</h1>
                <div class="d-flex justify-content-center">
                    <button id="btn-no" class="btn btn-primary me-3">NO</button>
                    <form method="POST" data-base="{{ route('admin.posts.destroy', '*****') }}">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">SI</button>
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection