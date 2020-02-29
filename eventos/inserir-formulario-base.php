        <center><form  method="post" enctype="multipart/form-data">

            <h3 style="text-align: center">Dados da Inserção de Mini Curso:</h3><br/>

            <div class="input-group input-group-lg">

                <input type="text" class="form-control" name="nome" placeholder="Nome do Minicurso" aria-describedby="sizing-addon1" required="true"><br/>

                <input type="text" class="form-control" name="data" placeholder="Data: dia/mes/ano" aria-describedby="sizing-addon1" required="true"><br/>
                <input type="text" class="form-control" name="horario" placeholder="Horário" aria-describedby="sizing-addon1" required="true" ><br/>
                <input type="text" class="form-control" name="sala" placeholder="Nome ou número da Sala " aria-describedby="sizing-addon1"  required="true" ><br/>
                <input type="text" class="form-control" name="vagas" placeholder="Quantidade de Vagas" aria-describedby="sizing-addon1" required="true" ><br/>

            
            <select  name="idcurso" id="idCurso" class="form-control" aria-describedby="sizing-addon1" required="true" >
                        
                                <option selected value="">Selecione o Curso referente ao minicurso...</option>
                                <option value="1"> Administraçao </option> 
                                <option value="2"> Ciencias Contabeis </option> 
                                <option value="4"> Educação Física </option>
                                <option value="5"> Efermagem </option>  
                                <option value="5"> Geografia </option>
                                <option value="6"> História </option> 
                                <option value="7"> Letras </option>  
                                <option value="8"> Matemática </option> 
                                <option value="9"> Pedagogia </option> 
                                <option value="10"> Serviço Social </option>       
                                                     
                        </select>

            <input  class="btn" type="submit" value="Cadastrar" />

            </div>

    

</form></center>
