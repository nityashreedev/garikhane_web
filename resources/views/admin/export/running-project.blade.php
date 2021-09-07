<table>
    <thead>
        <th>क्र.सं</th>
        <th>परियोजनाको नाम</th>
        <th>ऋणको प्रकार</th>
        <th>ऋण लिएको मिति</th>
        <th>परियोजनाको प्रकार</th>
        <th>रकम</th>
        <th>ऋण रकम</th>
        <th>परियोजनाको ठेगाना</th>
    </thead>
    <tbody>
        @foreach ($projects as $project)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $project->project_name }}</td>
            <td>{{ $project->loan_type}}</td>
            <td>{{ $project->loan_date }}</td>
            <td>{{ $project->project_type }}</td>
            <td>{{ $project->amount }}</td>
            <td>{{ $project->loan_amout }}</td>
            <td>{{ $project->location }}</td>
        </tr>
        @endforeach
    </tbody>
</table>