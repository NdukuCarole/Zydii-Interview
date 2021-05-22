function vuvuzela(){
    var a = parseInt(document.querySelector("#value1").value);
    var b = parseInt(document.querySelector("#value2").value);
    var op =document.querySelector("#operator").value
    ;
    var calculate;


    if (op== "add") {
        calculate = a + b;
    }
     else if (op == "subtract") {
          calculate = a-b;
        }

        else if (op == "multiply") {
            calculate = a*b;
          }

          else if (op == "divide") {
            calculate = a/b;
          }

          else if (op =="")

          document.querySelector("#result").innerHTML = calculate;
        }