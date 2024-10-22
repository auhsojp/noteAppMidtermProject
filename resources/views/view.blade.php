<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Note</title>
    <link rel="stylesheet" href="{{ asset('css/view.css') }}"> 
</head>
<body>
    <div class="note-view-container">
        <h2 class="note-title">{{ $note->title ?? 'Untitled' }}</h2>
        <p class="note-content">{{ $note->content }}</p>

        <div class="note-actions">
            <a href="{{ route('notes.edit', ['note' => $note]) }}" class="button">Edit</a>
            <form method="post" action="{{ route('notes.delete', ['note' => $note]) }}" class="delete-form">
                @csrf
                @method('delete')
                <input type="submit" value="Delete" class="button delete-button">
            </form>
        </div>   
        
        <div class="back-button-container">
            <a href="{{ route('notes.index') }}" class="button back-button">Back to Notes</a>
        </div>
    </div>
</body>
</html>
