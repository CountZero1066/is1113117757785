<!DOCTYPE html>
<html>
    <head>
        <title>ebus1</title>
        <link rel="stylesheet" href="mystylesheet.css" type="text/css" />
     
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>
        <style>
           html,body{
                background-image: none !important;
                background-color: white;
            }
            header
		{
		top:0%;
		left:0%;
		width:100%;
		height:21%;
		position:absolute;
		background:black;
		opacity: 0.9;
		font-family:verdana;
		
		}
        </style>
    </head>
    <header>
		<div id = "Title">
       
		<h1 style="Color:#EEEEEE;">Welcome to the E-store </h1>
     
		</div>	
		
		   </header>
   
	<nav>
   
		<div id="menu">
			<ul>
					<li><a href="homepage.html">Home</a></li>
				<li><a href="cv_page.html">CV</a></li>
				<li><a href="Interests.html">Interests</a></li>
				
				
				<li><a href="ebus1.php">Ebusiness</a></li>
        
        <li><a href="Cloud.html">Cloud Computing</a></li>
         <li><a href="about.html">about</a></li>
         <li><a href="links.html">about</a></li>
			</ul>
		</div>
	</nav>
        
    <div class="ebuscontainer">
        <section id="ebusmain">
            
            <h2>Select a Product</h2>
            
            <br/>
            
            <form method="post" action="ebus2.php">
            
            <label for="salesforce">
            <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
            Salesforce @ $100
            </label>
            
            <br/>
            
            <label for="cloud9">
            <input type="radio" id="cloud9" name="product" onClick="disablebtnProceed()"/>
            Cloud 9 @ $200
            </label>
            
            <br/>
            
            <label for ="aws">
            <input type="radio" id="aws" name="product" onClick="disablebtnProceed()"/>
            Amazon Web @ $300
            </label>
            
            <br/>
            
            <label for ="gmail">
            <input type="radio" id="gmail" name="product" onClick="disablebtnProceed()" />
            Gmail @ $400
            </label>
            
            <br/>
            <br/>
            
            
            <label class="align" for="subtotal">
                Sub Total
             <input type="text" id="subtotal" name="subtotal" value="0.00" readonly/>
            </label>
            
            <br/>
             
             <label class="align" for="discount">
                Discount @ 5%
             <input type="text" id="discount" name="discount" value="0.00" readonly/>
            </label>     
                   
                
            <br/>
            
              <label class="align" for="vat">
                VAT @ 10%
             <input type="text" id="vat" name="vat" value="0.00" readonly/>
            </label>
            
            <br/>
            
            <label class="align" for="total">
                total
                <input type="text" id="total" name="total" value="0.00" readonly/>
            </label>
    
            <br/>
            
            <button type="submit" id="btnproceed" class="addcart" disabled>add to shopping cart</button>
            
            </form>
            
            <br/>
            <button class="calculate" onclick="calcSub()">Calculate Cost</button>
            
            <button class="clrchoice"><a href="ebus1.php">Clear Choice</a></button>
            
        </section>
        
    </div>
    
    </body>
</html>