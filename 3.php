<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Test 3</title>
</head>

<body>
  <script>
    function faktorial(n) {
      let a = 1;
      let i = 1;

      while (i <= n) {
        a *= i;
        i++;
      }
      return a;
    }

    function pascal_function(angka) {
      for (let i = 0; i < angka; i++) {
        for (let j = 0; j <= i; j++) {
          document.write(faktorial(i) / (faktorial(j) * faktorial(i - j)) + ' ');
        }
        document.write('<br>');
      }
    }
    pascal_function(7);
  </script>
</body>

</html>