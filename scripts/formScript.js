

function submitForm() 

{
	//gets user's data
	var name = document.getElementById('name').value;
	var emai  = document.getElementById('email').value;
	var loc  = document.getElementById('location').value;
	var supp  = document.getElementById('supplies').value;
	var msg   = document.getElementById('message').value;

	
	//form validation
	if (name =="", emai=="", loc="", supp=="", msg=="")
		{
			alert("All fields must be filled out before submission");
			return false;
		}
		
	
	//displays user's inpuut
	document.write("Thank you "+name+ " you will be contacted soon! Be safe and always watch your back! "+"<p><a href='index.html'>Click here to return to home page</a></p>");
	

}