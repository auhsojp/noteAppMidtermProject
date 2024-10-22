<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Note</title>
    <link rel="stylesheet" href="{{ asset('css/edit.css') }}">
</head>
<body>
    <h1 class="sticky-title">Edit Note</h1>

    <div class="note-edit-container">
        <form method="post" action="{{route('notes.update', ['note' => $note])}}" class="edit-form">
            @csrf
            @method('put')

            <div class="form-group">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" id="title" class="form-input" placeholder="Title (Optional)" value="{{$note->title}}">
            </div>
            <div class="form-group">
                <label for="content" class="form-label">Content</label>
                <textarea name="content" id="content" class="form-input" rows="5" placeholder="Your note content">{{$note->content}}</textarea>
            </div>
            <div class="form-group">
                <input type="submit" value="Update Your Note" class="button">
            </div>
        </form>
    </div>
    <div class="back-button-container">
        <a href="{{ route('notes.index') }}" class="button back-button">Back to Notes</a>
    </div>
</body>
</html>
