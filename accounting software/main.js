

function opc(e)
{
  if(dg)
  {
    var opc_r = e.parentNode.parentNode.rowIndex;
    
    if('' == dg.rows[opc_r].cells[8].childNodes[0].value || '.' == dg.rows[opc_r].cells[8].childNodes[0].value)
        var ee = 0;
      else
        var ee = parseFloat(dg.rows[opc_r].cells[8].childNodes[0].value);
      if('' == dg.rows[opc_r].cells[9].childNodes[0].value || '.' == dg.rows[opc_r].cells[9].childNodes[0].value)
        var pp = 0;
      else
        var pp = parseFloat(dg.rows[opc_r].cells[9].childNodes[0].value);
    

      b = ee-pp;
      
      if(b>0){
    	  dg.rows[opc_r].cells[10].innerHTML = b;
    	  dg.rows[opc_r].cells[11].innerHTML = 0.00;
    	  dg.rows[i].cells[10].innerHTML =  b;
    	  dg.rows[i].cells[11].innerHTML =  0.00;
      }
      else{
    	  dg.rows[opc_r].cells[10].innerHTML = 0.00;
    	  dg.rows[opc_r].cells[11].innerHTML = -1*b;
    	  dg.rows[i].cells[10].innerHTML = 0.00;
    	  dg.rows[i].cells[11].innerHTML =  -1*b;
      }
  }
}






function add_line_text(t)
{
  if(!dg)
    return 0;
  n++;

  var x = dg.insertRow(-1);

  if(n%2!=0)
    x.bgColor="#F0F0F0";

  var y = x.insertCell(0);
    y.align = "center";
    y.innerHTML = "<a href=\"JavaScript:void(0);\" onClick=\"add_line(this);\">"+t+"</a>";
  y = x.insertCell(1);
    y.innerHTML = "&nbsp;";
  y = x.insertCell(2);
    y.innerHTML = "&nbsp;";
  y = x.insertCell(3);
    y.innerHTML = "&nbsp;";
  y = x.insertCell(4);
    y.innerHTML = "&nbsp;";
  y = x.insertCell(5);
    y.innerHTML = "&nbsp;";
  y = x.insertCell(6);
    y.innerHTML = "&nbsp;";
  y = x.insertCell(7);
    y.innerHTML = "&nbsp;";
    y = x.insertCell(8);
    y.innerHTML = "&nbsp;";
    y = x.insertCell(9);
    y.innerHTML = "&nbsp;";
    y = x.insertCell(10);
    y.innerHTML = "&nbsp;";
    y = x.insertCell(11);
    y.innerHTML = "&nbsp;";
    y = x.insertCell(12);
    y.innerHTML = "&nbsp;";
  addl++;
  n++;
}



function add_line(e)
{
  if(!dg)
    return 0;
  var dgir = dg.rows[e.parentNode.parentNode.rowIndex-1]; 
  n++;
  var x = dg.insertRow(e.parentNode.parentNode.rowIndex);
  if(n%2==0)
  {
    e.parentNode.parentNode.bgColor="#D5D5D5";
    x.bgColor="#E5E5E5";
  }
  else
  {
    e.parentNode.parentNode.bgColor="#D5D5D5";
    x.bgColor="#D5D5D5";
  }
var y = x.insertCell(0);
    y.noWrap="nowrap";
    if(dgir.cells[0].childNodes[0].tagName && dgir.cells[0].childNodes[0].tagName.toLowerCase() == "input")
    y.innerHTML = dgir.cells[0].childNodes[0].value;
    else
    y.innerHTML = dgir.cells[0].innerHTML;
    y = x.insertCell(1);
    y.innerHTML = ' ';
    y = x.insertCell(2);
    y.innerHTML = ' ';
    y = x.insertCell(3);
    y.innerHTML = ' ';
    y = x.insertCell(4);
    y.innerHTML = ' ';
    y = x.insertCell(5);
 /*   var div = document.createElement("input");
    div.setAttribute('class','');
    div.innerHTML = "Replace with description.";*/
    y.innerHTML = '<input type="text" name="product_id[]" class="pid" id="jk"/>';
    y = x.insertCell(6);
    y.innerHTML = dgir.cells[6].innerHTML;
    y = x.insertCell(7);
    y.innerHTML = dgir.cells[7].innerHTML;
    y = x.insertCell(8);
   
    y.innerHTML = dgir.cells[8].innerHTML;
    y = x.insertCell(9);
    y.innerHTML = dgir.cells[9].innerHTML;
    y = x.insertCell(10);
    y.innerHTML = dgir.cells[10].innerHTML;
    y = x.insertCell(10);
    y.innerHTML = 0.00;
    y.noWrap="nowrap";
    y = x.insertCell(11);
    y.innerHTML = 0.00;
    y.noWrap="nowrap";
  addl++;
 
}
