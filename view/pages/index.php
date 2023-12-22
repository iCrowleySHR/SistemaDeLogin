<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
    <link rel="stylesheet" href="view/css/style.css">
    <script src="view/js/index.js" defer></script>
</head>
<body>
    <?php require 'view/components/header.php'; ?>
    <main>
        <?php require 'view/components/opcoes.php'; ?>
        <section class="sobre">
            <article>
                <h2>Sobre esse projeto!</h2>
                <p>
                    Com o intuito de aprender e praticar novas áreas das linguagens Back-End e Front-End, esse projeto foi desenvolvido integralmente
                    para estudo e aperfeiçoamento na criação e interpretação de códigos! Feito inteiramente em PHP (parte Back-End) o site conta com diversas
                    funções como criação de conta, edição de dados inseridos e exclusão da conta. Construido também com HTML o site conta com a tecnologia SASS
                    onde nesse projeto me profundei bastante nela, adqurindo inúmeros conhecimentos! Este projeto não apenas consolidou meu entendimento das linguagens
                    e tecnologias envolvidas, mas também enriqueceu meu portfólio, destacando minha dedicação ao aprendizado contínuo e à busca incessante por aprimoramento
                    técnico. Ao compartilhar esta experiência, espero inspirar e colaborar com outros entusiastas do desenvolvimento de software em suas próprias jornadas de aprendizado.
                </p>
            </article>
        </section>

        <section class="tecnologias">
            <article>
                <h2>Tecnologias usadas:</h2>
                <img src="https://skillicons.dev/icons?i=html,css,js,sass,php,mysql" alt="imagem das tecnologias usadas">
            </article>
        </section>
    </main>
    <?php require 'view/components/footer.php'; ?>
</body>
</html>