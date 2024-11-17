<!DOCTYPE html>
<html>
<head>
    <title>Create Cars</title>
</head>
<body>
    <h1>Create Cars</h1>
    <form action="{{ route('cars.store') }}" method="POST">
        @csrf
        <label for="carName">Car Name:</label>
        <input type="text" id="carName" name="carName" required><br><br>
        
        <label for="carModel">Car Model:</label>
        <input type="text" id="carModel" name="carModel" required><br><br>
        
        <input type="submit" value="Submit">
    </form>
</body>
</html>
