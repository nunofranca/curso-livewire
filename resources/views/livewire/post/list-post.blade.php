<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Título</th>
        <th scope="col">Subtítulo</th>
        <th scope="col">Criação</th>
    </tr>
    </thead>
    <tbody>
    @foreach($posts as $post)
    <tr>
        <th scope="row">{{$post->id}}</th>
        <td>{{$post->title}}</td>
        <td>{{$post->subtitle}}</td>
        <td>{{$post->created_at->format('d/m/Y')}}</td>
    </tr>
    @endforeach

    </tbody>
</table>


