 <?php
  // $fn = isset($_GET['fn']) ? htmlspecialchars($_GET['fn']) : 'Guest';
  // $ln = isset($_GET['ln']) ? htmlspecialchars($_GET['ln']) : '';
  // $email = isset($_GET['email']) ? htmlspecialchars($_GET['email']) : '';
  $fn = htmlspecialchars($_GET['fn']);
  $ln = htmlspecialchars($_GET['ln']);
  $email = htmlspecialchars($_GET['email']);


  // if (isset($_GET['fn'])) {
  if ($fn && $ln && $email) {
    echo "
      <script>
        let p = document.createElement('p');
        p.id='form-response-modal';
        p.classList.add('form-response-modal');
        p.textContent = 'Thank you $fn we will get back to you at $email';
        document.querySelector('#sec-6').appendChild(p);

        p.addEventListener('click',(e)=>{
          e.target.classList.remove('form-response-modal');
          e.target.style.display = 'none';
          // console.log(window.location)
          window.history.replaceState(null, '', window.location.pathname);
        })
      </script>";
  }
  ?>