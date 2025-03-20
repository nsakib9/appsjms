<!DOCTYPE html>
<html>
<head>
    <title>{{ $app->name }}</title>
</head>
<body>
    <h2>{{ $app->name }}</h2>
    <p>{{ $app->description }}</p>

    <form action="{{ route('app.generate', $app->slug) }}" method="POST">
        @csrf
        <label>Name:</label>
        <input type="text" name="name" required><br>

        <label>Email:</label>
        <input type="email" name="email" required><br>

        <label>Job Title:</label>
        <input type="text" name="job_title" required><br>

        <label>Company Name:</label>
        <input type="text" name="company_name" required><br>

        <label>Skills:</label>
        <textarea name="skills" required></textarea><br>

        <button type="submit">Generate</button>
    </form>
</body>
</html>
