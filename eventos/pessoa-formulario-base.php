        <center >

            <form class="form-search" >
                
            <h4 style="text-align: center">Dados Pessoais:</h4><br/>

            <div class="input-group input-group-lg" style="width: 255px">

            <input type="text" class="form-control" name="nome" placeholder="Nome do Aluno:" aria-describedby="sizing-addon1" value="<?= $pessoa['nome'] ?>" required="true" ><br/>

            <input type="text" class="form-control" maxlength="11" OnKeyPress="formatar('###.###.###-##', this)" name="cpf" placeholder="CPF Ex: 11111111111" aria-describedby="sizing-addon1" value="<?= $pessoa['cpf'] ?>" required="true"><br/>

            <input type="text" class="form-control" name="profissao" placeholder="Profissão:" aria-describedby="sizing-addon1" value="<?= $pessoa['profissao'] ?>" required="true" ><br/>

            <input type="text" class="form-control" maxlength="10" name="telefone" placeholder="Telefone:XXxxxxxxxx" maxlength="12" OnKeyPress="formatar('##-####-####', this)" aria-describedby="sizing-addon1" value="<?= $pessoa['telefone'] ?>" required="true"><br/>

            <input type="text" class="form-control" name="cidade" placeholder="Cidade: Ex Paranavaí" aria-describedby="sizing-addon1" value="<?= $pessoa['cidade'] ?>" required="true" ><br/>

            <input type="text"  name="email" class="form-control" placeholder="E-mail: email@email.com" aria-describedby="sizing-addon1" value="<?= $pessoa['email'] ?>" required="true" ><br/>

            <select  name="idcurso" id="idCurso" class="form-control" aria-describedby="sizing-addon1" required="true" >
                                
                                <option selected value="">Selecione seu Curso...</option>
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
                        </div>
                         
                </center>
      
                </form>
                <button type="submit" class="btn btn-primary btn-lg" action="insere-pessoa.php" onclick="return funcao">Salvar</button>


            </div>
        </div>

    </body>
</html>



<html>

    <head>
        <title>
            Cadastro de Estudante
        </title>
        
        
    </head>