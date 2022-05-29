
<h2>Access UserSetting Models from our User Model</h2>

<table>

    <thead>
        <th>No</th>
        <th>Username</th>
        <th>Email</th>
        <th>Theme</th>
        <th>Language</th>
        <th>Auto Login</th>
    </thead>
    <tbody>
        @foreach ($users as $index => $user)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $user->username }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->setting->theme?? '' }}</td>
                <td>{{ $user->setting->language?? '' }}</td>
                <td>{{ $user->setting->autologin?? '' }}</td>
            </tr>
        @endforeach
    </tbody>
</table>


<hr>



<h2>Access User Models from our UserSettings Model</h2>

<table>

    <thead>
        <th>No</th>
        <th>Theme</th>
        <th>Language</th>
        <th>Auto Login</th>
        <th>Username</th>
        <th>Email</th>
    </thead>
    <tbody>
        @foreach ($userSettings as $index => $setting)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $setting->theme }}</td>
                <td>{{ $setting->language }}</td>
                <td>{{ $setting->autologin }}</td>
                <td>{{ $setting->user->username }}</td>
                <td>{{ $setting->user->email }}</td>
            </tr>
        @endforeach
    </tbody>
</table>





