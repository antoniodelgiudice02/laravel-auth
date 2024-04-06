@extends('layouts.app')

@section('content')

<div class="container">

    <div>
        <h1>Progetti</h1>
    </div>

    <a class='btn btn-success' href="{{ route('admin.projects.create')}}">Aggiungi Progetto</a>

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
                    <td>{{ $project->getContent(50) }}</td>
                    <td>{{ $project->slug }}</td>
                    <td>
                        <a class='btn btn-success' href="{{ route('admin.projects.show', $project)}}"><i class="fa-solid fa-eye"></i></a>
                        <a class='btn btn-success' href="{{ route('admin.projects.edit', $project)}}"><i class="fa-solid fa-pen-nib"></i></a>
                        <a class='btn btn-danger' href="{{ route('admin.projects.destroy', $project)}}"><i class="fa-solid fa-trash-can"></i></a>
                    </td>
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
    {{$projects->links()}}
</div>

@endsection

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection