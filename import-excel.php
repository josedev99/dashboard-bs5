<!DOCTYPE html>
<html lang="en">

<?php
    include_once "./header.php";

?>

<body>
	<div class="wrapper">
		<?php include_once "./sidebar.php" ?>

		<div class="main">
			<?php include_once "./menu.php" ?>

			<main class="content">
				<div class="container-fluid p-0">

					<h1 class="h3 mb-3"><strong>Import excel</strong></h1>
                    <div class="card">
                        <div class="card-body">
                            <form id="form-import-csv" method="POST" enctype="multipart/form-data">
                                <input type="file" name="csv">
                                <button type="submit">Import</button>
                            </form>
                        </div>

                        <div class="card-footer">
                        <table class="table">
                            <thead>
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Correo</th>
                                <th scope="col">Celular</th>
                                </tr>
                            </thead>
                            <tbody id="datatable-rows">
                                
                            </tbody>
                            </table>
                        </div>
                    </div>
				</div>
			</main>

			<?php include_once "./footer.php"; ?>
		</div>
	</div>

	<script src="js/app.js"></script>
    <script src="js/axios.js"></script>
    <script>
        var axios = require('axios').default;
    </script>
    <script src="js/show_csv.js"></script>

</body>

</html>