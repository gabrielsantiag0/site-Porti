<?php
     include '../../conexao/conn.php';

session_start();
$uit = $_SESSION['id_ultimo'];
    $date = date('d/m/Y');
    if('termo' > 1){
        if($_POST){
            $remedio = $_POST['remedio'];
            $insulina = $_POST['insulina'];
            $glicemia = $_POST['glicemia'];

            $cadastrargli = "INSERT glicemia
            (valor, dia, id_user)
            VALUES
            ('$glicemia','$date','$uit')
             ";
             $resultado = $conn->query($cadastrargli);

            $cadastrarrmd = "INSERT medicacoes
            (remedio, id_user, insulina)
            VALUES
            ('$remedio','$uit','$insulina')
            ";
            $resultado1 = $conn->query($cadastrarrmd);

        }
    }else{
        echo "<script>alert('Termos de uso não preenchido');</script>";
    }


        if(mysqli_insert_id($conn)){
            echo "<script>alert('cadastro concluido');</script>";
            echo "<script>window.open('../index.php','_self')</script>";

        }
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cadastro.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Formulário</title>
</head>

<body class="body">
    <div class="container-1">
        <div class="form-image">
            <img src="../../Img/img_cadastro2.svg" alt="">
        </div>
        <div class="form">
            <form action="cadastro2.php" method="post" name="form_usuario_insere" enctype="multipart/form-data" id="form_usuario_insere1">
                <div class="form-header">
                    <div class="title">
                        <h1>Informações</h1>
                    </div>
                    <div class="login-button">
                        <button><a href="login.php">Entrar</a></button>
                    </div>
                </div>

                <div class="input-group1">
                    <div class="input-box">
                        <label for="remedio">Último remédio usado</label>
                        <input id="remedio" type="text" name="remedio" placeholder="Nome do remédio" required>
                    </div>
                    <div class="input-box">
                        <label for="insulina">Insulina utilizada</label>
                        <input id="insulina" type="text" name="insulina" placeholder="Nome do remédio" required>
                    </div>
                    <div class="input-box">
                        <label for="glicemia">Último valor de Glicemia</label>
                        <input id="glicemia" type="text" name="glicemia" placeholder="Nome do remédio" required>
                    </div>
                </div>

                <div class="gender-inputs">
                    <div class="gender-group">
                        <div class="gender-input1">
                            <input id="termo" type="radio" name="genero" value="termo">
                            <label for="termo">Concordo com os &nbsp;<a href="" data-toggle="modal" data-target="#modalExemplo2" class="tamn">Termos de uso</a> </label>
                        </div>
                        <div class="modal fade" id="modalExemplo2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">
                                            <h1>TERMOS E CONDIÇÕES DE USO DO SITE</h1>
                                        </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="container">
                                            <p class="fs-5 modalfont">
                                                &nbsp; &nbsp; <strong>1.</strong> Este Termo refere-se ao Acessa DMellitus. Ao navegar neste site e usar os serviços que são fornecidos, você AFIRMA que LEU, COMPREENDEU e CONCORDA com nossos Termos e Condições. Estes Termos e Condições abrangem todos os aplicativos, serviços de Internet ou extensões dos sites relacionados. Caso você não concorde ou não tenha ficado claro algum ponto, sugere-se que você NÃO NAVEGUE MAIS NELE até que você tenha sanado todas as suas dúvidas. Você poderá ainda, a qualquer tempo, retornar ao site, clicar e termos de uso e reler quantas vezes desejar. <br>
                                                Termos e Condições
                                                <strong>2.</strong> Os Termos e Condições do Acessa DMellitus regem o uso deste Site e todo o seu conteúdo ("Site"). Estes Termos descrevem as regras e regulamentos que orientam o uso de Acessa DMellitus localizado em www.AcessaDMellitus.com. Todos os materiais/informações/documentos/serviços ou todas as outras entidades (coletivamente referidas como "conteúdo'') que aparecem no www.AcessaDMellitus.com serão administrados de acordo com estes Termos e Condições.

                                                ATENÇÃO: Não continue a usar este site se você tiver qualquer objeção a qualquer um dos Termos e Condições declarados nesta página. <br>

                                                <strong>3.</strong> O site é destinado a usuários com 18 (dezoito) anos de idade ou mais. Se você tem menos de 18 (dezoito) anos, não poderá usar ou registrar-se para usar este site ou seus serviços sem a permissão ou consentimento dos pais. Ao concordar com estes Termos e Condições, você tem a capacidade legal necessária para cumprir e ficar vinculado por estes Termos e Condições. <br>

                                                <strong>4.</strong> Acessa DMellitus faz uso de cookies. Ao acessar nosso site, você concorda em usar cookies de acordo com nossa Política de Cookies. "Algum dos nossos parceiros de site podem usar cookies." <br>

                                                <strong>5.</strong> Acessa DMellitus detêm os direitos de propriedade intelectual de todo o conteúdo. Todos os direitos de propriedade intelectual são reservados. Você pode acessar qualquer conteúdo do site para seu uso pessoal, sujeito às restrições definidas nestes termos e condições. <br>

                                                Acessa DMellitus, por meio deste, determina que o usuário do site não cometa as seguintes ações:
                                                • Reproduzir, republicar, duplicar ou copiar qualquer conteúdo do Acessa DMellitus ;
                                                • Vender, alugar, sublicenciar e/ou de outra forma comercializar qualquer conteúdo doAcessa DMellitus ;
                                                • Executar e / ou exibir publicamente qualquer conteúdo do Acessa DMellitus ;
                                                • Usar este site de forma que seja, ou talvez, danifique e/ou afete o acesso do usuário a este site;
                                                • Usar este site contrário às regras, leis e regulamentos relevantes do seu país de residência, ou de uma maneira que cause, ou possa causar, danos ao site ou a qualquer pessoa ou entidade comercial;
                                                • Realizar mineração de dados ou qualquer outra atividade semelhante relacionada a este site, ou durante o uso deste site; e
                                                • Usando este site para se envolver em qualquer forma de publicidade ou marketing empresarial. <br>

                                                <strong>6.</strong> Áreas específicas deste site podem ser restritas ao acesso do usuário, e Acessa DMellitus pode estender ainda mais essa restrição a todo o site, a qualquer momento e a seu exclusivo critério. Qualquer identificação de usuário, chave de segurança ou senha que você possa ter neste site são confidenciais e você é responsável por manter a confidencialidade dessas informações.
                                                Link e Hiperlink <br>
                                                <strong>7.</strong> Nós nos reservamos o direito de registrar solicitações para que você remova todos os links ou qualquer link específico criado por você que redirecione para o nosso site, e você aprova a remoção imediata desses links para o nosso site, mediante solicitação.
                                                    <br>
                                                <strong>8.</strong> Podemos alterar os termos e condições desses direitos de vinculação a qualquer momento. Ao conectar-se continuamente ao nosso site, você concorda em se comprometer e seguir os termos desta política de links.
                                                                    <br>
                                                <strong>9.</strong> Por favor, entre em contato conosco se encontrar algum link em nosso site que seja ofensivo, e poderemos considerar e analisar solicitações de remoção de tais links.

                                                Link para conteúdo de terceiros
                                                                                <br>
                                                 <strong>10.</strong>Este site pode conter links para sites ou aplicativos operados por terceiros. Não controlamos nenhum desses sites ou aplicativos de terceiros ou o operador de terceiros. Este Site, objeto do presente Termos de Uso não é responsável e não endossa quaisquer sites ou aplicativos de terceiros ou sua disponibilidade ou conteúdo.
                                                Acessa DMellitus não se responsabiliza pelos anúncios contidos no site. Você concorda em fazê-lo por sua própria conta e risco ao adquirir quaisquer bens e / ou serviços de terceiros. O anunciante é quem permanece responsável por tais bens e/ou serviços, e se você tiver alguma dúvida ou reclamação sobre eles, você deve entrar em contato com o anunciante
                                                Conteúdo do usuário <br>
                                                <strong>11.</strong> Importante salientar que o termo usado "Conteúdo do Usuário" significa qualquer áudio, vídeo, texto, imagens ou outro material ou conteúdo que você decida exibir neste Site. Com relação ao conteúdo do usuário, ao exibi-lo, você concede ao Acessa DMellitus uma licença não exclusiva, mundial, irrevogável, isenta de royalties e sublicenciável para usar, reproduzir, adaptar, publicar, traduzir e distribuir em qualquer mídia.
                                                 <br>
                                                <strong>12.</strong> O Conteúdo do Usuário deve ser seu e não deve infringir os direitos de terceiros. Acessa DMellitus reserva-se o direito de remover qualquer parte do seu conteúdo deste site a qualquer momento, sem aviso prévio. Acessa DMellitus tem permissão para monitorar suas atividades no site e remover qualquer conteúdo do usuário considerado impróprio, ofensivo, contrário às leis e regulamentos aplicáveis, ou que cause uma violação destes Termos e Condições.
                                                Política de Privacidade <br>

                                                 <strong>13.</strong>. Ao acessar este Site, informações específicas sobre o Usuário, como endereços de protocolo de Internet (IP), navegação no site, software do usuário e tempo de navegação, juntamente com outras informações semelhantes, serão armazenadas nos servidores de Acessa DMellitus. As informações sobre suas identidades, como nome, endereço, detalhes de contato, informações de faturamento e outras informações armazenadas neste site, serão estritamente usadas apenas para fins estatísticos e não serão publicadas para acesso geral. Acessa DMellitus, no entanto, não assume nenhuma responsabilidade pela segurança dessas informações.
                                                    <br>

                                                <strong>14.</strong> O site é fornecido, com todas as responsabilidades e não assume compromissos, representações ou garantias expressas ou implícitas de qualquer tipo relacionadas a este site ou ao conteúdo nele contido.

                                                 <br>

                                                 <strong>15.</strong> O usuário concorda em indenizar o Site e suas afiliadas em toda a extensão, frente à todas as ações, reclamações, responsabilidades, perdas, danos, custos, demandas e despesas decorrentes do uso deste Site pelo Usuário, incluindo, sem limitação, qualquer reclamação relacionada à violação de qualquer uma das disposições destes Termos e Condições. Se estiver insatisfeito com algum ou todo o conteúdo deste site ou qualquer um ou todos os seus Termos e Condições, o usuário pode interromper o uso deste site.
                                                <br>
                                                 <strong>16.</strong> Em qualquer momento, os usuários podem interromper o uso do Site para isso, no site, estão disponíveis as orientações necessárias. Caso ainda fique alguma dúvida, não hesite em enviar um e-mail para AcessaDM@outlook.com.
                                                <br>
                                                <strong>17.</strong> Nós nos reservamos o direito e critério exclusivo de, e sem aviso prévio ou responsabilidade, negar o acesso e uso do site (incluindo o bloqueio de endereços IP específicos) a qualquer usuário por qualquer motivo, incluindo, mas não se limitando à violação de qualquer representação, garantia ou acordo nestes Termos ou em qualquer lei ou regulamento aplicável.

                                                Disposições Gerais
                                                <br>
                                                <strong>18.</strong> Os Termos e Condições deste site serão regidos e interpretados de acordo com as leis do país ou estado em que o Site opera. Você, por meio deste, se submete incondicionalmente à jurisdição não exclusiva dos tribunais localizados no Brasil para a resolução de quaisquer disputas.
                                                        <br>
                                                <strong>19.</strong> Este Site reserva-se o direito de revisar estes Termos a qualquer momento conforme julgar adequado. Por isso é fundamental que os seus usuários estejam atentos à essas alterações.
                                                <br>
                                                <strong>20.</strong> O Site reserva-se o direito de ceder, transferir e subcontratar seus direitos e/ou obrigações sob este Acordo sem qualquer notificação ou consentimento prévio necessário. Os usuários não terão permissão para atribuir, transferir ou subcontratar qualquer um de seus direitos e/ou obrigações sob estes Termos. Além disso, uma pessoa que não seja parte destes Termos e Condições não terá o direito de fazer cumprir qualquer disposição neles contida.
                                                <br>
                                                <strong>21.</strong> Estes Termos e Condições, incluindo quaisquer avisos legais e isenções de responsabilidade neste site, constituem o acordo completo entre o Site e você em relação ao uso deste site. Em última análise, este Acordo substitui todos os acordos e entendimentos anteriores relativos ao mesmo.
                                                <br>
                                                <strong>22.</strong> Qualquer dúvida, entre em contato por meio do endereço de e-mail:
                                                AcessaDM@outlook.com.

                                            </p>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <input type="submit" name="enviar" id="enviar" class="continue-button" value="Cadastrar">

            </form>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</html>