
<h3>index.html</h3><hr/>
<pre class="prettyprint">
&lt;!DOCTYPE html>
&lt;html>
   &lt;head>
      &lt;title>&lt;/title>
   &lt;/head>
   &lt;body>
      &lt;table id="calc">
         &lt;tr>
            &lt;td>Add&lt;/td>
            &lt;td>&lt;input type="text" onkeyup="getRowIndex(this)" />&lt;/td>
            &lt;td>&lt;input type="text" onkeyup="getRowIndex(this)"/>&lt;/td>
            &lt;td>&lt;/td>
         &lt;/tr>
         &lt;tr>
            &lt;td>Multiply&lt;/td>
            &lt;td>&lt;input type="text"  onkeyup="getRowIndex(this)" />&lt;/td>
            &lt;td>&lt;input type="text"  onkeyup="getRowIndex(this)"/>&lt;/td>
            &lt;td>&lt;/td>
         &lt;/tr>
         &lt;tr>
            &lt;td>Subtract&lt;/td>
            &lt;td>&lt;input type="text"  onkeyup="getRowIndex(this)" />&lt;/td>
            &lt;td>&lt;input type="text"  onkeyup="getRowIndex(this)"/>&lt;/td>
            &lt;td>&lt;/td>
         &lt;/tr>
         &lt;tr>
            &lt;td>Division&lt;/td>
            &lt;td>&lt;input type="text"  onkeyup="getRowIndex(this)" />&lt;/td>
            &lt;td>&lt;input type="text"  onkeyup="getRowIndex(this)"/>&lt;/td>
            &lt;td>&lt;/td>
         &lt;/tr>
      &lt;/table>
      &lt;script type="text/javascript">
         var calc=document.getElementById('calc');
               if(calc){
         function getRowIndex(val){
                   var rowI=val.parentNode.parentNode.rowIndex;
                   if(rowI==0){
                      if('' == calc.rows[rowI].cells[1].childNodes[0].value || '.' == calc.rows[rowI].cells[1].childNodes[0].value)
                           var add1 = 0;
                      else
                           var add1 = parseFloat(calc.rows[rowI].cells[1].childNodes[0].value);
                      if('' == calc.rows[rowI].cells[2].childNodes[0].value || '.' == calc.rows[rowI].cells[2].childNodes[0].value)
                           var add2 = 0;
                      else
                           var add2 = parseFloat(calc.rows[rowI].cells[2].childNodes[0].value);
                      
                      var add=add1+add2;
         
                      calc.rows[rowI].cells[3].innerHTML=add;
         
                   
                   }else if(rowI==1){
                       if('' == calc.rows[rowI].cells[1].childNodes[0].value || '.' == calc.rows[rowI].cells[1].childNodes[0].value)
                           var mul1 = 0;
                      else
                           var mul1 = parseFloat(calc.rows[rowI].cells[1].childNodes[0].value);
                      if('' == calc.rows[rowI].cells[2].childNodes[0].value || '.' == calc.rows[rowI].cells[2].childNodes[0].value)
                           var mul2 = 0;
                      else
                           var mul2 = parseFloat(calc.rows[rowI].cells[2].childNodes[0].value);
                      
                      var mul=mul1*mul2;
         
                      calc.rows[rowI].cells[3].innerHTML=mul;
                   }else if(rowI==2){
         
                    if('' == calc.rows[rowI].cells[1].childNodes[0].value || '.' == calc.rows[rowI].cells[1].childNodes[0].value)
                           var sub1 = 0;
                      else
                           var sub1 = parseFloat(calc.rows[rowI].cells[1].childNodes[0].value);
                      if('' == calc.rows[rowI].cells[2].childNodes[0].value || '.' == calc.rows[rowI].cells[2].childNodes[0].value)
                           var sub2 = 0;
                      else
                           var sub2 = parseFloat(calc.rows[rowI].cells[2].childNodes[0].value);
                      
                      var sub=sub1-sub2;
         
                      calc.rows[rowI].cells[3].innerHTML=sub;
         
                   }else if(rowI==3){
         
                    if('' == calc.rows[rowI].cells[1].childNodes[0].value || '.' == calc.rows[rowI].cells[1].childNodes[0].value)
                           var div1 = 0;
                      else
                           var div1 = parseFloat(calc.rows[rowI].cells[1].childNodes[0].value);
                      if('' == calc.rows[rowI].cells[2].childNodes[0].value || '.' == calc.rows[rowI].cells[2].childNodes[0].value)
                           var div2 = 0;
                      else
                           var div2 = parseFloat(calc.rows[rowI].cells[2].childNodes[0].value);
                      
                      var div=div1/div2;
         
                      calc.rows[rowI].cells[3].innerHTML=div;
         
         
                   }
         }
         }
      &lt;/script>
   &lt;/body>
