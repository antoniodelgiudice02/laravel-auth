@extends('layouts.app')

@section('content')

<div class="container">
    <table class='table'>
        <thead>
            <tr>
                <th>ID</th>
                <th>Titolo</th>
                <th>Contenuto</th>
                <th>Slug</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            
            @forelse($projects as $project)
                <tr>
                    <td>{{ $project->id }}</td>
                    <td>{{ $project->title }}</td>
                    <td>{{ $project->content }}</td>
                    <td>{{ $project->slug }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan='100%'>
                        no projects
                    </td>
                </tr>
            @endforelse

            
        </tbody>
    </table>
</div>

@endsection