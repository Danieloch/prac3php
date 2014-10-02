        <head>
        <title>Formulario</title>
        </head>
         <body >
	<div>
	       <form action="factura.php" method="GET	">
		<fieldset>
		<h1>productos</h1>
		<tr>
	       <th>Cantidad</th>
  	       <th>Productos</th>
 	       <th>Precio</th>
	       </tr>
	       <br/>
	       <br/>
		    
         <input type="text" size="5"   name="cantidad1" />
		    		    
		        <input type="text" size="10"   name="producto1" />
		    
		        <input type="text" size="10"   name="precio1" /> 
	       <br/>
	       <br/>    
		        <input type="text" size="10"   name="cantidad2" />
		    		    
		        <input type="text" size="10"   name="producto2" />
		    
		        <input type="text" size="10"   name="precio2" />    
	       <br/>
	       <br/>    
     		        <input type="text" size="5"   name="cantidad3" />
		    		    
		        <input type="text" size="10"   name="producto3" />
		    
		        <input type="text" size="10"   name="precio3" /> 
		</fieldset>
			<input type="submit" name="enviar consulta" value="enviar" />
	       <input type="reset" name="Limpiar"           value="Limpiar"/>
	</div>
        </body>
</html>