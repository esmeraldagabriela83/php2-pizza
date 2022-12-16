console.log("!!! helloo from myPHPform.js");




//JavaScript Client-side Form Validation
//https://www.youtube.com/watch?v=rsd4FNGTRBw

const form = document.getElementById('form');
const username = document.getElementById('username');

const email = document.getElementById('email');

const password = document.getElementById('password');

const password2 = document.getElementById('password2');

const comment = document.getElementById('comment');

const phoneUser = document.getElementById('user-phone');

const pizzaType = document.getElementById("pizzaType");

const deliveryTime= document.getElementById("deliveryTime");

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function checkInputs() {

	//get the values from the inputs
	// trim to remove the whitespaces
	const usernameValue = username.value.trim();
	console.log("usernameValue is : " , usernameValue);
	const emailValue = email.value.trim();
	console.log("emailValue is : " , emailValue);
	const passwordValue = password.value.trim();
	console.log("passwordValue is : " , passwordValue);
	const password2Value = password2.value.trim();
	console.log("passwor2dValue is : " , password2Value);

	const commentValue = comment.value.trim();
	console.log("your comment value is : " , commentValue);

///phone problem
  const phoneUserValue = phoneUser.value.trim();
  console.log("your phone number value is : " , phoneUserValue);
  ///phone problem

	const pizzaTypeValue = pizzaType.value;
	console.log("///pizzaTypeValue is : " , pizzaTypeValue);

	const deliveryTimeValue = deliveryTime.value;
	console.log("///deliveryTimeValue is : " , deliveryTimeValue);


  //////////////////////////////////


  function setErrorFor(input, message) {

    // event.preventDefault();

  	var formControl = input.parentElement;
  	var small = formControl.querySelector('small');
		// console.log(input);
  	//add error class
  	formControl.className = 'form-control error';
  	//add error message inside small
  	small.innerText = message;
  }

  function setSuccessFor(input) {

  	var formControl = input.parentElement;
  	//add sucess class
  	formControl.className = 'form-control success';
  }

  function isEmail(email) {
  	return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
  }

  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  function setErrorForTextarea(textarea, message) {

  	  // event.preventDefault();

  	var formControl = textarea.parentElement;
  	var small = formControl.querySelector('.form-control small');
  	formControl.className = 'form-control error';
  	small.innerText = message;
  }

  function setSuccessForTextarea(textarea) {

  	var formControl = textarea.parentElement;
  	formControl.className = 'form-control success';
  }




  ////////////////////////////

//show error //add error class
	if(usernameValue === '') {
		setErrorFor(username, 'Username cannot be blank');
	} else {
		//add sucess class
		setSuccessFor(username);
	}

	if(emailValue === '') {
		setErrorFor(email, 'Email cannot be blank');
	} else if (!isEmail(emailValue)) {
		setErrorFor(email, 'Not a valid email');
	} else {
		setSuccessFor(email);
	}

	if(passwordValue === '') {
		setErrorFor(password, 'Password cannot be blank');
	} else {
		setSuccessFor(password);
	}

	if(password2Value === '') {
		setErrorFor(password2, 'Password2 cannot be blank');
	} else if(passwordValue !== password2Value) {
		setErrorFor(password2, 'Passwords does not match');
	} else{
		setSuccessFor(password2);
	}

	//show error //add error class
		if(commentValue === '') {
			setErrorForTextarea(comment, 'Comment cannot be blank');
		} else {
			//add sucess class
			setSuccessForTextarea(comment);
		}


///phone problem
		if(phoneUserValue === '') {
			setErrorFor(phoneUser, 'Phone number cannot be blank');
		} else {
			//add sucess class
			setSuccessFor(phoneUser);
		}
///phone problem


}


	checkInputs();



//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
