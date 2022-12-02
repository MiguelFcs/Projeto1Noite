<?php
$titulo = "Questionario Miguel";
$subtitulo = "Questões:";
include "cabecalho.php";
include "conexao.php" ;

$query = "select * from questoes order by rand() limit 10";
$resultado = mysqli_query($conexao, $query);
?>

        <?php
        while($linha = mysqli_fetch_array($resultado)){
            ?>
            <div style="background-color: yellow; margin: 10px; width:100%; border:1px solid;">
                <div class="offset-3 col-7">
                    <div class="card-header">
                        <h1> <?php echo $linha["pergunta"]; ?> </h1>
                    </div>
                    <div class="card-body">
                        <blockquote class="blockquote mb-0">
                            <h5><input type="radio" name="<?php echo $linha["id"]; ?>" value="A" />A) <?php echo $linha["a"]; ?> </h5>
                            <h5><input type="radio" name="<?php echo $linha["id"]; ?>" value="B" />B) <?php echo $linha["b"]; ?> </h5>
                            <h5><input type="radio" name="<?php echo $linha["id"]; ?>" value="C" />C) <?php echo $linha["c"]; ?> </h5>
                            <h5><input type="radio" name="<?php echo $linha["id"]; ?>" value="D" />D) <?php echo $linha["d"]; ?> </h5>
                            <h5><input type="radio" name="<?php echo $linha["id"]; ?>" value="E" />E) <?php echo $linha["e"]; ?> </h5>
                            <br><br>
                        </blockquote>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
        <div class="offset">
            <button class="btn btn-success" type="submit">Salvar respostas</button>
        </div>
    </form>
    <br><br>
<?php
include "rodape.php";
?>