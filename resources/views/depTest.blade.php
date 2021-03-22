<html>
<head></head>
<body>
    <form action="saveDep" method="POST">
    @csrf
        <input type="text" name="name">
        <button type="submit">save</button>
    </form>
</body>
</html>