# Sistema-Escola

O intuito deste projeto é simular um sistema de ensino escolar onde os professores podem logar e assim:

- Visualizar a lista de alunos por curso
- Visualizar as notas dos alunos em cada curso
- Inserir a nota para alunos no respectivo curso

Foram utilizados: MySQL, Bootstrap (para design em CSS), DataTable (plugin do jQuery para tabelas). Código em PHP

# Banco de Dados

O banco de dados (escola) é composto de 5 tabelas:

- alunos: com informacoes sobre os alunos
- cursos: nomes dos cursos e carga horária
- aluno_curso: id_aluno relacionado com o id_curso que ele faz
- notas: id_aluno_curso relacionado com a nota que ele recebeu em alguma avaliação daquele curso
- usuários: usuário e senha dos professores para acessar o sistema de ensino

O arquivo databaseINI.php possui todos os comandos utilizados para criar e preencher a tabela.

Após a criação foi feito um usuário no banco de dados "app" somente com as permissões necessárias para o sistema de professores. A senha do usuário está em db.php, onde é feita a conexão com o banco de dados

## Para logar no sistema:

Usuário: professor1 

Senha: admin123
