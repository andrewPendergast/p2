<!DOCTYPE html>
<html lang="en">
<head>
	<title>Add Pet Store</title>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="My online portfolio that illustrates skills acquired while working through various project requirements.">
	<meta name="author" content="Andrew Pendergast">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Include FontAwesome CSS to use feedback icons provided by FontAwesome -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	
	<!-- Bootstrap for responsive, mobile-first design. -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	
	<!-- Note: following file is for form validation. -->
	<link rel="stylesheet" href="css/formValidation.min.css"/>
	
	<!-- Custom styling. -->
	<link rel="stylesheet" href="../global/css/style.css" type="text/css">
	<link rel="stylesheet" href="../global/css/media_queries.css" type="text/css">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<?php include_once("../global/php/nav_global.php"); ?>
	<div class="jumbotron">
		<div class="container">
			<h1>Project 2</h1>
			<h2>Add Pet Store</h2>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<form id="add_store_form" method="post" class="form-horizontal" action="add_petstore_process.php">
					<div class="form-group">
						<label class="col-sm-3 control-label">Name:</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" name="name" maxlength="30" placeholder="Name (30 characters)"/>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">Street:</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" name="street" maxlength="30" placeholder="Street (30 characters)"/>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">City:</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" name="city" maxlength="30" placeholder="City (30 characters)"/>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">State:</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" name="state" maxlength="2" placeholder="State (2 characters)"/>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">Zip:</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" name="zip" maxlength="9" placeholder="Zip (9 digits)"/>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">Phone:</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" name="phone" maxlength="10" placeholder="Phone (10 digits)"/>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">Email:</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" name="email" maxlength="100" placeholder="Email (abc@123.com"/>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">URL:</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" name="url" maxlength="100" placeholder="www.123.com"/>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">Sales:</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" name="sales" maxlength="11" placeholder="Sales (11 digits, including decimal)"/>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">Note:</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" name="note" maxlength="250" placeholder="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc non urna posuere, lacinia turpis eu, luctus nunc. Mauris blandit tempus enim, vel dignissim sem suscipit ac. Vivamus vel tellus consequat, sollicitudin purus consequat, mattis odio. Duis in metus et sapien semper lobortis quis et odio. "/>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-9 col-sm-offset-3">
							<button type="submit" class="btn btn-primary" name="signup" value="Sign up">Submit</button>
						</div>
					</div>
				</form>
			</div>
		</div>
		<?php include_once "../global/php/footer.php"; ?>
	</div>

	
	<!-- Bootstrap JavaScript
	================================================== -->
	<!-- Placed at end of document so pages load faster -->
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<!-- Turn off client-side validation, in order to test server-side validation.  -->
	<!--<script type="text/javascript" src="js/formValidation/formValidation.min.js"></script>-->
	<!-- Note the following bootstrap.min.js file is for form validation, different from the one above. -->
	<script type="text/javascript" src="js/formValidation/bootstrap.min.js"></script>

	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<script src="js/ie10-viewport-bug-workaround.js"></script>

<script type="text/javascript">
	$(document).ready(function() {
		
		$('#add_store_form').formValidation({
			message: 'This value is not valid',
			icon: {
				valid: 'fa fa-check',
				invalid: 'fa fa-times',
				validating: 'fa fa-refresh'
			},
			fields: {
				name: {
					validators: {
						notEmpty: {
							message: 'Name is required'
						},
						stringLength: {
							min: 1,
							max: 30,
							message: 'Name must be less than 30 characters long'
						},
						regexp: {
							//alphanumeric, hyphens, underscores, and spaces
							//regexp: /^[a-zA-Z0-9\-_\s]+$/,
							//similar to: (though, \w supports other Unicode characters)
							regexp: /^[\w\-\s]+$/,
							message: 'Name can only contain letters, numbers, hyphens, and underscore'
						}	
					}
				},
				email: {
					validators: {
						notEmpty: {
							message: 'Email address is required'
						},
						emailAddress: {
							message: 'Must include valid email address'
						},
						stringLength: {
							min: 1,
							max: 100,
							message: 'Email no more than 100 characters'
						}
					}
				},
				street: {
					validators: {
						notEmpty: {
							message: 'Street address is required'
						},
						regexp: {
							regexp: /^[a-zA-Z0-9\s]+$/,
							message: 'Street address can only contain letters or numbers'
						},
						stringLength: {
							min: 1,
							max: 30,
							message: 'Street no more than 30 characters'
						}
					}
				},
				city: {
					validators: {
						notEmpty: {
							message: 'City is required'
						},
						regexp: {
							regexp: /^[a-zA-Z\s]+$/,
							message: 'City can only contain letters'
						},
						stringLength: {
							min: 1,
							max: 30,
							message: 'City no more than 30 characters'
						}
					}
				},
				state: {
					validators: {
						notEmpty: {
							message: 'State is required'
						},
						regexp: {
							regexp: /^[a-zA-Z]+$/,
							message: 'State must be 2 characters'
						},
						stringLength: {
							min: 2,
							max: 2,
							message: 'State must be 2 characters'
						}
					}
				},
				zip: {
					validators: {
						notEmpty: {
							message: 'Zip is required, only numbers'
						},
						regexp: {
							regexp: /^[0-9]+$/,
							message: 'Zip can only contain numbers'
						},
						stringLength: {
							min: 5,
							max: 9,
							message: 'Zip must be 5, and no more than 9 digits'
						}
					}
				},
				phone: {
					validators: {
						notEmpty: {
							message: 'Phone is required, including area code, only numbers'
						},
						regexp: {
							regexp: /^[0-9]+$/,
							message: 'Phone can only contain numbers'
						},
						stringLength: {
							min: 10,
							max: 10,
							message: 'Phone must be 10 digits'
						}
					}
				},
				email: {
					validators: {
						notEmpty: {
							message: 'Email address is required'
						},
						emailAddress: {
							message: 'Must include valid email address'
						},
						stringLength: {
							min: 1,
							max: 100,
							message: 'Email no more than 100 characters'
						}
					}
				},
				url: {
					validators: {
						notEmpty: {
							message: 'URL is required'
						},
						stringLength: {
							min: 1,
							max: 100,
							message: 'URL no more than 100 characters'
						}
					}
				},
				sales: {
					validators: {
						notEmpty: {
							message: 'YTD sales is required'
						},
						regexp: {
							regexp: /^[0-9\.]+$/,
							message: 'Must include valid email address'
						},
						stringLength: {
							min: 1,
							max: 11,
							message: 'YTD sales can be no more than 10 digits, including decimal point'
						}
					}
				}
			}
		});
	});
</script>

</body>
</html>