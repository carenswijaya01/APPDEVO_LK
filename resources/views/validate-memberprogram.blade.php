<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Data Pendaftar Kegiatan</h1>
    <table border="1">
        <tr>
            <th>No</th>
            <th>User_id</th>
            <th>Kegiatan</th>
            <th>Alasan</th>
            <th>File</th>
            <th>Status</th>
            <th>Update status</th>
        </tr>
        @foreach ($members as $member)
        <form action="/validate-memberprogram" method="post">
            @csrf
            <tr>
                <td>{{ $member->member_program }}</td>
                <td>{{ $member->user_id }}</td>
                <td>{{ $member->program_id }}</td>
                <td>{{ $member->reason }}</td>
                <td>
                    <a href="storage/memberprogram-files/{{ $member->file }}" target="blank">{{ $member->file }}</a>
                </td>
                <td>{{ $member->status }}</td>
                <td>
                    <input type="hidden" name="member_program" value="{{ $member->member_program }}">
                    <input type="submit" name="status" value="ditolak">
                    <input type="submit" name="status" value="diterima">
                </td>
            </tr>
        </form>        
        @endforeach
    </table> 
</body>
</html>