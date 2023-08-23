<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <title>All Tasks</title>
</head>
<body>
  <div class="container mt-4">
    <h2 class="text-center mb-4">All Tasks</h2>
    <ul class="list-group">
      <?php include 'retrieve_tasks.php'; ?>
    </ul>
    <a class="btn btn-primary mt-3" href="index.html">Back to Add Tasks</a>
  </div>
</body>
</html>
