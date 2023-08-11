<!DOCTYPE html>
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
            <p>Rua Romeu Banafé - Monte Sion</p>
            <p>Suzano - SP 08613-130</p>
            <p>telefone/whatsapp: (11) 933221962</p>
            <p>E-mail: matheusribeiro1045@hotmail.com</p>
        </div>
        <div class="Objetivo">
            <h4>Objetivo</h4>
            <p>Desenvolvimento Front-End</p>
        </div>
        <div class="Formacao">
            <h4>Analise e Desenvolvimento de Sistemas.</h4>
            <p>Universidade Mogi das Cruzes, previsão de conclusão em 2024.</p>
        </div>
        <div class="Experiencia">
            <h4>Experiência Profissional</h4>
            <h5>2021-Atualmente - Grupo All Net</h5>
            <p>Cargo: Instrutor Pedagógico</p>
            <p>Principais atividades: Instruir alunos no desenvolvimento Web (HTML, CSS, JavaScript, PHP e MySQL) e com ferramentas da informática básica</p>
            <p>Instruir alunos nas práticas de manutenção de computadores e gerenciamento de servidores (Linux e Windows)</p>
            <p>Manter a organização e manutenção das salas de aula.</p>
            <br>
            <h5>2017-2020 - Mega Byte</h5>
            <p>Cargo: Instrutor Pedagógico/Coordenador de Curso</p>
            <p>Principais atividades: Instruir alunos no desenvolvimento Web (HTML, CSS, JavaScript, PHP e MySQL) e com ferramentas da informática básica</p>
            <p>Instruir alunos nas práticas de manutenção de computadores e gerenciamento de servidores (Linux e Windows)</p>
            <p>Manter a organização e manutenção das salas de aula.</p>
            <p>Auxiliar instrutores na elaboração de aulas</p>
            <p>Auxiliar pais e alunos ao longo do curso</p>
            <p>Organizar materiais e laboratórios</p>
            <p>Auxiliar na criação de novos cursos e seus materiais didáticos.</p>

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
