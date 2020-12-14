<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.min.css">

<style>
	*{
		padding: 0;
		marker:0;


	}
	select{
		border:2px solid black; 
	}
	select[type=text]:focus {
		 width: 250px;
	}
	input[type=text]:focus {
  width: 250px;
}
</style>

</head>
<body>



<section >
        <div >
            <h3 class="text-center text-white" >CAR BOOKING</h3>
        </div>
          <div class="w-25 m-auto">
          
           <form action="insert.php" method="post" >
             


        <div align="center">
   			<label>Select Brand</label>
           	<div align="center" >
		        <select name="brand"  autocomplete="off" required="Select Brand" style="width:300px; padding:6px; border-radius:5px">
				    <option value="ferrari">Ferrari</option>
    				<option value="bugatti">Bugatti</option>
    				<option value="lamborghini">Lamborghini</option>
    				<option value="audi">Audi</option>
    				<option value="verna">Verna</option>
    				<option value="pagani">Pagani</option>
  	    		</select>
  			</div>
       	</div>

            

               

		<div align="center">
   			<label>Select Modal</label>
           	<div align="center" >
		        <select name="modal"  autocomplete="off" required="Select Modal" style="width:300px; padding:6px; border-radius:5px">
				    <option value="2020">2020</option>
    				<option value="2019">2019</option>
    				<option value="2018">2018</option>
    				<option value="2017">2017</option>
  	    		</select>
  			</div>
       	</div>



              
             
   
          
       	<div align="center">
   			<label>Select Variant</label>
           	<div align="center" >
		        <select name="variant"  autocomplete="off" required="Select Variant" style="width:300px; padding:6px; border-radius:5px">
				    <option value="green">Green</option>
    				<option value="black">Black</option>
    				<option value="red">Red</option>
    				<option value="yellow">Yellow</option>
    				<option value="pink">Pink</option>
    				<option value="blue">Blue</option>

  	    		</select>
  			</div>
       	</div>


   
             
             
    <div align="center">
        <label>Email Id</label> <br>
       <input type="text" name="email" required="Email Id" autocomplete="off" style="width:300px; padding:5px; border-radius:4px;">
    </div>
            
              
    <div align="center">
        <label> Mobile </label><br>
        <input type="text" name="mobile" required="Mobile" autocomplete="off" style="width:300px; padding:5px; border-radius:4px;">
    </div>
             
              <br><div align="center">
               <button type="submit" name="submit" class="btn btn-success">Submit</button>
               </div>
            </form>
          </div>  

         
</section>
</body>
</html>