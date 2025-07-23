
@extends('layouts.app')

@section('content')
  <h1>Create New Task </h1>
    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input
            type="text"
            class="form-control @error('title') is-invalid @enderror"
            id="title"
            name="title"
    <div class="mb-3">
       <label for="description" class="form-label">Description (Optional) </label>
       <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="3">{{ old('description') }}</textarea>
       @error('description')
           <div class="invalid-feedback">{{ $message }}</div>
       @enderror
    </div>            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>    
    <div class="mb-3">
       <label for="description" class="form-label">Description (Optional) </label>
       <textarea class="form-control" id="description" name="description" rows="3"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Create Task..</button>
    <a href="{{ route('tasks.index')}}" class="btn btn-secondary">Cancel</a>
  </form>
    
@endsection