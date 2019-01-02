
@extends('layouts.layout')

@section('content')

    <h1 class="title">Create a New Project</h1>

    <form method="post" action="/projects">
        @csrf

        <div class="field">
            <label class="label" for"title">Project Title</label>
            <div class="control">
                <input required
                       type="text"
                       class="input {{ $errors->has('title') ? 'is-danger' : '' }}"
                       name="title"
                       value="{{ old('title') }}">
            </div>
        </div>

        <div class="field">
            <label class="label" for"description">Project Description</label>

            <div class="control">
                <textarea required
                          name="description"
                          class="input {{ $errors->has('description') ? 'is-danger' : '' }}">
                    {{ old('description') }}
                </textarea>
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Create Project</button>
            </div>
        </div>

        @include('\includes.errors')

    </form>

@endsection
