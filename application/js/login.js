
//forma primaria que sobreescribe si ya existe $("#login-btn").click function(event)
$("#login-btn").on('click',function(event){
	event.preventDefault();   //obliga al elemento que no ejecute las acciones por default
	let login=$("#login").val();   //let es parte de la nueva definicion de javascript ES6, babel framework
	let password=$("#password").val();
	$.ajax({
		type:'POST',  // o method:'post'
		url: <?php  ?>
	});
});