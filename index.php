<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="recursos/css/estilo.css">
    <title>Curso PHP</title>
</head>
<body>
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Índice dos Exercícios</h2>
    </header>
    <main class="principal">
        <div class="conteudo">
            <nav class="modulos">
                <div class="modulo verde">
                    <h3>Básico</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=basico&file=ola">Olá PHP</a></li>
                        <li><a href="exercicio.php?dir=basico&file=html">Integração HTML</a></li>
                        <li><a href="exercicio.php?dir=basico&file=css">Integração CSS</a></li>
                        <li><a href="exercicio.php?dir=basico&file=comentarios">Comentários PHP</a></li>
                        <li><a href="exercicio.php?dir=basico&file=desafio">Desafio 1</a></li>

                    </ul>
                </div>
                <div class="modulo vermelho">
                    <h3>Tipos</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=tipos&file=int">Tipo Inteiro</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=float">Tipo Float</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=aritmeticas">Operações Aritméticas</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=desafio_precedencia">Desafio Precedência</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=string">Tipo String</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=desafio_string">Desafio String</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=bool">Tipo Booleano</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=conversoes">Conversões PHP</a></li>
                    </ul>
                </div>
                <div class="modulo azul">
                    <h3>Básico</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=variaveis&file=basico">Variaveis</a></li>
                        <li><a href="exercicio.php?dir=variaveis&file=atribuicoes">Atribuições </a></li>
                        <li><a href="exercicio.php?dir=variaveis&file=interpolacao">Interpolacao </a></li>
                        <li><a href="exercicio.php?dir=variaveis&file=variaveis_variaveis">Variaveis Variáveis </a></li>
                        <li><a href="exercicio.php?dir=variaveis&file=valor_referencia">Variaveis x Referência </a></li>
                        <li><a href="exercicio.php?dir=variaveis&file=constantes">Constantes </a></li>
                    </ul>
                </div>
                <div class="modulo roxo">
                    <h3>Estruturas de Controle</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=controle&file=if_else">If/Else</a></li>
                        <li><a href="exercicio.php?dir=controle&file=operadoresRelacionais">Operadores Relacionains</a></li>
                        <li><a href="exercicio.php?dir=controle&file=operadoresLogicos">Operadores Lógicos</a></li>
                        <li><a href="exercicio.php?dir=controle&file=operadorTernario">Operador Ternário</a></li>
                        <li><a href="exercicio.php?dir=controle&file=switch">Switch</a></li>
                    </ul>
                </div>
                <div class="modulo laranja">
                    <h3>Arrays</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=array&file=basico">Básico</a></li>
                        <li><a href="exercicio.php?dir=array&file=mapa">Mapas Array</a></li> 
                        <li><a href="exercicio.php?dir=array&file=operacoes">Operações com Array</a></li>
                        <li><a href="exercicio.php?dir=array&file=multi">Array Multidimensional</a></li>
                        <li><a href="exercicio.php?dir=array&file=constante">Arrays Constantes</a></li>
                        <li><a href="exercicio.php?dir=array&file=get">$_GET</a></li>
                        <li><a href="exercicio.php?dir=array&file=post">$_POST</a></li>
                        <li><a href="exercicio.php?dir=array&file=comparacao">Comparação Arrays</a></li>
                    </ul>
                </div>
                <div class="modulo verde-escuro">
                    <h3>Repetições</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=repeticoes&file=for">FOR</a></li>
                        <li><a href="exercicio.php?dir=repeticoes&file=foreach">FOREACH</a></li>
                        <li><a href="exercicio.php?dir=repeticoes&file=break_continue">Break/Continue</a></li>
                    </ul>
                </div>
                <div class="modulo vermelho-escuro">
                    <h3>Funções</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=funcoes&file=escopo">Função & Escopo</a></li>
                        <li><a href="exercicio.php?dir=funcoes&file=args_retorno">Parâmetros & Retorno</a></li>
                        <li><a href="exercicio.php?dir=funcoes&file=arg_variaveis">Argumentos Variáveis</a></li>
                        <li><a href="exercicio.php?dir=funcoes&file=arg_padrao">Argumentos Padrão</a></li>
                        <li><a href="exercicio.php?dir=funcoes&file=usando_tipos">Usando Tipos</a></li>
                        <li><a href="exercicio.php?dir=funcoes&file=funcoes_anonimas">Funcões Anônimas</a></li>
                        <li><a href="exercicio.php?dir=funcoes&file=recursao">Recursão</a></li>
                        <li><a href="exercicio.php?dir=funcoes&file=retornando_funcao">Retornando Função</a></li>
                        <li><a href="exercicio.php?dir=funcoes&file=map_filter">Map e Filter</a></li>
                    </ul>
                </div>
                <div class="modulo azul-escuro">
                    <h3>Paradigma O.O.</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=classes_objetos&file=classe">Primeira Classe</a></li>
                        <li><a href="exercicio.php?dir=classes_objetos&file=desafio_data">Desafio Classe Data</a></li>
                        <li><a href="exercicio.php?dir=classes_objetos&file=construtor_destrutor">Construtor e Destrutor</a></li>
                        <li><a href="exercicio.php?dir=classes_objetos&file=heranca">Herança</a></li>
                        <li><a href="exercicio.php?dir=classes_objetos&file=visibilidade">Visibilidade</a></li>
                        <li><a href="exercicio.php?dir=classes_objetos&file=static">Membros estáticos</a></li>
                        <li><a href="exercicio.php?dir=classes_objetos&file=interface">Interface</a></li>
                        <li><a href="exercicio.php?dir=classes_objetos&file=abstract">Classe Abstrata</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </main>
</body>
</html>