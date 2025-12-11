<?php
//1.
$ch = curl_init();

//2.set cURL options
$api_url = "https://jsonplaceholder.typicode.com/users";
curl_setopt($ch, CURLOPT_URL, $api_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FORBID_REUSE, TRUE);

//3.execute curl request
$response = curl_exec($ch);

//4.check for curl errors
if (curl_errno($ch)) {
  echo 'cURL error ' . curl_error($ch);
}

//5.close the cURL session
// curl_close($ch) //deprecated

//6.process API response
if ($response) {
  // $data = json_decode($response);
  if ($response) {
    header('Content-Type: application/json');
    echo $response;
  } else {
    echo "failed" . $response;
  }
} else {
  echo " no response from api";
}


/* if ($response) {
  $data = json_decode($response);//converst a json encoded string into a php variable
  if ($data) {
    header('Content-Type: application/json');
    header("Location: http://localhost/php_projects/globetrot/index.php");
    foreach ($data as $value) {
      // echo "<p style=\"border:1px solid red\">$value->phone</p>";
      // echo "$value->phone";
      echo $data;
    }
    // echo $data[0]->name;
  } else {
    echo "failed" . $response;
  }
} else {
  echo " no response from api";
} */
