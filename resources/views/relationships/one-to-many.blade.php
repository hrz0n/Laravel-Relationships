
<h2>Access the User Models from our Posts Model</h2>

<table>

    <thead>
        <th>No</th>
        <th>Title</th>
        <th>Description</th>
        <th>Posted By</th>
        
    </thead>
    <tbody>
        @foreach ($posts as $index => $post)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->description }}</td>
                <td>{{ $post->user->username }}</td>
            </tr>
        @endforeach
    </tbody>
</table>


<hr>



<h2>Access the Post Models from our user Model</h2>

<table>

    <thead>
        <th>No</th>
        <th>Username</th>
        <th>Post ID</th>
        <th>Post Count</th>
        
    </thead>
    <tbody>
        @foreach ($users as $index => $user)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $user->username }}</td>
                <td>

                    @foreach ($user->post as $post)
                        {{$post->id . ","}}
                    @endforeach

                </td>
                <td>{{$user->post->count()}}</td>
            </tr>
        @endforeach
    </tbody>
</table>







