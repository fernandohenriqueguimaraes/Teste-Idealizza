# Teste Idealizza

Banco de Dados (MySQL)

    A fim de criar a estrutura do banco de dados, foi disponibilizado na pasta Dump Banco MySQL a estrutura de banco de dados desenhada para esta aplicação. 
    Entretanto pode-se gerar a estrutura do banco e geração de dados através do Migrations e Seeders.
	
    Nome do Banco: Teste_Idealizza

Aplicação em PHP (Laravel)

    Ao rodar a aplicação, será necessário o cadastro de um usuário para acesso ao sistema.

    1a Etapa: Desenvolvimento do CRUD de Alunos e Cobranças (Primeiras 4 horas) - Concluído

    2a Etapa: Filtro por Nome, CPF, Cidade e se aluno é Ativo ou Inativo (Primeiras 8 horas) - Concluído

    3a Etapa: Consulta de Alunos via API Rest (Todos os Alunos Ativos, Aluno Específico através dos parâmetros CPF ou ID) (Primeiras 22 horas) - Concluído
    
    4a Etapa: Validação de formulários - Concluído
    
API REST

    Para realizar uma busca de aluno, utilizar o endpoint api/aluno/buscar
    Os parâmetros são:
        - campo (Aceita os valores nome, cpf e cidade. Se não for incluso este parâmetro, não será realizado o filtro, logo retornará todos os alunos)
        - valor (texto do parâmetro que deseja buscar, se não for incluso este parâmetro, não será realizado o filtro, logo retornará todos os alunos)
        - ativo (Aceita os valores 1 para ativo e 0 para inativo, se colocar um valor diferente destes ou não inserir o parâmetro é retornado alunos ativos e inativos)

    Exemplos:
        - api/aluno/buscar (Retorna todos os alunos)
        - api/aluno/buscar?tipoBusca=nome (Retorna todos os alunos)
        - api/aluno/buscar?tipoBusca=nome&valorBusca= (Retorna todos os alunos)
        - api/aluno/buscar?tipoBusca=cpf&valorBusca=00010001001 (Retorna todos os alunos que tiverem o cpf exato ou parcial ao valor informado)
        - api/aluno/buscar?tipoBusca=nome&valorBusca=vivian&ativo=1 (Retorna todos os alunos que tiverem o nome exato ou parcial ao valor informado e que estejam ativos)
        - api/aluno/buscar?tipoBusca=cpf&valorBusca=00010001001&ativo=0 (Retorna todos os alunos que tiverem o cpf exato ou parcial ao valor informado e que estejam inativos)
        - api/aluno/buscar?ativo=1 (Retorna todos os alunos que estejam ativos)
        - api/aluno/buscar?ativo=0 (Retorna todos os alunos que estejam inativos)
        - api/aluno/buscar?ativo=3 (Retorna todos os alunos)

