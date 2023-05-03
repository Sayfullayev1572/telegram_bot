<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Compiler</title>
     <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
     <style>
          .button{
               padding: 5px 2px;
               border-radius: 7px;
               color: #fff;
               background-color: aqua;
               font-size: larger;
               
          }
          .button:hover{
               background-color: chartreuse;
               transition: 0.5;
          }
     </style>
</head>
<body>

     <textarea name="code" id="editor" cols="100" rows="20" placeholder="php code yozamiz"></textarea> <br/> 
     <button id="run" class="button">
          Natija
     </button>

     <h2>
          Natija chiqishi👇:
     </h2>

     <textarea id="result" style="color: #00FF00;" cols="100" rows="20">

     </textarea>

     <script>
          // JQUERY CODE
          $("#run").on("click", function(){

               $.ajax({
                    type: 'POST',
                    url: 'compiler.php',
                    data : {
                         code : $("#editor").val(),
                    },
                    success: function(resultData){
                         $("#result").text(resultData)
                    },
               });

          });
     </script>
</body>
</html>