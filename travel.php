<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
    rel="stylesheet">
  <title>Travel</title>
</head>

<body>
  <?php include_once("./includes/header.php"); ?>

  <button onclick="getNames()">get names</button>
  <ul id="names-list"></ul>




  <script>
    //1.aborts subsequent fetch request.
    const controller = new AbortController();
    const signal = controller.signal;

    function getNames() {
      fetch('https://jsonplaceholder.typicode.com/users', {
          signal
        })
        .then(response => response.json()) // Parse the response as JSON
        .then(data => {

          let ul = document.querySelector('#names-list');
          data.forEach((users) => {
            ul.innerHTML += `<li>${users.name}</li>`;
          })

          //2. to abort the fetch later
          controller.abort();

        }).catch(error => console.error('Fetch Error:', error));

    }
  </script>



</body>

</html>