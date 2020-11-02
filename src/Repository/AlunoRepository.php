<?php

namespace Alura\Doctrine\Repository;

use Alura\Doctrine\Entity\Aluno;
use Doctrine\ORM\EntityRepository;

class AlunoRepository extends EntityRepository
{
   public function buscarCursosPorAluno()
    {
        $entityManager = $this->getEntityManager();
        $classAluno = Aluno::class;
        $dql = "SELECT a, t, c from $classAluno a JOIN a.telefones t JOIN a.cursos c";
        $query = $entityManager->createQuery($dql);

        return $query->getResult();
    }
}