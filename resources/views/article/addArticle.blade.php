@extends('layouts.mainFrame')
@section('title', 'Add Article')
@section('content')
    <form method="post" action="{{ route('articles.store') }}">
        @csrf
        <label for="article-name">Name</label>
        <input id="article-name" name="name">
        <br/>
        <label for="article-description">Description</label>
        <input id="article-description" name="description">
        <br/>
        <label for="article-short-description">Short description</label>
        <input id="article-short-description" name="short_description">
        <br/>
        <label for="article_slug">Slug</label>
        <input id="article_slug" name="article_slug">
        <br/>
        <label for="article-tags">Tags</label>
        <select name="article-tags[]" multiple required>
            <option disabled>Choose tags</option>
            @foreach($tags as $tag)
                <option value="{{ $tag->id }}">{{ $tag->name }}</option>
            @endforeach
        </select>
        {{--<input id="search" type="text" class="form-control" placeholder="Search" />
        <div id="article-tags">
            <input type="hidden" name="product_category[]">
        </div>
        <div style="width: 60%; height: 400px; border: 3px darkslategrey solid;" id="related-tags">

        </div>--}}
        <button type="submit">Add Article</button>
    </form>

    {{--<script type="text/javascript">
        var path = "{{ route('tagAutocomplete') }}";

        $("#search").autocomplete({

            source: function(request, response) {

                $.ajax({
                    url: path,
                    type: 'GET',
                    dataType: "json",
                    data: {
                        search: request.term
                    },
                    success: function(json) {
                        response($.map(json, function(item) {
                            return {
                                label: item.name,
                                value: item.id
                            }
                        }));
                    }
                });
            },
            select: function(item) {
                $('#article-tags').val('');
                console.log(item);
                $('#article-tags').append('<div id="' + item['id'] + '"><i class="fa fa-minus-circle"></i> ' + item['name'] + '<input type="hidden" name="article_tags[]" value="' + item['id'] + '" /></div>');
            }
        });

    </script>--}}
@endsection
