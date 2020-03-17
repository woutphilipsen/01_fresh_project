@extends ('layout')

@section ('head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.css">
@endsection

@section ('content')
    <div id="wrapper">
        <div class="container" id="page">
            <h1 class="heading has-text-weight-bold is-size-4">Edit Article</h1>
        
            <form action="/articles/{{ $article->id }}" method="POST">
                @csrf
                @method('PUT')

                <div class="field">
                    <label class="label" for="title">Title</label>

                    <div class="control">
                        <input 
                            class="input" 
                            type="text" 
                            name="title" 
                            id="title" 
                            value=" {{ $article->title }}"
                        >
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="excerpt">Excerpt</label>

                    <div class="control">
                        <textarea 
                            class="textarea" 
                            name="excerpt" 
                            id="excerpt"
                        >{{ $article->excerpt }}</textarea>
                    </div>
                </div>

                <div class="field">
                    <label for="body" class="label">Body</label>

                    <div class="control">
                        <textarea 
                            class="textarea" 
                            name="body" 
                            id="body"
                        >{{ $article->body }}</textarea>
                    </div>
                </div>

                <div class="field is-grouped">
                    <div class="control">
                        <button class="button is-link" type="submit">Submit</button>
                    </div>
                </div>

            </form>

        </div>
    </div>
@endsection