<?php

namespace fathie\Repository;

use mary\Entity\AchatEntity;

interface IAchatRepository
{
    public function save(AchatEntity $achat): AchatEntity;
    public function findByReference(string $reference): ?AchatEntity;
    public function findByCompteur(string $numeroCompteur, int $limit = 10): array;
}
