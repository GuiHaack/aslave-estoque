<div class="container">
	<div class="card-panel blue-text">
		<h4>Detalhes de Pessoa [<?= $person_data[0]['id_people'] ?>]</h4>
		<div class="right-align">
			<a class="btn teal" onclick="history.back()"><i class="material-icons">input</i> Voltar</a>
			<a class="btn" href="<?= base_url('update-person/'.$person_data[0]['id_people']); ?>"><i class="material-icons">edit</i> Editar</a>
		</div>
	</div>
	<div class="row">
		<div class="card-panel">
			<dl class="dl-horizontal">
				<dt>Nome</dt>
				<dd><?= $person_data[0]['name'] ?></dd>

				<dt>CPF/CNPJ</dt>
				<dd><?= $person_data[0]['cpf_cnpj'] ?></dd>

        <dt>IE/RG</dt>
        <dd><?= $person_data[0]['documment'] ?></dd>

        <dt>Endereço</dt>
        <dd>
          <?= $person_data[0]['adress'] ." Nº ".
							$person_data[0]['number'] .", bairro ".
							$person_data[0]['neighborhood'] ." - ".
							$city[0]['name'] ." - ".
							$city[0]['uf'];?>
        </dd>

        <dt>Aniversário</dt>
        <dd><?= date('d/m/Y', strtotime($person_data[0]['date_birth'])); ?></dd>

        <dt>Telefones</dt>
        <dd><?php echo $person_data[0]['phone1'] ." ". $person_data[0]['phone2'] ?></dd>

      </dl>
		</div>
	</div>
</div>
