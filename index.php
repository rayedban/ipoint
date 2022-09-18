
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>iPoint</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- IonIcons -->
  <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

 <!-- iCheck for checkboxes and radio inputs -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/icheck-bootstrap/3.0.1/icheck-bootstrap.min.css" integrity="sha512-8vq2g5nHE062j3xor4XxPeZiPjmRDh6wlufQlfC6pdQ/9urJkU07NM0tEREeymP++NczacJ/Q59ul+/K2eYvcg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body >
    <div class="container">
      <h1>WEB SOCKET SAMPLE   </h1>  
        <input type="text" id="txtVal" class="form-control" />
        <br/>
        <button type="button" class="btn btn-primary" id="btnSend" > SEND </button>
    </div>


<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="../dist/js/adminlte.js"></script>
<script>

    const ws = new WebSocket("ws://localhost:8082");

    ws.addEventListener("open", () =>{
        console.log("We are connected!");


        ws.send("Hey, how's it going?");
    });


    ws.addEventListener("message", ({ data }) =>{
        console.log(data); 
    });


        $(document).on('click', '#btnSend', function () {
            var value = $('#txtVal').val();
            //alert(values);
            sendMsg(value);
            $('#txtVal').val("");

        });

      function sendMsg(value){
        ws.send(value);
      }  
</script>
  
 </body>
</html>
