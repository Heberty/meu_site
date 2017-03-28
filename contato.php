<!-- Contato -->

<?php include 'head.php' ?>

<?php include 'header.php' ?>
<div id="internas" class="contato">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="title-inter">
					<h1>Contato</h1>
				</div>
				<div class="text-contact">
					<div class="col-sm-12 col-md-6">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</div>
				</div>
				<div class="contact-form">
					<div class="col-sm-12 col-md-6">
						<form action="" method="post">
							<div class="">
								<label for="nome">Nome:</label>
								<input type="text" id="nome" name="usuario_nome">
							</div>
							<div class="">
								<label for="email">Email:</label>
								<input type="text" id="email" name="usuario-email">
							</div>
							<div class="">
								<label for="telefone">Telefone:</label>
								<input type="tel" id="telefone" name="usuario-numero">
							</div>
							<div class="">
								<label for="arquivo">Anexo:</label>
								<input type="file" id="arquivo" name="usuario-numero">
							</div>
							<div class="">
								<label for="msg">Mensagem</label>
								<textarea id="msg" name="usuario-msg"></textarea>
							</div>
							<div>
								<button class="btn btn-default" type="submite">Envie agora sua mensagem</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include 'footer.php' ?>