&lt;/html>

</pre>




<div>Output:</div><br/>
<table id="calc">
        <tr><td>Add</td><td><input type="text" onkeyup="getRowIndex(this)" /></td><td><input type="text" onkeyup="getRowIndex(this)"/></td><td></td></tr>

        <tr><td>Multiply</td><td><input type="text"  onkeyup="getRowIndex(this)" /></td><td><input type="text"  onkeyup="getRowIndex(this)"/></td><td></td></tr>

        <tr><td>Subtract</td><td><input type="text"  onkeyup="getRowIndex(this)" /></td><td><input type="text"  onkeyup="getRowIndex(this)"/></td><td></td></tr>

        <tr><td>Division</td><td><input type="text"  onkeyup="getRowIndex(this)" /></td><td><input type="text"  onkeyup="getRowIndex(this)"/></td><td></td></tr>
     </table>
<script type="text/javascript">
		var calc=document.getElementById('calc');
        if(calc){
		function getRowIndex(val){
            var rowI=val.parentNode.parentNode.rowIndex;
            if(rowI==0){
               if('' == calc.rows[rowI].cells[1].childNodes[0].value || '.' == calc.rows[rowI].cells[1].childNodes[0].value)
               	   var add1 = 0;
               else
               	   var add1 = parseFloat(calc.rows[rowI].cells[1].childNodes[0].value);
               if('' == calc.rows[rowI].cells[2].childNodes[0].value || '.' == calc.rows[rowI].cells[2].childNodes[0].value)
               	   var add2 = 0;
               else
               	   var add2 = parseFloat(calc.rows[rowI].cells[2].childNodes[0].value);
               
               var add=add1+add2;

               calc.rows[rowI].cells[3].innerHTML=add;

            
            }else if(rowI==1){
                if('' == calc.rows[rowI].cells[1].childNodes[0].value || '.' == calc.rows[rowI].cells[1].childNodes[0].value)
               	   var mul1 = 0;
               else
               	   var mul1 = parseFloat(calc.rows[rowI].cells[1].childNodes[0].value);
               if('' == calc.rows[rowI].cells[2].childNodes[0].value || '.' == calc.rows[rowI].cells[2].childNodes[0].value)
               	   var mul2 = 0;
               else
               	   var mul2 = parseFloat(calc.rows[rowI].cells[2].childNodes[0].value);
               
               var mul=mul1*mul2;

               calc.rows[rowI].cells[3].innerHTML=mul;
            }else if(rowI==2){

            	if('' == calc.rows[rowI].cells[1].childNodes[0].value || '.' == calc.rows[rowI].cells[1].childNodes[0].value)
               	   var sub1 = 0;
               else
               	   var sub1 = parseFloat(calc.rows[rowI].cells[1].childNodes[0].value);
               if('' == calc.rows[rowI].cells[2].childNodes[0].value || '.' == calc.rows[rowI].cells[2].childNodes[0].value)
               	   var sub2 = 0;
               else
               	   var sub2 = parseFloat(calc.rows[rowI].cells[2].childNodes[0].value);
               
               var sub=sub1-sub2;

               calc.rows[rowI].cells[3].innerHTML=sub;

            }else if(rowI==3){

            	if('' == calc.rows[rowI].cells[1].childNodes[0].value || '.' == calc.rows[rowI].cells[1].childNodes[0].value)
               	   var div1 = 0;
               else
               	   var div1 = parseFloat(calc.rows[rowI].cells[1].childNodes[0].value);
               if('' == calc.rows[rowI].cells[2].childNodes[0].value || '.' == calc.rows[rowI].cells[2].childNodes[0].value)
               	   var div2 = 0;
               else
               	   var div2 = parseFloat(calc.rows[rowI].cells[2].childNodes[0].value);
               
               var div=div1/div2;

               calc.rows[rowI].cells[3].innerHTML=div;


            }
		}
		}
	</script>

