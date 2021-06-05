<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Test 2</title>
</head>

<body>

  <script>
    const matrix = [
      [1, 2, 3],
      [1, 2, 3],
      [1, 2, 3]
    ];

    const transpose = matrix => {
      let [row] = matrix
      return row.map((value, column) => matrix.map(row => row[column]))
    }

    console.log(transpose(matrix));
  </script>
</body>

</html>