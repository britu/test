# CLASS

- class is to create one or more Object. Object is being created by class
- Class can be create by program logic to acheive different thing.
- Two main area with a class defination and object will have
	-	Instance Properties: what they have
		- name
		- age
		- Height



	- Instance Methods: what they do:  Action and their behaviour
		- Talk
		- run 
		- jump








	$(document).ready(function(){

$('#test').submit(function(event){
	event.preventDefault();

	var form = $(this);
	var first_name = $('#first_name').val();
	var last_name = $('#last_name').val();
	

	$.ajax({
		url: 'insert.php',
		data: {
			first_name : first_name,
			last_name: last_name
		}
	});


})


});

//when the form is submitted run a function
//property
//event
//lets get the data from form
//4 similar value or empty value successfully grab that data. We hijack tha form and do something ajax on it.

class Rectangle {
	//every class have constructure. Constructure is just a method run once during life object.
	//Setup your object. this behaiv like a normal method or function
	constructor(){
		console.log("this Rectangle is being created");
		this.width = 5;
		this.height= 3;
		this.color="blue";
	}
}
//is used to setup the actual object
let myRectangle1 = new Rectangle();


class Squre {
	constructor(_width, _height){
			console.log("hey this is a square");
			this.width= _width;
			this.height = _height;
			
	}
	
}

let square = new Squre( 5, 10); 