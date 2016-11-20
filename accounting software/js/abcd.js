<!--
var r   = -1;

window.onload = function(){
  window.parent.document.title = window.document.title;
}

window.onerror = function(sMessage, sUrl, sLine){
  //alert("Error!\n" + sMessage + "\nURL:" + sUrl + "\nLine Number:" + sLine);
  return true;
}

function ovc(e)
{
  if(dg)
  {
    for(i=e.parentNode.parentNode.rowIndex+1; i<dg.rows.length-1; i++)
    {
      dg.rows[i].cells[0].innerHTML = e.value;
    }
  }
}

function opc(e)
{
  if(dg)
  {
    var opc_r = e.parentNode.parentNode.rowIndex;
    if(1 == opc_r)
      var b = 0;
    else
      var b = parseFloat(dg.rows[opc_r-1].cells[5].innerHTML.replace(/,/, ''));

    e.value = e.value.replace(/,/, '');
    e.value = e.value.replace(/[-]+/, '-');
    e.value = e.value.replace(/[^-|0-9]+/, '.');
    if(!e.onblur)
      e.onblur = new Function('this.value = parseFloat(this.value);if(isNaN(this.value)) this.value = "";');
    //e.value = parseFloat(e.value);
    //if(isNaN(e.value)) e.value = '';

    if('' == dg.rows[opc_r].cells[3].childNodes[0].value || '.' == dg.rows[opc_r].cells[3].childNodes[0].value)
      var ee = 0;
    else
      var ee = parseFloat(dg.rows[opc_r].cells[3].childNodes[0].value);
    if('' == dg.rows[opc_r].cells[4].childNodes[0].value || '.' == dg.rows[opc_r].cells[4].childNodes[0].value)
      var pp = 0;
    else
      var pp = parseFloat(dg.rows[opc_r].cells[4].childNodes[0].value);
    b = b+ee-pp;
    dg.rows[opc_r].cells[5].innerHTML = FormatNumber(b, 2);
    for(i=opc_r+1; i<dg.rows.length-1; i++)
    {
      if(dg.rows[i].cells[3].childNodes[0].tagName && dg.rows[i].cells[3].childNodes[0].tagName.toLowerCase() == "input")
      {
        ee = parseFloat(dg.rows[i].cells[3].childNodes[0].value);
      }
      else if('-' == dg.rows[i].cells[3].innerHTML.replace(/,/, ''))
        ee = 0;
      else
        ee = parseFloat(dg.rows[i].cells[3].innerHTML.replace(/,/, ''));

      if(dg.rows[i].cells[4].childNodes[0].tagName && dg.rows[i].cells[4].childNodes[0].tagName.toLowerCase() == "input")
        pp = parseFloat(dg.rows[i].cells[4].childNodes[0].value);
      else if('-' == dg.rows[i].cells[4].innerHTML.replace(/,/, ''))
        pp = 0;
      else
        pp = parseFloat(dg.rows[i].cells[4].innerHTML.replace(/,/, ''));

      if(isNaN(ee)) ee=0;
      if(isNaN(pp)) pp=0;

      b = b+ee-pp;
      dg.rows[i].cells[5].innerHTML = FormatNumber(b, 2);
    }
  }
}

function FormatNumber(num, after)
{
  var after = (after==null)?2:after;
  after = (after<0)?2:after;
  if(after>5)
  {
   after = 5;
  }
  var left = "";
  var right = "";
    
  var lesszero = (num<0);
  var num = Math.abs(num).toString();

  if (num.indexOf(".", 0) < 0)
  {
   left = num;
   for(var i=1;i<=after;i++) right += "0";
   right = right.length?"."+right:"";
  }
  else
  {
   if(after>0)
   {
    var arr = num.split(".");
    left = arr[0];
    right = arr[1];

    var rl = right.length;
    var ll = left.length;

    for(var i=1;i<=after-rl+1;i++) right += "0";

    var fullstr = left + right.substr(0, after) + "." + right.substr(after, 1);

    var newnum = Math.round(fullstr).toString();
    var newl = newnum.length;
    for(var i=1;i<=after+ll-newl;i++) newnum = "0" + newnum;

    ll = newnum.length - after;

    left = newnum.substr(0, ll);
    right = "." + newnum.substr(ll, after);
   }
   else
   {
    left = Math.round(num);
    right = "";
   }
  }

  var newleft = "";
  var l = left;
  while(l.length>3)
  {
   newleft = "," + l.substr(l.length - 3, 3) + newleft;
   l = l.substr(0, l.length - 3);
  }

  newleft = l + newleft;

  return ((lesszero?"-":"") + newleft + right);
}

function show_ab(e)
{
  if(-1 == e.value)
  {
    e.parentNode.childNodes[1].style.display = "inline";
  }
  else
  {
    e.parentNode.childNodes[1].style.display = "none";
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

  addl++;
  n++;
}

function add_line(e)
{
  if(!dg)
    return 0;

  if(addl > 9)
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
    e.parentNode.parentNode.bgColor="#E5E5E5";
    x.bgColor="#D5D5D5";
  }

  var y = x.insertCell(0);
  y.noWrap="nowrap";
    if(dgir.cells[0].childNodes[0].tagName && dgir.cells[0].childNodes[0].tagName.toLowerCase() == "input")
      y.innerHTML = dgir.cells[0].childNodes[0].value;
    else
      y.innerHTML = dgir.cells[0].innerHTML;
  y = x.insertCell(1);
    y.innerHTML = dgir.cells[1].innerHTML;
  y = x.insertCell(2);
    y.innerHTML = dgir.cells[2].innerHTML;
  y = x.insertCell(3);
    y.innerHTML = dgir.cells[3].innerHTML;
  y = x.insertCell(4);
    y.innerHTML = dgir.cells[4].innerHTML;
  y = x.insertCell(5);
  y.align = "right";
  y.noWrap="nowrap";
    y.innerHTML = dgir.cells[5].innerHTML;
  y = x.insertCell(6);
  y.noWrap="nowrap";
    y.innerHTML = dgir.cells[6].innerHTML;
  addl++;
  if(addl > 9)
  {
    dg.deleteRow(-1);
  }
}
//-->