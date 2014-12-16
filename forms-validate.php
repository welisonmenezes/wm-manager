<?php require_once("elements/header.php"); ?>

	<div class="wmgrid-g">

		<div class="wmgrid wmgrid-1-2">

			<form action="#" method="get" class="form form-d">
				<div class="box-d">
					<div class="box-header">
						<h2>Basic form</h2>
					</div>
					<div class="box-body">

						<div class="row">
							<label>require</label>
							<input type="text" class="text required">
							<span class="msg-error"></span>
						</div>

						<div class="row">
							<label>email</label>
							<input type="text" class="text email">
							<span class="msg-error"></span>
						</div>

						<div class="row">
							<label>integer</label>
							<input type="text" class="text integer">
							<span class="msg-error"></span>
						</div>

						<div class="row">
							<label>digit</label>
							<input type="text" class="text digit">
							<span class="msg-error"></span>
						</div>

						<div class="row">
							<label>url</label>
							<input type="text" class="text url">
							<span class="msg-error"></span>
						</div>

						<div class="row">
							<label>minlength</label>
							<input type="text" class="text minlength" data-minlength="5">
							<span class="msg-error"></span>
						</div>

						<div class="row">
							<label>maxlength</label>
							<input type="text" class="text maxlength" data-maxlength="5">
							<span class="msg-error"></span>
						</div>

						<div class="row">
							<label>range</label>
							<input type="text" class="text rangelength" data-maxlength="5" data-minlength="3">
							<span class="msg-error"></span>
						</div>

						<div class="row">
							<label>equalTo</label>
							<input type="text" class="text equalTo" data-target="equalTarget">
						</div>

						<div class="row">
							<label>target</label>
							<input type="text" class="text equalTarget">
							<span class="msg-error"></span>
						</div>

						<div class="row">
							<label>date</label>
							<input type="text" class="text date">
							<span class="msg-error"></span>
						</div>

						<div class="row">
							<label>cpf</label>
							<input type="text" class="text cpf">
							<span class="msg-error"></span>
						</div>

						<div class="row">
							<label>cnpj</label>
							<input type="text" class="text cnpj">
							<span class="msg-error"></span>
						</div>

						<div class="row">
							<label>creditcard</label>
							<input type="text" class="text creditcard">
							<span class="msg-error"></span>
						</div>

					</div>
				</div>

				<div class="form-f right">
					<button class="btn big btn-primary wm-submit">
						Enviar
					</button>
				</div>

			</form>

		</div>

		<div class="wmgrid wmgrid-1-2">

			<form action="#" method="get" class="form form-d">
				<div class="box-d">
					<div class="box-header">
						<h2>Other elements</h2>
					</div>
					<div class="box-body">

						<div class="row">
							<label>normal</label>
							<select class="required">
								<option value="">-selecione-</option>
								<option value="1">teste 1</option>
								<option value="2">teste 2</option>
								<option value="3">teste 3</option>
							</select>
						</div>

						<div class="row">
							<label>file</label>
							<input type="file" class="required">
							<span class="msg-error"></span>
						</div>

						<div class="row">
							<label>textarea</label>
							<textarea class="text required"></textarea>
							<span class="msg-error"></span>
						</div>

						<div class="row">
							<label class="fake-label">checkbox default</label>
							<label>
								<input type="checkbox" name="c_teste" class="required">
								option 1
							</label>
							<label>
								<input type="checkbox" name="c_teste" class="required">
								option 2
							</label>
							<span class="msg-error"></span>
						</div>

						<div class="row">
							<label class="fake-label">radio default</label>
							<label>
								<input type="radio" name="r_teste" class="required">
								option 1
							</label>
							<label>
								<input type="radio" name="r_teste" class="required">
								option 2
							</label>
							<span class="msg-error"></span>
						</div>

					</div>
				</div>

				<div class="form-f right">
					<button class="btn big btn-primary wm-submit">
						Enviar
					</button>
				</div>

			</form>

			<br>

			<form action="#" method="get" class="form form-d">
				<div class="box-d">
					<div class="box-header">
						<h2>Styled elements</h2>
					</div>
					<div class="box-body">

						<div class="row">
							<label>styled file</label>
							<input type="file" class="wm-fileinput required">
							<span class="msg-error"></span>
						</div>

						<div class="row">
							<label>styled select</label>
							<select class="wm-select required">
								<option value="">-selecione-</option>
								<option value="1">teste 1</option>
								<option value="2">teste 2</option>
								<option value="3">teste 3</option>
							</select>
							<span class="msg-error"></span>
						</div>

						<div class="row">
							<label class="fake-label">styled checkbox</label>
							<label>
								<input type="checkbox" name="c_teste" class="wm-checkbox required">
								option 1
							</label>
							<label>
								<input type="checkbox" name="c_teste" class="wm-checkbox required">
								option 2
							</label>
							<span class="msg-error"></span>
						</div>

						<div class="row">
							<label class="fake-label">styled radio</label>
							<label>
								<input type="radio" name="r_teste" class="wm-radio required">
								option 1
							</label>
							<label>
								<input type="radio" name="r_teste" class="wm-radio required">
								option 2
							</label>
							<span class="msg-error"></span>
						</div>

					</div>
				</div>

				<div class="form-f right">
					<button class="btn big btn-primary wm-submit">
						Enviar
					</button>
				</div>

			</form>

		</div>

	</div>

<?php require_once("elements/footer.php"); ?>