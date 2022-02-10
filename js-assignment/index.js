
    var m=0;
    
    function addelement(element) 
    {

        let val = document.getElementById("demo").value;

        if (val.length < 20) 
        {
            if (val == 0 && val.length == 1) 
            {
                document.getElementById("demo").value = element;
            }
            else 
            {
                document.getElementById("demo").value = val + element;

            }


        }

    }

  function textcolor1(){
    document.getElementById("demo").style.color ="green";
            
  }
    
  function textcolor2(){
    document.getElementById("demo").style.color ="pink";
            
  }
  function bgcolor1(){
    document.getElementById("demo").style.backgroundColor="skyblue";
            
  }

  function bgcolor2(){
    document.getElementById("demo").style.backgroundColor="grey";
            
  }
//ROW NUMBER 1 DEG AND F-E LOGIC
function radian_to_deg(){

    let result= document.getElementById("demo").value;
    document.getElementById("demo").value=result*(180/Math.PI);

}

function _exponential(){

    let result = document.getElementById("demo").value;
    document.getElementById("demo").value=Number.parseFloat(result).toExponential(3);

}
 //ROW NUMBER 2
 function mplus(){
    
    let result=document.getElementById('demo').value;
    if(m==0){
     m=result;
    }
   else{
 
     m=eval(m+"+"+result);
   }
 
     }
     function mminus(){
     
     let result=document.getElementById('demo').value;
     m=m-result;
 
      }
      function mclear(){
     
      m=0;
 
      }
      function mrecall(){
         document.getElementById('demo').value=m;
     
   
     }
     function mstore(){
      m=document.getElementById('demo').value;
     
   
     }
   



// ROW NUMBER 3 TRIGNOMETRY AND FUNCTION LOGIC 
function sin() {
    let val = document.getElementById("demo").value;

    document.getElementById("demo").value = Math.sin((Math.PI * val) / 180);

}

function cos() {
    let val = document.getElementById("demo").value;

    document.getElementById("demo").value = Math.cos((Math.PI * val) / 180);

}

function tan() {
    let val = document.getElementById("demo").value;

    document.getElementById("demo").value = Math.tan((Math.PI * val) / 180);

}

function cot() {
    let val = document.getElementById("demo").value;

    document.getElementById("demo").value = 1 / Math.tan((Math.PI * val) / 180);

}

function sec() {
    let val = document.getElementById("demo").value;
    document.getElementById("demo").value = Math.cos((Math.PI * val) / 180);

}

function cosec() {
    let val = document.getElementById("demo").value;

    document.getElementById("demo").value = 1 / Math.sin((Math.PI * val) / 180);

}
    
//ROW NUMBER 4                              

function two_carret_x() {
    var result = document.getElementById('demo').value;
    document.getElementById('demo').value = Math.pow(2, result);

}

function e() 
        {
            document.getElementById('demo').value = Math.E;
        }
        
function fPI() 
{

    let val = document.getElementById("demo").value;
    if (val == 0) {
        document.getElementById("demo").value = Math.PI;

    }
   else{ document.getElementById("demo").value = val + Math.PI;
}

}


function clearscr() 
{
    document.getElementById("demo").value = "0";
}


function fx() {

    let val = document.getElementById("demo").value;

    if (val.length > 0) {
        val = val.substring(0, val.length - 1);
        document.getElementById("demo").value = val;
    }
    if (val == "") {
        document.getElementById("demo").value = "0";

    }
}

//       ROW NUMBER 5                          
function one_by_x() 
{
    var result = document.getElementById('demo').value;
    document.getElementById('demo').value = 1 / result;
}


function square() {
    var result = document.getElementById('demo').value;

    document.getElementById('demo').value = result * result;
}


function modulo() {
    let val = document.getElementById("demo").value;
    document.getElementById("demo").value = val + "%";

}
function exp1() 
{
    var ans = document.getElementById('demo').value;
    document.getElementById('demo').value = Math.pow(Math.E, ans);
}
function abs() 
 {
     var result = document.getElementById("demo").value;
     document.getElementById('demo').value = Math.abs(result);
 }



//ROW NUMBER 6  

function sqrt() {
    var result = document.getElementById('demo').value;
    document.getElementById('demo').value = Math.sqrt(result);
}



function fact() 
 {
     var ans = document.getElementById('demo').value;
     var factorial = 1;
     for (var i = 1; i <= ans; i++) 
     {
         factorial *= i;
     }
     document.getElementById('demo').value = factorial;
 }


 function divide() {
    let val = document.getElementById("demo").value;
    document.getElementById("demo").value = val + "/";

}

// ROW NUMBER 7


 
 function multiply() {
     let val = document.getElementById("demo").value;
     document.getElementById("demo").value = val + "*";

 }


 function carret() {
     let val = document.getElementById("demo").value;

     document.getElementById("demo").value = val + "**";

 }


//ROW NUMBER 8   

function tencarret()
     {

        let result = document.getElementById("demo").value;
        document.getElementById('demo').value = Math.pow(10, result);

    }


function minus() {
    let val = document.getElementById("demo").value;
    document.getElementById("demo").value = val + "-";

}

// ROW NUMBER 9

function log() {
    var result = document.getElementById('demo').value;
    document.getElementById('demo').value = Math.log10(result);
}
function plus() {
    let val = document.getElementById("demo").value;
    document.getElementById("demo").value = val + "+";

}


// ROW NUMBER 10 
function ln() {
    var result = document.getElementById('demo').value;
    document.getElementById('demo').value = Math.log(result);
}

function plus_min() 
{
    var result = document.getElementById('demo').value;
    if (result.substring(0, 1) == "-") 
    {
        result = result.substring(1, result.length);
    }
    else 
    {
        result = "-" + result;
    }
    document.getElementById('demo').value = result;
}

function fdot() 
    {

        let val = document.getElementById("demo").value;
        document.getElementById("demo").value = val + ".";
    }

    function evaluate1() 
    { 
        let result1 = document.getElementById("demo").value;
    try{
      var result = eval(document.getElementById("demo").value);

      }
    catch{

        document.getElementById("demo").value = "Error";
        }
       if (result === undefined)
        {
            document.getElementById("demo").value = "Error";
        }
        else 
        {
            document.getElementById("demo").value = result;
        }
    }
    
   

