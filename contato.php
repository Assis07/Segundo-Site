<!DOCTYPE html>
<html>
    <head>
        <?php
        include_once './head.php';
        ?>
    </head>
    <body>
        <?php
        include_once './topo.php';
        ?>
        <form method="post" action="#">
            <fieldset class="grupo">
                <div class="campo">
                    <label for="nome">Nome</label>
                    <input type="text" id="nome" name="nome" style="width: 320px;"/>
                </div>
                <div class="campo">
                    <label for="snome">Sobrenome</label>
                    <input type="text" id="snome" name="snome" style="width: 320px;"/>
                </div>
            </fieldset>
            <fieldset class="grupo">
                <div class="campo">
                    <label>Sexo</label>
                    <label class="checkbox">
                        <input type="radio" name="sexo" value="Mas"/>Masculino
                    </label>
                    <label class="checkbox">
                        <input type="radio" name="sexo" value="Fem"/>Feminino
                    </label>
                </div>
                <div class="campo">
                    <label for="email">E-mail</label>
                    <input type="email" id="email" name="email" style="width:656px"/>
                </div>
                <div class="campo">
                    <label for="telefone">Telefone</label>
                    <input type="text" id="telefone" name="telefone" style="width: 320px"/>
                </div>                  
            </fieldset>
            <fieldset class="grupo">
                <div class="campo">
                    <label for="cidade">Cidade</label>
                    <input type="text" id="cidade" name="cidade" style="width: 320px"/>                
                </div> 
                <div class="campo">
                    <label for="estado">Estado</label>
                    <select name="estado" id="estado">
                        <option value=""-</option>
                    <option value="AC">Acre</option>
                    <option value="AL">Alagoas</option>
                    <option value="AP">Amapá</option>
                    <option value="AM">Amazonas</option>
                    <option value="BA">Bahia</option>
                    <option value="CE">Ceará</option>
                    <option value="DF">Distrito Federal</option>
                    <option value="ES">Espírito Santo</option>
                    <option value="GO">Goiás</option>
                    <option value="MA">Maranhão</option>
                    <option value="MT">Mato Grosso</option>
                    <option value="MS">Mato Grosso do Sul</option>
                    <option value="MG">Minas Gerais</option>
                    <option value="PA">Pará</option>
                    <option value="PB">Paraíba</option>
                    <option value="PR">Paraná</option>
                    <option value="PE">Pernambuco</option>
                    <option value="PI">Piauí</option>
                    <option value="RJ">Rio de Janeiro</option>
                    <option value="RN">Rio Grande do Norte</option>
                    <option value="RS">Rio Grande do Sul</option>
                    <option value="RO">Rondônia</option>
                    <option value="RR">Roraima</option>
                    <option value="SC">Santa Catarina</option>
                    <option value="SP">São Paulo</option>
                    <option value="SE">Sergipe</option>
                    <option value="TO">Tocantins</option>
                </select>
            </div>
        </fieldset>
            <fieldset class="grupo">
                <div class="campo">
                    <label for="msg">Mensagem</label>
                    <textarea rows="6" id="msg" name="msg" style="width: 656px;"></textarea>
                </div>
                <div class="campo">
                    <label>Newsletter</label>
                    <input type="checkbox" name="newsletter" value="1"/>Gostaria de receber a NewsLetter da empresa
                </div>
            </fieldset>
            <button class="botao" type="submit" name="submit" onclick="alert('Formulário Enviado')">Enviar
                
            </button>
                              
    </form>
    <?php
    include_once './rodape.php';
    ?>
</body>
</html>

