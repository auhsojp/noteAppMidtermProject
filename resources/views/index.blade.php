<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>
<body>
    <h1 class= "title"> My Notes  </h1>
    <div>
        @if(session()->has('success'))
            <div class="success-message">
                {{session('success')}}
            </div>
        @endif
    </div>

    <div class="notes-container">
        @foreach ($notes as $note)
            <a href="{{ route('notes.view', ['note' => $note->id]) }}" class="note-link">
                <div class="note-card">
                    <p>{{ $note->content }}</p>
                    <h2>{{ $note->title ?? 'Untitled' }}</h2>
                </div>
            </a>
        @endforeach
    </div>
    <span class="add-note">
        <button>
            <a href="{{route('create')}}">CREATE NEW NOTES</a>
        </button>
    </span>
</body>
</html>