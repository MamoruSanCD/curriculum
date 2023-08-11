re<!DOCTYPE html>
<html lang="pt-br" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="darkmode.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <title>Front-End</title>
</head>
<body>
    <script>
        var mode = localStorage.getItem("mode");

        $(document).ready(function(){
            $("html").attr('class',mode);
            
        });
        $(document).ready(function(){
            
        })
        $(document).ready(function(){
            
            $('.thememode').click(function(){
                if($(".darkmode").is(":checked")){
                    $("html").attr("class","dark");
                    $(".darkmode").prop(":checked");
                    mode = "dark";
                    localStorage.setItem("mode",mode);
                    
                }else{
                    $("html").attr("class","light");
                    mode = "light";
                    localStorage.setItem("mode",mode);
                    
                }
            });
        });
    </script>
    <label class="thememode" for="darkmode">
    <input type="checkbox" class="darkmode" name="darkmode" id="darkmode" >
    <span class="slider"></span>
    </label>
    <button>
    <a class="download" href="curriculum.pdf" download>Curriculo em PDF</a>
    </button>
    <div class="container">
        <div class="pessoal_inform">
            <H3>Matheus Alves de Barros Ribeiro</H3>
            <p>Brasileiro, solteiro, 24 anos</p>
            <p>Endereço sem número (preserve seus dados)</p>
            <p>(Cidade, Estado, CEP)</p>
            <p>telefone/whatsapp: </p>
            <p>E-mail:</p>
        </div>
        <div class="Objetivo">
            <h4>Objetivo</h4>
            <p>Desenvolvimento Front-End</p>
        </div>
        <div class="Formacao">
            <h4>Nome do Curso</h4>
            <p>Universidade , previsão de conclusão em (Ano)</p>
        </div>
        <div class="Experiencia">
            <h4>Experiência Profissional</h4>
            <h5>Inicio - Fim - Empresa</h5>
            <p>Cargo: </p>
            <li>Explique suas experiências</li>
            <li>Explique suas experiências</li>
            <li>Explique suas experiências</li>
            <br>
            <h5>Inicio - Fim - Empresa</h5>
            <p>Cargo: </p>
            <li>Explique suas experiências</li>
            <li>Explique suas experiências</li>
            <li>Explique suas experiências</li>
        </div>
        <h4>Qualificações e Atividades Complementares</h4>
        <li>Espanhol Intermediário</li>
        <li>Inglês Básico</li>
        <li>Experiência com Visual Code</li>
        <li>Comunicativo</li>
        <li>Facil aprendizagem</li>
    </div>
</body>
</html>
