<?php
include("database.php");

$sql = "SELECT * FROM forms";
$result = mysqli_query($conn, $sql);

$forms_by_idade = [];
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $idade = $row['idade'];
        if (!isset($forms_by_idade[$idade])) {
            $forms_by_idade[$idade] = [];
        }
        $forms_by_idade[$idade][] = $row;
    }
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .conteudo, .conteudo2 { display: none; padding: 10px; margin-top: 10px; }
        .button-icon { display: flex; align-items: center; gap: 10px; }
        .icon { width: 24px; height: 24px; }
        button { padding: 5px 10px; margin: 5px 0; background-color: #f0f0f0; border: 1px solid #ccc; border-radius: 5px; cursor: pointer; }
        button h5 { margin: 0; }
        .resposta {
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            color: white;
        }
    </style>
    <link rel="stylesheet" href="style.css">
</head>
<body style="background-color: rgba(38, 38, 38, 1);">

<div id="buttons-container">
    <?php foreach ($forms_by_idade as $idade => $forms): ?>
        <?php if ($idade != 0): ?>
            <div class="button-wrapper" data-idade="<?php echo $idade; ?>">
                <button id="botao<?php echo $idade; ?>" onclick="toggleContent('conteudo<?php echo $idade; ?>', 'icon<?php echo $idade; ?>')">
                    <div class="button-icon">
                        <h5 id="ip"><?php echo $idade; ?></h5>
                        <svg id="icon<?php echo $idade; ?>" class="icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" focusable="false" aria-hidden="true">
                            <path d="m18 9.28-6.35 6.35-6.37-6.35.72-.71 5.64 5.65 5.65-5.65z"></path>
                        </svg>
                    </div>
                </button>
                <div id="conteudo<?php echo $idade; ?>" class="conteudo">
                    <?php foreach ($forms as $index => $form): ?>
                        <button id="botao2<?php echo $idade . '_' . $index; ?>" onclick="toggleContent('conteudo2<?php echo $idade . '_' . $index; ?>', 'icon2<?php echo $idade . '_' . $index; ?>')">
                            <div class="button-icon">
                                <h5><?php echo $form['nome_da_crianca']; ?></h5>
                                <svg id="icon2<?php echo $idade . '_' . $index; ?>" class="icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" focusable="false" aria-hidden="true">
                                    <path d="m18 9.28-6.35 6.35-6.37-6.35.72-.71 5.64 5.65 5.65-5.65z"></path>
                                </svg>
                            </div>
                        </button>
                        <div id="conteudo2<?php echo $idade . '_' . $index; ?>" class="conteudo2">
                            <div class="titulo">
                                <img src="logo.png" alt="Logo" height="140" id="img1"> 
                                <img src="logo2.png" alt="Logo 2" height="100" id="img2">
                                <h4>Ficha de inscrição para Cantinho do Céu — ano 2024</h4>
                            </div>

                            <div class="forms">
                                <div class="form-group">
                                    <p>Nome da criança: <?php echo $form['nome_da_crianca']; ?></p>
                                </div>

                                <div class="form-group">
                                    <p>Data de nascimento: <?php echo $form['data_de_nascimento']; ?></p>
                                </div>

                                <div class="form-group">
                                    <p>Endereço: <?php echo $form['endereco']; ?></p>
                                </div>

                                <div class="form-group">
                                    <p>Bairro: <?php echo $form['bairro']; ?></p>
                                </div>

                                <div class="form-group">
                                    <p>Nome da mãe: <?php echo $form['nome_da_mae']; ?></p>
                                </div>

                                <div class="form-group">
                                    <p>Celular da mãe: <?php echo $form['celular_mae']; ?></p>
                                </div>

                                <div class="form-group">
                                    <p>Nome do pai: <?php echo $form['nome_do_pai']; ?></p>
                                </div>

                                <div class="form-group">
                                    <p>Celular do pai: <?php echo $form['celular_pai']; ?></p>
                                </div>

                                <div class="form-group">
                                    <p>Foi batizado: <?php echo $form['batizado']; ?></p>
                                </div>

                                <div class="form-group">
                                    <p>Paróquia: <?php echo $form['paroquia']; ?></p>
                                </div>

                                <div class="form-group">
                                    <p>Já participou do cantinho do céu: <?php echo $form['participou']; ?></p>
                                </div>

                                <div class="parent-container">
                                    <div class="child-container">
                                        <h4 id="pai">PAI</h4>
                                        <div class="form-group">
                                            <p>É Católico?</p>
                                            <p id="resposta" class="resposta"><?php echo $form['scpai']; ?></p>
                                        </div>
                                        <div class="form-group">
                                            <p>Tem outra religião?</p>
                                            <p id="resposta" class="resposta"><?php echo $form['orpai']; ?></p>
                                        </div>
                                        <div class="form-group">
                                            <p>Qual religião?</p>
                                            <p id="resposta" class="resposta"><?php echo $form['qrpai']; ?></p>
                                        </div>
                                        <div class="form-group">
                                            <p>É católico praticante?</p>
                                            <p id="resposta" class="resposta"><?php echo $form['cppai']; ?></p>
                                        </div>
                                        <div class="form-group">
                                            <p>É batizado?</p>
                                            <p id="resposta" class="resposta"><?php echo $form['bpai']; ?></p>
                                        </div>
                                        <div class="form-group">
                                            <p>Fez Primeira Eucaristia?</p>
                                            <p id="resposta" class="resposta"><?php echo $form['pepai']; ?></p>
                                        </div>
                                        <div class="form-group">
                                            <p>é Crismado?</p>
                                            <p id="resposta" class="resposta"> <?php echo $form['cpai']; ?></p>
                                        </div>
                                        <div class="form-group">
                                            <p>Participa de Pastoral ou Movimento Religioso? Qual?</p>
                                            <p id="resposta" class="resposta"><?php echo $form['mrpai']; ?></p>
                                        </div>
                                    </div>

                                    <div class="child-container">
                                        <h4 id="mae">MÃE</h4>
                                        <div class="form-group">
                                            <p>É Católica?</p>
                                            <p id="resposta" class="resposta"><?php echo $form['scmae']; ?></p>
                                        </div>
                                        <div class="form-group">
                                            <p>Tem outra religião?</p>
                                            <p id="resposta" class="resposta"><?php echo $form['ormae']; ?></p>
                                        </div>
                                        <div class="form-group">
                                            <p>Qual religião?</p>
                                            <p id="resposta" class="resposta"> <?php echo $form['qrmae']; ?></p>
                                        </div>
                                        <div class="form-group">
                                            <p>É católica praticantes?</p>
                                            <p id="resposta" class="resposta"><?php echo $form['cpmae']; ?></p>
                                        </div>
                                        <div class="form-group">
                                            <p>É batizada?</p>
                                            <p id="resposta" class="resposta"><?php echo $form['bmae']; ?></p>
                                        </div>
                                        <div class="form-group">
                                            <p>Fez Primeira Eucaristia?</p>
                                            <p id="resposta" class="resposta"><?php echo $form['pemae']; ?></p>
                                        </div>
                                        <div class="form-group">
                                            <p>É Crismada?</p>
                                            <p id="resposta" class="resposta"><?php echo $form['cmae']; ?></p>
                                        </div>
                                        <div class="form-group">
                                            <p>Participa de Pastoral ou Movimento Religioso? Qual?</p>
                                            <p id="resposta" class="resposta"><?php echo $form['mrmae']; ?></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group" id="obs">
                                    <p>Observação (informações importantes da sua criança como por exemplo: é alérgico a algo, é especial, é agitado, etc)</p>
                                    <p id="resposta" class="resposta"><?php echo $form['obsi']; ?></p>
                                </div>
                                <div class="ass" id="ass">
                                    <p>Assinatura do responsável:</p>
                                    <img src="<?php echo $form['ass']; ?>">
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endif; ?>
    <?php endforeach; ?>
</div>

<script>
function toggleContent(contentId, iconId) {
    var content = document.getElementById(contentId);
    var icon = document.getElementById(iconId);
    if (content.style.display === 'none' || content.style.display === '') {
        content.style.display = 'block';
        icon.innerHTML = '<path d="M6 14l6-6 6 6z"></path>'; // Up arrow
    } else {
        content.style.display = 'none';
        icon.innerHTML = '<path d="m18 9.28-6.35 6.35-6.37-6.35.72-.71 5.64 5.65 5.65-5.65z"></path>'; // Down arrow
    }
}
</script>

</body>
</html>