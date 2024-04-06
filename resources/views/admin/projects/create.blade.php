@extends('layouts.app')

@section('content')

<section>
    <div class="container">
        
        <h1>Nuovo Progetto</h1>
        <form action="{{ route('admin.projects.store')}}" method="POST" class='row'>
        @csrf
        <div class="mb-3 col-3">
            <label for="title" class="form-label">Title</label>
            <div class="input-group">
                <input type="text" class="form-control" id="title" aria-describedby="basic-addon3 basic-addon4" name='title'>
            </div>
        </div>
        <div class="mb-3 col-3">
            <label for="content" class="form-label">Content</label>
            <div class="input-group">
                <textarea type="text" class="form-control" id="content" aria-describedby="basic-addon3 basic-addon4" name='content'></textarea>
            </div>
        </div>

        <div class="col-3">
            <button class="btn btn-primary">save</button>
        </div>


        </form>
    </div>
  </section>

@endsection