<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Test 1</title>
</head>

<body>

  <script>
    let saldoAwal = 3000000;
    let bungaPerBulan = 0.025;
    let bulan = 1;

    while (bulan <= 12) {
      document.write(`Bulan ke- ${bulan} = Rp. ${ saldoAwal += saldoAwal * 0.025 } <br>`);
      bulan++;
    }
  </script>
</body>

</html>