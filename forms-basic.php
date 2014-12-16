<?php require_once("elements/header.php"); ?>

	<div class="wmgrid-g">
		<div class="wmgrid wmgrid-1-2">

			<form action="#" method="get" class="form form-d">
				<div class="box-d">
					<div class="box-header">
						<h2>Basic form</h2>
					</div>
					<div class="box-body">

						<div class="legend">default form elements</div>

						<div class="row">
							<label>text, email, phone</label>
							<input type="text" class="text">
						</div>

						<div class="row">
							<label>password</label>
							<input type="password" class="text">
						</div>

						<div class="row">
							<label>file</label>
							<input type="file">
						</div>

						<div class="row">
							<label>textarea</label>
							<textarea class="text"></textarea>
						</div>

						<div class="legend">unstyled checkbox and radios</div>

						<div class="row">
							<span class="fake-label">checkbox default</span>
							<label>
								<input type="checkbox">
								<span>option 1</span>
							</label>
							<label>
								<input type="checkbox">
								<span>option 2</span>
							</label>
							<label>
								<input type="checkbox">
								<span>option 3</span>
							</label>
						</div>

						<div class="row">
							<span class="fake-label">radio default</span>
							<label>
								<input type="radio" name="teste">
								<span>option 1</span>
							</label>
							<label>
								<input type="radio" name="teste">
								<span>option 2</span>
							</label>
							<label>
								<input type="radio" name="teste">
								<span>option 3</span>
							</label>
						</div>

						<div class="legend">unstyled select</div>

						<div class="row">
							<label>normal</label>
							<select>
								<option value="">-selecione-</option>
								<option value="">teste 1</option>
								<option value="">teste 2</option>
								<option value="">teste 3</option>
							</select>
						</div>

						<div class="row">
							<label>multiple</label>
							<select multiple="multiple">
								<option value="">-selecione-</option>
								<option value="">teste 1</option>
								<option value="">teste 2</option>
								<option value="">teste 3</option>
							</select>
						</div>

						<div class="legend">styled elements</div>

						<div class="row">
							<label>styled file</label>
							<input type="file" class="wm-fileinput">
						</div>

						<div class="row">
							<label>styled select</label>
							<select class="wm-select">
								<option value="">-selecione-</option>
								<option value="">teste 1</option>
								<option value="">teste 2</option>
								<option value="">teste 3</option>
							</select>
						</div>

						<div class="row">
							<span class="fake-label">styled checkbox</span>
							<label>
								<input type="checkbox" class="wm-checkbox">
								<span>option 1</span>
							</label>
							<label>
								<input type="checkbox" class="wm-checkbox">
								<span>option 2</span>
							</label>
							<label>
								<input type="checkbox" class="wm-checkbox error">
								<span>option 3</span>
							</label>
						</div>

						<div class="row">
							<span class="fake-label">styled radio</span>
							<label>
								<input type="radio" name="teste" class="wm-radio">
								<span>option 1</span>
							</label>
							<label>
								<input type="radio" name="teste" class="wm-radio">
								<span>option 2</span>
							</label>
							<label>
								<input type="radio" name="teste" class="wm-radio">
								<span>option 3</span>
							</label>
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
						<h2>Disabled elements</h2>
					</div>
					<div class="box-body">

						<div class="legend">default form elements</div>

						<div class="row">
							<label>text, email, phone</label>
							<input type="text" class="text" disabled>
						</div>

						<div class="row">
							<label>file</label>
							<input type="file" disabled>
						</div>

						<div class="row">
							<label>textarea</label>
							<textarea class="text" disabled></textarea>
						</div>

						<div class="legend">unstyled checkbox and radios</div>

						<div class="row">
							<span class="fake-label">checkbox default</span>
							<label>
								<input type="checkbox" disabled>
								<span>option 1</span>
							</label>
						</div>

						<div class="row">
							<span class="fake-label">radio default</span>
							<label>
								<input type="radio" name="teste" disabled>
								<span>option 1</span>
							</label>
						</div>

						<div class="legend">unstyled select</div>

						<div class="row">
							<label>normal</label>
							<select disabled>
								<option value="">-selecione-</option>
								<option value="">teste 1</option>
								<option value="">teste 2</option>
								<option value="">teste 3</option>
							</select>
						</div>

						<div class="row">
							<label>multiple</label>
							<select multiple="multiple" disabled>
								<option value="">-selecione-</option>
								<option value="">teste 1</option>
								<option value="">teste 2</option>
								<option value="">teste 3</option>
							</select>
						</div>

						<div class="legend">styled elements</div>

						<div class="row">
							<label>styled file</label>
							<input type="file" disabled class="wm-fileinput">
						</div>

						<div class="row">
							<label>styled select</label>
							<select class="wm-select" disabled>
								<option value="">-selecione-</option>
								<option value="">teste 1</option>
								<option value="">teste 2</option>
								<option value="">teste 3</option>
							</select>
						</div>

						<div class="row">
							<span class="fake-label">styled checkbox</span>
							<label>
								<input type="checkbox" disabled checked class="wm-checkbox">
								<span>option 1</span>
							</label>
						</div>

						<div class="row">
							<span class="fake-label">styled radio</span>
							<label>
								<input type="radio" name="teste" disabled class="wm-radio">
								<span>option 1</span>
							</label>
						</div>


					</div>
				</div>

				<div class="form-f right">
					<button class="btn big btn-primary disabled">
						Enviar
					</button>
				</div>

			</form>

		</div>
	</div>

<?php require_once("elements/footer.php"); ?>