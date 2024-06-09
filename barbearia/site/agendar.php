<!DOCTYPE html>
<html lang="pt-br">
<head>
    <style>
        #card {
            width: 840px;
            height: 580px;
            background-color: whitesmoke;
            border-radius: 10px;
        opacity: 0.7;

        }
        body {
            background-repeat: no-repeat;
            background-size: cover;
        }
        .form_grupo {
    width: 60%;
    margin: 0 auto;
    margin-bottom: 30px;
    position: relative;
}
.form_grupo .legenda { 
    width: 40%;
    float: left;
    margin-top: 15px;
    margin-bottom: 15px;
    font-weight: bold;
}
/* SUBMIT */
.submit { width:100%; float:left; }
.submit_btn {
    display: block;
 float: right;
    padding: 7px 30px;
    border: none;
    outline: none;
    background-color:red;
    color: #fff;
    text-shadow:red;
    font-family: inherit;
    font-size: 25px;
    font-family:'open_sansregular';
    border-radius: 6px;
    margin: -7px auto;
    cursor: pointer;
    transition: all 0.3s;
}

.submit_btn:hover {
    background-color:black;
    transform: scale(1.03);
}


.form_new_input {
    display: none;
}

.form_grupo {
    width: 100%;
    margin-bottom: 20px;
    position: relative;
}
.form_input {
    font-size: 15px;
    font-family: inherit;
    padding: 8px 15px;
    border-radius: 4px;
    border: 1px #f2f2f2 solid;
    background:lightgray;
    outline: none;
    width: 60%;
    transition: all 0.3s;
}
.form_message,
.form_message .message_input {
    width: 60%;
    float:left;
}
.form_message_label {
    width: 40%;
    float: left;
    margin-top: 15px;
    margin-bottom: 15px;
    font-weight: bold;
}

.container {
  display: inline-block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 20px;
}

/* Esconder o checkbox padrão */
.container input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
  height: 0;
  width: 0;
}

/* Criar o checkbox customizado */
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  background-color:brown;
  border-radius: 2px;
}

/* Adicionar uma cor de fundo cinza ao passar o mouse */
.container:hover input ~ .checkmark {
  background-color:black;
}

/* Quando o checkbox é clicado, adicionar um fundo rosa */
.container input:checked ~ .checkmark {
  background-color: red;
}

/* Criar o ícone de check, escondido quando não estiver selecionado */
.container .checkmark:after {
  content: "";
  position: absolute;
  display: none;
  left: 9px;
  top: 5px;
  width: 5px;
  height: 10px;
  border: solid white;
  border-width: 0 3px 3px 0;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
}

/* Exibir o ícone quando selecionado */
.container input:checked ~ .checkmark:after {
  display: block;
}

    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body background="images/corte.jpg">
    <center>
        <br>
        <br>
        <br>
    <div id="card">
    <form class="form" action="registro.php" method="post">
            <br>
            <h1 style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; font-size: 40px;">Marque seu horário</h1>
    
            <form class="form" action="sucesso.php" method="post">

                <div class="form_grupo">
                    <label for="nome" class="form_label">Nome</label>
                    <input type="text" name="nome" class="form_input" id="nome" placeholder="EX: João Silva" required>
                </div>


                <div class="form_grupo">
                    <label for="e-mail" class="form_label">E-mail:</label>
                    <input type="email" name="email" class="form_input" id="email" placeholder="EX: info@gmail.com" required>
                </div>

                <div class="form_grupo">
                    <label for="idade" class="form_label">Idade:</label>
                    <input type="number" name="idade" class="form_input" id="idade" placeholder="EX: 20 anos" required>
                </div>

                <div class="form_grupo">
                    <label for="horário" class="form_label">Horário:</label>
                    <input type="time" name="horario" class="form_input" id="horario" placeholder="EX: 11:00" required>
                </div>

                <div class="form_grupo">
                    <label for="dia" class="form_label">Dia:</label>
                    <input type="text" name="dia" class="form_input" id="dia" placeholder="EX: 06/06" required>
                </div>

                <div class="form_grupo">
                <h1 style="font-size: 26px; float:center; margin: 20px;">O que você quer marcar conosco?</h1>
                <br>
                <center>
                <label class="container">Cabelo
                  <input type="checkbox" name="servicos[]" value="Cabelo">
                  <span class="checkmark"></span>
                </label>
                <label class="container">Bigode
                  <input type="checkbox" name="servicos[]" value="Bigode">
                  <span class="checkmark"></span>
                </label>
                <label class="container">Barba
                  <input type="checkbox" name="servicos[]" value="Barba">
                  <span class="checkmark"></span>
                </label>
                <label class="container">Sobrancelha
                  <input type="checkbox" name="servicos[]" value="Sobrancelha">
                  <span class="checkmark"></span>
                </label>
            </div>

          <div class="form_message">
       
                    <div class="submit">
                    <center>
                      <input type="hidden" name="acao" value="enviar">
                      <button type="submit" name="Submit" class="submit_btn" >Marcar</button>
                   
                    </div>
        </div>
        </form>
    </div>
</center>

</center>
</body>
</html>