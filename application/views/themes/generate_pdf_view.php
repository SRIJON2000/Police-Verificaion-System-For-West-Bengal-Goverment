<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('layouts/header_view');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PDF_GENERATION</title>
	<link rel="stylesheet" href="<?php echo base_url();?>\application\views\themes\CSS\stylesheet1.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

</head>
<body>
	<div class="container">
		<table border="2" align="center" cellspacing="5" cellpadding="15" >

				<tr><th>
					LETTERS

				</th><th>
					OPERATIONS
				</th></tr><tr>
					<td>
						NON-DEFENCE LETTER
					</td><td>
						<a style="text-decoration: none;" href="<?php echo base_url()?>Home/non_defence_letter" class="btn text-light bg-secondary">PREVIEW</a>
					</td><td>
						<button class="btn text-light bg-primary" >PRINT</button>
					</td>
				</tr>
				<tr>
					<td>
						DEFENCE LETTER
					</td><td>
						<a style="text-decoration: none;" href="<?php echo base_url()?>Home/defence_letter" class="btn text-light bg-secondary">PREVIEW</a>
					</td><td>
						<button class="btn text-light bg-primary" >PRINT</button>
					</td>
				</tr>
				<tr>
					<td>
						SP DIB LETTER
					</td><td>
						<a style="text-decoration: none;" href="<?php echo base_url()?>Home/SP_DIB" class="btn text-light bg-secondary">PREVIEW</a>
					</td><td>
						<button class="btn text-light bg-primary" >PRINT</button>
					</td>
				</tr>
				<tr>
					<td>
						CP LETTER
					</td><td>
						<a style="text-decoration: none;" href="<?php echo base_url()?>Home/cp_letter" class="btn text-light bg-secondary">PREVIEW</a>
					</td><td>
						<button class="btn text-light bg-primary" >PRINT</button>
					</td>
				</tr>
				<tr>
					<td>
						EMPLOYER LETTER
					</td><td>
						<a style="text-decoration: none;" href="<?php echo base_url()?>Home/emp_letter" class="btn text-light bg-secondary">PREVIEW</a>
					</td><td>
						<button class="btn text-light bg-primary" >PRINT</button>
					</td>
				</tr>
				

		</table>


	</div>
</body>
</html>