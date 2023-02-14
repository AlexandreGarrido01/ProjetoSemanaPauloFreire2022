<?php 
    function escreveContato($redireciona){
        echo('
        <form method="post" action="https://api.staticforms.xyz/submit">
            <input type="hidden" name="accessKey" value="def12407-f376-4f95-9322-b2e6dabf289e">
            <input type="text" name="honeypot" style="display: none;">
            <input type="hidden" name="redirectTo" value="http://ponto-zero.atwebpages.com/carmen-miranda/principal-carmen-miranda/'.$redireciona.'.php"> 
            <div class="fields">
                <div class="field half">
                    <label for="name">Nome</label>
                    <input type="text" name="name" id="name" pattern="[Aa-Zz\s]+$" minlength="3" required/>
                </div>
                <div class="field half">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" minlength="3"required/>
                </div>
                <div class="field">
                    <label for="message">Mensagem</label>
                    <textarea name="message" id="message" rows="6" maxlength="200"></textarea>
                </div>
            </div>
            <ul class="actions">
                <li><input type="submit" value="Enviar mensagem" class="primary" /></li>
                <li><input type="reset" value="Limpar" /></li>
            </ul>
        </form>
        ');
    }
?>