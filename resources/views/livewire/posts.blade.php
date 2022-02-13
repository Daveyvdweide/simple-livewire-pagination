<div>
    <table class="table table-sm">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Text</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->text }}</td>
                    </th>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="float-right">
        {{ $posts->links() }}
    </div>
</div>
