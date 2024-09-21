<?php
    include("database.php")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form action="index.php" method="POST" enctype="multipart/form-data">
        <div class="titulo">
            <img src="logo.png" alt="Logo" height="140" id="img1"> 
            <img src="logo2.png" alt="Logo 2" height="100" id="img2">
            <h4>Ficha de inscrição para Cantinho do Céu — ano 2024</h4>
        </div>

        <div class="forms">
            <div class="form-group">
                <label for="nome_da_crianca">Nome da criança:</label>
                <input type="text" id="nome_da_crianca" name="nome_da_crianca">
            </div>

            <div class="form-group">
                <label for="data_de_nascimento">Data de nascimento:</label>
                <input type="date" id="data_de_nascimento" name="data_de_nascimento">
            </div>

            <div class="form-group">
                <label for="endereco">Endereço:</label>
                <input type="text" id="endereco" name="endereco">
            </div>

            <div class="form-group">
                <label for="bairro">Bairro:</label>
                <input type="text" id="bairro" name="bairro">
            </div>

            <div class="form-group">
                <label for="nome_da_mae">Nome da mãe:</label>
                <input type="text" id="nome_da_mae" name="nome_da_mae">
            </div>

            <div class="form-group">
                <label for="celular_mae">Celular:</label>
                <input type="text" id="celular_mae" name="celular_mae">
            </div>

            <div class="form-group">
                <label for="nome_do_pai">Nome do pai:</label>
                <input type="text" id="nome_do_pai" name="nome_do_pai">
            </div>

            <div class="form-group">
                <label for="celular_pai">Celular:</label>
                <input type="text" id="celular_pai" name="celular_pai">
            </div>

            <div class="form-group">
                <label for="batizado">Foi batizado:</label>
                <input type="text" id="batizado" name="batizado">
            </div>

            <div class="form-group">
                <label for="paroquia">Qual Paróquia?</label>
                <input type="text" id="paroquia" name="paroquia">
            </div>

            <div class="form-group">
                <label for="participou">Já participou do cantinho do céu:</label>
                <input type="text" id="participou" name="participou">
            </div>

            <div class="parent-container">
                <div class="child-container">
                    <h4 id="pai">PAI</h4>
                    <div class="form-group">
                        <label for="scpai">É Católico?</label>
                        <input type="text" id="scpai" name="scpai">
                    </div>
                    <div class="form-group">
                        <label for="orpai">Tem outra religião?</label>
                        <input type="text" id="orpai" name="orpai">
                    </div>
                    <div class="form-group">
                        <label for="qrpai">Qual religião?</label>
                        <input type="text" id="qrpai" name="qrpai">
                    </div>
                    <div class="form-group">
                        <label for="cppai">É católico praticante?</label>
                        <input type="text" id="cppai" name="cppai">
                    </div>
                    <div class="form-group">
                        <label for="bpai">É batizado?</label>
                        <input type="text" id="bpai" name="bpai">
                    </div>
                    <div class="form-group">
                        <label for="pepai">Fez Primeira Eucaristia?</label>
                        <input type="text" id="pepai" name="pepai">
                    </div>
                    <div class="form-group">
                        <label for="cpai">é Crismado?</label>
                        <input type="text" id="cpai" name="cpai">
                    </div>
                    <div class="form-group">
                        <label for="mrpai">Participa de Pastoral ou Movimento Religioso? Qual?</label>
                        <input type="text" id="mrpai" name="mrpai">
                    </div>
                </div>

                <div class="child-container">
                    <h4 id="mae">MÃE</h4>
                    <div class="form-group">
                        <label for="scmae">É Católica?</label>
                        <input type="text" id="scmae" name="scmae">
                    </div>
                    <div class="form-group">
                        <label for="ormae">Tem outra religião?</label>
                        <input type="text" id="ormae" name="ormae">
                    </div>
                    <div class="form-group">
                        <label for="qrmae">Qual religião?</label>
                        <input type="text" id="qrmae" name="qrmae">
                    </div>
                    <div class="form-group">
                        <label for="cpmae">É católica praticantes?</label>
                        <input type="text" id="cpmae" name="cpmae">
                    </div>
                    <div class="form-group">
                        <label for="bmae">É batizada?</label>
                        <input type="text" id="bmae" name="bmae">
                    </div>
                    <div class="form-group">
                        <label for="pemae">Fez Primeira Eucaristia?</label>
                        <input type="text" id="pemae" name="pemae">
                    </div>
                    <div class="form-group">
                        <label for="cmae">É Crismada?</label>
                        <input type="text" id="cmae" name="cmae">
                    </div>
                    <div class="form-group">
                        <label for="mrmae">Participa de Pastoral ou Movimento Religioso? Qual?</label>
                        <input type="text" id="mrmae" name="mrmae">
                    </div>
                </div>
            </div>

            <div class="form-group" id="obs">
                <label for="obsi">Observação (informações importantes da sua criança como por exemplo: é alérgico a algo, é especial, é agitado, etc)</label>
                <input type="text" id="obsi" name="obsi">
            </div>
            <div class="ass" id="ass">
                <label for="assinatura">Assinatura do responsável:</label>
                <input type="file" id="assinatura" name="assinatura">
            </div>
        </div>
        <button type="submit">Submit</button>
    </form>
