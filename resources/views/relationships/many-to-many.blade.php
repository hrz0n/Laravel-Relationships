
<h2>Access the Usergroup from our User Model</h2>

<table>

    <thead>
        <th>No</th>
        <th>Username</th>
        <th>Email</th>
        <th>Group</th>
        
    </thead>
    <tbody>
        @foreach ($users as $index => $user)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $user->username }}</td>
                <td>{{ $user->email }}</td>
                <td>

                    @foreach ($user->group as $group)
                        {{ $group->group_name ."," }}
                    @endforeach

                </td>
            </tr>
        @endforeach
    </tbody>
</table>


<hr>

<h2>Access the User Model from our Usergroup Model</h2>

<table>

    <thead>
        <th>No</th>
        <th>Group name</th>
        <th>User Count</th>
        
    </thead>
    <tbody>
        @foreach ($groups as $index => $group)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $group->group_name }}</td>
                <td>{{ $group->user->count() }}</td>
            </tr>
        @endforeach
    </tbody>
</table>