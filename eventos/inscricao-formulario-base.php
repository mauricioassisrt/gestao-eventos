						<h3>Selecione a opção de minicurso referente ao seu curso:</h3>
						<br/>

						<table class="table" >	
                        <tr>
						<td >Opção 1:</td>
						<td style="width: 950px">
						<select class="form-control" name="minicurso_curso" required="true">
						<option value="" >Selecione um minicurso</option>
						<?php foreach($minicursosEspecificos as $minicursoEspecifico) : 

							?>
								<option value="<?=$minicursoEspecifico['idMinicursos']?>" ><?=$minicursoEspecifico['nome']?>	
								</option> 
								
							<?php endforeach ?>
						</select> 		  
						</td>
						</tr>
						 
						

                        <tr>
						<td>Opção 2:</td>
						<td>
						<select class="form-control" name="minicurso_curso2" required="true">
						<option value="" >Selecione um minicurso</option>
						<?php foreach($minicursosEspecificos as $minicursoEspecifico2) : 

							?>
								<option value="<?=$minicursoEspecifico2['idMinicursos']?>" ><?=$minicursoEspecifico2['nome']?>	
								</option> 
								
							<?php endforeach ?>
						</select>		  
						</td>
						</tr>
						</table>

						<h3>Selecione a opção de minicurso geral:</h3>

						<table class="table">
						<tr>
						<td>Opção 1:</td>
						<td style="width: 950px">
						<select class="form-control" name="minicurso_geral" required="true" >
						<option value="" >Selecione um minicurso</option>
						<?php foreach($minicursos as $minicurso) : 
							//$esseEoMinicurso = $pessoa['idMinicurso'] == $minicursos['idMinicursos'];
							//$selecao = $essaEaCategoria ? "selected='selected'" : "";
							?>
								<option value="<?=$minicurso['idMinicursos']?>" ><?=$minicurso['nome']?>	
								</option> 
								
							<?php endforeach ?>
						</select>		  
						</td>
					</tr>

					<tr>
						<td>Opção 2:</td>
						<td>
						<select class="form-control" name="minicurso_geral2" required="true">
						<option value="" >Selecione um minicurso</option>
						<?php foreach($minicursos as $minicurso2) : 
							//$esseEoMinicurso = $pessoa['idMinicurso'] == $minicursos['idMinicursos'];
							//$selecao = $essaEaCategoria ? "selected='selected'" : "";
							?>
								<option value="<?=$minicurso2['idMinicursos']?>" ><?=$minicurso2['nome']?>	
								</option> 
								
							<?php endforeach ?>
						</select>		  
						</td>
					</tr>

					<input type="hidden" value="<?= $ultid ?>" name="ultimo_id"> 
					<input type="hidden" value="<?= $idcurso ?>" name="idcurso"> 
					<center><tr>
					<td>
					<input type="submit" class="btn btn-primary btn-lg" value="Salvar">
					</td>
					</tr>


					</table>