</body>
</html>

<?php

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $nome_da_crianca = filter_input( INPUT_POST, 'nome_da_crianca', FILTER_SANITIZE_SPECIAL_CHARS );
        $data_de_nascimento = filter_input( INPUT_POST, 'data_de_nascimento', FILTER_SANITIZE_SPECIAL_CHARS );
        $endereco = filter_input( INPUT_POST, 'endereco', FILTER_SANITIZE_SPECIAL_CHARS );
        $bairro = filter_input( INPUT_POST, 'bairro', FILTER_SANITIZE_SPECIAL_CHARS );
        $nome_da_mae = filter_input( INPUT_POST, 'nome_da_mae', FILTER_SANITIZE_SPECIAL_CHARS );
        $celular_mae = filter_input( INPUT_POST, 'celular_mae', FILTER_SANITIZE_SPECIAL_CHARS );
        $nome_do_pai = filter_input( INPUT_POST, 'nome_do_pai', FILTER_SANITIZE_SPECIAL_CHARS );
        $celular_pai = filter_input( INPUT_POST, 'celular_pai', FILTER_SANITIZE_SPECIAL_CHARS );
        $batizado = filter_input( INPUT_POST, 'batizado', FILTER_SANITIZE_SPECIAL_CHARS );
        $paroquia = filter_input( INPUT_POST, 'paroquia', FILTER_SANITIZE_SPECIAL_CHARS );
        $participou = filter_input( INPUT_POST, 'participou', FILTER_SANITIZE_SPECIAL_CHARS);
        $scpai = filter_input( INPUT_POST, 'scpai', FILTER_SANITIZE_SPECIAL_CHARS );
        $orpai = filter_input( INPUT_POST, 'orpai', FILTER_SANITIZE_SPECIAL_CHARS );
        $qrpai = filter_input( INPUT_POST, 'qrpai', FILTER_SANITIZE_SPECIAL_CHARS );
        $cppai = filter_input( INPUT_POST, 'cppai', FILTER_SANITIZE_SPECIAL_CHARS );
        $bpai = filter_input( INPUT_POST, 'bpai', FILTER_SANITIZE_SPECIAL_CHARS );
        $pepai = filter_input( INPUT_POST, 'pepai', FILTER_SANITIZE_SPECIAL_CHARS );
        $cpai = filter_input( INPUT_POST, 'cpai', FILTER_SANITIZE_SPECIAL_CHARS );
        $mrpai = filter_input( INPUT_POST, 'mrpai', FILTER_SANITIZE_SPECIAL_CHARS );
        $scmae = filter_input( INPUT_POST, 'scmae', FILTER_SANITIZE_SPECIAL_CHARS );
        $ormae = filter_input( INPUT_POST, 'ormae', FILTER_SANITIZE_SPECIAL_CHARS );
        $qrmae = filter_input( INPUT_POST, 'qrmae', FILTER_SANITIZE_SPECIAL_CHARS );
        $cpmae = filter_input( INPUT_POST, 'cpmae', FILTER_SANITIZE_SPECIAL_CHARS );
        $bmae = filter_input( INPUT_POST, 'bmae', FILTER_SANITIZE_SPECIAL_CHARS );
        $pemae = filter_input( INPUT_POST, 'pemae', FILTER_SANITIZE_SPECIAL_CHARS );
        $cmae = filter_input( INPUT_POST, 'cmae', FILTER_SANITIZE_SPECIAL_CHARS );
        $mrmae = filter_input( INPUT_POST, 'mrmae', FILTER_SANITIZE_SPECIAL_CHARS );
        $obsi = filter_input( INPUT_POST, 'obsi', FILTER_SANITIZE_SPECIAL_CHARS );
        
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["assinatura"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        $data_de_nascimento = new DateTime($data_de_nascimento);
        $hoje = new DateTime();
        $idade = $hoje->diff($data_de_nascimento)->y;
        
        $data_de_nascimento = $data_de_nascimento->format('Y-m-d');

        $sql = "INSERT INTO forms (nome_da_crianca, data_de_nascimento, endereco, bairro, nome_da_mae, celular_mae, nome_do_pai, celular_pai, batizado, paroquia, participou, scpai, orpai, qrpai, cppai, bpai, pepai, cpai, mrpai, scmae, ormae, qrmae, cpmae, bmae, pemae, cmae, mrmae, obsi, ass, idade)
        VALUES ('$nome_da_crianca', '$data_de_nascimento', '$endereco', '$bairro', '$nome_da_mae', '$celular_mae', '$nome_do_pai', '$celular_pai', '$batizado', '$paroquia', '$participou', '$scpai', '$orpai', '$qrpai', '$cppai', '$bpai', '$pepai', '$cpai', '$mrpai', '$scmae', '$ormae', '$qrmae', '$cpmae', '$bmae', '$pemae', '$cmae', '$mrmae', '$obsi', '$ass', '$idade')";
        mysqli_query($conn, $sql);
    }

    mysqli_close($conn);
?>