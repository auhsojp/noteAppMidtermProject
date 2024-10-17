<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Note</title>
    <link rel="stylesheet" href="{{ asset('css/create.css') }}">
</head>
<body>
    <h1 class="sticky-title">Create New Note</h1>

    <div class="note-create-container">
        <form method="post" action="{{ route('save') }}" class="create-form">
            @csrf  
            @method('post')
            <div class="form-group">
                <label for="title" class="form-label">Title (Optional)</label>
                <input type="text" name="title" id="title" class="form-input" placeholder="Title (Optional)">
            </div> 
            <div class="form-group">
                <label for="content" class="form-label">Content</label>
                <textarea name="content" id="content" class="form-input" rows="5" placeholder="Your note content"></textarea>
            </div>
            <div class="form-group">
                <input type="submit" value="Save Your Note" class="button">
            </div>
        </form>
    </div>
    <div class="back-button-container">
        <a href="{{ route('index') }}" class="button back-button">Back to Notes</a>
    </div>
</body>
</html>
