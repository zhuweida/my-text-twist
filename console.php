<!DOCTYPE html>
<html>
<body
    â€œstyle="background-image:url(); background-repeat:repeat-y;"â€>
  
  
<style>
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
center{ color: #685206; font-family: 'Helvetica Neue', sans-serif; font-size: 60px; line-height: 60px;  text-align: center; text-justify: center;  }
p{ color: #685206; font-family: 'Helvetica Neue', sans-serif; font-size: 40px; line-height: 50px; margin: 0 0 50px; text-align: justify; text-justify: inter-word;  }

.button {
    width: 100%;
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 8px 2px;
    cursor: pointer;
}

.button2{
    width: 100%;
    background-color:  #008CBA; /* blue */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 8px 2px;
    cursor: pointer;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}



</style>


    
<center>Text Twist Game</center>
<p>rack:<span id="word"></span></p>  
<button id="But1" onclick="myFunction()" class="button2">generate new turn</button>

<P>your guess(please input capital letter):</P> 

<input type="text" name="guess" id="guess" value="">
<br>
<button id='check' onclick="check()" name="check" class="button">check</button>
<br>
<button id='clear' onclick="clear111()" name="clear" class="button2">clear</button>
<br>
<p><span id="answer"></span></p>

<br>
<br>
<br>
<br>

<p>All the other answers:</p>
<br>
<button id="But2" onclick="myFunction2()" class="button">generate</button>
<br>
<button id="clear2" onclick="clear2()" class="button2">clear</button>
<br>
<p><span id="all" name="all"></span></p>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>


<script>
var a;
var myrack;
var answer;
function clear111(){document.getElementById("guess").value="";}
function clear2(){document.getElementById("all").innerHTML="";}

function myFunction() {
      var xhttp;
      xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("word").innerHTML = this.responseText;
          a=this.responseText;//a is used to transfer the value
          }
  };
      xhttp.open("GET", "random.php", true);
      xhttp.send();   
  }
  

  function myFunction2() {
      myrack = document.getElementById("word").innerHTML;//b is myrack
      var xhttp2;
      xhttp2 = new XMLHttpRequest();
      xhttp2.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("all").innerHTML = this.responseText;
            //a is used to transfer the value
          }
  };

      xhttp2.open("GET", "database2.php?myrack="+myrack, true);
      xhttp2.send();   
  }
  
  


  
  function check(){
      myrack = document.getElementById("word").innerHTML;
      answer = document.getElementById("guess").value;
      var xhttp3;
      xhttp3 = new XMLHttpRequest();
      xhttp3.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
          document.getElementById("answer").innerHTML = this.responseText;
          //a is used to transfer the value
      }
  };

      xhttp3.open("GET", "database3.php?myrack="+myrack+"&answer="+answer, true);
      //xhttp3.open("GET", "database3.php?answer="+answer, true);
      xhttp3.send();  
    
    
    }
  
    
  





</script>








    
    
    
    
    
    
    
    
    
</html>