<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240419150511 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE horraire ADD lundi_m VARCHAR(255) NOT NULL, ADD mercredi_m VARCHAR(255) NOT NULL, ADD mercredi_s VARCHAR(255) NOT NULL, DROP lundiM, DROP merdredi_m, DROP merdredi_s');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE horraire ADD lundiM VARCHAR(255) NOT NULL, ADD merdredi_m VARCHAR(255) NOT NULL, ADD merdredi_s VARCHAR(255) NOT NULL, DROP lundi_m, DROP mercredi_m, DROP mercredi_s');
    }
}
